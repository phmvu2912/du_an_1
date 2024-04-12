<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang cá nhân</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/client/css/profile.css">
    <script src="https://kit.fontawesome.com/7d1c352b9d.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once PATH_VIEW . 'layouts/partials/header.php'; ?>

    <?php if(empty($_SESSION['user'])) { ?>
        <div style="text-align: center; height: 400px">
            <script>
                confirm('Bạn chưa đăng nhập! Hệ thống đang điều hướng sang trang đăng nhập!');
            </script>
        </div>
    <?php } else { ?>
        <main>
            <!-- Banner -->
            <section class="personal">
                <div class="personal-background">
                    <div class="container">
                        <div class="personal-info">
                            <img src="https://picsum.photos/200" alt="">
    
                            <div class="">
                                <div class="name">
                                    <b><?= $fullname == null ? 'Thông tin đang trống' : $fullname ?></b>
                                    <br>
                                    <p><b>Tên đăng nhập: </b><?= $username == null ? 'Thông tin đang trống' : $username ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Nếu user trống 1 trong các thông tin cá nhân thì xuất hiện đoạn code này -->
            <?php if(empty($username) || empty($fullname) || empty($password) || empty($location) || empty($phone) || empty($email)) { ?>
                <div class="alert">
                    <div class="container">
                        <div class="alert-items">
                            <i class="fa-solid fa-pen-to-square fa-fw"></i>
                            <p>Phát hiện ra một số thông tin cá nhân còn thiếu! <a href="?act=profile-edit&id=<?= $id_user ?>">Thiết lập ngay</a></p>
                        </div>
                    </div>
                </div>  
            <?php } else { ?>

            <?php } ?>
            
    
            <div class="container">
                <section>
                    <div class="orders-heading">
                        <h3>Đơn hàng</h3>
    
                        <div class="history-orders">
                            <a href="">Xem lịch sử đơn hàng</a>
                            <i class="fa-solid fa-greater-than"></i>
                        </div>
                    </div>
                    <div class="orders-items">   
                        <div class="o-item">
                            <i class="fa-solid fa-wallet"></i>
                            <a href="">Chờ xác nhận</a>
                        </div>
                        <div class="o-item">
                            <i class="fa-solid fa-box"></i>
                            <a href="">Chờ lấy hàng</a>
                        </div>
                        <div class="o-item">
                            <i class="fa-solid fa-truck"></i>
                            <a href="">Đang vận chuyển</a>
                        </div>
                        <div class="o-item">
                            <i class="fa-solid fa-comment"></i>
                            <a href="">Đã bình luận</a>
                        </div>
                    </div>
                </section>
    
                <hr>
    
            </div>
        </main>
    <?php } ?>

    <?php require_once PATH_VIEW . 'layouts/partials/footer.php'; ?>
</body>

</html>