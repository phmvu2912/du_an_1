<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới sản phẩm</h1>
        <a href="<?= BASE_URL_ADMIN . '?act=products' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Quay lại danh sách sản phẩm
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">       
        <?php
        if (!empty ($_POST)) {
            if ($flag == false) {
                echo '<div class="alert alert-danger">
                        <p>Không thể thêm bản ghi khi không có dữ liệu!</p>
                    </div>';
            }
        }
        ?>
        
        <form 
            action="" 
            method="POST" 
            class="row g-3"
            enctype='multipart/form-data'
        >
            <!-- Tên sản phẩm -->
            <div class="col-12">
                <label for="inputName" class="form-label font-weight-bold">Nhập tên sản phẩm:</label>
                <input type="text" class="form-control" id="inputName" name="name">
                <div class="text-danger">
                    <span><?= $priceErr ?></span>
                </div>
            </div>

            <!-- Ảnh đại diện -->
            <div class="col-12">
                <label for="formFile" class="form-label font-weight-bold">Chọn ảnh sản phẩm:</label>
                <input class="form-control" type="file" id="formFile" name="thumbnail">
            </div>

            <!-- Ảnh chi tiết -->
            <div class="col-12">
                <label for="formFile" class="form-label font-weight-bold">Chọn nhiều ảnh sản phẩm:</label>
                <input class="form-control" type="file" id="formFile" name="images[]" multiple>
            </div>

            <!-- Giá sản phẩm -->
            <div class="col-6">
                <label for="inputPrice" class="form-label font-weight-bold">Nhập giá sản phẩm:</label>
                <input type="number" class="form-control" id="inputPrice" name="price">
            </div>

            <!-- Chọn danh mục -->
            <div class="col-6">
                <label for="inputState" class="form-label font-weight-bold">Chọn danh mục</label>
                <select id="inputState" class="form-control text-center" name="catalogues">
                    <option selected>-- Chọn danh mục sản phẩm --</option>
                    <?php foreach ($catalogues as $catalog): ?>
                            <option name="catalog" value="<?= $catalog['id_danh_muc'] ?>"><?= $catalog['ten_dm'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            
            <!-- Mô tả sản phẩm -->
            <!-- Tên sản phẩm -->
            <div class="col-12">
                <label for="inputName" class="form-label font-weight-bold">Nhập mô tả sản phẩm:</label>
                <textarea rows=5 class="form-control" id="inputName" name="description"></textarea>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="submit" class="btn btn-primary">Nhập lại</button>
            </div>
        </form>
    </div>
</div>