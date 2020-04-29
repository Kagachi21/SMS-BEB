<?php
session_start();
include '../../config/koneksi.php';
$nis = $_SESSION['nis'];
$sql = mysqli_query($koneksi,"SELECT ts.*, tk.nama as nama_kelas FROM tb_siswa ts INNER JOIN tb_kelas tk ON tk.id = ts.id_kelas WHERE ts.nis = '$nis'");
while ($data = mysqli_fetch_array($sql)) {
  $foto = $data["foto"];
  $nama = $data["nama"];
  $jenis = $data["jenis_kelamin"];
  $tempat = $data["tempat_lahir"];
  $lahir = $data["tanggal_lahir"];
  $kelas = $data["nama_kelas"];
  $kelasID = $data["id_kelas"];
  $alamat = $data["alamat"];
  $email = $data["email"];
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Monitoring</title>

  <!-- Bootstrap core CSS -->
  <link href="../User/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../User/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../User/css/resume.min.css" rel="stylesheet">

  <style>

    .accordion {
      background-color: #eee;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
      }

    .accordion input {
      display: none;
    }

    .active, .accordion:hover {
      background-color: #ccc;
      }

    .panel {
      padding: 0 18px;
      background-color: white;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
      }

    .accordion:after {
      content: '\02795'; /* Unicode character for "plus" sign (+) */
      font-size: 13px;
      color: #777;
      float: right;
      margin-left: 5px;
      }

    .accordion.active:after {
      content: "\2796"; /* Unicode character for "minus" sign (-) */
      }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin: auto;
    }

    .tabel td, th {

      text-align: Center;
      padding: 2px;
    }
  </style>


</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">SMS BEB</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../../foto/siswa/<?php echo $foto; ?>" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../dashboard/user.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../absen/absen_mapel.php">Absen Mapel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../absen/absen_sekolah.php">Absen Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../bk/bk.php">Catatan BK</a>
        </li>
        <?php 
        if ($_SESSION['level'] == 'ortu') {
        
        ?>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../keterangan/keterangan.php">Surat Keterangan</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../pembayaran/pembayaran.php">Informasi Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../../logout.php">Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
