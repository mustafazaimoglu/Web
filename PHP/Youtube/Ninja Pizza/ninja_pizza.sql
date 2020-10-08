-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 07:10 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninja_pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `created at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `title`, `ingredients`, `email`, `created at`) VALUES
(8, 'Harry Potter', 'cheese, tomato', 'asdsad@asd.com', '2020-08-19 11:34:41'),
(13, 'Harry Potter', 'cheese, tomato, mushroom', 'Destroyer0765@gmail.com', '2020-08-19 12:13:48'),
(14, 'code', 'patato', 'asdsad@asd.com', '2020-08-19 12:14:15'),
(15, 'asd', 'patato', 'asdsad@asd.com', '2020-08-21 18:24:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
