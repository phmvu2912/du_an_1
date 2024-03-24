<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý sản phẩm</h1>
        <a href="<?= BASE_URL_ADMIN . '?act=catalogues-add' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Thêm danh mục
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class='text-center'>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Tools</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($catalogues as $item): ?>
                    <tr>
                        <th class='text-center'><?= $item['id_danh_muc'] ?></th>
                        <td><?= $item['ten_dm'] ?></td>
                        <td class='text-center'>
                            <a class='btn btn-primary' href="?act=catalogues-edit&id=<?= $item['id_danh_muc'] ?>">Cập nhật</a>
                            <a type='button' class='btn btn-danger' onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="?act=catalogues-delete&id=<?= $item['id_danh_muc'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>