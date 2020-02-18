<!DOCTYPE html>
<?php
/* 
 * Category single template
 * 
 * @package SJM
 * @author 
 */

require_once 'functions.php';

$check_In = '';
$check_Out = '';
$submitted_guest_no = '';
$submitted_room_no = '';
?>
<html lang="en">
<head>
  <title>Alona Treats</title>
  <meta charset="utf-8">
  <link rel="icon" href="images/alona-treats-logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="header-link">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-right tag">
          <small><span class="icon icon-envelope"></span> alonatreatsandtravel08@gmail.com </small> <span class="margin-horizontal">|</span>           
          <small><span class="icon icon-phone"></span> (038) 502-4712</small>
        </div>                  
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.php">Alona Treats</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="accommodation.php?p=casi-verde-guest-house" class="nav-link">Accommodation</a></li>
         <li class="nav-item"><a href="tours-and-packages.php" class="nav-link">Tours & Packages</a></li>            
         <li class="nav-item"><a href="tour-package-rates.php" class="nav-link">Rates</a></li>                             
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->   

 <div class="hero-wrap js-fullheight" style="background-image: url('images/index-banner-bg.jpg'); background-size: cover;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight-01 align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-12 top-margin ftco-animate mb-5 pb-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 data-scrollax="properties: { translateY: '30%' }">Alona Treats</h1>
        <p data-scrollax="properties: { translateY: '30%' }">and Travel Corporation</p>
        <p data-scrollax="properties: { translateY: '30%' }" class="title-grey"> We offer you the best and affordable Bohol Tour Pacakages and Travel Services.</p>        
        <a href="tours-and-packages.php"><input data-scrollax="properties: { translateY: '30%' }" type="submit" value="BOOK NOW" class="btn title-btn"></a>        
      </div>
    </div>
  </div>
</div>   


<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ftco-animate">
       <div class="heading-section">
        <h2 class="mb-4"><span class="h2-light">Why choose</span> Alona Treats and Travel ?</h2>
      </div>
      <div class="welcome-text">
        <p>Alona Treats and Travel Corporation designed tailor-made packages according to your unique demands, while maintaining affordable and competitive prices. We’ve selected the best activities and most incredible locations that Bohol has to offer to enable you to design your perfect holiday.</p>
      </div>        
    </div>        
    <div class="col-lg-8">
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="single-slider owl-carousel">
            <div class="item">
              <div class="hotel-img" style="background-image: url(images/banner-01.jpg);"></div>
            </div>
            <div class="item">
              <div class="hotel-img" style="background-image: url(images/chocolatehills.jpg);"></div>
            </div>                  
            <div class="item">
              <div class="hotel-img" style="background-image: url(images/balicasag.jpg);"></div>
            </div>       
            <div class="item">
              <div class="hotel-img" style="background-image: url(images/alona-bg.jpg);"></div>
            </div>
            <div class="item">
              <div class="hotel-img" style="background-image: url(images/man-made-forest.jpg);"></div>
            </div>                         
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
</section>     

<section class="ftco-section bg-light top-space">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Alona Treats Best Selling <span class="wrap-text">& Affordable Packages</span></h2>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="row">                          
        <div class="col-sm col-md-6 col-lg-6 ftco-animate">
          <div class="destination">                  
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="tour-package.php?p=2d1n-bohol-tour-package">2D/1N Bohol Tour Package (Non-Beachfront)</a></h3>                            
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>                      
                  </p>                
                </div>
                <div class="two">
                  <span class="flaticon-map-of-roads"></span>
                </div>
              </div>               
              <span>Inclusions</span>
              <ul>     
                <li>RT Transfer Tagbilaran City Pier/Panglao Airport to Hotel</li> 
                <li>1 night accommodation at a non-beachfront hostel</li>
                <li>Breakfast</li>
                <li>Bohol Countryside Tour with Buffet Lunch</li>
                <li>Tour Guide</li>
                <li>Entrance Fees</li>      
              </ul>                                                                          
              <hr>
              <p class="bottom-area d-flex">
                <small><span class="text-lighted">&#8369; 3,000.00 </span> (for 5 pax)</small> 
                <span class="ml-auto"><a href="tour-package.php?p=2d1n-bohol-tour-package">View more details</a></span>
              </p>
            </div>
          </div>
        </div>  

        <div class="col-sm col-md-6 col-lg-6 ftco-animate">
          <div class="destination">                  
            <div class="text p-3">
              <div class="d-flex">
                <div class="one">
                  <h3><a href="tour-package.php">3D/2N Self-Drive Car Rental Service Package</a></h3>                            
                  <p class="rate">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-o"></i>                      
                  </p>                
                </div>
                <div class="two">
                  <span class="flaticon-car"></span>
                </div>
              </div>               
              <span>Inclusions</span>
              <ul>     
                <li>3D/2N Air-conditioned Room</li> 
                <li>Pick-up/Drop Off Panglao Airport</li>
                <li>Daily Breakfast</li>
                <li>24 Hrs. use of Hyundai Accent/Reina Automatic Transmission Car</li>
                <li>Fuel not included</li>      
              </ul>                                                                          
              <hr>
              <p class="bottom-area d-flex">
                <small><span class="text-lighted">&#8369; 1,750.00 </span> (for 5 pax)</small> 
                <span class="ml-auto"><a href="tour-package.php?p=3d2n-room-car-package">View more details</a></span>
              </p>
            </div>
          </div>
        </div>                                                
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Bohol Tours</h2>
      </div>
    </div>
    <div class="row d-flex">
      <?php
      $get_bohol_tours = $mysqli->prepare( "SELECT * FROM tours WHERE type = 'bohol-tours' LIMIT 4" );        
      $get_bohol_tours->execute();
      $get_bohol_tours_result = $get_bohol_tours->get_result();
      if( $get_bohol_tours_result->num_rows > 0 ) :
        while( $row = $get_bohol_tours_result->fetch_assoc() ) :
          $slug = $row['slug'];
          $tourName = $row['tour_name'];
          $tourInfo = $row['info'];
          $tourMedia = $row['tour_media'];
          ?>                                        
          
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="bohol-tours.php?p=<?php echo $slug;?>" class="block-20" style="background-image: url('<?php echo $tourMedia;?>');">
              </a>
              <div class="text">
                <span class="tag"><?php echo $tourName;?></span>
                <h3 class="heading mt-3"><?php echo $tourInfo;?></h3>
                <div class="meta mb-3">              
                  <div><a href="bohol-tours.php?p=<?php echo $slug;?>">Inquire Now</a></div>                  
                </div>
              </div>
            </div>
          </div>
          <?php 
        endwhile;              
      endif; 
      $get_bohol_tours->close(); ?>
    </div>
  </div>
