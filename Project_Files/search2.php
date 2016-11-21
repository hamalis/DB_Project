<?php
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$localhost = 'localhost';
$dusername = 'root';
$dpassword = 'root';
$database = 'gp';
$connection = mysql_connect($localhost , $dusername , $dpassword);
mysql_select_db($database, $connection);

    $item = $_POST["search"];


        
        if ($item == NULL )
        {
            $que =  " SELECT * FROM game g, product p WHERE g.product_id = p.product_id";
        }
        
        
        
else{
//$mail =  $_SESSION['login_user'] ; 
$que =  "SELECT * FROM game g, product p WHERE g.product_id = p.product_id AND game_name LIKE '$item'";
}
$record = mysql_query($que) or print(mysql_error());
//echo $record;
if(mysql_num_rows($record) <1) {
  // got records
  echo 'No Data Found in Database';
}

//iterate over all the rows
if($record === FALSE){
echo $record;

}
if(mysql_num_rows($record) > 0 ){
	
    	
 while($row = mysql_fetch_array($record)) {
       $image = '<img hieght="50" width="50" src ="data:image;'.$row['image'].' "/>';
 	   $name = $row['game_name'];
       $price = $row['product_price'];   

    ?>

        <div class="image"> <a href="#"><?php echo '<img height="100" width="120" src="data:image;base64,'.$row['image'].' ">'; ?> </div>


             <h4><a href="#"><?php echo $name; ?></a></h4>


             <p class="console"><strong>$ <?php echo $price; ?></strong></p>


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

</body>
</html> 

