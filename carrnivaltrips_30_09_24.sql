-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2024 at 06:27 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrnivaltrips`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_admin`
--

DROP TABLE IF EXISTS `carrnivaltrips_admin`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrnivaltrips_admin`
--

INSERT INTO `carrnivaltrips_admin` (`id`, `name`, `ph_no`, `password`, `status`) VALUES
(1, 'Admin', '12', '123', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_car_rent`
--

DROP TABLE IF EXISTS `carrnivaltrips_car_rent`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_car_rent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `car_type` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `sightseeing_point` varchar(100) NOT NULL,
  `drop_location_wise` varchar(100) NOT NULL,
  `drop_sightseeing_point` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pick_season_price` varchar(100) NOT NULL,
  `off_season_price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_car_rent`
--

INSERT INTO `carrnivaltrips_car_rent` (`id`, `car_type`, `destination`, `location_wise`, `sightseeing_point`, `drop_location_wise`, `drop_sightseeing_point`, `price`, `pick_season_price`, `off_season_price`) VALUES
(1, 'Mahindra Scorpio', 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', '500', '600', '400'),
(2, 'Hyundai Creta', 'MeghaLaya', 'Guwahati', 'VISIT KALAKSHETRA', 'Guwahati', 'VISIT KALAKSHETRA', '400', '500', '300'),
(3, 'Tata Sumo', 'MeghaLaya', 'Guwahati', 'VISIT KALAKSHETRA', 'Guwahati', 'VISIT KALAKSHETRA', '300', '400', '200'),
(4, 'Tata Sumo', 'MeghaLaya', 'Guwahati', 'VISIT UMANANDA TEMPLE', 'Guwahati', 'VISIT UMANANDA TEMPLE', '700', '900', '500'),
(5, 'Mahindra Scorpio', 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'Guwahati', 'VISIT KAMAKHYA MANDIR', '600', '800', '400'),
(6, 'Sedan', 'MeghaLaya', 'Guwahati', 'VISIT KALAKSHETRA', 'Guwahati', 'VISIT GUWAHATI PLATENTERIUM', '200', '300', '100');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_car_type`
--

DROP TABLE IF EXISTS `carrnivaltrips_car_type`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_car_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `car_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_car_type`
--

INSERT INTO `carrnivaltrips_car_type` (`id`, `car_type`) VALUES
(1, 'Mahindra Scorpio'),
(2, 'Tata Sumo'),
(3, 'Hyundai Creta'),
(4, 'Toyota Innova'),
(5, 'Maruti Suzuki Ertiga'),
(6, 'Mahindra XUV500'),
(7, 'abc'),
(8, 'Sedan');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_customer`
--

DROP TABLE IF EXISTS `carrnivaltrips_customer`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ZipCode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `District` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Document_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Document_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Destination` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travel_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrnivaltrips_customer`
--

INSERT INTO `carrnivaltrips_customer` (`id`, `FirstName`, `LastName`, `Email`, `Phone`, `DateOfBirth`, `Address`, `ZipCode`, `Country`, `State`, `District`, `Document_number`, `Document_img`, `Customer_img`, `Destination`, `travel_status`) VALUES
(1, 'Priya ', 'Das', 'ppp@gmail.com', '7003119578', '2024-07-19', '   kolkata   ', '700001', 'India', 'West Bengal', 'Kolkata', '123', '995567823.jpg', '1959288204.jpg', 'Darjeeling', 'in_progress'),
(2, 'Samrat', 'Das', 'ffaf@gmail.com', '8777483614', '2024-07-10', 'gcgj', '799998', 'india ', 'gh', 'ghgj', 'vhkv', '1198862908.jpeg', '901495757.jpeg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_destination_wise_hotel_season`
--

DROP TABLE IF EXISTS `carrnivaltrips_destination_wise_hotel_season`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_destination_wise_hotel_season` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `season_start_date` date NOT NULL,
  `season_end_date` date NOT NULL,
  `pick_season_start_date` date NOT NULL,
  `pick_season_end_date` date NOT NULL,
  `off_season_start_date` date NOT NULL,
  `off_season_end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_destination_wise_hotel_season`
--

INSERT INTO `carrnivaltrips_destination_wise_hotel_season` (`id`, `destination`, `season_start_date`, `season_end_date`, `pick_season_start_date`, `pick_season_end_date`, `off_season_start_date`, `off_season_end_date`) VALUES
(1, 'MeghaLaya', '2024-09-19', '2024-09-19', '2024-12-01', '2025-01-31', '2025-02-01', '2025-08-30'),
(2, 'Andaman', '2024-08-01', '2024-11-30', '2024-12-01', '2025-03-31', '2025-04-01', '2025-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_details`
--

DROP TABLE IF EXISTS `carrnivaltrips_details`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `exp_media_link` varchar(200) NOT NULL,
  `exp_details` varchar(200) NOT NULL,
  `exp_p1_heading` varchar(200) NOT NULL,
  `exp_p1_details` varchar(200) NOT NULL,
  `exp_p2_heading` varchar(200) NOT NULL,
  `exp_p2_details` varchar(200) NOT NULL,
  `exp_p3_heading` varchar(200) NOT NULL,
  `exp_p3_details` varchar(200) NOT NULL,
  `exp_p4_heading` varchar(200) NOT NULL,
  `exp_p4_details` varchar(200) NOT NULL,
  `exp_p5_heading` varchar(200) NOT NULL,
  `exp_p5_details` varchar(200) NOT NULL,
  `exp_p6_heading` varchar(200) NOT NULL,
  `exp_p6_details` varchar(200) NOT NULL,
  `payment_policy1` varchar(100) NOT NULL,
  `payment_policy2` varchar(100) NOT NULL,
  `payment_policy3` varchar(100) NOT NULL,
  `payment_policy4` varchar(100) NOT NULL,
  `payment_policy5` varchar(100) NOT NULL,
  `payment_policy6` varchar(100) NOT NULL,
  `payment_policy1_description` text NOT NULL,
  `payment_policy2_description` text NOT NULL,
  `payment_policy3_description` text NOT NULL,
  `payment_policy4_description` text NOT NULL,
  `payment_policy5_description` text NOT NULL,
  `payment_policy6_description` text NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `contact_text` varchar(150) NOT NULL,
  `contact_media_link` varchar(150) NOT NULL,
  `contact_ph` varchar(150) NOT NULL,
  `achievement_heading` varchar(100) NOT NULL,
  `achievement_description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `achievement_btn` varchar(100) NOT NULL,
  `achievement_title1` varchar(100) NOT NULL,
  `achievement_count1` varchar(100) NOT NULL,
  `achievement_title2` varchar(100) NOT NULL,
  `achievement_count2` varchar(100) NOT NULL,
  `achievement_title3` varchar(100) NOT NULL,
  `achievement_count3` varchar(100) NOT NULL,
  `achievement_title4` varchar(100) NOT NULL,
  `achievement_count4` varchar(100) NOT NULL,
  `why_carrnival_heading` varchar(200) NOT NULL,
  `why_carrnival_title1` varchar(200) NOT NULL,
  `why_carrnival_title2` varchar(200) NOT NULL,
  `why_carrnival_title3` varchar(200) NOT NULL,
  `why_carrnival_title4` varchar(200) NOT NULL,
  `why_carrnival_title5` varchar(200) NOT NULL,
  `why_carrnival_title6` varchar(200) NOT NULL,
  `why_carrnival_description1` varchar(200) NOT NULL,
  `why_carrnival_description2` varchar(200) NOT NULL,
  `why_carrnival_description3` varchar(200) NOT NULL,
  `why_carrnival_description4` varchar(200) NOT NULL,
  `why_carrnival_description5` varchar(200) NOT NULL,
  `why_carrnival_description6` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_details`
--

