<footer role="contentinfo">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-md-4">
                    <div class="widget  widget_text  push-down-30">
                        <h6 class="footer__headings">О нас</h6>
                        <div class="textwidget">
                            <img src="{{ asset('assets/img/logoSM.png') }}" alt="СтройМастер37">
                            Строительная компания СтройМастер37 работает в сфере строительных услуг города Иваново уже более 10 лет.За все время на строительном рынке мы зарекомендовали себя как надежный и ответсвенный подрядчик.Основной нашей направленностью является отделка и ремонт квартир с гарантией качества.
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12  col-md-4"><div class="widget  widget_nav_menu  push-down-30">
                        <h6 class="footer__headings">Меню</h6>
                        <div class="menu-top-menu-container">
                            <ul>
                                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                                    <a href="{{ route('page.index')}}">Главная</a>
                                </li>
                                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                                    <a href="#">Услуги</a>
                                    <ul  class="sub-menu">

                                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                                <a href=""></a>
                                            </li>

                                    </ul>
                                </li>
                                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                                    <a href="{{ route('page.prices')}}">Прайс-лист</a>
                                </li>
                                <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                                    <a href="{{ route('page.contacts')}}">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12  col-md-4">
                    <div class="widget  widget_text  push-down-30">
                        <h6 class="footer__headings">Заказать звонок</h6>
                        <div class="textwidget">
                            <form role="form" method="post" action="{{ route('feedback.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ваше имя</label>
                                    <input name="name" type="text" class="form-control" placeholder="Введите имя">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ваш телефон</label>
                                    <input name="phone" type="tel" class="form-control" placeholder="Введите телефон">
                                </div>
                                <input name="type" type="hidden" value="Заказ на звонок">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                            <div id="infoBlok"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div>Вся информация на сайте не является публичной офертой</div>
            <div>Все права защищены<strong> &copy; 2020 <a href="http://stroimaster37.ru/">СтройМастер37</a>.</strong></div>
        </div>
    </div>
    <noscript><div><img src="https://mc.yandex.ru/watch/64832959" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</footer>

