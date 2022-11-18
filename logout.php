<?php
  require_once "functions/init.php";
  session_destroy();

  header('Location: login.php');
?>
