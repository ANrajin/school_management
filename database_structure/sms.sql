-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 06:11 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `picture` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `email`, `type`, `name`, `phone`, `picture`) VALUES
(1, 'Super Admin', '202cb962ac59075b964b07152d234b70', 'super@email.com', 1, NULL, 0, NULL),
(7, 'email', '123', 'email@gmail.com', 1, 'Janata Bank Limited', 1855920762, '5dfb');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(15) NOT NULL,
  `admission_date` date NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `blood` tinyint(4) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `parent_income` float(10,2) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `parmanent_address` varchar(200) NOT NULL,
  `division` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `upozilla` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `session`, `admission_date`, `class_id`, `name`, `phone`, `dob`, `gender`, `nationality`, `blood`, `father`, `mother`, `parent_income`, `present_address`, `parmanent_address`, `division`, `district`, `upozilla`, `picture`) VALUES
(209, '2020', '2020-01-01', 6, 'Anisur Rahman', '01712150377', '1994-12-24', 'male', 'Bangladeshi', 0, 'Md. Abdul Halim sarker', 'Nurjahan Begum', 50000.00, 'Lalbag, Dhaka.', 'Muradnagar, Cumilla.', 2, 0, 0, ''),
(212, '', '0000-00-00', 6, '', '', '0000-00-00', 'Choose...', '', 0, '', '', 0.00, '', '', 0, 0, 0, 'jpg'),
(214, '', '0000-00-00', 7, 'rose welium', '', '0000-00-00', 'Choose...', '', 0, '', '', 0.00, '', '', 0, 0, 0, ''),
(218, '2020', '2019-12-28', 7, 'Anis', '01621968338', '0000-00-00', 'male', 'Bangladeshi', 0, 'Md. Abdul Halim sarker', 'Nurjahan Begum', 50000.00, 'Lalbag, Dhaka.', 'Muradnagar, Cumilla.', 2, 0, 0, ''),
(220, '2020', '2019-12-31', 8, 'nainur', '01712150377', '2019-12-31', 'male', 'Bangladeshi', 0, 'Ibn Nainur', 'Ibn Naimur', 34634564.00, 'Dhaka', 'Chattagram', 4, 0, 0, ''),
(221, '', '0000-00-00', 8, '', '', '0000-00-00', 'Choose...', '', 0, '', '', 0.00, '', '', 0, 0, 0, ''),
(222, '', '0000-00-00', 8, '', '', '0000-00-00', 'Choose...', '', 0, '', '', 0.00, '', '', 0, 0, 0, ''),
(223, '', '0000-00-00', 10, '', '', '0000-00-00', 'Choose...', '', 0, '', '', 0.00, '', '', 0, 0, 0, 'png'),
(225, '2020', '2019-12-31', 10, 'Hasan', '01855920762', '2019-12-28', 'male', 'Bangladeshi', 0, 'XYZZ', 'XYZ', 100000000.00, 'room :410, Sir A. F. Rahman Hall, University of Dhaka', 'room :410, Sir A. F. Rahman Hall, University of Dhaka', 1, 0, 0, 'png'),
(226, '2020', '2020-05-30', 9, 'Salam', '0198765432', '2020-07-31', 'male', 'Bangladeshi', 0, 'Ibn salam', 'Binte abdullah', 3465346.00, 'Dhaka', 'Chattagram', 1, 0, 0, 'jpg'),
(227, '2020', '2019-12-25', 9, 'Mamun Ahmed', '4574567465', '2019-12-28', 'male', 'Bangladeshi', 0, 'Abdul Qadir', 'XYZ', 346454.00, 'Dhaka', 'Maymansingha', 2, 0, 0, 'jpg'),
(237, '2020', '2019-12-26', 9, 'Nainur', '01712150377', '2019-12-28', 'male', 'Bangladeshi', 0, 'xyz', 'xyz', 454675.00, 'Dhaka', 'B . baria', 1, 2, 2, 'jpg'),
(238, '2020', '2020-01-03', 8, 'fdgsdfgsdfg', '0178226565', '2020-01-03', 'male', 'fdgsdfgsdf', 1, 'dfgsrtgervfbsf', 'sfggnhfgsadfgqer', 56645.00, 'adfvcbsghsrt', 'hngaergtfdg', 1, 2, 2, 'jpg'),
(239, '2020', '2020-01-04', 10, 'Mofiz', '789965654', '2004-12-06', 'male', 'agafdgvb', 1, 'dfgergfdgdf', 'cszdfgaergre', 50000.00, 'czbgafrgadfg', 'ewedgfdgfdgh', 2, 8, 23, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_subject`
--

CREATE TABLE `assigned_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

CREATE TABLE `class_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_info`
--

INSERT INTO `class_info` (`id`, `name`) VALUES
(6, 'Six'),
(7, 'Seven'),
(8, 'Eight'),
(9, 'Nine'),
(10, 'Ten');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(50) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `division_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Gazipur', 1),
(3, 'Barisal', 4),
(4, 'Pirozfur', 4),
(5, 'Ranpur', 5),
(6, 'Nilfamari', 5),
(7, 'Cox\'s-Bazar', 2),
(8, 'Bandarban', 2),
(9, 'Hpbiganj', 6),
(10, 'Moulobibazar', 6),
(11, 'Shunamgong', 6),
(12, 'Fridpur', 1),
(14, 'Gupalgong', 1),
(15, 'Kishurgong', 1),
(16, 'Madaripur', 1),
(17, 'Manikgang', 1),
(18, 'Narayangong', 1),
(19, 'Norshindi', 1),
(20, 'Rajbari', 1),
(21, 'Shoriatpur', 1),
(22, 'Tangail', 1),
(30, 'Borguna', 4),
(31, 'Barishal', 4),
(32, 'Cumilla', 2);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`) VALUES
(1, 'Dhaka'),
(2, 'Chattagram'),
(3, 'Khulna'),
(4, 'Barisal'),
(5, 'Rangpur'),
(6, 'Sylhet'),
(7, 'Maymansing');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `question` varchar(4) DEFAULT NULL,
  `class_id` int(10) UNSIGNED DEFAULT NULL,
  `subject_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `date`, `question`, `class_id`, `subject_id`) VALUES
(1, '1rst Semestion', '2019-12-08', '5dfb', 6, 3),
(2, '1rst Semestion', '2019-12-08', 'pdf', 6, 13),
(3, '1rst Semestion', '2019-12-08', '', 7, 14),
(4, '1rst Semestion', '2019-12-26', '', 8, 15),
(5, '1rst Semestion', '2019-12-26', '', 9, 23),
(6, '1rst Semestion', '2019-12-26', 'pdf', 7, 17),
(7, '1rst Semestion', '2019-12-26', 'pdf', 10, 23),
(8, '1rst Semestion', '2019-12-26', 'pdf', 6, 23),
(9, '1rst Semestion', '2019-12-26', 'pdf', 10, 17),
(10, '1rst Semestion', '2019-12-26', 'pdf', 10, 23),
(11, '3rst Semestion', '2019-12-31', 'docx', 10, 24),
(12, '3rst Semestion', '2019-12-31', 'docx', 8, 16),
(13, '2rst Semestion', '2019-12-20', 'docx', 7, 23),
(14, '2rst Semestion', '2019-12-20', 'docx', 9, 16),
(15, '2rst Semestion', '2019-12-20', 'docx', 9, 14),
(16, '1rst Semestion', '2019-12-25', 'docx', 9, 13),
(17, '3rst Semestion', '2019-12-28', 'docx', 8, 23),
(18, '2rst Semestion', '2019-12-28', 'docx', 8, 16),
(22, '3rd semester ', '2019-12-25', 'docx', 6, 20),
(23, '3rd semester ', '2020-02-29', 'docx', 10, 20),
(24, '2nd Semester', '2020-05-30', 'docx', 9, 22),
(25, '2rst Semestion', '2019-12-21', 'docx', 6, 3),
(26, 'Quiz 1', '2019-12-28', 'pdf', 8, 13);

-- --------------------------------------------------------

--
-- Table structure for table `fee_type`
--

CREATE TABLE `fee_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `fee_amount` float(10,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_type`
--

INSERT INTO `fee_type` (`id`, `name`, `fee_amount`) VALUES
(1, '1rt semester ', 200.00),
(8, '2nd semester', 2000.00),
(9, '2nd semester', 2000.00),
(10, '2nd semester', 2000.00),
(11, '2nd semester', 2000.00),
(12, '2nd semester', 2000.00),
(13, '2nd semester', 2000.00),
(14, '2nd semester', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) UNSIGNED NOT NULL,
  `grade` varchar(15) NOT NULL,
  `percent_from` tinyint(3) UNSIGNED NOT NULL,
  `percent_to` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `grade`, `percent_from`, `percent_to`) VALUES
(1, 'A+', 0, 0),
(2, 'A', 0, 0),
(3, 'A-', 0, 0),
(4, 'B', 0, 0),
(5, 'C', 0, 0),
(6, 'D', 0, 0),
(7, 'F', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `full_marks` int(10) UNSIGNED NOT NULL,
  `obtained_marks` int(10) UNSIGNED NOT NULL,
  `grade_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `admission_id`, `exam_id`, `subject_id`, `full_marks`, `obtained_marks`, `grade_id`) VALUES
