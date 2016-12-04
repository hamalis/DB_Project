
 
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
        <li class="home"><a href="index.php">home</a></li>
        <li><a>pc</a></li>
        <li><a>xbox</a></li>
        <li><a>360</a></li>
        <li><a>wii</a></li>
        <li><a>ps4</a></li>
        <li><a>ps3</a></li>
 
        </ul>
    </div>
    <!-- / Top Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Logo -->
    <div id="logo">
      <h1><a href="index.php">game<span>portal</span></a></h1>
      <p class="description">your game zone</p>
    </div>
    <!-- / Logo -->
    <!-- Main Navigation -->
    <div id="main-nav">
      <div class="bg-right">
        <div class="bg-left">
          <ul>
           <!-- <li><a href="http://all-free-download.com/free-website-templates/">community</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">forum</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">video</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">cheats</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">features</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">downloads</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">sports</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">tech</a></li> --> 
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
            <li class="first active first-active"><a href="index.php">Main</a><span class="sep">&nbsp;</span></li>
		    <li><a href="allgames.php">All Games</a><span class="sep">&nbsp;</span></li>
            <li><a href="newgames_public.php">New Games</a><span class="sep">&nbsp;</span></li>
			<li><a href="consoles_public.php">Consoles</a><span class="sep">&nbsp;</span></li>
			<li><a href="accessories_public.php">Accessories</a><span class="sep">&nbsp;</span></li>
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
            <div class="head-cnt"> <a href="consoles_public.php" class="view-all">view all</a>
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
  	
                $query = "SELECT * FROM console c, product p WHERE c.product_id = p.product_id ORDER BY console_id DESC LIMIT 3";  
                  $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
                     
  
	?>
			<div class="article">
              <div class="image"> <?php echo '<img src="data:image;base64,'.$row['image'].' ">'; ?>  
			</div>
              <h3> <?php echo "".$row['console_type'].""; ?></h3>
             </div>
             <?php }} ?>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
	  
     <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt"> <a href="accessories_public.php" class="view-all">view all</a>
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
  	
                $query = "SELECT * FROM accessory a, product p WHERE a.product_id = p.product_id ORDER BY accessory_id DESC LIMIT 3";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
                     
  
	?>
			<div class="article">
              <div class="image"> <?php echo '<img src="data:image;base64,'.$row['image'].' ">'; ?>  
			</div>
              <h3> <?php echo "".$row['accessory_name'].""; ?></h3>
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
            <form action="search.php" method="post">
              <div class="cl">&nbsp;</div>
              <div class="fieldplace">
                <input name="search" id ="search" type="text"  class="field" value="Search" title="Search" />
              </div>
              <input type="submit" class="button" value="GO" />
              <div class="cl">&nbsp;</div>
            </form>
          </div>
        </div>
      </div>
      <!-- / Search -->
      <!-- Sign In -->
      <div id="sign" class="block" >
        <div class="block-bot">
          <div class="block-cnt">
            <div class="cl" >&nbsp;</div>
            <a onclick="document.getElementById('id01').style.display='block'" class="button button-left">sign in</a> <a href="newAccount.php" class="button button-right">create account</a>
			<div id="id01" class="modal" >
  
  <form class="modal-content animate" action="php/login.php" method="post" >
  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="resetPassword.php">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
            <div class="cl">&nbsp;</div>
            <p class="center">&nbsp;&nbsp;<a href="resetPassword.php">Forgot Password?</a></p>
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
            <li><a>pc</a></li>
            <li><a>xbox</a></li>
            <li><a>360</a></li>
            <li><a>wii</a></li>
            <li><a>ps4</a></li>
            <li><a>ps3</a></li> 
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
 