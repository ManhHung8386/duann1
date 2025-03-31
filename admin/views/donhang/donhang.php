<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- nhập content -->
                 <?php
 if (isset($_SESSION['thongbao'])) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Thông báo:</strong> ' . $_SESSION['thongbao'] . '
          </div>';
    unset($_SESSION['thongbao']);
}
                 ?>
                <h2>Danh sách đơn hàng</h2>
<table class="table table-bordered table-striped" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Người đặt</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($donhangs as $donhang): ?>
            <tr>
                <td><?= $donhang['ma_don_hang'] ?></td>
                <td><?= $donhang['ten'] ?></td>
                <td><?= $donhang['ngay_dat'] ?></td>
                <td><?= number_format($donhang['tong_tien'], 0, ',', '.') ?> VNĐ</td>
                <td>
                    <?=
                   $donhang['trang_thai']
                    ?>
                </td>
                <td>
                    <a class="btn btn-primary" href="index.php?act=admin_donhang_detail&id=<?= $donhang['ma_don_hang'] ?>">Xem chi tiết</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

            </div>
        </div>
    </div>
</div>