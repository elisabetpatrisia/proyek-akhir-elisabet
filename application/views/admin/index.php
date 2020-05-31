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
						<li><a href="<?= base_url()?>c_admin">Kelola User</a></li>
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
		<?php if ($this->session->flashdata('failed')) {?>
	      <div class="col-md-12 alert alert-danger"><?php echo $this->session->flashdata('failed')?> 
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      </div>
	  <?php }else if ($this->session->flashdata('success')) { ?>
	  		<div class="col-md-12 alert alert-success"><?php echo $this->session->flashdata('success')?> 
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      </div>
	  	<?php } ?>
		<div style="margin: 40px">
			<div class="container events events-1" id="inner-page-title">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2> <span>Tabel Member</span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<a data-toggle="modal" data-target=".tambahMember" class="link-btn" style="margin: 5px">Tambah member</a>
					<a class="link-btn" href="<?= base_url()?>c_member/cetakMember" style="margin: 5px;"><i class="fa fa-print"></i></a>
				</div>
				<div class="container">
					<table style="float: right" class="table table-striped table-bordered data">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Alamat</th>
								<th>Jenis Kelamin</th>
								<th>No Hp</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach ($member as $key) { ?>							
							<tr>
								<td><?=$no?></td>
								<td><?=$key->nama?></td>
								<td><?=$key->alamat?></td>
								<td><?=$key->jenis_kel?></td>
								<td><?=$key->nohp?></td>
								<td><?=$key->email?></td>
								<td>
									<a class="edit" data-toggle="modal" data-target=".editMember" id="<?= $key->id?>"><i class="fa fa-pencil icon"></i></a>
									<a class="delete" data-toggle="modal" data-target=".deleteModal" id="<?= $key->id?>" style="background-color: red"><i class="fa fa-remove"></i></a>
								</td>
							</tr>
							<?php $no++;	} ?>
						</tbody>
					</table>
				</div>
				</div>
				
	</section>

	<div class="modal fade deleteModal">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Anda yakin anda menghapus data ini?</h4>	
			</div>
				<form method="POST" action="<?= base_url()?>c_member/a_delete">
				<input type="hidden" name="delete_member" id="delete_member" class="form-control" ></input>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
				</form>
			</div>					
		</div>
	</div>

	<div class="modal fade tambahMember">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Member</h4>	
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url()?>c_member/a_tambahmember">
						<span>Nama Lengkap</span>
						<input class="validate" type="text" id="namalengkap" name="namalengkap" required>
						<br/>
						<span>Password</span>
						<input class="validate" type="password" id="password" name="password" required>
						<br/>	
						<span>Alamat</span>
						<input class="validate" type="text" id="alamat" name="alamat" required>
						<br/>
						<span>Jenis Kelamin</span>
						<select class="validate" name="jeniskelamin">
							<option value="pria">Pria</option>
							<option value="wanita">Wanita</option>
						</select>
						<span>No Hp</span>
						<input class="validate" type="number" id="nohp" name="nohp" required>
						<br/>
						<span>Email</span>
						<input class="validate" type="email" id="email" name="email" required>
						<br/>
						<span>Role</span>
						<select name="role">
							<option value="1">Admin</option>
							<option value="2">Konsumen</option>
						</select>
						
				</div>	

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
				</div>
			</div>					
		</div>
	</div>

	<div class="modal fade editMember">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Member</h4>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url()?>c_member/a_updatemember">
						<span>Nama Lengkap</span>
						<input class="validate" type="text" id="editnamalengkap" name="editnamalengkap" required>
						<input type="hidden" id="editid" name="editid"></input>
						<br/>	
						<span>Alamat</span>
						<input class="validate" type="text" id="editalamat" name="editalamat" required>
						<br/>
						<span>Jenis Kelamin</span>
						<select id="editjeniskelamin" class="validate" name="editjeniskelamin">
							<option value="pria">Pria</option>
							<option value="wanita">Wanita</option>
						</select>
						<span>No Hp</span>
						<input class="validate" type="number" id="editnohp" name="editnohp" required>
						<br/>
						<span>Email</span>
						<input class="validate" type="email" id="editemail" name="editemail" required>
						<br/>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

		
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

	<script type="text/javascript">
		$(document).ready(function() {
      		$('.data').DataTable();
		});
	</script>

	<script type="text/javascript">
		$(document).on('click', '.delete', function(){
			var kode = $(this).attr('id');
			$('#delete_member').val(kode);
		});

	</script>

	<script type="text/javascript">
		$(document).on('click','.edit', function(){
			var kode = $(this).attr('id');

			$.ajax({
				url:'<?php echo base_url()?>c_member/a_editmember/'+kode,
				type: 'POST',
				data: {'id':kode},
				dataType:'json',
				success: function(data){
					$('#editid').val(data.id);
					$('#editnamalengkap').val(data.nama);
					$('#editalamat').val(data.alamat);
					$('#editjeniskelamin').val(data.jenis_kel);
					$('#editnohp').val(data.nohp);
					$('#editemail').val(data.email);
				}
			});
		});
	</script>

</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2017 02:45:48 GMT -->
</html>