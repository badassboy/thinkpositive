-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 10:26 AM
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
-- Table structure for table `tp_blog`
--

CREATE TABLE `tp_blog` (
  `row_key` int(3) NOT NULL,
  `blog_subj` varchar(100) NOT NULL,
  `blog_content` varchar(1000) NOT NULL,
  `blog_img` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_blog`
--

INSERT INTO `tp_blog` (`row_key`, `blog_subj`, `blog_content`, `blog_img`, `user_email`, `date_created`) VALUES
(1, 'Why is my land documentation delaying?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p>', 'blog-1.jpg', 'right4son@gmail.com', '2021-07-07 04:07:08'),
(2, 'Find out where the people are going and buy the land before they get there.', '<p>Lorem ipsum dolor sit amet, conse dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><p>Lorem ipsum dolor sit amet, conse dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', 'blog-2.jpg', 'right4son@gmail.com', '2021-07-04 12:07:08'),
(3, 'The mistake I made in trying to acquire a land in Ghana.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te</p>', 'blog-3.jpg', 'right4son@gmail.com', '2021-07-07 14:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `tp_message`
--

CREATE TABLE `tp_message` (
  `row_key` int(3) NOT NULL,
  `sender` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(250) NOT NULL,
  `message` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tp_service`
--

CREATE TABLE `tp_service` (
  `row_key` int(1) NOT NULL,
  `s_title` varchar(50) NOT NULL,
  `s_content` varchar(1000) NOT NULL,
  `s_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_service`
--

INSERT INTO `tp_service` (`row_key`, `s_title`, `s_content`, `s_img`) VALUES
(1, 'Land Sales (residential, commercial and farms)', '<p>For credible services you can always rely on in terms of land purchase and other properties.</p><p>We have made land purchasing so simple and documents ready  to you within 10 working days after payments done.</p>', 'service-1.jpg'),
(2, 'Building and Construction', '<p>We build from start to finish and also  assure you of quality finished work output all your Building and Construction needs.</p><p>We offers a comp', 'service-2.jpg'),
(3, 'Apartment rentals and sales', '<p>If  you are looking at homes/lands  for sale in Ghana or are seeking professional expertise, you can rely on our personalized service that has prod', 'service-3.jpg'),
(4, 'Project Management', '<p>We serve you with outstanding Project Management services that is second to none.</p>', 'service-4.jpg'),
(5, 'General Electricals and Wiring', '<p>We do all kinds of Electricals and Wiring Services</p>', 'service-5.jpg'),
(6, 'Land survey services', '<p>We undertake property management services tailored to suit our clients satisfaction. We help property owners to manage their properties so that they can focus on other aspects of their lives. We give them the best investment advice and guide them to make very critical decisions pertaining to their properties.</p><p>We entreat property owners to stop chasing clients for their rents or having to deal with midnight emergencies on their own. Landlords must rely on us for appropriate tenant screening and selection for proper care and maintenance of their properties. We evaluate your properties and determine the market value of your property for higher profits on your investments.</p><p>Call us today for your property management services</p>', 'service-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tp_user`
--

CREATE TABLE `tp_user` (
  `row_key` int(2) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_status` int(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_user`
--

INSERT INTO `tp_user` (`row_key`, `user_fname`, `user_lname`, `user_email`, `user_pass`, `user_status`, `date_created`) VALUES
(1, 'Michael', 'Asare', 'right4son@gmail.com', '$2y$10$ERo/9AZFludlAl73esOBSeYs9Y8dL9HiszWBGZNEyRVRWhYvlyIEi', 1, '2021-07-06 22:49:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_blog`
--
ALTER TABLE `tp_blog`
  ADD PRIMARY KEY (`row_key`);

--
-- Indexes for table `tp_message`
--
ALTER TABLE `tp_message`
  ADD PRIMARY KEY (`row_key`);

--
-- Indexes for table `tp_service`
--
ALTER TABLE `tp_service`
  ADD PRIMARY KEY (`row_key`);

--
-- Indexes for table `tp_user`
--
ALTER TABLE `tp_user`
  ADD PRIMARY KEY (`row_key`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_blog`
--
ALTER TABLE `tp_blog`
  MODIFY `row_key` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tp_message`
--
ALTER TABLE `tp_message`
  MODIFY `row_key` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tp_service`
--
ALTER TABLE `tp_service`
  MODIFY `row_key` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tp_user`
--
ALTER TABLE `tp_user`
  MODIFY `row_key` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
