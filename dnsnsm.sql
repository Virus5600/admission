-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 12:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnsnsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `admission_id` varchar(30) NOT NULL,
  `stud_no` varchar(30) NOT NULL,
  `stud_Fname` varchar(100) NOT NULL,
  `stud_Mname` varchar(100) NOT NULL,
  `stud_Lname` varchar(100) NOT NULL,
  `stud_emailadd` varchar(50) NOT NULL,
  `registrar_stat` smallint(6) NOT NULL DEFAULT '0',
  `receipt_stat` smallint(6) NOT NULL DEFAULT '0',
  `treasury_stat` smallint(6) NOT NULL DEFAULT '0',
  `sched_stat` smallint(6) NOT NULL DEFAULT '0',
  `stud_type` smallint(6) NOT NULL DEFAULT '0',
  `deny` smallint(6) NOT NULL DEFAULT '0',
  `Remarks` varchar(500) NOT NULL,
  `deny2` smallint(6) NOT NULL,
  `Remarks2` varchar(500) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `section` varchar(100) NOT NULL,
  `date_of_admission` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `admission_id`, `stud_no`, `stud_Fname`, `stud_Mname`, `stud_Lname`, `stud_emailadd`, `registrar_stat`, `receipt_stat`, `treasury_stat`, `sched_stat`, `stud_type`, `deny`, `Remarks`, `deny2`, `Remarks2`, `grade`, `section`, `date_of_admission`, `DATETIME_LOG`) VALUES
