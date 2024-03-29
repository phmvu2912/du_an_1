<?php

function detailsShow($id) {
    $product = showOneProduct('san_pham', $id);

    $feedbacks = listCommentById('binh_luan', $id);

    

    // debug($feedbacks);die;



    $title = 'Chi tiết sản phẩm';
    $view = 'layouts/details';

    require_once PATH_VIEW . 'layouts/master.php';
}


