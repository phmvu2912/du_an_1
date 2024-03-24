<?php

function productsAdmin()
{
    $dataProducts = listAllProducts('san_pham');
    // debug($dataProducts);

    require_once PATH_VIEW . 'admin/products.php';
}

function importOneProduct() {

    require_once PATH_VIEW . 'admin/add_product.php';
}