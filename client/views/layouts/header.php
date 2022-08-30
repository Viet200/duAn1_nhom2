<header>
	<!-- header-top-area start -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<!-- header-top-left start -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="header-top-left">
						<div class="phone-number"> Call support free: <span>123 456 789</span></div>
					</div>
				</div>
				<!-- header-top-left end -->
				<!-- header-top-right start -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="header-top-right">
						<div class="top-menu">
							<ul>
								<li><a href="<?= BASE_URL . 'timkiemdh' ?>">Đơn hàng đã mua</a></li>
								<li><a href="<?= BASE_URL . 'favorite' ?>">Sản phẩm yêu thích</a></li>
								<li><a href="">Giỏ Hàng</a></li>
								<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) : ?>
									<?php if ($_SESSION['auth']['role_id'] == 1) : ?>
										<li><a href="<?= BASE_URL . 'cp-admin' ?>">Quản trị admin </a></li>
									<?php endif ?>
									<li><a href="<?= BASE_URL . 'my-user' ?>"><?= $_SESSION['auth']['fullname'] ?></a> </li>
									<li><a href="<?= BASE_URL . 'dang-xuat' ?>">Đăng xuất</a></li>
								<?php else : ?>
									<li><a href="<?= BASE_URL . 'dangnhap' ?>">Đăng nhập</a></li>
									<li><a href="<?= BASE_URL . 'dang-ky' ?>">Đăng ký</a> </li>
								<?php endif ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- header-top-right end -->
			</div>
		</div>
	</div>
	<!-- header-top-area end -->
	<!-- header-mid-area start -->
	<div class="header-mid-area">
		<div class="container">
			<div class="row">
				<!-- logo start -->
				<div class="col-lg-6 col-md-3 col-sm-12">
					<div class="logo">
						<a href="<?= BASE_URL ?>"><img src="<?= CLIENT_ASSET ?>img/logo/logo.png" alt="" /></a>
					</div>
				</div>
				<!-- logo end -->
				<div class="col-lg-6 col-md-8 col-sm-12">
					<!-- cart-total start -->
					<div class="cart-total">
						<ul>
							<li><a href="<?= BASE_URL . 'check-out' ?>"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">Giỏ Hàng: (<?= countCartNumber() ?>)</span></a>
							</li>
						</ul>
					</div>
					<!-- cart-total end -->
					<!-- header-search start -->
					<div class="header-search">
						<form action="<?= BASE_URL . 'category' ?>">
							<input type="text" placeholder="Tìm Kiểm Sản Phẩm..." name="timkiem" />
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- header-search end -->
				</div>
			</div>
		</div>
	</div>
	<!-- header-mid-area end -->
	<!-- mainmenu-area start -->
	<div class="mainmenu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 d-none d-md-block">
					<div class="mainmenu">
						<nav>
							<ul>
								<li><a href="<?= BASE_URL ?>">Trang Chủ</a></li>
								<li>
									<a href="<?= BASE_URL . 'category' ?>">Shop</a>
									<div class="mega-menu">
										<?php foreach ($list as $menu) : ?>
											<span>
												<a href="<?= BASE_URL . 'category?id=' . $menu['id'] ?>">
													<?php echo $menu['name'] ?> </a>
											</span>
										<?php endforeach; ?>
									</div>
								</li>
								<li>
									<a href="<?= BASE_URL . 'thuonghieu' ?>">Thương hiệu</a>
									<div class="mega-menu">
										<?php foreach ($thuonghieu as $menu) : ?>
											<span>
												<a href="<?= BASE_URL . 'thuonghieu?id=' . $menu['id'] ?>">
													<?php echo $menu['name_brand'] ?> </a>
											</span>
										<?php endforeach; ?>
									</div>
								</li>
								<li><a href="<?= BASE_URL . 'tintuc' ?>">Tin Tức</a></li>
								<li><a href="<?= BASE_URL . 'lienhe' ?>">Liên Hệ</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- mainmenu-area end -->
</header>