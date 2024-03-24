<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . '?act=cart' ?>">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <h4>Bộ lọc</h4>
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="category">Danh mục:</label>
                        <select class="form-control" name="catalogue_id">
                            <option value="">Tất cả</option>
                            <?php foreach ($catalogues as $catalogue) : ?>
                                <option value="<?= $catalogue['id'] ?>"><?= $catalogue['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="price">Giá thấp nhất:</label>
                        <input type="number" class="form-control" name="price_min">
                    </div>
                    <div class="form-group">
                        <label for="price">Giá cao nhất:</label>
                        <input type="number" class="form-control" name="price_max">
                    </div>
                    <button type="submit" name="search" class="btn btn-primary mt-3">Áp dụng</button>
                </form>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top img-responsive" height="300px" src="<?= BASE_URL . $product['img_thumbnail'] ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $product['name'] ?></h4>
                                    <p class="card-text"><?= $product['overview'] ?></p>
                                    <p class="card-text"><strong>Giá:</strong> <?= $product['price_regular'] ?></p>
                                    <p class="card-text"><strong>Giảm giá:</strong> <?= $product['price_sale'] ?></p>
                                    <?php 
                                        $product_price = $product['price_sale'] ?? $product['price_regular'];
                                    ?>
                                    <a href="<?= BASE_URL . 
                                        '?act=addToCart&id_product=' . $product['id'] .
                                        '&product_name=' . $product['name'] .
                                        '&product_image=' . $product['img_thumbnail'] .
                                        '&product_price=' . $product_price
                                        ?>" class="btn btn-primary"
                                        onclick="return confirm('Bạn có muốn thêm sản phẩm vào giỏ hàng không?')">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>