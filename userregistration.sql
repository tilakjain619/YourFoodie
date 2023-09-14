-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 08:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zipcode` int(25) NOT NULL,
  `signup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `name`, `lastname`, `address`, `country`, `state`, `city`, `zipcode`, `signup_id`) VALUES
(115, 'new', 'first', 'asasa', 'India', 'Maharashtra', 'Nashik', 54, 1),
(116, 'sec', 'sd d', 'ds', 'India', 'Maharashtra', 'Mumbai', 58, 1),
(117, 'name', 'lname', 'sadasd', 'India', 'Maharashtra', 'Mumbai', 4, 1),
(120, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 2),
(121, 'asa', 'asa', 'sasas', 'India', 'Maharashtra', 'Nashik', 54, 1),
(122, 'gfh', 'hh', 'hfghfgh', 'India', 'Maharashtra', 'Nashik', 85885, 1),
(123, '1', 'f', 'ffffffffffff', 'India', 'Maharashtra', 'Nashik', 58, 1),
(124, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 1),
(125, 'hitesh', 'bhor', '14,hilltop residency', 'India', 'Maharashtra', 'Nashik', 422010, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pw` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `pw`) VALUES
(1, 'hitesh', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `contact_time` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `message`, `contact_time`) VALUES
(4, 'tilak', 'tilak@gmail.com', 'this is tilak, I want three noodles rolls', '2023-09-14 12:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(25) NOT NULL,
  `cid` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `images_names` varchar(255) NOT NULL,
  `images_details` varchar(255) NOT NULL,
  `statuss` varchar(25) NOT NULL,
  `txnid` int(8) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `cid`, `orderid`, `total`, `images_names`, `images_details`, `statuss`, `txnid`, `dt`) VALUES
(179, 1, 'OID28560ID1', '15', '\"image/Coconut.PNG\"', '\"Coconut,15,1\"', 'processed', 25078, '2023-09-10'),
(180, 1, 'OID28560ID1', '15', '\"image/Coconut.PNG\"', '\"Coconut,15,1\"', 'processed', 82657, '2023-09-10'),
(181, 1, 'OID28560ID1', '15', '\"image/Coconut.PNG\"', '\"Coconut,15,1\"', 'processed', 25037, '2023-09-10'),
(182, 1, 'OID28560ID1', '15', '\"image/Coconut.PNG\"', '\"Coconut,15,1\"', 'processed', 19435, '2023-09-10'),
(183, 1, 'OID28560ID1', '15', '\"image/Coconut.PNG\"', '\"Coconut,15,1\"', 'processed', 53973, '2023-09-10'),
(184, 1, 'OID28560ID1', '15', '\"image/Coconut.PNG\"', '\"Coconut,15,1\"', 'processed', 26729, '2023-09-10'),
(185, 1, '', '', 'null', 'null', 'processed', 42333, '2023-09-10'),
(186, 1, '', '', 'null', 'null', 'processed', 77263, '2023-09-10'),
(196, 1, '', '', 'null', 'null', 'processed', 33132, '2023-09-10'),
(197, 1, '', '', 'null', 'null', 'processed', 52046, '2023-09-10'),
(209, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 14385, '2023-09-10'),
(210, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 96641, '2023-09-10'),
(211, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 45061, '2023-09-10'),
(212, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 32268, '2023-09-10'),
(213, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 76017, '2023-09-10'),
(214, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 27679, '2023-09-10'),
(215, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 52612, '2023-09-10'),
(216, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 84369, '2023-09-10'),
(217, 1, 'OID67249ID1', '50', '\"image/Idli.PNG,image/Vada.PNG\"', '\"Idli,40,1,Vada,20,1\"', 'processed', 61234, '2023-09-10'),
(218, 1, '', '', 'null', 'null', 'processed', 18614, '2023-09-10'),
(219, 1, '', '', 'null', 'null', 'processed', 34493, '2023-09-10'),
(220, 1, '', '', 'null', 'null', 'processed', 36579, '2023-09-10'),
(221, 1, '', '', 'null', 'null', 'processed', 62925, '2023-09-10'),
(222, 1, '', '', 'null', 'null', 'processed', 90092, '2023-09-10'),
(223, 1, '', '', 'null', 'null', 'processed', 76038, '2023-09-10'),
(224, 1, '', '', 'null', 'null', 'processed', 52806, '2023-09-10'),
(225, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 20867, '2023-09-10'),
(226, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 93671, '2023-09-10'),
(227, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 56946, '2023-09-10'),
(228, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 22701, '2023-09-10'),
(229, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 66025, '2023-09-10'),
(230, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 91938, '2023-09-10'),
(231, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 20618, '2023-09-10'),
(232, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 20706, '2023-09-10'),
(233, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 85652, '2023-09-10'),
(234, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 31988, '2023-09-10'),
(235, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 54149, '2023-09-10'),
(236, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 19608, '2023-09-10'),
(237, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 71885, '2023-09-10'),
(238, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 53650, '2023-09-10'),
(239, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 77802, '2023-09-10'),
(240, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 45673, '2023-09-10'),
(241, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 56948, '2023-09-10'),
(242, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 71092, '2023-09-10'),
(243, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 17153, '2023-09-10'),
(244, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 10637, '2023-09-10'),
(245, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 39628, '2023-09-10'),
(246, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 79481, '2023-09-10'),
(247, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 66769, '2023-09-10'),
(248, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 76847, '2023-09-10'),
(249, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 58469, '2023-09-10'),
(250, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 33329, '2023-09-10'),
(251, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 59776, '2023-09-10'),
(252, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 69609, '2023-09-10'),
(253, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 13246, '2023-09-10'),
(254, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 57450, '2023-09-10'),
(255, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 26382, '2023-09-10'),
(256, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 12687, '2023-09-10'),
(257, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 33213, '2023-09-10'),
(258, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 95602, '2023-09-10'),
(259, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 67498, '2023-09-10'),
(260, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 98799, '2023-09-10'),
(261, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 86915, '2023-09-10'),
(262, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 72328, '2023-09-10'),
(263, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 35033, '2023-09-10'),
(264, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 66449, '2023-09-10'),
(265, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 37925, '2023-09-10'),
(266, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 63325, '2023-09-10'),
(267, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 33167, '2023-09-10'),
(268, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 36746, '2023-09-10'),
(269, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 99464, '2023-09-10'),
(270, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 61332, '2023-09-10'),
(271, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 93911, '2023-09-10'),
(272, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 56801, '2023-09-10'),
(273, 1, 'OID74554ID1', '130', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"', 'processed', 24817, '2023-09-10'),
(274, 1, '', '', 'null', 'null', 'processed', 59489, '2023-09-11'),
(276, 1, '', '', 'null', 'null', 'processed', 19230, '2023-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`) VALUES
(1, 'av', 'av', 'av'),
(2, 'asa', 'asa', 'asa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `signup_id` (`signup_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `oid` (`oid`),
  ADD KEY `cid_fk` (`cid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`signup_id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
