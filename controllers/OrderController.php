<?php

function orderCheckout()
{
    $vouchers = listAllVouchers('khuyen_mai');

    // debug($vouchers);die;

    if (isset($_SESSION['cart'])) {
    }


    $title = 'Đặt hàng';
    $view = 'layouts/order';

    require_once PATH_VIEW . 'layouts/master.php';
}

// function orderPurchase()
// {
//     // debug($_SESSION['cartID']);die;
//     if (!empty($_POST) && !empty($_SESSION['cart'])) {
//         $data = $_POST;

//         $totalPrice = 0;
//         $total = 0;
//         foreach ($_SESSION['cart'] as $item) {
//             $total = $item['gia_sp'] * $item['quantity'];
//             $totalPrice += $total;
//         }

//         $data['id_nguoi_dung']          = $_SESSION['user']['id_nguoi_dung'];
//         $data['tong_tien']              = $totalPrice;
//         $data['trang_thai_giao_hang']   = STATUS_DELIVERY_WFC;
//         $data['trang_thai_thanh_toan']  = STATUS_PAYMENT_UNPAID;

//         // debug($data);die;

//         $orderId = insert_get_last_id('don_hang', $data);

//         foreach ($_SESSION['cart'] as $id => $item) {
//             $orderItem = [
//                 'id_don_hang' => $orderId,
//                 'id_sp' => $id,
//                 'so_luong' => $item['quantity'],
//                 'don_gia' => $item['gia_sp']
//             ];

//             insert('chi_tiet_don_hang', $orderItem);
//         }

//         deleteCartItemByCartId($_SESSION['cartID']);
//         deleteCart('gio_hang', $_SESSION['cartID']);

//         unset($_SESSION['cart']);
//         unset($_SESSION['cartID']);


//         header('Location: ' . BASE_URL . '?act=order-status');
//         exit();
//     }

// }

function orderPurchase()
{
    //if (isset($_POST['orderAdd'])) {
    $user_id = $_SESSION['user']['id_nguoi_dung'];

    // $cartUser = getCartByUserID($user_id);

    // // debug($cartUser);die;

    // $orderData = [
    //     'id_nguoi_dung' => $user_id,
    //     'ten_nguoi_nhan' => $_POST['username'],
    //     'email_nguoi_nhan' => $_POST['email'],
    //     'sdt_nguoi_nhan' => $_POST['phone'],
    //     'dia_chi_nguoi_nhan' => $_POST['location'],
    //     'tong_tien' => $_POST['totalBill'],
    //     'trang_thai_giao_hang' => 0,
    //     'trang_thai_thanh_toan' => 1,
    // ];
    $orderData = $_SESSION['bill'];

    $cartUser = getCartByUserID($user_id);

    if (!empty($cartUser)) {
        createOrder($orderData);

        remoteAllCartItem($cartUser['id_nguoi_dung']);

        deleteCart('gio_hang', $cartUser['id_nguoi_dung']);
        unset($_SESSION['bill']);
        unset($_SESSION['cart']);
    }

    header('Location: ' . BASE_URL . '?act=order_status');
    // }
}


function createOrder($orderData)
{
    $order_id = insert_get_last_id('don_hang', $orderData);


    if ($order_id !== null) {
        $cartItems = $_SESSION['cart'];

        // debug($cartItems);die;


        foreach ($cartItems as $item) {
            $product = showOneProduct('san_pham', $item['id_sp']);

            $priceProduct = $product['gia_sp'];

            $newOrderItem = [
                'id_don_hang' => $order_id,
                'id_sp' => $item['id_sp'],
                'so_luong' => $item['quantity'],
                'don_gia' => $priceProduct,
            ];

            insert('chi_tiet_don_hang', $newOrderItem);
        }

        // echo "<script>alert('Đặt hàng thành công')</script>";
    }

    // header('Location: ' . BASE_URL . '?act=order_status');
    // exit();
}

function orderStatus()
{
    $id_user = $_SESSION['user']['id_nguoi_dung'];

    $statusOrder = listStatusOrderByIdUser('don_hang', $id_user);

    //debug($_GET);die;

    // if ($_GET['resultCode'] == 0) {
    //     orderPurchase();
    // }

    $title = 'Tình trạng đơn hàng';
    $view = 'layouts/order_status';

    require_once PATH_VIEW . 'layouts/master.php';
}



function orderCancel($id)
{
    cancelOrderById('don_hang', $id);

    header('Location: ' . BASE_URL . '?act=order_status');
}

function orderDelete($id)
{
    deleteOrderById('don_hang', $id);

    header('Location: ' . BASE_URL . '?act=order_status');
}

function orderConfirmReceived($id)
{
    confirmReceivedOrderById('don_hang', $id);

    header('Location: ' . BASE_URL . '?act=order_status');
}