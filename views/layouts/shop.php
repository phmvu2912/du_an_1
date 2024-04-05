<!-- Tools bar -->
<section style="margin: 0 0 50px 0">
    <div class="tools-bar">
        <div class="container">
            <div class="tools-items">
                <div class="tools">
                    <div class="tools-group">
                        <div class="tools-left">
                            <div class="filter">
                                <img src="<?= BASE_URL . 'assets/client/images/icon-filter.svg' ?>" alt="">
                                <p>Bộ lọc</p>
                            </div>

                            <div class="list_display">
                                <img src="<?= BASE_URL . 'assets/client/images/icon-list-display-1.svg' ?>" alt="">
                                <img src="<?= BASE_URL . 'assets/client/images/icon-list-display-2.svg' ?>" alt="">
                            </div>
                        </div>

                        <div class="spacing"></div>

                        <div class="tools-right">
                            <p>Đang hiển thị <span>1</span> - <span><?= $lenghtArr ?></span> kết quả</p>
                        </div>
                    </div>
                </div>

                <div class="tools">
                    <form>
                        <p>Sắp xếp</p>
                        <select class="select" name="" id="">
                            <option value="">Mặc định</option>
                            <option value="">Lượt xen</option>
                            <option value="">Mới nhất</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section style="margin: 0 0 50px 0">
        <div class="items">
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

        <div class="pages">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>Next</button>
        </div>
    </section>

    <!-- Services -->
    <?php require_once PATH_VIEW . 'layouts/partials/services.php' ?>
</div>