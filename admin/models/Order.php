<?php

// Lấy toàn bộ bản ghi của bảng Orders
if (!function_exists('listAllOrders')) {
    function listAllOrders($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// // Lấy toàn bộ bản ghi của bảng khuyến mãi
// if (!function_exists('listAllOrdersItems')) {
//     function listAllOrdersItems($tableName, $id)
//     {
//         try {
//             $sql = "SELECT don_hang.id_don_hang, don_hang.ngay_dat_hang, don_hang.trang_thai_giao_hang,
//             chi_tiet_don_hang.id_sp, chi_tiet_don_hang.so_luong
//      FROM don_hang
//      JOIN chi_tiet_don_hang ON don_hang.id_don_hang = chi_tiet_don_hang.id_don_hang
//      WHERE don_hang.id_don_hang = :id_don_hang";

//             $stmt = $GLOBALS['conn']->prepare($sql);

//             $stmt->bindParam(":id_don_hang", $id);

//             $stmt->execute();

//             return $stmt->fetch();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }
// // Lấy toàn bộ bản ghi của bảng khuyến mãi
// if (!function_exists('listOneDetailsOrder')) {
//     function listOneDetailsOrder($tableName, $id)
//     {
//         try {
//             // $sql = "SELECT * FROM $tableName WHERE id_sp = :id_sp";
//             $sql = "SELECT don_hang.*, 
//             (SELECT GROUP_CONCAT(san_pham.ten_sp)
//              FROM san_pham
//              WHERE FIND_IN_SET(san_pham.id_sp, danh_sach_id_sp)) AS danh_sach_ten_sp
//      FROM don_hang
//      JOIN (SELECT chi_tiet_don_hang.id_don_hang, GROUP_CONCAT(chi_tiet_don_hang.id_sp) AS danh_sach_id_sp
//            FROM chi_tiet_don_hang
//            GROUP BY chi_tiet_don_hang.id_don_hang) AS ct ON don_hang.id_don_hang = ct.id_don_hang
//      WHERE don_hang.id_don_hang = :id_don_hang
//      ";



//             // $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
//             // FROM don_hang dh
//             // JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
//             // JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
//             // WHERE dh.id_don_hang = :id_don_hang            
//             // ";

//             $stmt = $GLOBALS['conn']->prepare($sql);

//             $stmt->bindParam(":id_don_hang", $id);

//             $stmt->execute();

//             return $stmt->fetch();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }

// // Lấy danh sách bản ghi đơnhàng của bảng người dùng
// if (!function_exists('listOrderByIdOrder')) {
//     function listOrderByIdOrder($tableName, $id)
//     {
//         try {
//             // $sql = "SELECT * FROM $tableName WHERE id_sp = :id_sp";
//             // $sql = "SELECT * FROM don_hang WHERE id_nguoi_dung = :id_nguoi_dung";

//             $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
//             FROM don_hang dh
//             JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
//             JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
//             WHERE dh.id_don_hang = :id_don_hang            
//             ";

//             $stmt = $GLOBALS['conn']->prepare($sql);

//             $stmt->bindParam(":id_don_hang", $id);

//             $stmt->execute();

//             return $stmt->fetch();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }
// }

if (!function_exists('listOrderItemsByIdOrder')) {
    function listOrderItemsByIdOrder($id)
    {
        try {
            $sql = "SELECT dh.*, GROUP_CONCAT(CONCAT(ctdh.id_sp, ':', ctdh.so_luong)) AS danh_sach_id_sp_so_luong
            FROM don_hang dh
            JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
            WHERE dh.id_don_hang = :id_don_hang
            GROUP BY dh.id_don_hang";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Cập nhật 1 bản ghi của bảng danh mục
if (!function_exists('updateOneOrder')) {
    function updateOneOrder($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id_don_hang = :id_don_hang";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_don_hang", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

