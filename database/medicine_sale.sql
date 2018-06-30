-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 06:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine_sale`
--

CREATE TABLE `medicine_sale` (
  `id` int(40) NOT NULL,
  `medicinename` varchar(50) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `price` varchar(50) NOT NULL,
  `totalprice` varchar(50) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_sale`
--

INSERT INTO `medicine_sale` (`id`, `medicinename`, `quantity`, `price`, `totalprice`, `patientname`, `created_at`) VALUES
(1, 'tanic', '10', '10', '10', 'Sowmya', '2018-06-27 09:46:52'),
(2, 'tanic', '4', '10', '10', 'Sowmya', '2018-06-27 09:46:52'),
(3, '', '', '', '', '', '2018-06-27 09:46:52'),
(4, '', '', '', '', '', '2018-06-27 09:46:52'),
(5, 'cirap', '4', '', '', 'Sowmya', '2018-06-27 09:46:52'),
(6, 'cirap', '4', '8', '8', 'Sankar', '2018-06-27 09:46:52'),
(7, '', '', '', '', '', '2018-06-27 09:46:52'),
(8, '', '', '', '', '', '2017-06-27 09:46:52'),
(9, '', '', '', '', '', '2018-06-27 09:46:52'),
(10, '', '', '', '', '', '2018-06-27 09:46:52'),
(11, 'cirap', '', '160', '160', 'Sankar', '2018-06-27 09:46:52'),
(12, 'cirap', '', '20', '20', 'Sankar', '2018-05-27 09:46:52'),
(13, 'cirap', '', '30', '30', 'Sankar', '2018-06-27 09:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine_sale`
--
ALTER TABLE `medicine_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_sale`
--
ALTER TABLE `medicine_sale`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
