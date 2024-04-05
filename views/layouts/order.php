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
                                    <input type="text" id="user-name"  name="username" value="<?= $_SESSION['user']['ten_nguoi_dung'] ?>">
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
                                    <div class="info-left">
                                        <div class="group-info">
                                            <div class="info-heading">
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
                                            <div class="info-total">
                                                <p style="color: #B88E2F;"><?= number_format($totalPrice, 0, '.', '.') ?>đ</p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <div class="form-control">
                                        <input type="radio" name="payments"> Thanh toán online
                                    </div>
                                    <p class="input-description" style="color: grey">
                                        Make your payment directly into our bank account. Please use your Order ID
                                        as
                                        the payment reference. Your order will not be shipped until the funds have
                                        cleared in our account.
                                    </p>
                                </div>

                                <div class="form-group">
                                    <div class="form-control">
                                        <input type="radio" name="payments"> Thanh toán tiền mặt khi nhận hàng (COD)
                                    </div>
                                    <p class="input-description">

                                    </p>
                                </div>

                                <p class="privacy">
                                    Your personal data will be used to support your experience throughout this
                                    website, to manage access to your account, and for other purposes described in
                                    our <a href="">privacy policy.</a>
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