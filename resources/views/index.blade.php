@extends('layouts.master')
@section('title', 'СтройМастер37')
@section('description', 'Главная страница строительной компании СтройМастер37.Ремонтные отделочные работы в сфере строительных услуг')
@section('carousel')
    @include('layouts.carousel')
@endsection
@section('content')
    <main class="col-xs-12" role="main">
        <div class="row">
            <div class="col-xs-12">
                <article class="post-2573 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div id="pl-2573" class="panel-layout">
                            @include('layouts.message_success')
                            <h1>СтройМастер37<small> Строительная компания г.Иваново</small></h1>
                            <hr>
                            <div class="col-lg-6">
                                <p>Строительная компания СтройМастер37 работает в сфере строительных услуг города Иваново уже более 10 лет.За все время на строительном рынке мы зарекомендовали себя как надежный и ответсвенный подрядчик.Основной нашей направленностью является отделка и ремонт квартир с гарантией качества.</p>
                                <p>Мы обладаем большим опытом в разных сферах строительства.Мастера нашей компании произведут ремонт пола,отделку потолка или стен на высшем уровне.Так же в нашей организации имеются хорошие мастера по сантехническим работам , электромонтажу и бытовым услагам.Наши специалисты обеспечат оперативность, организуют весь процесс и проследят за выполнением задач,которые вы нам поставили,на высоком уровне.</p>
                                <p>Наша компания постоянно совершенствует свои навыки,путем изучения новых технологий.Наши специалисты умеют работать со всеми современными стройматериалами,благодаря чему,мы достигаем самого наивысшего качество в своей деятельности.</p>
                                <p>Более подробно о всех наших услугах,контактов и с нашими ценами,вы можите ознакомится на нашем сайте СтройМастер37.Мы внимательно следим за актуальностью всей информации и постоянно ее обновляем.</p>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/fotoAboutAs.jpg') }}" alt="СтройМастер" style="width: 555px; height: 383px;" >
                            </div>
                            <div class="clear"></div>
                            <hr>
                            <h3>Что мы предлогаем</h3>
                            <hr />
                            <div id="pg-2573-30" class="panel-grid panel-no-style">
                                <div id="pgc-2573-30-0" class="panel-grid-cell">
                                    <div id="panel-2573-30-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="71">
                                        <div class="panel-widget-style panel-widget-style-for-2573-30-0-0">
                                            <div class="textwidget">
                                                <img id="imgOrder" src="{{ asset('assets/img/kosmRem.png') }}" style="width: 232px; height: 160px;">
                                                <h6>Косметический ремонт</h6>
                                                <hr class="hr--dotted">
                                                <p><span class="TextRun SCX67306600" lang="EN-US" xml:lang="EN-US"><span class="NormalTextRun SCX67306600">Бюджетный ремонт с минимальными затратами на стройматериалы и оплату за работу и идеально подходит для:</span></span></p>
                                                <hr>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта в новостройке</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта одной комнаты</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Предпродажной подготовки</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта офиса</strong></span></p>
                                                <hr class="hr--dotted">
                                                <p style="text-align: center"><a class="btn  btn-primary" data-toggle="modal" data-target="#myModal">Вызвать на замер</a></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Модельное окно  -->
                                @include('layouts.model_window_index')
                                <!--  Модельное окно  -->
                                </div>
                                <div id="pgc-2573-30-0" class="panel-grid-cell">
                                    <div id="panel-2573-30-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="71">
                                        <div class="panel-widget-style panel-widget-style-for-2573-30-0-0">
                                            <div class="textwidget">
                                                <img id="imgOrder" src="{{ asset('assets/img/kapRem.png') }}" style="width: 232px; height: 160px;">
                                                <h6>Капитальный ремонт</h6>
                                                <hr class="hr--dotted">
                                                <p><span class="TextRun SCX67306600" lang="EN-US" xml:lang="EN-US"><span class="NormalTextRun SCX67306600">Полноценный ремонт с полной заменой сантехники и эликтрики(или прокладки новой).Идеально подходити для:</span></span></p>
                                                <hr>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта в новостройке</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта коттеджа</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта частного дома</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Других помещений</strong></span></p>
                                                <hr class="hr--dotted">
                                                <p style="text-align: center"><a class="btn  btn-primary" data-toggle="modal" data-target="#myModal" >Вызвать на замер</a></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pgc-2573-30-0" class="panel-grid-cell">
                                    <div id="panel-2573-30-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="71">
                                        <div class="panel-widget-style panel-widget-style-for-2573-30-0-0">
                                            <div class="textwidget">
                                                <img id="imgOrder" src="{{ asset('assets/img/dizProekt.png') }}" style="width: 232px; height: 160px;">
                                                <h6>По дизайн-проекту</h6>
                                                <hr class="hr--dotted">
                                                <p><span class="TextRun SCX67306600" lang="EN-US" xml:lang="EN-US"><span class="NormalTextRun SCX67306600">Ремонт по дизайн-проекту - это полное воплощение своей индивидуальности и идей в жизнь.Идеально подходит для:</span></span></p>
                                                <hr>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта в новостройке</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонта коттеджа</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Ремонт частного дома</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Других помещений</strong></span></p>
                                                <hr class="hr--dotted">
                                                <p style="text-align: center"><a class="btn  btn-primary" data-toggle="modal" data-target="#myModal">Вызвать на замер</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pgc-2573-30-0" class="panel-grid-cell">
                                    <div id="panel-2573-30-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="71">
                                        <div class="panel-widget-style panel-widget-style-for-2573-30-0-0">
                                            <div class="textwidget">
                                                <img id="imgOrder" src="{{ asset('assets/img/butRem.png') }}" style="width: 232px; height: 160px;">
                                                <h6>Бытовой ремонт</h6>
                                                <hr class="hr--dotted">
                                                <p><span class="TextRun SCX67306600" lang="EN-US" xml:lang="EN-US"><span class="NormalTextRun SCX67306600">Наши мастера выполнят услуги по мелкому бытовому ремонту(муж на час) не дорого и в кротчайшие сроки,такие как:</span></span></p>
                                                <hr>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Замена электроприборов</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Установка бытой техники</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Замена сантехники</strong></span></p>
                                                <p class="textInfo" style="text-align: left"><span style="color: #888888"><strong><span class="icon-container"><span class="fa fa-check"></span></span> &nbsp;&nbsp;Сборка мебели и тд</strong></span></p>
                                                <hr class="hr--dotted">
                                                <p style="text-align: center"><a class="btn  btn-primary" data-toggle="modal" data-target="#myModal">Вызвать мастера</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <h2>
                                Как мы работаем
                            </h2>
                            <div class="row">
                                <div class="work col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="{{ asset('assets/img/phone_72.png') }}" alt="Звонок">
                                    <p>Вы приходите к нам в офис или оставляете заявку на нашем сайте</p>
                                </div>
                                <div class="work col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="{{ asset('assets/img/prorab-72.png') }}" alt="Прораб">
                                    <p>Наш сотрудник связывается с вами и выезжает на замер в удобное для вас время</p>
                                </div>
                                <div class="work col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="{{ asset('assets/img/calculator.png') }}" alt="Смета">
                                    <p>Мы состовляем подробную смету</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="work col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="{{ asset('assets/img/smeta_72.png') }}" alt="Договор">
                                    <p>Вы приезжаете к нам в офис и мы подписываем договор подряда</p>
                                </div>
                                <div class="work col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="{{ asset('assets/img/work.png') }}" alt="Работа">
                                    <p>Наши специалисты начинают работу</p>
                                </div>
                                <div class="work col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <img src="{{ asset('assets/img/finish.png') }}" alt="Сдача объекта">
                                    <p>Встречаемся вместе на объекте и Вы принимаете работу</p>
                                </div>
                            </div>
                            <hr>
                            <h2>Почему наши клиенты выбрали именно нас?</h2>
                            <div class="row">
                                <div class="klient col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="image">
                                        <li>Работу выполняем качественно<p>Производим контроль на всех этапах работ</p></li>
                                        <li>Даем гарантию на все виды наших работ<p>Мы уверенны в своих специалистах,поэтому на нечего бояться оставляя гаринтию</p></li>
                                        <li>Адекватные цены на все работы<p>У нас средние цены по городу Иваново при выском качестве работ</p></li>
                                    </ul>
                                </div>
                                <div class="klient col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="image">
                                        <li>Бесплатная консультация и выезд на замер<p>Наш специалист приконсультирует Вас и приедет на замер в удобное для Вас время</p></li>
                                        <li>Заключение договора<p>Заключаем договор подряда на ремонтно строительные работы</p></li>
                                        <li>Высокая квалификация<p>Все мастера имеют высокую квалификацию и постоянно совершенствуют свои навыки</p></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>

@endsection


