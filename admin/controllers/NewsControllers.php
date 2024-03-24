<?php

function newsListAll()
{
    $posts = listAllBlog('bai_viet');

    $view = 'news/index';
    $title = 'Danh sách bài viết';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function newsEdit($id)
{
    // Fill dữ liệu 
    $post = showOneBlog('bai_viet', $id);

    // debug($post);

    // Submit
    if (!empty ($_POST)) {
        // debug($_POST);
        $data = [
            'tieu_de' => $_POST['heading'],
            'thumbnail' => $_POST['thumbnail'],
            'noi_dung' => $_POST['content'],
        ];

        // debug($data);

        updateOneBlog('bai_viet', $id, $data);

        // Điều hướng

        header('Location: ' . BASE_URL_ADMIN . '?act=news-edit&id=' . $id);

        exit();
    }

    $view = 'news/update';
    $title = 'Thêm mới bài viết';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function newsCreate()
{
    // Submit
    if (!empty ($_POST)) {
        // debug($_POST);
        $data = [
            'tieu_de' => $_POST['heading'],
            'thumbnail' => $_POST['thumbnail'],
            'noi_dung' => $_POST['content'],
        ];

        insert('bai_viet', $data);

        // Điều hướng

        header('Location: ' . BASE_URL_ADMIN . '?act=news');

        exit();
    }

    $view = 'news/create';
    $title = 'Thêm mới bài viết';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function newsDelete($id)
{
    deleteBlog('bai_viet', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=news');
}
