-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 08:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nat_boltu`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Al-Amin', 'alamin.@gmail.com', 'ajamarmonvalonei'),
(2, 'Ammena', 'ameena@live.com', 'janina@1234#'),
(3, 'fuad', 'fuad@gmail.com', 'sdfasd@132'),
(4, 'Jannatul', 'viqijudyhi@mailinator.com', 'Pa$$w0rd!'),
(5, 'Raiyan', 'wicefa@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(6, 'Indig', 'jacu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(7, 'Sacha', 'pukevac@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(8, 'Lenore', 'muvi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(9, 'Alfonso', 'geqysumaj@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(10, 'Catherine', 'mokedimute@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
