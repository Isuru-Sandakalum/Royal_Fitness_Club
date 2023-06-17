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

    <!--Sweetalert-cdn-->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




  <title>Contact</title>
  </head>


  <body>

    <!--preloader-->
    <div class="container-fluid" id="preloader">      
    </div>

    <!--section 1 navigation_bar-->    
    <nav class="navbar navbar-expand-lg navbar-light default" id="section_1" style="margin-left:20px; margin-right: 20px;">

      <div class="container-fluid">

          <a class="navbar-brand" id="nav_brand" href="#">Royal Fitness Club</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          
          </button>
        
          <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a class="nav-link" id="nav_active"  href="./index.php">Home </a>
              </li>

              <li class="nav-item">
                <a class="nav-link"id="nav_active"  href="./registration.php">Membership</a>
              </li> 

              <li class="nav-item">
                <a class="nav-link" id="nav_active"  href="./gallery.php">Gallery</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" id="nav_active" href="./shop.php">Shop</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" id="nav_active" href="./about.php">About <span class="sr-only">(current)</span> </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="nav_disable" href="./contact.php">Contact</a>
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
    
    <img src="./Drawables/contact.png" class="img-fluid" alt="Responsive image">


    <!--heading contact us-->
    <div class="container-fluid" id="section_4">
      <div class="row">
        <div class="col-12">
          <h2 class="topics"> Contact Us </h2>
          <p style="text-align:center ;">Contact us through below ways to get a better service</p>
        </div>  
      </div>      
    </div>

    <!--section_contact_content-->
    <div class="container" id ="load">
        <div class="box-container">
        <div class="box">
            <div class="content" style="text-align:start;">
                   
                <div class="list" style="padding:10px ;"> 
                  <h3 style="font-size:25px;"> Send us a meessage</h3>
                 
                  <form action="./php/submit.php" method="post" id="sub_form">                
                  <label for="name">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Name "
                  />

                  <label for="comment">Comment</label>
                  <input
                    type="text"
                    class="form-control"
                    id="comment"
                    name="comment"
                    placeholder=" type your message "
                  />

                  
                  <label for="email">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder=" Email Address "
                  />
                  <input type="submit" class="btn btn-outline-light" style="margin-right:10px ;"/>

                  </form>

                  <h3 style="font-size:25px; margin-top: 20px;">Our contact details</h3>
                  <ul>
                    <li><i class="fa-solid fa-phone fa-1x"></i> +94 767189970 </li>
                    <li><i class="fa-solid fa-phone fa-1x"></i> +94 776189970 </li>
                    <li><i class="fa-brands fa-whatsapp fa-1x"></i> +94 770107870 </li>
                    <li><i class="fa-solid fa-envelope fa-1x" ></i> www.royalfitness@gmail.com</li>
                  </ul>

                </div>
            </div>
        </div>
    
        <div class="box">
            <div class="image">
                <img src="./Drawables/gym.jpg" alt="Gym_pic">
            </div>
            <div class="content">
                <h3 style="font-size: 40px;">Stay Touch with us</h3>
                <p>Keep contact us, if you have any problem regarding us let us know. Use below social midea platforms to follow us.</p>

                  <h3>Follow us</h3>
                  <div class="list_1" style="margin:10px;">
                    <ul>
                      <li><a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> </a> </li>
                      <li> <a href="https://www.instagram.com/"> <i class="fab fa-twitter"></i> </a></li>
                      <li> <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> </a></li>
                      <li> <a href="https://www.linkedin.com"> <i class="fab fa-linkedin-in" ></i> </a></li>
                    </ul>
                 </div>

            </div>

        </div>
        </div>

        <br>
        <br>
      </div>

     <div class="container" id ="load"  data-aos="fade-up" >
      <div class="box-container">
      <div class="box" style="background-color:#121212 ; box-shadow: none;">
          <div class="image" style="width:100%; height: auto;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.299021155075!2d79.81392221472424!3d7.542332494560387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2c9b8d39fde25%3A0xf22be47ae81d524e!2sRoyal%20Fitness%20Club!5e0!3m2!1sen!2slk!4v1664093493075!5m2!1sen!2slk" width="800" height="600" style="border:0;"
             allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="content">
              <h3>Location</h3>
              <p>You can reach us through the Google Map. 
              </p>
              <a href="https://goo.gl/maps/iHAJjysUKUYfZjfT9" class="btn">See Location</a>
          </div>
        </div>
  
  
        </div>
  
     
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
          <a href="./contact.php"><i class="fa-solid fa-phone"></i></a>
          <a href="./contact.php"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="./contact.php"><i class="fa-sharp fa-solid fa-envelope"></i></a>
          <a href="./contact.php"><i class="fa-solid fa-location-dot"></i></a>
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
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://lk.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
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