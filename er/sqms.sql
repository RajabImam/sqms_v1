-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 06:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqms`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transaction_reference` varchar(45) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `device_code` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `classification` varchar(45) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`device_code`, `name`, `classification`, `age`, `user_id`) VALUES
(1234, 'Bingo', 'Dog', '2022-01-02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sleep_metrics`
--

CREATE TABLE `sleep_metrics` (
  `id` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `temperature` double DEFAULT NULL,
  `heart_rate` double DEFAULT NULL,
  `oxygen_saturation` double DEFAULT NULL,
  `snoring_detection` varchar(45) DEFAULT NULL,
  `accelerometer_data` varchar(45) DEFAULT NULL,
  `pets_device_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `subscription` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_on`, `subscription`, `start_date`, `end_date`) VALUES
(4, 'Rajab Mohammed', 'Imam', 'rajabimam@yahoo.com', '07060679578', '123456', '2022-01-04', 'FREE', '2022-01-04', '2023-01-04'),
(5, 'Ndajiya', 'Idris', 'ali@gmail.com', '08034567891', '123456', '2022-01-04', 'FREE', '2022-01-04', '2023-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_user1_idx` (`user_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`device_code`),
  ADD KEY `fk_pets_user_idx` (`user_id`);

--
-- Indexes for table `sleep_metrics`
--
ALTER TABLE `sleep_metrics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sleep_metrics_pets1_idx` (`pets_device_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sleep_metrics`
--
ALTER TABLE `sleep_metrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `fk_pets_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sleep_metrics`
--
ALTER TABLE `sleep_metrics`
  ADD CONSTRAINT `fk_sleep_metrics_pets1` FOREIGN KEY (`pets_device_code`) REFERENCES `pets` (`device_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
