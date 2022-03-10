<!DOCTYPE HTML>
<?php 
ob_start();
@session_start();
// $_SESSION["lang"]="english";
// $_SESSION["page"]="index.php";

?>

<html lang="en">

<!-- Mirrored from primehostingindia.com/templatemonster/html/templezen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 18:00:35 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Templezen - Buddhist Temple HTML5 Template</title>
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

		<?php include_once "header.php"; ?>

	<!-- /Header -->

	<!-- Intro -->
	<section id="intro">
		<div class="overlay overlay-bg"></div>
		<div class="owl-carousel">
			<div class="item section-padding" style="background-image:url(assets/images/custom_images/banner_anagarika.jpg);">
				<div class="container">
					<div class="intro_text white_text">
						<!-- <h1>creator of life</h1> -->
						<h1>“Wherever I went I have worked for the public good” <br>

</h1>
						<!-- <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here. </p> -->
						<p>Anagarika Dharmapala - 1915 </p>
						<a href="events.html" class="btn dark-btn templezen-top-btn">Explore Events</a>
					</div>
				</div>
			</div>
			<div class="item section-padding" style="background-image:url(assets/images/custom_images/banner_vehicle.jpg);">
				<div class="container">
					<div class="intro_text white_text">
						<!-- <h1>god is within us</h1> -->
						<h1>“My comfort is the Buddha, His Dhamma and the Holy Ones”