(91, 209, 2, 15, 0, 90, 1),
(92, 220, 2, 17, 0, 87, 1),
(93, 225, 2, 15, 0, 90, 1),
(94, 226, 1, 15, 0, 49, 6),
(95, 239, 1, 15, 0, 96, 1),
(96, 209, 1, 13, 0, 87, 5),
(97, 209, 1, 13, 0, 49, 1),
(99, 238, 1, 17, 0, 87, NULL),
(100, 238, 1, 15, 0, 49, NULL),
(101, 226, 1, 20, 0, 96, NULL),
(102, 226, 1, 22, 0, 87, NULL),
(103, 239, 3, 23, 0, 49, NULL),
(107, 238, 25, 24, 0, 90, NULL),
(108, 218, 25, 24, 0, 90, NULL),
(109, 237, 25, 24, 0, 90, NULL),
(110, 227, 25, 24, 0, 90, NULL),
(111, 227, 25, 24, 0, 90, NULL),
(113, 227, 25, 16, 0, 50, NULL),
(114, 218, 25, 15, 0, 50, NULL),
(115, 209, 25, 16, 0, 50, 1),
(117, 227, 26, 0, 0, 49, NULL),
(119, 227, 26, 0, 0, 99, NULL),
(120, 237, 26, 0, 0, 99, NULL),
(121, 227, 26, 0, 0, 90, NULL),
(122, 237, 26, 0, 0, 90, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(10) UNSIGNED NOT NULL,
  `studentId` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `admission_id`, `studentId`, `email`, `password`, `class_id`, `type`) VALUES
