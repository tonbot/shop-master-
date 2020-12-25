<!-- checking if user alreday login -->
<script type="text/javascript">
let check=sessionStorage.getItem("username");
if (check == null ){
  location.href="logincart.php"
}   
</script>
<!-- checking if user alreday login -->




<?php
require_once 'include.php';
require_once 'databaseConnection/dbconnectio.php';   ///setting database connection by including dbconnection
require_once 'navbarInclude.php';
///querying the database 
$sql=$conn->query("SELECT * FROM tblProduct");
$sql->setFetchMode(PDO::FETCH_ASSOC);
$row=$sql->fetchAll();
 




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   
    <link rel="stylesheet" href="customCss/index.css">
     <!-- custom css ends here -->
     <!-- custom jss-->
    <script  type="text/javascript" src="customJs/index.js"> </script>
     <!-- custom css ends here -->
    
</head>

<body onload="catcount()" class=""  style="background-color:#e5e5e5" >
    



      <!-- PHP LOADING PRODUCT ITEM -->
      <div class="row text-center my-3 bg-white">
            <?php foreach( $row as $rowss ) { ?>   
               <div class="col-sm-3 my-3 mx-" style="max-height:309px">
                       <a class="nav-link" href="addcart.php?act=<?php echo  $rowss["id"];?>"> <img class="img-fluid w-50 image" style="width:204px; height:127px;" src=<?php echo $rowss["image"];?> ></a>
                      <p style="margin-top:-10px;"> <?php echo $rowss["name"];?></p>
                      <p class="font-weight-bold text-success" style="margin-top:-15px;">Price:#<?php echo $rowss["price"];?></p>
                      <button type="button" class="btn btn-danger mb-5 btn1" onclick="addcart('input-<?php echo $rowss['id'];?>'); catcount()" > Add to Cart </button>
                      <input type="hidden" size="2" value="<?php echo $rowss["id"];?>" id="input-<?php echo $rowss["id"];?>">
                </div>
             <?php } ?>

              <!-- SUCCESSFULL PRODUCT ADDED TO CART -->
             <div class="alert alert-danger fixed-bottom  py-3 font-weight-bold ml-5" role="alert" style="width:20%; display:none;"  id="response">
             </div>
             <!-- ENDS HEREE-->

      </div>
     <!-- ENDS HERE -->





     <!-- FOOTER START HERE -->
     <?php require_once 'footer.php'?>
     <!-- FOOTER END HERE -->
  


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>

</body>
</html>
