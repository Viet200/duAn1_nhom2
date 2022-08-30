	<!-- map-area start -->
	<!-- map-area end -->
	<!-- contact-area start -->
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<!-- contact-info start -->
				<div class="col-md-6 col-sm-12">
					<div class="contact-info">
						<h3>THÔNG TIN LIÊN HỆ</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> <strong>ĐỊA CHỈ: </strong>
								1234 Pall Mall Street, London England
							</li>
							<li>
								<i class="fa fa-envelope"></i> <strong>SỐ ĐIỆN THOẠI: </strong>
								(800) 0123 4567 890
							</li>
							<li>
								<i class="fa fa-mobile"></i> <strong>Email: </strong>
								<a href="#">info@bootexperts.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- contact-info end -->
				<div class="col-md-6 col-sm-12">
					<div class="contact-form">
						<h3><i style="margin:0px 8px 0px 0px" class="fa fa-envelope-o"></i>PHẢN HỒI</h3>
						<?php if (isset($success)) { ?>
							<h3 style="color: green;"><?= $success ?></h3>
						<?php } ?>
						<form action="<?= BASE_URL . 'lienhe' ?>" method="POST">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="name" placeholder="Họ và tên" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" />
									<?php if (isset($err['name'])) { ?>
										<span style="color:red;">*<?php echo $err['name']; ?></span>
									<?php } ?>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
									<?php if (isset($err['email'])) { ?>
										<span style="color:red;">*<?php echo $err['email']; ?></span>
									<?php } ?>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="text" name="phone_number" placeholder="Số điện thoại" value="<?php if (isset($_POST['phone_number'])) echo $_POST['phone_number']; ?>" />
									<?php if (isset($err['phone_number'])) { ?>
										<span style="color:red;">*<?php echo $err['phone_number']; ?></span>
									<?php } ?>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="text" name="subject_name" placeholder="Tiêu Đề" value="<?php if (isset($_POST['subject_name'])) echo $_POST['subject_name']; ?>" />
									<?php if (isset($err['subject_name'])) { ?>
										<span style="color:red;">*<?php echo $err['subject_name']; ?></span>
									<?php } ?>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea id="message" name="note" cols="30" rows="10" placeholder="Nội Dung" value="<?php if (isset($_POST['note'])) echo $_POST['note']; ?>"></textarea>
									<?php if (isset($err['note'])) { ?>
										<span style="color:red;">*<?php echo $err['note']; ?></span>
									<?php } ?><br>
									<input type="submit" name="btnsend" value="GỬI PHẢN HỒI" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact-area end -->