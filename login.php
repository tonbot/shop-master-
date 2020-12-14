<?php 
require_once 'dbconnectio.php';
$username=$_POST["username"];
$password=$_POST["password"];

$row=$conn->query("SELECT * FROM usertable WHERE (firstName='$username' OR email='$username' OR phoneNumber='$username') AND pass='$password' ");
$count=$row->rowcount();
if ($count < 1  ){
    echo ("failed");

} else{
     
     $row->setFetchMode(PDO::FETCH_ASSOC);
     $data=$row->fetchALL();
     echo (json_encode($data));

}



?>