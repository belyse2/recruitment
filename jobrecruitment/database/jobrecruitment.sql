-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 04:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobrecruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `message` varchar(400) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fname`, `lname`, `email`, `title`, `message`, `ID`) VALUES
('cantona', 'Hirwa', 'cant@gmail.com', 'BOSS', 'well', 1),
('eddy', 'Hirwa', 'eedwin@gmail.com', 'BOSS', '   welcome client', 3),
('belyse', 'ishimwe', 'belyse@gmail.com', 'BOSS', 'mmmm', 6),
('belyse', 'ishimwe', 'belyse@gmail.com', 'BOSS', 'mmmm', 7),
('par', 'umuhoza', 'belyse@gmail.com', 'klkkk', 'mmmm', 8),
('belyse', 'ishimwe', 'belyse@gmail.com', 'koll', 'gfjfsrhtrjjj', 9);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `currentaddress` varchar(300) NOT NULL,
  `permanantaddress` varchar(300) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cv` varchar(800) NOT NULL,
  `position` varchar(100) NOT NULL,
  `currentemployeed` tinyint(1) NOT NULL,
  `startdate` date NOT NULL,
  `availlability` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `comfrmpassword` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `phone`, `password`, `comfrmpassword`, `id`) VALUES
('gyy', 'hghh', 'mukahirwa@gmail.com', 678575745, '12345', '12345', 1),
('pappy', 'ineza', 'pappy@gmail.com', 78965432, '567', '567', 3),
('belyse', 'ishimwe', 'belyse@gmail.com', 782709248, '222', '222', 4),
('erifc', 'yany', 'mukahirwa@gmail.com', 678575745, '909', '909', 5),
('erifc', 'yany', 'mukahirwa@gmail.com', 678575745, '909', '909', 6),
('belyse', 'ishimwe', 'belyse@gmail.com', 782709248, '345', '345', 7),
('FFF', 'DDD', 'ggg@gmail.com', 782709248, '123', '123', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
