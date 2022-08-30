<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title d-flex justify-content-center">Cập nhật thông tin tài khoản</h3>
        <form action="<?= BASE_URL . 'my-user/update' ?>" method="post" enctype="multipart/form-data">
          <div class="col-6 offset-3">
            <input type="hidden" name="id" value="<?php echo $cates['id']; ?>">
            <div class="form-group">
              <label for="">Họ và tên</label>
              <input type="text" name="fullname" required class="form-control" placeholder="<?php echo $cates['fullname']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" required class="form-control" placeholder="<?php echo $cates['email']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">password</label>
              <input type="password" name="password" required class="form-control" placeholder="<?php echo $cates['password']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Số điện thoại</label>
              <input type="text" name="phone_number" required class="form-control" placeholder="<?php echo $cates['phone_number']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="address" required class="form-control" placeholder="<?php echo $cates['address']; ?>" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Avatar</label>
              <img src="<?php echo $cates['avatar']; ?>">
              <input type="file" name="avatar" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <br>
            <div class="d-flex justify-content-center">
              <a href="<?= BASE_URL . 'my-user' ?>" class="btn btn-sm btn-danger">Hủy</a>
              &nbsp;
              <button type="submit" class="btn btn-sm btn-primary">Chỉnh sửa</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>