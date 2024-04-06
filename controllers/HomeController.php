<?php

function homeIndex()
{
    $products = listAllProductsByDESC('san_pham');


    $posts = listAllBlog('bai_viet');

    // $catalogues = listAll('catalogues');

    // if (isset($_GET["search"])) {
    //     $catalogue_id = isset($_GET["catalogue_id"]) ? $_GET["catalogue_id"] : null;

    //     $product_name = isset($_GET["product_name"]) ? $_GET["product_name"] : null;

    //     $price_min = isset($_GET["price_min"]) ? $_GET["price_min"] : null;

    //     $price_max = isset($_GET["price_max"]) ? $_GET["price_max"] : null;

    //     $products = getSearchProduct($catalogue_id, $product_name, $price_min, $price_max);
    // }

    $title = 'Trang chủ';
    $view = 'home';
    
    require_once PATH_VIEW . 'layouts/master.php';
}

// function homeAdmin() {
    
//     require_once PATH_VIEW . 'admin/dashboard.php';
// }
