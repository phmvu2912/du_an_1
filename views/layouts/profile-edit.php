<div class="container" >
            <div class="info-edit" style="margin: 50px 0">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="info-left">
                        <div class="img">
                            <img src="<?= $user['avatar'] ?>" alt="">
                        </div>

                        <input type="file" name="avatar" id="">
                    </div>
                    <div class="info-right">
                        <!-- Tên người dùng -->
                        <div class="info-group">
                            <label for="">Tên người dùng:</label>
                            <input type="text" name="fullname" id="" value='<?= $user['ten_nguoi_dung'] ?>'>
                        </div>
    
                        <!-- Tên đăng nhập -->
                        <div class="info-group">
                            <label for="">Tên đăng nhập:</label>
                            <input type="text" name="username" id="" value='<?= $user['ten_dang_nhap'] ?>'>
                        </div> 

                        <!-- Mật khẩu -->
                        <div class="info-group">
                            <label for="">Mật khẩu:</label>
                            <input type="password" name="password" id="" value='<?= $user['mat_khau'] ?>' >
                        </div>
    
                        <!-- Số điện thoại -->
                        <div class="info-group">
                            <label for="">Số điện thoại:</label>
                            <input type="text" name="phone" id="" value='<?= $user['sdt'] ?>' >
                        </div>
    
                        <!-- Địa chỉ -->
                        <div class="info-group">
                            <label for="">Địa chỉ:</label>
                            <input type="text" name="location" id="" value='<?= $user['dia_chi'] ?>' >
                        </div>
    
                        <!-- Email -->
                        <div class="info-group">
                            <label for="">Địa chỉ email:</label>
                            <input type="email" name="email" id="" value='<?= $user['email'] ?>'>
                        </div>

                        <div class="info-btn-group">
                            <button type='submit'>Cập nhật thông tin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>