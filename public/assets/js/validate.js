$(document).ready(function(){

   // Начало валидации формы обратной связи
    var error = false;
    // Устанавливаем обработчик потери фокуса для всех полей ввода текста
    $('#name, #email, #subject, #text, #captcha').unbind().focusout( function(){
        // Для удобства записываем обращения к атрибуту и значению каждого поля в переменные
        var id = $(this).attr('id');
        var val = $(this).val();
        var code = $('#code').val();
        //alert(id);
        // После того, как поле потеряло фокус, перебираем значения id, совпадающие с id данного поля
       switch(id)
        {
            // Проверка поля "Имя"
            case 'name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                // Eсли длина имени больше 2 символов, оно не пустое и удовлетворяет рег. выражению,
                // то добавляем этому полю класс .not_error,
                // и ниже в контейнер для ошибок выводим слово " Принято", т.е. валидация для этого поля пройдена успешно

                if(val.length > 2 && val != '' && rv_name.test(val))
                {
                    $(this).removeClass('contactInput');
                    //$(this).addClass('not_error');
                    //$(this).css('border','2px solid #427103');
                    $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                    $(this).next().next('.errorInput').text(' ');
                }

                // Иначе, мы удаляем класс not-error и заменяем его на класс error, говоря о том что поле содержит ошибку валидации,
                // и ниже в наш контейнер выводим сообщение об ошибке и параметры для верной валидации

                else
                {
                    $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                    $(this).next().next('.errorInput').text('Поле "Ваше имя" обязательно для заполнения и должно содержать более чем два символа');
                    /*$(this).css('border','2px solid #d20404');
                    $('.info').html(
                        '<div class="alert alert-warning alert-dismissable">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+
                        '<strong>Предупреждение</strong><p>Поле "Имя" обязательно для заполнения и должно содержать более чем два символа</p>' +
                        '<p>Должно состоять из русских или латинских символов</p>' +
                        '</div>'
                    )*/
                    error = true;
                }
                break;

            // Проверка email
            case 'email':
                if(val != '')
                {
                    var rv_email = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

                    if(rv_email.test(val))
                    {
                        $(this).removeClass('contactInput');
                        $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                        $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                        $(this).next().next('.errorInput').text(' ');
                    }
                    else{
                        $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                        $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                        $(this).next().next('.errorInput').text('Вы ввели не корректный E-mail адресс');
                        error = true;
                    }

                }
                else
                {
                    $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                    $(this).next().next('.errorInput').text('Поле "E-mail" обязательно для заполнения');
                    error = true;
                }
                break;

            case 'subject':
                if(val != '')
                {
                    $(this).removeClass('contactInput');
                    $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                    $(this).next().next('.errorInput').text(' ');
                }
                else
                {
                    $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                    $(this).next().next('.errorInput').text('Поле "Тема письма" обязательно для заполнения');
                    error = true;
                }
                break;


            // Проверка поля "Сообщение"
            case 'text':
                if(val != '' && val.length < 5000)
                {
                    $(this).css('border','2px solid #427103');
                }
                else
                {
                    $(this).css('border','2px solid #d20404');
                    $('.info').html(
                        '<div class="alert alert-warning alert-dismissable">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+
                        '<strong>Предупреждение</strong><p>Поле "Текст сообщения" обязательно для заполнения</p>'+
                        '</div>'
                    )

                    error = true;
                }
                break;
           case 'captcha':
               if(val != '')
               {
                   if(val == code)
                   {
                       $(this).removeClass('contactInput');
                       $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                       $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                       $(this).next().next('.errorInput').text(' ');
                   }
                   else{
                       $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                       $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                       $(this).next().next('.errorInput').text('Символы с картинки не совпадают');
                       error = true;
                   }
               }
               else{
                   $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                   $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                   $(this).next().next('.errorInput').text('Вы не ввели символы с картинки');
                   error = true;
               }
               break;

        } /// end switch(...)

    }); /// end blur()
    // Конец валидации формы обратной связи

    // Теперь отправим наше письмо с помощью AJAX
   /*$('#go').on('click',function(e){

        // Запрещаем стандартное поведение для кнопки submit
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var text = $('#text').val();
        var date = $('#date').val();
        //var code = $('#code').val();
        //alert(code);

        // После того, как мы нажали кнопку "Отправить", делаем проверку,
        // если кол-во полей с классом .not_error равно 3 (так как у нас всего 3 поля), то есть все поля заполнены верно,
        // выполняем наш Ajax сценарий и отправляем письмо адресату

        if(error == false && name != '' && email != '' && subject != '' && text != '')
        {
            // Eще одним моментом является то, что в качестве указания данных для передачи обработчику send.php, мы обращаемся $(this) к нашей форме,
            // и вызываем метод .serialize().
            // Это очень удобно, т.к. он сразу возвращает сгенерированную строку с именами и значениями выбранных элементов формы.

            $.ajax({
                url: 'http://codeigniter4/pages/contact',
                type: 'post',
                method: 'POST',
                dataType: "json",
                data: {
                    name:name,
                    email:email,
                    subject:subject,
                    text:text,
                    date:date
                },

                beforeSend: function(xhr, textStatus){
                    $('#feedback-form :input').attr('disabled','disabled');
                },

                success: function(response){
                    $('#feedback-form :input').removeAttr('disabled');
                    $('#feedback-form :text, textarea').val('').removeClass().next('.error-box').text('');
                    alert(response);
                }
            });// // end ajax({...})
        }

        // Иначе, если количество полей с данным классом не равно значению 3, мы возвращаем false,
        // останавливая отправку сообщения в невалидной форме
        else
        {
            $('.info').html(
                '<div class="alert alert-warning alert-dismissable">' +
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+
                '<strong>Предупреждение</strong><p>Вся поля форм обязательны для заполнения</p>'+
                '</div>'
            );
            return false;
        }

    });*/ // end submit()

    $('#name, #email, #phone, #type_room, #area_room, #type_remont, #message,#verifyCode').unbind().focusout( function(){
        var id = $(this).attr('id');
        var val = $(this).val();
        var code = $('#captchaCode').val();

        switch(id)
        {
            case 'name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                if(val.length > 2 && val != '' && rv_name.test(val))
                {
                    $(this).removeClass('contactInput');
                    $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                    //$(this).next().next('').text(' ');
                }
                else
                {
                    $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                    //$(this).next().next('').text('Поле "Ваше имя" обязательно для заполнения и должно содержать более чем два символа');

                    error = true;
                }
                break;

            case 'email':
                if(val != '')
                {
                    var rv_email = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;

                    if(rv_email.test(val))
                    {
                        $(this).removeClass('contactInput');
                        $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                        $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                        $(this).next().next('.errorInput').text(' ');
                    }
                    else{
                        $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                        $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                        $(this).next().next('.errorInput').text('Вы ввели не корректный E-mail адресс');
                        error = true;
                    }

                }
                else
                {
                    $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                    $(this).next().next('.errorInput').text('Поле "E-mail" обязательно для заполнения');
                    error = true;
                }
                break;

            case 'phone':

                    $(this).removeClass('contactInput');
                    $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                    $(this).next().next('.errorInput').text(' ');


                break;

            case 'type_room':

                $(this).removeClass('contactInput');
                $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                $(this).next().next('.errorInput').text(' ');

                break;

            case 'area_room':

                $(this).removeClass('contactInput');
                $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');

                $(this).next('.errorInput').text(' ');

                break;

            case 'type_remont':

                $(this).removeClass('contactInput');
                $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                $(this).next().next('.errorInput').text(' ');

                break;

            case 'message':

                $(this).css('border','1px solid #427103');
                $(this).next('.errorInput').text(' ');

                break;

            case 'verifyCode':
                if(val != '')
                {
                    if(val == code)
                    {
                        $(this).removeClass('contactInput');
                        $(this).parent('.form-group').removeClass('contactInput').removeClass('has-warning has-feedback').addClass('has-success has-feedback');
                        $(this).next().removeClass().addClass('glyphicon glyphicon-ok form-control-feedback');
                        $(this).next().next('.errorInput').text(' ');
                    }
                    else{
                        $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                        $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                        $(this).next().next('.errorInput').text('Символы с картинки не совпадают');
                        error = true;
                    }
                }
                else{
                    $(this).parent('.form-group').removeClass('has-success has-feedback').removeClass('contactInput').addClass('has-warning has-feedback');
                    $(this).next().removeClass().addClass('glyphicon glyphicon-warning-sign form-control-feedback');
                    $(this).next().next('.errorInput').text('Вы не ввели символы с картинки');
                    error = true;
                }
                break;
        }
    })

}); // end script
