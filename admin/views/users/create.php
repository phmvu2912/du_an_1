<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới tài khoản</h1>
        <a href="?act=users" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Quay lại danh sách tài khoản</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="POST" class="row">
            <!-- Tên người đùng -->
            <div class="col-6 mb-2">
                <label for="inputName" class="form-label font-weight-bold">Nhập tên người dùng:</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>

            <!-- Tên đăng nhập -->
            <div class="col-6 mb-2">
                <label for="inputUser" class="form-label font-weight-bold">Nhập tên đăng nhập:</label>
                <input type="text" class="form-control" id="inputUser" name="user">
            </div>
            
            <!-- Mật khẩu -->
            <div class="col-6 mb-2">
                <label for="inputPass" class="form-label font-weight-bold">Nhập mật khẩu:</label>
                <input type="password" class="form-control" id="inputPass" name="pass">
            </div>

            <!-- Email -->
            <div class="col-6 mb-2">
                <label for="inputEmail" class="form-label font-weight-bold">Nhập địa chỉ email:</label>
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>

            <!-- SĐT -->
            <div class="col-6 mb-2">
                <label for="inputPhone" class="form-label font-weight-bold">Nhập số điện thoại:</label>
                <input type="number" class="form-control" id="inputPhone" name="phone">
            </div>

             <!-- Chọn vai trò -->
             <div class="col-6 mb-2">
                <label for="inputState" class="form-label font-weight-bold">Chọn vai trò</label>
                <select id="inputState" class="form-control text-center" name="type">
                    <option selected>-- Chọn vai trò người dùng --</option>
                    <option name="" value="0">Admin</option>
                    <option name="" value="1" selected>Người dùng</option>
                </select>
            </div>

            <!-- Địa chỉ -->
            <div class="col-12 mb-3">
                <label for="inputLocation" class="form-label font-weight-bold">Nhập địa chỉ:</label>
                <input type="text" class="form-control" id="inputLocation" name="location">
            </div>

           
            
            <div class="col-12 mb-2">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
            </div>
        </form>
    </div>
</div>