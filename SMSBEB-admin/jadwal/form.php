<?php 
    include "../layout/theme.php";
    $data = null;
    if ($_GET['type'] == 'edit') {
        $q = mysqli_query($koneksi, "SELECT * FROM tb_jadwal where id='$_GET[id]'");
        $data = mysqli_fetch_array($q);
        // print_r($data);
    }
    ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            
                <h6 class="m-0 font-weight-bold text-primary datatable">Form Siswa</h6>
            </div>
            <div class="container" style="margin-top:12px;">
                <form method="post" action="proses.php?type=<?= $_GET['type'] ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Guru</label>
                            <?php 
                            $nip = postOrOr('nip', $data['nip']);
                            if ($_GET['type'] == 'edit') {
                            ?>
                            <input type="hidden" name="id" placeholder="Masukkan id" class="form-control" value="<?= postOrOr('id', $data['id']) ?>">
                            <?php } ?>
                            <select name="nip" id="" class="form-control">
                                <option value="">Pilih Guru</option>
                                <?php
                                $q = mysqli_query($koneksi, "SELECT * FROM tb_guru")or die(mysqli_error($koneksi));
                                foreach ($q as $k) {
                                ?>
                                <option <?= ($nip == $k['nip'] ? 'selected' : '') ?> value="<?= $k['nip'] ?>"><?= $k['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">kelas</label>
                            <?php 
                            $kl = postOrOr('id_kelas', $data['id_kelas']);
                            ?>
                            <select name="id_kelas" id="kelas_change" class="form-control">
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
                            <label for="">Mapel</label>
                            <?php 
                            $map = postOrOr('id_mapel', $data['id_mapel']);
                            ?>
                            <select name="id_mapel" id="mapel" class="form-control">
                                <option value="">Pilih Mapel</option>
                                <?php
                                $qq = mysqli_query($koneksi, "SELECT * FROM tb_mapel")or die(mysqli_error($koneksi));
                                foreach ($qq as $m) {
                                ?>
                                <option <?= ($map == $m['id'] ? 'selected' : '') ?> value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Hari</label>
                            <?php 
                            $h = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                            $hari = postOrOr('hari', $data['hari']);
                            ?>
                            <select name="hari" id="hari" class="form-control">
                                <option value="">Pilih Hari</option>
                                <?php 
                                foreach ($h as $har) {
                                ?>
                                <option <?= ($hari == $har ? 'selected' : '') ?> value="<?= $har ?>"><?= $har ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Jam Ke</label>
                            <?php 
                            $jam = postOrOr('jam', $data['jam']);
                            ?>
                            <select name="jam" id="jam" class="form-control">
                                <option value="">Pilih Jam</option>
                                <?php 
                                for($i = 1; $i < 11; $i++){
                                ?>
                                <option <?= ($jam == $i ? 'selected' : '') ?> value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                    <input type="submit"  value="<?= ($_GET['type'] == "add" ? "Tambah" : "Ubah") ?>" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>

  <?php include "../layout/footer.php" ?>