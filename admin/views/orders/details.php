<?php 
    $statusDelivery = $order['trang_thai_giao_hang'];
    $statusD = '';

    $statusPayment = $order['trang_thai_thanh_toan'];
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

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="?act=orders" class='btn btn-primary btn-sm'>Quay lại danh sách đơn hàng</a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <div class="col-md-12 ">
        <div class="card mb-3">
            <div class="card-body">
                <!-- Tên sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tên người nhận</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $order['ten_nguoi_nhan'] ?>
                    </div>
                </div>

                <hr>

                <!-- Địa chỉ sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Địa chỉ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $order['dia_chi_nguoi_nhan'] ?>
                    </div>
                </div>

                <hr>

                <!-- Địa chỉ sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $order['email_nguoi_nhan'] ?>
                    </div>
                </div>

                <hr>

                <!-- Địa chỉ sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Số điện thoại</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $order['sdt_nguoi_nhan'] ?>
                    </div>
                </div>

                <hr>

                <!--  -->
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Sản phẩm</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <!-- Phần giao diện -->
                        <?php
                            $itemsArray = explode(',', $order['danh_sach_id_sp_so_luong']);
                            foreach ($itemsArray as $spsl) :
                                // Tách chuỗi thành id_sp và so_luong
                                list($id_sp, $so_luong) = explode(':', $spsl);

                                // Truy vấn bảng san_pham để lấy tên sản phẩm thông qua id_sp
                                $sql = "SELECT ten_sp FROM san_pham WHERE id_sp = :id_sp";
                                $stmt = $GLOBALS['conn']->prepare($sql);
                                $stmt->bindParam(":id_sp", $id_sp);
                                $stmt->execute();
                                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                $ten_sp = $result['ten_sp'];

                                // In tên sản phẩm và số lượng
                                echo $ten_sp . ' x ' . '<b>' . $so_luong . '</b>' . '<br>';
                            endforeach;
                        ?>
                    </div>
                </div>

                <hr>


                <!-- Tổng tiền -->
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tổng tiền</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= number_format($order['tong_tien'], 0, '.', '.') . 'đ'?>
                    </div>
                </div>

                <hr>      
                
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Trạng thái đơn hàng</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $statusD ?>
                    </div>
                </div>

                <hr>

                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Trạng thái vận chuyển</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $statusP ?>
                    </div>
                </div>

                <hr>

                <!-- Danh mục sp -->
                <div class="row d-flex align-items-center">  
                    <div class="col-2">
                        <a class='btn btn-primary btn-sm' href="?act=orders-edit&id=<?= $order['id_don_hang'] ?>">Cập nhật bản ghi</a>                      
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>