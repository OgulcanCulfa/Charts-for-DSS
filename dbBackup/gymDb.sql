-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 04, 2021 at 11:41 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `avcilar`
--

DROP TABLE IF EXISTS `avcilar`;
CREATE TABLE IF NOT EXISTS `avcilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bench` int(30) NOT NULL,
  `squat_rack` int(30) NOT NULL,
  `smith_machine` int(30) NOT NULL,
  `treadmill` int(30) NOT NULL,
  `exercise_bikes` int(30) NOT NULL,
  `leg_press` int(30) NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avcilar`
--

INSERT INTO `avcilar` (`id`, `bench`, `squat_rack`, `smith_machine`, `treadmill`, `exercise_bikes`, `leg_press`, `created_At`) VALUES
(1, 79, 123, 90, 168, 150, 96, '2021-01-03 18:36:23'),
(2, 71, 84, 101, 157, 185, 121, '2021-01-04 18:36:23'),
(3, 91, 109, 106, 167, 158, 78, '2021-01-05 18:36:23'),
(4, 80, 118, 125, 174, 137, 76, '2021-01-06 18:36:23'),
(5, 130, 132, 105, 153, 155, 106, '2021-01-07 18:36:23'),
(6, 104, 97, 128, 194, 167, 102, '2021-01-08 18:36:24'),
(7, 108, 128, 91, 160, 166, 77, '2021-01-09 18:36:24'),
(8, 111, 96, 104, 195, 184, 125, '2021-01-10 18:36:24'),
(9, 111, 135, 117, 204, 190, 127, '2021-01-11 18:36:24'),
(10, 105, 100, 142, 193, 178, 102, '2021-01-12 18:36:24'),
(11, 76, 89, 112, 199, 176, 135, '2021-01-13 18:36:24'),
(12, 126, 121, 119, 198, 153, 83, '2021-01-14 18:36:24'),
(13, 117, 106, 139, 157, 192, 95, '2021-01-15 18:36:24'),
(14, 123, 101, 92, 183, 160, 100, '2021-01-16 18:36:24'),
(15, 120, 134, 143, 157, 179, 92, '2021-01-17 18:36:24'),
(16, 85, 106, 109, 191, 149, 82, '2021-01-18 18:36:24'),
(17, 125, 91, 97, 179, 182, 101, '2021-01-19 18:36:24'),
(18, 119, 129, 121, 183, 195, 90, '2021-01-20 18:36:24'),
(19, 90, 137, 124, 177, 155, 91, '2021-01-21 18:36:24'),
(20, 93, 87, 110, 193, 153, 100, '2021-01-22 18:36:24'),
(21, 78, 106, 132, 184, 166, 128, '2021-01-23 18:36:24'),
(22, 122, 120, 129, 191, 146, 129, '2021-01-24 18:36:24'),
(23, 123, 125, 89, 157, 158, 110, '2021-01-25 18:36:24'),
(24, 117, 87, 102, 152, 158, 120, '2021-01-26 18:36:24'),
(25, 107, 132, 109, 179, 144, 97, '2021-01-27 18:36:24'),
(26, 91, 120, 100, 167, 177, 111, '2021-01-28 18:36:24'),
(27, 126, 129, 103, 155, 168, 102, '2021-01-29 18:36:24'),
(28, 107, 123, 129, 179, 149, 119, '2021-01-30 18:36:24'),
(29, 128, 116, 93, 204, 136, 101, '2021-01-31 18:36:24'),
(30, 76, 92, 127, 205, 162, 107, '2021-02-01 18:36:24'),
(31, 80, 148, 149, 137, 130, 127, '2021-02-01 21:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `beylikduzu`
--

DROP TABLE IF EXISTS `beylikduzu`;
CREATE TABLE IF NOT EXISTS `beylikduzu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bench` int(30) NOT NULL,
  `squat_rack` int(30) NOT NULL,
  `smith_machine` int(30) NOT NULL,
  `treadmill` int(30) NOT NULL,
  `exercise_bikes` int(30) NOT NULL,
  `leg_press` int(30) NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beylikduzu`
--

