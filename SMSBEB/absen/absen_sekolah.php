<?php
include "../layout/head.php";
?>
<!-- tampilan Profil -->
  <div class="container-fluid p-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="harian">
      <div class="w-100">
        <div class="container">
          <h2 class="mb-5">Absen Sekolah</h2>
        <br>
        <br>
        <div class="form-group col-md-12">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                  <input type="date" name="start_date" value="<?= date("Y-m-d") ?>" placeholder="tanggal awal" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="date" name="end_date"  value="<?= date("Y-m-d", strtotime("+7days")) ?>" placeholder="tanggal akhir" class="form-control">
                </div>
                <div class="form-group col-md-3">
                      <input type="submit" name="cari" value="cari" class="btn btn-primary btn-block">
                </div>
            </div>
          </div>
        </form>
        <table width="100%" border="1" class="tabel" id="expandTab">
          <tr>
            <th>No</th>
            <th>Status</th>
            <th>Tanggal</th>
          </tr>
          <?php
          $now = date('Y-m-d');
          $where = "";
          $d = $_POST;
            if (isset($_POST['cari'])) {
              $where = " AND ";
              $start_date = $d['start_date'];
              $end_date = $d['end_date'];
              // if ( $kelas !='') {
              //   $where .= " AND tp.tanggal BETWEEN '$start_date' AND '$end_date' ";
              // }else{
                $where .= " tp.tanggal BETWEEN '$start_date' AND '$end_date' ";
              // }
          }
          $queryKelas = mysqli_query($koneksi, "SELECT  tp.status_absen, tp.tanggal FROM tb_absen_harian tp  where tp.nis='$nis' and tp.tanggal like '%$now%' $where");
        $no=1;
        foreach ($queryKelas as $k) {
          ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $k['status_absen']  ?></td>
            <td><?= $k['tanggal']  ?></td>
          </tr>
        <?php } ?>
        </table>
        <br>
      </div>
      </div>
    </section>
  </div>
  <!-- tampilan Profil -->
