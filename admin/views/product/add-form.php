<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'sanpham/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="title" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="price" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input type="text" name="discount" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Hình sản phẩm</label>
                            <input type="file" name="thumbnail" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="description" class="form-control" placeholder="" aria-describedby="helpId" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Số lượng</label>
                            <input type="number" name="number" value="<?php echo $lis['number']; ?> " class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="status" name="status" value="1" type="checkbox">
                                <label class="form-check-label" for="status">Còn hàng</label>
                            </div>
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
                                foreach ($brand as $thuonghieu) {
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