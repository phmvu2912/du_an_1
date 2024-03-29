<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới tài khoản</h1>
        <a href="?act=vouchers" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Quay lại danh sách khuyến mãi</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="alert">
            <?php 
                if($status == false) : ?>
                    <div class="alert alert-danger">
                        <?= $err ?>
                    </div>
            <?php endif ?>
        </div>
        <form action="" method="POST" class="row">
            <!-- Tên người đùng -->
            <div class="col-6 mb-2">
                <label for="inputName" class="form-label font-weight-bold">Nhập mã khuyến mãi:</label>
                <input type="text" class="form-control" id="inputCode" name="code">
            </div>

            <!-- Tên đăng nhập -->
            <div class="col-6 mb-2">
                <label for="inputUser" class="form-label font-weight-bold">Nhập giá trị (%):</label>
                <input type="text" class="form-control" id="inputValue" name="value">
            </div>
            
            <!-- Mật khẩu -->
            <div class="col-6 mb-2">
                <label for="inputPass" class="form-label font-weight-bold">Nhập ngày bắt đầu:</label>
                <input type="date" class="form-control" id="inputMGF" name="start">
            </div>

            <!-- Email -->
            <div class="col-6 mb-2">
                <label for="inputEXP" class="form-label font-weight-bold">Nhập ngày hết hạn:</label>
                <input type="date" class="form-control" id="inputEXP" name="end">
            </div>    
            
            <div class="col-12 mb-2">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
            </div>
        </form>
    </div>
</div>
