-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 02:21 PM
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
-- Table structure for table `addachievement`
--

CREATE TABLE `addachievement` (
  `id` int(255) NOT NULL,
  `EventName` varchar(200) DEFAULT NULL,
  `Organizer` varchar(200) DEFAULT NULL,
  `Academic_year` varchar(200) NOT NULL,
  `TeamName` varchar(200) DEFAULT NULL,
  `StudentNo` varchar(200) DEFAULT NULL,
  `Supervisor1` varchar(200) DEFAULT NULL,
  `Supervisor2` varchar(200) DEFAULT NULL,
  `Supervisor3` varchar(200) DEFAULT NULL,
  `Supervisor4` varchar(200) DEFAULT NULL,
  `Member1ID` varchar(200) DEFAULT NULL,
  `Member2ID` varchar(200) DEFAULT NULL,
  `Member3ID` varchar(200) DEFAULT NULL,
  `Member4ID` varchar(200) DEFAULT NULL,
  `Member5ID` varchar(200) DEFAULT NULL,
  `AchievementTitle` varchar(200) NOT NULL,
  `Achievement_detailes` varchar(2000) NOT NULL,
  `AchievementPhoto` varchar(200) NOT NULL,
  `PrizeMoney` varchar(20) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addachievement`
--

INSERT INTO `addachievement` (`id`, `EventName`, `Organizer`, `Academic_year`, `TeamName`, `StudentNo`, `Supervisor1`, `Supervisor2`, `Supervisor3`, `Supervisor4`, `Member1ID`, `Member2ID`, `Member3ID`, `Member4ID`, `Member5ID`, `AchievementTitle`, `Achievement_detailes`, `AchievementPhoto`, `PrizeMoney`, `date`) VALUES
(5, 'MIST wins URC-2022', 'NASA', '2021-2022', 'Team Mongol Barota', '3', 'Lec Raiyan Rahman', 'Lec Nafiz Imtiaz Khan', 'Lec Shadman Aadeeb', 'Lec Swapnil Biswas', '202014001', '202014002', '202014003', '202014032', '202014024', 'MIST wins URC-2021', 'Team Mongol Barota was born in 2013, with a vision of reaching higher than ever. Since its inception, this ambitious little team had only one objective: To present our institute, as well as our country on a global platform with pride. Since then, the team has begun designing and fabricating futuristic Mars rovers in order to challenge other teams across the globe. Over the years, the team has grown and evolved into something marvelous. As future engineers, we prioritise collaboration, learning, and collective effort all throughout any project, to turn our initial vision into concrete reality. Now we go forward with the motto, \"Nothing is constant, other than change\", constantly evolving, to keep up with the challenges we face.\r\n\r\nAfter a long hiatus, Team Mongol Barota has risen from its ashes, with a new rover, aptly named \"PHOENIX\". The team, now stronger than ever, participated in the University Rover Challenge of 2021, and won the championship with flying colors. This was a first in the history of our team, the institute, as well as our country, Bangladesh. The key to this success was the efficient collaboration among the CSE and ME departments, making the team stronger than ever.\r\n\r\nTeam Mongol Barota\'s first attempt at the European Rover Challenge was on 2016. The team had tried their best, with high ambition and will to reach the top. However, the team had not been successful in that attempt, resulting in our team entering a period of hiatus for the next few years. Part of the journey is the hardship and the loss, something that the team felt profoundly after the challenge came to an end.', 'acvm1.jpg', '12000$', '2022-07-01'),
(6, 'ICPC-2021', 'MIST', '2016-2017', 'Team CodeBreaker', '3', 'Prof Mahbubur Rahman', 'Lec Nafiz Imtiaz Khan', 'Lec Muhaimin Bin Munir', 'Lec Swapnil Biswas', '202014001', '202014002', '202014003', '202014004', '202014005', 'MIST wins ICPC-2022', 'Team Mongol Barota was born in 2013, with a vision of reaching higher than ever. Since its inception, this ambitious little team had only one objective: To present our institute, as well as our country on a global platform with pride. Since then, the team has begun designing and fabricating futuristic Mars rovers in order to challenge other teams across the globe. Over the years, the team has grown and evolved into something marvelous. As future engineers, we prioritise collaboration, learning, and collective effort all throughout any project, to turn our initial vision into concrete reality. Now we go forward with the motto, \"Nothing is constant, other than change\", constantly evolving, to keep up with the challenges we face. After a long hiatus, Team Mongol Barota has risen from its ashes, with a new rover, aptly named \"PHOENIX\". The team, now stronger than ever, participated in the University Rover Challenge of 2021, and won the championship with flying colors. This was a first in the history of our team, the institute, as well as our country, Bangladesh. The key to this success was the efficient collaboration among the CSE and ME departments, making the team stronger than ever. Team Mongol Barota\'s first attempt at the European Rover Challenge was on 2016. The team had tried their best, with high ambition and will to reach the top. However, the team had not been successful in that attempt, resulting in our team entering a period of hiatus for the next few years. Part of the journey is the hardship and the loss, something that the team felt profoundly after the challenge came to an end.', 'acvm5.jpg', '320000$', '2022-07-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addachievement`
--
ALTER TABLE `addachievement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addachievement`
--
ALTER TABLE `addachievement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
