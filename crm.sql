-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 11:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cName` varchar(235) NOT NULL,
  `cMode` varchar(235) NOT NULL,
  `cPrice` varchar(235) NOT NULL,
  `created_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cName`, `cMode`, `cPrice`, `created_Date`, `modify_Date`) VALUES
(1, 'Informatica Power Center', 'Online', '$300', '2017-05-20 12:01:38', '2017-05-20 12:01:38'),
(2, 'Informatica MDM Training', 'Online', '$300', '2017-05-22 09:57:02', '2017-05-22 09:57:02'),
(3, 'ETL Testing Training', 'Online', '$300', '2017-05-22 10:05:57', '2017-05-22 10:05:57'),
(8, 'Informatica Power Center Self-Paced', 'Self-Paced', '$100', '2017-05-23 08:59:58', '2017-05-23 08:59:58'),
(9, 'Informatica Data Quality Training', 'Online', '$300', '2017-05-23 09:15:21', '2017-05-23 09:15:21'),
(10, 'Blue Prism Training', 'Online', '$300', '2017-05-23 09:16:38', '2017-05-23 09:16:38'),
(11, 'Automation Anywhere Training', 'Online', '$300', '2017-05-23 09:17:02', '2017-05-23 09:17:02'),
(12, 'Data Modeling Training', 'Online', '$300', '2017-05-23 09:18:25', '2017-05-23 09:18:25'),
(13, 'Informatica Cloud Training', 'Online', '$300', '2017-05-23 09:18:53', '2017-05-23 09:18:53'),
(14, 'Microsoft Power BI Training', 'Online', '$300', '2017-05-23 09:19:14', '2017-05-23 09:19:14'),
(19, 'Ui path', 'Online', '300$', '2017-06-27 11:02:28', '2017-06-27 11:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `coursesassigned` json DEFAULT NULL,
  `target` int(235) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `emailId`, `role`, `password`, `coursesassigned`, `target`, `created_date`) VALUES
(1, 'admin', 'admin@tekclasses.com', 'admin', 'admin123', 'null', 0, '2017-05-09 07:41:12'),
(2, 'marketing', 'pradeep@tekclasses.com', 'marketing', 'marketing123', 'null', 0, '2017-05-09 07:42:39'),
(3, 'sales', 'info@tekclasses.com', 'sales', 'sales123', 'null', 0, '2017-05-09 07:43:18'),
(18, 'Gopi', 'gopi@tekclasses.com', 'sales', 'gopi', 'null', 0, '2017-05-20 10:10:52'),
(19, 'Pradeep', 'pradeep@tekclasses.com', 'marketing', 'pradeep', 'null', 0, '2017-05-20 10:12:53'),
(7, 'vishnu', 'vishnu@tekclasses.com', 'marketing', 'vishnu', 'null', 0, '2017-05-19 12:09:28'),
(20, 'Vignesh', 'vigmesh@tekclasses.com', 'Sales', 'vignesh', 'null', 0, '2017-05-20 10:20:17'),
(21, 'Dharmendra', 'dharmendra@tekclasses.com', 'Marketing', 'dharmendra', 'null', 0, '2017-05-20 10:22:36'),
(22, 'Sumit', 'sumit@databi.co', 'Marketing', 'sumit', 'null', 0, '2017-05-20 10:24:52'),
(27, 'Sainath', 'sainath@tekclasses.com', 'Marketing', 'saiath', 'null', 0, '2017-05-23 08:53:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
