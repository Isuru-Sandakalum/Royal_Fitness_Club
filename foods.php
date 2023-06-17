<?php require('./connection.php'); 
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!--Css style sheet-->
    <link rel="stylesheet" href="./css/styles.css"/>

    <!--js script-->
    <script src="./Java_script/Main_java.js"> </script>

    <!--Icon pack-->
    <script src="https://kit.fontawesome.com/9d8f9d64aa.js" crossorigin="anonymous"></script>

    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!--AOS lib js-->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />




  <title>Shop</title>
  </head>


  <body>

    <!--preloader-->
    <div class="container-fluid" id="preloader">
      
    </div>

    <!--section 1 navigation_bar-->    
    <nav class="navbar navbar-expand-lg navbar-light default" id="section_1" style="margin-left:20px; margin-right: 20px;">

      <div class="container-fluid">

          <a class="navbar-brand" id="nav_brand" href="./index.php">Royal Fitness Club</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          
          </button>
        
          <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a class="nav-link" id="nav_active" href="./index.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="nav_active" href="./registration.html">Membership</a>
              </li> 

              <li class="nav-item">
                <a class="nav-link" id="nav_active" href="./gallery.html">Gallery</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" id="nav_disable" href="#">Shop <span class="sr-only">(current)</span> </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" id="nav_active" href="./about us.html">About</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="nav_active" href="./contact.html">Contact</a>
                </li>
             
            </ul>

            <ul class="navbar-nav ml-auto ">

                <?php
                    if(isset($_SESSION['logged_in'])&& $_SESSION['logged_in']==true){
                  
                    
                      echo"
                      <div style = 'color:white;'>
                      <i class='fa-solid fa-user'></i> &nbsp;
                      $_SESSION[username]
                      <button class = 'btn_1' onclick ='logout();'> Log out </button>
                      </div>
                      ";
                    
                    }
                    else{
                      echo"
                      
                      <div>
                        <button class ='btn_1' type='button' onclick='login()'>LOGIN</button>
                        <button class ='btn_2' type='button' onclick='register()'>REGISTER</button>
                      </div>
                      
                      ";
                    }
    
                ?>

            </ul>
            
          </div>
      </div>


     
    </nav>

    <!--Search-bar-->
    <div class="container" id="search_bar">
      <form class="mx-auto" >
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" id="search-item" placeholder="Type here">
        <button type="button"> Search </button>
      </form>
    </div>

    <br>

      <!--Second_nav-->
      <ul class="nav justify-content-center" id="nav_catelog" data-aos="fade-up" style="margin-bottom:5px;">
        <li class="nav-item">
          <a class="nav-link" id="active" href="./shop.php">Supplements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="active" href="./accecories.php">Accecories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"  href="./foods.php">Foods & Snaks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="active" href="./vitamins.php">Vitamins</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping" id="cart-icon"></i></a>
        </li>
      </ul>


  
      <h3 class="topics"> Foods & Accecories </h3>

      <!--Shop_content-->
      <div class="container mx-auto text-center" id="products">
        
        <br>
        <br>
        <div class="row">
          <!--Product_1-->
          <div class="col-md-4">

            <div class="product-box">
              <img src="./Drawables/fit-crunch.jpg" class="product-img">
              <h2 class="product-title">FITCRUNCH</h2>
              <span class="product-price">LKR 1200.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%; color: black;">Rating : 5 From 1300 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>
            
          </div>

          <!--Product_2-->
          <div class="col-md-4">
            <div class="product-box">
              <img src="./Drawables/keto-bar.jpg" class="product-img">
              <h2 class="product-title">KETO BARS</h2>
              <span class="product-price">LKR 800.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%; color: black;">Rating : 4.5 From 900 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>

          </div>

          <!--Product_3-->
          <div class="col-md-4">

            <div class="product-box">
              <img src="./Drawables/kirkland-nut-bars.jpg" class="product-img">
              <h2 class="product-title">KIRKLAND SIGNATURE</h2>
              <span class="product-price">LKR 800.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%; color: black;">Rating : 4.5 From 3000 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>

          </div>
        
        </div>

        <br>
        <br>
        <div class="row">
          <!--Product_1-->
          <div class="col-md-4"data-aos="fade-up">

            <div class="product-box">
              <img src="./Drawables/naturevalley.jpg" class="product-img">
              <h2 class="product-title">NATURE VALLEY</h2>
              <span class="product-price">LKR 700.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%;  color: black;">Rating : 5 From 5000 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>
            
          </div>

          <!--Product_2-->
          <div class="col-md-4"data-aos="fade-up">
            <div class="product-box">
              <img src="./Drawables/kirkland-chocolate-chip-cookie.jpg" class="product-img">
              <h2 class="product-title">CHIP COOKIE DOUGH</h2>
              <span class="product-price">LKR 500.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%; color: black; ">Rating : 4.5 From 1500 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>

          </div>

          <!--Product_3-->
          <div class="col-md-4"data-aos="fade-up">

            <div class="product-box">
              <img src="./Drawables/protein-box-2.jpg" class="product-img">
              <h2 class="product-title">PROTEINE BOX</h2>
              <span class="product-price">LKR 9000.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%;  color: black;">Rating : 4 From 100 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>

          </div>
        
        </div>

        <br>
        <br>
        <div class="row">
          <!--Product_1-->
          <div class="col-md-4"data-aos="fade-up">

            <div class="product-box">
              <img src="./Drawables/rxbar-chocolate-sea-salt.jpg" class="product-img">
              <h2 class="product-title">RXBAR</h2>
              <span class="product-price">LKR 800.00</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%;  color: black;">Rating : 4.5 From 300 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>
            
          </div>

          <!--Product_2-->
          <div class="col-md-4"data-aos="fade-up">
            <div class="product-box">
              <img src="./Drawables/Quamtrax-Protein-Bar.jpg" class="product-img">
              <h2 class="product-title">QUAMATRAX PROTEINE BARS</h2>
              <span class="product-price">LKR 26000</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%; color: black;">Rating : 4.5 From 1100 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>

          </div>

          <!--Product_3-->
          <div class="col-md-4"data-aos="fade-up">

            <div class="product-box">
              <img src="./Drawables/naturevalley-crunchy.jpg" class="product-img">
              <h2 class="product-title">CRUNCHY OATS</h2>
              <span class="product-price">LKR 11000</span>
              <p style="color:yellowgreen; font-size:15px; padding: 0%;"> - In stock - </p>
              <p style="padding:0%; color: black;">Rating : 4.5 From 1000 views</p>
              <P style="padding:0%; color: #FEB142;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half"></i>
              </P> 
              <i  class="fa-solid fa-cart-plus add-cart"style="color:crimson;"></i> 
              
            </div>

          </div>
        
        </div>

        <br>
        <br>
        <div class="row mx-auto">
          <div class="col-md-3"></div>
          <div class="col-md-6">
           
            <ul class="nav justify-content-center" data-aos="fade-up" id="page_nav" style="margin-bottom:5px;">
              <li class="nav-item">
                <a class="nav-link disabled"  href="#"><i class="fa-solid fa-arrow-left"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="active" href="#">1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fa-solid fa-arrow-right"></i></a>
              </li>
           
            </ul>
            
          </div>
          <div class="col-md-3"></div>
       
        </div>

        
      </div>
          
      <!--Cart-->
      <div class="cart" style="background-color:black ;">
            <h3 class="cart-title"> Your cart </h3>
            <br>
           
            <!--Cart-content-->
            <div class="cart-content">          
            </div> 
          
            <!--Total-->
            <div class="total">
              <div class="total-title">Total</div>
              <div class="total-price">LKR 0.00</div>
            </div>
            
            <!--buy-now-btn-->
            <button type="button" class="buy_btn">Buy Now</button>

            <!--close btn-->
            <i class="fa-solid fa-xmark" id="cart-close"></i>
         

      </div>

      <!--Section_11_Footer-->
      <footer class="footer"  data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4 style="color:#FEB142 ; font-size: 25px; font-weight: bold;" id="brand_footer">Royal Fitness club</h4>
          
            <p class="footer-links">
              <a href="./home.php">Home</a>
              |
              <a href="./shop.php">Shop</a>
              |
              <a href="./contact.php">Contact</a>
              
              
          </p>

          <P style="text-align:justify; font-size: 14px;" >we are royal fitness club chilaw, we are a one of leading 
            fitness club in the puttlam district. We are pleassure to searvice</P>
          
            <div class="social-links">
              <a href="#"><i class="fa-solid fa-phone"></i></a>
              <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
              <a href="#"><i class="fa-sharp fa-solid fa-envelope"></i></a>
              <a href="#"><i class="fa-solid fa-location-dot"></i></a>
            </div>

          </div>
          <div class="footer-col">
            <h4>More Links</h4>
            <ul>
              <li><a href="./gallery.php">Gallery</a></li>
              <li><a href="./registration.php">Membership</a></li>
              <li><a href="./privacy.php">Privacy policy</a></li>
              <li><a href="./privacy.php">Terms & Conditions </a></li>
            </ul>

          </div>
          <div class="footer-col">
            <h4>Royal fitness shop</h4>
            <ul>
              <li><a href="./foods.php">Snaks</a></li>
              <li><a href="./vitamins.php">Vitamins</a></li>
              <li><a href="./accecories.php">Accecories</a></li>
              <li><a href="./shop.php">Suppliments</a></li>
            </ul>

          </div>

          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://m.facebook.com/profile.php?id=100067732195135&_rdr"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
              <input type="text" style="width:250px ; height: 40px; margin-bottom: 7px; margin-top: 7px; text-align:start; font-size: 14px; padding: 7px;" placeholder="Comment"> 
              <input type="text" style="width:250px ; height: 40px; margin-bottom: 10px;text-align:start; font-size: 14px;  padding: 7px; " placeholder="Email Address"> 
              <button type="button" class="btn btn-outline-light">Subscribe</button>
              <br>
            </div>
          </div>
        <br>
        <div class="footer-copyright text-center py-3">
          <p style="font-size:12px ;"> &copy; Copyright All Right reserved | Royal fitness.com | Royal fitness shop | Royal fitness gym </p>
        </div>



          </div>
      </footer>
       
      

  
       



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!--Sweetalert-cdn-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!--Loader js codes-->
    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function(){  
       setTimeout(function (){
      loader.style.display="none";

      },2000);
    
      })
    </script>
  

    <!--Cart-css-->
    <script>

      //cart options
      let cartIcon = document.querySelector("#cart-icon");
      let cart = document.querySelector(".cart");
      let cartClose = document.querySelector("#cart-close");

      //open_cart
      cartIcon.onclick = () => {
        cart.classList.add("active");
      };

      //close_cart
      cartClose.onclick = () => {
        cart.classList.remove("active");
      };
      
      //inside_codes
      if(document.readyState == "loading"){
        document.addEventListener("DOMContentLoaded",ready);
      }
      else{
        ready();
      }


      //remove items
      function ready(){
       
        var removeCartBtn = document.getElementsByClassName("cart-remove");
        console.log(removeCartBtn);
        for(var i = 0; i<removeCartBtn.length; i++){
          var button = removeCartBtn[i]
          button.addEventListener("click" , removeCartitem);
        }
       

        //quantity change
       var quantityInput = document.getElementsByClassName ("cart-quantity");
       for(var i = 0; i < quantityInput.length; i++){
        var input = quantityInput[i];
        input.addEventListener("change",quantityChanged);
       } 

        //add to cart
        var addCart = document.getElementsByClassName("add-cart");
        for(var i = 0; i< addCart.length; i++){
          var button = addCart[i];
          button.addEventListener("click", addCartClicked);
          
        }
        
        //buy btn
        document.getElementsByClassName("buy_btn")[0].addEventListener("click",buyBtnClick);

      }

      //function_buyBtnClick
      function buyBtnClick(){

        swal({
               title: "Done",
               text: "Your order has placed",
               icon: "success",
               button: "OK",
              }).then(
                function(){
                  window.location = "./payment.php";
                }
              )

        var cartContent = document.getElementsByClassName("cart-content")[0];
        while(cartContent.hasChildNodes()){
          cartContent.removeChild(cartContent.firstChild);
        }
        updatetotal();
      }


      function removeCartitem(event){
        var buttonClicked = event.target;
        buttonClicked.parentElement.remove();
        swal("Done", "Your Item removed!", "success");
        updatetotal();


      }

      //quantity_changed funtion
      function quantityChanged(event){
        var input = event.target;
        if(isNaN(input.value) || input.value <= 0 ){
          input.value = 1;
        }

        updatetotal();
      }


      //add to cart btn
      function addCartClicked(event){
        var button = event.target;
        var shopProducts = button.parentElement;
        var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
        var price = shopProducts.getElementsByClassName("product-price")[0].innerText;
        var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
        swal("Done", "Item has added to the cart !", "success");
        addProductToCart(title, price, productImg);
        updatetotal();
      }

      


      //addproducts to cart
      function addProductToCart(title, price, productImg){
        var cartShopBox = document.createElement("div");
        cartShopBox.classList.add("cart-box");
        var cartItems = document.getElementsByClassName("cart-content")[0];
        var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
        for(var i = 0; i< cartItemsNames.length; i++){

          if(cartItemsNames[i].innerText == title){
          swal("Warning!", "this item already added to the cart!", "warning");
          return;
          }
          
          
        }

        var cartBoxContent =`
                            <img src="${productImg}" class="cart-img">
                            <div class="detail-box">
                            <div class="cart-product-title">${title}</div>
                            <div class="cart-price">${price}</div>
                            <input type="number" value="1" class="cart-quantity">
                            </div>
                            <!--Remove cart-->
                            <i class="fa-solid fa-trash cart-remove"></i>`;

        cartShopBox.innerHTML = cartBoxContent;
        cartItems.append(cartShopBox);
        cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartitem);
        cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantityChanged);

        
      }
     
     


      //total
      function updatetotal(){
        var cartContent = document.getElementsByClassName("cart-content")[0];
        var cartBoxs = document.getElementsByClassName("cart-box");
        var total = 0;
        for(var i = 0; i< cartBoxs.length; i++){
          var cartBox = cartBoxs[i];
          var priceEle = cartBox.getElementsByClassName("cart-price")[0];
          var quantityEle = cartBox.getElementsByClassName("cart-quantity")[0];
          var price = parseFloat(priceEle.innerText.replace("LKR",""));
          var quantity = quantityEle.value
          total= total + price * quantity;

        }

          total = Math.round(total*100)/100;
          document.getElementsByClassName("total-price")[0].innerText = "LKR" +" "+ total;
          
        
      }

    </script>
    
    <script>

      function logout(){
        window.location = "./logout.php";
      }

      function login(){
        window.location="sign_in_page.php";
      }

      function register(){
        window.location = "sign_up_page.php";
      }
    </script>
  
    <!--AOS Lib Initialize-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
            AOS.init({
              offset:400,
              duration:1000,
            });
    </script>
  
  </body>
</html>