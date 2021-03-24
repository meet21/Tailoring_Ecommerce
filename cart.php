<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Products-details-Milan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">  <!--ion icons-->
    <style type="text/css">
        .products_container
            {
              max-width: 600px;
              justify-content: space-around;
              margin: 0 auto;
              margin-top: 50px;
              display: flex;
              justify-content: center;
              flex-wrap: wrap;
              margin-top: 50px;
              padding-bottom: 100px;
            }
        .basket_total{
            display: flex;
            justify-content: flex-end;
            width: 100%;
            padding: 10px 0;
        }
        .basketTotalTitle{
            width: 30%;
        }
        .basketTotal{
            width: 5%;
        }
        .products_container .cross{
            font-size: 20px;
            color: blue;
            position: relative;
            align-items: center;
            cursor: pointer;
            bottom:50px;
        }
        .products_container .text_align{
            display: flex;
            right: 60px;
            font-size: 15px;
            position: relative;
            align-items: center;
            cursor: pointer;
        }

        .product-header{
            width: 100%;
            max-width: 650px;
            display: flex;
            justify-content: flex-start;
            border-bottom: 4px solid lightgrey;
            margin:0 auto;
        }

    .product-title{
        width: 100%;
    }
    
    .price{
        width: 15%;
        display: flex;
        align-items: center;
          }#ff523b;
    .total{
        width: 5%;
        border-bottom: 1px solid lightgrey;
        display: flex;
        align-items: center;
          }
    .quantity{
        width: 30%;
        border-bottom: 1px solid lightgrey;
        display: flex;
        align-items: center;
          }
    </style>
</head>
<body style="text-align: center;">
    
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
    
<!------ cart items details ------>

<div class="products_container">
    <div class="product-header">
        <h5 class="product-title">PRODUCT</h5>
        <h5 class="price">PRICE</h5>
        <h5 class="quantity">QUANTITY</h5>
        <h5 class="total">TOTAL</h5>
    </div>
    <div class="product">
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=test"></script>
<script>paypal.Buttons().render('body');</script>
</div>
<!-- <div class="small-container cart-page">
    
    <table>
        <tr>
            <td><b>Product</b></td>
            <td><b>Quantity</b></td>
            <td><b>Subtotal</b></td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/ladies%20special.jpeg">
                    <div>
                        <p>Designer Pink Lehenga</p>
                        <small>Price $400</small><br>
                        <a href="">Remove</a>
                    </div>
                </div>
            
            </td>
            <td><input type="number" value="1"></td>
            <td>$400</td>
        </tr>
        
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/blacklehenga.jpeg">
                    <div>
                        <p>Designer Black Lehenga</p>
                        <small>Price $400</small><br>
                        <a href="">Remove</a>
                    </div>
                </div>
            
            </td>
            <td><input type="number" value="1"></td>
            <td>$400</td>
        </tr>
        
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/white%20lehenga.jpeg">
                    <div>
                        <p>Designer White Lehenga</p>
                        <small>Price $400</small><br>
                        <a href="">Remove</a>
                    </div>
                </div>
            
            </td>
            <td><input type="number" value="1"></td>
            <td>$400</td>
        </tr>
        
    </table>
    
    <div class="total-price">
        
        <table>
            
            <tr>
                <td>SubTotal</td>
                <td>$1200</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$35</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$1235</td>
            </tr>
        
        
        
        
        </table>
    
    
    
    </div>
</div>  -->

<!------- Checkout Form --------->    
<!-- <h5><b>Checkout Form</b></h5><br>

<div class="row">
  <div class="col-75">
    <div class="containerzz">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3><br>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3><br>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
    </div>
-->   
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
        console.log("running");
        let carts = document.querySelectorAll(".cart_p");

        let productsList =[
        { 
            name: 'Marriage special',
            tag:  'marriage2',
            price: 1000,
            incart: 0
        },
        { 
            name: 'Red lehenga',
            tag:  'newmarriage2',
            price: 1000,
            incart: 0
        },
        { 
            name: 'purple lehenga',
            tag:  'marriage1',
            price: 1000,
            incart: 0 
        },
        {
            name: 'twinning special',
            tag:  'ladies%20special',
            price: 5100,
            incart: 0
        },
        {
            name: 'Black lehenga',
            tag:  'blacklehenga',
            price: 1000,
            incart: 0
        },
        {
            name: 'Sweet pink lehenga',
            tag:  'newmarriage',
            price: 1000,
            incart: 0
        },
        {
            name: 'Navy Blue lehenga',
            tag:  'new%20lehenga3',
            price: 1000,
            incart: 0
        },
        {
            name: 'Sweet bridal',
            tag:  'bridal',
            price: 1000,
            incart: 0
        },
        {
            name: 'pearl dress',
            tag:  'lehenga',
            price: 1000,
            incart: 0
        },
        {
            name: 'cream red western wear',
            tag:  'red%20skirt',
            price: 1000,
            incart: 0
        },
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
    }
    else{
        localStorage.setItem('cartNumbers' , 1);
        document.querySelector('.grab').textContent =1;
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
</body>
</html>
   