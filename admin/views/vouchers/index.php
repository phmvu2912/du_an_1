<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        <a href="?act=vouchers-add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm mã khuyễn mãi</a>
    </div>

    <!-- Content Row -->
    <div class="row">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class='text-center'>
                <th>Mã khuyến mãi</th>
                <th>Giá trị (%)</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày hết hạn</th>
                <th>Trạng thái</th>
                <th>Tools</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach($vouchers as $item) : ?>
                <tr class='text-center'>
                    <td><?= $item['ma_khuyen_mai'] ?></td>                    
                    <td><?= $item['gia_tri'] ?></td>
                    
                    <!-- Chuyển sang dạng ngày dd-mm-yyyy -->
                    <?php 
                        // Ngày bắt đầu
                        $mgfDate = $item['ngay_bat_dau'];

                        $start_timestamp = strtotime($mgfDate);

                        $start = date('d-m-Y', $start_timestamp);

                        // Ngày kết thúc
                        $expDate = $item['ngay_het_han'];  
                        
                        $end_timestamp = strtotime($expDate);

                        $end = date('d-m-Y', $end_timestamp);



                        // debug($end_timestamp);
                        
                    ?>
                    <td><?= $start ?></td>
                    <td><?= $end ?></td>

                    <!-- -->
                    <?php       
                        // debug($end);                
                        if($end_timestamp < $today) {
                            $status = 'Ngừng hoạt động';
                        } else {
                            $status = 'Đang hoạt động';
                        }
                    ?>
                    <td><?php echo $status === 'Đang hoạt động' ? '<span class="badge rounded-pill text-bg-success px-3 py-2" style="min-width: 150px;">Đang hoạt động</span>' : '<span class="badge rounded-pill text-bg-danger py-2" style="min-width: 150px;">Ngừng hoạt động</span>' ?></td>
                    
                    <td class='text-center'>
                        <a class='btn btn-info btn-sm text-light' href="?act=vouchers-details&id=<?= $item['id_khuyen_mai'] ?>">Chi tiết</a>
                        <a class='btn btn-primary btn-sm' href="?act=vouchers-edit&id=<?= $item['id_khuyen_mai'] ?>">Cập nhật</a>
                        <a class='btn btn-danger btn-sm' onclick="return confirm('Bạn có muốn xóa mã khuyến mãi này không?')" href="?act=vouchers-delete&id=<?= $item['id_khuyen_mai'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</div>