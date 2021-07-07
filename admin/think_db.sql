-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 12:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `think.db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tp_sys_user`
--

CREATE TABLE `tp_sys_user` (
  `row_key` int(2) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_status` int(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_sys_user`
--

INSERT INTO `tp_sys_user` (`row_key`, `user_fname`, `user_lname`, `user_email`, `user_pass`, `user_status`, `date_created`) VALUES
(1, 'Michael', 'Asare', 'right4son@gmail.com', '$2y$10$ERo/9AZFludlAl73esOBSeYs9Y8dL9HiszWBGZNEyRVRWhYvlyIEi', 1, '2021-07-06 22:49:29'),
(3, 'Ama', 'Frimpong', 'ama@example.com', '$2y$10$S0dOUuC6BJ3EfJ1T31DUTeoEpThIRUKaU45j1pXyV9FMklaGWdGcK', 1, '2021-07-07 12:11:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_sys_user`
--
ALTER TABLE `tp_sys_user`
  ADD PRIMARY KEY (`row_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_sys_user`
--
ALTER TABLE `tp_sys_user`
  MODIFY `row_key` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
