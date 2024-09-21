-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 12:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapid_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_medical_history`
--

CREATE TABLE `add_medical_history` (
  `amh_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `past_disease` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_medical_history`
--

INSERT INTO `add_medical_history` (`amh_id`, `name`, `email`, `past_disease`, `allergies`, `blood_group`) VALUES
(1, 'Amna', 'amna@gmail.com', 'no-disease', 'smoke', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

CREATE TABLE `ambulances` (
  `ambulance_id` int(11) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `equipment_level` enum('basic','advanced') NOT NULL,
  `current_status` varchar(50) DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambulances`
--

INSERT INTO `ambulances` (`ambulance_id`, `vehicle_number`, `equipment_level`, `current_status`) VALUES
(7, 'PAX  222', 'basic', 'Unavailable'),
(8, 'AXDF 2356', 'basic', 'Available'),
(9, 'XXXX-8888', 'basic', 'Available'),
(10, 'AAAA-5556', 'basic', 'Unavailable'),
(11, 'QDEG-2345', 'basic', 'Unavailable'),
(12, 'FFFF-6575', 'basic', 'Available'),
(13, 'AAAA-5556', 'basic', 'Available'),
(14, '23', 'basic', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `book_emergency`
--

CREATE TABLE `book_emergency` (
  `emer_user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `ambulance_type` varchar(255) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `reason` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_emergency`
--

INSERT INTO `book_emergency` (`emer_user_id`, `user_name`, `email`, `contact`, `address`, `ambulance_type`, `driver_name`, `reason`) VALUES
(2, 'Amna', 'amna@mail.com', 329775461, 'Hyderabad', '8', '3', 'Heart-attack');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `STATUS` varchar(10) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `first_name`, `last_name`, `phonenumber`, `STATUS`) VALUES
(2, 'Ailza', 'khan', '0324987345', 'Deactive'),
(3, 'Ameer', 'Ali', '034549869786', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `emergencyrequests`
--

CREATE TABLE `emergencyrequests` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `request_time` datetime DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergencyrequests`
--

INSERT INTO `emergencyrequests` (`request_id`, `user_id`, `request_time`, `status`) VALUES
(1, 2, '2024-09-19 19:12:17', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `emt`
--

CREATE TABLE `emt` (
  `emt_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `certification` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emt`
--

INSERT INTO `emt` (`emt_id`, `first_name`, `last_name`, `certification`, `phonenumber`, `email`) VALUES
(2, 'aliza', 'khan', 'Bachelor of Physiotherapy [BPT]', '03002478766', 'Alizakhan@gmail.com'),
(5, 'Dua', 'Ali', 'Bachelor of Unani Medicine & Surgery.', '0333245322', 'dua@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(50) NOT NULL,
  `mesg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `non-emergency`
--

CREATE TABLE `non-emergency` (
  `non_emer_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ambulance_type` varchar(20) NOT NULL,
  `driver_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `non-emergency`
--

INSERT INTO `non-emergency` (`non_emer_id`, `user_name`, `email`, `contact`, `address`, `ambulance_type`, `driver_name`) VALUES
(1, 'bilal', 'b@gmail.com', 2147483647, 'karachi', '13', '3'),
(2, 'Ali', 'ali@gmail.com', 302345536, 'Hyderabad', '7', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phonenumber` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(400) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `date_of_birth`, `address`, `pic`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '034549869786', '0192023a7bbd73250516f069df18b500', '0000-00-00', 'hyderabad', 'images/pic.jpg'),
(3, 'user1', 'sikandar', 'user@gmail.com', '03245172652', 'b9783ea42b7f0c4225e19cdb3e1a7c3a', '1998-09-11', 'karachi', 'images/jk.jpg'),
(4, 'user2', 'khushboo', 'k@gmail.com', '081816726', '202cb962ac59075b964b07152d234b70', '2024-09-19', 'hyderabad', 'images/66ee9771b4f1a4.79146219png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_medical_history`
--
ALTER TABLE `add_medical_history`
  ADD PRIMARY KEY (`amh_id`);

--
-- Indexes for table `ambulances`
--
ALTER TABLE `ambulances`
  ADD PRIMARY KEY (`ambulance_id`);

--
-- Indexes for table `book_emergency`
--
ALTER TABLE `book_emergency`
  ADD PRIMARY KEY (`emer_user_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `emergencyrequests`
--
ALTER TABLE `emergencyrequests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emt`
--
ALTER TABLE `emt`
  ADD PRIMARY KEY (`emt_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `non-emergency`
--
ALTER TABLE `non-emergency`
  ADD PRIMARY KEY (`non_emer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_medical_history`
--
ALTER TABLE `add_medical_history`
  MODIFY `amh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ambulances`
--
ALTER TABLE `ambulances`
  MODIFY `ambulance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book_emergency`
--
ALTER TABLE `book_emergency`
  MODIFY `emer_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emergencyrequests`
--
ALTER TABLE `emergencyrequests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emt`
--
ALTER TABLE `emt`
  MODIFY `emt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `non-emergency`
--
ALTER TABLE `non-emergency`
  MODIFY `non_emer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergencyrequests`
--
ALTER TABLE `emergencyrequests`
  ADD CONSTRAINT `emergencyrequests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
