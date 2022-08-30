<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới thuong hiệu</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'thuong-hieu/luu-tao-moi' ?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên thương hiệu</label>
                            <input type="text" name="name_brand" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="show_menu" name="show_menu" value="1" type="checkbox">
                                <label class="form-check-label" for="show_menu">Hiển thị menu</label>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'thuong-hieu' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>