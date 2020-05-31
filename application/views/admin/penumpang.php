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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" >
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-validator/bootstrapValidator.min.css" >   
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/datatables/media/css/dataTables.bootstrap.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->		

</head>

<style type="text/css">
 .scrollable{
   overflow: auto;
   border: 1px silver solid;
 }
 .scrollable select{
   border: none;
 }
</style>

<body>
	<section class="mob-top">
		<div class="mob-menu">
			<div class="mob-head-left"> <img src="images/logo.png" alt=""> </div>
		</div>
	</section>
	<section>
		<div class="rows head" data-spy="affix" data-offset-top="120">
			<div class="container">
				<div>
					<!--====== BRANDING LOGO ==========-->
					<div class="col-md-4 col-sm-12 col-xs-12 head_left">
						<a href="main.html"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" /> </a>
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
						<li><a href="<?= base_url()?>c_admin">Member</a></li>
						<li><a href="<?= base_url()?>c_admin/v_jadwal">Rute</a></li>
						<li><a href="<?= base_url()?>c_admin/v_pemesanan">Pemesanan</a></li>
						<li><a href="<?= base_url()?>c_admin/v_pembayaran">Pembayaran</a></li>
						<li><a href="<?= base_url()?>c_bus">Bus</a></li>
						<li><a href="<?= base_url()?>c_terminal">Terminal</a></li>
						<li><a href="<?= base_url()?>c_penumpang">Penumpang</a></li>
						<li><a href="<?= base_url()?>c_penumpang/kuota_penumpang">Kuota Penumpang</a></li>
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
			<li><a href="<?php echo base_url();?>c_admin/v_profil"><i class="fa fa-address-book-o" aria-hidden="true"></i> Profil Saya</a>
			<?php	}
			?>
			</li>
		</ul>
			
		</div>
	</section>	
	<section>
        <?php echo $this->session->flashdata('pesan'); ?>
		<div style="margin: 40px">	
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2> <span>Penumpang</span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<div class="col-md-3" style="margin-top: 15px; float: left; height: 350px">
						<div class="row">
							<div class="input">
								<input class="form-control" id="tanggal" type="date" name="tanggal" required>
							</div>
						</div>
						
						<div class="row" >
							<div class="input-field">
								<select id="keberangkatan" name="bank" size="1" style="width: 100px; overflow: auto " required >
									<option disabled selected>Pilih Kota keberangkatan</option>
									<?php
										foreach ($terminal as $tjn) { 
											if ($tjn->kota == "Bandung") {?>
											<option value="<?= $tjn->id?>"> <?= $tjn->nama_terminal?></option>			
									<?php	} } ?>
								</select>
							</div>	
						</div>	
						
						<div class="row" >
							<div class="input-field">
								<select id="tujuan" name="bank" style="width: 100px; height: 100px; overflow: auto " required >
								<option disabled selected>Pilih Kota Tujuan</option>
								<?php
									foreach ($terminal as $tjn) { 
										if ($tjn->kota != "Bandung") {
										?>
										<option value="<?= $tjn->id?>"> <?= $tjn->kota?></option>			
								<?php	} } 
								?>
							</select>
							</div>
							
						</div>	
					
						<div class="input-field" style="text-align: center;">
							<a class="link-btn caripenumpang"  value="">Cari</a>
						</div>
					</div>	
				<div class="col-md-9" style="float: right; margin-top: 15px;">
					
				<div class="penumpang">
				</div>
				</div>
					
				</div>
				

				</div>
				
	</section>
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
	<script src="<?php echo base_url()?>assets/js/jquery-latest.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/demo/tables-datatables.js"></script>
</body>
<script type="text/javascript">
	$(document).on('click','.caripenumpang', function(){
		var e = document.getElementById('keberangkatan');
		var keberangkatan = e.options[e.selectedIndex].value;
		var f = document.getElementById('tujuan');
		var tujuan = f.options[f.selectedIndex].value;
		var tanggal = document.getElementById('tanggal').value;

		$.ajax({
			url:'<?php echo base_url()?>c_penumpang/caripenumpang',
			type:'POST',
			data:{'tujuan' : tujuan, 'keberangkatan' : keberangkatan, 'tanggal' : tanggal},
			success:function(data){
				$('.penumpang').html(data);
			}
		});
	});
</script>

<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:48 GMT -->
</html>