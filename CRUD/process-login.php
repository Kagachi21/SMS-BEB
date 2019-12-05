<?php

  ob_start();
  session_start();
  if (isset($_SESSION['akun_user'])) {
      header("location: index.php");
  }
  include "koneksi.php";

  /* PROSES LOGIN */
  if (isset($_POST['submit_login'])) {
      $username = $_POST['username_log'];
      $password = $_POST['password_log'];
      $password_hashed = password_hash($password, PASSWORD_DEFAULT);
      $sql_login = mysqli_query($host, "SELECT * FROM tb_user WHERE username = '$username'");
      $row_akun = mysqli_fetch_array($sql_login);

      if (password_verify($password, $row_akun['password'])) {
          $_SESSION['user_id'] = $row_akun['id'];
          $_SESSION['akun_user'] = $row_akun['username'];
          header("location: index.php");
      } else {
          header("location: login.php");
      }
  }
