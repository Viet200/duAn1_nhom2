
<div style="font-size: 24px; color: blue;text-align: center; padding-top: 25px;" class="pl-3 font-weight-bold">Các Đơn Hàng Đã Đặt</div>
        <?php foreach ($_SESSION['dsdh'] as $index => $item) : ?>
                <div style="padding: 10px 100px;" class="ae">
                    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
                        <div style="font-weight: 800;color: green;">Mã đơn :  <b style="color:red;"><?= $item['id']?></b> </div>
                        <div style="font-weight: 800;color: green;">Ngày đặt : <b style="color:black;"><?= $item['updated_at']?></b></div>
                        <div style="font-weight: 800;">Trạng Thái: <b style="color:black;"><?= $item['id_ttdh']?></b></div>
                        <div style="font-weight: 800;color: green;"> Tổng: <b style="color:red;"><?= number_format($item['total_price'])?> vnđ</b></div>
                        <div ><a style="color:red;" href="<?= BASE_URL . 'donhangct?id=' . $item['id']?>">Xem chi tiết</a></div>
                    </div>
                </div>
        <?php endforeach ?>
