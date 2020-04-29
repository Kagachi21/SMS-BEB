<?php
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <span class="h3 mb-0 text-gray-800">Absensi Harian</span>

            <!-- button tambah -->

          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
              Absensi Untuk Kelas : </h6>

            </div>
            <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                  <div class="form-group col-md-2">
                    <select name="jenis" id="" class="form-control">
                      <option value="">Pilih Jenis</option>
                      <option value="datang">Datang</option>
                      <option value="pulang">Pulang</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <select name="kelas" id="" class="form-control">
                    <option value="">PIlih Kelas</option>
                      <?php
                      $q = mysqli_query($koneksi, "SELECT tk.* FROM tb_kelas tk JOIN tb_jadwal tj ON tk.id=tj.id_kelas GROUP BY tk.nama");
                      foreach ($q as $kl) {
                      ?>
                      <option value="<?= $kl['id'] ?>" jurusan="<?= $kl['tipe_kelas'] ?>"><?= $kl['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-1">
                        <input type="submit" name="cari" value="cari" class="btn btn-primary btn-block">
                  </div>
                </div>
              </form>
            <?php
            $day = date('l');
              $d = $_POST;
              if (isset($_POST['cari'])) {
            $q = mysqli_query($koneksi, "SELECT * FROM tb_jadwal tj WHERE hari='$day' AND tj.id_kelas='$d[kelas]' ORDER BY jam desc");
            $pulang = false;
            $res = mysqli_fetch_assoc($q);
            // echo "<pre>";
            // print_r($res);
            // echo $res['nip']."<br>";
            // if($res['nip'] == $_SESSION['nip']){
            //   $pulang = true;
            // }else{
            //   $pulang = false;
            // }

            $qd = mysqli_query($koneksi, "SELECT * FROM tb_jadwal tj WHERE hari='$day' AND tj.id_kelas='$d[kelas]' ORDER BY jam asc");
            $datang = false;
            $resd = mysqli_fetch_assoc($qd);
            // echo "<pre>";
            // print_r($resd);
            // echo $resd['nip']."<br>";
            // echo "session ".$_SESSION['nip'];
            // if($resd['nip'] == $_SESSION['nip']){
            //   $datang = true;
            // }else{
            //   $datang = false;
            // }
          }
            ?>

            <h3>Absensi Harian untuk tanggal <?= date("d-M-Y") ?> <?= date('l') ?></h3>
            <form action="proses.php" method="post">
            <?php
            if(isset($d['jenis'])){
              if($d['jenis'] == 'pulang'){
                // if($pulang){
                  include "pulang.php";
                // }else{
                //   echo "anda tidak dapat mengisi absen pulang";
                // }
              }else{
                // if($datang){
                  include "kehadiran.php";
                // }else{
                //   echo "anda tidak dapat mengisi absen datang";
                // }
              }
            }?>
            <div class="form-group col-md-2">
                    <button id="pilih-semua" type="button" class="btn btn-success"> <i class="fa fa-check"></i> Hadir Semua</button>
              </div>
            <?php
            if(isset($_POST['jenis'])){
              // if(($d['jenis'] == 'pulang' && $pulang) ||  ($d['jenis'] == 'datang' && $datang)){
            ?>
            <input type="submit" value="simpan" class="btn btn-primary">
            <?php }?>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php include "../layout/footer.php" ?>
