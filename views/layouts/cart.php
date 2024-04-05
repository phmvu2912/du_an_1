
<div class="container">
    <!-- Cart -->
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
                            <th>Thao tác</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $i = 1; 
                            $totalPrice = 0;
                            foreach($_SESSION['cart'] as $item) : 
                            $total = $item['gia_sp'] * $item['quantity'];
                            $totalPrice += $total;
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $item['ten_sp'] ?></td>
                                <td>
                                    <div class="cart-img">
                                        <img src="<?= $item['thumbnail'] ?>" width="150px" alt="">
                                    </div>
                                </td>                                
                                <td><?= number_format($item['gia_sp'], 0, '.', '.') ?>đ</td>
                                <td>
                                    <button type='button' title="Giảm số lượng">
                                        <a href="<?= BASE_URL . '?act=cart-dec&id=' . $item['id_sp'] ?>">
                                            <i class="fa-solid fa-minus"></i>
                                        </a>
                                    </button>
                                    &nbsp;
                                    <span><?= $item['quantity'] ?></span>
                                    &nbsp;
                                    <button type='button' title="Tăng số lượng">
                                        <a href="<?= BASE_URL . '?act=cart-inc&id=' . $item['id_sp'] ?>">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </button>
                                </td>
                                <td><?= number_format($total, 0, '.', '.') ?>đ</td>
                                <td>
                                    <button type='button' onclick="return confirm('Bạn có muốn xóa <?= $item['ten_sp'] ?> khỏi giỏ hàng không?')" title="Xóa">
                                        <a href="<?= BASE_URL . '?act=cart-del&id=' . $item['id_sp'] ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>    
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
                            <a href="<?= BASE_URL . '?act=order-checkout' ?>">Đặt hàng</a>    
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service -->
    <?php require_once PATH_VIEW . 'layouts/partials/services.php' ?>

</div>
