<?php

// caapj nhaajt 1 bản ghi của bảng đơn hàng
if (!function_exists('cancelOrderById')) {
    function cancelOrderById($tableName, $id)
    {
        try {
            $sql = "UPDATE $tableName SET trang_thai_giao_hang = -1 WHERE id_don_hang = :id_don_hang";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// caapj nhaajt 1 bản ghi của bảng đơn hàng
if (!function_exists('confirmReceivedOrderById')) {
    function confirmReceivedOrderById($tableName, $id)
    {
        try {
            $sql = "UPDATE $tableName SET trang_thai_giao_hang = 3 WHERE id_don_hang = :id_don_hang";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// xóa 1 bản ghi của bảng đơn hàng
if (!function_exists('deleteOrderById')) {
    function deleteOrderById($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_don_hang = :id_don_hang";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy 1 bản ghi của bảng đơn hàng
if (!function_exists('showOneOrder')) {
    function showOneOrder($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id_don_hang = :id_don_hang LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('updateOneStatusPaymentOrder')) {
    function updateOneStatusPaymentOrder($tableName, $id)
    {
        try {
            $sql = "UPDATE $tableName SET trang_thai_thanh_toan = 1 WHERE id_don_hang = :id_don_hang";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

//Lấy danh sách đơn hàng chưa xác nhận
if (!function_exists('listOrdersByIdUserAndUnconfirmStatus')) {
    function listOrdersByIdUserAndUnconfirmStatus($tableName, $userId)
    {
        try {
            $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
            FROM $tableName dh
            JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
            JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
            WHERE dh.id_nguoi_dung = :id_nguoi_dung AND dh.trang_thai_giao_hang = 0";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $userId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
            // Xử lý lỗi hoặc trả về một mảng rỗng tùy thuộc vào nhu cầu của bạn
            return [];
        }
    }
}


//Lấy danh sách đơn hàng chưa xác nhận
if (!function_exists('listOrdersByIdUserAndShippingStatus')) {
    function listOrdersByIdUserAndShippingStatus($tableName, $userId)
    {
        try {
            $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
            FROM $tableName dh
            JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
            JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
            WHERE dh.id_nguoi_dung = :id_nguoi_dung AND dh.trang_thai_giao_hang = 2";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $userId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
            // Xử lý lỗi hoặc trả về một mảng rỗng tùy thuộc vào nhu cầu của bạn
            return [];
        }
    }
}

//Lấy danh sách đơn hàng Đã nhận
if (!function_exists('listOrdersByIdUserAndComfirmedStatus')) {
    function listOrdersByIdUserAndComfirmedStatus($tableName, $userId)
    {
        try {
            $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
            FROM $tableName dh
            JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
            JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
            WHERE dh.id_nguoi_dung = :id_nguoi_dung AND dh.trang_thai_giao_hang = 1";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $userId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
            // Xử lý lỗi hoặc trả về một mảng rỗng tùy thuộc vào nhu cầu của bạn
            return [];
        }
    }
}

//Lấy danh sách đơn hàng Đã nhận
if (!function_exists('listOrdersByIdUserAndDeliveredStatus')) {
    function listOrdersByIdUserAndDeliveredStatus($tableName, $userId)
    {
        try {
            $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
            FROM $tableName dh
            JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
            JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
            WHERE dh.id_nguoi_dung = :id_nguoi_dung AND dh.trang_thai_giao_hang = 3";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $userId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
            // Xử lý lỗi hoặc trả về một mảng rỗng tùy thuộc vào nhu cầu của bạn
            return [];
        }
    }
}

