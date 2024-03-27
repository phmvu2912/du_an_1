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
                        <h6 class="mb-0">Tên sản phẩm</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $product['ten_sp'] ?>
                    </div>
                </div>

                <hr>

                <!-- Thumbnail -->
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Thumbnail</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <img src="<?= BASE_URL . $product['thumbnail'] ?>" alt=<?= $product['ten_sp'] ?> width='100px'>
                    </div>
                </div>

                <hr>


                <!-- Ảnh sản phẩm -->
                <div class="row d-flex align-items-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Ảnh sản phẩm</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php $imagePaths = explode(',', $product['anh_sp']); ?>
                        <?php foreach ($imagePaths as $img): ?>
                                    <img src="<?= BASE_URL . $img ?>" width='100px'>
                        <?php endforeach ?>
                    </div>
                </div>

                <hr>
                
                <!-- Giá sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Giá sản phẩm</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $product['gia_sp'] ?>
                    </div>
                </div>

                <hr>

                <!-- Mô tả sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Mô tả</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $product['mo_ta'] ?>
                    </div>
                </div>

                <hr>

                <!-- Danh mục sp -->
                <div class="row d-flex align-items-center">                    
                    <div class="col-sm-3">
                        <h6 class="mb-0">Thuộc danh mục</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?= $product['ten_dm'] ?>
                    </div>
                </div>

                <hr>

                <!-- Danh mục sp -->
                <div class="row d-flex align-items-center">  
                    <div class="col-2">
                        <a class='btn btn-primary btn-sm' href="?act=products-edit&id=<?= $product['id_sp'] ?>">Cập nhật bản ghi</a>                      
                    </div>     
                </div>
                
            </div>
        </div>
    </div>
</div>