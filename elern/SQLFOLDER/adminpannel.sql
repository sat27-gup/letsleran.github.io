-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 04:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpannel`
--

-- --------------------------------------------------------

--
-- Table structure for table `couses`
--

CREATE TABLE `couses` (
  `course_id` int(11) NOT NULL,
  `couse_name` varchar(255) NOT NULL,
  `couse_desc` varchar(255) NOT NULL,
  `couse_autr` varchar(255) NOT NULL,
  `couse_img` text NOT NULL,
  `couse_duration` text NOT NULL,
  `couse_price` int(11) NOT NULL,
  `couse_orgn_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couses`
--

INSERT INTO `couses` (`course_id`, `couse_name`, `couse_desc`, `couse_autr`, `couse_img`, `couse_duration`, `couse_price`, `couse_orgn_price`) VALUES
(3, 'Gutar', 'Learn About Gitar', 'Satyam Gupta', 'download (1).jpg', '10days', 200, 1000),
(5, 'C++', 'Learn OOP', 'Satyam Ji', 'download.jpg', '6month', 50, 500),
(6, 'Web Development', 'Learn Every Thing About Webdevelopment In Hindi And English', 'Satyam Gupta', 'download (2).jpg', '60hrs', 100, 1000),
(7, 'Java', 'Learn Every Thing About Java And Advance Java', 'Andrud', 'download (3).jpg', '1month', 500, 5000),
(8, 'Andriod Development', 'Learn How To Create App And Software', 'Google', 'download (4).jpg', '3months', 2000, 20000),
(9, 'Ethical Hacking', 'Learn How To Protect From Hackers', 'Technical Sagar', 'download (5).jpg', '3months', 350, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `lession`
--

CREATE TABLE `lession` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `course_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lession`
--

INSERT INTO `lession` (`lesson_id`, `lesson_name`, `lesson_desc`, `course_link`, `course_id`, `course_name`) VALUES
(3, 'Introduction of gittar', 'Learn Every Thing About gitar', 'Couvid/video/cmdcmman.mp4', 3, 'Gutar');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Satyam Gupta', 'sg@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couses`
--
ALTER TABLE `couses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lession`
--
ALTER TABLE `lession`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couses`
--
ALTER TABLE `couses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lession`
--
ALTER TABLE `lession`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
