<?php       
session_start();
if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
      // redirect to your login page
      exit();
}

$username = $_SESSION['login_user'];

// serve the page normally.

 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GamePortal</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
<style> 
 element.style {
}
.btn {
    font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.btn-danger {
    color: #ffffff;
    background-color: #d9534f;
    border-color: #d9534f;
}
.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 8px 12px;
    font-size: 16px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
a {
    color: #4582ec;
    text-decoration: none;
}
a {
    background-color: transparent;
}
 
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    text-decoration: underline;
    cursor: auto;
}
  h1 { color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 175px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }

h2 { color: #e6f2ff; font-family: 'Open Sans', sans-serif; font-size: 30px; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center; }

p { color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 18px; line-height: 12px; margin: 0 0 30px; text-align: center; text-justify: inter-word; }
 </style>
</head>
<body>
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <!-- Top Navigation -->
    <div id="top-nav">
      <ul>
        <li class="home"><a href="index1.php">home</a></li>
        <li><a href="pc.php">pc</a></li>
        <li><a href="xbox.php">xbox</a></li>
        <li><a href="360.php">360</a></li>
        <li><a href="wii.php">wii</a></li>
        <li><a href="ps4.php">ps4</a></li>
        <li><a href="ps3.php">ps3</a></li>
        </ul>
    </div>
    <!-- / Top Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Logo -->
    <div id="logo">
      <h1><a href="index1.php">game<span>portal</span></a></h1>
      <p class="description">your game zone</p>
    </div>
    <!-- / Logo -->
    <!-- Main Navigation -->
    <div id="main-nav">
      <div class="bg-right">
        <div class="bg-left">
          <ul>
           
          </ul>
        </div>
      </div>
    </div>
    <!-- / Main Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Sort Navigation -->
    <div id="sort-nav">
      <div class="bg-right">
        <div class="bg-left">
          <div class="cl">&nbsp;</div>
          <ul>
            <li class="first active first-active"><a href="index1.php">Main</a><span class="sep">&nbsp;</span></li>
		    <li><a href="allgames2.php">All Games</a><span class="sep">&nbsp;</span></li>
            <li><a href="newgames.php">New Games</a><span class="sep">&nbsp;</span></li>
			<li><a href="consoles.php">Consoles</a><span class="sep">&nbsp;</span></li>
			<li><a href="accessories.php">Accessories</a><span class="sep">&nbsp;</span></li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
    </div>
    <!-- / Sort Navigation -->
  </div>
  <!-- / Header -->
  <!-- Main -->
  <div id="main">
    <div id="main-bot">
      <div class="cl">&nbsp;</div>
	  
	  
	  
	  </br> 
	  <div>
<?php	 
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
	
	
	$db = "INSERT IGNORE INTO orders(order_id, date_of_order, customer_username)"; 
	$db.= "VALUES(order_id,'$date','$username')" ;
  	
	//$order = "mysqli_insert_id($connection);";
	//$order = "SELECT LAST_INSERT_ID()";
	//$db2 = "INSERT INTO items_ordered (product_id,order_id) VALUES('$user', order_id)";

	$db2 = "INSERT IGNORE INTO items_ordered(product_id,order_id)"; 
	$db2.= "VALUES('$user', LAST_INSERT_ID()) " ;
	$q = mysql_query($db);
	$q2 = mysql_query($db2);
 
 
 	if($q)
	{
		if($q2)
		//header( "location: index1.php" );
	$db3 = "SELECT email_address FROM customer WHERE customer_username = '$username' "; 
		$q3 = mysql_query($db3);
		$query_executed=mysql_fetch_assoc($q3);
		if($query_executed > 0) 
			
	{
		
	echo '<h1>Thank you</h1>';
	echo '<h2>Thank you for shooping with <a href= "index1.php">Game_Portal</a> </h2> ';
    echo '<p style="text-align:center"> Your order confirmation will be sent to your email address : '.$query_executed["email_address"].'</p>'; 
	}
 	}
 	else
	{
		echo mysql_error();

	} 
}
 ?>
 


	
	  </div>
	  </br>
	  </br>
	  
	  
	  
	  
	  
	  
	  
	  
	  <!-- Footer -->
    <div id="footer">
      <div class="navs">
        <div class="navs-bot">
          <div class="cl">&nbsp;</div>
          <ul>
            
          </ul>
          <ul>
            <li><a href="pc.php">pc</a></li>
            <li><a href="xbox.php">xbox</a></li>
            <li><a href="360.php">360</a></li>
            <li><a href="wii.php">wii</a></li>
            <li><a href="ps4.php">ps4</a></li>
            <li><a href="ps3.php">ps3</a></li> 
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
      <p class="copy">&copy; gameportal.com. Design by Salman</p>
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
 </html>
<html> 
<head>
</head> 

<body> 



</body> 
</html> 