-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:30 PM
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
-- Table structure for table `thesis_admin`
--

CREATE TABLE `thesis_admin` (
  `Course_name` varchar(255) DEFAULT NULL,
  `Academic_year` varchar(255) DEFAULT NULL,
  `No_of_Student` int(10) DEFAULT NULL,
  `Team_member_name_1` varchar(255) DEFAULT NULL,
  `Team_member_name_2` varchar(30) DEFAULT NULL,
  `Team_member_name_3` varchar(30) DEFAULT NULL,
  `Team_member_name_4` varchar(30) DEFAULT NULL,
  `Team_member_name_5` varchar(30) DEFAULT NULL,
  `Thesis_domain` varchar(255) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `Proposal` varchar(100) NOT NULL,
  `Prototype` varchar(100) NOT NULL,
  `ThesisBook` varchar(100) NOT NULL,
  `Commencedate` varchar(255) DEFAULT NULL,
  `CompletionDate` varchar(255) DEFAULT NULL,
  `ThesisSynopsis` varchar(100) NOT NULL,
  `URLFrontend` varchar(100) NOT NULL,
  `GithubLink` varchar(100) NOT NULL,
  `RelevantPublications` varchar(100) NOT NULL,
  `ThesisFiles` varchar(100) NOT NULL,
  `Thesis_title` varchar(100) NOT NULL,
  `thesisID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis_admin`
--

INSERT INTO `thesis_admin` (`Course_name`, `Academic_year`, `No_of_Student`, `Team_member_name_1`, `Team_member_name_2`, `Team_member_name_3`, `Team_member_name_4`, `Team_member_name_5`, `Thesis_domain`, `StudentID`, `Proposal`, `Prototype`, `ThesisBook`, `Commencedate`, `CompletionDate`, `ThesisSynopsis`, `URLFrontend`, `GithubLink`, `RelevantPublications`, `ThesisFiles`, `Thesis_title`, `thesisID`) VALUES
('CSE-309', '2017-2018', 5, 'Farhan nizami', 'Abu Hena Rony', 'Jamal Uddin', 'Masum Talukder', 'Bijoya ghosh', 'Database input output', ' 201814006,202014019', 'Organized collection of structured information, or data, typically stored electronically in a comput', 'Database management system', 'CSE_302_SubQueries.pdf', '12-12-2019', '12-12-2020', 'Data structure that stores organized information. Most databases contain multiple tables, which may ', 'www.database.com', 'GIT', ' HELLOJAVA12345', 'thesis extract digest', 'Deep learning obstacle avoidance', 5),
('CSE-305', '2020-2021', 5, 'Easin Arafat', 'Shoeb Ahmed Tanjim', 'Shovon Niverd pereira', 'Rayhan Ferdous Faisal', 'Adib Hossain', 'Software Models are trained with labeled data sets', ' 201814005,202014025,202014043', 'Supervised machine learning models are trained with labeled data sets', 'Algorithm would be trained with pictures of dogs and other things, all labeled by humans', 'BLOCKCHAIN OVERVIEW.pptx', '12-9-2020', '12-10-2022', 'Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to', 'www.ml.com', 'repo/ml', ' Advanced Deep learning', 'thesis extract digest second', 'Advanced Machine Learning', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thesis_admin`
--
ALTER TABLE `thesis_admin`
  ADD PRIMARY KEY (`thesisID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thesis_admin`
--
ALTER TABLE `thesis_admin`
  MODIFY `thesisID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
