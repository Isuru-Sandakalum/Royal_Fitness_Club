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




  <title>User Login</title>
  </head>


  <body>


    <!--preloader-->
    <div class="container-fluid" id="preloader">
      
    </div> 


     <!--section 1 navigation_bar-->    
     <nav class="navbar navbar-expand-lg navbar-light default" id="section_1" style="margin-left:20px; margin-right: 20px; ">

      <div class="container-fluid">

          <a class="navbar-brand" id="nav_brand" href="./index.php">Royal Fitness Club</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          
          </button>    
          </div>
      </div>


     
    </nav>

      <!--Login_face-->
       <div class="contain row" id="login_container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
         
        <form  class="text-center" method="POST" id="sign_form" action="./login_register.php">
            <h3 class="topics">Sign in !</h3>   
            

            <div class="form-group text-left">
                <label>Username or Emlai</label>
                <input type="text" class="form-control" placeholder="E-mail or Username" name="email_username">
              </div>

              <div class="form-group text-left">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div> 

              <div class="form-group">
                <button type="submit" class="login-btn" name="login" style = " padding:13px 30px;">LOGIN</button>
              </div>

            <p> You have no account ? <a href="./sign_up_page.php">Create a profile</a></p>

            <hr style="background-color:white ;">

          </form>
        </div>

        <div class="col-md-3"></div>
       </div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!-- sweet alert  -->    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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