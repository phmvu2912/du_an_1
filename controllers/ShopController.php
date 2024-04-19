<?php

function shopList()
{
    $products = listAllProducts('san_pham');

    // debug($_POST);die;
    if (isset($_POST['btn'])) {
        $textSearch = $_POST['search'];
        // $new = $_POST['new'];
        // $old = $_POST['old'];
        // $high_to_low = $_POST['price_high_to_low'];
        // $low_to_high = $_POST['price_low_to_high'];

        // debug($low_to_high);die;


        $products = getProductsByName($textSearch);

        // debug(getProductsByName($textSearch));die;
    }

    // Số lượng sp
    $lenghtArr = count($products);

    // debug($lenghtArr);die;

    $title = 'Sản phẩm';
    $view = 'layouts/shop';

    require_once PATH_VIEW . 'layouts/master.php';
}