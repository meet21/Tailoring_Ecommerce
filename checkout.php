<? php
session_start();
?>
<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">

<!-- <link rel="stylesheet" href="style.css"> -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="checkout.css"> -->
  </head>
<body>
	<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/logo.jpeg" alt="" width="100" height="100">
      <h2>Checkout form</h2>
      <p class="lead"></p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill"><span class="grab" style="font-size: 18px;">0</span></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$ <span class="cartC">0</span></strong>
          </li>
          <div style="display: none" id="Promo_code">
          <li class="list-group-item d-flex justify-content-between">
            <span style="color: red; cursor: pointer;" class="mt-1"><i class="fas fa-times" onclick="Removepromo()"></i></span>
            <span>promotion Applied</span>
            <strong>$ <span style="color: green">- $100</span></strong>
          </li>
        </div>
        </ul>
        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code" name="Promo" id="Promo">
            <button type="submit" class="btn btn-secondary" id="PROMO"">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate="" action="checkoutbackend.php" method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" />
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc_name" placeholder="" required="">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc_number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc_expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc_cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

 
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
            myFunction(productsList[i]);
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
document.getElementById("PROMO").addEventListener("click", function(event){
  event.preventDefault()
  var code = document.getElementById("Promo").value;
  // console.log(code); 
  if (code == "EKTA100") {
    let cartCost=localStorage.getItem('totalCost');
    cartCost = cartCost - 100;
    document.querySelector('.cartC').textContent = cartCost;
    document.getElementById('Promo_code').style.display = 'block';
  }
  else{
    alert("Please Enter a Valid code");
  }
});
function Removepromo(){
  document.getElementById('Promo_code').style.display = 'none';
  let cartCost=localStorage.getItem('totalCost');
    document.querySelector('.cartC').textContent = cartCost;

}
function displayCart(){
    let cartCost=localStorage.getItem('totalCost');
    document.querySelector('.cartC').textContent = cartCost;
    document.querySelector('.')
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
            </div>
                <div class="container">
                <button class="btn" id="Remove">Clear CartItems</button>
                <a href="checkout.php"><button class="btn">Checkout</button></a>
                </div>
            `
   }
   else{
    products_container.innerHTML += `
    <h3 style="margin-top:100px">Your Basket is empty </h3>    `
   }
}
 onLoadCartNumbers();
 displayCart();
 document.getElementById("Remove").addEventListener("click", myFunction);
function myFunction (){
    window.localStorage.clear();
    location.reload();

    
}
    </script>
   


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  

</body>
</html>
