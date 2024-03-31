<div class="container">
    <main>
        <!-- Bill content -->
        <section>
            <div class="bill">
                <div class="bill-heading">
                    <h1>Thông tin đặt hàng</h1>
                </div>

                <form action="" method="">
                    <div class="bill-body">
                        <div class="content-left">
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="">Tên người nhận</label>
                                    <input type="text">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="">Contry / Region</label>
                                    <select name="" id="">
                                        <option value="" selected>Vietnam</option>
                                        <option value="">USA</option>
                                        <option value="">Korea</option>
                                        <option value="">Thailand</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-control">
                                    <label for="">Địa chỉ</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-control">
                                    <label for="">Số điện thoại</label>
                                    <input type="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-control">
                                    <label for="">Email</label>
                                    <input type="email">
                                </div>
                            </div> 
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
                                            <div class="info-name">
                                                <p>Asgaard sofa</p> <span> x 1</span>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-name">
                                                <p>Subtotal</p>
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
                                                <p>Subtotal</p>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-price">
                                                <p>25.000.000đ</p>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-price">
                                                <p>25.000.000đ</p>
                                            </div>
                                        </div>

                                        <div class="group-info">
                                            <div class="info-total">
                                                <p style="color: #B88E2F;">25.000.000đ</p>
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
                                    <button>Đặt hàng</button>
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