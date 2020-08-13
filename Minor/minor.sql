-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2018 at 04:49 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Name`, `Email`, `User_ID`, `password`) VALUES
(1, 'Nikhil Dogra', 'nikhildogra22@gmail.com', 'nikhil', '123456a'),
(3, 'Sumit Kumar', 'sumit@gmail.com', 'sumit', 'sumit123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `tourist_id` int(255) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`tourist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`tourist_id`, `First_Name`, `Last_Name`, `Email`, `Phone_no`, `dob`, `Address`, `User_ID`, `Password`) VALUES
(1, 'Nikhil', 'Dogra', 'nikhil@gmail.com', '9557112267', '1998-09-22', 'Hamirpur', 'nikhil', 'nikhil123'),
(2, 'sumit', 'kumar', 'sumit@gmail.com', '983847535', '2000-03-03', 'kangra', 'sumit', 'sumit123'),
(3, 'rohit', 'rana', 'rana@gmail.com', '9476756645', '1998-11-13', 'hamirpur', 'rana', 'rana123');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

DROP TABLE IF EXISTS `guide`;
CREATE TABLE IF NOT EXISTS `guide` (
  `Guide_id` int(255) NOT NULL AUTO_INCREMENT,
  `Guide_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile_no` int(255) NOT NULL,
  `age` int(2) NOT NULL,
  `language` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`Guide_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`Guide_id`, `Guide_name`, `Email`, `image`, `mobile_no`, `age`, `language`, `location`) VALUES
(1, 'rohit', 'rohit@gmail.com', 'DSC_0571.JPG', 956746745, 20, 'hindi,english,phari', 'hamirpur'),
(3, 'nikhil', 'nikhi@gmail.com', 'DSC_0517.JPG', 894763586, 20, 'hindi', 'kangra'),
(4, 'Rohit Rana', 'rana@gmail.com', 'DSC_0605.JPG', 974854435, 30, 'hindi,phari', 'Shimla'),
(5, 'Sudarshan', 'sudarshansharma223384@gmail.com', 'FB_IMG_1529787573808.jpg', 941832749, 19, 'hindi', 'Hamirpur');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `booking_id` int(255) NOT NULL AUTO_INCREMENT,
  `tourist_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `hotel_id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `no_of_room` int(255) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`booking_id`, `tourist_id`, `customer_name`, `Email`, `Phone_no`, `hotel_id`, `location`, `check_in`, `check_out`, `no_of_room`) VALUES
(1, 1, 'Nikhil Dogra', 'nikhil@gmail.com', '9557799742', 404, 'kangra', '2018-11-20', '2018-11-17', 4),
(3, 1, 'Nikhil Dogra', 'nikhil@gmail.com', '9557112267', 2, 'Shimla', '2018-11-21', '2018-11-22', 3),
(4, 1, 'Nikhil Dogra', 'nikhil@gmail.com', '9557112267', 141, 'manali', '2018-11-17', '2018-11-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_record`
--

DROP TABLE IF EXISTS `hotel_record`;
CREATE TABLE IF NOT EXISTS `hotel_record` (
  `hotel_id` int(255) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price_per_day` int(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_record`
--

INSERT INTO `hotel_record` (`hotel_id`, `hotel_name`, `address`, `price_per_day`, `area`, `contact_no`) VALUES
(1, 'Aashray', 'Shimla', 350, ' Aashray, cart Road', '2806109'),
(2, 'Alakhnanda', 'Shimla', 350, 'Alakhnanda, Fingask', '2801158'),
(3, 'Amba', 'Shimla', 600, 'Amba, Fingask', '2653608'),
(4, 'Anand', 'Shimla', 40, 'Anand, Bus Stand', '2804409'),
(5, 'Aroma bolow', 'Shimla', 400, 'Aroma bolow High Court', '2653833'),
(6, 'Ashirbad', 'Shimla', 225, 'Ashirbad, Bharari Road', '2811752'),
(7, 'Ashoka', 'Shimla', 350, 'Ashoka, Jakhu Road', '2657280'),
(8, 'Auckland', 'Shimla', 1500, 'Auckland,Lakkar Bazzar', '2652621'),
(9, 'Baljees', 'Shimla', 1000, 'Baljees, The Mall', '2652313'),
(10, 'Basera', 'Shimla', 800, 'Basera,Fingask', '2656242'),
(11, 'Bridge View', 'Shimla', 1800, 'Bridge View,The Mall', '2804455'),
(12, 'Broadview', 'Shimla', 850, 'Broadview,Sanjauli', '2841034'),
(13, 'Chaman Palace', 'Shimla', 1200, 'Chaman Palace, Fingask', '2802168'),
(14, 'Cosmos', 'Shimla', 1400, 'Cosmos,The Mall', '2653534'),
(15, 'D Park', 'Shimla', 2200, 'D Park,Kachi Ghati', '2832871'),
(16, 'Doegar', 'Shimla', 2800, 'Doegar,near The Ridge', '2811927'),
(17, 'Greenland', 'Shimla', 2000, 'Greenland,Near Ice Skating Rink', '2655640'),
(18, 'Gulmarg Regency', 'Shimla', 2650, 'Gulmarg Regency,Shimla', '2653168'),
(20, 'Falcon Crest', 'Shimla', 1000, 'Falcon Crest,Shimla', '2804410'),
(21, 'Marina ', 'Shimla', 1500, 'Lakkar Bazaar, The Mall, Jakhu Temple', '2805543'),
(23, 'Landmark', 'Shimla', 2000, 'shimla', '2604844'),
(24, 'Annapurna GH', 'Kangra', 400, 'Kangara', '265039'),
(25, 'Hotel Ashok', 'Kangra', 100, 'Kangara', '265147'),
(26, 'Bajreshwari', 'Kangra', 400, 'Bajreshwari, Main Rd.', '9318798275'),
(28, 'Shanti GH', 'Kangra', 700, 'Shanti GH, Birta', '262819'),
(29, 'Aristocrate Hotel', 'Kangra', 600, ' Shahpur/ Chambi/ Gaggal/ Mataur/ Ghurkri/ Thanpuri/ Nagrota Bhagwan', '252785'),
(30, 'Abhinandan', 'Shimla', 450, ' Chamunda/ Banoi/ Jandrangal Area', '234413'),
(31, 'Amritsar Hotel', 'Kangra', 550, 'Chamunda/ Banoi/ Jandrangal Area', '235762'),
(32, 'Bombay Palace', 'Kangra', 600, 'Chamunda/ Banoi/ Jandrangal Area', '236900'),
(33, 'River Dale Resort', 'Kangra', 600, 'Darnu/ Kandi/ Mohali/Sidhpur/ Chaitru', '241409'),
(34, 'Sajan GH, Barol', 'Kangra', 1000, 'Darnu/ Kandi/ Mohali/Sidhpur/ Chaitru', '224526'),
(35, 'Aakash GH, Jogiwara Rd', 'Kangra', 550, 'Mcleodganj', '221990'),
(36, 'Cheryton Cottage', 'Kangra', 700, 'Mcleodganj', '221993'),
(37, 'Friends Corno', 'Kangra', 800, 'Mcleodganj', '221333'),
(38, '221333', 'Kangra', 900, 'Mcleodganj', '221286'),
(39, 'Kareri Lodge', 'Kangra', 1000, 'Mcleodganj', '221132'),
(40, 'Doli PGH Jibhi', 'Kullu', 300, 'Banjar', '2226734'),
(41, 'Royal Castle PGH Jaipur', 'Kullu', 400, 'Banjar', '227040'),
(42, 'Raja GH, Sojha', 'Kullu', 1000, 'Banjar', '01903-200067'),
(43, 'Nissa Mahal Resorts,Jagatsukh', 'Kullu', 500, 'Naggar', '256134'),
(44, 'Purnima Guest House,Naggar', 'Kullu', 500, 'Naggar', '248219'),
(45, 'Hotel Brighu', 'Kullu', 600, 'Vashishat', '253414'),
(46, 'Hotel Arohi', 'Kullu', 900, 'Vashishat', '254121'),
(47, 'Hotel Surbhi', 'Kullu', 750, 'Vashishat', '253403'),
(48, 'Hotel Dekyid', 'Lahau and Spiti', 700, 'Keylong', '222217'),
(49, 'Khandroling Guest House', 'Lahau and Spiti', 700, 'New Bus Stand', '275665'),
(50, 'Triveni Guest House', 'Lahau and Spiti', 400, 'Sissu', '223435'),
(51, 'Hotel Tashi Deleg', 'Lahau and Spiti', 850, 'Keylong', '222450'),
(53, 'Anant Guest House', 'Mandi', 500, 'Lakhwan Mandi', '268617'),
(54, 'Amit Hotel', 'Mandi', 500, 'Sundernagar', '01907-262387'),
(55, 'Agro Tourism Hotel Jhiri (Nagwain)', 'Mandi', 500, 'Mandi', '01905-287330'),
(56, 'Amar Paying Guest House', 'Mandi', 500, 'Saulikhad', '01905-235193'),
(57, 'Azad Hotel', 'Mandi', 900, 'Seri Bazaar', '01905-222699'),
(58, 'Asha Deep Hotel & Restaurant', 'Mandi', 1000, ' Badanu (Pandoh)', '01905-282262'),
(59, 'Beas View Guest House', 'Mandi', 500, 'Sundernagar', '94180-62508'),
(60, 'Bal Gopal Hotel Jarol', 'Mandi', 800, 'Mandi', '01907-235639'),
(61, 'Bliss Hotel', 'Mandi', 800, 'Saulikhad', '245656'),
(62, 'Comfort Guest House', 'Mandi', 500, 'Rewalsar', '01905-240270'),
(63, 'Comfort Stay Hotel', 'Mandi', 1000, 'Nerchowk', ' 01905-242313'),
(64, 'Jyoti G. House, Sarahan', 'Sirmaur', 300, 'NAHAN / KALA AMB', '01702-2459'),
(65, 'Royal G. House', 'Sirmaur', 650, 'NAHAN / KALA AMB', '01702-223398'),
(66, 'Ashiyana G. House', 'Sirmaur', 800, 'Sarahan', '01799-236864'),
(67, 'Guru Surbhi', 'Sirmaur', 800, 'PAONTA SAHIB', '01704-223670'),
(68, 'Chureshwar Resort, Nohradhar', 'Sirmaur', 800, 'RAJGARH', '098054-22687'),
(69, ' Panchvati Orchard Retreat, Churdhar', 'Sirmaur', 750, 'RAJGARH', '01799-220217'),
(70, 'Diksha, Hotel Habban', 'Sirmaur', 800, 'RAJGARH', '01799-266016'),
(71, ' Camp Roxy', 'Sirmaur', 500, 'RAJGARH', '098053-87505'),
(72, 'Ekant G. House', 'Sirmaur', 800, 'PAONTA SAHIB', '01702-267415'),
(73, 'Gian Hotel', 'Solan', 800, 'Kasauli', '01792-272244'),
(74, 'Anchal Hotel', 'Solan', 900, 'Kasauli', '01792-272341'),
(75, 'MMG House', 'Solan', 950, 'Kasauli', '01792-272135'),
(76, 'Puri Hotel', 'Solan', 800, 'Kasauli', '01792-272273'),
(77, 'Mile Stone Hotel', 'Solan', 500, 'Barog', '01792- 222862'),
(78, 'Roopan G House', 'Solan', 400, 'Barog', '01792-238860'),
(79, 'Dipshikha Hotel', 'Solan', 1000, 'Sanwara', '01792-265215'),
(80, 'New Pine View Hotel', 'Solan', 500, 'Kumarhatti', '2546546'),
(81, 'Raja GHouse', 'Solan', 500, 'Koti', '01792- 277284'),
(82, 'Saloni g House', 'Solan', 450, 'Koti', '01792-277626'),
(83, 'Sharma G House', 'Solan', 500, 'Suzi Jabli', '01792-277985'),
(84, 'Atul G House', 'Solan', 300, 'Parwanoo', '01792-233185'),
(85, 'Highway G House', 'Solan', 650, 'Dharampur', '01792-264283'),
(86, 'Sun Shine Hotel', 'Solan', 1650, 'Parwanoo', '01792-650525'),
(87, 'Dalhousie Palace', 'Chamba', 1000, 'Dalhousie', '01899-240374'),
(88, 'Dhruv GH', 'Chamba', 1000, 'Bharmour', '01895-225408'),
(89, 'E-KANT', 'Chamba', 400, 'Tunnuhatti', '94180-14967'),
(90, 'Fair View', 'Chamba', 550, 'Garam Sarak Dalhousie', ' 01899-42206'),
(91, 'Forest GH', 'Chamba', 350, ' Near Bus stand Dalhousie', '018992-42533'),
(92, 'Gautam GH', 'Chamba', 700, 'Khajjiar', '236355'),
(93, 'Geetanjali, HPTDC', 'Chamba', 800, 'Thandi Sarak Dalhousie', '01899-242155'),
(94, 'Gohar', 'Chamba', 600, 'Subash nagar Dalhousie', '01899-242253'),
(95, 'Himdhara', 'Chamba', 900, 'Church Baloon Road Dalhousie', '01899-242386'),
(96, 'Himgiri', 'Chamba', 900, 'Near Bus Stand Dalhousie', '01899-242386'),
(97, 'Mahajan GH', 'Chamba', 400, 'Dogra bazar Chamba', '222570'),
(98, 'Nest', 'Chamba', 900, 'Baloon Cantt Dalhousie', '01899-242505'),
(99, 'New Metro', 'Chamba', 1000, 'Subhash Chowk Dalhousie', '01899-242775'),
(100, 'Other side H2O', 'Chamba', 700, 'Chiminu', '267856'),
(101, 'Pearls', 'Chamba', 700, 'Subhash Chowk Dalhousie T', '01899-240269'),
(102, 'Karan Hotel', 'Hamirpur', 700, 'Nr. Bhota Chowk, H/pur.', '224521'),
(103, 'Maya Hotel', 'Hamirpur', 950, 'Nr. Bus Stand, H/pur.', '01972-222737'),
(104, 'Rajindra Palace', 'Hamirpur', 650, 'Gagal', '01972-233718'),
(105, 'Hotel Amar', 'Hamirpur', 550, 'Sujanpur', '2454657'),
(106, 'Sun Sky', 'Hamirpur', 800, 'Bassi', '01972-265065'),
(107, 'Sai Guest House', 'Hamirpur', 900, 'Dugha', ' 01972-258852'),
(108, ' Akash Ganga Guest House', 'Bilaspur', 150, 'Bilaspur', '01978-222672'),
(109, 'Baba Balak Nath Guest House', 'Bilaspur', 400, 'Shah Talai', '94181-45798'),
(110, 'Bittu Guest House & Restaurant', 'Bilaspur', 400, 'Ghumarwin', '01978-254057'),
(111, 'Diamond Hotel', 'Bilaspur', 600, 'Kutehla', '94183-04032'),
(112, 'Green Valley Hotel', 'Bilaspur', 1000, 'Shah Talai', '01978-264307'),
(113, 'Grover Regency Hotel', 'Bilaspur', 500, 'Sri Nainadeviji', '098140-16756'),
(114, 'Himsikhar Hotel & Restaurant', 'Bilaspur', 700, 'Sungal', '98170-71154'),
(115, 'Moon Hotel', 'Bilaspur', 1000, 'Shah Talai', '94181-45261'),
(116, 'Prem Sagar Hotel', 'Bilaspur', 700, 'Badhyat', '01978-221590'),
(117, 'Raja Hotel & Restaurant', 'Bilaspur', 1000, 'Namhol', '98162-91719'),
(118, 'Swagat Guest House', 'Bilaspur', 850, 'Bairi', '01978-245574'),
(119, 'Shiwalik Hotel & Restaurant', 'Bilaspur', 1000, 'Lakhanpur', ' 01978-223547'),
(120, 'City Lodge', 'Una', 700, 'Una Town', '227590'),
(121, 'Ganga Lodge', 'Una', 750, 'Una Town', '223432'),
(122, 'Vinayak Guest House', 'Una', 700, 'Una Town', '227786'),
(123, 'Mid Point Hotel,Bar & Restaurant', 'Una', 800, 'Una Town', '228313'),
(124, 'Budha Hotel', 'Una', 850, 'Mehatpur', '232131'),
(125, 'City Heart Hotel', 'Una', 650, 'Amb', '01976-260033'),
(126, ' Sudha GH', 'Una', 900, 'Amb', '01976-261128'),
(127, 'Hotel Mayaji', 'Una', 800, 'Chintpurni', '98166-20440'),
(128, 'Phullan wala Khuh', 'Una', 650, 'Gagret', ' 01976-241325'),
(129, ' Savera Hotel', 'Una', 550, 'MUBARIKPUR', ' 01976-241200'),
(130, 'Ashoka', 'Kinnaur', 700, 'Kalpa', '01786-226006'),
(131, 'Aucktong', 'Kinnaur', 900, 'Kalpa', '01786-226322'),
(133, 'Surya', 'Kinnaur', 400, 'R/Peo', ' 01786-222418'),
(134, 'Fairyland', 'Kinnaur', 550, 'R/Peo', '01786-222477'),
(135, 'Jeevan Jyoti', 'Kinnaur', 700, 'R/Peo', '01786-222512'),
(136, 'Apple GH', 'Kinnaur', 700, 'Sangla', '2454566'),
(137, 'Ashiana', 'Kinnaur', 400, 'Sangla', '94187-55331'),
(138, 'Garden View', 'Kinnaur', 300, 'Chango', '01786-262005'),
(139, 'Panma', 'Kinnaur', 500, 'Kafnoo', ' 01786-254237'),
(140, 'Thakur, GH', 'Kinnaur', 400, 'Chhitkul', '1786-262405'),
(141, 'Hotel Ambika', 'Manali', 800, 'Near model town', '252203'),
(142, 'Hotel Alpine', 'Manali', 800, 'Hadimba rd.Manali', '253329'),
(143, 'Hotel Anupum', 'Manali', 450, 'The Mall Manali', '252181'),
(144, 'Hotel Aroma', 'Manali', 1000, 'Model Town Manal', '253129'),
(145, 'Hotel Beas Regency', 'Manali', 450, 'At Rangri on NH-21', '252194'),
(146, 'Hotel Bulbul', 'Manali', 900, 'Model town Manali', '254235'),
(147, 'Hotel Gilbert', 'Manali', 500, 'Circuit House Rd.Manal', '252550'),
(148, 'Glacier Resorts', 'Manali', 2800, 'On Hadimba Devi road', '253195'),
(149, 'Hotel Himanshu Resorts', 'Manali', 450, 'Gurudwara Road', '252416'),
(150, 'Hotel Hill Queen', 'Manali', 600, 'Model Town,Manali', '252162'),
(151, 'Hotel Holiday Home International', 'Manali', 1800, 'Nr.circuit house', '252101'),
(152, 'Him Paying Guest House', 'Manali', 450, 'Nr.Model town', '2423546');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `booking_id` int(255) NOT NULL AUTO_INCREMENT,
  `tourist_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `transport_id` int(3) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`booking_id`, `tourist_id`, `customer_name`, `Email`, `Phone_no`, `transport_id`, `vehicle`, `from_date`, `to_date`, `time`, `location`) VALUES
(6, 2, 'sumit kumar', 'sumit@gmail.com', '983847535', 101, 'bus', '2018-11-15', '2018-11-17', '15:00:00', 'kangra'),
(4, 1, 'Nikhil Dogra', 'nikhil@gmail.com', '9557799742', 303, 'car', '2018-11-17', '2018-11-21', '05:00:00', 'hamirpur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
