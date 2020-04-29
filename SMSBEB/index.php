<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SMS Beb</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Beranda/css/styles.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="https://ibb.co/2KTW7RX"><img src="../foto/smada.jpg" alt="Shinobu-Chan" border="" width="40" height="40" style="float:left;"/><a href="#intro" class="scrollto">SMS Beb</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#fasilitas">Fasiltas</a></li>
          <li><a href="#testimonials">Lulusan</a></li>
          <li><a href="#footer">Tentang</a></li>
          <li><a href="#popup" >Login</a></li></li>
        </ul>
        <div id="popup">
            <div class="window">
                <a href="#" class="close-button" title="Close">X</a>
                <img src="Beranda/img/sms2.png" alt="User" class="user">
                <form action="cek_login.php" method="post">
                  <i class="fa fa-user"></i>
                  <input type="text" name="username" class="form_login" placeholder="Username .." required>
                  <br>
                  <i class="fa fa-lock"></i>
                  <input type="password" name="password" class="form_login" placeholder="Password .." required>
                  <br>
                  <input type="submit" class="tombol_login" value="LOGIN">
                  <br>
                  <p>
              			Belum Punya akun ? <a href="daftarakun.php">Daftar</a>
              		</p>

                  <?php
                  if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                    }
                  }
                  ?>

                </form>
              </div>
            </div>
            <!-- popup -->

      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

          <div class="carousel-item active">
            <div class="carousel-container">
              <div class="carousel-content">
                <p>Aplikasi Berbasis Web yang berfungsi membantu orang tua dalam memonitoring perilaku anak.</p>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

<!--==========================
      Side Bar
    ============================-->
    <div id="wrapper">
        <div id="sidebar">
            <div class="img">
                <img src="http://www.sman2jember.sch.id/wp-content/uploads/49560034_322704755245028_2349007563682480128_n-768x510.jpg" alt="" class="img-fluid">
              </div>
              <h1></h1>
               <center> <h2>Kepala Sekolah</h2></center>
                <center><p>
                  Assalamu‘alaikum Warahmatullahi Wabarakatuh</p></center>
              <p>
                  Alhamdulillahi robbil alamin, puji syukur kami panjatkan kehadirat Allah SWT, atas rahmat dan ridhonya  sehingga Website sekolah ini masih bisa diakses oleh civitasakademika maupun masyarkat pada umumnya. Saya berharap Website ini bisa memberikan informasi secara lengkap tentang sekolah.
                  Mengawali tahun pelajaran baru kami selaku pimpinan sekolah mengucapkan selamat kepada siswa baru yang telah diterima di SMAN 2 Jember. Kami berharap kalian segera bisa menyesuaikan diri dan mampu belajar dengan tekun dan rajin untuk meraih cita-cita yang kalian inginkan.
              </p>
              <p>
                  Terima kasih semoga Allah selalui melindungi kita semua.  Aamiin.
              </p>
        </div>
   </div>
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
          <div id="home">
              <div class="isi">
                <div class="container atas">

        <header class="section-header">
          <h3>Informasi</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/IMG_20180418_164409-1024x576.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Pemenang Lomba</a></h2>
              <p>Alhamdulillah kami sampaikan selamat kpd ananda Hanun siswa dari kelas 10ips1 SMA Negeri 2 Jember yg tadi sore (18/04/2018)  telah berhasil meraih juara 1 Olimpiade Ekonomi yg diselenggarakan oleh Universitas Islam Jember (UIJ). Terimakasih jg atas dukungan dari pihak Bank Jatim Syariah Jember,Bank Muamalah Jember, Otoritas Jasa Keuangan (OJK) Jember
