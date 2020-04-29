<?php 
    include "../layout/theme.php";
    ?>
    <!-- Content Wrapper -->
    
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->




          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Data Siswa</h6>
              <button class="btn btn-primary btn-sm btninsert">+ Input Data</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">NIS</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Jurusan</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Email</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    // memanggil file koneksi.php untuk koneksi database

                    // variabel $query_mysql untuk menyimpan hasil dari fungsi mysqli_query()
                    // mengambil semua data dari tb_siswa
                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_siswa")or die(mysqli_error($koneksi));

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
                      <td><?php echo $data['nis']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['nama_siswa']; ?></td>
                      <td><?php echo $data['jk_siswa']; ?></td>
                      <td><?php echo $data['tempat_lahir']; ?></td>
                      <td><?php echo $data['tanggal_lahir']; ?></td>
                      <td><?php echo $data['jurusan']; ?></td>
                      <td><?php echo $data['id_kelas']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['alamat_siswa']; ?></td>
                      <td>
                        <div class="btn btn-group">
                          <button class="btn btn-success btn-sm editbtn" type="button">Edit</button>
                          <span>&nbsp</span>
                          <!-- echo untuk mencetak id tertentu yang akan dihapus -->
                          <!-- data dikirim ke processhapus.php -->
                          <a href="processhapus.php?id=<?php echo $data['nis']; ?>"
                            onclick="return confirm('Anda yakin ingin menghapus data?');"><button
                              class="btn btn-danger btn-sm" type="button" name="delete">Delete</button></a>
                        </div>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>


        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
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
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan NIS anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Username anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Masukkan Pass" name="password" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Password anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="nama_siswa">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama Lengkap" name="nama_siswa" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Lengkap anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="jk_siswa">Jenis Kelamin</label>
                    <select name="jk_siswa" class="custom-select" id="jk_siswa" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Jenis Kelamin Terlebih Dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir"
                      placeholder="Masukkan Tempat Lahir" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tempat Lahir anda terlebih dahulu
                    </div>
                  </div>

                  <div class="col">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir"
                      placeholder="Masukkan Tanggal Lahir" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tanggal Lahir anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="kelasUpdate">Jurusan</label>
                    <select name="jurusan" class="custom-select" id="kelasUpdate" required>
                      <option value="">Pilih Jurusan</option>
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Jurusan Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="kelasUpdate">Kelas</label>
                    <input type="text" class="form-control" id="id_kelas" placeholder="ID KELAS" name="id_kelas" required>
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
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Masukkan Email"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Email valid anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="alamat_siswa">Alamat</label>
                    <input name="alamat_siswa" type="text" class="form-control" id="alamat_siswa" placeholder="Masukkan Alamat Anda"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Alamat valid anda terlebih dahulu
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
              <form action="processedit.php" method="post" class="needs-validation" novalidate>
                <input id="id" type="hidden" name="id">
                <div class="form-row">
                  <div class="col">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan NIS anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Username anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Masukkan Pass" name="password" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Password anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="nama_siswa">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama Lengkap" name="nama_siswa" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Lengkap anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="jk_siswa">Jenis Kelamin</label>
                    <select name="jk_siswa" class="custom-select" id="jk_siswa" required>
                      <option value="">Pilih Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Jenis Kelamin Terlebih Dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir"
                      placeholder="Masukkan Tempat Lahir" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tempat Lahir anda terlebih dahulu
                    </div>
                  </div>

                  <div class="col">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir"
                      placeholder="Masukkan Tanggal Lahir" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tanggal Lahir anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="kelasUpdate">Jurusan</label>
                    <select name="jurusan" class="custom-select" id="kelasUpdate" required>
                      <option value="">Pilih Jurusan</option>
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Jurusan Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="kelasUpdate">Kelas</label>
                    <input type="text" class="form-control" id="id_kelas" placeholder="ID KELAS" name="id_kelas" required>
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
                    <label for="email">Email</label>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Masukkan Email"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Email valid anda terlebih dahulu
                    </div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col">
                    <label for="alamat_siswa">Alamat</label>
                    <input name="alamat_siswa" type="text" class="form-control" id="alamat_siswa" placeholder="Masukkan Alamat Anda"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Alamat valid anda terlebih dahulu
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
      <!-- modal akhir -
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SMS BEB 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="process-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php include "layout/footer.php" ?>
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
        $('#nis').val(data[1]);
        $('#username').val(data[2]);
        $('#password').val(data[3]);
        $('#nama_siswa').val(data[4]);
        $('#jk_siswa').val(data[5]);
        $('#tempat_lahir').val(data[6]);
        $('#tanggal_lahir').val(data[7]);
        $('#jurusan').val(data[8]);
        $('#id_kelas').val(data[9]);
        $('#email').val(data[10]);
        $('#alamat_siswa').val(data[11]);

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
