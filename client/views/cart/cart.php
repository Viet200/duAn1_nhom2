<!-- entry-header-area start -->
<div class="entry-header-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="entry-header">
					<h1 class="entry-title">GIỎ HÀNG</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- entry-header-area end -->
<div class="cart-main-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<form action="<?= BASE_URL . 'add-to-cart' ?>">
					<div class="table-content responsive">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Ảnh sản phẩm</th>
									<th class="product-name">sản phẩm</th>
									<th class="product-price">Giá sản phẩm</th>
									<th class="product-quantity">Số lượng</th>
									<th class="product-subtotal">Thành tiền</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$totalPrice = 0;
								?>
								<?php foreach ($cart as $item) : ?>
									<tr>
										<input type="hidden" name="id" id="" value="<?= $item['id'] ?>">
										<td class="product-thumbnail"><a href="#"><img src="<?= IMAGE_URL ?><?= $item['thumbnail'] ?>" alt="" /></a></td>
										<td class="product-name"><a href="#"></a><?= $item['title'] ?></td>
										<td class="product-price"><span class="amount"><?= $item['discount'] ?></span>đ</td>
										<td class="product-quantity"><input type="number" name="quantity" value="<?= $item['quantity'] ?>" /></td>
										<td class="product-subtotal"><?= $item['discount'] * $item['quantity'] ?>đ</td>

										<?php $totalPrice += $item['discount'] * $item['quantity'] ?>
									</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="4">Tổng tiền</td>
									</td>
									<td class="product-subtotal"><?= $totalPrice ?>đ</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<div class="buttons-cart">

								<td class="product-remove"> <a href="<?= BASE_URL . 'remove?id=' . $item['id'] ?>"><i>Xóa tất cả </i> </a> </td>
								<a href="<?= BASE_URL . 'check-out1' ?>">Tiếp tục thanh toán</a>
							</div>

						</div>

					</div>
				</form>

			</div>
		</div>
	</div>
</div>