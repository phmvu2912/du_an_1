<?php

function showCatalogues() {
    $catalogues = listAllCatalog('danh_muc');

    // debug($catalogues);

    $title = 'Quản lý danh mục';
    $view = 'catalogues';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
