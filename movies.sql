-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 08:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mulesoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actors` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `released` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `actor`, `actors`, `director`, `released`) VALUES
(1, 'tagour', 'chiru', 'chiru,sunil', 'vinayak', '2011-09-20'),
(2, 'chiruta', 'ram charan', 'ramcharan,venu', 'vinayak', '2014-06-10'),
(4, 'chiruta', 'ram charans', 'ramcharan,venu', 'vinayak', '2014-06-10'),
(5, 'panja', 'pawan kalyan', 'pawankalyan,shreya', 'anil', '2013-05-27'),
(6, 'Bannni', 'Allu Arjun', 'Allu Arjun,kajal', 'karthik', '2015-09-28'),
(7, 'lakshmi ', 'venkatesh', 'venkatesh,nayanatara', 'kalyan', '2018-02-12'),
(8, 'Eega', 'nani', 'nani,samantha', 'rajamouli', '2008-01-07'),
(9, 'Dhammu', 'Ntr', 'Ntr,thrisha', 'kodiramakrishna', '2008-06-16'),
(10, 'arya', 'Allu Arjun', 'Allu Arjun,sneha', 'sukumar', '2010-08-24'),
(11, 'merupu', 'charan', 'charan,kajal', 'shekar', '2015-10-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
