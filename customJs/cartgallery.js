

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



/* payment module
// this function implementing payment method
//using paystack

**/
  function payWithPaystack(){
      let phone=sessionStorage.getItem("userPhone");
      let userId=sessionStorage.getItem("userId");
      let email=sessionStorage.getItem("userEmail");
      let amount=document.getElementById("subtotal").innerHTML;
      let amountinnaira=amount.concat("00");
      let paymentRef=''+Math.floor((Math.random() * 1000000000) + 1);
      payment(phone,userId,email,amountinnaira,paymentRef);

  }

  function payment(phone,userId,email,amountinnaira,paymentRef){
      let key='pk_test_8c4eb5938095bfce7e0cc3310d6a8279ff31711b'
      let currency="NGN"

    var handler = PaystackPop.setup({
      key: key,
      email: email,
      amount:  amountinnaira,
      currency: currency,
      ref:paymentRef , 
            metadata: {
         custom_fields: [
            {
                display_name: "AJIBOYE",
                variable_name: "TOYIN",
                value: phone
            }
         ]
      },


      callback: function(response){
        if (response.status=="success" && response.message=="Approved"){
          /////create payment history tbale and payment page
          /////
              let xhr1=new XMLHttpRequest();
              let url1="order.php";
              let fd1=new FormData();
              fd1.append("userId", userId);

              xhr1.open("post", url1, true);
              xhr1.onreadystatechange=function(){
                     var res=this.responseText;
                     console.log(res);
              }
              xhr1.send(fd1)   
           /////create payment history tbale and payment page ends here



             ////logging Transaction
            ////
           ///logging Transaction start here
              let xhr2=new XMLHttpRequest();
              let url2="paymentlog.php";
              let fd2=new FormData();
              fd2.append("billAmount",       amountinnaira);
              fd2.append("transactionRef",   response.reference);
              fd2.append("transactionResp",  response.message);
              fd2.append("paymentStatus",    response.status);
              fd2.append("userId",           userId);

              xhr2.open("post", url2, true);
              xhr2.onreadystatechange=function(){
                     // var res=this.responseText;
                     // console.log(res);
                     emptycart(userId);
              }
              xhr2.send(fd2)
              //////logging Transaction ends here
              //////


          
            } //closing of if
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
/////payment implementation ends here
//end





//////function emptyCart
    function emptycart(userId) {
      let xhr3=new XMLHttpRequest();
      let url="emptyCart.php";
      let fd=new FormData();
      fd.append("userId", userId);

      xhr3.open("post", url, true);
      xhr3.onreadystatechange=function(){
             location.href="index.php";
      }
      xhr3.send(fd) 
    }
////////emptyCart ends here