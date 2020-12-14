<?php
require_once 'include.php';

require_once 'navbarInclude.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   
    <link rel="stylesheet" href="index.css">
     <!-- custom css ends here -->
     <!-- custom jss-->
    <script  type="text/javascript" src="index.js"> </script>
     <!-- custom css ends here -->
     <script type="text/javascript">
let check=sessionStorage.getItem("username");
if (check == null ){
  location.href="logincart.php"
}   
</script>

</head>

<body onload="moda1(); catcount()" class="bg-light">

<div class="container-fluid"  id="con1">
   <div class="container body-con " id="con2" >
      <div class="row bg-white" id="row1">
        
           <!--
               <div class="col-sm-4 col1"  id="col1">
                 <img class="img-responsive" src="">
                  <p> price</p>
                  <p> <input type="text" size="2"></p>
                  <button type="submit" class="btn btn-success" > add cart</button>
              </div>
        
        </form>
        -->
      </div>
   
    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>

</body>
</html>
