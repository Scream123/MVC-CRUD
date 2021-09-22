<?php

use Models\Books as Books;

require_once ROOT . '/models/Books.php';

class DeletedBookController
{
    public function actionShowList()
    {
        $bookList = Books::getListDeleted();

        require_once ROOT . '/views/layouts/header.php';
        require_once ROOT . '/views/deleted-book/deleted-book.php';
        require_once ROOT . '/views/layouts/footer.php';

        return $bookList;
    }

    public function actionRestoreBook()
    {
        $bookId = isset($_POST['id']) ? intval($_POST['id']) : null;

        if (!$bookId) exit();

        $restoreBook = Books::restoreBook($bookId);

        if ($bookId) {
            $resData['success'] = 1;
            $resData['message'] = 'Запись восстановлена';

        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Ошибка восстановления записи';
        }

        echo json_encode($resData);
    }
}