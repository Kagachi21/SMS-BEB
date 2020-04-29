<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="data-siswa.php">
  <div class="sidebar-brand-icon">
    <i class="fas fa-home"></i>
  </div>
  <div class="sidebar-brand-text mx-3">SMS-BEB</div>
</a>

<!-- Divider -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Menu
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="../siswa/data-siswa.php">
    <i class="fas fa-fw fa-user-friends"></i>
    <span>Data Siswa</span></a>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbsensi" aria-expanded="true"
    aria-controls="collapseAbsensi">
    <i class="fas fa-fw fa-user-friends"></i>
    <span>Absensi</span></a>
    <div id="collapseAbsensi" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="../absensi/absen-harian.php">Absensi Harian</a>
      <a class="collapse-item" href="../absensi/absen-mapel.php">Absensi Mapel</a>
    </div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#guru" aria-expanded="true"
    aria-controls="collapseAbsensi">
    <i class="fas fa-fw fa-user-friends"></i>
    <span>Guru</span></a>
    <div id="guru" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="../guru/guru.php">Guru</a>
      <a class="collapse-item" href="../jadwal/jadwal.php">Jadwal Guru</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" href="../keterangan/surat-keterangan.php">
    <i class="fas fa-fw fa-user-friends"></i>
    <span>Surat Keterangan</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="../keterangan/bk.php">
    <i class="fas fa-fw fa-user-friends"></i>
    <span>Catatan BK</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="../pembayaran/pembayaran.php">
    <i class="fas fa-fw fa-user-friends"></i>
    <span>Pembayaran</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->