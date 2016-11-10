<?php
session_start(); 
/*unset($_SESSION['login_user']); 
header("location: http://localhost/content/HTML/login.php"); */
    session_start();
  session_destroy();
unset($_SESSION);
header("Location: index.php"); 
/*
   if(session_destroy()) {
      header("Location: login.php"); 
   }*/
?>