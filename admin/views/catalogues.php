<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý sản phẩm</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Thêm sản phẩm</a>
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
                            <button class='btn btn-primary'>Cập nhật</button>
                            <button class='btn btn-danger'>Xóa</button>
                        </td>
                    </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>