<?php 
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary datatable">Catatan Bk</h6>
                <a href="formbk.php?type=add"><button class="btn btn-primary btn-sm float-right">+ Input Data</button></a>
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
                
                  <div class="form-group col-md-1">
                        <input type="submit" name="cari" value="cari" class="btn btn-primary btn-block">
                  </div>
                </div>
              </form>
              <div class="table-responsive">
                <table class="table table-striped" width="100%">
                    <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Point</th>
                        <th scope="col"
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
                    }
                    // echo "SELECT * FROM tb_keterangan tk JOIn tb_siswa ts ON tk.nis=ts.nis $where";
                  $query = "SELECT SUM(tk.point) as point, ts.* FROM tb_bk tk JOIn tb_siswa ts ON tk.nis=ts.nis $where GROUP BY tk.nis"; // Query untuk menampilkan semua data siswa
                  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    ?>
                    <tr>
                      <td><?=$data['nama']?></td>
                      <td><?=$data['point']?></td>
                      <td><a href='detail.php?id=<?= $data['nis']?>'>Detail</a></td>
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