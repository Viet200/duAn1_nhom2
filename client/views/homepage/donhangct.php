<div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
    
    <div class="h4">Đơn Hàng Chi Tiết</div>
    <div style="text-align: center;" class="text-uppercase">
        <p>Ngày đặt hàng :<?= $list[0]['updated_at'] ?></p>
        <p>Trạng thái đơn hàng :<?= $list[0]['id_ttdh'] ?></p>
    </div>
    <div class="pt-1">
        <p>Đơn hàng  :<?= $list[0]['id'] ?> <b class="text-dark"></b></p>
    </div>
    <a href="<?= BASE_URL . 'donhangdm'?>"><div class="btn close text-white"> &times;
    </div></a>
</div>
<div class="wrapper bg-white">
    <div style="height: 500px;" class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col" class="text-right">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
          <?php foreach ($oder as $index => $item) : ?>
                <tr>
                    <td scope="col">
                        <div class="mx-3"> <img src="<?= IMAGE_URL . $item['thumbnail'] ?> " width="100px"></div>
                    </td>
                    <td>
                        <div><b><?= $item['title']?></b></div>
                    </td>
                    <td>
                        <div><b><?= $item['quantity']?></b></div>
                    </td>
                    <td class="text-right"><b><?= number_format($item['price'])?>vnđ</b></td>
                </tr>
                <hr>
          <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom">
        <div style="color: red;font-size: 32px;"> Thành tiền </div>
        <div style="color:red;" class="ml-auto h5"><?= number_format($list[0]['total_price']) ?> vnđ </div>
    </div>
    <div class="row border rounded p-1 my-3">
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b style="font-size:24px;">Địa Chỉ Giao Hàng</b>
              <br>
                <p style="font-size:18px;" class="text-justify pt-2"><?= $list[0]['customer_address'] ?></p>
            </div>
        </div>
    </div>
  </div>
  </div>