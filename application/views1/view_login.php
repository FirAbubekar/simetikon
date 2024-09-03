<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIMETIKON - RSUD BAJAWA</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/core/app.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container" style="background-image: url('assets/images/bg.jpg');background-size: cover;    background-repeat: repeat;">

	<!-- Main navbar -->
	<!-- Main navbar -->

	<style>
		.bg-indigo {
			background-color: #38b6ff;
		}
	</style>
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/ngada.png" alt="" style="width: auto;height: 100px;"></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" style="height: 120px;" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="navbar-brand" style="height: 120px;" href="#"><img src="assets/images/simetikon.png" alt="" style="width: auto;height: 100px;"></a>
				</li>

			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
					<center>
						<div class="row">
							<div class="col-md-3 col-sm-12">
							</div>
							<div class="col-md-6 col-sm-12">
								<div style="background-color: #fff; width: 100%;padding-top: 40px;padding-bottom: 40px;">

									<div class="row">

										<div class="col-md-6">
											<center>
												<video width="150%" height="100%" style="padding-left: 10px;" loop muted autoplay>
													<source src="<?php echo base_url('assets/login.mp4'); ?>" loop="true" autoplay="autoplay" controls="controls" muted type="video/mp4">
												</video>
											</center>
										</div>

										<!-- Simple login form -->
										<div class="col-md-6">
											<form action="<?php echo base_url('login/get_login'); ?>" method="POST">
												<div class="panel panel-body login-form">
													<div class="text-center">
														<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
														<h5 class="content-group">SELAMAT DATANG DI SIMETIKON</h5>
													</div>

													<div class="form-group has-feedback has-feedback-left">
														<input type="text" name="username" class="form-control" placeholder="Nama Akun">
														<div class="form-control-feedback">
															<i class="icon-user text-muted"></i>
														</div>
													</div>

													<div class="form-group has-feedback has-feedback-left">
														<input type="password" name="password" class="form-control" placeholder="Kata Sandi">
														<div class="form-control-feedback">
															<i class="icon-lock2 text-muted"></i>
														</div>
													</div>

													<div class="form-group">
														<button type="submit" class="btn btn-success btn-block">MASUK<i class="icon-circle-right2 position-right"></i></button>
													</div>

												</div>
											</form>
										</div>
									</div>

								</div>

							</div>

							<div class="col-md-3 col-sm-12">
							</div>
						</div>
					</center>
					<!-- /simple login form -->


					<?php $this->load->view('template/footer'); ?>

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

</html>