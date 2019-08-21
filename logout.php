<?php 
session_start();
 if (isset($_SESSION['id'])   && $_SESSION['email1'])  {
    session_destroy();
 }
 header('location:login.php');
?>