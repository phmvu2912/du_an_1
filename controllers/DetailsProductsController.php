<?php

function detailsShow($id) {
    $product = showOneProduct('san_pham', $id);

    $id_dm = $product['id_danh_muc'];

    $feedbacks = listCommentById('binh_luan', $id);

    $listProductsByIdCatalog = listAllProductsByIdCatalog('san_pham', $id_dm);

    // debug($listProductsByIdCatalog);

    // debug($feedbacks);die;



    $title = 'Chi tiết sản phẩm';
    $view = 'layouts/details';

    require_once PATH_VIEW . 'layouts/master.php';
}


