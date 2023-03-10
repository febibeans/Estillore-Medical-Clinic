-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 02:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `mnf_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `name`, `quantity`, `price`, `exp_date`, `mnf_date`) VALUES
(1, 'Omeprazole', 100, '20.00', '2023-03-01', '2023-02-01'),
(2, 'Gaviscon', 20, '100.00', '2023-03-01', '2023-02-01'),
(3, 'Pre-natal Multi-vitamins', 30, '35.00', '2023-03-11', '2023-03-01'),
(4, 'Paracetamol Adults', 50, '50.00', '2023-03-07', '2023-03-03'),
(5, 'Paracetamol Infants/Kids', 60, '20.00', '2023-03-17', '2023-01-05'),
(6, 'Paracetamol Suppository', 23, '23.00', '2023-03-02', '2023-03-02'),
(7, 'Amlodipine', 12, '12.00', '2023-03-25', '2023-03-22'),
(8, 'Metformin', 34, '356.00', '2023-03-01', '2023-03-01'),
(9, 'Catapres', 45, '450.00', '2023-03-24', '2023-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `name`, `email`, `username`, `phone`, `age`, `dob`, `password`, `create_datetime`) VALUES
(1, 'Jem Angeles', 'jerremyandrewsangeles13@gmail.com', 'febibeans', 2147483647, 23, '1999-11-09', '202cb962ac59075b964b07152d234b70', '2023-02-25 17:48:47'),
(2, 'Mamamo', 'mamamo@gmail.com', 'mamamoo', 23456789, 21, '2023-03-06', 'c4ca4238a0b923820dcc509a6f75849b', '2023-03-10 13:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `supply_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `mnf_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`supply_id`, `name`, `quantity`, `price`, `exp_date`, `mnf_date`) VALUES
(1, 'Syringe', 5, '5.00', '2023-03-01', '2023-03-01'),
(2, 'Blade', 5, '5.00', '2023-03-01', '2023-03-01'),
(3, 'Needle Silk', 1, '1.00', '2023-03-01', '2023-03-01'),
(4, 'Gloves', 1, '1.00', '2023-01-01', '2023-01-01'),
(5, 'Hair Cap', 1, '1.00', '2023-03-01', '2023-03-01'),
(6, 'Facemask', 1, '1.00', '2023-03-01', '2023-03-01'),
(7, 'Cotton Ball', 1, '1.00', '2023-03-01', '2023-03-01'),
(8, 'Alcohol', 2, '2.00', '2023-03-01', '2023-03-01'),
(9, 'Betadine', 2, '2.00', '2023-03-02', '2023-03-02'),
(10, 'Hydrogen Peroxide', 2, '2.00', '2023-03-01', '2023-03-01'),
(11, 'Lubricating Jelly', 3, '3.00', '2023-03-01', '2023-03-01'),
(12, 'Ultrasound Gel', 2, '2.00', '2023-03-01', '2023-03-01'),
(13, 'Micropore Tape', 1, '1.00', '2023-03-01', '2023-03-01'),
(14, 'Pregnancy Test Kit', 1, '1.00', '2023-03-01', '2023-03-01'),
(15, 'CBG Monitoring Kit', 1, '1.00', '2023-03-01', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vaccine_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `mnf_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vaccine_id`, `name`, `quantity`, `price`, `exp_date`, `mnf_date`) VALUES
(1, 'Flu Vaccine', 30, '1.00', '2023-03-01', '2023-03-01'),
(2, 'Chicken Pox Vaccine', 30, '1.00', '2023-03-01', '2023-03-01'),
(3, 'Pneumonia Vaccine', 1, '1.00', '2023-03-01', '2023-03-01'),
(4, '6-in-1 Vaccine', 24, '24.00', '2023-03-03', '2023-03-03'),
(5, '5-in-1 Vaccine ', 24, '24.00', '2023-03-04', '2023-03-04'),
(6, 'Measles Vaccine', 35, '35.00', '2023-03-08', '2023-03-08'),
(7, 'Japanese Encephalitis Vaccine', 46, '46.00', '2023-03-15', '2023-03-15'),
(8, 'Tetanus Toxoid Vaccine', 69, '69.00', '2023-03-09', '2023-03-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`supply_id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `supply_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vaccine_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
