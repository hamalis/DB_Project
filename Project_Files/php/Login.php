<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT customer_username FROM customer WHERE customer_username = '$myusername' AND password = '$mypassword'";
	  $sql2 = "SELECT admin_username FROM admin WHERE admin_username = '$myusername' AND password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  $result2 = mysqli_query($db,$sql2);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      $count2 = mysqli_num_rows($result2);

      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
    //     session_register("myusername");
         $_SESSION['login_user'] = $myusername;
 
         header("location: welcome.php");
      }
	  else if ($count2 == 1) {
    //     session_register("myusername");
         $_SESSION['login_user'] = $myusername;
 
         header("location: http://localhost/game_portal/admin.php");
	  }
	  else {
         $error = "Your Login Name or Password is invalid";
			echo '<script language="javascript">';
			echo 'alert("Your Login Name or Password is invalid")';
			echo '</script>';
            //header("location: http://localhost/game_portal/index.php");
			header ("refresh:0;url=http://localhost/game_portal/index.php"); 
		 
      }
   }
?>
 