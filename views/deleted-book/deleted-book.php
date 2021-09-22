<a href="http://<?= CURRENT_URL ?>/"
<button type="button" class="btn btn-sm btn-info deleted-book">Вернуться на главную страницу</button></a>
<div id="blockRestoreBook"></div>

<div class="container deletedList">
    <table id="book-list" class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название книги</th>
            <th scope="col">Автор</th>
            <th scope="col">дата публикации</th>
            <th scope="col">дата удалении</th>
            <th scope="col">Восстановить запись</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($bookList as $list): ?>
            <tr class="tr-list-book">
                <td class="book_id" data-id="<?= $list['book_id'] ?>"
                    class="tdId form-control"><?= $list['book_id'] ?></td>
                <td id="name_<?= $list['book_id'] ?>" class="tdId form-control">
                    <?= $list['name'] ?>
                </td>
                <td id="author_<?= $list['book_id'] ?>" lass="tdId form-control">
                    <?= $list['author'] ?>
                </td>
                <td id="date_<?= $list['book_id'] ?>" type="date" class="tdId form-control">
                    <?= $list['published_date'] ?>
                </td class="tdId form-control">
                <td>
                    <?= $list['deleted_at'] ?>
                </td>
                <td><input type="button" class="btn btn-success btn-sm restoreBook" value="Восстановить"/>

                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>