<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = 'root';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password))
{
		 die('Unable to connect'); //or exit
}
else
{
	if(@mysql_select_db('gp'))
	{
		$username = $_POST["username"];
		$question = $_POST["question"];
		$answer = $_POST["answer"];
		$pass1 = $_POST["pass1"];
		$pass2 = $_POST["pass2"];
		
		$que = "SELECT security_answer FROM customer where customer_username = '$username' AND security_questions = '$question'"; 
		$result = mysql_query($que);
		if(mysql_num_rows($result) > 0){
			while($row = mysql_fetch_array($result))
			{
				$answerORI = $row["security_answer"];
				if ($answer == $answerORI){
					if ($pass1 == $pass2){
						$queUpdate = "UPDATE customer SET password = '$pass1' where customer_username = '$username'";
						mysql_query($queUpdate);
						echo '<script language="javascript">';
						echo 'alert("Your password has been reset")';
						echo '</script>';
						header ("refresh:0;url=http://localhost/game_portal/index.php");
					}else{
						echo '<script language="javascript">';
						echo 'alert("Make sure your two passwords are same.")';
						echo '</script>';
						header ("refresh:0;url=http://localhost/game_portal/resetPassword.php");
					}
				}else{
					echo '<script language="javascript">';
					echo 'alert("Your answer does not match, please try again.")';
					echo '</script>';
					header ("refresh:0;url=http://localhost/game_portal/resetPassword.php");
				}
			}
		}else{
			$error = "";
			echo '<script language="javascript">';
			echo 'alert("Invalid username or question, please try again.")';
			echo '</script>';
			header ("refresh:0;url=http://localhost/game_portal/resetPassword.php");
		}
	}else{
		die('Unable to connect'); //or exit
	}
}
?>