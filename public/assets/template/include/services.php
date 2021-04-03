
<div class="entry-content">
    <div class="col-lg-3">
        <div>
            <ul class="cat">
                <?php foreach (uslugiData() as $item) : ?>
                    <li>
                        <a href="<?= $item['path'] ?>"><?= $item['title']?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
    <div class="col-lg-9">
        <div id="pl-2573" class="panel-layout">
            <br><br>
            <hr>
            <?php
                if ($url == '/services/') {
                    $pageData = pageData($url);
                } else {
                    $pageData = uslugiGet($url);
                }
            ?>
            <h1>СтройМастер<small> <?= $pageData['title'] ?></small></h1>
            <hr>
            <?= $pageData['text'] ?>
        </div>
    </div>
</div>
