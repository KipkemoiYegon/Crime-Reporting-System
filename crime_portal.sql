-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Service_No` varchar(20) NOT NULL,
  `names` varchar(50) NOT NULL,
  `Id_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Service_No`, `names`, `Id_no`) VALUES
('1234567890', 'Evans', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(255) NOT NULL,
  `replies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hey|hello|hi|hy|hello there', 'hello there'),
(2, 'what do this system does|what do i do with this system', 'this is crime management system which you use to record all crimes and complains. Just like a log book but more advanced.'),
(3, 'okey|well|fine', 'were you satisfied'),
(4, 'yes|yeah|of course', 'okey, thank you for chatting wit us. looking forward to offering better services to you. Have a nice time. Bye.'),
(5, 'bye|good bye|by|you too|nice time too', '...'),
(6, 'where are you from', 'am from kenya police headquarters, Nairobi'),
(7, 'what is your name', 'I\'m Evans chatbot'),
(8, 'nice knowing you|nice chatting with you|pleasure knowing you|pleasure chatting with you|happy knowing you', 'pleasure is mine too user'),
(9, '.|,|;|\'|:|..|...|,,|,,,', 'pardon? It seems I did not get what you said.'),
(10, 'how can i add new user or admin', 'first, you should be an admin and has an account with us. second, after you sign in, go to \"new user/admin\" button at a the to navbar.');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_report`
--

CREATE TABLE `complaint_report` (
  `Complaint_Id` varchar(20) NOT NULL,
  `Complainant_Name` varchar(50) NOT NULL,
  `Id_Number` int(16) NOT NULL,
  `Residence` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_report`
--

INSERT INTO `complaint_report` (`Complaint_Id`, `Complainant_Name`, `Id_Number`, `Residence`, `Date`, `Details`) VALUES
('12351276', 'Evans Kipngeno', 27662846, 'Bomet', '2020-11-25', 'Two children arrested with no offense');

-- --------------------------------------------------------

--
-- Table structure for table `crime_report`
--

CREATE TABLE `crime_report` (
  `Crime_Id` varchar(50) NOT NULL,
  `Informer_Name` varchar(50) NOT NULL,
  `Id_no` int(11) NOT NULL,
  `Crime_Type` varchar(50) NOT NULL,
  `Place_of_Crime` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime_report`
--

INSERT INTO `crime_report` (`Crime_Id`, `Informer_Name`, `Id_no`, `Crime_Type`, `Place_of_Crime`, `Date`, `Description`) VALUES
('2679', 'RONALD KIRUI', 37896624, 'Robbery', 'Cheptingting', '2020-11-23', 'there was a robbery happened at around 6pm');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Date` date NOT NULL,
  `Details` varchar(500) NOT NULL,
  `Place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Date`, `Details`, `Place`) VALUES
('2020-11-24', 'The system will not be working on Sunday', 'System management');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Service_No` varchar(50) NOT NULL,
  `names` varchar(50) NOT NULL,
  `Id_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Service_No`, `names`, `Id_no`) VALUES
('1234567890', 'Evans', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
