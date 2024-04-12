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
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="<?= BASE_URL_ADMIN . '?act=orders' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Quay lại danh sách đơn hàng
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="POST" class="row g-3" enctype="multipart/form-data">
            <!-- Tên người nhận -->
            <div class="col-6">
                <label for="inputName" class="form-label font-weight-bold">Tên người nhận:</label>
                <input type="text" class="form-control" id="inputName" name="username" value="<?= $order['ten_nguoi_nhan'] ?>">
            </div>

            <!-- Địa chỉ -->
            <div class="col-6">
                <label for="inputLocation" class="form-label font-weight-bold">Địa chỉ nhận hàng:</label>
                <input type="text" class="form-control" id="inputLocation" name="location" value="<?= $order['dia_chi_nguoi_nhan'] ?>">
            </div>

            <!-- Số điện thoại -->
            <div class="col-6">
                <label for="inputPhone" class="form-label font-weight-bold">Số điện thoại nhận hàng:</label>
                <input type="text" class="form-control" id="inputPhone" name="phone" value="<?= $order['sdt_nguoi_nhan'] ?>">
            </div>

            <!-- Email -->
            <div class="col-6">
                <label for="inputEmail" class="form-label font-weight-bold">Email:</label>
                <input type="text" class="form-control" id="inputEmail" name="email" value="<?= $order['email_nguoi_nhan'] ?>">
            </div>

            <!-- Sản phẩm -->
            <div class="col-12">
                <label for="inputProducts" class="form-label font-weight-bold">Sản phẩm:</label>
                
                    <?php
                        $productList = '';
                        
                        $itemsArray = explode(',', $order['danh_sach_id_sp_so_luong']);
                        foreach ($itemsArray as $spsl) {
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
                            $productList .= "\n" . $ten_sp . ' x ' . $so_luong . "\n";
                            


                        }
                    ?>
                    <textarea rows="7" class="form-control text-left"  id="inputProducts" disabled>
                        <?= $productList ?>
                    </textarea>
            </div>

            <!-- Trạng thái giao hàng -->
            <div class="col-6">
                <label for="inputState" class="form-label font-weight-bold">Trạng thái giao hàng</label>
                <select id="inputState" class="form-control text-center" name="statusDelivery">
                    <option value="0" <?= $order['trang_thai_giao_hang'] == 0 ? 'selected' : '' ?> >Chưa xác nhận</option>       
                    <option value="1" <?= $order['trang_thai_giao_hang'] == 1 ? 'selected' : '' ?>>Đã xác nhận</option>
                    <option value="2" <?= $order['trang_thai_giao_hang'] == 2 ? 'selected' : '' ?>>Đang vận chuyển</option>       
                    <option value="3" <?= $order['trang_thai_giao_hang'] == 3 ? 'selected' : '' ?>>Đã nhận</option>
                    <option value="-1" <?= $order['trang_thai_giao_hang'] == -1 ? 'selected' : '' ?>>Đã hủy</option>    
                </select>
            </div>

            <!-- Trạng thái thanh toán -->
            <div class="col-6">
                <label for="inputState" class="form-label font-weight-bold">Trạng thái thanh toán</label>
                <select id="inputState" class="form-control text-center" name="statusPayment">
                    <option value="0" <?= $order['trang_thai_thanh_toan'] == 0 ? 'selected' : '' ?>>Chưa thanh toán</option>       
                    <option value="1" <?= $order['trang_thai_thanh_toan'] == 1 ? 'selected' : '' ?>>Đã thanh toán</option>
                    <option value="-1" <?= $order['trang_thai_thanh_toan'] == -1 ? 'selected' : '' ?>>Đã hủy</option>           
                </select>
            </div>
            
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cập nhật trạng thái</button>
            </div>
        </form>
    </div>
</div>