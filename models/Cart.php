<?php

function getCartID($userID)
{
    // Lấy dữ liệu trong DB

    if (empty($cart)) {
        return insert_get_last_id('gio_hang', [
            'id_nguoi_dung' => $userID,
        ]);
    }

    return $cart['id_gio_hang'];
}


// Lấy dữ liệu của giỏ hàng theo của người dùng
if (!function_exists('getCartByUserID')) {
    function getCartByUserID($user_id)
    {
        try {
            $sql = "SELECT * FROM gio_hang WHERE id_nguoi_dung = :id_nguoi_dung";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $user_id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy ra thông tất cả sản phẩm có trong giỏ hàng của khách hàng
if (!function_exists('getProductInCartItem')) {
    function getProductInCartItem($cart_id)
    {
        try {
            $sql = "SELECT * FROM chi_tiet_gio_hang WHERE id_gio_hang = :id_gio_hang AND id_sp = :id_sp";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_gio_hang", $cart_id);

            $stmt->bindParam(":id_sp", $_GET["id"]);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Cập nhật số lượng của sản phẩm trong giỏ hàng
if (!function_exists('updateQuantityCartItem')) {
    function updateQuantityCartItem($cartID, $id, $quantity)
    {
        try {
            $sqlUpdate = "UPDATE chi_tiet_gio_hang SET so_luong = :so_luong WHERE id_gio_hang = :id_gio_hang AND id_sp = :id_sp";

            $stmtUpdate = $GLOBALS['conn']->prepare($sqlUpdate);

            $stmtUpdate->bindParam(":so_luong", $quantity);

            $stmtUpdate->bindParam(":id_gio_hang", $cartID);

            $stmtUpdate->bindParam(":id_sp", $id);

            $stmtUpdate->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Xóa toàn bộ sản phẩm trong giỏ hàng
if (!function_exists('remoteAllCartItem')) {
    function remoteAllCartItem($cart_id)
    {
        try {
            // Xóa toàn bộ mục trong bảng cart_items có cart_id tương ứng
            $sql_delete_items = "DELETE FROM chi_tiet_gio_hang WHERE id_gio_hang = :id_gio_hang";

            $stmt_delete_items = $GLOBALS['conn']->prepare($sql_delete_items);

            $stmt_delete_items->bindParam(':id_gio_hang', $cart_id);

            $stmt_delete_items->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

function deleteCartItemByCartIdAndProductId($cartID, $id)
{
    try {
        $sql = "DELETE FROM chi_tiet_gio_hang WHERE id_gio_hang = :id_gio_hang AND id_sp = :id_sp";

        $stmtUpdate = $GLOBALS['conn']->prepare($sql);

        $stmtUpdate->bindParam(":id_gio_hang", $cartID);

        $stmtUpdate->bindParam(":id_sp", $id);

        $stmtUpdate->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteCartItemByCartId($cartID)
{
    try {
        $sql = "DELETE FROM chi_tiet_gio_hang WHERE id_gio_hang = :id_gio_hang";

        $stmtUpdate = $GLOBALS['conn']->prepare($sql);

        $stmtUpdate->bindParam(":id_gio_hang", $cartID);

        $stmtUpdate->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}