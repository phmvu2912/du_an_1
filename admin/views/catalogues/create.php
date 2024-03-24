<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Thêm mới danh mục</h1>
        <a href="<?= BASE_URL_ADMIN . '?act=catalogues' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Quay lại danh sách danh mục
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="POST" class="row g-3">
            <!-- Tên danh mục -->
            <div class="col-12">
                <label for="inputName" class="form-label font-weight-bold">Nhập tên danh mục:</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
            </div>
        </form>
    </div>
</div>