<?php
  include('connexiondb.php');
  session_start();
  session_destroy();
  header('location: ../view/index.php');
  exit;
?>