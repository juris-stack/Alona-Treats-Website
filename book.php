<!DOCTYPE html>
<?php
/**
 * Order complete template
 * 
 * @package SJM
 * @author 
 */

require_once 'functions.php';

if( empty( $_GET['hotel'] ) ) {
  redirect( 'index.php' );
}

$slug = $_GET['hotel'];


if( isset( $_POST['place-booking'] ) ) {
  $check_In = $_POST['chekin-date'];
  $check_Out = $_POST['chekout-date'];    
  $no_of_nights = $_POST['no-of-nights'];
  $no_of_guests = $_POST['no-of-guests'];
  $no_of_rooms = $_POST['no-of-rooms'];
  $total_amount = $_POST['total-amount'];    
  $rooms_input = $_POST['rooms-input'];

  $pos_products = $_POST['rooms-input'];    

  $hotel_stmt = $mysqli->prepare( "SELECT * FROM hotel WHERE slug = ? LIMIT 1" );
  $hotel_stmt->bind_param( 's', $slug );
  $hotel_stmt->execute();
  $hotel_result = $hotel_stmt->get_result();
  if( $hotel_result->num_rows > 0 ) {
    while( $row = $hotel_result->fetch_assoc() ) {
      $hotel_id = $row['hotel_ID'];
      $hotel_details = unserialize( $row['hotel_details'] );
      $hotel = $hotel_details['hotel'];          
      $hotel_media_logo = $row['hotel_media_logo'];
      $hotelDisplayName = $row['display_name'];
      $type = $row['type'];
    }
  }
  $hotel_stmt->close();



  $toBookDateIn = date("D - M d, Y", strtotime($check_In));
  $toBookDateOut = date("D - M d, Y", strtotime($check_Out));   

  ($no_of_nights <= 1) ? $night = 'night' : $night = 'nights'; 
  $cancellation = date('D - M d, Y', strtotime('-2 days', strtotime($check_In)));
}




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
         <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
         <li class="nav-item active"><a href="accommodation.php?p=<?php echo $slug;?>" class="nav-link">Accommodation</a></li>
         <li class="nav-item"><a href="#" class="nav-link">Tours & Packages</a></li>           
         <li class="nav-item"><a href="rates.php" class="nav-link">Rates</a></li>   
         <li class="nav-item"><a href="#" class="nav-link">About</a></li>                   
         <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->  
 <section class="header-navi-space bg-light-navigator">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <small><a href="index.php" class="text-lighted">Home</a></small> <span class="icon-keyboard_arrow_right"></span> <small class="text-lighted">Accommodation <span class="icon-keyboard_arrow_right"></span>  <span class="text-lighted">Finalize Booking</span>
      </div>                                                             
    </div>
  </div>
</section> 


<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 row">
        <div class="col-md-4">
          <div class="col-md-12">
            <h4>Booking Details</h4>
            <hr>
            <span class="text-lighted">Check-in Date</span>
            <small class="wrap-text space-bottom"><?php echo $toBookDateIn;?> from 12:00 pm</small>                       
            <span class="text-lighted">Check-out Date</span>
            <small class="wrap-text space-bottom"><?php echo $toBookDateOut;?> until 12:00 pm</small>
            <span class="text-lighted">Lenght of stay</span>
            <small class="wrap-text"><?php echo $no_of_nights . ' ' . $night;?></small>
            <hr>
          </div>
          <div class="col-md-12">            
            <div>
              <span class="text-lighted wrap-text">Your selection</span>              
              <span><?php echo $pos_products;?></span> 
            </div> 
            <hr>                                                      
          </div> 
          <div class="col-md-12">            
            <div>
              <span class="text-lighted wrap-text">Price</span>              
              <p>                                                              
               <strong class="red">&#8369; <?php echo number_format($total_amount, 2);?>
             </strong> <i class="icon-long-arrow-right"></i>
             <small>good for <?php echo $no_of_guests; ?> 
             <?php 
             if ($no_of_guests >=1 ){
              echo  "guest ";
            }else{
              echo "guests ";
            } 
            ?></small>
          </p>
        </div> 
        <a href="accommodation.php?p=<?php echo $slug; ?>">
          <input type="submit" value="Change Selection" class="btn btn-secondary space-top-high space-bottom-high">
        </a>                                                              
      </div>         
    </div>
    <div class="col-md-8">
      <div class="col-md-12 space-bottom">
        <div class="row">
          <?php if ($type == 'main'): ?>          
          <div class="col-md-4 book-img">
            <img src="<?php echo $hotel_media_logo;?>">
          </div>
          <div class="col-md-8">                                     
            <h2><?php echo $hotelDisplayName;?></h2>  
            <p class="rate mb-5">
              <span class="loc"><i class="icon-map"></i> <?php echo $hotel['hotel-address'];?> </span>  
              <span class="wrap-text"><strong class="text-lighted">FREE cancellation</strong> <small>before <?php echo $cancellation;?>.</small></span>                        
            </p>

          </div>
          <?php else: ?>
          <div class="col-md-12">                                     
            <h2><?php echo $hotelDisplayName;?></h2>  
            <p class="rate mb-5">
              <span class="loc"><i class="icon-map"></i> <?php echo $hotel['hotel-address'];?> </span> 
            </p> 
              <strong class="text-lighted">FREE cancellation</strong> <small>before <?php echo $cancellation;?>.</small>                        
            

          </div>
          <?php endif; ?>          
        </div>                                                                  
      </div>
      <div class="col-md-12 bg-light padding-vertical">
        <form>
        <h4>Enter your details</h4>
        <div class="form-group padding-horizontal">
          <div class="row">
            <div class="col-md-6">
              <label>First Name</label>
              <input type="text" name="first-name" class="form-control" required="">
            </div>
            <div class="col-md-6">
              <label>Last Name</label>
              <input type="text" name="last-name" class="form-control" required="">
            </div>
          </div>        
        </div>
        <div class="form-group padding-horizontal">
          <div class="row">
            <div class="col-md-8">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required="">
            </div>          
          </div>        
        </div>
        <div class="form-group padding-horizontal">
          <div class="row">
            <div class="col-md-8">
              <label>Contact Number</label>
              <input type="text" name="contact-number" maxlength="15" class="form-control" required="">
            </div>          
          </div>        
        </div>
        <div class="form-group padding-horizontal">
          <div class="row">
            <div class="col-md-12">
              <label>Special Request</label>
              <textarea name="" id="" cols="30" rows="7" class="form-control"></textarea>
            </div>          
          </div>        
        </div>        
      </div>   
      <div class="form-group padding-horizontal space-top-high">
        <div class="row">
          <div class="col-md-6">      
            <label>
              <small class="smallest">We'll send you instant confirmation to your email.</small>              
            </label>                    
          </div>
          <div class="col-md-6">
            <input type="submit" value="Submit Booking" class="btn btn-primary">            
          </form>
          </div>
        </div>        
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