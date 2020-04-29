<?php 
    include "../layout/theme.php";
    $data = null;
    if ($_GET['type'] == 'edit') {
        $q = mysqli_query($koneksi, "SELECT * FROM tb_siswa where nis='$_GET[nis]'");
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
                            <label for="">Nis</label>
                            <input type="text" name="nis" placeholder="Masukkan nis" class="form-control" value="<?= postOrOr('nis', $data['nis']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">nama</label>
                            <input type="text" name="nama" placeholder="Masukkan nama" class="form-control" value="<?= postOrOr('nama', $data['nama']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">email</label>
                            <input type="email" name="email" placeholder="Masukkan email" class="form-control" value="<?= postOrOr('email', $data['email']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">password</label>
                            <input type="password" name="password" placeholder="Masukkan password" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">jenis kelamin</label>
                            <?php 
                            $jk = postOrOr('jenis_kelamin', $data['jenis_kelamin']);
                            ?>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option <?= ($jk == 1 ? 'selected' : '') ?> value="1">Laki Laki</option>
                                <option <?= ($jk == 0 ? 'selected' : '') ?> value="0">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">id_kelas</label>
                            <?php 
                            $kl = postOrOr('id_kelas', $data['id_kelas']);
                            ?>
                            <select name="id_kelas" id="" class="form-control">
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
                            <label for="">no_hp</label>
                            <input type="text" name="no_hp" placeholder="Masukkan no_hp" class="form-control" value="<?= postOrOr('no_hp', $data['no_hp']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">tempat_lahir</label>
                                    <input type="text" name="tempat_lahir" placeholder="Masukkan tempat_lahir" class="form-control" value="<?= postOrOr('tempat_lahir', $data['tempat_lahir']) ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">tanggal_lahir</label>
                                    <input type="date" name="tanggal_lahir" placeholder="Masukkan tanggal_lahir" class="form-control" value="<?= postOrOr('tanggal_lahir', $data['tanggal_lahir']) ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">foto</label><br>
                            <input type="file" name="foto" placeholder="Masukkan foto" >
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">alamat</label>
                            <textarea name="alamat" id="" class="form-control" cols="30" rows="10"><?= postOrOr('alamat', $data['alamat']) ?></textarea>
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