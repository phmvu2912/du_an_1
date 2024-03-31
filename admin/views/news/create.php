<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="<?= BASE_URL_ADMIN . '?act=products' ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Quay lại danh sách bài viết
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data" class="row g-3">
            <!-- Tên bài viết -->
            <div class="col-12">
                <label for="inputHeading" class="form-label font-weight-bold">Nhập tên tiêu đề:</label>
                <input type="text" class="form-control" id="inputHeading" name="heading">
            </div>

            <!-- Ảnh bài viết -->
            <div class="col-12">
                <label for="formFile" class="form-label font-weight-bold">Chọn ảnh bài viết:</label>
                <input class="form-control" type="file" id="formFile" name="thumbnail">
            </div>

            <!-- Nội dung bài viết -->
            <div class="col-12">
                <label for="inputContent" class="form-label font-weight-bold">Nhập nội dung:</label>
                <textarea rows=5 class="form-control" id="inputContent" name="content"></textarea>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
            </div>
        </form>
    </div>
</div>