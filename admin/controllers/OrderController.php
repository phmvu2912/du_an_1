<?php

function ordersList() {
    $order = listAllOrders('don_hang');

    // debug($order);die;

    $view = 'orders/index';
    $title = 'Danh sách đơn hàng';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function orderDetails($id) {

    $order = listOrderItemsByIdOrder($id);
    
    
    // debug($order);die;


    $view = 'orders/details';
    $title = 'Chi tiết đơn hàng';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}


function orderEdit($id) {

    $order = listOrderItemsByIdOrder($id);

    if(!empty($_POST)) {
        $data = [
            'ten_nguoi_nhan' => $_POST['username'],
            'dia_chi_nguoi_nhan' => $_POST['location'],
            'sdt_nguoi_nhan' => $_POST['phone'],
            'email_nguoi_nhan' => $_POST['email'],
            'trang_thai_giao_hang' => $_POST['statusDelivery'],
            'trang_thai_thanh_toan' => $_POST['statusPayment'],
        ];

        // debug($data);die;
        updateOneOrder('don_hang', $id, $data);

        // Điều hướng
        header('Location: ' . BASE_URL_ADMIN . '?act=orders-edit&id=' . $id);

        exit();
    }

    

    $view = 'orders/update';
    $title = 'Cập nhật đơn hàng';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
