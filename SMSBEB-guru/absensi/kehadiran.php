<table class="table table-bordered dataTable" id="dataTable">
        <thead>
        <tr>
              <th>NIS</th>
              <th>Nama</th>
              <th>
                  Status Kehadiran
              </th>
          </tr>

        </thead>
        <tbody>

        <?php
        $where = "";
        $d = $_POST;
          if (isset($_POST['cari'])) {
            if($d['jenis'] == 'datang'){
              $where = " WHERE ts.id_kelas='$d[kelas]'";
            }else{
              $where = " WHERE ts.id_kelas='$d[kelas]'";
            }
          }

            $ql = mysqli_query($koneksi, "SELECT * FROM tb_siswa ts $where");
            while($data = mysqli_fetch_array($ql)){

        ?>
        <tr>
            <td><?= $data["nis"] ?></td>
            <td><?= $data["nama"] ?></td>
            <input type="text" name="kelas" hidden value="<?= $data["id_kelas"] ?>">
            <input type="text" name="nis[]" hidden value="<?= $data["nis"] ?>">
            <input type="hidden" name="type" value="1">
            <?php
            $now = date('Y-m-d');
            $qs = mysqli_query($koneksi, "SELECT * FROM tb_absen_harian WHERE id_kelas='$data[id_kelas]'");
            $d = mysqli_fetch_array($qs);
            $qcek = mysqli_query($koneksi, "SELECT * FROM tb_absen_harian WHERE tanggal='$now' and nis='$data[nis]' and type='1'");
            $dd = mysqli_fetch_array($qcek);
            ?>
            <td>
            <select name="status_absen[]" id="status_absen" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="Hadir" <?= $dd['status_absen'] == "Hadir" ? 'selected' : '' ?>>Hadir</option>
                    <option value="Hadir(Telat)" <?= $dd['status_absen'] == "Hadir(Telat)" ? 'selected' : '' ?>>Hadir(Telat)</option>
                    <option value="Tidak Hadir" <?= $dd['status_absen'] == "Tidak Hadir" ? 'selected' : '' ?>>Tidak Hadir</option>
                </select>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
