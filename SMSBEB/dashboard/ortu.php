<?php
session_start();
include 'koneksi.php';
$nik = $_SESSION['nik'];
$sql = mysqli_query($koneksi,"SELECT * FROM tb_ortu WHERE nik = '$nik'");
while ($data = mysqli_fetch_array($sql)) {
  $nama = $data["username_ortu"];
  $nis = $data["nis"];
}
$sqlsiswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE nis = '$nis'");
$datasis = mysqli_fetch_array($sqlsiswa);
  $foto = $datasis ["foto"];
  $namasis = $datasis["nama_siswa"];
  $jenis = $datasis["jk_siswa"];
  $tempat = $datasis["tempat_lahir"];
  $lahir = $datasis["tanggal_lahir"];
  $jurusan = $datasis["jurusan"];
  $kelas = $datasis["id_kelas"];
  $alamat = $datasis["alamat_siswa"];
  $email = $datasis["email"];
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
  <link href="User/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="User/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="User/css/resume.min.css" rel="stylesheet">

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
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="foto/<?php echo $foto; ?>" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#biodata">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#harian">Absen Harian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#sekolah">Absen Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#konseling">Catatan BK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#keterangan">Surat Keterangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#pembayaran">Informasi Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Keluar</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- tampilan Profil -->
  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="biodata">
      <div class="w-100">
        <h1 class="mb-0">BIODATA</h1>
        <br>
        <div class="container">
          <table width="100%" border="0">
            <body>
              <tr>
                <td width="25%" valign="top" class="text">Nama Orang Tua</td>
                  <td width="2%">:</td>
                    <td style="color: rgb(200, 84, 19); font-weight:bold"><?php echo $nama; ?></td>
              </tr>
              <tr>
                  <td width="25%" valign="top" class="text">Nama</td>
                    <td width="2%">:</td>
                      <td style="color: rgb(200, 84, 19); font-weight:bold"><?php echo $namasis; ?></td>
                </tr>

                <tr>
                  <td class="text">Jenis Kelamin</td>
                      <td>:</td>
                      <td><?php echo $jenis; ?></td>
                </tr>

                <tr>
                  <td class="text">Tempat Lahir</td>
                      <td>:</td>
                      <td><?php echo $tempat; ?></td>
                </tr>

                <tr>
                  <td class="text">Tanggal Lahir</td>
                      <td>:</td>
                      <td><?php echo $lahir; ?></td>
                </tr>

                <tr>
                  <td class="text">Nis</td>
                      <td>:</td>
                      <td><?php echo $nis; ?></td>
                </tr>

                <tr>
                  <td class="text">Jurusan</td>
                      <td>:</td>
                      <td><?php echo $jurusan; ?></td>
                </tr>

                <tr>
                  <td class="text">Kelas</td>
                      <td>:</td>
                      <td><?php echo $kelas; ?></td>
                </tr>

                <tr>
                  <td class="text">Alamat</td>
                      <td>:</td>
                      <td><?php echo $alamat; ?></td>
                </tr>

                <tr>
                  <td class="text">E-Mail</td>
                      <td>:</td>
                      <td><a href="mailto:didigg74@gmail.com"><?php echo $email; ?></a></td>
                </tr>
              </body>
            </table>
          </div>
        </div>
      </section>
    </div>
    <!-- tampilan Profil -->
    <hr class="m-0">
    <!-- tampilan Absen Harian -->
    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="harian">
        <div class="w-100">
          <div class="container">
            <h2 class="mb-5">Absen Harian</h2>
          Hari :
          <select>
            <option nama="Hari" value="Senin">Senin</option>
            <option nama="Hari" value="Selasa">Selasa</option>
            <option nama="Hari" value="Rabu">Rabu</option>
            <option nama="Hari" value="Kamis">Kamis</option>
            <option nama="Hari" value="Jumat">Jumat</option>
          </select>
          <br>
          <br>

          Bulan :
          <select>
            <option nama="Bulan" value="Januari">Januari</option>
            <option nama="Bulan" value="Februari">Februari</option>
            <option nama="Bulan" value="Maret">Maret</option>
            <option nama="Bulan" value="April">April</option>
            <option nama="Bulan" value="Mei">Mei</option>
            <option nama="Bulan" value="Juni">Juni</option>
            <option nama="Bulan" value="Juli">Juli</option>
            <option nama="Bulan" value="Agustus">Agustus</option>
            <option nama="Bulan" value="September">September</option>
            <option nama="Bulan" value="Oktober">Oktober</option>
            <option nama="Bulan" value="November">November</option>
            <option nama="Bulan" value="Desember">Desember</option>
          </select>
          <br>
          <br>

          Minggu :
          <select>
            <option nama="Minggu" value="1">1</option>
            <option nama="Minggu" value="2">2</option>
            <option nama="Minggu" value="3">3</option>
            <option nama="Minggu" value="4">4</option>
          </select>
          <br>
          <br>

          <table width="100%" border="1" class="tabel" >
            <tr>
              <th>Mata Pelajaran</th>
              <th>Jam 1</th>
              <th>Jam 2</th>
              <th>Jam 3</th>
              <th>Jam 4</th>
              <th>Jam 5</th>
              <th>Jam 6</th>
              <th>Jam 7</th>
              <th>Jam 8</th>
              <th>Jam 9</th>
              <th>Jam 10</th>
            </tr>
            <tr>
              <td>Matematika</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Bahasa Indonesia</td>
              <td>H</td>
              <td>A</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Bahasa Inggris</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Fisika</td>
              <td>I</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Kimia</td>
              <td>H</td>
              <td>H</td>
              <td>I</td>
              <td>H</td>
              <td>H</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Olahraga</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td>H</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
          <br>
        </div>
        <div class="keterangan">
          <p>Keterangan :
            <ul>
              <li> H = Hadir</li>
              <li> I = Izin</li>
              <li> A = Alpha</li>
            </ul>
          </p>

          </div>
        </div>
      </section>
    </div>
      <!-- tampilan Absen Harian -->
      <hr class="m-0">
      <!-- tampilan Absen Sekolah -->
      <div class="container-fluid p-0">
        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="sekolah">
          <div class="container">
            <h2 class="mb-5">Absen Sekolah</h2>
            <div class="w-100">
                  Bulan :
                  <select>
                    <option nama="Bulan" value="Januari">Januari</option>
                    <option nama="Bulan" value="Februari">Februari</option>
                    <option nama="Bulan" value="Maret">Maret</option>
                    <option nama="Bulan" value="April">April</option>
                    <option nama="Bulan" value="Mei">Mei</option>
                    <option nama="Bulan" value="Juni">Juni</option>
                    <option nama="Bulan" value="Juli">Juli</option>
                    <option nama="Bulan" value="Agustus">Agustus</option>
                    <option nama="Bulan" value="September">September</option>
                    <option nama="Bulan" value="Oktober">Oktober</option>
                    <option nama="Bulan" value="November">November</option>
                    <option nama="Bulan" value="Desember">Desember</option>
                  </select>
                  <br>
                  <br>

                  Minggu :
                  <select>
                    <option nama="Minggu" value="1">1</option>
                    <option nama="Minggu" value="2">2</option>
                    <option nama="Minggu" value="3">3</option>
                    <option nama="Minggu" value="4">4</option>
                  </select>
                  <br>
                  <br>

                  <div class="container">

                    <table width="100%" border="1" class="tabel" >
                      <tr>
                        <th>Senin <br>
                          01/11/2019</th>
                        <th>Selasa<br>
                          02/11/2019</th>
                        <th>Rabu<br>
                          03/11/2019</th>
                        <th>Kamis<br>
                          04/11/2019</th>
                        <th>Jumat<br>
                          05/11/2019</th>

                      </tr>
                      <tr>
                        <td>Datang <br>
                          07:00 AM</td>
                        <td><i class="fa fa-check-circle"></td>
                        <td><i class="fa fa-exclamation-circle"></td>
                        <td></td>
                        <td></td>

                      </tr>
                      <tr>
                        <td>Pulang <br>
                          13:00 PM</td>
                        <td><i class="fa fa-check-circle"> </td> <td><i class="fa fa-check-circle"></td>
                        <td></td>
                        <td></td>

                    </table>
                    <br>
                  </div>
                  <div class="keterangan">
                    <p>Keterangan :
                      <ul>
                        <li> <i class="fa fa-check-circle"></i> = Masuk</li>
                        <li> <i class="fa fa-times"></i> = Tidak Masuk</li>
                        <li> <i class="fa fa-exclamation-circle"></i> = Terlambat</li>
                      </ul>
                    </p>
                  </div>
                </div>
      </section>
      <!-- tampilan Absen Sekolah -->
      <hr class="m-0">




      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="konseling">
        <div class="w-100">
          <h2 class="mb-5">Catatan Pelanggaran</h2>
          <?php
          $querykasus = mysqli_query($koneksi,"SELECT * FROM tb_bk WHERE nis='$nis'");
          $no = 1;
          while ($datakasus=mysqli_fetch_array($querykasus)) { ?>
          <button class="accordion">Kasus <?php echo $no; ?></button>
          <div class="panel">
            <br>
            <p>Tanggal : <?php echo $datakasus['tanggal']; ?></p>
            <p>Kasus : <?php echo $datakasus['kasus']; ?></p>
            <p>Deskripsi : <?php echo $datakasus['deskripsi']; ?></p>
            <p>Poin : <?php echo $datakasus['point']; ?></p>
          </div>
          <?php
          $no++ ;
          }
           ?>

        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="keterangan">
        <div class="w-100">
          <h2 class="mb-5">Surat Keterangan Ketidakhadiran</h2>
          <form method="post" action="prosesket.php" enctype="multipart/form-data">
            <table cellpadding="8">
              <td>Tanggal :</td>
              <td><input type="date" name="tanggal_ket"></td>
            </tr>
            <tr>
              <td>Keterangan :</td>
              <td>
              <input type="radio" name="jenis_ket" value="Ijin"> IJIN
              <input type="radio" name="jenis_ket" value="Sakit"> SAKIT
              </td>
            </tr>
            <tr>
              <td>Foto :</td>
              <td><input type="file" name="foto_ket"></td>
            </tr>
            </table>
              <input type="hidden" name="nis" value="<?php echo $nis; ?>">
            <br>
            <input type="submit" value="Simpan">
            <a href="admin/index.php"><input type="button" value="Batal"></a>
          </form>

        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="pembayaran">
        <div class="w-100">
          <h2 class="mb-5">Informasi Pemabayaran</h2>
          <?php
          $querybayar = mysqli_query($koneksi,"SELECT * FROM tb_pembayaran WHERE nis='$nis'");
          $nobayar = 1;
          while ($databayar=mysqli_fetch_array($querybayar)) { ?>
          <button class="accordion">Pembayaran <?php echo $nobayar; ?></button>
          <div class="panel">
            <br>
            <p>Tanggal : <?php echo $databayar['tgl_pembayaran']; ?></p>
            <p>Jumlah Tagihan : <?php echo $databayar['jml_tagihan']; ?></p>
            <p>Jenis Pembayaran : <?php echo $databayar['jenis_pembayaran']; ?></p>
            <p>Status : <?php echo $databayar['status']; ?></p>
          </div>
          <?php
          $nobayar++ ;
          }
           ?>

        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="User/vendor/jquery/jquery.min.js"></script>
    <script src="User/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="User/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="User/js/resume.min.js"></script>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    </script>

    </body>

    </html>
