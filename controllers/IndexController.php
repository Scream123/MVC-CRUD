<?php

use Models\Books as Books;

require_once ROOT . '/models/Books.php';

/**
 * Class IndexController
 */
class  IndexController
{
    /**
     * display product list
     * First Controller
     */
    public function actionListProduct()
    {
        $bookList = Books::getAll();


        require_once ROOT . '/views/layouts/header.php';
        require_once ROOT . '/views/index/index.php';
        require_once ROOT . '/views/layouts/footer.php';

        return $bookList;
    }

    /**
     * add new product
     */
    public function actionAddProduct()
    {
        $itemName = isset($_POST['name']) ? $_POST['name'] : null;
        $itemAuthor = isset($_POST['author']) ? $_POST['author'] : null;
        $itemDate = isset($_POST['date']) ? $_POST['date'] : null;
        $res = Books::insertProduct($itemName, $itemAuthor, $itemDate);
        $book = Books::getLastBook();
        if ($res) {
            $resData['success'] = 1;
            $resData['message'] = 'Изменения успешно внесены';
            $resData['book_data'] = '<tr class="tr-list-book">
                                        <td class="book_id" data-id="' . $book['book_id'] . '">
                                           ' . $book['book_id'] . '
                                        </td>
                                        <td>
                                        <input  id="name_' . $book['book_id'] . '" type="text" class="tdId form-control" value="' . $book['name'] . '"/>
                                        </td>
                                        <td>
                                        <input  id="author_' . $book['book_id'] . '" type="text" class="tdId form-control" value=' . $book['author'] . '>
                                        </td>
                                        <td>
                                        <input  id="date_' . $book['book_id'] . '" type="date" class="tdId form-control" value=' . $book['published_date'] . '>
                                        </td>
                                        <td><input type="button" id="updateBook" class="btn btn-success btn-sm updateBook" value="Сохранить"/>
                                        </td>
                                        <td><input type="button" class="btn btn-info btn-sm" value="Просмотр книги"/>
                                        </td>
                                        <td><input type="button" id="deleteBook" class="btn btn-danger btn-sm deleteBook" value="Удалить"/>
                                        </td>
                                  </tr>';
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка изменения данных';
        }
        echo json_encode($resData);
    }

    /**
     * delete book
     */
    public function actionDeleteProduct()
    {
        $productId = isset($_POST['id']) ? intval($_POST['id']) : null;

        if (!$productId) exit();

        $res = Books::deleteProduct($productId);
        if ($res) {
            $resData['success'] = 1;
            $resData['message'] = 'товар удалён';
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'ошибка при удалении';

        }

        echo json_encode($resData);
    }


    /**
     *Update data of book
     */
    function actionUpdateProduct()
    {
        $itemId = trim(htmlspecialchars(htmlentities($_POST['id'])));
        $itemName = trim(htmlspecialchars(htmlentities($_POST['name'])));
        $itemAuthor = trim(htmlspecialchars(htmlentities($_POST['author'])));
        $itemDate = trim(htmlspecialchars(htmlentities($_POST['date'])));

        $res = Books::updateProduct($itemId, $itemName, $itemAuthor, $itemDate);

        if ($res) {
            $resData['success'] = 1;
            $resData['message'] = 'Изменения успешно внесены';

        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка изменения данных';
        }

        echo json_encode($resData);
    }


}
