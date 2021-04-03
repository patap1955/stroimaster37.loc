<div class="entry-content">
    <div id="pl-2573" class="panel-layout">
        <br><br>
        <hr>
        <h1>СтройМастер<small> <?= $pageData['title'] ?></small></h1>
        <hr>
        <?= $pageData['text'] ?>
    </div>
    <div class="bs-example">
        <?php foreach (getCategoriesAdmin() as $item): ?>
        <h3><?= $item['title']; $catId = $item['id']; ?></h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th style="width: 60%">Наименование</th>
                <th style="width: 15%">Ед.Измерения</th>
                <th style="width: 15%">Цена за ед.</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (getPrice($catId) as $value) : ?>
            <tr>
                <td><?= $value['id']; ?></td>
                <td><?= $value['title']; ?></td>
                <td><?= $value['unit']; ?></td>
                <td><?= $value['price']; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
    </div>
</div>