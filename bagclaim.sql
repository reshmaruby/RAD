-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 03:26 AM
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
-- Table structure for table `bagclaim`
--

CREATE TABLE `bagclaim` (
  `itype` varchar(10) NOT NULL,
  `claimno` varchar(20) NOT NULL,
  `passno` varchar(20) NOT NULL,
  `dest` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `lostw` int(20) NOT NULL,
  `replacew` int(20) NOT NULL,
  `place` varchar(30) NOT NULL,
  `lossdate` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `losscarr` varchar(30) NOT NULL,
  `noticarr` varchar(10) NOT NULL,
  `police` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagclaim`
--

INSERT INTO `bagclaim` (`itype`, `claimno`, `passno`, `dest`, `name`, `cname`, `email`, `phone`, `descrip`, `lostw`, `replacew`, `place`, `lossdate`, `time`, `losscarr`, `noticarr`, `police`) VALUES
('silver', '51557074', '7899012345', 'Las Vegas', 'Amy Bob', 'Sheldon Bob', 'amybob12@live.in', '8988898877', 'Suitcase', 80000, 76540, 'Las Vegas', '2019-06-27', '03:10', 'No', 'No', 'Yes'),
('platinum', '78209092', '6567898803', 'Jerusalem', 'Peter Francis', 'Popatlal Francis', 'pfrancis1@gmail.com', '8879887988', 'Watch', 75000, 69500, 'Jerusalem', '2020-02-12', '17:24', 'No', 'No', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagclaim`
--
ALTER TABLE `bagclaim`
  ADD PRIMARY KEY (`claimno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
