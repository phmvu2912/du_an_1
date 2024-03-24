<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="<?= BASE_URL_ADMIN . '?act=news-add' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Thêm bài viết
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class='text-center'>
                    <th class="col-2">Tiêu đề</th>
                    <th>Ảnh</th>
                    <th >Nội dung</th>
                    <th>Tools</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach($posts as $item) : ?>
                    <tr>
                        <td><?= $item['tieu_de'] ?></td>
                        <td class='text-center'>
                            <img src=<?= $item['thumbnail'] ?> alt=<?= $item['tieu_de'] ?> width='100px'>
                        </td>
                        <!-- Thu gọn nội dung bài viết -->
                        <?php
                            $noi_dung = substr($item['noi_dung'], 0 , 100);
                        ?>
                        <td><?= $noi_dung . '...' ?></td>
                        <td class='text-center'>
                            <a class='btn btn-primary' href="?act=news-edit&id=<?= $item['id_bai_viet'] ?>">Cập nhật</a>
                            <a class='btn btn-danger' onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="?act=news-delete&id=<?= $item['id_bai_viet'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>