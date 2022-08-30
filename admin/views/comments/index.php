<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <h4>Danh sách bình luận</h4>
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
                        <th>MKH</th>
                        <th>Avarta</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Bình Luận</th>
                        <th>Thời Gian</th>
                    </thead>
                    <tbody>
                        <?php foreach ($cates as $item) :
                        ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['id_user'] ?></td>
                                <td><img height='40px' src="<?= $hinha ?>" alt="" class="rounded-circle"></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['emailcmt'] ?></td>
                                <td><?= $item['title'] ?></td>
                                <td><?= $item['contents'] ?></td>
                                <th style="font-weight: 500;"><?= $item['created_at'] ?></td>
                                <td>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'comments/xoa?id=' . $item['id'] ?>', '<?= $item['contents'] ?>')" class="btn btn-sm btn-danger">
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