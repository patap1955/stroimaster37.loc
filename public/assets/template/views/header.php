<header class="header" role="banner">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="/img/logoSM.png" alt="СтройМастер37">
            </a>
        </div>
        <div class="header-widgets  header-widgets-desktop">
            <div class="widget widget-icon-box">
                <a href="tel:+79612469077" class="icon-box">
                    <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">+7-961-246-90-77</h4>
                        <span class="icon-box__subtitle">stroimaster37ivanovo@yandex.ru</span>
                    </div>
                </a>
            </div>
            <!--<div class="widget  widget-icon-box">
                <div class="icon-box">
                    <i class="fa  fa-home  fa-3x"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">г. Иваново</h4>
                        <span class="icon-box__subtitle">ул. Станко, д.1</span>
                    </div>
                </div>
            </div>-->
            <div class="widget  widget-icon-box">
                <div class="icon-box">
                    <i class="fa  fa-clock-o  fa-3x"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">Пон - Суб 8.00 - 18.00</h4>
                        <span class="icon-box__subtitle">Воскресен - выходной</span>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#buildpress-navbar-collapse">
            <span class="navbar-toggle__text">MENU</span>
            <span class="navbar-toggle__icon-bar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
        </button>
    </div>
    <div class="sticky-offset  js-sticky-offset"></div>
    <div class="container">
        <div class="navigation" role="navigation">
            <div class="navbar-collapse collapse" id="buildpress-navbar-collapse" aria-expanded="false">
                <ul id="menu-main-menu" class="navigation--main  js-dropdown">
                    <?php $menu = getMenu(); ?>
                    <?php foreach ($menu as $item): ?>
                     <li id="menu-item" class="menu-item-type-post_type menu-item-object-page menu-item">
                        <a href="<?= $item['path'] ?>"><?= $item['title'] ?></a>
                        <?php if ($item['id'] == 2): ?>
                        <ul  class="sub-menu">
                            <?php foreach (getCategories() as $item) : ?>
                            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                                <a href="<?= $item['path'] ?>"><?= $item['title'] ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</header>
