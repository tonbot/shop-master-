/////onload doument run this function
function dis(){
    document.getElementById("error").style.display="none";
}

//////// onclick of text box
function hide(){
    if (document.getElementById("error").style.display="block"){
        document.getElementById("error").style.display="none"
    }

}


function reg(){
 //document.getElementById("my-modal").style.display="none";
let firstname=document.getElementById("firstname").value.trim().replace(" ", "");
let lastname=document.getElementById("lastname").value.trim().replace(" ", "");
let email=document.getElementById("email").value.trim().replace(" ", "");
let phonenumber=document.getElementById("phonenumber").value.trim().replace(" ", "");
let password=document.getElementById("password").value.trim().replace(" ", "");
let confirmPassword=document.getElementById("confirmPassword").value.trim().replace(" ", "");

if ( firstname=="" || lastname=="" || email=="" || phonenumber=="" || password=="" ){
      document.getElementById("error").innerHTML="Please ensure all fields are filled";
      document.getElementById("error").style.display="block";    
}
   else{
//////checking password match
if (password != confirmPassword){
    document.getElementById("error").innerHTML="password does not match";
    document.getElementById("error").style.display="block";
}
else{
      document.getElementById("error").style.display="none";
      ajax(firstname,lastname,email,phonenumber,password);
}

}
}

function ajax(firstname,lastname,email,phonenumber,password){
   let fd=new FormData()
       fd.append("firstname", firstname);
       fd.append("lastname", lastname);
       fd.append("email", email);
       fd.append("phonenumber", phonenumber);
       fd.append("password", password);
    //console.log(firstname,lastname,password,phonenumber,email);
   let url="userRegistration.php"
   let xhr=new XMLHttpRequest();
       xhr.open("post", url, true);
       xhr.onreadystatechange=function(){
           if (xhr.readyState==4 && xhr.status==200) {
               var response=xhr.responseText;
               // console.log(response);
                      if (response==="User already registered with this Email/Phone Number"){
                        document.getElementById("error").innerHTML=response;
                        document.getElementById("error").style.display="block";
                    } else {
                     //   document.getElementById("my-modal").style.display="block";
                     openModal();

                    }
                      }

           }

       xhr.send(fd);

} 

function openModal() {
    document.getElementById("my-modal").style.display="block";
    document.getElementById("my-modal").className +="show";
}

function closeModal() {
    document.getElementById("my-modal").style.display="none";
   document.getElementById("my-modal").className +=  document.getElementById("my-modal").className.replace("show", "");
}
