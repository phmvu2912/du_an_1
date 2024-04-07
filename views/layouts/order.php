<div class="container">
    <main>
        <!-- Bill content -->
        <section>
            <div class="bill">
                <div class="bill-heading">
                    <h1>Thông tin đặt hàng</h1>
                </div>

                <form action="?act=order-purchase" method="POST">
                    <div class="bill-body">
                        <div class="content-left">
                            <!-- Tên người nhận hàng -->
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="user-name">Tên người nhận</label>
                                    <input type="text" id="user-name"  name="username" value="<?= $_SESSION['user']['ten_nguoi_dung'] ?>" required>
                                </div>
                            </div>
                            
                            <!-- <div class="form-group">
                                <div class="form-control">
                                    <label for="">Contry / Region</label>
                                    <select name="" id="">
                                        <option value="" selected>Vietnam</option>
                                        <option value="">USA</option>
                                        <option value="">Korea</option>
                                        <option value="">Thailand</option>
                                    </select>
                                </div>
                            </div> -->

                            <!-- Địa chỉ nhận hàng -->
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="location">Địa chỉ</label>
                                    <input type="text" id="location"  name="location" >
                                </div>
                            </div>

                            <!-- Số điện thoại người nhận -->
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="number" id="phone"  name="phone">
                                </div>
                            </div>

                            <!-- Email người nhận -->
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="email">Email</label>
                                    <input type="email" id="email"  name="email">
                                </div>
                            </div> 

                            <?php 
                                $totalPrice = 0;
                                foreach($_SESSION['cart'] as $item) : 

                                $total = $item['gia_sp'] * $item['quantity'];

                                $totalPrice += $total;
                            ?>                                           
                            <?php endforeach ?>

                            <input type="number" id="totalBill"  name="totalBill" value="<?= $totalPrice ?>" hidden>
                            
                            
                        </div>

                        <div class="spacing"></div>

                        <div class="content-right">
                            <div class="bill-info">
                                <div class="info-content">
                                    <div class="content-heading">
                                        <b>Sản phẩm</b>

                                        <b>Giá sản phẩm</b>
                                    </div>

                                    <div class="content-item">
                                        <!-- Tên sp -->
                                        <div class="container-item">
                                            <?php foreach($_SESSION['cart'] as $item) : ?>
                                                <div class="info-name">                                                
                                                    <p><?= $item['ten_sp'] ?></p> <span> x <?= $item['quantity'] ?></span>                                               
                                                </div>                                           
                                            <?php endforeach ?>
                                        </div>
                                        
                                        <div class="container-item">
                                            <!-- Giá sp -->
                                            <?php 
                                                foreach($_SESSION['cart'] as $item) : 

                                                $total = $item['gia_sp'] * $item['quantity'];
                                            ?>
                                                <div class="info-price">
                                                    <p><?= number_format($total, 0, '.', '.') ?>đ</p>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>

                                    <div class="content-item" style="margin-top: 10px">
                                        <b>Thành tiền:</b>
                                        
                                        <p><?= number_format($totalPrice, 0, '.', '.') ?>đ</p>
                                    </div>

                                    <!-- Chọn Voucher -->
                                    <div class="voucher-item" style="margin-top: 10px">
                                        <b>Chọn mã giảm giá</b>
                                        <form action="" method='POST'>
                                            <div class="selectVoucher">
                                                <select name="voucher" id="">
                                                    <option value="" selected>-- Chọn mã giảm giá --</option>
                                                        <?php foreach($vouchers as $v) : ?>
                                                            <option value="<?= $v['id_khuyen_mai'] ?>"><?= $v['ma_khuyen_mai'] ?></option>
                                                        <?php endforeach ?>
                                                </select>
    
                                                <input type="submit" name='check-voucher' value='Áp dụng'>
                                            </div>
    
                                            <div class="value-coupon">
    
                                            </div>
                                        </form>
                                    </div>

                                    <div class="content-item" style="margin-top: 10px">
                                        <b style="font-size: 23px">Tổng tiền:</b>
                                        
                                        <p style="font-size: 23px; font-weight: 700; color: #B88E2F"><?= number_format($totalPrice, 0, '.', '.') ?>đ</p>
                                    </div>
                                    <!-- <div class="info-left">
                                        <div class="group-info">
                                            <div class="info-heading" style="text-align: left">
                                                <p>Sản phẩm</p>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <?php foreach($_SESSION['cart'] as $item) : ?>
                                                <div class="info-name">                                                
                                                    <p><?= $item['ten_sp'] ?></p> <span> x <?= $item['quantity'] ?></span>                                               
                                                </div>
                                                
                                            <?php endforeach ?>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-name">
                                                <p>Thành tiền</p>
                                            </div>
                                        </div>

                                        <div class="addVoucher" style="text-align: left">
                                            <b>Chọn mã giảm giá</b>
                                            <div class="selectVoucher">
                                                <select name="" id="">
                                                    <option value="" selected>-- Chọn mã giảm giá --</option>
                                                    <?php foreach($vouchers as $v) : ?>
                                                        <option value="<?= $v['id_khuyen_mai'] ?>"><?= $v['ma_khuyen_mai'] ?></option>
                                                    <?php endforeach ?>
                                                </select>

                                                <button>Áp dụng</button>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-name">
                                                <p>Tổng thanh toán</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info-right">
                                        <div class="group-info">
                                            <div class="info-heading">
                                                <p>Giá sản phẩm</p>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <?php 
                                                foreach($_SESSION['cart'] as $item) : 

                                                $total = $item['gia_sp'] * $item['quantity'];
                                            ?>
                                                <div class="info-price">
                                                    <p><?= number_format($total, 0, '.', '.') ?>đ</p>
                                                </div>
                                            <?php endforeach ?>
                                        </div>

                                        <div class="group-info">                                            
                                            <div class="info-price">
                                                <p><?= number_format($totalPrice, 0, '.', '.') ?>đ</p>
                                            </div>
                                        </div>

                                        <div class="group-info">                                            
                                            <div class="info-price">
                                                <p>- <?= $v['gia_tri'] ?>%</p>
                                                <p><?= number_format($totalPrice, 0, '.', '.') ?>đ</p>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-total">
                                                <p style="color: #B88E2F;"><?= number_format($totalPrice, 0, '.', '.') ?>đ</p>
                                            </div> 
                                        </div>
                                    </div> -->
                                </div>

                                <hr>
                                <b>Chọn phương thức thành toán</b>
                                <div class="form-group">
                                    <div class="form-control">
                                        <input type="radio" name="payments"> Thanh toán online
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-control">
                                        <input type="radio" name="payments"> Thanh toán tiền mặt khi nhận hàng (COD)
                                    </div>
                                </div>

                                <p class="privacy">
                                    Thông tin cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên trang web này, 
                                    quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được mô tả trong 
                                    <a href="">chính sách bảo mật</a> của chúng tôi.
                                </p>

                                <div class="form-btn">
                                    <button type="submit" name="orderAdd">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Service -->
        <?php require_once PATH_VIEW . 'layouts/partials/services.php' ?>
    </main>
</div>