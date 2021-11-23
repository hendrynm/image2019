<!-- MULAI modal -->
<!-- Modal untuk Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Klik tombol <b>KELUAR</b> untuk mengakhiri sesi.</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger" href="<?php echo site_url('admin/login/logout') ?>">Keluar</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal untuk Aturan Acara -->
<div class="modal fade" id="aturanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel">Peraturan Acara</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<h5>Selama acara berlangsung, Tamu Undangan sepakat bahwa:</h5>
				<ol>
					<li>Hadir tepat waktu.</li>
					<li>Mengisi formulir registrasi sebelum masuk Zoom Meeting.</li>
					<li>Menggunakan link Zoom Meeting untuk 1 (satu) orang saja (DILARANG DIBERIKAN KEPADA ORANG
						LAIN).</li>
					<li>Menggunakan pakaian rapi dan sopan.</li>
					<li>Menyalakan kamera dan menggunakan Virtual Background yang tersedia di
						<a href="https://intip.in/VBIMAGE" target="_blank">intip.in/VBIMAGE</a>.</li>
					<li>Jika berhalangan untuk menyalakan kamera, mohon menghubungi narahubung yang ada di Zoom
						Meeting.</li>
					<li>Menggunakan fitur raise hand jika ingin memberikan pertanyaan.</li>
					<li>Tidak menyalakan mikrofon kecuali diminta atau dipersilakan.</li>
					<li>Menjaga kenyamanan dan keamanan baik di Zoom maupun di tempat.</li>
					<li>Tidak makan (kecuali snack) dan merokok (dan sejenisnya).</li>
				</ol>
				<h5>Demikian aturan tersebut kami buat untuk kebaikan semua tamu dan panitia.</h5>
			</div>
		</div>
	</div>
</div>
<!-- SELESAI model -->
