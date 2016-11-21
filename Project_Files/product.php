<?php 
       
session_start();
if (!isset($_SESSION['login_user']) || empty($_SESSION['login_user'])) {
      // redirect to your login page
      exit();
}

$username = $_SESSION['login_user'];
		$localhost = 'localhost';
		$dusername = 'root';
		$dpassword = 'root';
		$database = 'gp';
		$connect = mysql_connect($localhost , $dusername , $dpassword);
		mysql_select_db($database, $connect);
?>


<?php
  	
               if (isset($_GET['ADD']))
{
	
	$user = $_GET['ADD'];
	
	$db = "SELECt * FROM game g, product p WHERE g.product_id = $user"; 
 	$q = mysql_query($db);
 	if($q)
	{
		//header( "location: shopping_thanks.php" );
 	
  
						?>
	
						<div class="article">
			   
						<div class="image"><?php echo '<img height="100" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>
						<h4 style="text-align:center;"><?php echo $row["game_name"]; ?></h4>
						<p align="center" style="color:red"><?php echo "<a href = 'purchase_game.php?ADD=$row[product_id]'>Purchase</a>" ;?>     
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