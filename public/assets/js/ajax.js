$(document).ready(function(){

    $("#onclickInputPrice*").click( function () {
        var id = $(this).children('div').attr('id');
        var price = $(this).children('div').text();
        $(this).children('div').html(
            "<input " +
            "value='"+price+"' " +
            "id='ajaxInputPrice' " +
            "class='form-control' " +
            "type='text'" +
            ">"
        );
        $('#ajaxInputPrice').focus();
        $('#ajaxInputPrice').blur(function () {
            var price = $(this).val();
            var id = $(this).parent().attr('id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/admin/prices/update-price-for-service/" +id,
                type: 'POST',
                data : {price:price},
                complete: function (data) {
                    var res = JSON.parse(data.responseText);
                    if (res.success) {
                        $('#ajaxInputPrice').parent().html(res.price);
                    }
                }
            });
        });
    });
});
