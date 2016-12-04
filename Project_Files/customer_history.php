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
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */

    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 68%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #d9d9d9;
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
      <div >
        <div class="block">
				<br><br> 
				<p style="text-align:center; font-size:50px">Customers order report</p>
				<p style="text-align:center; font-size:650px"><span class="fa" style="font-size:65px;cursor:pointer" onclick="document.getElementById('id01').style.display='block'">&#xf2bc;</span>
      <!-- <p style="text-align:center" ><a onclick="document.getElementById('id01').style.display='block'" class="button button-left">Orders Report</a>-->
	   				<br><br> 

	<div id="id01" class="modal" >      
 	<form class="modal-content animate" action=" " method=" " >
	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
    <div class="container">		 
			 
			  <?php 
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>

 <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Customer Name</th>
      <th>Customer Address</th>
      <th>Product Name</th>
	  <th>Product ID</th>
      <th>Order ID</th>
      <th>Date Of Order</th>
 
    </tr>
  </thead>
    <tbody>

<?php
  		$x = 1; 

                $query = ' SELECT * FROM report'; 
				//'SELECT o.customer_username, CONCAT(c.first_name, " " , c.last_name)AS name ,CONCAT(c.street_name, " Apt/House: ", c.house_number," ", c.zip_code," ",c.city,",",c.state) AS address, p.product_name,io.product_id,o.order_id,o.date_of_order FROM product p, orders o, items_ordered io, customer c WHERE o.customer_username = c.customer_username AND io.product_id = p.product_id AND io.order_id = o.order_id ORDER BY o.order_id DESC  ';  
                $result = mysql_query($query);  
                if(mysql_num_rows($result) > 0)  
                {  
                     while($row = mysql_fetch_array($result))  
                     {  
	?>
	

    <tr class="active">
      <td><?php echo $x++;?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['product_name']; ?></td>
	  <td><?php echo $row['product_id']; ?></td>
	  <td><?php echo $row['order_id']; ?></td>
	  <td><?php echo $row['date_of_order']; ?></td>
    </tr>
     
   
			   
			   
               
			   			   
             
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
				</tbody>
</table>

			
       </div>
      
  </form>
        </div>

</div>
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


    </div>
    <!-- / Content -->
    <!--  -->
     
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
