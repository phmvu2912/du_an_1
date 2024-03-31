<div class="container">
            <!-- New -->
            <section>
                <div class="home-content">
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
                                            <p class="info-price"><?= number_format($item['gia_sp'], 0, '.', '.') ?>đ</p>
                                        </div>                  
                                        <div class="card-action">
                                            <div class="group">
                                                <div class="addtocart">
                                                    <button><a href="<?= BASE_URL . '?act=cart-add&id=' . $item['id_sp'] . '&quantity=1' ?>">Thêm vào giỏ hàng</a></button>
                                                </div>

                                                <div class="addtocart">
                                                    <button><a href="?act=details&id=<?= $item['id_sp'] ?>">Chi tiết sản phẩm</a></button>
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
            <section style="margin-top: 100px">
                <div class="home-content">
                    <div class="content-heading" style="text-align: center">
                        <h2>Bộ sưu tập mùa Xuân 2024</h2>
                    </div>

                    <div class="shop_content-body">
                        <div class="shop">
                            <div class="shop-col">
                                <img src="<?= BASE_URL . 'uploads/banner/banner-1.jpg'?>" alt="">
                            </div>

                            <div class="shop-col">
                                <img src="<?= BASE_URL . 'uploads/banner/banner-2.jpg'?>" alt="">
                            </div>

                            <div class="shop-col">
                                <img src="<?= BASE_URL . 'uploads/banner/banner-3.jpg'?>" alt="">
                            </div>

                            <div class="shop-col">
                                <img src="<?= BASE_URL . 'uploads/banner/banner-4.jpg'?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tin tức -->
            <section>
                <div class="home-content">
                    <div class="content-heading">
                        <h2>Tin tức</h2>
                    </div>

                    <div class="blog_content-body">
                        <div class="post">
                            <?php foreach($posts as $p) : ?>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="<?= $p['thumbnail'] ?>" width="600px" alt="">
                                    </div>

                                    <div class="post-details">
                                        <p class="post-title"><?= $p['tieu_de'] ?></p>
                                        <p class="post-desc">
                                            <?php 
                                                $previewBlog = substr($p['noi_dung'], 0, 205);
                                            ?>
                                            <?= $previewBlog . '...' ?>
                                        </p>
                                        <div class="post-link">
                                            <a href="">Xem chi tiết</a>
                                            <img src="<?= BASE_URL . 'assets/client/images/icon-next.svg'?>" width="20px">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                            <!-- <div class="post-item">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Service -->
            <?php require_once PATH_VIEW . 'layouts/partials/services.php' ?>
        </div>