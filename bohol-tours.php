<!DOCTYPE html>
<?php
/* 
 * Category single template
 * 
 * @package SJM
 * @author 
 */

require_once 'functions.php';

if( empty( $_GET['p'] ) ) {
  redirect( 'index.php' );
}

$slug = $_GET['p'];


$tour_and_package = $mysqli->prepare( "SELECT * FROM tours WHERE slug = ? LIMIT 1" );
$tour_and_package->bind_param( 's', $slug );
$tour_and_package->execute();
$tour_and_package_result = $tour_and_package->get_result();
if( $tour_and_package_result->num_rows > 0 ) {
  while( $row = $tour_and_package_result->fetch_assoc() ) {
    $tour_ID = $row['tour_ID'];
    $slug = $row['slug'];
    $packageName = $row['tour_name'];
    $info = $row['info'];
    $tourMedia = $row['tour_media'];
    $note = $row['notes'];
  }
}
$tour_and_package->close();

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

  <script src="js/jquery-3.3.1.min.js"></script>
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
     <a class="navbar-brand" href="index.html">Alona Treats</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="accommodation.php?p=casi-verde-guest-house" class="nav-link">Accommodation</a></li>
         <li class="nav-item active"><a href="tours-and-packages.php" class="nav-link">Tours & Packages</a></li>            
         <li class="nav-item"><a href="tour-package-rates.php" class="nav-link">Rates</a></li>                             
       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->  
 <section class="header-navi-space bg-light-navigator">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <small><a href="index.php" class="text-lighted">Home</a></small> <span class="icon-keyboard_arrow_right"></span> <small><a href="tours-and-packages.php" class="text-lighted">Tours & Packages</a></small> <span class="icon-keyboard_arrow_right"></span> <small class="text-lighted"><?php echo $packageName;?></small>
      </div>                                                             
    </div>
  </div>
</section> 

