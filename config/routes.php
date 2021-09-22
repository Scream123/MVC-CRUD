<?php
return [
    'restorebook' => 'deletedbook/restorebook', // actionRestoreBook  в DeletedBookController
    'deletedbook' => 'deletedbook/showlist', // actionShowList  в DeletedBookController
    'deleteproduct' => 'index/deleteproduct', // actionDeleteProduct  в IndexController
    'updateproduct' => 'index/updateproduct', // actionUpdateProduct в IndexController
    'addproduct' => 'index/addproduct', // actionAddProduct  в IndexController
    '^$' => 'index/ListProduct', // actionIndex в IndexController
];