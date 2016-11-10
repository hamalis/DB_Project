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

	$first = mysql_real_escape_string($_POST["fname"]);
	$last = mysql_real_escape_string($_POST["lname"]);
	$email = mysql_real_escape_string($_POST["email"]);
	$username = mysql_real_escape_string($_POST["username"]);
	$password = mysql_real_escape_string($_POST["password"]);
	$question = mysql_real_escape_string($_POST["question"]);
	$answer = mysql_real_escape_string($_POST["answer"]);
	$streetname = mysql_real_escape_string($_POST["streetname"]);
	$housenum = mysql_real_escape_string($_POST["housenum"]);
	$zip = mysql_real_escape_string($_POST["zip"]);
	$city = mysql_real_escape_string($_POST["city"]);
	$state = mysql_real_escape_string($_POST["state"]);

 
		$db = "INSERT INTO customer (customer_username,password,email_address,security_questions,security_answer,first_name,last_name,street_name,house_number,zip_code,city,state) VALUES ('$username','$password','$email','$question','$answer','$first','$last','$streetname','$housenum','$zip','$city','$state') " ;
 				$q = mysql_query($db);
		if($q)
		{
				//echo "Singup Successfully";
				header( "location: http://localhost/game_portal/thank_you.php" );
 		}
		else
		{
			echo mysql_error();

		}
		 
	}
	else
	{
		die('Unable to connect'); //or exit
	}
}
 
?>