INSERT INTO `beylikduzu` (`id`, `bench`, `squat_rack`, `smith_machine`, `treadmill`, `exercise_bikes`, `leg_press`, `created_At`) VALUES
(1, 46, 46, 88, 93, 57, 56, '2021-01-02 21:11:06'),
(2, 50, 50, 102, 123, 63, 32, '2021-01-03 21:14:05'),
(3, 86, 74, 88, 156, 142, 133, '2021-01-04 22:28:04'),
(4, 125, 89, 74, 186, 209, 113, '2021-01-06 16:15:51'),
(5, 150, 96, 68, 200, 233, 120, '2021-01-07 16:15:51'),
(6, 163, 102, 89, 147, 247, 159, '2021-01-08 16:15:51'),
(7, 114, 108, 36, 320, 323, 86, '2021-01-09 16:15:52'),
(8, 124, 95, 100, 121, 103, 98, '2021-01-10 14:15:04'),
(9, 100, 112, 76, 107, 65, 68, '2021-01-11 13:45:43'),
(10, 111, 120, 117, 145, 126, 95, '2021-01-12 13:49:43'),
(11, 70, 84, 119, 144, 113, 93, '2021-01-13 13:50:30'),
(12, 79, 115, 126, 146, 162, 91, '2021-01-14 13:50:30'),
(13, 101, 111, 101, 154, 158, 104, '2021-01-15 13:50:30'),
(14, 121, 109, 155, 126, 158, 130, '2021-01-16 13:50:30'),
(15, 125, 114, 106, 171, 163, 141, '2021-01-17 13:50:30'),
(16, 108, 115, 102, 147, 115, 99, '2021-01-18 13:50:30'),
(17, 101, 86, 158, 149, 144, 110, '2021-01-19 13:50:30'),
(18, 130, 140, 158, 169, 119, 113, '2021-01-20 13:50:30'),
(19, 96, 80, 143, 154, 152, 138, '2021-01-21 13:50:30'),
(20, 125, 87, 153, 123, 151, 100, '2021-01-22 13:50:30'),
(21, 119, 112, 114, 156, 128, 132, '2021-01-23 13:50:30'),
(22, 106, 136, 147, 128, 131, 111, '2021-01-24 13:50:30'),
(23, 113, 109, 117, 120, 118, 133, '2021-01-25 13:50:30'),
(24, 78, 113, 118, 172, 135, 120, '2021-01-26 13:50:31'),
(25, 86, 131, 125, 153, 141, 146, '2021-01-27 13:50:31'),
(26, 74, 117, 152, 145, 143, 117, '2021-01-28 13:50:31'),
(27, 108, 130, 114, 163, 162, 98, '2021-01-29 13:50:31'),
(28, 126, 90, 108, 128, 128, 95, '2021-01-30 13:57:14'),
(29, 102, 105, 127, 121, 154, 127, '2021-01-31 13:57:14'),
(30, 87, 139, 139, 180, 133, 130, '2021-02-01 14:56:24'),
(31, 94, 119, 140, 184, 148, 133, '2021-02-02 14:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `buyukcekmece`
--

DROP TABLE IF EXISTS `buyukcekmece`;
CREATE TABLE IF NOT EXISTS `buyukcekmece` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bench` int(30) NOT NULL,
  `squat_rack` int(30) NOT NULL,
  `smith_machine` int(30) NOT NULL,
  `treadmill` int(30) NOT NULL,
  `exercise_bikes` int(30) NOT NULL,
  `leg_press` int(30) NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyukcekmece`
--

INSERT INTO `buyukcekmece` (`id`, `bench`, `squat_rack`, `smith_machine`, `treadmill`, `exercise_bikes`, `leg_press`, `created_At`) VALUES
(1, 106, 142, 156, 129, 136, 145, '2021-01-03 17:28:30'),
(2, 123, 155, 169, 156, 112, 129, '2021-01-04 17:28:30'),
(3, 113, 151, 120, 164, 117, 128, '2021-01-05 17:28:30'),
(4, 95, 124, 162, 152, 114, 147, '2021-01-06 17:28:30'),
(5, 139, 106, 119, 114, 114, 141, '2021-01-07 17:28:30'),
(6, 105, 137, 133, 150, 128, 168, '2021-01-08 17:28:31'),
(7, 139, 103, 167, 117, 107, 160, '2021-01-09 17:28:31'),
(8, 98, 108, 132, 111, 121, 123, '2021-01-10 17:28:31'),
(9, 120, 142, 174, 160, 118, 144, '2021-01-11 17:28:31'),
(10, 110, 153, 138, 125, 115, 112, '2021-01-12 17:28:31'),
(11, 144, 112, 135, 115, 131, 164, '2021-01-13 17:28:31'),
(12, 107, 141, 148, 150, 148, 142, '2021-01-14 17:28:31'),
(13, 130, 137, 122, 157, 137, 126, '2021-01-15 17:28:31'),
(14, 145, 138, 142, 131, 128, 161, '2021-01-16 17:28:31'),
(15, 103, 129, 162, 134, 146, 122, '2021-01-17 17:28:31'),
(16, 96, 149, 162, 137, 161, 125, '2021-01-18 17:28:31'),
(17, 130, 125, 124, 138, 160, 116, '2021-01-19 17:28:31'),
(18, 149, 125, 125, 149, 148, 144, '2021-01-20 17:28:31'),
(19, 140, 122, 138, 158, 156, 158, '2021-01-21 17:28:31'),
(20, 127, 134, 174, 123, 112, 108, '2021-01-22 17:28:31'),
(21, 130, 116, 137, 112, 111, 133, '2021-01-23 17:28:32'),
(22, 134, 125, 169, 121, 124, 167, '2021-01-24 17:28:32'),
(23, 146, 144, 167, 116, 162, 131, '2021-01-25 17:28:32'),
(24, 96, 122, 148, 147, 131, 129, '2021-01-26 17:28:32'),
(25, 117, 110, 145, 169, 127, 165, '2021-01-27 17:28:32'),
(26, 125, 105, 157, 121, 159, 164, '2021-01-28 17:28:32'),
(27, 145, 149, 131, 169, 107, 126, '2021-01-29 17:28:32'),
(28, 111, 151, 126, 132, 124, 138, '2021-01-30 17:28:32'),
(29, 174, 177, 192, 200, 204, 251, '2021-01-31 20:07:18'),
(30, 171, 181, 161, 217, 200, 240, '2021-02-01 20:07:18'),
(31, 190, 187, 194, 182, 229, 249, '2021-02-02 20:07:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
