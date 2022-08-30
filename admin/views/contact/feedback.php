<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Gửi email phản hồi cho khách hàng</h3>
      </div>
      <div class="card-body">
        <form action="<?= ADMIN_URL . 'contact/gui-phanhoi' ?>" method="post">
          <div class="col-6 offset-3">
            <div class="form-group">
              <label for="">Email người nhận</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="text" class="form-control" name="recciever" value="<?= $feedback['email'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="">Tiêu đề</label>
              <input type="text" name="title" class="form-control" placeholder="Tiêu đề.....">
            </div>
            <div class="form-group">
              <label for="">Nội dung</label>
              <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="d-flex justify-content-end">
              <a href="<?= ADMIN_URL . 'contact' ?>" class="btn btn-sm btn-danger">Hủy</a>
              &nbsp;
              <button type="submit" class="btn btn-sm btn-primary">Gửi</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>