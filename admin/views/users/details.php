<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="?act=products" class='btn btn-primary btn-sm'>Quay lại danh sách sản phẩm</a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <div class="col-md-12 ">
        <div class="card mb-3">
            <div class="card-body">
                <!-- Tên sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tên người dùng</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $user['ten_nguoi_dung'] ?>
                    </div>
                </div>

                <hr>

                <!-- tên đăng nhập -->
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tên đăng nhập</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $user['ten_dang_nhap'] ?>
                    </div>
                </div>

                <hr>


                <!-- Mật khẩu -->
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Mật khẩu</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= !empty($user['mat_khau']) ? '*******' : 'Không tồn tại số điện thoại' ?>
                    </div>
                </div>

                <hr>
                
                <!-- Giá sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Địa chỉ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $user['dia_chi'] ?>
                    </div>
                </div>

                <hr>

                <!-- Số điện thoại -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Số điện thoại</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $user['sdt'] ?>
                    </div>
                </div>

                <hr>

                <!-- Danh mục sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $user['email'] ?>
                    </div>
                </div>

                <hr>

                <!-- Vai trò -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Vai trò</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?= $user['vai_tro'] == 0 ? '<span class="badge rounded-pill text-bg-danger">Admin</span>' : '<span class="badge rounded-pill text-bg-secondary">Khách hàng</span>' ?>
                    </div>
                </div>

                <hr>

                <!-- Danh mục sp -->
                <div class="row d-flex align-items-center">  
                    <div class="col-2">
                        <a class='btn btn-primary btn-sm' href="?act=users-edit&id=<?= $user['id_nguoi_dung'] ?>">Cập nhật bản ghi</a>                      
                    </div>     
                </div>
                
            </div>
        </div>
    </div>
</div>