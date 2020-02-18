<!DOCTYPE html>
<?php
/**
* Order complete template
* 
* @package SJM
* @author 
*/

require_once 'functions.php';

if( empty( $_GET['p'] ) ) {
  redirect( 'index.php' );
}

$slug = $_GET['p'];

$setDateIn = date("M d, Y", strtotime("+7 days"));
$setDateOut = date("M d, Y", strtotime("+8 days"));

if(empty( $_GET['check-in'] ) ){
  $check_In = $setDateIn;
}else{
  $check_In = $_GET['check-in'];  
}

if(empty( $_GET['check-out'] ) ){
  $check_Out = $setDateOut;
}else{
  $check_Out = $_GET['check-out'];  
}


$toBookDateIn = date("D - M d, Y", strtotime($check_In));
$toBookDateOut = date("D - M d, Y", strtotime($check_Out));

$datestart = strtotime($check_In);
$dateend = strtotime($check_Out);      

$nights = ($dateend - $datestart)/60/60/24;

$submitted_guest_no = 2;
$submitted_room_no = 1;
$booked_rooms = '';
$remainingRooms = 0;
$booked_rooms_roomType_id = '';

if( isset( $_POST['see-availability'] ) ) {  
  $checkin_date = $_POST['checkin-date'];
  $checkout_date = $_POST['checkout-date'];
  $guest = $_POST['guest'];
  $room = $_POST['room'];  

  $check_In = $checkin_date;
  $check_Out = $checkout_date;
  $submitted_guest_no = $guest;
  $submitted_room_no = $room;

  $toBookDateIn = date("D - M d, Y", strtotime($check_In));
  $toBookDateOut = date("D - M d, Y", strtotime($check_Out));

  $arrival = date("M d, Y", strtotime($check_In));
  $departure = date("M d, Y", strtotime($check_Out));

  $datestart = strtotime($arrival);
  $dateend = strtotime($departure);      

  $nights = ($dateend - $datestart)/60/60/24;  

}


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
     <a class="navbar-brand" href="index.php">Alona Treats</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item active"><a href="accommodation.php?p=casi-verde-guest-house" class="nav-link">Accommodation</a></li>
         <li class="nav-item"><a href="tours-and-packages.php" class="nav-link">Tours & Packages</a></li>           
         <li class="nav-item"><a href="tour-package-rates.php" class="nav-link">Rates</a></li>                           
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
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Accommodation</span></p>
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%' }">Accommodation</h1>        
      </div>
    </div>
  </div>
</div>

 <section class="bg-light-navigator ftco-animate">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <small><a href="index.php" class="text-lighted">Home</a></small> <span class="icon-keyboard_arrow_right"></span> <small><a href="accommodation.php?p=casi-verde-guest-house" class="text-lighted">Accommodation</a></small> <span class="icon-keyboard_arrow_right"></span> <small class="text-lighted"><?php echo $hotelDisplayName;?></small>
      </div>                                                             
    </div>
  </div>
</section> 

