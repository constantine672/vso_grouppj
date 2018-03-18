-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 11:08 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `flag` varchar(100) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `flag`, `date_deleted`) VALUES
(4, '', '', '0000-00-00', '', '0000-00-00'),
(5, '', '', '0000-00-00', '', '0000-00-00'),
(6, '', 'smhhhewqew', '0000-00-00', '', '0000-00-00'),
(7, '', 'qweqweqwe', '2018-03-28', '', '0000-00-00'),
(8, '', 'qewqewqewq', '2018-03-27', '', '0000-00-00'),
(9, '', 'dsadsads', '2018-03-28', '', '0000-00-00'),
(10, 'dsadsa', 'dsadsadasdas', '2018-03-28', '', '0000-00-00'),
(11, 'dsadsad', 'sadsadsad', '2018-03-28', '', '0000-00-00'),
(12, 'dsadsadsa', 'dsadsadsa', '2018-03-27', '', '0000-00-00'),
(13, '', '', '0000-00-00', 'predstoi', '0000-00-00'),
(14, 'dsadsad', 'dsadadqwe', '2018-03-20', 'nablijava', '0000-00-00'),
(15, 'dsadsa', 'dsadsadsad', '2018-03-20', 'predstoi', '0000-00-00'),
(16, 'dsadsad', 'sdadsadas', '2018-03-30', 'nablijava', '0000-00-00'),
(17, 'dsadsa', 'sdadsadsa', '2018-03-15', 'predstoi', '0000-00-00'),
(18, 'dsadsad', 'dsadsdsadsa', '2018-03-15', 'predstoi', '0000-00-00'),
(19, 'dsadsa', 'dsadsadsa', '2018-03-15', 'izpulneno', '0000-00-00'),
(20, 'piene', 'da pieme s galia', '0000-00-00', 'predstoi', '0000-00-00'),
(21, 'kozite', 'da nahranq kozite', '0000-00-00', 'predstoi', '0000-00-00'),
(22, 'kafe', 'da piem kafe ', '2018-03-20', 'predstoi', NULL),
(23, 'kaf', 'dsadsadsa', '2018-03-22', 'predstoi', NULL),
(24, 'dsadsad', 'dsadsadsa', '2018-03-15', 'izpulneno', NULL),
(25, 'dsadsaweqweq', 'dsadsadsaewqewq', '0000-00-00', 'nablijava', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`) VALUES
(7, 'sacred0@abv.bg', '$2y$10$WFUQkV2J1rnduMird.ZJjepIGtVYKZ6wJYC.7Xc8auDZLh/HAW8cq', 'kosio', 'kosiov'),
(8, 'cveti@abv.bg', '$2y$10$YQj5uO31RGhFK3jqe15kLuIOH1DbCE7k2.xrVX9wOKYzAq5hLs8Hm', 'cveti ', 'cvetio'),
(9, 'lekov@abv.bg', '$2y$10$Tb008aS471FOxI.oOvHmdu9xL/i8zWm.3YmhAZqA51qcI80sY8or.', 'gbt', 'lekov'),
(10, 'volen@abv.bg', '$2y$10$rWkgFwOIit6LQgYxokBkOOW.Np1Wp7X4FCUsK4Tbaoc2QDMHtxk7O', 'volen', 'alexandrov'),
(11, 'petkova@abv.bg', '$2y$10$0uUevYuVIemB9RWbtsRWTeYFBC3isc9zoh6m8IDIuWZ92gutX9Ul6', 'galia', 'ivailova');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
