function moda1(){
    var xhr=new XMLHttpRequest();
    xhr.open("POST", "moda.php", true);

    xhr.onreadystatechange= function() {
        if(xhr.readyState==4 && xhr.status==200) {
        
        var data= JSON.parse(this.responseText);
            console.log(data);
            data1(data);
        }
    }
    xhr.send();
}

      function data1(data2){
          for (var i=0; i<data2.length; i++){
                var res=data2[i];
  /// getting my container id;
        var con1=document.getElementById("con1");
        var con2=document.getElementById("con2");
        var row1=document.getElementById("row1");
 ///  create new element ;
        var col=document.createElement("div")
        var form=document.createElement("form")
        var link=document.createElement("a")
        var img=document.createElement("img");
        var p1=document.createElement("p");
        var p2=document.createElement("p");
       // var btn=document.createElement("button");
///   setting the properties and value of the element created
     // first for img
       img.src=res.image;
       img.className="img-fluid";
       img.id="image";
       img.style.width="240px";
       img.style.height="135px";
    //second for p1;
       p1.innerHTML=res.name;
    //third for btn
    /*  btn.innerHTML="add to cart";
      btn.type="submit";
      btn.className="btn btn-success"
      btn.id="bot"
      */
    //fourth for col
      col.className="col-sm-4 col1";
      
    //fifth for p2
    p2.innerHTML="price:$".concat(res.price);
    p2.id="price";
    p2.style.textDecoration="underline";
    //sixth for from
    var code=res.code;
    form.action="cartgallery.php?act=".concat(res.id);
    form.id="frm";
    form.method="post"
    //seventh for link
     link.href="addcart.php?act=".concat(res.id);
 /// append all to form  
     link.appendChild(img); 
     form.appendChild(link);
     form.appendChild(p1);
     form.appendChild(p2)
    // form.appendChild(btn);


///  append from element created to  col element

     col.appendChild(form)  
/// append col to row
   row1.appendChild(col);
/// append row1  to con2
   con2.appendChild(row1);
/// append con2 to con1
   con1.appendChild(con2);
        

          }
      }

      function catcount(){
        let userid=sessionStorage.getItem("userId");
         
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