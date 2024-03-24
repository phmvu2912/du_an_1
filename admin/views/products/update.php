<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Cập nhật sản phẩm</h1>
        <a href="<?= BASE_URL_ADMIN . '?act=products' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Quay lại danh sách sản phẩm
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="POST" class="row g-3">
            <!-- Tên sản phẩm -->
            <div class="col-12">
                <label for="inputName" class="form-label font-weight-bold">Nhập tên sản phẩm:</label>
                <input type="text" class="form-control" id="inputName" name="name" value="<?= $products['ten_sp'] ?>">
            </div>

            <!-- Ảnh sản phẩm -->
            <div class="col-12">
                <label for="formFile" class="form-label font-weight-bold">Chọn ảnh sản phẩm:</label>
                <input class="form-control" type="file" id="formFile" name="thumbnail" value="<?= $products['thumbnail'] ?>">
            </div>

            <!-- Giá sản phẩm -->
            <div class="col-6">
                <label for="inputPrice" class="form-label font-weight-bold">Nhập giá sản phẩm:</label>
                <input type="number" class="form-control" id="inputPrice" name="price" value="<?= $products['gia_sp'] ?>">
            </div>

            <!-- Chọn danh mục -->
            <div class="col-6">
                <label for="inputState" class="form-label font-weight-bold">Chọn danh mục</label>
                <select id="inputState" class="form-control text-center" name="catalogues">
                    <option>-- Chọn danh mục sản phẩm --</option>
                    <?php foreach ($catalogues as $catalog) : ?>
                        <option 
                            <?= $products['id_danh_muc'] == $catalog['id_danh_muc'] ? 'selected' : null ?>
                            value="<?= $catalog['id_danh_muc'] ?>">
                                <?= $catalog['ten_dm'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            
            <!-- Mô tả sản phẩm -->
            <!-- Tên sản phẩm -->
            <div class="col-12">
                <label for="inputDesc" class="form-label font-weight-bold">Nhập mô tả sản phẩm:</label>
                <textarea rows=5 class="form-control" id="inputDesc" name="description"><?= $products['mo_ta'] ?></textarea>      
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="submit" class="btn btn-primary">Nhập lại</button>
            </div>
        </form>
    </div>
</div>