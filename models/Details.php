<?php

// Lấy toàn bộ bản ghi của bảng sản phẩm dựa trên id danh mục
if (!function_exists('listAllProductsByIdCatalog')) {
    function listAllProductsByIdCatalog($tableName, $id_dm)
    {
        try {
            // Sử dụng dấu ? thay vì $tableName trong truy vấn để tránh lỗi cú pháp SQL
            $sql = "SELECT p.*, d.ten_dm 
                    FROM $tableName AS p
                    JOIN danh_muc AS d ON p.id_danh_muc = d.id_danh_muc
                    WHERE p.id_danh_muc = ?
                    ORDER BY p.id_sp DESC 
                    LIMIT 4";


            // Chuẩn bị truy vấn
            $stmt = $GLOBALS['conn']->prepare($sql);

            // Gán giá trị cho tham số trong truy vấn
            $stmt->bindParam(1, $id_dm);

            // Thực thi truy vấn
            $stmt->execute();

            // Trả về kết quả
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có
            debug($e);
        }
    }
}
