<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:46 GMT -->
<head>
	<title>The Travel - Tour Travel</title>
	<!--== META TAGS ==-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- FAV ICON -->
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/fav.ico">
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
	<style type="text/css">
		.lingkaran-penuh {
		 background-color: #EE0808;
		 margin: 10px;
		 border: 1px solid black;
		 height: 40px;
		 float: right;
		 -moz-border-radius:30px;
		 -webkit-border-radius: 30px;
		 width: 40px;
		 text-align: center;
		}
	</style>
	<style>
	/*.bangku
	{
		width: 30px;
		height:30px;
		font-size:20px;
		background-color:#F00;
		color:#FFF;
		cursor:pointer;
		margin-top:4px;
		margin-right:4px;
	}*/

	.bangku{
		border: 2px solid gray;
		cursor:pointer;
		width: 45px;
		height:40px;
		background-color: white;
	}
	
	.navigasi{
		border: 2px solid gray;
		width: 35px;
		height:30px;
	}
	
	.btn-hijau
	{
		background:#4fb821;
	}		
	
	.btn-biru
	{
		background-color:#2c35f1;
	}	
</style>

</head>

<body onafterprint="myFunction()">
	<!-- Preloader -->
	<!-- <div id="preloader">
		<div id="status">&nbsp;</div>
	</div> -->
	<!--====== MOBILE MENU ==========-->
	<section class="mob-top">
		<div class="mob-menu">
			<div class="mob-head-left"> <img src="images/logo.png" alt=""> </div>
		</div>
	</section>
	<!--====== END MOBILE MENU ==========-->
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
			</li>
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
		  <ul id='home' class='dropdown-content v2-sub-sinl-men'>
			<li><a href="main.html">Home Page</a></li>
			<li><a href="index-1.html">Home 1 - Flight Booking</a></li>
			<li><a href="index-2.html">Home 2 - Tour Booking</a></li>
			<li><a href="index-3.html">Home 3 - Hotel Booking</a></li>
			<li><a href="index-4.html">Home 4 - Car Rentals </a></li>
		  </ul>
		  <!-- PACKAGE DROP DOWN MENU -->
		  <ul id='package' class='dropdown-content v2-sub-sinl-men'>
			<li><a href="family-package.html">Family Package</a> </li>
			<li><a href="honeymoon-package.html">Honeymoon Package</a> </li>
			<li><a href="group-package.html">Group Package</a> </li>
			<li><a href="weekend-package.html">WeekEnd Package</a> </li>
			<li><a href="regular-package.html">Regular Package</a> </li>
		  </ul>	
		  <!-- SIGHT DROP DOWN MENU -->
		  <ul id='sight' class='dropdown-content v2-sub-sinl-men'>
			<li><a href="places.html">Sight Seeing - 1</a> </li>
			<li><a href="places-1.html">Sight Seeing - 2</a> </li>
			<li><a href="places-2.html">Sight Seeing - 3</a> </li>
		  </ul>
			<div id='allpage' class='dropdown-content drop-v2-all'>
				<div class="drop-v2-all-inn">
					<div class="menu-sub-drop">
						<h4>Other Pages</h4>
						<ul>
							<li><a href="about.html"><i class="fa fa-user-o"></i> About Us</a> </li>
							<li><a href="testimonials.html"><i class="fa fa-commenting-o"></i> Testimonials</a> </li>
							<li><a href="events.html"><i class="fa fa-flag-checkered"></i> Events</a> </li>
							<li><a href="tips.html"><i class="fa fa-plane"></i> Tips Before Travel</a> </li>
							<li><a href="price-list.html"><i class="fa fa-usd"></i> Price List</a> </li>
							<li><a href="discount.html"><i class="fa fa-scissors"></i> Discount</a> </li>
							<li><a href="faq.html"><i class="fa fa-question"></i> FAQ</a> </li>
							<li><a href="sitemap.html"><i class="fa fa-sitemap"></i> Site map</a> </li>
							<li><a href="404.html"><i class="fa fa-exclamation-triangle"></i> 404 Page</a> </li>
							<li><a href="booking.html"><i class="fa fa-sign-in"></i> Booking</a></li>							
						</ul>
					</div>
					<div class="menu-sub-drop">
						<h4>Dashboard Pages</h4>
						<ul>
						<li><a href="db-my-profile.html"><i class="fa fa-address-book-o"></i> My Profile</a>
						</li>
						<li><a href="dashboard.html"><i class="fa fa-bookmark-o"></i> My Bookings</a>
						</li>
						<li><a href="db-travel-booking.html"><i class="fa fa-umbrella"></i> Tour Packages</a>
						</li>
						<li><a href="db-hotel-booking.html"><i class="fa fa-bed"></i> Hotel Bookings</a>
						</li>
						<li><a href="db-refund.html"><i class="fa fa-ban"></i> Cancel Bookings</a>
						</li>
						<li><a href="db-all-payment.html"><i class="fa fa-print"></i> Prient E-Tickets</a>
						</li>
						<li><a href="db-payment.html" class="ho-dr-con-last"><i class="fa fa-align-justify"></i> Make Payment</a>
						</li>
						<li><a href="register.html"><i class="fa fa-address-book-o"></i> Register with us</a>
						</li>
						<li><a href="login.html"><i class="fa fa-sign-in"></i> Log In</a>
						</li>						
						</ul>
					</div>					
					<div class="menu-sub-drop">
						<h4>Other Pages</h4>
						<ul>
							<li><a href="main.html"><i class="fa fa-check"></i> Home Page</a></li>
							<li><a href="index-1.html"><i class="fa fa-check"></i> Home 1 - Flight Booking</a></li>
							<li><a href="index-2.html"><i class="fa fa-check"></i> Home 2 - Tour Booking</a></li>
							<li><a href="index-3.html"><i class="fa fa-check"></i> Home 3 - Hotel Booking</a></li>
							<li><a href="index-4.html"><i class="fa fa-check"></i> Home 4 - Car Rentals </a></li>
							<li><a href="hotels-list.html"><i class="fa fa-check"></i> Hotels</a></li>		
							<li><a href="events.html"><i class="fa fa-check"></i> Events</a></li>
							<li><a href="blog-inner.html"><i class="fa fa-check"></i> Blog Inner</a></li>
							<li><a href="contact.html"><i class="fa fa-check"></i> Contact Us</a> </li>
						</ul>						
					</div>
					<div class="menu-sub-drop">
						<h4>Other Pages</h4>
						<ul>
							<li><a href="family-package.html"><i class="fa fa-check"></i> Family Package</a> </li>
							<li><a href="honeymoon-package.html"><i class="fa fa-check"></i> Honeymoon Package</a> </li>
							<li><a href="group-package.html"><i class="fa fa-check"></i> Group Package</a> </li>
							<li><a href="weekend-package.html"><i class="fa fa-check"></i> WeekEnd Package</a> </li>
							<li><a href="regular-package.html"><i class="fa fa-check"></i> Regular Package</a> </li>
						</ul>
					</div>					
					<div class="menu-sub-drop">
						<h4>Other Pages</h4>
						<ul>
							<li><a href="places.html"><i class="fa fa-check"></i> Sight Seeing - 1</a> </li>
							<li><a href="places-1.html"><i class="fa fa-check"></i> Sight Seeing - 2</a> </li>
							<li><a href="places-2.html"><i class="fa fa-check"></i> Sight Seeing - 3</a> </li>					
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>	
	<!--====== BANNER ==========-->
	<!-- SECTION: HEADER -->
	<!--HEADER SECTION-->
	<section>
		<div class="rows tb-space" >
			<div class="container events events-1" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div id="" >
					<div class="spe-title">
						<h2> <span>PO HARUM PRIMA</span> </h2>
						<div class="title-line">
							<div class="tl-1"></div>
							<div class="tl-2"></div>
							<div class="tl-3"></div>
						</div>
					</div>
				<div class="col-md-3"></div>
				<div class="col-md-10 col-md-6  table-bordered">
					<div id="printMe">
						<h3>Detail pemesanan</h3>
							<?php
								foreach ($detaildata as $row) {
								}
							?>
						<hr>
						<h5>Data Pemesan</h5>
							<div style="border: 10px; margin:12px">
								<div>
									<span style="font-size: 13px">Id Pemesananan &nbsp&nbsp:</span>
									<span><?= $row->kode_pemesanan?></span>
								</div>
								<div>
									<span style="font-size: 13px">Nama Pemesan &nbsp&nbsp&nbsp&nbsp:</span>
									<span><?= $row->nama_pemesan?></span>
								</div>
								<div>
									<span style="font-size: 13px">Alamat Pemesan &nbsp&nbsp:</span>
									<span><?= $row->alamat?></span>
								</div>
								<div>
									<span style="font-size: 13px">Email Pemesan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
									<span><?= $row->email?></span>
								</div>
								<div>
									<span style="font-size: 13px">No Telp Pemesan &nbsp&nbsp:</span>
									<span><?= $row->nohp?></span>
								</div>
							</div>
						<h5>Data Penumpang</h5>
							<div style="margin: 12px">
									<?php
										$no = 1;
										foreach ($detaildata as $key) { ?>
								<div>
									<span><?= $no?>. </span>
									<span style="font-size: 13px">Nama Penumpang &nbsp&nbsp:</span>
									<span><?= $key->nama_penumpang?></span>
								</div>
								<div>
									<span style="font-size: 13px">&nbsp&nbsp No Kursi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
									<span><?= $key->kursi?></span>
								</div>
								<?php $no++; }  ?>
							</div>
						<h5>Harga</h5>

							<div style="margin: 12px">
								<div>
									<span style="font-size: 13px">Total Harga &nbsp&nbsp:</span>
									<span><?=$no = $no-1?> x <?= $row->tarif?> = <?= $row->totalHarga?></span>
								</div>	
							</div>
					<h5>Pilih Bank</h5>
					<div style="margin: 12px">
						<?php
							foreach ($databank as $bank) { ?>
						
						<div class="">
							<img width="100" src="<?php echo base_url();?>assets/images/logo_bank/<?=$bank->logo?>">
							<span>No Rek : <?=$bank->nomor_rekening?> / A.N. <?=$bank->atas_nama?></span>
						</div>
						<?php	}
						?>
						
					</div>
				</div>
				<div style="margin-bottom: 10px;">
					<a  id="save" onclick="javascript:printDiv('printMe')" class="btn btn-default" style="float: right;">Save</a>
				</div>

				
	</section>

		
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
				<p>Copyrights © 2017 PO Harum Prima</p>
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
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>

	<script type="text/javascript">

		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = "<html><head><title></title></head><body>" + 	printContents + "</body>";
			window.print(); 
			document.location.href = "<?= base_url()?>";
		}

		function myFunction() {
		    alert("This document is now being printed");
		}

		/*$(document).ready(function(){
			$('.kursipenumpang').attr('disabled','disabled');
		});
		*/


	</script>

</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:48 GMT -->
</html>