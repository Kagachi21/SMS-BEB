<?php
  // fungsi mysqli_connect() untuk koneksi ke host
  // disimpan dalam variabel $host
  $host = mysqli_connect("localhost", "root", "");

  // untuk mengkoneksikan dengan database db_sekolah\
  // disimpan dalam variabel $db
  $db = mysqli_select_db($host, "db_sekolah");
