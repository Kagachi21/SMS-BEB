<?php
    include "../layout/theme.php";
    ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->




          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Data jadwal</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Nama Guru</th>
                      <th scope="col">Mapel</th>
                      <th scope="col">Hari</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Jam ke</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    // memanggil file koneksi.php untuk koneksi database

                    // variabel $query_mysql untuk menyimpan hasil dari fungsi mysqli_query()
                    // mengambil semua data dari tb_siswa
                    $query_mysql = mysqli_query($koneksi, "SELECT tj.id, tb.nama as nama_guru, tj.hari, tj.jam, tm.nama as mapel, tk.nama as kelas FROM tb_jadwal tj JOIN tb_guru tb ON tj.nip=tb.nip JOIN tb_mapel tm ON tj.id_mapel=tm.id JOIN tb_kelas tk ON tk.id=tj.id_kelas WHERE tj.nip='$_SESSION[nip]'")or die(mysqli_error($koneksi));

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
                      <td><?php echo $data['nama_guru']; ?></td>
                      <td><?php echo $data['mapel']; ?></td>
                      <td><?php echo $data['hari']; ?></td>
                      <td><?php echo $data['kelas']; ?></td>
                      <td><?php echo $data['jam']; ?></td>


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

<?php include "../layout/footer.php" ?>
