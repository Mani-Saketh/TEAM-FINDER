-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Apr 15, 2021 at 04:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('lehar', 'lehar'),
('mani', 'mani');

-- --------------------------------------------------------

--
-- Table structure for table `hackathon`
--

CREATE TABLE `hackathon` (
  `name` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hackathon`
--

INSERT INTO `hackathon` (`name`, `Date`, `description`) VALUES
('Hackathon 2.0', '2021-04-08', 'It\'s sink or swim for this hackathon. Join us for a weekend full of financial and fintech hacks! Whe'),
('App-thon', '2021-04-15', 'Welcome to the world of excitement and be part of this 48-hour journey creating an app'),
('Akshwani Haeck', '2021-04-22', '6-hour long geeking extravaganza. Think of an idea, make a team of 2-4 students with no year, branch, course and college restrictions. Dd we tell you it\'s free? Then what are you waiting for? Register ASAP. Join us for 36 hour fun filled with enriching talks, interactive workshops and fun mini games too. Trust us the journey will keep all hackers on the edge of their seats.'),
('Code2Create 2021', '2021-04-22', ' Code2Create is one of the biggest college-level hackathons in the country and promises to be a great learning experience for beginners as well as seasoned developers alike. You’ll end up with a mini-project to show-off on your resume, and with prizes worth 5 lakhs, speaker sessions from industry experts, schwags, and fun in-hack activities, you definitely don’t wanna miss this!'),
('The AI Sports Challenge 2021', '2021-04-22', 'An online AI programming competition open to all. Program a bot to compete in an online AI multiplayer game for prizes, job opportunities and bragging rights. Registrations close 31 March.'),
('New Mareveck', '2021-09-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `skillset`
--

CREATE TABLE `skillset` (
  `rollno` varchar(14) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skillset`
--

INSERT INTO `skillset` (`rollno`, `skills`, `msg`) VALUES
('AP19110010001', 'Java,Html,CSS', 'Looking for Graphic designer'),
('AP19110010002', 'JQuery,C#', ''),
('AP19110010448', 'Html,C++,Ruby', 'Finding team'),
('AP19110010449', 'Angular', 'Web designer'),
('AP19110010456', 'Java,Html,CSS', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `rollno` varchar(13) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_number` varchar(13) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`rollno`, `name`, `email`, `contact_number`, `password`) VALUES
('AP19110010001', 'Varish', 'varish@gmail.com', '', 'lehar'),
('AP19110010002', 'Amit', 'amit@gamil.com', '9588876675', 'lehar'),
('AP19110010448', 'Lehar Sancheti', 'lehar_sancheti@srmap.edu.in', '7665387412', 'lehar'),
('AP19110010449', 'Sumana', 'sumana@gmail.com', '4568832', 'sumana'),
('AP19110010456', 'ishita', 'wert@gmail.com', '2147483647', 'lehar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skillset`
--
ALTER TABLE `skillset`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
