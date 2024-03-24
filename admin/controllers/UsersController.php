<?php

function usersListAll() {
    $users = listAllUsers('nguoi_dung');

    // debug($products);
    
    $title = 'Quản lý người dùng';
    $view = 'users/index';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
};

function usersListOne($id) {

};

function userCreate() {
    
    if(!empty($_POST)) {
        $data = [
            'ten_dang_nhap' => $_POST['user'],
            'ten_nguoi_dung' => $_POST['name'],
            'mat_khau' => $_POST['pass'],
            'dia_chi' => $_POST['location'],
            'sdt' => $_POST['phone'],
            'email' => $_POST['email'],
            'vai_tro' => $_POST['type'],
        ];

        insert('nguoi_dung', $data);

        // Điều hướng
        header('Location: ' . BASE_URL_ADMIN . '?act=users');

        exit();
    }

    $title = 'Thêm mới người dùng';
    $view = 'users/create';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
};

function userUpdate($id) {
    $user = showOneUser('nguoi_dung', $id);

    if(!empty($_POST)) {
        $data = [
            'ten_dang_nhap' => $_POST['user'],
            'ten_nguoi_dung' => $_POST['name'],
            'mat_khau' => $_POST['pass'],
            'dia_chi' => $_POST['location'],
            'sdt' => $_POST['phone'],
            'email' => $_POST['email'],
            'vai_tro' => $_POST['type'],
        ];

        updateOneUser('nguoi_dung', $id, $data);

        // Điều hướng
        header('Location: ' . BASE_URL_ADMIN . '?act=users-edit&id=' . $id);

        exit();
    }

    $title = 'Cập nhật người dùng';
    $view = 'users/update';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
};

function userDelete($id) {
    deleteUser('nguoi_dung', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=users');
};
