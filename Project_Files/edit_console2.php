<?php       
session_start();
if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
      // redirect to your login page
      exit();
}

$username = $_SESSION['login_user'];

// serve the page normally.

 

?> 
<?php




$username = $_SESSION['login_user'];

// serve the page normally.

 
$localhost = 'localhost';
$dusername = 'root';
$dpassword = 'root';
$database = 'gp';
$connection = mysql_connect($localhost , $dusername , $dpassword);
mysql_select_db($database, $connection);
 

 if (isset($_GET['Delete']))
{
	
	$console = $_GET['Delete'];
	$que = mysql_query("Select *  FROM console c, product p WHERE c.console_id = '$console'");
	$row = mysql_fetch_array($que);
 
}

 if (isset($_POST['update']))
{
$cname = mysql_real_escape_string($_POST['cname']);
	 	$productprice = mysql_real_escape_string($_POST['productprice']);
	
	
	$que1 =  "UPDATE console c,product p SET c.console_type ='$cname', p.product_price ='$productprice', p.product_name='$cname' WHERE c.console_id = '$console' AND p.product_id = c.product_id ";
 	$record = mysql_query($que1) or print(mysql_error());
 
	echo "<meta http-equiv='refresh' content = '0;url=admin.php'>";
 
//iterate over all the rows
if($record === FALSE)

echo $record;

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GamePortal</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
 <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
<script src="js/error.js" type="text/javascript"></script>


<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
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
            <li class="first active first-active"><a href="admin.php">Admin Page</a><span class="sep">&nbsp;</span></li>
            
		    <li><a href="allgames.php">All Games</a><span class="sep">&nbsp;</span></li>
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
	  
	  
	  
	<!-- Sign Up -->
	
	<!--<form action="php/signup.php" method="post">
					 <p style=" FONT-SIZE: 40px; text-align:center;"><b>New Member 
                        Sign Up</b>
                      <div name = "content" style="margin-left:150px; margin-right:150px; FONT-SIZE: 20px;margin: auto; display: block;      width: 40%;" ></br><br>
                        &nbsp;first name<br>
                        <input required autocomplete="off" style="font-size: 30px; color: #FFFFFF; font-family: Verdana; background-color: #7D9EB7; border: 1px solid #000000" size="19"  name="fname"><br>
                        &nbsp;last name<br>
                        <input required autocomplete="off" style="font-size: 30px; color: #FFFFFF; font-family: Verdana; background-color: #7D9EB7; border: 1px solid #000000" size="19"  name="lname"><br>
						&nbsp;email<br>
                        <input required autocomplete="off" style="font-size: 30px; color: #FFFFFF; font-family: Verdana; background-color: #7D9EB7; border: 1px solid #000000" size="19"  name="email"><br>
						&nbsp;password<br>
                        <input required autocomplete="off" style="font-size: 30px; color: #FFFFFF; font-family: Verdana; background-color: #7D9EB7; border: 1px solid #000000" size="19"  name="password"><br>
						 
                       <!--  </br></br><p align = "center"><a href= " "> <img src="signuplogo_r470x260.png" style ="width: 50%;"> </a> --><!-- </br></br>
						<!--<p align="center"><input style="BORDER-RIGHT: #000000 0px solid; BORDER-TOP: #000000 0px solid; FONT-SIZE: 20px; BORDER-LEFT: #000000 0px solid; COLOR: #ffffff; BORDER-BOTTOM: #000000 0px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #485e72; top: 8px;" type="submit" value="Create new account" name="B1" id="myBtn"></br></br>-->
						<!--<p align="center"><button id="myBtn" class="button"><span>Register</span></button></br></br>
						</div> 
	</form>	--> 
	
	<!--<form class="form-horizontal">-->
	<form action="<?php $_PHP_SELF ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
  <fieldset>
    <p align="center"><legend>Add a new Console</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Console Name</label>
      <div class="col-lg-10">
        <input name="cname" type="text" class="form-control" id="inputEmail" value="<?php echo $row['console_type'] ?>"  required autocomplete="off">
      </div>
      </div>

	
			<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Product Price</label>
      <div class="col-lg-10">
        <input name="productprice" type="text" class="form-control" id="inputEmail" value="<?php echo $row['product_price'] ?>"  required autocomplete="off">
      </div>
	        </div>
  </fieldset>
  <p align="center"><button class="btn btn-warning" name = "update" id = "update">EDIT</button>

</form>
	
	
 	<!-- / Sign Up -->	
	
	 
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
      <p class="copy">&copy; gameportal.com. Design by Salman, Anthony, Dyjung</p>
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
 </html>