<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = 'root';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password))
{
		 die('Unable to connect'); //or exit
}
else
{
	if(@mysql_select_db('gp'))
	{

			$platform = $_POST["platform"];

		$gname = $_POST["gname"];
		$gameszie = $_POST["gameszie"];
		$usernum = $_POST["usernum"];
		$productid = $_POST["productid"];
		$productdesc = mysql_real_escape_string($_POST["productdesc"]);
		$price = mysql_real_escape_string($_POST["productprice"]);
		$image= addslashes($_FILES['image']['tmp_name']);
		$name= addslashes($_FILES['image']['image_name']);
		$image= file_get_contents($image);
		$image= base64_encode($image);
		 
	/*
		$db = "BEGIN;
INSERT INTO product(product_id, product_description, product_name, product_price)
 VALUES('$productid','$productdesc','$gname','$price')
INSERT INTO game(game_name,size_of_game, number_of_players,image_name,image,product_id) 
 VALUES('$gname','$gameszie','$usernum','$name','$image','$productid')
COMMIT; "; 
		//$db.= "VALUES('$productid','$productdesc','$gname','$price') " ;
		$q = mysql_query($db);*/ 
		
		$db = "INSERT INTO product(product_id, product_description, product_name, product_price)"; 
		$db.= "VALUES('$productid','Game','$gname','$price') " ;
		$q = mysql_query($db);
		
		$db2 = 'INSERT INTO game(game_name,size_of_game, number_of_players,image_name,image,platform,product_id)'; 
		$db2.= "VALUES('$gname','$gameszie','$usernum','$name','$image','$platform','$productid')" ;
		$q2 = mysql_query($db2);
		
		
		if($q)
		{
 			if ($q2){
			header( "location: http://localhost/game_portal/admin.php" );}
 		}
 		else
		{
			echo mysql_error();

		} 
	}
	
	else
	{
		die('Unable to connect'); //or exit
	}
}
 
?>