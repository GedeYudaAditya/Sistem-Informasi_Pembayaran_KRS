<body class="inner">
	<!--====== Preloader Area Start ======-->
	<div class="preloader-main">
		<div class="preloader-wapper">
			<svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
				<defs>
					<filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
					</filter>
				</defs>
				<g filter="url(#goo)">
					<circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
					<circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
				</g>
			</svg>
			<div>
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</div>

	<!--====== Scroll To Top Area Start ======-->
	<div id="scrollUp" title="Scroll To Top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<!--====== Scroll To Top Area End ======-->

	<div class="main">

		<!-- ***** Forgot Area Start ***** -->
		<section class="section welcome-area login-card bg-overlay subscribe-area mb-5">
			<div class="container h-100 mb-3">
				<div class="row align-items-center justify-content-center h-100">
					<div class="col-12 col-md-10 col-lg-5">
						<div class="subscribe-content contact-box bg-white text-center rounded p-4  mt-5 mt-lg-0 shadow-lg">
							<?php echo form_open("auth/login"); ?>
							<div class="contact-top">
								<!-- <h3 class="contact-title">Login</h3> -->
								<h3 class="contact-title"><?php echo lang('login_heading'); ?></h3>
								<!-- <h5 class="text-secondary fw-3 py-3">Please login with your email/username and password below.</h5> -->
								<h5 class="text-secondary fw-3 py-3"><?php echo lang('login_subheading'); ?></h5>
								<?php if ($message) {
									echo '<div id="infoMessage" class="alert-danger alert" role="alert">' .
										$message
										. '</div>';
								};
								?>

							</div>
							<?php if ($this->session->flashdata('gagal')) : ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									Anda <strong>Gagal</strong> <?= $this->session->flashdata('gagal'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php endif; ?>
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
											</div>
											<?php echo form_input($identity, '', 'class="form-control" placeholder="Email"'); ?>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
											</div>
											<?php echo form_input($password, '', ' class="form-control" placeholder="Password"'); ?>
										</div>
									</div>
								</div>
								<div class="col-12 mt-3" style="text-align: left;">
									<p>
										<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
										<?php echo lang('login_remember_label', 'remember'); ?>
									</p>
								</div>
								<div class="col-12">
									<?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-bordered w-100 mt-3 mt-sm-4"'); ?>
								</div>
								<div class="col-12">
									<span class="d-block pt-2 mt-4 border-top"><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></span>
								</div>
							</div>
							<?php echo form_close(); ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Forgot Area End ***** -->
	</div>