<section class="ftco-section">          
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center ftco-animate" >
        <h4>Search Availability</h4>
        <hr>
        <div class="col-md-12 order-md-last">
          <form method="POST" action="accommodation.php?p=<?php echo $slug;?>">              
            <div class="form-group text-left">
              <label>Check-in Date :</label>
              <input type="text" value="<?php echo $check_In;?>" name="checkin-date" class="form-control checkin_date" id="checkin_date" placeholder="Check in Date" required>
            </div>
            <div class="form-group text-left">
              <label>Check-out Date :</label>
              <input type="text" value="<?php echo $check_Out;?>" name="checkout-date" class="form-control checkout_date" id="checkout_date" placeholder="Check out Date" required>
            </div>
            <div class="form-group text-left">
              <div class="select-wrap one-third">
                <label>Number of Guest:</label>              
                <select name="guest" id="guest" class="form-control" placeholder="Keyword search">
                  <option value="1" <?php if($submitted_guest_no == 1) echo "selected"; ?> >1 Guest</option>
                  <option value="2" <?php if($submitted_guest_no == 2) echo "selected"; ?> >2 Guests</option>
                  <option value="3" <?php if($submitted_guest_no == 3) echo "selected"; ?> >3 Guests</option> 
                  <option value="4" <?php if($submitted_guest_no == 4) echo "selected"; ?> >4 Guests</option> 
                  <option value="5" <?php if($submitted_guest_no == 5) echo "selected"; ?> >5 Guests</option>
                  <option value="6" <?php if($submitted_guest_no == 6) echo "selected"; ?> >6 Guests</option>
                  <option value="7" <?php if($submitted_guest_no == 7) echo "selected"; ?> >7 Guests</option>
                  <option value="8" <?php if($submitted_guest_no == 8) echo "selected"; ?> >8 Guests</option>
                  <option value="9" <?php if($submitted_guest_no == 9) echo "selected"; ?> >9 Guests</option>                                           
                  <option value="10" <?php if($submitted_guest_no == 10) echo "selected"; ?> >10 Guests</option>
                  <option value="11" <?php if($submitted_guest_no == 11) echo "selected"; ?> >11 Guests</option>
                  <option value="12" <?php if($submitted_guest_no == 12) echo "selected"; ?> >12 Guests</option>
                  <option value="13" <?php if($submitted_guest_no == 13) echo "selected"; ?> >13 Guests</option>
                  <option value="14" <?php if($submitted_guest_no == 14) echo "selected"; ?> >14 Guests</option>
                  <option value="15" <?php if($submitted_guest_no == 15) echo "selected"; ?> >15 Guests</option>
                  <option value="16" <?php if($submitted_guest_no == 16) echo "selected"; ?> >16 Guests</option>
                  <option value="17" <?php if($submitted_guest_no == 17) echo "selected"; ?> >17 Guests</option>
                  <option value="18" <?php if($submitted_guest_no == 18) echo "selected"; ?> >18 Guests</option>
                  <option value="19" <?php if($submitted_guest_no == 19) echo "selected"; ?> >19 Guests</option>
                  <option value="20" <?php if($submitted_guest_no == 20) echo "selected"; ?> >20 Guests</option>                  
                </select>                
              </div>                        
            </div> 
            <div class="form-group text-left">
              <div class="select-wrap one-third">  
                <label>Number of Rooms:</label>                        
                <select name="room" id="room" value="<?php echo $submitted_room_no; ?>" class="form-control" placeholder="Keyword search">                  
                  <option value="1" <?php if($submitted_room_no == 1) echo "selected"; ?> >1 Room</option>
                  <option value="2" <?php if($submitted_room_no == 2) echo "selected"; ?> >2 Rooms</option>
                  <option value="3" <?php if($submitted_room_no == 3) echo "selected"; ?> >3 Rooms</option> 
                  <option value="4" <?php if($submitted_room_no == 4) echo "selected"; ?> >4 Rooms</option> 
                  <option value="5" <?php if($submitted_room_no == 5) echo "selected"; ?> >5 Rooms</option>
                  <option value="6" <?php if($submitted_room_no == 6) echo "selected"; ?> >6 Rooms</option>
                  <option value="7" <?php if($submitted_room_no == 7) echo "selected"; ?> >7 Rooms</option>
                  <option value="8" <?php if($submitted_room_no == 8) echo "selected"; ?> >8 Rooms</option>
                  <option value="9" <?php if($submitted_room_no == 9) echo "selected"; ?> >9 Rooms</option>                                           
                  <option value="10" <?php if($submitted_room_no == 10) echo "selected"; ?> >10 Rooms</option>                                                               
                </select>                
              </div>                        
            </div>              
            <div class="form-group">              
              <input type="submit" value="See Availability" class="btn btn-primary space-top"> 
              <input type="hidden" name="see-availability" value="1">                
            </div>                        
          </form>

        </div>

      </div>
      <div class="col-md-9">
        <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
          <?php if($type === 'main') : ?>
            <span class="star">
              <i class="icon-star"></i>
              <i class="icon-star"></i>
              <i class="icon-star"></i>
              <i class="icon-star"></i>
              <i class="icon-star-half-o"></i>                  
              <?php echo $hotel['rating'];?> Rating</span>  
            <?php endif; ?>             
            <h2><?php echo $hotelDisplayName;?></h2>  
            <p class="rate mb-5">
              <span class="loc"><i class="icon-map"></i> <?php echo $hotel['hotel-address'];?> <span class="icon-long-arrow-right"></span> <a class="map-link" href="<?php echo $hotel['map-address'];?>" target="_blank">Show map</a></span>                           
            </p>
            <?php if($type === 'main') : ?>           
              <div class="single-slider owl-carousel">
                <?php
                $get_media_stmt = $mysqli->prepare( "SELECT * FROM room_media WHERE hotel_ID = $hotel_id" );        
                $get_media_stmt->execute();
                $get_media_result = $get_media_stmt->get_result();
                if( $get_media_result->num_rows > 0 ) :
                  while( $row = $get_media_result->fetch_assoc() ) : 
                    $room_media = $row['media'];
                    ?>
                    <div class="item">
                      <div class="hotel-img" style="background-image: url(<?php echo $room_media; ?>);"></div>
                    </div>                                                
                    <?php 
                  endwhile;              
                endif; 
                $get_media_stmt->close(); 
                ?>                                              
              </div>
              <p class="text-lighted"><?php echo $hotel['info'];?></p>
              <?php
              $get_hotel_information_stmt = $mysqli->prepare( "SELECT * FROM hotel_informations WHERE hotel_ID = $hotel_id" );        
              $get_hotel_information_stmt->execute();
              $get_hotel_information_result = $get_hotel_information_stmt->get_result();
              if( $get_hotel_information_result->num_rows > 0 ) :
                while( $row = $get_hotel_information_result->fetch_assoc() ) :                             
                  ?>                
                  <ul>
                    <li><i class="icon-check orange"></i> <?php echo $row['informations']?></li>
                  </ul>                
                  <?php 
                endwhile;              
              endif; 
              $get_hotel_information_stmt->close(); ?>                          
            </div>
          <?php endif; ?>  
          <div class="col-md-12 ftco-animate">
            <div class="form-group bordered row">
              <div class="col-md-3">
                <span class="text-lighted">Check-in Date</span>
                <small class="wrap-text"><?php echo $toBookDateIn;?></small>
              </div>
              <div class="col-md-3">
                <span class="text-lighted">Check-out Date</span>
                <small class="wrap-text"><?php echo $toBookDateOut;?></small>
              </div>
              <div class="col-md-3">
                <span class="text-lighted">Guest</span>
                <?php 
                ($submitted_guest_no <= 1) ? $persons = 'person' : $persons = 'persons';
                ($nights <= 1) ? $night = 'night' : $night = 'nights'; 
                ?>
                <small class="wrap-text"><?php echo $nights . ' ' . $night . ', ' . $submitted_guest_no .' '. $persons;?></small>
              </div>
              <div class="col-md-3">
                <input type="submit" onclick="getfocus()" value="Change Search" class="btn btn-secondary space-top">
              </div>
            </div>
          </div>  

          <div class="col-md-12 hotel-single ftco-animate">
            <h4 class="mb-4">Our Rooms</h4>
          </div> 
          <div class="col-md-12 row ftco-animate space-top-high">                                                                                        
            <div class="col-md-9 table">              
              <table class="rate">
                <thead class="rate-header">
                  <tr>
                    <?php if($type === 'main') : ?>                                                         
                    <th class="rate-th-no" colspan="2">Room Type</th>  
                    <?php else : ?> 
                    <th class="rate-th-no">Room Type</th>
                    <?php endif; ?>                                     
                    <th class="rate-th-no-last">No. of Rooms</th>                                                
                  </tr>
                </thead>
                <tbody id="room-rates">
                  <?php                  

                  $get_hotel_rooms_stmt = $mysqli->prepare( "SELECT * FROM hotel_rooms WHERE hotel_ID = $hotel_id" );        
                  $get_hotel_rooms_stmt->execute();
                  $get_hotel_rooms_result = $get_hotel_rooms_stmt->get_result();
                  if( $get_hotel_rooms_result->num_rows > 0 ) :
                    while( $row = $get_hotel_rooms_result->fetch_assoc() ) : 
                      $rates = unserialize( $row['room_description'] );
                      $rate = $rates['hotel'];
                      $roomType_ID = $row['roomType_ID'];
                      $rooms = $row['rooms'];
                      $pax = $row['pax']; 


                      $get_hotel_rooms_stmt_2 = $mysqli->prepare( "SELECT * FROM hotel_rooms WHERE roomType_ID = $roomType_ID LIMIT 1" );        
                      $get_hotel_rooms_stmt_2->execute();
                      $get_hotel_rooms_result_2 = $get_hotel_rooms_stmt_2->get_result();                            
                      if( $get_hotel_rooms_result_2->num_rows > 0 ) {
                        while( $row = $get_hotel_rooms_result_2->fetch_assoc() ) {                               
                          $roomType_IDs = $row['roomType_ID'];
                          $hotelRooms = $row['rooms'];                                                                                        
                        }
                      }
                      $get_hotel_rooms_stmt_2->close();

                      $order_stmt = $mysqli->prepare( "SELECT * FROM booking WHERE roomType_ID = ? AND checkin_date = ? " );
                      $order_stmt->bind_param( 'ss', $roomType_IDs, $check_In );
                      $order_stmt->execute();
                      $order_result = $order_stmt->get_result();
                      if( $order_result->num_rows > 0 ) {
                        while( $row = $order_result->fetch_assoc() ) {           
                          $booked_rooms = $row['booked_rooms'];
                          $booked_rooms_roomType_id = $row['roomType_ID'];                                                            

                        }
                      }
                      $order_stmt->close();                                       
                      ?>                                 
                      <tr class="hotel-rates" id="tr-rates">
                        <?php if($type === 'main') : ?>
                        <td class="td-image">                          
                          <img src="images/casi-verde/04.jpg">                                                  
                        </td>
                        <?php endif; ?>
                        <td class="rate-td text-left">
                          <span class="text-lighted"><?php echo $rate['room-type'];?> <span class="icon-long-arrow-right"></span> &#8369; <?php echo number_format(($rate['rate'] * $nights) , 2); ?> per night</span>
                          <?php if($type === 'main') : ?>                                                   
                          <span class="small-h3 wrap-text"> 
                            <?php
                            ($booked_rooms_roomType_id === $roomType_ID) ? 
                            $remainingRooms =+ ((int)$hotelRooms - (int)$booked_rooms) 
                            : 
                            $remainingRooms = $rooms;

                            ($remainingRooms === 1) ? $rooms = 'room' : $rooms = 'rooms';

                            if($remainingRooms === 0) {                                      
                              ?>                                                                       
                              <span class="small-h3 wrap-text">Sorry! room is fully booked.</span>
                            <?php }else{ ?>
                              <span class="small-h3 wrap-text">Only <?php echo $remainingRooms .' '. $rooms;?> left like this in our site.</span>  
                            <?php } ?> 

                          </span>
                        <?php endif; ?>
                          <div class="row top-bordered">
                          <span class="text-lighted">Amenities</span>                                                     
                            <?php
                            $get_facility_stmt = $mysqli->prepare( "SELECT * FROM room_amenities WHERE roomType_ID = $roomType_ID" );        
                            $get_facility_stmt->execute();
                            $get_facility_result = $get_facility_stmt->get_result();
                            if( $get_facility_result->num_rows > 0 ) :
                              while( $row = $get_facility_result->fetch_assoc() ) : 
                                $facilities = unserialize( $row['amenities'] );
                                $facility = $facilities['hotel'];
                                ?>
                                <div class="wrap-text">                                                  
                                  <span><i class="<?php echo$facility['icon'];?>"></i> <?php echo$facility['facility'];?></span>
                                </div>                                                 
                                <?php 
                              endwhile;              
                            endif; 
                            $get_facility_stmt->close(); ?>
                          </div>
                        </td>                                            
                      <!-- <td class="rate-td-center">
                        <p class="text-lighted">
                          &#8369; <?php echo number_format(($rate['rate'] * $nights) , 2); ?>                            
                        </p>                                                    
                      </td> -->
                      <td class="rate-td">
                        <div class="form-group text-left">
                          <div class="select-wrap one-third">
                          <?php if($type === 'main') : ?>                                                      
                            <select name="room" id="book-room" value="<?php echo $submitted_room_no; ?>" class="form-control room-select">
                              <option value="0">0</option>                  
                              <?php 
                              for( $i = 1; $i <= $remainingRooms; $i++ ) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                              } ?>                                                               
                            </select> 
                            <?php else : ?> 
                              <select name="room" id="book-room" value="<?php echo $submitted_room_no; ?>" class="form-control room-select">
                              <option value="0">0</option>                  
                              <?php 
                              for( $i = 1; $i <= $hotelRooms; $i++ ) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                              } ?>
                            <?php endif; ?>
                            <input type="hidden" name="rate" value="<?php echo ($rate['rate'] * $nights);?>">
                            <input type="hidden" name="room-type" value="<?php echo $rate['room-type'];?>">
                            <input type="hidden" name="pax" value="<?php echo $pax; ?>">                            
                            <input type="hidden" class="total-rate" name="total-rate" value="<?php echo ($rate['rate'] * $nights);?>"> 
                            <div class="space-top text-center">
                              <span id="rate-by-select"><span class="wrap-text"></span>  
                            </div>                            

                          </div>                        
                        </div>
                      </td>
                    </tr>
                    <?php 
                  endwhile;              
                endif; 
                $get_hotel_rooms_stmt->close(); ?>                                                                                   


              </tbody>              
            </table>

          </div>  

          <div class="col-md-3">
            <div class="form-group space-top text-center">              
              <form method="POST" target="_blank" action="book.php?hotel=<?php echo $slug; ?>">                                  
                <input type="submit" value="Book Now" id="book-now" disabled class="btn btn-primary">
                <input type="hidden" name="place-booking" value="1">
                <input type="hidden" name="chekin-date" value="<?php echo $check_In?>">
                <input type="hidden" name="chekout-date" value="<?php echo $check_Out?>">
                <input type="hidden" name="no-of-nights" value="<?php echo $nights?>">
                <input type="hidden" name="no-of-guests" id="no-of-guests">
                <input type="hidden" name="no-of-rooms" id="no-of-rooms">
                <input type="hidden" name="total-amount" id="total-amount">
                <input type="hidden"name="rooms-input" id="rooms-input">
              </form>   
              <div class="space-top bordered"> 
                <small id="rooms"></small>                 
                <span id="price" class="text-lighted wrap-text green"></span>
                <small id="nights"><span class="green">No credit card</span> needed!</small>
              </div>
              <p><strong class="text-lighted">FREE</strong> cancellation</p>              

            </div> 
          </div>  

        </div>         

        <div class="col-md-12 ftco-animate space-top-high">
          <!-- <p class="text-lighted"><?php echo $hotel['name'];?></p> -->                       
          <?php if ($hotel['note'] == true) : ?>
          <p class="text-lighted">Note :</p>
          <p><?php echo $hotel['note'];?>.</p>
          <?php endif; ?>
          <hr>
          <?php if($type === 'main') : ?>                                                                        
            <div class="col-md-12">
              <div class="destination"> 
                <?php
                $get_beaches_neighbourhood_stmt = $mysqli->prepare( "SELECT * FROM beaches_neighbourhood WHERE hotel_ID = $hotel_id" );        
                $get_beaches_neighbourhood_stmt->execute();
                $get_beaches_neighbourhood_result = $get_beaches_neighbourhood_stmt->get_result();
                if( $get_beaches_neighbourhood_result->num_rows > 0 ) :
                  echo '<p class="text-lighted">Beaches in the neighbourhood</p>';
                  while( $row = $get_beaches_neighbourhood_result->fetch_assoc() ) :
                    $beaches = unserialize( $row['beaches'] );
                    $beach = $beaches['beach'];                             
                    ?>                
                    <div class="text p-3 bottom-bordered">
                      <div class="d-flex">
                        <div class="one">
                          <h3><?php echo $beach['name'];?> <span class="icon-long-arrow-right"></span> <span><a class="map-link" href="<?php echo $beach['map'];?>" target="_blank">Show map</a></span> </h3>                                                              
                        </div>                  
                      </div>                                                                                                                        
                      <p class="bottom-area d-flex">
                        <small><?php echo $beach['note'];?>.</small> 
                        <span class="ml-auto"><?php echo $beach['km'];?> km</span>
                      </p>                
                    </div>                
                    <?php 
                  endwhile;              
                endif; 
                $get_beaches_neighbourhood_stmt->close(); ?>                                         

              </div>            
            </div>
          <?php endif; ?>

        </div>   
        <div class="col-md-12 ftco-animate mb-5 mt-5">
          <h4 class="mb-4">We also accept accommodations for</h4>
          <div class="row">
            <?php
            $paginationCtrls = '';
            $count_query = $mysqli->query( "SELECT COUNT(ID) FROM hotel" );
            $count_row = $count_query->fetch_row();
            $count_rows = $count_row[0];
            $per_page = 12;
            $last = ceil( $count_rows/$per_page );
            if( $last < 1 ){
              $last = 1;
            }
            $pagenum = 1;
            if( isset( $_GET['page'] ) ){
              $pagenum = (int) $_GET['page'];
            }
            if ( $pagenum < 1 ) { 
              $pagenum = 1; 
            } elseif ( $pagenum > $last) { 
              $pagenum = $last; 
            }
            $limit = 'LIMIT ' .( $pagenum - 1 ) * $per_page .',' .$per_page;
            $get_hotel_stmt = $mysqli->prepare( "SELECT * FROM hotel WHERE slug != ? AND slug != 'casi-verde-guest-house' " );
            $get_hotel_stmt->bind_param( 's', $slug );
            $get_hotel_stmt->execute();
            $get_products_result = $get_hotel_stmt->get_result();
            if( $get_products_result->num_rows > 0 ) :
              if($last != 1){
                $paginationCtrls .= '<nav class="pagination-controls" aria-label="..."><ul class="pagination">';
                if ($pagenum > 1) {
                  $previous = $pagenum - 1;
                  $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'. add_query_arg( 'page', $previous, get_currenturl() ) .'">Previous</a></li>';
                                // Render clickable number links that should appear on the left of the target page number
                  for($i = $pagenum-4; $i < $pagenum; $i++){
                    if($i > 0){
                      $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.add_query_arg( 'page', $i, get_currenturl() ).'">'.$i.'</a></li>';
                    }
                  }
                }
                            // Render the target page number, but without it being a link
                $paginationCtrls .= '<li class="page-item active"><span class="page-link">'.$pagenum.'</span></li>';
                            // Render clickable number links that should appear on the right of the target page number
                for($i = $pagenum+1; $i <= $last; $i++){
                  $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.add_query_arg( 'page', $i, get_currenturl() ).'">'.$i.'</a></li>';
                  if($i >= $pagenum+4){
                    break;
                  }
                }
                                // This does the same as above, only checking if we are on the last page, and then generating the "Next"
                if ($pagenum != $last) {
                  $next = $pagenum + 1;
                  $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.add_query_arg( 'page', $next, get_currenturl() ).'">Next</a></li>';
                }
                $paginationCtrls .= '</ul></nav>';
              }
              while( $row = $get_products_result->fetch_assoc() ) : 
                $hotel_details = unserialize( $row['hotel_details'] );
                $hotel_id = $row['hotel_ID'];
                $hotel = $hotel_details['hotel'];
                $hotel_media_logo = $row['hotel_media_logo'];
                $slug = $row['slug'];
                $hotelDisplayName = $row['display_name'];
                $type = $row['type'];
                ?>
                <div class="col-md-12">
                  <div class="destination bordered">
                    <!-- <a href="accommodation.php?p=<?php echo $slug; ?>&check-in=<?php echo $check_In; ?>&check-out=<?php echo $check_Out; ?>&guest=<?php echo $submitted_guest_no; ?>&room=<?php echo $submitted_room_no; ?>" class="img img-3 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $hotel_media_logo?>);">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-link"></span>
                      </div>
                    </a> -->
                    <div class="text p-3">
                      <div class="d-flex">
                        <div>
                          <h3><a href="accommodation.php?p=<?php echo $slug; ?>&check-in=<?php echo $check_In; ?>&check-out=<?php echo $check_Out; ?>&guest=<?php echo $submitted_guest_no; ?>&room=<?php echo $submitted_room_no; ?>"><?php echo $hotelDisplayName; ?></a></h3>
                          <small><i class="icon-map orange"></i> <?php echo $hotel['hotel-address'];?></small>
                          <!-- <?php if($type === 'main') : ?>
                          <p class="rate">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-o"></i>
                            <span><?php echo $hotel['rating'];?> Rating</span>
                          </p>
                        <?php endif; ?> -->
                        </div>                      
                      </div>
                      <!-- <p><?php echo $hotel['info']; ?>.</p> -->                      
                      <p class="bottom-area d-flex">
                        <?php
                        $get_hotel_rooms_stmt = $mysqli->prepare( "SELECT * FROM hotel_rooms WHERE hotel_ID = $hotel_id LIMIT 1" );        
                        $get_hotel_rooms_stmt->execute();
                        $get_hotel_rooms_result = $get_hotel_rooms_stmt->get_result();                            

                        if( $get_hotel_rooms_result->num_rows > 0 ) :
                          while( $row = $get_hotel_rooms_result->fetch_assoc() ) : 
                            $rates = unserialize( $row['room_description'] );
                            $rate = $rates['hotel'];
                            $roomType_ID = $row['roomType_ID'];                                                                                           
                            ?>
                            <span>Price starts at<span class="text-lighted">&#8369; <?php echo number_format( $rate['rate'], 2);?> <span class="icon-long-arrow-right"> </span> </span> <?php echo $rate['room-type'];?></span> 
                            <?php 
                          endwhile;              
                        endif; 
                        $get_hotel_rooms_stmt->close();                       
                        ?>
                        <!-- <span><a href="accommodation.php?p=<?php echo $slug; ?>&check-in=<?php echo $check_In; ?>&check-out=<?php echo $check_Out; ?>&guest=<?php echo $submitted_guest_no; ?>&room=<?php echo $submitted_room_no; ?>">View more</a></span> -->
                      </p>
                    </div>
                  </div>
                </div>

                <?php
              endwhile;
            endif;
            $get_hotel_stmt->close(); ?>
          </div>
          <?php echo $paginationCtrls; ?>
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


