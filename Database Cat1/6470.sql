-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 13, 2018 at 06:23 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `6470`
--

-- --------------------------------------------------------

--
-- Table structure for table `6470users`
--

CREATE TABLE `6470users` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `6470users`
--

INSERT INTO `6470users` (`id`, `name`, `username`, `password`, `phone`) VALUES
(1, '', 'samaay', '70617373776F7264', 708984859),
(2, 'jacob', 'jaco@gmail.com', 'saman', 708456786),
(3, 'samantha', 'sammyg@yahoo.com', 'password', 709856784),
(5, 'martin', 'martink@gmail.com', 'martink', 710234254),
(6, 'stella', 'stella@yahoo.com', '', 709857689),
(7, 'joy', 'joy@gmail.com', '', 2147483647),
(8, 'wangu', 'wangumwenda', '', 726878691),
(9, 'lupita', 'lupitanyongo', '', 767894567),
(10, 'yo', 'yo@gmail.com', 'yo', 708987987),
(11, 'zach', 'zach@gmail.com', 'zach', 708278233),
(12, 'brian', 'brian@gmail.com', '', 708278234),
(13, 'jack', 'jack@yahoo.com', 'jack', 701234568),
(14, 'yoo', 'yoo@gmail.com', 'yoo', 708234543),
(15, 'star', 'star123', 'star123', 709897897),
(16, 'john', 'john@gmail.com', 'john', 708980980),
(18, 'sylvia', 'sylvia07', 'sylvia', 708986786),
(20, 'stacy', 'stacy1', 'stacy', 708989898);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `6470users`
--
ALTER TABLE `6470users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `6470users`
--
ALTER TABLE `6470users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
