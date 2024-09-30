-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2024 at 03:17 PM
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

INSERT INTO `carrnivaltrips_details` (`id`, `exp_media_link`, `exp_details`, `exp_p1_heading`, `exp_p1_details`, `exp_p2_heading`, `exp_p2_details`, `exp_p3_heading`, `exp_p3_details`, `exp_p4_heading`, `exp_p4_details`, `exp_p5_heading`, `exp_p5_details`, `exp_p6_heading`, `exp_p6_details`, `payment_policy1`, `payment_policy2`, `payment_policy3`, `payment_policy4`, `payment_policy5`, `payment_policy6`, `contact_person`, `contact_text`, `contact_media_link`, `contact_ph`, `achievement_heading`, `achievement_description`, `achievement_btn`, `achievement_title1`, `achievement_count1`, `achievement_title2`, `achievement_count2`, `achievement_title3`, `achievement_count3`, `achievement_title4`, `achievement_count4`, `why_carrnival_heading`, `why_carrnival_title1`, `why_carrnival_title2`, `why_carrnival_title3`, `why_carrnival_title4`, `why_carrnival_title5`, `why_carrnival_title6`, `why_carrnival_description1`, `why_carrnival_description2`, `why_carrnival_description3`, `why_carrnival_description4`, `why_carrnival_description5`, `why_carrnival_description6`) VALUES
(1, 'https://youtu.be/HuLWZHfIzJE?si=dFIU3-YLAMhLgd5w', 'Welcome to our Print 128 website! We are a professional and reliable printing company that offers a wide range of printin                                                                               ', 'Curated Itinerary', 'Welcome to our Print 128 web company that offers a wide ', 'Quick Response', 'Welcome to our Print 128 web company that offers a wide ', ' In-house on ground team', 'Welcome to our Print 128 web company that offers a wide ', 'Quality Assurance', 'Welcome to our Print 128 web company that offers a wide ', ' Pre-Purchased Hotel Inventory', 'Welcome to our Print 128 web company that offers a wide ', 'Dedicated Support Team', 'Welcome to our Print 128 web company that offers a wide ', 'Flexible Payment Policy', 'Flexible Cancellation Charges', 'Minimum Booking Amount', 'Rescheduling in case of Emergencies', 'Easy EMI/Finance Option at 0% for 06 M', '', 'Richa', 'NEED MORE CUSTOMIZATION CONNECT WITH OUR DESTINATION EXPERT', 'https://youtu.be/6uKDgTSVfHE?si=i-b76zCeHPxRHXEs', '9213879313', 'Ready to adventure and enjoy natural', 'Lorem ipsum dolor sit amet, consectetur notted adi', 'Connect Us', 'Happy Traveller', '5489', 'Postive Reviews', '100', 'Tour Completed', '190', 'Awards Winning', '5489', 'WHY CARRNIVAL TRIPS', 'Bullet points and video', 'Best planned customised itinerary', 'Best in class hotel selection in that segment', 'Guided Trip', 'No Hidden costs', 'No false promises', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri', 'Support reps often have to write summaries before handing professional guidebooks conversations over to teammates. With the summarization so sp feature, a support rep can now simply click reliable pri');

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
  `price` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_hotel`
--

INSERT INTO `carrnivaltrips_hotel` (`id`, `destination`, `location_wise`, `category_wise`, `name`, `price`, `img1`) VALUES
(1, 'Andaman', 'Diglipur', 'Super Dulax', 'Hotel Sea view', '5000', '1459505106.jpeg'),
(2, 'Andaman', 'Portbair', 'Super Dulax', 'ABC pvt ltd', '600', '951659018.jpeg');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrnivaltrips_hotel_category`
--

INSERT INTO `carrnivaltrips_hotel_category` (`id`, `destination`, `location_wise`, `category_wise`) VALUES
(1, 'Andaman', 'Portbair', 'Super Dulax'),
(2, 'Andaman', 'Nicobar Islands', 'Luxury'),
(3, 'Andaman', 'Diglipur', 'Dulax');

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
-- Table structure for table `carrrnivaltrips_package`
--

DROP TABLE IF EXISTS `carrrnivaltrips_package`;
CREATE TABLE IF NOT EXISTS `carrrnivaltrips_package` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) NOT NULL,
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
(1, 'Andaman ', '5', '4', '6314203.jpg', 'Active', 'Here is your customized itinerary', 'Fun Filling, Refreshing Trips1', 'Thanks For Choosing Carrnival Trips!1234', 'Let,s get started1234', 'Who we are', '785242422.jpg', 'Booking199', 'Here is your customized itinerary', 'Refreshing', 'Thanks For Choosing Carrnival Trips!2222', 'Let,s get started 2', 'Who we are 2', '1820919533.jpg', 'Booking222', 'Here is your customized itinerary', 'Memorable Experience', 'Thanks For Choosing Carrnival Trips!5555', 'Let,s get started 3', 'Who we are 3', '1457932064.jpg', 'Booking322'),
(2, 'Sikim', '4', '3', '1571322428.jpg', 'Upcoming', 'Here is your customized itinerary1', 'Fun Filling', 'Thanks For Choosing Carrnival Trips!', 'Let,s get started', 'button', '1001057915.jpg', 'Booking1', 'Here is your customized itinerary1', 'refresing', '', 'Let,s get started 2', '', '1390332316.jpg', 'Booking 22', 'Here is your customized itinerary1', 'fun filling', '', '', '', '844050082.jpg', '');

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
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=284 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_activities`
--

INSERT INTO `carrrnivaltrips_package_activities` (`id`, `package_id`, `name`, `price`, `img`, `discount`, `rank_1`) VALUES
(281, 1, 'Snorkeling', '1100', '472210220.jpg', 7, 3),
(282, 1, 'Parasailing', '3500', '299071191.jpg', 10, 1),
(283, 1, ' Scuba Diving (shore )', '3500', '1363851971.jpg', 5, 6),
(280, 1, 'Banana Boat Ride', '4500', '428514327.jpeg', 7, 4),
(278, 1, 'Scuba Diving ( boat )', '3900', '534204598.jpg', 10, 2),
(279, 1, 'Sea Walk  Sea Walk', '3500', '1583133004.jpg', 0, 5);

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
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_adventure_activities`
--

