-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 03:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userid` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `claimno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userid`, `email`, `pass`, `claimno`) VALUES
('adly1988', 'adlyalva@gmail.com', 'adly1988', '89813910'),
('amybob12', 'amybob12@live.in', 'amybob12', '51557074'),
('clarkkent35', 'clark35@hotmail.com', 'clarkkent35', NULL),
('drstephen2', 'stephenstrange@live.in', 'drstephen2', NULL),
('kenadams77', 'kenadams77@gmail.com', 'kenadams77', '37133788'),
('pfrancis1', 'pfrancis1@gmail.com', 'pfrancis1', '78209092'),
('rachel87', 'rachel87@hotmail.com', 'rachel87', '21858723'),
('regina45', 'regina@yahoo.com', 'regina45', '38769531'),
('ricky123', 'ricky12345@gmail.com', 'ricky123', '19707573'),
('sansa666', 'sansa666@yahoo.com', 'sansa666', '98171657'),
('scott452', 'scott452@redifmail.com', 'scott452', '39333767'),
('tyrion78', 'lannister@gmail.com', 'tyrion78', '68931749');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
