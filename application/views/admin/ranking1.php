<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap4.min.css') ?>">
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<?php $this->load->view("admin/_partials/topbar.php") ?>
		<div class="container mt-10">
			<div class="row">
				<div class="card bg-white col-12 col-lg-8 col-xl-6 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-primary text-white font-weight-bolder text-center h3">
						Daftar Urutan Pemenang Game 1
					</div>
					<div class="card-body mt-3 mb-3 p-0">
						<div class="datatable">
							<table class="table table-bordered table-responsive-lg" id="dataTable" width="100%">
								<thead>
								<tr class="bg-success text-white">
									<th>Kode</th>
									<th>Sesi - Ruang</th>
									<th>Tim</th>
									<th>Poin</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($ranking1 as $r1): ?>
									<tr>
										<td><b><?php echo $r1->id ?></b></td>
										<td><b><?php echo $r1->nama ?></b></td>
										<td><b><?php echo ($r1->id<200) ? 'TIM A' : 'TIM C';
										?></b></td>
										<td><b><?php echo $r1->poin_A?></b></td>
									</tr>
									<tr>
										<td><b><?php echo $r1->id ?></b></td>
										<td><b><?php echo $r1->nama ?></b></td>
										<td><b><?php echo ($r1->id<200) ? 'TIM B' : 'TIM D';
										?></b></td>
										<td><b><?php echo $r1->poin_B?></b></td>
									</tr>
								<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
</div>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap4.min.js')?>"></script>
<script>
	$(document).ready(function() {
		$('#dataTable').DataTable( {
			"order": [[ 3, "desc" ]]
		} );
	} );
</script>
</body>
</html>
