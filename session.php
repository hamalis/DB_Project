<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT customer_username FROM customer WHERE customer_username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['customer_username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>