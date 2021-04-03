<div class="entry-content">
    <div id="pl-2573" class="panel-layout">
        <br><br>
        <hr>
        <h1>СтройМастер<small> <?= $pageData['title'] ?></small></h1>
        <hr>
        <?= $pageData['text'] ?>
    </div>



</div>

<div class="entry-content">
    <div class="cssSlider">
        <?php foreach (getGallary() as $item) : ?>
        <figure class="gallery" style="float: left; margin-right: 20px"><img src="/upload/gallary/<?=$item['name']?>" width="350" height="350"></figure>
        <?php endforeach; ?>
    </div>
</div>
