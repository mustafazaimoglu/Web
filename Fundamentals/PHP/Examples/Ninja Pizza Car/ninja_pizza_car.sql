-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 07:09 PM
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
-- Database: `ninja_pizza_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Wolf', 'asdsad@asd.com', 'Meat, Ambitious', '2020-08-20 11:20:45'),
(2, 'Lion', 'asdsad@asd.com', 'Beauty', '2020-08-20 11:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'R34', 'b@b.com', 'turbo, stunt bar, nitrogen', '2020-08-19 19:54:09'),
(2, 'Supra', 'a@a.com', 'turbo, nitrogen', '2020-08-20 07:27:05'),
(3, 'Silvia', 'a@a.com', 'turbo, nitrogen', '2020-08-20 07:27:11'),
(4, 'Impreza', 'a@a.com', 'Turbo, Wheel', '2020-08-20 11:18:04'),
(5, 'Kangoo', 'asdsad@asd.com', 'Ege Baba', '2020-08-20 13:13:49'),
(6, 'Charger', 'asdsad@asd.com', 'Bull', '2020-08-20 13:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

CREATE TABLE `glasses` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Glasses', 'ege@s.com', 'asdfasd', '2020-08-21 17:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `keyboard`
--

INSERT INTO `keyboard` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Razer', 'destroyer0765@gmail.com', 'keys', '2020-08-20 13:17:58'),
(2, 'Everest', 'asdsad@asd.com', 'nothing', '2020-08-20 13:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Yen', 'b@c.com', 'Tree, ink', '2020-08-20 11:20:02'),
(2, 'Dollar', 'Destroyer0765@gmail.com', 'Tree, value', '2020-08-20 11:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Redmi', 'asdsad@asd.com', 'ram, screen, processors', '2020-08-20 12:11:40'),
(2, 'Xiaomi', 'asdsad@asd.com', 'battery, camera', '2020-08-20 12:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Mario Supreme', 'a@b.com', 'tomato, cheese', '2020-08-19 19:53:03'),
(2, 'Shaun Supreme', 'a@a.com', 'tomato, cheese', '2020-08-20 07:26:13'),
(3, 'Ninja Supreme', 'a@a.com', 'tomato, cheese', '2020-08-20 07:26:31'),
(4, 'MKZ Supreme', 'a@b.com', 'tomato, mushroom', '2020-08-20 11:18:35'),
(5, 'Ege Supreme', 'asdsad@asd.com', 'mushroom, ketchup', '2020-08-20 16:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `ingredients` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(1, 'Tree', 'asdsad@asd.com', 'fruit', '2020-08-20 12:56:02'),
(2, 'Apple', 'asdsad@asd.com', 'fruit', '2020-08-20 13:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_name` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_name`) VALUES
('Pizzas'),
('Cars'),
('Money'),
('Animals'),
('Phone'),
('Tree'),
('Keyboard'),
('Glasses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glasses`
--
ALTER TABLE `glasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
