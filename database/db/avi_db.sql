-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 07:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_tbl`
--

CREATE TABLE `user_accounts_tbl` (
  `uat_id` int(6) NOT NULL,
  `uat_email` varchar(50) NOT NULL,
  `uat_password` varchar(255) NOT NULL,
  `uat_create_time` varchar(20) NOT NULL,
  `uat_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts_tbl`
--

INSERT INTO `user_accounts_tbl` (`uat_id`, `uat_email`, `uat_password`, `uat_create_time`, `uat_create_date`) VALUES
(1, 'braylynn.xhaiden@fallinhay.com', 'braylynn.xhaiden@fallinhay.com', '9:07:45:pm', '25/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `user_map_level_progress_tbl`
--

CREATE TABLE `user_map_level_progress_tbl` (
  `umlpt_id` int(6) NOT NULL,
  `umlpt_uat_id` int(6) NOT NULL,
  `umlpt_level` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_map_level_progress_tbl`
--

INSERT INTO `user_map_level_progress_tbl` (`umlpt_id`, `umlpt_uat_id`, `umlpt_level`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_update_pass_tbl`
--

CREATE TABLE `user_update_pass_tbl` (
  `uupt_id` int(6) NOT NULL,
  `uupt_email` varchar(50) NOT NULL,
  `uupt_verification_link` varchar(255) NOT NULL,
  `uupt_create_time` varchar(20) NOT NULL,
  `uupt_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_update_pass_tbl`
--

INSERT INTO `user_update_pass_tbl` (`uupt_id`, `uupt_email`, `uupt_verification_link`, `uupt_create_time`, `uupt_create_date`) VALUES
(1, 'braylynn.xhaiden@fallinhay.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification_tbl`
--

CREATE TABLE `user_verification_tbl` (
  `uvt_id` int(6) NOT NULL,
  `uvt_email` varchar(255) NOT NULL,
  `uvt_password` varchar(255) NOT NULL,
  `uvt_email_code` int(6) NOT NULL,
  `uvt_verified` tinyint(1) NOT NULL,
  `uvt_create_time` varchar(20) NOT NULL,
  `uvt_create_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_verification_tbl`
--

INSERT INTO `user_verification_tbl` (`uvt_id`, `uvt_email`, `uvt_password`, `uvt_email_code`, `uvt_verified`, `uvt_create_time`, `uvt_create_date`) VALUES
(1, 'braylynn.xhaiden@fallinhay.com', 'braylynn.xhaiden@fallinhay.com', 777963, 1, '9:07:21:pm', '25/10/2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  ADD PRIMARY KEY (`uat_id`);

--
-- Indexes for table `user_map_level_progress_tbl`
--
ALTER TABLE `user_map_level_progress_tbl`
  ADD PRIMARY KEY (`umlpt_id`);

--
-- Indexes for table `user_update_pass_tbl`
--
ALTER TABLE `user_update_pass_tbl`
  ADD PRIMARY KEY (`uupt_id`);

--
-- Indexes for table `user_verification_tbl`
--
ALTER TABLE `user_verification_tbl`
  ADD PRIMARY KEY (`uvt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  MODIFY `uat_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_map_level_progress_tbl`
--
ALTER TABLE `user_map_level_progress_tbl`
  MODIFY `umlpt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_update_pass_tbl`
--
ALTER TABLE `user_update_pass_tbl`
  MODIFY `uupt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_verification_tbl`
--
ALTER TABLE `user_verification_tbl`
  MODIFY `uvt_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