</h1>
						<!-- <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here. </p> -->
						<p>Anagarika Dharmapala - 1915</p>
						<a href="events.html" class="btn dark-btn templezen-top-btn">Explore Events</a>
					</div>
				</div>
			</div>
			<!-- <div class="item section-padding" style="background-image:url(assets/images/home-banner/banner-03.png);"> -->
			<div class="item section-padding" style="background-image:url(assets/images/custom_images/banner_buddagaya.jpg);">
				<div class="container">
					<div class="intro_text white_text">
						<!-- <h1>god is within us</h1> -->
						<h1>“My life will be given birth after birth to Humanity”</h1>
						<!-- <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here. </p> -->
						<p>Anagarika Dharmapala - 1897</p>
						<a href="events.html" class="btn dark-btn templezen-top-btn">Explore Events</a>
					</div>
				</div>
			</div>
			<!-- <div class="item section-padding" style="background-image:url(assets/images/home-banner/banner-03.png);"> -->
			<div class="item section-padding" style="background-image:url(assets/images/custom_images/banner_buddagaya_3_update.jpg);">
				<div class="container">
					<div class="intro_text white_text">
						<!-- <h1>god is within us</h1> -->
						<h1>“The householder must follow the Middle Way…. Above all he must practice charity and love”</h1>
						<!-- <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here. </p> -->
						<p>Anagarika Dharmapala - 1910</p>
						<a href="events.html" class="btn dark-btn templezen-top-btn">Explore Events</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Intro -->

	<!-- Next-Events-Sermons -->
	<section class="latest_event_sermons home-sermon">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="box_wrap next_sermons">
						<p class="subtitle">Latest Sermons</p>
						<h4><a href="sermon-detail.html">Man is made by his belief</a></h4>
						<ul class="sermons_meta">
							<li><i class="fa fa-user"></i> Message from <a href="#">yogbhagat</a></li>
							<li><i class="far fa-calendar-alt"></i> sep 03, 2020</li>
						</ul>
						<div class="sermons_inside">
							<ul>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="far fa-file-pdf"></i></a></li>
								<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
							</ul>
						</div>
						<div class="audio-player">
							<div id="play-btn">
								<i class="fa fa-play"> </i>
								<i class="fa fa-pause"></i>
							</div>
							<div class="audio-wrapper" id="player-container">
								<audio id="player" ontimeupdate="initProgressBar()">
								</audio>
							</div>
							<div class="player-controls scrubber">
								<small class="end-time">5:44</small>
								<span id="seekObjContainer"> <progress id="seekObj" value="0" max="1"></progress> </span>
								<i class="fa fa-volume-up"></i>
							</div>
							<div class="next_prev">
								<i class="fa fa-angle-left"></i>
								<i class="fa fa-angle-right"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_wrap video-bg home-video">
						<div class="video-content">
							<div class="video_icon">
								<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
									<i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- /Next-Events-Sermons -->

	<!-- About -->
	<section class="about_intro section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-md-7">
					<div class="about-us-content">
						<div class="section-header">
							<h2>some important life lessons from lord <u class="text-custom-primary">buddha</u></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
							book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.</p>
					</div>
				</div>
				<div class="col-xl-5 col-md-5 align-self-center">
					<div class="about-us-image">
						<img src="assets/images/lotus.png" alt="img" class="img-fluid mx-auto d-block">
					</div>
				</div>
			</div>
				<!-- Features -->
				<div class="features">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="features_wrap features-after-none">
								<div class="f-f-icon"><img src="assets/images/peace.png" alt="img"></div>
								<h4 class="text-custom-secondary">Meditation</h4>
								<p class="mb-0">Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="features_wrap features-after-none">
								<div class="f-f-icon"><img src="assets/images/team.png" alt="img"></div>
								<h4 class="text-custom-secondary">Community</h4>
								<p class="mb-0">Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="features_wrap features-after-none">
								<div class="f-f-icon"><img src="assets/images/open-book.png" alt="img"></div>
								<h4 class="text-custom-secondary">Philosophy</h4>
								<p class="mb-0">Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /Features -->
		</div>
	</section>
	<!-- /About -->

	<!-- Causes -->
	<section id="causes" class="section-padding gray_bg">
		<div class="container">
			<div class="owl-carousel">
				<div class="item">
					<div class="causes_info">
						<p class="subtitle text-white">Gita's sermony</p>
						<h3 class="white_text">Five quotes of bhagwat gita</h3>
						<p class="white_text mb-0">A Karma-yogi performs action by body, mind, intellect, and senses, without attachment (or ego), only for self-purification."</p>
					</div>
				</div>
				<div class="item">
					<div class="causes_info">
						<p class="subtitle text-white">krishna's preaching</p>
						<h3 class="white_text">Five quotes of mahabharat</h3>
						<p class="white_text mb-0">Meet this transient world with neither grasping nor fear,trust the unfolding of life,and you will attain true serenity.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Causes -->

	<!-- Latest-Events-Sermons -->
	<section class="section-padding latest_event_sermons m-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-5">
					<div class="heading">
						<h3><a href="life_6_timeline.php">Timeline</a></h3>
						<div class="tl-slider-arrow float-right">
							<div class="tl-left-arrow slick-arrow mr-2" style="">
								<span><i class="fa fa-chevron-up"></i></span>
							</div>
							<div class="tl-right-arrow slick-arrow" style="">
								<span><i class="fa fa-chevron-down"></i></span>
							</div>
						</div>
					</div>
					<div class="event_list event-slider slick-vertical">
						<div class="event-slider-item pb-4">
							<div class="row">
								<div class="col-12">
									<div class="event-list">
										<ul>
											<li>
											<div class="event_info">
													<div class="event_date">
														<span>1915</span> March'2
													</div>
													<!-- <h6><a href="event-detail.html">Vinayaka Chathurthy</a></h6> -->
													<ul>
														<li><i class="far fa-clock"></i> The Kandyan Kingdom of Sri Lanka cedes to the British. The  Kandyan Convention is signed – 2nd March</li>
														<!-- <li><i class="fas fa-map-marker-alt"></i></li> -->
													</ul>
												</div>
											</li>
											<li>
												<div class="event_info">
													<div class="event_date">
														<span>1932</span> sep'19
													</div>
													<!-- <h6><a href="event-detail.html">Navarathri Celebrations</a></h6> -->
													<ul>
														<li><i class="far fa-clock"></i>English becomes the official language in Ceylon (Sri Lanka)</li>
														<!-- <li><i class="fas fa-map-marker-alt"></i>4873 Pretty View Lane New York</li> -->
													</ul>
												</div>
											</li>
											<li>
											<div class="event_info">
													<div class="event_date">
														<span>1837</span>
													</div>
													<!-- <h6><a href="event-detail.html">Durgashtami </a></h6> -->
													<ul>
														<li><i class="far fa-clock"></i>George Turner’s English translation of the Mahavamsa published</li>
														<!-- <li><i class="fas fa-map-marker-alt"></i>4873 Pretty View Lane New York</li> -->
													</ul>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>

						</div>

						<div class="event-slider-item pb-4">
							<div class="row">
								<div class="col-12">
									<div class="event-list">
										<ul>
											<li>
											<div class="event_info">
													<div class="event_date">
														<span>1860</span>
													</div>
													<!-- <h6><a href="event-detail.html">Vinayaka Chathurthy</a></h6> -->
													<ul>
														<li><i class="far fa-clock"></i>
														1860	•	H. Don Carolis, the father of the future Anagarika Dharmapala, migrates to Colombo from Matara
