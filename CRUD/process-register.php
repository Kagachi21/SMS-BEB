<?php
  include 'koneksi.php';
  $first_name = $_POST['first_name_reg'];
  $last_name = $_POST['last_name_reg'];
  $username = $_POST['username_reg'];
  $password = $_POST['password_reg'];
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($host, "INSERT INTO tb_user VALUES('','$first_name','$last_name','$username','$password_hash')");

  if(mysqli_affected_rows($host) > 0){
    echo "
      <script>
        alert ('Berhasil membuat akun');
        document.location.href = 'login.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert ('Gagal membuat akun');
        document.location.href = 'register.php';
      </script>
    ";
  }
?>
