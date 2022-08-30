<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật Slide show</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'slide/update' ?>" method="post" enctype="multipart/form-data">
                    <input type="text" name="id" id="" value="<?php echo $cates['id']; ?>" hidden>
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên Slide</label>
                            <input type="text" name="slide_name" value="<?php echo $cates['slide_name']; ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh slide</label><br>
                            <img src="<?= IMAGE_URL . $cates['slideshow_img'] ?>" class="figure-img img-fluid rounded" width="500px" height="300px" alt=""><br>
                            <input type="file" name="slideshow_img" value="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'slide' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>