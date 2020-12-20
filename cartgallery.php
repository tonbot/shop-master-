<?php

require_once 'include.php';    ////including bootstrap class and js
require_once 'dbconnectio.php';   ///setting database connection by including dbconnection
//require_once 'navbarInclude.php';

// if server request method is get then execute delete function
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $cod="";
             $userid=$_GET["userId"];
             $tblid=$_POST['tb'];
             $sql=$conn->exec("DELETE FROM cart WHERE cart.userid='{$userid}' AND tblid='{$tblid}' ");
    
    }
//else execute the code below;
    else{      
              $userid=$_GET["userId"]; 
              $cod=$_GET["act"];  // getting data pass through parameter get from index.php;
              if (!empty($cod)){
              $sql2=$conn->query("SELECT tblid,userid FROM cart WHERE cart.tblid='{$cod}' AND cart.userid='{$userid}'");// checking for duplicate
              $count=$sql2->rowcount();
//if duplicate exist then update orderitem-count else insert to cart new values
            if  ($count>=1){
            
            
             $sql2=$conn->exec("UPDATE cart SET orderItem_count= orderItem_count + 1 WHERE cart.tblid= '{$cod}' AND cart.userId='{$userid}'");

   }
            else{
                
    $sql=$conn->exec("INSERT INTO cart(tblid,userid) VALUES ('$cod', '$userid' )");
}
}
}
  ////getting code from the url 
///querying the database start here



$userid=$_GET["userId"];
// fecting all rows from tblproduct  where tblproduct.id=cart.tblid
$sql2=$conn->query("SELECT * FROM tblproduct,cart,usertable WHERE  cart.userid='{$userid}' AND cart.tblid=tblproduct.id AND usertable.id=cart.userid ");
$count1=$sql2->rowcount();
$sql2->setFetchMode(PDO::FETCH_ASSOC);

$rowss=$sql2->fetchALL();
  $i=0;
  $mul=array();
  for ($i; $i<$count1; $i++){
     $mul[$i]=$rowss[$i]["price"] * $rowss[$i]["orderItem_count"];  
   
  }

    ?>
  
<!DOCTYPE html><!-- html start here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TON-SHOP</title>
    <link rel="stylesheet" href="customCss/addcart.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <script src="jquery.js"></script><!-- jquery js-->

   <!-- javascript checking if session is set-->
   <script type="text/javascript">
   let check=sessionStorage.getItem("username");
   if (check == null ){
           location.href="logincart.php"
} 
</script>
</head>

