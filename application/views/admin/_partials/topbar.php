<!-- MULAI Topbar -->
<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
	<a class="navbar-brand text-black" href="<?php echo base_url('admin/overview') ?>"
	   style="font-size:4vh">IMAGE 2019</a>

	<ul class="navbar-nav align-items-center ml-auto">
		<li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
			<a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
			   href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $pengguna->id?>
			</a>

			<div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
				<h6 class="dropdown-header d-flex align-items-center">
					<div class="dropdown-user-details">
						<div class="dropdown-user-details-name"><?php echo $pengguna->nama?></div>
					</div>
				</h6>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#!" data-toggle="modal" data-target="#logoutModal">
					<div class="dropdown-item-icon"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></div>
					Keluar
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- SELESAI Topbar -->
