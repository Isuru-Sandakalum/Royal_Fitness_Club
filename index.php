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


  <title>Home</title>
  </head>


  <body>

    <!--preloader-->
    <div class="container-fluid" id="preloader">
    </div>

    <!--section 1 navigation_bar-->    
    <nav class="navbar navbar-expand-lg navbar-light default" id="section_1" style="margin-left:20px; margin-right: 20px; padding-top: 20px;">

          <div class="container-fluid">
    
              <a class="navbar-brand" id="nav_brand" href="#">Royal Fitness Club</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              
              </button>
            
              <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item">
                    <a class="nav-link" id="nav_disable" href="./index.php">Home<span class="sr-only">(current)</span></a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" id="nav_active" href="./registration.php">Membership</a>
                  </li> 
    
                  <li class="nav-item">
                    <a class="nav-link" id="nav_active" href="./gallery.php">Gallery</a>
                  </li>
    
                  
                  <li class="nav-item">
                    <a class="nav-link" id="nav_active" href="./shop.php">Shop</a>
                  </li>
    
                  <li class="nav-item">
                      <a class="nav-link" id="nav_active" href="./about us.php">About</a>
                    </li>
    
                    <li class="nav-item">
                      <a class="nav-link" id="nav_active" href="./contact.php">Contact</a>
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
      <br>
    <br>
    
    <!--section_3 slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
      
 
      
        <!--slider2-->
        <div class="carousel-item">
          <img class="d-block w-100" src="./Drawables/slidernew1.png">
          <div class="carousel-caption d-none d-md-block text-right"id="slide_1">
          <h1 style="font-size: 70px; color: white;">Train Like a Pro</h1>
          <p>“Most people fail, not because of lack of desire, but, because of lack of commitment.”
            - Vince Lombardi -</p>
        
          </div>
        </div>

        <!--slider1-->
        <div class="carousel-item active">
          <img class="d-block w-100" src="./Drawables/slidernew.png">
          <div class="carousel-caption d-none d-md-block" style="margin-bottom:10px ;">
            <h1>Become a member of the legion</h1>
            <a class="btn btn-outline-light" id="slider_btn_1"  href="./registration.php">Register now</a>
            
            </div>
        </div>

        <!--slider3-->
        <div class="carousel-item">
          <img class="d-block w-100" src="./Drawables/slider3.png" >
          <div class="carousel-caption d-none d-md-block" style="margin-bottom: 30px; text-align: end;">
            <h1 style="font-size: 30px;">Buy branded products from us </h1>
            <h6 class="slider_para_1"> Members get 20% discunt for a purchase. more than 100 + product availability and 24h service </h6>
            <a class="btn btn-outline-light" id="slider_btn_1"  href="./shop.php">Browse the stock</a>
            </div>
        </div>

        


      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!--section_4_Beginer_gauid-->
    <div class="container-fluid" id="section_4" data-aos="fade-up">
      <div class="row">
        <div class="col-12">
          <h2 class="topics"> Beginer Tutorials</h2>
          <p style="text-align:center ;">Have no idea how to start your fitness journey please check below</p>
        </div>  
      </div>

       <!--Beginer_gauid_cardview 1-->
       <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" >Workout clips</h5>
            <p class="card-text">In here you can learn your workouts by lookin at these video series</p>
            <a href="https://www.youtube.com/@athleanx" class="btn btn-outline-light"> see more</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 1 mins ago</small>
          </div>
        </div>

        <!--Beginer_gauid_cardview_2-->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Meal Planes</h5>
            <p class="card-text">In here we will provide new recepies and pre created meals to fulfill your daily calory intake.</p>
            <a href="https://unimeal.com" class="btn btn-outline-light"> See more</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 1 mins ago</small>
          </div>
        </div>

        <!--Beginer_gauid_cardview_3-->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Researches</h5>
            <p class="card-text">As a beginer you can study several research articles to get a good ida about what you doing.</p>
            <a href="https://www.ncbi.nlm.nih.gov" class="btn btn-outline-light"> read more</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 1 mins ago</small>
          </div>
        </div>

        <!--Beginer_gauid_cardview_4-->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">F & Q</h5>
            <p class="card-text">You will find asnwers for frequantly asked questions about your fitness and other stuffs.</p>
            <a href="https://anextrarep.com/bodybuilding-questions/" class="btn btn-outline-light"> read more</a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>

      </div>
      
    </div>


    

    <!--section_5_Our_services_-->
    <div class="container-fluid" id="section_4" data-aos="fade-up">
      <div class="row">
        <div class="col-12">
          <h2 class="topics">Our services</h2>
          <p style="text-align:center ;">Check below content to get idea about what we offer to you</p>
        </div>  
      </div>

       <!--Our_services_cardview 1-->
       <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <a href="#"><i id="icons" class="fa-solid fa-dumbbell fa-4x"></i></a>
            <h5 class="card-title">Full time training facilities</h5>
            <p class="card-text">We wii provide quality training facilities and coaching support to all individuals with varity of training methods and machines.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>

        <!--Our_services_cardview_2-->
        <div class="card">
          <div class="card-body">
            <a href="#"><i id="icons" class="fa-brands fa-shopify fa-4x"></i></a>
            <h5 class="card-title">Shop & Supplimets</h5>
            <p class="card-text">We have all suppliments & accecories for all athletes to get your dream true.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>

        <!--Our_services_cardview_3-->
        <div class="card">
          <div class="card-body">
            <a href="#"><i class="fa-solid fa-person-circle-plus fa-4x" id="icons"></i></a>
            <h5 class="card-title"> Personal Coaching</h5>
            <p class="card-text">Our coach personaly guid the members to achive their deram. personaly interface to create sepecial meal plans and their workout schedules.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      
    </div>


    <!--section_10_Membership-->
    <div class="container-fluid"  data-aos="fade-up">
      <div class="row">
        <div class="col-12">
         <h2 class="topics">Membership </h2>
          <p style="text-align:center;">Joing with us, you have below options to get our services.</p>
        </div>  
      </div>

      <div class="container-fluid" style="margin-top:40px;"  data-aos="fade-up" >
    
        <div class="card-deck">
          <div class="card">
            <span><i class="fa-solid fa-medal fa-5x" style="color:#FFD700 ;"></i></span>
            <div class="card-body">
              <h5 class="card-title">Gold Member</h5>
              <p class="card-text">Gold membership is the premium membership which have multiple services attached with this.</p>
              <p>+ Personal coaching </p>
              <p>+ Special meal plan recepies</p>
              <p>+ Personal workout plans</p>
              <p style="font-size:25px; color: #FFD700; font-weight: bold;"> Monthly Rs 4000.00 </p>
              <span></span>
              <input type="button" value="Register now" onclick =" reg();" class="btn btn-outline-light">
            </div>
            <div class="card-footer">
              <small class="text-muted">Monthly charge feez only  </small>
            </div>
          </div>
          
          <div class="card">
            <span><i class="fa-solid fa-medal fa-5x" style="color:#C0C0C0 ;"></i></span>
            <div class="card-body">
              <h5 class="card-title">Silver Member</h5>
              <p class="card-text">Medium level membership which includes basic services and few other premium services</p>
              <p>+ meal plan recepies</p>
              <p>+ personal workout schedule for free </p>
              <br>
              <br>
              <p style="font-size:25px; color:#C0C0C0; font-weight: bold;"> Monthly Rs 2500.00 </p>
              <input type="button" value="Register now" onclick =" reg();" class="btn btn-outline-light">
            </div>
            <div class="card-footer">
              <small class="text-muted">Monthly charge feez + additional requirement cost</small>
            </div>
          </div>


          <div class="card">
            <span><i class="fa-solid fa-medal fa-5x" style="color:#CD7F32 ;"></i></span>
            <div class="card-body">
              <h5 class="card-title">Bronze member</h5>
              <p class="card-text">Only offer basic services only for bronze members</p>
              <p>+ free 1st workout schedule</p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <p style="font-size:25px; color:#CD7F32; font-weight: bold;"> Monthly Rs 1500.00 </p>
              <input type="button" value="Register now" onclick =" reg();" class="btn btn-outline-light">
            </div>
            <div class="card-footer">
              <small class="text-muted">Monthly charge feez + additional requirement cost</small>
            </div>
          </div>
        </div>


      </div>

    </div>

    <!--section_7_details-->
    <div class="container-fluid" id="section_4" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <h2 class="topics">Why You should have a diet plan</h2>
            <p style="text-align:center ;"> To get your desired shape and your long life you need have to follow a diet.</p>
          </div>  
        </div>
    </div>

    <!--section_7_details-->
    <div class="container" id ="load"  data-aos="fade-up" >
      <div class="box-container">
        
        <div class="box">
            <div class="image">
             <span> <i class="fa-solid fa-shield-halved fa-10x" style="color:yellowgreen ; margin-top: 30px;"></i> </span> 
            </div>
            <div class="content">
                <h3>Avoid Dengerous diseases </h3>
                <p>When you are workingout usually, there are very low probability to suffering kind of diseases.</p>
                <div class="icons">
                <span> <i class="fas fa-calendar"></i>20th september, 2022</span>
                <span> <i class="fas fa-user"></i> by admin </span>
                </div>
            </div>
         </div>
  
        <div class="box">
            <div class="image">
                <span> <i class="fa-solid fa-hand-fist fa-10x" style="color:#FEB142 ; margin-top: 30px;"></i> </span> 
            </div>
            <div class="content">
                <h3>Bulid a better body</h3>
                <p>You can build your dream slim or muscular body by workingout acording to a plan and pattern.</p>
                <div class="icons">
                <span> <i class="fas fa-calendar"></i> 20th september, 2022  </span>
                <span> <i class="fas fa-user"></i> by admin </span>
                </div>
            </div>
        </div>
  
        <div class="box">
            <div class="image">
              <span> <i class="fa-solid fa-heart-pulse fa-10x" style="color:tomato ; margin-top: 30px;"></i> </span> 
            </div>
            <div class="content">
                <h3>Make heart more helathier</h3>
                <p>According to research, habitual excercising supports to keep your heart more healthier than others.</p>
                <div class="icons">
                <span> <i class="fas fa-calendar"></i> 20th september, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
                </div>
            </div>
        </div>
  
        
  
      </div>
    </div>


    <!--section_9 heading workouts-->
    <div class="container-fluid" id="section_4" data-aos="fade-up">
      <div class="row">
      <div class="col-12">
        <h2 class="topics"> Popular workouts</h2>
        <p style="text-align:center ;"> Most famous workouts among all athletes.</p>
      </div>  
    </div>

    </div>

  <!--section_9_workouts-->
  <div class="container" id ="load"  data-aos="fade-up" >
      <div class="box-container">
      <div class="box">
        <div class="image">
            <img src="./Drawables/fitness1.jpg">
        </div>
        <div class="content">
            <h3>Standard bench press</h3>
            <p>It involves lying on a bench and pressing weight upward using either a barbell or a pair of dumbbells. 
            </p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i>  by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness2.jpg" alt="">
        </div>
        <div class="content">
            <h3>Barbell curls</h3>
            <p>Stand tall with your chest up,holding the barbell with your hands 
              just outside of your hips, using an underhand grip.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Push-up</h3>
            <p>Traditional pushups are beneficial for building upper body strength. 
              They work the triceps, pectoral muscles, and shoulders</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness4.jpg" alt="">
        </div>
        <div class="content">
            <h3>Tricep curls</h3>
            <p>The tricep curl is a weightlifting exercise designed to support the growth 
              and tone of the triceps muscle group.This exercise can be completed by raising a dumbbell.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness5.jpg" alt="">
        </div>
        <div class="content">
            <h3>Leg press</h3>
            <p>Brace your abdominal muscles and push the platform away with your heels and forefoot.
               Your heels should remain flat on the footplate.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness6.jpg" alt="">
        </div>
        <div class="content">
            <h3>Squats</h3>
            <p>the movement strengthens your tendons, bones, and ligaments around the leg muscles.
               It takes some of the weight off your knees and ankles</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness7.jpg" alt="">
        </div>
        <div class="content">
            <h3>Lunges</h3>
            <p>Lunges are a popular strength training exercise among people wanting to strengthen, 
              while also improving overall fitness and enhancing athletic performance</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness8.jpg" alt="">
        </div>
        <div class="content">
            <h3>Triceps dips</h3>
            <p>Your hands should be shoulder-width apart on the surface you are dipping from, 
              Squeeze your core and glutes then raise your chin and chest to keep your body tight</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="./Drawables/fitness9.jpg" alt="">
        </div>
        <div class="content">
            <h3>Overhead dumbbell presses</h3>
            <p>Stand upright and keep the back straight. Hold a dumbbell in each hand, with an overhand grip. 
              Thumbs are on the inside and knuckles face up.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st september, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
            </div>
        </div>
    </div>

    </div>

    <div id="load-more"> Load more </div>
  </div>

  <!--section_9_Trending dietplans-->
  <div class="container-fluid"  data-aos="fade-up" >

  <!--heading diet planes-->
  <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                 <h2 class="topics">Popular diet plans</h2>
                  <p style="text-align:center;">if you haven't found an exact reason why you should lose weight or 
                   gain fitness. then the following five reasons could be a consideration</p>
                </div>  
              </div>
      </div>
            
      <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="./Drawables/diet1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">The Mediterranean diet</h5>
                  <p class="card-text">this diet is characterized by its low saturated fat content. It primarily comprises vegetables, legumes, 
                    fruit, nuts, and whole grains, and it features olive oil as the primary source of added fat </p>
                  <br>
                  <button class="btn btn btn-outline-light"> Read more</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 20 mins ago</small>
                </div>
              </div>
              
              <div class="card">
                <img class="card-img-top" src="./Drawables/diet2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">The DASH diet</h5>
                  <p class="card-text"> It's characterized by its low sodium content and emphasis on foods rich in calcium, potassium, 
                    and magnesium, which are known to help reduce blood pressure.</p>
                  <br>
                  <button class="btn btn btn-outline-light"> Read more</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 20 mins ago</small>
                </div>
              </div>

              <div class="card">
                <img class="card-img-top" src="./Drawables/diet3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">The DASH diet</h5>
                  <p class="card-text"> The Flexitarian diet is a great option for 
                    anyone interested in boosting their intake of fiber and plant protein who also
                    recognizes the nutritional value of animal products and wants to eat them as needed.</p>
                  <br>
                  <button class="btn btn btn-outline-light"> Read more</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 20 mins ago</small>
                </div>
              </div>

      </div>
      
      <br>
      <br>
      <br>
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

        function reg(){
          window.location = "registration.php";
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