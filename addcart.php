<?php

require_once 'include.php';    ////including bootstrap class and js
require_once 'dbconnectio.php';   ///setting database connection by including dbconnection

$cod=$_GET["act"];  ////getting code from the url 
/// querying the database start here
$sql=$conn->query("SELECT * FROM tblProduct WHERE id ='$cod' ");
$sql->setFetchMode(PDO::FETCH_ASSOC);
while ($row=$sql->fetch()){
?>

<!-- html start here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TON-SHOP</title>
    <link rel="stylesheet" href="customCss/addcart.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<script type="text/javascript">
let check=sessionStorage.getItem("username");
if (check == null ){
  location.href="logincart.php"
} 
function userID(){
var userid=sessionStorage.getItem('userId');
document.getElementById('user').value=userid;
}
  
</script>
</head>
<body class="bg-light">

<div class="container-fluid bg-white">

<p class="font-rubik font-weight-bold" style="font-size:30px; font-type:rubik;"> <?php echo $row["name"];?> </p>

</div>
  
      <div class="container bg-white">
           <div class="row" >
                    <div class="col-sm-6" style="text-align:center; padding-bottom:20px" >
                   <img class="img-fluid text-center" id="img1" src= <?php echo $row["image"];?> style="max-width:300px; max-height:240px;" > <!-- insert image from the db -->
                   </div>

                   <div class="col-sm-6 " >
                    
                      <p class="pname" style="font-size:30px;"> <?php echo $row["name"];?> </p>
                      <p class="pcode" style="font-size:13px; color:gray; margin-top:-13px;" >product code: <?php echo $row["code"];?>  </p>
                      <hr/>
                      <div class=" rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star-half"></i></span>
                      </div>
                      <hr/>
                      <p class="pname" id="price"style="font-size:30px; font-weight:bold;"> <?php echo $row["price"];?> </p>
                      <hr/>
                      <form method="get" action="cartgallery.php?">
                      <span class="mr-2 font-size-12px font-weight-bold">Quantity:</span>
                      <button class="border-0 bg-light-70 text-black font-weight-bold" id="btndecrease" type="button" onclick="decreaseQ()">-</button>
                      <input class="mx-0" type="text" size="4"  value="1" id="quantity">
                      <button class="border-0 bg-light-70 text-black font-weight-bold" id="btnincrease" type="button" onclick="increaseQ()">+</i></button>
                      <hr/>
                      
                    
                      <input type="hidden" name="act" value=" <?php echo $row["id"];?>">
                      <input type="hidden" name="userId" id="user" >

                      <button class="btn btn-success mr-5" type="submit" style="width:200px;" onclick="userID()" >Add to Cart</button>
                      <button class="btn btn-danger" type="button" style="width:200px;" >Buy Now</button></span>
                      </form></span>
                      <hr/>
                    </div>
             </div> 
               </div>

               
           </div>
      </div>
  </div>
  <div class="container-fluid bg-white mt-3 py-3">
  <p class="font-rubik font-weight-bold" style="font-size:20px; font-type:rubik;"> Product Description </p>      
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="fontawesome/js/fontawesome.min.js"></script>
  <script type="text/javascript" src="customJs/addcart.js"></script>
</body>
</html>
 <?php } ?>