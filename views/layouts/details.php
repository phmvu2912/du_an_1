<div class="container">
    <!-- Main content -->
    <section>
        <div class="content">
            <div class="content-left">
                <div class="left-col">
                    <div class="sub-img">
                        <img src="<?= $product['thumbnail'] ?>" onclick="changeImage('main-img', '<?= BASE_URL . $img ?>')" width="100px">
                    </div>
                    <?php $imagePaths = explode(',', $product['anh_sp']); ?>
                    <?php foreach ($imagePaths as $img): ?>
                                    <div class="sub-img">
                                        <img src="<?= BASE_URL . $img ?>" onclick="changeImage('main-img', '<?= BASE_URL . $img ?>')" width="100px">
                                    </div>
                    <?php endforeach ?>
                </div>

                <div class="right-col">
                    <div class="main-img">
                        <img src="<?= $product['thumbnail'] ?>" id='main-img' alt="" width="100%">
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="info">
                    <div class="name">
                        <p><?= $product['ten_sp'] ?></p>
                    </div>

                    <br>

                    <div class="price">
                        <p><?= number_format($product['gia_sp'], 0, '.', '.') ?>đ</p>
                    </div>

                    <!-- <div class="rating">
                        <div class="stars">

                        </div>

                        <div class="spacing"></div>

                        <div class="count-reviews">
                            <p>5 Customer Review</p>
                        </div>
                    </div> -->

                    <!-- <div class="description">
                        <p>
                            Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact,
                            stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended
                            highs for a sound.
                        </p>
                    </div> -->
                    <br>

                    <div class="size">
                        <p>Bảng size</p>

                        <div class="size-btn">
                            <button>L</button>
                            <button>XL</button>
                            <button>XS</button>
                        </div>
                    </div>
                    
                    <br>

                    <!-- <div class="colors">
                        <p>Color</p>
                        <div class="group-color">
                            <div class="circle-color violet"></div>
                            <div class="circle-color black"></div>
                            <div class="circle-color brown"></div>
                        </div>
                    </div> -->

                    <div class="actions">
                        <div class="quantity">
                            <input type="number" min=1>
                        </div>

                        <div class="add">
                            <button><a href="./cart.html">Thêm vào giỏ</a></button>
                        </div>

                        <div class="compare">
                            <button>Mua ngay</button>
                        </div>
                    </div>

                    <hr>

                    <div class="more">
                        <div class="more-info">
                            <div class="name-info">
                                <b>SKU</b>
                                <span>:</span>
                            </div>
                            <div class="value-info">
                                <?= $product['id_sp'] . uniqid() ?>
                            </div>
                        </div>

                        <div class="more-info">
                            <div class="name-info">
                                <b>Danh mục</b>
                                <span>:</span>
                            </div>
                            <div class="value-info">
                                <p><?= $product['ten_dm'] ?></p>
                            </div>
                        </div>

                        <div class="more-info">
                            <div class="name-info">
                                <b>Tags</b>
                                <span>:</span>
                            </div>
                            <div class="value-info">
                                <p>Áo sơ mi ngắn tay, đồ mùa hè</p>
                            </div>
                        </div>

                        <div class="more-info">
                            <div class="name-info">
                                <b>Chia sẻ</b>
                                <span>:</span>
                            </div>
                            <div class="value-info">
                                <p>Áo sơ mi ngắn tay, đồ mùa hè</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <hr>

    <div class="container">
        <!-- Preview -->
        <section style="margin: 0 0 50px 0">
            <div class="tabs">
                <div class="tabs-heading">
                    <p class="tab-link active" onclick="openTab(event, 'description')">Mô tả sản phẩm</p>
                    <p class="tab-link" onclick="openTab(event, 'comments')">Bình luận</p>
                </div>

                <div id='description' class="tabs-body" style="display:block;">
                    <p>
                        <?= $product['mo_ta'] ?>
                    </p>
                </div>

                <div id='comments' class="tabs-body" style="display:none;">     
                    <div class="cmt-input">
                        <div class="cmt-heading">
                        <p>Nhập bình luận</p>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="form-control">
                                <input type="hidden" value="<?= $product['id_sp'] ?>">
                                <textarea rows=5 name="content" placeholder="Viết bình luận tại đây..."></textarea>
                            </div>
                            <div class="form-btn">
                                <button type="submit" name="cmt_submit">Đăng bình luận</button>
                            </div>
                        </div>
                    </form>
                    </div>

                    <div class='cmt-heading'>
                        <p>Bình luận</p>
                    </div>

                    <div class="list-cmt">
                        <?php foreach ($feedbacks as $cmt) : ?>
                            <div class="cmt">
                                <div class="avt">
                                    <img src="" alt="">
                                </div>

                            <div class="cmt-content">
                                <b><?= $cmt['ten_nguoi_dung'] ?></b>
                                <p><?= $cmt['noi_dung'] ?></p>
                            </div>

                            <div class="acts">
                                <div class="like-cmt">
                                    <img src="" alt="">
                                    <p>Hữu ích</p>
                                </div>

                                <div class="like-cmt">
                                    <img src="" alt="">
                                    <p>Báo cáo</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>                  
                </div>
            </div>
        </section>

        <!-- Related list -->
        <section>
            <div class="related">
                <div class="related-heading">
                    <p>Sản phẩm liên quan</p>
                </div>

                <div class="related-content">
                    <div class="group-cards">
                        <div class="card">
                            <img class="card-img" src="./images/img1.jpg" alt="">
                            <div class="card-info">
                                <p class="info-name">Syltherine</p>
                                <p class="info-category">Stylish cafe chair</p>
                                <p class="info-price">2.500.000dd</p>
                            </div>                  
                            <div class="card-action">
                                <div class="group">
                                    <div class="btn-act">
                                        <button><a href="./cart.html">Add to cart</a></button>
                                    </div>
    
                                    <!-- <div class="btn-act">
                                        <button><a href="./cart.html">View products</a></button>
                                    </div> -->
    
                                    <div class="sub-act">
                                        <button><a href="">View product</a></button>
                                    </div>
                                </div>                           
                            </div>
                        </div>
    
                        <div class="card">
                            <img class="card-img" src="./images/img1.jpg" alt="">
                            <div class="card-info">
                                <p class="info-name">Syltherine</p>
                                <p class="info-category">Stylish cafe chair</p>
                                <p class="info-price">2.500.000dd</p>
                            </div>                  
                            <div class="card-action">
                                <div class="group">
                                    <div class="btn-act">
                                        <button><a href="./cart.html">Add to cart</a></button>
                                    </div>
    
                                    <!-- <div class="btn-act">
                                        <button><a href="./cart.html">View products</a></button>
                                    </div> -->
    
                                    <div class="sub-act">
                                        <button><a href="">View product</a></button>
                                    </div>
                                </div>                           
                            </div>
                        </div>
    
                        <div class="card">
                            <img class="card-img" src="./images/img1.jpg" alt="">
                            <div class="card-info">
                                <p class="info-name">Syltherine</p>
                                <p class="info-category">Stylish cafe chair</p>
                                <p class="info-price">2.500.000dd</p>
                            </div>                  
                            <div class="card-action">
                                <div class="group">
                                    <div class="btn-act">
                                        <button><a href="./cart.html">Add to cart</a></button>
                                    </div>
    
                                    <!-- <div class="btn-act">
                                        <button><a href="./cart.html">View products</a></button>
                                    </div> -->
    
                                    <div class="sub-act">
                                        <button><a href="">View product</a></button>
                                    </div>
                                </div>                           
                            </div>
                        </div>
    
                        <div class="card">
                            <img class="card-img" src="./images/img1.jpg" alt="">
                            <div class="card-info">
                                <p class="info-name">Syltherine</p>
                                <p class="info-category">Stylish cafe chair</p>
                                <p class="info-price">2.500.000dd</p>
                            </div>                  
                            <div class="card-action">
                                <div class="group">
                                    <div class="btn-act">
                                        <button><a href="./cart.html">Add to cart</a></button>
                                    </div>
    
                                    <!-- <div class="btn-act">
                                        <button><a href="./cart.html">View products</a></button>
                                    </div> -->
    
                                    <div class="sub-act">
                                        <button><a href="">View product</a></button>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>

                    <div class="btn-more">
                        <button>Show more</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function changeImage(imageId, newSource) {
            let largeImage = document.getElementById(imageId);
            largeImage.src = newSource;
        }

        function openTab(evt, tabName) {
            let i, tabcontent, tablinks;
            
            tabcontent = document.getElementsByClassName("tabs-body");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            
            tablinks = document.querySelectorAll('.tabs-heading p');
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");

              // Loại bỏ lớp active từ tab trước đó (nếu có)
            let activeTab = document.querySelector('.tabs-heading p.active');
            if (activeTab !== null) {
                activeTab.classList.remove("active");
            }
            // Thêm lớp active vào tab được nhấp
            evt.currentTarget.classList.add("active");
        }
    </script>