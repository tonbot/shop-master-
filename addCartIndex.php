<?php
header('Content-Type:application/json');
require_once 'databaseConnection/dbconnectio.php';  ///setting database connection by including dbconnection;
////////// gettting productId sent from addCart function in  (index.js);
 $productId=$_POST['productId'];
 $userid=$_POST['userid'];
 ////// checking the product if already added to cart
 ////// if already added to cart we increase the product quantity by 1;
  
 ////checking
  $check=$conn->query("SELECT tblid,userid FROM cart WHERE cart.tblid='{$productId}' AND cart.userid='{$userid}'");// checking for duplicate
    $count =$check->rowcount();
    if ($count>=1){
        $updateCart=$conn->exec("UPDATE cart SET orderItem_count= orderItem_count + 1 WHERE cart.tblid= '{$productId}' AND cart.userId='{$userid}'");
         echo ("productUpdated");
    }
    else{
      $insertCart=$conn->exec("INSERT INTO cart(tblid,userid) VALUES ('$productId', '$userid' )");
      echo ("new record inserted");
    }

?>