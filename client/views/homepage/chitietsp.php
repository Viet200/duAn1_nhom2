<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
                        <li><a href="shop.html">Shop</a> <i class="fa fa-angle-right"></i></li>
                        <li><a href="#">Women</a> <i class="fa fa-angle-right"></i></li>
                        <li><?= $item[0]['title'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- product-simple-area start -->
<div class="product-simple-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-product-image">
                    <a href="#"><img src="<?= IMAGE_URL . $item[0]['thumbnail'] ?>" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-product-info">
                    <div class="product-nav">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <h1 class="product_title"><?= $item[0]['title'] ?></h1>
                    <div class="price-box">
                        <span class="new-price">£<?= $item[0]['discount'] ?></span>
                        <span class="old-price">£<?= $item[0]['price'] ?></span>
                    </div>
                    <div class="pro-rating">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                    </div>
                    <div class="short-description">
                        <p><?= $item[0]['description'] ?></p>
                    </div>
                    <div class="stock-status">
                        <label>Availability</label>: <strong>In stock</strong>
                    </div>
                    <form action="">
                        <div class="quantity">
                            <input type="number" value="1" />
                            <BUtton><a href="<?= BASE_URL . 'add-to-cart?id=' . $item[0]['id'] ?>">THÊM GIỎ HÀNG</a> </BUtton>
                        </div>
                    </form>
                    <div class="add-to-wishlist">
                        <a href="#" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i></a>
                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                    </div>
                    <div class="share_buttons">
                        <a href="#"><img src="img/share-img.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-simple-area end -->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="product-tabs">
                    <div class="product__tabs_inner">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs description-list" role="tablist">
                            <li role="presentation"><a href="#page-comments" aria-controls="page-comments" role="tab" data-toggle="tab">Bình Luận</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane" id="page-comments">
                                <div class="product-tab-desc">
                                    <div class="product-page-comments">
                                        <h2>Để lại bình luận sản phẩm</h2>
                                        <?php foreach ($cmt as $cmts) : ?>
                                            <ul>
                                                <li>
                                                    <div class="product-comments">
                                                        <p style="width: 40px;"><img src="<?= $cmts['avtcmt'] ?>" alt="" class="rounded-circle"></p>
                                                        <div class="product-comments-content">
                                                            <p><strong style="color:blue;"><?= $cmts['name'] ?></strong><br>
                                                                <span><?= $cmts['created_at'] ?></span>
                                                            </p>
                                                            <div style="font-size: 15px;color:black;" class="desc">
                                                                <?= $cmts['contents'] ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                        <?php endforeach; ?>
                                        <div class="review-form-wrapper">
                                            <h3>Add a review</h3>
                                            <form action="" method="post">
                                                <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) : ?>
                                                    <input type="text" name="name" value="<?= $_SESSION['auth']['fullname'] ?>" />
                                                    <input type="email" name="emailcmt" value="<?= $_SESSION['auth']['email'] ?>" />
                                                <?php else : ?>
                                                    <h5>Bạn phải đăng nhập mới có thể bình luận</h5>
                                                <?php endif ?>
                                               
                                                <?php 
                                                if(isset($_SESSION['auth'])){
                                                    echo '<textarea id="product-message" required name="contents" cols="30" rows="10" placeholder="Bình luận"></textarea>
                                                    <input type="submit" name="comment" value="Bình Luận" />';
                                                  }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="upsells_products_widget">
                       
                        <div class="row">
                            <div class="top-sells-curosel">
                                <!-- single-product start -->
                                <?php foreach ($itemcungloais as $itemcungloai) : ?>
                                    <div class="col-12">
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="<?= BASE_URL . 'chitietsp?id=' . $itemcungloai['id'] ?>">
                                                    <img class="primary-image" src="<?= IMAGE_URL ?><?= $itemcungloai['thumbnail'] ?>" alt="" />
                                                </a>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-cart">
                                                            <a href="<?= BASE_URL . 'add-to-cart?id=' . $itemcungloai['id'] ?>">THÊM GIỎ HÀNG</a>
                                                        </div>
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $itemcungloai['id'] ?>"><?= $itemcungloai['title'] ?></a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price"><?= $itemcungloai['discount'] ?>đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                                <!-- single-product end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- widget-recent start -->
                <aside class="widget top-product-widget">
                    <h3 class="sidebar-title">SẢN PHẨM CÙNG LOẠI</h3>
                    <ul>
                        <?php foreach ($itemcungloais as $itemcungloai) : ?>
                            <li>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?= BASE_URL . 'chitietsp?id=' . $itemcungloai['id'] ?>">
                                            <img class="primary-image" src="<?= IMAGE_URL ?><?= $itemcungloai['thumbnail'] ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="pro-info">
                                            <h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $itemcungloai['id'] ?>"><?= $itemcungloai['title'] ?></a></h2>
                                            <div class="price-box">
                                                <span class="new-price"><?= $itemcungloai['price'] ?>đ</span>
                                                <span class="old-price"><?= $itemcungloai['discount'] ?>đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </aside>
                <!-- widget-recent end -->
            </div>
        </div>
    </div>
</div>

<!-- brand-area start -->
<div class="brand-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>Our Brands</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="brand-curosel">
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12"> 
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->