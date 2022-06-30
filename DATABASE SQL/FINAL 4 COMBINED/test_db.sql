-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 04:32 PM
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
(5, 'MIST wins URC-2022', 'NASA', '2021-2022', 'Team Mongol Barota', '3', 'Lec Raiyan Rahman', 'Lec Nafiz Imtiaz Khan', 'Lec Shadman Aadeeb', 'Lec Swapnil Biswas', '202014001', 'Abir hossain', '202014002', 'Shoeb Ahmed Tanjim', '202014003', 'Shovon Niverd Pereira', '202014032', 'Abul', '202014024', 'Latif', 'MIST wins URC-2021', 'Team Mongol Barota was born in 2013, with a vision of reaching higher than ever. Since its inception, this ambitious little team had only one objective: To present our institute, as well as our country on a global platform with pride. Since then, the team has begun designing and fabricating futuristic Mars rovers in order to challenge other teams across the globe. Over the years, the team has grown and evolved into something marvelous. As future engineers, we prioritise collaboration, learning, and collective effort all throughout any project, to turn our initial vision into concrete reality. Now we go forward with the motto, \"Nothing is constant, other than change\", constantly evolving, to keep up with the challenges we face.\r\n\r\nAfter a long hiatus, Team Mongol Barota has risen from its ashes, with a new rover, aptly named \"PHOENIX\". The team, now stronger than ever, participated in the University Rover Challenge of 2021, and won the championship with flying colors. This was a first in the history of our team, the institute, as well as our country, Bangladesh. The key to this success was the efficient collaboration among the CSE and ME departments, making the team stronger than ever.\r\n\r\nTeam Mongol Barota\'s first attempt at the European Rover Challenge was on 2016. The team had tried their best, with high ambition and will to reach the top. However, the team had not been successful in that attempt, resulting in our team entering a period of hiatus for the next few years. Part of the journey is the hardship and the loss, something that the team felt profoundly after the challenge came to an end.', 'acvm1.jpg', '12000$'),
(6, 'ICPC-2021', 'MIST', '2016-2017', 'Team CodeBreaker', '3', 'Prof Mahbubur Rahman', 'Lec Nafiz Imtiaz Khan', 'Lec Muhaimin Bin Munir', 'Lec Swapnil Biswas', '202014001', 'Jamal', '202014002', 'Kamal', '202014003', 'Abul', '202014004', 'Latif', '202014005', 'Mofiz', 'MIST wins ICPC-2022', 'Team Mongol Barota was born in 2013, with a vision of reaching higher than ever. Since its inception, this ambitious little team had only one objective: To present our institute, as well as our country on a global platform with pride. Since then, the team has begun designing and fabricating futuristic Mars rovers in order to challenge other teams across the globe. Over the years, the team has grown and evolved into something marvelous. As future engineers, we prioritise collaboration, learning, and collective effort all throughout any project, to turn our initial vision into concrete reality. Now we go forward with the motto, \"Nothing is constant, other than change\", constantly evolving, to keep up with the challenges we face. After a long hiatus, Team Mongol Barota has risen from its ashes, with a new rover, aptly named \"PHOENIX\". The team, now stronger than ever, participated in the University Rover Challenge of 2021, and won the championship with flying colors. This was a first in the history of our team, the institute, as well as our country, Bangladesh. The key to this success was the efficient collaboration among the CSE and ME departments, making the team stronger than ever. Team Mongol Barota\'s first attempt at the European Rover Challenge was on 2016. The team had tried their best, with high ambition and will to reach the top. However, the team had not been successful in that attempt, resulting in our team entering a period of hiatus for the next few years. Part of the journey is the hardship and the loss, something that the team felt profoundly after the challenge came to an end.', 'acvm5.jpg', '320000$');

-- --------------------------------------------------------

--
-- Table structure for table `addactivity`
--

