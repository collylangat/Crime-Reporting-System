-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2020 at 10:49 AM
-- Server version: 5.5.16
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

DROP TABLE IF EXISTS `accident`;
CREATE TABLE IF NOT EXISTS `accident` (
  `crimeCode` varchar(20) NOT NULL,
  `crimeLocation` varchar(20) NOT NULL,
  `dateRecieved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(20) NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `moreDetails` varchar(20) NOT NULL,
  `reporterId` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `driverName` varchar(20) NOT NULL,
  `insurance` varchar(20) NOT NULL,
  `registrationNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`crimeCode`, `crimeLocation`, `dateRecieved`, `description`, `lastUpdate`, `moreDetails`, `reporterId`, `status`, `driverName`, `insurance`, `registrationNumber`) VALUES
('ffrt', 'fdc', '2020-02-20 10:57:43', 'weds', '0000-00-00 00:00:00', 'df', 234, 234, 'ed', 'wedsdsccx', 'd'),
('ffrt', 'fdc', '2020-02-20 10:58:19', 'weds', '0000-00-00 00:00:00', 'df', 234, 234, 'ed', 'wedsdsccx', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `accidents`
--

DROP TABLE IF EXISTS `accidents`;
CREATE TABLE IF NOT EXISTS `accidents` (
  `name` varchar(40) NOT NULL,
  `registartionNumber` varchar(40) NOT NULL,
  `insurance` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `dateReceived` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporterId` int(11) NOT NULL,
  `sta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accidents`
--

INSERT INTO `accidents` (`name`, `registartionNumber`, `insurance`, `location`, `dateReceived`, `reporterId`, `sta`) VALUES
('ngenii', 'd345dik', 'aio', '', '0000-00-00 00:00:00', 0, 0),
('', '', '', '', '0000-00-00 00:00:00', 0, 0),
('', '', '', '', '0000-00-00 00:00:00', 0, 0),
('', '', '', '', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `crime_history`
--

DROP TABLE IF EXISTS `crime_history`;
CREATE TABLE IF NOT EXISTS `crime_history` (
  `crimeCode` varchar(50) NOT NULL,
  `dateReceived` date NOT NULL,
  `reporterId` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lastUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crime_report`
--

DROP TABLE IF EXISTS `crime_report`;
CREATE TABLE IF NOT EXISTS `crime_report` (
  `crimeCode` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `crimeLocation` varchar(30) NOT NULL,
  `dateReceived` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reporterId` int(11) NOT NULL,
  `moreDetails` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `lastUpdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_report`
--

INSERT INTO `crime_report` (`crimeCode`, `description`, `crimeLocation`, `dateReceived`, `reporterId`, `moreDetails`, `status`, `lastUpdate`) VALUES
('CR790', 'theft', 'MoiRoad', '0000-00-00 00:00:00', 987654321, 'gfh', 'leads found', '2020-02-20 18:52:25'),
('CR799', 'mobjustice', 'KenyattaRoad', '2020-02-20 18:49:45', 987654321, 'n', 'not found', '2020-02-20 18:49:45'),
('CR799', 'mobjustice', 'KenyattaRoad', '2020-02-20 18:51:45', 987654321, 'n', 'not found', '2020-02-20 18:51:45'),
('', 'rape', 'KenyattaRoad', '2020-02-21 01:57:40', 987654321, 'trfgvb', '', '2020-02-21 03:49:17'),
('CR404', 'mobjustice', 'MoiRoad', '2020-02-21 02:09:24', 987654321, 'cgvbn', 'not found', '2020-02-21 02:09:24'),
('CR81', 'mobjustice', 'KenyattaRoad', '2020-02-21 02:38:15', 987654321, 'gh', 'not found', '2020-02-21 02:38:15'),
('CR150', 'mobjustice', 'KenyattaRoad', '2020-02-21 02:41:04', 987654321, 'gh', 'IN COURT', '2020-02-21 02:49:44'),
('CR473', 'theft', 'kericho', '2020-02-21 07:14:49', 987654321, 'bb', 'not found', '2020-02-21 07:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `officer_register`
--

DROP TABLE IF EXISTS `officer_register`;
CREATE TABLE IF NOT EXISTS `officer_register` (
  `officerNo` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer_register`
--

INSERT INTO `officer_register` (`officerNo`, `password`) VALUES
(35, 'kip'),
(35, 'kip');

-- --------------------------------------------------------

--
-- Table structure for table `public_register`
--

DROP TABLE IF EXISTS `public_register`;
CREATE TABLE IF NOT EXISTS `public_register` (
  `idno` int(11) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_register`
--

INSERT INTO `public_register` (`idno`, `phonenumber`, `password`) VALUES
(25, 704929261, 'lip'),
(45, 7643234, 'kp'),
(234, 2345, 'gtd'),
(34545, 839478, 'mis'),
(55555555, 704938723, 'kipngeno33'),
(90909090, 709098098, 'kipngeno33'),
(123456789, 704949483, 'kipngeno33'),
(234567890, 703827627, 'kipngeno33'),
(987654321, 748222784, 'kipngeno33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
