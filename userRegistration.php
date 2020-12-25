<?php 
  require_once 'databaseConnection/dbconnectio.php';
try {
     $firstname=$_POST["firstname"];
     $lastname=$_POST['lastname'];
     $email=$_POST['email'];
     $phonenumber=$_POST['phonenumber'];
     $password=$_POST['password'];

     $data=array($firstname,$lastname,$email,$password,$phonenumber);
     // echo (JSON_encode($data));
     if (isset($data)){
         $sql=$conn->prepare("SELECT * FROM usertable where phoneNumber=? OR email=?");
         $sql->execute([$data[4], $data[2]]);
         $count=$sql->rowcount();
            if ($count >=1 ){
                echo ("User already registered with this Email/Phone Number");
            }
            else{
                $sql=$conn->prepare("INSERT INTO usertable(firstName,surName,phoneNumber,email,pass ) VALUES (?,?,?,?,?)");
                $sql->execute([$data[0], $data[1], $data[4], $data[2], $data[3] ]);
                echo ("Account successfully created");
            }

     }
}
 catch(exception $red){
     echo ($red);
 }
?>