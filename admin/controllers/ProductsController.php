<?php

function showProducts() {
    $products = listAllProducts('san_pham');

    // debug($products);
    
    $title = 'Quản lý sản phẩm';
    $view = 'products';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}