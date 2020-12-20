<?php
require_once 'databaseConnection/dbconnectio.php';   ///setting database connection by including dbconnection
$userid=$_POST["userid"];
$sql2=$conn->query("SELECT * FROM cart WHERE userid='$userid' ");
$count=$sql2->rowcount();
echo json_encode($count);

?>