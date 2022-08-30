<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <h4>Danh sách sản phẩm</h4>
                            <div class="form-group">
                                <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Hình sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th>Tình trạng</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'sanpham/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1  ?></td>
                                <td><?= $item['title'] ?></td>
                                <td><?= number_format($item['price']) ?> VNĐ</td>
                                <td><?= number_format($item['discount']) ?> VNĐ</td>
                                <td><img src="<?= IMAGE_URL . $item['thumbnail'] ?>" with="150px" height="100px" alt=""></td>
                                <td><textarea cols="30" rows="5"><?= $item['description'] ?></textarea></td>
                                <td><?= $item['number'] ?> </td>
                                <td><?= $item['status'] == 1 ? "Còn hàng" : "Hết hàng" ?></td>
                                <td><?= $item['name_cate'] ?> </td>
                                <td><?= $item['name_brand'] ?> </td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'sanpham/capnhat?id=' . $item['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'sanpham/xoa?id=' . $item['id'] ?>', '<?= $item['title'] ?>')" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>