<?php
    include "../layout/theme.php";
    $data = null;
    if ($_GET['type'] == 'edit') {
        $q = mysqli_query($koneksi, "SELECT * FROM tb_guru where id='$_GET[id]'");
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
                            <label for="">nip</label>
                            <input type="text" name="nip" placeholder="Masukkan nip" class="form-control" value="<?= postOrOr('nip', $data['nip']) ?>">
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
                        <div class="form-group col-md-12">
                            <label for="">alamat</label>
                            <?php
                            if ($_GET['type'] == 'edit') {
                              ?>
                              <input type="hidden" name="id" value="<?= $_GET['id']  ?>">
                              <?php
                            }
                            ?>
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
