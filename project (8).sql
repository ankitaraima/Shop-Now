-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 09:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `Serial_no` int(255) NOT NULL,
  `Product_no` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`Serial_no`, `Product_no`, `Email`) VALUES
(1648, '58', 'pritha.ani@gmail.com'),
(1649, '59', 'pritha.ani@gmail.com'),
(1650, '66', 'pritha.ani@gmail.com'),
(1651, '70', 'pritha.ani@gmail.com'),
(1652, '75', 'pritha.ani@gmail.com'),
(1653, '79', 'pritha.ani@gmail.com'),
(1666, '40', 'ankita.raima@gmail.com'),
(1669, '38', 'ankita.raima@gmail.com'),
(1672, '33', 'ankita.raima@gmail.com'),
(1673, '57', 'dey.sk66@gmail.com'),
(1674, '65', 'dey.sk66@gmail.com'),
(1675, '96', 'anisha.bose@gmail.com'),
(1676, '33', 'anisha.bose@gmail.com'),
(1677, '37', 'anisha.bose@gmail.com'),
(1678, '39', 'anisha.bose@gmail.com'),
(1679, '40', 'anisha.bose@gmail.com'),
(1680, '57', 'anisha.bose@gmail.com'),
(1681, '58', 'anisha.bose@gmail.com'),
(1682, '60', 'anisha.bose@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `Serial_no` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Phone_no` varchar(100) NOT NULL,
  `Photo_id` varchar(256) NOT NULL,
  `Allow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`Serial_no`, `Name`, `Email`, `Gender`, `Password`, `Phone_no`, `Photo_id`, `Allow`) VALUES
(1, 'Ankita Dey', 'ankita.raima@gmail.com', 'female', '040901', '9434800080', '', 'allowed');

-- --------------------------------------------------------

--
-- Table structure for table `buyerdetails`
--

CREATE TABLE `buyerdetails` (
  `Serial_no` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone_no` varchar(25) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `State` varchar(256) NOT NULL,
  `Photo_Id` varchar(255) NOT NULL,
  `Allow` varchar(255) DEFAULT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerdetails`
--

INSERT INTO `buyerdetails` (`Serial_no`, `Name`, `Gender`, `Email`, `Username`, `Password`, `Phone_no`, `City`, `Address`, `State`, `Photo_Id`, `Allow`, `Question`, `Answer`) VALUES
(1, 'Gita Das', 'female', 'ankita.raima@gmail.com', 'Ankita_01', '090401', '9434800080', 'Purba Bardhaman', 'Kalnaroad Pirpukur Burdwan,713101,House no-63', 'West Bengal', '120230423060334.jpeg', 'allowed', 'What is your pet name ?', 'gublu'),
(5, 'Pritha Gupta', 'female', 'pritha.ani@gmail.com', 'Ani19', 'ani', '9474060000', 'Purba Bardhaman', 'Kalnaroad Pirpukur Burdwan,713101,House no-63', 'West Bengal', '520230423055212.jpeg', 'restricted', 'What is your pet name ? ', 'gublu'),
(6, 'Sayan Majumder', 'male', 'dey.sk66@gmail.com', 'sanjib', 'sanjib', '9474060606', 'Purba Bardhaman', 'Kalnaroad Pirpukur Burdwan,713101,House no-63', 'West Bengal', '', 'allowed', 'What is your pet name ? ', 'gublu'),
(7, 'Anita Roy', 'female', 'aanita@gmail.com', 'anita', 'anita', '9434633000', 'Burdwan', 'Kalnaroad Pirpukur Burdwan,713101,House no-63', 'West Bengal', '', 'allowed', 'What is your pet name ? ', 'gublu'),
(8, 'Anisha Bose', 'female', 'anisha.bose@gmail.com', 'anisha01', 'anisha', '9875332155', 'Purba Bardhaman', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103', 'West Bengal', '', 'allowed', 'What is your nickname ?', 'anisha');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Serial_no` int(255) NOT NULL,
  `Email` varchar(256) DEFAULT NULL,
  `User_Type` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Feedback` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Serial_no`, `Email`, `User_Type`, `Date`, `Rating`, `Feedback`) VALUES
(1, 'ankita.raima@gmail.com', 'Buyer', '03-05-2023', '5', 'Your website is a one-stop-shop for all my daily needs. I love how easy it is to find everything I need, from fresh produce to office supplies to sweet treats. Your selection is fantastic and the prices are unbeatable. The checkout process is quick and has'),
(6, 'sharmila.samanta01@gmail.com', 'Buyer', '03-05-2023', '3', 'Great website I love the variety of products you offer. From groceries to stationary to confectionary, you have everything I need in one place. The website is easy to navigate and I appreciate the clear descriptions and photos of each product. The checkout'),
(7, 'kesari.puja@gmail.com', 'Seller', '21-05-2023', '5', 'bhlo');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Serial_no` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Product_no` int(11) NOT NULL,
  `Seller_Email` varchar(255) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `no_item` varchar(40) NOT NULL,
  `Weight` varchar(256) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Order_Date` varchar(255) NOT NULL,
  `Price` int(25) NOT NULL,
  `Delivery_Status` varchar(255) NOT NULL,
  `Delivery_Date` varchar(255) NOT NULL,
  `Order_Id` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Serial_no`, `Name`, `Email`, `Phone_no`, `Address`, `Product_no`, `Seller_Email`, `Product_name`, `Brand`, `no_item`, `Weight`, `Date`, `Order_Date`, `Price`, `Delivery_Status`, `Delivery_Date`, `Order_Id`) VALUES
