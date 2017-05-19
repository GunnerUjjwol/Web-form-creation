-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 06:34 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Post` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `password`, `email`, `age`, `phone`, `Address`, `Description`, `Post`, `Gender`, `admin`) VALUES
(9, 'Shiva', '3fbff0e6b620e4d259dc427abc6574da', 'shiva@yahoo.com', 39, 9865789876, 'Butwal', 'Newbie', 'Engineer', 'female', 0),
(11, 'Ujjwol', '87299d8d97767c1ef5be8219919dbdb3', 'sparkle_ujjwol@yahoo.com', 28, 9808594748, 'Bhaktapur', 'Motivated to learn', 'Intern', 'male', 0),
(12, 'Sunita', 'b29a049fdab83f783f3cb1ec36ca5c9a', 'sunita@yahoo.com', 25, 9808594678, 'Bangalore', 'Innovative', 'Engineer', 'female', 0),
(13, 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'admin@gmail.com', 32, 9808787873, 'Naxal', 'Boss', 'Manager', 'Female', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