INSERT INTO `carrnivaltrips_details` (`id`, `exp_media_link`, `exp_details`, `exp_p1_heading`, `exp_p1_details`, `exp_p2_heading`, `exp_p2_details`, `exp_p3_heading`, `exp_p3_details`, `exp_p4_heading`, `exp_p4_details`, `exp_p5_heading`, `exp_p5_details`, `exp_p6_heading`, `exp_p6_details`, `payment_policy1`, `payment_policy2`, `payment_policy3`, `payment_policy4`, `payment_policy5`, `payment_policy6`, `payment_policy1_description`, `payment_policy2_description`, `payment_policy3_description`, `payment_policy4_description`, `payment_policy5_description`, `payment_policy6_description`, `contact_person`, `contact_text`, `contact_media_link`, `contact_ph`, `achievement_heading`, `achievement_description`, `achievement_btn`, `achievement_title1`, `achievement_count1`, `achievement_title2`, `achievement_count2`, `achievement_title3`, `achievement_count3`, `achievement_title4`, `achievement_count4`, `why_carrnival_heading`, `why_carrnival_title1`, `why_carrnival_title2`, `why_carrnival_title3`, `why_carrnival_title4`, `why_carrnival_title5`, `why_carrnival_title6`, `why_carrnival_description1`, `why_carrnival_description2`, `why_carrnival_description3`, `why_carrnival_description4`, `why_carrnival_description5`, `why_carrnival_description6`) VALUES
(1, 'https://youtu.be/HuLWZHfIzJE?si=dFIU3-YLAMhLgd5w', 'Welcome to our Print 128 website! We are a professional and reliable printing company that offers a wide range of printin                                                                               ', 'Curated Itinerary', 'Welcome to our Print 128 web company that offers a wide ', 'Quick Response', 'Welcome to our Print 128 web company that offers a wide ', ' In-house on ground team', 'Welcome to our Print 128 web company that offers a wide ', 'Quality Assurance', 'Welcome to our Print 128 web company that offers a wide ', ' Pre-Purchased Hotel Inventory', 'Welcome to our Print 128 web company that offers a wide ', 'Dedicated Support Team', 'Welcome to our Print 128 web company that offers a wide ', 'Flexible Payment Policy', 'Flexible Cancellation Charges', 'Minimum Booking Amount', 'Rescheduling in case of Emergencies', 'Easy EMI/Finance Option at 0% for 06 M', '', '', '', '', '', '', '', 'Richa', 'NEED MORE CUSTOMIZATION CONNECT WITH OUR DESTINATION EXPERT', 'https://youtu.be/6uKDgTSVfHE?si=i-b76zCeHPxRHXEs', '9213879313', 'Ready to adventure and enjoy natural', 'Lorem ipsum dolor sit amet, consectetur notted adi', 'Connect Us', 'Happy Traveller', '5489', 'Postive Reviews', '100', 'Tour Completed', '190', 'Awards Winning', '5489', 'WHY CARRNIVAL TRIPS', 'Bullet points and video', 'Best planned customised itinerary', 'Best in class hotel selection in that segment', 'Guided Trip', 'No Hidden costs', 'No false promises', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_employee`
--

DROP TABLE IF EXISTS `carrnivaltrips_employee`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `online_permission` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_employee`
--

INSERT INTO `carrnivaltrips_employee` (`id`, `name`, `phone`, `email`, `designation`, `password`, `img1`, `online_permission`, `status`) VALUES
(2, 'Test', '9876543211', 'test@gmail.com', 'Telecaller', '123', '507387607.png', '', 'Active'),
(3, 'Test1', '9876543210', 'test1@gmail.com', 'Manager', '123', '1026121080.jpg', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_ferry_rent`
--

DROP TABLE IF EXISTS `carrnivaltrips_ferry_rent`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_ferry_rent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ferry_type` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `sightseeing_point` varchar(100) NOT NULL,
  `drop_location_wise` varchar(100) NOT NULL,
  `drop_sightseeing_point` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pick_season_price` varchar(100) NOT NULL,
  `off_season_price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_ferry_rent`
--

INSERT INTO `carrnivaltrips_ferry_rent` (`id`, `ferry_type`, `destination`, `location_wise`, `sightseeing_point`, `drop_location_wise`, `drop_sightseeing_point`, `price`, `pick_season_price`, `off_season_price`) VALUES
(1, 'Makruzz', 'Andaman', 'Port Blair', 'ELEPHANT FALLS', 'Port Blair', 'ELEPHANT FALLS', '600', '', ''),
(2, 'Green Ocean', 'MeghaLaya', 'Cherrapunjee', 'ELEPHANT FALLS', 'Cherrapunjee', 'ELEPHANT FALLS', '700', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_ferry_type`
--

DROP TABLE IF EXISTS `carrnivaltrips_ferry_type`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_ferry_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ferry_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_ferry_type`
--

INSERT INTO `carrnivaltrips_ferry_type` (`id`, `ferry_type`) VALUES
(1, 'Makruzz'),
(2, 'Green Ocean'),
(3, 'Sea Link'),
(4, 'ITT Majestic'),
(5, 'Government Ferries');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_hotel`
--

DROP TABLE IF EXISTS `carrnivaltrips_hotel`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `category_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `no_of_room` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `season_start_date` date NOT NULL,
  `season_end_date` date NOT NULL,
  `pick_season_start_date` date NOT NULL,
  `pick_season_end_date` date NOT NULL,
  `off_season_start_date` date NOT NULL,
  `off_season_end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_hotel`
--

INSERT INTO `carrnivaltrips_hotel` (`id`, `destination`, `location_wise`, `category_wise`, `name`, `no_of_room`, `img1`, `img2`, `img3`, `status`, `season_start_date`, `season_end_date`, `pick_season_start_date`, `pick_season_end_date`, `off_season_start_date`, `off_season_end_date`) VALUES
(1, 'Andaman', 'Diglipur', 'Super Dulax', 'Hotel Sea view', '8', '1459505106.jpeg', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 'Andaman', 'Portbair', 'Super Dulax', 'ABC pvt ltd', '5', '951659018.jpeg', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 'Andaman', 'Diglipur', 'Dulax', 'Hotel Bird', '10', '2112411342.jpeg', '1288366974.jpg', '520216665.jpeg', '', '2024-09-21', '2025-03-18', '2024-11-28', '2025-01-16', '2025-01-17', '2025-07-24'),
(4, 'Andaman', 'Nicobar Islands', 'Luxury', 'Hotel Mountain', '12', '1430586943.jpeg', '647748270.webp', '1698160364.webp', '', '2024-09-26', '2024-09-12', '2024-09-21', '2024-11-15', '2024-12-28', '2024-12-26'),
(5, 'Andaman', 'Nicobar Islands', 'Luxury', 'Hotel Nature', '6', '347945337.jpg', '1386966097.jpg', '2101420899.webp', '', '2024-09-26', '2024-09-26', '2024-09-21', '2024-11-15', '2024-12-28', '2025-02-15'),
(6, 'MeghaLaya', 'Guwahati', 'Dulax', 'Vishwaratna Hotel', '8', '830978407.jpeg', '1325434945.jpeg', '1730204531.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 'MeghaLaya', 'Guwahati', 'Luxury', 'Novotel Guwahati GS Road', '20', '318209407.jpeg', '447560899.jpeg', '1825401516.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, 'MeghaLaya', 'Guwahati', 'Luxury', 'Vivanta Guwahati', '25', '637083715.jpeg', '1324230164.jpeg', '1791931640.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, 'MeghaLaya', 'Cherrapunjee', 'Premium', 'Hotel Bluemoon', '28', '1356964810.jpeg', '1437161726.jpeg', '622312183.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, 'MeghaLaya', 'Pobitora', 'Premium', 'Hotel Orchid', '12', '1803395610.jpeg', '1144037721.jpeg', '1570806891.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, 'MeghaLaya', 'Manas', 'Super Deluxe', 'OYO Victoria Villa', '10', '322953541.jpeg', '1770137395.jpeg', '1520000921.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, 'MeghaLaya', 'Mawlynnong', 'Luxury', 'Hotel Om Shree', '16', '118906443.jpeg', '2138230510.jpeg', '1910422972.jpeg', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_hotel_category`
--

DROP TABLE IF EXISTS `carrnivaltrips_hotel_category`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_hotel_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `category_wise` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_hotel_category`
--

INSERT INTO `carrnivaltrips_hotel_category` (`id`, `destination`, `location_wise`, `category_wise`) VALUES
(1, 'Andaman', 'Portbair', 'Super Dulax'),
(2, 'Andaman', 'Nicobar Islands', 'Luxury'),
(3, 'Andaman', 'Diglipur', 'Dulax'),
(8, 'MeghaLaya', 'Manas', 'Super Deluxe'),
(7, 'MeghaLaya', 'Guwahati', 'Dulax'),
(9, 'MeghaLaya', 'Manas', 'Premium'),
(10, 'MeghaLaya', 'Manas', 'Luxury'),
(11, 'MeghaLaya', 'Guwahati', 'Premium'),
(12, 'MeghaLaya', 'Guwahati', 'Luxury'),
(13, 'MeghaLaya', 'Pobitora', 'Standard'),
(14, 'MeghaLaya', 'Pobitora', 'Premium'),
(15, 'MeghaLaya', 'Mawlynnong', 'Luxury'),
(16, 'MeghaLaya', 'Mawlynnong', 'Super Deluxe'),
(17, 'MeghaLaya', 'Cherrapunjee', 'Standard'),
(18, 'MeghaLaya', 'Cherrapunjee', 'Premium'),
(19, 'MeghaLaya', 'Cherrapunjee', 'Luxury'),
(20, 'MeghaLaya', 'Guwahati', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_hotel_rooms`
--

DROP TABLE IF EXISTS `carrnivaltrips_hotel_rooms`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_hotel_rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `hotel_id` int NOT NULL,
  `hotel_category_wise` varchar(100) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `bed` varchar(100) NOT NULL,
  `ac_type` varchar(100) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pick_season_price` varchar(100) NOT NULL,
  `off_season_price` varchar(100) NOT NULL,
  `booked` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_hotel_rooms`
--

INSERT INTO `carrnivaltrips_hotel_rooms` (`id`, `destination`, `location_wise`, `hotel_id`, `hotel_category_wise`, `hotel_name`, `name`, `capacity`, `bed`, `ac_type`, `amenities`, `price`, `pick_season_price`, `off_season_price`, `booked`, `status`) VALUES
(13, 'Andaman', 'Portbair', 2, 'Super Dulax', 'ABC pvt ltd', '102', '5', '2pax+1', 'AC', '', '2500', '', '', '', 'Available'),
(12, 'Andaman', 'Portbair', 2, 'Super Dulax', 'ABC pvt ltd', '101', '2', '1pax', 'AC', '', '1500', '', '', '', 'Available'),
(11, 'Andaman', 'Portbair', 2, 'Super Dulax', 'ABC pvt ltd', '103', '4', '2pax', 'Non-AC', '', '2000', '', '', '', 'Available'),
(21, 'MeghaLaya', 'Mawlynnong', 12, 'Luxury', 'Hotel Om Shree', '101', '5', '2+1', 'AC', 'Coffee Kit', '2200', '2600', '2000', '', 'Available'),
(20, 'MeghaLaya', 'Mawlynnong', 12, 'Luxury', 'Hotel Om Shree', '102', '2', '1', 'AC', 'Coffee Kit', '1200', '1600', '1000', '', 'Available'),
(23, 'MeghaLaya', 'Manas', 11, 'Super Deluxe', 'OYO Victoria Villa', '101', '3', '1+1', 'AC', 'Coffee Kit', '1500', '2000', '1200', '', 'Available'),
(24, 'MeghaLaya', 'Manas', 11, 'Super Deluxe', 'OYO Victoria Villa', '201', '2', '1', 'AC', 'Coffee Kit', '1200', '15000', '1000', '', 'Available'),
(25, 'MeghaLaya', 'Guwahati', 8, 'Luxury', 'Vivanta Guwahati', '301', '5', '2pax+1', 'AC', 'Coffee Kit', '2000', '2500', '1600', '', 'Available'),
(32, 'MeghaLaya', 'Guwahati', 7, 'Luxury', 'Novotel Guwahati GS Road', 'Delux', '2', '1pax', 'AC', 'Coffee Kit', '1200', '1500', '1000', '', 'Booked'),
(31, 'MeghaLaya', 'Guwahati', 7, 'Luxury', 'Novotel Guwahati GS Road', 'Classic', '3', '1pax+1', 'AC', 'Coffee Kit', '2000', '2400', '1200', '', 'Available'),
(30, 'MeghaLaya', 'Guwahati', 7, 'Luxury', 'Novotel Guwahati GS Road', '101', '5', '2pax+1', 'Non-AC', 'Coffee Kit', '2000', '2500', '1500', '', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead` (
  `id` int NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  `whatsapp_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `no_of_day` varchar(100) NOT NULL,
  `no_of_night` varchar(100) NOT NULL,
  `lead_date` date NOT NULL,
  `travel_date` date NOT NULL,
  `note` text NOT NULL,
  `online_status` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_lead`
--

INSERT INTO `carrnivaltrips_lead` (`id`, `unique_id`, `name`, `ph_no`, `whatsapp_no`, `email`, `destination`, `no_of_day`, `no_of_night`, `lead_date`, `travel_date`, `note`, `online_status`, `status`) VALUES
(1, 'a813a3d6', 'Samrat', '9876543210', '9876543220', 'samrat@gmail.com', 'MeghaLaya', '3', '4', '2024-09-20', '2024-10-30', 'interested', '2024-09-29 19:32:25', 'Confirmed'),
(2, 'a81312d6', 'Sham', '9487563210', '985643210', 'sham@gmail.com', 'MeghaLaya', '4', '5', '2024-09-12', '2024-10-25', '', '2024-09-25 06:19:10', 'Follow Up'),
(3, 'a813a312', 'Karthik', '8521378920', '8569745623', 'test@gmail.com', 'Sikkim', '5', '6', '2024-09-23', '2024-10-24', '', '2024-09-27 08:22:52', 'Pipeline'),
(4, '7e0c70a7', 'Bishal', '623214569870', '62359874562', 'bisal@gmail.com', 'MeghaLaya', '5', '4', '2024-09-15', '2024-11-14', '', '', 'Lost'),
(5, '251e1f51', 'Rajesh', '6290083023', '6290083023', 'rajesh@gmail.com', 'MeghaLaya', '5', '6', '2024-09-23', '2024-10-15', 'add some activity', '2024-09-28 08:23:50', 'Confirmed'),
(6, '75b00923', 'Subash', '9143014999', '9143014999', 'subash@gmail.com', 'MeghaLaya', '5', '4', '2024-09-25', '2024-11-30', 'Budget Frendly', '2024-09-29 18:12:13', 'Warm'),
(7, 'dc953756', 'Sandip', '9876543210', '9876543210', 'sandip@gmail.com', 'Andaman', '5', '4', '2024-09-18', '2025-01-28', 'Planing in January', '2024-09-27 18:24:39', 'Cold'),
(8, '5740faf8', 'Avijit', '9274563101', '9274563101', 'avijit@gmail.com', 'MeghaLaya', '5', '4', '2024-09-20', '2024-10-16', '', '2024-09-29 21:16:17', 'Follow Up');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_car_rent`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_car_rent`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_car_rent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` int NOT NULL,
  `car_id` int NOT NULL,
  `car_type` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `sightseeing_point` varchar(100) NOT NULL,
  `drop_location_wise` varchar(100) NOT NULL,
  `drop_sightseeing_point` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pick_season_price` varchar(100) NOT NULL,
  `off_season_price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_destination_activities`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_destination_activities`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_destination_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` int NOT NULL,
  `activity_id` int NOT NULL,
  `package_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_destination_adventure_activities`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_destination_adventure_activities`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_destination_adventure_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` int NOT NULL,
  `activity_id` int NOT NULL,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_destination_best_scenic_places`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_destination_best_scenic_places`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_destination_best_scenic_places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` int NOT NULL,
  `activity_id` int NOT NULL,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_destination_special_experiences`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_destination_special_experiences`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_destination_special_experiences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` int NOT NULL,
  `activity_id` int NOT NULL,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_ferry_rent`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_ferry_rent`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_ferry_rent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `ferry_id` int NOT NULL,
  `day_no` int NOT NULL,
  `ferry_type` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `sightseeing_point` varchar(100) NOT NULL,
  `drop_location_wise` varchar(100) NOT NULL,
  `drop_sightseeing_point` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pick_season_price` varchar(100) NOT NULL,
  `off_season_price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_itinerary`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_itinerary`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_itinerary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` varchar(100) NOT NULL,
  `sightseeing_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_lead_itinerary`
--

INSERT INTO `carrnivaltrips_lead_itinerary` (`id`, `lead_id`, `day_no`, `sightseeing_id`, `destination`, `location_wise`, `name`, `description`, `status`) VALUES
(6, 1, '3', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(7, 1, '2', 107, 'MeghaLaya', 'Shillong', 'DAVID SCOTT TRAIL', 'It is a historic trekking route named after British administrator David Scott, who built  it in the ', 'Active'),
(8, 1, '3', 111, 'MeghaLaya', 'Shillong', 'SPLIT ROCK', 'Split Rock is a notable attraction featuring a giant rock split into two distinct halves, is  attrib', 'Active'),
(17, 1, '3', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(18, 1, '2', 31, 'MeghaLaya', 'Guwahati', 'VISIT DIPOR BIL', ' Dipor Bil is a significant wetland ecosystem recognized for its biodiversity, sustaining a wide  ra', 'Active'),
(19, 1, '3', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(20, 1, '2', 103, 'MeghaLaya', 'Shillong', 'UMIAM LAKE', 'Umiam Lake, hidden in the hills of Meghalaya, is a gorgeous reservoir known for its  tranquil waters', 'Active'),
(21, 1, '1', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(22, 1, '2', 103, 'MeghaLaya', 'Shillong', 'UMIAM LAKE', 'Umiam Lake, hidden in the hills of Meghalaya, is a gorgeous reservoir known for its  tranquil waters', 'Active'),
(23, 1, '2', 100, 'MeghaLaya', 'Shillong', 'LADY HYDARI PARK', 'It is a japanese-styled garden, having well-manicured lawns and a small zoo, perfect  for a relaxing', 'Active'),
(24, 1, '2', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(25, 1, '2', 103, 'MeghaLaya', 'Shillong', 'UMIAM LAKE', 'Umiam Lake, hidden in the hills of Meghalaya, is a gorgeous reservoir known for its  tranquil waters', 'Active'),
(26, 1, '2', 100, 'MeghaLaya', 'Shillong', 'LADY HYDARI PARK', 'It is a japanese-styled garden, having well-manicured lawns and a small zoo, perfect  for a relaxing', 'Active'),
(27, 1, '3', 54, 'MeghaLaya', 'Manas', 'VISIT MANAS NATIONAL PARK 2', 'This UNESCO World Heritage site offers breakthtaking landscapes, diverse  wildlife including tigers ', 'Active'),
(28, 1, '1', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(29, 1, '1', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(30, 1, '1', 29, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI PLATENTERIUM', 'The Guwahati Planetarium provides educational and immersive experiences  about astronomy and space e', 'Active'),
(32, 1, '2', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(34, 1, '2', 199, 'MeghaLaya', 'Cherrapunjee', 'MAWSAWA FALLS', ' One of the Meghalaya hidden gems, the Mawsawa waterfalls is located at a short  trekkable distance ', 'Active'),
(35, 1, '2', 195, 'MeghaLaya', 'Cherrapunjee', 'SEVEN SISTER WATERFALL', 'Seven sister waterfalls signified its name as a group of seven beautiful  waterfalls flowing down th', 'Active'),
(37, 1, '', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(38, 1, '', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(39, 1, '', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(40, 1, '', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(41, 1, '1', 32, 'MeghaLaya', 'Guwahati', 'VISIT KALAKSHETRA', ' It is a cultural hub celebrating Assamese traditions through dance, music and theatre, with  a fasc', 'Active'),
(44, 4, '1', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(45, 4, '1', 26, 'MeghaLaya', 'Guwahati', 'VISIT UMANANDA TEMPLE', 'This Hindu shrine has been devoted to Lord Shiva and located in Peacock Island on  Brahmaputra river', 'Active'),
(46, 4, '1', 27, 'MeghaLaya', 'Guwahati', 'VISIT ASSAM STATE ZOO CUM BOTANICAL GARDEN', ' Assam State Zoo showcases diverse wildlife alongside a  rich botanical collection.', 'Active'),
(47, 4, '1', 32, 'MeghaLaya', 'Guwahati', 'VISIT KALAKSHETRA', ' It is a cultural hub celebrating Assamese traditions through dance, music and theatre, with  a fasc', 'Active'),
(48, 4, '2', 53, 'MeghaLaya', 'Manas', 'MANAS NATIONAL PARK', 'Manas National Park, a UNESCO World Heritage site in Assam- its rich diversity,  ranging from Bengal', 'Active'),
(49, 4, '2', 106, 'MeghaLaya', 'Shillong', 'LAITLUM CANYON', 'It is located about 45km from the city of Shillong and offers spectacular panoramic  views of the su', 'Active'),
(50, 4, '2', 104, 'MeghaLaya', 'Shillong', 'MALKI FOREST', 'This dense forest in the Malki region of Shillong is a peaceful green spot perfect for  trekking, na', 'Active'),
(51, 4, '2', 109, 'MeghaLaya', 'Shillong', 'MAWJYMBUIN CAVE', 'Mawgymbuin cave is a natural cave that is 209 meters high and formed of  calcareous sandstones. The ', 'Active'),
(52, 4, '3', 129, 'MeghaLaya', 'Mawlynnong', 'SINGLE DECKER LIVING ROOT BRIDGE', 'The single-decker living root bridge in Mawlynnong is a sustainable  structure created from intercon', 'Active'),
(53, 4, '3', 128, 'MeghaLaya', 'Mawlynnong', 'BALANCING ROCK', 'The balancing rock in Mawlynnong is a large boulder naturally balanced on a smaller  rock, creating ', 'Active'),
(54, 4, '4', 198, 'MeghaLaya', 'Cherrapunjee', 'LYNGKSIAR FALLS', 'Lyngksiar Waterfall stands as a testament to natures breathtaking magnificence. This  beautiful casc', 'Active'),
(55, 4, '4', 193, 'MeghaLaya', 'Cherrapunjee', 'ELEPHANT FALLS', 'It is renowned for its three-tiered waterfalls near Shillong, known for its natural beauty  and lush', 'Active'),
(56, 4, '3', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(57, 4, '3', 29, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI PLATENTERIUM', 'The Guwahati Planetarium provides educational and immersive experiences  about astronomy and space e', 'Active'),
(58, 4, '3', 27, 'MeghaLaya', 'Guwahati', 'VISIT ASSAM STATE ZOO CUM BOTANICAL GARDEN', ' Assam State Zoo showcases diverse wildlife alongside a  rich botanical collection.', 'Active'),
(59, 2, '', 0, '', '', '', '', 'Active'),
(61, 2, '1', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(62, 2, '1', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(63, 2, '1', 29, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI PLATENTERIUM', 'The Guwahati Planetarium provides educational and immersive experiences  about astronomy and space e', 'Active'),
(64, 2, '2', 53, 'MeghaLaya', 'Manas', 'MANAS NATIONAL PARK', 'Manas National Park, a UNESCO World Heritage site in Assam- its rich diversity,  ranging from Bengal', 'Active'),
(65, 2, '2', 55, 'MeghaLaya', 'Pobitora', ' POBITORA NATIONAL PARK', 'Pobitora National Park is one of the richest habitats for Indian one-horned  rhinoceroses. It offers', 'Active'),
(66, 2, '1', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(67, 2, '1', 106, 'MeghaLaya', 'Shillong', 'LAITLUM CANYON', 'It is located about 45km from the city of Shillong and offers spectacular panoramic  views of the su', 'Active'),
(68, 2, '1', 104, 'MeghaLaya', 'Shillong', 'MALKI FOREST', 'This dense forest in the Malki region of Shillong is a peaceful green spot perfect for  trekking, na', 'Active'),
(69, 2, '1', 103, 'MeghaLaya', 'Shillong', 'UMIAM LAKE', 'Umiam Lake, hidden in the hills of Meghalaya, is a gorgeous reservoir known for its  tranquil waters', 'Active'),
(70, 2, '1', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(71, 2, '1', 106, 'MeghaLaya', 'Shillong', 'LAITLUM CANYON', 'It is located about 45km from the city of Shillong and offers spectacular panoramic  views of the su', 'Active'),
(72, 2, '1', 104, 'MeghaLaya', 'Shillong', 'MALKI FOREST', 'This dense forest in the Malki region of Shillong is a peaceful green spot perfect for  trekking, na', 'Active'),
(73, 2, '2', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(74, 2, '2', 106, 'MeghaLaya', 'Shillong', 'LAITLUM CANYON', 'It is located about 45km from the city of Shillong and offers spectacular panoramic  views of the su', 'Active'),
(75, 2, '2', 104, 'MeghaLaya', 'Shillong', 'MALKI FOREST', 'This dense forest in the Malki region of Shillong is a peaceful green spot perfect for  trekking, na', 'Active'),
(76, 2, '3', 129, 'MeghaLaya', 'Mawlynnong', 'SINGLE DECKER LIVING ROOT BRIDGE', 'The single-decker living root bridge in Mawlynnong is a sustainable  structure created from intercon', 'Active'),
(77, 2, '3', 128, 'MeghaLaya', 'Mawlynnong', 'BALANCING ROCK', 'The balancing rock in Mawlynnong is a large boulder naturally balanced on a smaller  rock, creating ', 'Active'),
(78, 2, '3', 130, 'MeghaLaya', 'Mawlynnong', 'BANGLADESH VIEW POINT', 'The Bangladesh Viewpoint in Meghalaya provides a beautiful panoramic view  of Bangladeshs plains, of', 'Active'),
(79, 2, '4', 199, 'MeghaLaya', 'Cherrapunjee', 'MAWSAWA FALLS', ' One of the Meghalaya hidden gems, the Mawsawa waterfalls is located at a short  trekkable distance ', 'Active'),
(80, 2, '4', 195, 'MeghaLaya', 'Cherrapunjee', 'SEVEN SISTER WATERFALL', 'Seven sister waterfalls signified its name as a group of seven beautiful  waterfalls flowing down th', 'Active'),
(81, 2, '4', 196, 'MeghaLaya', 'Cherrapunjee', 'MAWSMAI CAVES', 'It is famous for its unique limestone formations and lit passageways, this cave offers a  wonderful ', 'Active'),
(82, 2, '4', 197, 'MeghaLaya', 'Cherrapunjee', 'MAWKDOK DYMPEP VALLEY VIEWPOINT', 'It is a beautiful viewpoint in Cherrapunjee that offers  panaromic views of the lush Mawkdok Dympep ', 'Active'),
(83, 2, '4', 198, 'MeghaLaya', 'Cherrapunjee', 'LYNGKSIAR FALLS', 'Lyngksiar Waterfall stands as a testament to natures breathtaking magnificence. This  beautiful casc', 'Active'),
(84, 2, '4', 194, 'MeghaLaya', 'Cherrapunjee', 'WEI SAWDONG WATERFALL', 'This three tiered waterfall is one of the most beautiful waterfalls in  Meghalaya, known for its lus', 'Active'),
(85, 2, '4', 193, 'MeghaLaya', 'Cherrapunjee', 'ELEPHANT FALLS', 'It is renowned for its three-tiered waterfalls near Shillong, known for its natural beauty  and lush', 'Active'),
(86, 2, '3', 144, 'MeghaLaya', 'Jowai', 'PHE PHE WATERFALLS', 'Phe Phe waterfall is also known as Paradise waterfall. It gently streams over rocks  into a quiet po', 'Active'),
(87, 2, '3', 145, 'MeghaLaya', 'Jowai', 'TYRSHI WATERFALLS', 'Alongside of the Jowai-Shillong road, this beautiful falls descend in steps with the  water gushing ', 'Active'),
(88, 2, '3', 148, 'MeghaLaya', 'Jowai', 'BOPHIL FALLS', ' Bophill Falls is one of the most beautiful waterfalls in the Jaintia Hills district. It provides a ', 'Active'),
(89, 5, '1', 30, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in variou', 'Active'),
(90, 5, '1', 28, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric r', 'Active'),
(91, 5, '1', 29, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI PLATENTERIUM', 'The Guwahati Planetarium provides educational and immersive experiences  about astronomy and space e', 'Active'),
(92, 5, '1', 26, 'MeghaLaya', 'Guwahati', 'VISIT UMANANDA TEMPLE', 'This Hindu shrine has been devoted to Lord Shiva and located in Peacock Island on  Brahmaputra river', 'Active'),
(93, 5, '2', 53, 'MeghaLaya', 'Manas', 'MANAS NATIONAL PARK', 'Manas National Park, a UNESCO World Heritage site in Assam- its rich diversity,  ranging from Bengal', 'Active'),
(94, 5, '2', 55, 'MeghaLaya', 'Pobitora', ' POBITORA NATIONAL PARK', 'Pobitora National Park is one of the richest habitats for Indian one-horned  rhinoceroses. It offers', 'Active'),
(95, 5, '2', 105, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally s', 'Active'),
(96, 5, '2', 106, 'MeghaLaya', 'Shillong', 'LAITLUM CANYON', 'It is located about 45km from the city of Shillong and offers spectacular panoramic  views of the su', 'Active'),
(98, 5, '3', 129, 'MeghaLaya', 'Mawlynnong', 'SINGLE DECKER LIVING ROOT BRIDGE', 'The single-decker living root bridge in Mawlynnong is a sustainable  structure created from intercon', 'Active'),
(99, 5, '3', 128, 'MeghaLaya', 'Mawlynnong', 'BALANCING ROCK', 'The balancing rock in Mawlynnong is a large boulder naturally balanced on a smaller  rock, creating ', 'Active'),
(100, 5, '3', 130, 'MeghaLaya', 'Mawlynnong', 'BANGLADESH VIEW POINT', 'The Bangladesh Viewpoint in Meghalaya provides a beautiful panoramic view  of Bangladeshs plains, of', 'Active'),
(101, 5, '3', 131, 'MeghaLaya', 'Dawki', 'UMNGOT RIVER', 'The Umngot River in Dawki, Meghalaya, is well-known for its crystal-clear waters, which  provide a s', 'Active'),
(102, 5, '4', 140, 'MeghaLaya', 'Kaziranga', 'KAZIRANGA NATIONAL PARK', 'Kaziranga National Park is well-known for its population of endangered onehorned rhinoceroses. It a', 'Active'),
(103, 5, '4', 141, 'MeghaLaya', 'Kaziranga', 'MRITYUNJOY TEMPLE', 'The Mahamrityunjay Temple, located on the way from Kaziranga to Guwahati, is a  venerated temple dev', 'Active'),
(104, 5, '4', 142, 'MeghaLaya', 'Kaziranga', 'KAZIRANGA NATIONAL ORCHID AND BIODIVERSITY PARK', 'It serves as a research and educational hub,  dedicated to conserving orchid and offering the visito', 'Active'),
(105, 5, '5', 199, 'MeghaLaya', 'Cherrapunjee', 'MAWSAWA FALLS', ' One of the Meghalaya hidden gems, the Mawsawa waterfalls is located at a short  trekkable distance ', 'Active'),
(106, 5, '5', 195, 'MeghaLaya', 'Cherrapunjee', 'SEVEN SISTER WATERFALL', 'Seven sister waterfalls signified its name as a group of seven beautiful  waterfalls flowing down th', 'Active'),
(107, 5, '5', 196, 'MeghaLaya', 'Cherrapunjee', 'MAWSMAI CAVES', 'It is famous for its unique limestone formations and lit passageways, this cave offers a  wonderful ', 'Active'),
(108, 5, '5', 197, 'MeghaLaya', 'Cherrapunjee', 'MAWKDOK DYMPEP VALLEY VIEWPOINT', 'It is a beautiful viewpoint in Cherrapunjee that offers  panaromic views of the lush Mawkdok Dympep ', 'Active'),
(109, 5, '5', 198, 'MeghaLaya', 'Cherrapunjee', 'LYNGKSIAR FALLS', 'Lyngksiar Waterfall stands as a testament to natures breathtaking magnificence. This  beautiful casc', 'Active'),
(110, 5, '5', 194, 'MeghaLaya', 'Cherrapunjee', 'WEI SAWDONG WATERFALL', 'This three tiered waterfall is one of the most beautiful waterfalls in  Meghalaya, known for its lus', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_itinerary_hotel`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_itinerary_hotel`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_itinerary_hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_id` int NOT NULL,
  `room_id` int NOT NULL,
  `lead_id` int NOT NULL,
  `day_no` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `hotel_category_wise` varchar(100) NOT NULL,
  `hotel_name` varchar(250) NOT NULL,
  `hotel_img1` varchar(100) NOT NULL,
  `hotel_img2` varchar(100) NOT NULL,
  `hotel_img3` varchar(100) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `bed` varchar(100) NOT NULL,
  `ac_type` varchar(100) NOT NULL,
  `amenities` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pick_season_price` varchar(100) NOT NULL,
  `off_season_price` varchar(100) NOT NULL,
  `booked` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_lead_itinerary_hotel`
--

INSERT INTO `carrnivaltrips_lead_itinerary_hotel` (`id`, `hotel_id`, `room_id`, `lead_id`, `day_no`, `destination`, `location_wise`, `hotel_category_wise`, `hotel_name`, `hotel_img1`, `hotel_img2`, `hotel_img3`, `room_name`, `capacity`, `bed`, `ac_type`, `amenities`, `price`, `pick_season_price`, `off_season_price`, `booked`, `status`) VALUES
(2, 8, 25, 5, '1', 'MeghaLaya', 'Guwahati', 'Luxury', 'Vivanta Guwahati', '', '', '', '301', '5', '2pax+1', 'AC', 'Coffee Kit', '2000', '2500', '1600', 'Yes', ''),
(3, 11, 24, 5, '2', 'MeghaLaya', 'Manas', 'Super Deluxe', 'OYO Victoria Villa', '', '', '', '201', '2', '1', 'AC', 'Coffee Kit', '1200', '15000', '1000', 'Yes', ''),
(4, 12, 21, 5, '3', 'MeghaLaya', 'Mawlynnong', 'Luxury', 'Hotel Om Shree', '', '', '', '101', '5', '2+1', 'AC', 'Coffee Kit', '2200', '2600', '2000', 'Yes', ''),
(5, 11, 24, 5, '4', 'MeghaLaya', 'Manas', 'Super Deluxe', 'OYO Victoria Villa', '', '', '', '201', '2', '1', 'AC', 'Coffee Kit', '1200', '15000', '1000', 'Yes', ''),
(6, 8, 25, 5, '5', 'MeghaLaya', 'Guwahati', 'Luxury', 'Vivanta Guwahati', '', '', '', '301', '5', '2pax+1', 'AC', 'Coffee Kit', '2000', '2500', '1600', 'Yes', ''),
(7, 8, 25, 1, '1', 'MeghaLaya', 'Guwahati', 'Luxury', 'Vivanta Guwahati', '', '', '', '301', '5', '2pax+1', 'AC', 'Coffee Kit', '2000', '2500', '1600', 'Yes', ''),
(11, 8, 25, 2, '1', 'MeghaLaya', 'Guwahati', 'Luxury', 'Vivanta Guwahati', '', '', '', '301', '5', '2pax+1', 'AC', 'Coffee Kit', '2000', '2500', '1600', 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_itinerary_sightseeing_img`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_itinerary_sightseeing_img`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_itinerary_sightseeing_img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lead_id` int NOT NULL,
  `day_no` int NOT NULL,
  `sightseeing_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_lead_itinerary_sightseeing_img`
--

INSERT INTO `carrnivaltrips_lead_itinerary_sightseeing_img` (`id`, `lead_id`, `day_no`, `sightseeing_id`, `destination`, `location_wise`, `name`, `status`) VALUES
(43, 1, 1, '22', 'MeghaLaya', 'Guwahati', '978283.jpg', 'Active'),
(3, 1, 0, '24', 'MeghaLaya', 'Guwahati', '341221.webp', 'Active'),
(4, 1, 1, '24', 'MeghaLaya', 'Guwahati', '341221.webp', 'Active'),
(5, 1, 0, '4', 'MeghaLaya', 'Manas', '548927.jpeg', 'Active'),
(6, 1, 0, '6', 'MeghaLaya', 'Manas', '613372.jpeg', 'Active'),
(7, 1, 0, '16', 'MeghaLaya', 'Manas', '250234.png', 'Active'),
(8, 1, 2, '4', 'MeghaLaya', 'Manas', '548927.jpeg', 'Active'),
(9, 1, 2, '6', 'MeghaLaya', 'Manas', '613372.jpeg', 'Active'),
(10, 1, 2, '14', 'MeghaLaya', 'Manas', '496249.jpg', 'Active'),
(11, 1, 3, '19', 'MeghaLaya', 'Pobitora', '847698.jpg', 'Active'),
(12, 1, 3, '20', 'MeghaLaya', 'Pobitora', '902928.jpg', 'Active'),
(13, 1, 3, '25', 'MeghaLaya', 'Pobitora', '238824.webp', 'Active'),
(14, 1, 0, '23', 'MeghaLaya', 'Guwahati', '277094.jpg', 'Active'),
(15, 1, 1, '23', 'MeghaLaya', 'Guwahati', '277094.jpg', 'Active'),
(16, 2, 1, '22', 'MeghaLaya', 'Guwahati', '978283.jpg', 'Active'),
(17, 2, 1, '23', 'MeghaLaya', 'Guwahati', '277094.jpg', 'Active'),
(18, 2, 1, '24', 'MeghaLaya', 'Guwahati', '341221.webp', 'Active'),
(19, 2, 2, '14', 'MeghaLaya', 'Manas', '496249.jpg', 'Active'),
(20, 2, 2, '16', 'MeghaLaya', 'Manas', '250234.png', 'Active'),
(21, 2, 2, '19', 'MeghaLaya', 'Pobitora', '847698.jpg', 'Active'),
(22, 2, 3, '12', 'MeghaLaya', 'Manas', '873619.jpg', 'Active'),
(23, 2, 3, '13', 'MeghaLaya', 'Manas', '466505.jpg', 'Active'),
(24, 2, 3, '14', 'MeghaLaya', 'Manas', '496249.jpg', 'Active'),
(25, 2, 4, '19', 'MeghaLaya', 'Pobitora', '847698.jpg', 'Active'),
(26, 2, 4, '21', 'MeghaLaya', 'Pobitora', '700069.jpg', 'Active'),
(27, 2, 4, '25', 'MeghaLaya', 'Pobitora', '238824.webp', 'Active'),
(28, 5, 1, '22', 'MeghaLaya', 'Guwahati', '978283.jpg', 'Active'),
(29, 5, 1, '23', 'MeghaLaya', 'Guwahati', '277094.jpg', 'Active'),
(30, 5, 1, '24', 'MeghaLaya', 'Guwahati', '341221.webp', 'Active'),
(31, 5, 2, '15', 'MeghaLaya', 'Manas', '340170.jpg', 'Active'),
(32, 5, 2, '20', 'MeghaLaya', 'Pobitora', '902928.jpg', 'Active'),
(33, 5, 2, '25', 'MeghaLaya', 'Pobitora', '238824.webp', 'Active'),
(34, 5, 5, '19', 'MeghaLaya', 'Pobitora', '847698.jpg', 'Active'),
(35, 5, 5, '20', 'MeghaLaya', 'Pobitora', '902928.jpg', 'Active'),
(36, 5, 5, '22', 'MeghaLaya', 'Guwahati', '978283.jpg', 'Active'),
(37, 5, 4, '13', 'MeghaLaya', 'Manas', '466505.jpg', 'Active'),
(38, 5, 4, '14', 'MeghaLaya', 'Manas', '496249.jpg', 'Active'),
(39, 5, 4, '16', 'MeghaLaya', 'Manas', '250234.png', 'Active'),
(40, 5, 3, '6', 'MeghaLaya', 'Manas', '613372.jpeg', 'Active'),
(41, 5, 3, '15', 'MeghaLaya', 'Manas', '340170.jpg', 'Active'),
(42, 5, 3, '16', 'MeghaLaya', 'Manas', '250234.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_lead_track`
--

DROP TABLE IF EXISTS `carrnivaltrips_lead_track`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_lead_track` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `click_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_lead_track`
--

INSERT INTO `carrnivaltrips_lead_track` (`id`, `user_id`, `name`, `click_time`) VALUES
(13, 1, 'Parasailing', '2024-09-28 13:10:22'),
(12, 1, 'Boat Riding', '2024-09-28 13:09:14'),
(11, 5, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-28 13:08:46'),
(7, 5, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-28 13:06:36'),
(8, 5, 'Boat Riding', '2024-09-28 13:06:39'),
(9, 1, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-28 13:07:08'),
(10, 1, 'Snorkeling', '2024-09-28 13:07:10'),
(14, 1, ' Scuba Diving (shore )', '2024-09-28 13:10:28'),
(15, 1, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-28 13:13:56'),
(16, 1, ' Scuba Diving (shore )', '2024-09-28 13:14:10'),
(17, 1, 'Sea Walk at Beach Properties', '2024-09-28 13:14:12'),
(18, 1, 'Diglipur', '2024-09-28 13:14:16'),
(19, 1, ' Game Fishing', '2024-09-28 13:14:18'),
(20, 5, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-28 13:14:39'),
(21, 5, ' Laxmanpur Beach', '2024-09-28 13:14:43'),
(22, 5, 'Sea walk', '2024-09-28 13:14:45'),
(23, 5, 'Candle light dinner at the beach', '2024-09-28 13:14:52'),
(24, 5, 'Candle light dinner at the beach', '2024-09-28 13:15:12'),
(25, 1, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-28 13:53:56'),
(26, 1, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-29 00:02:07'),
(27, 1, 'Candle light dinner at the beach', '2024-09-29 00:02:12'),
(28, 1, 'Elephanta Beach', '2024-09-29 00:02:20'),
(29, 1, 'Water Sports', '2024-09-29 00:02:23'),
(30, 1, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-29 23:52:19'),
(31, 1, 'Candle light dinner at the beach', '2024-09-29 23:52:23'),
(32, 8, 'EVENING HIGH-TEA WITH SUNSET CRUISE', '2024-09-30 01:02:37'),
(33, 8, 'Boat Riding', '2024-09-30 01:02:38'),
(34, 8, 'Stay with Private Pool Rooms', '2024-09-30 01:02:39'),
(35, 8, 'Diglipur', '2024-09-30 01:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_package_hotel`
--

DROP TABLE IF EXISTS `carrnivaltrips_package_hotel`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_package_hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `category_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `avilable` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_sightseeing`
--

DROP TABLE IF EXISTS `carrnivaltrips_sightseeing`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_sightseeing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(200) NOT NULL,
  `location_wise` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_sightseeing`
--

INSERT INTO `carrnivaltrips_sightseeing` (`id`, `destination`, `location_wise`) VALUES
(1, 'MeghaLaya', 'Guwahati'),
(2, 'MeghaLaya', 'Manas'),
(3, 'MeghaLaya', 'Pobitora'),
(4, 'MeghaLaya', 'Shillong'),
(5, 'MeghaLaya', 'Cherrapunjee'),
(6, 'MeghaLaya', 'Mawlynnong'),
(7, 'MeghaLaya', 'Dawki'),
(8, 'MeghaLaya', 'Jowai'),
(9, 'MeghaLaya', 'Kaziranga'),
(10, 'Andaman', 'Port Blair'),
(11, 'Andaman', 'Elephant Beach'),
(12, 'Sikkim', 'Gangtok'),
(13, 'Sikkim', 'Lachung'),
(14, 'Sikkim', 'Pelling'),
(15, 'Sikkim', 'Namchi'),
(16, 'Darjeeling', 'Tiger Hill'),
(17, 'Darjeeling', 'Batasia Loop'),
(18, 'Darjeeling', 'Barbotey Rock Garden'),
(19, 'Andaman', 'Bharatpur Beach'),
(20, 'Andaman', 'abc'),
(21, 'MeghaLaya', 'Pickup'),
(22, 'MeghaLaya', 'Drop');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_sightseeing_img`
--

DROP TABLE IF EXISTS `carrnivaltrips_sightseeing_img`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_sightseeing_img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sightseeing_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_sightseeing_img`
--

INSERT INTO `carrnivaltrips_sightseeing_img` (`id`, `sightseeing_id`, `destination`, `location_wise`, `name`) VALUES
(1, 1, 'MeghaLaya', 'Guwahati', '621196.jpg'),
(2, 1, 'MeghaLaya', 'Guwahati', '835970.jpg'),
(3, 1, 'MeghaLaya', 'Guwahati', '437133.jpg'),
(4, 2, 'MeghaLaya', 'Manas', '548927.jpeg'),
(5, 2, 'MeghaLaya', 'Manas', '570642.jpeg'),
(6, 2, 'MeghaLaya', 'Manas', '613372.jpeg'),
(7, 2, 'MeghaLaya', 'Manas', '762650.jpg'),
(8, 2, 'MeghaLaya', 'Manas', '196659.jpg'),
(9, 2, 'MeghaLaya', 'Manas', '621174.jpg'),
(10, 2, 'MeghaLaya', 'Manas', '445051.jpg'),
(11, 2, 'MeghaLaya', 'Manas', '392550.jpeg'),
(12, 2, 'MeghaLaya', 'Manas', '873619.jpg'),
(13, 2, 'MeghaLaya', 'Manas', '466505.jpg'),
(14, 2, 'MeghaLaya', 'Manas', '496249.jpg'),
(15, 2, 'MeghaLaya', 'Manas', '340170.jpg'),
(16, 2, 'MeghaLaya', 'Manas', '250234.png'),
(17, 2, 'MeghaLaya', 'Manas', '99468.png'),
(18, 3, 'MeghaLaya', 'Pobitora', '831068.jpg'),
(19, 3, 'MeghaLaya', 'Pobitora', '847698.jpg'),
(20, 3, 'MeghaLaya', 'Pobitora', '902928.jpg'),
(21, 3, 'MeghaLaya', 'Pobitora', '700069.jpg'),
(22, 1, 'MeghaLaya', 'Guwahati', '978283.jpg'),
(23, 1, 'MeghaLaya', 'Guwahati', '277094.jpg'),
(24, 1, 'MeghaLaya', 'Guwahati', '341221.webp'),
(25, 3, 'MeghaLaya', 'Pobitora', '238824.webp'),
(26, 1, 'MeghaLaya', 'Guwahati', '75967.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carrnivaltrips_sightseeing_points`
--

DROP TABLE IF EXISTS `carrnivaltrips_sightseeing_points`;
CREATE TABLE IF NOT EXISTS `carrnivaltrips_sightseeing_points` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sightseeing_id` int NOT NULL,
  `destination` varchar(200) NOT NULL,
  `location_wise` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_sightseeing_points`
--

INSERT INTO `carrnivaltrips_sightseeing_points` (`id`, `sightseeing_id`, `destination`, `location_wise`, `name`, `description`) VALUES
(214, 1, 'MeghaLaya', 'Guwahati', 'VISIT KALAKSHETRA', ' It is a cultural hub celebrating Assamese traditions through dance, music and theatre, with  a fascinating light and sound spectacle that brings local history and mythology to life.'),
(213, 1, 'MeghaLaya', 'Guwahati', 'VISIT DIPOR BIL', ' Dipor Bil is a significant wetland ecosystem recognized for its biodiversity, sustaining a wide  range of bird species and playing an important part in local conservation initiatives'),
(211, 1, 'MeghaLaya', 'Guwahati', 'VISIT UMANANDA TEMPLE', 'This Hindu shrine has been devoted to Lord Shiva and located in Peacock Island on  Brahmaputra river. '),
(212, 1, 'MeghaLaya', 'Guwahati', 'VISIT ASSAM STATE ZOO CUM BOTANICAL GARDEN', ' Assam State Zoo showcases diverse wildlife alongside a  rich botanical collection.'),
(209, 1, 'MeghaLaya', 'Guwahati', 'VISIT KAMAKHYA MANDIR', 'This historic and sacred place is dedicated to the goddess Kamakhya, famed for its  unique tantric rituals and spiritual significance.'),
(210, 1, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI PLATENTERIUM', 'The Guwahati Planetarium provides educational and immersive experiences  about astronomy and space exploration.'),
(208, 1, 'MeghaLaya', 'Guwahati', 'VISIT GUWAHATI WAR MEMORIAL', ' It stands as a solemn tribute to the valiant soldiers of Assam who sacrificed  their life in various conflicts, honoring their bravery and service.'),
(53, 2, 'MeghaLaya', 'Manas', 'MANAS NATIONAL PARK', 'Manas National Park, a UNESCO World Heritage site in Assam- its rich diversity,  ranging from Bengal tigers to pygmy hogs, amongst breathtaking settings along the scenic Manas River, ensuring  a memorable adventure in the heart of Northeast India'),
(54, 2, 'MeghaLaya', 'Manas', 'VISIT MANAS NATIONAL PARK 2', 'This UNESCO World Heritage site offers breakthtaking landscapes, diverse  wildlife including tigers and elephants and opportunities for birdwatching and jungle safaris along the scenic  Manas River.'),
(55, 3, 'MeghaLaya', 'Pobitora', ' POBITORA NATIONAL PARK', 'Pobitora National Park is one of the richest habitats for Indian one-horned  rhinoceroses. It offers thrilling safaries through scenic grasslands and marshes, allowing visitors to encounter  diverse wildlife and stunning natural scenery.'),
(105, 4, 'MeghaLaya', 'Shillong', 'SHILLONG PEAK', 'It is the highest point in Shillong and offers breathtaking panaromic city views and a  culturally significant site for the Khasi tribe.'),
(106, 4, 'MeghaLaya', 'Shillong', 'LAITLUM CANYON', 'It is located about 45km from the city of Shillong and offers spectacular panoramic  views of the surrounding hills and valleys, making it a scenic spot for nature lovers and photographers alike'),
(104, 4, 'MeghaLaya', 'Shillong', 'MALKI FOREST', 'This dense forest in the Malki region of Shillong is a peaceful green spot perfect for  trekking, nature excursions, bird watching and picnics. It offers a peaceful escape from the city s hastle, allowing  visitors to connect with nature.'),
(103, 4, 'MeghaLaya', 'Shillong', 'UMIAM LAKE', 'Umiam Lake, hidden in the hills of Meghalaya, is a gorgeous reservoir known for its  tranquil waters and beautiful surroundings.'),
(102, 4, 'MeghaLaya', 'Shillong', 'MAWPHLANG SACRED FOREST', 'It is a revered and protected area known for its spritual and ecological  significance. This ancient forest is safegourded by traditional Khasi beliefs that forbid to take anything away from  this hallowed forest, not even a pebble or a twig. The local guides provide valuable insights into the forests  history and a deeper understanding on the forests ecological and spiritual importance.'),
(100, 4, 'MeghaLaya', 'Shillong', 'LADY HYDARI PARK', 'It is a japanese-styled garden, having well-manicured lawns and a small zoo, perfect  for a relaxing family visit in Shillong.'),
(101, 4, 'MeghaLaya', 'Shillong', 'WARDS LAKE', 'It is a charming artificial lake, known for its ornate bridge, lush gardens and peaceful  boating oppertunities.'),
(107, 4, 'MeghaLaya', 'Shillong', 'DAVID SCOTT TRAIL', 'It is a historic trekking route named after British administrator David Scott, who built  it in the early 19th century.The trail provides a unique opportunity for trekkers to experience Meghalayas  cultural and environmental heritage .'),
(108, 4, 'MeghaLaya', 'Shillong', 'MAWLYNGBNA VILLAGE', 'Mawlyngba village is located in the East Khasi Hills district of Meghalaya and this  area is rich in biodiversity and unique geological formations, including fossilized rocks that speak volumes of the  places ancient history. Adventurous visitors are drawn to Mawlyngbna for its thrilling trekking routes,  breathtaking waterfalls, and natural springs.'),
(109, 4, 'MeghaLaya', 'Shillong', 'MAWJYMBUIN CAVE', 'Mawgymbuin cave is a natural cave that is 209 meters high and formed of  calcareous sandstones. The most fascinating reality here is that the Shivlinga is continuously drenched with  water flowing from a conical rock on the ceiling of the cave.'),
(110, 4, 'MeghaLaya', 'Shillong', 'UMKHAKOI LAKE', ' Umkhakoi Lake, an artificial reservoir in Mawlyngbna, was built by villagers using a  small dam to store water between large boulders. The area features adventure activities like canyoning, ziplining, rope walking, and kayaking. The lakes shape resembles the footprints of giant lizards, providing a  fascinating glimpse into the prehistoric era.'),
(111, 4, 'MeghaLaya', 'Shillong', 'SPLIT ROCK', 'Split Rock is a notable attraction featuring a giant rock split into two distinct halves, is  attributed to the devastating Magnitude-8 Assam earthquake of 1897'),
(199, 5, 'MeghaLaya', 'Cherrapunjee', 'MAWSAWA FALLS', ' One of the Meghalaya hidden gems, the Mawsawa waterfalls is located at a short  trekkable distance from Laitryngew in Cherrapunjee, the trail is famous for its stunning views and picturesque  waterfalls on the way.'),
(129, 6, 'MeghaLaya', 'Mawlynnong', 'SINGLE DECKER LIVING ROOT BRIDGE', 'The single-decker living root bridge in Mawlynnong is a sustainable  structure created from interconnected aerial roots of rubber fig trees, exemplifying eco-friendly bioengineering,  serves as a critical crossing while displaying traditional Khasi inventiveness.'),
(128, 6, 'MeghaLaya', 'Mawlynnong', 'BALANCING ROCK', 'The balancing rock in Mawlynnong is a large boulder naturally balanced on a smaller  rock, creating a striking and unique sight.'),
(130, 6, 'MeghaLaya', 'Mawlynnong', 'BANGLADESH VIEW POINT', 'The Bangladesh Viewpoint in Meghalaya provides a beautiful panoramic view  of Bangladeshs plains, offering visitors with a stunning cross-border perspective. It a popular place because of  the scenic beauty and the rare possibility to gaze into another country from a high point in Meghalaya.'),
(131, 7, 'MeghaLaya', 'Dawki', 'UMNGOT RIVER', 'The Umngot River in Dawki, Meghalaya, is well-known for its crystal-clear waters, which  provide a stunning reflection of the surrounding lush foliage and stony riverbed. It is well-known for boating and  natural beauty, attracting visitors to enjoy the pure waters and lovely scenery.'),
(144, 8, 'MeghaLaya', 'Jowai', 'PHE PHE WATERFALLS', 'Phe Phe waterfall is also known as Paradise waterfall. It gently streams over rocks  into a quiet pool of perfectly blue water, offering a peaceful setting for relaxation and experiencing the  mesmerising beauty of mother nature'),
(143, 8, 'MeghaLaya', 'Jowai', 'KRANGSURI WATERFALLS', 'The Krang Suri Waterfalls at Jowai, Meghalaya, are famed for their gorgeous  turquoise pools and cascading water over rocky ledges in lush green environs. Its a popular swimming and  picnicking spot, providing guests with a refreshing getaway into the amazing beauty of nature.'),
(140, 9, 'MeghaLaya', 'Kaziranga', 'KAZIRANGA NATIONAL PARK', 'Kaziranga National Park is well-known for its population of endangered onehorned rhinoceroses. It also has large populations of tigers, elephants, and various bird species, making it a  UNESCO World Heritage Site and a major wildlife conservation area in India.'),
(141, 9, 'MeghaLaya', 'Kaziranga', 'MRITYUNJOY TEMPLE', 'The Mahamrityunjay Temple, located on the way from Kaziranga to Guwahati, is a  venerated temple devoted to Lord Shiva that attracts both pilgrims and tourists due to its spiritual environment  and architectural beauty'),
(142, 9, 'MeghaLaya', 'Kaziranga', 'KAZIRANGA NATIONAL ORCHID AND BIODIVERSITY PARK', 'It serves as a research and educational hub,  dedicated to conserving orchid and offering the visitors an opportunity to explore numerous orchid species.'),
(145, 8, 'MeghaLaya', 'Jowai', 'TYRSHI WATERFALLS', 'Alongside of the Jowai-Shillong road, this beautiful falls descend in steps with the  water gushing swiftly looking like an enormous white veil. '),
(146, 8, 'MeghaLaya', 'Jowai', 'NARTIANG DURGA TEMPLE', 'The Nartiang Durga Temple is one of the oldest Hindu temples in Meghalaya,  blending Khasi and Hindu architectural styles. The Hindus in the Jaintia Hills believes that this temple is the  permanent abode of Goddess Durga, drawing the pilgrims from all over the country during the Durga Puja  festival.'),
(147, 8, 'MeghaLaya', 'Jowai', 'NARTIANG MONOLITH', 'These are ancient megalithic stones located in Nartiang village, serve as significant  cultural markers, symbolizing rituals, ceremonies, and governance practices of the regions indigenous communities.'),
(148, 8, 'MeghaLaya', 'Jowai', 'BOPHIL FALLS', ' Bophill Falls is one of the most beautiful waterfalls in the Jaintia Hills district. It provides a  breathtaking panoramic view of the Khasi Hills on one side while also providing a glimpse of Bangladeshi plains  on the other'),
(195, 5, 'MeghaLaya', 'Cherrapunjee', 'SEVEN SISTER WATERFALL', 'Seven sister waterfalls signified its name as a group of seven beautiful  waterfalls flowing down the lush green mountainside, creating a soothing melody that echoed throughout the  vally'),
(196, 5, 'MeghaLaya', 'Cherrapunjee', 'MAWSMAI CAVES', 'It is famous for its unique limestone formations and lit passageways, this cave offers a  wonderful spelunking experience surrounded by natural beauty near Cherrapunjee.'),
(197, 5, 'MeghaLaya', 'Cherrapunjee', 'MAWKDOK DYMPEP VALLEY VIEWPOINT', 'It is a beautiful viewpoint in Cherrapunjee that offers  panaromic views of the lush Mawkdok Dympep Valley. Th green environment, misty hills and meandering rivers  make it a popular destination for nature lovers and photographers'),
(198, 5, 'MeghaLaya', 'Cherrapunjee', 'LYNGKSIAR FALLS', 'Lyngksiar Waterfall stands as a testament to natures breathtaking magnificence. This  beautiful cascade is located in Mawkma village in the East Khasi Hills district, captivates visitors with its sheer  majesty and serene atmosphere.'),
(194, 5, 'MeghaLaya', 'Cherrapunjee', 'WEI SAWDONG WATERFALL', 'This three tiered waterfall is one of the most beautiful waterfalls in  Meghalaya, known for its lush green surroundings and the crystal clear water and continues to be a tourist  hotspot.'),
(192, 5, 'MeghaLaya', 'Cherrapunjee', 'ARWAH CAVES', 'It is noted for its impreimpressive stalactite and stalagmite formations, offering an  adventourous experience in Meghalaya  natural underground wonders'),
(193, 5, 'MeghaLaya', 'Cherrapunjee', 'ELEPHANT FALLS', 'It is renowned for its three-tiered waterfalls near Shillong, known for its natural beauty  and lush surroundings'),
(191, 5, 'MeghaLaya', 'Cherrapunjee', 'SWEET FALLS', 'Lyngksiar Waterfall stands as a testament to natures breathtaking magnificence. This  beautiful cascade is located in Mawkma village in the East Khasi Hills district, captivates visitors with its sheer  majesty and serene atmosphere.'),
(200, 5, 'MeghaLaya', 'Cherrapunjee', 'WAH-KABA FALLS', 'Wah Kaba Waterfall, a stunning natural wonder, offers visitors a refreshing retreat into  nature amidst the stunning hills and valleys of Meghalaya.'),
(201, 5, 'MeghaLaya', 'Cherrapunjee', 'KYNREM FALLS', 'Kynrem Falls is the 7th highest waterfalls in India. It is a three-tiered waterfall with water  falling from a height of 305 meters and the fall divides into two distinct streams, each of which gains pace as it  merges while flowing down the last leg of the third tier'),
(202, 5, 'MeghaLaya', 'Cherrapunjee', 'DAINTHLEN FALLS', 'This gushing waterfall is carving through the rocky landscape of Sohra before  descending into the lush forests below. Its cultural importance to the Khasi tribe adds another layer of richness  to its beauty and significance'),
(205, 21, 'MeghaLaya', 'Pickup', 'Recived From Airport', 'Recived From Airport & drop Hotel'),
(206, 21, 'MeghaLaya', 'Pickup', 'Recived From Railway Station', 'Recived From Railway Station & drop Hotel'),
(207, 22, 'MeghaLaya', 'Drop', 'Drop Airport', ''),
(215, 1, 'MeghaLaya', 'Guwahati', 'Sunset Cruse', 'Expreriance the Amazing View of Sunset of River Bramaputra');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_activities`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_activities`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=305 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_activities`
--

INSERT INTO `carrrnivaltrips_destination_activities` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `img`, `discount`, `rank_1`) VALUES
(303, 10, 'MeghaLaya', 'Guwahati', 'Banana Boat Ride', '4500', '428514327.jpeg', 7, 4),
(304, 1, 'MeghaLaya', 'Guwahati', 'Parasailing', '3500', '299071191.jpg', 10, 1),
(302, 1, 'MeghaLaya', 'Guwahati', 'Boat Riding', '1000', '1880926692.jpg', 12, 6),
(288, 10, 'Andaman', 'Port Blair', 'Scuba Diving ( boat )', '3900', '534204598.jpg', 10, 2),
(289, 10, 'Andaman', 'Port Blair', 'Sea Walk  Sea Walk', '3500', '1583133004.jpg', 0, 5),
(300, 1, 'MeghaLaya', 'Guwahati', 'Snorkeling', '1100', '472210220.jpg', 10, 3),
(298, 1, 'MeghaLaya', 'Guwahati', ' Scuba Diving (shore )', '3500', '1363851971.jpg', 5, 6),
(299, 1, 'MeghaLaya', 'Guwahati', 'EVENING HIGH-TEA WITH SUNSET CRUISE', '1200', '201656592.jpeg', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_adventure_activities`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_adventure_activities`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_adventure_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_adventure_activities`
--

INSERT INTO `carrrnivaltrips_destination_adventure_activities` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `discount`, `rank_1`, `img`) VALUES
(58, '1', 'MeghaLaya', 'Guwahati', 'Sea walk', '1899', 10, 2, '867900170.jpeg'),
(57, '1', 'MeghaLaya', 'Guwahati', 'Water Sports', '4500', 20, 1, '32579070.jpg'),
(56, '1', 'MeghaLaya', 'Guwahati', ' Game Fishing', '3599', 10, 4, '2025791962.jpeg'),
(55, '1', 'MeghaLaya', 'Guwahati', 'Boat diving', '3000', 10, 3, '362453160.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_best_scenic_places`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_best_scenic_places`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_best_scenic_places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=252 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_best_scenic_places`
--

INSERT INTO `carrrnivaltrips_destination_best_scenic_places` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `img`, `discount`, `rank_1`) VALUES
(249, '1', 'MeghaLaya', 'Guwahati', 'Elephanta Beach', '3200', '1189797442.jpeg', 10, 1),
(248, '1', 'MeghaLaya', 'Guwahati', ' Laxmanpur Beach', '2800', '1636320715.jpeg', 15, 2),
(247, '1', 'MeghaLaya', 'Guwahati', ' Radhanagar beach', '3500', '1311511472.jpeg', 20, 5),
(246, '1', 'MeghaLaya', 'Guwahati', 'Diglipur', '1200', '1105037742.jpg', 10, 8),
(250, '1', 'MeghaLaya', 'Guwahati', 'Cellular Jail', '2500', '138599597.jpeg', 20, 4),
(251, '1', 'MeghaLaya', 'Guwahati', ' Baratang & Limestone caves', '2800', '1789808842.jpeg', 30, 6);

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_exclusion`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_exclusion`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_exclusion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `rank_1` int NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_exclusion`
--

INSERT INTO `carrrnivaltrips_destination_exclusion` (`id`, `package_id`, `destination`, `name`, `price`, `rank_1`, `status`) VALUES
(73, 1, 'MeghaLaya', 'Vehicle service on leisure days for sightseeing not included in the itinerar', '', 5, 'Active'),
(72, 1, 'MeghaLaya', 'Any expense of personal nature like telephone bills, laundry bills, mini bar, etc', '', 4, 'Active'),
(71, 1, 'MeghaLaya', 'Domestic / International air fare and ship fare.', '', 1, 'Active'),
(70, 1, 'MeghaLaya', 'Tipping and portage payable to the driver, bellboy, room service or waiter.', '', 3, 'Active'),
(69, 1, 'MeghaLaya', 'Fun/Joy rides at Water Sports Complex.', '', 8, 'Active'),
(68, 1, 'MeghaLaya', 'Lunch & Dinner is not inclusive in the package.', '', 2, 'Active'),
(67, 1, 'MeghaLaya', 'Camera tickets not included. Guests must purchase them directly at sightseeing locations.', '', 7, 'Active'),
(65, 1, 'MeghaLaya', 'Medical and travel insurance.', '', 6, 'Active'),
(66, 1, 'MeghaLaya', '5% GST not included', '', 12, 'Active'),
(74, 1, 'MeghaLaya', 'Optional activities such as Scuba Diving, Snorkeling, and Jolly ride etc.', '', 9, 'Active'),
(75, 1, 'MeghaLaya', 'guest (to be borne by the clients directly on the spot)', '', 10, 'Active'),
(76, 1, 'MeghaLaya', 'Expenses occurred due to bad weather, Flight or ferry cancellation, strike or any political unrest to be paid by', '', 10, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_inclusion`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_inclusion`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_inclusion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `rank_1` int NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_inclusion`
--

INSERT INTO `carrrnivaltrips_destination_inclusion` (`id`, `package_id`, `destination`, `name`, `price`, `rank_1`, `status`) VALUES
(228, 1, 'MeghaLaya', 'All Entry Tickets, Permit Fees, and Boat/Ferry Tickets Included.', '700', 7, 'Active'),
(227, 1, 'MeghaLaya', 'Daily Breakfast except day of Arrival', '100', 4, 'Active'),
(226, 1, 'MeghaLaya', 'Accommodation on twin sharing basis in hotels mentioned.', '100', 3, 'Active'),
(225, 1, 'MeghaLaya', '24 hours on call assistance during your stay.', '100', 2, 'Active'),
(224, 1, 'MeghaLaya', 'Welcomes drink (Coconut Water).', '50', 1, 'Active'),
(223, 1, 'MeghaLaya', '1 session snorkeling complementary at Elephanta Beach (Provided by Boat Association)', '800', 8, 'Active'),
(229, 1, 'MeghaLaya', 'All transfers & sightseeing by 01 A/C Private Car.', '500', 5, 'Active'),
(230, 1, 'MeghaLaya', 'Port Blair – Havelock Island – Port Blair by Private Cruise (Nautika/Makruzz/Green Ocean).', '600', 6, 'Active'),
(231, 1, 'MeghaLaya', 'Assistance at all arrival and departure point', '900', 9, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_special_experiences`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_special_experiences`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_special_experiences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_special_experiences`
--

INSERT INTO `carrrnivaltrips_destination_special_experiences` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `discount`, `rank_1`, `img`) VALUES
(105, '1', 'MeghaLaya', 'Guwahati', 'Stay with Private Pool Rooms', '500', 20, 4, '1148709381.jpeg'),
(104, '1', 'MeghaLaya', 'Guwahati', 'Stay with Beach Properties', '4000', 5, 1, '2023140902.jpeg'),
(103, '1', 'MeghaLaya', 'Guwahati', 'Candle light dinner at the beach', '2500', 10, 2, '1872033350.jpeg'),
(106, '1', 'MeghaLaya', 'Guwahati', 'Sea Walk at Beach Properties', '1200', 15, 5, '1438071939.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_destination_wise_silde1`
--

DROP TABLE IF EXISTS `carrrnivaltrips_destination_wise_silde1`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_destination_wise_silde1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `day` varchar(100) NOT NULL,
  `night` varchar(100) NOT NULL,
  `package_img` varchar(100) NOT NULL,
  `package_status` varchar(100) NOT NULL,
  `s1_text1` varchar(200) NOT NULL,
  `s1_anim_text2` varchar(200) NOT NULL,
  `s1_text3` varchar(200) NOT NULL,
  `s1_btn1` varchar(200) NOT NULL,
  `s1_btn2` varchar(200) NOT NULL,
  `s1_img` varchar(200) NOT NULL,
  `s1_squre_box_text` varchar(200) NOT NULL,
  `s2_text1` varchar(200) NOT NULL,
  `s2_anim_text2` varchar(200) NOT NULL,
  `s2_text3` varchar(200) NOT NULL,
  `s2_btn1` varchar(100) NOT NULL,
  `s2_btn2` varchar(100) NOT NULL,
  `s2_img` varchar(100) NOT NULL,
  `s2_squre_box_text` varchar(100) NOT NULL,
  `s3_text1` varchar(100) NOT NULL,
  `s3_anim_text2` varchar(100) NOT NULL,
  `s3_text3` varchar(100) NOT NULL,
  `s3_btn1` varchar(100) NOT NULL,
  `s3_btn2` varchar(100) NOT NULL,
  `s3_img` varchar(100) NOT NULL,
  `s3_squre_box_text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_destination_wise_silde1`
--

INSERT INTO `carrrnivaltrips_destination_wise_silde1` (`id`, `destination`, `day`, `night`, `package_img`, `package_status`, `s1_text1`, `s1_anim_text2`, `s1_text3`, `s1_btn1`, `s1_btn2`, `s1_img`, `s1_squre_box_text`, `s2_text1`, `s2_anim_text2`, `s2_text3`, `s2_btn1`, `s2_btn2`, `s2_img`, `s2_squre_box_text`, `s3_text1`, `s3_anim_text2`, `s3_text3`, `s3_btn1`, `s3_btn2`, `s3_img`, `s3_squre_box_text`) VALUES
(1, 'MeghaLaya', '5', '4', '6314203.jpg', 'Active', 'Here is your customized itinerary', 'Fun Filling, Refreshing Trips1', 'Thanks For Choosing Carrnival Trips!1234', 'Let,s get started1234', 'Who we are', '785242422.jpg', 'Booking199', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips!2222', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking222', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips!5555', 'Let,s get started 3', 'Who we are', '1457932064.jpg', 'Booking322'),
(2, 'Sikim', '4', '3', '1571322428.jpg', 'Upcoming', 'Here is your customized itinerary1', 'Fun Filling', 'Thanks For Choosing Carrnival Trips!', 'Let,s get started', 'button', '1001057915.jpg', 'Booking1', 'Here is your customized itinerary1', 'refresing', '', 'Let,s get started 2', '', '1390332316.jpg', 'Booking 22', 'Here is your customized itinerary1', 'fun filling', '', '', '', '844050082.jpg', ''),
(5, 'Sikim', '5', '4', '6314203.jpg', 'Active', 'Here is your customized itinerary', 'Fun Filling, Refreshing Trips1', 'Thanks For Choosing Carrnival Trips!1234', 'Let,s get started1234', 'Who we are', '785242422.jpg', 'Booking199', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips!2222', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking222', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips!5555', 'Let,s get started 3', 'Who we are 3', '1457932064.jpg', 'Booking322'),
(6, 'Andaman', '5', '4', '6314203.jpg', 'Active', 'Here is your customized itinerary', 'Fun Filling, Refreshing Trips1', 'Thanks For Choosing Carrnival Trips!1234', 'Let,s get started1234', 'Who we are', '785242422.jpg', 'Booking199', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips!2222', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking222', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips!5555', 'Let,s get started 3', 'Who we are', '1457932064.jpg', 'Booking322'),
(7, 'Darjeeling', '5', '4', '6314203.jpg', 'Active', 'Here is your customized itinerary', 'Fun Filling, Refreshing Trips1', 'Thanks For Choosing Carrnival Trips!1234', 'Let,s get started1234', 'Who we are', '785242422.jpg', 'Booking199', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips!2222', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking222', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips!5555', 'Let,s get started 3', 'Who we are ', '1457932064.jpg', 'Booking322');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `day` varchar(100) NOT NULL,
  `night` varchar(100) NOT NULL,
  `package_img` varchar(100) NOT NULL,
  `package_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `s1_text1` varchar(200) NOT NULL,
  `s1_anim_text2` varchar(200) NOT NULL,
  `s1_text3` varchar(200) NOT NULL,
  `s1_btn1` varchar(200) NOT NULL,
  `s1_btn2` varchar(200) NOT NULL,
  `s1_img` varchar(200) NOT NULL,
  `s1_squre_box_text` varchar(200) NOT NULL,
  `s2_text1` varchar(200) NOT NULL,
  `s2_anim_text2` varchar(200) NOT NULL,
  `s2_text3` varchar(200) NOT NULL,
  `s2_btn1` varchar(100) NOT NULL,
  `s2_btn2` varchar(100) NOT NULL,
  `s2_img` varchar(100) NOT NULL,
  `s2_squre_box_text` varchar(100) NOT NULL,
  `s3_text1` varchar(100) NOT NULL,
  `s3_anim_text2` varchar(100) NOT NULL,
  `s3_text3` varchar(100) NOT NULL,
  `s3_btn1` varchar(100) NOT NULL,
  `s3_btn2` varchar(100) NOT NULL,
  `s3_img` varchar(100) NOT NULL,
  `s3_squre_box_text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package`
--

INSERT INTO `carrrnivaltrips_package` (`id`, `package_name`, `day`, `night`, `package_img`, `package_status`, `s1_text1`, `s1_anim_text2`, `s1_text3`, `s1_btn1`, `s1_btn2`, `s1_img`, `s1_squre_box_text`, `s2_text1`, `s2_anim_text2`, `s2_text3`, `s2_btn1`, `s2_btn2`, `s2_img`, `s2_squre_box_text`, `s3_text1`, `s3_anim_text2`, `s3_text3`, `s3_btn1`, `s3_btn2`, `s3_img`, `s3_squre_box_text`) VALUES
(1, 'Andaman', '5', '4', '6314203.jpg', 'Active', 'Here is your customized itinerary', 'Fun Filling, Refreshing Trips1', 'Thanks For Choosing Carrnival Trips!1234', 'Let,s get started1234', 'Who we are', '785242422.jpg', 'Booking199', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips!2222', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking222', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips!5555', 'Let,s get started 3', 'Who we are 3', '1457932064.jpg', 'Booking322'),
(2, 'Sikim', '4', '3', '1571322428.jpg', 'Upcoming', 'Here is your customized itinerary1', 'Fun Filling', 'Thanks For Choosing Carrnival Trips!', 'Let,s get started', 'button', '1001057915.jpg', 'Booking1', 'Here is your customized itinerary1', 'refresing', '', 'Let,s get started 2', '', '1390332316.jpg', 'Booking 22', 'Here is your customized itinerary1', 'fun filling', '', '', '', '844050082.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_activities`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_activities`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=284 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_activities`
--

INSERT INTO `carrrnivaltrips_package_activities` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `img`, `discount`, `rank_1`) VALUES
(281, 1, '', '', 'Snorkeling', '1100', '472210220.jpg', 7, 3),
(282, 1, '', '', 'Parasailing', '3500', '299071191.jpg', 10, 1),
(283, 1, '', '', ' Scuba Diving (shore )', '3500', '1363851971.jpg', 5, 6),
(280, 1, '', '', 'Banana Boat Ride', '4500', '428514327.jpeg', 7, 4),
(278, 1, '', '', 'Scuba Diving ( boat )', '3900', '534204598.jpg', 10, 2),
(279, 1, '', '', 'Sea Walk  Sea Walk', '3500', '1583133004.jpg', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_adventure_activities`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_adventure_activities`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_adventure_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_adventure_activities`
--

INSERT INTO `carrrnivaltrips_package_adventure_activities` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `discount`, `rank_1`, `img`) VALUES
(49, '1', '', '', 'Boat diving', '3000', 7, 3, '362453160.jpeg'),
(50, '1', '', '', ' Game Fishing', '3599', 10, 4, '2025791962.jpeg'),
(48, '1', '', '', 'Water Sports', '4500', 20, 1, '32579070.jpg'),
(47, '1', '', '', 'Sea walk', '1899', 10, 2, '867900170.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_best_scenic_places`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_best_scenic_places`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_best_scenic_places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=247 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_best_scenic_places`
--

INSERT INTO `carrrnivaltrips_package_best_scenic_places` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `img`, `discount`, `rank_1`) VALUES
(243, '1', '', '', 'Diglipur', '1200', '1105037742.jpg', 10, 8),
(244, '1', '', '', ' Radhanagar beach', '3500', '1311511472.jpeg', 20, 5),
(245, '1', '', '', ' Laxmanpur Beach', '2800', '1636320715.jpeg', 15, 2),
(242, '1', '', '', 'Elephanta Beach', '3200', '1189797442.jpeg', 10, 1),
(240, '1', '', '', 'Cellular Jail', '2500', '138599597.jpeg', 20, 4),
(241, '1', '', '', ' Baratang & Limestone caves', '2800', '1789808842.jpeg', 30, 6);

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_exclusion`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_exclusion`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_exclusion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `name` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `rank_1` int NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_exclusion`
--

INSERT INTO `carrrnivaltrips_package_exclusion` (`id`, `package_id`, `name`, `price`, `rank_1`, `status`) VALUES
(63, 1, 'Medical and travel insurance.', '', 6, 'Active'),
(64, 1, '5% GST not included', '', 12, 'Active'),
(62, 1, 'Camera tickets not included. Guests must purchase them directly at sightseeing locations.', '', 7, 'Active'),
(61, 1, 'Lunch & Dinner is not inclusive in the package.', '', 2, 'Active'),
(57, 1, 'Fun/Joy rides at Water Sports Complex.', '', 8, 'Active'),
(58, 1, 'Tipping and portage payable to the driver, bellboy, room service or waiter.', '', 3, 'Active'),
(60, 1, 'Domestic / International air fare and ship fare.', '', 1, 'Active'),
(59, 1, 'Any expense of personal nature like telephone bills, laundry bills, mini bar, etc', '', 4, 'Active'),
(56, 1, 'Vehicle service on leisure days for sightseeing not included in the itinerar', '', 5, 'Active'),
(55, 1, 'Optional activities such as Scuba Diving, Snorkeling, and Jolly ride etc.', '', 9, 'Active'),
(54, 1, 'guest (to be borne by the clients directly on the spot)', '', 11, 'Active'),
(53, 1, 'Expenses occurred due to bad weather, Flight or ferry cancellation, strike or any political unrest to be paid by', '', 10, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_inclusion`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_inclusion`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_inclusion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `name` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `rank_1` int NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=224 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_inclusion`
--

INSERT INTO `carrrnivaltrips_package_inclusion` (`id`, `package_id`, `name`, `price`, `rank_1`, `status`) VALUES
(221, 1, '1 session snorkeling complementary at Elephanta Beach (Provided by Boat Association)', '800', 8, 'Active'),
(216, 1, 'Welcomes drink (Coconut Water).', '50', 1, 'Active'),
(217, 1, '24 hours on call assistance during your stay.', '', 2, 'Active'),
(218, 1, 'Accommodation on twin sharing basis in hotels mentioned.', '', 3, 'Active'),
(219, 1, 'Daily Breakfast except day of Arrival', '', 4, 'Active'),
(220, 1, 'All Entry Tickets, Permit Fees, and Boat/Ferry Tickets Included.', '700', 7, 'Active'),
(215, 1, 'All transfers & sightseeing by 01 A/C Private Car.', '500', 5, 'Active'),
(214, 1, 'Port Blair – Havelock Island – Port Blair by Private Cruise (Nautika/Makruzz/Green Ocean).', '600', 6, 'Active'),
(222, 1, 'Assistance at all arrival and departure point', '900', 9, 'Active'),
(223, 2, 'abc21', '', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_itinerary`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_itinerary`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_itinerary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `day_no` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `rank_1` int NOT NULL DEFAULT '1',
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=336 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_itinerary`
--

INSERT INTO `carrrnivaltrips_package_itinerary` (`id`, `package_id`, `day_no`, `name`, `rank_1`, `img`) VALUES
(295, 1, 1, 'Visit the Cellular Jail to learn about its historical significance. Attend the light and sound show ', 3, '851531175.jpeg'),
(294, 1, 1, 'Day 111111', 6, ''),
(293, 1, 1, 'Explore Corbyn-s Cove Beach for a relaxing evening.', 4, ''),
(313, 1, 2, 'Check into your accommodation.', 2, ''),
(314, 1, 2, 'Day _______2__222', 5, ''),
(272, 1, 3, 'Explore the local market and try out some local cuisine.', 2, '490417566.jpeg'),
(285, 1, 4, 'Return to Havelock Island or Port Blair for the night, depending on your schedule.', 4, ''),
(284, 1, 4, 'Take a ferry to Neil Island (Shaheed Dweep).', 1, '1905410177.jpeg'),
(283, 1, 4, 'Visit Laxmanpur Beach and Sitapur Beach for their stunning beauty.', 2, '2110786222.jpeg'),
(280, 1, 5, 'Explore the local markets for souvenirs and enjoy some local cuisine.', 4, ''),
(279, 1, 5, 'Take a day trip to Ross Island (Renamed Netaji Subhash Chandra Bose Island), a historic site with co', 1, '1141999345.jpg'),
(278, 1, 5, 'Visit North Bay Island for water sports activities.', 2, '536175124.jpg'),
(277, 1, 5, 'Return to Port Blair and visit the Anthropological Museum or Samudrika Marine Museum.', 3, '1873503819.jpeg'),
(291, 1, 1, 'Arrive at Veer Savarkar International Airport, Port Blair.', 1, '225126164.jpeg'),
(292, 1, 1, 'Transfer to your hotel and check-in.', 2, '1032588536.jpg'),
(312, 1, 2, 'Take an early morning ferry or flight to Havelock Island (Swaraj Dweep).', 1, ''),
(317, 2, 1, 'Arrive Port Blair – Cellular Jail – Corbyns Cove Beach - Light & Sound show', 1, ''),
(271, 1, 3, 'Day --------3', 4, ''),
(270, 1, 3, 'Visit Elephant Beach or Kalapathar Beach for water sports like snorkeling or scuba diving.', 1, '1729447954.jpg'),
(269, 1, 3, 'Relax at your resort or enjoy a beach bonfire if available.', 3, '560431194.jpg'),
(311, 1, 2, 'Head to Radhanagar Beach, known for its beautiful sunset and clear waters.', 3, ''),
(282, 1, 4, 'Explore Bharatpur Beach for snorkeling or simply relaxing by the beach.', 3, '20586899.jpeg'),
(281, 1, 5, 'Check out from your hotel and head to the airport for your departure.', 5, ''),
(315, 1, 2, 'Enjoy dinner at a local restaurant or beachside café.', 4, ''),
(316, 2, 1, 'Explore Corbyn Cove Beach for a relaxing evening.', 2, ''),
(327, 2, 2, 'day 222', 3, ''),
(318, 2, 1, 'day1', 3, ''),
(319, 2, 1, 'day 11', 4, ''),
(320, 2, 1, 'day 111', 5, ''),
(326, 2, 2, 'day2', 1, ''),
(325, 2, 2, 'day22', 2, ''),
(328, 2, 2, 'day2222', 4, ''),
(330, 2, 3, 'day 3', 1, ''),
(331, 2, 3, 'day 33', 2, ''),
(332, 2, 3, 'day 333', 3, ''),
(333, 2, 4, 'day 4', 1, ''),
(334, 2, 4, 'day 44', 2, ''),
(335, 2, 4, 'day 444', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_itinerary_img`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_itinerary_img`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_itinerary_img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `day_no` int NOT NULL,
  `img_1` varchar(100) NOT NULL,
  `img_2` varchar(100) NOT NULL,
  `img_3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_itinerary_img`
--

INSERT INTO `carrrnivaltrips_package_itinerary_img` (`id`, `package_id`, `day_no`, `img_1`, `img_2`, `img_3`) VALUES
(11, 1, 2, '328295376.jpg', '483807701.jpeg', '1594246239.jpeg'),
(10, 1, 1, '1364903481.jpeg', '1926696386.jpeg', '1781510591.jpg'),
(9, 1, 5, '1026958058.jpg', '139901255.jpeg', '1893963871.jpeg'),
(8, 1, 5, '1026958058.jpg', '139901255.jpeg', '1893963871.jpeg'),
(7, 1, 4, '1460714518.jpg', '143127270.jpeg', '2098952889.jpeg'),
(6, 1, 4, '1460714518.jpg', '143127270.jpeg', '2098952889.jpeg'),
(12, 1, 3, '335312538.jpeg', '1059058947.jpeg', '1777573687.jpg'),
(13, 1, 6, '2049802220.jpeg', '1391639422.jpeg', '1110054959.jpeg'),
(14, 2, 1, '1635775336.jpeg', '777920570.jpeg', '488379141.jpg'),
(15, 2, 2, '711293681.jpeg', '930183296.jpeg', '167789513.jpeg'),
(16, 2, 3, '900677755.jpg', '1557616742.jpeg', '252540948.jpeg'),
(17, 2, 4, '1502146396.jpg', '244673754.jpeg', '621630878.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_special_experiences`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_special_experiences`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_special_experiences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location_wise` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_special_experiences`
--

INSERT INTO `carrrnivaltrips_package_special_experiences` (`id`, `package_id`, `destination`, `location_wise`, `name`, `price`, `discount`, `rank_1`, `img`) VALUES
(102, '1', '', '', 'Candle light dinner at the beach', '2500', 10, 2, '1872033350.jpeg'),
(101, '1', '', '', 'Stay with Beach Properties', '4000', 5, 1, '2023140902.jpeg'),
(99, '1', '', '', 'Stay with Private Pool Rooms', '5000', 20, 4, '1148709381.jpeg'),
(100, '1', '', '', 'Sea Walk at Beach Properties', '1200', 15, 5, '1438071939.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
