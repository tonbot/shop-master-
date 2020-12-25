<?php require_once 'include.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="customCss/userReg.css"> <!-- custom css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script type="text/javascript" src="customJs/userReg.js"></script>   <!-- custom js-->
</head>
<body class="bg-dark" id="con" onload="dis()">


    <div class="border bg-light shadow-lg rounded" id="frmcontainer">
        <h3 class="text-center text-primary "> CREATE ACCOUNT </h3>
        <h6 class="text-center mb-2 text-muted">All the fields are required</h6>
      <form method="post">
          <label for="First name" >First name<span class="text-danger">*</span></label>
          <input id="firstname" class="form-control input" type="text" onclick="hide()" required >
          <label for="Last name" >Last name<span class="text-danger">*</span></label>
          <input id="lastname" class=" input form-control" type="text"  onclick="hide()" required>
          <label for="Email" >Email<span class="text-danger">*</span></label>
          <input id="email" class=" input form-control" type="email"  onclick="hide()"  required>
          <label for="Phone number">Phone number<span class="text-danger">*</span></label>
          <input id="phonenumber" class=" input form-control" type="number"  onclick="hide()" required>
          <label for="Password">Password<span class="text-danger">*</span></label>
          <input id="password" class=" input form-control" type="Password"  onclick="hide()" required >
          <label for="Confirm Password">Confirm password<span class="text-danger">*</span></label>
          <input id="confirmPassword" class=" input form-control" type="password"  onclick="hide()"  required>
          <div class="alert alert-warning mt-2" id="error"></div>
      </form>
      <p class="text-right"><button class="btn btn-primary btn-lg shadow-sm" onclick="reg();">Register</button></p>
      <p class="text-center shadow-sm">Have an account? <span class="text-primary"><a class="" href="loginCart.php">Login here!</a></span></p>
    </div>


    <div id="my-modal" class="modal modal-bounceUpIn" onclick="closeModal() " tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog rounded modal-sm   modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="text-success rounded-curve pt-5 px-5"><i class="fa fa-check fa-5x"></i></span>
                    <h3 class="font-weight-bold pb-5">REGISTRATION SUCCESSFUL</h3>
                    <p class="center"><a href="logincart.php"><button class="btn btn-success">Proceed to login</button></a></p>
                </div>
            </div>
        </div>
    </div>



</body>
</html>