
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <script src="js/bootstrap.min.js">   </script>
    <script src="customJs/login.js">   </script>
</head>
<body style="background-image:url('product-images/userreg.jpg'); background-size:cover;">
 
     
         <div class=" container  my-5 py-2 shadow-lg" style="width:35%; padding-left:50px; color:#fff; padding-right:50px; border-radius:20px;">
         <div class="text-center mt-3"><img class="img-fluid" src="bgimage/shopping2.jp" alt="" width="120px" height="100px" ></div>
          <h3 class="text-center pt-2 font-weight-bold">Login</h3>
          <h6 class="text-center" >please login here with your credentials</h5>
           <p class="alert alert-danger text-center ml-5" hidden style="width:80%">Username/Password</p>

          <form method="post" class="my-3">
              <label class="text-primary font-weight-sm" style="font-size:14px"><i class=" text-white fa fa-user" aria-hidden="true"></i> username/phone/email</label>
              <input class="form-control" type="text" id="username" autocomplete="none" style=""> 
              <label class="text-primary font-weight" style="font-size:14px"><i class=" text-white fa fa-unlock-alt" aria-hidden="true"></i> password</label>
              <input class="form-control"  id="password" type="password" autocomplete="none" style="" >
             <button class="bg-warning font-weight-bold shadow-lg text-center text-dark form-control mt-3" type="button" onclick="login()"><i class=" text-white fa fa-sign-in" aria-hidden="true"></i>LOGIN </button>

          </form>


          
         </div>
         
 </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</div>
</body>
</html>