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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `claimno` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `dep` varchar(30) DEFAULT NULL,
  `dest` varchar(30) DEFAULT NULL,
  `fr` varchar(10) DEFAULT NULL,
  `till` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `pincode` int(10) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `residence` varchar(30) DEFAULT NULL,
  `nname` varchar(30) DEFAULT NULL,
  `ndob` varchar(30) DEFAULT NULL,
  `nrelation` varchar(30) DEFAULT NULL,
  `npno` varchar(20) DEFAULT NULL,
  `mdp` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `itype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`claimno`, `name`, `dob`, `dep`, `dest`, `fr`, `till`, `email`, `phone`, `pincode`, `state`, `city`, `residence`, `nname`, `ndob`, `nrelation`, `npno`, `mdp`, `age`, `duration`, `itype`) VALUES
('68931749', 'Tyrion Lannister', '1988-02-02', 'Los Angeles', 'New Delhi', '2020-05-05', '2020-08-08', 'lannister@gmail.com', '6969696969', 400069, 'Delhi', 'Agra', 'Avenue Park', 'Jamie Lannister', '1987-02-02', 'Brother', '7899654432', 'Handicapped', 30, '2', 'silver'),
('98171657', 'Sansa Turner', '1994-05-06', 'Goa', 'Dubai', '2019-11-01', '2020-03-06', 'sansa666@yahoo.com', '7045225407', 401101, 'Goa', 'Panjim', 'Sea lake Apt', 'Sophie Stark', '1991-08-09', 'Sister', '7689034417', 'Blood pressure', 25, '1', 'gold'),
('38769531', 'Regina Phalange', '1975-07-07', 'Ohio', 'Yemen', '2020-02-01', '2020-05-07', 'regina@yahoo.com', '7977529507', 503671, 'Brooklyn', 'Utah', '5th Park Avenue', 'Ursula Buffay', '1975-06-06', 'Sister', '7329562233', '', 30, '', 'silver'),
('19707573', 'Ricky Noro', '1997-05-22', 'Kolkata', 'Australia', '2019-10-27', '2020-01-04', 'ricky12345@gmail.com', '8456123456', 700001, 'West Bengal', 'Kolkata', '102/C, Sarsha Apt.', 'Richie Noro', '1995-07-03', 'Brother', '8456123456', 'Sinus', 22, '6 years', 'gold'),
('37133788', 'Ken Adams', '1973-04-05', 'New York', 'Italy', '2020-05-04', '2020-05-07', 'kenadams77@gmail.com', '8828382544', 400011, 'Alabama', 'Kentucky', 'Sunflower Apt', 'Jack Adams', '1970-07-06', 'Brother', '9955463972', '', 20, '', 'platinum'),
('78209092', 'Peter Francis', '1950-07-06', 'Venice', 'Jerusalem', '2019-09-08', '2020-06-05', 'pfrancis1@gmail.com', '8879887988', 400088, 'Milan', 'Java Island', 'Bhopal', 'Popatlal Francis', '1945-06-03', 'Father', '9807980788', 'Goitre', 66, '8', 'platinum'),
('51557074', 'Amy Bob', '1977-06-06', 'Monte Carlo', 'Las Vegas', '2019-06-06', '2020-07-07', 'amybob12@live.in', '8988898877', 400089, 'Alaska', 'El Paso', '7-11 Next Avenue', 'Sheldon Bob', '1976-04-04', 'Husband', '9654545454', 'Mental Illness', 55, '4', 'silver'),
('39333767', 'Emma Chamberlain', '1960-07-08', 'Chennai', 'Paris', '2020-05-02', '2020-07-06', 'emmac@gmail.com', '9137585292', 400120, 'Tamil Nadu', 'Karnataka', 'Dosa Residency', 'Brie Chamberlain', '1965-03-04', 'Mother', '9334455674', 'Constipation', 59, '4', 'platinum'),
('89813910', 'ADLY ALVA', '1989-02-03', 'Mumbai', 'Denmark', '2019-09-21', '2019-11-30', 'adlyalva@gmail.com', '9869031221', 400064, 'Maharashtra', 'MUMBAI', 'MUMBAI', 'JIM ALVA', '1988-07-09', 'Brother', '8790564322', '', 30, '', 'silver'),
('21858723', 'Rachel Green', '1977-03-04', 'London', 'Africa', '2019-04-05', '2020-06-06', 'rachel87@hotmail.com', '9877987798', 400098, 'Andaman Island', 'Peru', 'Coconut Bldg', 'Ross Geller', '1960-05-05', 'Father', '8686868686', 'Diarheoa', 44, '4', 'gold');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
