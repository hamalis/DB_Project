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
  
 </style>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
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
 

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
 
<style>
.pagination1 {
margin:0; 
padding:15px;
    padding-left: 250px;

float:left;
}
.pagination1 ul {
width:600px;
float: right;
list-style: none;
margin:0 0 0 ;
padding:0;
}
.pagination1 li span { line-height:45px; font-weight:bold;}
.pagination1 li {
margin:0 0 0 0;
float:left;
font-size:16px;
text-transform:uppercase;
}
.pagination1 li a {
color:#7f8588;
padding:10px 0 0 0; width:33px; height:33px;
text-decoration:none; text-align:center;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
display:block;
}
.pagination1 li:last-child a:hover { background:none; color:#7f8588;}
.pagination1 li:first-child a:hover { background:none;color:#7f8588;}
.pagination1 li a:hover {
color:#fff;
text-decoration: none;
display: block;
padding:10px 0 0 0; width:33px; height:33px;
}
.pagination1 li.activepage a { 
color:#fff;
text-decoration: none;
padding: 10px 0 0 0; }
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
            <li class="first active first-active"><a href="admin.php">Admin Page</a><span class="sep">&nbsp;</span></li>
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
              <h3>All Accessories</h3>
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
?>
<?php
  	
              /*  $query = "SELECT * FROM accessory a, product p WHERE a.product_id = p.product_id ORDER BY accessory_id DESC";  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
  */ 
   $sql = mysql_query("SELECT * FROM accessory a, product p WHERE a.product_id = p.product_id ORDER BY accessory_id DESC"); 
$total = mysql_num_rows($sql);

$adjacents = 3;
$targetpage = "edit_accessory.php"; //your file name
$limit = 12; //how many items to show per page
 
  $page =  (isset($_GET['page'])) ? (int)$_GET['page'] : 0;
 
if($page){ 
$start = ($page - 1) * $limit; //first item to display on this page
}else{
$start = 0;
}

/* Setup page vars for display. */
if ($page == 0) $page = 1; //if no page var is given, default to 1.
$prev = $page - 1; //previous page is current page - 1
$next = $page + 1; //next page is current page + 1
$lastpage = ceil($total/$limit); //lastpage.
$lpm1 = $lastpage - 1; //last page minus 1

$sql2 = "SELECT * FROM accessory a, product p WHERE a.product_id = p.product_id ORDER BY accessory_id DESC";
$sql2 .= " limit $start ,$limit ";
$sql_query = mysql_query($sql2);


/* CREATE THE PAGINATION */

$pagination = "";
$counter = 0; 
if($lastpage > 1)
{ 
$pagination .= "<div class='pagination1'> <ul>";
if ($page > $counter+1) {
$pagination.= "<li><a href=\"$targetpage?page=$prev\">prev</a></li>"; 
}

if ($lastpage < 7 + ($adjacents * 2)) 
{ 
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
}
elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
{
//close to beginning; only hide later pages
if($page < 1 + ($adjacents * 2)) 
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
$pagination.= "<li>...</li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
}
//in middle; hide some front and some back
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.= "<li>...</li>";
for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
$pagination.= "<li>...</li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
}
//close to end; only hide early pages
else
{
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.= "<li>...</li>";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; 
$counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
}
}

//next button
if ($page < $counter - 1) 
$pagination.= "<li><a href=\"$targetpage?page=$next\">next</a></li>";
else
$pagination.= "";
$pagination.= "</ul></div>\n"; 
}

	while($row = mysql_fetch_array($sql_query)){
	?>
	
			<div class="article">
			   
              <div class="image"><?php echo '<img height="100" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
              <h4 style="text-align:center;"><?php echo $row["accessory_name"]; ?></h4>
               <br><p align="center"><?php echo "<a class='btn btn-warning' href = 'edit_accessory2.php?Delete=$row[accessory_id]'>Edit</a>" ;?>     
            </div>
			 <?php  
                    }  
                 		  echo "<div style=''>".$pagination."</div>"; 
                ?>	
			
			
			
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
            <form action="search.php" method="post">
              <div class="cl">&nbsp;</div>
              <div class="fieldplace">
                <input type="text" class="field" value="Search" title="Search" />
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
              <h3>Top Games</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="http://all-free-download.com/free-website-templates/"><img src="css/images/img1.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="http://all-free-download.com/free-website-templates/">TMNT</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="http://all-free-download.com/free-website-templates/"><img src="css/images/img2.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="http://all-free-download.com/free-website-templates/">F.E.A.R.2</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum molestie </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="http://all-free-download.com/free-website-templates/"><img src="css/images/img3.gif" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="http://all-free-download.com/free-website-templates/">Steel Fury</a></h4>
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