(1, 'ADM-000001', '407338150401', 'ROSEANNA', 'M', 'PARK', 'rosepark@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 10', 'ST. MATTHEW', '2021-09-30', '2021-09-30 23:51:54'),
(2, 'ADM-000002', '407338150402', 'DANICA', 'ONGRAY', 'CUIZON', 'dancuizon@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 7', 'ST. AGNES', '2021-10-01', '2021-10-01 00:19:39'),
(3, 'ADM-000003', '407338150403', 'VICTOR', 'SALAS', 'DY', 'vicdy@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 8', 'ST. BERNARD', '2021-10-01', '2021-10-01 00:33:09'),
(4, 'ADM-000004', '407338150404', 'KIM', 'AMAN', 'FAJARDO', 'kafajardo@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 6', 'ST. ANTHONY', '2021-10-01', '2021-10-01 00:41:13'),
(5, 'ADM-000005', '407338150405', 'CLARICE PATRICIA', 'V', 'CRUZ', 'clairecruz@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 10', 'ST. MATTHEW', '2021-10-01', '2021-10-01 00:50:38'),
(6, 'ADM-000006', '407338150406', 'ELLA MARIE', 'D', 'WONG', 'ellawong@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 5', 'ST. MAGDALENE', '2021-10-01', '2021-10-01 00:59:00'),
(7, 'ADM-000007', '407338150407', 'FRITZIE KATHLEEN', 'VELASCO', 'CUARESMA', 'fritzie@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 7', 'ST. AGNES', '2021-10-15', '2021-10-15 14:23:05'),
(8, 'ADM-000008', '407338150408', 'KYLA', 'ERNI', 'GONZALES', 'kygonzales@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 7', 'ST. AGNES', '2021-10-20', '2021-10-20 15:11:57'),
(9, 'ADM-000009', '407338150408', 'KYLA', 'ERNI', 'GONZALES', 'kygonzales@gmail.com', 1, 1, 1, 1, 1, 0, '', 0, '', 'GRADE 8', 'ST. BERNARD', '2021-10-20', '2021-10-20 15:22:43'),
(10, 'ADM-000010', '407338150409', 'BRADLEY', 'ORTIZ', 'LARSON', 'bradley@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 2', 'ST.  JOHN', '2021-11-01', '2021-11-01 20:20:54'),
(11, 'ADM-000011', '407338150410', 'OSCAR', 'SANTOS', 'CONLEY', 'oscar@gmail.com', 1, 1, 1, 1, 0, 0, '', 0, '', 'GRADE 6', 'ST. ANTHONY', '2021-11-01', '2021-11-01 20:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `admission_details`
--

CREATE TABLE `admission_details` (
  `id` int(11) NOT NULL,
  `admission_id` varchar(30) NOT NULL,
  `stud_Fname` varchar(100) NOT NULL,
  `stud_Mname` varchar(100) NOT NULL,
  `stud_Lname` varchar(100) NOT NULL,
  `stud_sex` varchar(10) NOT NULL,
  `stud_address` varchar(250) NOT NULL,
  `stud_num` varchar(20) NOT NULL,
  `stud_emailadd` varchar(50) NOT NULL,
  `stud_birthday` date DEFAULT NULL,
  `stud_age` int(11) NOT NULL,
  `stud_birthplace` varchar(50) NOT NULL,
  `stud_religion` varchar(50) NOT NULL,
  `stud_father` varchar(100) NOT NULL,
  `stud_father_occupation` varchar(50) NOT NULL,
  `stud_mother` varchar(100) NOT NULL,
  `stud_mother_occupation` varchar(50) NOT NULL,
  `stud_guardian` varchar(100) NOT NULL,
  `stud_guardian_relationship` varchar(50) NOT NULL,
  `stud_guardian_num` varchar(20) NOT NULL,
  `stud_last_school_attended` varchar(100) NOT NULL,
  `stud_last_school_address` varchar(100) NOT NULL,
  `stud_last_school_grade` varchar(50) NOT NULL,
  `stud_last_school_year` varchar(50) NOT NULL,
  `stud_last_school_num` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_details`
--

INSERT INTO `admission_details` (`id`, `admission_id`, `stud_Fname`, `stud_Mname`, `stud_Lname`, `stud_sex`, `stud_address`, `stud_num`, `stud_emailadd`, `stud_birthday`, `stud_age`, `stud_birthplace`, `stud_religion`, `stud_father`, `stud_father_occupation`, `stud_mother`, `stud_mother_occupation`, `stud_guardian`, `stud_guardian_relationship`, `stud_guardian_num`, `stud_last_school_attended`, `stud_last_school_address`, `stud_last_school_grade`, `stud_last_school_year`, `stud_last_school_num`, `username`, `password`, `DATETIME_LOG`) VALUES
(1, 'ADM-000001', 'ROSEANNA', 'M', 'PARK', 'FEMALE', 'BLOCK 1, LOT 15, ST. PAUL STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '091728394562', 'rosepark@gmail.com', '2006-02-11', 15, 'SEOUL, KOREA', 'OTHER', 'MASON PARK', 'LAWYER', 'CLARE PARK', 'BUSINESSWOMAN', 'CLARE PARK', 'MOTHER', '091532648792', 'DLS ZOBEL', 'ALABANG', 'GRADE 9', '2020-2021', '9866214', 'rosepark@gmail.com', '1a98758f78f47abdc0bf75d211d3914a', '2021-09-30 23:51:54'),
(2, 'ADM-000002', 'DANICA', 'ONGRAY', 'CUIZON', 'FEMALE', 'B4, L5, ST. ANTHONY STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '091812365478', 'dancuizon@gmail.com', '2008-05-18', 13, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'REGIE CUIZON', 'ELECTRICAL ENGINEER', 'JANNA CUIZON', 'DIETICIAN', 'REGIE CUIZON', 'FATHER', '092174693852', 'DLS ZOBEL', 'ALABANG', 'GRADE 6', '2020-2021', '9866214', 'dancuizon@gmail.com', 'aa8fbada138708b0bd4d6ea0ebd2f479', '2021-10-01 00:19:39'),
(3, 'ADM-000003', 'VICTOR', 'SALAS', 'DY', 'MALE', 'B2, L18, ST. PETER STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '090647891235', 'vicdy@gmail.com', '2007-01-06', 14, 'ALABANG', 'ROMAN CATHOLIC', 'VICTOR DY JR.', 'BUSINESSMAN', 'KIM DY', 'PROFESSIONAL VOLLEYBALL PLAYER', 'VICTOR DY JR.', 'FATHER', '092718394562', 'SAN BEDA COLLEGE ALABANG', 'ALABANG HILLS', 'GRADE 7', '2020-2021', '9224531', 'vicdy@gmail.com', '2bbda12b35c9b00aa6b95ca57ec6e8d2', '2021-10-01 00:33:09'),
(4, 'ADM-000004', 'KIM', 'AMAN', 'FAJARDO', 'MALE', 'BLOCK 9, LOT 24, ST. AGATHA STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '092583691470', 'kafajardo@gmail.com', '2010-09-30', 11, 'LAS PINAS CITY', 'ROMAN CATHOLIC', 'KIEFER FAJARDO', 'DENTIST', 'CARMELA FAJARDO', 'ARTIST', 'KIEFER FAJARDO', 'FATHER', '091897852364', 'SAN BEDA COLLEGE ALABANG', 'ALABANG HILLS', 'GRADE 5', '2020-2021', '9224531', 'kafajardo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-01 00:41:13'),
(5, 'ADM-000005', 'CLARICE PATRICIA', 'V', 'CRUZ', 'FEMALE', 'B7, L1, ST. MICHAEL STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '094536251789', 'clairecruz@gmail.com', '2006-11-11', 14, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'RAY CRUZ', 'ARCHITECTURE', 'PATRICE ANN CRUZ', 'PEDIATRICIAN', 'PATRICE ANN CRUZ', 'MOTHER', '092785209631', 'DLS ZOBEL', 'ALABANG', 'GRADE 9', '2020-2021', '9866214', 'clairecruz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-01 00:50:38'),
(6, 'ADM-000006', 'ELLA MARIE', 'D', 'WONG', 'FEMALE', 'BLOCK 12, LOT 5, ST. MAGDALENE STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '090514758026', 'ellawong@gmail.com', '2011-08-15', 10, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'HENRY WONG SR.', 'BUSINESSMAN', 'JESSICA WONG', 'CHEF', 'JESSICA WONG', 'MOTHER', '094578961420', 'DLS ZOBEL', 'ALABANG', 'GRADE 4', '2020-2021', '9866214', 'ellawong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-10-01 00:59:00'),
(7, 'ADM-000007', 'FRITZIE KATHLEEN', 'VELASCO', 'CUARESMA', 'FEMALE', 'MUNTINLUPA CITY', '09212951824', 'fritzie@gmail.com', '2008-04-08', 13, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'FEDERICO R. CUARESMA JR.', 'BUSINESSMAN', 'NANNETTE V. CUARESMA', 'HOUSEWIFE', 'NA', 'NA', 'NA', 'ST. ANDREW SCHOOL ', 'PARANAQUE CITY', 'GRADE 6', '2020-2021', '9826453', 'fritzie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-15 14:23:05'),
(8, 'ADM-000008', 'KYLA', 'ERNI', 'GONZALES', 'FEMALE', 'BLOCK 2, LOT 1, PHASE 1, SAINT MAY STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '09502972674', 'kygonzales@gmail.com', '2008-03-20', 13, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'JAN GONZALES', 'SYSTEM ANALYST', 'MARIANNE GONZALES', 'PILOT', 'NA', 'NA', 'NA', 'DLS ZOBEL', 'UNIVERSITY AVE, AYALA ALABANG, MUNTINLUPA', 'GRADE 6', '2021-2022', '(02) 8771 3579', 'kygonzales@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-20 15:11:57'),
(9, 'ADM-000010', 'BRADLEY', 'ORTIZ', 'LARSON', 'MALE', 'ORANGE STREET LAS PINAS CITY ', '09332134544', 'bradley@gmail.com', '2014-03-17', 7, 'MAKATI CITY', 'ROMAN CATHOLIC', 'DARYL LARSON', 'BUSINESS ANALYST', 'CHRISELE LARSON', 'INTERIOR DESIGNER', 'CHRISELE LARSON', 'MOTHER', '09332134544', 'PERPETUAL HELP SYSTEM DALTA', 'PARANAQUE CITY', 'GRADE 1', '2020-2021', '9826453', 'bradley@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-01 20:20:54'),
(10, 'ADM-000011', 'OSCAR', 'SANTOS', 'CONLEY', 'MALE', 'DUHAT STREET LAS PINAS CITY ', '09566775443', 'oscar@gmail.com', '2010-11-01', 11, 'PASAY CITY', 'ROMAN CATHOLIC', 'ENTE CONLEY', 'LAWYER', 'DORIS CONLEY', 'ENGINEER', 'ENTE CONLEY', 'FATHER', '09566775443', 'PERPETUAL HELP SYSTEM DALTA', 'PARANAQUE CITY', 'GRADE 5', '2020-2021', '9826453', 'oscar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-01 20:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `req_type`
--

CREATE TABLE `req_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req_type`
--

INSERT INTO `req_type` (`id`, `name`) VALUES
(1, '2x2 ID photo (recent)'),
(2, 'PSA Birth Certificate'),
(3, 'Report Card (FORM 138)'),
(4, 'Certificate of Good Moral Character'),
(5, 'Permanent Record (Form 137)');

-- --------------------------------------------------------

--
-- Table structure for table `secret_question`
--

CREATE TABLE `secret_question` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secret_question`
--

INSERT INTO `secret_question` (`id`, `description`) VALUES
(1, 'What was your favorite sport in high school?'),
(2, 'What is the name of the High School you graduated from?'),
(3, 'What is your pet\'s name?'),
(4, 'In what year was your father born?'),
(5, 'In what year was your mother born?'),
(6, 'What is your mother’s (father\'s) first name?'),
(7, 'What is your mother\'s maiden name?'),
(8, 'What was the color of your first car?'),
(9, 'What is your father\'s middle name?'),
(10, 'In what county where you born?'),
(11, 'How many bones have you broken?'),
(12, 'What is the first and last name of your favorite college professor?'),
(13, 'On which wrist do you wear your watch?'),
(14, 'What is the color of your eyes?'),
(15, 'What is the title and artist of your favorite song?'),
(16, 'What is the title and author of your favorite book?'),
(17, 'What is the name, breed, and color of your favorite pet?'),
(18, 'What is your favorite animal?'),
(19, 'What was the last name of your favorite teacher?'),
(20, 'What is your favorite team?'),
(21, 'What is your favorite movie?'),
(22, 'What is your favorite teacher\'s nickname?'),
(23, 'What is your favorite TV program?'),
(24, 'What is your least favorite nickname?'),
(25, 'What is your favorite sport?'),
(26, 'What is the name of your hometown?'),
(27, 'What is the color of your father’s eyes?'),
(28, 'What is the color of your mother’s eyes?'),
(29, 'What was the name of your first pet?'),
(30, 'What sports team do you love to see lose?'),
(31, 'In what city were you born?'),
(32, 'What is the city, state/province, and year of your birth?'),
(33, 'What is the name of your hometown newspaper?'),
(34, 'What is your favorite color?'),
(35, 'What was your hair color as a child?'),
(36, 'What is your work address?'),
(37, 'What is the street name your work or office is located on?'),
(38, 'What is your address, phone number?');

-- --------------------------------------------------------

--
-- Table structure for table `staff_accounts`
--

CREATE TABLE `staff_accounts` (
  `id` int(11) NOT NULL,
  `department` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_accounts`
--

INSERT INTO `staff_accounts` (`id`, `department`, `name`) VALUES
(1, 'Registrar', 'Joseph Lunas'),
(2, 'Treasury', 'Valentine Alexander');

-- --------------------------------------------------------

--
-- Table structure for table `stud_information`
--

CREATE TABLE `stud_information` (
  `id` int(11) NOT NULL,
  `stud_no` varchar(30) NOT NULL,
  `stud_Fname` varchar(100) NOT NULL,
  `stud_Mname` varchar(100) NOT NULL,
  `stud_Lname` varchar(100) NOT NULL,
  `stud_sex` varchar(10) NOT NULL,
  `stud_address` varchar(250) NOT NULL,
  `stud_num` varchar(20) NOT NULL,
  `stud_emailadd` varchar(50) NOT NULL,
  `stud_birthday` date DEFAULT NULL,
  `stud_age` int(11) NOT NULL,
  `stud_birthplace` varchar(50) NOT NULL,
  `stud_religion` varchar(50) NOT NULL,
  `stud_father` varchar(100) NOT NULL,
  `stud_father_occupation` varchar(50) NOT NULL,
  `stud_mother` varchar(100) NOT NULL,
  `stud_mother_occupation` varchar(50) NOT NULL,
  `stud_guardian` varchar(100) NOT NULL,
  `stud_guardian_relationship` varchar(50) NOT NULL,
  `stud_guardian_num` varchar(20) NOT NULL,
  `stud_last_school_attended` varchar(100) NOT NULL,
  `stud_last_school_address` varchar(100) NOT NULL,
  `stud_last_school_grade` varchar(50) NOT NULL,
  `stud_last_school_year` varchar(50) NOT NULL,
  `stud_last_school_num` varchar(20) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `sched_stat` smallint(6) NOT NULL DEFAULT '0',
  `enroll_stat` smallint(6) NOT NULL DEFAULT '0',
  `grade` varchar(50) NOT NULL,
  `section` varchar(100) NOT NULL,
  `stud_type` smallint(6) NOT NULL DEFAULT '0',
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_information`
--

INSERT INTO `stud_information` (`id`, `stud_no`, `stud_Fname`, `stud_Mname`, `stud_Lname`, `stud_sex`, `stud_address`, `stud_num`, `stud_emailadd`, `stud_birthday`, `stud_age`, `stud_birthplace`, `stud_religion`, `stud_father`, `stud_father_occupation`, `stud_mother`, `stud_mother_occupation`, `stud_guardian`, `stud_guardian_relationship`, `stud_guardian_num`, `stud_last_school_attended`, `stud_last_school_address`, `stud_last_school_grade`, `stud_last_school_year`, `stud_last_school_num`, `status`, `sched_stat`, `enroll_stat`, `grade`, `section`, `stud_type`, `DATETIME_LOG`) VALUES
(1, '407338150401', 'ROSEANNA', 'M', 'PARK', 'FEMALE', 'BLOCK 1, LOT 15, ST. PAUL STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '091728394562', 'rosepark@gmail.com', '2006-02-11', 15, 'SEOUL, KOREA', 'OTHER', 'MASON PARK', 'LAWYER', 'CLARE PARK', 'BUSINESSWOMAN', 'CLARE PARK', 'MOTHER', '091532648792', 'DLS ZOBEL', 'ALABANG', 'GRADE 9', '2020-2021', '9866214', 1, 1, 1, 'GRADE 10', 'ST. MATTHEW', 0, '2021-09-30 23:54:50'),
(2, '407338150402', 'DANICA', 'ONGRAY', 'CUIZON', 'FEMALE', 'B4, L5, ST. ANTHONY STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '091812365478', 'dancuizon@gmail.com', '2008-05-18', 13, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'REGIE CUIZON', 'ELECTRICAL ENGINEER', 'JANNA CUIZON', 'DIETICIAN', 'REGIE CUIZON', 'FATHER', '092174693852', 'DLS ZOBEL', 'ALABANG', 'GRADE 6', '2020-2021', '9866214', 1, 1, 1, 'GRADE 7', 'ST. AGNES', 0, '2021-10-01 00:21:34'),
(3, '407338150403', 'VICTOR', 'SALAS', 'DY', 'MALE', 'B2, L18, ST. PETER STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '090647891235', 'vicdy@gmail.com', '2007-01-06', 14, 'ALABANG', 'ROMAN CATHOLIC', 'VICTOR DY JR.', 'BUSINESSMAN', 'KIM DY', 'PROFESSIONAL VOLLEYBALL PLAYER', 'VICTOR DY JR.', 'FATHER', '092718394562', 'SAN BEDA COLLEGE ALABANG', 'ALABANG HILLS', 'GRADE 7', '2020-2021', '9224531', 1, 1, 1, 'GRADE 8', 'ST. BERNARD', 0, '2021-10-01 00:34:35'),
(4, '407338150404', 'KIM', 'AMAN', 'FAJARDO', 'MALE', 'BLOCK 9, LOT 24, ST. AGATHA STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '092583691470', 'kafajardo@gmail.com', '2010-09-30', 11, 'LAS PINAS CITY', 'ROMAN CATHOLIC', 'KIEFER FAJARDO', 'DENTIST', 'CARMELA FAJARDO', 'ARTIST', 'KIEFER FAJARDO', 'FATHER', '091897852364', 'SAN BEDA COLLEGE ALABANG', 'ALABANG HILLS', 'GRADE 5', '2020-2021', '9224531', 1, 1, 1, 'GRADE 6', 'ST. ANTHONY', 0, '2021-10-01 00:42:33'),
(5, '407338150405', 'CLARICE PATRICIA', 'V', 'CRUZ', 'FEMALE', 'B7, L1, ST. MICHAEL STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '094536251789', 'clairecruz@gmail.com', '2006-11-11', 14, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'RAY CRUZ', 'ARCHITECTURE', 'PATRICE ANN CRUZ', 'PEDIATRICIAN', 'PATRICE ANN CRUZ', 'MOTHER', '092785209631', 'DLS ZOBEL', 'ALABANG', 'GRADE 9', '2020-2021', '9866214', 1, 1, 1, 'GRADE 10', 'ST. MATTHEW', 0, '2021-10-01 00:52:15'),
(6, '407338150406', 'ELLA MARIE', 'D', 'WONG', 'FEMALE', 'BLOCK 12, LOT 5, ST. MAGDALENE STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '090514758026', 'ellawong@gmail.com', '2011-08-15', 10, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'HENRY WONG SR.', 'BUSINESSMAN', 'JESSICA WONG', 'CHEF', 'JESSICA WONG', 'MOTHER', '094578961420', 'DLS ZOBEL', 'ALABANG', 'GRADE 4', '2020-2021', '9866214', 1, 1, 1, 'GRADE 5', 'ST. MAGDALENE', 0, '2021-10-01 01:06:51'),
(7, '407338150407', 'FRITZIE KATHLEEN', 'VELASCO', 'CUARESMA', 'FEMALE', 'MUNTINLUPA CITY', '09212951824', 'fritzie@gmail.com', '2008-04-08', 13, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'FEDERICO R. CUARESMA JR.', 'BUSINESSMAN', 'NANNETTE V. CUARESMA', 'HOUSEWIFE', 'NA', 'NA', 'NA', 'ST. ANDREW SCHOOL ', 'PARANAQUE CITY', 'GRADE 6', '2020-2021', '9826453', 1, 1, 1, 'GRADE 7', 'ST. AGNES', 0, '2021-10-15 14:32:37'),
(8, '407338150408', 'KYLA', 'ERNI', 'GONZALES', 'FEMALE', 'BLOCK 2, LOT 1, PHASE 1, SAINT MAY STREET, STO. NIÃ‘O VILLAGE, MUNTINLUPA CITY', '09502972674', 'kygonzales@gmail.com', '2008-03-20', 13, 'MUNTINLUPA CITY', 'ROMAN CATHOLIC', 'JAN GONZALES', 'SYSTEM ANALYST', 'MARIANNE GONZALES', 'PILOT', 'NA', 'NA', 'NA', 'DLS ZOBEL', 'UNIVERSITY AVE, AYALA ALABANG, MUNTINLUPA', 'GRADE 6', '2021-2022', '(02) 8771 3579', 1, 1, 1, 'GRADE 8', 'ST. BERNARD', 1, '2021-10-20 15:14:23'),
(9, '407338150409', 'BRADLEY', 'ORTIZ', 'LARSON', 'MALE', 'ORANGE STREET LAS PINAS CITY ', '09332134544', 'bradley@gmail.com', '2014-03-17', 7, 'MAKATI CITY', 'ROMAN CATHOLIC', 'DARYL LARSON', 'BUSINESS ANALYST', 'CHRISELE LARSON', 'INTERIOR DESIGNER', 'CHRISELE LARSON', 'MOTHER', '09332134544', 'PERPETUAL HELP SYSTEM DALTA', 'PARANAQUE CITY', 'GRADE 1', '2020-2021', '9826453', 1, 0, 0, 'GRADE 2', 'ST. JOHN', 0, '2021-11-01 20:23:17'),
(10, '407338150410', 'OSCAR', 'SANTOS', 'CONLEY', 'MALE', 'DUHAT STREET LAS PINAS CITY ', '09566775443', 'oscar@gmail.com', '2010-11-01', 11, 'PASAY CITY', 'ROMAN CATHOLIC', 'ENTE CONLEY', 'LAWYER', 'DORIS CONLEY', 'ENGINEER', 'ENTE CONLEY', 'FATHER', '09566775443', 'PERPETUAL HELP SYSTEM DALTA', 'PARANAQUE CITY', 'GRADE 5', '2020-2021', '9826453', 1, 0, 0, 'GRADE 6', 'ST. ANTHONY', 0, '2021-11-01 20:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `stud_receipt`
--

CREATE TABLE `stud_receipt` (
  `id` int(11) NOT NULL,
  `admission_id` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `req_status` tinyint(10) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL,
  `date_uploaded` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_receipt`
--

INSERT INTO `stud_receipt` (`id`, `admission_id`, `stud_id`, `image`, `req_status`, `type`, `date_uploaded`, `DATETIME_LOG`) VALUES
(1, 'ADM-000001', '407338150401', 'receipt1633017255_cash1.png', 1, 6, '2021-09-30', '2021-09-30 23:54:15'),
(2, 'ADM-000002', '407338150402', 'receipt1633018833_cash2.png', 1, 6, '2021-10-01', '2021-10-01 00:20:33'),
(3, 'ADM-000003', '407338150403', 'receipt1633019638_cash3.jpg', 1, 6, '2021-10-01', '2021-10-01 00:33:58'),
(4, 'ADM-000004', '407338150404', 'receipt1633020118_cash4.png', 1, 6, '2021-10-01', '2021-10-01 00:41:58'),
(5, 'ADM-000005', '407338150405', 'receipt1633020699_cash6.png', 1, 6, '2021-10-01', '2021-10-01 00:51:39'),
(6, 'ADM-000006', '407338150406', 'receipt1633021304_cash7.png', 1, 6, '2021-10-01', '2021-10-01 01:01:44'),
(7, 'ADM-000007', '407338150407', 'receipt1634279200_cash10.png', 1, 6, '2021-10-15', '2021-10-15 14:26:40'),
(8, 'ADM-000008', '407338150408', 'receipt1634714006_cash11.png', 1, 6, '2021-10-20', '2021-10-20 15:13:26'),
(9, 'ADM-000009', '407338150408', 'receipt1634714747_cashver211.png', 1, 6, '2021-10-20', '2021-10-20 15:25:47'),
(10, 'ADM-000010', '407338150409', 'receipt1635769321_cash6.png', 1, 6, '2021-11-01', '2021-11-01 20:22:01'),
(11, 'ADM-000011', '407338150410', 'receipt1635770047_cash7.png', 1, 6, '2021-11-01', '2021-11-01 20:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `stud_req`
--

CREATE TABLE `stud_req` (
  `id` int(11) NOT NULL,
  `admission_id` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `req_status` tinyint(10) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL,
  `date_uploaded` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_req`
--

INSERT INTO `stud_req` (`id`, `admission_id`, `stud_id`, `image`, `req_status`, `type`, `date_uploaded`, `DATETIME_LOG`) VALUES
(1, 'ADM-000001', '407338150401', 'requirements1633017114_permrecord1.jpg', 1, 5, '2021-09-30', '2021-09-30 23:51:54'),
(2, 'ADM-000001', '407338150401', 'requirements1633017114_report1.jpg', 1, 3, '2021-09-30', '2021-09-30 23:51:54'),
(3, 'ADM-000001', '407338150401', 'requirements1633017114_1938e338827bc598bc03eeae8907088bd.jpg', 1, 1, '2021-09-30', '2021-09-30 23:51:54'),
(4, 'ADM-000001', '407338150401', 'requirements1633017114_birth1.png', 1, 2, '2021-09-30', '2021-09-30 23:51:54'),
(5, 'ADM-000001', '407338150401', 'requirements1633017114_moralcert1.jpg', 1, 4, '2021-09-30', '2021-09-30 23:51:54'),
(6, 'ADM-000002', '407338150402', 'requirements1633018779_deanna-wong-1.jpg', 1, 1, '2021-10-01', '2021-10-01 00:19:39'),
(7, 'ADM-000002', '407338150402', 'requirements1633018779_birth2.png', 1, 2, '2021-10-01', '2021-10-01 00:19:39'),
(8, 'ADM-000002', '407338150402', 'requirements1633018779_moralcert2.jpg', 1, 4, '2021-10-01', '2021-10-01 00:19:39'),
(9, 'ADM-000002', '407338150402', 'requirements1633018779_reportcard2.jpg', 1, 3, '2021-10-01', '2021-10-01 00:19:39'),
(10, 'ADM-000002', '407338150402', 'requirements1633018779_permrec2.jpg', 1, 5, '2021-10-01', '2021-10-01 00:19:39'),
(11, 'ADM-000003', '407338150403', 'requirements1633019589_1nam-joo-hyuk.jpg', 1, 1, '2021-10-01', '2021-10-01 00:33:09'),
(12, 'ADM-000003', '407338150403', 'requirements1633019589_reportcard3.jpg', 1, 3, '2021-10-01', '2021-10-01 00:33:09'),
(13, 'ADM-000003', '407338150403', 'requirements1633019589_permrec3.jpg', 1, 5, '2021-10-01', '2021-10-01 00:33:09'),
(14, 'ADM-000003', '407338150403', 'requirements1633019589_moralcert3.png', 1, 4, '2021-10-01', '2021-10-01 00:33:09'),
(15, 'ADM-000003', '407338150403', 'requirements1633019589_birth3.png', 1, 2, '2021-10-01', '2021-10-01 00:33:09'),
(16, 'ADM-000004', '407338150404', 'requirements1633020073_R1.jpg', 1, 1, '2021-10-01', '2021-10-01 00:41:13'),
(17, 'ADM-000004', '407338150404', 'requirements1633020073_reportcard4.jpg', 1, 3, '2021-10-01', '2021-10-01 00:41:13'),
(18, 'ADM-000004', '407338150404', 'requirements1633020073_permrec4.jpg', 1, 5, '2021-10-01', '2021-10-01 00:41:13'),
(19, 'ADM-000004', '407338150404', 'requirements1633020073_birth4.png', 1, 2, '2021-10-01', '2021-10-01 00:41:13'),
(20, 'ADM-000004', '407338150404', 'requirements1633020073_moralcert4.jpg', 1, 4, '2021-10-01', '2021-10-01 00:41:13'),
(21, 'ADM-000005', '407338150405', 'requirements1633020638_1668ee0dcc1119d1e9189ee4033766e9.jpg', 1, 1, '2021-10-01', '2021-10-01 00:50:38'),
(22, 'ADM-000005', '407338150405', 'requirements1633020638_reportcard6.jpg', 1, 3, '2021-10-01', '2021-10-01 00:50:38'),
(23, 'ADM-000005', '407338150405', 'requirements1633020638_moralcert6.jpg', 1, 4, '2021-10-01', '2021-10-01 00:50:38'),
(24, 'ADM-000005', '407338150405', 'requirements1633020638_birth6.png', 1, 2, '2021-10-01', '2021-10-01 00:50:38'),
(25, 'ADM-000005', '407338150405', 'requirements1633020638_permrec6.jpg', 1, 5, '2021-10-01', '2021-10-01 00:50:38'),
(26, 'ADM-000006', '407338150406', 'requirements1633021140_unnamed.jpg', 1, 1, '2021-10-01', '2021-10-01 00:59:00'),
(27, 'ADM-000006', '407338150406', 'requirements1633021140_reportcard7.jpg', 1, 3, '2021-10-01', '2021-10-01 00:59:00'),
(28, 'ADM-000006', '407338150406', 'requirements1633021140_moralcert7.jpg', 1, 4, '2021-10-01', '2021-10-01 00:59:00'),
(29, 'ADM-000006', '407338150406', 'requirements1633021140_permrec7.jpg', 1, 5, '2021-10-01', '2021-10-01 00:59:00'),
(30, 'ADM-000006', '407338150406', 'requirements1633021140_birth7.png', 1, 2, '2021-10-01', '2021-10-01 00:59:00'),
(31, 'ADM-000007', '407338150407', 'requirements1634278985_reportcard10.jpg', 1, 3, '2021-10-15', '2021-10-15 14:23:05'),
(32, 'ADM-000007', '407338150407', 'requirements1634278985_moralcert10.png', 1, 4, '2021-10-15', '2021-10-15 14:23:05'),
(33, 'ADM-000007', '407338150407', 'requirements1634278985_birth10.png', 1, 2, '2021-10-15', '2021-10-15 14:23:05'),
(34, 'ADM-000007', '407338150407', 'requirements1634278985_unnamed.jpg', 1, 1, '2021-10-15', '2021-10-15 14:23:05'),
(35, 'ADM-000007', '407338150407', 'requirements1634278985_permrec10.jpg', 1, 5, '2021-10-15', '2021-10-15 14:23:05'),
(36, 'ADM-000008', '407338150408', 'requirements1634713917_reportcard11.jpg', 1, 3, '2021-10-20', '2021-10-20 15:11:57'),
(37, 'ADM-000008', '407338150408', 'requirements1634713917_2x2.jpg', 1, 1, '2021-10-20', '2021-10-20 15:11:57'),
(38, 'ADM-000008', '407338150408', 'requirements1634713917_permrec11.jpg', 1, 5, '2021-10-20', '2021-10-20 15:11:57'),
(39, 'ADM-000008', '407338150408', 'requirements1634713917_moralcert11.png', 1, 4, '2021-10-20', '2021-10-20 15:11:57'),
(40, 'ADM-000008', '407338150408', 'requirements1634713917_CamScanner 09-25-2021 13.19.jpg', 1, 2, '2021-10-20', '2021-10-20 15:11:57'),
(41, 'ADM-000009', '407338150408', 'requirements1634714563_cashver211.png', 1, 3, '2021-10-20', '2021-10-20 15:22:43'),
(42, 'ADM-000010', '407338150409', 'requirements1635769254_reportcard6.jpg', 1, 3, '2021-11-01', '2021-11-01 20:20:54'),
(43, 'ADM-000010', '407338150409', 'requirements1635769254_moralcert6.jpg', 1, 4, '2021-11-01', '2021-11-01 20:20:54'),
(44, 'ADM-000010', '407338150409', 'requirements1635769254_rick.jpg', 1, 1, '2021-11-01', '2021-11-01 20:20:54'),
(45, 'ADM-000010', '407338150409', 'requirements1635769254_permrec6.jpg', 1, 5, '2021-11-01', '2021-11-01 20:20:54'),
(46, 'ADM-000010', '407338150409', 'requirements1635769254_birth6.png', 1, 2, '2021-11-01', '2021-11-01 20:20:54'),
(47, 'ADM-000011', '407338150410', 'requirements1635769897_stud12.jpg', 1, 1, '2021-11-01', '2021-11-01 20:31:37'),
(48, 'ADM-000011', '407338150410', 'requirements1635769897_reportcard7.jpg', 1, 3, '2021-11-01', '2021-11-01 20:31:37'),
(49, 'ADM-000011', '407338150410', 'requirements1635769897_birth7.png', 1, 2, '2021-11-01', '2021-11-01 20:31:37'),
(50, 'ADM-000011', '407338150410', 'requirements1635769897_permrec7.jpg', 1, 5, '2021-11-01', '2021-11-01 20:31:37'),
(51, 'ADM-000011', '407338150410', 'requirements1635769897_moralcert7.jpg', 1, 4, '2021-11-01', '2021-11-01 20:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `stud_schedule`
--

CREATE TABLE `stud_schedule` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `req_status` tinyint(10) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL,
  `date_uploaded` date NOT NULL,
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_schedule`
--

INSERT INTO `stud_schedule` (`id`, `stud_id`, `image`, `req_status`, `type`, `date_uploaded`, `DATETIME_LOG`) VALUES
(1, '407338150401', 'schedule1633017420_grade10.jpg', 1, 7, '2021-09-30', '2021-09-30 23:57:00'),
(2, '407338150402', 'schedule1633019012_grade7.jpg', 1, 7, '2021-10-01', '2021-10-01 00:23:32'),
(3, '407338150403', 'schedule1633019735_grade8.jpg', 1, 7, '2021-10-01', '2021-10-01 00:35:35'),
(4, '407338150404', 'schedule1633020225_grade6.jpg', 1, 7, '2021-10-01', '2021-10-01 00:43:45'),
(5, '407338150405', 'schedule1633020774_grade10.jpg', 1, 7, '2021-10-01', '2021-10-01 00:52:54'),
(6, '407338150406', 'schedule1633021667_grade5.jpg', 1, 7, '2021-10-01', '2021-10-01 01:07:47'),
(7, '407338150407', 'schedule1634279834_grade7.jpg', 1, 7, '2021-10-15', '2021-10-15 14:37:14'),
(8, '407338150408', 'schedule1634714142_grade7.jpg', 1, 7, '2021-10-20', '2021-10-20 15:15:42'),
(9, '407338150408', 'schedule1634714838_grade8.jpg', 1, 7, '2021-10-20', '2021-10-20 15:27:18'),
(10, '407338150409', 'schedule1635769533_grade2.jpg', 1, 7, '2021-11-01', '2021-11-01 20:25:33'),
(11, '407338150410', 'schedule1635770189_grade6.jpg', 1, 7, '2021-11-01', '2021-11-01 20:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_type` tinyint(2) NOT NULL DEFAULT '0',
  `staff_type` tinyint(2) NOT NULL DEFAULT '0',
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `DATETIME_LOG` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `user_id`, `user_type`, `staff_type`, `username`, `password`, `image_path`, `image_name`, `status`, `DATETIME_LOG`) VALUES
(1, '1', 1, 1, 'admin@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'assets2/images/users/', '1.jpg', 0, '2021-09-07 21:55:18'),
(4, '2', 1, 2, 'admin2@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'assets2/images/users/', '2.jpg', 0, '2021-09-07 21:55:18'),
(5, '407338150401', 3, 0, 'rosepark@gmail.com', '1a98758f78f47abdc0bf75d211d3914a', 'snsm_images/profile/ADM-000001/', 'profile1633017267_1938e338827bc598bc03eeae8907088bd.jpg', 1, '2021-09-30 23:52:28'),
(6, '407338150402', 3, 0, 'dancuizon@gmail.com', 'aa8fbada138708b0bd4d6ea0ebd2f479', 'snsm_images/profile/ADM-000002/', 'profile1633018866_deanna-wong-1.jpg', 1, '2021-10-01 00:19:58'),
(7, '407338150403', 3, 0, 'vicdy@gmail.com', '2bbda12b35c9b00aa6b95ca57ec6e8d2', 'snsm_images/profile/ADM-000003/', 'profile1633019649_1nam-joo-hyuk.jpg', 1, '2021-10-01 00:33:31'),
(8, '407338150404', 3, 0, 'kafajardo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'snsm_images/profile/ADM-000004/', 'profile1633020132_R1.jpg', 1, '2021-10-01 00:41:31'),
(9, '407338150405', 3, 0, 'clairecruz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'snsm_images/profile/ADM-000005/', 'profile1633020714_1668ee0dcc1119d1e9189ee4033766e9.jpg', 1, '2021-10-01 00:51:07'),
(10, '407338150406', 3, 0, 'ellawong@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'snsm_images/profile/ADM-000006/', 'profile1633021586_unnamed.jpg', 1, '2021-10-01 00:59:36'),
(11, '407338150407', 3, 0, 'fritzie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'snsm_images/profile/ADM-000007/', 'profile1634279258_unnamed.jpg', 1, '2021-10-15 14:25:28'),
(12, '407338150408', 3, 0, 'kygonzales@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'snsm_images/profile/ADM-000008/', 'profile1634714028_2x2.jpg', 1, '2021-10-20 15:12:27'),
(13, '407338150409', 3, 0, 'bradley@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'snsm_images/profile/ADM-000010/', 'profile1635769345_rick.jpg', 1, '2021-11-01 20:21:27'),
(14, '407338150410', 3, 0, 'oscar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'snsm_images/profile/ADM-000011/', 'profile1635770063_stud12.jpg', 1, '2021-11-01 20:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_details`
--
ALTER TABLE `admission_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_type`
--
ALTER TABLE `req_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secret_question`
--
ALTER TABLE `secret_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_accounts`
--
ALTER TABLE `staff_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_information`
--
ALTER TABLE `stud_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_receipt`
--
ALTER TABLE `stud_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_req`
--
ALTER TABLE `stud_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_schedule`
--
ALTER TABLE `stud_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admission_details`
--
ALTER TABLE `admission_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `req_type`
--
ALTER TABLE `req_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `secret_question`
--
ALTER TABLE `secret_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `staff_accounts`
--
ALTER TABLE `staff_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stud_information`
--
ALTER TABLE `stud_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stud_receipt`
--
ALTER TABLE `stud_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stud_req`
--
ALTER TABLE `stud_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `stud_schedule`
--
ALTER TABLE `stud_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
