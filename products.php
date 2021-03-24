<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>LoginPage-Milan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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
    </div>

    
    <!------- products --------->
    
    
    <div class="mixed">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Short by Price</option>
                <option>Short by Popularity</option>
                <option>Short by Sale</option>
            </select>
        </div><br>
        
        <div class="row">
            <div class="col-4">
               <a href="ProductsPageItem1.php"><img src="images/blacklehenga.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem1.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="col-4">
                 <a href="Product2_detail.php"><img src="images/newmarriage2.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem2.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="col-4">
                 <a href="Product3_detail.php"><img src="images/marriage1.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem3.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="col-4">
                <a href="ProductsPageItem4.php"><img src="images/newmarriage.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem4.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="row">
            <div class="col-4">
                <a href="ProductsPageItem5.php"><img src="images/new%20lehenga3.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem5.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="col-4">
                <a href="ProductsPageItem6.php"><img src="images/bridal.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem6.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="col-4">
                <a href="ProductsPageItem7.php"><img src="images/lehenga.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem7.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            <div class="col-4">
                <a href="ProductsPageItem8.php"><img src="images/red%20skirt.jpeg" height="450px"></a>
                <!-- <a href="ProductsPageItem8.php"> -->
                <h5>price 1000Rs</h5></a>
                
            </div>
            </div>
        </div>
            
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
        <script>
        console.log("running")
        let carts = document.querySelectorAll(".cart_p");

        let productsList =[
        { 
            name: 'Black lehenga',
            tag:  'blacklehenga',
            price: 1000,
            incart: 0
        },
        { 
            name: 'Net lehenga',
            tag:  'newmarriage2',
            price: 1000,
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