-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 02:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Title_l` varchar(255) NOT NULL,
  `nmpur` varchar(255) NOT NULL,
  `Title_ll` varchar(255) NOT NULL,
  `Title_lll` varchar(255) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `Provinces` int(11) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `add_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `new` datetime NOT NULL,
  `imgUp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `password`, `mail`, `fullname`, `group_id`, `Date`, `username`) VALUES
(186, '827ccb0eea8a706c4c34a16891f84e7b', 'Ibrahim0@yahoo.com', 'Ahmed Ali', 0, '2021-01-21', 'Ibrahim_ali'),
(188, '25f9e794323b453885f5181f1b624d0b', 'owner@gmail.com', 'AbdelHady Mohamedh', 1, '2021-06-17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `missing`
--
ALTER TABLE `missing`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
