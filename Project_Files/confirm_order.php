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
.btn-warning {
    color: #ffffff;
    background-color: #f0ad4e;
    border-color: #f0ad4e;
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
    max-height: 500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
	}
button.accordion:after {
    content: '\02795'; /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2796"; /* Unicode character for "minus" sign (-) */
}
.btn-success {
    color: #ffffff;
    background-color: #3fad46;
    border-color: #3fad46;
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
            <li><?php echo "<a href = 'customeredit.php?Edit=$username'>Profile</a>";?> </li>
            <li><?php echo "<a href = 'order_history.php?Edit=$username'>Order History</a>"; ?></li>
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
      <!-- Content -->
      <div id="content">
        <div class="block">
          <div class="block-bot">
             <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">  
              <h3>Confirmation</h3>
              <div class="cl" >&nbsp;</div>
            </div>
          </div>
          <div class="col-articles articles">
		  <br>
		  <h1 style="text-align:center; color:yellow"> <strong>Please confirm your order: </strong></h1>
		<br><br> 
            <div class="cl">&nbsp;</div>
            
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
	
	$query = "SELECT * FROM game g, product p, customer c WHERE g.product_id = p.product_id AND p.product_id ='$user' AND c.customer_username = '$username'"; 
 	$result = mysql_query($query);  
	
	$query2 = "SELECT RIGHT(bank_account,4) FROM customer";
 	$result2 = mysql_query($query2);  
	
	//$query2 = "SELECT RIGHT(bank_account, 4); as account FROM customer where c.customer_username = '$username'";
	//$q = mysql_query($query2);
                 if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
		?> 
			<div class="article">
			    
              <div class="image"><?php echo '<img   src="data:image;base64,'.$row['image'].' ">'; ?> </div>
			    
			    
              <h4><?php echo $row["product_name"]; ?></h4>
              <p class="console"><strong>$ <?php echo $row["product_price"]; ?></strong></p>
			  <p class="console"><strong>Platform: <?php echo $row["platform"]; ?></strong></p>
			  
			  
               
 	

            </div>
							 <br>
				 <h2 style="text-indent: 20px;color:darksalmon;font-size:25px;"> <strong>Your shipping Address: </strong></h2>
			  <h5 class="console" style="text-indent: 20px;font-size:15px;"><?php echo $row["street_name"]; ?> <?php echo $row["house_number"];?>  , <?php echo $row["city"]; ?> <?php echo $row["zip_code"]; ?>, <?php echo $row["state"]; ?></h5>
								<h2 style="text-indent: 20px;color:darksalmon;font-size:25px;"> <strong>Your credit and debit cards: </strong></h2>
								<?php if(mysql_num_rows($result2) > 0){
									echo '<h5 class="console" style="text-indent: 20px;font-size:15px;"><b>Account</b> ending in '.substr($row["bank_account"],4).'</h5>';
								}?> 

				<?php //if($q)
	//{?>

				<h4 class="console"><?php //echo $row["bank_account"]; ?> </h4> 
		<?php //}?> 
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<p style ="text-align:center" ><a class="btn btn-success" href=<?php echo "shopping_thanks.php?ADD=$row[product_id]";?>>Confirm Order</a> 

									 <!-- <h1 style="text-indent: 20px; color:red"><a href=Confirm Order</a></h1> --> 
			

	<?php
	
	 }  
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
			

<br><br>		
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
            <form action="search_user.php" method="post">
              <div class="cl">&nbsp;</div>
              <div class="fieldplace">
                <input name="search" id="search" type="text" class="field" value="Search" title="Search" />
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
			  <img src="img_avatar.png" alt="Avatar" style="width:100%">
			  <div class="container">
				<h3 style = "text-align: center;"><b><?php  echo $_SESSION['login_user'];?></b></h3> 
				<p align="center"><?php echo "<a href = 'customeredit.php?Edit=$username'>Edit</a>"; ?> 
	|	<a href = "LogoutPage.php">Sign Out</a></p> 
			  </div>
			</div>
			</div>
      <!-- / Sign In -->
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
               <h3>Editor`s Pick</h3>
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
            <a href="allgames2.php" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
            <h3>Coming Soon</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/3max.jpg" alt="" /> </div>
              <div class="cnt">
                <h4>PS4 FINAL FANTASY XV</h4>
                <p>PlayStation 4 Slim 1TB FINAL FANTASY XV Limited Edition. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/129536brp.jpg" alt="" /> </div>
              <div class="cnt">
                <h4>Sniper Ghost Warrior 3</h4>
                <p>Sniper Ghost Warrior 3 Limited Edition. Pre-order Sniper Ghost Warrior 3 now and receive the single player campaign "The Escape of Lydia" and two unique weapons skins. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/dead-rising-4-box-art-555x725.png" alt="" /> </div>
              <div class="cnt">
                <h4>Dead Rising 4</h4>
                <p> The ultimate zombie slayer returns home for the holidays!. Frank West returns in an all-new chapter of one of the most popular zombie game franchises of all time. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
            <p class="view-all" style="font-size:1px">.</p>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
             <h3>Latest News</h3>
            </div>
          </div>
          <div class="text-articles articles">
            <div class="article">
              <h4>Uncharted 4 Co-Op Mode Revealed With New Trailer</h4>
              <small class="date">November 21, 2016</small>
              <p>As part of Naughty Dog's ongoing support for Uncharted 4, the developer today announced the game's next feature: co-op. Uncharted 4: Survival, as it's called, is a new wave-based mode where you and up to two others can fight off waves of increasingly difficult enemies. This can also be played solo.</p>
            </div>
            <div class="article">
              <h4>Resident Evil 7's $180 CE Comes With Creepy Music Box, Severed Finger USB Drive</h4>
              <small class="date">November 21, 2016</small>
              <p>Resident Evil 7 is getting a GameStop-exclusive collector's edition--and it looks pretty cool. The centerpiece of the $180 bundle is a 8-inch tall Mansion Music Box that plays a sample of the game's theme song, "Aunt Rhody." There are LED effects that are synced up with the music.</p>
            </div>
            <div class="article">
              <h4>Sony Confirms Black Friday PSN Sale With a Bizarre Video</h4>
              <small class="date">November 19, 2016</small>
              <p>Deals will start on Thursday, at least in Europe. That Sony will offer Black Friday deals on the PlayStation Store this year should come as no real surprise. The way in which it shared that news, though, is a bit odd.</p>
            </div>
            <div class="article">
              <h4>Xbox Live's Black Friday Sale Begins Tomorrow, Offers 250-Plus Deals</h4>
              <small class="date">November 17, 2016</small>
              <p>The Xbox Store's Black Friday sale kicks off tomorrow, November 18, a full week before the real Black Friday, on November 25. Microsoft still hasn't released a full list of the deals for its Black Friday sale, but the company has now put out a new video that teases what to expect from the sale. </p>
            </div>
            <div class="cl">&nbsp;</div>
            <p class="view-all" style="font-size:1px">.</p>
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
      <p class="copy">&copy; gameportal.com. Design by Salman</p>
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
 </html>
