<?php

function authenShowFormLogin()
{

    if (!empty($_POST)) {

        authenLogin();
    }

    require_once PATH_VIEW . 'authen/login.php';

}


function authenLogin()
{
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);

    if (empty($user)) {
        $_SESSION['error'] = 'Thông tin tài khoản không chính xác!';

        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }

    $_SESSION['user'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function authenLogout()
{
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL);
    exit();
}

function authenRegister()
{
    $popup = '';
    $status = true;
    $success = false;


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if (empty($email) && empty($pass)) {
            $status = false;
            $popup = 'Không được bỏ trống!';
        } elseif (strlen($pass) < 3) {
            $status = false;
            $popup = 'Mật khẩu ít nhất chứa 5 ký tự!';
        } else {
            $data = [
                'email' => $email,
                'mat_khau' => $pass
            ];

            insert('nguoi_dung', $data);
            $success = true;
            $popup = 'Đăng ký thành công!';
        }
    } else {

    }


    require_once PATH_VIEW . 'authen/register.php';
}
