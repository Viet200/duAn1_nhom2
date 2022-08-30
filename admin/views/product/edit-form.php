<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'sanpham/update' ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $lis['id']; ?>">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="title" value="<?php echo $lis['title']; ?> " class="form-control" placeholder="Yêu cầu nhập tên sản phẩm" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="price" value="<?php echo $lis['price']; ?> " class="form-control" placeholder="yêu cầu nhập giá gốc" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input type="text" name="discount" value="<?php echo $lis['discount']; ?> " class="form-control" placeholder="yêu cầu nhập giá khuyến mãi" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Hình sản phẩm </label><br>
                            <img src="<?= IMAGE_URL . $lis['thumbnail'] ?>" class="figure-img img-fluid rounded" alt="" width="150px" height="100px"><br>
                            <input type="file" name="thumbnail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="description" value="" class="form-control" placeholder="yêu cầu nhập mô tả" aria-describedby="helpId" id="" cols="30" rows="10"><?php echo $lis['description']; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Số lượng</label>
                            <input type="text" name="number" value="<?php echo $lis['number']; ?> " class="form-control" placeholder="yêu cầu nhập số lượng" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="usr">Danh Mục Sản Phẩm:</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">-- Chọn --</option>
                                <?php
                                foreach ($cates as $category) {
                                    extract($category);
                                    echo "<option value = '.$id.'>$name</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Thương hiệu</label>
                            <select class="form-control" name="brand_id" id="brand_id">
                                <option value="">-- Chọn --</option>
                                <?php
                                foreach ($brand_id as $thuonghieu) {
                                    extract($thuonghieu);
                                    echo "<option value = '.$id.'>$name_brand</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'sanpham' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>