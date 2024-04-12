<?php
function profilePage() {

    if(!empty($_SESSION['user']) && $_SESSION['user'] != null) {
        $profile = $_SESSION['user'];
    }

    $id_user = $profile['id_nguoi_dung'];
    $username = $profile['ten_dang_nhap'];
    $fullname = $profile['ten_nguoi_dung'];
    $password = $profile['mat_khau'];
    $location = $profile['dia_chi'];
    $phone = $profile['sdt'];
    $email = $profile['email'];


    // debug($profile);die;

    $title = 'Trang cá nhân';
    $view = 'layouts/profile';

    require_once PATH_VIEW . 'layouts/profile.php';
}

function profileEdit($id) {
    $user = showOneUser('nguoi_dung', $id);
    
    

    if(!empty($_POST)) {{
        $data = [
            'ten_dang_nhap' => $_POST['username'],
            'ten_nguoi_dung' => $_POST['fullname'],
            'mat_khau' => $_POST['password'],
            'dia_chi' => $_POST['location'],
            'sdt' => $_POST['phone'],
            'email' => $_POST['email'],
            'avatar' => $_FILES['avatar']
        ];

        // upload 1 ảnh + logic update ảnh nếu không chọn ảnh mới thì lấy ảnh cũ up lại
        $avatar = $_FILES['avatar'] ?? '';

        if ($avatar['size'] > 0) {
            $avatarPath = 'uploads/avatar/' . time() . '-' . basename($avatar['name']);

            if (move_uploaded_file($avatar['tmp_name'], PATH_UPLOAD . $avatarPath)) {
                $data['avatar'] = $avatarPath;
            } else {
                $data['avatar'] = null;
            }
        } else {
            $avatarPath = $user['avatar'];
            $data['avatar'] = $avatarPath;
        }

        updateOneUser('nguoi_dung', $id, $data);

        header('Location: ' . BASE_URL . '?act=profile-edit&id=' . $id);
        echo '<script>confirm("Cập nhật thành công!")</script>';
        exit();
    }}

    // debug($user);die;


    $title = 'Cập nhật thông tin cá nhân';
    $view = 'layouts/profile-edit';

    require_once PATH_VIEW . 'layouts/master.php';
}
 