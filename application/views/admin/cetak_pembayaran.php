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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/datatables/media/css/dataTables.bootstrap.css">
</head>
<body onload="window.print();">
	<div id="wrapper">
	<!-- /. NAV SIDE  -->
		<div id="page-wrapper" style="margin: 0px; min-height: 0px;">
			<div id="page-inner" style="min-height: 560px;">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-header text-center">
						Data Terminal/Pol PO Harum Prima
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Pembayaran</th>
												<th>Kode Pemesanan</th>
												<th>Tanggal Pembayaran</th>
											</tr>
										</thead>
										<tbody>
										<?php $no = 1;
											foreach ($pembayaran as $key) { ?>							
										<tr>
											<td><?=$no?></td>
											<td><?=$key->kode_pembayaran?></td>
											<td><?=$key->rel_pemesanan_kode?> </td>
											<td><?=$key->tgl_pembayaran?></td>
										</tr>
										<?php $no++;	} ?>
										</tbody>
									</table>
								</div> 
							</div> 
						</div> 
					</div>
				</div> 

			</div>
		</div>
	</div>
	</body>
</body>
</html>