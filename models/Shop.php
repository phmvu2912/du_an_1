<?php 

if (!function_exists('getProductsByName')) {
    function getProductsByName($search)
    {
        try {
            $sql = "SELECT san_pham.*, danh_muc.ten_dm 
                    FROM `san_pham` 
                    INNER JOIN `danh_muc` ON san_pham.id_danh_muc = danh_muc.id_danh_muc 
                    WHERE san_pham.ten_sp LIKE :search";

            $search = '%' . $search . '%';

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":search", $search);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return false;
        }
    }
}

if (!function_exists('getProductsByName')) {
    function getProductsSortByDESC($search)
    {
        try {
            $sql = "SELECT san_pham.*, danh_muc.ten_dm 
                    FROM `san_pham` 
                    INNER JOIN `danh_muc` ON san_pham.id_danh_muc = danh_muc.id_danh_muc 
                    WHERE san_pham.ten_sp LIKE :search
                    ORDER BY san_pham.id_sp DESC";

            $search = '%' . $search . '%';

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":search", $search);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return false;
        }
    }
}
