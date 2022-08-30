<div class="shop-area">
	<div class="container">
		<div class="row">
			<!-- shop-left-sidebar start -->
			<div class="col-lg-3 col-md-12 order-2 order-lg-1">
				<div class="sider-bar-wrap">

					<aside class="widget top-product-widget">
						<h3 class="sidebar-title">Top rated products</h3>
						<ul>
							<?php foreach ($viewss as $item) : ?>
								<li>
									<div class="single-product">
										<div class="product-img">
											<a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>">
												<img class="primary-image" src="<?= IMAGE_URL ?><?= $item['thumbnail'] ?>" alt="" />

											</a>
										</div>
										<div class="product-content">
											<div class="pro-info">
												<h2 class="product-name"><a href="#"><?= $item['title'] ?></a></h2>
												<div class="price-box">
													<span class="new-price"><?= $item['discount'] ?></span>
													<span class="old-price"><?= $item['price'] ?></span>
												</div>
											</div>
										</div>
									</div>
								</li>
							<?php endforeach; ?>

						</ul>
					</aside>
					<!-- widget-recent end -->
				</div>
			</div>
			<!-- blog-left-sidebar end -->
			<div class="col-lg-9 col-md-12 order-1 order-lg-2">
				<!-- toolbar start -->
				<div class="toolbar">
					<div class="view-mode">
						<a class="active" href="shop.html"><i class="fa fa-th-large"></i></a>
						<a class="list" href="shop-list.html"><i class="fa fa-th-list"></i></a>
					</div>
					<div class="show-result">
						<p> Showing 1–12 of 19 results</p>
					</div>
					<div class="toolbar-form">
						<form action="#">
							<div class="tolbar-select">
								<select>
									<option value="volvo">Sort by popularity</option>
									<option value="saab">Default sorting</option>
									<option value="mercedes">Sort by average rating</option>
									<option value="audi">Sort by newness</option>
									<option value="audi">Sort by price: low to high</option>
									<option value="audi">Sort by price: high to low</option>
								</select>
							</div>
						</form>
					</div>
				</div>
				<!-- toolbar end -->
				<div class="clear"></div>
				<div class="grid-view">
					<div class="row">
						<!-- single-product start -->
						<?php foreach ($items as $item) : ?>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="single-product">
									<span class="sale-text">Sale</span>
									<div class="product-img">
										<a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>">
											<img class="primary-image" src="<?= IMAGE_URL ?><?= $item['thumbnail'] ?>" alt="" />

										</a>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-cart">
													<a href="<?= BASE_URL . 'add-to-cart?id=' . $item['id'] ?>">Add to cart</a>
												</div>
												<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) { ?>
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="<?= BASE_URL . 'addfavorite?id=' . $item['id'] ?>" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i>
															</a>
														</div>
														<div class="compare-button">
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
														</div>
													</div>
													<div class="quickviewbtn">
														<a href="" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
													</div>
												<?php } else { ?>
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="<?= BASE_URL . 'dangnhap' ?>" data-toggle="tooltip" title="Yêu thích"><i class="fa fa-star"></i>
															</a>
														</div>
														<div class="compare-button">
															<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
														</div>
													</div>
													<div class="quickviewbtn">
														<a href="" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>"><?= $item['title'] ?></a></h2>
										<div class="pro-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="new-price"><?= $item['price'] ?>đ</span>
											<span class="old-price"><?= $item['discount'] ?>đ</span>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
				<!-- pagination start -->
				<div class="shop-pagination">
					<div class="pagination">
						<ul>
							<li class="active">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- pagination end -->
			</div>
		</div>
	</div>
</div>