-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2024 at 04:18 AM
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
-- Table structure for table `carrrnivaltrips_package`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `night` varchar(100) NOT NULL,
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
  `package_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package`
--

INSERT INTO `carrrnivaltrips_package` (`id`, `package_name`, `day`, `night`, `s1_text1`, `s1_anim_text2`, `s1_text3`, `s1_btn1`, `s1_btn2`, `s1_img`, `s1_squre_box_text`, `s2_text1`, `s2_anim_text2`, `s2_text3`, `s2_btn1`, `s2_btn2`, `s2_img`, `s2_squre_box_text`, `s3_text1`, `s3_anim_text2`, `s3_text3`, `s3_btn1`, `s3_btn2`, `s3_img`, `s3_squre_box_text`, `package_status`) VALUES
(1, 'Andaman ', '6', '4', 'Here is your customized itinerary', 'Fun Filling', 'Thanks For Choosing Carrnival Trips!', 'Let,s get started', 'Who we are', '1694553924.jpg', 'Booking', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips! 2', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking 2', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips! 3', 'Let,s get started 3', 'Who we are 3', '2147348088.jpg', 'Booking 3', 'Active'),
(2, 'Sikim', '7', '6', '', '', '', '', '', '1001057915.jpg', '', '', '', '', '', '', '1390332316.jpg', '', '', '', '', '', '', '844050082.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_activities`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_activities`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_activities`
--

INSERT INTO `carrrnivaltrips_package_activities` (`id`, `package_id`, `name`, `price`, `img`) VALUES
(1, 0, 'sc', '', ''),
(149, 1, 'Banana Boat Ride', '3500', '428514327.jpeg'),
(148, 1, 'Scuba Diving ( boat )', '4000', '534204598.jpg'),
(147, 1, ' Scuba Diving (shore )', '3500', '1363851971.jpg'),
(146, 1, 'Snorkeling', '1100', '472210220.jpg'),
(145, 1, 'Sea Walk  Sea Walk', '3500', '1583133004.jpg'),
(144, 1, 'Parasailing', '3500', '299071191.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_adventure_activities`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_adventure_activities`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_adventure_activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_adventure_activities`
--

INSERT INTO `carrrnivaltrips_package_adventure_activities` (`id`, `package_id`, `name`, `price`, `img`) VALUES
(18, '1', ' Game Fishing', '3599', '2025791962.jpeg'),
(19, '1', 'Water Sports', '4500', '32579070.jpg'),
(20, '1', 'Sea walk', '1899', '867900170.jpeg'),
(17, '1', 'Boat diving', '3000', '362453160.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_best_scenic_places`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_best_scenic_places`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_best_scenic_places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_best_scenic_places`
--

INSERT INTO `carrrnivaltrips_package_best_scenic_places` (`id`, `package_id`, `name`, `price`, `img`) VALUES
(17, '1', 'Cellular Jail', '2500', '138599597.jpeg'),
(18, '1', ' Baratang & Limestone caves', '2800', '1789808842.jpeg'),
(16, '1', 'Elephanta Beach', '3200', '1189797442.jpeg'),
(15, '1', ' Laxmanpur Beach', '2800', '1636320715.jpeg'),
(14, '1', ' Radhanagar beach', '3500', '1311511472.jpeg'),
(19, '1', 'Diglipur', '1800', '1105037742.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_itinerary`
--

INSERT INTO `carrrnivaltrips_package_itinerary` (`id`, `package_id`, `day_no`, `name`, `rank_1`, `img`) VALUES
(227, 1, 2, 'Enjoy dinner at a local restaurant or beachside café.', 4, ''),
(216, 1, 1, 'Visit the Cellular Jail to learn about its historical significance. Attend the light and sound show ', 3, ''),
(214, 1, 1, 'Transfer to your hotel and check-in.', 2, '177280921.jpeg'),
(215, 1, 1, 'Arrive at Veer Savarkar International Airport, Port Blair.', 1, ''),
(235, 1, 3, 'Relax at your resort or enjoy a beach bonfire if available.', 3, ''),
(226, 1, 2, 'Take an early morning ferry or flight to Havelock Island (Swaraj Dweep).', 1, ''),
(225, 1, 2, 'Check into your accommodation.', 2, ''),
(234, 1, 3, 'Explore the local market and try out some local cuisine.', 2, ''),
(233, 1, 3, 'Visit Elephant Beach or Kalapathar Beach for water sports like snorkeling or scuba diving.', 1, ''),
(200, 1, 4, 'Take a ferry to Neil Island (Shaheed Dweep).', 1, ''),
(201, 1, 4, 'Visit Laxmanpur Beach and Sitapur Beach for their stunning beauty.', 2, ''),
(202, 1, 4, 'Explore Bharatpur Beach for snorkeling or simply relaxing by the beach.', 3, ''),
(203, 1, 4, 'Return to Havelock Island or Port Blair for the night, depending on your schedule.', 4, ''),
(211, 1, 5, 'Return to Port Blair and visit the Anthropological Museum or Samudrika Marine Museum.', 3, ''),
(210, 1, 5, 'Visit North Bay Island for water sports activities.', 2, ''),
(209, 1, 5, 'Take a day trip to Ross Island (Renamed Netaji Subhash Chandra Bose Island), a historic site with co', 1, ''),
(212, 1, 5, 'Explore the local markets for souvenirs and enjoy some local cuisine.', 4, ''),
(213, 1, 5, 'Check out from your hotel and head to the airport for your departure.', 5, ''),
(217, 1, 1, 'Explore Corbyn-s Cove Beach for a relaxing evening.', 4, ''),
(224, 1, 2, 'Head to Radhanagar Beach, known for its beautiful sunset and clear waters.', 3, ''),
(232, 2, 1, 'Explore Corbyn Cove Beach for a relaxing evening.', 2, ''),
(231, 2, 1, 'Arrive Port Blair – Cellular Jail – Corbyns Cove Beach - Light & Sound show', 1, ''),
(236, 1, 3, 'Day --------3', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `carrrnivaltrips_package_special_experiences`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package_special_experiences`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package_special_experiences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_special_experiences`
--

INSERT INTO `carrrnivaltrips_package_special_experiences` (`id`, `package_id`, `name`, `price`, `img`) VALUES
(40, '1', 'Stay with Private Pool Rooms', '5000', '1148709381.jpeg'),
(41, '1', 'Candle light dinner at the beach', '2500', '1872033350.jpeg'),
(39, '1', 'Sea Walk', '1200', '1438071939.jpeg'),
(38, '1', 'Stay with Beach Properties', '3000', '2023140902.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
