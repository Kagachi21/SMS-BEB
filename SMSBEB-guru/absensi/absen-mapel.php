<?php
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <span class="h3 mb-0 text-gray-800">Absensi Mapel</span>

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
                    <select name="kelas" id="" class="form-control">
                    <option value="">PIlih Kelas</option>
                      <?php
                      $q = mysqli_query($koneksi, "SELECT tk.* FROM tb_kelas tk JOIN tb_jadwal tj ON tk.id=tj.id_kelas WHERE tj.nip='$_SESSION[nip]' GROUP BY tk.nama");
                      foreach ($q as $kl) {
                      ?>
                      <option value="<?= $kl['id'] ?>" jurusan="<?= $kl['tipe_kelas'] ?>"><?= $kl['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <select name="mapel" id="" class="form-control">
                    <option value="">PIlih Mata Pelajaran</option>
                      <?php
                      $q = mysqli_query($koneksi, "SELECT tm.* FROM tb_mapel tm JOIN tb_jadwal tj ON tm.id=tj.id_mapel WHERE tj.nip='$_SESSION[nip]' GROUP BY tm.nama");
                      foreach ($q as $kl) {
                      ?>
                      <option value="<?= $kl['id'] ?>"><?= $kl['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                          <input type="date" name="start_date" value="<?= date("Y-m-d") ?>" placeholder="tanggal awal" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <input type="date" name="end_date"  value="<?= date("Y-m-d", strtotime("+7days")) ?>" placeholder="tanggal akhir" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="form-group col-md-1">
                        <input type="submit" name="cari" value="cari" class="btn btn-primary btn-block">
                  </div>
                </div>
              </form>
            <h3>Absensi Mapel untuk tanggal <?= date("d-M-Y") ?></h3>
            <a href="form-mapel.php?type=add"><button class="btn btn-primary">Absen</button></a>
            <table class="table table-bordered dataTable" id="dataTable">
                <thead>
                  <tr>
                      <th><input type="checkbox" name="all"  id="check-all"></th>
                      <th>  NIS</th>
                      <th>Nama</th>
                      <?php
                      for ($i=1; $i <=10 ; $i++) {
                      ?>
                      <th>Jam <?= $i ?></th>
                      <?php } ?>
                  </tr>

                </thead>
                <tbody>
                <?php
                $where = "";
                $d = $_POST;
                  if (isset($_POST['cari'])) {
                    $where = " WHERE ";
                    $kelas = $d['kelas'];
                    if ($kelas !='') {
                      $where .=" ta.id_kelas='$kelas' ";
                    }
                    $mapel = $d['mapel'];
                    if ($mapel !='') {
                      if ($kelas !='') {
                        $where .=" AND ta.id_mapel='$mapel' ";
                      }else{
                        $where .=" ta.id_mapel='$mapel' ";
                      }
                    }

                    $start_date = $d['start_date'];
                    $end_date = $d['end_date'];
                    if ($kelas !='' || $mapel !='') {
                      $where .= " AND ta.tanggal BETWEEN '$start_date' AND '$end_date' ";
                    }else{
                      $where .= " ta.tanggal BETWEEN '$start_date' AND '$end_date' ";
                    }
                  }
                    $ql = mysqli_query($koneksi, "SELECT ts.nama, ts.nis, ta.tanggal,ta.status_absen, tm.nama as mapel, ta.id_mapel FROM tb_absen_pelajaran ta JOIN tb_siswa ts on ta.nis=ts.nis JOIN tb_mapel tm ON ta.id_mapel=tm.id $where GROUP BY ta.id_mapel");
                    // echo "SELECT ts.nama, ts.nis, ta.tanggal,ta.status_absen FROM tb_absen_pelajaran ta JOIN tb_siswa ts on ta.nis=ts.nis $where";
                    while($data = mysqli_fetch_array($ql)){

                ?>
                <tr>
                    <td><input type="checkbox"  id="Check1"></td>
                    <td><?= $data["nis"] ?></td>
                    <td><?= $data["nama"] ?></td>
                    <!-- <input type="text" name="kelas" hidden value="<?= $data["id_kelas"] ?>">
                    <input type="text" name="nis" hidden value="<?= $data["nis"] ?>">
                    <td><input type="radio" name="status_hadir" value="hadir" <?= ($data['status_absen'] == 'Hadir' ? 'checked' : '') ?> disabled><?= ($data['status_absen'] == 'Hadir' ? $data['tanggal'] : '') ?></td>
                    <td><input type="radio" name="status_hadir" value="izin" <?= ($data['status_absen'] == 'Izin' ? 'checked' : '') ?> disabled><?= ($data['status_absen'] == 'Izin' ? $data['tanggal'] : '') ?></td>
                    <td><input type="radio" name="status_hadir" value="sakit" <?= ($data['status_absen'] == 'Sakit' ? 'checked' : '') ?> disabled><?= ($data['status_absen'] == 'Sakit' ? $data['tanggal'] : '') ?></td>
                    <td><input type="radio" name="status_hadir" value="alpa" <?= ($data['status_absen'] == 'Alpha' ? 'checked' : '') ?> disabled><?= ($data['status_absen'] == 'Alpha' ? $data['tanggal'] : '') ?></td> -->
                    <?php
                    for ($i=1; $i <=10 ; $i++) {
                      $qur = mysqli_query($koneksi, "SELECT * FROM tb_absen_pelajaran  WHERE jam=$i AND nis='$data[nis]' and id_mapel='$data[id_mapel]'");
                      $d = mysqli_fetch_array($qur);
                    ?>
                    <th><?= $d['status_absen'] ?></th>
                    <?php } ?>
                </tr>
                    <?php } ?>
                    </tbody>
            </table>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php include "../layout/footer.php" ?>
