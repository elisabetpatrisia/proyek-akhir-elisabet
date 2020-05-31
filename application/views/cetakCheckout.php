<!DOCTYPE html>
<html>
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
	<title></title>
</head>
<body>
	<h3>Detail pemesanan</h3>
				<?php
					foreach ($pemesanan as $row) {
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

	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-1.12.3.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>
</html>