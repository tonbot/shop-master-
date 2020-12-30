<?php 
try {
  require_once 'databaseConnection/dbconnectio.php';
     $billAmount=$_POST["billAmount"];
     $transactionRef=$_POST['transactionRef'];
     $transactionResp=$_POST['transactionResp'];
     $paymentStatus=$_POST['paymentStatus'];
     $userId=$_POST['userId'];
      
     if (isset($billAmount) && isset($transactionRef)&& isset($transactionResp) && isset($paymentStatus) && isset($userId)){
         $data=array($billAmount, $transactionRef,$transactionResp,$paymentStatus,$userId);

         $sql=$conn->prepare("INSERT INTO paymentlog(billAmount,transactionRef,transactionResp,paymentStatus,userId) VALUES (?,?,?,?,?)");
         $sql->execute([$data[0],$data[1],$data[2],$data[3],$data[4]]);
         //echo($sql->rowcount());
     }




} catch (exception $err){
    echo($err);
}
 
  ?>