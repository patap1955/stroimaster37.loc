<div class="entry-content">
    <div id="pl-2573" class="panel-layout">
        <hr>
        <h1>СтройМастер<small> <?= $pageData['title'] ?></small></h1>
        <hr>
        <?= $pageData['text'] ?>
    </div>
    <div class="col-lg-3">
        <p><strong>Наши телефоны</strong></p>
        <p>+7-961-246-90-77</p>
        <p>+7-917-659-41-21</p>
        <p><strong>Наши Email</strong></p>
        <p>stroimaster37ivanovo@yandex.ru</p>
        <p><strong>Режим работы</strong></p>
        <p>пн-сб с 9-00 до 20-00</p>
        <p>Выезд на замеры,возможен в любое удобное для Вас время</p>
        <p>Компания ООО "СТРОЙМАСТЕР37" зарегестрированна и работает в г. Иваново</p>
    </div>
    <div class="col-lg-9">
        <div id="pl-2573" class="panel-layout">
            <p><strong>Контактная форма</strong></p>
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?= $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <form class="form-horizontal" role="form" method="post" action="/contact/">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ваше имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Ваше имя" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ваш Email адрес</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Текст сообщения</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" name="text"></textarea>
                    </div>
                </div>
                <input type="hidden" name="type" value="Обратная связь" >
                <input type="hidden" name="date" value="<?= date("d-m-Y") ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="sub">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

