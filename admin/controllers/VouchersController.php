<?php

function vouchersList()
{
    $vouchers = listAllVouchers('khuyen_mai');

    $status = '';

    $today = strtotime(date('d-m-Y'));

    $title = 'Quản lý khuyến mãi';
    $view = 'vouchers/index';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function voucherCreate()
{

    $status = true;
    $err = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $code = $_POST['code'];
        $value = $_POST['value'];
        $start = $_POST['start'];
        $end = $_POST['end'];

        if (empty($code) && empty($value) && empty($start) && empty($end)) {
            $status = false;
            $err = 'Không được bỏ trống!';
        } elseif ($value < 0) {
            $status = false;
            $err = 'Value không được có giá trị âm!';
        } elseif ($end < $start) {
            $status = false;
            $err = 'Ngày hết hạn không được nhỏ hơn ngày bắt đầu';
        } else {
            $status = true;
            $err = '';

            $data = [
                'ma_khuyen_mai' => $code,
                'gia_tri' => $value,
                'ngay_bat_dau' => $start,
                'ngay_het_han' => $end
            ];

            insert('khuyen_mai', $data);

            header('Location: ' . BASE_URL_ADMIN . '?act=vouchers');
        }
    }



    $title = 'Thêm mới mã khuyến mãi';
    $view = 'vouchers/create';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function voucherEdit($id)
{
    $voucher = showOneVoucher('khuyen_mai', $id);

    $status = true;
    $err = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $code = $_POST['code'];
        $value = $_POST['value'];
        $start = $_POST['start'];
        $end = $_POST['end'];

        if (empty($code) && empty($value) && empty($start) && empty($end)) {
            $status = false;
            $err = 'Không được bỏ trống!';
        } elseif ($value < 0) {
            $status = false;
            $err = 'Value không được có giá trị âm!';
        } elseif ($end < $start) {
            $status = false;
            $err = 'Ngày hết hạn không được nhỏ hơn ngày bắt đầu';
        } else {
            $status = true;
            $err = '';

            $data = [
                'ma_khuyen_mai' => $code,
                'gia_tri' => $value,
                'ngay_bat_dau' => $start,
                'ngay_het_han' => $end
            ];

            updateOneVoucher('khuyen_mai', $data, $data);

            header('Location: ' . BASE_URL_ADMIN . '?act=vouchers');
        }
    }



    $title = 'Cập nhật mã khuyến mãi';
    $view = 'vouchers/update';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function voucherDelete($id)
{
    deleteVoucher('khuyen_mai', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=vouchers');
}

function voucherListOne($id)
{

}
