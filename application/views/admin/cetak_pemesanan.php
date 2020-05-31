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
						Data Pemesanan PO Harum Prima
							<h3 class="text-center">Periode <?= $periode?></h3>
						</h1>
						
					</div>
				</div>
				<h5>Pemesanan Lunas</h5>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Pemesanan</th>
												<th>Nama Pemesan</th>
												<th>No Hp</th>
												<th>Email</th>
												<th>Tanggal</th>
												<th>Status</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
										<?php
											if (empty($pemesanan)) { ?>
												<tr>
													<td colspan="8" class="text-center">Periode Tidak tersedia</td>
												</tr>
										<?php } else {
												$tpendapatan = 0;
												$no = 1;
												foreach ($pemesanan as $key) { ?>							
													<tr>
														<td><?=$no?></td>
														<td><?=$key->kode_pemesanan?></td>
														<td><?=$key->nama_pemesan?></td>
														<td><?=$key->nohp?></td>
														<td><?=$key->email?></td>
														<td><?=$key->tgl_pemesanan?></td>
														<td>
														<?php
															if ($key->status == "0") { ?>
																<a class="btn" style="background-color: red">Belum Lunas</a>									
														<?php	
															}elseif ($key->status == "1") { ?>
																<a class="btn" style="background-color: green">Lunas</a>
														<?php	} else { ?>
																<a class="btn" style="background-color: green">Expired</a>
														<?php }
														?>
														</td>
														<td><?=$key->totalHarga?></td>
													</tr>
												<?php $no++;
												  $tpendapatan = $tpendapatan + $key->totalHarga; 
												} ?>
													<tr>
														<td colspan="6"></td>
														<td>Total Pendapatan</td>
														<td><?= $tpendapatan ?></td>
													</tr>
											<?php } ?>
											
										</tbody>
									</table>
								</div>
							</div> 
						</div> 
					</div> 
				</div>
				<h5>Pemesanan Belum Lunas</h5>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Pemesanan</th>
												<th>Nama Pemesan</th>
												<th>No Hp</th>
												<th>Email</th>
												<th>Tanggal</th>
												<th>Status</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
										<?php
											if (empty($pemesananBL)) { ?>
												<tr>
													<td colspan="8" class="text-center">Periode Tidak tersedia</td>
												</tr>
											<?php } else {
												$tpendapatan = 0;
												$no = 1;
												foreach ($pemesananBL as $key) { ?>							
													<tr>
														<td><?=$no?></td>
														<td><?=$key->kode_pemesanan?></td>
														<td><?=$key->nama_pemesan?></td>
														<td><?=$key->nohp?></td>
														<td><?=$key->email?></td>
														<td><?=$key->tgl_pemesanan?></td>
														<td>
														<?php
															if ($key->status == "0") { ?>
																<a class="btn" style="background-color: red">Belum Lunas</a>									
														<?php	
															}elseif ($key->status == "1") { ?>
																<a class="btn" style="background-color: green">Lunas</a>
														<?php	} else { ?>
																<a class="btn" style="background-color: green">Expired</a>
														<?php }
														?>
														</td>
														<td><?=$key->totalHarga?></td>
													</tr>
												<?php $no++;
												  $tpendapatan = $tpendapatan + $key->totalHarga; 
												} ?>
													<tr>
														<td colspan="6"></td>
														<td>Total Harga</td>
														<td><?= $tpendapatan ?></td>
													</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div> 
						</div> 
					</div> 
				</div>
				<h5>Pemesanan Expired</h5>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Pemesanan</th>
												<th>Nama Pemesan</th>
												<th>No Hp</th>
												<th>Email</th>
												<th>Tanggal</th>
												<th>Status</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
										<?php
											if (empty($pemesananEX)) { ?>
												<tr>
													<td colspan="8" class="text-center">Periode Tidak tersedia</td>
												</tr>
											<?php } else {
												$tpendapatan = 0;
												$no = 1;
												foreach ($pemesananEX as $key) { ?>							
													<tr>
														<td><?=$no?></td>
														<td><?=$key->kode_pemesanan?></td>
														<td><?=$key->nama_pemesan?></td>
														<td><?=$key->nohp?></td>
														<td><?=$key->email?></td>
														<td><?=$key->tgl_pemesanan?></td>
														<td>
														<?php
															if ($key->status == "0") { ?>
																<a class="btn" style="background-color: red">Belum Lunas</a>									
														<?php	
															}elseif ($key->status == "1") { ?>
																<a class="btn" style="background-color: green">Lunas</a>
														<?php	} else { ?>
																<a class="btn" style="background-color: green">Expired</a>
														<?php }
														?>
														</td>
														<td><?=$key->totalHarga?></td>
													</tr>
												<?php $no++;
												  $tpendapatan = $tpendapatan + $key->totalHarga; 
												} ?>
													<tr>
														<td colspan="6"></td>
														<td>Total Harga</td>
														<td><?= $tpendapatan ?></td>
													</tr>
											<?php } ?>
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
	</div>
	</body>
</body>
</html>