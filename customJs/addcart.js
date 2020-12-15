
document.getElementById("btndecrease").style.display="none";
function check(){
var ini=document.getElementById("quantity").value;
if (ini==1 || ini < 1  ){
    document.getElementById("btndecrease").style.display="none";   
    document.getElementById("btnincrease").style.display="inline";
    var p=document.getElementById("price").innerHTML;
    var ton=document.getElementById("quantity").value;
    document.getElementById("price").innerHTML=p/ton;
}
if ( ini >= 10 ){
    document.getElementById("btndecrease").style.display="inline";   
    document.getElementById("btnincrease").style.display="none";
}
if (ini > 1 ){
    document.getElementById("btndecrease").style.display="inline";   
}
if (ini=0){
    document.getElementById("quantity").value="1"
}
}
function increaseQ(){
    var ini=document.getElementById("quantity").value;
    var p=document.getElementById("price").innerHTML;
    if ( ini >=0 ){
      document.getElementById("quantity").value=++ini;
      var ton=document.getElementById("quantity").value;
        document.getElementById("price").innerHTML=p*ton;
        
         check();    
    }
    if ( ini==10 || ini > 10 ) {
        document.getElementById("btnincrease").style.display="none"; 
        check();
    }
   
}


function decreaseQ(){
    var initial=document.getElementById("quantity").value;
    document.getElementById("btnincrease").style.display="inline";
    var p=document.getElementById("price").innerHTML;
    if (initial<=1){
        document.getElementById("btndecrease").style.display="none";  
        var ton=document.getElementById("quantity").value;
        document.getElementById("price").innerHTML=p/ton;
    }

    document.getElementById("quantity").value=initial - 1;
    var ton=document.getElementById("quantity").value;
    document.getElementById("price").innerHTML=p/ton;
        check();

}
