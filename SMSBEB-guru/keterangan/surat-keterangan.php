<?php
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Surat Keterangan</h6>

            </div>
            <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                  <div class="form-group col-md-2">
                    <select name="kelas" id="" class="form-control">
                    <option value="">PIlih Kelas</option>
                      <?php
                      $q = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                      foreach ($q as $kl) {
                      ?>
                      <option value="<?= $kl['id'] ?>" jurusan="<?= $kl['tipe_kelas'] ?>"><?= $kl['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <select name="jenis" id="" class="form-control">
                      <option value="">PIlih Jenis</option>
                      <option value="Ijin">Ijin</option>
                      <option value="Sakit">Sakit</option>
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
              <div class="table-responsive">
                  <table class="table table-striped" width="100%">
                     <thead>
                        <tr>
                              <th>Nama</th>
                              <th>Foto</th>
                              <th>Tanggal</th>
                              <th>Keterangan</th>
                              <th >
                              <center><span>Action</span></center>
                            </th>
                        </tr>
                     </thead>
                     <tbody>
                  <?php
                  // Load file koneksi.php
                  $where = "";
                  $d = $_POST;
                    if (isset($_POST['cari'])) {
                      $where = " WHERE ";
                      $kelas = $d['kelas'];
                      if ($kelas !='') {
                        $where .=" ts.id_kelas='$kelas' ";
                      }
                      $jenis = $d['jenis'];
                      if ($jenis !='') {
                        if ($kelas !='') {
                          $where .=" AND tk.jenis='$jenis' ";
                        }else{
                          $where .=" tk.jenis='$jenis' ";
                        }
                      }
                      $start_date = $d['start_date'];
                      $end_date = $d['end_date'];
                      if ($jenis !='' || $kelas !='') {
                        $where .= " AND tk.tanggal BETWEEN '$start_date' AND '$end_date' ";
                      }else{
                        $where .= " tk.tanggal BETWEEN '$start_date' AND '$end_date' ";
                      }
                    }
                    // echo "SELECT * FROM tb_keterangan tk JOIn tb_siswa ts ON tk.nis=ts.nis $where";
                  $query = "SELECT tk.*, ts.nama,ts.nis FROM tb_keterangan tk JOIn tb_siswa ts ON tk.nis=ts.nis $where"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    ?>
                    <tr>
                      <td><?=$data['nama']?></td>
                      <td><a class="image-link" href='../../foto/surat/<?= $data['foto']?>'><img src='../../foto/surat/<?= $data['foto']?>' width='100' height='100'></a></td>
                      <td><?=$data['tanggal']?>"</td>
                      <td><?=$data['jenis']?>"</td>
                      <td><a href='hapus.php?id=<?= $data['id']?>'>Hapus</a></td>
                      </tr>
                      <?php
                  }
                  ?>
                  </tbody>
                  </table>
                </table>
              </div>
            </div>
          </div>

        </div>
        <?php include "../layout/footer.php" ?>