(294, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 37, 'anapurna.bhandar@gmail.com', 'Quaker Oats 2kg | Rolled Oats | 100% Natural Wholegrain | Nutritious Breakfast Cereals | Porridge | Easy to Cook', 'ITC', '1', '2kg', '29/05/23', '24/05/23', 368, 'Delivered', '17/06/23', '120230524054631'),
(295, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '29/05/23', '24/05/23', 150, 'Delivered', '18/06/23', '120230524054631'),
(296, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 39, 'anapurna.bhandar@gmail.com', 'Dabur Gluco Plus C Lemon', 'DABUR', '1', '400gm', '29/05/23', '24/05/23', 146, 'Delivered', '25/05/23', '120230524054631'),
(297, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '29/05/23', '24/05/23', 150, 'Cancelled', '', '120230524062849'),
(299, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 40, 'anapurna.bhandar@gmail.com', 'Keya Penne Pasta 1kg,100% Durum Wheat Pasta | Vegetarian | No MSG | Low in Calories | No Trans Fats | Healthy | Cooked in 10 Minutes', 'KEYA', '1', '1000 Grams', '30/05/23', '25/05/23', 99, 'Cancelled', '', '120230525050402'),
(300, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 37, 'anapurna.bhandar@gmail.com', 'Quaker Oats 2kg | Rolled Oats | 100% Natural Wholegrain | Nutritious Breakfast Cereals | Porridge | Easy to Cook', 'ITC', '1', '2kg', '30/05/23', '25/05/23', 368, 'Delivered', '27/05/23', '120230525050402'),
(302, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 40, 'anapurna.bhandar@gmail.com', 'Keya Penne Pasta 1kg,100% Durum Wheat Pasta | Vegetarian | No MSG | Low in Calories | No Trans Fats | Healthy | Cooked in 10 Minutes', 'KEYA', '3', '1000 Grams', '28/05/23', '27/05/23', 347, 'Delivered', '28/05/23', '120230527092137'),
(305, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '01/06/23', '27/05/23', 150, 'Delivered', '01/06/23', '120230527093144'),
(306, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 43, 'anapurna.bhandar@gmail.com', 'Tata Sampann Unpolished Moong Dal Chilka', 'Tata Sampann', '1', '500g', '22/06/23', '17/06/23', 84, 'Delivered', '17/06/23', '120230617083139'),
(307, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 43, 'anapurna.bhandar@gmail.com', 'Tata Sampann Unpolished Moong Dal Chilka', 'Tata Sampann', '1', '500g', '18/06/23', '17/06/23', 134, 'Cancelled', '', '120230617083349'),
(308, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 43, 'anapurna.bhandar@gmail.com', 'Tata Sampann Unpolished Moong Dal Chilka', 'Tata Sampann', '1', '500g', '18/06/23', '17/06/23', 134, 'Order Confirmed', '', '120230617083351'),
(309, 'Sanjib Kumar Dey', 'dey.sk66@gmail.com', '9474060606', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 57, 'kesari.puja@gmail.com', 'Maaza Mango Drink, Original Flavour', 'Mazza', '1', '1.2L', '22/06/23', '17/06/23', 60, 'Order Confirmed', '', '620230617063424'),
(310, 'Sanjib Kumar Dey', 'dey.sk66@gmail.com', '9474060606', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 65, 'kesari.puja@gmail.com', 'Nestle Munch Chocolate Coated Crunchy Wafer Share Pack', 'Nestle', '1', '160.2 g|18 Units - 8.9 g each', '22/06/23', '17/06/23', 73, 'Order Confirmed', '', '620230617063424'),
(311, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618054547'),
(312, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618054620'),
(313, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618054638'),
(314, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618054723'),
(315, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618054849'),
(316, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618054925'),
(317, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '23/06/23', '18/06/23', 150, 'Cancelled', '', '120230618055036'),
(318, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 96, 'kishor.pal@gmail.com', 'Fortune Chakki Fresh Atta, 10 kg', 'Fortune', '1', '10kg', '28/06/23', '23/06/23', 441, 'Order Confirmed', '', '820230623065618'),
(319, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 96, 'kishor.pal@gmail.com', 'Fortune Chakki Fresh Atta, 10 kg', 'Fortune', '1', '10kg', '24/06/23', '23/06/23', 491, 'Order Confirmed', '', '820230623065739'),
(320, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '24/06/23', '23/06/23', 200, 'Order Confirmed', '', '820230623065739'),
(321, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 37, 'anapurna.bhandar@gmail.com', 'Quaker Oats 2kg | Rolled Oats | 100% Natural Wholegrain | Nutritious Breakfast Cereals | Porridge | Easy to Cook', 'ITC', '1', '2kg', '24/06/23', '23/06/23', 418, 'Order Confirmed', '', '820230623065739'),
(322, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 39, 'anapurna.bhandar@gmail.com', 'Dabur Gluco Plus C Lemon', 'DABUR', '1', '400gm', '24/06/23', '23/06/23', 196, 'Order Confirmed', '', '820230623065739'),
(323, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 40, 'anapurna.bhandar@gmail.com', 'Keya Penne Pasta 1kg,100% Durum Wheat Pasta | Vegetarian | No MSG | Low in Calories | No Trans Fats | Healthy | Cooked in 10 Minutes', 'KEYA', '1', '1000 Grams', '24/06/23', '23/06/23', 149, 'Order Confirmed', '', '820230623065739'),
(324, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 57, 'kesari.puja@gmail.com', 'Maaza Mango Drink, Original Flavour', 'Mazza', '1', '1.2L', '24/06/23', '23/06/23', 110, 'Order Confirmed', '', '820230623065739'),
(325, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 58, 'kesari.puja@gmail.com', '7 Up Soft Drink', '7 Up', '1', '2.25L ', '24/06/23', '23/06/23', 137, 'Order Confirmed', '', '820230623065739'),
(326, 'Anisha Bose', 'anisha.bose@gmail.com', '9875332155', '6VPC+JP7, Kalibazar Road East, Kalibazar Rd E, Badamtala, Kalibazar, Bardhaman, West Bengal 713103 , Purba Bardhaman, West Bengal', 60, 'kesari.puja@gmail.com', 'Thums Up Soft Drink', 'Thums Up', '1', '2.25L', '24/06/23', '23/06/23', 134, 'Order Confirmed', '', '820230623065739'),
(327, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 40, 'anapurna.bhandar@gmail.com', 'Keya Penne Pasta 1kg,100% Durum Wheat Pasta | Vegetarian | No MSG | Low in Calories | No Trans Fats | Healthy | Cooked in 10 Minutes', 'KEYA', '1', '1000 Grams', '29/06/23', '24/06/23', 99, 'Order Confirmed', '', '120230624103635'),
(328, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 38, 'anapurna.bhandar@gmail.com', 'Saffola Honey Gold, 100% Pure NMR Tested Honey, Made with Kashmir Honey', 'Saffola', '1', '1000 Grams', '29/06/23', '24/06/23', 370, 'Order Confirmed', '', '120230624103635'),
(329, 'Ankita Dey', 'ankita.raima@gmail.com', '9434800080', 'Kalnaroad Pirpukur Burdwan,713101,House no-63 , Purba Bardhaman, West Bengal', 33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', '1', '1 Litres, 1000 Millilitres', '29/06/23', '24/06/23', 150, 'Order Confirmed', '', '120230624103635');

-- --------------------------------------------------------

--
-- Table structure for table `productrating`
--

CREATE TABLE `productrating` (
  `Serial_no` int(11) NOT NULL,
  `Product_no` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productrating`
--

INSERT INTO `productrating` (`Serial_no`, `Product_no`, `Email`, `rating`, `Feedback`, `Date`) VALUES
(6, 26, 'ankita.raima@gmail.com', '1', 'khub baje aattaa!! gol ruti hcche na', '2023-04-08'),
(7, 26, 'pritha.ani@gmail.com', '2', 'bhaloi', '2023-04-08'),
(8, 18, 'ankita.raima@gmail.com', '5', 'khubbbbhalo', '2023-04-11'),
(9, 23, 'ankita.raima@gmail.com', '5', 'bhalo', '2023-04-13'),
(10, 25, 'ankita.raima@gmail.com', '1', 'bhalo', '2023-04-11'),
(11, 28, 'ankita.raima@gmail.com', '', 'bhlo', '2023-04-17'),
(12, 28, 'pritha.ani@gmail.com', '', 'bhalo na', '2023-04-17'),
(13, 38, 'ankita.raima@gmail.com', '5', '', ''),
(14, 32, 'ankita.raima@gmail.com', '4', '', ''),
(16, 52, 'ankita.raima@gmail.com', '5', '', ''),
(18, 57, 'ankita.raima@gmail.com', '5', 'bhalo\n', '2023-04-23'),
(19, 58, 'ankita.raima@gmail.com', '5', '', ''),
(20, 59, 'ankita.raima@gmail.com', '5', '', ''),
(21, 60, 'ankita.raima@gmail.com', '4', '', ''),
(22, 61, 'ankita.raima@gmail.com', '2', '', ''),
(23, 62, 'ankita.raima@gmail.com', '5', '', ''),
(24, 64, 'ankita.raima@gmail.com', '3', '', ''),
(25, 63, 'ankita.raima@gmail.com', '5', '', ''),
(26, 65, 'ankita.raima@gmail.com', '3', '', ''),
(27, 66, 'ankita.raima@gmail.com', '2', '', ''),
(28, 67, 'ankita.raima@gmail.com', '5', '', ''),
(29, 68, 'ankita.raima@gmail.com', '5', '', ''),
(30, 69, 'ankita.raima@gmail.com', '3', '', ''),
(31, 70, 'ankita.raima@gmail.com', '4', '', ''),
(32, 71, 'ankita.raima@gmail.com', '2', '', ''),
(33, 72, 'ankita.raima@gmail.com', '4', '', ''),
(34, 73, 'ankita.raima@gmail.com', '4', '', ''),
(35, 74, 'ankita.raima@gmail.com', '1', '', ''),
(36, 75, 'ankita.raima@gmail.com', '4', '', ''),
(37, 76, 'ankita.raima@gmail.com', '4', '', ''),
(38, 77, 'ankita.raima@gmail.com', '3', '', ''),
(39, 78, 'ankita.raima@gmail.com', '5', '', ''),
(40, 79, 'ankita.raima@gmail.com', '5', '', ''),
(41, 57, 'pritha.ani@gmail.com', '2', 'khub bhalo', '2023-04-23'),
(42, 58, 'pritha.ani@gmail.com', '3', '', ''),
(43, 59, 'pritha.ani@gmail.com', '3', '', ''),
(44, 60, 'pritha.ani@gmail.com', '5', '', ''),
(45, 61, 'pritha.ani@gmail.com', '4', '', ''),
(46, 62, 'pritha.ani@gmail.com', '4', '', ''),
(47, 63, 'pritha.ani@gmail.com', '4', '', ''),
(48, 64, 'pritha.ani@gmail.com', '2', '', ''),
(49, 65, 'pritha.ani@gmail.com', '5', '', ''),
(50, 66, 'pritha.ani@gmail.com', '4', '', ''),
(51, 67, 'pritha.ani@gmail.com', '4', '', ''),
(52, 68, 'pritha.ani@gmail.com', '4', '', ''),
(53, 69, 'pritha.ani@gmail.com', '4', '', ''),
(54, 70, 'pritha.ani@gmail.com', '2', '', ''),
(55, 71, 'pritha.ani@gmail.com', '4', '', ''),
(56, 72, 'pritha.ani@gmail.com', '5', '', ''),
(57, 74, 'pritha.ani@gmail.com', '4', '', ''),
(58, 73, 'pritha.ani@gmail.com', '3', '', ''),
(59, 75, 'pritha.ani@gmail.com', '5', '', ''),
(60, 76, 'pritha.ani@gmail.com', '4', '', ''),
(61, 77, 'pritha.ani@gmail.com', '4', '', ''),
(62, 78, 'pritha.ani@gmail.com', '4', '', ''),
(63, 79, 'pritha.ani@gmail.com', '3', '', ''),
(64, 37, 'ankita.raima@gmail.com', '5', '', ''),
(65, 39, 'ankita.raima@gmail.com', '3', '', ''),
(66, 33, 'ankita.raima@gmail.com', '3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `Serial_no` int(245) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ReportedBy` varchar(255) NOT NULL,
  `ReportedByType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`Serial_no`, `Type`, `Email`, `ReportedBy`, `ReportedByType`) VALUES
(1, 'Seller', 'basupapers.arijit@gmail.com', 'ankita.raima@gmail.com', 'Buyer'),
(7, 'Seller', 'anapurna.bhandar@gmail.com', 'ankita.raima@gmail.com', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `sellerdetails`
--

CREATE TABLE `sellerdetails` (
  `Serial_no` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Username` varchar(256) DEFAULT NULL,
  `Password` varchar(256) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Shop_name` varchar(256) DEFAULT NULL,
  `Shop_Type` varchar(255) NOT NULL,
  `Address` varchar(256) DEFAULT NULL,
  `State` varchar(256) DEFAULT NULL,
  `Photo_Id` varchar(256) NOT NULL,
  `Allow` varchar(255) DEFAULT NULL,
  `Identity` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerdetails`
--

INSERT INTO `sellerdetails` (`Serial_no`, `Name`, `Gender`, `Email`, `Username`, `Password`, `Phone`, `Shop_name`, `Shop_Type`, `Address`, `State`, `Photo_Id`, `Allow`, `Identity`, `Question`, `Answer`) VALUES
(36, 'Alok Gupta', 'male', 'anapurna.bhandar@gmail.com', 'Alok101', 'alok', '9156322901', 'Anapurna Bhander', 'Grocery', '6VQH+4GG,Desbandhu Nagar,Kalibazar,Natanpally,West Bengal 713101', 'west bengal', '', 'allowed', '', 'What is your bestfriend name ?', 'alok'),
(39, 'Puja Ghosh', 'female', 'kesari.puja@gmail.com', 'puja66', 'puja', '9647125911', 'Kesari', 'Confectionery', 'Kalnaroad pirpukur,Purba Bardhaman,713101', 'West Bengal', '', 'allowed', '', 'What is your bestfriend name ?', 'raima'),
(40, 'Arijit Debnath', 'male', 'basupapers.arijit@gmail.com', 'Arijit34', 'arijit', '9657340912', 'Basupapers', 'Stationery', 'kalnaroad pirpukur ,Purba Bardhaman', 'West Bengal', 'basupapers.arijit@gmail.com.jpg', 'allowed', '', 'What is your bestfriend name ?', 'raima'),
(52, 'Sanjib Dey', 'male', 'sanjib@gmail.com', 'sanjib01', 'sanjib', '9474060606', 'dey tea stores', 'Grocery', 'kalnaroad pirpukur', 'west bengal', '', '', 'sanjib@gmail.com.pdf', 'What is your nickname ?', 'sanjib'),
(53, 'Kishor Pal', 'male', 'kishor.pal@gmail.com', 'kishor11', 'kishor', '9434521125', 'Gopal Bhandar', 'Grocery', '6VW7+CXW, BB Ghosh Rd', 'West Bengal', '', 'allowed', 'kishor.pal@gmail.com.pdf', 'What is your nickname ?', 'kishor'),
(54, 'Sashanka Das', 'male', 'sashanka.das@gmail.com', 'sashanka23', 'sashanka', '9652635411', 'NaiKi ChaiKi', 'Grocery', '449, Kewal Indl.estate, S.b.road, Burdwan', 'West Bengal', '', 'allowed', 'sashanka.das@gmail.com.pdf', 'What is your nickname ?', 'sashanka'),
(55, 'Tanmoy Samanta', 'male', 'tanmoy.samanta@gmail.com', 'tanmoy', 'tanmoy', '9474424211', 'Ma Monosha Bhandar', 'Grocery', '6VQH+4GG,Desbandhu Nagar,Kalibazar,Natanpally,West Bengal 713101', 'West Bengal', '', 'allowed', 'tanmoy.samanta@gmail.com.pdf', 'What is your nickname ?', 'tanmoy'),
(56, 'Raj Kushwaha', 'male', 'raj.kushwaha@gmail.com', 'raj', 'raj', '9434550025', 'Dreamy Bakes', 'Confectionery', 'A/21 83 Maheshwar Villa S V Road Santacruz,Barddhaman', 'West Bengal', '', 'allowed', 'raj.kushwaha@gmail.com.pdf', 'What is your nickname ?', 'raj'),
(57, 'Mondira Mondal', 'female', 'mondira.mondal@gmail.com', 'mondira', 'mondira', '9474775500', 'mandiras', 'Confectionery', 'AIL KHANA MORE-BURDWAN ARCADE', 'West Bengal', '', 'allowed', 'mondira.mondal@gmail.com.pdf', 'What is your nickname ?', 'mondira'),
(58, 'Titli Roy', 'female', 'titli.roy@gmail.com', 'titli', 'titli', '9647352100', 'House Of Candy', 'Confectionery', '6VQH+4GG,Desbandhu Nagar,Kalibazar,Natanpally,West Bengal 713101', 'West Bengal', '', 'allowed', 'titli.roy@gmail.com.pdf', 'What is your nickname ?', 'titli'),
(59, 'Adrija Das', 'female', 'adrija.das@gmail.com', 'adrija', 'adrija', '9434522575', 'Paper Dreams', 'Stationery', 'MB 395, Ma Apartment,burdwan', 'West Bengal', '', 'allowed', 'adrija.das@gmail.com.pdf', 'What is your nickname ?', 'adrija'),
(60, 'Sukanya Dutta', 'female', 'sukanya.dutta@gmail.com', 'sukanya', 'sukanya', '7001525266', 'Stationery House', 'Stationery', 'Badamtola Bardhaman', 'West Bengal', '', 'allowed', 'sukanya.dutta@gmail.com.pdf', 'What is your nickname ?', 'sukanya'),
(61, 'Koushik Mondal', 'male', 'koushik.mondal@gmail.com', 'koushik', 'koushik', '7001454566', 'Paper Corner', 'Stationery', '6VQH+4GG,Desbandhu Nagar,Kalibazar,Natanpally,West Bengal 713101', 'West Bengal', '', 'allowed', 'koushik.mondal@gmail.com.pdf', 'What is your nickname ?', 'koushik');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Serial_no` int(10) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Product` varchar(256) DEFAULT NULL,
  `Brand` varchar(25) NOT NULL,
  `Diet_Type` varchar(255) NOT NULL,
  `Type` varchar(256) NOT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `no_item` int(11) NOT NULL,
  `price` int(255) DEFAULT NULL,
  `Available` int(255) NOT NULL,
  `Photo_Id` varchar(256) DEFAULT NULL,
  `Date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Serial_no`, `Email`, `Product`, `Brand`, `Diet_Type`, `Type`, `Weight`, `no_item`, `price`, `Available`, `Photo_Id`, `Date`) VALUES
(28, 'ankita.raima@gmail.com', 'Aashirvaad Superior MP Atta, 5kg Pack', 'ITC', 'Veg', 'Grocery', '5.2kg', 1, 350, 0, NULL, '16-4-2023'),
(29, 'ankita.raima@gmail.com', 'Aashirvaad Superior MP Atta, 5kg Pack', 'ITC', 'Veg', 'Grocery', '5.2kg', 1, 350, 5, NULL, '16-4-2023'),
(33, 'anapurna.bhandar@gmail.com', 'Fortune Premium Kachi Ghani Pure Mustard Oil, 1Litre PET Bottle', 'Fortune', 'veg', 'Grocery', '1 Litres, 1000 Millilitres', 1, 150, 181, '3320230418051610.jpg', '2023-04-18'),
(37, 'anapurna.bhandar@gmail.com', 'Quaker Oats 2kg | Rolled Oats | 100% Natural Wholegrain | Nutritious Breakfast Cereals | Porridge | Easy to Cook', 'ITC', 'veg', 'Grocery', '2kg', 1, 368, 53, '3720230418052758.jpg', '2023-04-18'),
(38, 'anapurna.bhandar@gmail.com', 'Saffola Honey Gold, 100% Pure NMR Tested Honey, Made with Kashmir Honey', 'Saffola', 'veg', 'Grocery', '1000 Grams', 1, 370, 93, '3820230418053018.jpg', '2023-04-18'),
(39, 'anapurna.bhandar@gmail.com', 'Dabur Gluco Plus C Lemon', 'DABUR', 'veg', 'Grocery', '400gm', 1, 146, 8, '3920230418053210.jpg', '2023-04-18'),
(40, 'anapurna.bhandar@gmail.com', 'Keya Penne Pasta 1kg,100% Durum Wheat Pasta | Vegetarian | No MSG | Low in Calories | No Trans Fats | Healthy | Cooked in 10 Minutes', 'KEYA', 'veg', 'Grocery', '1000 Grams', 1, 99, 7, '4020230418053532.jpg', '2023-04-18'),
(41, 'anapurna.bhandar@gmail.com', 'Catch Turmeric Powder', 'Catch', 'veg', 'Grocery', '200g', 1, 39, 50, '4120230418055614.jpg', '2023-04-18'),
(42, 'anapurna.bhandar@gmail.com', 'Tata Sampann Masoor Dal, Whole', 'Tata Sampann', 'veg', 'Grocery', '1.01kg', 1, 165, 200, '4220230418055815.jpg', '2023-04-18'),
(43, 'anapurna.bhandar@gmail.com', 'Tata Sampann Unpolished Moong Dal Chilka', 'Tata Sampann', 'veg', 'Grocery', '500g', 1, 84, 98, '4320230418060000.jpg', '2023-04-18'),
(44, 'anapurna.bhandar@gmail.com', 'Tata Tea Agni | Strong chai With 10% Extra Strong Leaves | Black Tea |', 'Tata Tea Agni', 'veg', 'Grocery', '1500.0 gram', 1, 255, 10, '4420230418060135.jpg', '2023-04-18'),
(45, 'anapurna.bhandar@gmail.com', 'Kissan Mixed Fruit Jam 1 Kg Bottle, With Real Fruit Ingredients', 'Kissan', 'veg', 'Grocery', '1000g', 1, 300, 9, '4520230418060306.jpg', '2023-04-18'),
(46, 'anapurna.bhandar@gmail.com', 'Aashirvaad Superior MP Atta', 'Aashirvaad', 'veg', 'Grocery', '5kg', 1, 256, 90, '4620230418060423.jpg', '2023-04-18'),
(47, 'anapurna.bhandar@gmail.com', 'Sunfeast YiPPee! Magic Masala, Instant Noodles', 'YiPPee', 'veg', 'Grocery', '720g/810g/840g( weight may vary )', 12, 152, 4, '4720230418060723.jpg', '2023-04-18'),
(48, 'anapurna.bhandar@gmail.com', 'Maggi 2-Minute Masala Instant Noodles', 'Maggi', 'veg', 'Grocery', '70 grams', 12, 160, 0, '4820230418060900.jpg', '2023-04-18'),
(49, 'anapurna.bhandar@gmail.com', 'Colgate MaxFresh  Anticavity Toothpaste Gel, Spicy Fresh (Saver Pack)', 'Colgate', 'veg', 'Grocery', '300gram', 2, 145, 10, '4920230418061045.jpg', '2023-04-18'),
(50, 'anapurna.bhandar@gmail.com', 'Kurkure Namkeen - Masala Munch', 'Kurkure', 'veg', 'Grocery', '77g/82g/90g (Weight may vary)', 1, 16, 41, '5020230418061243.jpg', '2023-04-18'),
(51, 'anapurna.bhandar@gmail.com', 'Kelloggs Corn Flakes Original | Power of 5: Energy, Protein, Iron, Calcium, Vitamins B1, B2, B3 & C| Corn Flakes, Breakfast Cereal | Naturally Cholestrol Free', 'Kelloggs ', 'veg', 'Grocery', '875g/900g(Weight may vary)', 1, 3100, 10, '5120230422065847.jpg', '2023-04-18'),
(56, 'basupapers.arijit@gmail.com', 'Reynolds BRITE PLUS 5 PEN BAG - PACK OF 2 | BLUE I Lightweight Ball Pen With Comfortable Grip for Extra Smooth Writing I School and Office Stationery | 0.7mm Tip Size', 'Reynolds', '', 'Stationary', '', 10, 80, 99, '5620230423091612.jpg', '2023-04-23'),
(57, 'kesari.puja@gmail.com', 'Maaza Mango Drink, Original Flavour', 'Mazza', 'veg', 'Confectionery', '1.2L', 1, 60, 0, '5720230423044037.jpg', '2023-04-23'),
(58, 'kesari.puja@gmail.com', '7 Up Soft Drink', '7 Up', 'veg', 'Confectionery', '2.25L ', 1, 87, 3, '5820230423044301.jpg', '2023-04-23'),
(59, 'kesari.puja@gmail.com', 'FANTA®️ Orange Flavored Cold Drink | Soft Drink with Added Orange Flavour | Delicious Orangey Flavor', 'Fanta', 'veg', 'Confectionery', '2.25L', 1, 78, 0, '5920230423044449.jpg', '2023-04-23'),
(60, 'kesari.puja@gmail.com', 'Thums Up Soft Drink', 'Thums Up', 'veg', 'Confectionery', '2.25L', 1, 84, 0, '6020230423044608.jpg', '2023-04-23'),
(61, 'kesari.puja@gmail.com', 'Real Fruit Power Mixed Fruit Juice | No Added Preservatives', 'Dabur', 'veg', 'Confectionery', '1L', 1, 85, 5, '6120230423044805.jpg', '2023-04-23'),
(62, 'kesari.puja@gmail.com', 'Cadbury Dairy Milk Chocolate Home Treats, Pack of 17 Mini Chocolate Bars', 'Cadbury', 'veg', 'Confectionery', '119 g / 126 g', 1, 107, 5, '6220230423045945.jpg', '2023-04-23'),
(63, 'kesari.puja@gmail.com', 'Nestlé Kitkat 2 Finger Wafer Bar Sharebag', 'Nestle', 'veg', 'Confectionery', ' 123.2 g| 8 Units - 15.4 g', 1, 102, 0, '6320230423050101.jpg', '2023-04-23'),
(64, 'kesari.puja@gmail.com', 'Cadbury 5 Star Chocolate Home Treats Pack', 'Cadbury', 'veg', 'Confectionery', '191.9 g', 1, 111, 5, '6420230423050215.jpg', '2023-04-23'),
(65, 'kesari.puja@gmail.com', 'Nestle Munch Chocolate Coated Crunchy Wafer Share Pack', 'Nestle', 'veg', 'Confectionery', '160.2 g|18 Units - 8.9 g each', 1, 73, 4, '6520230423050346.jpg', '2023-04-23'),
(66, 'kesari.puja@gmail.com', 'Snickers Family Treat Pouch', 'Snickers ', 'veg', 'Confectionery', '168g', 1, 149, 4, '6620230423051004.jpg', '2023-04-23'),
(67, 'kesari.puja@gmail.com', 'Maggi 2-Minute Special Masala Instant Noodles (Pack of 12)', 'Maggi', 'veg', 'Confectionery', '840g (70g each)', 1, 155, 5, '6720230423051224.jpg', '2023-04-23'),
(68, 'kesari.puja@gmail.com', 'Maggi Masala-Ae-Magic, (20 Sachets) | All in One Masala for Dry Vegetables, Paneer, Dal & More Pouch', 'Maggi', 'veg', 'Confectionery', ' 120 g', 1, 85, 2, '6820230423051413.jpg', '2023-04-23'),
(69, 'kesari.puja@gmail.com', 'Sunfeast YiPPee! Magic Masala, Instant Noodles 8 in 1 Pack', 'Sunfeast YiPPee', 'veg', 'Confectionery', ' 480g / 520g / 560g (Weight May Vary)', 1, 80, 5, '6920230423051537.jpg', '2023-04-23'),
(70, 'kesari.puja@gmail.com', 'Chings Schezwan Instant Noodles', 'Chings Secret', 'veg', 'Confectionery', '240g', 1, 44, 4, '7020230423051658.jpg', '2023-04-23'),
(71, 'kesari.puja@gmail.com', 'Top ramen Vegetarian Curry Veg', 'Top ramen', 'veg', 'Confectionery', '280 grams', 1, 85, 5, '7120230423051814.jpg', '2023-04-23'),
(72, 'kesari.puja@gmail.com', 'Maggi 2-Minute Masala Instant Noodles', 'Maggi', 'veg', 'Confectionery', '280 grams Pouch', 1, 52, 0, '7220230423051922.jpg', '2023-04-23'),
(73, 'kesari.puja@gmail.com', 'Nongshim Stir Fry Shin Ramuyn Instant Noodles, Gourmet Spicy, 5 Pack ', 'Nongshim', 'veg', 'Confectionery', '23.1 oz / 655 g', 1, 449, 5, '7320230423052213.jpg', '2023-04-23'),
(74, 'kesari.puja@gmail.com', 'Hersheys Syrup Chocolate', 'Hersheys ', 'veg', 'Confectionery', ' 623g', 1, 165, 5, '7420230423052400.jpg', '2023-04-23'),
(75, 'kesari.puja@gmail.com', 'Veeba Eggless Mayonnaise  I Veg Mayonnaise I 100% Vegetarian Mayo I Extra Creamy and Delicious I Rich and Thick Texture I Dip, Spread and Dunk', 'Vebba', 'veg', 'Confectionery', '700g', 1, 131, 2, '7520230423052529.jpg', '2023-04-23'),
(76, 'kesari.puja@gmail.com', 'Veeba Foods SCHEZWAN STIR-Fry Sauce ', 'Vebba', 'veg', 'Confectionery', '250g', 1, 80, 5, '7620230423052713.jpg', '2023-04-23'),
(77, 'kesari.puja@gmail.com', 'Kissan Fresh Tomato Ketchup  Pouch, Sweet & Tangy Sauce Real Tomatoes - Super Saver Offer Pack', 'Kissan', 'veg', 'Confectionery', '2kg', 1, 230, 5, '7720230423052820.jpg', '2023-04-23'),
(78, 'kesari.puja@gmail.com', 'Chings Secret Green Chilli Sauce', 'Chings Secret', 'veg', 'Confectionery', ' 190gm', 1, 60, 5, '7820230423052918.jpg', '2023-04-23'),
(79, 'kesari.puja@gmail.com', 'Chings Secret RED CHILLI SAUCE', 'Chings Secret', 'veg', 'Confectionery', ' 200gm', 1, 600, 4, '7920230423053008.jpg', '2023-04-23'),
(80, 'basupapers.arijit@gmail.com', 'Luxor Finewriter 05 | Assorted Colour | Pack 0f 10 | Perfect for School, Home & Office | Ideal for Professionals & Students', 'Luxor', '', 'Stationary', '', 10, 100, 14, '8020230423061709.jpg', '2023-04-23'),
(81, 'basupapers.arijit@gmail.com', 'Cello Bling Pastel Ball Pen | Blue Ball Pen | Jar of 25 Units | Best Ball Pens for Smooth Writing | Ball Point Pen Set | Pens for Students | Office Stationery Items | Best pen for Exam', 'Cello', '', 'Stationary', '', 25, 127, 20, '8120230423061828.jpg', '2023-04-23'),
(82, 'basupapers.arijit@gmail.com', 'Faber-Castell Connector Pen Set - Pack of 25 (Assorted)', 'Faber-Castell', '', 'Stationary', '', 25, 150, 19, '8220230423061948.jpg', '2023-04-23'),
(83, 'basupapers.arijit@gmail.com', 'Mahavir Loose Leaf Report Pad | A4 Size | Ruled | Pre Punched for Easy Filing | Tear Off Sheets | Pack of 3 (100 Sheets Each)', 'Mahavir ', '', 'Stationary', '', 3, 561, 10, '8320230423062115.jpg', '2023-04-23'),
(84, 'basupapers.arijit@gmail.com', 'Doms Famous Mountains Series Hard Bound Notebook | Unruled, 160 Pages | 33 x 21 CM | Ideal for School, Home & Office | Pack Of 1 | Color & Design May Vary', 'Doms', '', 'Stationary', '', 1, 125, 10, '8420230423062327.jpg', '2023-04-23'),
(85, 'basupapers.arijit@gmail.com', 'Doms Music Series | Unruled, 228 Pages | 33 x 21 CM | Ideal for School, Home & Office | Pack Of 1 | Color And Design May Vary', 'Doms', '', 'Stationary', '', 1, 140, 23, '8520230423062430.jpg', '2023-04-23'),
(86, 'basupapers.arijit@gmail.com', 'Faber-Castell Fine Textliner - Pack of 5 (Assorted)', 'Faber-Castell', '', 'Stationary', '', 5, 125, 5, '8620230423062530.jpg', '2023-04-23'),
(87, 'basupapers.arijit@gmail.com', 'Worison Pocket Size Spiral Sticky Note Pad', 'Worison', '', 'Stationary', '', 1, 189, 5, '8720230423062636.jpg', '2023-04-23'),
(88, 'basupapers.arijit@gmail.com', 'Doms Neon Rubber Tipped HB/2 Graphite Pencils Box Pack | Non-Toxic | Free Sharpner Inside The Box | Easy & Smooth Sharpening | Pack Of 10 Pencils', 'Doms', '', 'Stationary', '', 10, 60, 5, '8820230423062754.jpg', '2023-04-23'),
(89, 'basupapers.arijit@gmail.com', 'Apsara Platinum Pencils Value Pack - Pack of 20', 'Apsara', '', 'Stationary', '', 20, 99, 40, '8920230423062840.jpg', '2023-04-23'),
(90, 'basupapers.arijit@gmail.com', 'Fevicol MR 1 kg Craft Glue Ultimate Adhesive for Student’s Project Work - Craft Glue & Office Glue Refill Pack', 'Fevicol ', '', 'Stationary', '', 1, 215, 10, '9020230423062948.jpg', '2023-04-23'),
(91, 'basupapers.arijit@gmail.com', 'Pidilite Fevicol 200 Gram Craft Glue Ultimate Adhesive for Student’s Project Work & Serious Crafters', 'Fevicol ', '', 'Stationary', '', 1, 78, 5, '9120230423063111.jpg', '2023-04-23'),
(96, 'kishor.pal@gmail.com', 'Fortune Chakki Fresh Atta, 10 kg', 'Fortune', 'veg', 'Grocery', '10kg', 1, 441, 18, '9620230623063212.jpg', '2023-06-23'),
(97, 'kishor.pal@gmail.com', 'Fortune Oil, 1 L Pouch Premium Kachi Ghani Pure Mustard', 'Fortune', 'veg', 'Grocery', '1L', 1, 131, 20, '9720230623063325.jpg', '2023-06-23'),
(98, 'kishor.pal@gmail.com', 'Nutrela SOYA Chunks ', 'Nutrela', 'veg', 'Grocery', '1kg', 1, 149, 20, '9820230623063441.jpg', '2023-06-23'),
(99, 'kishor.pal@gmail.com', 'Tata Sampann Unpolished Masoor Dal (Whole)', 'Tata', 'veg', 'Grocery', ' 1kg', 1, 147, 20, '9920230623063731.jpg', '2023-06-23'),
(100, 'kishor.pal@gmail.com', 'Dabur Honey :100% Pure Worlds No.1 Honey Brand with No Sugar Adulteration ', 'Dabur ', 'veg', 'Grocery', '1kg', 1, 349, 10, '10020230623063919.jpg', '2023-06-23'),
(101, 'kishor.pal@gmail.com', 'Dabur Honitus Hot Sip - Pack of 30 Sachets ( 4gx30 )| 100% Ayurvedic Kadha | Provides Instant Relief from Cough, Cold & Sore Throat | Natural Immunity Booster | Unique Blend of 15 Ayurvedic Herbs', 'DABUR', 'veg', 'Grocery', '4*30g', 30, 234, 23, '10120230623064141.jpg', '2023-06-23'),
(102, 'kishor.pal@gmail.com', 'Aashirvaad Kashmiri Mirch Powder', 'Aashirvaad ', 'veg', 'Grocery', '100g', 1, 100, 20, '10220230623064249.jpg', '2023-06-23'),
(103, 'kishor.pal@gmail.com', 'Catch Jeera(Cumin) Powder', 'CATCH', 'veg', 'Grocery', '100gm', 1, 85, 20, '10320230623064400.jpg', '2023-06-23'),
(104, 'sashanka.das@gmail.com', 'Tata Sampann Unpolished Kala Chana', 'TATA', 'veg', 'Grocery', '1kg', 1, 117, 20, '10420230623072135.jpg', '2023-06-23'),
(105, 'sashanka.das@gmail.com', 'Tata Sampann Unpolished Kabuli Chana (Big Size)', 'TATA', 'veg', 'Grocery', '1kg', 1, 239, 29, '10520230623072242.jpg', '2023-06-23'),
(106, 'sashanka.das@gmail.com', 'Tata Sampann Unpolished Green Moong Dal (Whole)', 'TATTA', 'veg', 'Grocery', '500g', 1, 88, 34, '10620230623072401.jpg', '2023-06-23'),
(107, 'sashanka.das@gmail.com', 'Tata Sampann Unpolished Moong Dal (Chilka)', 'TATA', 'veg', 'Grocery', '500g', 1, 84, 22, '10720230623072457.jpg', '2023-06-23'),
(108, 'sashanka.das@gmail.com', 'Tata Sampann Unpolished Moong Dal (Split)', 'TATA', 'veg', 'Grocery', '1kg', 1, 163, 20, '10820230623072557.jpg', '2023-06-23'),
(109, 'sashanka.das@gmail.com', 'Tata Sampann Unpolished Masoor Dal (Split)', 'TATA', 'veg', 'Grocery', '1kg', 1, 147, 23, '10920230623072653.jpg', '2023-06-23'),
(110, 'tanmoy.samanta@gmail.com', 'Vim Antismell with Pudina Buy 4 get 1, Pack of 5', 'VIM', 'veg', 'Grocery', '200g', 5, 120, 23, '11020230623074027.jpg', '2023-06-23'),
(111, 'tanmoy.samanta@gmail.com', 'Tata Salt | Vacuum Evaporated Iodised Salt ', 'TATA', 'veg', 'Grocery', '1KG', 1, 22, 22, '11120230623074156.jpg', '2023-06-23'),
(112, 'tanmoy.samanta@gmail.com', 'Fortune Oil, 1 L Pouch Rice Bran Health', 'Fortune', 'veg', 'Grocery', '1L', 1, 168, 24, '11220230623074543.jpg', '2023-06-23'),
(113, 'tanmoy.samanta@gmail.com', 'Mr. Gold Rice Bran Oil Pouch', 'MR. GOLD', 'veg', 'Grocery', '1L', 1, 265, 34, '11320230623074656.jpg', '2023-06-23'),
(114, 'tanmoy.samanta@gmail.com', 'Anjali Cold Pressed Gingelly / Sesame Oil (1 Litre Pouch)', 'Anjali', 'veg', 'Grocery', '1L', 1, 377, 23, '11420230623074801.jpg', '2023-06-23'),
(115, 'tanmoy.samanta@gmail.com', 'Vedaka Cold Pressed Groundnut (Peanut) Oil', 'VEDAKA', 'veg', 'Grocery', '5L', 1, 1369, 10, '11520230623075024.jpg', '2023-06-23'),
(116, 'raj.kushwaha@gmail.com', 'Britannia Pineapple Plunge Cake,', 'Britannia ', 'veg', 'Confectionery', '50gm', 1, 10, 50, '11620230624055910.jpg', '2023-06-24'),
(117, 'raj.kushwaha@gmail.com', 'Winkies Marble Slice Cake', 'Winkies ', 'veg', 'Confectionery', '120g', 1, 30, 50, '11720230624060002.jpg', '2023-06-24'),
(118, 'raj.kushwaha@gmail.com', 'Sunfeast Dark Fantasy Yumfills,  Rich Chocolate Pie Cake', 'Sunfeast Dark Fantasy', 'veg', 'Confectionery', '253g', 1, 170, 30, '11820230624060114.jpg', '2023-06-24'),
(119, 'raj.kushwaha@gmail.com', 'Cadbury Chocobakes Choco Chip Cookies', 'Cadbury ', 'veg', 'Confectionery', '167g', 1, 72, 30, '11920230624060228.jpg', '2023-06-24'),
(120, 'raj.kushwaha@gmail.com', 'Britannia Marie Gold Biscuits', 'Britannia ', 'veg', 'Confectionery', '950g ', 1, 124, 30, '12020230624060337.jpg', '2023-06-24'),
(121, 'raj.kushwaha@gmail.com', 'Cadbury Oreo Vanilla Flavour Crème Sandwich Biscuit', 'Oreo', 'veg', 'Confectionery', ' 288.75 g', 1, 75, 30, '12120230624060449.jpg', '2023-06-24'),
(122, 'raj.kushwaha@gmail.com', 'Red Bull Energy Drink (4 Pack)', 'Red Bull', 'veg', 'Confectionery', ' 250 ml', 4, 456, 20, '12220230624060621.jpg', '2023-06-24'),
(123, 'mondira.mondal@gmail.com', 'Thums Up Soft Drink PET Bottle', 'Thums Up', 'veg', 'Confectionery', '2L', 1, 95, 40, '12320230624061334.jpg', '2023-06-24'),
(124, 'mondira.mondal@gmail.com', 'Coca-Cola Original Taste Soft Drink PET Bottle', 'Coca-Cola', 'veg', 'Confectionery', '2L', 1, 95, 40, '12420230624061417.jpg', '2023-06-24'),
(125, 'mondira.mondal@gmail.com', '7UP Soft Drink - Lemon Flavor Bottle', '7UP ', 'veg', 'Confectionery', ' 750 ml', 1, 40, 20, '12520230624061509.jpg', '2023-06-24'),
(126, 'mondira.mondal@gmail.com', 'Maaza Mango Drink, Original Flavour,  PET Bottle', 'Maaza ', 'veg', 'Confectionery', '1.2 L', 1, 64, 20, '12620230624061603.jpg', '2023-06-24'),
(127, 'mondira.mondal@gmail.com', 'Pepsi Mountain Dew Soft Drink Bottle', 'Pepsi ', 'veg', 'Confectionery', '750L', 1, 36, 30, '12720230624061709.jpg', '2023-06-24'),
(128, 'mondira.mondal@gmail.com', 'Limca', 'Limca', 'veg', 'Confectionery', '750 ml ', 1, 37, 56, '12820230624061908.jpg', '2023-06-24'),
(129, 'mondira.mondal@gmail.com', 'Real Litchi Juice', 'Real', 'veg', 'Confectionery', '180 ml', 1, 18, 20, '12920230624062006.jpg', '2023-06-24'),
(130, 'titli.roy@gmail.com', 'Cadbury Choclairs Gold ', 'Cadbury', 'veg', 'Confectionery', '(605g /577.5g grammage may vary)', 1, 180, 20, '13020230624062738.jpg', '2023-06-24'),
(131, 'titli.roy@gmail.com', 'M & M MARS Milk Chocolate Candies', 'M & M MARS', 'veg', 'Confectionery', '36 g', 1, 100, 10, '13120230624062831.jpg', '2023-06-24'),
(132, 'titli.roy@gmail.com', 'Alpenliebe Juzt Jelly, Guava Flavour', 'Alpenliebe Alpenliebe ', 'veg', 'Confectionery', ' 148 G (40 Units * 3.7 G Each )', 1, 50, 80, '13220230624062926.jpg', '2023-06-24'),
(133, 'titli.roy@gmail.com', 'Cadbury Nutties Chocolate', 'Cadbury', 'veg', 'Confectionery', '30 g', 1, 40, 40, '13320230624063021.jpg', '2023-06-24'),
(134, 'titli.roy@gmail.com', 'Skittles Wildberry Fruit Flavoured Candies', 'Skittles ', 'veg', 'Confectionery', '29 g', 1, 30, 20, '13420230624063112.jpg', '2023-06-24'),
(135, 'titli.roy@gmail.com', 'Nestle Munch Chocolate Coated Crunchy Wafer Share Pack', 'Nestle ', 'veg', 'Confectionery', '160.2 g|18 Units - 8.9 g each', 1, 85, 20, '13520230624063415.jpg', '2023-06-24'),
(136, 'titli.roy@gmail.com', 'Cadbury Gems Chocolate Home Treats', 'Cadbury ', 'veg', 'Confectionery', '142.2 g, (Pack of 3)', 1, 80, 20, '13620230624063529.jpg', '2023-06-24'),
(137, 'adrija.das@gmail.com', 'Classmate 2100117 Soft Cover 6 Subject Spiral Binding Notebook, Single Line, 300 Pages', 'Classmate', '', 'Stationary', '', 1, 170, 30, '13720230624063943.jpg', '2023-06-24'),
(138, 'adrija.das@gmail.com', 'Classmate Octane- Blue Ball Pens (pack Of 5) | Smooth & Fast Writing Ball Pens | Comfortable To Hold & Write| School & Office Stationery| Work From Home Essentials', 'Classmate', '', 'Stationary', '', 5, 50, 40, '13820230624064027.jpg', '2023-06-24'),
(139, 'adrija.das@gmail.com', 'Classmate Colour Crew Sketch Pens - 12 Shades', 'Classmate', '', 'Stationary', '', 12, 35, 67, '13920230624064115.jpg', '2023-06-24'),
(140, 'adrija.das@gmail.com', 'Classmate Soft Drawing Book - A4', 'Classmate', '', 'Stationary', '', 1, 35, 45, '14020230624064220.jpg', '2023-06-24'),
(141, 'sukanya.dutta@gmail.com', 'Amazon Basics Highlighter - Chisel Tip, Pack of 12 (Multicolor)', 'Amazon Basics', '', 'Stationary', '', 12, 239, 34, '14120230625093618.jpg', '2023-06-25'),
(142, 'sukanya.dutta@gmail.com', 'PAPERCOAL Notebook with Buckram Hard Cover - Sapphire Blue- Unruled- Smart Size (200x135 mm) - 192 Pages - Flat Lay', 'PAPERCOAL ', '', 'Stationary', '', 1, 375, 20, '14220230625093727.jpg', '2023-06-25'),
(143, 'sukanya.dutta@gmail.com', 'Doms Champions Kit | Perfect Value Pack | Kit For School Essentials | Gifting Range For Kids | Combination of 6 Stationery Items | Pack of 1', 'Doms ', '', 'Stationary', '', 1, 99, 20, '14320230625093836.jpg', '2023-06-25'),
(144, 'sukanya.dutta@gmail.com', 'COI Note Pad/Memo Book with Sticky Notes & Clip Holder with Pen for Gifting', 'COI ', '', 'Stationary', '', 1, 199, 20, '14420230625093921.jpg', '2023-06-25'),
(145, 'sukanya.dutta@gmail.com', ' Click to open expanded view CAVALO - Be Unique Leather Diary Embossed With Leaf of Tree & Quote Antique Handmade Personal Leather Bound Diary cum Notepad for Men,Women Plain Paper of 5*7 inch size 240Page Perfect for Gift,Travel', 'CAVALO ', '', 'Stationary', '', 1, 599, 20, '14520230625094016.jpg', '2023-06-25'),
(146, 'sukanya.dutta@gmail.com', 'COI Note Pad | to Do List | Tear Off Pads for Work | Home | Office Mini Notes/Short Notes Set of 6', 'COI', '', 'Stationary', '', 6, 299, 20, '14620230625094122.jpg', '2023-06-25'),
(147, 'koushik.mondal@gmail.com', 'Book birds Stationery kit for Home Office use- Proffesional student kit', 'Generic', '', 'Stationary', '', 22, 799, 5, '14720230625094556.jpg', '2023-06-25'),
(148, 'koushik.mondal@gmail.com', 'OFIXO Creative Colorful 400 Sheets Memo Pad Note N Times Post Note Paper Free Stickers Post Sticky Notes Stationary', 'OFIXO', '', 'Stationary', '', 1, 204, 20, '14820230625094728.jpg', '2023-06-25'),
(149, 'koushik.mondal@gmail.com', 'Classmate Soft Cover 6 Subject Spiral Binding Notebook, Single Line, 300 Pages', 'Classmate', '', 'Stationary', '', 1, 142, 20, '14920230625094840.jpg', '2023-06-25'),
(150, 'koushik.mondal@gmail.com', 'Classmate Notebook - Single Line (172 Pages)', 'Classmate', '', 'Stationary', '', 1, 55, 20, '15020230625094924.jpg', '2023-06-25'),
(151, 'koushik.mondal@gmail.com', 'Navneet Youva | Soft Bound/Soft Cover Long Book/Notebook For Students | 21 Cm X 29.7 Cm | Single Line | 172 Pages | Pack Of 6', 'Navneet Youva', '', 'Stationary', '', 6, 382, 20, '15120230625095013.jpg', '2023-06-25'),
(152, 'koushik.mondal@gmail.com', 'Navneet Youva | Long Book | Soft Bound/Soft cover Notebook for Students | A4 size - 21 cm X 29.7 cm | Single line | 76 Pages | Pack of 12', 'Navneet Youva', '', 'Stationary', '', 12, 428, 20, '15220230625095116.jpg', '2023-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Serial_no` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Product_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Serial_no`, `Email`, `Product_no`) VALUES
(1236, 'ankita.raima@gmail.com', '33'),
(1259, 'dey.sk66@gmail.com', '33'),
(1266, 'dey.sk66@gmail.com', '37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `productrating`
--
ALTER TABLE `productrating`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `sellerdetails`
--
ALTER TABLE `sellerdetails`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Serial_no`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `Serial_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1683;

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `Serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buyerdetails`
--
ALTER TABLE `buyerdetails`
  MODIFY `Serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Serial_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `productrating`
--
ALTER TABLE `productrating`
  MODIFY `Serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `Serial_no` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellerdetails`
--
ALTER TABLE `sellerdetails`
  MODIFY `Serial_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `Serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1318;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
