<?php

function cataloguesAdmin() {
    $dataCatalog = listAllCatalog('danh_muc');
    require_once PATH_VIEW . 'admin/catalogues.php';
}

