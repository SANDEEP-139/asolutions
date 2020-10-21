-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 08:17 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_class`
--

CREATE TABLE `admin_class` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_class`
--

INSERT INTO `admin_class` (`id`, `name`) VALUES
(1, 'NURSERY'),
(2, 'LKG'),
(3, 'UKG'),
(4, '1ST'),
(5, '2ND'),
(6, '3RD'),
(7, '4TH'),
(8, '5TH'),
(9, '6TH'),
(10, '7TH'),
(11, '8TH'),
(12, '9TH'),
(13, '10TH'),
(14, '11TH'),
(15, '12TH');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `class_id` varchar(10) DEFAULT NULL,
  `section_id` varchar(10) DEFAULT NULL,
  `teacher_id` varchar(10) DEFAULT NULL,
  `subject_id` varchar(10) DEFAULT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  `at_date` date DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `collage_id`, `class_id`, `section_id`, `teacher_id`, `subject_id`, `student_id`, `at_date`, `type`) VALUES
(1, '1', '1', '1', '1', '1', '3', '2020-09-04', 'p'),
(2, '1', '1', '1', '1', '1', '3', '2020-09-05', 'L'),
(3, '1', '1', '1', '1', '1', '2', '2020-09-04', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_teacher`
--

CREATE TABLE `attendance_teacher` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `at_date` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_wise_subjects`
--

CREATE TABLE `class_wise_subjects` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `class_id` varchar(10) DEFAULT NULL,
  `subject_id` varchar(10) DEFAULT NULL,
  `subject_name_eng` varchar(100) DEFAULT NULL,
  `subject_name_hnd` varchar(100) NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_wise_subjects`
--

INSERT INTO `class_wise_subjects` (`id`, `collage_id`, `class_id`, `subject_id`, `subject_name_eng`, `subject_name_hnd`, `category`) VALUES
(34, '1', '3', '5', 'English', '', 'Practical'),
(33, '1', '3', '7', 'Biology', '', 'Other'),
(63, '1', '4', '1', 'Science', '', 'Normal'),
(6, '1', '3', '1', 'Science', '', NULL),
(64, '1', '4', '12', 'English', '', 'Normal'),
(65, '1', '4', '5', 'English', '', 'Practical'),
(12, '1', '3', '2', 'Math', '', 'Normal'),
(13, '1', '3', '3', 'Hindi', '', 'Normal'),
(44, '1', '5', '7', 'Biology', '', 'Other'),
(43, '1', '5', '6', 'Science', '', 'Practical'),
(42, '1', '5', '5', 'English', '', 'Practical'),
(41, '1', '5', '4', 'English', '', 'Normal'),
(40, '1', '5', '3', 'Hindi', '', 'Normal'),
(39, '1', '5', '2', 'Math', '', 'Normal'),
(38, '1', '5', '1', 'Science', '', 'Normal'),
(37, '1', '2', '2', 'Math', '', 'Normal'),
(36, '1', '2', '1', 'Science', '', 'Normal'),
(35, '1', '3', '6', 'Science', '', 'Practical'),
(50, '1', '6', '1', 'Science', '', 'Normal'),
(51, '1', '6', '2', 'Math', '', 'Normal'),
(52, '1', '15', '1', 'Science', '', 'Normal'),
(53, '1', '15', '2', 'Math', '', 'Normal'),
(54, '1', '15', '3', 'Hindi', '', 'Normal'),
(70, '1', '1', '6', 'Science', '', 'Practical'),
(66, '1', '4', '6', 'Science', '', 'Practical'),
(67, '1', '4', '7', 'Biology', '', 'Other'),
(71, '1', '1', '11', 'Math', '', 'Other'),
(72, '1', '1', '2', 'Math', '', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `collages`
--

CREATE TABLE `collages` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collages`
--

INSERT INTO `collages` (`id`, `userid`, `email`, `password`, `contact`, `name`) VALUES
(1, '54321', 'aeromus@gmail.com', '12345', '9935299542', 'Aeromus Technology Private Limited');

-- --------------------------------------------------------

--
-- Table structure for table `collage_account`
--

CREATE TABLE `collage_account` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `holder_name` varchar(200) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `opning_balance` int(11) DEFAULT NULL,
  `current_balance` int(11) DEFAULT NULL,
  `branch_name` varchar(20) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_account`
--

INSERT INTO `collage_account` (`id`, `collage_id`, `holder_name`, `account_number`, `bank_name`, `opning_balance`, `current_balance`, `branch_name`, `ifsc_code`) VALUES
(3, '1', 'Ved Prakash', '1001011500010767', 'PNB', 0, 0, 'Cornolganj', 'PUNB0100100'),
(5, '1', 'Aeromus Technology', '3456789488', 'BOB', 0, 0, '', ''),
(7, '1', 'sandeep', '78565667', 'ifsc', 0, 0, 'boi', 'kid123dfg'),
(8, '1', 'sandeep', '78565667', 'ifsc', 0, 0, 'boi', 'kid123dfg');

-- --------------------------------------------------------

--
-- Table structure for table `collage_class`
--

CREATE TABLE `collage_class` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `section` varchar(10) DEFAULT NULL,
  `classteacherid` varchar(10) DEFAULT NULL,
  `classteachername` varchar(200) DEFAULT NULL,
  `cl_id` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_class`
--

INSERT INTO `collage_class` (`id`, `collage_id`, `name`, `status`, `section`, `classteacherid`, `classteachername`, `cl_id`) VALUES
(1, '1', 'NURSERY', 'Active', '1', '1', 'Ved Prakash', NULL),
(2, '1', 'LKG', 'Active', '1', '16', 'Anju Umar', NULL),
(3, '1', 'UKG', 'Active', '1', NULL, NULL, NULL),
(4, '1', '1ST', 'Active', '1', NULL, NULL, NULL),
(5, '1', '2ND', 'Active', '1', NULL, NULL, NULL),
(6, '1', '3RD', 'Active', '1', NULL, NULL, NULL),
(7, '1', '4TH', 'Active', '1', NULL, NULL, NULL),
(8, '1', '5TH', 'Active', '1', NULL, NULL, NULL),
(9, '1', '6TH', 'Active', '1', NULL, NULL, NULL),
(10, '1', '7TH', 'Active', '1', NULL, NULL, NULL),
(11, '1', '8TH', 'Active', '1', NULL, NULL, NULL),
(12, '1', '9TH', 'Active', '1', NULL, NULL, NULL),
(13, '1', '10TH', 'Active', '1', NULL, NULL, NULL),
(14, '1', '11TH', 'Active', '1', NULL, NULL, NULL),
(15, '1', '12TH', 'Active', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collage_fee`
--

CREATE TABLE `collage_fee` (
  `id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `annual_fee` int(11) NOT NULL,
  `exam_fee` int(11) NOT NULL,
  `sports_fee` int(11) NOT NULL,
  `event_fee` int(11) NOT NULL,
  `buss_fee` int(11) NOT NULL,
  `hostel_fee` int(11) NOT NULL,
  `monthly_fee` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_fee`
--

INSERT INTO `collage_fee` (`id`, `collage_id`, `classid`, `annual_fee`, `exam_fee`, `sports_fee`, `event_fee`, `buss_fee`, `hostel_fee`, `monthly_fee`) VALUES
(1, 1, 1, 200, 500, 500, 500, 2000, 40000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `collage_fee_category`
--

CREATE TABLE `collage_fee_category` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `fee_category_eng` varchar(200) NOT NULL,
  `fee_category_hnd` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_fee_category`
--

INSERT INTO `collage_fee_category` (`id`, `collage_id`, `fee_category_eng`, `fee_category_hnd`) VALUES
(1, '1', 'Old Student', ''),
(2, '1', 'New Student', ''),
(3, '1', 'Fourth Child', '');

-- --------------------------------------------------------

--
-- Table structure for table `collage_fee_type`
--

CREATE TABLE `collage_fee_type` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `fee_type_eng` varchar(200) NOT NULL,
  `fee_type_hnd` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_fee_type`
--

INSERT INTO `collage_fee_type` (`id`, `collage_id`, `fee_type_eng`, `fee_type_hnd`) VALUES
(1, '1', 'Admition Fee', ''),
(2, '1', 'Tution Fee', ''),
(3, '1', 'Registration Fee', ''),
(4, '1', 'Practical Fee', '');

-- --------------------------------------------------------

--
-- Table structure for table `collage_period`
--

CREATE TABLE `collage_period` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `priod_name` varchar(20) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `sequence` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_period`
--

INSERT INTO `collage_period` (`id`, `collage_id`, `priod_name`, `start_time`, `end_time`, `sequence`) VALUES
(1, '1', '1', '9:30 AM', '10:30 AM', '1'),
(2, '1', '2', '10:30 AM', '11:30 AM', '1'),
(3, '1', 'Drink Break', '11:30 AM', '11:40 AM', '1'),
(4, '1', '3', '11:40 AM', '12:40 PM', '1'),
(5, '1', '4', '12:40 PM', '01:40 PM', '1'),
(6, '1', 'Lunch Break', '01:40 PM', '02:00 PM', '1'),
(14, '1', '5', '03:00 PM', '04:00 PM', '1'),
(13, '1', '6', '02:00 PM', '03:00 PM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `collage_sms`
--

CREATE TABLE `collage_sms` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `sms` int(11) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_sms`
--

INSERT INTO `collage_sms` (`id`, `collage_id`, `sms`, `date`) VALUES
(1, '1', 1000, '10/02/2020');

-- --------------------------------------------------------

--
-- Table structure for table `collage_subjects`
--

CREATE TABLE `collage_subjects` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `subject_name_eng` varchar(300) NOT NULL,
  `subject_name_hnd` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage_subjects`
--

INSERT INTO `collage_subjects` (`id`, `collage_id`, `subject_name_eng`, `subject_name_hnd`, `category`) VALUES
(1, '1', 'Science', '', 'Normal'),
(2, '1', 'Math', '', 'Normal'),
(12, '1', 'English', '', 'Normal'),
(5, '1', 'English', '', 'Practical'),
(6, '1', 'Science', '', 'Practical'),
(7, '1', 'Biology', '', 'Other'),
(14, '1', 'Urdu', '', 'Normal'),
(11, '1', 'Math', '', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `college_fee_discount_type`
--

CREATE TABLE `college_fee_discount_type` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `discount_type_eng` varchar(100) NOT NULL,
  `discount_type_hnd` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_fee_discount_type`
--

INSERT INTO `college_fee_discount_type` (`id`, `collage_id`, `discount_type_eng`, `discount_type_hnd`) VALUES
(1, '1', 'Physical Handicap', ''),
(2, '1', 'Special Discount', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `pid` varchar(10) DEFAULT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  `student_name` varchar(200) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `complaints` varchar(1000) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `enquirytype` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `fathers_name` varchar(100) DEFAULT NULL,
  `father_contact1` varchar(10) DEFAULT NULL,
  `father_contact2` varchar(10) DEFAULT NULL,
  `nextfollow` varchar(20) DEFAULT NULL,
  `remark1` varchar(300) DEFAULT NULL,
  `remark2` varchar(300) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `collage_id`, `enquirytype`, `date`, `student_name`, `fathers_name`, `father_contact1`, `father_contact2`, `nextfollow`, `remark1`, `remark2`, `status`) VALUES
(1, '1', '', '17/08/2020', 'Ved Prakash', 'Kamlesh Kumar', '9795217438', '', '11/08/2020', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `ex_name_eng` varchar(500) NOT NULL,
  `ex_name_hnd` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_type`
--

INSERT INTO `exam_type` (`id`, `collage_id`, `class_id`, `ex_name_eng`, `ex_name_hnd`) VALUES
(1, '1', '1', 'Quarterly Yearly', ''),
(2, '1', '1', 'Half Yearly', ''),
(3, '1', '1', 'Yearly', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_work`
--

CREATE TABLE `home_work` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `class_id` varchar(10) DEFAULT NULL,
  `subject_id` varchar(10) DEFAULT NULL,
  `class_name` varchar(100) DEFAULT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL,
  `images` varchar(500) DEFAULT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `updated_by` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_work`
--

INSERT INTO `home_work` (`id`, `collage_id`, `class_id`, `subject_id`, `class_name`, `subject_name`, `date`, `remark`, `images`, `description`, `type`, `updated_by`) VALUES
(1, '1', '1', '70', 'NURSERY', 'Science', '12/10/2020', '', '', 'Hello', 'Home Work', 'Admin'),
(2, '1', '1', '71', 'NURSERY', 'Math', '14/10/2020', 'Test', '', 'Waiting', 'Home Work', 'Admin'),
(3, '1', '2', '37', 'LKG', 'Math', '13/10/2020', '', '', '', 'Class Work', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(200) NOT NULL,
  `stream_eng` varchar(200) NOT NULL,
  `stream_hnd` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `collage_id`, `stream_eng`, `stream_hnd`) VALUES
(1, '1', 'Science', ''),
(2, '1', 'Art', ''),
(3, '1', 'Home Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `stream_group`
--

CREATE TABLE `stream_group` (
  `id` int(11) NOT NULL,
  `stream_id` varchar(10) NOT NULL,
  `group_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `student_name` varchar(200) DEFAULT NULL,
  `fathers_name` varchar(200) DEFAULT NULL,
  `mothers_name` varchar(200) DEFAULT NULL,
  `father_contact1` varchar(10) DEFAULT NULL,
  `father_contact2` varchar(10) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_admition` varchar(20) DEFAULT NULL,
  `admition_type` varchar(50) DEFAULT NULL,
  `admition_scheme` varchar(50) DEFAULT NULL,
  `fee_category` varchar(50) DEFAULT NULL,
  `bus` varchar(10) DEFAULT NULL,
  `hostel` varchar(10) DEFAULT NULL,
  `library` varchar(10) DEFAULT NULL,
  `sms_contact_no` varchar(10) DEFAULT NULL,
  `student_address` varchar(200) DEFAULT NULL,
  `village_city` varchar(20) DEFAULT NULL,
  `block` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `student_photo` varchar(100) DEFAULT NULL,
  `father_photo` varchar(100) DEFAULT NULL,
  `mother_photo` varchar(100) DEFAULT NULL,
  `remark1` varchar(300) DEFAULT NULL,
  `remark2` varchar(300) DEFAULT NULL,
  `remark3` varchar(300) DEFAULT NULL,
  `remark4` varchar(300) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `collage_id`, `userid`, `password`, `class`, `student_name`, `fathers_name`, `mothers_name`, `father_contact1`, `father_contact2`, `date_of_birth`, `gender`, `date_of_admition`, `admition_type`, `admition_scheme`, `fee_category`, `bus`, `hostel`, `library`, `sms_contact_no`, `student_address`, `village_city`, `block`, `district`, `state`, `pincode`, `landmark`, `student_photo`, `father_photo`, `mother_photo`, `remark1`, `remark2`, `remark3`, `remark4`, `status`) VALUES
(13, '1', '13392984', '$2y$10$bpNU0LG8XSIhf.m0DnwG4OQ1bxHzdWoudsiN9pu/fa0WfNyn5yhWm', '1', 'Ved Prakash', 'Ramesh Singh', '', '9935299542', '', '28/09/2020', '0', '', '1', 'Regular', '1', 'YES', 'YES', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active'),
(14, '1', '16271629', '$2y$10$hmq31GFWJBsfAL0yOKWuieGrL//JKQVaPb0H6edNaPyl8ViJuJ/tC', '1', 'Sumit Singh', 'Ramesh Singh', '', '9451661713', '9451661713', '28/09/2020', '0', '', '1', 'Regular', '1', 'YES', 'YES', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active'),
(12, '1', '15418273', '$2y$10$2X0j94VHpsENIToZMql7KOAjsZNnazb3EKxgY4vW//hydwqgy0zUq', '1', 'Vipin Kumar', 'Ramesh Singh', '', 'gghgf', '9451661713', '09/09/2020', '0', '', '1', 'Regular', '1', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee`
--

CREATE TABLE `student_fee` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `annual_fee` int(11) NOT NULL,
  `exam_fee` int(11) NOT NULL,
  `sports_fee` int(11) NOT NULL,
  `event_fee` int(11) NOT NULL,
  `buss_fee` int(11) NOT NULL,
  `hostel_fee` int(11) NOT NULL,
  `other_fee` int(11) NOT NULL,
  `July` int(11) NOT NULL,
  `August` int(11) NOT NULL,
  `September` int(11) NOT NULL,
  `October` int(11) NOT NULL,
  `November` int(11) NOT NULL,
  `December` int(11) NOT NULL,
  `January` int(11) NOT NULL,
  `February` int(11) NOT NULL,
  `March` int(11) NOT NULL,
  `April` int(11) NOT NULL,
  `May` int(11) NOT NULL,
  `June` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee`
--

INSERT INTO `student_fee` (`id`, `student_id`, `annual_fee`, `exam_fee`, `sports_fee`, `event_fee`, `buss_fee`, `hostel_fee`, `other_fee`, `July`, `August`, `September`, `October`, `November`, `December`, `January`, `February`, `March`, `April`, `May`, `June`) VALUES
(4, 15418273, 200, 500, 500, 500, 0, 0, 0, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000),
(5, 13392984, 200, 500, 500, 500, 2000, 40000, 0, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000),
(6, 16271629, 200, 500, 500, 500, 2000, 40000, 300, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) NOT NULL,
  `employee_name` varchar(300) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sms_contact` varchar(10) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `employee_qualification` varchar(200) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `emp_id_prefix` varchar(200) NOT NULL,
  `employee_photo` varchar(200) NOT NULL,
  `experience_letter` varchar(200) NOT NULL,
  `qualification_proof` varchar(200) NOT NULL,
  `id_proof` varchar(200) NOT NULL,
  `other_document1` varchar(200) NOT NULL,
  `other_document2` varchar(200) NOT NULL,
  `date_of_joining` varchar(100) NOT NULL,
  `rfid_no` varchar(100) NOT NULL,
  `categories` varchar(200) NOT NULL,
  `teaching_class_preferred` varchar(600) NOT NULL,
  `teaching_subject_preferred` varchar(600) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `pan_card` varchar(50) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_account_no` varchar(20) NOT NULL,
  `bank_ifsc` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `other_wages` varchar(100) NOT NULL,
  `pf_no` varchar(100) NOT NULL,
  `pf_amount_monthly` varchar(20) NOT NULL,
  `tds_amount_monthly` varchar(20) NOT NULL,
  `esci_amount_monthly` varchar(20) NOT NULL,
  `professional_tax_amount_monthly` varchar(20) NOT NULL,
  `hra_amount_monthly` varchar(20) NOT NULL,
  `da_amount_monthly` varchar(20) NOT NULL,
  `allowances_monthly` varchar(20) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `casual_eave` varchar(20) NOT NULL,
  `earn_leave` varchar(20) NOT NULL,
  `sick_leave` varchar(20) NOT NULL,
  `other_leave` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `collage_id`, `employee_name`, `gender`, `date_of_birth`, `father_name`, `email`, `sms_contact`, `contact_no`, `address`, `city`, `pin`, `state`, `country`, `employee_qualification`, `blood_group`, `emp_id_prefix`, `employee_photo`, `experience_letter`, `qualification_proof`, `id_proof`, `other_document1`, `other_document2`, `date_of_joining`, `rfid_no`, `categories`, `teaching_class_preferred`, `teaching_subject_preferred`, `designation`, `pan_card`, `aadhar_no`, `bank_name`, `bank_account_no`, `bank_ifsc`, `salary`, `other_wages`, `pf_no`, `pf_amount_monthly`, `tds_amount_monthly`, `esci_amount_monthly`, `professional_tax_amount_monthly`, `hra_amount_monthly`, `da_amount_monthly`, `allowances_monthly`, `remark`, `casual_eave`, `earn_leave`, `sick_leave`, `other_leave`, `status`) VALUES
(1, '1', 'Anju Kumari', '', '', '', '', '8738999691', '8738999691', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', '1,2,12,14,7,11,5,6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active'),
(2, '1', 'Ved Prakash', '', '', '', '', '9935299542', '993529952', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', '1,2,12,14,7,11,5,6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active'),
(22, '1', 'Dharmendra', '', '', '', '', '6390088889', '6390088889', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1,2,3,4,5,6,7,8,9012345,9,10,11,12,13,14,15', '1241,1,12,5,6,7,14,11,2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `course` varchar(10) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `timing` varchar(10) DEFAULT NULL,
  `mo_teacherid` varchar(10) DEFAULT NULL,
  `mo_lectureid` varchar(10) DEFAULT NULL,
  `mo_teacher` varchar(200) DEFAULT NULL,
  `mo_lecture` varchar(200) DEFAULT NULL,
  `tu_teacherid` varchar(10) DEFAULT NULL,
  `tu_lectureid` varchar(10) DEFAULT NULL,
  `tu_teacher` varchar(200) DEFAULT NULL,
  `tu_lecture` varchar(200) DEFAULT NULL,
  `we_teacherid` varchar(10) DEFAULT NULL,
  `we_lectureid` varchar(10) DEFAULT NULL,
  `we_teacher` varchar(200) DEFAULT NULL,
  `we_lecture` varchar(200) DEFAULT NULL,
  `th_teacherid` varchar(10) DEFAULT NULL,
  `th_lectureid` varchar(10) DEFAULT NULL,
  `th_teacher` varchar(200) DEFAULT NULL,
  `th_lecture` varchar(200) DEFAULT NULL,
  `fr_teacherid` varchar(10) DEFAULT NULL,
  `fr_lectureid` varchar(10) DEFAULT NULL,
  `fr_teacher` varchar(200) DEFAULT NULL,
  `fr_lecture` varchar(200) DEFAULT NULL,
  `st_teacherid` varchar(10) DEFAULT NULL,
  `st_lectureid` varchar(10) DEFAULT NULL,
  `st_teacher` varchar(200) DEFAULT NULL,
  `st_lecture` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `collage_id`, `course`, `branch`, `year`, `section`, `timing`, `mo_teacherid`, `mo_lectureid`, `mo_teacher`, `mo_lecture`, `tu_teacherid`, `tu_lectureid`, `tu_teacher`, `tu_lecture`, `we_teacherid`, `we_lectureid`, `we_teacher`, `we_lecture`, `th_teacherid`, `th_lectureid`, `th_teacher`, `th_lecture`, `fr_teacherid`, `fr_lectureid`, `fr_teacher`, `fr_lecture`, `st_teacherid`, `st_lectureid`, `st_teacher`, `st_lecture`) VALUES
(14, '1', '1', NULL, NULL, NULL, '2', '16', '7', 'Anju Umar', 'Biology', '16', '7', 'Anju Umar', 'Biology', '16', '7', 'Anju Umar', 'Biology', '16', '7', 'Anju Umar', 'Biology', '16', '7', 'Anju Umar', 'Biology', '16', '7', 'Anju Umar', 'Biology'),
(13, '1', '1', NULL, NULL, NULL, '1', '4', '2', 'Ved Prakash', 'Math', '4', '2', 'Ved Prakash', 'Math', '4', '2', 'Ved Prakash', 'Math', '4', '2', 'Ved Prakash', 'Math', '4', '2', 'Ved Prakash', 'Math', '4', '2', 'Ved Prakash', 'Math'),
(37, '1', '23', NULL, NULL, NULL, '1', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)'),
(15, '1', '1', NULL, NULL, NULL, '4', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology'),
(16, '1', '1', NULL, NULL, NULL, '5', '15', '3', 'Vipin Kumar', 'Hindi', '15', '3', 'Vipin Kumar', 'Hindi', '15', '3', 'Vipin Kumar', 'Hindi', '15', '3', 'Vipin Kumar', 'Hindi', '15', '3', 'Vipin Kumar', 'Hindi', '15', '3', 'Vipin Kumar', 'Hindi'),
(17, '1', '1', NULL, NULL, NULL, '7', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)'),
(18, '1', '1', NULL, NULL, NULL, '8', '1', '5', 'Ved Prakash', 'English (P)', '1', '5', 'Ved Prakash', 'English (P)', '1', '5', 'Ved Prakash', 'English (P)', '1', '5', 'Ved Prakash', 'English (P)', '1', '5', 'Ved Prakash', 'English (P)', '1', '5', 'Ved Prakash', 'English (P)'),
(19, '1', '2', NULL, NULL, NULL, '1', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)', '16', '6', 'Anju Umar', 'Science (P)'),
(20, '1', '2', NULL, NULL, NULL, '2', '15', '4', 'Vipin Kumar', 'English', '15', '4', 'Vipin Kumar', 'English', '15', '4', 'Vipin Kumar', 'English', '15', '4', 'Vipin Kumar', 'English', '15', '4', 'Vipin Kumar', 'English', '15', '4', 'Vipin Kumar', 'English'),
(21, '1', '2', NULL, NULL, NULL, '4', '1', '6', 'Ved Prakash', 'Science (P)', '1', '6', 'Ved Prakash', 'Science (P)', '1', '6', 'Ved Prakash', 'Science (P)', '1', '6', 'Ved Prakash', 'Science (P)', '1', '6', 'Ved Prakash', 'Science (P)', '1', '6', 'Ved Prakash', 'Science (P)'),
(22, '1', '2', NULL, NULL, NULL, '5', '16', '2', 'Anju Umar', 'Math', '16', '2', 'Anju Umar', 'Math', '16', '2', 'Anju Umar', 'Math', '16', '2', 'Anju Umar', 'Math', '16', '2', 'Anju Umar', 'Math', '16', '2', 'Anju Umar', 'Math'),
(23, '1', '2', NULL, NULL, NULL, '7', '15', '6', 'Vipin Kumar', 'Science (P)', '15', '6', 'Vipin Kumar', 'Science (P)', '15', '6', 'Vipin Kumar', 'Science (P)', '15', '6', 'Vipin Kumar', 'Science (P)', '15', '6', 'Vipin Kumar', 'Science (P)', '15', '6', 'Vipin Kumar', 'Science (P)'),
(24, '1', '2', NULL, NULL, NULL, '8', '16', '4', 'Anju Umar', 'English', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(25, '1', '3', NULL, NULL, NULL, '1', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(26, '1', '3', NULL, NULL, NULL, '2', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(27, '1', '3', NULL, NULL, NULL, '4', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(28, '1', '3', NULL, NULL, NULL, '5', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(29, '1', '3', NULL, NULL, NULL, '7', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(30, '1', '3', NULL, NULL, NULL, '8', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(31, '1', '4', NULL, NULL, NULL, '1', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(32, '1', '4', NULL, NULL, NULL, '2', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(33, '1', '4', NULL, NULL, NULL, '4', '1', '4', 'Ved Prakash', 'English', '1', '4', 'Ved Prakash', 'English', '1', '4', 'Ved Prakash', 'English', '1', '4', 'Ved Prakash', 'English', '1', '4', 'Ved Prakash', 'English', '1', '4', 'Ved Prakash', 'English'),
(34, '1', '4', NULL, NULL, NULL, '5', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science', '1', '1', 'Ved Prakash', 'Science'),
(35, '1', '4', NULL, NULL, NULL, '7', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology', '1', '7', 'Ved Prakash', 'Biology'),
(36, '1', '4', NULL, NULL, NULL, '8', '1', '3', 'Ved Prakash', 'Hindi', '1', '3', 'Ved Prakash', 'Hindi', '1', '3', 'Ved Prakash', 'Hindi', '1', '3', 'Ved Prakash', 'Hindi', '1', '3', 'Ved Prakash', 'Hindi', '1', '3', 'Ved Prakash', 'Hindi'),
(38, '1', '23', NULL, NULL, NULL, '2', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi'),
(39, '1', '23', NULL, NULL, NULL, '4', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(40, '1', '23', NULL, NULL, NULL, '5', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(41, '1', '23', NULL, NULL, NULL, '7', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(42, '1', '23', NULL, NULL, NULL, '8', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(43, '1', '23', NULL, NULL, NULL, '1', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)'),
(44, '1', '23', NULL, NULL, NULL, '2', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi'),
(45, '1', '23', NULL, NULL, NULL, '4', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(46, '1', '23', NULL, NULL, NULL, '5', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(47, '1', '23', NULL, NULL, NULL, '7', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(48, '1', '23', NULL, NULL, NULL, '8', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(49, '1', '23', NULL, NULL, NULL, '1', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)', '1', '43', 'Anju Kumari', 'Science (P)'),
(50, '1', '23', NULL, NULL, NULL, '2', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi', '22', '40', 'Dharmendra', 'Hindi'),
(51, '1', '23', NULL, NULL, NULL, '4', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(52, '1', '23', NULL, NULL, NULL, '5', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(53, '1', '23', NULL, NULL, NULL, '7', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology'),
(54, '1', '23', NULL, NULL, NULL, '8', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology', '1', '44', 'Anju Kumari', 'Biology');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `collage_id` varchar(10) DEFAULT NULL,
  `pertion_id` varchar(10) DEFAULT NULL,
  `pertion_type` varchar(20) DEFAULT NULL,
  `pertion_name` varchar(200) DEFAULT NULL,
  `office_account` varchar(100) DEFAULT NULL,
  `payment_for` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `pay_date` varchar(50) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `bank_name` varchar(200) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `check_number` varchar(20) DEFAULT NULL,
  `remark` varchar(1000) DEFAULT NULL,
  `bill_imge` varchar(100) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `collage_id`, `pertion_id`, `pertion_type`, `pertion_name`, `office_account`, `payment_for`, `address`, `contact`, `amount`, `pay_date`, `payment_mode`, `bank_name`, `account_number`, `check_number`, `remark`, `bill_imge`, `payment_type`) VALUES
(1, '1', '14', 'Student', '14,Ramesh Singh,,,13700,40000,2000', '1001011500010767', 'Other', '', '', 500, '09/09/2020', '', '', '', '', '', '', 'Credit'),
(2, '1', '14', 'Student', '14,Ramesh Singh,,,13700,40000,2000', '1001011500010767', 'Other', '', '', 200, '', '', '', '', '', '', '', 'Credit'),
(3, '1', '14', 'Student', '14,Ramesh Singh,,,13700,40000,2000', '1001011500010767', 'Other', '', '', 400, '', '', '', '', '', '', '', 'Credit'),
(4, '1', '14', 'Student', '14,Ramesh Singh,,,13700,40000,2000', '1001011500010767', 'Other', '', '', 500, '', '', '', '', '', '', '', 'Credit'),
(5, '1', '14', 'Student', '14,Ramesh Singh,,,13700,40000,2000', '1001011500010767', 'Other', '', '', 200, '16/09/2020', '', '', '', '', '', '', 'Credit'),
(6, '1', '22', 'Staff', '22,,6390088889', '1001011500010767', 'Education Fee', '', '6390088889', 500, '01/09/2020', '', '', '', '', '', '', 'Debit'),
(23, '1', '14', 'Student', 'Sumit Singh', '', 'Penality', '', '', 300, '12/07/2020', 'Penality', '', '', '', '', '', 'Initiate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_class`
--
ALTER TABLE `admin_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_teacher`
--
ALTER TABLE `attendance_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_wise_subjects`
--
ALTER TABLE `class_wise_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collages`
--
ALTER TABLE `collages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_account`
--
ALTER TABLE `collage_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_class`
--
ALTER TABLE `collage_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_fee`
--
ALTER TABLE `collage_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_fee_category`
--
ALTER TABLE `collage_fee_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_fee_type`
--
ALTER TABLE `collage_fee_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_period`
--
ALTER TABLE `collage_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_sms`
--
ALTER TABLE `collage_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_subjects`
--
ALTER TABLE `collage_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_fee_discount_type`
--
ALTER TABLE `college_fee_discount_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_work`
--
ALTER TABLE `home_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream_group`
--
ALTER TABLE `stream_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fee`
--
ALTER TABLE `student_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_class`
--
ALTER TABLE `admin_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `attendance_teacher`
--
ALTER TABLE `attendance_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_wise_subjects`
--
ALTER TABLE `class_wise_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `collages`
--
ALTER TABLE `collages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `collage_account`
--
ALTER TABLE `collage_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `collage_class`
--
ALTER TABLE `collage_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `collage_fee`
--
ALTER TABLE `collage_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `collage_fee_category`
--
ALTER TABLE `collage_fee_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `collage_fee_type`
--
ALTER TABLE `collage_fee_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collage_period`
--
ALTER TABLE `collage_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `collage_sms`
--
ALTER TABLE `collage_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `collage_subjects`
--
ALTER TABLE `collage_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `college_fee_discount_type`
--
ALTER TABLE `college_fee_discount_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home_work`
--
ALTER TABLE `home_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stream_group`
--
ALTER TABLE `stream_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `student_fee`
--
ALTER TABLE `student_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
