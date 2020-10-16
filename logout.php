<?php ob_start(); ?>
<?php 


session_start();
session_destroy();

header("location:login.php");

 ?>