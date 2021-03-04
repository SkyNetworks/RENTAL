-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 08:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `available_room` int(20) NOT NULL,
  `room_size` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `address`, `owner_name`, `number`, `email`, `amount`, `available_room`, `room_size`, `description`, `image`) VALUES
(3, 'jorpati, sundarbasti ', 'Manoj luitel', 47888893, 'manoj@gmail.com', 'Rs 5000', 3, '800 * 600', 'n a building, a room is any space enclosed within four walls to which entry is possible only by a door that connects it either to a passageway, to another room, or to the outdoors', 'sdad.jpg'),
(4, 'kapan, sundarbasti ', 'Kishan luitel', 987654322, 'kishan@gmail.com', 'Rs 800', 9, '800 * 300', 'n a building, a room is any space enclosed within four walls to which entry is possible only by a door that connects it either to a passageway, to another room, or to the outdoors', 'dsadsa.jpg'),
(5, 'sukedhara ', 'Mahesh Shrestha', 2147483647, 'mahesh@gmail.com', 'Rs 8000', 1, '800 * 600', 'this house is available for the people who had a hunge amount', '22.jpg'),
(6, 'kapan, sundarbasti ', 'suman luitel', 2147483647, 'suman@gmail.com', 'Rs 5000', 4, '800 * 600', 'n a building, a room is any space enclosed within four walls to which entry is possible only by a door that connects it either to a passageway, to another room, or to the outdoors', '12.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `email`, `password`, `level`) VALUES
(12, 'admin', 'admin@gmail.com', 'admin', 2),
(13, 'mahesh', 'mahesh@gmail.com', 'mahesh', 1),
(14, 'kishan', 'kishan@gmail.com', '123', 1),
(15, 'karan', 'karan@gmail.com', 'karan', 1),
(16, 'Raman Fadera', 'raman@gmail.com', 'raman', 1),
(17, 'subarna', 'subarn@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
