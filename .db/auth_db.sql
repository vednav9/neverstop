-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 03:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `adminname`, `password`, `email`, `mobileno`) VALUES
(3, 'thakur polytechnic co', 'tpolyco', '$2y$10$kAkPjQUc.iiFOZnVJ1AaNOfTBJt7QpnjoKZw3YiQ.7lkbYUBDcwyW', 'tpoly@gmail.com', 14827467);

-- --------------------------------------------------------

--
-- Table structure for table `comment_bsc`
--

CREATE TABLE `comment_bsc` (
  `comment_id` int(30) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bsc1` int(30) NOT NULL,
  `bsc2` int(30) NOT NULL,
  `bsc3` int(30) NOT NULL,
  `bsc4` int(30) NOT NULL,
  `bsc5` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_bsc`
--

INSERT INTO `comment_bsc` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `bsc1`, `bsc2`, `bsc3`, `bsc4`, `bsc5`) VALUES
(1, 'capstone project', 'cppfour641a75ffdf0459.20045854.jpeg', 'hello', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment_dm`
--

CREATE TABLE `comment_dm` (
  `comment_id` int(30) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `dm1` int(30) NOT NULL,
  `dm2` int(30) NOT NULL,
  `dm3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_dm`
--

INSERT INTO `comment_dm` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `dm1`, `dm2`, `dm3`) VALUES
(1, 'capstone project', 'cppfour641a75ffdf0459.20045854.jpeg', 'hhgd', 1, 0, 0),
(2, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'hii', 1, 0, 0),
(3, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'hii', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment_j`
--

CREATE TABLE `comment_j` (
  `comment_id` int(30) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `j1` int(30) NOT NULL,
  `j2` int(30) NOT NULL,
  `j3` int(30) NOT NULL,
  `j4` int(30) NOT NULL,
  `j5` int(30) NOT NULL,
  `j6` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_j`
--

INSERT INTO `comment_j` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`) VALUES
(1, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'hii', 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment_py`
--

CREATE TABLE `comment_py` (
  `comment_id` int(255) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_pp` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `p1` int(30) NOT NULL,
  `p2` int(30) NOT NULL,
  `p3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_py`
--

INSERT INTO `comment_py` (`comment_id`, `comment_name`, `comment_pp`, `comments`, `p1`, `p2`, `p3`) VALUES
(1, 'Kunal Bhatt', 'kunal64323fc5273509.86900837.jpg', 'kii', 1, 0, 0),
(2, 'skill stream', 'skill652952bd5db9b2.82435977.png', 'iyvuivu', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `c_user` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `c_user`, `c_email`, `c_message`) VALUES
(3, 'Vedant Mangesh Navthale', 'vedant@gmail.com', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `mobileno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pynum` int(255) NOT NULL,
  `jnum` int(255) NOT NULL,
  `dmnum` int(255) NOT NULL,
  `bscnum` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`, `pp`, `mobileno`, `email`, `pynum`, `jnum`, `dmnum`, `bscnum`) VALUES
(3, 'Vedant Navthale', 'vedan', '$2y$10$q/TXtyLv7LZdWtkcuiRSeedc8k/nAtlCJJsI8RvEQihds66uHtBMq', 'vedan645c771b6b8661.91130950.jpg', 35825723, 'vedantnavthale@gmail.com', 0, 7, 0, 0),
(4, 'skill stream', 'skill', '$2y$10$RVUgWLIIEdlmpyorD9phYe9qV7Nt3OtIvgTJ2pYvzfZcFOzSclehS', 'skill652952bd5db9b2.82435977.png', 47647, 'ss@gmail.com', 4, 0, 0, 0),
(5, 'tony stark', 'vedantn', '$2y$10$sfmbjN98tY7ZqQlbFMVvl.HBbxSKLDM/ekQH1CxNjbBtwe4Q57DMa', 'default-pp.png', 938592836, 'tony@gmail.com', 4, 0, 0, 0),
(6, 'capstone projec', 'se4', '$2y$10$02/I2scYeRlXanK4EWUQ7uL.RceCKrAO1FkIa.MHy2Ai/Vl8QhbEi', 'se465f80017cdb9b6.98999865.jpg', 938592837, 'vedantnavthale@gmail.com', 0, 0, 0, 0),
(7, 'sd', 'sdg', '$2y$10$eDE8AuV6na.Tfv.Kmkvyde9AyeyKKeDwWBkL8deDWXQm6lvSDO0DK', 'default-pp.png', 3424, 'tony@gmail.com', 0, 0, 0, 0),
(8, '123', '123456', '$2y$10$FOPFM.FKHDelWFlCmrQkAeIV1iFkeN4LMMgJpY0Nr9rI.DvPUKimS', 'default-pp.png', 23, '123@gmail.com', 0, 0, 0, 0),
(9, 's4project', 's4project', '$2y$10$6IgvEgqgYTr5rmOffyh7xOuM5mIAf0V.gFigRgYilaLesyFwZFKuS', 's4project6611238a6a0b46.48429390.png', 23452345, 's4@gmail.com', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_bsc`
--
ALTER TABLE `comment_bsc`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_dm`
--
ALTER TABLE `comment_dm`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_j`
--
ALTER TABLE `comment_j`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_py`
--
ALTER TABLE `comment_py`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment_bsc`
--
ALTER TABLE `comment_bsc`
  MODIFY `comment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_dm`
--
ALTER TABLE `comment_dm`
  MODIFY `comment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment_j`
--
ALTER TABLE `comment_j`
  MODIFY `comment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_py`
--
ALTER TABLE `comment_py`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
