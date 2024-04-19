
<div class="container">
    <!-- Blog -->
    <section>
        <div class="contentBlog">
            <div class="title">
                <h1 style="font-size: 32px"><?= $post['tieu_de'] ?></h1>
            </div>

            <div class="thumbnail-blog" style="margin: 20px 0">
                <img src="<?= $post['thumbnail'] ?>" alt="" width="100%">
            </div>

            <div class="text-blog">
                <p style="text-align: justify;">
                    <?= $post['noi_dung'] ?>
                </p>
            </div>

            <div class="createAt" style="margin: 20px 0 50px 0; text-align: right">
                <p><b>Ngày đăng: </b><?= date('d-m-Y', strtotime($post['ngay_dang'])) ?></p>
            </div>
        </div>
    </section>
</div>