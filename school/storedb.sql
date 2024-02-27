-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 07:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(15) NOT NULL,
  `student_name` varchar(55) DEFAULT NULL,
  `stu_img` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `courses` enum('HTML','CSS','PHP') DEFAULT NULL,
  `student_status` enum('Available','Not-Available') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `stu_img`, `birth_date`, `courses`, `student_status`) VALUES
(2, 'el-shimaa mohamed', 'uploaded/65dbdcb5211cd3.45462653.jpg', '1999-01-21', 'HTML', 'Available'),
(5, 'menna Tollah Mohamed', 'uploaded/65de0c3ac108a3.89524772.jpg', '2001-09-03', 'CSS', 'Available'),
(6, 'reem mahmoud ', 'uploaded/65de0c630fcc66.27934162.jpg', '2000-12-08', 'PHP', 'Not-Available'),
(7, 'mawada mohamed', 'uploaded/65de17a20c5253.39542925.jpg', '2001-09-03', 'HTML', 'Available'),
(8, 'menna abd-elaziz', 'uploaded/65de17bf7eda28.79217542.jpg', '2001-03-31', 'PHP', 'Not-Available'),
(9, 'amira helmy ', 'uploaded/65de17e40c79a0.98980582.jpg', '2001-09-30', 'PHP', 'Available'),
(10, 'ahmed mohamed', 'uploaded/65de18d1f31673.12132724.jpg', '2005-05-30', 'CSS', 'Available'),
(11, 'abd-elaziz mohamed', 'uploaded/65de1c202c8346.39509763.jpg', '2010-09-13', 'HTML', 'Not-Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
