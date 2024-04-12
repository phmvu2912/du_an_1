<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý đơn hàng</h1>
        <!-- <a href="<?= BASE_URL_ADMIN . '?act=products-add' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Thêm sản phẩm
        </a> -->
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered mx-3 text-center" id="dataTable" cellspacing="0">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên người nhận</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Trạng thái thanh toán</th>
                    <th>Thao tác</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;
                $totalPrice = 0;
                foreach ($order as $item):                      
                    // $subTotal = $item['don_gia'] * $item['so_luong'];
                    // $totalPrice += $subTotal;

                    $statusDelivery = $item['trang_thai_giao_hang'];
                    $statusD = '';

                    $statusPayment = $item['trang_thai_thanh_toan'];
                    $statusP = '';

                    if($statusDelivery == 0) {
                        $statusD = 'Chưa xác nhận';
                    } elseif ($statusDelivery == 1) {
                        $statusD = 'Đã xác nhận';
                    } elseif ($statusDelivery == 2) {
                        $statusD = 'Đang vận chuyển';
                    } elseif ($statusDelivery == 3) {
                        $statusD = 'Đã nhận';
                    } else {
                        $statusD = 'Đã hủy';
                    }
                
                    if($statusPayment == 0) {
                        $statusP = 'Chưa thanh toán';
                    } elseif ($statusPayment == 1) {
                        $statusP = 'Đã thanh toán';
                    } else {
                        $statusP = 'Đã hủy';
                    }

                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $item['ten_nguoi_nhan'] ?></td>                                
                        <td><?= number_format($item['tong_tien'], 0, '.', '.') ?>đ</td>
                        <td><?= date('d-m-Y', strtotime($item['ngay_dat_hang'])) ?></td>
                        <td><?= $statusD ?></td>
                        <td><?= $statusP ?></td>
                        
                        <td>
                            <a href="?act=orders-details&id=<?= $item['id_don_hang'] ?>" class='btn btn-info btn-sm'>Chi tiết</a> 
                            <a href="?act=orders-edit&id=<?= $item['id_don_hang'] ?>" class='btn btn-primary btn-sm'>Cập nhật</a> 
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>