INSERT INTO `carrrnivaltrips_package_adventure_activities` (`id`, `package_id`, `name`, `price`, `discount`, `rank_1`, `img`) VALUES
(49, '1', 'Boat diving', '3000', 7, 3, '362453160.jpeg'),
(50, '1', ' Game Fishing', '3599', 10, 4, '2025791962.jpeg'),
(48, '1', 'Water Sports', '4500', 20, 1, '32579070.jpg'),
(47, '1', 'Sea walk', '1899', 10, 2, '867900170.jpeg');

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
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_best_scenic_places`
--

INSERT INTO `carrrnivaltrips_package_best_scenic_places` (`id`, `package_id`, `name`, `price`, `img`, `discount`, `rank_1`) VALUES
(243, '1', 'Diglipur', '1200', '1105037742.jpg', 10, 8),
(244, '1', ' Radhanagar beach', '3500', '1311511472.jpeg', 20, 5),
(245, '1', ' Laxmanpur Beach', '2800', '1636320715.jpeg', 15, 2),
(242, '1', 'Elephanta Beach', '3200', '1189797442.jpeg', 10, 1),
(240, '1', 'Cellular Jail', '2500', '138599597.jpeg', 20, 4),
(241, '1', ' Baratang & Limestone caves', '2800', '1789808842.jpeg', 30, 6);

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
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` int NOT NULL,
  `rank_1` int NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carrrnivaltrips_package_special_experiences`
--

INSERT INTO `carrrnivaltrips_package_special_experiences` (`id`, `package_id`, `name`, `price`, `discount`, `rank_1`, `img`) VALUES
(102, '1', 'Candle light dinner at the beach', '2500', 10, 2, '1872033350.jpeg'),
(101, '1', 'Stay with Beach Properties', '4000', 5, 1, '2023140902.jpeg'),
(99, '1', 'Stay with Private Pool Rooms', '5000', 20, 4, '1148709381.jpeg'),
(100, '1', 'Sea Walk at Beach Properties', '1200', 15, 5, '1438071939.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
