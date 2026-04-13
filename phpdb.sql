-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 08:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `aname` varchar(50) DEFAULT NULL,
  `gen` varchar(50) DEFAULT NULL,
  `totalcopy` int(11) DEFAULT NULL,
  `availcopy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `aname`, `gen`, `totalcopy`, `availcopy`) VALUES
(1, 'Hello Reetu', 'Reetu', '1', 900, 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fullname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fullname`, `username`, `email`, `phone`, `pass`) VALUES
('Reetu Kudia', 'dgfd', 'reetu@gmail.com', '21346587879', '$2y$10$tD62nx5mLVGh90QzOEuC6..wHPdtfz/SbgGv5vBWUeeuzErgWD4yO'),
('', '', '', '', '$2y$10$L/an62PbhGL2ozzpSFXHgOUeDAARz11SDCjJUOXSKKqVH4NoiUfFS'),
('Priti Shinde', 'Priti', 'priti@gmail.com', '9653441131', '$2y$10$xN4Q3HuvuNAx.xtNH2Lnl.IQSzeFXwDhkPq/BIJUrgo1hkLyEOadC'),
('Deepu Kudia', 'Deep', 'deep@gmail.com', '9653441131', '$2y$10$JGn02fhsPSxPgqXf70D3uetd/2vFJWpv6T8ddEoEL8NlvV7Tuuuq.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
