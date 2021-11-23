<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<div id="layoutSidenav_content">
			<header class="page-header page-header-dark bg-gradient-primary-to-secondary">
				<div class="container">
					<div class="page-header-content pt-4">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto mt-4">
								<h1 class="page-header-title">
									<div class="page-header-icon"><i class="fa fa-utensils"></i></div>
									<span><b>KONSUMSI</b></span>
								</h1>
								<div class="page-header-subtitle text-white mt-3">
									Selamat menikmati hidangan di tempat masing-masing. Semoga pandemi COVID-19
									segera berakhir.
								</div>
								<div class="page-header-subtitle text-white mt-5">
									<a href="<?php echo base_url('tamu/registrasi/masuk') ?>" class="btn btn-secondary">
										Kembali ke Halaman Masuk
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://static.republika.co.id/uploads/images/inpicture_slide/aneka-menu-buka-puasa-ramadhan-buffet-_180525143758-568.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://cdn.theatlantic.com/thumbor/c6g5JZImatDrZKRIW7Pu2OIdmOY=/0x52:1000x614/720x405/media/img/mt/2014/12/shutterstock_234903799/original.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="http://highend-traveller.com/wp-content/uploads/2019/05/JP-Bistro-Buffet.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://www.gannett-cdn.com/media/USATODAY/USATODAY/2013/05/08/xxx-great-american-bites-bacchanal-11-2612-16_9.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://thumbs.dreamstime.com/b/juice-bar-buffet-glass-containers-40879496.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
<script>
	$('.carousel').carousel({
		interval: 5000
	})
</script>
</body>
</html>
