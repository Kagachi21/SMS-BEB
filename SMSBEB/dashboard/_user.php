<?php
include "../layout/head.php";
?>
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
          $queryKelas = mysqli_query($koneksi, "SELECT tb_mapel.* FROM tb_mapel INNER JOIN tb_kelas ON tb_kelas.tipe_kelas = tb_mapel.jurusan INNER JOIN tb_siswa ON tb_siswa.id_kelas = tb_kelas.id WHERE tb_siswa.nis = '$nis'");
          $upO = [];
          while($data = mysqli_fetch_array($queryKelas)){
            array_push($upO, [$data["id"], $data["nama"]]);
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

<?php include "../layout/footer.php" ?>6:41 AM 2020-01-19