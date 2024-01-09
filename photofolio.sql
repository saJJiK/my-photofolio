-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 09:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(5) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone number` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `carreer` varchar(1000) NOT NULL,
  `about` varchar(2000) NOT NULL,
  `myservice 1` varchar(1000) NOT NULL,
  `myservice 2` varchar(1000) NOT NULL,
  `myservice 3` varchar(1000) NOT NULL,
  `my skills` varchar(2000) NOT NULL,
  `my_skills1` float NOT NULL,
  `my_skills2` float NOT NULL,
  `my_skills3` float NOT NULL,
  `my_skills4` float NOT NULL,
  `my_skills5` float NOT NULL,
  `image_filename` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fullname`, `username`, `email`, `phone number`, `password`, `address`, `birthday`, `carreer`, `about`, `myservice 1`, `myservice 2`, `myservice 3`, `my skills`, `my_skills1`, `my_skills2`, `my_skills3`, `my_skills4`, `my_skills5`, `image_filename`) VALUES
(2, 'sajjith', 'sajjo', 'wasd@gmail.com', 7123456, 'asasa', 'aluthgma', '2022-10-17', 'asasa', 'i labhh', '11', '22', '11', 'abiull', 10, 10, 10, 10, 10, NULL),
(4, 'somasiri aponsu', 'somasiri', 'some12@gmail.com', 71113456, 'some1', '22/3, galle road panadurao', '2022-10-12', 'cooker', 'i am a data anaylist', 'data anaysist', 'programming', 'web developing', 'i have good', 10, 10, 100, 90, 30, NULL),
(8, 'Sajjitha Walallawita', 'sajji', 'sajjitha@gmail.com', 701870898, 'pass', 'this is where the address contain', '2022-10-12', 'Software Developer', 'This is my about.', 'Web application nDevelopment', 'Mobile applictaion Development', 'Desktop application development', 'this is bri', 40, 50, 90, 70, 90, 'R (1).jpg'),
(19, 'Sajjitha Kawyada', 'Sajjitha', 'kawyada1234@gmail.com', 716716693, 'pass', '32/2, Padmini Peiris Road, Aluthgama', '2000-12-09', 'Web Developer', 'Hi, I am Sajjitha. I am a web developer with in-depth experience in UI/UX design. ', 'Web Developing', 'Create Web Applications', 'Web designing', 'Software Skills. Java, ', 80, 60, 70, 40, 90, 'WhatsApp Image 2022-10-09 at 2.12.37 AM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
