-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 06:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `NAME` varchar(245) NOT NULL,
  `EID` int(10) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `ADHAR _NUMBER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NAME`, `EID`, `EMAIL`, `PHONE`, `PASSWORD`, `ADHAR _NUMBER`) VALUES
('Vedanth', 1, 'ved@gmail.com', '9686922456', 'ved@123', '456723458909'),
('Sinchana', 2, 'sin@yahoo.com', '8989878978', 'sin@123', '546532342867'),
('Suchitra', 3, 'suchi@yahoo.com', '7676688989', 'such@123', '675423890511'),
('Suresh', 4, 'sur@gmail.com', '9108283909', 'sur@123', '356489090011'),
('Prashanth', 5, 'prash@yahoo.com', '9108283089', 'pra@123', '757453909811'),
('Leela', 6, 'lee@gmail.com', '7878712090', 'lee@123', '57564909088');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `RATION_CARD_NO` varchar(30) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `SN` int(11) NOT NULL,
  `FULL_NAME` varchar(255) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `RATION_CARD_NO` varchar(20) NOT NULL,
  `ADHAR_NUMBER` varchar(30) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `PHONE_NUMBER` varchar(10) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`SN`, `FULL_NAME`, `DATE_OF_BIRTH`, `RATION_CARD_NO`, `ADHAR_NUMBER`, `ADDRESS`, `PHONE_NUMBER`, `PASSWORD`) VALUES
