-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 10:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navigus`
--

-- --------------------------------------------------------

--
-- Table structure for table `signrecord`
--

CREATE TABLE `signrecord` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signrecord`
--

INSERT INTO `signrecord` (`id`, `name`, `pass`, `email`) VALUES
(1, 'pk', 'pk123', 'pk@gmail.com'),
(2, 'rdsharma', 'sharma', 'rd@gmail.com'),
(3, 'rachit', 'rachit123', 'rachitn170898@gmail.com'),
(4, 'Rachit Nagda', 'rachit', 'futureo0one@gmail.com'),
(5, 'Snake Pal', 'snake', 'paltu129@gmail.com'),
(6, 'Shyam Kothari', 'shyam', 'shymkot@gmail.com'),
(7, 'Vishnav', 'vishnav', 'vishnu456@gmail.com'),
(8, 'Anand Kishore', 'anand', 'kanand17@gmail.com'),
(9, 'Mukharji Raj', 'mukharji', 'Rajmukharji@gmail.com'),
(10, 'namdeo Solanki', 'namdeo', 'salonkindv@gmail.com'),
(11, 'Pradeep Meena', 'pradeep', 'meena120@gmail.com'),
(12, 'lakhan Lal', 'lakhan', 'lollal@gmail.com'),
(13, 'Gurpreet kaur', 'gurpreet', 'pritto32@gmail.com'),
(14, 'Amit Shah', 'amit', 'shahmit@gmail.com'),
(15, 'Sonal Sharma', 'sonal', 'sonalsh780@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signrecord`
--
ALTER TABLE `signrecord`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signrecord`
--
ALTER TABLE `signrecord`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
