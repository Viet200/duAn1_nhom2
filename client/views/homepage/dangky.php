<div style="margin: 80px 0px" class="my-account-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= BASE_URL . 'dang-ky' ?>" method="POST">
                    <div class="form-fields">
                        <h2>Đăng ký</h2>
                        <?php if (isset($success)) { ?>
                            <h2 style="color: green;"><?= $success ?></h2>
                        <?php } ?>
                        <p>
                            <label>Họ và tên <span class="required" style="color: red;">*</span></label>
                            <input type="text" name="fullname" value="<?php if (isset($_POST['fullname'])) echo $_POST['fullname']; ?>" />
                            <?php if (isset($err['fullname'])) { ?>
                                <span style="color:red;">*<?php echo $err['fullname']; ?></span>
                            <?php } ?>
                        </p>
                        <p>
                            <label>Email <span class="required" style="color: red;">*</span></label>
                            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
                            <?php if (isset($err['email'])) { ?>
                                <span style="color:red;">*<?php echo $err['email']; ?></span>
                            <?php } ?>
                        </p>
                        <p>
                            <label>Mật khẩu <span class="required" style="color: red;">*</span></label>
                            <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" />
                            <?php if (isset($err['password'])) { ?>
                                <span style="color:red;">*<?php echo $err['password']; ?></span>
                            <?php } ?>
                        </p>
                        <p>
                            <label>Nhập lại mật khẩu <span class="required" style="color: red;">*</span></label>
                            <input type="password" name="repassword" value="<?php if (isset($_POST['repassword'])) echo $_POST['repassword']; ?>" />
                            <?php if (isset($err['repassword'])) { ?>
                                <span style="color:red;">*<?php echo $err['repassword']; ?></span>
                            <?php } ?>
                            <?php if (isset($err['checkmk'])) { ?>
                                <span style="color:red;">*<?php echo $err['checkmk']; ?></span>
                            <?php } ?>
                        </p>
                        <p>
                            <label>Số điện thoại <span class="required" style="color: red;">*</span></label>
                            <input type="text" name="phone_number" value="<?php if (isset($_POST['phone_number'])) echo $_POST['phone_number']; ?>" />
                            <?php if (isset($err['phone_number'])) { ?>
                                <span style="color:red;">*<?php echo $err['phone_number']; ?></span>
                            <?php } ?>
                        </p>
                        <p>
                            <label>Địa chỉ <span class="required" style="color: red;">*</span></label>
                            <input type="text" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" />
                            <?php if (isset($err['address'])) { ?>
                                <span style="color:red;">*<?php echo $err['address']; ?></span>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="form-action">
                        <input type="submit" value="Đăng ký" name="btn_dangky" />
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="" src="./public/uploads/dk1.jpg">
            </div>
        </div>
    </div>
</div>