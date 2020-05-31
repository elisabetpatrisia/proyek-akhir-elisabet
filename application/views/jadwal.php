<?php
	foreach ($rute as $rt ) {}
		if (empty($rute)) {
			
		} else {
			$tgl_keberangkatan = $rt['tglkeberangkatan'];
		}
?>
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

<body>
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
        <?php echo $this->session->flashdata('pesan'); ?>
		<div class="rows tb-space">
			<div class="container events events-1" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2> <span>PO HARUM PRIMA</span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					
				</div>
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
				<table id="myTable">
					<tbody>

						<?php
							if (empty($rute)) { ?>
							<tr>
								<td>
									<h3>JADWAL TIDAK ADA</h3>
								</td>
							</tr>	
						<?php	} else {
						?>
						
						<?php
							foreach ($rute as $key) {
								$GLOBALS['harga'] = $key['tarif']; 
								$GLOBALS['id_rute'] = $key['id_rute']; 
							 ?>
						<tr>
							<td>1</td>
							<td>
							<div style="height: 30px"><a href="hotels-list.html" class="events-title">PO HARUM PRIMA</a></div>
							<div style="height: 30px"><a class="events-title"><h6>NOPOL <?= $key['nopol_bus']?></h6></a></div>
							</td>
							<td title="Terminal keberangkatan" tag-name>
								
								<div style="height: 30px">
									<font size="3" ><?= $key['terminal_keberangkatan']?></font>
								</div>	
								<div style="width: 170px">	
									<font size="2"><?= $key['alamat_keberangkatan']?></font>								
								</div>

							</td>
							<td>
								<i class="glyphicon glyphicon-minus"></i>
							</td>
							<td title="Terminal Tujuan">
								<div style="height: 30px">
									<font size="3"><?= $key['terminal_kedatangan']?></font>
								</div>
								<div style="width: 170px">	
									<font size="2"><?= $key['alamat_kedatangan']?></font>								
								</div>
							</td>
							<td class="e_h1" width="135px" >
								<div style="height: 30px">
									<font size="4"><?= substr($key['jam_keberangkatan'], 0,5)?>
									<i class="glyphicon glyphicon-minus"></i>
									<?= substr($key['jam_tiba'], 0,5)?></font>
								</div>
									<div>
									<font size="2.5" title="Lama perjalanan"><?= substr($key['estimasiwaktu'], 0,2)?>j <?= substr($key['estimasiwaktu'], 3,4 )?>m</font>
									</div>
								</div>
							</td>
							<td class="e_h1"></td>
							<td class="e_h1" width="135px" title="Tempat Duduk">
								<div  style="height: 30px; text-align: center;" >
									<img style="width: 35px" src="<?php echo base_url()?>assets/images/seat.png">
								</div> 
								<div style="text-align: center">
								<strong>
									<font size="2" ><?= $key['kuota']?> Tempat Duduk</font>
								</strong>
								</div>
							</td>
							<td > 
							<div  style="margin-top: 10px; text-align: center;" title="Tarif"><font size="5">Rp. <?= $GLOBALS['harga']  ?></font></div>
							<hr size="10" noshade>

							<?php
								if ($key['kuota'] == 0) { ?>
									<div style="margin-bottom: 10px; text-align: center; opacity: 0.5; " title="out of stock" ><a  style="background-color: #A9A9A9" class="link-btn" >Pesan</a></div>
							<?php	} else { ?>
									<div style="margin-bottom: 10px; text-align: center; "><a data-toggle="collapse" data-target="#detailpemesanan" class="link-btn" disabled >Pesan</a></div>
							<?php	}
							?>
							
							</td>
						</tr>
						<?php } } ?>
					</tbody>
				</table>
				<br>
				<div>
				<div class="col-sm-6 table-bordered collapse" id="detailpemesanan" >
				<h4 >PILIH TEMPAT DUDUK</h4>
					
					<div  class="col-md-7" style=" border: 2px; background-color: #F5F4F4; margin-bottom: 10px; width:350px;height: 200px ; margin-left: 50px">
						<div align="center" style="border-top: 5px solid black">
						<?php
							$x = 0;
							$jml = count($kursi);
							for ($i=1; $i <= 20 ; $i++) {
								if ($jml > 0) { 
										if ($kursi[$x] == $i) { ?>
											<div class="col-md-3">
												<div class="btn" style="width: 65px; background-color: red"><font color="black"><?= $i ?></div>
												</div>
									<?php 
									$jml -- ;
									$x ++ ;
									} else { ?>
											<div class="col-md-3">
												<div class="btn" style="width: 65px; background-color: white" >
													<input class="kursi" type="checkbox" id="<?= $i?>" name="seats[]" value="<?= $i?>"/><label for="<?= $i?>" class="seat"><span></span><?= $i?></label>
												</div> 
											</div>
									<?php } 
								} else { ?>
									<div class="col-md-3">
										<div class="btn" style="width: 65px; background-color: white" >
											<input class="kursi" type="checkbox" id="<?= $i?>" name="seats[]" value="<?= $i?>"/><label for="<?= $i?>" class="seat"><span></span><?= $i?></label>
										</div> 
									</div>
								<?php	}  }   ?>
							
						</div>
					</div>
					<!-- <input type="checkbox" name="coba"></input> -->
					<div class="col-md-3" style="float: right">
						<div class="col-md-6">
							<div><font size="1">Kursi Booking</font></div>
							<div><font size="1">Kursi Kosong</font></div>
						</div>
						<div class="col-md-6">
							<div class="navigasi" style="background-color: red; margin-bottom: 10px; margin-top: 5px"></div>
							<div class="navigasi" style="background-color: white"></div>
						</div>
						
					</div>

					<div class="col-md-12">
							<div style="margin-bottom: 10px; text-align: center; float: right "><a id="lihattotal" data-toggle="collapse" data-target=".datapemesanan" class="link-btn" >Berikutnya</a></div>
							<!-- <div style="margin-bottom: 10px; text-align: center; float: left;"><a class="link-btn">Pilih Kursi</a></div> -->

					<!-- <button id="lihatbangku"  >Detail Bangku Pesan</button> -->
						</div>
				</div>
				<div class="col-md-5 table-bordered collapse datapemesanan" style=" float: right; margin-bottom: 5px" >
				<h4 >DATA PEMESAN</h4>
					<form style="margin-bottom: 10px" action="<?php echo base_url()?>konsumen/a_pemesanan" method="POST">
							<div class="row">
								<?php
									if (isset($this->session->userdata['logged_in'])) { ?>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="namapemesan" value="<?= $this->session->userdata['logged_in']['nama']?>" readonly >
										<input type="hidden" class=" form-control validate" name="jmlpenumpang" id="jmlpenumpang" placeholder="Nama Pemesan" >
										<input type="hidden" class=" form-control validate" name="id_rute" value="<?= $GLOBALS['id_rute']; ?>" >
										<input type="hidden" name="tglkeberangkatan" value="<?= $tgl_keberangkatan?>">
									</div>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="email" value="<?= $this->session->userdata['logged_in']['email']?>" placeholder="Alamat  Email" readonly>
									</div>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="alamat" value="<?= $this->session->userdata['logged_in']['alamat']?>" placeholder="Alamat" readonly>
									</div>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="hp" value="<?= $this->session->userdata['logged_in']['nohp']?>" placeholder="No  Handphone" readonly>
									</div>
									<div class="input-field" >
										<select name="bank" >
											<option disabled selected>Pilih Bank</option>
											<?php
										foreach ($databank as $bnk) { ?>

											<option value="<?=$bnk->id?>"><?=$bnk->nama_bank?></option>	
											<?php	} ?>
										</select>
									</div>	
								<?php } else { ?>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="namapemesan" placeholder="Nama Pemesan">
										<input type="hidden" class=" form-control validate" name="jmlpenumpang" id="jmlpenumpang" placeholder="Nama Pemesan" >
										<input type="hidden" class=" form-control validate" name="id_rute" value="<?= $GLOBALS['id_rute']; ?>" >
									</div>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="email" placeholder="Alamat  Email">
									</div>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="alamat" placeholder="Alamat">
									</div>
									<div class=" input-field">
										<input type="text" class=" form-control validate" name="hp" placeholder="No  Handphone">
									</div>
									<div class="input-field" >
										<select name="bank" >
											<option disabled selected>Pilih Bank</option>
											<?php
										foreach ($databank as $bnk) { ?>

											<option value="<?=$bnk->id?>"><?=$bnk->nama_bank?></option>	
											<?php	} ?>
										</select>
									</div>
								<?php	}
								?>
								
							</div>
							<?php
								foreach ($rute as $rute) {?>
								<input type="hidden" class=" form-control validate" value="<?= $rute['tglkeberangkatan']?>" name="tglkeberangkatan" >
							<?php	}
							?>
					
					<div id="penumpang">
					<h4 id="judul" style="display: none" >DATA PENUMPANG</h4>
					</div>
					<div id="submit" style="margin-bottom: 10px; text-align: center; float: right; display: none ">
					<button  class="link-btn" value="Submit" type="submit">Submit</button>
					
					</form>
				</div>
				</div>
				
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
	<!--========= Scripts ===========-->
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>

	<script type="text/javascript">


		/*$(document).ready(function(){
			$('.kursipenumpang').attr('disabled','disabled');
		});
		*/

		function writeCookie(name,value,days) {
		    var date, expires;
		    if (days) {
		        date = new Date();
		        date.setTime(date.getTime()+(days*24*60*60*1000));
		        expires = "; expires=" + date.toGMTString();
		            }else{
		        expires = "";
		    }
		    document.cookie = name + "=" + value + expires + "; path=/";
		}

		function readCookie(name) {
		    var i, c, ca, nameEQ = name + "=";
		    ca = document.cookie.split(';');
		    for(i=0;i < ca.length;i++) {
		        c = ca[i];
		        while (c.charAt(0)==' ') {
		            c = c.substring(1,c.length);
		        }
		        if (c.indexOf(nameEQ) == 0) {
		            return c.substring(nameEQ.length,c.length);
		        }
		    }
		    return '';
		}

		$(document).ready(function(){
				
				$('.bangku').on('click', function() {
				var i=$(this).attr("data-id");
				
				if(i=="1")
				{
					return false;
				}else{
					if(i=="0")
					{
						$(this).css('background','red', 'disabled');
						$(this).attr('data-id','3');
						Tambah();
						var jmlpenumpang = jmlpenumpang - 1;
					}else if(i=="3"){
						$(this).css('background','white');
						$(this).attr('data-id','0');
						Tambah();
						var jmlpenumpang = jmlpenumpang + 1;

					}
				}	
	  		});
					
		  	
		  	/*$("#lihatbangku").click(function(){
		  		var str = [], item;
					    $.each($('div[data-id="3"]'), function (index, value) {
					        item = $(this).text();                   
					        str.push(item);                   
					    });
					    var selek=str.join(',');
					    alert("Bangku yg dipesan "+selek);
		  	});*/
		  		
		  	function Tambah() {
				  var total=$('div[data-id="3"]').length;
				    	var str = [], item;
					    $.each($('div[data-id="3"]'), function (index, value) {
					        item = $(this).text();                   
					        str.push(item);                   
					    });
					    var selek=str.join(',');
				    	writeCookie('totseat',total,1);
				    	writeCookie('selekseat',selek,1);
				    	
			}
		});

		jQuery(document).ready(function($){
			$(document).on('click', '#lihattotal', function(event){
	  			var jml = $('[name="seats[]"]:checked').length;	
	  			$('#jmlpenumpang').val(jml);
	  			var chkArray = [];
	  			$(".kursi:checked").each(function(){
	  				chkArray.push($(this).val());
	  			});
	  			//formpenumpang();
	  			var html = '';
				html += '<div class="row datapenumpang">';
				html += '<input type="hidden" value="'+jml+'" class="form-control validate kursi" name="jmlpenumpang"  ></input>';

				for (var i = 0; i < jml; i++) {
					html += '<div class="input-field" style="margin-bottom:5px">';
	  			html += '<input type="text" class="form-control validate" name="namalengkap[]" placeholder="Nama Lengkap" ></input>';
				html += '<input type="hidden" class="form-control validate" name="harga[]" placeholder="Nama Lengkap" value="'+<?php echo $GLOBALS['harga'] ?>+'" ></input>';
				html += '<input type="hidden" value="'+chkArray[i]+'" class="form-control validate kursi" name="kursi[]" placeholder="Nama Lengkap" ></input>';
				html += '</div>';
				}
	  			
				$('div#penumpang').append(html);

	  			$('h4#judul').css('display','block');
	  			$('div#submit').css('display','block');
	  			

			});
		});

	</script>

</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:48 GMT -->
</html>