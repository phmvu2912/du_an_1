<?php
if (!function_exists('getSeachProduct')) {

    function getSeachProduct($product_name = null){
        // var_dump($price_min, $price_max);die();
        try {
            $sql = "SELECT * FROM san_pham WHERE 1=1";
            // bẮT ĐẦU truy vấn với điều kiện luôn đúng

            // Thêm điều kiện search product name 
            if (!empty($product_name)) {
                $sql .= " AND name LIKE :ten_sp";
                $product_name = "%" . $product_name . "%";
            }           
            
            $sql .= " ORDER BY id_sp DESC";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            // var_dump($sql);die;

            // bind tham số vào nếu được chỉ định
            if (!is_null($product_name) && $product_name != '') {
                $stmt->bindParam(':ten_sp', $product_name);
                
            }

            // var_dump($sql);die;
                $stmt->execute();
                
                return $stmt->fetchAll();

        } catch (\Exception $e) {
            // debug($e);
        }
    }
}
