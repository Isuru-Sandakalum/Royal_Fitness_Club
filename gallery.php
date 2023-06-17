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
    <script type="text/javascript" src="../Royal_fitness_club/Java_script/Main_java.js"> </script>

    <!--Icon pack-->
    <script src="https://kit.fontawesome.com/9d8f9d64aa.js" crossorigin="anonymous"></script>

    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!--AOS lib js-->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />




  <title>Gallery</title>
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
                <a class="nav-link" id="nav_disable" href="./gallery.html">Gallery</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" id="nav_active" href="#">Shop <span class="sr-only">(current)</span> </a>
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

  
    <img src="./Drawables/gallery.png" class="img-fluid" alt="Responsive image">

    <!--section_gallery topic-->
    <div class="container-fluid" id="section_4">
      <div class="row">
        <div class="col-12">
          <h2 class="topics">Image gallery</h2>
        </div>  
      </div>
    </div>

    <div class="container" id ="load"  data-aos="fade-up" >
    <div class="box-container">
    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>
 
    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <!--img src=""-->
        </div>
        <div class="content">
            <h3>Add image</h3>
            <p>Add relevent data 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fa-sharp fa-solid fa-star"></i>  Rating </span>
            </div>
        </div>
    </div>
    

    </div>

    <div id="load-more"> Load more </div>
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

    <!--Loader js codes-->
    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function(){  
       setTimeout(function (){
      loader.style.display="none";

      },2000);
    
      })


      //Loadmore_btn
      let loadMoreBtn = document.querySelector('#load-more');
         let currentItem = 3;
    
         loadMoreBtn.onclick = () =>{
            let boxes = [...document.querySelectorAll('.container .box-container .box')];
            for (var i = currentItem; i < currentItem + 3; i++){
            boxes[i].style.display = 'inline-block';
            }
            currentItem += 3;
    
                if(currentItem >= boxes.length){
                    loadMoreBtn.style.display = 'none';
                 }
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