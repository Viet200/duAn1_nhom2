<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) : ?>
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" src="<?= IMAGE_URL . $_SESSION['auth']['avatar'] ?>"><br>
                    <span class="font-weight-bold" style="font-size: 18px;"><?= $_SESSION['auth']['fullname'] ?></span><br>
                    <span class="text-black-50" style="font-size: 18px;"><?= $_SESSION['auth']['email'] ?></span>
                    <span> </span>
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">THÔNG TIN TÀI KHOẢN</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Họ Và Tên:</label>
                            <h5 style="margin-left:40px ;"><?= $_SESSION['auth']['fullname'] ?></h5>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email:</label>
                            <h5 style="margin-left:40px ;"><?= $_SESSION['auth']['email'] ?></h5>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Số điện thoại:</label>
                            <h5 style="margin-left:40px ;"><?= $_SESSION['auth']['phone_number'] ?></h5>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Địa Chỉ:</label>
                            <h5 style="margin-left:40px ;"><?= $_SESSION['auth']['address'] ?></h5>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="<?= BASE_URL . 'my-user/edit?id=' . $_SESSION['auth']['id'] ?>" class="btn btn-primary profile-button">Chỉnh Sửa</a>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>