</section>  



<section class="ftco-section height-auto">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">Our Establishments</h2>
      </div>
    </div>        
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination bordered">
          <a href="accommodation.php?p=casi-verde-guest-house" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/casi-verde.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-link"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div>
                <h3><a href="accommodation.php?p=casi-verde-guest-house">Casi Verde Guest House</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>                      
                </p>
              </div>                  
            </div>
            <p>The cheapest, safe and secure accommodation. Near different beaches in Panglao.</p>
            <p class="days"><span><a href="accommodation.php?p=casi-verde-guest-house">View more details</a></span></p>
            <hr>
            <p class="bottom-area d-flex">
              <!-- <span>For as low as &#8369; 900.00</span> --> 
              <span class="ml-auto"><a href="accommodation.php?p=casi-verde-guest-house">Inquire Now</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination d-md-flex flex-column-reverse">
          <a href="precitos.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/precitos.png);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-link"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div>
                <h3><a href="precitos.php">Precito's</a></h3>                    
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>                      
                </p>
              </div>                  
            </div>
            <p>Restaurant & Catering Services. The place where you can embrace Asian delicacies.</p>
            <p class="days"><span><a href="precitos.php">View more details</a></span></p>
            <hr>
            <p class="bottom-area d-flex">
              <!-- <span><i class="icon-map-o"></i>Panglao, Bohol</span>  -->
              <span class="ml-auto"><a href="precitos.php">Inquire Now</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination bordered">
          <a href="kingstown.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/kingstown.png);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-link"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div>
                <h3><a href="kingstown.php">Kingstown Hotel</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>                      
                </p>
              </div>                  
            </div>
            <p>Kingstown Hotel & Restaurant. Catering Services in an affordable set of foods.</p>
            <p class="days"><span><a href="kingstown.php">View more details</a></span></p>
            <hr>
            <p class="bottom-area d-flex">
              <!-- <span>For as low as &#8369; 1,200.00</span> --> 
              <span class="ml-auto"><a href="kingstown.php">Inquire Now</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm col-md-6 col-lg ftco-animate">
        <div class="destination d-md-flex flex-column-reverse">
          <a href="nuat-thai.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/nuat_thai.png);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-link"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div>
                <h3><a href="nuat-thai.php">Nuat Thai</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>                      
                </p>
              </div>                  
            </div>
            <p>Foot and body massage located just at Alona Beach.</p>
            <p class="days"><span><a href="nuat-thai.php">View more details</a></span></p>
            <hr>
            <p class="bottom-area d-flex">                  
              <span class="ml-auto"><a href="nuat-thai.php">Inquire Now</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">                            
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Alona Treats</h2>
          <ul class="list-unstyled">
            <li><a href="accommodation.php?p=casi-verde-guest-house" class="py-2 d-block">Accommodation</a></li>
            <li><a href="tours-and-packages.php" class="py-2 d-block">Tours & Transportation</a></li>
            <li><a href="tour-package-rates.php" class="py-2 d-block">Rates</a></li>                           
          </ul>
        </div>
      </div>
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Bohol Tours</h2>
        <ul class="list-unstyled">
          <li><a href="bohol-tours.php?p=bohol-countryside-tour" class="py-2 d-block">Bohol Countryside Tour</a></li>
          <li><a href="bohol-tours.php?p=panglao-island-tour" class="py-2 d-block">Panglao Island Tour</a></li>                
          <li><a href="bohol-tours.php?p=panglao-island-hopping" class="py-2 d-block">Island Hopping and Dolphin Watching Tour</a></li>
          <li><a href="bohol-tours.php?p=danao-extreme-adventure-tour" class="py-2 d-block">Danao Extreme Adventure Tour</a></li>                
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon icon-map-marker"></span><span class="text">Unit 3 bldg. Purok 5, Panglao, Bohol</span></li>
           <li><a href="#"><span class="icon icon-phone"></span><span class="text">(038) 502-4712</span></a></li>
           <li><a href="#"><span class="icon icon-phone_android"></span><span class="text">09471607458 (Smart) <br/> 09952900394 (Globe)</span></a></li>                  
           <li><a href="#"><span class="icon icon-envelope"></span><span class="text">alonatreatsandtravel08@gmail.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p>Alona Treats and Travel Corporation &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved </p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>