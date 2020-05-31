<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:46 GMT -->
<head>
	<title>The Travel - Tour Travel</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- FAV ICON -->
	<link rel="shortcut icon" href="images/fav.ico">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
	<!-- FONT-AWESOME ICON CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<!--== ALL CSS FILES ==-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/materialize.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/mob.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--====== TOP HEADER ==========-->
	<section>
		<div class="rows head" data-spy="affix" data-offset-top="120">
			<div class="container">
				<div>
					<!--====== BRANDING LOGO ==========-->
					<div class="col-md-4 col-sm-12 col-xs-12 head_left">
						<a href="<?php echo base_url()?>konsumen"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /> </a>
					</div>
					<!--====== HELP LINE & EMAIL ID ==========-->
					<div class="col-md-8 col-sm-12 col-xs-12 head_right head_right_all">
						<ul>
							<li><a href="#">Help Line: +101-1231-1231</a> </li>
							<li><a href="#">Email: contact@worldtours.com</a> </li>
							<li>
								<!--<div class="dropdown">
                                    <button class="dropbtn">My Account</button>
                                    <div class="dropdown-content">
                                        <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                                        <a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i> Register with us</a>
                                        <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Bookings</a>
                                        <a href="#"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                                        <a href="#"><i class="fa fa-bed" aria-hidden="true"></i> Hotel Bookings</a>
                                        <a href="#"><i class="fa fa-ban" aria-hidden="true"></i> Cancel Bookings</a>
                                        <a href="#"><i class="fa fa-print" aria-hidden="true"></i> Prient E-Tickets</a>
                                        <a href="#" class="ho-dr-con-last"><i class="fa fa-align-justify" aria-hidden="true"></i> Custom Tour Plan</a>
                                    </div>
								</div>	--><a class='dropdown-button waves-effect waves-light profile-btn' href='#!' data-activates='myacc'><i class="fa fa-user" aria-hidden="true"></i> Akun Saya</a>
								<!-- Dropdown Structure -->
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== NAVIGATION MENU ==========-->	
	<section>
		<div class="main-menu-v2">
			<div class="container">
				<div class="row">
					<ul>
						<!-- <li><a class='dropdown-button menu-arr' href='#' data-activates='home'>Beranda</a></li>
						<li><a class='dropdown-button menu-arr' href='#' data-activates='package'>Cek Pemesanan</a></li>-->
						<!-- <li><a class='dropdown-button menu-arr' href='#' data-activates='sight'>Sight Seeing</a></li>-->
						<!-- <li><a href="events.html">Events</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a class='dropdown-button menu-arr' href='#' data-activates='allpage'>All Pages</a></li>-->
						<li><a href="<?= base_url()?>konsumen">Beranda</a></li>
						<li><a href="<?= base_url()?>konsumen/cek_pemesanan">Cek Pemesanan</a></li>
						<li><a href="<?= base_url()?>konsumen/v_rute">Rute</a></li>
						<li><a href="<?= base_url()?>konsumen/v_tentang">Tentang</a></li>
					</ul>
				<div>
			<div>
		<div>
		<div class="all-drop-menu">
		  <!-- PACKAGE DROP DOWN MENU -->
		<ul id='myacc' class='dropdown-content v2_head_right'>
			<?php
				if (!isset($this->session->userdata['logged_in'])) { ?>
			<li><a href="<?php echo base_url();?>konsumen/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
			</li>
			<li><a href="<?php echo base_url();?>konsumen/registrasi"><i class="fa fa-address-book-o" aria-hidden="true"></i> Menjadi member!</a>
			<?php	} else { ?>
			<li><a href="<?php echo base_url();?>c_login/logout"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
			</li>
			<li><a href="<?php echo base_url();?>konsumen/v_profil"><i class="fa fa-address-book-o" aria-hidden="true"></i> Profil Saya</a>
			<?php	}
			?>
			<!-- <li><a href="dashboard.html"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Bookings</a>
			</li>
			<li><a href="db-travel-booking.html"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
			</li>
			<li><a href="db-hotel-booking.html"><i class="fa fa-bed" aria-hidden="true"></i> Hotel Bookings</a>
			</li>
			<li><a href="db-refund.html"><i class="fa fa-ban" aria-hidden="true"></i> Cancel Bookings</a>
			</li>
			<li><a href="db-all-payment.html"><i class="fa fa-print" aria-hidden="true"></i> Prient E-Tickets</a>
			</li>
			<li><a href="db-payment.html" class="ho-dr-con-last"><i class="fa fa-align-justify" aria-hidden="true"></i> Make Payment</a>
			</li> -->
		</ul>		
		  <!-- HOME DROP DOWN MENU -->
		</div>
	</section>	
	<!--====== BANNER ==========-->
	<!-- SECTION: HEADER -->
	<!--HEADER SECTION-->
	<section>
		<div class="v2-hom-search">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div class="">
						<form class="v2-search-form" method="POST" action="<?= base_url()?>konsumen/v_jadwal">
							<div class="row">
								<div class="input-field col s12">
									<select type="text" id="select-city" class="autocomplete" name="naikdi">
										<option value="" selected disabled>Bandung (Naik dari)</option>
										<?php
											foreach ($kotaasal as $key) {
													if ($key->kota == "Bandung") {
												 ?>
													<option value="<?=$key->id?>"><?= $key->nama_terminal?></option>	
											<?php	} }
										?>
									</select>
								</div>
								<div class="input-field col s12">
									<select type="text" id="select-city" class="autocomplete" name="kotatujuan">
										<option value="" selected disabled>Kota Tujuan</option>
										<?php
											foreach ($kotaasal as $row) {
													if ($row->kota != "Bandung") {
											 ?>
													<option value="<?=$row->id?>"><?= $row->kota?></option>	
											<?php	} }
										?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<?php
										$now = date('Y-m-d');
										$sebulan = date('Y-m-d',strtotime('+30days', strtotime($now)));
									?>
									<input type="date" id="from" name="tglkeberangkatan" max="<?= $sebulan ?>" min="<?= $now?>" required >
								</div>
							</div>
								<div class="row">
									
								</div>							
							<div class="row">
								<div class="input-field col s12" align="center">
									<input type="submit" value="cari" class="col-md-12 btn-primary btn-md waves-effect waves-light">
								</div>
							</div>
						</form>
					</div>						
					</div>
					<div class="col-md-6">
					<div class="v2-ho-se-ri">
						<h1>Booking Bus!</h1>
						<p>Experience the various exciting tour and travel packages</p>
						<!-- <div class="tourz-hom-ser v2-hom-ser">
							<ul>
								<li>
									<a href="index-2.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="<?php echo base_url()?>assets/images/icon/2.png" alt=""> Tour</a>
								</li>
								<li>
									<a href="index-1.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="<?php echo base_url()?>assets/images/icon/31.png" alt=""> Flight</a>
								</li>
								<li>
									<a href="index-4.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="<?php echo base_url()?>assets/images/icon/30.png" alt=""> Car Rentals</a>
								</li>
								<li>
									<a href="index-3.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="<?php echo base_url()?>assets/images/icon/1.png" alt=""> Hotel</a>
								</li>								
							</ul>
						</div> -->
					</div>						
					</div>					
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->
	<!--====== HOME PLACES ==========-->
	
	<!--====== HOME HOTELS ==========-->
	
	<!--====== HOME HOTELS ==========-->
	
	<!--====== SECTION: FREE CONSULTANT ==========-->
	
	<!--====== EVENTS ==========-->
	
	<!--====== POPULAR TOUR PLACES ==========-->
	
	<!--====== REQUEST A QUOTE ==========-->
	
	<!--====== REQUEST A QUOTE ==========-->
	
	<!--====== REQUEST A QUOTE ==========-->
	<!--<section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="images/family.png" alt="" />
                </div>
            </div>
        </div>
    </section>-->
	<!--====== TIPS BEFORE TRAVEL ==========-->
		
	<!--====== FOOTER 1 ==========-->
	
	<!--====== FOOTER 2 ==========-->
	<section>
		<div class="rows">
			<div class="footer">
				<div class="container">
					<div class="foot-sec2">
						<div>
							<div class="row">
								<div class="col-sm-3 foot-spec foot-com" style="float: right;">
									<h4><span>PO</span> HARUM PRIMA</h4>
									<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FOOTER - COPYRIGHT ==========-->
	<section>
		<div class="rows copy">
			<div class="container">
				<p>Copyrights © 2017 PO Harum Prim</p>
			</div>
		</div>
	</section>
	<!-- <section>
		<div class="icon-float">
			<ul>
				<li><a href="#" class="sh">1k <br> Share</a> </li>
				<li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
				<li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
			</ul>
		</div>
	</section> -->
	<!--========= Scripts ===========-->
	<script src="<?php echo base_url()?>assets/js/jquery-latest.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:48 GMT -->
</html>