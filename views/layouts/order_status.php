<div class="container">
        <!-- Status -->
        <section style="margin: 0 0 50px 0;">
            <div class="cart">
                <div class="cart-table">
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
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $i = 1;
                            $totalPrice = 0;
                            foreach ($statusOrder as $item):                      
                                $subTotal = $item['don_gia'] * $item['so_luong'];
                                $totalPrice += $subTotal;
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
                </div>
            </div>
        </section>

        <!-- Service -->
        <?php require_once PATH_VIEW . 'layouts/partials/services.php' ?>

    </div>