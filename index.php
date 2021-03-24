<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Milan | E-commerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>
    <div class="header"> 
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpeg" width="150px" height="150px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><?php echo (isset($_SESSION['username'])) ? ("<i class='fa fa-user'></i>".$_SESSION['username']) : (NULL); ?></li>
                </ul>
            </nav>
            <h1 class="CartNumber"><a href="cart.php"><img src="images/cart.jpeg" width="30px" height="30px"><span class="grab" style="font-size: 18px;">0</span></a></h1>
            <img src="images/menu.png" class="menu-icon" width="25px" height="25px" onclick="menutoggle()">
            <?php echo (isset($_SESSION['username'])) ? ('<a href="logout.php" tite="Logout"><button class="btn" style="padding: 6px 18px; margin-left: 10px;">Logout</button></a>') : (NULL); ?>
            <!-- <a href="logout.php" tite="Logout"><button class="btn" style="padding: 6px 18px; margin-left: 10px;">Logout</button></a> -->
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Lifestyle With New Fashion!</h1>
                <h5><i>By offering a fully consultative service to our clients,<br> we strive to provide a tailored,<br> realistic approach<br> to our Customers</i>.</h5>
                <a href="products.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/logo%20is%20the%20best.jpg" width="700px" height="300px">
            </div>
        </div>
    </div>
    </div><br>

<!------ featured categories ------->
    
    
<!------ featured products ------->
    <div class="small container">
        <h2 class="title">Wedding Special Lehenga's</h2>
        <div class="row">
            <div class="col-4">
                 <a href="Product1_detail.php"><img src="images/marriage2.jpeg" height="450px"></a>
                <a href="Product1_detail.php">
                <h5>price 1000Rs</h5></a>
              
            </div>
            <div class="col-4">
                <a href="Product2_detail.php"><img src="images/newmarriage2.jpeg" height="450px"></a>
                <a href="Product2_detail.php">
                <h5>price 1000Rs</h5></a>
            </div>
            <div class="col-4">
                <a href="Product3_detail.php"><img src="images/marriage1.jpeg" height="450px"></a>
                <a href="Product3_detail.php">
                <h5>price 1000Rs</h5></a>
            </div>
            <div class="col-4">
                <a href="product-details.php"><img src="images/ladies%20special.jpeg" height="450px"></a>
                <a href="product-details.php">
                <h5>price 1000Rs</h5></a>
            </div>
        </div>
    </div>
    <h2 class="title">Latest Designs</h2>
    <div class="row">
            <div class="col-4">
                <a href="Gown1.php"><img src="images/best%20gown.jpeg" height="450px"></a>
                <a href="Gown1.php">
                <h5>price 10,000Rs</h5></a>
            </div>
            <div class="col-4">
                <a href="Gown2.php"><img src="images/wedding%20white%203.jpeg" height="450px"></a>
                <a href="Gown2.php">
                <h5>price 8000Rs</h5></a>
            </div>
            <div class="col-4">
                <a href="Gown3.php"><img src="images/lehenga2.jpeg" height="450px"></a>
                <a href="Gown3.php">
                <h5>price 10,000Rs</h5></a>
            </div>
            <div class="col-4">
                 <a href="Gown4.php"><img src="images/reception2.jpeg" height="450px"></a>
                <a href="Gown4.php">
                <h5>price 9000Rs</h5></a>
            </div>
    </div>
    
    <div class="categories">
        <div class="small-container">
            <h2 class="title">Kurti Designs</h2>
            <div class="row">
            <div class="col-3">
                <img src="images/kurti2.jpeg" height="430px">
            </div>
            <div class="col-3">
                <img src="images/kurti3.jpeg">
            </div>
            <div class="col-3">
                <img src="images/kurti1.jpeg">
            </div>
            </div>
        </div>
    </div>
        
<!-------- offer ------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/receptiongown.jpeg" class="offer-img" height="550px" >
                </div>
                <div class="col-2">
                    <h1>Exclusively Available at<br>Milan Tailor's</h1><br>
                    <h4>Reception Special</h4>
                    <small>There is something about a Reception gown, prettier than any other gown in the world.<br>When it comes to your wedding outfits, it’s always best to be sure about your choice of outfits. give your heavy lehengas a miss and opt for some stylish silhouettes and edgy designs.</small><br>
                    <a href="Reception_details.php" class="btn">Buy Now &#8594</a>
                
                
                </div>
            </div>
        </div>
    </div>
    
