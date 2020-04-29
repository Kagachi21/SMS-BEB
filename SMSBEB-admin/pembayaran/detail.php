<?php 
    include "../layout/theme.php";
    $q = mysqli_query($koneksi, "SELECT * FROM tb_siswa where nis='$_GET[id]'");
    $data = mysqli_fetch_array($q);
    ?>
        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <span class="h3 mb-0 text-gray-800">Detail Pembayaran</span>

            <!-- button tambah -->

          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">   
              Detail Pembayaran <?= $data['nama'] ?></h6>
              
            </div>
            <div class="card-body">
            <table class="table table-bordered dataTable" id="dataTable">
               <thead>
                  <tr>
                      <th>Tanggal Pembayaran</th>
                      <th>Jumlah Tagihan</th>
                      <th>Status</th>
                      <th>Jenis</th>
                      <th>Deskripsi</th>
                  </tr>
                  
               </thead>
               <tbody>
               
                <?php
               
                  $jenis = ['', 'spp', 'study tour'];
                    $ql = mysqli_query($koneksi, "SELECT ta.*, ts.nama, ts.nis FROM tb_pembayaran ta JOIN tb_siswa ts on ta.nis=ts.nis where ts.nis='$_GET[id]'");
                    while($data = mysqli_fetch_array($ql)){

                ?>
                <tr>
                    <td><?= $data["tanggal"] ?></td>
                    <td><?= "Rp ".number_format($data["jml_tagihan"]) ?></td>
                    <td><?= "Lunas" ?></td>
                    <td><?= $jenis[$data["jenis_pembayaran"]] ?></td>
                    <td><?= $data["deskripsi"] ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php include "../layout/footer.php" ?>