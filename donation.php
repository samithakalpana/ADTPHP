<!DOCTYPE HTML>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>ADT</title>
	<!--Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
	<!--OWL Carousel slider-->
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
	<!--Custome Style -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<!--Responsive Style -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
	<!--magnific Style -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
	<!--FontAwesome Font Style -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="favicon.png">
	<!-- Google-Font-->
	<link href="https://fonts.googleapis.com/css?family=Marcellus&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;display=swap" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body id="tl">
		<!-- Header -->
		<?php include_once 'header.php'; ?>
	<!-- /Header -->

	<!-- Inner-intro -->
	<section id="inner_intro" class="section-padding">
		<div class="container">
			<div class="inner_wp z_index white_text">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Donation Page</h1>
						<nav class="breadcrumb">
							<ul>
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active">Donation Page</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Inner-intro -->

	<!-- Donation -->
	<div class="section-padding">
		<div class="container">
			<div class="donation_form">
				<form>
					<div class="form-group">
						<div class="row">
							<div class="col-md-3 col-lg-2">
								<label class="form-label">Donation Amount *</label>
							</div>
							<div class="col-md-9 col-lg-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">$</span>
									</div>
									<input type="text" class="form-control border w-auto mb-0" value="$100">
								</div>
								<ul class="select_amount">
									<li>$10.00</li>
									<li>$25.00</li>
									<li>$50.00</li>
									<li class="active">$100.00</li>
									<li>$500.00</li>
								</ul>
								<input type="text" class="form-control border w-auto" placeholder="Custome Donation">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3 col-lg-2">
								<label class="form-label">Payment Method *</label>
							</div>
							<div class="col-md-9 col-lg-10">
								<div class="radio d-inline mr-4">
									<input type="radio" name="payment" id="online" checked>
									<label for="online">Online Payment</label>
								</div>
								<div class="radio d-inline">
									<input type="radio" name="payment" id="offline">
									<label for="offline">Offline Payment</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3 col-lg-2">
								<label class="form-label">Campaigns * </label>
							</div>
							<div class="col-md-9 col-lg-10">
								<div class="select">
									<select class="form-control border">
										<option>Education for Every Child - (Target: 10000.00)</option>
										<option>Education for Every Child - (Target: 15000.00)</option>
										<option>Education for Every Child - (Target: 20000.00)</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3 col-lg-2">
								<label class="form-label">Message</label>
							</div>
							<div class="col-md-9 col-lg-10">
								<textarea rows="3" class="form-control border" placeholder="Your Custom text"></textarea>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3 col-lg-2">
								<label class="form-label">Donator Details * </label>
							</div>
							<div class="col-md-9 col-lg-10">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="form-control border" placeholder="Full Name">
									</div>
									<div class="col-sm-6">
										<input type="email" class="form-control border" placeholder="Email Address">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3 col-lg-2 m_none">
								&nbsp;
							</div>
							<div class="col-md-9 col-lg-10">
								<input type="submit" class="btn dark-btn" value="Donate Now">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /Donation -->

	<!-- Footer -->
<?php include_once './footer.php';?>
	<!-- /Footer -->

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!--Magnific-Popup-JS-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Countdown -->
	<script src="assets/js/jquery.countdown.min.js"></script>
	<!--Custome-JS-->
	<script src="assets/js/interface.js"></script>
	<!--Carousel-JS-->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!--ion-range-slider-JS-->
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<!--Audio-JS-->
	<script src="assets/js/audio_custome.js"></script>
</body>


</html>
