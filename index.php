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
    'cart-inc',
    'cart-dec',
    'cart-del',

    'order-checkout',
    'order-purchase',
    'order-status'
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
    // 'news' => newsList(),

    // Chi tiết sản phẩm
    'details' => detailsShow($_GET['id']),
    // 'comment-post' => postComment($_GET['id']),

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
};

require_once './commons/disconnect-db.php';