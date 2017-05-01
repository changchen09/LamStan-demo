-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 11:12 AM
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
(1, 'hox', 'admin', 'admin@gmail.com', '$2y$13$oJ8EZ2iu9rcDLjeFwEGsVOLzTMlcG.6kYS5M4PoEN5nNdDMsOzkN6', '123'),
(2, 'Stanzin Angmo', 'stanzin_angmo', 'stanzin_angmo@gmail.com', 'appleapple', 'appleapple'),
(3, 'Vaishali Dhiman', 'vaishali_dhiman', 'vaishali_dhiman@gmail.com', 'orangeorange', 'orangeorange'),
(4, 'Chang Chen', 'changchen09', 'changchen09@gmail.com', 'cranberrycranberry', 'cranberrycranberry');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `name`, `message`) VALUES
(1, 'john@example.com', 'John', 'Doe'),
(2, 'changchen09@gmail.com', 'Rinchen Changchup', 'C\'mon!!!'),
(3, 'skarmazopa@gmail.com', 'skarma', 'damn!'),
(4, 'again@gmail.com', 'again', 'Hahahaha'),
(5, 'lobrulz09@gmail.com', 'Lobz', 'Gmail'),
(9, 'draco@gmail.com', 'Draco', 'hahahah..'),
(7, 'harry@live.com', 'Harry Potter', 'Good job, Chang!'),
(10, 'changchen09@gmail.com', 'Rinchen Changchup', 'Testing...');

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
(1, 'Dream Chronicles', 'dreamer33', 'dreamer33@gmail.com', 'dream', 123123123, 'School'),
(2, 'Emma Stone', 'emma_stone', 'emma_stone@gmail.com', 'stone', 5765767567, 'College'),
(3, 'Emma Watson', 'emma_watson', 'emma_watson@gmail.com', 'watson', 1235343467, 'School'),
(4, 'Stanzin Angmo', 'stanzin', 'stanzin@gmail.com', '098', 875983745873, 'College'),
(5, 'Sudeep Dey', 'sudip12', 'sudip12dey@gmail.com', 'armadillo55', 9115839404, 'College'),
(6, 'Vaishali Dhiman', 'vaishali_dhiman', 'vaishali_dhiman@gmail.com', '1234', 123456789, 'Professional'),
(7, 'Hashing', 'hash_me', 'hash_me@gmail.com', 'harrypotter13', 78973483274, 'School'),
(8, 'frozen', 'frozen09', 'frozen09@gmail.com', 'dbfda985b9b61c026e4cb96649f5e01d', 7849372487, 'College'),
(9, 'hashing again', 'hashing again', 'hashing@gmail.com', 'mypassword', 98598205982, 'School'),
(10, 'again hashing', 'hashing hashing', 'again@gmail.com', '$2y$13$cDdu.fD1IsJ/ljjwRvowoe5GBnHS3hDRE/oiIIduxWvykwO67t0.e', 905820958, 'College'),
(11, 'Hash Done', 'hash_done', 'hash_done@gmail.com', '$2y$13$54kNGQa7dkA7L1WdEgi9NOLBYdlBumr24ce1RLgw3GswueoBS1zTO', 859032859082, 'School'),
(12, 'My Self', 'my_self', 'my_self@gmail.com', '$2y$13$oM7Ncm2.f/PhXR87q.XXIOA78QCTemEwUvLLEBCS6Z1s1idAYD1ey', 758947578, 'School'),
(13, 'Bonnie Wright', 'bonnie_wright', 'bonnie_wright@live.com', '$2y$13$krTb3Y28/bLGCIHNNNdKIODTXfF0rWYuTS5tpHn3qsdxaGTTyp7am', 78392758932, 'School'),
(22, 'Wing Chun', 'wing_chun', 'wing_chun@gmail.com', '$2y$13$nDfA9GYotDpkhGijIbJOA.rSGqRaRoc01T6uJVGwqGqwgFX62Z2M2', 78947894789, 'Professional'),
(23, 'Dream', 'dream', 'dream@gmail.com', '$2y$13$YE8YLl5QVhkvItC3Lna0du9uXSbCjJgqPlui8g29p481yXCQYgFi2', 787878787887, 'Professional'),
(24, 'Chen Chang', 'chen09', 'chen09@gmail.com', '$2y$13$HaP8pTKWhgaU0.1J4yK/x.a/IV4jHN6jc5.buqXuqLf04RN.MejHS', 7814144148, 'School'),
(25, 'Luna Lovegood', 'luna09', 'luna09@gmail.com', '$2y$13$AJzsdMpoEG5ajb8UanjYEuh.HcVyJLDM/XuSjDWLbIdbE.ityJQyG', 7849327583, 'School'),
(26, 'Albus', 'albus', 'albus@gmail.com', '$2y$13$AnEolsmZ0pggust6lcnitejPOkFUrSS6aloviLu/KJynypDiCBIcK', 57395939993, ''),
(27, 'Ron', 'ronald', 'ronald@gmail.com', '$2y$13$55yXNwbEEibC.AsWTksTO.Ug7Karv6vHrcuQYMT2Xd90g0L8gU0z.', 12344353535, ''),
(28, 'Demo Run', 'demo_run', 'demo_run@gmail.com', '$2y$13$cNYzPKE0meOdsnNixWakuepLLdKa8Tcd48LVXMx39E0yL3kIMKzna', 89058432058, 'school'),
(29, 'Hannah Creambell', 'hannah_creambell', 'hannah_creambell@gmail.com', '$2y$13$xanVcEiGIJdzYgW3PNvA6.moN8/Aopee68W2IJunZBTifwNyYKYdi', 123565776766, 'college'),
(30, 'Draco Malfoy', 'draco_malfoy', 'draco_malfoy@gmail.com', '$2y$13$d/YJcQ8OjiOaXxdQIMRFa.p9WEDQIPvQzoMBWLZzzyL0MFzUueoIG', 474838575868, 'Professional'),
(31, 'Rinchen Changchup', 'changchen09', 'changchen09@gmail.com', '$2y$13$.1hN/ulU0Kw0MCMyAp55Q.uplwEq.zJsUVD9UuwpSxHmeSms4rcFS', 7814144148, 'College'),
(32, 'Demo Run', 'dreamer', 'dream@gmail.com', '$2y$13$nv7zzCxafs3vZMGg7qbKLeBa9WZmdG97wAE3BxBp2vdB0ozCDNrzq', 89402839403, 'School');

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `websiteusers`
--
ALTER TABLE `websiteusers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
