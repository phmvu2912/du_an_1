<?php

function newsList() {
    $posts = listAllBlog('bai_viet');

    $title = 'Tin tức';
    $view = 'layouts/news/news';
    
    require_once PATH_VIEW . 'layouts/master.php';
}

function newsDetail($id) {
    $post = showOneBlog('bai_viet', $id);

    // debug($post);die;
    $title = 'Tin tức';
    $view = 'layouts/news/details';
    
    require_once PATH_VIEW . 'layouts/master.php';
}