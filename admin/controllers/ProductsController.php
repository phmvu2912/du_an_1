<?php

// List All
function productsListAll() {
    $products = listAllProducts('san_pham');

    // debug($products);
    
    $title = 'Quản lý sản phẩm';
    $view = 'products/index';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Edit
function productsEdit($id) {
    $products = showOneProduct('san_pham', $id);
    $catalogues = listAllCatalog('danh_muc');

    // Submit
    if(!empty($_POST)) {
        // debug($_POST);
        $data = [
            'ten_sp' => $_POST['name'],
            'thumbnail' => $_POST['thumbnail'],
            'gia_sp' => $_POST['price'],
            'id_danh_muc' => $_POST['catalogues'],
            'mo_ta' => $_POST['description'],
        ];

        insert('san_pham', $data);

        // Điều hướng

        header('Location: ' . BASE_URL_ADMIN . '?act=products-edit&id=' . $id);

        exit();
    }

    $title = 'Cập nhật sản phẩm';
    $view = 'products/update';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Create
function productsCreate() {
    // Chọn danh mục
    $catalogues = listAllCatalog('danh_muc');   

    // Submit
    if(!empty($_POST)) {
        // debug($_POST);
        $data = [
            'ten_sp' => $_POST['name'],
            'thumbnail' => $_POST['thumbnail'],
            'gia_sp' => $_POST['price'],
            'id_danh_muc' => $_POST['catalogues'],
            'mo_ta' => $_POST['description'],
        ];

        insert('san_pham', $data);

        // Điều hướng

        header('Location: ' . BASE_URL_ADMIN . '?act=products');

        exit();
    }

    $title = 'Thêm mới sản phẩm';
    $view = 'products/create';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Delete
function productsDelete($id) {

    deleteProduct('san_pham', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=products');
}
