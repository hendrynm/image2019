<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-primary-soft">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
			<div class="card mt-5 lift">
				<div class="card-body pt-4 pb-0 text-center">
					<h1 class="h1 text-dark font-weight-bolder"><b>Selamat Datang di IMAGE 2019</b></h1>
					<p class="px-4 text-dark font-weight-bold lead">Internalisasi dan Reveal Angkatan 2019</p>
					<?php if ($this->session->flashdata('salah')): ?>
						<p class="mx-4 alert alert-danger text-center" role="alert">
							<?php echo $this->session->flashdata('salah'); ?>
						</p>
					<?php endif ?>
					<p class="px-4 bg-primary text-white font-weight-bold lead">
						Mohon mengisi formulir registrasi terlebih dahulu</p>
				</div>
				<div class="card-body px-4 py-3">
					<form action="<?php echo site_url('tamu/registrasi/hadir') ?>" method="post">
						<div class="form-group">
							<label class="text-gray-600 font-weight-bold" for="namaLengkap">Nama Lengkap</label>
							<input class="form-control form-control-solid" type="text" name="namaLengkap" required
								   placeholder="Contoh: Rahmawati Kekeyi Putri Cantikka">
							<label class="text-primary text-sm" for="namaLengkap">Pastikan sesuai dengan data di Sistem
								Informasi Akademik ITS</label>
						</div>
						<div class="form-group">
							<label class="text-gray-600 font-weight-bold" for="nrp">NRP</label>
							<input class="form-control form-control-solid" type="text" name="nrp" required
								   placeholder="Contoh: 05211940009999" pattern="^05211[0-9]4[0-9]{7}$"
								   title="Pastikan sesuai dengan data di Sistem Informasi Akademik ITS">
						</div>
						<div class="form-inline">
							<div class="form-group row col-12">
								<label class="text-gray-600 font-weight-bold" for="angkatan">Angkatan</label>
							</div>
							<div class="form-group row col-lg-6">
								<div class="custom-control custom-radio custom-control-solid">
									<input class="custom-control-input" id="2015" type="radio" name="angkatan"
										   value="2015" required>
									<label class="custom-control-label" for="2015">2015++</label>
								</div>
							</div>
							<div class="form-group row col-lg-6">
								<div class="custom-control custom-radio custom-control-solid">
									<input class="custom-control-input" id="2016" type="radio" name="angkatan"
										   value="2016">
									<label class="custom-control-label" for="2016">2016 - Artemis</label>
								</div>
							</div>
							<div class="form-group row col-lg-6">
								<div class="custom-control custom-radio custom-control-solid">
									<input class="custom-control-input" id="2017" type="radio" name="angkatan"
										   value="2017">
									<label class="custom-control-label" for="2017">2017 - Dhistakarna</label>
								</div>
							</div>
							<div class="form-group row col-lg-6">
								<div class="custom-control custom-radio custom-control-solid">
									<input class="custom-control-input" id="2018" type="radio" name="angkatan"
										   value="2018">
									<label class="custom-control-label" for="2018">2018 - Valois</label>
								</div>
							</div>
							<div class="form-group row col-lg-6">
								<div class="custom-control custom-radio custom-control-solid">
									<input class="custom-control-input" id="2019" type="radio" name="angkatan"
										   value="2019">
									<label class="custom-control-label" for="2019">2019 - 2019</label>
								</div>
							</div>
						</div>
						<div class="form-group d-flex align-items-center justify-content-between mt-3">
							<div class="custom-control custom-control-solid custom-checkbox">
								<input class="custom-control-input small" id="customCheck1" type="checkbox" required>
								<label class="custom-control-label mr-3" for="customCheck1">
									Saya bersedia mematuhi <a class="text-decoration-none" href="#!" data-toggle="modal"
														 data-target="#aturanModal">aturan acara</a>
									yang berlaku.
								</label>
							</div>
							<input class="btn btn-primary lift" type="submit" name="regis" value="Registrasi">
						</div>
					</form>
				</div>
				<hr class="my-0">
				<div class="card-body bg-light px-4 py-3">
					<div class="d-flex align-items-center justify-content-between">
						<span class="text-dark text-sm font-weight-bold text-left lead">Jika mengalami masalah ketika
							registrasi, silakan hubungi	narahubung berikut:</span>
						<a class="btn btn-info btn-sm text-decoration-none lift" target="_blank"
						   href="https://line.me/ti/p/~hendry.naufal">Hendry (2019)
						</a>
					</div>
				</div>
				<a class="btn btn-light btn-sm text-decoration-none text-gray-500"
				   href="<?php echo base_url('admin/login') ?>">Login Admin
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-5 mx-auto mt-0">
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
</body>
</html>
