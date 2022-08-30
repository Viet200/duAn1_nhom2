<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<form action="" method="get">
					<div class="row">
						<div class="col-6">
							<h4>Danh sách đơn hàng</h4>
						</div>
					</div>
				</form>
			</div>
			<div class="card-body">
				<!-- Invoices List table -->
				<div class="table-responsive">
					<table id="invoices-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
						<thead>
							<tr>
								<th><input type="checkbox" class="input-chk-all"></th>
								<th>STT</th>
								<th>Date</th>
								<th>Mã ĐH</th>
								<th>Mã KH</th>
								<th>Tên KH</th>
								<th>Email</th>
								<th>SĐT</th>
								<th>Address</th>
								<th>Note</th>
								<th>LD hủy</th>
								<th>Tổng $</th>
								<th>Status</th>
								<th>HĐ</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php foreach ($cates as $index => $item) : ?>
									<td><input type="checkbox" class="input-chk"></td>
									<td><?= $index + 1 ?></td>
									<td style="color:green;"><?= $item['updated_at'] ?></td>
									<td style="font-weight: 400;">
										<a href="<?= ADMIN_URL . 'donhang/ctdonhang?id=' . $item['id'] ?>"><?= $item['id'] ?></a>
									</td>
									<td><?= $item['id_user'] ?></td>
									<td><?= $item['customer_name'] ?></td>
									<td><?= $item['customer_email'] ?></td>
									<td><?= $item['customer_phone_number'] ?></td>
									<th style="font-weight: 400;"><?= $item['customer_address'] ?></th>
									<td><?= $item['note'] ?></td>
									<td><?= $item['reason'] ?></td>
									<td style="color:red;"><?= number_format($item['total_price']) ?> VNĐ</td>
									<td><span class="badge badge-success badge-lg"><?= $item['status'] ?></span></td>
									<td>
										<span class="dropdown">
											<span class="dropdown">
												<a href="<?= ADMIN_URL . 'donhang/donhangct?id=' . $item['id'] ?>">
													<i class="fas fa-cogs"></i>
												</a>
											</span>
										</span>
									</td>
							</tr>
						<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!--/ Invoices table -->
			</div>
		</div>
	</div>
</div>