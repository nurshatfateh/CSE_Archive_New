-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 01:51 AM
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
  `EventName` varchar(200) NOT NULL,
  `Organizer` varchar(200) NOT NULL,
  `Academic_year` varchar(200) NOT NULL,
  `TeamName` varchar(200) NOT NULL,
  `StudentNo` varchar(200) NOT NULL,
  `Supervisor1` varchar(200) NOT NULL,
  `Supervisor2` varchar(200) NOT NULL,
  `Supervisor3` varchar(200) NOT NULL,
  `Supervisor4` varchar(200) NOT NULL,
  `Member1ID` varchar(200) NOT NULL,
  `Member1Name` varchar(200) NOT NULL,
  `Member2ID` varchar(200) NOT NULL,
  `Member2Name` varchar(200) NOT NULL,
  `Member3ID` varchar(200) NOT NULL,
  `Member3Name` varchar(200) NOT NULL,
  `Member4ID` varchar(200) NOT NULL,
  `Member4Name` varchar(200) NOT NULL,
  `Member5ID` varchar(200) NOT NULL,
  `Member5Name` varchar(200) NOT NULL,
  `AchievementTitle` varchar(200) NOT NULL,
  `Achievement_detailes` varchar(2000) NOT NULL,
  `AchievementPhoto` varchar(200) NOT NULL,
  `PrizeMoney` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addachievement`
--

INSERT INTO `addachievement` (`id`, `EventName`, `Organizer`, `Academic_year`, `TeamName`, `StudentNo`, `Supervisor1`, `Supervisor2`, `Supervisor3`, `Supervisor4`, `Member1ID`, `Member1Name`, `Member2ID`, `Member2Name`, `Member3ID`, `Member3Name`, `Member4ID`, `Member4Name`, `Member5ID`, `Member5Name`, `AchievementTitle`, `Achievement_detailes`, `AchievementPhoto`, `PrizeMoney`) VALUES
(5, 'MIST wins URC-2022', 'NASA', '2021-2022', 'Team Mongol Barota', '3', 'Lec Raiyan Rahman', 'Lec Nafiz Imtiaz Khan', 'Lec Shadman Aadeeb', 'Lec Swapnil Biswas', '202014001', 'Abir hossain', '202014002', 'Shoeb Ahmed Tanjim', '202014003', 'Shovon Niverd Pereira', '202014032', 'Abul', '202014024', 'Latif', 'MIST wins URC-2021', 'Team Mongol Barota was born in 2013, with a vision of reaching higher than ever. Since its inception, this ambitious little team had only one objective: To present our institute, as well as our country on a global platform with pride. Since then, the team has begun designing and fabricating futuristic Mars rovers in order to challenge other teams across the globe. Over the years, the team has grown and evolved into something marvelous. As future engineers, we prioritise collaboration, learning, and collective effort all throughout any project, to turn our initial vision into concrete reality. Now we go forward with the motto, \"Nothing is constant, other than change\", constantly evolving, to keep up with the challenges we face.\r\n\r\nAfter a long hiatus, Team Mongol Barota has risen from its ashes, with a new rover, aptly named \"PHOENIX\". The team, now stronger than ever, participated in the University Rover Challenge of 2021, and won the championship with flying colors. This was a first in the history of our team, the institute, as well as our country, Bangladesh. The key to this success was the efficient collaboration among the CSE and ME departments, making the team stronger than ever.\r\n\r\nTeam Mongol Barota\'s first attempt at the European Rover Challenge was on 2016. The team had tried their best, with high ambition and will to reach the top. However, the team had not been successful in that attempt, resulting in our team entering a period of hiatus for the next few years. Part of the journey is the hardship and the loss, something that the team felt profoundly after the challenge came to an end.', '', '12000$'),
(6, 'ICPC-2021', 'MIST', '2016-2017', 'Team CodeBreaker', '3', 'Prof Mahbubur Rahman', 'Lec Nafiz Imtiaz Khan', 'Lec Muhaimin Bin Munir', 'Lec Swapnil Biswas', '202014001', 'Jamal', '202014002', 'Kamal', '202014003', 'Abul', '202014004', 'Latif', '202014005', 'Mofiz', 'MIST wins ICPC-2022', 'Team Mongol Barota was born in 2013, with a vision of reaching higher than ever. Since its inception, this ambitious little team had only one objective: To present our institute, as well as our country on a global platform with pride. Since then, the team has begun designing and fabricating futuristic Mars rovers in order to challenge other teams across the globe. Over the years, the team has grown and evolved into something marvelous. As future engineers, we prioritise collaboration, learning, and collective effort all throughout any project, to turn our initial vision into concrete reality. Now we go forward with the motto, \"Nothing is constant, other than change\", constantly evolving, to keep up with the challenges we face. After a long hiatus, Team Mongol Barota has risen from its ashes, with a new rover, aptly named \"PHOENIX\". The team, now stronger than ever, participated in the University Rover Challenge of 2021, and won the championship with flying colors. This was a first in the history of our team, the institute, as well as our country, Bangladesh. The key to this success was the efficient collaboration among the CSE and ME departments, making the team stronger than ever. Team Mongol Barota\'s first attempt at the European Rover Challenge was on 2016. The team had tried their best, with high ambition and will to reach the top. However, the team had not been successful in that attempt, resulting in our team entering a period of hiatus for the next few years. Part of the journey is the hardship and the loss, something that the team felt profoundly after the challenge came to an end.', '', '320000$');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `joindate` varchar(200) NOT NULL,
  `dept` varchar(300) NOT NULL,
  `research` varchar(300) NOT NULL,
  `degree` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `current` varchar(300) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `position`, `joindate`, `dept`, `research`, `degree`, `dob`, `phone`, `email`, `current`, `pass`) VALUES
('20201', 'Nafiz Imtiaz Khan', 'Lecturer', '2005', 'CSE', 'Artificial Intelligence', 'PHD in AI', '2014-02-01', '1933318385', 'nafiz@gmail.com', 'Yes', '1'),
('20202', 'Muhaimin Bin Munir', 'Lecturer', '2006', 'CSE', 'Machine Learning', 'PHD in ML', '2004-02-01', '1933318355', 'rafi@gmail.com', 'Yes', '2'),
('20203', 'Shadman Aadeeb', 'Lecturer', '2007', 'CSE', 'Natural Language Processing', 'PHD in NLP', '2005-02-01', '1933318388', 'aadeeb@gmail.com', 'Yes', '3'),
('664', 'Raiyan Rahman', 'Lecturer', '2005', 'CE', 'Automation', 'MSC', '0000-00-00', '6666666666', 'raiyan@gmail.com', 'Yes', '6666666666');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `regno` varchar(300) NOT NULL,
  `batch` varchar(300) NOT NULL,
  `dept` varchar(300) NOT NULL,
  `quota` varchar(300) NOT NULL,
  `parentjob` varchar(300) NOT NULL,
  `dob` text NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `presadd` varchar(300) NOT NULL,
  `permadd` varchar(300) NOT NULL,
  `father` varchar(300) NOT NULL,
  `mother` varchar(300) NOT NULL,
  `blood` varchar(300) NOT NULL,
  `current` varchar(300) NOT NULL,
  `session` varchar(300) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `name`, `regno`, `batch`, `dept`, `quota`, `parentjob`, `dob`, `phone`, `email`, `presadd`, `permadd`, `father`, `mother`, `blood`, `current`, `session`, `pass`) VALUES
('201914028', 'Rakib Islam', '141168565', 'CSE-19', 'CSE', 'Army', 'Government', '01/06/2000', '0161616545511', 'rakib@gmail.com', 'Dhaka', 'Rangpur', 'Karimuddin', 'Sabikun', 'O-', 'YES', '2019', '88888888'),
('201914099', 'Abdul Al Emon', '1410249999', 'CSE-19', 'CSE', 'Army', 'Government', '05-02-01', '1933318388', 'abdulemon@gmail.com', 'Dhaka, Bangladesh', 'Noakhali, Dhaka', 'Rafique Islam', 'Shumi Akhter', 'O-', 'YES', '2019', '3'),
('202014016', 'Jamal Tanvin', '1411', 'CSE-20', 'NSE', 'Army', 'Government', '0000-00-00', '01616161', 'tanvin@gmail.com', 'Dhaka', 'Sathkhira', 'Karim', 'Ayesha', 'B+', 'YES', '2020', '01616161'),
('202014018', 'Jubair Ahmed', '1411', 'CSE-20', 'CSE', 'Army', 'Government', '29/06/98', '6666666666', 'jubair@gmail.com', 'Dhaka ', 'Dhaka', 'Sakib', 'Ayesha', 'AB+', 'Yes', '2020', '6666666666'),
('202014024', 'Mahdi Adib', '1411', 'CSE-20', 'CSE', 'Army', 'Government', '29/06/98', '6666666666', 'adibmahdi@gmail.com', 'DHaka', 'Khulna', 'Karim', 'Tasnim', 'A-', 'Yes', '2020', '6666666666'),
('202014028', 'Mahdi', '1411', 'ARCH-5', 'ARCH', '', 'Government', '0000-00-00', '01616161', 'mahdi@yahoo.com', 'Dhaka', 'Cumilla', 'Sakib', 'Tasnim', 'A+', 'YES', '2020', 'hololense'),
('202014034', 'Rifat Islam', '9955', 'NSE-05', 'NSE', 'Army', 'Government', '0000-00-00', '01616165', 'rifat@gmail.com', 'Dhaka', 'Rajshahi', 'Ramjan', 'Rabeya', 'AB+', 'YES', '2020', '885544'),
('202014037', 'Ayon Bilwal', '14115353', 'EECE-09', 'EECE', 'Army', 'Government', '0000-00-00', '016161611515', 'ayon@gmail.com', 'Dhaka', 'Sitakundo', 'Sattar', 'Asma', 'A-', 'YES', '2011', '99999999'),
('202014040', 'Nurshat Fateh Ali', '1410245687', 'CSE-20', 'CSE', 'General', 'Non-Government', '14-02-01', '1933318385', 'nurshat.fateh@studentambassadors.com', 'Dhaka, Bangladesh', 'Dhaka, Bangladesh', 'Hatim Ali', 'Shubarna Jahan Rasma', 'O+', 'Yes', '2020', '1'),
('202014054', 'Tahidul Islam', '1410245677', 'CSE-20', 'CSE', 'General', 'Non-Government', '04-02-01', '1933318355', 'tahid_islam@gmail.com', 'Dhaka, Bangladesh', 'Dhaka, Bangladesh', 'Mohamaad Ashraf', 'Jahanara Lopa', 'A+', 'Yes', '2020', '2'),
('202014055', 'Rahat Islam', '14111515', 'ARCH-5', 'ARCH', 'Army', 'Government', '01/07/2022', '0161616545515', 'rahat@gmail.com', 'Dhaka ', 'Dhaka', 'Sakib', 'Ayesha', 'A-', '', '2020', '0161616545515'),
('202014063', 'Mizan', '14115511', 'CSE-20', 'CSE', '', 'Government', '01/06/2000', '0161616545515', 'tanvin@gmail.com', 'Dhaka', 'Dhaka', 'Samsur', 'Amena', 'A-', 'YES', '2020', '99999999'),
('202014066', 'Sumon Islam', '1411515', 'BME-01', 'BME', 'Army', 'Government', '0000-00-00', '0161616545515', 'sumon@gmail.com', 'Dhaka', 'Khulna', 'Ahsan', 'Adiba', 'A-', 'YES', '2018', '••••••••••');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'student', 'student'),
(3, 'faculty', 'faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addachievement`
--
ALTER TABLE `addachievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addachievement`
--
ALTER TABLE `addachievement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
