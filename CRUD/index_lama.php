<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Mengkoneksi degan bootstrap framework css -->
    <link rel="stylesheet" href="css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD PHP Bootstrap 4</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navigasi atas -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Selamat Datang
            <?php
            session_start();
            if(!isset($_SESSION['user_id'])){
                header("location: login.php");
            }
            echo $_SESSION['akun_user']; 
         ?>
        </a>
    </nav>
    <!-- navigasi atas -->


    <!-- kontainer konten -->
    <div class="container-fluid">
        <!-- baris -->
        <div class="row">

            <!-- tabel mahasiswa-->
            <div class="col-md-12 col-xs-12 tabelsiswa">
                <div class="col">
                    <div class="tabelAtas">
                        <h2>Daftar Data <span class="tittle text-primary">Mahasiswa</span></h2>
                        <button class="btn btn-primary btn-sm btninsert">+ Input Data</button>
                    </div>

                    <div class="table-responsive" style="height: 550px; overflow:auto;">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama Depan</th>
                                    <th scope="col">Nama Belakang</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">
                                        <center><span>Action</span></center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // memanggil file koneksi.php untuk koneksi database
                                    include "koneksi.php";

                                    // variabel $query_mysql untuk menyimpan hasil dari fungsi mysqli_query()
                                    // mengambil semua data dari tb_siswa
                                    $query_mysql = mysqli_query($host, "SELECT * FROM tb_siswa")or die(mysqli_error($host));

                                    // membuat variavel $nomor untuk penomoran baris otomatis tabel
                                    $nomor = 1;

                                    // perulangan untuk mencetak tiap" record dari hasil query
                                    // hasil query tersimpan dalam bentuk array
                                    // digunakan fungsi mysqli_fetch_array() untuk mengambil nilai dari tiap baris record dari array
                                    while($data = mysqli_fetch_array($query_mysql)) {
                                ?>
                                <tr>
                                    <!-- mencetak nomor otomatis, secara increment -->
                                    <td class="bold"><?php echo $nomor++; ?></td>
                                    <!-- mencetak data record dari tb_siswa -->
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nim']; ?></td>
                                    <td><?php echo $data['nama_depan']; ?></td>
                                    <td><?php echo $data['nama_belakang']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                    <td><?php echo $data['kelas']; ?></td>
                                    <td>
                                        <div class="btn btn-group">
                                            <button class="btn btn-success btn-sm editbtn" type="button">Edit</button>
                                            <span>&nbsp</span>
                                            <!-- echo untuk mencetak id tertentu yang akan dihapus -->
                                            <!-- data dikirim ke processhapus.php -->
                                            <a href="processhapus.php?id=<?php echo $data['id']; ?>"
                                                onclick="return confirm('Anda yakin ingin menghapus data?');"><button
                                                    class="btn btn-danger btn-sm" type="button"
                                                    name="delete">Delete</button></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- akhir perulangan while -->
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- tabel akhir -->

                <!-- modal edit-->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <!-- head -->
                            <div class="modal-header">
                                <h5 class="modal-tittle" id="updateModalLabel">Edit Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!-- body -->
                            <div class="modal-body">
                                <form action="processedit.php" method="post" class="needs-validation" novalidate>
                                    <input id="id" type="hidden" name="id">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nim">NIM</label>
                                            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM"
                                                name="nim" required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan NIM anda terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="namaDepan">Nama Depan</label>
                                            <input name="namaDepan" type="text" class="form-control" id="namaDepan"
                                                placeholder="Masukkan Nama Depan" required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan Nama depan anda terlebih dahulu
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="namaBelakang">Nama Belakang</label>
                                            <input name="namaBelakang" type="text" class="form-control"
                                                id="namaBelakang" placeholder="Masukkan Nama Belakang" required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan Nama belakang anda terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="alamat">Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="alamat"
                                                placeholder="Masukkan Alamat Anda" aria-describedby="inputGroupPrepend"
                                                required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan alamat valid anda terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="jKelamin">Jenis Kelamin</label>
                                            <select name="jKelamin" class="custom-select" id="jKelamin" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Pilih Kelas Anda Terlebih Dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="kelasUpdate">Kelas</label>
                                            <select name="kelas" class="custom-select" id="kelasUpdate" required>
                                                <option value="">Pilih kelas</option>
                                                <option value="MIF A">MIF A</option>
                                                <option value="MIF B">MIF B</option>
                                                <option value="MIF C">MIF C</option>
                                                <option value="MIF D">MIF D</option>
                                                <option value="MIF INTERNASIONAL">MIF INTERNASIONAL</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Pilih Kelas Anda Terlebih Dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <!-- footer -->
                                    <div class="modal-footer">
                                        <button name="update" type="submit" value="add" class="btn btn-success"
                                            onclick="return confirm('Anda yakin ingin mengupdate data?');">Update</button>
                                    </div>

                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- modal akhir -->

                <!-- modal input -->
                <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <!-- head -->
                            <div class="modal-header">
                                <h5 class="modal-tittle" id="insertModalLabel">Insert Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!-- body -->
                            <div class="modal-body">
                                <form action="processinput.php" method="post" class="needs-validation" novalidate>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nim">NIM</label>
                                            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM"
                                                name="nim" required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan NIM anda terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="namaDepan">Nama Depan</label>
                                            <input name="namaDepan" type="text" class="form-control" id="namaDepan"
                                                placeholder="Masukkan Nama Depan" required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan Nama depan anda terlebih dahulu
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="namaBelakang">Nama Belakang</label>
                                            <input name="namaBelakang" type="text" class="form-control"
                                                id="namaBelakang" placeholder="Masukkan Nama Belakang" required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan Nama belakang anda terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="alamat">Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="alamat"
                                                placeholder="Masukkan Alamat Anda" aria-describedby="inputGroupPrepend"
                                                required>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Masukkan alamat valid anda terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="jKelamin">Jenis Kelamin</label>
                                            <select name="jKelamin" class="custom-select" id="jKelamin" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Pilih Kelas Anda Terlebih Dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="kelasUpdate">Kelas</label>
                                            <select name="kelas" class="custom-select" id="kelasUpdate" required>
                                                <option value="">Pilih Kelas</option>
                                                <option value="MIF A">MIF A</option>
                                                <option value="MIF B">MIF B</option>
                                                <option value="MIF C">MIF C</option>
                                                <option value="MIF D">MIF D</option>
                                                <option value="MIF INTERNASIONAL">MIF INTERNASIONAL</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Muantull!!
                                            </div>
                                            <div class="invalid-feedback">
                                                Pilih Kelas Anda Terlebih Dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <!-- footer -->
                                    <div class="modal-footer">
                                        <button name="input" type="submit" value="add" class="btn btn-primary"
                                            onclick="return confirm('Anda yakin ingin menyimpan data?');">Input</button>
                                    </div>

                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- modal akhir -->
            </div>
        </div>
    </div>

    <div class="footer">
        Made with love by <a href="www.instagram.com/nadahasnim">nadahasnim</a>
    </div>

    <!-- koneksi kepada jQuery, popper.min.js, dan bootstrap.min.js -->
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- javaScript dan jQuery untuk modal input, modal edit, serta verifikasi pengisian form -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function () {
            $('.editbtn').on('click', function () {
                $('#updateModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[1]);
                $('#nim').val(data[2]);
                $('#namaDepan').val(data[3]);
                $('#namaBelakang').val(data[4]);
                $('#alamat').val(data[5]);
                $('#jKelamin').val(data[6]);
                $('#kelasUpdate').val(data[7]);
            });
        });

        $(document).ready(function () {
            $('.btninsert').on('click', function () {
                $('#insertModal').modal('show');
            });
        });
    </script>
</body>

</html>