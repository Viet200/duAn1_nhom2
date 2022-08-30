<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật tin tức</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'news/update' ?>" method="post" enctype="multipart/form-data">
                    <input type="text" name="id" id="" value="<?= $cates['id']; ?>" hidden>
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên news</label>
                            <input type="text" name="news_name" value="<?= $cates['news_name']; ?>" class="form-control" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Hình</label><br>
                            <img src="<?= IMAGE_URL . $cates['news_img'] ?>" class="figure-img img-fluid rounded" alt="" width="150px" height="100px"><br>
                            <input type="file" name="news_img" class="form-control" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea name="content" class="form-control" aria-describedby="helpId" id="" cols="30" rows="10"><?= $cates['content']; ?> </textarea>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'news' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>