(5, 'Rudra k', '1990-07-12', 'R901', '908712345678', 'Manmane,Siddapura,UK  ', '8889876099', 'rud@123'),
(8, 'Ratnamma', '1994-01-13', 'R902', '456789123234', 'Manmane,Siddapura,UK', '9889876000', 'rat@123'),
(9, 'Laxmi', '1983-03-11', 'R903', '432123546768', 'Manmane,Siddapura,UK ', '9088709098', 'lax@123'),
(10, 'Ramesh', '1977-06-16', 'R904', '6876434254671', 'Korlaki,Siddapura,UK', '8976540089', 'mesh@123'),
(11, 'Ramappa', '1953-12-20', 'R905', '897654653442', 'Adukatta,Siddapura,UK', '9081239988', 'ram@123'),
(14, 'Latha', '1972-06-07', 'R906', '786544235467', 'Manmane,Siddapura,UK', '9089865400', 'lat@123'),
(15, 'Sandhya', '1987-05-04', 'R907', '435643572100', 'Manmane,Siddapura,UK', '9108676530', 'san@123'),
(16, 'Manjunatha', '1968-06-05', 'R908', '605643572178', 'Adukatta,Siddapura,UK', '7878712333', 'man@123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` varchar(45) NOT NULL,
  `NAME_OF_COMMODITY` varchar(245) NOT NULL,
  `PRICE_PER_KG` varchar(45) NOT NULL,
  `TOTAL_ALLOTED` int(11) NOT NULL,
  `REMAINING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `NAME_OF_COMMODITY`, `PRICE_PER_KG`, `TOTAL_ALLOTED`, `REMAINING`) VALUES
('P1', 'Rice', '2 ', 160, 80),
('P2', 'Wheat', '5  ', 160, 100),
('P3', 'Grain', '3', 80, 50),
('P4', 'Millet', '4', 40, 30);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `PRODUCT DELETED` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO trig VALUES(OLD.PID,OLD.NAME_OF_COMMODITY,"DELETED",NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `PRODUCT INSERTED` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO trig VALUES(NEW.PID,NEW.NAME_OF_COMMODITY,"INSERTED",NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pro_det`
--

CREATE TABLE `pro_det` (
  `PID` varchar(30) NOT NULL,
  `RATION_CARD_NO` varchar(30) NOT NULL,
  `ALLOTED_IN_KG` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_det`
--

INSERT INTO `pro_det` (`PID`, `RATION_CARD_NO`, `ALLOTED_IN_KG`) VALUES
('P1', 'R901', '20'),
('P1', 'R902', '20'),
('P1', 'R903', '20'),
('P1', 'R904', '20'),
('P2', 'R904', '20'),
('P2', 'R905', '20'),
('P2', 'R906', '20'),
('P3', 'R907', '10'),
('P3', 'R902', '10'),
('P4', 'R908', '5'),
('P4', 'R907', '5'),
('P3', 'R904', '10');

-- --------------------------------------------------------

--
-- Table structure for table `reg_admin`
--

CREATE TABLE `reg_admin` (
  `FULL_NAME` varchar(255) NOT NULL,
  `EID` int(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHONE_NUMBER` varchar(10) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `C_PASSWORD` varchar(30) NOT NULL,
  `ADHAR_NUMBER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_admin`
--

INSERT INTO `reg_admin` (`FULL_NAME`, `EID`, `EMAIL`, `PHONE_NUMBER`, `PASSWORD`, `C_PASSWORD`, `ADHAR_NUMBER`) VALUES
('Vedanth', 1, 'ved@gmail.com', '9686922456', 'ved@123', 'ved@123', '456723458909'),
('Sinchana', 2, 'sin@yahoo.com', '8989878978', 'sin@123', 'sin@123', '546532342867865'),
('Suchitra', 3, 'suchi@yahoo.com', '7676688989', 'such@123', 'such@123', '675423890511'),
('Suresh', 4, 'sur@gmail.com', '9108283909', 'sur@123', 'sur@123', '356489090011'),
('Prashanth', 5, 'prash@yahoo.com', '9108283089', 'pra@123', 'pra@123', '757453909811'),
('Vinaya', 5, 'vinu@gmail.com', '9098712378', 'vin@123', 'vin@123', '798867459023'),
('Leela', 6, 'lee@gmail.com', '7878712090', 'lee@123', 'lee@123', '57564909088'),
('Meena', 6, 'meena@gmail.com', '8909819081', 'me@123', 'me@123', '676543454822'),
('Nidhi', 9, 'nidhi@gmail.com', '7878712340', 'nid@123', 'nid@123', '898787623460'),
('hjfgf', 11, 'sdf', '32456', 'wre', 'sdf', '4567890432'),
('dfs', 345, 'tthfg', '224354657', 'etr', 'etrt', '1989767512'),
('hkg', 675, 'hjgfh', '786543', 'jkhjghf', 'khjghgdf', '89765432123');

-- --------------------------------------------------------

--
-- Table structure for table `trig`
--

CREATE TABLE `trig` (
  `PID` varchar(11) NOT NULL,
  `NAME_OF_COMMODITY` varchar(200) NOT NULL,
  `ACTION` varchar(200) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trig`
--

INSERT INTO `trig` (`PID`, `NAME_OF_COMMODITY`, `ACTION`, `DATE`) VALUES
('P2', 'Wheat', 'INSERTED', '2023-01-12'),
('P3', 'COARSE GRAIN', 'DELETED', '2023-01-12'),
('P4', 'Grain', 'INSERTED', '2023-01-13'),
('P4', 'Grain', 'DELETED', '2023-01-13'),
('P3', 'Grain', 'INSERTED', '2023-01-15'),
('P4', 'Millet', 'INSERTED', '2023-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`EID`,`PASSWORD`,`ADHAR _NUMBER`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`SN`,`RATION_CARD_NO`,`ADHAR_NUMBER`,`PASSWORD`),
  ADD UNIQUE KEY `RATION_CARD_NO` (`RATION_CARD_NO`),
  ADD KEY `RATION_CARD_NO_2` (`RATION_CARD_NO`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `pro_det`
--
ALTER TABLE `pro_det`
  ADD KEY `PID` (`PID`),
  ADD KEY `RATION_CARD_NO` (`RATION_CARD_NO`);

--
-- Indexes for table `reg_admin`
--
ALTER TABLE `reg_admin`
  ADD PRIMARY KEY (`EID`,`PASSWORD`,`ADHAR_NUMBER`);

--
-- Indexes for table `trig`
--
ALTER TABLE `trig`
  ADD KEY `PID` (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pro_det`
--
ALTER TABLE `pro_det`
  ADD CONSTRAINT `pro_det_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON DELETE CASCADE,
  ADD CONSTRAINT `pro_det_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON DELETE CASCADE,
  ADD CONSTRAINT `pro_det_ibfk_3` FOREIGN KEY (`RATION_CARD_NO`) REFERENCES `customer` (`RATION_CARD_NO`);

--
-- Constraints for table `trig`
--
ALTER TABLE `trig`
  ADD CONSTRAINT `trig_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
