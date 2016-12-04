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
  content: '?';
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
    <!-- / Main Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Sort Navigation -->
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
<form action="php/checkSecurityAns.php" method="post" enctype="multipart/form-data" class="form-horizontal">
  <fieldset>
	<p align="center"> <legend>Reset Your Password</legend>
	
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Your Username</label>
      <div class="col-lg-10">
        <input name="username" type="text" class="form-control" id="inputEmail" value="" required autocomplete="off">
      </div>
	</div>

    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Security Question</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name ="question" required autocomplete="off">         
			<option>What is your favorit music?</option>
			<option>What is your favorit teacher?</option>
			<option>What is your first car?</option>
			<option>What primary school did you attend?</option>
			<option>In what town or city did you meet your spouse/partner?</option>
			<option>What is your grandmother's (on your mother's side) maiden name?</option>
        </select>
        
      </div>
    </div>
	
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Your Answer</label>
      <div class="col-lg-10">
        <input name="answer" type="text" class="form-control" id="inputEmail" value="" required autocomplete="off">
      </div>
    </div>
	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">New password</label>
      <div class="col-lg-10">
        <input name="pass1" type="text" class="form-control" id="inputEmail" value="" required autocomplete="off">
      </div>
	</div>

	<div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Verify Password</label>
      <div class="col-lg-10">
        <input name="pass2" type="text" class="form-control" id="inputEmail" value="" required autocomplete="off">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default" onclick="location.href = 'index.php'" >Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
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