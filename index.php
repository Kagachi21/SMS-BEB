<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SMS BEB.com</title>
  <link rel="stylesheet" href="Beranda/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Beranda/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="Beranda/css/styles.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <a class="navbar-brand js-scroll-trigger">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="http://www.sman2jember.sch.id/" class="navbar-brand navbar-link"><img src="Beranda/img/logo2.png"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Galeri Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#info">Informasi Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#news">Fasilitas Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang Kami</a>
          </li>
          <li role="presentation"><a href="#popup" class="button" id="button">Login</a></li>
          <!-- popup -->
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
      <h1>SMA Negeri 2 Jember</h1>
      <p><a href="#" class="btn btn-default" role="button">Informasi</a></p>
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h2 style="text-align:center">Galeri Sekolah</h2>
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="Beranda/img/smada.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="Beranda/img/smada1.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="Beranda/img/smada2.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="Beranda/img/smada3.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="Beranda/img/smada4.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="Beranda/img/smada5.jpg" style="width:100%">
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>

          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor" src="Beranda/img/smada.jpg" style="width:100%" onclick="currentSlide(1)" alt="Halaman Depan">
            </div>
            <div class="column">
              <img class="demo cursor" src="Beranda/img/smada1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Hari Jadi Ke-2">
            </div>
            <div class="column">
              <img class="demo cursor" src="Beranda/img/smada2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Upacara">
            </div>
            <div class="column">
              <img class="demo cursor" src="Beranda/img/smada3.jpg" style="width:100%" onclick="currentSlide(4)" alt="Seragam">
            </div>
            <div class="column">
              <img class="demo cursor" src="Beranda/img/smada4.jpg" style="width:100%" onclick="currentSlide(5)" alt="Foto Pengajar">
            </div>
            <div class="column">
              <img class="demo cursor" src="Beranda/img/smada5.jpg" style="width:100%" onclick="currentSlide(6)" alt="Logo">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- container atas -->

  <!-- container bawah -->
  <div id="info">
  <div class="container bawah">
    <h1>Pengurus Sekolah</h1>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="Beranda/img/gambar 1.jpg" width="200px">
        <h3>KEPALA SEKOLAH</h3>
        <p class="text-center"><strong>Lorem Ipsum</strong>is simply dummy text of the printing and typesetting industry.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="Beranda/img/gambar 1.jpg" width="200px">
        <h3>WAKIL KEPALA SEKOLAH I</h3>
        <p class="text-center"><strong>Lorem Ipsum</strong>is simply dummy text of the printing and typesetting industry.</p>
      </div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="Beranda/img/gambar 1.jpg" width="200px">
        <h3>WAKIL KEPALA SEKOLAH II</h3>
        <p class="text-center"><strong>Lorem Ipsum</strong>is simply dummy text of the printing and typesetting industry.</p>
      </div>
    </div>
  </div>
  <!-- container bawah -->

  <!-- container news -->
  <div id="news">
    <div class="container">
      <h1>Fasilitas Sekolah</h1>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="Beranda/img/f1.jpg">
          <div class="caption">
            <h3>Masjid</h3>
            <hr>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="Beranda/img/f2.jpg">
          <div class="caption">
            <h3>Aula</h3>
            <hr>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="Beranda/img/f3.jpg">
          <div class="caption">
            <h3>Perpustakaan</h3>
            <hr>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="Beranda/img/f4.jpg">
          <div class="caption">
            <h3>Kantin</h3>
            <hr>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container news -->

  <!-- about -->
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="Beranda/img/logo1.png" width="180px"></h1>
        <h2>Tentang Kami</h2>
        <p>SMS BEB adalah sistem monitoring siswa berbasis web yang di buat untuk orang tua wali murid agar bisa memantau atau memonitoring siswa dalam kegiatan di sekolah.</p>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div id="icon"><i class="fa fa-instagram"></i></div>
          <div id="icon"><i class="fa fa-facebook"></i></div>
          <div id="icon"><i class="fa fa-twitter"></i></div>
        </div>
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">SMS BEB. © 2018</h5>
    </div>
  </div>
  <!-- kaki -->

  <script src="Beranda/vendor/jquery/jquery.min.js"></script>
  <script src="Beranda/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Beranda/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="Beranda/js/resume.min.js"></script>

  <script src="Beranda/js/jquery.min.js"></script>
  <script src="Beranda/bootstrap/js/bootstrap.min.js"></script>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
  </script>
</body>

</html>
