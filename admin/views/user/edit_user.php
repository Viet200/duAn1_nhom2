<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Cập Nhật Tài Khoản</h3>
      </div>
      <div class="card-body">
        <form action="<?= ADMIN_URL . 'taikhoan/update-user' ?>" method="post" enctype="multipart/form-data">
          <div class="col-6 offset-3">
            <input type="hidden" name="id" value="<?= $cates['id']; ?>">
            <div class="form-group">
              <label for="">Họ và tên</label>
              <input type="text" name="fullname" class="form-control" value="<?= $cates['fullname']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" value="<?= $cates['email']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="">Mật khẩu</label>
              <input type="password" name="password" class="form-control" value="<?= $cates['password']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Số điện thoại</label>
              <input type="text" name="phone_number" class="form-control" value="<?= $cates['phone_number']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Địa chỉ</label>
              <input type="text" name="address" class="form-control" value="<?= $cates['address']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Avatar</label><br>
              <img src="<?= IMAGE_URL . $cates['avatar'] ?>" class="figure-img img-fluid rounded" alt="" width="150px" height="100px"><br>
              <input type="file" name="avatar" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="usr">Phân Quyền</label>
              <select class="form-control" name="role_id" id="role_id">
                <option value="">-- Chọn --</option>
                <?php
                foreach ($cates2 as $role) {
                  extract($role);
                  echo "<option value = '.$id.'>$name</option>";
                }
                ?>
              </select>
            </div>
            <br>
            <div class="d-flex justify-content-center">
              <a href="<?= ADMIN_URL . 'taikhoan' ?>" class="btn btn-sm btn-danger">Hủy</a>
              &nbsp;
              <button type="submit" class="btn btn-sm btn-primary">Thay Đổi</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>