-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 09:03 PM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ProjectName` varchar(255) NOT NULL,
  `Academicyear` varchar(255) NOT NULL,
  `NoofStudent` int(10) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `Supervisors` varchar(255) NOT NULL,
  `Member-1Name` varchar(255) NOT NULL,
  `Member-2Name` varchar(255) NOT NULL,
  `Member-3Name` varchar(255) NOT NULL,
  `Member-4Name` varchar(255) NOT NULL,
  `Member-5Name` varchar(255) NOT NULL,
  `CommenceDate` date NOT NULL,
  `CompletionDate` date NOT NULL,
  `ProjectTitle` varchar(255) NOT NULL,
  `ProjectDomain` varchar(255) NOT NULL,
  `ProjectSynopsis` varchar(255) NOT NULL,
  `TeamPhoto` varchar(255) NOT NULL,
  `Proposal` varchar(255) NOT NULL,
  `Prototype` varchar(255) NOT NULL,
  `Budget` varchar(255) NOT NULL,
  `URLofFrontend` varchar(1000) NOT NULL,
  `GithubLink` varchar(1000) NOT NULL,
  `ProjectFile` varchar(255) NOT NULL,
  `RelevantProjects` varchar(1000) NOT NULL,
  `ProjectID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ProjectName`, `Academicyear`, `NoofStudent`, `StudentID`, `Supervisors`, `Member-1Name`, `Member-2Name`, `Member-3Name`, `Member-4Name`, `Member-5Name`, `CommenceDate`, `CompletionDate`, `ProjectTitle`, `ProjectDomain`, `ProjectSynopsis`, `TeamPhoto`, `Proposal`, `Prototype`, `Budget`, `URLofFrontend`, `GithubLink`, `ProjectFile`, `RelevantProjects`, `ProjectID`) VALUES
('Mist archive', '2021-2022', 4, '202014016,202014019,202014033,202014040', 'lec nafiz, lec muhaimin, lec adeeb', 'Tanvin Jamal', 'Khaled Hasan ', 'Md Rashid Ul Islam', 'Nurshat Fateh Ali', '', '2022-06-01', '2022-06-16', 'Data archive cse', 'whole cse dept', 'Archive', '', 'Hello archive', 'yes', '200000', 'http / archive ', 'github repo', 'mistdataarchive', 'dbms', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ProjectID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
