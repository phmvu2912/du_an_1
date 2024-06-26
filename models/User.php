<?php 

if (!function_exists('getUserClientByEmailAndPassword')) {
    function getUserClientByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM nguoi_dung WHERE email = :email AND mat_khau = :password AND vai_tro = 1 LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}