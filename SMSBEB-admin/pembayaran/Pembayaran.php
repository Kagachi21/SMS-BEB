<?php
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <span class="h3 mb-0 text-gray-800">Pembayaran</span>

            <!-- button tambah -->

          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
              Pembayaran </h6>
              <a href="form.php?type=add"><button class="btn btn-primary btn-sm float-right">+ Input Data</button></a>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="row">
                  <div class="form-group col-md-3">
                    <select name="kelas" id="" class="form-control">
                    <option value="">PIlih Kelas</option>
                      <?php
                      $q = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                      foreach ($q as $kl) {
                      ?>
                      <option value="<?= $kl['id'] ?>"><?= $kl['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-1">
                        <input type="submit" name="cari" value="cari" class="btn btn-primary btn-block">
                  </div>
                </div>
              </form>
            <h3>Pembayaran untuk tanggal <?= date("d-M-Y") ?></h3>

            <table class="table table-bordered dataTable" id="dataTable">
               <thead>
                  <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>
                          Action
                      </th>
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
                      $where .=" ts.id_kelas='$kelas' ";
                    }

                  }
                    $ql = mysqli_query($koneksi, "SELECT ta.*, ts.nama, ts.nis FROM tb_pembayaran ta JOIN tb_siswa ts on ta.nis=ts.nis $where GROUP BY ts.nis");
                    while($data = mysqli_fetch_array($ql)){

                ?>
                <tr>
                    <td><?= $data["nis"] ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td>
                      <a href="detail.php?id=<?=$data['nis']  ?>"><button class="btn btn-primary">Detail</button></a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php include "../layout/footer.php" ?>
