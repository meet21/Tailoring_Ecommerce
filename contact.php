<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>LoginPage-Milan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="navbar">
            <div class="logo">
             <img src="images/logo.jpeg" width="150px" height="150px">
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
            <a href="cart.php"><img src="images/cart.jpeg" width="30px" height="30px"><span class="grab">0</span></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            <?php echo (isset($_SESSION['username'])) ? ('<a href="logout.php" tite="Logout"><button class="btn" style="padding: 6px 18px; margin-left: 10px;">Logout</button></a>') : (NULL); ?>
        </div>
    </div>

<!------ contact us ------>  

<div class="contact-page">
    <div class="Newcontainer">
        <div class="row">
            
            
            <div class="col-2">
                <div class="form-Newcontainer">
                    <div class="form-btn">
                        <h2>Contact Us</h2>
                        
                    </div>
                    <form id="LoginForm" method="POST" action="contactreg.php">       
                        <input type="text" placeholder="Name" id="Name" name="Name">
                        <input type="text" placeholder="Contact No" name="Contact" id="Contact">
                        <input type="email" placeholder="Email" name="Email" id="Email">
                        <input type="text" placeholder="Message" name="Message" id="Message">
                        <input type="text" placeholder="Reviews If Any" name="Reviews" id="Reviews">
                        <button  class="btn">Send</button>
                    </form>
                    
                </div>
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
                        <img src="images/download%20new1.jpg" height="45px;">
                        <img src="images/istore.jpeg">
                    </div>
                </div>
                
                <div class="footer-col-2">
                    <img src="images/logo.jpeg" width="200px" height="200px">
                    <p>Online Custom Tailoring & Sewing Services for Women in Mumbai<br>
                       In this digital age, the way we live is changing and so is the way we relate to fashion.
                        If you’ve been wondering how your wardrobe can be better, we recommend that you stitch 
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
    
<!--------js for toggle form-------> 
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
        { 
            name: 'twinning special',
            tag:  'ladies%20special',
            price: 5100,
            incart: 0
        },
        { 
            name: 'purple dress',
            tag:  'purpledress1',
            price: 150,
            incart: 0
        }
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
        
    var LoginForm = document.getElementById("LogiinForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
        
        function register(){
            
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        
        function login(){
            
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    
    </script>
    
    
</body>
</html>
   