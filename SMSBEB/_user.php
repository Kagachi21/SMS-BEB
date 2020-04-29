<?php
session_start();
include 'koneksi.php';
$nis = $_SESSION['nis'];
$sql = mysqli_query($koneksi,"SELECT * FROM tb_siswa  INNER JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas WHERE tb_siswa.nis = '$nis'");
while ($data = mysqli_fetch_array($sql)) {
  $foto = $data["foto"];
  $nama = $data["nama_siswa"];
  $jenis = $data["jk_siswa"];
  $tempat = $data["tempat_lahir"];
  $lahir = $data["tanggal_lahir"];
  $jurusan = $data["jurusan"];
  $kelas = $data["nama_kelas"];
  $kelasID = $data["id_kelas"];
  $alamat = $data["alamat_siswa"];
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
                <td width="25%" valign="top" class="text">Nama</td>
                  <td width="2%">:</td>
                    <td style="color: rgb(200, 84, 19); font-weight:bold"><?php echo $nama; ?></td>
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
        Tahun Ajaran : 
        <select id="thAjaranChange">
        <option value=""></option>
          <?php $uS = mysqli_query($koneksi, "SELECT * FROM tb_tahun_ajaran"); while($data = mysqli_fetch_array($uS)){ ?>
            <option value="<?= $data["tahun_ajaran"] ?>"><?= $data["tahun_ajaran"] ?></option>
          <?php } ?>
        </select>
        <br>
        <br>




        <table width="100%" border="1" class="tabel" id="expandTab">
          <tr>
            <th>Mata Pelajaran</th>
            <th>Jumlah Pertemuan</th>
            <th>Jumlah Tatap Muka</th>
          </tr>
          <?php 
          $queryKelas = mysqli_query($koneksi, "SELECT * FROM tb_mapel INNER JOIN tb_kelas ON tb_kelas.tipe_kelas = tb_mapel.jurusan INNER JOIN tb_siswa ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE tb_siswa.nis = '$nis'");
          $upO = [];
          while($data = mysqli_fetch_array($queryKelas)){
            array_push($upO, [$data["id_mapel"], $data["nama_mapel"]]);
          }
          ?>
          
        </table>
        <br>
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
                Tahun Ajaran : 
              <select id="thAjaranAbsensi">
              <option value=""></option>
                <?php $uS = mysqli_query($koneksi, "SELECT * FROM tb_tahun_ajaran"); while($data = mysqli_fetch_array($uS)){ ?>
                  <option value="<?= $data["tahun_ajaran"] ?>"><?= $data["tahun_ajaran"] ?></option>
                <?php } ?>
              </select>
                <br>
                <br>


                <div class="container">

                  <table width="100%" border="1" class="tabel" id="tabAbsenHarian" >

                    <tr>
                      <th>Tanggal</th>
                      <th>Status</th>
                    </tr>

                    <!-- <tr>
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
                      <td></td> -->

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
        include "../config/koneksi.php";
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
        <h2 class="mb-5">Informasi Pembayaran</h2>
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

    $('#thAjaranChange').on('change', function(){
      var vayu = $(this).val();
      var nisA = '<?= $nis ?>';
      $.ajax({
                        type: 'POST',
                        url: 'test.php',
                        data: {
                            id_tahun : vayu,
                            nis : nisA,
                            kelas : '<?= $kelasID ?>',
                        },
                        success : function(response){
                          $('#expandTab').empty();
                            var isiList = '<?php
                                            echo json_encode($upO);
                            ?>';
                            var tList = JSON.parse(isiList);
                            var kRes = Object.entries(JSON.parse(response)[0]);
                            var kRes3 = JSON.parse(response)[1];
                            var kRes2 = Object.keys(kRes3).map(function(key) {
                                          return [Number(key), kRes3[key]];
                                        });
                            var table = '<tr>'+
                                        '<th>Mata Pelajaran</th>'+
                                        '<th>Jumlah Pertemuan</th>'+
                                        '<th>Jumlah Tatap Muka</th>'+
                                        '</tr>';
                            var counter = 0;
                            tList.forEach(function(k, v){
                              kRes.forEach(function(ak, av){
                                
                                if(ak[0] == k[0]){
                                  table += '<tr>';
                                  table += '<td>'+k[1]+'</td>';
                                  table += '<td>'+ak[1]+'</td>';
                                  table += '<td>'+kRes3[0][1]+'</td>';
                                  table += '</tr>';
                                }
                              });
                              counter++;
                            });
                            $('#expandTab').append(table);
                        }
                    });
    });


    $('#thAjaranAbsensi').on('change', function(){
      var vayu = $(this).val();
      var nisA = '<?= $nis ?>';
      $.ajax({
                        type: 'POST',
                        url: 'testAbsen.php',
                        data: {
                            id_tahun : vayu,
                            nis : nisA,
                            kelas : '<?= $kelasID ?>',
                        },
                        success : function(response){
                          $('#tabAbsenHarian').empty();
                          var res = JSON.parse(response);
                          var tabel = '<tr>'+
                                      '<th>Status</th>'+
                                      '<th>Tanggal</th>'+
                                      '</tr>';
                          res.forEach(function(k, v){
                              tabel += '<tr><td>';
                              if(k[0] == "Hadir"){
                                tabel += '<i class="fa fa-check-circle"></i>';
                              }else if(k[0] == "Hadir(Telat)"){
                                tabel += '<i class="fa fa-exclamation-circle"></i>';
                              }else if(k[0] == "Tidak Hadir"){
                                tabel += '<i class="fa fa-times"></i>';
                              }else if(k[0] == "Pulang"){
                                tabel += '<i class="fa fa-check-circle"></i>';
                              }
                              tabel += " "+k[0]+'</td>';
                              
                              tabel += '<td>'+k[1]+'</td>';
                          });
                          $('#tabAbsenHarian').append(tabel);
                        }
                    });
    });
  </script>

</body>

</html>
