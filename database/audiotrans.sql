-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 09:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audiotrans`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `a_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `deadline` date NOT NULL,
  `transcriberd_text` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`a_id`, `file_name`, `detail`, `deadline`, `transcriberd_text`) VALUES
(44, 'hindi.MP3', NULL, '2019-01-01', 'hi this is the sample audio transcription for just checking purposes so take it about so perform any cause the less about the main causes'),
(46, 'hindi.MP3', NULL, '2019-01-01', NULL),
(47, 'hindiso.mp3', NULL, '2019-12-31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(11) NOT NULL,
  `fkey` varchar(255) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `branchaddress` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `accountnumber` varchar(100) NOT NULL,
  `ifscode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `fkey`, `bankname`, `branchaddress`, `hname`, `accountnumber`, `ifscode`) VALUES
(1, 'first', 'bob', 'bob clocktower', 'dummy', '54344', 'barbotrdgha');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `user_id` int(11) NOT NULL,
  `c_fn` varchar(55) NOT NULL,
  `c_ln` varchar(44) NOT NULL,
  `c_email` varchar(44) NOT NULL,
  `c_password` varchar(44) NOT NULL,
  `c_mobile` varchar(11) NOT NULL,
  `c_city` varchar(11) DEFAULT NULL,
  `c_country` varchar(11) DEFAULT NULL,
  `c_pincode` int(11) DEFAULT NULL,
  `c_language` varchar(44) DEFAULT NULL,
  `c_howfind` varchar(22) DEFAULT NULL,
  `c_exp` varchar(200) DEFAULT NULL,
  `c_ts` int(22) DEFAULT NULL,
  `paragraph` varchar(200) DEFAULT NULL,
  `transcribers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`user_id`, `c_fn`, `c_ln`, `c_email`, `c_password`, `c_mobile`, `c_city`, `c_country`, `c_pincode`, `c_language`, `c_howfind`, `c_exp`, `c_ts`, `paragraph`, `transcribers`) VALUES
(1, 'akash', 'kumar', 'ak@gmail.com', 'akash', '9876543210', 'ghaziabad', 'india', 202020, 'english', 'internet', 'two year experience', 222, 'i love audio transcribing', ''),
(3, 'dhananjay', 'kumar', 'dk35840@gmail.com', '123456789', '9876543210', 'gzb', 'india', 201010, 'english', 'internet', '', 0, '', ''),
(4, 'ram', 'kumar', 'ram@gmail.com', 'fasasfs', '5435353', 'gzb', 'india', 345345, 'hindi', 'facebook', 'love it', 3, 'hi what happen ', ''),
(19, 'ssdff', 'dafsfas', 'dk35840@gmail.com', 'fasfasdsads', '4444444444', 'fasdfasdas', 'fasafd', 433333, ' fasdfdas', 'WORD OF MOUTH', 'fafsfas', 333, 'fasdfasfasd', 'fasfsafsa'),
(20, 'gdfgd', 'afass', 'djay35840@gmail.com', 'fasfas', '4444444444', '4gdafasf', 'fasdfsa', 4343, ' fasfdda', 'WORD OF MOUTH', 'sadfaf', 44, 'sdfdasddsadf', 'ffasfasf'),
(21, 'asdfdsf', 'fsdfassad', 'vsvas', 'dummy', '3453253244', 'fsafas', 'fsdafaff', 345234, ' fsdfasdf', 'JOB POSTING', 'fsdafasdf', 434, 'fasfdsa', 'fasdfas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`) VALUES
(1, 'rahul', 'dummy', 'dummy', 'kumar', 'dummy@gmail.com', 'candidate'),
(4, 'kkpvt', 'kkpvt', 'kkpvt', 'ltd', 'kkpvt@gmail.com', 'company'),
(5, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 'admin'),
(12, ' kkpvt@gmail.com', ' kkpvt', ' fdasfasdf', ' fasdf', ' dk35840@gmail.com', 'company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `c_password` (`c_password`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
