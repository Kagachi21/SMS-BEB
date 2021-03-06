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
          <div class="card shadow mb-4">
            <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary datatable">Catatan BK</h6>
          </div>
          <div class="container" style="margin-top:12px;">
          <!-- DataTales Example -->
            <form method="post" action="proses.php?type=<?= $_GET['type'] ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">kelas</label>
                            <?php
                            $kl = postOrOr('id_kelas', $data['id_kelas']);
                            ?>
                            <select  id="kelas" class="form-control">
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
                            <select name="nis" id="siswa" class="form-control">
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
                            $jn = postOrOr('jenis', $data['jenis']);
                            ?>
                            <select name="jenis" id="" class="form-control">
                                <option value="">Pilih Jenis</option>
                                <option value="1">Sedang</option>
                                <option value="2">Berat</option>
                                <option value="3">Sangat Berat</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Tanggal Kejadian</label>
                            <input type="date" name="tanggal" placeholder="Masukkan Tanggal" class="form-control" value="<?= postOrOr('tanggal', $data['tanggal']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Point Pelanggaran</label>
                            <input type="number" min="1" name="point" placeholder="Masukkan Point" class="form-control" value="<?= postOrOr('point', $data['point']) ?>">
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


        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php include "../layout/footer.php" ?>
