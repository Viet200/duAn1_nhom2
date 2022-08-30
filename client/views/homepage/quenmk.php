<div style="margin-top: 50px;" class="my-account-area">
    <div class="container">
        <div class="row">
            <div style="margin-top: 30px;" class="col-md-6">
                <form action="<?= BASE_URL . 'quenmk' ?>" method="POST">
                    <div class="form-fields">
                        <h2>BẠN QUÊN MẬT KHẨU ?</h2>
                        <?php if ($loi != "") { ?>
                            <h2 style="color: red;"><?= $loi ?></h2>
                        <?php } ?>
                        <?php if ($success != "") { ?>
                            <h2 style="color: green;"><?= $success ?></h2>
                        <?php } ?>
                        <p>
                            <label>Nhập Email<span class="required">*</span></label>
                            <input value="<?php if (isset($email) == true) echo $email ?>" type="email" name="email" />
                        </p>
                    </div>
                    <div class="form-action">
                        <p class="lost_password"><a style="margin-right:10px;" href="<?= BASE_URL . 'dang-ky' ?>">Đăng ký tài khoản</a></p>
                        <p class="lost_password"><a href="<?= BASE_URL . 'dangnhap' ?>">Đăng nhập</a></p>
                        <input type="submit" value="Gửi yêu cầu" name="btn_quenmk" />
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="" src="./public/uploads/login-bn.png">
            </div>
        </div>
    </div>
</div>