-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 03:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `resname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `resname`, `name`, `address`, `email`, `mobileno`, `type`, `password`) VALUES
(1, 'Paradise Biriyani', 'Ganesh', 'Beach road, Kirlampudi Layout,Vizag', 'paradisevzg@gmail.com', 6301463580, 'Hotel', 'abcd123'),
(2, 'Sai Ram Parlour', 'sai ram', '47-11-9,Vamsi Complex, Near Diamond Park, Dwaraka Nagar, Vizag', 'sairam@gmail.com', 8106798484, 'Meals & Tiffins', 'efgh123'),
(3, 'Grand Sai Ram Parlour', 'ram sai', '13-12-9,RTC Complex, Near Diamond Park, Sheela Nagar, Vizag', 'ramsai@gmail.com', 8106795656, 'FastFood', 'xyz123'),
(4, 'Grand Alpha', 'ramesh', 'gajuwaka,vizag', 'aplha@gmail.com', 1234567890, 'Hotel', 'abcde'),
(5, 'aaswad', 'sai', 'vizag', 'abc@gmail.com', 45612363, 'FastFood', 'abcdefg'),
(6, 'Mahaas', 'Rani', 'Dwaraka Nagar, visakhapatnam', 'mahaas@gmail.com', 1111111111, 'Hotel', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
