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
						Data Armada Bus PO Harum Prima
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
												<th>Foto</th>
												<th>Nopol Bus</th>
												<th>Merk</th>
												<th>Tahun</th>
												<th>Deskripsi</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$no = 1;
											foreach ($bus as $key) { ?>							
											<tr>
												<td><?=$no?></td>
												<td><img width="150" src="<?= base_url()?>assets/images/bus/<?=$key->foto?>"></td>
												<td width="70"><?=$key->nopol_bus?></td>
												<td><?=$key->merk?></td>
												<td><?=$key->tahun?></td>
												<td><?=$key->description?></td>
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