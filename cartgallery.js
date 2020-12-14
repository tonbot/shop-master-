

function decrease_cart(inputElementID, price){
    var Qprice=document.getElementById(price);
    var initiaL_price=Qprice.getAttribute("data-iPrice"); //this represent the price for one item;
    var qty=document.getElementById(inputElementID).value;
    if (qty > 1){
        var newQty= document.getElementById(inputElementID).value=qty-1;
        var newPrice=initiaL_price*newQty;
        Qprice.innerHTML=newPrice; //this represent the qty price
        var subtotal=document.getElementById("subtotal").innerHTML;
        var ton=parseInt(subtotal)-parseInt(initiaL_price);
        document.getElementById("subtotal").innerHTML=parseInt(ton);
       
    }
    
} 
//for increasing quantity
function increase_cart(inputElementID,price){
    var Qprice=document.getElementById(price); 
    var initiaL_price=Qprice.getAttribute("data-iPrice"); //this represent the price for one item;
    var qty=document.getElementById(inputElementID).value;
    if (qty >= 1 && qty <=9){
      var newQty= document.getElementById(inputElementID).value=++qty;
      var newPrice=initiaL_price*newQty;
      Qprice.innerHTML=newPrice; //this represent the qty price
      var subtotal=document.getElementById("subtotal").innerHTML;
      var ton=parseInt(subtotal)+parseInt(initiaL_price);
      document.getElementById("subtotal").innerHTML=parseInt(ton);
  
    }
}