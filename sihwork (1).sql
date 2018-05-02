-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 04:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email ID` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence_table`
--

CREATE TABLE `attendence_table` (
  `id` bigint(12) NOT NULL,
  `Meeting ID` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Absent Member` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdetails` text NOT NULL,
  `rdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Member ID` varchar(255) DEFAULT NULL,
  `School ID` varchar(255) NOT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `email ID` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `Name`, `Member ID`, `School ID`, `Position`, `Mobile`, `email ID`, `Added By`, `time`) VALUES
(1, 'Ranjit', 'M2138', '4', 'Principal', '9060308030', 'ranjit@gmail.com', '21', '2017-04-01 17:16:56'),
(2, 'Ramanujan', 'M4740', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 04:56:46'),
(3, 'Ramanujan', 'M2841', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 05:00:04'),
(4, 'Ramanujan', 'M7542', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 05:04:18'),
(5, 'Ramanujan', 'M7143', '4', 'maths teacher', '9060305030', 'rama@gmail.com', '21', '2017-04-02 05:05:50'),
(6, 'Anuj Dahiya', 'M4944', '4', 'Engineer', '80609030', 'anuj@gmail.com', '21', '2017-04-02 05:10:23'),
(7, 'hbcdbhjk', 'M2245', '4', 'cdbcwd', 'dchjbds', 'vhssb', '21', '2017-04-02 05:12:31'),
(8, 'Anuj Pal', 'M4946', '1', 'Principal', '1111111111', 'anuj@gmail.com', '21', '2017-04-02 05:21:13'),
(9, 'Ramavtar sakhre', 'M4047', '4', 'Sectretary', '348206498', 'ramavtar@gmail.com', '21', '2017-04-02 05:48:32'),
(10, 'Abcd', 'M6048', '4', 'xyz', '1020304050', 'ab@gmail.com', '21', '2017-04-02 06:36:57'),
(11, 'Abcd', 'M1049', '3', 'xyz', '1020304050', 'ab@gmail.com', '21', '2017-04-02 06:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `district_table`
--

CREATE TABLE `district_table` (
  `id` int(4) NOT NULL,
  `District ID` varchar(5) NOT NULL,
  `District` varchar(30) NOT NULL,
  `State ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`id`, `District ID`, `District`, `State ID`) VALUES
(1, '01', 'Anantapur', '01'),
(2, '02', 'Chittoor', '01'),
(3, '03', 'East Godavari	', '01'),
(4, '04', 'Guntur', '01'),
(5, '05', 'Kadapa', '01');

-- --------------------------------------------------------

--
-- Table structure for table `fund_table`
--

CREATE TABLE `fund_table` (
  `id` int(8) UNSIGNED NOT NULL,
  `Month` varchar(10) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Fund_sought` varchar(20) DEFAULT NULL,
  `Fund_received` varchar(20) DEFAULT NULL,
  `fund_used` varchar(255) NOT NULL,
  `Available_Fund` varchar(255) NOT NULL,
  `Used` varchar(250) DEFAULT NULL,
  `School ID` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund_table`
--

INSERT INTO `fund_table` (`id`, `Month`, `Year`, `Fund_sought`, `Fund_received`, `fund_used`, `Available_Fund`, `Used`, `School ID`, `image`, `Added By`, `time`) VALUES
(1, 'April', 2017, '18000', '20000', '', '', 'Used in mid-day meal', '4', '', 'M2138', '2017-04-01 22:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_table`
--

CREATE TABLE `meeting_table` (
  `id` int(5) UNSIGNED NOT NULL,
  `Agenda` varchar(250) DEFAULT NULL,
  `Decisions` varchar(500) DEFAULT NULL,
  `Date` varchar(15) DEFAULT NULL,
  `Added By` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_table`
--

INSERT INTO `meeting_table` (`id`, `Agenda`, `Decisions`, `Date`, `Added By`, `School ID`, `time`, `Status`, `image`) VALUES
(1, 'SDP of todays mereting', 'Decisions in meeting are\r\n1', '2-04-2017', 'M2138', '4', '2017-04-01 22:00:29', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mid_day_meal`
--

CREATE TABLE `mid_day_meal` (
  `id` bigint(15) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Fund_allocated` varchar(255) NOT NULL,
  `Fund_used` varchar(255) NOT NULL,
  `Fund_available` varchar(255) NOT NULL,
  `How_used` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_school_table`
--

CREATE TABLE `news_school_table` (
  `id` bigint(15) NOT NULL,
  `News` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quality_dimensions`
--

CREATE TABLE `quality_dimensions` (
  `id` int(5) NOT NULL,
  `DID` varchar(50) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_dimensions`
--

INSERT INTO `quality_dimensions` (`id`, `DID`, `Dimension`, `time`) VALUES
(1, '1', 'Infrastructure', ''),
(2, '2', 'academic Progress', '');

-- --------------------------------------------------------

--
-- Table structure for table `quality_indicators`
--

CREATE TABLE `quality_indicators` (
  `QID` int(8) NOT NULL,
  `Indicator` varchar(255) NOT NULL,
  `DID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_indicators`
--

INSERT INTO `quality_indicators` (`QID`, `Indicator`, `DID`) VALUES
(1, 'Classrooms', '1'),
(2, 'Ground facility', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quality_results`
--

CREATE TABLE `quality_results` (
  `id` bigint(12) NOT NULL,
  `DID` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `QID` varchar(255) NOT NULL,
  `Indicator` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_results`
--

INSERT INTO `quality_results` (`id`, `DID`, `Dimension`, `QID`, `Indicator`, `School ID`) VALUES
(1, '1', 'Infrastructure', '1', 'Classrooms', '4');

-- --------------------------------------------------------

--
-- Table structure for table `rte_announcements`
--

CREATE TABLE `rte_announcements` (
  `id` int(5) NOT NULL,
  `Announcements` text NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_announcements`
--

INSERT INTO `rte_announcements` (`id`, `Announcements`, `Added By`, `time`) VALUES
(5, 'announcements....', '1', '2017-04-01 12:33:02'),
(6, 'Announcement added by announcements..', '', '2017-04-01 12:39:37'),
(7, 'Announcement_added by nitin', '', '2017-04-01 12:43:09'),
(8, 'announcement by nitin', '', '2017-04-01 12:46:05'),
(9, 'hghghjgjh', '21', '2017-04-01 12:53:06'),
(10, 'new announcement at 14:42', '21', '2017-04-01 14:42:41'),
(11, 'SIH hackathon is going well..', '21', '2017-04-01 17:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `rte_images`
--

CREATE TABLE `rte_images` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_images`
--

INSERT INTO `rte_images` (`id`, `image`, `Added By`, `time`) VALUES
(1, '84balbhartischool.png', '21', '2017-04-01 17:38:42'),
(2, '61big_23_237.jpg', '21', '2017-04-01 17:39:39'),
(3, '272115school.jpg', '21', '2017-04-01 18:11:34'),
(4, '67vidhyabharti.jpg', '21', '2017-04-01 18:11:57'),
(6, '13balbhartischool.png', '21', '2017-04-01 18:12:11'),
(8, '782115school.jpg', '21', '2017-04-01 18:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `rte_officials`
--

CREATE TABLE `rte_officials` (
  `Sr No` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `position` varchar(25) NOT NULL,
  `Member ID` bigint(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Random UID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_officials`
--

INSERT INTO `rte_officials` (`Sr No`, `name`, `mobile`, `position`, `Member ID`, `Username`, `password`, `Random UID`) VALUES
(1, 'Nitin Singh', 1020304050, 'district level officer', 21, 'nitin', 'nitin', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `school_attendance`
--

CREATE TABLE `school_attendance` (
  `id` bigint(15) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Boys Present` varchar(255) NOT NULL,
  `Boys Total` varchar(255) NOT NULL,
  `Girls Present` varchar(255) NOT NULL,
  `Girls Total` varchar(255) NOT NULL,
  `Staff Present` varchar(255) NOT NULL,
  `Staff Total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_list`
--

CREATE TABLE `school_list` (
  `id` int(10) NOT NULL,
  `School` varchar(50) NOT NULL,
  `School ID` varchar(15) NOT NULL,
  `District` varchar(25) NOT NULL,
  `District ID` varchar(255) NOT NULL,
  `State` varchar(25) NOT NULL,
  `State ID` int(11) NOT NULL,
  `About` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_list`
--

INSERT INTO `school_list` (`id`, `School`, `School ID`, `District`, `District ID`, `State`, `State ID`, `About`, `image`, `Added By`, `time`) VALUES
(1, 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', 1, 'best school', '', '', ''),
(2, 'jhjhj', '2', 'Chittoor', '02', 'Andhra Pradesh', 1, 'jhkjhk', '', '21', '2017-04-01 14:53:48'),
(3, 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', 1, 'about YSR school', '', '21', '2017-04-01 14:58:34'),
(4, 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', 1, 'About school of \r\nsawan school ', '13572115school.jpg', '21', '2017-04-01 15:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `sdp_table`
--

CREATE TABLE `sdp_table` (
  `id` bigint(15) NOT NULL,
  `Plans` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `How_done` varchar(255) NOT NULL,
  `Deadline` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Why_not_done` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smc_member_data`
--

CREATE TABLE `smc_member_data` (
  `Sr No` int(8) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email ID` varchar(255) NOT NULL,
  `Aadhar No` varchar(255) NOT NULL,
  `position` varchar(25) NOT NULL,
  `school` varchar(50) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `district` varchar(25) NOT NULL,
  `District ID` varchar(255) NOT NULL,
  `state` varchar(25) NOT NULL,
  `State ID` varchar(255) NOT NULL,
  `Member ID` varchar(255) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Profile pic` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `certificate_image` varchar(255) NOT NULL,
  `Random UID` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smc_member_data`
--

INSERT INTO `smc_member_data` (`Sr No`, `name`, `mobile`, `email ID`, `Aadhar No`, `position`, `school`, `School ID`, `district`, `District ID`, `state`, `State ID`, `Member ID`, `Username`, `password`, `Profile pic`, `Qualification`, `certificate_image`, `Random UID`, `Added By`, `time`) VALUES
(28, 'sawan', '1111111111', 'sawan@gmail.com', '', 'govt official', 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', '01', '0', '', '', '', '', '', '655249', '21', '2017-04-01 16:26:56'),
(29, 'Ram lal', '9010203050', 'ram@gmail.com', '', 'Sarpanch', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', '0', '', '', '', '', '', '967974', '21', '2017-04-01 16:30:01'),
(30, 'Ranjan', '9080607030', 'ranjan@gmail.com', '', 'Head master', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', '0', '', '', '', '', '', '792303', '21', '2017-04-01 16:41:16'),
(31, 'Ranjan', '9080607030', 'ranjan@gmail.com', '', 'Head master', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', '0', '', '', '', '', '', '377542', '21', '2017-04-01 16:49:42'),
(32, 'Ranjan', '9080607030', 'ranjan@gmail.com', '', 'Head master', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7532', '', '', '', '', '', '220382', '21', '2017-04-01 16:53:45'),
(33, 'Ratan Lal', '9060307585', 'ratan@gmail.com', '', 'Headmaster', 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7933', '', '', '', '', '', '639236', '21', '2017-04-01 16:59:09'),
(34, 'Ratan Lal', '9060307585', 'ratan@gmail.com', '', 'Headmaster', 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7934', '', '', '', '', '', '381607', '21', '2017-04-01 17:01:54'),
(35, 'Ratan Lal', '9060307585', 'ratan@gmail.com', '', 'Headmaster', 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M1035', '', '', '', '', '', '790875', '21', '2017-04-01 17:04:32'),
(36, 'Anuj Pal', '9630856035', 'anuj@gmail.com', '', 'Principal', 'sawan', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M5836', '', '', '', '', '', '135787', '21', '2017-04-01 17:06:08'),
(37, 'Ranjit', '9060308030', 'ranjit@gmail.com', '', 'Principal', 'jhjhj', '2', 'Chittoor', '02', 'Andhra Pradesh', '01', 'M7337', '', '', '', '', '', '321731', '21', '2017-04-01 17:13:34'),
(38, 'Ranjit', '9060308030', 'ranjit@gmail.com', '', 'Principal', 'sawan school', '4', 'Chittoor', '02', 'Andhra Pradesh', '01', 'M2138', 'mahendra', 'mahi', '', '', '', '404238', '21', '2017-04-01 17:16:56'),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4740', '', '', '', 'M Sc', '722', '125460', '21', '2017-04-02 04:56:45'),
(41, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M2841', '', '', '', 'M Sc', '1846', '849707', '21', '2017-04-02 05:00:04'),
(42, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7542', '', '', '', 'M Sc', '5335', '863467', '21', '2017-04-02 05:04:18'),
(43, 'Ramanujan', '9060305030', 'rama@gmail.com', '1234523674588956', 'maths teacher', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M7143', '', '', '', 'M Sc', '9967', '284487', '21', '2017-04-02 05:05:50'),
(44, 'Anuj Dahiya', '80609030', 'anuj@gmail.com', '', 'Engineer', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4944', '', '', '', '', '9631', '512948', '21', '2017-04-02 05:10:23'),
(45, 'hbcdbhjk', 'dchjbds', 'vhssb', '6541389321', 'cdbcwd', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M2245', '', '', '', 'MA', '859', '218103', '21', '2017-04-02 05:12:31'),
(46, 'Anuj Pal', '1111111111', 'anuj@gmail.com', '11111111111', 'Principal', 'Anantapur public school', '1', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4946', '', '', '', 'enginner', '6644', '200772', '21', '2017-04-02 05:21:12'),
(47, 'Ramavtar sakhre', '348206498', 'ramavtar@gmail.com', '635346230579', 'Sectretary', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M4047', '', '', '', 'M Sc', '3374', '114666', '21', '2017-04-02 05:48:31'),
(48, 'Abcd', '1020304050', 'ab@gmail.com', '4586926282', 'xyz', 'sawan school', '4', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M6048', '', '', '', 'MA', '3555', '616275', '21', '2017-04-02 06:36:57'),
(49, 'Abcd', '1020304050', 'ab@gmail.com', '4586926282', 'xyz', 'YSR school', '3', 'Anantapur', '01', 'Andhra Pradesh', '01', 'M1049', '', '', '', 'MA', '2283big_23_237.jpg', '996429', '21', '2017-04-02 06:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(3) NOT NULL,
  `State ID` varchar(5) NOT NULL,
  `State` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `State ID`, `State`) VALUES
(1, '01', 'Andhra Pradesh'),
(2, '02', 'Arunachal Pradesh'),
(3, '03', 'Assam'),
(4, '04', 'Bihar'),
(5, '05', 'Chhattisgarh');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion_table`
--

CREATE TABLE `suggestion_table` (
  `id` bigint(15) NOT NULL,
  `Suggestion` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL,
  `Given By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_table`
--

CREATE TABLE `task_table` (
  `id` int(8) UNSIGNED NOT NULL,
  `Task` varchar(50) DEFAULT NULL,
  `Implementation` varchar(250) DEFAULT NULL,
  `School ID` varchar(255) NOT NULL,
  `Added By` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Given_to` varchar(255) NOT NULL,
  `Deadline` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_table`
--

INSERT INTO `task_table` (`id`, `Task`, `Implementation`, `School ID`, `Added By`, `time`, `Given_to`, `Deadline`, `Status`, `image`) VALUES
(1, 'Recovery of class rooms', 'Recovery', '4', 'M2138', '2017-04-01 22:07:47', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_table`
--

CREATE TABLE `tutorial_table` (
  `id` bigint(15) NOT NULL,
  `Topic` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Plan` varchar(255) NOT NULL,
  `School ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence_table`
--
ALTER TABLE `attendence_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_table`
--
ALTER TABLE `district_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_table`
--
ALTER TABLE `fund_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_table`
--
ALTER TABLE `meeting_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid_day_meal`
--
ALTER TABLE `mid_day_meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_school_table`
--
ALTER TABLE `news_school_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_dimensions`
--
ALTER TABLE `quality_dimensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_indicators`
--
ALTER TABLE `quality_indicators`
  ADD PRIMARY KEY (`QID`);

--
-- Indexes for table `quality_results`
--
ALTER TABLE `quality_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rte_announcements`
--
ALTER TABLE `rte_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rte_images`
--
ALTER TABLE `rte_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rte_officials`
--
ALTER TABLE `rte_officials`
  ADD PRIMARY KEY (`Sr No`);

--
-- Indexes for table `school_list`
--
ALTER TABLE `school_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdp_table`
--
ALTER TABLE `sdp_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smc_member_data`
--
ALTER TABLE `smc_member_data`
  ADD PRIMARY KEY (`Sr No`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion_table`
--
ALTER TABLE `suggestion_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_table`
--
ALTER TABLE `task_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial_table`
--
ALTER TABLE `tutorial_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendence_table`
--
ALTER TABLE `attendence_table`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `district_table`
--
ALTER TABLE `district_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fund_table`
--
ALTER TABLE `fund_table`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `meeting_table`
--
ALTER TABLE `meeting_table`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mid_day_meal`
--
ALTER TABLE `mid_day_meal`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_school_table`
--
ALTER TABLE `news_school_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quality_dimensions`
--
ALTER TABLE `quality_dimensions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quality_indicators`
--
ALTER TABLE `quality_indicators`
  MODIFY `QID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quality_results`
--
ALTER TABLE `quality_results`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rte_announcements`
--
ALTER TABLE `rte_announcements`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rte_images`
--
ALTER TABLE `rte_images`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rte_officials`
--
ALTER TABLE `rte_officials`
  MODIFY `Sr No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_list`
--
ALTER TABLE `school_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sdp_table`
--
ALTER TABLE `sdp_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smc_member_data`
--
ALTER TABLE `smc_member_data`
  MODIFY `Sr No` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `suggestion_table`
--
ALTER TABLE `suggestion_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutorial_table`
--
ALTER TABLE `tutorial_table`
  MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
