-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 06:08 PM
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
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `classification` varchar(45) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `classification`, `age`, `user_id`) VALUES
(1, 'Bingo', 'Dog', '2019-03-06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pets_has_sleep_metrics`
--

CREATE TABLE `pets_has_sleep_metrics` (
  `pets_id` int(11) NOT NULL,
  `sleep_metrics_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `type`, `start_date`, `end_date`, `created_on`, `user_id`) VALUES
(1, 'Paid', '2021-12-18', '2022-12-18', '2021-12-18 17:26:54', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sleep_metrics`
--

CREATE TABLE `sleep_metrics` (
  `id` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `temperature` varchar(45) DEFAULT NULL,
  `heart_rate` int(11) NOT NULL,
  `oxygen_saturation` int(11) NOT NULL,
  `snoring_detection` varchar(45) NOT NULL,
  `accelerometer_data` varchar(45) NOT NULL
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
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_on`) VALUES
(1, 'Rajab', 'Imam', 'rajabimam@yahoo.com', '07060679578', '$2y$10$.zInPwE1ESxprxK3NYKZK.zXUrU91M0zOcOcSGFStLa6NNjxIXlsO', '2021-11-21 01:02:38'),
(3, 'Ndajiya', 'Idris', 'ali@gmail.com', '08034567891', '123456', '2021-12-12 19:38:55');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pets_user_idx` (`user_id`);

--
-- Indexes for table `pets_has_sleep_metrics`
--
ALTER TABLE `pets_has_sleep_metrics`
  ADD PRIMARY KEY (`pets_id`,`sleep_metrics_id`),
  ADD KEY `fk_pets_has_sleep_metrics_sleep_metrics1_idx` (`sleep_metrics_id`),
  ADD KEY `fk_pets_has_sleep_metrics_pets1_idx` (`pets_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_plan_user1_idx` (`user_id`);

--
-- Indexes for table `sleep_metrics`
--
ALTER TABLE `sleep_metrics`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sleep_metrics`
--
ALTER TABLE `sleep_metrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `pets_has_sleep_metrics`
--
ALTER TABLE `pets_has_sleep_metrics`
  ADD CONSTRAINT `fk_pets_has_sleep_metrics_pets1` FOREIGN KEY (`pets_id`) REFERENCES `pets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pets_has_sleep_metrics_sleep_metrics1` FOREIGN KEY (`sleep_metrics_id`) REFERENCES `sleep_metrics` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `fk_plan_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
