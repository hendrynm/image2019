<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<?php $this->load->view("admin/_partials/topbar.php") ?>
		<div id="layoutSidenav_content">
			<div class="container">
				<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-2 pt-2 mt-5">
					<div class="page-header-content ml-5 mr-3">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto">
								<h1 class="page-header-title">
									<?php echo 'Selamat Datang Pemandu' ?>
								</h1>
								<h1 class="page-header-title mt-2">
									<?php echo '<b>' . $pengguna->nama . '</b>' ?>
								</h1>
							</div>
						</div>
					</div>
				</header>

				<div class="col-12">
					<p class="row h1 font-weight-bolder text-primary mt-3 mb-3">Navigasi Halaman</p>
				</div>

				<div class="row">
					<div class="col-xl-3 col-lg-6">
						<a href="<?php echo base_url('admin/registrasi') ?>" class="text-decoration-none">
						<div class="card bg-red text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-white">Daftar Registrasi Tamu</div>
									</div>
									<i class="fas fa-list fa-2x text-white"></i>
								</div>
							</div>
						</div>
						</a>
					</div>

					<div class="col-xl-3 col-lg-6">
						<a href="<?php echo base_url('admin/game/game/').base64_encode($pengguna->id) ?>"
						   class="text-decoration-none">
							<div class="card bg-green text-white mb-4 lift">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white">Main Game 1</div>
										</div>
										<i class="fas fa-gamepad fa-2x text-white"></i>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-xl-3 col-lg-6">
						<a href="<?php echo base_url('admin/babakfinal') ?>"
						   class="text-decoration-none">
							<div class="card bg-purple text-white mb-4 lift">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white">Final Game 1</div>
										</div>
										<i class="fas fa-gamepad fa-2x text-white"></i>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-xl-3 col-lg-6">
						<a href="<?php echo base_url('admin/ranking/game1') ?>"
						   class="text-decoration-none">
							<div class="card bg-orange text-white mb-4 lift">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white">Ranking Game 1</div>
										</div>
										<i class="fas fa-trophy fa-2x text-white"></i>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-xl-3 col-lg-6">
						<a href="<?php echo base_url('admin/ranking/game2') ?>"
						   class="text-decoration-none">
							<div class="card bg-cyan text-white mb-4 lift">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white">Ranking Game 2</div>
										</div>
										<i class="fas fa-award fa-2x text-white"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
</body>
</html>
