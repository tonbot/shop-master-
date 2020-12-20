let userid=sessionStorage.getItem("userId");
 document.body.addEventListener('click', function(){
    document.getElementById("response").style.display="none";
 })

//////this function addto cart
function addcart(input){
   let productId=document.getElementById(input).value;
   // creating new form Object and appending value; 
   let fd=new FormData();
   fd.append("productId", productId);
   fd.append("userid", userid);
   //ajax request calling addCartIndex.php
   let url="addCartIndex.php"
   var xhr=new XMLHttpRequest();
   xhr.open("POST", url, true);
    xhr.onreadystatechange= function() {
        if(xhr.readyState==4 && xhr.status==200) {
             var data= this.responseText;
             console.log(data);
                 document.getElementById("response").style.display="block"
                 document.getElementById("response").innerHTML=" ONE PRODUCT ADDED SUCCESSFULY ";    
        }
    }
    xhr.send(fd);
}


/////this function count number of product we have in our carts
     function catcount(){
        let fd=new FormData();
        fd.append("userid", userid);
        var xhr=new XMLHttpRequest();
        xhr.open("POST", "cartcount.php", true);
        xhr.onreadystatechange= function() {
            if(xhr.readyState==4 && xhr.status==200) {
            
            var data= JSON.parse(this.responseText);
                console.log(data);
                document.getElementById("cartcount").innerHTML=data;
            }
        }
        xhr.send(fd);
    }