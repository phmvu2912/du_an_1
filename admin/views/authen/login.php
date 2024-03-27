<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .button {
            background-color: #ba68c8;
            color: white;
        }

        .button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="<?= BASE_URL . '/uploads/authen/banner-img.png' ?>"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="POST" >
                        <?php 
                            if(isset($_SESSION['error'])) : ?>
                                <div class="alert alert-danger">
                                    <?= $_SESSION['error'] ?>
                                </div>
                                <?php unset($_SESSION['error']); ?>
                        <?php endif ?>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">ĐĂNG NHẬP</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">                           
                            <input 
                                type="email" 
                                class="form-control form-control-lg"               
                                placeholder="Nhập tên tài khoản hoặc email"
                                name="email"
                            />                           
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input 
                                type="password" 
                                id="form3Example4" 
                                class="form-control form-control-lg"
                                placeholder="*****" 
                                name="password"
                            />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Lưu thông tin đăng nhập
                                </label>
                            </div>
                            <a href="#!" class="text-body">Quên mật khẩu?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <!-- Đăng nhập -->
                            <button type="submit" class="button btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                                Đăng nhập
                            </button>
                                
                            <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản? <a href="#!" class="link-danger">Đăng ký tại đây</a></p>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>