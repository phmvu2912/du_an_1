<?php

// List All
function productsListAll()
{
    $products = listAllProducts('san_pham');

    foreach ($products as $item) {

        // Xử lý dữ liệu: Chuyển chuỗi thành mảng các đường dẫn ảnh
        $imagePaths = explode(',', $item['anh_sp']);
    }
    // debug($img);die;

    $title = 'Quản lý sản phẩm';
    $view = 'products/index';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}


// List One 
function productsListOne($id)
{
    $product = showOneProduct('san_pham', $id);


    $title = 'Chi tiết sản phẩm';
    $view = 'products/details';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Edit
function productsEdit($id)
{
    $products = showOneProduct('san_pham', $id);
    $catalogues = listAllCatalog('danh_muc');

    // Submit
    if (!empty ($_POST)) {
        // debug($_POST);
        $data = [
            'ten_sp' => $_POST['name'],
            'gia_sp' => $_POST['price'],
            'id_danh_muc' => $_POST['catalogues'],
            'mo_ta' => $_POST['description'],
            'thumbnail' => $_FILES['thumbnail'],
            'anh_sp' => $_FILES['images'],
        ];

        // upload 1 ảnh + logic update ảnh nếu không chọn ảnh mới thì lấy ảnh cũ up lại
        $thumbnail = $_FILES['thumbnail'];

        if ($thumbnail['size'] > 0) {
            // // Xóa ảnh cũ khi phát hiện người dùng upload ảnh mới
            // if(file_exists($thumbnailPathOld)) {
            //     unlink($thumbnailPathOld);
            // }

            $thumbnailPath = 'uploads/products/' . time() . '-' . basename($thumbnail['name']);

            if (move_uploaded_file($thumbnail['tmp_name'], PATH_UPLOAD . $thumbnailPath)) {
                $data['thumbnail'] = $thumbnailPath;
            } else {
                $data['thumbnail'] = null;
            }
        } else {
            $thumbnailPath = $products['thumbnail'];
            $data['thumbnail'] = $thumbnailPath;
        }

        // Upload nhiều ảnh
        $images = $_FILES['images'];

        if (!empty ($images['name'][0])) {
            $uploadedImages = [];
            $totalImages = count($images['name']);

            for ($i = 0; $i < $totalImages; $i++) {
                $imagesPath = 'uploads/products/' . time() . '-' . basename($images['name'][$i]);

                if (move_uploaded_file($images["tmp_name"][$i], PATH_UPLOAD . $imagesPath)) {
                    $uploadedImages[] = $imagesPath;
                }
            }

            // Lưu danh sách các ảnh đã tải lên vào biến $data
            $data['anh_sp'] = implode(',', $uploadedImages);
        } else {
            // Nếu không có ảnh nào được tải lên mới, sử dụng lại đường dẫn của file cũ
            $imagePaths = explode(',', $products['anh_sp']);
            $data['anh_sp'] = $imagePaths;
        }

        updateOneProduct('san_pham', $id, $data);
        // Điều hướng

        header('Location: ' . BASE_URL_ADMIN . '?act=products-edit&id=' . $id);

        exit();
    }

    $title = 'Cập nhật sản phẩm';
    $view = 'products/update';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Create
function productsCreate()
{
    // Chọn danh mục
    $catalogues = listAllCatalog('danh_muc');

    $products = listAllProducts('san_pham');

    $flag = true;

    $priceErr = '';

    // Kiểm tra xem người dùng đã điền thông tin chưa
    if (!empty ($_POST['name']) && !empty ($_POST['price']) && !empty ($_POST['catalogues']) && !empty ($_POST['description']) && !empty ($_FILES['thumbnail']['tmp_name']) && !empty ($_FILES['images']['tmp_name'])) {
        // Nếu nhập giá tiền < 0
        if($_POST['price'] < 0) {
            $priceErr = 'Không thể nhập giá sản phẩm nhỏ hơn 0!';
        }
        
        
        if (!empty ($_POST)) {
            $data = [
                'ten_sp' => $_POST['name'],
                'gia_sp' => $_POST['price'],
                'id_danh_muc' => $_POST['catalogues'],
                'mo_ta' => $_POST['description'],
            ];

            

            

            // upload 1 ảnh
            $thumbnail = $_FILES['thumbnail'] ?? null;

            if (!empty ($thumbnail)) {
                $thumbnailPath = 'uploads/products/' . time() . '-' . basename($thumbnail['name']);

                if (move_uploaded_file($thumbnail["tmp_name"], PATH_UPLOAD . $thumbnailPath)) {
                    $data['thumbnail'] = $thumbnailPath;
                } else {
                    $data['thumbnail'] = null;
                }
            }

            // Upload nhiều ảnh
            $images = $_FILES['images'] ?? null;

            if (!empty ($images['name'][0])) {
                $uploadedImages = [];
                $totalImages = count($images['name']);

                for ($i = 0; $i < $totalImages; $i++) {
                    $imagesPath = 'uploads/products/' . time() . '-' . basename($images['name'][$i]);

                    if (move_uploaded_file($images["tmp_name"][$i], PATH_UPLOAD . $imagesPath)) {
                        $uploadedImages[] = $imagesPath;
                    }
                }

                // Lưu danh sách các ảnh đã tải lên vào biến $data
                $data['anh_sp'] = implode(',', $uploadedImages);

                // debug($data['anh_sp']);die;
            } else {
                $data['anh_sp'] = null;
            }



            insert('san_pham', $data);

            // Điều hướng

            header('Location: ' . BASE_URL_ADMIN . '?act=products');

            exit();

        }
    } else {
        // Có ít nhất một trường không có dữ liệu
        // Hiển thị thông báo hoặc thực hiện hành động phù hợp
        $flag = false;
    }


    // Submit



    $title = 'Thêm mới sản phẩm';
    $view = 'products/create';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// Delete
function productsDelete($id)
{
    deleteProduct('san_pham', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=products');
}
