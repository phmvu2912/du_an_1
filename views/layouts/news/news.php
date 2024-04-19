<div class="container">
    <!-- Tin tức -->
    <section>
        <div class="home-content">
            <div class="content-heading">
                <h2>Tin tức mới nhất</h2>
            </div>

            <div class="blog_content-body">
                <div class="post">
                    <?php foreach($posts as $p) : ?>
                        <div class="post-item">
                            <div class="post-img">
                                <img src="<?= $p['thumbnail'] ?>" width="600px" alt="">
                            </div>

                            <div class="post-details">
                                <div class="post-info">
                                    <p class="post-title"><?= $p['tieu_de'] ?></p>
                                    <p class="post-desc">
                                        <?php 
                                            $previewBlog = substr($p['noi_dung'], 0, 205);
                                        ?>
                                        <?= $previewBlog . '...' ?>
                                    </p>
                                </div>
                                <div class="post-link">
                                    <a href="?act=news-details&id=<?= $p['id_bai_viet'] ?>">Xem chi tiết</a>
                                    <img src="<?= BASE_URL . 'assets/client/images/icon-next.svg'?>" width="20px">
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
</div>