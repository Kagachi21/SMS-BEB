<?php

     session_start();
     $_SESSION["user_id"];
     $_SESSION["akun_user"];

     unset($_SESSION["user_id"]);
     unset($_SESSION["akun_user"]);

     session_unset();
     session_destroy();

     header("location:login.php");

?>
