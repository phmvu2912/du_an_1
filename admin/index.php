<?php
session_start();
// Require file trong commons
require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect-db.php';
require_once '../commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [

];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    '/' => dashboard(),

    // Routers Sản phẩm
    'products' => productsListAll(),
    'products-edit' => productsEdit($_GET['id']),
    'products-add' => productsCreate(),
    'products-delete' => productsDelete($_GET['id']),

    // Routers Danh mục
    'catalogues' => cataloguesListAll(),
    'catalogues-add' => cataloguesCreate(),
    'catalogues-edit' => cataloguesEdit($_GET['id']),
    'catalogues-delete' => cataloguesDelete($_GET['id']),
    // Routers Người dùng
    'users' => usersListAll(),
    'users-details' => usersListOne($_GET['id']),
    'users-add' => userCreate(),
    'users-edit' => userUpdate($_GET['id']),
    'users-delete' => userDelete($_GET['id']),
};

require_once '../commons/disconnect-db.php';