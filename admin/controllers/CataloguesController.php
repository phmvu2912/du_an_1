<?php

function cataloguesListAll() {
    $catalogues = listAllCatalog('danh_muc');

    // debug($catalogues);

    $title = 'Quản lý danh mục';
    $view = 'catalogues/index';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Create
function cataloguesCreate() {

    if(!empty($_POST)) {
        $data =[
            'ten_dm' => $_POST['name'],
        ];

        insert('danh_muc', $data);

        // Chuyển hướng
        header('Location: ' . BASE_URL_ADMIN . '?act=catalogues' );

        exit();
    }

    $title = 'Thêm mới danh mục';
    $view = 'catalogues/create';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Update
function cataloguesEdit($id) {
    $catalogues = showOneCatalog('danh_muc', $id);

    if(!empty($_POST)) {
        $data =[
            'ten_dm' => $_POST['name'],
        ];

        updateOneCatalog('danh_muc', $id, $data);

        // Chuyển hướng
        header('Location: ' . BASE_URL_ADMIN . '?act=catalogues-edit&id=' . $id);

        exit();
    }

    $title = 'Cập nhật danh mục';
    $view = 'catalogues/update';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Delete
function cataloguesDelete($id) {

    deleteCatalog('danh_muc', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=catalogues');

}
