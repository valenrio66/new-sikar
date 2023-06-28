<?php
// Cek apakah ada flashdata success
if (session()->getFlashdata('success')) {
	echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Berhasil!",
                    text: "' . session()->getFlashdata('success') . '",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            });
          </script>';
}
?>
<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('dashboard/index') ?>">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-pepper-hot"></i>
			</div>
			<div class="sidebar-brand-text mx-3">Sikacai</div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0" />

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php base_url('dashboard/index') ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Sistem Pakar Cabai</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider" />

		<!-- Heading -->
		<div class="sidebar-heading">Menu</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fa fa-database"></i>
				<span>Data</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Data Penyakit dan Gejala</h6>
					<a class="collapse-item" href="buttons.html">Penyakit</a>
					<a class="collapse-item" href="cards.html">Gejala</a>
				</div>
			</div>
		</li>

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>
	</ul>
	<!-- End of Sidebar -->
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
		<!-- Main Content -->
		<div id="content">
			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Topbar Search -->
				<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">
					<!-- Nav Item - Search Dropdown (Visible Only XS) -->
					<li class="nav-item dropdown no-arrow d-sm-none">
						<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-search fa-fw"></i>
						</a>
						<!-- Dropdown - Messages -->
						<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
							<form class="form-inline mr-auto w-100 navbar-search">
								<div class="input-group">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
									<div class="input-group-append">
										<button class="btn btn-primary" type="button">
											<i class="fas fa-search fa-sm"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-black-50 small font-bold">
								Nama User
							</span>
							<img class="img-profile rounded-circle" src="<?= base_url('images/undraw_profile.png'); ?>" />
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- End of Topbar -->

			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Sistem Pakar Cabai - Hasil Diagnosa</h1>
					<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate
						Report</a>
				</div>

				<div class="col-lg-10 mx-auto">
					<div class="card shadow border-12 mb-5">
						<div class="card-body p-5">
							<form>
								<?php if (!empty($hasilDeteksi)) : ?>
									<h2>Hasil Diagnosa</h2>
									<p><?php echo $hasilDeteksi; ?></p>
								<?php endif; ?>
								<h2>Solusi :</h2>
								<ul>
									<li>
										Pencegahan dapat dilakukan dengan membersihkan
										lahan dan tanaman yang terserang agar tidak
										menyebar.
									</li>
									<li>Seleksi benih atau menggunakan benih cabai yang
										tahan terhadap penyakit ini perlu dilakukan mengingat
										penyakit ini termasuk patogen tular benih.</li>
									<li>Kultur teknis dengan pergiliran tanaman, penggunaan
										benih sehat dan sanitasi dengan memotong dan
										memusnahkan buah yang sakit.</li>
									<li>Penggunaan fungisida sesuai anjuran sebagai alternatif
										terakhir. Hindari pengguanaan alat semprot, atau
										lakukan sanitasi terlebih dahulu sebelum menggunakan
										alat semprot.</li>
								</ul>
								<a href="<?php echo base_url('dashboard/index') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i>Kembali</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->