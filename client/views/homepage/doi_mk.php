<div style="margin-top: 50px;" class="my-account-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="<?= BASE_URL . 'doi_mk' ?>" method="POST">
                    <div class="form-fields">
                        <h2>XÁC NHẬN TÀI KHOẢN</h2>
                        <h2><?php if (isset($error) && ($error != "")) echo $error; ?></h2>
                        <p>
                            <label>Mật khẩu mới<span class="required" style="color: red;">*</span></label>
                            <input type="pass" name="mknew" />
                        </p>
                        <p>
                            <label>Xác nhận mật khẩu<span class="required" style="color: red;">*</span></label>
                            <input type="" name="verifymk" />
                        </p>
                    </div>
                    <div class="form-action">
                        <input type="submit" value="XÁC NHẬN" name="btn_doimk" />
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img class="" src="<?= IMAGE_URL . 'dk1.jpg' ?>">
            </div>
        </div>
    </div>
</div>