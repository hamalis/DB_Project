<?php       
session_start();
if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
      // redirect to your login page
      exit();
}

$username = $_SESSION['login_user'];

// serve the page normally.


$localhost = 'localhost';
$dusername = 'root';
$dpassword = 'root';
$database = 'gp';
$connection = mysql_connect($localhost , $dusername , $dpassword);
mysql_select_db($database, $connection);
//if ($connection->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 

 if (isset($_GET['ADD']))
{
	
	$user = $_GET['ADD'];
	$date = date('Y-m-d H:i:s');
	$db = "INSERT INTO orders(order_id, date_of_order, customer_username)"; 
	$db.= "VALUES(order_id,'$date','$username') " ;
	$q = mysql_query($db);
 	if($q)
	{
		header( "location: shopping_thanks.php" );
 	}
 	else
	{
		echo mysql_error();

	} 
}
 ?> 
<html>
<head>
</head>
<body>
<h1> Test </h1>
</body>
</html>