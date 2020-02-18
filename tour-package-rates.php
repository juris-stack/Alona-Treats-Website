<!DOCTYPE html>
<?php
/* 
 * Category single template
 * 
 * @package SJM
 * @author 
 */

require_once 'functions.php';
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
         <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="accommodation.php?p=casi-verde-guest-house" class="nav-link">Accommodation</a></li>
         <li class="nav-item"><a href="tours-and-packages.php" class="nav-link">Tours & Packages</a></li>	          
         <li class="nav-item active"><a href="tour-package-rates.php" class="nav-link">Rates</a></li>                           
       </ul>
     </div>
   </div>
 </nav>

 <!-- END nav -->   

 <div class="hero-wrap js-fullheight" style="background-image: url('images/header-background.jpg'); background-size: cover;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-12 top-margin ftco-animate mb-5 pb-5 text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Rates</span></p>
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%' }">Rates</h1>        
      </div>
    </div>
  </div>
</div> 


<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <div class="ftco-animate book-img text-center">
          <!-- <span class="text-lighted">Alona Treats</span> <small class="wrap-text">offers you :</small> -->
          <img src="images/affordable-rates.jpg" alt="Alona-Treats-affordable-rates">
        </div>
        <div class="auto-height" >          
          <hr>
          <ul class="rates">
            <li class="active"><a href="tour-package-rates.php" class="black"> Tour Pacakge Rates</a></li>
            <li><a href="bohol-tour-rates.php" class="black"> Bohol Tour Rates</a></li> 
            <li><a href="transportation-service-rates.php" class="black"> Transportaion Rates</a></li>
            <li><a href="accommodation-rates.php" class="black"> Accommodation Rates</a></li>
            <li><a href="esl-course-rates.php" class="black"> ESL Course Rates</a></li>                                        
          </ul>                                          
        </div>
        <div class="auto-height text-center">          
          <hr>
          <small class="smallest">We offer you the best and affordable Bohol Tour Pacakages and Travel Services.</small>                                          
        </div>        
      </div>

      <div class="col-md-9 hotel-single ftco-animate">
        <div class="col-md-12 bg-green">
          <span class="text-lighted">Tour Package Rates</span>          
        </div>
        <?php
        $get_bohol_tours = $mysqli->prepare( "SELECT * FROM tours WHERE type != 'bohol-tours' LIMIT 4" );        
        $get_bohol_tours->execute();
        $get_bohol_tours_result = $get_bohol_tours->get_result();
        if( $get_bohol_tours_result->num_rows > 0 ) :
          while( $row = $get_bohol_tours_result->fetch_assoc() ) :
            $tour_ID = $row['tour_ID'];
            $slug = $row['slug'];
            $tourName = $row['tour_name'];
            $tourInfo = $row['info'];
            $tourMedia = $row['tour_media'];
            $type = $row['type'];
            ?>  
            <div class="container">   
              <div class="col-md-12 space-bottom bg-white padding-vertical">  
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-8">
                      <p><span class="text-lighted wrap-text"><?php echo $tourName; ?></span>
                        <span class="star">
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star"></i>
                          <i class="icon-star-half-o"></i>
                        </span>                      
                      </p>
                    </div>  
                    <div class="col-md-4">
                      <a href="tour-package.php?p=<?php echo $slug;?>"><input type="submit" name="book-now" value="BOOK NOW" class="btn btn-secondary"></a>                      
                    </p>
                  </div>                    
                </div>
              </div>   
              <div class="table">                                   
                <table class="rate">
                  <thead class="rate-header">
                    <tr>                                                                                  
                      <?php if($type == 'package-only') : ?>
                       <th class="rate-th-no">Pax</th>                                        
                       <th class="rate-th-no-last">Rate per Pax</th>                                                                           
                       <?php else: ?>
                        <th class="rate-th-no">Pax</th>
                        <th class="rate-th-no">Twin Sharing</th>
                        <th class="rate-th-no-last">Triple Sharing</th>
                      <?php endif; ?>
                    </tr>
                  </thead>
                  <tbody class="rate-tbody">                      
                    <tbody class="rate-tbody">

                      <?php
                      $get_rates_per_pax = $mysqli->prepare( "SELECT * FROM tour_rates WHERE tour_ID = $tour_ID" );        
                      $get_rates_per_pax->execute();
                      $get_rates_per_pax_result = $get_rates_per_pax->get_result();
                      if( $get_rates_per_pax_result->num_rows > 0 ) :
                        while( $row = $get_rates_per_pax_result->fetch_assoc() ) :
                          $rates = unserialize( $row['rates'] );
                          $rate = $rates['rate'];               
                          ?>
                          <?php if($type == 'package-only') : ?>
                        <tr class="rates">                                                                          
                            <td class="rates-td"><?php echo $row['pax'];?> pax</td>
                            <td class="rates-td"><span class="text-lighted">&#8369; <?php echo number_format( $rate['twin-sharing'], 2);?></span></td>                                                                                                  
                        </tr>
                        <?php else : ?>
                          <tr class="rates">                      
                            <?php if ($row['pax'] == '1 (Single Occupancy)') { ?>
                              <td class="rate-td">1 pax</td>
                              <td colspan="2" class="rates-td"><span class="icon-long-arrow-right"></span> <strong><span class="text-lighted">&#8369; <?php echo number_format( $rate['twin-sharing'], 2);?></span> (Single Occupancy)</strong></td>
                            <?php }else if($rate['tripple-sharing'] == ''){ ?>
                              <td class="rate-td"><?php echo $row['pax'];?> pax</td>
                              <td class="rate-td"><span class="text-lighted">&#8369; <?php echo number_format( $rate['twin-sharing'], 2);?></span></td>
                              <td class="rate-td"></td>                                                 
                            <?php }else{ ?>
                              <td class="rate-td"><?php echo $row['pax'];?> pax</td>
                              <td class="rate-td"><span class="text-lighted">&#8369; <?php echo number_format( $rate['twin-sharing'], 2);?></span></td>
                              <td class="rate-td"><span class="text-lighted">&#8369; <?php echo number_format( $rate['tripple-sharing'], 2);?></span></td>
                            <?php } ?>
                          </tr> 
                        <?php endif; ?>                                                                                            
                          <?php 
                        endwhile;              
                      endif; 
                      $get_rates_per_pax->close(); ?>         
                    </tbody>


                  </tbody>
                </table>
              </div> 
            </div>
          </div>
          <?php 
        endwhile;              
      endif; 
      $get_bohol_tours->close(); ?>

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