<!------- footer --------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Andriod and ios mobile phones.</p>
                    <div class="app-logo">
                        <img src="images/download%20new1.jpg" height="48px">
                        <img src="images/istore.jpeg">
                    </div>
                </div>
                
                <div class="footer-col-2">
                    <img src="images/logo.jpeg" width="200px" height="200px">
                    <p>Online Custom Tailoring & Sewing Services for Women <br>
                       In this digital age,you’ve been wondering how your wardrobe can be better,stitch 
                        clothes online as per your designs, taste and, most importantly, fit.</p>
                </div>
                
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Posts</li>
                        <li>Join Affiliate</li>
                        <li>Return Policies</li>
                    </ul>
                </div>
                
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Twitter</li>
                        <li>Youtube</li>
                        <li>Facebook</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Milan Tailor's</p>
        </div>
    </div>
    
<!-----------js for toggle menu------->
        
        <!-----------js for toggle menu------->
    
    <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
        <script>
        console.log("running")
        let carts = document.querySelectorAll(".cart_p");

        let productsList =[
        ];
        
        for(let i=0;i< carts.length; i++){
          carts[i].addEventListener('click',() =>{
           // console.log("added to cart");
            cartNumbers(productsList[i]);
            totalCost(productsList[i]);
 })
}

function onLoadCartNumbers(){
    let productNo =localStorage.getItem("cartNumbers");

    if (productNo) {
        document.querySelector('.grab').textContent =productNo;
    }
}
function cartNumbers(productsList){
    console.log("the product clicked is:",productsList);
     let productNo =localStorage.getItem("cartNumbers");
     // console.log(productNo);
     productNo =parseInt(productNo);     // to convert string into number
     // console.log(typeof productNo);      

    if (productNo) {
        localStorage.setItem('cartNumbers' , productNo +1);
        document.querySelector('.grab').textContent =productNo +1;
        alert("Item added to cart");
    }
    else{
        localStorage.setItem('cartNumbers' , 1);
        document.querySelector('.grab').textContent =1;
        alert("Item added to cart");
    }
    setItems(productsList);
}

function setItems(productsList){
    let cartItems=localStorage.getItem('productsInCart');
    cartItems =JSON.parse(cartItems);
    console.log("my cart items are",cartItems);
    if (cartItems !=null) {
        if(cartItems[productsList.tag] == undefined){
            cartItems={
                ...cartItems,
                [productsList.tag]:productsList
            }
        }
        cartItems[productsList.tag].incart +=1;
    }
    else{
     productsList.incart = 1;

     cartItems={
        [productsList.tag]:productsList
       }
    }
    localStorage.setItem("productsInCart",JSON.stringify(cartItems));
}
function totalCost(productsList){
      // console.log("the products price is",productsList.price);
      let cartCost=localStorage.getItem('totalCost');
      console.log("my cartcost is",cartCost);
      // console.log(typeof cartCost);
      if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem('totalCost',cartCost + productsList.price);
      }
      else{
        localStorage.setItem("totalCost",productsList.price);
      }
}
function displayCart(){
    let cartCost=localStorage.getItem('totalCost');
   let cartItems = localStorage.getItem("productsInCart");
   cartItems=JSON.parse(cartItems);
   let products_container=document.querySelector('.product');
   // console.log(cartItems);
   if (cartItems && products_container) {
       products_container.innerHTML='';
       Object.values(cartItems).map(item =>{
           products_container.innerHTML += `
           <div class="products_container">
           <div class="product-header">
           <div class="product">
           <i class="far fa-times-circle cross"></i>
           <img style="width:40%;" src="./images/${item.tag}.jpeg">
           </div>
           <div class="text_align"><span>${item.name}</span></div>
           <div class="price">${item.price},00</div>
           <div class="quantity">&nbsp&nbsp&nbsp&nbsp
           <i class="fas fa-caret-left"></i>
           <span>${item.incart}</span>
           <i class="fas fa-caret-right"></i></div>
           <div class="total">
                $${item.incart * item.price},00
           </div>        
           </div>
           </div> `
       });
            products_container.innerHTML += `
            <div class="basket_total">
               <h4 class="basketTotalTitle">
                  Basket Total
                  </h4>
                <h4 class="basketTotal">
                    $${cartCost},00
                </h4>

            `
   }
}
 onLoadCartNumbers();
 displayCart();
    </script>
    
        <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>    
    
</body>
</html>