<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <h4>Danh sách liên hệ</h4>
                            <div class="form-group">
                                <!--làm dòng tìm kiếm tại đây-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Ngày Tạo</th>
                    </thead>
                    <tbody>
                        <?php foreach ($itemcontacts as $itemcontact) : ?>
                            <tr>
                                <td><?= $itemcontact['id'] ?></td>
                                <td><?= $itemcontact['name'] ?></td>
                                <td><?= $itemcontact['email'] ?></td>
                                <td><?= $itemcontact['phone_number'] ?></td>
                                <td><?= $itemcontact['subject_name'] ?></td>
                                <td><?= $itemcontact['note'] ?></td>
                                <th><?= $itemcontact['created_at'] ?></th>
                                <td>
                                    <a href="<?= ADMIN_URL . 'contact/phanhoi?id=' . $itemcontact['id'] ?>" class="btn btn-sm btn-info">Phản hồi</a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'contact/xoa?id=' . $itemcontact['id'] ?>' , '<?= $itemcontact['name'] ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>