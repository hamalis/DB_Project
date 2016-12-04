<?php
//session_start();
session_start();
if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
      // redirect to your login page
      exit();
}

$username = $_SESSION['login_user'];

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
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
 /* Style the buttons that are used to open and close the accordion panel */
button.accordion {
    background-color: transparent;
    color: #8c8c8c;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

/* Style the accordion panel. Note: hidden by default */
div.panel {
  padding: 0 18px;
    background-color: transparent;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
div.panel.show {
 opacity: 1;
    max-height: 2500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
	}
button.accordion:after {
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 2px;
}

button.accordion.active:after {
    content: "\2796"; /* Unicode character for "minus" sign (-) */
}

#content .col-articles .article { padding: 10px; float: left; display: inline; margin: 17px 0 10px 15px; width: 120px; }

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
            <li class="first active first-active"><a href="admin.php">Main</a><span class="sep">&nbsp;</span></li>
		    <li><a href="allgames3.php">All Games</a><span class="sep">&nbsp;</span></li>
            <li><a href="newgames3.php">New Games</a><span class="sep">&nbsp;</span></li>
			<li><a href="consoles3.php">Consoles</a><span class="sep">&nbsp;</span></li>
			<li><a href="accessories3.php">Accessories</a><span class="sep">&nbsp;</span></li>
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
      <!-- Content -->
      <div id="content">
        <div class="block">
          <div class="block-bot">
             <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">  
              <h3>All Games</h3>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <div class="col-articles articles">
            <div class="cl">&nbsp;</div>
           <button class="accordion">PC</button>
<div class="panel">  
 			 <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>
<?php
  	
                $query = "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND platform = 'PC'";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  
	?>	
			<div class="article">
			   <?php $product='"purchase_game.php?ADD=$row[product_id]"' ;?>     
              <div > <?php echo '<img height="120" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4 style="font-size:18px"><?php echo $row["game_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console"><strong>size: <?php echo $row["size_of_game"]; ?></strong></p>
			  <p align="center"><?php echo "<a style='color:#ff4d4d' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'delete_game.php?Delete=$row[product_id]'>Delete</a>" ;?>
			  | <?php echo "<a style='color:green' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'game_edit.php?Delete=$row[game_id]'>Edit</a>" ;?> </p>
            </div>
			 <?php  
                     }  
                } 
else 
{
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center"> Sorry!! </h1>';
echo '<br>';
echo '<br>';
echo '<h1 style="text-align:center"> Games will be availabe soon  </h1>';

echo '<br>';
echo '<br>';

}				
                ?>	
			
			 </div>
						  <script>
// Get the modal
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>

<button class="accordion">XBOX-ONE</button>
<div class="panel">  
 			 <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>
<?php
  	
                $query = "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND platform ='Xbox One'";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  
	?>	
			<div class="article">
			   <?php $product='"purchase_game.php?ADD=$row[product_id]"' ;?>     
              <div > <?php echo '<img height="120" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4  style="font-size:18px"><?php echo $row["game_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console" ><strong>Platform: <?php echo $row["platform"]; ?></strong></p>
			  <p align="center"><?php echo "<a style='color:#ff4d4d' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'delete_game.php?Delete=$row[product_id]'>Delete</a>" ;?>
			  | <?php echo "<a style='color:green' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'game_edit.php?Delete=$row[game_id]'>Edit</a>" ;?> </p>
            </div>
			 <?php  
                     }  
                } 
else 
{
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center"> Sorry!! </h1>';
echo '<br>';
echo '<br>';
echo '<h1 style="text-align:center"> Games will be availabe soon  </h1>';

echo '<br>';
echo '<br>';

}				
                ?>	
			
			 </div>
						  <script>
// Get the modal
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>

<button class="accordion">360</button>
<div class="panel">  
 			 <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>
<?php
  	
                $query = "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND platform ='360'";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  
	?>	
			<div class="article">
			   <?php $product='"purchase_game.php?ADD=$row[product_id]"' ;?>     
              <div > <?php echo '<img height="120" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4  style="font-size:18px"><?php echo $row["game_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console" ><strong>Platform: <?php echo $row["platform"]; ?></strong></p>
			  <p align="center"><?php echo "<a style='color:#ff4d4d' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'delete_game.php?Delete=$row[product_id]'>Delete</a>" ;?>
			  | <?php echo "<a style='color:green' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'game_edit.php?Delete=$row[game_id]'>Edit</a>" ;?> </p>
            </div>
			 <?php  
                     }  
                } 
else 
{
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center"> Sorry!! </h1>';
echo '<br>';
echo '<br>';
echo '<h1 style="text-align:center"> Games will be availabe soon  </h1>';

echo '<br>';
echo '<br>';

}				
                ?>	
			
			 </div>
						  <script>
// Get the modal
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>
<button class="accordion">PS4</button>
<div class="panel">  
 			 <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>
<?php
  	
                $query = "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND platform ='PS4'";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  
	?>	
			<div class="article">
			   <?php $product='"purchase_game.php?ADD=$row[product_id]"' ;?>     
              <div > <?php echo '<img height="120" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4 style="font-size:18px"><?php echo $row["game_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console"><strong>Platform: <?php echo $row["platform"]; ?></strong></p>
			  <p align="center"><?php echo "<a style='color:#ff4d4d' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'delete_game.php?Delete=$row[product_id]'>Delete</a>" ;?>
			  | <?php echo "<a style='color:green' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'game_edit.php?Delete=$row[game_id]'>Edit</a>" ;?> </p>
            </div>
			 <?php  
                     }  
                } 
else 
{
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center"> Sorry!! </h1>';
echo '<br>';
echo '<br>';
echo '<h1 style="text-align:center"> Games will be availabe soon  </h1>';

echo '<br>';
echo '<br>';

}				
                ?>	
			
			 </div>
						  <script>
