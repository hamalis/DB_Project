<?php       
include('session.php');

if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM cutomer WHERE customer_username=".$_GET['delete_id'];
 mysql_query($sql_query);
header("Location: editcustomer.php");
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GamePortal</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />

<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
</head>
<body>
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <!-- Top Navigation -->
    <div id="top-nav">
      <ul>
        <li class="home"><a href="admin.php">home</a></li>
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
      <h1><a href="admin.php">game<span>portal</span></a></h1>
      <p class="description">your game zone</p>
    </div>
    <!-- / Logo -->
    <!-- Main Navigation -->
    <div id="main-nav">
      <div class="bg-right">
        <div class="bg-left">
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">community</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">forum</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">video</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">cheats</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">features</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">downloads</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">sports</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">tech</a></li>
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
            <li class="first active first-active"><a href="index1.php">Review</a><span class="sep">&nbsp;</span></li>
		    <li><a href="allgames.php">All Games</a><span class="sep">&nbsp;</span></li>
            <li><a href=" ">Top Games</a><span class="sep">&nbsp;</span></li>
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

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password))
{
		 die('Unable to connect'); //or exit
}
	$query="SELECT first_name,last_name,cutomer_username,email_address FROM `customer` ";
	
	if($is_query_run=mysql_query($query))
	{
		//echo "query executed";
		echo '<table class="table table-striped table-hover ">';
			echo "<thead>";
			echo "<tr>";
			echo "<th>#</th>";
			echo "<th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Username</th>";
			echo "<th>Email</th>";
			echo "</tr>";
			echo "</thead>";
			$a = 1; 
		 while ($query_executed=mysql_fetch_assoc($is_query_run))
		{
		 
 		    echo "<tbody>";
 		    echo "<tr>";
			echo "<td>".$a++."</td>";
			echo "<td>".'<img width="30" height="30" src="assets/img/user.png" alt="Delete" />'."</td>";
			echo "<td>".$query_executed['first_name']."</td>";
			echo "<td>".$query_executed['last_name']."</td>";
			echo "<td>".$query_executed['customer_username']."</td>";
			echo "<td>".$query_executed['email_address']."</td>";
					
			echo '<td align="center"><a href="editcustomer.php?delete_id=$item" onclick="return confirm("sure to delete !"); " ><img src="assets/img/b_drop.png" alt="Delete" /></a></td>';
			
			echo "</tr>";
			echo "</tbody>";

			
		}
		echo "</table>";		
		

	}
	 else
 {
		echo "<tr>";
        echo  '<th colspan="4">There is no data found !!!</th>';
        echo "</tr>";
 }
	}
}

?> 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!-- Footer -->
    <div id="footer">
      <div class="navs">
        <div class="navs-bot">
          <div class="cl">&nbsp;</div>
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">community</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">forum</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">video</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">cheats</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">features</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">downloads</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">sports</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">tech</a></li>
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
      <p class="copy">&copy; gameportal.com. Design by Salman, Anthony, Dyjung</p>
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
 </html>