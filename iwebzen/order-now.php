<?php include 'include/header.php' ?>
<title>Designsbulls | Order Now</title>
<meta name="description" content="">

<style>
	.further-steps #progressbar {
		margin-bottom: 30px;
		overflow: hidden;
		counter-reset: step;
		position: relative;
		z-index: 99;
		padding-left: 0px;
	}

	.further-steps #progressbar li {
		list-style-type: none;
		color: black;
		text-align: center;
		text-transform: uppercase;
		font-size: 9px;
		width: 33.33%;
		float: left;
		position: relative;
		letter-spacing: 1px;
	}

	.further-steps #progressbar li:before {
		content: counter(step);
		counter-increment: step;
		width: 60px;
		height: 60px;
		line-height: 60px;
		display: block;
		font-size: 20px;
		color: #333;
		background: #cccaca;
		border-radius: 50px;
		margin: 0 auto 10px auto;
		text-align: center;
		color: white;
		position: relative;
		z-index: 39;
	}

	.further-steps #progressbar li:after {
		content: '';
		width: 100%;
		height: 3px;
		background: #0f70b8;
		position: absolute;
		left: -50%;
		top: 28px;
		z-index: 38;
	}
</style>

</head>

<body class="innerpage_class order_page">


	<?php include 'include/menu.php' ?>

	<div class="form_area">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="form_wrapper">
						<div class="row">
							<div class="col-md-12 further-steps">
								<ul id="progressbar">
									<li class="active">
										<h4>Order Now</h4>
									</li>
									<li class="progressbar-2">
										<h4 class="progressbar-2-text"><?= $categoryType ?>LOGO Brief</h4>
									</li>
									<?php $categoryType = getSessionValue('categoryType', 'package_detail');

									if ($categoryType == "logo" || $categoryType == "web") { ?>
										<li class="progressbar-2">
											<h4 class="progressbar-2-text"><?= $categoryType ?> Brief</h4>
										</li>
									<?php } ?>
									<li class="color ">
										<h4>Payment</h4>
									</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="pricing-item pricing-mt">
									<div class="pricing-info">
										<div class="productSku" style="display: none;"><?= getSessionValue('sku', 'package_detail') ?></div>
										<span class="price-label category">
											<h4 class="title"><?= getSessionValue('title', 'package_detail') ?></h4>
										</span>
										<h3>
											<span class="price-currency price"></span><span class="packgePrice">
												<?= getSessionValue('priceText', 'package_detail') ?>
											</span>
										</h3>
										<div class="pricing-list">
											<?= getSessionValue('html_description', 'package_detail') ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6" data-form-type="ordernow_form">
								<form id="orderForm" class="signupForm" role="form" method="post" novalidate="novalidate">

									<input type="hidden" id="formType" name="formType">
									<input type="hidden" id="referer" name="referer">

									<input type="hidden" id="package_name" name="customers_meta[package_name]" value="<?= getSessionValue('title', 'package_detail') ?>">
									<input type="hidden" id="package_price" name="customers_meta[package_price]" value="<?= getSessionValue('priceText', 'package_detail') ?>">
									<input type="hidden" id="package_sku" name="customers_meta[sku]" value="<?= getSessionValue('sku', 'package_detail') ?>">

									<div class="form-group">
										<label>Please enter your First Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter your first name" required="" aria-required="true">
									</div>

									<div class="form-group">
										<label>Please enter your email address</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email here" required="" aria-required="true">
									</div>
									<div class="form-group">
										<label>Current phone number in use</label>
										<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
									</div>
									<div class="form-group">
										<button class="btn btn-red a-btn" type="submit" id="signupBtn" name="signupForm" name="ordersbmitBtn" value='1'>Step 2</button>
									</div>
									<div id="formResult"></div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<?php include_once __DIR__ . "/crm_inc/assets.php"; ?>