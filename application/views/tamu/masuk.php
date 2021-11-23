<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-light">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
			<div class="card mt-5 lift">
				<div class="card-body pt-4 pb-0 text-center">
					<h1 class="h1 text-dark font-weight-bolder"><b>Selamat Datang di IMAGE 2019</b></h1>
					<p class="px-4 text-dark font-weight-bold lead">Internalisasi dan Reveal Angkatan 2019</p>
					<p class="px-3 lead">Berikut ini adalah data hasil registrasi Anda beserta dengan link Zoom
						Meeting</p>
					<?php if ($this->session->flashdata('berhasil')): ?>
						<p class="mx-4 alert alert-success text-center" role="alert">
							<?php echo $this->session->flashdata('berhasil'); ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="card-body px-3 py-3">
					<table class="table table-borderless table-sm" id="dataTable" width="100%">
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td><b><?php echo $pengguna->nama ?></b></td>
						</tr>
						<tr>
							<td>NRP</td>
							<td>:</td>
							<td><b><?php echo $pengguna->nrp ?></b></td>
						</tr>
						<tr>
							<td>Angkatan</td>
							<td>:</td>
							<td><b><?php echo
									($pengguna->angkatan == 2019) ? '2019 - 2019' :
									(($pengguna->angkatan == 2018) ? '2018 - Valois' :
									((($pengguna->angkatan == 2017) ? '2017 - Dhistakarna' :
									((($pengguna->angkatan == 2016) ? '2016 - Artemis' : '2015++'
									))))); ?></b>
							</td>
						</tr>
						<tr>
							<td>Waktu Registrasi</td>
							<td>:</td>
							<td><b><?php echo date_format(date_create($pengguna->jam),'d M Y - H.i.s') ?></b>
							</td>
						</tr>
						<tr>
							<td>Breakout Room</td>
							<td>:</td>
							<td><b><?php echo
								substr($pengguna->zoom,0,1) . ' - ' .
								substr($pengguna->zoom,1,1) .
								substr($pengguna->zoom,2,1)?></b>
							</td>
						</tr>
						<tr>
							<td>Link Zoom Meeting</td>
							<td>:</td>
							<td><a href="https://zoom.us/j/93535452843?pwd=SmVlUVYzakhvYnNPbk1HT2RWZFQ3QT09&uname=<?php echo $pengguna->zoom ?>"
									  target="_blank" class="btn btn-primary btn-sm lift">Masuk Zoom Meeting</a>
							</td>
						</tr>
						<?php if($pengguna->aktif == 'pasif'): ?>
						<tr>
							<td>Anda terputus?</td>
							<td>:</td>
							<td><a href="<?php echo base_url('tamu/registrasi/putus') ?>"
								   class="btn btn-danger btn-sm lift">Saya terputus dari Zoom</a>
							</td>
						</tr>
						<?php endif ?>
						<!--<tr>
							<td>Link Angket</td>
							<td>:</td>
							<td><?php /*if($angket == 0): */?>
									<a href="<?php /*echo base_url('tamu/angket') */?>"
									  class="text-decoration-none btn btn-primary btn-sm lift">
										Isi Angket Sekarang</a></td>
									<?php /*endif */?>
								<?php /*if($angket == 1): */?>
									<span class="text-danger"><b>Anda sudah mengisi angket</b></span>
								<?php /*endif */?>
						</tr>-->
						<tr>
							<td>Link Konsumsi</td>
							<td>:</td>
							<td><a href="<?php echo base_url('tamu/konsumsi') ?>"
								   class="text-decoration-none btn btn-primary btn-sm lift">
									Ambil Konsumsi
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-5 mx-auto mt-0">
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
</div>
</body>
</html>
