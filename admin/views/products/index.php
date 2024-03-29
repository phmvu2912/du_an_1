<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý sản phẩm</h1>
        <a href="<?= BASE_URL_ADMIN . '?act=products-add' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i>
            Thêm sản phẩm
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class='text-center'>
                    <th>Tên sản phẩm</th>
                    <th class='text-center'>Ảnh đại diện</th>
                    <th>Giá sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Tools</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($products as $item): ?>
                        <tr>
                            <td><?= $item['ten_sp'] ?></td>
                            <td class='text-center'>
                                <img src="<?= BASE_URL . $item['thumbnail'] ?>" alt=<?= $item['ten_sp'] ?> width='100px'>
                            </td>
                            <td><?= $item['gia_sp'] ?></td>
                            <td class='text-center'><?= $item['ten_dm'] ?></td>
                            <td class='text-center'>
                                <a class='btn btn-info btn-sm text-light' href="?act=products-details&id=<?= $item['id_sp'] ?>">Chi tiết</a>
                                <a class='btn btn-primary btn-sm' href="?act=products-edit&id=<?= $item['id_sp'] ?>">Cập nhật</a>
                                <a class='btn btn-danger btn-sm' onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="?act=products-delete&id=<?= $item['id_sp'] ?>">Xóa</a>
                            </td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>