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
				<div class="card col-12 col-lg-6 col-xl-4 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-white text-dark font-weight-bolder text-center h3">
						PAPAN SURVEI <?php echo 'SESI ' . substr($game->kode_ruang, 0, 1) ?><br>
						<span class="text-primary">
							<?php echo 'Breakout Room ' . substr($game->kode_ruang,1,2); ?>
						</span><br>
					</div>
					<?php if ($this->session->flashdata('salah')): ?>
						<div class="mt-3">
							<div class="alert alert-danger alert-dismissible text-center fade show" role="alert">
								<?php echo $this->session->flashdata('salah'); ?>
								<button class="close" type="button" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
					<?php endif ?>
						<table class="card-body table text-center" style="width:100%; font-size:20pt">
							<tbody class="font-weight-bold">
							<tr>
								<td style="border: black solid 5px">
									<?php echo ($game->pil1 == 'salah') ?
											'<span class="text-white">_____________</span>' : $soal->pil1 ?>
								</td>
								<td style="border: black solid 5px">
									<?php echo ($game->pil1 == 'salah') ?
											'<span class="text-white">100</span>' : '100' ?>
								</td>
							</tr>
							<tr>
								<td style="border: black solid 5px">
									<?php echo ($game->pil2 == 'salah') ?
											'<span class="text-white">_____________</span>' : $soal->pil2 ?>
								</td>
								<td style="border: black solid 5px">
									<?php echo ($game->pil2 == 'salah') ?
											'<span class="text-white">00</span>' : '80' ?>
								</td>
							</tr>
							<tr>
								<td style="border: black solid 5px">
									<?php echo ($game->pil3 == 'salah') ?
											'<span class="text-white">_____________</span>' : $soal->pil3 ?>
								</td>
								<td style="border: black solid 5px">
									<?php echo ($game->pil3 == 'salah') ?
											'<span class="text-white">00</span>' : '60' ?>
								</td>
							</tr>
							<tr>
								<td style="border: black solid 5px">
									<?php echo ($game->pil4 == 'salah') ?
											'<span class="text-white">_____________</span>' : $soal->pil4 ?>
								</td>
								<td style="border: black solid 5px">
									<?php echo ($game->pil4 == 'salah') ?
											'<span class="text-white">00</span>' : '40' ?>
								</td>
							</tr>
							<tr>
								<td style="border: black solid 5px">
									<?php echo ($game->pil5 == 'salah') ?
											'<span class="text-white">_____________</span>' : $soal->pil5 ?>
								</td>
								<td style="border: black solid 5px">
									<?php echo ($game->pil5 == 'salah') ?
											'<span class="text-white">00</span>' : '20' ?>
								</td>
							</tr>
							</tbody>
						</table>
					<div class="card-footer bg-white text-black font-weight-bolder text-center px-0">
						<form action="<?php echo base_url('admin/game/tambah/').base64_encode($game->kode_ruang) ?>"
							  method="post">
							<div class="form-inline">
								<input class="col-9 form-control form-control-solid mr-auto" type="text"
									   name="jawaban" placeholder="Masukkan jawaban" required autocomplete="off">
								<button type="submit" class="btn btn-primary" name="submit">Kirim</button>
							</div>

						</form>
					</div>
				</div>

				<div class="card col-12 col-lg-4 col-xl-3 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-white text-dark font-weight-bolder text-center h3">
						PAPAN SKOR <?php echo 'SESI ' . substr($game->kode_ruang, 0, 1) ?><br>
						<span class="text-primary">
							<?php echo 'Breakout Room ' . substr($game->kode_ruang, 1, 2); ?>
						</span>
					</div>
					<table class="card-body table text-center" style="width:100%; font-size:20pt">
						<tbody class="font-weight-bold text-black">
						<tr>
							<td colspan="2">
								<span class="text-black">
									<?php echo ($game->babak == 1) ? '<b>BABAK 1</b>' : '<b>BABAK 2</b>' ?>
								</span>
								<br>
								<?php
								if($game->giliran == 'A'){
									echo
									($game->salah_A == 1) ?
									'<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>'
									:
									(($game->salah_A == 2) ?
									'<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>'
									:
									((($game->salah_A == 3) ?
									'<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times text-danger fa-2x"></i>'
									:
									'<i class="fa fa-times fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>'
									)));
								} else if($game->giliran == 'B'){
									echo
									($game->salah_B == 1) ?
									'<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>'
									:
									(($game->salah_B == 2) ?
									'<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>'
									:
									((($game->salah_B == 3) ?
									'<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times text-danger fa-2x"></i>
									<i class="fa fa-times text-danger fa-2x"></i>'
									:
									'<i class="fa fa-times fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>
									<i class="fa fa-times fa-2x"></i>'
									)));
								}
								?>
								<br>
								<span style="font-size: 14pt">Kode Soal: <b><?php echo $game->kode_soal_A ?></b></span>
							</td>
						</tr>

						<tr class="<?php echo ($game->giliran == 'A') ? 'bg-success' : 'bg-light' ?>">
							<td style="border: black solid 5px">
								<b><?php echo ($game->kode_ruang<200) ? 'TIM A': 'TIM C'?></b>
							</td>
							<td style="border: black solid 5px">
								<?php echo $game->poin_A ?>
							</td>
						</tr>
						<tr class="<?php echo ($game->giliran == 'B') ? 'bg-success' : 'bg-light' ?>">
							<td style="border: black solid 5px">
								<b><?php echo ($game->kode_ruang<200) ? 'TIM B': 'TIM D'?></b>
							</td>
							<td style="border: black solid 5px">
								<?php echo $game->poin_B ?>
							</td>
						</tr>

						<?php if($game->kode_soal_A == null): ?>
							<tr>
								<td colspan="2" style="font-size: 12pt">
									Pilih Kode Soal:<br>
									<?php foreach($kode_soal as $kode_soal): ?>
									<a href="<?php echo base_url('admin/game/soal/').$kode_soal->kode_soal.'/'
									.base64_encode($game->kode_ruang) ?>" class="btn btn-primary btn-sm mt-1 mb-1">
										<?php echo $kode_soal->kode_soal ?>
									</a>
									<?php endforeach ?>
								</td>
							</tr>
						<?php endif ?>

						<?php if($game->selesai == 1): ?>
							<tr>
								<td colspan="2">
									<a href="<?php echo base_url('admin/game/ganti_babak/').base64_encode
											($game->kode_ruang)	?>"
									   class="btn btn-danger">Ubah Babak
									</a>
								</td>
							</tr>
						<?php endif ?>

						<?php if($game->giliran == null && $game->kode_soal_A != null): ?>
							<tr>
								<td colspan="2" style="font-size: 14pt">
									Pilih Giliran:<br>
									<a href="<?php echo base_url('admin/game/giliran/A/').base64_encode
											($game->kode_ruang) ?>" class="btn btn-primary btn mr-3"><?php echo
										($game->kode_ruang<200) ? 'TIM A': 'TIM C'?>
									</a>
									<a href="<?php echo base_url('admin/game/giliran/B/').base64_encode
											($game->kode_ruang) ?>" class="btn btn-primary btn"><?php echo
										($game->kode_ruang<200) ? 'TIM B': 'TIM D'?>
									</a>
								</td>
							</tr>
						<?php endif ?>
						</tbody>
					</table>
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
