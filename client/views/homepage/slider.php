<div class="slider-wrap">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <?php foreach ($itemsl as $newitem) : ?>
                    <li data-transition="parallaxtoright,parallaxtoleft" data-slotamount="7" data-masterspeed="600" data-saveperformance="off"> <img src="<?= IMAGE_URL . $newitem['slideshow_img'] ?>" alt="banner_slider02" data-bgposition="left bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption customin" data-x="304" data-y="111" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:3;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1500" data-easing="easeInOutExpo" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5;"><img src="<?= CLIENT_ASSET ?>img/slider/slider-1/slider-text-1.png" alt="">
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!----------------------------------- and slider ------------------------------------------->
<div class="features-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>SẢN PHẨM NỔI BẬT</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="col-md-12">
                <div class="features-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation" class="active"><a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Men</a></li>
           
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="features-curosel">
                                    <!-- single-product start -->
                                    <?php foreach ($items as $item) : ?>
                                        <div class="col-12">
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>">
                                                        <img class="primary-image" src="<?= IMAGE_URL . $item['thumbnail'] ?>" alt="" />
                                                    </a>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-cart">
                                                                <a href="<?= BASE_URL . 'add-to-cart?id=' . $item['id'] ?>">THÊM GIỎ HÀNG</a>
                                                            </div>
                                                            <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) { ?>
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="<?= BASE_URL . 'addfavorite?id=' . $item['id'] ?>" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                             
                                                            <?php } else { ?>
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="<?= BASE_URL . 'dangnhap' ?>" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i>
                                                                        </a>
                                                                    </div>
                                                                  
                                                                </div>
                                                               
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>"><?= $item['title'] ?></a></h2>
                                                   
                                                    <div class="price-box">
                                                        <span class="new-price"><?=number_format( $item['discount']) ?>đ</span>
                                                        <span class="old-price"><?=number_format( $item['price'] )?>đ</span>
                                                    </div>
                                                    <span class="content__product-general-status">View:
                                                        <?= $item['view'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =======================END SẢN PHẨM NỔI BẬT=============================== -->

<!-- ======================= SẢN PHẨM MỚI=============================== -->
<div class="new-product-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>SẢN PHẨM MỚI</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="col-md-12">
                <div class="features-tab">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="features-curosel">
                                    <!-- single-product start -->
                                    <?php foreach ($newitems as $newitem) : ?>
                                        <div class="col-12">
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="<?= BASE_URL . 'chitietsp?id=' . $newitem['id'] ?>">
                                                        <img class="primary-image" src="<?= IMAGE_URL . $newitem['thumbnail'] ?>" alt="" />
                                                    </a>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-cart">
                                                                <a href="<?= BASE_URL . 'add-to-cart?id=' . $newitem['id'] ?>">THÊM GIỎ HÀNG</a>
                                                            </div>
                                                            <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) { ?>
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="<?= BASE_URL . 'addfavorite?id=' . $item['id'] ?>" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i>
                                                                        </a>
                                                                    </div>
                                                                   
                                                                </div>
                                                              
                                                            <?php } else { ?>
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="<?= BASE_URL . 'dangnhap' ?>" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i>
                                                                        </a>
                                                                    </div>
                                                                  
                                                                </div>
                                                               
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $newitem['id'] ?>"><?= $newitem['title'] ?></a></h2>
                                                  
                                                    <div class="price-box">
                                                        <span class="new-price"><?=number_format( $item['discount']) ?>đ</span>
                                                        <span class="old-price"><?=number_format( $item['price']) ?>đ</span>
                                                    </div>
                                                    <span class="content__product-general-status">View:
                                                        <?= $newitem['view'] ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
