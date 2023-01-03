-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2022 at 04:00 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gurucomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Service` text COLLATE utf8mb4_general_ci NOT NULL,
  `Message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `IP` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `URL` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Name`, `Email`, `Phone`, `Service`, `Message`, `IP`, `URL`, `createdAt`) VALUES
(1, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'test fdsg fdsgd', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:18:36'),
(2, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'test fdsg fdsgd', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:19:01'),
(3, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'test fvdsg w wfsd ', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:20:47'),
(4, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'test fvdsg w wfsd ', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:21:06'),
(5, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'sd fsfdsgd sgfdsg gsgfds', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:22:57'),
(6, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'test vvzvdzg fgdgdsg', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:25:20'),
(7, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook liquid damage repair', 'test sfsd gsfdgds fdsfs', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:26:15'),
(8, 'Hitesh Gupta', 'hitesh.gupta@ditstek.com', '', 'Apple MacBook Screen Replacement', 'test fdsfsg', '::1', 'http://localhost/gurucomputer/contact', '2022-08-19 10:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
