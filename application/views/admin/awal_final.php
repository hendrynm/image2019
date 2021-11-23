<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<?php $this->load->view("admin/_partials/topbar.php") ?>
		<div class="container mt-10">
			<div class="row">
				<div class="card col-12 col-lg-4 col-xl-3 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-white text-dark font-weight-bolder text-center h3">
						<span class="text-primary">
							PILIH GILIRAN BERMAIN
						</span>
					</div>
					<div class="card-body px-3 py-3">
						<a href="<?php echo base_url('admin/babakfinal/kode/').base64_encode(1)?>"
						   class="btn btn-primary mb-3 lift">TIM A | Orang 1</a>
						<a href="<?php echo base_url('admin/babakfinal/kode/').base64_encode(2)?>"
						   class="btn btn-primary mb-3 lift">TIM A | Orang 2</a>
						<a href="<?php echo base_url('admin/babakfinal/kode/').base64_encode(3)?>"
						   class="btn btn-primary mb-3 lift">TIM B | Orang 1</a>
						<a href="<?php echo base_url('admin/babakfinal/kode/').base64_encode(4)?>"
						   class="btn btn-primary mb-3 lift">TIM B | Orang 2</a>
					</div>
					<div class="card-footer text-center bg-white px-3 py-3 mb-3">
						<button class="btn btn-primary">TIM A: <?php echo $menang_A->poin_total ?></button>
						<button class="btn btn-primary">TIM B: <?php echo $menang_B->poin_total ?></button>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
</div>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>
