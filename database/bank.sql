-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2014 at 08:11 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bal123@#%`
--

CREATE TABLE IF NOT EXISTS `bal123@#%` (
  `AccountNo` int(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `SecretKey` varchar(20) NOT NULL,
  `Balance` int(15) NOT NULL,
  `LastAccess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`AccountNo`),
  UNIQUE KEY `Username` (`Username`,`SecretKey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1339780653 ;

--
-- Dumping data for table `bal123@#%`
--

INSERT INTO `bal123@#%` (`AccountNo`, `Username`, `SecretKey`, `Balance`, `LastAccess`) VALUES
(77669625, 'mayur', '841357955', 5000, '2014-03-20 02:19:12'),
(1243019252, 'Parth', '1247402391', 4700, '2014-03-21 21:47:48'),
(1256748030, 'Nilesh', '1854667064', 4500, '2014-03-21 21:48:45'),
(1339780652, 'Hiral', '73118900', 4400, '2014-03-31 04:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `detail231@#%`
--

CREATE TABLE IF NOT EXISTS `detail231@#%` (
  `AccountNo` int(20) NOT NULL,
  `Change` varchar(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `NewBalance` int(10) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SecretKey` varchar(20) NOT NULL,
  PRIMARY KEY (`Time`,`SecretKey`),
  KEY `AccountNo` (`AccountNo`,`SecretKey`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail231@#%`
--

INSERT INTO `detail231@#%` (`AccountNo`, `Change`, `Amount`, `NewBalance`, `Time`, `SecretKey`) VALUES
(1243019252, 'Credit', 100, 5100, '2014-03-21 21:46:10', '1247402391'),
(1339780652, 'Debit', 100, 4900, '2014-03-21 21:46:10', '73118900'),
(1339780652, 'Debit', 100, 4800, '2014-03-21 21:46:27', '73118900'),
(1243019252, 'Debit', 100, 5000, '2014-03-21 21:47:18', '1247402391'),
(1339780652, 'Credit', 100, 4900, '2014-03-21 21:47:18', '73118900'),
(1243019252, 'Debit', 100, 4900, '2014-03-21 21:47:33', '1247402391'),
(1256748030, 'Debit', 100, 4900, '2014-03-21 21:48:12', '1854667064'),
(1339780652, 'Credit', 100, 5000, '2014-03-21 21:48:12', '73118900'),
(1256748030, 'Debit', 200, 4700, '2014-03-21 21:48:32', '1854667064'),
(1243019252, 'Debit', 200, 4700, '2014-03-21 21:50:04', '1247402391'),
(1256748030, 'Debit', 200, 4500, '2014-03-21 21:51:16', '1854667064'),
(1339780652, 'Debit', 500, 4500, '2014-03-21 21:51:48', '73118900'),
(1339780652, 'Debit', 0, 4500, '2014-03-21 22:37:43', '73118900'),
(1339780652, 'Debit', 100, 4400, '2014-03-28 00:05:28', '73118900');

-- --------------------------------------------------------

--
-- Table structure for table `reg321@#%`
--

CREATE TABLE IF NOT EXISTS `reg321@#%` (
  `Salutation` varchar(5) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(25) NOT NULL,
  `PAN` varchar(15) NOT NULL,
  `Occupation` varchar(25) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `AadharID` varchar(20) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `MaritalStatus` varchar(10) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `PIN` int(4) NOT NULL,
  `AccountNo` int(20) NOT NULL AUTO_INCREMENT,
  `SecretKey` varchar(20) NOT NULL,
  `Question` longtext,
  `Answer` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`AccountNo`),
  UNIQUE KEY `Email` (`Email`,`PAN`,`AadharID`,`Mobile`,`Username`),
  UNIQUE KEY `SecretKey` (`SecretKey`),
  UNIQUE KEY `AccountNo` (`AccountNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1339780654 ;

--
-- Dumping data for table `reg321@#%`
--

INSERT INTO `reg321@#%` (`Salutation`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `PAN`, `Occupation`, `Education`, `AadharID`, `Gender`, `MaritalStatus`, `Mobile`, `Username`, `Password`, `PIN`, `AccountNo`, `SecretKey`, `Question`, `Answer`) VALUES
('Mr', 'Mayur', 'paladiya', '1995-07-05', 'lathiyaparth66@yahoo.com', '32453044f34f3', 'Salaried', 'Undergraduate', '5asnfj4454', 'Male', 'Single', 2147483647, 'mayur', 'mayur', 5678, 77669625, '841357955', 'What was your childhood nickname?', 'swami'),
('Mr', 'Parth', 'Lathiya', '1995-07-05', 'lathiyaparth33@gmail.com', 'NKHEIUY98379879', 'Self Employed-Professiona', 'Undergraduate', 'SJI4W8YBIYY', 'Male', 'Married', 2147483647, 'Parth', 'Parth', 1234, 1243019252, '1247402391', NULL, NULL),
('Mr', 'Nilesh', 'Lathiya', '1987-10-04', 'nileshlathiya365@gmail.co', 'JGYT378SGAG', 'Self Employed-Professiona', 'Professional', 'SKHKGU4SYDHJH7', 'Male', 'Single', 2147483647, 'Nilesh', 'Nilesh', 9012, 1256748030, '1854667064', NULL, NULL),
('Dr', 'Hiral', 'Lathiya', '1991-08-26', 'hirallathiya12@gmail.com', 'GHHJG327THDG', 'Self Employed-Professiona', 'Graduate', 'JHGGS8WYHDJ', 'Female', 'Single', 2147483647, 'Hiral', 'Hiral', 5678, 1339780652, '73118900', NULL, NULL),
('', '', '', '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, 1339780653, '', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bal123@#%`
--
ALTER TABLE `bal123@#%`
  ADD CONSTRAINT `bal123@0040@0023@0025_ibfk_1` FOREIGN KEY (`AccountNo`) REFERENCES `reg321@#%` (`AccountNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
