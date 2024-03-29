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
    'admin',

    'products','products-edit','products-add','products-delete','products-details',

    'catalogues','catalogues-add','catalogues-edit','catalogues-delete',

    'users','users-details','users-add','users-edit','users-delete',

    'news','news-edit','news-add','news-delete',

    'vouchers','vouchers-edit','vouchers-add','vouchers-delete','vouchers-details',
   
];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
    '/' => dashboard(),

    // Authen
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),

    // Routers Sản phẩm
    'products' => productsListAll(),
    'products-edit' => productsEdit($_GET['id']),
    'products-add' => productsCreate(),
    'products-delete' => productsDelete($_GET['id']),
    'products-details' => productsListOne($_GET['id']),

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

    // Routers Bài viết, tin tức
    'news' => newsListAll(),
    'news-edit' => newsEdit($_GET['id']),
    'news-add' => newsCreate(),
    'news-delete' => newsDelete($_GET['id']),

    // Routers Khuyến mại
    'vouchers' => vouchersList(),
    'vouchers-edit' => voucherEdit($_GET['id']),
    'vouchers-add' => voucherCreate(),
    'vouchers-delete' => voucherDelete($_GET['id']),
    'vouchers-details' => voucherListOne($_GET['id']),
};

require_once '../commons/disconnect-db.php';