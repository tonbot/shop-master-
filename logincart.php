<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js">   </script>
    <script src="login.js">   </script>
</head>
<body style=" background-color:#e5e5e5">
 <div class="container  bg-primary shadow-lg rounded" style="margin-top:30%; margin-bottom:30%;">
     <div class="row">
         <!-- first column-->
         <div class="col-sm-6 bg-light justify-content-center">
         <div class="text-center mt-3"><img class="img-fluid" src="bgimage/shopping2.jpg" width="120px" height="100px" ></div>
          <h3 class="text-center pt-2 font-weight-bold">Login</h3>
          <h6 class="text-center">please login here with your credentials</h5>
           <p class="alert alert-danger text-center ml-5"style="width:80%">Username/Password</p>

          <form method="post">
              <label class="text-primary font-weight" style="margin-left:25%">Username</label>
              <input class="form-control" type="text" id="username" auto-complete="none" style="width:50%; margin-left:25%"> 
              <label class="text-primary font-weight" style="margin-left:25%">Password</label>
              <input class="form-control"  id="password" type="password" auto-complete="none" style="width:50%; margin-left:25%">
             <button class="bg-primary font-weight-bold text-center text-white form-control   mb-5 mt-4" type="button" style="width:50%; margin-left:25%; height:25%" onclick="login()">LOGIN</button>
          </form>

         </div>
         <!-- second column-->
         <div class="col-sm-6">
            
            <h3 class="test-center">Login</h3>
            <h5>please login here with your credentials</h5>
            

         </div>
     </div>
 </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</div>
</body>
</html>