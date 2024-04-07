<?php

// Xóa 1 bản ghi của bảng đơn hàng
if (!function_exists('cancelOrderById')) {
    function cancelOrderById($tableName, $id)
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