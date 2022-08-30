<div class="blog-area">
    <div class="container">
        <div class="row">
            <!-- blog-left-sidebar start -->
            <div class="col-lg-3 col-md-12 order-2 order-lg-1">
                <div class="sider-bar-wrap">
                    <!-- widget-search start -->
                    <aside class="widget widget-search">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="#">
                            <div class="widget-form">
                                <input type="text" placeholder="search" />
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </aside>
                    <!-- widget-search end -->
                    <!-- widget-categories start -->
                    <aside class="widget widget-categories">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="sidebar-menu">
                            <li><a href="#">Creative</a> (2)</li>
                            <li><a href="#">Fashion</a> (1)</li>
                            <li><a href="#">Image</a> (1)</li>
                            <li><a href="#">Photography</a> (1)</li>
                            <li><a href="#">Travel</a> (5)</li>
                            <li><a href="#">Videos</a> (2)</li>
                            <li><a href="#">WordPress</a> (4)</li>
                        </ul>
                    </aside>


                    <!-- widget-tags end -->
                </div>
            </div>
            <!-- blog-left-sidebar end -->
            <div class="col-lg-9 col-md-12 order-1 order-lg-2">
                <div class="archive-header">
                    <h1 class="archive-title">Monthly Archives: <span>November 2018</span></h1>
                </div>
                <!-- single-blog start -->
                <?php foreach ($items as $newitem) : ?>
                    <article class="blog-post-wrapper">

                        <div class="post-thumbnail">

                            <a href="#"><img src="<?= IMAGE_URL ?><?= $newitem['news_img'] ?>" alt="" /></a>

                        </div>
                        <div class="post-information">
                            <h2><a href="#">Post in Video format</a></h2>
                            <div class="small-meta">
                                <span><i class="fa fa-calendar"></i> <?= $newitem['update_at'] ?> </span>
                                <a href="#"><i class="fa fa-comments-o"></i> 2 comments</a>
                            </div>
                            <p><?= $newitem['news_name'] ?></p>
                            <a class="readmore" href="<?= BASE_URL . 'tintucchitiet?id=' . $newitem['id'] ?>">read more</a>
                        </div>

                    </article>
                <?php endforeach; ?>

                <!-- single-blog end -->
                <!-- pagination start -->
                <div class="pagination">
                    <ul>
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- pagination end -->
            </div>
        </div>
    </div>
</div>