<body class="" style="background-color:#e5e5e5" > 

    <div class="bg-white md-3 py-3 pl-3">
       <h1 class="font-weight-bold md-3">Shopping cart</h1>
    </div>
    <!-- header -->
    <!-- header for product -->
    <div class="container mt-3 bg-light  " style="width:64.3%; margin-left:48px;">
        <div class="row py-3">
            <div class="col-sm-4" >
                <h5 class="text-left font-weight-bold"> Items</h5>
            </div>
            <div class="col-sm-4 text-left">
                <h5 class="text-left font-weight-bold pr-5"> Items Details</h5>
            </div>
            <div class="col-sm-4" style="padding-left:170px">
                <h5 class="text-left font-weight-bold" > Items Price</h5>
            </div>
        </div>
        <!-- header for product ends here-->
    </div>   
                  
                  
                  <div class="row mx-4 mb-5"><!-- parent row start  here-->
                  <input type="hidden" id="rowcount" value="<?php echo $count1 ;?>" > <!-- this returning the row affected in the rowcount-->
                   <?php foreach($rowss as $sql3){ //looping through the array using foreach  ?>  
                   <div class="col-sm-8 bg-white mx-4"> <!-- first column of the main content -->
                   <!-- start of the main row content -->  
                   <div class="row ">
                      <!-- first column containing image start here -->
                      <div class="col-sm-4 text-center " >
                          <a class="nav-link" href="addcart.php?act=<?php echo  $sql3["tblid"];?>"> <img class="img-fluid" id="img" src= <?php echo $sql3["image"];?> width="150" height="70" ></a> <!-- insert image from the db -->
                      </div>
                      <!-- the column ends here -->

                      <!-- second column containing little product details start here-->
                      <div class="col-sm-4 pt-3" >   
                           <p class="pname font-weight-bold" style="font-size:13px;"> <?php echo $sql3["name"];?> </p>
                      
                           <div class=" rating text-warning pt-1 mb-2" style="font-size:10px; margin-top:-10px;">  
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                               <span><i class="fas fa-star"></i></span>
                            </div>

                            <!-- increasing and decreasing quantity start here-->
                            <div class="qty">
                            <button class="qty_down border bg-light font-weight-bold" data-id="pro1" onload="decrease_cart('qty_input_<?php echo  $sql3['tblid'];?>', 'price_<?php echo  $sql3['tblid'];?>')"  onclick="decrease_cart('qty_input_<?php echo  $sql3['tblid'];?>', 'price_<?php echo  $sql3['tblid'];?>')" id="btndecrease_<?php echo  $sql3["tblid"];?>" type="button" >-</button>
                            <input type="text" class="qty_input" size="5" data-id="pro1" id="qty_input_<?php echo  $sql3["tblid"];?>" style="margin-left:-4px; margin-right:-4px; border-color:white;" value="<?php echo $sql3["orderItem_count"];?>">
                            <button class=" qty_up border bg-light font-weight-bold" data-id="pro1"  onload="increase_cart('qty_input_<?php echo  $sql3['tblid'];?>', 'price_<?php echo  $sql3['tblid'];?>')" onclick="increase_cart('qty_input_<?php echo  $sql3['tblid'];?>', 'price_<?php echo  $sql3['tblid'];?>')" id="btnincrease_<?php echo  $sql3["tblid"];?>" type="button" >+</button>
                            </div>
                            <!-- increasing and decreasing quantity ends here-->

                            <!-- delete product start here -->
                            <form method="post"  action="" class="mt-1 ">
                            <input class="hidden" type="hidden" name="tb" value="<?php echo  $sql3["tblid"];?>">
                            
                            <button class="btn btn-danger mb-3 shadow-sm " style="width:90px;" >Delete<i class="fas fa-trash"></i></button>
                            <button class="btn btn-secondary mb-3 shadow-sm" style="width:100px; height:38px; font-size:11px"   data-id=" <?php echo  $sql3["tblid"];?>" >save for later</button>
                            
                            </form>
                            <!-- delete product end here -->

                      </div>
                      <!-- the second column ends here -->

                      <!-- the third column start here -->
                      <div class="col-sm-4 text-right">
                           <p class="pname text-danger font-weight-bold pt-5 text-right "  style="font-size:15px;">$<span data-iPrice="<?php echo  $sql3["price"];?>" id="price_<?php echo  $sql3["tblid"];?>"><?php echo  $sql3["price"];?></span></p>
                      </div>
                      <!-- the third column ends here -->
                   
                  </div>
                  <!-- end of the main row content -->
                  <hr/>
                  </div>
                  <?php }?> <!-- php ends  for each here -->
                
                 <!-- second col of the parent row-->
                 <div class="col-sm-3 bg-white shadow-lg text-center pt-2 pb-5" style="position:fixed; margin-left:68%">
                 <div >

                  <div class="text-white border border-bottom-3 bg-secondary" style="width:100%">we offer free delivery </div>
                  <hr/>
                  <h6>Subtotal</h6>
                  <h3 class="font-weight-bold">$<span id="subtotal"><?php echo (array_sum($mul));?></span></h3>
                  <button class="btn btn-success">Proceed to Checkout</button>
                  </div>
                 </div><!-- second col of the parent row ends here-->
                </div>  <!-- parent row ends here-->


                 <!-- FOOTER START HERE -->
                 <?php require_once 'footer.php'?>
                 <!-- FOOTER END HERE -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="fontawesome/js/fontawesome.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="customJs/cartgallery.js"></script>
</div>
</body>
</html>
 

  

