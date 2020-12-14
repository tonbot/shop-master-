<?php
header('Content-Type:application/json');
require_once 'dbconnectio.php';   ///setting database connection by including dbconnection
    
///querying the database 
$sql=$conn->query("SELECT * FROM tblProduct");
$sql->setFetchMode(PDO::FETCH_ASSOC);
$row=$sql->fetchAll();
echo json_encode($row);

?>