(7, 209, '20080001', 'anis@email.com', '250cf8b51c773f3f8dc8b4be867a9a02', 6, 2),
(8, 227, '20080002', 'mamun@email.com', '250cf8b51c773f3f8dc8b4be867a9a02', 6, 2),
(9, 225, '20070225', 'hasan@email.com', '250cf8b51c773f3f8dc8b4be867a9a02', 7, 2),
(10, 227, '20090227', 'mamusn@email.com', '250cf8b51c773f3f8dc8b4be867a9a02', 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendence`
--

CREATE TABLE `student_attendence` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED DEFAULT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendence`
--

INSERT INTO `student_attendence` (`id`, `class_id`, `student_id`, `date`, `status`) VALUES
(10, 1, 2, '0000-00-00', 0),
(11, 1, 2, '0000-00-00', 0),
(12, 1, 2, '0000-00-00', 0),
(13, 1, 2, '0000-00-00', 0),
(14, 1, 2, '0000-00-00', 1),
(15, 1, 2, '0000-00-00', 1),
(16, 1, 2, '0000-00-00', 1),
(17, 1, 2, '0000-00-00', 1),
(18, 1, 2, '0000-00-00', 0),
(19, 15, 221, '2020-01-07', 0),
(20, 15, 222, '2020-01-07', 0),
(21, 15, 223, '2020-01-07', 0),
(22, 15, 227, '2020-01-07', 0),
(23, 15, 237, '2020-01-07', 0),
(24, 15, 221, '2020-01-07', 1),
(25, 15, 222, '2020-01-07', 0),
(26, 15, 223, '2020-01-07', 0),
(27, 15, 227, '2020-01-07', 0),
(28, 15, 237, '2020-01-07', 0),
(29, 15, 221, '2020-01-07', 1),
(30, 15, 222, '2020-01-07', 0),
(31, 15, 223, '2020-01-07', 0),
(32, 15, 227, '2020-01-07', 0),
(33, 15, 237, '2020-01-07', 0),
(34, 15, 221, '2020-01-07', 0),
(35, 15, 222, '2020-01-07', 0),
(36, 15, 223, '2020-01-07', 0),
(37, 15, 227, '2020-01-07', 0),
(38, 15, 237, '2020-01-07', 0),
(39, 15, 221, '2020-01-07', 0),
(40, 15, 222, '2020-01-07', 0),
(41, 15, 223, '2020-01-07', 0),
(42, 15, 227, '2020-01-07', 0),
(43, 15, 237, '2020-01-07', 0),
(44, 15, 221, '2020-01-07', 0),
(45, 15, 222, '2020-01-07', 0),
(46, 15, 223, '2020-01-07', 0),
(47, 15, 227, '2020-01-07', 0),
(48, 15, 237, '2020-01-07', 0),
(49, 15, 221, '2020-01-07', 0),
(50, 15, 222, '2020-01-07', 0),
(51, 15, 223, '2020-01-07', 0),
(52, 15, 227, '2020-01-07', 0),
(53, 15, 237, '2020-01-07', 0),
(54, 15, 221, '2020-01-07', 0),
(55, 15, 222, '2020-01-07', 0),
(56, 15, 223, '2020-01-07', 0),
(57, 15, 227, '2020-01-07', 0),
(58, 15, 237, '2020-01-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `subject_code`, `teacher_id`, `class_id`) VALUES
(3, 'bangla ', '105', 39, 6),
(13, 'Math', '106', 39, 6),
(14, 'Bangladesh and Gloabal Studies', '601', 39, 7),
(15, 'Bangla', '701', 37, 7),
(16, 'Sceince', '705', 37, 7),
(17, 'Bangla', '801', 37, 8),
(18, 'English', '802', 38, 8),
(19, 'Mathematics', '903', 38, 9),
(20, 'English', '902', 38, 9),
(22, 'English', '602', 39, 10),
(23, 'Mathematics', '603', 37, 10),
(24, 'Sceince', '605', 38, 10);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `NID` varchar(30) NOT NULL,
  `PID` varchar(30) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `joining_date` date NOT NULL,
  `salary_account` varchar(30) NOT NULL,
  `salery` float(10,2) NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `class_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_pic` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `qualification`, `address`, `email`, `password`, `phone`, `gender`, `NID`, `PID`, `father_name`, `mother_name`, `nationality`, `blood_group`, `joining_date`, `salary_account`, `salery`, `subject_id`, `remarks`, `type`, `class_id`, `teacher_pic`) VALUES
(37, 'Mr. Jeson Scot', 'Senior Teacher', 'M.Sc', 'England,London.', 'jeson@email.com', '68053af2923e00204c3ca7c6a3150cf7', '01727174784', 1, '19931911544000177', '3456667', 'Mr. Scot Berron', 'Mrs. Scot Berron', 'English man', '0+', '2019-12-10', '21133345646', 500000.00, 13, 'Good Teacher', 3, 15, 'jpg'),
(38, 'Mr. Scotland', 'Junior Teacher', 'B.sc', 'Scotland.', 'scotland@email.com', '68053af2923e00204c3ca7c6a3150cf7', '01712150377', 1, '19931911544000177', '3456667', 'Mr. Devid Scotlad', 'Mrs. Devid Scotlad', 'Scotish', 'O-', '2019-12-11', '21133345646254', 40000.00, 3, 'Excellent teacher', 3, 11, 'jpg'),
(39, 'Mr. Anayetul Kabir', 'Trainee Teacher', 'B.sc', 'Dhaka, Bangladesh.', 'anayetul@email.com', '68053af2923e00204c3ca7c6a3150cf7', '01727174784', 1, '19931911000177', '3456667564756', 'Mr. Abu Bakar', 'Mrs. Abu Bakar', 'Bangladeshi', 'B+', '2019-12-11', '2113334564627854', 80000.00, 14, 'Excellent teaching quality', 3, 11, 'png');

-- --------------------------------------------------------

--
-- Table structure for table `tution_fee`
--

CREATE TABLE `tution_fee` (
  `id` int(10) UNSIGNED NOT NULL,
  `admission_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `fee_type_id` int(10) UNSIGNED NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tution_fee`
--

INSERT INTO `tution_fee` (`id`, `admission_id`, `class_id`, `fee_type_id`, `invoice`, `amount`, `date`, `status`) VALUES
(20, 209, 6, 1, 'STD456', 200, '2020-01-03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `upozilla`
--

CREATE TABLE `upozilla` (
  `id` int(11) NOT NULL,
  `upozilla_name` varchar(50) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upozilla`
--

INSERT INTO `upozilla` (`id`, `upozilla_name`, `district_id`) VALUES
(1, 'Dohar', 1),
(2, 'Gazipur Sadar', 2),
(3, 'Cox\'s-Bazar Sadar', 7),
(4, 'Bandarban Sadar', 8),
(5, 'Mohammadpur', 1),
(6, 'Barisal Sadar', 3),
(7, 'Gazipur Sadar', 2),
(8, 'Damrai', 1),
(9, 'Duhar', 1),
(10, 'Gazipur Shadar', 1),
(11, 'Keranigong', 1),
(12, 'Savar', 1),
(13, 'Nawoabgang', 1),
(14, 'Alfatabad', 12),
(15, 'Banga', 12),
(16, 'Bolamari', 12),
(17, 'Shalta', 12),
(18, 'Foridpur Shadar', 12),
(19, 'Raijul', 16),
(20, 'Kalkini', 16),
(21, 'Madaripur Shadar', 16),
(22, 'Hibchar', 16),
(23, 'Lama', 8),
(24, 'Ruma', 8),
(25, 'Thanchi', 8),
(26, 'Bandanban Sadar', 8),
(27, 'Ali kadam', 8),
(28, 'Muradnagar', 32),
(29, 'Debidwar', 32),
(30, 'Burichang', 32),
(31, 'Muradnagr', 32),
(32, 'Debidwar', 32),
(33, 'Meghna', 32),
(34, 'Cumilla Sadar', 32),
(35, 'Choddogram', 32);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'teachers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `assigned_subject`
--
ALTER TABLE `assigned_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `class_info`
--
ALTER TABLE `class_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `fee_type`
--
ALTER TABLE `fee_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `student_id` (`admission_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `grade_id` (`grade_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `admission_id` (`admission_id`);

--
-- Indexes for table `student_attendence`
--
ALTER TABLE `student_attendence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `tution_fee`
--
ALTER TABLE `tution_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `fee_type_id` (`fee_type_id`),
  ADD KEY `admission_id` (`admission_id`);

--
-- Indexes for table `upozilla`
--
ALTER TABLE `upozilla`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `assigned_subject`
--
ALTER TABLE `assigned_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_info`
--
ALTER TABLE `class_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `fee_type`
--
ALTER TABLE `fee_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_attendence`
--
ALTER TABLE `student_attendence`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tution_fee`
--
ALTER TABLE `tution_fee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `upozilla`
--
ALTER TABLE `upozilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`);

--
-- Constraints for table `assigned_subject`
--
ALTER TABLE `assigned_subject`
  ADD CONSTRAINT `assigned_subject_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`),
  ADD CONSTRAINT `assigned_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`),
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`admission_id`) REFERENCES `admission` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`admission_id`) REFERENCES `admission` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`),
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`);

--
-- Constraints for table `tution_fee`
--
ALTER TABLE `tution_fee`
  ADD CONSTRAINT `tution_fee_ibfk_1` FOREIGN KEY (`fee_type_id`) REFERENCES `fee_type` (`id`),
  ADD CONSTRAINT `tution_fee_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`id`),
  ADD CONSTRAINT `tution_fee_ibfk_3` FOREIGN KEY (`admission_id`) REFERENCES `admission` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
