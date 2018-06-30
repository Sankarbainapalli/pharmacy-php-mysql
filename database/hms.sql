-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 12:46 PM
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
-- Table structure for table `add_medicine`
--

CREATE TABLE `add_medicine` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_medicine`
--

INSERT INTO `add_medicine` (`id`, `name`, `description`) VALUES
(1, 'tablet', 'tablets busindnd'),
(2, 'cirap', 'tanic'),
(3, 'tanic', 'cirap'),
(4, 'cirap', 'tanllelle'),
(5, 'tablet', 'tetstts'),
(6, 'tablet', 'Dolo'),
(7, 'cirap', 'vils');

-- --------------------------------------------------------

--
-- Table structure for table `add_medicine2`
--

CREATE TABLE `add_medicine2` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `totalquantity` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_medicine2`
--

INSERT INTO `add_medicine2` (`id`, `name`, `category`, `price`, `totalquantity`, `description`) VALUES
(6, 'scolate', 'tanic', '2', '20', 'test'),
(8, 'cira', 'cirap', '3', '60', 'uuuu'),
(9, 'tablet', 'tablet', '500', '100', 'vilas');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_tb`
--

CREATE TABLE `doctor_tb` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_tb`
--

INSERT INTO `doctor_tb` (`id`, `doctorname`) VALUES
(1, 'Mr Gupta'),
(2, 'Mrs sumitra'),
(3, 'Mr Choudary');

-- --------------------------------------------------------

--
-- Table structure for table `login_id`
--

CREATE TABLE `login_id` (
  `id` int(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_id`
--

INSERT INTO `login_id` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

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
(1, 'cirap', '', '60', '60', 'Sankar', '2018-06-28 12:18:09'),
(2, 'cirap', '10', '30 ', '30 ', 'Sankar', '2018-06-29 14:20:37'),
(3, 'cirap', '2', '6 ', '6 ', 'Sankar', '2018-06-29 14:24:31'),
(4, 'cirap', '5', '15 ', '15 ', 'Sankar', '2018-06-29 16:13:50'),
(5, 'cirap', '', '12 ', '12 ', 'Sankar', '2018-06-29 16:17:15'),
(6, 'tanic', '', '2000 ', '2000 ', 'Sankar', '2018-06-30 10:08:34'),
(7, 'tanic', '', '2000 ', '2000 ', 'Sankar', '2018-06-30 10:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobilenumber` varchar(60) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`patient_id`, `name`, `mobilenumber`, `doctorname`, `course`, `amount`, `date`, `created_at`) VALUES
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-20', '0000-00-00 00:00:00.00000'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-20', '2018-06-20 10:29:54.02026'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'COSTOCHONDRAL INJECTION', '500', '2018-06-20', '2018-06-20 10:33:54.51401'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'PERIPHERAL NERVE BLOCKS', '240', '2018-06-20', '2018-06-20 10:35:56.76600'),
('20061801', 'Sowmya', '8886021616', 'Mrs sumitra', 'INTERLAMINAR EPIDURAL INJECTION', '240', '2018-06-20', '2018-06-20 10:56:44.82439'),
('20061803', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '240', '2018-06-20', '2018-06-20 11:11:42.40673'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-20', '2018-06-20 12:03:23.15808'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'kNEE JOINT INJECTION', '240', '2018-06-20', '2018-06-20 15:05:38.87117'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-21', '2018-06-21 10:32:56.23756'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '64', '2018-06-22', '2018-06-22 10:16:10.68149');

-- --------------------------------------------------------

--
-- Table structure for table `registration_tb`
--

CREATE TABLE `registration_tb` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `attachment` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `amount` int(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `doctors` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patient_id` varchar(255) NOT NULL,
  `patient` varchar(20) NOT NULL,
  `age` int(30) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tb`
--

INSERT INTO `registration_tb` (`id`, `name`, `fathername`, `mobilenumber`, `bloodgroup`, `gender`, `doctorname`, `attachment`, `dateofbirth`, `amount`, `address`, `doctors`, `created_at`, `patient_id`, `patient`, `age`, `date`, `course`) VALUES
(1, 'Sankar', 'Mahendra', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 1000, 'Hyderabad', '', '2018-06-20 09:45:44', '20061800', '', 35, '2018-06-20', ''),
(2, 'Sowmya', 'Mahendra', '8886021616', '', 'Female', 'Mrs sumitra', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 10:55:14', '20061801', '', 23, '2018-06-20', ''),
(3, 'Sowmya', 'Mahendra', '8886021616', '', 'Female', 'Mr Gupta', '', '0000-00-00', 7000, 'Suchitra', '', '2018-06-20 11:07:10', '20061802', '', 23, '2018-06-20', ''),
(4, 'Sankar', 'Dhanupati', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:08:22', '20061803', '', 23, '2018-06-20', ''),
(5, 'Rakesh', 'Raghu', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:16:41', '20061804', '', 23, '2018-06-20', ''),
(6, 'Eswar', 'Dhamodhar', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:20:26', '20061805', '', 23, '2018-06-20', ''),
(7, 'Sanna', 'Trinadh', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:25:25', '20061806', '', 30, '2018-06-20', ''),
(8, 'Sijatha', 'Ramesh', '8886021616', '', 'Female', 'Mr Gupta', '', '0000-00-00', 240, 'Suchitra', '', '2018-06-20 11:26:25', '20061807', '', 23, '2018-06-20', ''),
(9, 'Ramana', 'Rajesh', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 12:16:00', 'C0008', '', 35, '2018-06-20', ''),
(10, 'Sankar', 'Ramarao', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 500, 'Suchitra', '', '2018-06-20 14:34:49', 'C0009', '', 23, '2018-06-20', ''),
(11, 'Sankar', 'Ramarao', '7661910404', '', 'Male', 'Mrs sumitra', '', '0000-00-00', 7000, 'Hyderabad', '', '2018-06-20 15:04:24', 'C0010', '', 35, '2018-06-20', ''),
(12, 'Sankar', 'Mahendra', '7799539041', '', 'Male', 'Mr Gupta', '', '0000-00-00', 500, 'Hyderabad', '', '2018-06-20 17:40:26', 'C0011', '', 23, '2018-06-20', ''),
(13, 'Sankar', 'Mahendra', '7661910404', '', 'Male', 'Mrs sumitra', '', '0000-00-00', 500, 'Hyderabad', '', '2018-06-21 10:22:49', 'C0012', '', 35, '2018-06-21', ''),
(14, 'Sankr', 'Krishna', '7661910404', '', 'Male', 'Mrs sumitra', '', '0000-00-00', 36, 'Suchitra', '', '2018-06-27 13:55:34', 'C0013', '', 35, '2018-06-27', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_medicine`
--
ALTER TABLE `add_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_medicine2`
--
ALTER TABLE `add_medicine2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_tb`
--
ALTER TABLE `doctor_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_id`
--
ALTER TABLE `login_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_sale`
--
ALTER TABLE `medicine_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_tb`
--
ALTER TABLE `registration_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_medicine`
--
ALTER TABLE `add_medicine`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `add_medicine2`
--
ALTER TABLE `add_medicine2`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor_tb`
--
ALTER TABLE `doctor_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_id`
--
ALTER TABLE `login_id`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine_sale`
--
ALTER TABLE `medicine_sale`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration_tb`
--
ALTER TABLE `registration_tb`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
