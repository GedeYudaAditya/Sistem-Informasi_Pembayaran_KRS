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
		<section class="section welcome-area login-card bg-overlay subscribe-area h-100vh ptb_100">
			<div class="container h-100">
				<div class="row align-items-center justify-content-center h-100">
					<div class="col-12 col-md-10 col-lg-8">
						<div class="subscribe-content text-center">
							<h1 class="text-white my-4"><?php echo lang('reset_password_heading'); ?></h1>
							<!-- Subscribe Form -->
							<?php if ($message) {
								echo '<div id="infoMessage" class="alert-danger alert" role="alert">' .
									$message
									. '</div>';
							};
							?>
							<?php echo form_open('auth/reset_password/' . $code); ?>
							<div class="form-group">
								<?php echo form_input($new_password, '', 'class="form-control form-control-user" placeholder="Enter your new password (min-length 8 character)"'); ?>
							</div>
							<div class="form-group">
								<?php echo form_input($new_password_confirm, '', 'class="form-control form-control-user" placeholder="Re-enter your new password"'); ?>
							</div>
							<?php echo form_input($user_id); ?>
							<?php echo form_hidden($csrf); ?>
							<?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-lg btn-block"'); ?>
							<?php echo form_close(); ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ***** Forgot Area End ***** -->
	</div>
