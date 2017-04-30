-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 08:18 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamstan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'hox', 'admin', 'admin@gmail.com', '123', '123'),
(2, 'Stanzin Angmo', 'stanzin_angmo', 'stanzin_angmo@gmail.com', 'appleapple', 'appleapple'),
(3, 'Vaishali Dhiman', 'vaishali_dhiman', 'vaishali_dhiman@gmail.com', 'orangeorange', 'orangeorange'),
(4, 'Chang Chen', 'changchen09', 'changchen09@gmail.com', 'cranberrycranberry', 'cranberrycranberry');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `whatsappno` double NOT NULL,
  `usercategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `whatsappno`, `usercategory`) VALUES
(4, 'Chang Chen', 'changchen09', 'changchen09@gmail.com', '1234', 7814144148, 'College'),
(5, 'STANZIN ZANGMO', 'sparrow14', 'skarmazopa@gmail.com', '123', 9888888888, 'School'),
(6, 'fing', 'fing', 'fing@gmail.com', '12345', 12345, 'School'),
(7, 'Dream Chronicles', 'dreamer33', 'dreamer33@gmail.com', 'dream', 123123123, 'School'),
(9, 'Emma Stone', 'emma_stone', 'emma_stone@gmail.com', 'stone', 5765767567, 'College'),
(10, 'Emma Watson', 'emma_watson', 'emma_watson@gmail.com', 'watson', 1235343467, 'School'),
(11, 'Stanzin Angmo', 'stanzin', 'stanzin@gmail.com', '098', 875983745873, 'College'),
(12, 'Sudeep Dey', 'sudip12', 'sudip12dey@gmail.com', 'armadillo55', 9115839404, 'College'),
(13, 'Vaishali Dhiman', 'vaishali_dhiman', 'vaishali_dhiman@gmail.com', '1234', 123456789, 'Professional'),
(14, 'Hashing', 'hash_me', 'hash_me@gmail.com', 'harrypotter13', 78973483274, 'School'),
(15, 'frozen', 'frozen09', 'frozen09@gmail.com', 'dbfda985b9b61c026e4cb96649f5e01d', 7849372487, 'College'),
(16, 'hello', 'hello', 'hello@gmail.com', 'draconis09', 84903284, 'School'),
(17, 'hashing again', 'hashing again', 'hashing@gmail.com', 'mypassword', 98598205982, 'School'),
(18, 'again hashing', 'hashing hashing', 'again@gmail.com', '$2y$13$cDdu.fD1IsJ/ljjwRvowoe5GBnHS3hDRE/oiIIduxWvykwO67t0.e', 905820958, 'College'),
(19, 'Hash Done', 'hash_done', 'hash_done@gmail.com', '$2y$13$54kNGQa7dkA7L1WdEgi9NOLBYdlBumr24ce1RLgw3GswueoBS1zTO', 859032859082, 'School'),
(20, 'My Self', 'my_self', 'my_self@gmail.com', '$2y$13$oM7Ncm2.f/PhXR87q.XXIOA78QCTemEwUvLLEBCS6Z1s1idAYD1ey', 758947578, 'School'),
(21, 'Bonnie Wright', 'bonnie_wright', 'bonnie_wright@live.com', '$2y$13$krTb3Y28/bLGCIHNNNdKIODTXfF0rWYuTS5tpHn3qsdxaGTTyp7am', 78392758932, 'School');

-- --------------------------------------------------------

--
-- Table structure for table `websiteusers`
--

CREATE TABLE `websiteusers` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `whatsAppNo` double NOT NULL,
  `userCategory` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websiteusers`
--

INSERT INTO `websiteusers` (`uid`, `fullname`, `userName`, `email`, `password`, `cpassword`, `whatsAppNo`, `userCategory`) VALUES
(1, 'Emma Watson', 'emma_watson', 'emma_watson@gmail.com', '1234', '1234', 987654321, 'College'),
(2, 'Emma Stone', 'emma_stone', 'emma_stone@live.com', '4321', '4321', 1234567890, 'Professional'),
(3, 'Bonnie Wright', 'bonnie_wright', 'bonnie_wright@gmail.com', '1234', '1234', 1234567890, 'School');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `websiteusers`
--
ALTER TABLE `websiteusers`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `websiteusers`
--
ALTER TABLE `websiteusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
