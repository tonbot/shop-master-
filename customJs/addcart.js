
function decreaseQ(){
    let qty=document.getElementById("quantity").value;
    let initiaL_price=document.getElementById("price");
    let init=initiaL_price.getAttribute("data-init");
    if (qty > 1){
        document.getElementById("quantity").value=qty-1;
        var newPrice=initiaL_price.innerHTML-init;
        document.getElementById("price").innerHTML=parseInt(newPrice);
       
    }
    
} 
//for increasing quantity
function increaseQ(){
    let qty=document.getElementById("quantity").value;
    let initiaL_price=document.getElementById("price");
    let init=initiaL_price.getAttribute("data-init");
    if (qty >= 1 && qty <=9){
      var newQty= document.getElementById("quantity").value=++qty;
      var newPrice=init*newQty;
      document.getElementById("price").innerHTML=parseInt(newPrice);
  
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
    let amount=parseInt(document.getElementById("price").innerHTML.concat("00"));
    let amountinnaira=amount;
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
        ///
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


