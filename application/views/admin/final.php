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
				<div class="card col-12 col-lg-8 col-xl-5 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-white text-dark font-weight-bolder text-center h3">
						PAPAN SURVEI BABAK FINAL
					</div>
					<table class="card-body table text-center" style="width:100%; font-size:20pt">
						<tbody class="font-weight-bold">
						<tr>
							<td style="border: black solid 5px">
								<?php echo ($game->pil1 == null) ?
									'<span class="text-white">_____________</span>' : $game->pil1 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->poin1 == null) ?
									'<span class="text-white">00</span>' : $game->poin1 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->pil1 == null || $game->poin1 == null) ?
										'<i class="fa fa-question text-primary"></i>' : (($game->poin1 == 0) ?
												'<i class="fa fa-times text-danger"></i>' :
												'<i class="fa fa-check text-success"></i>' )?>
							</td>
							<td style="border: black solid 5px">
								<a href="<?php echo
										base_url('admin/babakfinal/cek/').$this->uri->segment(4).'/10' ?>"
								   class="btn btn-primary btn-sm">CEK</a>
							</td>
						</tr>

						<tr>
							<td style="border: black solid 5px">
								<?php echo ($game->pil2 == null) ?
										'<span class="text-white">_____________</span>' : $game->pil2 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->poin2 == null) ?
										'<span class="text-white">00</span>' : $game->poin2 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->pil2 == null || $game->poin2 == null) ?
										'<i class="fa fa-question text-primary"></i>' : (($game->poin2 == 0) ?
												'<i class="fa fa-times text-danger"></i>' :
												'<i class="fa fa-check text-success"></i>' )?>
							</td>
							<td style="border: black solid 5px">
								<a href="<?php echo
										base_url('admin/babakfinal/cek/').$this->uri->segment(4).'/3' ?>"
								   class="btn btn-primary btn-sm">CEK</a>
							</td>
						</tr>

						<tr>
							<td style="border: black solid 5px">
								<?php echo ($game->pil3 == null) ?
										'<span class="text-white">_____________</span>' : $game->pil3 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->poin3 == null) ?
										'<span class="text-white">00</span>' : $game->poin3 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->pil3 == null || $game->poin3 == null) ?
										'<i class="fa fa-question text-primary"></i>' : (($game->poin3 == 0) ?
												'<i class="fa fa-times text-danger"></i>' :
												'<i class="fa fa-check text-success"></i>' )?>
							</td>
							<td style="border: black solid 5px">
								<a href="<?php echo
										base_url('admin/babakfinal/cek/').$this->uri->segment(4).'/12' ?>"
								   class="btn btn-primary btn-sm">CEK</a>
							</td>
						</tr>

						<tr>
							<td style="border: black solid 5px">
								<?php echo ($game->pil4 == null) ?
										'<span class="text-white">_____________</span>' : $game->pil4 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->poin4 == null) ?
										'<span class="text-white">00</span>' : $game->poin4 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->pil4 == null || $game->poin4 == null) ?
										'<i class="fa fa-question text-primary"></i>' : (($game->poin4 == 0) ?
												'<i class="fa fa-times text-danger"></i>' :
												'<i class="fa fa-check text-success"></i>' )?>
							</td>
							<td style="border: black solid 5px">
								<a href="<?php echo
										base_url('admin/babakfinal/cek/').$this->uri->segment(4).'/7' ?>"
								   class="btn btn-primary btn-sm">CEK</a>
							</td>
						</tr>

						<tr>
							<td style="border: black solid 5px">
								<?php echo ($game->pil5 == null) ?
										'<span class="text-white">_____________</span>' : $game->pil5 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->poin5 == null) ?
										'<span class="text-white">00</span>' : $game->poin5 ?>
							</td>
							<td style="border: black solid 5px">
								<?php echo ($game->pil5 == null || $game->poin5 == null) ?
										'<i class="fa fa-question text-primary"></i>' : (($game->poin5 == 0) ?
												'<i class="fa fa-times text-danger"></i>' :
												'<i class="fa fa-check text-success"></i>' )?>
							</td>
							<td style="border: black solid 5px">
								<a href="<?php echo
										base_url('admin/babakfinal/cek/').$this->uri->segment(4).'/15' ?>"
								   class="btn btn-primary btn-sm">CEK</a>
							</td>
						</tr>
						</tbody>
					</table>
				</div>

				<div class="card col-12 col-lg-4 col-xl-3 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-white text-dark font-weight-bolder text-center h3">
						PAPAN BERMAIN
					</div>
					<div class="card-body bg-white text-dark px-0">
						<?php if($game->pil1 == null): ?>
						<form action="<?php echo base_url('admin/babakfinal/kirim/').$this->uri->segment(4) ?>"
							  method="post">
							<input class="form-control form-control-solid mb-2" type="text" name="pil1" required
								   autocomplete="off">
							<input class="form-control form-control-solid mb-2" type="text" name="pil2" required
								   autocomplete="off">
							<input class="form-control form-control-solid mb-2" type="text" name="pil3" required
								   autocomplete="off">
							<input class="form-control form-control-solid mb-2" type="text" name="pil4" required
								   autocomplete="off">
							<input class="form-control form-control-solid mb-2" type="text" name="pil5" required
								   autocomplete="off">
							<button type="submit" class="btn btn-primary btn-block">KIRIM</button>
						</form>
						<?php endif ?>

						<?php if($game->pil1 != null): ?>
						<table class="table text-center" style="width:100%; font-size:20pt">
							<tbody class="font-weight-bold text-black">
							<tr>
								<td style="border: black solid 5px">
									<b><?php echo ($game->id<=2) ? 'TIM A': 'TIM B'?></b>
								</td>
								<td style="border: black solid 5px">
									<?php echo $game->poin_total ?>
								</td>
							</tr>
							</tbody>
						</table>
						<?php endif ?>
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
