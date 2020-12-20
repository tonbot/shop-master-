
  <!-- checking for sessionStorage if user login or not -->
  <script type="text/javascript">
     function user(){
          var userid=sessionStorage.getItem('userId');
          location.href="cartgallery.php?act=&userId=".concat(userid);
    }
     </script>
    <!-- end of checking -->



    
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
</head>

<body> 
<!-- top header -->
<nav class="navbar navbar-expand-sm  navbar-dark justify-content-end" style="background-color:orange; color:black">

     <ul class="navbar-nav ">
     <li class="nav-item"><a class="nav-link" href="loginCart.php"  style="color:black;" >Login/Sign-up</a></li>
     </ul>  
</nav>
<!-- top header  ends here  -->

<!-- second  header start here  -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
     <a class="navbar-brand font-size-30" href="#" disabled> Shopee </a>
     <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div id="my-nav" class="collapse navbar-collapse">
     <ul class="navbar-nav mr-auto px-5">
     <a class="nav-link text-white px-3  " href="#" active-link ><li class="nav-item navitem2">Category </li></a>
     <a class="nav-link text-white px-3 " href="#" active-link ><li class="nav-item navitem2">Men</li></a>
     <a class="nav-link text-white px-3 " href="#" active-link ><li class="nav-item navitem2">Women</li></a>
     <a class="nav-link text-white px-3 " href="#" active-link ><li class="nav-item navitem2">Babies</li></a>
     </ul>
     <a class="nav-link mx-5" onclick="user()" > <i class="fas fa-shopping-cart"></i><span class="rounded-circle bg-white text-dark px-3 py-2" id="cartcount" style="width=100px; height=100px; text-align=center;">0</span></a>
     </div>
 </nav>
 <!-- second header  ends here -->
    
 <!-- carousel starts -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img class="d-block w-100  " src="product-images/laundry2.png" alt="First slide">
    </div>
    <div class="carousel-item text-center">
      <img class="d-block w-100" src="product-images/CO1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item text-center">
      <img class="d-block w-100" src="product-images/co3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <!-- carousel ends here  -->


 

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>
   <script type="text/javascript" src="fontawesome/js/solid.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>

  
  </body>
</html>