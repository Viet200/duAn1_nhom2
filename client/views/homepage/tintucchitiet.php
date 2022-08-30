<div class="blog-area single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 order-2 order-lg-1">
                <!-- blog-left-sidebar start -->
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



                </div>
            </div>
            <!-- blog-left-sidebar end -->
            <div class="col-lg-9 col-md-12 order-1 order-lg-2">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">

                    <div class="post-information">
                        <h2><?= $itemct[0]['news_name'] ?></h2>
                        <div class="entry-meta">
                            <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                            <span><i class="fa fa-clock-o"></i> <?= $itemct[0]['update_at'] ?></span>
                            <span class="tag-meta">
                                <i class="fa fa-folder-o"></i>
                                <a href="#">Fashion</a>,
                                <a href="#">WordPress</a>
                            </span>
                            <span>
                                <i class="fa fa-tags"></i>
                                <a href="#">fashion</a>,
                                <a href="#">t-shirt</a>,
                                <a href="#">white</a>
                            </span>
                            <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                        </div>
                        <div class="entry-content">

                            <div class="post-thumbnail">
                                <img src="<?= IMAGE_URL ?><?= $itemct[0]['news_img'] ?>" alt="" />
                            </div>
                            <br>
                            <p><?= $itemct[0]['content'] ?></p>
                        </div>
                        <div class="social-sharing">
                            <h3>Share this post</h3>
                            <div class="sharing-icon">
                                <a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                <a href="#" data-toggle="tooltip" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="author-info">
                            <div class="author-avatar"><img src="img/blog/avatar.png" alt="" /></div>
                            <div class="author-description">
                                <h2>About the Author: <a href="#">admin</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="clear"></div>
                <div class="single-post-comments">
                    <div class="comments-area">
                        <div class="comments-heading">
                            <h3>6 comments</h3>
                        </div>
                        <div class="comments-list">
                            <ul>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/comments/1.png" alt="" />
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">admin</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2018 at 1:38 am</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/comments/2.jpg" alt="" />
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">demo</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2018 at 2:25 pm</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/comments/1.png" alt="" />
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">admin</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2018 at 3:18 pm </span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/comments/2.jpg" alt="" />
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">demo</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2018 at 4:25 pm</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/comments/1.png" alt="" />
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">admin</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2018 at 6:18 pm </span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/comments/2.jpg" alt="" />
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">demo</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2018 at 7:25 pm</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single-blog end -->
            </div>
        </div>
    </div>
</div>