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


function postComment() {
    $user_id = $_SESSION['user']['id_nguoi_dung'];

        if(isset($_SESSION['user'])) {
            $data = [
                'id_sp' => $_POST['id_sp'],
                'id_nguoi_dung' => $user_id,
                'noi_dung' => $_POST['content']
            ];

            insert('binh_luan', $data);

            header('Location: ' . BASE_URL . '?act=details&id=' . $data['id_sp']);
            exit;
        }

        // debug($data);die;
    
}