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
    'cart',
    'addToCart',
    'remoteCartItem',
    'remoteCart',
    'order',
    'addOrder',
    'updateQuantity',
];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    // Routers Client
    '/' => homeIndex(),

    // Routers Admin 
    'admin' => homeAdmin(),
    'admin/products' => productsAdmin(),
    'admin/catalogues' => cataloguesAdmin(),
    'admin/product-add' => importOneProduct(),
};

require_once './commons/disconnect-db.php';