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
		<div class="container">
			<div class="row">
				<div class="card bg-white col-12 col-lg-8 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-primary text-white font-weight-bolder text-center h3">
						Daftar Tamu yang Telah Registrasi
					</div>
					<div class="card-body mt-3 mb-3 p-0">
						<div class="datatable">
							<table class="table table-bordered" id="dataTable" width="100%">
								<thead>
								<tr class="bg-success text-black">
									<th>No.</th>
									<th>Angkatan</th>
									<th>NRP</th>
									<th>Nama</th>
									<th>Waktu Registrasi</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($aktif as $aktif): ?>
								<tr>
									<td><b><?php echo $aktif->id ?></b></td>
									<td><b><?php echo $aktif->angkatan ?></b></td>
									<td><b><?php echo $aktif->nrp ?></b></td>
									<td><b><?php echo $aktif->nama ?></b></td>
									<td><b><?php echo date_format(date_create($aktif->jam),"H:i:s") ?></b></td>
								</tr>
								<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
					<hr class="my-0">
					<div class="card-body bg-primary-soft px-3 py-3 mb-3">
						<div class="text-center">
							<a href="<?php echo base_url('admin/registrasi')?>"
							   class="btn btn-primary btn-sm lift">Lihat Hanya yang Belum Masuk</a>
							<a href="<?php echo base_url('admin/registrasi/semua')?>"
							   class="btn btn-danger btn-sm lift">Lihat Semua Registrasi</a>
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
</body>
</html>
