<div style="margin: 80px 0px" class="my-account-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= BASE_URL . 'dangnhap' ?>" method="POST">
                    <div class="form-fields">
                        <h2>ĐĂNG NHẬP</h2>
                        <?php if (isset($loi)) { ?>
                            <h2 style="color: red;"><?= $loi ?></h2>
                        <?php } ?>
                        <p>
                            <label>Email <span class="required" style="color: red;">*</span></label>
                            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />

                            <?php if (isset($err['email'])) { ?>
                                <span style="color:red;">*<?php echo $err['email']; ?></span>
                            <?php } ?>
                        </p>
                        <p>
                            <label>Password <span class="required" style="color: red;">*</span></label>
                            <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" />

                            <?php if (isset($err['password'])) { ?>
                                <span style="color:red;">*<?php echo $err['password']; ?></span>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="form-action">
                        <p class="lost_password"><a style="margin-right:10px;" href="<?= BASE_URL . 'dang-ky' ?>">Đăng ký tài khoản</a></p>
                        <p class="lost_password"><a href="<?= BASE_URL . 'quenmk' ?>">Quên mật khẩu</a></p>
                        <input type="submit" value="ĐĂNG NHẬP" name="dangnhap" />
                        <!-- <label><input type="checkbox" />Remember me </label> -->
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="cl" src="./public/uploads/login-bn.png">
            </div>
        </div>
    </div>
</div>