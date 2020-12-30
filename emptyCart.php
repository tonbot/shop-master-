<?php 
try {
  require_once 'databaseConnection/dbconnectio.php';
     $userId=$_POST['userId'];
     $sql=$conn->exec("DELETE FROM cart WHERE cart.userid='{$userId}' ");
        
} catch (exception $err){
    echo($err);
}
 
  ?>