<section class="ftco-section">          
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="col-md-12 heading-section ftco-animate"> 
          <span class="rate">
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star-o"></i>                      
          </span>             
          <h2 class="mb-4"><?php echo $packageName;?></h2>          
          <!-- <div class="single-slider owl-carousel">              
            <div class="item">
              <div class="hotel-img" style="background-image: url(<?php echo $tourMedia; ?>);"></div>
            </div>                                                                                                               
          </div> -->
          <div>
            <p><?php echo $info;?></p>
          </div>
        </div>
        <div class="col-md-12 ftco-animate">
          <hr>
          <p class="text-lighted">Itinerary</p>          
          <ul>     
            <?php
            $get_inclusions = $mysqli->prepare( "SELECT * FROM tour_itinerary WHERE tour_ID = $tour_ID" );        
            $get_inclusions->execute();
            $get_inclusions_result = $get_inclusions->get_result();
            if( $get_inclusions_result->num_rows > 0 ) :
              while( $row = $get_inclusions_result->fetch_assoc() ) :               
                ?>
                <li><?php echo $row['itineraries'];?></li>                                                 
                <?php 
              endwhile;              
            endif; 
            $get_inclusions->close(); ?>                
          </ul> 
        </div>
        <div class="col-md-12 ftco-animate">          
          <p class="text-lighted">Inclusions</p>          
          <ul>     
            <?php
            $get_inclusions = $mysqli->prepare( "SELECT * FROM tour_inclusions WHERE tour_ID = $tour_ID" );        
            $get_inclusions->execute();
            $get_inclusions_result = $get_inclusions->get_result();
            if( $get_inclusions_result->num_rows > 0 ) :
              while( $row = $get_inclusions_result->fetch_assoc() ) :               
                ?>
                <li><?php echo $row['inclusions'];?></li>                                                 
                <?php 
              endwhile;              
            endif; 
            $get_inclusions->close(); ?>                
          </ul> 
        </div>
        <div class="col-md-12 ftco-animate">              
          <p class="text-lighted">Rate Per Pax:</p>
          <div class="col-md-8">
            <table class="rate">
              <thead class="rate-header">
                <tr>
                  <th class="rate-th-no-first">Pax</th>
                  <th class="rate-th-no-last">Rate per Pax</th>                  
                </tr>
              </thead>
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
                    <tr class="rates">                      
                      <td class="rates-td"><?php echo $row['pax'];?> pax</td>
                      <td class="rates-td"><span class="text-lighted">&#8369; <?php echo number_format( $rate['twin-sharing'], 2);?></span></td>
                    </tr>                                                                  
                    <?php 
                  endwhile;              
                endif; 
                $get_rates_per_pax->close(); ?>         
              </tbody>              
            </table>            
          </div>
          <div class="col-md-12 ftco-animate space-top-high">  
            <hr>          
            <h4 class="mb-5"> <i class="icon-room orange"></i> Itinerary Tourist Spots</h4>                         
            <?php
            $get_inclusions = $mysqli->prepare( "SELECT * FROM tour_itinerary WHERE tour_ID = $tour_ID" );        
            $get_inclusions->execute();
            $get_inclusions_result = $get_inclusions->get_result();
            if( $get_inclusions_result->num_rows > 0 ) :
              while( $row = $get_inclusions_result->fetch_assoc() ) :               
                ?>
                <small><i class="icon-check orange"></i> <?php echo $row['itineraries'];?></small>
                <div class="item">
                  <div class="hotel-img" style="background-image: url(<?php echo $row['itinerary_media']; ?>);"></div>
                </div>                                                
                <?php 
              endwhile;              
            endif; 
            $get_inclusions->close(); ?>                            
          </div> 
          <?php if($note == '') :

          else : ?>
          <p class="text-lighted">Optional :</p>
          <ul class="tours">                         
            <?php
            $get_inclusions = $mysqli->prepare( "SELECT * FROM tour_optionals WHERE tour_ID = $tour_ID" );        
            $get_inclusions->execute();
            $get_inclusions_result = $get_inclusions->get_result();
            if( $get_inclusions_result->num_rows > 0 ) :
              while( $row = $get_inclusions_result->fetch_assoc() ) :               
                ?>
                <li><i class="icon-check orange"></i> <?php echo $row['optional'];?></li>                                                                
                <?php 
              endwhile;              
            endif; 
            $get_inclusions->close(); ?> 
          </ul>
          <p>Note : <?php echo $note;?></p> 
          <?php endif; ?>           
        </div>
      </div>
      <div class="col-md-4 heading-section text-center bordered fixed-height-book-now-bohol-tours ftco-animate" >
        <h2 class="mb-4">Book Now</h2>
        <div class="col-md-12 order-md-last">
          <form action="bohol-tours.php?p=bohol-countryside-tour">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="First Name *" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Last Name *" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail *" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="Phone Number *" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control checkout_date" placeholder="Select Date" required>
            </div>            
            <div class="form-group text-left">
              <div class="select-wrap one-third">
                <label>Select Rate per Pax:</label>   
                <select name="room" id="book-room" value="<?php echo $submitted_room_no; ?>" class="form-control room-select">                                  
                  <?php
                  $get_rates_per_pax = $mysqli->prepare( "SELECT * FROM tour_rates WHERE tour_ID = $tour_ID" );        
                  $get_rates_per_pax->execute();
                  $get_rates_per_pax_result = $get_rates_per_pax->get_result();
                  if( $get_rates_per_pax_result->num_rows > 0 ) :
                    while( $row = $get_rates_per_pax_result->fetch_assoc() ) :
                      $rates = unserialize( $row['rates'] );
                      $rate = $rates['rate'];

                        echo '<option value="' . $row['pax'] . '">' . $row['pax'] . ' - &#8369; ' . number_format($rate['twin-sharing'],2) . '</option>';                      
                    endwhile;              
                  endif; 
                  $get_rates_per_pax->close(); ?>                                                              
                </select>                           
              </div>                        
            </div>                      
            <div class="form-group space-top">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" class="btn btn-primary px-5 space-top-high">
            </div>
          </form>
          <small><span class="icon icon-envelope"></span> alonatreatsandtravel08@gmail.com </small>
          <small class="wrap-text"><span class="icon icon-phone"></span> (038) 502-4712</small>
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

<script type="text/javascript">

  var enable_sharing = function () {        
    if ($("#pax").val() >= 5) {
      $('#sharing').attr('disabled', false);
    } else {
      $('#sharing').attr('disabled', true);
      $("#sharing").val("2");    
    }
  };

  enable_sharing();
  $("#pax").change(enable_sharing); 

</script>

</body>
</html>