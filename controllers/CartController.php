<?php

    
function cartAdd($id, $quantity = 0) {
    //Kiểm tra có product khớp id
    $product = showOneProduct('san_pham', $id);

    if(empty($product)) {
        debug('404 Not Found');
    }

    // Kiểm tra trong giỏ hàng đã có bản ghi nào thuộc user hay chưa
    // Nếu có -> lấy ra id || Chưa có -> tạo mới\
    $cartID = getCartID($_SESSION['user']['id_nguoi_dung']);

    $_SESSION['cartID'] = $cartID;
    // add vào session cart
    if(!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = $product;
        $_SESSION['cart'][$id]['quantity'] = $quantity;

        insert('chi_tiet_gio_hang', [
            'id_gio_hang' => $cartID,
            'id_sp'	=> $id,
            'so_luong'	=> $quantity,
        ]);
    } else {
        $_SESSION['cart'][$id]['quantity'] += $quantity;

        updateQuantityCartItem($cartID, $id, $_SESSION['cart'][$id]['quantity']);
    }

    // add tiếp vào cart chi tiết


    // Điều hướng ra trang giỏ hàng
    header('Location: ' . BASE_URL . '?act=cart-list');
}

   

function cartList() {
    
    $title = 'Giỏ hàng';
    $view = 'layouts/cart';

    require_once PATH_VIEW . 'layouts/master.php';
}

function cartDec($id) {
    // kiểm tra sp có tồn tại hay k
    $product = showOneProduct('san_pham', $id);

    if(empty($product)) {
        debug('404 Not Found');
    }
    
    // tăng số lượng +1
    if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] -= 1;

        updateQuantityCartItem($_SESSION['cart'], $id, $_SESSION['cart'][$id]['quantity']);
        header('Location: ' . BASE_URL . '?act=cart-list');
    }
}

function cartInc($id) {
    // kiểm tra sp có tồn tại hay k
    $product = showOneProduct('san_pham', $id);

    if(empty($product)) {
        debug('404 Not Found');
    }
    
    // tăng số lượng +1
    if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;

        updateQuantityCartItem($_SESSION['cart'], $id, $_SESSION['cart'][$id]['quantity']);
        header('Location: ' . BASE_URL . '?act=cart-list');
    }
}

function cartDel($id) {
    // kiểm tra sp có tồn tại hay k
    $product = showOneProduct('san_pham', $id);

    if(empty($product)) {
        debug('404 Not Found');
    }

    // Xóa
    if(isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);

        deleteCartItemByCartIdAndProductId($_SESSION['cartID'], $id);
        header('Location: ' . BASE_URL . '?act=cart-list');
    }


}
