<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý tài khoản</h1>
        <a href="?act=users-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm tài khoản</a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class='text-center'>
                <th>Tên người dùng</th>
                <th>Tên đăng nhập</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Tools</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($users as $item) : ?>
                <tr class='text-center'>
                    <td><?= $item['ten_nguoi_dung'] ?></td>                    
                    <td><?= $item['ten_dang_nhap'] ?></td>
                    <td><?= $item['dia_chi'] ?></td>
                    
                    <!-- Bảo mật sđt -->
                    <?php
                        $sdt = $item['sdt'];
                        $sdt_private = substr($sdt, 0, 7);
                    ?>
                    <td><?= $sdt_private . '***'  ?></td>
                    <td><?= $item['email'] ?></td>
                    <td class="d-flex justify-content-center align-items-center"><?= $item['vai_tro'] == 0 ? '<span class="badge rounded-pill text-bg-danger">Admin</span>' : '<span class="badge rounded-pill text-bg-secondary">Khách hàng</span>' ?></td>
                    <td class='text-center'>
                        <a class='btn btn-info btn-sm text-light' href="?act=users-details&id=<?= $item['id_nguoi_dung'] ?>">Chi tiết</a>
                        <a class='btn btn-primary btn-sm' href="?act=users-edit&id=<?= $item['id_nguoi_dung'] ?>">Cập nhật</a>
                        <a class='btn btn-danger btn-sm' onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="?act=users-delete&id=<?= $item['id_nguoi_dung'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>