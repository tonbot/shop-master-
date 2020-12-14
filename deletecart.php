<?php 

require_once 'dbconnectio.php';   ///setting database connection by including dbconnection
$tblid=$_POST['tblid'];
$sql=$conn->exec("DELETE FROM cart WHERE tblid = $tblid");

?>