•	Marriage of H. Don Carolis to Mallika Dharmagunawardhana
•	H. Don Carolis establishes Don Carolis & Sons in Pettah
														</li></ul>
													
											</li>
											<li>
											<div class="event_info">
													<div class="event_date">
														<span>1963</span> sep'19
													</div>
													<!-- <h6><a href="event-detail.html">Navarathri Celebrations</a></h6> -->
													<ul>
														<li><i class="far fa-clock"></i> •	Baddegma Controversy (debated in writing), headed by Miggetuwatte Gunananda Thero</li>
														<!-- <li><i class="fas fa-map-marker-alt"></i>4873 Pretty View Lane New York</li> -->
													</ul>
												</div>
											</li>
											<li>
											<div class="event_info">
													<div class="event_date">
														<span>1964</span> oct'19
													</div>
													<!-- <h6><a href="event-detail.html">Durgashtami </a></h6> -->
													<ul>
														<li><i class="far fa-clock"></i>•	Birth of Don David Hewavitarne – 17th September</li>
														<!-- <li><i class="fas fa-map-marker-alt"></i>4873 Pretty View Lane New York</li> -->
													</ul>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>

						</div>

					</div>
				</div>

				<div class="col-md-6 col-lg-5 offset-lg-2">
					<div class="heading">
						<h3>Latest Sermons</h3>
						<a href="sermon.html" class="btn btn-sm float-right">See All</a>
					</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h6 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										It is no use lying to one's self </a>
								</h6>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<ul class="sermons_meta">
										<li><i class="fa fa-user"></i> Message from <a href="#">yogbhagat</a></li>
										<li><i class="far fa-calendar-alt"></i> sep 03, 2020</li>
									</ul>
									<div class="sermons_inside">
										<ul>
											<li><a href="#"><i class="fa fa-music"></i></a></li>
											<li><a href="#"><i class="fab fa-youtube"></i></a></li>
											<li><a href="#"><i class="far fa-file-pdf"></i></a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h6 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Detached action is unselfish work.</a>
								</h6>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<ul class="sermons_meta">
										<li><i class="fa fa-user"></i> Message from <a href="#">yogbhagat</a></li>
										<li><i class="far fa-calendar-alt"></i> Aug 30, 2020</li>
									</ul>
									<div class="sermons_inside">
										<ul>
											<li><a href="#"><i class="fa fa-music"></i></a></li>
											<li><a href="#"><i class="fab fa-youtube"></i></a></li>
											<li><a href="#"><i class="far fa-file-pdf"></i></a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h6 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">action is indeed better than inaction</a>
								</h6>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<ul class="sermons_meta">
										<li><i class="fa fa-user"></i> Message from <a href="#">yogbhagat</a></li>
										<li><i class="far fa-calendar-alt"></i> sep 02, 2020</li>
									</ul>
									<div class="sermons_inside">
										<ul>
											<li><a href="#"><i class="fa fa-music"></i></a></li>
											<li><a href="#"><i class="fab fa-youtube"></i></a></li>
											<li><a href="#"><i class="far fa-file-pdf"></i></a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingfour">
								<h6 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">one who has faith,has supreme peace</a>
								</h6>
							</div>
							<div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
								<div class="panel-body">
									<ul class="sermons_meta">
										<li><i class="fa fa-user"></i> Message from <a href="#">yogbhagat</a></li>
										<li><i class="far fa-calendar-alt"></i> sep 03, 2020</li>
									</ul>
									<div class="sermons_inside">
										<ul>
											<li><a href="#"><i class="fa fa-music"></i></a></li>
											<li><a href="#"><i class="fab fa-youtube"></i></a></li>
											<li><a href="#"><i class="far fa-file-pdf"></i></a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Latest-Events-Sermons -->

	<!-- Donation-img section -->
	<section class="section-padding secondary-bg donation-img-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<div class="section-header">
						<h3>Support Our Mission</h3>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
					</div>
					<p>We provide Buddhism and meditation resources. We try to make our classes relaxed, informal and interactive,
						and relevant to ordinary people leading ordinary lives. You do not have to be a Buddhist or become a Buddhist or anything else in order to attend our classes.</p>
					<div class="donation_form">
						<form>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">$</span>
											</div>
											<input type="text" class="form-control w-auto mb-0" value="$100">
										</div>
										<ul class="select_amount">
											<li class="mb-0">$10.00</li>
											<li class="mb-0">$25.00</li>
											<li class="mb-0">$50.00</li>
											<li class="mb-0 active">$100.00</li>
											<li class="mb-0">$500.00</li>
										</ul>
										<input type="submit" class="btn dark-btn" value="Donate Now">
									</div>
								</div>
							</div>

						</form>
					</div>
				</div>

				<div class="col-md-6 align-self-center img-width-100">
					<img src="assets/images/home-page/img-2.jpg" alt="img" class="img-fluid">
				</div>
			</div>
		</div>

	</section>
	<!-- /Donation-img section -->

	<!-- Testimonials -->
	<section class="our_testimonials section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<img src="assets/images/home-page/our-history.png" alt="" class="img-fluid Mb_20">
				</div>
				<div class="col-md-6 align-self-center">
					<div class="about_company">
						<div class="section-header">
							<h3>Our History</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
						</div>
						<ul class="nav nav-tabs testi-nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#home">1980</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu1">1990</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu2">2000</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu3">2010</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="home" class="container tab-pane active pl-0 pr-0"><br>
								<h4>1980</h4>
								<p>Aliquam nec sem vulputate, sagittis felis id, semper nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
									veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
								<a href="#" class="btn-link tk-btn-link"><u>Learn More <i class="fa fa-angle-right"></i></u></a>
							</div>
							<div id="menu1" class="container tab-pane fade pl-0 pr-0"><br>
								<h4>1990</h4>
								<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
									Phasellus viverra nulla ut metus varius laoreet. Nam ornare pellentesque tortor.</p>
								<a href="#" class="btn-link tk-btn-link"><u>Learn More <i class="fa fa-angle-right"></i></u></a>
							</div>
							<div id="menu2" class="container tab-pane fade pl-0 pr-0"><br>
								<h4>2000</h4>
								<p>Aliquam nec sem vulputate, sagittis felis id, semper nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
									veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
								<a href="#" class="btn-link tk-btn-link"><u>Learn More <i class="fa fa-angle-right"></i></u></a>
							</div>
							<div id="menu3" class="container tab-pane fade pl-0 pr-0"><br>
								<h4>2010</h4>
								<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
									Phasellus viverra nulla ut metus varius laoreet. Nam ornare pellentesque tortor.</p>
								<a href="#" class="btn-link tk-btn-link"><u>Learn More <i class="fa fa-angle-right"></i></u></a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- /Testimonials -->

	<!-- Call to Action -->
	<section class="section-padding call-action-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="call-content mx-auto text-center event-content">
						<p class="subtitle text-white">Upcoming Event</p>
						<h3 class="text-white fs-36">Festivals Of Color Holi 2020</h3>
						<p class="text-white">Meet this transient world with neither grasping nor fear,trust the unfolding of life,and you will attain true serenity.</p>
					</div>
					<div class="timer event-timer">
						<div id="countdown"></div>
						<a href="#" class="btn btn-lg dark-btn margin-top-30">Register Now</a>
					</div>
				</div>

			</div>
		</div>

	</section>
	<!-- /Call to Action -->

	<!-- Latest-Blog -->
	<section class="latest_blog section-padding" id="blog">
		<div class="container">
			<div class="blog">
				<div class="section-header-center text-center">
					<h3>Latest News</h3>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel blog-slider">
							<div class="item">
								<article class="blog-section">
									<div class="blog_wrap position-relative">
										<div class="blog-post-date">
											<strong>03</strong>Dec
										</div>
										<div class="blog_img ">
											<a href="blog-detail.html"><img src="assets/images/home-page/news-01.png" alt="image"></a>
										</div>
										<div class="blog_info">
											<div class="post_meta">
												<span><a href="#">Meditation</a></span>
											</div>
											<h5><a href="blog-detail.html">haridwar at night</a></h5>
											<p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
												All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
											<a href="blog-detail.html" class="btn">Read More <i class="fa fa-caret-right"></i> </a>
										</div>
									</div>
								</article>
							</div>

							<div class="item">
								<article class="blog-section">
									<div class="blog_wrap position-relative">
										<div class="blog-post-date">
											<strong>13</strong>Jan
										</div>
										<div class="blog_img">
											<a href="blog-detail.html"><img src="assets/images/home-page/news-02.png" alt="image"></a>
										</div>
										<div class="blog_info">
											<div class="post_meta">
												<span><a href="#">Yoga</a></span>
												<span><a href="#">Books</a></span>
											</div>
											<h5><a href="blog-detail.html">chaar dhaam yatra</a></h5>
											<p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
												All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
											<a href="blog-detail.html" class="btn">Read More <i class="fa fa-caret-right"></i> </a>
										</div>
									</div>
								</article>
							</div>

							<div class="item">
								<article class="blog-section">
									<div class="blog_wrap position-relative">
										<div class="blog-post-date">
											<strong>31</strong>Dec
										</div>
										<div class="blog_img">
											<a href="blog-detail.html"><img src="assets/images/home-page/news-01.png" alt="image"></a>
										</div>
										<div class="blog_info">
											<div class="post_meta">
												<span><a href="#">Meditation</a></span>
												<span><a href="#">Peace</a></span>
											</div>
											<h5><a href="blog-detail.html">Vaishno Devi Yatra</a></h5>
											<p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
												All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
											<a href="blog-detail.html" class="btn">Read More <i class="fa fa-caret-right"></i> </a>
										</div>
									</div>
								</article>
							</div>

							<div class="item">
								<article class="blog-section">
									<div class="blog_wrap position-relative">
										<div class="blog-post-date">
											<strong>04</strong>Nov
										</div>
										<div class="blog_img">
											<a href="blog-detail.html"><img src="assets/images/home-page/news-01.png" alt="image"></a>
										</div>
										<div class="blog_info">
											<div class="post_meta">
												<span><a href="#">Enlightment</a></span>
												<span><a href="#">Peace</a></span>
											</div>
											<h5><a href="blog-detail.html">haridwar at night</a></h5>
											<p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
												All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
											<a href="blog-detail.html" class="btn">Read More <i class="fa fa-caret-right"></i> </a>
										</div>
									</div>
								</article>
							</div>

							<div class="item">
								<article class="blog-section">
									<div class="blog_wrap position-relative">
										<div class="blog-post-date">
											<strong>13</strong>Nov
										</div>
										<div class="blog_img">
											<a href="blog-detail.html"><img src="assets/images/home-page/news-02.png" alt="image"></a>
										</div>
										<div class="blog_info">
											<div class="post_meta">
												<span><a href="#">Meditation</a></span>
												<span><a href="#">Books</a></span>
											</div>
											<h5><a href="blog-detail.html">chaar dhaam yatra</a></h5>
											<p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
												All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
											<a href="blog-detail.html" class="btn">Read More <i class="fa fa-caret-right"></i> </a>
										</div>
									</div>
								</article>
							</div>

							<div class="item">
								<article class="blog-section">
									<div class="blog_wrap position-relative">
										<div class="blog-post-date">
											<strong>20</strong>Dec
										</div>
										<div class="blog_img">
											<a href="blog-detail.html"><img src="assets/images/home-page/news-01.png" alt="image"></a>
										</div>
										<div class="blog_info">
											<div class="post_meta">
												<span><a href="#">Buddha</a></span>
												<span><a href="#">Enlightment</a></span>
											</div>
											<h5><a href="blog-detail.html">Vaishno Devi Yatra</a></h5>
											<p>You need to be sure there isn't anything embarrassing hidden in the middle of text.
												All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
											<a href="blog-detail.html" class="btn">Read More <i class="fa fa-caret-right"></i> </a>
										</div>
									</div>
								</article>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Latest-Blog -->

	<section class="section-padding p-0">
		<div class="container">
			<div class="section-header-center text-center">
				<h2>Instagram</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
			</div>
		</div>
		<ul class="hm-list hm-instagram">
			<li>
				<a href="#"><img src="assets/images/home-page/insta-01.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-02.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-03.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-05.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-06.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-03.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-01.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-05.png" alt="instagram"></a>
			</li>
			<li>
				<a href="#"><img src="assets/images/home-page/insta-02.png" alt="instagram"></a>
			</li>
		</ul>
	</section>
	<!-- Footer -->
	<?php include_once 'footer.php';?>
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
	<!--Audio-JS-->
	<script src="assets/js/slick.min.js"></script>
	<!--ion-range-slider-JS-->
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<!--Audio-JS-->
	<script src="assets/js/audio_custome.js"></script>
        
        
</body>


<!-- Mirrored from primehostingindia.com/templatemonster/html/templezen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 18:00:35 GMT -->
</html>
<?php ob_end_flush();?>