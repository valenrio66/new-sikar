<!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Sistem Pakar Cabai</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Menu</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fa fa-database"></i>
            <span>Data</span>
          </a>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
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
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
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
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold"
                        >A new monthly report is ready to download!</span
                      >
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for
                      your account.
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Douglas McGee</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
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
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Sistem Pakar Cabai - Dashboard</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Generate
                Report</a
              >
            </div>

            <div class="col-lg-10 mx-auto">
                <div class="card shadow border-12 mb-5">
                    <div class="card-body p-5">
                        <h2 class="h4 mb-1">Pilih Gejala - Gejala Tanaman Anda</h2>
                        <ul class="list-group">
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck1">Daun Bawah Berubah Menjadi Kuning</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck2">Tanaman Layu dan Daun - Daunnya Menggulung</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck3">Batang Dalam Tanaman Menunjukkan Perubahan Warna Menjadi Cokelat Atau Kehitaman</label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck4" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck4">Sistem Perakaran Terlihat Cokelat dan Berbusa</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Kecokelatan Pada Pangkal Batang atau Bagian Bawah Tanaman</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Daun - Daun Menjadi Kuning dan Kemudian Layu</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Gejala Datang Saat Musim Hujan atau Kondisi Kelembaban Tinggi</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Tanaman Cabai Terinfeksi Terlihat Kecil dan Tidak Sehat</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Akar Tanaman Berwarna Cokelat atau Hitam dan Berair</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Daun - Daun Menguning dan Tanaman Menjadi Layu</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Gejala Terlihat Jelas Saat Cuaca Panas</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Bercak - Bercak Kecil Berwarna Cokelat Pada Daun</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Bercak - Bercak Membesar dan Menjadi Hitam dengan Tepi Yang Lebih Terang</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Daun - Daun Mengering dan Gugur</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Permukaan Daun Ditutupi Oleh Lapisan Serbuk Putih Seperti Tepung</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Daun - Daun Menjadi Keriting dan Menguning</label>
                                </div>
                            </li>
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="cursor-pointer font-bold d-block custom-control-label" for="customCheck5">Pertumbuhan Tanaman Terhambat dan Hasil Panen Berkurang</label>
                                </div>
                            </li>
							<button type="submit" class="btn btn-success mt-5">Diagnosa</button>
                        </ul>
					</div>
				</div>	
			</div>
			<?php if (!empty($hasilDeteksi)) : ?>
				<h2>Hasil Diagnosa:</h2>
				<p><?php echo $hasilDeteksi; ?></p>
			<?php endif; ?>

            <!-- Content Row -->
            <div class="row"></div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->