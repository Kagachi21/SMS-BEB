<?php 
    include "../layout/theme.php";
    $data = null;
    if ($_GET['type'] == 'edit') {
        $q = mysqli_query($koneksi, "SELECT * FROM tb_bk where nis='$_GET[nis]'");
        $data = mysqli_fetch_array($q);
        // print_r($data);
    }
    ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Pembayaran</h6>
            </div>
            <div class="card-body">
            <div class="container" style="margin-top:12px;">
          <!-- DataTales Example -->
              <form method="post" action="proses.php?type=<?= $_GET['type'] ?>" enctype="multipart/form-data">
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="">kelas</label>
                              <?php 
                              $kl = postOrOr('id_kelas', $data['id_kelas']);
                              ?>
                              <select  id="" class="form-control">
                                  <option value="">Pilih Kelas</option>
                                  <?php
                                  $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_kelas")or die(mysqli_error($koneksi));
                                  foreach ($query_mysql as $key) {
                                  ?>
                                  <option <?= ($kl == $key['id'] ? 'selected' : '') ?> value="<?= $key['id'] ?>"><?= $key['nama'] ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="">Siswa</label>
                              <?php 
                              $si = postOrOr('nis', $data['nis']);
                              ?>
                              <select name="nis" id="" class="form-control">
                                  <option value="">Pilih Siswa</option>
                                  <?php
                                  $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_siswa")or die(mysqli_error($koneksi));
                                  foreach ($query_mysql as $key) {
                                  ?>
                                  <option <?= ($si == $key['nis'] ? 'selected' : '') ?> value="<?= $key['nis'] ?>"><?= $key['nama'] ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label for="">Jenis</label>
                              <?php 
                              $jn = postOrOr('jenis_pembayaran', $data['jenis_pembayaran']);
                              ?>
                              <select name="jenis_pembayaran" id="" class="form-control">
                                  <option value="">Pilih Jenis</option>
                                  <option value="1">Spp</option>
                                  <option value="2">Study Tour</option>
                                  <option value="3">Lain Lain</option>
                              </select>
                          </div>
                          
                          <div class="form-group col-md-6">
                              <label for="">Jumlah Tagihan</label>
                              <input type="number" min="1" name="jml_tagihan" placeholder="Masukkan Tagihan" class="form-control" value="<?= postOrOr('jml_tagihan', $data['jml_tagihan']) ?>">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="">Deskripsi</label>
                              <textarea name="deskripsi" class="form-control" id="" cols="30" rows="6"></textarea>
                          </div>
                          <div class="form-group col-md-12">
                              <input type="submit"  value="<?= ($_GET['type'] == "add" ? "Tambah" : "Ubah") ?>" class="btn btn-primary btn-block">
                          </div>
                      </div>
                  </form>
                </div>
            </div>
          </div>

        </div>

<?php include "../layout/footer.php" ?>