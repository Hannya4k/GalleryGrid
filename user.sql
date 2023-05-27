-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(12) NOT NULL,
  `Email_Add` varchar(45) NOT NULL,
  `Password` int(15) NOT NULL,
  `User_name` varchar(15) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(45) NOT NULL,
  `Contact_Num` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Email_Add`, `Password`, `User_name`, `First_Name`, `Last_Name`, `Contact_Num`) VALUES
(3, 'abcd@gmail.com', 123123123, 'asdawd', 'dawdaw', 'afsef', 42134151),
(8, 'hakdog@gmail.com', 123123123, 'cuddmon', 'Jan Dale', 'Topacio', 993254253),
(10, 'jandale.topacio@jmc.edu.ph', 3123123, 'awdawd', 'Jan Dale', 'Topacio', 12312),
(11, 'awdawf@gmail.com', 0, '', 'edawdawd', '12e12', 23123),
(12, 'jandale.topacasdawio@jmc.edu.ph', 1312312, 'qqwad', 'Jan Dale', 'Topacio', 31421),
(13, 'jandalawdwe.topacio@jmc.edu.ph', 124123415, 'asdaaaxw', 'Jan Dale', 'Topacio', 53456),
(14, 'jandale.topacawdawio@jmc.edu.ph', 513123, '3czscz', 'Jan Dale', 'Topacio', 23124),
(15, 'jandale.topacio@jmc.edu.ph', 0, '453234', 'Jan Dale', 'Topacio', 2312312),
(16, 'jandale.topacio@jmc.edu.ph', 0, '324234', 'Jan Dale', 'Topacio', 341231234),
(17, 'jandale.topacio@jmc.edu.ph', 0, '324234', 'Jan Dale', 'Topacio', 341231234),
(18, 'jandale.topacio@jmc.eadu.ph', 412312412, 'cuddmon', 'Jan Dale', 'Topacio', 2147483647),
(19, 'jandale.dwadfatopacio@jmc.edu.ph', 4123123, 'sadw', 'Jan Dale', 'Topacio', 324234235),
(20, 'dawdawfa2@gmail.com', 23121234, 'sfse', 'dafawdawd', '3eawdawd', 993255321),
(21, 'adwawd@gmail.com', 123124123, 'awdawdf', 'dawfaw', 'dawdawd', 231412),
(22, 'jandale.topacio@jmc.edu.ph', 0, '3241234', 'Jan Dale', 'Topacio', 23123123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`,`Email_Add`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