// Get the modal
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>
<button class="accordion">PS3</button>
<div class="panel">  
 			 <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>
<?php
  	
                $query = "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND platform ='PS3'";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  
	?>	
			<div class="article">
			   <?php $product='"purchase_game.php?ADD=$row[product_id]"' ;?>     
              <div > <?php echo '<img height="120" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4 style="font-size:18px"><?php echo $row["game_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console"><strong>Platform: <?php echo $row["platform"]; ?></strong></p>
			  <p align="center"><?php echo "<a style='color:#ff4d4d' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'delete_game.php?Delete=$row[product_id]'>Delete</a>" ;?>
			  | <?php echo "<a style='color:green' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'game_edit.php?Delete=$row[game_id]'>Edit</a>" ;?> </p>
            </div>
			 <?php  
                     }  
                } 
else 
{
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center"> Sorry!! </h1>';
echo '<br>';
echo '<br>';
echo '<h1 style="text-align:center"> Games will be availabe soon  </h1>';

echo '<br>';
echo '<br>';

}				
                ?>	
			
			 </div>
						  <script>
// Get the modal
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>
<button class="accordion">Wii</button>
<div class="panel">  
 			 <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>
<?php
  	
                $query = "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND platform ='Wii'";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  
	?>	
			<div class="article">
			   <?php $product='"purchase_game.php?ADD=$row[product_id]"' ;?>     
              <div > <?php echo '<img height="120" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4 style="font-size:18px"><?php echo $row["game_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console"><strong>Platform: <?php echo $row["platform"]; ?></strong></p>
			  <p align="center"><?php echo "<a style='color:#ff4d4d' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'delete_game.php?Delete=$row[product_id]'>Delete</a>" ;?>
			  | <?php echo "<a style='color:green' data-confirm='You Sure?' data-method='delete' class='btn btn-danger' href = 'game_edit.php?Delete=$row[game_id]'>Edit</a>" ;?> </p>
            </div>
			 <?php  
                     }  
                } 
else 
{
echo '<br>';
echo '<br>';

echo '<h1 style="text-align:center"> Sorry!! </h1>';
echo '<br>';
echo '<br>';
echo '<h1 style="text-align:center"> Games will be availabe soon  </h1>';

echo '<br>';
echo '<br>';

}				
                ?>	
			
			 </div>
						  <script>
// Get the modal
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>
			
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
        </div>
      </div>
      
     
    </div>
    <!-- / Content -->
    <!--  -->
    <div id="sidebar">
      <!-- Search -->
      <div id="search" class="block">
        <div class="block-bot">
          <div class="block-cnt">
            <form action="search_admin.php" method="post">
              <div class="cl">&nbsp;</div>
              <div class="fieldplace">
                <input name="search" id="search"type="text" class="field" value="Search" title="Search" />
              </div>
              <input type="submit" class="button" value="GO" />
              <div class="cl">&nbsp;</div>
            </form>
          </div>
        </div>
      </div>
      <!-- / Search -->
      <!-- Sign In -->

      <div id="sign" class="block">
      <!-- <div class="cl">&nbsp;</div> --> 
			<div class="card">
			  <img src="img_avatar1.png" alt="Avatar" style="width:100%">
			  <div class="container">
				<h3 style = "text-align: center;"><b><?php  echo $_SESSION['login_user'];?></b></h3> 
				<p align="center"> <a href = "LogoutPage.php">Sign Out</a></p> 
			  </div>
			</div>
			</div>
      <!-- / Sign In -->
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Games</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <img src="css/images/64x64_fifa_ultteam.jpg" alt="" />  </div>
              <div class="cnt">
                <h4>FIFA 17</h4>
                <p>The Journey will pull you through a true-to-life experience in the Premier League.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/OW.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4>OVERWATCH</h4>
                <p>Overwatch ended the crisis, and helped maintain peace in the decades that followed, inspiring an era of exploration, innovation, and discovery.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <img src="css/images/DHPPLYvIImxKLZa-128x128-noPad.jpg" alt="" /></a> </div>
              <div class="cnt">
                <h4>Red Dead Redemption 2</h4>
                <p>"Listen to me. When the time comes, you gotta run and don't look back. This is over."</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="allgames.php" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Top Videos</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="http://all-free-download.com/free-website-templates/"><img src="css/images/img1.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="http://all-free-download.com/free-website-templates/">FALLOUT3</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="http://all-free-download.com/free-website-templates/"><img src="css/images/img2.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="http://all-free-download.com/free-website-templates/">Crysis</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="http://all-free-download.com/free-website-templates/"><img src="css/images/img3.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="http://all-free-download.com/free-website-templates/">F.E.A.R.2</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="http://all-free-download.com/free-website-templates/" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Latest Articles</h3>
            </div>
          </div>
          <div class="text-articles articles">
            <div class="article">
              <h4><a href="http://all-free-download.com/free-website-templates/">Dolor amet sodales leo</a></h4>
              <small class="date">21.07.09</small>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie urna, id scele- risque leo sodales sit amet</p>
            </div>
            <div class="article">
              <h4><a href="http://all-free-download.com/free-website-templates/">Amet sed lorem sit</a></h4>
              <small class="date">20.07.09</small>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="article">
              <h4><a href="http://all-free-download.com/free-website-templates/">Adipsicing elit elementum</a></h4>
              <small class="date">19.07.09</small>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie.</p>
            </div>
            <div class="article">
              <h4><a href="http://all-free-download.com/free-website-templates/">Consectetur elit sed molestie</a></h4>
              <small class="date">15.07.09</small>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie.</p>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="http://all-free-download.com/free-website-templates/" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>
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
