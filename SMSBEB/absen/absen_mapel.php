<?php
include "../layout/head.php";
?>
<!-- tampilan Profil -->
  <div class="container-fluid p-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="harian">
      <div class="w-100">
        <div class="container">
          <h2 class="mb-5">Absen Mapel</h2>
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
            <th>Mata Pelajaran</th>
            <?php
            for ($i=1; $i <=10 ; $i++) {
            ?>
            <th>Jam <?= $i ?></th>
            <?php } ?>
          </tr>
          <?php
          $now = date('Y-m-d');
          $where = "";
          $d = $_POST;
            if (isset($_POST['cari'])) {
              $where = " AND ";
              $start_date = $d['start_date'];
              $end_date = $d['end_date'];
              // if ($kelas !='') {
              //   $where .= " AND tp.tanggal BETWEEN '$start_date' AND '$end_date' ";
              // }else{
                $where .= " tp.tanggal BETWEEN '$start_date' AND '$end_date' ";
              // }
          }
          $queryKelas = mysqli_query($koneksi, "SELECT tm.nama as mapel, tp.nis, tp.id_mapel FROM tb_absen_pelajaran tp JOIN tb_mapel tm ON tp.id_mapel=tm.id where tp.nis='$nis' and tp.tanggal like '%$now%' $where GROUP BY tp.id_mapel");
        //   print_r($queryKelas);
        // echo "SELECT * FROM tb_absen_pelajaran tp where tp.nis='$nis'";
        foreach ($queryKelas as $k) {
          ?>
          <tr>
            <td><?= $k['mapel']  ?></td>
            <?php
            for ($i=1; $i <=10 ; $i++) {
              $qur = mysqli_query($koneksi, "SELECT * FROM tb_absen_pelajaran  WHERE jam=$i AND nis='$k[nis]' and id_mapel='$k[id_mapel]'");
              $d = mysqli_fetch_array($qur);
            ?>
            <th><?= $d['status_absen'] ?></th>
            <?php } ?>
          </tr>
        <?php } ?>
        </table>
        <br>
      </div>
      </div>
    </section>
  </div>
  <!-- tampilan Profil -->
