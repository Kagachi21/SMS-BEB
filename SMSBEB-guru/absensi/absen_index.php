
<?php

$host = mysqli_connect("localhost", "root", "", "db_sms");
$hs = mysqli_query($host, "SELECT *  FROM tb_kelas");

?>


<html lang="en"><head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Absensi</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMS-BEB</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin-dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbsensi" aria-expanded="false" aria-controls="collapseAbsensi">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Absensi</span></a>
          <div id="collapseAbsensi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="admin-penghuni1.php">Absensi Harian</a>
            <a class="collapse-item" href="admin-penghuni2.php">Absensi Mapel</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Kamar Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="admin-kamar.php">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Surat Keterangan</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="admin-jenis-pengeluaran.php">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Catatan BK</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="admin-pemasukan.php">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Verifikasi Pembayaran</span>
        </a>
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

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Abdul Jali</span>

                <!-- foto profil -->


                <img class="img-profile rounded-circle" src="">


                <!-- foto profil -->

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="admin-settings-profil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="admin-settings-infokost.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <span class="h3 mb-0 text-gray-800">Absensi Harian</span>
            <div class="float-right"><input id="datepicker" value=<?= isset($_GET["tanggal"]) ? $_GET["tanggal"] : date("Y-m-d") ?>></div>
            <!-- button tambah -->
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Absensi</h6>
            </div>
            <div class="card-body">
                <?php while($dataKelas = mysqli_fetch_array($hs)){ ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            Absen Kelas <?= $dataKelas["nama_kelas"] ?>
                        </div>
                        <div class="col-md-2">
                            <?php



                               $date = date("Y-m-d");
                               $dateL = date("Y-m-d H:i:s");
                               $interval = 0;
                               $t = $dataKelas["id_kelas"];

                               if(isset($_GET["tanggal"])){
                                $tanggal = $_GET["tanggal"];
                                $date1 = new DateTime($tanggal);
                                $date2 = new DateTime(date("Y-m-d"));
                                $interval = $date1->diff($date2)->d;
                                $rQ = mysqli_query($host, "SELECT * FROM tb_absen_harian WHERE id_kelas = '$t' AND DATE(timestamp) = '$tanggal'");
                                $date = $tanggal;
                               }else{
                                   $rQ = mysqli_query($host, "SELECT * FROM tb_absen_harian WHERE id_kelas = '$t' AND DATE(timestamp) = '$date'");
                               }

                               $queryPulang = mysqli_query($host, "SELECT * FROM tb_absen_harian WHERE id_kelas = '$t' AND DATE(timestamp) = '$date' AND status_absen = 'Pulang'");


                                if(mysqli_num_rows($rQ) != 0){
                                    ?>
                                <a href="absen_harian_edit.php?kelas=<?= $dataKelas["id_kelas"]?>&tanggal=<?= $date ?>" class="btn btn-info">Edit</a>
                                <?php if(mysqli_num_rows($queryPulang) == 0){ ?>
                                  <button class="btn btn-info pulang" data-kelas="<?= $dataKelas["id_kelas"]?>" data-tanggal="<?= $dateL ?>">Tandai Pulang</button>
                                <?php } ?>

                                <?php } else {
                                    if($interval == 0){
                                        ?>
                                      <a href="absen_harian.php?kelas=<?= $dataKelas["id_kelas"]?>" class="btn btn-success">Tambah</a>
                                    <?php }
                                    }
                                    ?>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © INDIEKOST 2019</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar Aplikasi?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logout" dibawah jika anda ingin mengakhiri sesi.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="assets/actions/process-logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- view modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary font-weight-bold" id="exampleModalCenterTitle">Rincian Data Penghuni
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="detail_pengguna">


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary font-weight-bold" id="exampleModalCenterTitle">Edit Data Penghuni</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="detail_edit">

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- lightbox -->
    <script src="assets/js/lightbox.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- lightbiox css -->
    <link href="assets/css/lightbox.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        function insertParam(key, value)
        {
            key = encodeURI(key); value = encodeURI(value);

            var kvp = document.location.search.substr(1).split('&');

            var i=kvp.length; var x; while(i--)
            {
                x = kvp[i].split('=');

                if (x[0]==key)
                {
                    x[1] = value;
                    kvp[i] = x.join('=');
                    break;
                }
            }

            if(i<0) {kvp[kvp.length] = [key,value].join('=');}

            //this will reload the page, it's likely better to store this until finished
            document.location.search = kvp.join('&');
        }



      $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd',
            close: function(e){
                insertParam("tanggal", $('#datepicker').datepicker().value());
            }
        });

      $('.pulang').on('click', function(){
        var kelasKelas = $(this).data("kelas");
        var Rtanggal = '<?= date("Y-m-d H:i:s") ?>';
        $.ajax({
                        type: 'POST',
                        url: 'absen_harian_pulang.php',
                        data: {
                            kelas : kelasKelas,
                            tanggal : Rtanggal
                        },
                        success : function(response){
                            location.reload();
                        }
                    });
      });
    </script>


</div><div id="lightboxOverlay" tabindex="-1" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" tabindex="-1" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt=""><div class="lb-nav"><a class="lb-prev" aria-label="Previous image" href=""></a><a class="lb-next" aria-label="Next image" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div></body></html>
