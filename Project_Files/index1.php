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
  
 </style>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 65%;
    border-radius: 5px;
	margin-left: auto;
    margin-right: auto;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 6px 12px;
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
            <div class="block-cnt">
              <div id="slider">
                <div class="buttons"> <span class="prev">prev</span> <span class="next">next</span> </div>
                <div class="holder">
                  <div class="frame">&nbsp;</div>
                  <div class="content">
                    <ul>
                    <li class="fragment">
                      <div class="image">
             <img src="css/images/cod-iw.png" alt="" /> 
                  </div>
                  <div class="cnt">
                    <div class="cl">&nbsp;</div>
                    <div class="side-a">
                      <h3 Style="color: #000;font-weight: bold; font-size: 14px;">COD INFINITE WARFARE</h3>
                      <ul class="rating">
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star empty-star">&nbsp;</span></li>
                        <li><span class="votes">1.456 votes</span></li>
                      </ul>
                    </div>
                    <div class="side-b">
                      <p>Arm yourself with key knowledge about the latest Call of Duty experience - advanced campaign modes, multiplayer tips, zombies survival tricks and fresh details on Jackal Assault VR Experience!</p>
                    </div>
                    <div class="cl">&nbsp;</div>
                  </div>
                  </li>
                  <li class="fragment">
                    <div class="image"> <img src="css/images/722624.jpg" alt="" /> </div>
                    <div class="cnt">
                      <div class="cl">&nbsp;</div>
                      <div class="side-a">
                        <h3 Style="color: #000;font-weight: bold; font-size: 16px;">FIFA 17</h3>
                        <ul class="rating">
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="votes">1.456 votes</span></li>
                        </ul>
                      </div>
                      <div class="side-b">
                        <p>For the first time ever in FIFA, live your story on and off the pitch as the Premier League’s next rising star, Alex Hunter. Play on any club in the Premier League, for authentic managers and alongside some of the best players on the planet.</p>
                      </div>
                      <div class="cl">&nbsp;</div>
                    </div>
                  </li>
                  <li class="fragment">
                    <div class="image"> <img src="css/images/gears-of-war-4-poster.jpeg" alt="" /> </div>
                    <div class="cnt">
                      <div class="cl">&nbsp;</div>
                      <div class="side-a">
                        <h3 Style="color: #000;font-weight: bold; font-size: 16px;">GEARS OF WAR 4</h3>
                        <ul class="rating">
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="votes">1.456 votes</span></li>
                        </ul>
                      </div>
                      <div class="side-b">
                        <p>NEVER FIGHT ALONE. After narrowly escaping an attack on their village, jd fenix and his friends, kait and del, must rescue the ones they love and discover the source of a monstrous new enemy.</p>
                      </div>
                      <div class="cl">&nbsp;</div>
                    </div>
                  </li>
                  <li class="fragment">
                    <div class="image"> <img src="css/images/Watch-Dogs-2-Wallpapers-Marcus-Hacking.jpg" alt="" /> </div>
                    <div class="cnt">
                      <div class="cl">&nbsp;</div>
                      <div class="side-a">
                        <h4>WATCH DOGS II</h4>
                        <ul class="rating">
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="votes">1.456 votes</span></li>
                        </ul>
                      </div>
                      <div class="side-b">
                        <p>< Play as Marcus Holloway, a brilliant young hacker living in the birthplace of the tech revolution, the San Francisco Bay Area />.</p>
                      </div>
                      <div class="cl">&nbsp;</div>
                    </div>
                  </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt"> <a href="consoles.php" class="view-all">view all</a>
              <h3>New Consoles</h3>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <div class="col-articles articles">
            <div class="cl">&nbsp;</div>
            	 <?php
  
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
  	
                $query = "SELECT * , COUNT(*) as TOP FROM console c, console c1, product p WHERE c.product_id = c1.product_id 
							GROUP BY c.product_id,c1.product_id ORDER BY TOP LIMIT 6";  
                  $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
                     
  
	?>
			<div class="article">
              <div class="image"><?php echo '<img src="data:image;base64,'.$row['image'].' ">'; ?>  
			</div>
              <h4><?php echo "".$row['console_type'].""; ?></h4>
             </div>
             <?php }} ?>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
	  
     <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt"> <a href="accessories.php" class="view-all">view all</a>
              <h3>New Accessory</h3>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <div class="col-articles articles">
            <div class="cl">&nbsp;</div>
            	 <?php
  
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
  	
                $query = "SELECT * FROM accessory a, product p WHERE a.product_id = p.product_id ";  
                  $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
                     
  
	?>
			<div class="article">
              <div class="image"> <?php echo '<img src="data:image;base64,'.$row['image'].' ">'; ?>  
			</div>
              <h4> <?php echo "".$row['accessory_name'].""; ?></h4>
             </div>
             <?php }} ?>

             
            <div class="article last-article">
              <div class="cl">&nbsp;</div>
               
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
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
