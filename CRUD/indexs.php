<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="page-top">
  <?php 
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("location: login.php");
    }
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="#">Buttons</a>
            <a class="collapse-item" href="#">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="#">Colors</a>
            <a class="collapse-item" href="#">Borders</a>
            <a class="collapse-item" href="#">Animations</a>
            <a class="collapse-item" href="#">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="#">Login</a>
            <a class="collapse-item" href="#">Register</a>
            <a class="collapse-item" href="#">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="#">404 Page</a>
            <a class="collapse-item" href="#">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
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
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
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
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them
                      sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so
                      far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['akun_user']; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                <a class="dropdown-item" href="process-logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
          <h1 class="h3 mb-2 text-gray-800">Berikut adalah percobaan CRUD dengan template SB Admin</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid sapiente commodi deleniti, distinctio natus ab ducimus molestias dicta in enim perferendis. Deleniti in ipsam magni rem esse eveniet aut ex.</p>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Data Siswa</h6>
              <button class="btn btn-primary btn-sm btninsert">+ Input Data</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">ID</th>
                      <th scope="col">NIM</th>
                      <th scope="col">Nama Depan</th>
                      <th scope="col">Nama Belakang</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">ID</th>
                      <th scope="col">NIM</th>
                      <th scope="col">Nama Depan</th>
                      <th scope="col">Nama Belakang</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    // memanggil file koneksi.php untuk koneksi database
                    include "koneksi.php";

                    // variabel $query_mysql untuk menyimpan hasil dari fungsi mysqli_query()
                    // mengambil semua data dari tb_siswa
                    $query_mysql = mysqli_query($host, "SELECT * FROM tb_siswa")or die(mysqli_error($host));

                    // membuat variavel $nomor untuk penomoran baris otomatis tabel
                    $nomor = 1;

                    // perulangan untuk mencetak tiap" record dari hasil query
                    // hasil query tersimpan dalam bentuk array
                    // digunakan fungsi mysqli_fetch_array() untuk mengambil nilai dari tiap baris record dari array
                    while($data = mysqli_fetch_array($query_mysql)) {
                  ?>
                    <tr>
                      <!-- mencetak nomor otomatis, secara increment -->
                      <td class="bold"><?php echo $nomor++; ?></td>
                      <!-- mencetak data record dari tb_siswa -->
                      <td><?php echo $data['id']; ?></td>
                      <td><?php echo $data['nim']; ?></td>
                      <td><?php echo $data['nama_depan']; ?></td>
                      <td><?php echo $data['nama_belakang']; ?></td>
                      <td><?php echo $data['alamat']; ?></td>
                      <td><?php echo $data['jenis_kelamin']; ?></td>
                      <td><?php echo $data['kelas']; ?></td>
                      <td>
                        <div class="btn btn-group">
                          <button class="btn btn-success btn-sm editbtn" type="button">Edit</button>
                          <span>&nbsp</span>
                          <!-- echo untuk mencetak id tertentu yang akan dihapus -->
                          <!-- data dikirim ke processhapus.php -->
                          <a href="processhapus.php?id=<?php echo $data['id']; ?>"
                            onclick="return confirm('Anda yakin ingin menghapus data?');"><button
                              class="btn btn-danger btn-sm" type="button" name="delete">Delete</button></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- modal edit-->
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <!-- head -->
            <div class="modal-header">
              <h5 class="modal-tittle" id="updateModalLabel">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- body -->
            <div class="modal-body">
              <form action="processedit.php" method="post" class="needs-validation" novalidate>
                <input id="id" type="hidden" name="id">
                <div class="form-row">
                  <div class="col">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan NIM anda terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="namaDepan">Nama Depan</label>
                    <input name="namaDepan" type="text" class="form-control" id="namaDepan"
                      placeholder="Masukkan Nama Depan" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama depan anda terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="namaBelakang">Nama Belakang</label>
                    <input name="namaBelakang" type="text" class="form-control" id="namaBelakang"
                      placeholder="Masukkan Nama Belakang" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama belakang anda terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan alamat valid anda terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="jKelamin">Jenis Kelamin</label>
                    <select name="jKelamin" class="custom-select" id="jKelamin" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="kelasUpdate">Kelas</label>
                    <select name="kelas" class="custom-select" id="kelasUpdate" required>
                      <option value="">Pilih kelas</option>
                      <option value="MIF A">MIF A</option>
                      <option value="MIF B">MIF B</option>
                      <option value="MIF C">MIF C</option>
                      <option value="MIF D">MIF D</option>
                      <option value="MIF INTERNASIONAL">MIF INTERNASIONAL</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                  <button name="update" type="submit" value="add" class="btn btn-success"
                    onclick="return confirm('Anda yakin ingin mengupdate data?');">Update</button>
                </div>

              </form>
            </div>


          </div>
        </div>
      </div>
      <!-- modal akhir -->

      <!-- modal input -->
      <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <!-- head -->
            <div class="modal-header">
              <h5 class="modal-tittle" id="insertModalLabel">Insert Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- body -->
            <div class="modal-body">
              <form action="processinput.php" method="post" class="needs-validation" novalidate>

                <div class="form-row">
                  <div class="col">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan NIM anda terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="namaDepan">Nama Depan</label>
                    <input name="namaDepan" type="text" class="form-control" id="namaDepan"
                      placeholder="Masukkan Nama Depan" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama depan anda terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="namaBelakang">Nama Belakang</label>
                    <input name="namaBelakang" type="text" class="form-control" id="namaBelakang"
                      placeholder="Masukkan Nama Belakang" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama belakang anda terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan alamat valid anda terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="jKelamin">Jenis Kelamin</label>
                    <select name="jKelamin" class="custom-select" id="jKelamin" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="kelasUpdate">Kelas</label>
                    <select name="kelas" class="custom-select" id="kelasUpdate" required>
                      <option value="">Pilih Kelas</option>
                      <option value="MIF A">MIF A</option>
                      <option value="MIF B">MIF B</option>
                      <option value="MIF C">MIF C</option>
                      <option value="MIF D">MIF D</option>
                      <option value="MIF INTERNASIONAL">MIF INTERNASIONAL</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                  <button name="input" type="submit" value="add" class="btn btn-primary"
                    onclick="return confirm('Anda yakin ingin menyimpan data?');">Input</button>
                </div>

              </form>
            </div>


          </div>
        </div>
      </div>
      <!-- modal akhir -
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="process-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- koneksi kepada jQuery, popper.min.js, dan bootstrap.min.js -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();

    $(document).ready(function () {
      $('.editbtn').on('click', function () {
        $('#updateModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
          return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[1]);
        $('#nim').val(data[2]);
        $('#namaDepan').val(data[3]);
        $('#namaBelakang').val(data[4]);
        $('#alamat').val(data[5]);
        $('#jKelamin').val(data[6]);
        $('#kelasUpdate').val(data[7]);
      });
    });

    $(document).ready(function () {
      $('.btninsert').on('click', function () {
        $('#insertModal').modal('show');
      });
    });
  </script>
</body>

</html>