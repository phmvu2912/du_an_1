<div class="container">
        <!-- Status -->
        <section style="margin: 0 0 50px 0;">
            <div class="cart">
                <div class="cart-table">
                    <?php if($statusOrder == null) { ?>
                        <h3 style='text-align: center'>Chưa có đơn hàng nào ở đây!</h3>
                    <?php } else { ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Trạng thái đơn hàng</th>
                                    <th>Trạng thái thanh toán</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <?php
                                $i = 1;
                                $totalPrice = 0;
                                foreach ($statusOrder as $item):                      
                                    $subTotal = $item['don_gia'] * $item['so_luong'];
                                    $totalPrice += $subTotal;

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
                                        <td><?= $item['ten_sp'] ?></td>
                                        <td>
                                            <div class="cart-img">
                                                <img src="<?= $item['thumbnail'] ?>" width="150px" alt="">
                                            </div>
                                        </td>                                
                                        <td><?= number_format($item['don_gia'], 0, '.', '.') ?>đ</td>
                                        <td><?= $item['so_luong'] ?></td>
                                        <td><?= number_format($subTotal, 0, '.', '.') ?>đ</td>
                                        <td><?= $statusD ?></td>
                                        <td><?= $statusP ?></td>
                                        <td><?= date('d-m-Y', strtotime($item['ngay_dat_hang'])) ?></td>
                                        <td>
                                            <button type='button' onclick="return confirm('Bạn có muốn hủy đơn hàng này không?')" title="Hủy">
                                                <a href="<?= BASE_URL . '?act=order_cancel&id=' . $item['id_don_hang'] ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>    
                                            </button> 
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
    
                        <div class="info-cart">
                            <div class="total-bar">
                                <div class="total-items">
                                    <div class="total-left">
                                        <b>Tổng tiền:</b>
                                    </div>
        
                                    <div class="total-value">
                                        <b><?= number_format($totalPrice, 0, '.', '.') ?>đ</b>
                                    </div>
                                </div>  
                            </div>
                            <div class="buy-now">
                                <button type='button'>
                                    <a href="<?= BASE_URL . '?act=order-checkout' ?>">Thanh toán</a>    
                                </button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- Service -->
        <?php require_once PATH_VIEW . 'layouts/partials/services.php' ?>

    </div>