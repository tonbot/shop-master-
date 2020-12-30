
  <!--  -->
  <script type="text/javascript">
     function user(){
          var userid=sessionStorage.getItem('userId');
          location.href="cartgallery.php?act=&userId=".concat(userid);
    }
     </script>
    <!--  -->

    <!--  -->
  <script type="text/javascript">
     function getuserid(){
          var userId=sessionStorage.getItem('userId');
          location.href="orderPage.php?userId=".concat(userId);
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
    <link rel="stylesheet" href="customCss/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body> 
<!-- top header -->
<nav class="navbar navbar-expand-sm  navbar-dark justify-content-end" style="background-color:rgba(247, 37, 133, 0.5); color:black">
     <ul class="navbar-nav ">
     <li class="nav-item nav1"  style="background-color:yellow;" ><a class="nav-link" href="loginCart.php"  style="color:black;" >Login/Sign-up</a></li>
     </ul>  
</nav>
<!-- top header  ends here  -->

<!-- second  header start here  -->
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
     <a class="navbar-brand font-size-30 rot" href="#" disabled> TON-SHOP </a>
     <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div id="my-nav" class="collapse navbar-collapse">
     <ul class="navbar-nav mr-auto px-5">
     <li class="nav-item navitem2"><a class="px-3 py-3 " href="#" active-link >Category</a></li>
     <li class="nav-item navitem2"><a class="px-3 py-3 " href="#" active-link >Men</a></li>
     <li class="nav-item navitem2"><a class="px-3 py-3 " href="#" active-link >Women</a></li>
     <li class="nav-item navitem2"><a class="px-3 py-3 " href="#" active-link >Babies</a></li>
     <li class="nav-item navitem2"><a class="px-3 py-3 " onclick="getuserid()">order</a></li>
     </ul>
     <a class="nav-link mx-5" onclick="user()" > <i class="text-white">CART</i><span class="px-1 py-1 cartcount " id="cartcount" style="width:50px; background-color:red; color:white; height=50px; text-align:center;">0</span></a>
     </div>
 </nav>
 <!-- second header  ends here -->
    
 <!-- carousel starts -->
  <div class="row">

  <div class="col-3 text-center">
    <img class="img-fluid d-block" style="padding-top:10px; padding-left:30px" width="400px;" src="product-images/avat.jpg" alt="advert">
    <img class="img-fluid d-block" style="padding-top:10px; padding-left:30px" width="400px;" src="product-images/avat.jpg" alt="advert">

  </div>

<!-- carousel start here -->
  <div class="col-9">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="padding-top:10px;">
    <div class="carousel-item active text-center">
      <img class="d-block w-100 " src="product-images/car3.jpg" alt="First slide">
    </div>
    <div class="carousel-item text-center">
      <img class="d-block w-100 " src="product-images/car1.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item text-center">
      <img class="d-block w-100" src="product-images/car2.jpeg" alt="Third slide">
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
</div>

</div>

 <!-- carousel ends here  -->


 

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js" integrity="sha512-kI12xOdWTh/nL2vIx5Yf3z/kJSmY+nvdTXP2ARhepM/YGcmo/lmRGRttI3Da8FXLDw0Y9hRAyZ5JFO3NrCvvXA==" crossorigin="anonymous"></script>
   <script type="text/javascript" src="fontawesome/js/solid.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>

  
  </body>
</html>