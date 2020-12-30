//making ajax request;
function login(){
  let username=document.getElementById("username").value;
  let password=document.getElementById("password").value;
  let url="login.php";
  let fd=new FormData();
  fd.append("username", username);
  fd.append("password", password);
  var xhr=new XMLHttpRequest();
  xhr.open("POST", url, true);
  xhr.onreadystatechange=function(){
      if (this.readyState==4 && this.status==200){
          var data=JSON.parse(this.responseText);
          //creating a session storage using the response data;
         // let uname= sessionStorage.getItem("username");
         // if (uname !=null ){
          location.href='index.php';
        
         // }
         // else{
            sessionStorage.setItem("username",  data[0].firstName);
            sessionStorage.setItem("userId", data[0].id);
            sessionStorage.setItem("userPhone", data[0].phoneNumber);
            sessionStorage.setItem("userEmail", data[0].email);
         // }
          
       
        
           
        
        
      }
  }
  xhr.send(fd);

}