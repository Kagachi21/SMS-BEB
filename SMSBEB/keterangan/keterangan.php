<?php 
include "../layout/head.php";
?>
<!-- tampilan Profil -->
  <div class="container-fluid p-0">

  <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="harian">
      <div class="w-100">
        <div class="container">
          <h2 class="mb-5">Keterangan</h2>
        
        <br>
        <br>
            <a href="form.php">Tambah </a>
        <table class="table table-striped" class="tabel" id="expandTab">
          <tr>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Foto</th>
          </tr>
          <?php 
          $queryKelas = mysqli_query($koneksi, "SELECT * FROM tb_keterangan tk where tk.nis='$nis'");
            foreach ($queryKelas as $k) {
          ?>
          <tr style="text-align:center">
            <td><?= $k['tanggal']  ?></td>
            <td><?= $k['jenis']  ?></td>
            <td ><img src="../../foto/surat/<?= $k['foto']  ?>" style="width:100px" alt=""></td>
          </tr>
        <?php } ?>
        </table>
        <br>
      </div>
      </div>
    </section>
  </div>
  <!-- tampilan Profil -->
  <?php 
include "../layout/footer.php";
?>