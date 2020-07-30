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
-- Table structure for table `medclaim`
--

CREATE TABLE `medclaim` (
  `itype` varchar(10) NOT NULL,
  `claimno` varchar(20) NOT NULL,
  `passno` varchar(20) NOT NULL,
  `dest` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `place` varchar(30) NOT NULL,
  `accdate` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `hosp` varchar(50) NOT NULL,
  `medex` int(20) NOT NULL,
  `prior` varchar(100) NOT NULL,
  `phy` varchar(50) NOT NULL,
  `list` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medclaim`
--

INSERT INTO `medclaim` (`itype`, `claimno`, `passno`, `dest`, `name`, `cname`, `email`, `phone`, `descrip`, `place`, `accdate`, `time`, `hosp`, `medex`, `prior`, `phy`, `list`) VALUES
('silver', '68931749', '5693782241', 'New Delhi', 'Tyrion Lannister', 'Jamie Lannister', 'lannister@gmail.com', '6969696969', 'Accident', 'Blackwater', '2020-04-06', '22:30', 'Septon Hospital', 55000, 'Handicapped prior to the accident', 'Dr. Batra MBBS', 'X-Ray and Stitching up the wounds'),
('platinum', '37133788', '5656443478', 'Italy', 'Ken Adams', 'Jack Adams', 'kenadams77@gmail.com', '8828382544', 'Ligament Tear', 'Italy', '2020-11-05', '05:05', 'KM Hospital', 45250, 'None', 'Dr. Meridith Grey', 'Stitching');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medclaim`
--
ALTER TABLE `medclaim`
  ADD PRIMARY KEY (`claimno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
