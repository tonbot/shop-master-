
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script type="text/javascript" src="owll.js"></script>
    <script type="text/javascript">
function userID(){
var userid=sessionStorage.getItem('userId');
location.href="cartgallery.php?act=''&userId=".concat(userid);
}
  
</script>
</head>
<body> 
<!-- top header -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-end">

     <ul class="navbar-nav ">
     <li class="nav-item"><a class="nav-link" href="#" >Login/Sign-up</a></li>
     
     </ul>  
</nav>
<!-- top header  ends here  -->

<!-- second  header start here  -->
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
     <a class="navbar-brand font-size-30" href="#" disabled> Shopee </a>
     <ul class="navbar-nav px-5">
     <a class="nav-link bg-warning text-dark px-3" href="#" active-link ><li class="nav-item navitem2">Category </li></a>
     <a class="nav-link bg-warning text-dark px-3" href="#" active-link ><li class="nav-item navitem2">Men</li></a>
     <a class="nav-link bg-warning text-dark px-3" href="#" active-link ><li class="nav-item navitem2">Women</li></a>
     <a class="nav-link bg-warning text-dark px-3" href="#" active-link ><li class="nav-item navitem2">Babies</li></a>
     </ul>
     <from class="form-inline mx-5">
         <input class="form-control border-5px" size="35px" type="text"  placeholder="search" >
         <button class="btn btn-warning text-dark"  type="button" ><i class="fas fa-search"></i></button>
     </form>
     <a class="nav-link mx-5" onclick="userID()" > <i class="fas fa-shopping-cart"></i><span class="rounded-circle bg-white text-dark px-3 py-2" id="cartcount" style="width=100px; height=100px; text-align=center;">0</span></a>
 </nav>
 <!-- second header  ends here -->
    
 <!-- carousel starts -->
 <div class=" container owl-carousel owl-theme mt-3 pt-4  " id="owl"> 
    
    <div class="item" id="caroselItem"> <img class="img-fluid" src="product-images/CAM.jpg"> </div>
    <div class="item" id="caroselItem"> <img class="img-fluid" src="product-images/sys (1).jpg"> </div>
    <div class="item" id="caroselItem"> <img class="img-fluid" src="product-images/camera.jpg"> </div>
    <div class="item" id="caroselItem"> <img class="img-fluid" src="product-images/print (2).jpg"> </div>
    <div class="item" id="caroselItem"> <img class="img-fluid" src="product-images/CAM.jpeg"> </div>
    <div class="item" id="caroselItem"> <img class="img-fluid" src="product-images/SCAN (1).jpg"> </div>
    
    
 </div>
 <hr/>
 <!-- carousel ends here -->


 

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>
   <script type="text/javascript" src="fontawesome/js/solid.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>

  
  </body>
</html>