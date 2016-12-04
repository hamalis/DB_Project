<?php       include('session.php');
//session_start();
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
          <li><a  >pc</a></li>
            <li><a  >xbox</a></li>
            <li><a  >360</a></li>
            <li><a  >wii</a></li>
            <li><a  >ps4</a></li>
            <li><a  >ps3</a></li> 
		 
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
            <li class="first active first-active"><a href="admin.php">Home</a><span class="sep">&nbsp;</span></li>
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
            <div class="block-cnt">
                
 	  <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Customers</h3>
  </div>
  <div class="panel-body">
<p align="center"> <img src="css/images/Customers_customer_user_male_man_people_light.png" style="  align-items: center; justify-content:center; width:10%" >  
  </div>
   <p align="center"> <a href="editcustomer.php" >Delete Customer</a> | 
    <a href="customer_history.php" >Customers Orders report</a>   
   </p>

</div>
 
	<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Games</h3>
  </div>
  <div class="panel-body">
<p align="center"><img src="css/images/mario_256.png" style="  align-items: center; justify-content:center; width:10%" > </img></a>     </div>
 <p align="center"> <a href="addgame.php" >Add Game</a> 	|	 <a href="admin_games.php" >Delete Game </a> |	 <a href="edit_games.php" >Edit Game </a></p>
   </div>
 

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Consoles</h3>
  </div>
  <div class="panel-body">
<p align="center"> <img src="css/images/ps4_and_ps4_controller_512.png" style="  align-items: center; justify-content:center; width:10%" > </img>   
</div>
   <p align="center">  <a href="addconsole.php" >Add Console</a> 	|	 <a href="admin_console.php" >Delete Console</a> |	 <a href="edit_console.php" >Edit Console </a></p>
</div>

<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Accessory</h3>
  </div>
  <div class="panel-body">
<p align="center">  <img src="css/images/ps4-overview-lead-image-ds4-01-eu-06sep16.png" style="  align-items: center; justify-content:center; width:10%" > 
 </div>
    <p align="center">  <a href="addaccessory.php" >Add Accessory</a> 	|	 <a href="admin_accessory.php" >Delete Accessory</a>  |	 <a href="edit_accessory.php" >Edit Accessory </a></p>

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
                <input name ="search" id = "search" type="text" class="field" value="Search" title="Search" />
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
        <div class="card">
			  <img src="img_avatar1.png" alt="Avatar" style="width:100%">
			  <div class="container">
				<h4><b><?php  echo $_SESSION['login_user'];?></b></h4> 
				<p><a href = "LogoutPage.php">Sign Out</a></p> 
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
            <a href="allgames.php" class="view-all">view all</a>
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
            
          </ul>
          <ul>
             <li><a  >pc</a></li>
            <li><a  >xbox</a></li>
            <li><a  >360</a></li>
            <li><a  >wii</a></li>
            <li><a  >ps4</a></li>
            <li><a  >ps3</a></li> 
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
