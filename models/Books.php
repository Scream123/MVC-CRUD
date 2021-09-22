<?php


namespace Models;

use core\Database;

require_once ROOT . '/core/Database.php';

class Books
{
    /**
     * retrieving all records from DB
     * @return array
     */
    static public function getAll()
    {

        //connect with DB
        $db = Database::getConnect();
        $sql = "SELECT `book_id`,`name`, `author`, `published_date` FROM `books` WHERE  `deleted_at` IS NULL ORDER BY `book_id`";
        $result = $db->query($sql);
        $result->execute();
        return $result->fetchAll();
    }

    /**
     * retrieving last records
     * @return mixed
     */
    static public function getLastBook()
    {
        $db = Database::getConnect();
        $sql = "SELECT * FROM `books` WHERE `deleted_at`IS NULL ORDER BY `book_id` DESC LIMIT 1";
        $result = $db->query($sql);
        $result->execute();
        return $result->fetchAll()[0];
    }

    static public function insertProduct($itemName, $itemAuthor, $itemDate)
    {

        $db = Database::getConnect();

        $sql = "INSERT INTO books SET
         `name` = '{$itemName}',
         `author` = '{$itemAuthor}',
         `published_date` = '{$itemDate}'";

        return $db->query($sql);
    }

    /**
     * delete product from table in view
     * @param $bookId
     */
    static public function deleteProduct($bookId)
    {
        $db = Database::getConnect();
        $sql = "UPDATE books SET `deleted_at` = CURRENT_TIMESTAMP WHERE `book_id` = '{$bookId}'";

        $rs = $db->query($sql);
        return $rs;
    }

    /**
     *Update data of book
     *
     *
     */
    static public function updateProduct($itemId, $itemName, $itemAuthor, $itemData)
    {
        $db = Database::getConnect();

        $set = array();

        if ($itemName) {
            $set[] = "`name` = '{$itemName}'";
        }

        if ($itemAuthor) {
            $set[] = "`author` = '{$itemAuthor}'";
        }

        if ($itemData) {
            $set[] = "`published_date` = '{$itemData}'";
        }


        $setStr = implode(', ', $set);
        $sql = "UPDATE books SET {$setStr}
            WHERE `book_id` = '{$itemId}'";

        return $db->query($sql);


    }

    /**
     * retrieving deleted records
     * @return array
     */
    static public function getListDeleted()
    {
        //connect to DB
        $db = Database::getConnect();
        $sql = "SELECT * FROM `books` WHERE  `deleted_at` IS NOT NULL ORDER BY `book_id`";
        $result = $db->query($sql);
        $result->execute();
        return $result->fetchAll();
    }

    static public function restoreBook($bookId)
    {
        $db = Database::getConnect();
        $sql = "UPDATE books SET `deleted_at` = NULL  WHERE `book_id` = '{$bookId}'";

        return $db->query($sql);

    }
}

