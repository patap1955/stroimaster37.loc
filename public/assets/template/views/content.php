</div>
<?php
if ($url == "/") {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/template/include/index.php";
} else {
    if ($uri == false) { ?>

        <div class="master-container">
            <div class="container">
                <div class="row">
                    <main class="col-xs-12" role="main">
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="post-2573 page type-page status-publish hentry">
                                    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/template/include/" . substr($url, 1, -1) . ".php" ; ?>
                                </article>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    <?php } else { ?>
<div class="master-container">
    <div class="container">
        <div class="row">
            <main class="col-xs-12" role="main">
                <div class="row">
                    <div class="col-xs-12">
                        <article class="post-2573 page type-page status-publish hentry">
                            <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/template/include/" . $uri . ".php" ; ?>
                        </article>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

    <?php }
}
?>
