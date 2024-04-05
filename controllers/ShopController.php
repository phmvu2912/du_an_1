<?php

function shopList() {
    $products = listAllProducts('san_pham');


    // Số lượng sp
    $lenghtArr = count($products);

    // debug($lenghtArr);die;

    $title = 'Sản phẩm';
    $view = 'layouts/shop';

    require_once PATH_VIEW . 'layouts/master.php';
}