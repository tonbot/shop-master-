<?php
require_once 'include.php';    ////including bootstrap class and js
require_once 'databaseConnection/dbconnectio.php';   ///setting database connection by including dbconnection
$userId=$_GET['userId'];
$sql=$conn->query("SELECT * FROM ordered WHERE ordered.userid='{$userId}' ");
$sql->setFetchMode(PDO::FETCH_ASSOC);
$data=$sql->fetchAll();
$i=0;
foreach ($data as $row) {
    
    $sql3=$conn->query("SELECT * FROM tblproduct, ordered WHERE tblproduct.id=$row[tblid] AND ordered.tblid=$row[tblid]" );  
    $sql3->setFetchMode(PDO::FETCH_ASSOC);
    $data1=$sql3->fetchAll();
    if ($i<sizeof($data)){
        $i++;
    $arr[$i]=$data1;
    }
  
}
//print_r($arr);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>

<body class="" style="background-color:#e5e5e5" > 
<div class="bg-white"><h1 class="text-weight-bold px-3 py-3">ORDER HISTORY</h1></div>
<div class="row  mx-4 mb-5"><!-- parent row start  here-->
                   
                   <?php foreach($arr as $sql3){ //looping through the array using foreach  ?>  

                      <!-- first column containing image start here -->
                      <div class="col-sm-9  bg-white text-left py-3 my-1" >
                      <div class="row">
                      <div class="col-3">
                      <img class="img-fluid" id="img" src= <?php echo $sql3[0]["image"];?> width="150" height="70" > <!-- insert image from the db -->
                      </div>
                    
             

                      <!-- second column containing little product details start here-->
                      <div class="col-sm-4 bg-white pt-3 my-1" >   
                           <p class="pname font-weight-bold" style="font-size:13px;"> <?php echo $sql3[0]["name"];?> </p>
                      
                           <div class=" rating text-warning pt-1 mb-2" style="font-size:10px; margin-top:-10px;">  
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                            </div>

                           </div>
                           </div>
                      </div>
                 <?php }?>
               
    
</body>
</html>