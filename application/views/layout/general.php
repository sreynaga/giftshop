<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Gift Shop | <?php echo $strTitle; ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('includes/css/bootstrap-theme.min.css'); ?>" />

		<!-- CSS Files -->
		<link rel="stylesheet" href="<?php echo base_url('includes/css/all.css'); ?>" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<!-- Start - Top Nav Bar -->
		<div class="container top-nav-container">
			<div class="row">
				<div class="col-md-4 logo-container">
					<a href="<?php echo base_url(); ?>">
						<h1>Gift Shop</h1>
					</a>
				</div>
				<div class="col-md-8 text-right cart-and-login-container">
					<a href="<?php echo base_url('cart'); ?>" class="my-cart-link">
						<li class="glyphicon glyphicon-shopping-cart"></li>
						My Cart <span class="cart-counter">(0)</span>
					</a>
					<a href="<?php echo base_url('login'); ?>" class="login-link">Login</a>
				</div>
			</div>
		</div>
		<!-- End - Top Nav Bar -->

		<!-- Start - Container -->
		<div class="container main-container">
			<?php
			$this->load->view($strTemplate);
			?>
		</div>
		<!-- End - Container -->

		<!-- jQuery -->
		<script src="<?php echo base_url('includes/js/jquery.min.js'); ?>" type="text/javascript"></script>

		<!-- Bootstrap -->
		<script src="<?php echo base_url('includes/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	</body>
</html>