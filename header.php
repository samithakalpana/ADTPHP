<?php
// if (session_id() == "") {
// 	session_start();
// }

// // echo "123";
// // echo $_SESSION["page"];
// $pageName=$_SESSION["page"];
// echo $pageName;
?>


<!-- Header -->
	<header id="header" class="nav-stacked" data-spy="affix" data-offset-top="1">
		<!-- Header-top -->
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-4 col-8">
						<div class="follow_us">
							<!-- <ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul> -->
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-4">
						<ul class="top-btn list-inline">
							<li class="list-inline-item"><i class="fa fa-phone"></i><a href="tel:+94 011 269 5012">+94 11 269 5012</a></li>
							<li class="list-inline-item"><i class="fa fa-envelope"></i><a href="adtrust@sltnet.lk">adtrust@sltnet.lk</a></li>
							<li class="list-inline-item"><a class="btn btn-sm dark-btn templezen-top-btn" href="actions/languageAction.php?lang=english&&page=index.php">සිංහල</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Header-top -->

		<!-- Navigation -->
		<nav id="navigation_bar" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<div class="logo">
						<a href="index.php"><img src="assets/images/logo.png" alt="image" /></a>
					</div> <!-- /Logo -->
					<div id="menu_slide">
						<div id="nav-toggle-label">
							<div id="hamburger">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<div id="cross">
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="nav navbar-nav">
						<li ><a href="index.php">Home<span class="nav_arrow"></span></a>
						<!-- <li class="dropdown"><a href="#">Home<span class="nav_arrow"></span></a>
							<ul class="sub-menu">
								<li><a href="index.html">Homepage 1</a></li>
								<li><a href="index2.html">Homepage 2</a></li>
							</ul>
						</li> -->
						

						<li class="dropdown" ><a href="about-us.php">Life of Anagarika <br/>Dharmapala <span class="nav_arrow"></span></a>
							<ul class="sub-menu">
								<li><a href="life_1_our-teachers.php">Don David Hewavitarne</a></li>
								<li><a href="life_2_our-teachers.php">The Anagarika</a></li>
								<li><a href="life_3_our-teachers.php">Sri Devamitta Dhammapala</a></li>
								<li><a href="life_4_our-teachers.php">Battle for Buddha Gaya</a></li>
								<li><a href="life_6_timeline.php">Timeline</a></li>
								<li><a href="life_5_our-teachers.php">Legacy</a></li>
								<!-- <li><a href="sermon-detail.php">Legacy</a></li> -->
							</ul>

						</li>
						<li class="dropdown"><a href="#">Family and  <br/>Benefactors <span class="nav_arrow"></span></a>
							<ul class="sub-menu">
								<li class="dropdown"><a href="#">Family</a>
								<ul class="sub-menu">
								<li><a href="family_1_our-teachers.php"> H. Don Carolis</a>
								<li><a href="family_2_our-teachers.php">Mallika Hewavitarne</a>
								<li><a href="family_3_our-teachers.php">Engeltina Moonesinghe</a>
								<li><a href="family_4_our-teachers.php">Edmund Hewavitarne</a>
								<li><a href="family_5_our-teachers.php">Simon Hewavitarne</a>
								<li><a href="family_6_our-teachers.php">Charles Hewavitarne</a>
								</ul>
							</li>
							<li class="dropdown"><a href="#">Benefactors</a>
								<ul class="sub-menu">
								<li><a href="benefactors_1_our-teachers.php">Ven. Hikkaduwe Sri Sumangala</a>
								<li><a href="benefactors_2_our-teachers.php">Mary Robinson Foster</a>
								<li><a href="benefactors_3_our-teachers.php">Col. Henry Steel Olcott</a>
								<li><a href="benefactors_4_our-teachers.php">Helena Petrovna Blavatsky</a>
								<li><a href="benefactors_5_our-teachers.php">Sir Edwin Arnold</a>
								<li><a href="benefactors_6_our-teachers.php">Neelkamal Mukherjee</a>
								<li><a href="benefactors_7_our-teachers.php">Devapriya Valisinha</a>
								</ul>
							</li>
						
								<!-- <li><a href="events.php">Family and Benefactors</a></li>
								<li><a href="events.php">Family and Benefactors</a></li>
								<li><a href="event-detail.php">Family and Benefactors</a></li> -->
							</ul>
						</li>
						<li class="dropdown">
							<a href="about-us.php">The Trust <span class="nav_arrow"></span></a>
							<ul class="sub-menu">

								
								<li><a href="about-us.php">Chairman's Message</a></li>
								<li><a href="about-us.php#section_2">About the Trust</a></li>
								<li><a href="about-us.php#section_3">Managing Trustees</a></li>
								

								<li class="dropdown"><a href="#">Associates</a>
								<ul class="sub-menu">
								<li><a href="Associates_1_Maha_Bodhi_Society.php">Maha Bodhi Society</a></li>
								<li><a href="Associates_1_Maha_Bodhi_Society_India.php">Maha Bodhi Society India</a></li>
								<li><a href="Associates_1_london_buddist_vihara.php">London Buddhist Vihara</a></li>
								<li><a href="Associates_1_British_Maha_Bodhi_society.php">British Maha Maha Bodhi Society</a></li>
								<li><a href="Associates_1_somawati_hevavitarana_trust.php">Somawati Hewavitarne Trust </a></li>
								<!-- <li><a href="log-in.html">Somawati Hewavitarne Trust</a></li> -->
								</ul>
							</li>
								<!-- <li><a href="log-in.html">log-in</a></li> -->
								<!-- <li><a href="sign-up.html">sign-up</a></li> -->
							</ul>
						</li>
						<li class="dropdown" ><a href="#">Publications <br/> and Research  <span class="nav_arrow"></span></a>
							<!-- <ul class="sub-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
							</ul> -->						
								<ul class="sub-menu">
								<li><a href="our-teachers.php">Diaries</a>
								<li><a href="our-teachers.php">Other publications</a>
								<li><a href="our-teachers.php">Information for Researchers</a>
						
								</ul>
						</li>
						
						<li><a href="shop_main_ADT_books.php">Store</a></li>
						<li ><a href="contact-us.php">Contact Us<span class="nav_arrow"></span></a>
							<!-- <ul class="sub-menu">
								<li><a href="sermon.html">Life of Anagarika Dharmapala</a></li>
								<li><a href="sermon-detail.html">Sermon Detail</a></li>
							</ul> -->
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Navigation end -->


		<!-- Mobile Navigation -->
		<div class="mobile-menu">
			<ul class="wd-menu pop-scroll">
				<li class="has-child">
					<a href="/">Home</a>
					<!-- <ul class="sub-menu">
						<li><a href="index.php">Homepage 1</a></li>
						<li><a href="index2.php">Homepage 2</a></li>
					</ul> -->
				</li>
				<li class="has-child">
					<a href="#">Life Of Dharmapala</a>
					
					<ul class="sub-menu">
			
						<li><a href="life_1_our-teachers.php">Don David Hewavitarne</a></li>
								<li><a href="life_2_our-teachers.php">The Anagarika</a></li>
								<li><a href="life_3_our-teachers.php">Sri Devamitta Dhammapala</a></li>
								<li><a href="life_4_our-teachers.php">Battle for Buddha Gaya</a></li>
								<li><a href="sermon-detail.php">Timeline</a></li>
								<li><a href="life_5_our-teachers.php">Legacy</a></li>
					</ul>
				</li>
				<li class="has-child">
					<a href="#">Family And Benefactors</a>
					<ul class="sub-menu">
					<li class="has-child dropdown"><a href="#">Family</a>
								<ul class="sub-menu">
								<li><a href="family_1_our-teachers.php"> H. Don Carolis</a>
								<li><a href="family_2_our-teachers.php">Mallika Hewavitarne</a>
								<li><a href="family_3_our-teachers.php">Engeltina Moonesinghe</a>
								<li><a href="family_4_our-teachers.php">Edmund Hewavitarne</a>
								<li><a href="family_5_our-teachers.php">Simon Hewavitarne</a>
								<li><a href="family_6_our-teachers.php">Charles Hewavitarne</a>
								</ul>
							</li>
							<li class="has-child"><a href="#">Benefactors</a>
								<ul class="sub-menu">
								<li><a href="benefactors_1_our-teachers.php">Ven. Hikkaduwe Sri Sumangala</a>
								<li><a href="benefactors_2_our-teachers.php">Mary Robinson Foster</a>
								<li><a href="benefactors_3_our-teachers.php">Col. Henry Steel Olcott</a>
								<li><a href="benefactors_4_our-teachers.php">Helena Petrovna Blavatsky</a>
								<li><a href="benefactors_5_our-teachers.php">Sir Edwin Arnold</a>
								<li><a href="benefactors_6_our-teachers.php">Neelkamal Mukherjee</a>
								<li><a href="benefactors_7_our-teachers.php">Devapriya Valisinha</a>
								</ul>
							</li>
						<!-- <li><a href="our-teachers.php">our-teachers</a></li>
						<li><a href="shop-left.php">shop-left</a></li>
						<li><a href="shop-right.php">shop-right</a></li>
						<li><a href="shop-full-width.php">shop-full-width</a></li>
						<li><a href="log-in.php">log-in</a></li>
						<li><a href="sign-up.php">sign-up</a></li>-->
					</ul>
				</li>
				<li class="has-child"><a href="about-us.php">The Trust</a>
			<ui class="sub-menu">
				<!-- <li><a href="">Chairmans Message</a></li>
				<li><a href="">About The Trust</a></li> -->
			</ui>
			</li>
				<li><a href="/">Publication And Research </a></li>
				<li><a href="shop-left.php">Shop</a></li>
				<li><a href="contact-us.php">contact us</a></li>

				<!-- <li class="has-child"><a href="#">Sermon</a>
					<ul class="sub-menu">
						<li><a href="sermon.php">Sermon</a></li>
						<li><a href="sermon-detail.php">Sermon Detail</a></li>
					</ul>
				</li> -->

				<!-- <li class="has-child"><a href="#">Event</a>
					<ul class="sub-menu">
						<li><a href="events.php">Event</a></li>
						<li><a href="event-detail.php">Event Detail</a></li>
					</ul>
				</li> -->

			</ul>
		</div>
		<!-- END/Mobile Navigation -->
	</header>
	<!-- /Header -->