<script type="text/javascript">

  function getfocus() {
    document.getElementById("checkin_date").focus();
  }


  $(document).on('change', '.room-select', function(e) {
    var $this = $(this);
    var $td = $this.parent();
    var rate  = $(this).parent().find('input[name=rate]').val();
    var roomType  = $(this).parent().find('input[name=room-type]').val();
    var pax = $(this).parent().find('input[name=pax]').val();
      // var total = ($this.val() * rate).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
      var total = ($this.val() * rate);
      let room;
      if($this.val() == 1) {
        room = 'room';
      }else{
        room = 'rooms'
      }

      $(this).parent().find('input[name=total-rate]').val(total);
      $(this).parent().find('input[name=paxs]').val($this.val() * pax);
      if($this.val() == 0){           
        $(this).parents('tr').attr("class", "hotel-rates");
        $(this).parent().find('#rate-by-select').html(''); 
      }else{          
        $(this).parents('tr').attr("class", "hotel-rates-selected");
        $(this).parent().find('#rate-by-select').html("&#8369 " + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + '<br/>for ' + $this.val() + ' ' + room);
      }       
      
      rateCalculateTotal();  
      e.preventDefault();
    });

  var rateCalculateTotal = function() {
    var grandTotal = 0;
    var quantities = 0;
    var totalPax = 0;
    var roomTypes = new Array();


    $('#room-rates').find('tr').each(function() {
      var quantity = parseFloat($(this).find('.room-select').val());
      var pax = parseFloat( $(this).find('input[name=pax]').val() * quantity);
      var total = parseFloat( $(this).find('input[name=rate]').val() ) * quantity;
      var roomType = $(this).find('input[name=room-type]').val(); 

      if(quantity >= 1) {           
        roomTypes.push(quantity + ' x ' + roomType);
      }

      grandTotal += total;
      quantities += quantity;
      totalPax += pax;                        

    });
    let room;
    if(quantities == 1) {
      room = 'room';
    }else{
      room = 'rooms'
    }

    if(grandTotal === 0){
      document.getElementById("book-now").focus();                 
      document.getElementById("rooms").innerHTML = '<span class="green">No credit card</span> needed!'; 
      document.getElementById("price").innerHTML = "";
      document.getElementById("nights").innerHTML = "";            
      $('#book-now').prop('disabled', true);
    }else{
      document.getElementById("book-now").focus();
      $("#rooms-input").val(roomTypes.join("<br/>"));
      $("#no-of-rooms").val(quantities);
      $("#total-amount").val(grandTotal);
      $("#no-of-guests").val(totalPax);                 
      document.getElementById("rooms").innerHTML = quantities + ' ' + room; 
      document.getElementById("price").innerHTML = "&#8369 " + grandTotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
      document.getElementById("nights").innerHTML = "for <?php echo $nights .' '. $night;?>";            
      $('#book-now').prop('disabled', false);
    }    
  };


  var add_room = function () {

    if ($("#guest").val() >= 4) {
      $("#room").val("2"); 
    }
    if ($("#guest").val() >= 6) {
      $("#room").val("3"); 
    }
    if ($("#guest").val() >= 8) {
      $("#room").val("4"); 
    }
    if ($("#guest").val() >= 10) {
      $("#room").val("5"); 
    }
    if ($("#guest").val() >= 12) {
      $("#room").val("6"); 
    }
    if ($("#guest").val() >= 14) {
      $("#room").val("7"); 
    }
    if ($("#guest").val() >= 16) {
      $("#room").val("8"); 
    }
    if ($("#guest").val() >= 18) {
      $("#room").val("9"); 
    }
    if ($("#guest").val() >= 20) {
      $("#room").val("10"); 
    } 
  };  

  add_room();
  $("#guest").change(add_room);

  var add_guest = function () {

    if ($("#room").val() >= 2) {
      $("#guest").val("4"); 
    }
    if ($("#room").val() >= 3) {
      $("#guest").val("6"); 
    }
    if ($("#room").val() >= 4) {
      $("#guest").val("8"); 
    }
    if ($("#room").val() >= 5) {
      $("#guest").val("10"); 
    }
    if ($("#room").val() >= 6) {
      $("#guest").val("12"); 
    }
    if ($("#room").val() >= 7) {
      $("#guest").val("14"); 
    }
    if ($("#room").val() >= 8) {
      $("#guest").val("16"); 
    }
    if ($("#room").val() >= 9) {
      $("#guest").val("18"); 
    }
    if ($("#room").val() >= 10) {
      $("#guest").val("20"); 
    } 
  };  

  add_guest();
  $("#room").change(add_guest);  

</script>


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