Terimakasih jg kpd ananda Shania dari kls 11mipa4 yg td juga berjuang hingga babak semifinal yg seru. Tetap semangat berlatih untuk project selanjutnya ya. </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/314416.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Lomba Menulis</a></h2>
              <p>Dalam setiap lomba menulis, tentunya ada poin-poin utama yang menjadi dasar penilaian bagi para juri. Ada panitia yang terang-terangan mencantumkan poin tersebut agar diketahui para peserta lomba. Ada yang sekadar menuliskan syarat-syarat yang harus dipenuhi peserta. Termasuk durasi lomba dan hadiahnya.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="fasilitas" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><font color="White"> Fasilitas </font></h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

        	<div class="fasilitas-item">
            <img src="img/clients/fasilitas1.jpg" alt="">
            <h3><font color="White">Masjid</font></h3>
            <p> <font color="White">
              Semenjak selesai dibangun tahun lalu, masjid di sekolah ini memiliki banyak kegiatan di samping sebagai sarana beribadaha, suasana yang nyaman juga dapat dijadikan sebagai kegiatan sekolah yang lainnya
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas2.jpg" alt="">
            <h3><font color="White">Penataan Ruang Kelas</font></h3>
            <p> <font color="White">
              Ruang kelas tertata rapi lengkap dengan tempat sampah yang diletakkan di depan tiap ruang kelas
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas3.jpg" alt="">
            <h3><font color="White">Sistem Mengajar</font></h3>
            <p> <font color="White">
              Guru tidak hanya mengajar satu arah, tapi juga mengubah mind set siswa untuk aktif dalam kegiatan pembelajaran
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas4.jpg" alt="">
            <h3><font color="White">Laboratorium IPA</font></h3>
           <p> <font color="White">
              Peralatan Laboratorium yang sudah dilengkapi dengan alat-alat pembelajaran yang memadai
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas5.jpg" alt="">
            <h3><font color="White">Pembelajaran di Lab</font></h3>
            <p> <font color="White">
              Pembelajaran di dalam Lab selalu dalam diawasi dan dibimbing oleh guru-guru
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas6.jpg" alt="">
            <h3><font color="White">Jas Lab</font></h3>
            <p> <font color="White">
              Selalu menggunakan jas laboratorium saat berada di Lab agar pakaian tidak terkontaminasi cairan atau bahan lain di lab
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas7.jpg" alt="">
            <h3><font color="White">Lab Komputer</font></h3>
            <p> <font color="White">
              Dalam menjalankan Ujian, SMA ini tidak lagi menggunakan sistem kertas, melainkan dengan komputer yang disediakan di lab
              </font>
            </p>
            </p>
          </div>

          <div class="fasilitas-item">
            <img src="img/clients/fasilitas8.jpg" alt="">
            <h3><font color="White">Sosialisasi Mahasiswa</font></h3>
            <p> <font color="White">
              Setiap setahun sekali, ada beberapa siswa alumni yang memberikna informasi kepada adik kelas mereka mengenai kehidupan di kampus
              </font>
            </p>
          </div>
         </div>
      </div>
    </section><!-- #clients -->

    <!--==========================
      Lulusan Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><font color="White"> Lulusan </font></h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3><font color="White">Saul Goodman</font></h3>
            <h4>Tahun 2004</h4>
            <p> <font color="White">
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </font>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3><font color="White">Sara Wilsson</font></h3>
            <h4>Tahun 2006</h4>
            <p><font color="White">
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </font>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3><font color="White">Jena Karlis</font></h3>
            <h4>Tahun 2009</h4>
            <p><font color="White">
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </font>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3><font color="White">Matt Brandon</font></h3>
            <h4>Tahun 2012</h4>
            <p><font color="White">
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </font>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3><font color="White">John Larson</font></h3>
            <h4>Tahun 2016</h4>
            <p><font color="White">
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </font>
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h1>SMS BEB</h1>
            <p>Apa itu SMS BEB ?</p>
            <p>&nbsp;</p>
            <p>SMS BEB adalah Aplikasi berbasis WEB yang gunanya untuk mengamati atau memonitoring siswa melalui WEB. Untuk mencegah siswa berperilaku buruk yang menyebabkan jeleknya nama baik.</p>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Jawa No.16, Tegal Boto Lor, Sumbersari <br>
              Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121<br>
              Indonesia <br>
              <strong>Phone:</strong> (0331) 321375<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Location</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3302064384825!2d113.71165911438077!3d-8.169449484131805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695cd4a10f679%3A0x413e8c44fb9d2ff7!2sSMA%20Negeri%202%20Jember!5e0!3m2!1sid!2sid!4v1575434785939!5m2!1sid!2sid" width="250" height="275" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>

        </div>
      </div>
    </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <!-- <script src="lib/jquery/jquery-migrate.min.js"></script> -->
  <!-- <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="lib/easing/easing.min.js"></script> -->
  <!-- <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/superfish.min.js"></script> -->
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script> -->
  <!-- Contact Form JavaScript File -->
  <!-- <script src="contactform/contactform.js"></script> -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
