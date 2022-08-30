<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <h4>Danh sách thương hiệu</h4>
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
                        <th>Tên thương hiệu</th>
                        <th>Hiển thị menu</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'thuong-hieu/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>

                        <?php foreach ($cates as $index => $item) :
                        ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name_brand'] ?></td>
                                <td><?= $item['show_menu'] == 1 ? "Có" : "Không" ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'thuong-hieu/capnhat?id=' . $item['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'thuong-hieu/xoa?id=' . $item['id'] ?>', '<?= $item['name_brand'] ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
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