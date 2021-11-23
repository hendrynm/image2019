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
				<div class="card bg-white col-12 col-lg-8 col-xl-6 ml-auto mr-auto px-3 pt-3">
					<div class="card-header bg-primary text-white font-weight-bolder text-center h3">
						Daftar Urutan Pemenang Angket
					</div>
					<div class="card-body mt-3 mb-3 p-0">
						<div class="datatable">
							<table class="table table-bordered table-striped" id="dataTable" width="100%">
								<thead>
								<tr class="bg-success text-white">
									<th>No.</th>
									<th>Kategori</th>
									<th>NRP</th>
									<th>Nama</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>Terganteng</td>
									<td><?php echo $p1->p1 ?></td>
									<td><?php echo $nama1->nama ?></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Tercantik</td>
									<td><?php echo $p2->p2 ?></td>
									<td><?php echo $nama2->nama ?></td>
								</tr>
								<tr>
									<td>3a</td>
									<td>Terbucin</td>
									<td><?php echo $p3a->p3a ?></td>
									<td><?php echo $nama3a->nama ?></td>
								</tr>
								<tr>
									<td>3b</td>
									<td>Terbucin</td>
									<td><?php echo $p3b->p3b ?></td>
									<td><?php echo $nama3b->nama ?></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Teraktif</td>
									<td><?php echo $p4->p4 ?></td>
									<td><?php echo $nama4->nama ?></td>
								</tr>
								<tr>
									<td>5</td>
									<td>Terhilang</td>
									<td><?php echo $p5->p5 ?></td>
									<td><?php echo $nama5->nama ?></td>
								</tr>
								<tr>
									<td>6</td>
									<td>Terrajin</td>
									<td><?php echo $p6->p6 ?></td>
									<td><?php echo $nama6->nama ?></td>
								</tr>
								<tr>
									<td>7</td>
									<td>Terberani</td>
									<td><?php echo $p7->p7 ?></td>
									<td><?php echo $nama7->nama ?></td>
								</tr>
								<tr>
									<td>8</td>
									<td>Tertuduh</td>
									<td><?php echo $p8->p8 ?></td>
									<td><?php echo $nama8->nama ?></td>
								</tr>
								<tr>
									<td>9</td>
									<td>Tersupir</td>
									<td><?php echo $p9->p9 ?></td>
									<td><?php echo $nama9->nama ?></td>
								</tr>
								<tr>
									<td>10</td>
									<td>Tertidur</td>
									<td><?php echo $p10->p10 ?></td>
									<td><?php echo $nama10->nama ?></td>
								</tr>
								<tr>
									<td>11</td>
									<td>Tertulis</td>
									<td><?php echo $p11->p11 ?></td>
									<td><?php echo $nama11->nama ?></td>
								</tr>
								<tr>
									<td>12</td>
									<td>Terpesona</td>
									<td><?php echo $p12->p12 ?></td>
									<td><?php echo $nama12->nama ?></td>
								</tr>
								<tr>
									<td>13a</td>
									<td>Terbucin</td>
									<td><?php echo $p13a->p13a ?></td>
									<td><?php echo $nama13a->nama ?></td>
								</tr>
								<tr>
									<td>13b</td>
									<td>Terbucin</td>
									<td><?php echo $p13b->p13b ?></td>
									<td><?php echo $nama13b->nama ?></td>
								</tr>
								<tr>
									<td>14</td>
									<td>Ter-ice-breaking</td>
									<td><?php echo $p14->p14 ?></td>
									<td><?php echo $nama14->nama ?></td>
								</tr>
								<tr>
									<td>15</td>
									<td>Terinterupsi</td>
									<td><?php echo $p15->p15 ?></td>
									<td><?php echo $nama15->nama ?></td>
								</tr>
								<tr>
									<td>16</td>
									<td>Tersabar</td>
									<td><?php echo $p16->p16 ?></td>
									<td><?php echo $nama16->nama ?></td>
								</tr>
								<tr>
									<td>17</td>
									<td>Tersalam</td>
									<td><?php echo $p17->p17 ?></td>
									<td><?php echo $nama17->nama ?></td>
								</tr>
								<tr>
									<td>18</td>
									<td>Termikir</td>
									<td><?php echo $p18->p18 ?></td>
									<td><?php echo $nama18->nama ?></td>
								</tr>
								<tr>
									<td>19</td>
									<td>Terkompor</td>
									<td><?php echo $p19->p19 ?></td>
									<td><?php echo $nama19->nama ?></td>
								</tr>
								<tr>
									<td>20</td>
									<td>Tertanya</td>
									<td><?php echo $p20->p20 ?></td>
									<td><?php echo $nama20->nama ?></td>
								</tr>
								</tbody>
							</table>
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
</body>
</html>
