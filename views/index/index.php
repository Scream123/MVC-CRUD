<div class="table table-responsive">

    <div id="blockAddEditProduct"></div>
    <caption>Добавить книгу</caption>
    <a href="http://<?= CURRENT_URL ?>/deletedbook"
    <button type="button" class="btn btn-sm btn-info deleted-book">Просмотр удаленных записей</button>
    </a>

    <table id="create-item-list" class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th scope="col">Название книги</th>
            <th scope="col">Автор</th>
            <th scope="col">дата публикации</th>
            <th scope="col">Добавить</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" id="itemName" value=""  /></td>
            <td><input type="text" id="itemAuthor" value="" required /></td>
            <td><input type="date" id="itemDate" value="" required /></td>
            <td><input type="button" class="btn btn-primary btn-sm" id="addProduct" value="Добавить"/></td>
        </tr>
        </tbody>
    </table>

    <caption>Cписок книг</caption>
    <table id="book-list" class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название книги</th>
            <th scope="col">Автор</th>
            <th scope="col">дата публикации</th>
            <th scope="col">Сохранить</th>
            <th scope="col">Просмотр</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($bookList as $list): ?>
            <tr class="tr-list-book">
                <td class="book_id" data-id="<?= $list['book_id'] ?>"></td>
                <td>
                    <input id="name_<?= $list['book_id'] ?>" type="text" class="tdId form-control"
                           value="<?= $list['name'] ?>" required/>
                </td>
                <td>
                    <input id="author_<?= $list['book_id'] ?>" type="text" class="tdId form-control"
                           value="<?= $list['author'] ?>" required/>
                </td>
                <td>
                    <input id="date_<?= $list['book_id'] ?>" type="date" class="tdId form-control"
                           value="<?= $list['published_date'] ?>" required/>
                </td>
                <td><input type="button" id="updateBook" class="btn btn-success btn-sm updateBook" value="Сохранить"/>

                </td>
                <td><input type="button" class="btn btn-info btn-sm showBook" id="<?= 'itemName_' . $list['book_id'] ?>"
                           value="Просмотр книги"/>
                </td>
                <td><input type="button" id="deleteBook" class="btn btn-danger btn-sm deleteBook" value="Удалить"/></td>
            </tr>


            <tr class="hideme-book" id="bookPage_<?= $list['book_id'] ?>">
                <td class="book_id" data-id="<?= $list['book_id'] ?>"></td>
                <td>
                    <input id="name_<?= $list['book_id'] ?>" type="text" class="tdId form-control"
                           value="<?= $list['name'] ?>"/>
                </td>
                <td>
                    <input id="author_<?= $list['book_id'] ?>" type="text" class="tdId form-control"
                           value="<?= $list['author'] ?>"/>
                </td>
                <td>
                    <input id="date_<?= $list['book_id'] ?>" type="date" class="tdId form-control"
                           value="<?= $list['published_date'] ?>"/>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
