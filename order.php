<?php 
try {
  require_once 'databaseConnection/dbconnectio.php';
     $userId=$_POST['userId'];
          /////if payment is successfull select from cart where userid=userid and insert to order as history
          ////
          ///
         $sql=$conn->query("SELECT * FROM cart WHERE cart.userid='{$userId}' ");
         $sql->setFetchMode(PDO::FETCH_ASSOC);
         $data=$sql->fetchAll();
         ////////for each data into ordered table as history
         ////
         ////
         foreach ($data as $row) {
          $sql3=$conn->exec("INSERT INTO ordered(tblid,orderItem_count,userid) VALUES ( $row[tblid], $row[orderItem_count], $row[userid] ) ");     
         }
        ////////end of for each;
        ////
} catch (exception $err){
    echo($err);
}
 
  ?>