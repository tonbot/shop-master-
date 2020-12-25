

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




 function prices(){
    let subtotal= document.getElementById("subtotal").innerHTML;
     document.getElementById("amount").innerHTML=subtotal;
 }


  function payWithPaystack(){
      let amount=document.getElementById("amount").innerHTML;
      let amountinnaira=amount.concat("00");
      let emaill=document.getElementById("email").value;
      let key='pk_test_8c4eb5938095bfce7e0cc3310d6a8279ff31711b'
      let currency="NGN"

    var handler = PaystackPop.setup({
      key: key,
      email: emaill,
      amount:  amountinnaira,
      currency: currency,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), 
            metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2347068801993"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
