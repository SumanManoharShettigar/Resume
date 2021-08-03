-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 08:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_city` varchar(50) NOT NULL,
  `job_state` varchar(50) NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `job_Description` varchar(255) NOT NULL,
  `sslc_school_name` varchar(50) NOT NULL,
  `sslc_city` varchar(50) NOT NULL,
  `sslc_state` varchar(50) NOT NULL,
  `sslc_grade` float NOT NULL,
  `puc_college_name` varchar(255) NOT NULL,
  `puc_city` varchar(25) NOT NULL,
  `puc_state` varchar(25) NOT NULL,
  `puc_grade` float NOT NULL,
  `engg_college_name` varchar(50) NOT NULL,
  `engg_city` varchar(50) NOT NULL,
  `engg_state` varchar(50) NOT NULL,
  `engg_grade` float NOT NULL,
  `skill1` varchar(100) NOT NULL,
  `skill2` varchar(50) DEFAULT NULL,
  `skill3` varchar(50) DEFAULT NULL,
  `skill4` varchar(50) DEFAULT NULL,
  `skill5` varchar(50) DEFAULT NULL,
  `hobby` varchar(100) NOT NULL,
  `projects` varchar(100) NOT NULL DEFAULT 'Empty',
  `summary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
