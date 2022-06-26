-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 08:59 PM
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
  `Course_name` varchar(20) DEFAULT NULL,
  `Academic_year` varchar(30) DEFAULT NULL,
  `No_of_Student` int(10) DEFAULT NULL,
  `Team_member_name_1` varchar(30) DEFAULT NULL,
  `Team_member_name_2` varchar(30) DEFAULT NULL,
  `Team_member_name_3` varchar(30) DEFAULT NULL,
  `Team_member_name_4` varchar(30) DEFAULT NULL,
  `Team_member_name_5` varchar(30) DEFAULT NULL,
  `Thesis_domain` varchar(100) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `Proposal` varchar(100) NOT NULL,
  `Prototype` varchar(100) NOT NULL,
  `ThesisBook` varchar(100) NOT NULL,
  `Commencedate` datetime DEFAULT NULL,
  `CompletionDate` datetime DEFAULT NULL,
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

INSERT INTO `thesis_admin` (`Course_name`, `Academic_year`, `No_of_Student`, `Team_member_name_1`, `Team_member_name_2`, `Team_member_name_3`, `Team_member_name_4`, `Team_member_name_5`, `Thesis_domain`, `StudentID`, `Proposal`, `Prototype`, `ThesisBook`, `Commencedate`, `CompletionDate`, `ThesisSynopsis`, `URLFrontend`, `GithubLink`, `RelevantPublications`, `ThesisFiles`, `Thesis_title`) VALUES
('', '', 0, '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', ''),
('cse-301', '2019-20', 4, 'saifur', 'majdoor', 'khanchi', 'bhabi', 'billu', 'THESISDOMAIN', '202014019', 'PROPOSAL', 'PROTOTYPE', 'THESISBOOK', '2022-06-21 00:00:00', '2022-06-08 00:00:00', 'THESISSYNOPSIS', 'URL', 'GITLINK', 'RELEVEANRPUBLICATON', 'THESISFIEL', 'THESISTITLE'),
('CSE-303', '2019-2020', 3, ' MASKAS1', 'ASASALJ2', 'ASASLKAS4', 'asasa', 'mm-5', 'DSFSDVSFFVS', ' 201814006', ' ', ' ', 'CSE_302_SubQueries.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'DSFDVDFVFDV', 'DSFDVC ', 'DCSDVCDFCS', ' DFSDFDSVS', '', 'SDEWFRSDGVDSV'),
('CSE-309', '2016-2017', 5, ' asas', 'm2', 'ASASLKAS4', 'asasa', 'mm-5', 'asasasa', ' 201814007', ' Database-System-Concepts-7th-Edition.pdf', ' ', 'MCC-intro-1.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'asasasa', 'asas', 'asasasas', ' asasasas', '', 'asasas'),
('CSE-309', '2017-2018', 5, ' MASKAS1', 'ASASALJ2', 'mm3', 'm4', 'mm-5', 'DBMS', ' 201814006', ' ', ' ', 'CSE_302_SubQueries.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'HELLOWORLD', 'HTTP', 'GIT', ' HELLOJAVA', '', 'BINARY SEARCH');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
