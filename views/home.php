<div class="container">
            <!-- New -->
            <section>
                <div class="content">
                    <div class="content-heading">
                        <h2>Mới nhất</h2>
                    </div>

                    <div class="new_content-body">
                        <?php foreach ($products as $item): ?>
                                    <div class="card">                               
                                        <img class="card-img" src="<?= $item['thumbnail'] ?>" alt="">
                                        <div class="card-info">
                                            <p class="info-name"><?= $item['ten_sp'] ?></p>
                                            <p class="info-category"><?= $item['ten_dm'] ?></p>
                                            <p class="info-price"><?= $item['gia_sp'] ?></p>
                                        </div>                  
                                        <div class="card-action">
                                            <div class="group">
                                                <div class="addtocart">
                                                    <button><a href="./cart.html">Thêm vào giỏ hàng</a></button>
                                                </div>

                                                <div class="sub-act">
                                                    <a href="" class="act-share">
                                                        <img src="<?= BASE_URL ?>assets/client/images/icon-share.svg" alt="">
                                                        <p>Chia sẻ</p>
                                                    </a>
                                                    <a href="act-compare">
                                                        <img src="<?= BASE_URL ?>assets/client/images/icon-compare.svg" alt="">
                                                    </a>
                                                    <a href="" class="act-like">
                                                        <img src="<?= BASE_URL ?>assets/client/images/icon-heart.svg" alt="">
                                                        <p>Thích</p>
                                                    </a>
                                                </div>
                                            </div>                           
                                        </div>
                                    </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>

            <!-- Shop  -->
            <section>
                <div class="content">
                    <div class="content-heading">
                        <h2>Shop</h2>
                    </div>

                    <div class="shop_content-body">
                        <div class="shop">
                            <div class="shop-col">
                                <img src="./images/shop-1.jpg" alt="">
                            </div>

                            <div class="shop-col">
                                <img src="./images/shop-2.jpg" alt="">
                            </div>

                            <div class="shop-col">
                                <img src="./images/shop-3.jpg" alt="">
                            </div>

                            <div class="shop-col">
                                <img src="./images/shop-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tin tức -->
            <section>
                <div class="content">
                    <div class="content-heading">
                        <h2>Tin tức</h2>
                    </div>

                    <div class="blog_content-body">
                        <div class="post">
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="./images/post-1.jpg" alt="">
                                </div>

                                <div class="post-details">
                                    <p class="post-title">THE ULTIMATE SOFA BUYING GUIDE</p>
                                    <p class="post-desc">
                                        Your level of comfort when geting into and out of bed can be
                                        greatly influenced by the bed frame you choose. It may significantly affect how
                                        want your bedroom to feet and look
                                    </p>
                                    <div class="post-link">
                                        <a href="">ABOUT</a>
                                        <img src="./images/icon-next.svg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="post-item">
                                <div class="post-img">
                                    <img src="./images/post-2.jpg" alt="">
                                </div>

                                <div class="post-details">
                                    <p class="post-title">A BEDROOM MUST HAVE SOME THING LIKE THIS </p>
                                    <p class="post-desc">
                                        Your level of comfort when geting into and out of bed can be
                                        greatly influenced by the bed frame you choose. It may significantly affect how
                                        want your bedroom to feet and look
                                    </p>
                                    <div class="post-link">
                                        <a href="">ABOUT</a>
                                        <img src="./images/icon-next.svg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="post-item">
                                <div class="post-img">
                                    <img src="./images/post-3.jpg" alt="">
                                </div>

                                <div class="post-details">
                                    <p class="post-title">WHY IS A TV CONSOLE A MUST IN EVERY HOUSE</p>
                                    <p class="post-desc">
                                        People do a lot of research to make sure they purchase the ideal
                                        televisoin. And like the rest of us, you want to keep that gorgeous flat srceen
                                        in your living or bedroom on a table or stand
                                    </p>
                                    <div class="post-link">
                                        <a href="">ABOUT</a>
                                        <img src="./images/icon-next.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service -->
            <section>
                <div class="services">
                    <div class="service">
                        <div class="service-img">
                            <img src="./images/icon-trophy.svg" alt="">
                        </div>
                        <div class="service-info">
                            <p class="service-name">High quality</p>
                            <p class="service-subname">crafted from top materials</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-img">
                            <img src="./images/icon-tick.svg" alt="">
                        </div>
                        <div class="service-info">
                            <p class="service-name">Warranty Protection</p>
                            <p class="service-subname">Over 2 years</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-img">
                            <img src="./images/icon-shipping.svg" alt="">
                        </div>
                        <div class="service-info">
                            <p class="service-name">Free Shipping</p>
                            <p class="service-subname">Order over 150 $</p>
                        </div>
                    </div>

                    <div class="service">
                        <div class="service-img">
                            <img src="./images/icon-support.svg" alt="">
                        </div>
                        <div class="service-info">
                            <p class="service-name">24/7 Support</p>
                            <p class="service-subname">Dedicated support</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>