<?php

// CRUD -> Create/Read(Danh sách/Chi tiết)/Update/Delete
if (!function_exists('get_str_keys')) {
    function get_str_keys($data)
    {
        $keys = array_keys($data);

        $keysTenTen = array_map(function ($key) {
            return "`$key`";
        }, $keys);

        return implode(',', $keysTenTen);
    }
}

if (!function_exists('get_virtual_params')) {
    function get_virtual_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = ":$key";
        }

        return implode(',', $tmp);
    }
}

if (!function_exists('get_set_params')) {
    function get_set_params($data)
    {
        $keys = array_keys($data);

        $tmp = [];
        foreach ($keys as $key) {
            $tmp[] = "`$key` = :$key";
        }

        return implode(',', $tmp);
    }
}

if (!function_exists('insert')) {
    function insert($tableName, $data = [])
    {
        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virtualParams)";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('insert_get_last_id')) {
    function insert_get_last_id($tableName, $data = []) {
        try {
            $strKeys = get_str_keys($data);
            $virtualParams = get_virtual_params($data);

            $sql = "INSERT INTO $tableName($strKeys) VALUES ($virtualParams)";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->execute();

            return $GLOBALS['conn']->lastInsertId();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Lấy toàn bộ bản ghi của bảng khuyến mãi
if (!function_exists('listAllVouchers')) {
    function listAllVouchers($tableName)
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


// Lấy toàn bộ bản ghi của bảng sản phẩm
if (!function_exists('listAllProducts')) {
    function listAllProducts($tableName)
    {
        try {
            $sql = "SELECT $tableName.*, danh_muc.ten_dm 
            FROM $tableName 
            INNER JOIN danh_muc 
            ON $tableName.id_danh_muc = danh_muc.id_danh_muc";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}



// Lấy toàn bộ bản ghi của bảng danh mục
if (!function_exists('listAllBlog')) {
    function listAllBlog($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id_bai_viet DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Lấy toàn bộ bản ghi của bảng danh mục
if (!function_exists('listAllCatalog')) {
    function listAllCatalog($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id_danh_muc DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Lấy toàn bộ bản ghi của bảng người dùng
if (!function_exists('listAllUsers')) {
    function listAllUsers($tableName)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id_nguoi_dung DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Lấy 1 bản ghi của bảng khuyến mãi
if (!function_exists('showOneVoucher')) {
    function showOneVoucher($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id_khuyen_mai = :id_khuyen_mai LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_khuyen_mai", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Lấy 1 bản ghi của bảng người dùng
if (!function_exists('showOneUser')) {
    function showOneUser($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id_nguoi_dung = :id_nguoi_dung LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy 1 bản ghi của bảng danh mục
if (!function_exists('showOneCatalog')) {
    function showOneCatalog($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id_danh_muc = :id_danh_muc LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_danh_muc", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy 1 bản ghi của bảng bài viết
if (!function_exists('showOneBlog')) {
    function showOneBlog($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id_bai_viet = :id_bai_viet LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_bai_viet", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy 1 bản ghi của bảng sản phẩm
if (!function_exists('showOneProduct')) {
    function showOneProduct($tableName, $id)
    {
        try {
            $sql = "SELECT $tableName.*, danh_muc.ten_dm AS ten_dm 
                FROM $tableName 
                INNER JOIN danh_muc ON $tableName.id_danh_muc = danh_muc.id_danh_muc
                WHERE $tableName.id_sp = :id_sp 
                LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_sp", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Cập nhật 1 bản ghi của bảng sản phẩm
if (!function_exists('updateOneProduct')) {
    function updateOneProduct($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id_sp = :id_sp";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_sp", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Cập nhật 1 bản ghi của bảng danh mục
if (!function_exists('updateOneCatalog')) {
    function updateOneCatalog($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id_danh_muc = :id_danh_muc";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_danh_muc", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Cập nhật 1 bản ghi của bảng danh mục
if (!function_exists('updateOneBlog')) {
    function updateOneBlog($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id_bai_viet = :id_bai_viet";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_bai_viet", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Cập nhật 1 bản ghi của bảng khuyến mãi
if (!function_exists('updateOneVoucher')) {
    function updateOneVoucher($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id_khuyen_mai = :id_khuyen_mai";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_khuyen_mai", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Cập nhật 1 bản ghi của bảng danh mục
if (!function_exists('updateOneUser')) {
    function updateOneUser($tableName, $id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE $tableName SET $setParams WHERE id_nguoi_dung = :id_nguoi_dung";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id_nguoi_dung", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


// Xóa 1 bản ghi của bảng danh mục
if (!function_exists('deleteCatalog')) {
    function deleteCatalog($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_danh_muc = :id_danh_muc";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_danh_muc", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Xóa data của bảng giỏ hàng
if (!function_exists('deleteCart')) {
    function deleteCart($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_nguoi_dung = :id_nguoi_dung";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Xóa 1 bản ghi của bảng bài viết
if (!function_exists('deleteBlog')) {
    function deleteBlog($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_bai_viet = :id_bai_viet";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_bai_viet", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Xóa 1 bản ghi của bảng người dùng
if (!function_exists('deleteUser')) {
    function deleteUser($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_nguoi_dung = :id_nguoi_dung";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Xóa 1 bản ghi của bảng sản phẩm
if (!function_exists('deleteProduct')) {
    function deleteProduct($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_sp = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('deleteVoucher')) {
    function deleteVoucher($tableName, $id)
    {
        try {
            $sql = "DELETE FROM $tableName WHERE id_khuyen_mai = :id_khuyen_mai";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_khuyen_mai", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueName')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueName($tableName, $name)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE name = :name LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":name", $name);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty ($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueNameForUpdate')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueNameForUpdate($tableName, $id, $name)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE name = :name AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty ($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy 1 bản ghi của bảng người dùng
if (!function_exists('listCommentById')) {
    function listCommentById($tableName, $id)
    {
        try {
            // $sql = "SELECT * FROM $tableName WHERE id_sp = :id_sp";
            $sql = "SELECT bl.*, nd.ten_nguoi_dung, nd.avatar 
                FROM $tableName bl
                JOIN nguoi_dung nd ON bl.id_nguoi_dung = nd.id_nguoi_dung
                WHERE bl.id_sp = :id_sp";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_sp", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

// Lấy danh sách bản ghi đơnhàng của bảng người dùng
if (!function_exists('listStatusOrderByIdUser')) {
    function listStatusOrderByIdUser($tableName, $id)
    {
        try {
            // $sql = "SELECT * FROM $tableName WHERE id_sp = :id_sp";
            // $sql = "SELECT * FROM don_hang WHERE id_nguoi_dung = :id_nguoi_dung";

            $sql = "SELECT dh.*, ctdh.id_chi_tiet_don_hang, ctdh.id_sp, ctdh.so_luong, ctdh.don_gia, sp.ten_sp, sp.thumbnail
            FROM don_hang dh
            JOIN chi_tiet_don_hang ctdh ON dh.id_don_hang = ctdh.id_don_hang
            JOIN san_pham sp ON ctdh.id_sp = sp.id_sp
            WHERE dh.id_nguoi_dung = :id_nguoi_dung            
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id_nguoi_dung", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


if (!function_exists('relatedProducts')) {
    function relatedProducts($categoryId)
    {
        try {
            $sql = "SELECT sp.*
                    FROM san_pham sp
                    JOIN danh_muc_san_pham dm ON sp.id_danh_muc = dm.id
                    WHERE dm.id = :category_id
                    LIMIT 4";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":category_id", $categoryId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
