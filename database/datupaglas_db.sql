-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 08:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datupaglas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--
-- Fixed SQL Dump

CREATE DATABASE datupaglas_db;
USE datupaglas_db;

-- Table: property_details
CREATE TABLE `property_details` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `pro_barangay` VARCHAR(50) NOT NULL,
  `pro_municipality` VARCHAR(50) NOT NULL,
  `pro_province` VARCHAR(50) NOT NULL,
  `type_of_property` VARCHAR(50) NOT NULL,
  `assessed_value` VARCHAR(255) NOT NULL,
  `area_size` VARCHAR(50) NOT NULL,
  `tax_rate` VARCHAR(255) NOT NULL,
  `ownership_type` VARCHAR(50) NOT NULL,
  `classification` VARCHAR(100) NOT NULL,
  `occupancy_status` VARCHAR(50) NOT NULL,
  `property_use` VARCHAR(50) NOT NULL,
  `lad` DATE NOT NULL,
  `nad` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `property_details` 
(`pro_barangay`, `pro_municipality`, `pro_province`, `type_of_property`, `assessed_value`, `area_size`, `tax_rate`, `ownership_type`, `classification`, `occupancy_status`, `property_use`, `lad`, `nad`) 
VALUES 
('DATANG', 'DATU PAGLAS', 'MAGUINDANAO DEL SUR', 'Residential', '20.00', '5sqm', '2.00', 'Single Owner', 'Residential with minor commercial usage', 'Owner-Occupied', 'Residential', '2010-05-19', '2025-05-19');

-- Table: taxpayer_details
CREATE TABLE `taxpayer_details` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `lastname` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(255) NOT NULL,
  `middlename` VARCHAR(255) NOT NULL,
  `birthdate` date NOT NULL,
  `pob_barangay` VARCHAR(255) NOT NULL,
  `pob_municipality` VARCHAR(255) NOT NULL,
  `pob_province` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `contactnum` VARCHAR(255) NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  `gender` VARCHAR(255) NOT NULL,
  `add_barangay` VARCHAR(255) NOT NULL,
  `add_municipality` VARCHAR(255) NOT NULL,
  `add_province` VARCHAR(255) NOT NULL,
  `ap_lastname` VARCHAR(255) NOT NULL,
  `ap_firstname` VARCHAR(255) NOT NULL,
  `ap_middlename` VARCHAR(255) NOT NULL,
  `ap_barangay` VARCHAR(255) NOT NULL,
  `ap_municipality` VARCHAR(255) NOT NULL,
  `ap_province` VARCHAR(255) NOT NULL,
  `ap_email` VARCHAR(255) NOT NULL,
  `ap_contactnum` VARCHAR(255) NOT NULL,
  `relationship` VARCHAR(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  INSERT INTO `taxpayer_details` 
(`lastname`, `firstname`, `middlename`, `birthdate`, `pob_barangay`, `pob_municipality`, `pob_province`, `email`, `contactnum`, `status`, `gender`, `add_barangay`, `add_municipality`, `add_province`, `ap_lastname`, `ap_firstname`, `ap_middlename`, `ap_barangay`, `ap_municipality`, `ap_province`, `ap_email`, `ap_contactnum`, `relationship`)  
VALUES 
('DELA CRUZ', 'JUAN', 'DATANG', '2002-05-19', 'Datang', 'Datu Paglas', 'Maguindanao', 'datangjennyfe@gmail.com', '0949-098-8346', 'Single', 'Male', 'Datang', 'Datu Paglas', 'Maguindanao', 'Datang', 'Meldred', 'Tadios', 'Datang', 'Datu Paglas', 'Maguindanao', 'melydatang@gmail.com', '0918-491-2177', 'Mother');


-- Table: taxpayer_list
CREATE TABLE `taxpayer_list` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `avatar` VARCHAR(255) DEFAULT NULL,
  `fullname` VARCHAR(100) NOT NULL,
  `type_of_property` VARCHAR(30) DEFAULT NULL,
  `status` VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `taxpayer_list` (`avatar`, `fullname`, `type_of_property`, `status`) 
VALUES 
('default.png', 'JUAN DELA CRUZ', 'Residential', 'Pending');

-- Table: users
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `fullname` VARCHAR(255) NOT NULL,
  `type_of_user` VARCHAR(255) NOT NULL,
  `username` VARCHAR(50) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`fullname`, `type_of_user`, `username`, `password`) 
VALUES 
('Admin User', 'admin', 'admin', 'admin123');

-- Table: user_details
CREATE TABLE `user_details` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_lastname` VARCHAR(50) NOT NULL,
  `user_firstname` VARCHAR(50) NOT NULL,
  `user_middlename` VARCHAR(50) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `user_type` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_details` (`user_lastname`, `user_firstname`, `user_middlename`, `username`, `password`, `user_type`) 
VALUES 
('COPPER', 'MARK', 'T', 'admin', 'admin123', 'admin');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
ADD PRIMARY KEY (`id`) REFERENCES `taxpayer_list` (`id`);

--
-- Indexes for table `taxpayer_list`
--
ALTER TABLE `taxpayer_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taxpayer_list`
--
ALTER TABLE `taxpayer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_details`
--
ALTER TABLE `property_details`
FOREIGN KEY (`id`) REFERENCES `taxpayer_list` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