CREATE TABLE `addactivity` (
  `id` int(255) NOT NULL,
  `EventName` varchar(200) NOT NULL,
  `EventTag` varchar(200) NOT NULL,
  `CommenceDate` varchar(200) NOT NULL,
  `CompletionDate` varchar(200) NOT NULL,
  `PostDetails` varchar(2000) NOT NULL,
  `Organizer` varchar(200) NOT NULL,
  `ActivityPhoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addactivity`
--

INSERT INTO `addactivity` (`id`, `EventName`, `EventTag`, `CommenceDate`, `CompletionDate`, `PostDetails`, `Organizer`, `ActivityPhoto`) VALUES
(1, 'Programming contest', 'IUPC 2018 Held in MIST', '19-02-2018', '21-02-2018', 'MIST Computer Club is one of the finest clubs of MIST that is supervised by our experienced, cooperative and so many helpful faculty members. Their guidance and support help us, students, a lot to enrich our club and hopefully we will do more good deeds in  the future. Here we will discuss the activities we are performing and our future plans for the club.MCC mainly focuses on contest programming and grooming students for competitive and professional programming. This year we were extremely proud to host the National Collegiate Programming Contest (NCPC 2020), the flagship programming contest in Bangladesh with participation from 77 universities. While we continue our focus on contest programming, recently, under the guidance of our respected head sir and advisor of the club, we are diversifying the scopes of MCC. We are venturing various open courses and workshops, developing various multi-dimensional projects through the newly established MCC R&D wing. We are currently conducting an Introductory Web Development Course, which is open for all students from any department of MIST.  We plan to conduct such open courses and workshops in the future as well, on an even bigger scale.', 'MIST COMPUTER CLUB', 'act5.jpg'),
(2, 'Cyberthon', 'Cyberthon 2019 Held in MIST', '09-08-2019', '11-09-2019', 'An open discussion and opinion sharing session was held in the presence of Hon’ble State Minister of ICT Division, MR. Zunaid Ahmed Palak, MP on ways to incorporate and leverage Cyber Security as well as Data Analytics, Robotics, and Artificial intelligence in the academic domain.MIST Computer Club is one of the finest clubs of MIST that is supervised by our experienced, cooperative and so many helpful faculty members. Their guidance and support help us, students, a lot to enrich our club and hopefully we will do more good deeds in  the future. Here we will discuss the activities we are performing and our future plans for the club.MCC mainly focuses on contest programming and grooming students for competitive and professional programming. This year we were extremely proud to host the National Collegiate Programming Contest (NCPC 2020), the flagship programming contest in Bangladesh with participation from 77 universities. While we continue our focus on contest programming, recently, under the guidance of our respected head sir and advisor of the club, we are diversifying the scopes of MCC. We are venturing various open courses and workshops, developing various multi-dimensional projects through the newly established MCC R&D wing. We are currently conducting an Introductory Web Development Course, which is open for all students from any department of MIST.  We plan to conduct such open courses and workshops in the future as well, on an even bigger scale.', 'MIST COMPUTER CLUB', 'act4.jpg'),
(3, 'Software exhibition', 'Software exhibition 2020 Held in MIST', '30-03-2020', '03-04-2020', 'The session was attended by the Commandant of MIST, Cyber Security Professionals, Technology Professionals from different banks and financial institutions, and the faculty members of CSE Department.MIST Computer Club is one of the finest clubs of MIST that is supervised by our experienced, cooperative and so many helpful faculty members. Their guidance and support help us, students, a lot to enrich our club and hopefully we will do more good deeds in  the future. Here we will discuss the activities we are performing and our future plans for the club.MCC mainly focuses on contest programming and grooming students for competitive and professional programming. This year we were extremely proud to host the National Collegiate Programming Contest (NCPC 2020), the flagship programming contest in Bangladesh with participation from 77 universities. While we continue our focus on contest programming, recently, under the guidance of our respected head sir and advisor of the club, we are diversifying the scopes of MCC. We are venturing various open courses and workshops, developing various multi-dimensional projects through the newly established MCC R&D wing. We are currently conducting an Introductory Web Development Course, which is open for all students from any department of MIST.  We plan to conduct such open courses and workshops in the future as well, on an even bigger scale.', 'MIST CSE department', 'act3.jpg'),
(10, 'NCPC 2020', 'NCPC 2020 was held in MIST Premises', '21/02/2020', '23/02/2020', 'With exhilarating participation of teams from over 55 universities, Department of Computer Science and Engineering, Military Institute of Science and Technology (MIST) organized its first ever inter university programming contest (1st MIST IUPC). We enjoyed your presence at our campus and thank you for making it a great success. We are ready to present to you the next edition of it. But this time with a greater excitement, a broader vision.\r\nDepartment of CSE, MIST in association with MIST Computer Club presents to you the National Collegiate Programming Contest 2020. Yes, you heard it right NCPC is back again. Your participation will amplify our success. MIST Computer Club invites the competitive programmers all over the country to get ready to participate in the prestigious NCPC.', 'MIST COMPUTER CLUB', 'dsadsd.jpeg'),
(14, 'MIST ICPC 2021', 'MIST ICPC 2021 was held in MIST  ONLINE Premises', '03/06/2021', '04/06/2021', 'ADIB, RIZU AND FAISAL BECAME THE WORLD CHAMPION OF MIST ICPC 2021', 'MIST COMPUTER CLUB', 'WhatsApp Image 2022-02-01 at 1.07.39 AM (7).jpeg');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ProjectName` varchar(255) NOT NULL,
  `Academicyear` varchar(255) NOT NULL,
  `NoofStudent` int(10) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `Supervisors` varchar(255) NOT NULL,
  `Member1Name` varchar(255) NOT NULL,
  `Member2Name` varchar(255) NOT NULL,
  `Member3Name` varchar(255) NOT NULL,
  `Member4Name` varchar(255) NOT NULL,
  `Member5Name` varchar(255) NOT NULL,
  `CommenceDate` varchar(255) NOT NULL,
  `CompletionDate` varchar(255) NOT NULL,
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
  `ProjectID` int(255) NOT NULL,
  `ProjectType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ProjectName`, `Academicyear`, `NoofStudent`, `StudentID`, `Supervisors`, `Member1Name`, `Member2Name`, `Member3Name`, `Member4Name`, `Member5Name`, `CommenceDate`, `CompletionDate`, `ProjectTitle`, `ProjectDomain`, `ProjectSynopsis`, `TeamPhoto`, `Proposal`, `Prototype`, `Budget`, `URLofFrontend`, `GithubLink`, `ProjectFile`, `RelevantProjects`, `ProjectID`, `ProjectType`) VALUES
('MIST DATA ARCHIVE', '2021-2022', 4, '202014016,202014019,202014033,202014040', 'lec nafiz, lec muhaimin, lec adeeb', 'Easin Arafat', 'Khaled Hasan ', 'Md Rashid Ul Islam', 'Nurshat Fateh Ali', 'Tanvin Jamal', '2022-06-01', '2022-06-16', 'Data archive cse', 'whole cse dept', 'Data archiving is the practice of identifying data that is no longer active and moving it out of production systems into long-term storage systems.', '', 'Hello archive12345', 'Long-term retention', '200000', 'http / archive ', 'github repo', 'mistdataarchive', 'dbms', 1, 'Studentproject'),
('CYBER RANGE', '2021-2022', 5, '201814005', 'Lec Shadman Aadeeb', 'Nurshat Fateh Ali', 'Solaiman Islam Naiem', 'Rashid Ul Islam', 'Tanvin Jamal', 'Khaled Hasan Irfan', '15/06/2022', '22/06/2022', 'Penetration testing', 'protect computer networks from cyberattacks and unauthorized access', 'Cyber security is the application of technologies, processes and controls to protect systems, networks, programs, devices and data from cyber attacks.', '', 'Ensure of Cyber security  ', 'Cyberthreats prevention ', '10000', 'WWW.CYBERRANGE.COM', 'REPO', 'blockchain10.jpg', 'ML', 3, 'StudentProject');

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
('202014001', 'Abrar Ahmed', '1411', 'ARCH-5', 'ARCH', 'Army', 'Government', '29/06/98', '6666666666', 'abrar@gmail.com', 'Dhaka', 'Dhaka', 'Sakib', 'Tasnim', 'A-', 'Yes', '2020', '6666666666'),
('202014007', 'Arnab Sricar', '1411455415', 'CSE-20', 'CSE', 'Civil', 'Non-Government', '29/06/98', '6666677777', 'sir_car@gmail.com', 'Dhaka', 'Dhaka', 'Karim', 'Raisa', 'AB+', 'Yes', '2020', '6666677777'),
('202014016', 'Jamal Tanvin', '1411', 'CSE-20', 'NSE', 'Army', 'Government', '0000-00-00', '01616161', 'tanvin@gmail.com', 'Dhaka', 'Sathkhira', 'Karim', 'Ayesha', 'B+', 'YES', '2020', '01616161'),
('202014018', 'Jubair Ahmed', '1411', 'CSE-20', 'CSE', 'Army', 'Government', '29/06/98', '6666666666', 'jubair@gmail.com', 'Dhaka ', 'Dhaka', 'Sakib', 'Ayesha', 'AB+', 'Yes', '2020', '6666666666'),
('202014024', 'Mahdi Adib', '1411', 'CSE-20', 'CSE', 'Army', 'Government', '29/06/98', '6666666666', 'adibmahdi@gmail.com', 'DHaka', 'Khulna', 'Karim', 'Tasnim', 'A-', 'Yes', '2020', '6666666666'),
('202014034', 'Rifat Islam', '9955', 'NSE-05', 'NSE', 'Army', 'Government', '0000-00-00', '01616165', 'rifat@gmail.com', 'Dhaka', 'Rajshahi', 'Ramjan', 'Rabeya', 'AB+', 'YES', '2020', '885544'),
('202014037', 'Ayon Bilwal', '14115353', 'EECE-09', 'EECE', 'Army', 'Government', '0000-00-00', '016161611515', 'ayon@gmail.com', 'Dhaka', 'Sitakundo', 'Sattar', 'Asma', 'A-', 'YES', '2011', '99999999'),
('202014040', 'Nurshat Fateh Ali', '1410245687', 'CSE-20', 'CSE', 'General', 'Non-Government', '14-02-01', '1933318385', 'nurshat.fateh@studentambassadors.com', 'Dhaka, Bangladesh', 'Dhaka, Bangladesh', 'Hatim Ali', 'Shubarna Jahan Rasma', 'O+', 'Yes', '2020', '1'),
('202014054', 'Tahidul Islam', '1410245677', 'CSE-20', 'CSE', 'General', 'Non-Government', '04-02-01', '1933318355', 'tahid_islam@gmail.com', 'Dhaka, Bangladesh', 'Dhaka, Bangladesh', 'Mohamaad Ashraf', 'Jahanara Lopa', 'A+', 'Yes', '2020', '2');

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
-- Indexes for table `addactivity`
--
ALTER TABLE `addactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ProjectID`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `thesis_admin`
--
ALTER TABLE `thesis_admin`
  ADD PRIMARY KEY (`thesisID`);

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
-- AUTO_INCREMENT for table `addactivity`
--
ALTER TABLE `addactivity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thesis_admin`
--
ALTER TABLE `thesis_admin`
  MODIFY `thesisID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
