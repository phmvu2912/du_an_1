<?php
session_start();
// Require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [
    'cart-add',
    'cart-list',
    'cart-del',

    'order-checkout',
    'order-purchase',
    'order-status',

    'comment-post',

    'profile',
    'profile-edit',
];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    //Authen
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
    'register' => authenRegister(),

    // Routers Client
    '/' => homeIndex(),

    'shop' => shopList(),
    // 'about' => aboutShow(),

    // Tin tức
    'news' => newsList(),
    'news-details' => newsDetail($_GET['id']),

    // Chi tiết sản phẩm
    'details' => detailsShow($_GET['id']),
    'comment-post' => postComment(),

    // giỏ hàng
    'cart-add' => cartAdd($_GET['id'], $_GET['quantity']),
    'cart-list' => cartList(),
    'cart-inc' => cartInc($_GET['id']),
    'cart-dec' => cartDec($_GET['id']),
    'cart-del' => cartDel($_GET['id']),

    // Đặt hàng
    'order-checkout' => orderCheckout(),
    'order-purchase' => orderPurchase(),
    'order_status' => orderStatus(),
    'order_cancel' => orderCancel($_GET['id']),
    'order_delete' => orderDelete($_GET['id']),
    'order_confirm_received' => orderConfirmReceived($_GET['id']),


    
    
    'select-voucher' => selectVoucher(),
    'online-payments' => onlinePayments(),
    'thanks' => thanksPage(),
    
    // Trang cá nhân
    'profile' => profilePage(),
    'profile-edit' => profileEdit($_GET['id']),
    
    'order_uncomfirm' => orderUncomfirm($_GET['id']),
    'order_shipping' => orderShipping($_GET['id']),
    'order_delivered' => orderDelivered($_GET['id']),
    'order_comfirmed' => orderComfirmed($_GET['id']),
    
};

require_once './commons/disconnect-db.php';