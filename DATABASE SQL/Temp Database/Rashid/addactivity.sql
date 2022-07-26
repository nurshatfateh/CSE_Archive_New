-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 04:27 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addactivity`
--
ALTER TABLE `addactivity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addactivity`
--
ALTER TABLE `addactivity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
