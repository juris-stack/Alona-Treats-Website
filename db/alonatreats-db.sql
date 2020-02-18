-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 01:43 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alonatreats-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beaches_neighbourhood`
--

CREATE TABLE `beaches_neighbourhood` (
  `ID` bigint(20) NOT NULL,
  `hotel_ID` varchar(250) NOT NULL,
  `beaches` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beaches_neighbourhood`
--

INSERT INTO `beaches_neighbourhood` (`ID`, `hotel_ID`, `beaches`) VALUES
(1, '301657767', 'a:1:{s:5:\"beach\";a:4:{s:4:\"name\";s:11:\"Alona Beach\";s:3:\"map\";s:286:\"https://www.google.com/maps/dir/Cassie+Verde,+Panglao,+Bohol/Alona+Beach,+Bohol/@9.5552569,123.7677982,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x33abacb8ea6593db:0xebab2e09844c6795!2m2!1d123.7811606!2d9.5602091!1m5!1m1!1s0x33abac9f32e574a7:0x48e7cb35746858e1!2m2!1d123.7740322!2d9.5485549\";s:4:\"note\";s:66:\"Swimming, Food and drink, Watching the sunset, Seashell collecting\";s:2:\"km\";s:3:\"2.2\";}}'),
(2, '301657767', 'a:1:{s:5:\"beach\";a:4:{s:4:\"name\";s:11:\"Danao Beach\";s:3:\"map\";s:278:\"https://www.google.com/maps/dir/Cassie+Verde,+Panglao,+Bohol/Danao+Beach/@9.5541568,123.7581392,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x33abacb8ea6593db:0xebab2e09844c6795!2m2!1d123.7811606!2d9.5602091!1m5!1m1!1s0x33abac9cb16f162f:0x4f04734f2956bf4f!2m2!1d123.7527326!2d9.546852\";s:4:\"note\";s:96:\"White-sand shoreline with palm trees & sunset views, plus small resorts with pools & restaurants\";s:2:\"km\";s:3:\"4.6\";}}'),
(3, '301657767', 'a:1:{s:5:\"beach\";a:4:{s:4:\"name\";s:14:\"Dumaluan Beach\";s:3:\"map\";s:333:\"https://www.google.com/maps/dir/Cassie+Verde,+Panglao,+Bohol/Dumaluan+Beach+Resort,+Panglao+Island+bohol+Blood,+Panglao,+Bohol/@9.5579932,123.7833848,15z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x33abacb8ea6593db:0xebab2e09844c6795!2m2!1d123.7811606!2d9.5602091!1m5!1m1!1s0x33aa5339dddaabd7:0x98032b3a90a91176!2m2!1d123.8035242!2d9.5553243\";s:4:\"note\";s:23:\"Fine white sand beaches\";s:2:\"km\";s:3:\"3.3\";}}'),
(4, '23978911', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:0:\"\";s:4:\"icon\";s:0:\"\";}}'),
(5, '2088360476', 'a:1:{s:5:\"beach\";a:4:{s:4:\"name\";s:11:\"Danao Beach\";s:3:\"map\";s:366:\"https://www.google.com/maps/dir/Panglao+Village+Court,+1+Torralba+Drive,+Panglao+Island+Circumferential+Road+Purok+5,+Barangay+Danao,+Panglao,+Bohol/Danao+Beach/@9.5522072,123.7493229,15.5z/data=!4m13!4m12!1m5!1m1!1s0x33abac8edca49bbf:0xa250bfc837617214!2m2!1d123.7584977!2d9.5576181!1m5!1m1!1s0x33abac9cb16f162f:0x4f04734f2956bf4f!2m2!1d123.7527326!2d9.546852?hl=en\";s:4:\"note\";s:97:\"White-sand shoreline with palm trees & sunset views, plus small resorts with pools & restaurants.\";s:2:\"km\";s:3:\"1.8\";}}'),
(6, '2088360476', 'a:1:{s:5:\"beach\";a:4:{s:4:\"name\";s:11:\"Alona Beach\";s:3:\"map\";s:374:\"https://www.google.com/maps/dir/Panglao+Village+Court,+1+Torralba+Drive,+Panglao+Island+Circumferential+Road+Purok+5,+Barangay+Danao,+Panglao,+Bohol/Alona+Beach,+Bohol/@9.5514516,123.7598194,15.5z/data=!4m13!4m12!1m5!1m1!1s0x33abac8edca49bbf:0xa250bfc837617214!2m2!1d123.7584977!2d9.5576181!1m5!1m1!1s0x33abac9f32e574a7:0x48e7cb35746858e1!2m2!1d123.7740322!2d9.5485549?hl=en\";s:4:\"note\";s:66:\"Swimming, Food and drink, Watching the sunset, Seashell collecting\";s:2:\"km\";s:3:\"1.7\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` bigint(20) NOT NULL,
  `booking_id` bigint(20) NOT NULL,
  `roomType_ID` varchar(255) NOT NULL,
  `customer_booking_details` varchar(5000) NOT NULL,
  `checkin_date` varchar(250) NOT NULL,
  `checkout_date` varchar(250) NOT NULL,
  `booked_rooms` varchar(255) NOT NULL,
  `status` enum('pending','confirmed','accepted','cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `ID` bigint(20) NOT NULL,
  `hotel_ID` varchar(255) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `hotel_details` varchar(5000) NOT NULL,
  `hotel_media_logo` varchar(255) NOT NULL,
  `display_name` varchar(1000) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`ID`, `hotel_ID`, `slug`, `hotel_details`, `hotel_media_logo`, `display_name`, `type`) VALUES
(9, '301657767', 'casi-verde-guest-house', 'a:1:{s:5:\"hotel\";a:6:{s:4:\"name\";s:22:\"Casi Verde Guest House\";s:13:\"hotel-address\";s:50:\"Purok 3 Tawala, Panglao, 6340 Panglao, Philippines\";s:11:\"map-address\";s:177:\"https://www.google.com/maps/place/Cassie+Verde/@9.5602144,123.7789719,17z/data=!3m1!4b1!4m8!3m7!1s0x33abacb8ea6593db:0xebab2e09844c6795!5m2!4m1!1i2!8m2!3d9.5602091!4d123.7811606\";s:6:\"rating\";s:3:\"4.4\";s:4:\"info\";s:35:\"A non-beachfront room accommodation\";s:4:\"note\";s:66:\"Extra person is &#8369; 350.00 provided with mattress on the floor\";}}', 'images/casi-verde.jpg', 'Casi Verde Guest House', 'main'),
(10, '2088360476', 'non-beachfront-room-accommodation-5-mins-ride-to-alona-beach', 'a:1:{s:5:\"hotel\";a:6:{s:4:\"name\";s:21:\"Panglao Village Court\";s:13:\"hotel-address\";s:93:\"1 Torralba Drive, Panglao Island Circumferential Road Purok 5, Barangay Danao, Panglao, Bohol\";s:11:\"map-address\";s:191:\"https://www.google.com/maps/place/Panglao+Village+Court/@9.5576234,123.756309,17z/data=!3m1!4b1!4m8!3m7!1s0x33abac8edca49bbf:0xa250bfc837617214!5m2!4m1!1i2!8m2!3d9.5576181!4d123.7584977?hl=en\";s:6:\"rating\";s:3:\"4.5\";s:4:\"info\";s:35:\"A non-beachfront room accommodation\";s:4:\"note\";s:66:\"Extra person is &#8369; 400.00 provided with mattress on the floor\";}}', 'images/panglao-village-court.jpg', 'Non-Beachfront Room Accommodation (5-mins. ride to Alona Beach)', 'non-beachfront'),
(14, '2003029913', 'beachfront-room-accommodations-along-bolod-beach', 'a:1:{s:5:\"hotel\";a:6:{s:4:\"name\";s:40:\"Dumaluan Beach Resort â€“ MARILOU RESORT\";s:13:\"hotel-address\";s:54:\"Sapa, Bolod Beach, Panglao Island, Bohol, Philippines \";s:11:\"map-address\";s:192:\"https://www.google.com/maps/place/Dumaluan+Beach+Resort/@9.5553296,123.8013355,17z/data=!3m1!4b1!4m8!3m7!1s0x33aa5339dddaabd7:0x98032b3a90a91176!5m2!4m1!1i2!8m2!3d9.5553243!4d123.8035242?hl=en\";s:6:\"rating\";s:3:\"4.0\";s:4:\"info\";s:17:\"Beachfront resort\";s:4:\"note\";s:240:\"Extra Person is &#8369; 600.00 with buffet breakfast, provided with mattress on the floor. Extra Person for Junior Presidential, Presidential Suite, Dumaluan Suite is &#8369; 800.00 with buffet breakfast, provided with mattress on the floor\";}}', 'images/dumaluan-beach-resort.jpg', 'Beachfront Room Accommodations along Bolod Beach', 'beachfront'),
(15, '1099405573', 'beachfront-room-accommodations-along-alona-beach-option-1', 'a:1:{s:5:\"hotel\";a:6:{s:4:\"name\";s:19:\"Lost Horizon Resort\";s:13:\"hotel-address\";s:42:\"Alona Beach Rd, Panglao Island, 6340 Bohol\";s:11:\"map-address\";s:171:\"https://www.google.com/maps/place/Lost+Horizon+Resort/@9.548159,123.7689965,17z/data=!3m1!4b1!4m5!3m4!1s0x33aa115555555555:0x9f2292d63c64141c!8m2!3d9.5481537!4d123.7711852\";s:6:\"rating\";s:3:\"3.6\";s:4:\"info\";s:17:\"Beachfront resort\";s:4:\"note\";s:0:\"\";}}', 'images/lost-horizon-resort.jpg', 'Beachfront Room Accommodations along Alona Beach (Option 1)', 'beachfront'),
(16, '371559688', 'beachfront-room-accommodations-along-alona-beach-option-2', 'a:1:{s:5:\"hotel\";a:6:{s:4:\"name\";s:19:\"Bohol Divers Resort\";s:13:\"hotel-address\";s:30:\"Alona Beach Rd, Panglao, Bohol\";s:11:\"map-address\";s:184:\"https://www.google.com/maps/place/Bohol+Divers+Resort/@9.5480581,123.7692908,17z/data=!3m1!4b1!4m8!3m7!1s0x33abac98fcd31921:0x2f84cd0525390542!5m2!4m1!1i2!8m2!3d9.5480528!4d123.7714795\";s:6:\"rating\";s:3:\"3.7\";s:4:\"info\";s:17:\"Beachfront resort\";s:4:\"note\";s:0:\"\";}}', 'images/bohol-divers-resort.jpg', 'Beachfront Room Accommodations along Alona Beach (Option 2)', 'beachfront');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_informations`
--

CREATE TABLE `hotel_informations` (
  `ID` bigint(20) NOT NULL,
  `hotel_ID` varchar(250) NOT NULL,
  `informations` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_informations`
--

INSERT INTO `hotel_informations` (`ID`, `hotel_ID`, `informations`) VALUES
(1, '301657767', 'Featuring air-conditioned accommodation with a balcony, Casi Verde is set in Panglao. This bed and breakfast offers free private parking, a 24-hour front desk and free WiFi'),
(2, '301657767', 'A flat-screen TV with cable channels is featured'),
(3, '301657767', 'A continental breakfast is available every morning at the bed and breakfast'),
(4, '301657767', 'A car rental service is available at Casi Verde'),
(5, '301657767', 'Alona Beach is 2.2 km from the accommodation, while Danao Beach is 5 km away'),
(6, '301657767', 'We speak your language!'),
(7, '2088360476', 'Situated in Panglao, 1.3 km from Danao Beach, Panglao Village Court Apartments features air-conditioned accommodation and a restaurant.'),
(8, '2088360476', 'The property is located 1.6 km from Alona Beach, 1.7 km from Danao Beach and 2.2 km from Alona Beach.'),
(9, '2088360476', 'The accommodation provides a tour desk, ticket service and luggage storage for guests'),
(10, '2088360476', 'The rooms at the inn are fitted with a seating area, a flat-screen TV with cable channels and a private bathroom with free toiletries and a shower'),
(11, '2088360476', 'We speak your language!'),
(12, '2003029913', ' Situated in the south of Panglao Island, this property is in close proximity to a number of area attractions. Boasting well-appointed guestrooms, all are tastefully furnished and equipped with standard amenities for guestsâ€™ comfort and convenience such as an air conditioner, cable TV, and a private bathroom with hot and cold shower'),
(13, '2003029913', 'Guests can dine at the on-site restaurant that serves a variety of international as well as Filipino cuisines'),
(14, '2003029913', 'Offering meeting rooms and facilities, guests can organize their private or public events at the hotel'),
(15, '2003029913', 'Offering comfortable accommodation with friendly service, Dumaluan Beach Resort is an ideal place to stay in Bohol');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `ID` bigint(20) NOT NULL,
  `hotel_ID` varchar(250) NOT NULL,
  `room_description` varchar(5000) NOT NULL,
  `roomType_ID` varchar(250) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `pax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`ID`, `hotel_ID`, `room_description`, `roomType_ID`, `rooms`, `pax`) VALUES
(1, '301657767', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:15:\"Standard Aircon\";s:4:\"rate\";s:4:\"1500\";}}', '401657768', '7', '2'),
(4, '2088360476', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:15:\"Standard Room A\";s:4:\"rate\";s:4:\"1200\";}}', '23978911', '12', '2'),
(5, '2088360476', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:15:\"Standard Room B\";s:4:\"rate\";s:4:\"1400\";}}', '33978912', '14', '2'),
(6, '2088360476', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:11:\"Family Room\";s:4:\"rate\";s:4:\"3500\";}}', '1008964568', '10', '5'),
(7, '2088360476', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:18:\"Beedroom Apartment\";s:4:\"rate\";s:4:\"2500\";}}', '1610973082', '10', '3'),
(8, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:13:\"Standard Room\";s:4:\"rate\";s:4:\"2000\";}}', '435602862', '10', '2'),
(9, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:15:\"Superior Deluxe\";s:4:\"rate\";s:4:\"2800\";}}', '1330887127', '10', '2'),
(10, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:6:\"Deluxe\";s:4:\"rate\";s:4:\"3400\";}}', '2141383884', '10', '2'),
(11, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:16:\"Executive Double\";s:4:\"rate\";s:4:\"4300\";}}', '1535534714', '10', '2'),
(12, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:20:\"Executive Beachfront\";s:4:\"rate\";s:4:\"4900\";}}', '1019140220', '10', '2'),
(13, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:16:\"Executive Family\";s:4:\"rate\";s:4:\"5400\";}}', '710988708', '10', '4'),
(14, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:19:\"Junior Presidential\";s:4:\"rate\";s:4:\"6000\";}}', '1619595211', '10', '4'),
(15, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:18:\"Presidential Suite\";s:4:\"rate\";s:4:\"7500\";}}', '1254133157', '10', '4'),
(16, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:14:\"Dumaluan Suite\";s:4:\"rate\";s:4:\"8500\";}}', '1763439943', '10', '5'),
(17, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:14:\"Kamalig Aircon\";s:4:\"rate\";s:4:\"3400\";}}', '1283206053', '10', '2'),
(18, '2003029913', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:14:\"Kamalig Family\";s:4:\"rate\";s:4:\"5400\";}}', '1699232900', '10', '5'),
(19, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:13:\"Standard Room\";s:4:\"rate\";s:4:\"3295\";}}', '489027750', '10', '2'),
(20, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:12:\"Horizon Room\";s:4:\"rate\";s:4:\"3495\";}}', '1141857891', '12', '2'),
(21, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:20:\"Modern Standard Room\";s:4:\"rate\";s:4:\"3595\";}}', '2011301578', '11', '2'),
(22, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:23:\"Modern Deluxe View Room\";s:4:\"rate\";s:4:\"3995\";}}', '781798128', '12', '2'),
(23, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:18:\"Modern Deluxe Room\";s:4:\"rate\";s:4:\"3795\";}}', '1075203784', '12', '2'),
(24, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:11:\"Deluxe Room\";s:4:\"rate\";s:4:\"3795\";}}', '1590478989', '12', '2'),
(25, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:23:\"Executive Sun View Room\";s:4:\"rate\";s:4:\"5595\";}}', '514146574', '12', '2'),
(26, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:18:\"Junior Suite Room \";s:4:\"rate\";s:4:\"5795\";}}', '668972292', '12', '2'),
(27, '1099405573', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:10:\"Suite Room\";s:4:\"rate\";s:4:\"5795\";}}', '1638097520', '12', '2'),
(28, '371559688', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:14:\"Chateau B Type\";s:4:\"rate\";s:4:\"2040\";}}', '390655308', '12', '4'),
(29, '371559688', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:14:\"Chateau A Type\";s:4:\"rate\";s:4:\"2210\";}}', '340368789', '12', '4'),
(30, '371559688', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:17:\"Cella Garden View\";s:4:\"rate\";s:4:\"2380\";}}', '1028071807', '12', '5'),
(32, '371559688', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:12:\"Villa Suites\";s:4:\"rate\";s:4:\"4500\";}}', '1169312408', '12', '2'),
(33, '371559688', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:10:\"Chalet A/B\";s:4:\"rate\";s:4:\"3740\";}}', '884485249', '12', '2'),
(34, '371559688', 'a:1:{s:5:\"hotel\";a:2:{s:9:\"room-type\";s:11:\"Chalet Home\";s:4:\"rate\";s:5:\"10200\";}}', '453001291', '12', '5');

-- --------------------------------------------------------

--
-- Table structure for table `room_amenities`
--

CREATE TABLE `room_amenities` (
  `ID` bigint(20) NOT NULL,
  `roomType_ID` varchar(250) NOT NULL,
  `amenities` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_amenities`
--

INSERT INTO `room_amenities` (`ID`, `roomType_ID`, `amenities`) VALUES
(30, '401657768', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(31, '401657768', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(32, '401657768', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(34, '401657768', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(35, '401657768', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Flat-screen TV\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(36, '23978911', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(37, '23978911', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(38, '23978911', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(40, '23978911', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(41, '33978912', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(42, '33978912', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(43, '33978912', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(44, '33978912', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(46, '33978912', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Room w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(47, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Good for 5 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(48, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:10:\"2 Bedrooms\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(49, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:21:\"Air Conditioned Rooms\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(50, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(51, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(52, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(53, '1008964568', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(56, '1610973082', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:24:\"Good for 2, max of 3 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(57, '1610973082', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(58, '1610973082', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(59, '1610973082', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(60, '1610973082', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(63, '435602862', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:12:\"1 Double Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(65, '435602862', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(66, '435602862', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(67, '435602862', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 4)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(68, '1330887127', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:12:\"1 Double Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(70, '1330887127', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(71, '1330887127', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(72, '1330887127', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(73, '1330887127', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(74, '1330887127', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 4)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(75, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:12:\"1 Double Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(76, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(77, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(78, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(79, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(82, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(83, '2141383884', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 4)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(89, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"1 Queen-Sized Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(90, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(91, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(92, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(93, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(95, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(96, '1535534714', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 4)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(97, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"Beachfront Room\";s:4:\"icon\";s:11:\"icon-star-o\";}}'),
(107, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"1 Queen-Sized Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(108, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(109, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(110, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(111, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(112, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(113, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Good for 4 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(114, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"2 Queen-Sized Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(115, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(116, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(117, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(118, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(119, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(120, '710988708', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 6)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(121, '1019140220', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 4)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(122, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Good for 4 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(123, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"2 Queen-Sized Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(124, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(125, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(126, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(127, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(128, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(129, '1619595211', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 6)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(130, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:7:\"w/ Sala\";s:4:\"icon\";s:12:\"icon-diamond\";}}'),
(131, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Good for 4 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(132, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"2 Queen-Sized Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(133, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(134, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(135, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(136, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:25:\"2 Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(137, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(138, '1254133157', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 6)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(150, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:24:\"Sea View w/ Coffee Table\";s:4:\"icon\";s:11:\"icon-star-o\";}}'),
(152, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:7:\"w/ Sala\";s:4:\"icon\";s:12:\"icon-diamond\";}}'),
(153, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Good for 5 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(154, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"2 Queen-Sized Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(155, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(156, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(157, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(158, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:25:\"1 Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(159, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(160, '1763439943', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 8)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(169, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Room is Native/ Bungalow Type\";s:4:\"icon\";s:11:\"icon-star-o\";}}'),
(170, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:12:\"1 Double Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(171, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(175, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(176, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(178, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:26:\"Half Open Ceiling Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(180, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 3)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(188, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Room is Native/ Bungalow Type\";s:4:\"icon\";s:11:\"icon-star-o\";}}'),
(189, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Good for 5 Pax\";s:4:\"icon\";s:10:\"icon-group\";}}'),
(191, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:12:\"2 Double Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(192, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(193, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(194, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"w/ Refrigerator\";s:4:\"icon\";s:18:\"icon-plus-square-o\";}}'),
(195, '1283206053', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:26:\"Half Open Ceiling Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(196, '1699232900', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:29:\"Buffet Breakfast (good for 7)\";s:4:\"icon\";s:19:\"icon-free_breakfast\";}}'),
(197, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(198, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:30:\"Mini Bar (Granite Top Counter)\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(199, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(200, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(201, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(202, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(203, '489027750', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:32:\"Shared Balcony (Facing the Pool)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(204, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(205, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:21:\"Complimentary Coffee \";s:4:\"icon\";s:11:\"icon-coffee\";}}'),
(207, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:21:\"Full Stocked Mini Bar\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(208, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(209, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(210, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(211, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(212, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:8:\"Mini Bar\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(213, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(214, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(215, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(216, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(217, '2011301578', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:32:\"Shared Balcony (Facing the Pool)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(218, '1141857891', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(219, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(220, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:8:\"Mini Bar\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(221, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(222, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(223, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(224, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(225, '781798128', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:33:\"Private Balcony (Facing the Pool)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(226, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(227, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:30:\"Mini Bar (Granite Top Counter)\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(228, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(229, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(230, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(231, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(232, '1075203784', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:33:\"Private Balcony (Facing the Pool)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(233, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(234, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:30:\"Mini Bar (Granite Top Counter)\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(235, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(236, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(237, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(238, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(239, '1590478989', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:33:\"Private Balcony (Facing the Pool)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(240, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(241, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:8:\"Mini Bar\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(242, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(243, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(244, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(245, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(246, '514146574', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:33:\"Private Balcony (Facing the Pool)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(247, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:12:\"With Jacuzzi\";s:4:\"icon\";s:11:\"icon-star-o\";}}'),
(248, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(249, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:21:\"Complimentary Coffee \";s:4:\"icon\";s:11:\"icon-coffee\";}}'),
(250, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:21:\"Full Stocked Mini Bar\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(251, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(252, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(253, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(254, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(255, '668972292', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:26:\"Private Balcony (Sea View)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(256, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"With In-Room Jacuzzi\";s:4:\"icon\";s:11:\"icon-star-o\";}}'),
(257, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(259, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:8:\"Mini Bar\";s:4:\"icon\";s:14:\"icon-local_bar\";}}'),
(260, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(261, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:9:\"Free WiFi\";s:4:\"icon\";s:10:\"icon-wifi2\";}}'),
(262, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(263, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(264, '1638097520', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:39:\"Private Balcony (Overlooking the Beach)\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(265, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(266, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(267, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:28:\"Complimentary Drinking Water\";s:4:\"icon\";s:10:\"icon-glass\";}}'),
(268, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(269, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(270, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Mini Refrigerator\";s:4:\"icon\";s:9:\"icon-cube\";}}'),
(271, '390655308', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"1 King Size Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(273, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(274, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(275, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:28:\"Complimentary Drinking Water\";s:4:\"icon\";s:10:\"icon-glass\";}}'),
(276, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(277, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(278, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Mini Refrigerator\";s:4:\"icon\";s:9:\"icon-cube\";}}'),
(279, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:15:\"1 King Size Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(280, '340368789', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:11:\"Window View\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(281, '1028071807', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(282, '1028071807', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(283, '1028071807', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(284, '1028071807', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:28:\"Complimentary Drinking Water\";s:4:\"icon\";s:10:\"icon-glass\";}}'),
(285, '1028071807', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:13:\"2 Double Beds\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(286, '1169312408', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:20:\"Air Conditioned Room\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(287, '1169312408', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(288, '1169312408', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(289, '1169312408', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(290, '1169312408', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:28:\"Complimentary Drinking Water\";s:4:\"icon\";s:10:\"icon-glass\";}}'),
(291, '1169312408', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:39:\"Fronting Swimming Pool & Beachside View\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(293, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:10:\"Beachfront\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(294, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:43:\"Studio Type Living Lounge (Air-conditioned)\";s:4:\"icon\";s:16:\"icon-snowflake-o\";}}'),
(295, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"Flat-screen TV w/ Cable\";s:4:\"icon\";s:15:\"icon-television\";}}'),
(296, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:18:\"Attic Type Bedroom\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(297, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"Private Bathroom\";s:4:\"icon\";s:12:\"icon-bathtub\";}}'),
(298, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:17:\"Hot & Cold Shower\";s:4:\"icon\";s:11:\"icon-shower\";}}'),
(299, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:28:\"Complimentary Drinking Water\";s:4:\"icon\";s:10:\"icon-glass\";}}'),
(300, '884485249', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:24:\"w/ use of Microwave Oven\";s:4:\"icon\";s:9:\"icon-fire\";}}'),
(301, '453001291', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:16:\"2 Story Building\";s:4:\"icon\";s:15:\"icon-building-o\";}}'),
(302, '453001291', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:10:\"Beachfront\";s:4:\"icon\";s:9:\"icon-pool\";}}'),
(303, '453001291', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:18:\"Hot & Cold Bathtub\";s:4:\"icon\";s:12:\"icon-hot_tub\";}}'),
(304, '453001291', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:23:\"2 Rooms w/ 1 Double Bed\";s:4:\"icon\";s:8:\"icon-bed\";}}'),
(305, '401657768', 'a:1:{s:5:\"hotel\";a:2:{s:8:\"facility\";s:14:\"Free Breakfast\";s:4:\"icon\";s:12:\"icon-cutlery\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `room_media`
--

CREATE TABLE `room_media` (
  `ID` bigint(20) NOT NULL,
  `hotel_ID` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_media`
--

INSERT INTO `room_media` (`ID`, `hotel_ID`, `media`) VALUES
(24, '301657767', 'images/casi-verde/casi-verde-00.jpg'),
(25, '301657767', 'images/casi-verde/casi-verde-01.jpg'),
(26, '301657767', 'images/casi-verde/casi-verde-02.jpg'),
(27, '301657767', 'images/casi-verde/casi-verde-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `ID` bigint(20) NOT NULL,
  `tour_ID` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `tour_media` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`ID`, `tour_ID`, `slug`, `tour_name`, `info`, `tour_media`, `type`, `notes`) VALUES
(5, '1025973090', 'bohol-countryside-tour', 'Bohol Countryside Tour', 'A day tour in Bohol countryside wherein scenery of wonders can be seen.', 'images/country-side-tour-1.jpg', 'bohol-tours', 'Activity fees at your own expense'),
(6, '750589409', 'panglao-island-tour', 'Panglao Island Tour', 'Explore Panglao Island\'s rich tourist spots that will take you to your great escape with paradise environment.', 'images/panglao-tour-1.jpg', 'bohol-tours', ''),
(7, '610876982', 'panglao-island-hopping', 'Panglao Island Hopping', 'Witness the marine life around Panglao waters, white sand bar and explore the life underneath the sea.', 'images/panglao-island-hopping.jpg', 'bohol-tours', ''),
(8, '2101567821', 'danao-extreme-adventure-tour', 'Danao Extreme Adventure Tour', 'Danao Extreme Adventure Tour will take you to a breath-taking experience.', 'images/danao-adventure-tour.jpg', 'bohol-tours', ''),
(9, '606593078', '2d1n-bohol-tour-package', '2D/1N Bohol Tour Package', 'Enjoy 2 days and 1 night vacation in Bohol with a complete experience of Bohol Country Side Tour. The Package includes hotel accommodation, transportation and entrance fees.', 'images/country-side-tour-1.jpg', 'tours-and-package', 'Child rate 4 to 10 yrs. old is &#8369; 1,160.00 sharing bed with adult. 4 yrs. Old below is free of charge sharing breakfast and bed with adult. Extra night is additional &#8369; 875.00 for twin sharing and &#8369; 775.00 for triple sharing.'),
(12, '96776235', '3d2n-room-car-package', '3D/2N Self-Drive Car Rental Service Package', 'Enjoy your vacation in Bohol with a good service in affordable rate.', 'images/country-side-tour-1.jpg', 'package-only', 'Fuel not included');

-- --------------------------------------------------------

--
-- Table structure for table `tour_inclusions`
--

CREATE TABLE `tour_inclusions` (
  `ID` bigint(20) NOT NULL,
  `tour_ID` varchar(255) NOT NULL,
  `inclusions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_inclusions`
--

INSERT INTO `tour_inclusions` (`ID`, `tour_ID`, `inclusions`) VALUES
(1, '606593078', 'RT Transfer Tagbilaran City Pier/Panglao Airport to Hotel'),
(2, '606593078', '1 night accommodation at a non-beachfront hostel'),
(3, '606593078', 'Breakfast'),
(4, '606593078', 'Bohol Countryside Tour with Buffet Lunch'),
(5, '606593078', 'Tour Guide'),
(6, '606593078', 'Entrance Fees'),
(7, '1025973090', 'Air-conditioned Transportation'),
(8, '1025973090', 'DOT Licensed Tour Guide'),
(9, '1025973090', 'Buffet Lunch nn-board floating restaurant'),
(10, '1025973090', 'Entrance Fees and Permits'),
(11, '750589409', 'Air-conditioned Transportation'),
(12, '750589409', 'DOT Licensed Tour Guide'),
(13, '750589409', 'Entrance Fees And Permit'),
(17, '610876982', 'Motorized Boat'),
(18, '610876982', 'Small Paddle Boat'),
(19, '610876982', 'Snorkel Mask Set '),
(20, '610876982', 'Life Vest'),
(21, '2101567821', 'Air-conditioned Transportation'),
(22, '2101567821', 'Tourist Driver/Guide'),
(23, '2101567821', 'Entrance Fees/Permits'),
(24, '2101567821', 'Lunch'),
(25, '2101567821', 'Snacks & Bottled Water'),
(26, '96776235', '3D/2N Air-conditioned Room'),
(27, '96776235', 'Pick-up/Drop Off Panglao Airport'),
(28, '96776235', 'Daily Breakfast'),
(29, '96776235', '24 Hrs. use of Hyundai Accent/Reina Automatic Transmission Car');

-- --------------------------------------------------------

--
-- Table structure for table `tour_itinerary`
--

CREATE TABLE `tour_itinerary` (
  `ID` bigint(20) NOT NULL,
  `tour_ID` varchar(255) NOT NULL,
  `itineraries` varchar(1000) NOT NULL,
  `itinerary_media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_itinerary`
--

INSERT INTO `tour_itinerary` (`ID`, `tour_ID`, `itineraries`, `itinerary_media`) VALUES
(1, '1025973090', 'Blood Compact Site', 'images/bohol-tours/blood-compact.jpg'),
(2, '1025973090', 'Baclayon Church and Museum', 'images/bohol-tours/baclayon-church.JPG'),
(3, '1025973090', 'Loboc Wildlife  and Nature  Park  ', 'images/bohol-tours/loboc-wildlife.jpg'),
(4, '1025973090', 'Loboc River Cruise with Buffet Lunch', 'images/bohol-tours/loboc-river-cruise.jpg'),
(5, '1025973090', 'Butterfly Conservation Center ', 'images/bohol-tours/butterfly-conservation.jpg'),
(6, '1025973090', 'Man-Made Forest', 'images/bohol-tours/man-made-forest.jpg'),
(7, '1025973090', 'Hanging Bridge', 'images/bohol-tours/hanging-bridge.jpg'),
(8, '1025973090', 'Chocolate Hills', 'images/bohol-tours/chocolate-hills.jpg'),
(9, '1025973090', 'Souvenir Shop', 'images/bohol-tours/souvenir-shop.jpg'),
(10, '750589409', 'Alona Beach', 'images/panglao-island-tour/Alona_Beach_Palmtree.jpg'),
(11, '750589409', 'Panglao Church Visit', 'images/panglao-island-tour/panglao-church.jpg'),
(12, '750589409', 'Nova Shell Museum', 'images/panglao-island-tour/nova-shell.jpg'),
(13, '750589409', 'Hinagdanan Cave', 'images/panglao-island-tour/hinagdanan-cave.jpg'),
(14, '750589409', 'Bohol Bee Farm', 'images/panglao-island-tour/bee-farm.jpg'),
(15, '750589409', 'Dauis Church Visit', 'images/panglao-island-tour/dauis-church.jpg'),
(16, '610876982', 'Dolphin watching in the open sea', 'images/island-hopping/dolphin-watching.jpg'),
(17, '610876982', 'Fish feeding and snorkeling at the  Balicasag fish sanctuary', 'images/island-hopping/fish-sanctuary.jpg'),
(18, '610876982', 'Snorkeling at the Turtle Sanctuary in Balicasag ', 'images/island-hopping/turtle-balicasag.jpg'),
(19, '610876982', 'Swimming at the Virgin Island ', 'images/island-hopping/virgin-island.jpg'),
(20, '2101567821', 'Suislide', 'images/danao/suislide.jpg'),
(21, '2101567821', 'Skyride', 'images/danao/skyride.jpg'),
(22, '2101567821', 'The Plunge (optional - &#8369; 700.00)', 'images/danao/the-plunge.jpg'),
(23, '2101567821', 'Root Climbing w/ 15M Rappeling (optional - &#8369; 400.00)', 'images/danao/root-climbing.jpg'),
(24, '2101567821', 'River Kayak (optional - &#8369; 300.00)', 'images/danao/kayak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_optionals`
--

CREATE TABLE `tour_optionals` (
  `ID` bigint(20) NOT NULL,
  `tour_ID` varchar(255) NOT NULL,
  `optional` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_optionals`
--

INSERT INTO `tour_optionals` (`ID`, `tour_ID`, `optional`) VALUES
(1, '1025973090', 'Loboc Zepline'),
(2, '1025973090', 'ATV Rides');

-- --------------------------------------------------------

--
-- Table structure for table `tour_rates`
--

CREATE TABLE `tour_rates` (
  `ID` bigint(20) NOT NULL,
  `tour_ID` varchar(255) NOT NULL,
  `pax` varchar(255) NOT NULL,
  `rates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_rates`
--

INSERT INTO `tour_rates` (`ID`, `tour_ID`, `pax`, `rates`) VALUES
(7, '606593078', '1 (Single Occupancy)', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"6990\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(8, '606593078', '2', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"4280\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(9, '606593078', '3', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"3450\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(10, '606593078', '4', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"3380\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(11, '606593078', '5', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"3150\";s:15:\"tripple-sharing\";s:4:\"3000\";}}'),
(12, '606593078', '6', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2950\";s:15:\"tripple-sharing\";s:4:\"2850\";}}'),
(14, '606593078', '7-8', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2800\";s:15:\"tripple-sharing\";s:4:\"2750\";}}'),
(15, '606593078', '9-10', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2700\";s:15:\"tripple-sharing\";s:4:\"2600\";}}'),
(16, '606593078', '11-18', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2650\";s:15:\"tripple-sharing\";s:4:\"2550\";}}'),
(17, '606593078', '19-24', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2600\";s:15:\"tripple-sharing\";s:4:\"2500\";}}'),
(19, '1025973090', '1', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"4500\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(20, '1025973090', '2', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2950\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(21, '1025973090', '3', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2300\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(22, '1025973090', '4', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2190\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(23, '1025973090', '5', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1980\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(24, '1025973090', '6-7', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1850\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(25, '1025973090', '8-10', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1690\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(26, '1025973090', '11-20', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1600\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(27, '1025973090', '21-30', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1560\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(28, '1025973090', '31-40', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1500\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(29, '1025973090', '41 and above', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1450\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(30, '750589409', '1', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2450\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(31, '750589409', '2', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1350\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(32, '750589409', '3', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1000\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(33, '750589409', '4-5', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:3:\"750\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(34, '750589409', '6-12', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:3:\"650\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(35, '750589409', '13-15', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:3:\"600\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(36, '610876982', '1', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"3500\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(37, '610876982', '2', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2100\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(38, '610876982', '3', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1660\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(39, '610876982', '4', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1420\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(40, '610876982', '5-6', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1290\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(41, '610876982', '7-8', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1170\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(42, '610876982', '9-12', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1060\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(43, '2101567821', '1', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"5500\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(44, '2101567821', '2', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"3400\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(45, '2101567821', '3', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2700\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(46, '2101567821', '4', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2350\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(47, '2101567821', '5', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2240\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(48, '2101567821', '6', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2070\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(49, '2101567821', '7', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1950\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(50, '2101567821', '8', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1850\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(51, '2101567821', '9', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1850\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(52, '2101567821', '10', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1790\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(53, '2101567821', '11', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1740\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(54, '2101567821', '12', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1690\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(55, '96776235', '2', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"2450\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(56, '96776235', '3-4', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1900\";s:15:\"tripple-sharing\";s:0:\"\";}}'),
(57, '96776235', '5', 'a:1:{s:4:\"rate\";a:2:{s:12:\"twin-sharing\";s:4:\"1750\";s:15:\"tripple-sharing\";s:0:\"\";}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beaches_neighbourhood`
--
ALTER TABLE `beaches_neighbourhood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotel_informations`
--
ALTER TABLE `hotel_informations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room_amenities`
--
ALTER TABLE `room_amenities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room_media`
--
ALTER TABLE `room_media`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tour_inclusions`
--
ALTER TABLE `tour_inclusions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tour_itinerary`
--
ALTER TABLE `tour_itinerary`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tour_optionals`
--
ALTER TABLE `tour_optionals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tour_rates`
--
ALTER TABLE `tour_rates`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beaches_neighbourhood`
--
ALTER TABLE `beaches_neighbourhood`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotel_informations`
--
ALTER TABLE `hotel_informations`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `room_amenities`
--
ALTER TABLE `room_amenities`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `room_media`
--
ALTER TABLE `room_media`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tour_inclusions`
--
ALTER TABLE `tour_inclusions`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tour_itinerary`
--
ALTER TABLE `tour_itinerary`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tour_optionals`
--
ALTER TABLE `tour_optionals`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_rates`
--
ALTER TABLE `tour_rates`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
