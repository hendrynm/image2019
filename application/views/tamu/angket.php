<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<div id="layoutSidenav_content">
			<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
				<div class="container">
					<div class="page-header-content pt-4">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto mt-4">
								<h1 class="page-header-title">
									<div class="page-header-icon"><i class="fa fa-list"></i></div>
									<span><b>ANGKET APRESIASI</b></span>
								</h1>
								<div class="page-header-subtitle text-white mt-3">
									Siapakah orang-orang yang paling berkesan menurutmu?
								</div>
								<span class="text-sm text-yellow">SPECIAL THANKS TO MAS ERLANGGA (2018) FOR
									INFONYA</span>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- Main page content-->
			<div class="container col-sm-12 col-md-8 mt-n10">
				<!-- Wizard card example with navigation-->
				<div class="card">
					<div class="card-header border-bottom">
						<!-- Wizard navigation  d-none d-xl-block -->
						<div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
							<!-- Wizard navigation item 1-->
							<a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab"
							   role="tab" aria-controls="wizard1" aria-selected="true">
								<div class="wizard-step-icon">1</div>
								<div class="wizard-step-text">
									<div class="wizard-step-text-name">2019</div>
									<div class="wizard-step-text-details">Semua tentang 2019</div>
								</div>
							</a>
							<!-- Wizard navigation item 2-->
							<a class="nav-item nav-link" id="wizard2-tab" href="#wizard2" data-toggle="tab"
							   role="tab" aria-controls="wizard2" aria-selected="false">
								<div class="wizard-step-icon">2</div>
								<div class="wizard-step-text">
									<div class="wizard-step-text-name">Elemen Pengkader</div>
									<div class="wizard-step-text-details">Semua tentang Manage</div>
								</div>
							</a>
							<!-- Wizard navigation item 3-->
							<a class="nav-item nav-link" id="wizard3-tab" href="#wizard3" data-toggle="tab"
							   role="tab" aria-controls="wizard3" aria-selected="false">
								<div class="wizard-step-icon">3</div>
								<div class="wizard-step-text">
									<div class="wizard-step-text-name">Tinjau Ulang</div>
									<div class="wizard-step-text-details">Cek kembali angketmu</div>
								</div>
							</a>
						</div>
					</div>
					<div class="card-body p-xl-5">
						<div class="tab-content" id="cardTabContent">
							<!-- Wizard tab pane item 1-->
							<div class="tab-pane fade show active" id="wizard1" role="tabpanel" aria-labelledby="wizard1-tab">
								<div class="row justify-content-center">
									<div class="col-xxl-6 col-xl-8">
										<h3 class="text-primary">Tahap 1: 2019</h3>
										<h5 class="card-title">Orang-orang paling berkesan di 2019</h5>
										<hr class="my-4" />
										<form action="<?php echo base_url('tamu/angket/kirim') ?>" method="post">
											<div class="form-group">
												<label class="mb-1" for="p1">
													Kepo dong! Selama manage, anak 2019 yang paling ganteng siapa sih?
												</label>
												<select class="form-control form-control-solid" name="p1" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019_L as $a): ?>
													<option value="<?php echo $a->nrp ?>">
														<?php echo $a->nama ?>
													</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p2">
													Kalo yang paling cantik, siapa nih?
												</label>
												<select class="form-control form-control-solid" name="p2" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019_P as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p3a">
													Bucin terooos! Siapa ni 2019 yang paling bucin selama manage?
												</label>
												<select class="form-control form-control-solid" name="p3a" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019_L as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select><label class="text-sm mb-1" for="p3b">dan</label>
												<select class="form-control form-control-solid" name="p3b" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019_P as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p4">
													Hmm kalo paling aktif waktu manage siapa nih?
												</label>
												<select class="form-control form-control-solid" name="p4" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p5">
													Lang hilang~ Siapa yang paling sering ilang-ilangan waktu manage hayoo?
												</label>
												<select class="form-control form-control-solid" name="p5" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p6">
													Kalo yang paling rajin siapa nihh? Aw
												</label>
												<select class="form-control form-control-solid" name="p6" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p7">
													Uhukk, kalo yang paling berani selama manage siapa?
												</label>
												<select class="form-control form-control-solid" name="p7" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p8">
													Kasiannyaaa.. Siapa niih yang paling sering kena tuduh waktu manage? wkwk
												</label>
												<select class="form-control form-control-solid" name="p8" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p9">
													Kang supir! Siapa nih yang paling sering nyupirin anak-anak SI waktu manage?
												</label>
												<select class="form-control form-control-solid" name="p9" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p10">
													Zzzz.. Kalo yang paling sering tidur waktu manage siapa hayoo??
												</label>
												<select class="form-control form-control-solid" name="p10" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_2019 as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
									</div>
								</div>
							</div>

							<!-- Wizard tab pane item 2-->
							<div class="tab-pane fade" id="wizard2" role="tabpanel"
								 aria-labelledby="wizard2-tab">
								<div class="row justify-content-center">
									<div class="col-xxl-6 col-xl-8">
										<h3 class="text-primary">Tahap 2: Elemen Pengkader</h3>
										<h5 class="card-title">Orang-orang paling berkesan di Manage</h5>
										<hr class="my-4" />

											<div class="form-group">
												<label class="mb-1" for="p11">
													Punten~ Ini siapa ya yang sering tiba-tiba dateng ngenotul waktu eval? Takutt :''
												</label>
												<select class="form-control form-control-solid" name="p11" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p12">
													Ter-pe-so-naa~ Akuu terpesonaa~ Aw siapa nih yang paling mempesona selama manage 2019?
												</label>
												<select class="form-control form-control-solid" name="p12" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p13a">
													Lagi-lagi bucin terooos~ Siapa ni mbak mas yang paling bucin selama manage 2019??
												</label>
												<select class="form-control form-control-solid" name="p13a" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen_L as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select><label class="text-sm mb-1" for="p13b">dan</label>
												<select class="form-control form-control-solid" name="p13b" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen_P as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p14">
													"Gimana tadi? Ayo sekarang kita ice breaking dulu~" Ucapan terima kasihku jatuh kepada mas mbak icebreaking...
												</label>
												<select class="form-control form-control-solid" name="p14" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p15">
													Interupsi! Erupsi! Gunung Berapii~ Iya silahkan mbak/mas...
												</label>
												<select class="form-control form-control-solid" name="p15" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p16">
													Apapun yang terjadi, mbak/mas ini tetap sabar :)
												</label>
												<select class="form-control form-control-solid" name="p16" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p17">
													"Selamat malam 2019!" Mas mbak pemberi salam, waktu dan tempat dipersilahkan~
												</label>
												<select class="form-control form-control-solid" name="p17" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p18">
													"Coba kalian pikir..." Wadu, siapa ni yang suka nyuruh 2019 mikir?
												</label>
												<select class="form-control form-control-solid" name="p18" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p19">
													Kerasa ga si kalo manage 2019 tuh panas banget meski di ruangan ber-AC? Hayo, siapa ni yang suka nyalain kompor pas manage?
												</label>
												<select class="form-control form-control-solid" name="p19" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<label class="mb-1" for="p20">
													(nunjuk 2019) "Ayo kamu jawab" :') Siapa nih yang paling sering nanyain 2019?
												</label>
												<select class="form-control form-control-solid" name="p20" required>
													<option value="" style="display: none">Pilih salah satu...</option>
													<?php foreach ($nama_elemen as $a): ?>
														<option value="<?php echo $a->nrp ?>">
															<?php echo $a->nama ?>
														</option>
													<?php endforeach ?>
												</select>
											</div>
									</div>
								</div>
							</div>

							<!-- Wizard tab pane item 3-->
							<div class="tab-pane fade" id="wizard3" role="tabpanel"
								 aria-labelledby="wizard3-tab">
								<div class="row justify-content-center">
									<div class="col-xxl-6 col-xl-8">
										<h3 class="text-primary">Tahap 3: Konfirmasi</h3>
										<h5 class="card-title">Pastikan kamu sudah mengisi semua isian angket ya</h5>
										<hr class="my-4" />
										<label class="text-lg">
											KALO BELUM DIISI SEMUA, TOMBOL INI GABISA DIPENCET :)
										</label>
											<div class="d-flex justify-content-between">
												<button class="btn btn-primary" type="submit">KIRIM</button>
											</div>

									</div>
								</div>
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
</div>
</body>
</html>
