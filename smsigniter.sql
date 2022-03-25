-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_type` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_type`, `student_id`, `teacher_id`, `class_id`, `section_id`, `attendance_date`, `mark`) VALUES
(1, 2, 0, 1, 0, 0, '2019-01-02', 1),
(2, 2, 0, 1, 0, 0, '2019-01-10', 1),
(3, 1, 0, 0, 10, 3, '2021-06-11', 1),
(4, 2, 0, 2, 0, 0, '2021-06-11', 1),
(5, 2, 0, 4, 0, 0, '2021-06-11', 1),
(6, 2, 0, 2, 0, 0, '2021-06-01', 3),
(7, 2, 0, 4, 0, 0, '2021-06-01', 1),
(8, 2, 0, 2, 0, 0, '2021-06-02', 1),
(9, 2, 0, 4, 0, 0, '2021-06-02', 1),
(10, 2, 0, 2, 0, 0, '2021-06-03', 2),
(11, 2, 0, 4, 0, 0, '2021-06-03', 1),
(12, 2, 0, 2, 0, 0, '2021-06-04', 1),
(13, 2, 0, 4, 0, 0, '2021-06-04', 1),
(14, 2, 0, 2, 0, 0, '2021-06-05', 2),
(15, 2, 0, 4, 0, 0, '2021-06-05', 2),
(16, 2, 0, 2, 0, 0, '2021-06-06', 1),
(17, 2, 0, 4, 0, 0, '2021-06-06', 3),
(18, 2, 0, 2, 0, 0, '2021-06-07', 1),
(19, 2, 0, 4, 0, 0, '2021-06-07', 1),
(20, 2, 0, 2, 0, 0, '2021-06-08', 1),
(21, 2, 0, 4, 0, 0, '2021-06-08', 1),
(22, 2, 0, 2, 0, 0, '2021-06-09', 2),
(23, 2, 0, 4, 0, 0, '2021-06-09', 3),
(24, 2, 0, 2, 0, 0, '2021-06-10', 3),
(25, 2, 0, 4, 0, 0, '2021-06-10', 3),
(28, 2, 0, 5, 0, 0, '2021-06-01', 1),
(29, 2, 0, 6, 0, 0, '2021-06-01', 1),
(30, 2, 0, 7, 0, 0, '2021-06-01', 2),
(31, 2, 0, 8, 0, 0, '2021-06-01', 2),
(32, 2, 0, 9, 0, 0, '2021-06-01', 1),
(33, 2, 0, 10, 0, 0, '2021-06-01', 1),
(34, 2, 0, 11, 0, 0, '2021-06-01', 1),
(35, 2, 0, 12, 0, 0, '2021-06-01', 3),
(36, 2, 0, 13, 0, 0, '2021-06-01', 1),
(39, 2, 0, 5, 0, 0, '2021-06-02', 3),
(40, 2, 0, 6, 0, 0, '2021-06-02', 1),
(41, 2, 0, 7, 0, 0, '2021-06-02', 2),
(42, 2, 0, 8, 0, 0, '2021-06-02', 1),
(43, 2, 0, 9, 0, 0, '2021-06-02', 1),
(44, 2, 0, 10, 0, 0, '2021-06-02', 1),
(45, 2, 0, 11, 0, 0, '2021-06-02', 3),
(46, 2, 0, 12, 0, 0, '2021-06-02', 2),
(47, 2, 0, 13, 0, 0, '2021-06-02', 2),
(50, 2, 0, 5, 0, 0, '2021-06-03', 1),
(51, 2, 0, 6, 0, 0, '2021-06-03', 1),
(52, 2, 0, 7, 0, 0, '2021-06-03', 1),
(53, 2, 0, 8, 0, 0, '2021-06-03', 3),
(54, 2, 0, 9, 0, 0, '2021-06-03', 1),
(55, 2, 0, 10, 0, 0, '2021-06-03', 3),
(56, 2, 0, 11, 0, 0, '2021-06-03', 1),
(57, 2, 0, 12, 0, 0, '2021-06-03', 1),
(58, 2, 0, 13, 0, 0, '2021-06-03', 3),
(61, 2, 0, 5, 0, 0, '2021-06-04', 2),
(62, 2, 0, 6, 0, 0, '2021-06-04', 3),
(63, 2, 0, 7, 0, 0, '2021-06-04', 1),
(64, 2, 0, 8, 0, 0, '2021-06-04', 1),
(65, 2, 0, 9, 0, 0, '2021-06-04', 1),
(66, 2, 0, 10, 0, 0, '2021-06-04', 1),
(67, 2, 0, 11, 0, 0, '2021-06-04', 1),
(68, 2, 0, 12, 0, 0, '2021-06-04', 1),
(69, 2, 0, 13, 0, 0, '2021-06-04', 1),
(72, 2, 0, 5, 0, 0, '2021-06-05', 2),
(73, 2, 0, 6, 0, 0, '2021-06-05', 2),
(74, 2, 0, 7, 0, 0, '2021-06-05', 2),
(75, 2, 0, 8, 0, 0, '2021-06-05', 2),
(76, 2, 0, 9, 0, 0, '2021-06-05', 2),
(77, 2, 0, 10, 0, 0, '2021-06-05', 2),
(78, 2, 0, 11, 0, 0, '2021-06-05', 2),
(79, 2, 0, 12, 0, 0, '2021-06-05', 2),
(80, 2, 0, 13, 0, 0, '2021-06-05', 2),
(83, 2, 0, 5, 0, 0, '2021-06-06', 1),
(84, 2, 0, 6, 0, 0, '2021-06-06', 1),
(85, 2, 0, 7, 0, 0, '2021-06-06', 1),
(86, 2, 0, 8, 0, 0, '2021-06-06', 3),
(87, 2, 0, 9, 0, 0, '2021-06-06', 1),
(88, 2, 0, 10, 0, 0, '2021-06-06', 1),
(89, 2, 0, 11, 0, 0, '2021-06-06', 1),
(90, 2, 0, 12, 0, 0, '2021-06-06', 1),
(91, 2, 0, 13, 0, 0, '2021-06-06', 1),
(94, 2, 0, 5, 0, 0, '2021-06-07', 1),
(95, 2, 0, 6, 0, 0, '2021-06-07', 3),
(96, 2, 0, 7, 0, 0, '2021-06-07', 1),
(97, 2, 0, 8, 0, 0, '2021-06-07', 3),
(98, 2, 0, 9, 0, 0, '2021-06-07', 1),
(99, 2, 0, 10, 0, 0, '2021-06-07', 1),
(100, 2, 0, 11, 0, 0, '2021-06-07', 2),
(101, 2, 0, 12, 0, 0, '2021-06-07', 1),
(102, 2, 0, 13, 0, 0, '2021-06-07', 1),
(105, 2, 0, 5, 0, 0, '2021-06-08', 1),
(106, 2, 0, 6, 0, 0, '2021-06-08', 1),
(107, 2, 0, 7, 0, 0, '2021-06-08', 3),
(108, 2, 0, 8, 0, 0, '2021-06-08', 1),
(109, 2, 0, 9, 0, 0, '2021-06-08', 1),
(110, 2, 0, 10, 0, 0, '2021-06-08', 1),
(111, 2, 0, 11, 0, 0, '2021-06-08', 1),
(112, 2, 0, 12, 0, 0, '2021-06-08', 1),
(113, 2, 0, 13, 0, 0, '2021-06-08', 1),
(116, 2, 0, 5, 0, 0, '2021-06-09', 1),
(117, 2, 0, 6, 0, 0, '2021-06-09', 1),
(118, 2, 0, 7, 0, 0, '2021-06-09', 1),
(119, 2, 0, 8, 0, 0, '2021-06-09', 1),
(120, 2, 0, 9, 0, 0, '2021-06-09', 1),
(121, 2, 0, 10, 0, 0, '2021-06-09', 1),
(122, 2, 0, 11, 0, 0, '2021-06-09', 1),
(123, 2, 0, 12, 0, 0, '2021-06-09', 3),
(124, 2, 0, 13, 0, 0, '2021-06-09', 1),
(127, 2, 0, 5, 0, 0, '2021-06-10', 1),
(128, 2, 0, 6, 0, 0, '2021-06-10', 1),
(129, 2, 0, 7, 0, 0, '2021-06-10', 1),
(130, 2, 0, 8, 0, 0, '2021-06-10', 2),
(131, 2, 0, 9, 0, 0, '2021-06-10', 1),
(132, 2, 0, 10, 0, 0, '2021-06-10', 3),
(133, 2, 0, 11, 0, 0, '2021-06-10', 1),
(134, 2, 0, 12, 0, 0, '2021-06-10', 1),
(135, 2, 0, 13, 0, 0, '2021-06-10', 2),
(138, 2, 0, 5, 0, 0, '2021-06-11', 1),
(139, 2, 0, 6, 0, 0, '2021-06-11', 2),
(140, 2, 0, 7, 0, 0, '2021-06-11', 2),
(141, 2, 0, 8, 0, 0, '2021-06-11', 3),
(142, 2, 0, 9, 0, 0, '2021-06-11', 1),
(143, 2, 0, 10, 0, 0, '2021-06-11', 1),
(144, 2, 0, 11, 0, 0, '2021-06-11', 1),
(145, 2, 0, 12, 0, 0, '2021-06-11', 1),
(146, 2, 0, 13, 0, 0, '2021-06-11', 1),
(147, 1, 3, 0, 9, 6, '2021-06-01', 1),
(148, 1, 5, 0, 9, 6, '2021-06-01', 1),
(149, 1, 3, 0, 9, 6, '2021-06-02', 1),
(150, 1, 5, 0, 9, 6, '2021-06-02', 3),
(151, 1, 3, 0, 9, 6, '2021-06-03', 1),
(152, 1, 5, 0, 9, 6, '2021-06-03', 1),
(153, 1, 3, 0, 9, 6, '2021-06-04', 1),
(154, 1, 5, 0, 9, 6, '2021-06-04', 2),
(155, 1, 3, 0, 9, 6, '2021-06-05', 2),
(156, 1, 5, 0, 9, 6, '2021-06-05', 2),
(157, 1, 3, 0, 9, 6, '2021-06-06', 1),
(158, 1, 5, 0, 9, 6, '2021-06-06', 3),
(159, 1, 3, 0, 9, 6, '2021-06-07', 1),
(160, 1, 5, 0, 9, 6, '2021-06-07', 1),
(161, 1, 3, 0, 9, 6, '2021-06-08', 1),
(162, 1, 5, 0, 9, 6, '2021-06-08', 1),
(163, 1, 3, 0, 9, 6, '2021-06-09', 2),
(164, 1, 5, 0, 9, 6, '2021-06-09', 3),
(165, 1, 3, 0, 9, 6, '2021-06-10', 1),
(166, 1, 5, 0, 9, 6, '2021-06-10', 1),
(168, 1, 1, 0, 10, 3, '2021-06-01', 3),
(169, 1, 1, 0, 10, 3, '2021-06-02', 1),
(170, 1, 1, 0, 10, 3, '2021-06-03', 3),
(171, 1, 1, 0, 10, 3, '2021-06-04', 1),
(172, 1, 1, 0, 10, 3, '2021-06-05', 2),
(173, 1, 1, 0, 10, 3, '2021-06-06', 1),
(174, 1, 1, 0, 10, 3, '2021-06-07', 1),
(175, 1, 1, 0, 10, 3, '2021-06-08', 2),
(176, 1, 1, 0, 10, 3, '2021-06-09', 1),
(177, 1, 1, 0, 10, 3, '2021-06-10', 3),
(178, 1, 1, 0, 10, 3, '2021-06-11', 2),
(179, 1, 1, 0, 10, 3, '2021-06-12', 2),
(180, 1, 13, 0, 10, 3, '2021-06-12', 2),
(181, 1, 1, 0, 10, 3, '2021-06-13', 1),
(182, 1, 13, 0, 10, 3, '2021-06-13', 3),
(183, 2, 0, 2, 0, 0, '2021-06-12', 2),
(184, 2, 0, 4, 0, 0, '2021-06-12', 2),
(185, 2, 0, 5, 0, 0, '2021-06-12', 2),
(186, 2, 0, 6, 0, 0, '2021-06-12', 2),
(187, 2, 0, 7, 0, 0, '2021-06-12', 2),
(188, 2, 0, 8, 0, 0, '2021-06-12', 2),
(189, 2, 0, 9, 0, 0, '2021-06-12', 2),
(190, 2, 0, 10, 0, 0, '2021-06-12', 2),
(191, 2, 0, 11, 0, 0, '2021-06-12', 2),
(192, 2, 0, 12, 0, 0, '2021-06-12', 2),
(193, 2, 0, 13, 0, 0, '2021-06-12', 2),
(194, 2, 0, 14, 0, 0, '2021-06-12', 2),
(195, 2, 0, 2, 0, 0, '2021-06-13', 1),
(196, 2, 0, 4, 0, 0, '2021-06-13', 1),
(197, 2, 0, 5, 0, 0, '2021-06-13', 1),
(198, 2, 0, 6, 0, 0, '2021-06-13', 3),
(199, 2, 0, 7, 0, 0, '2021-06-13', 2),
(200, 2, 0, 8, 0, 0, '2021-06-13', 1),
(201, 2, 0, 9, 0, 0, '2021-06-13', 1),
(202, 2, 0, 10, 0, 0, '2021-06-13', 3),
(203, 2, 0, 11, 0, 0, '2021-06-13', 2),
(204, 2, 0, 12, 0, 0, '2021-06-13', 1),
(205, 2, 0, 13, 0, 0, '2021-06-13', 1),
(206, 2, 0, 14, 0, 0, '2021-06-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `numeric_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `numeric_name`) VALUES
(1, 'One', '01'),
(2, 'Two', '02'),
(3, 'Three', '03'),
(4, 'Four', '04'),
(5, 'Five', '05'),
(6, 'Six', '06'),
(7, 'Seven', '07'),
(8, 'Eight', '08'),
(9, 'Nine', '09'),
(10, 'Ten', '10');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(11) NOT NULL,
  `expenses_name` varchar(255) NOT NULL,
  `expenses_amount` varchar(255) NOT NULL,
  `expenses_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenses_id`, `expenses_name`, `expenses_amount`, `expenses_name_id`) VALUES
(1, 'Classroom Wirings', '165', 1),
(2, 'Fuel Cost', '523', 2),
(3, 'Vehicle Repair', '368', 2);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_name`
--

CREATE TABLE `expenses_name` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses_name`
--

INSERT INTO `expenses_name` (`id`, `date`, `name`, `total_amount`) VALUES
(1, '2021-06-10', 'Wirings', '165.00'),
(2, '2021-06-12', 'Fuels and V.Repair Cost', '891.00');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `marksheet_id` int(11) NOT NULL,
  `marksheet_name` varchar(255) NOT NULL,
  `marksheet_date` date NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`marksheet_id`, `marksheet_name`, `marksheet_date`, `class_id`) VALUES
(1, 'First Terminal', '2021-01-05', 10),
(2, 'First Terminal', '2021-01-05', 9),
(3, 'Second Terminal', '2021-05-19', 9);

-- --------------------------------------------------------

--
-- Table structure for table `marksheet_student`
--

CREATE TABLE `marksheet_student` (
  `marksheet_student_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `obtain_mark` varchar(255) NOT NULL,
  `marksheet_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksheet_student`
--

INSERT INTO `marksheet_student` (`marksheet_student_id`, `student_id`, `subject_id`, `obtain_mark`, `marksheet_id`, `class_id`, `section_id`) VALUES
(7, 1, 2, '75', 1, 10, 3),
(8, 1, 3, '70', 1, 10, 3),
(9, 1, 4, '65', 1, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `paid_amount` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `payment_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `paid_amount`, `status`, `payment_type`, `payment_date`, `class_id`, `section_id`, `student_id`, `payment_name_id`) VALUES
(1, '3250', 1, 1, '2021-06-11', 10, 3, 1, 1),
(2, '2230', 1, 1, '2021-06-11', 9, 6, 3, 2),
(3, '2230', 1, 1, '2021-06-11', 9, 6, 5, 2),
(4, '550', 1, 1, '2021-06-10', 1, 2, 8, 3),
(5, '', 0, 0, '0000-00-00', 8, 10, 6, 4),
(6, '2250', 1, 1, '2021-06-11', 9, 5, 2, 5),
(7, '', 0, 0, '0000-00-00', 9, 12, 4, 6),
(8, '0', 2, 2, '2021-06-11', 9, 6, 3, 7),
(9, '150', 1, 1, '2021-06-10', 9, 6, 5, 7),
(10, '185', 1, 1, '2021-06-11', 9, 12, 4, 8),
(11, '1210', 1, 1, '2021-06-12', 10, 3, 1, 9),
(12, '1210', 1, 1, '2021-06-12', 10, 3, 13, 9),
(13, '1210', 0, 2, '2021-06-10', 10, 3, 13, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment_name`
--

CREATE TABLE `payment_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_name`
--

INSERT INTO `payment_name` (`id`, `name`, `start_date`, `end_date`, `total_amount`, `type`) VALUES
(1, 'Monthly Fees', '2021-05-12', '2021-06-12', '3250', 1),
(2, 'Monthly Fees', '2021-05-11', '2021-06-13', '2230', 2),
(3, 'Monthly Fees', '2021-05-03', '2021-06-08', '550', 1),
(4, 'Extra Tution', '2021-05-11', '2021-06-14', '425', 1),
(5, 'Monthly Fees', '2021-05-04', '2021-06-11', '2250', 1),
(6, 'Transportation', '2021-05-03', '2021-06-04', '191', 2),
(7, 'Cafeteria', '2021-05-04', '2021-07-08', '150', 2),
(8, 'Cafeteria', '2021-05-12', '2021-06-18', '185', 1),
(9, 'Textbook and School Supplies', '2021-04-06', '2021-06-10', '1210', 2),
(10, 'Monthly Fees', '2021-05-05', '2021-06-10', '2120', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `class_id`, `teacher_id`) VALUES
(1, 'A', 3, 12),
(2, 'A', 1, 12),
(3, 'A', 10, 2),
(4, 'B', 10, 4),
(5, 'A', 9, 2),
(6, 'B', 9, 5),
(7, 'A', 7, 10),
(8, 'B', 7, 11),
(9, 'C', 7, 7),
(10, 'A', 8, 12),
(11, 'B', 8, 7),
(12, 'C', 9, 11),
(13, 'B', 1, 8),
(14, 'C', 8, 13);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `register_date` date NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `register_date`, `class_id`, `section_id`, `fname`, `lname`, `image`, `age`, `dob`, `contact`, `email`, `address`, `city`, `country`) VALUES
(1, '2021-02-04', 10, 3, 'Dale', 'Larson', 'assets/images/default/default_avatar.png', '16', '2005-06-10', '7025690145', 'larson@gmail.com', '717  Garrett Street', 'Kalamazoo', 'US'),
(2, '2021-02-03', 9, 5, 'Darlene', 'Zang', 'assets/images/students/1190760c4cf4652f41.png', '14', '2007-12-12', '7025869696', 'zandr@gmail.com', '1838  Angie Drive', 'Santa Ana', 'US'),
(3, '2019-01-03', 9, 6, 'Dorothy', 'Wyche', 'assets/images/default/default_avatar.png', '15', '2006-02-28', '7025458540', 'wyche@gmail.com', '4222  Amethyst Drive', 'Lansing', 'US'),
(4, '2018-05-01', 9, 12, 'Rebecca', 'Neal', 'assets/images/default/default_avatar.png', '15', '2006-10-11', '7025658700', 'rebecca@gmail.com', '3128  Trails End Road', 'Pompano Beach', 'US'),
(5, '2019-06-03', 9, 6, 'Brandon', 'Garner', 'assets/images/default/default_avatar.png', '15', '2006-05-28', '7023658954', 'brandon@gmail.com', '4788  Thorn Street', 'Frannie', 'US'),
(6, '2019-04-02', 8, 10, 'Kelly', 'Johnson', 'assets/images/default/default_avatar.png', '14', '2007-07-28', '7014785470', 'kellyj@gmail.com', '3841  Havanna Street', 'Greensboro', 'US'),
(7, '2018-04-02', 8, 11, 'Charles', 'Latshaw', 'assets/images/default/default_avatar.png', '14', '2007-08-12', '7014589658', 'charlesl@gmail.com', '1098  Mulberry Lane', 'Miramar', 'US'),
(8, '2021-01-11', 1, 2, 'Cassie', 'Dugh', 'assets/images/default/default_avatar.png', '7', '2014-11-11', '7458965785', 'dughparental@gmail.com', '317  Oliverio Drive', 'La Harpe', 'US'),
(9, '2021-01-04', 1, 13, 'Peter', 'Plasenki', 'assets/images/default/default_avatar.png', '7', '2014-01-29', '7024589666', 'plasenkipar@gmail.com', '463  Collins Street', 'Tampa', 'US'),
(10, '2021-02-01', 3, 1, 'Jullie', 'Conte', 'assets/images/default/default_avatar.png', '9', '2012-07-12', '7025555540', 'conteparn@gmail.com', '2117  Mattson Street', 'Tigard', 'US'),
(11, '2021-03-02', 8, 10, 'Rene', 'Harrington', 'assets/images/default/default_avatar.png', '13', '2007-10-10', '702457777', 'harriren@gmail.com', '755  College View', 'Cisne', 'US'),
(12, '2021-03-02', 8, 11, 'Brian', 'Austin', 'assets/images/default/default_avatar.png', '14', '2007-02-02', '7025554789', 'austinb@gmail.com', '3730  Circle Drive', 'MULLEN', 'US'),
(13, '2021-02-09', 10, 3, 'Stanley', 'Keller', 'assets/images/students/51660c4ee9a96de9.png', '16', '2005-02-24', '7012225600', 'kellerpar@gmail.com', '4863 Pritchard Court', 'Rochester', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_mark` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `total_mark`, `class_id`, `teacher_id`) VALUES
(2, 'Computer Applications', '100', 10, 4),
(3, 'Mathematics', '100', 10, 6),
(4, 'Science', '100', 10, 2),
(5, 'Science', '100', 9, 9),
(6, 'Social Studies', '100', 9, 11),
(7, 'Computer', '100', 9, 5),
(8, 'Social Studies', '100', 10, 10),
(9, 'Environmental Science', '100', 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `register_date` date NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `job_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `register_date`, `fname`, `lname`, `image`, `date_of_birth`, `age`, `contact`, `email`, `address`, `city`, `country`, `job_type`) VALUES
(2, '2020-06-02', 'Nicole', 'Roberts', 'assets/images/teachers/1078560c49c9c781d4.jpg', '1971-06-01', '50', '7012225480', 'nicole@gmail.com', '2087  Brentwood Drive', 'OAKLAND', 'US', 1),
(4, '2020-12-16', 'Gregory', 'Webb', 'assets/images/teachers/903660c49cab7bfb2.jpg', '1986-06-03', '35', '7027058025', 'webb@gmail.com', '2766  Kildeer Drive', 'BENTON', 'US', 1),
(5, '2021-04-06', 'Lois', 'Williams', 'assets/images/default/default_avatar.png', '1985-06-12', '36', '7025555580', 'lois2@gmail.com', '4260 Pringle Drive', 'Chicago', 'US', 2),
(6, '2020-10-13', 'Ralph', 'Boyd', 'assets/images/default/default_avatar.png', '1981-01-21', '40', '7014696980', 'ralphboh@gmail.com', '3532 James Street', 'Lydonville', 'US', 1),
(7, '2021-01-04', 'Cara', 'Martin', 'assets/images/default/default_avatar.png', '1984-02-04', '37', '7821456980', 'cmartinn@gmail.com', '1521 Ross Street', 'Woodburn', 'US', 1),
(8, '2021-06-01', 'Kelly', 'Brand', 'assets/images/default/default_avatar.png', '1984-02-25', '37', '7014741111', 'brandke@gmail.com', '2069 Kooter Lane', 'Harrisburg', 'US', 2),
(9, '2021-05-03', 'Marie', 'Reyes', 'assets/images/default/default_avatar.png', '1985-03-14', '36', '7014580001', 'reyesm@gmail.com', '3370 Maxwell Farm Road', 'Waynesboro', 'US', 1),
(10, '2019-10-15', 'Jessey', 'Harrel', 'assets/images/default/default_avatar.png', '1984-11-30', '35', '7014855550', 'jesse@gmail.com', '76 Heron Way', 'Milwaukie', 'US', 1),
(11, '2020-10-11', 'Elizabeth', 'Mercer', 'assets/images/default/default_avatar.png', '1982-01-09', '39', '7025698550', 'mercer@gmail.com', '4238 Pointe Lane', 'Miami', 'US', 1),
(12, '2020-06-03', 'Will', 'Williams', 'assets/images/default/default_avatar.png', '1989-04-30', '32', '7069696980', 'williams@gmail.com', '4238 Pointe Lane', 'Miami', 'US', 1),
(13, '2021-05-03', 'David', 'Percy', 'assets/images/default/default_avatar.png', '1977-10-11', '44', '7014586690', 'dpercy@gmail.com', '7016 Barlett Avenue', 'Dorris', 'US', 1),
(14, '2021-01-20', 'John', 'Kauffman', 'assets/images/teachers/150160c4ef1db577d.png', '1980-03-24', '41', '7014447458', 'kauffm@gmail.com', '3027 White Lane', 'Macon', 'US', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fname`, `lname`, `email`) VALUES
(1, 'admin', 'd00f5d5217896fb7fd601412cb890830', 'Admin', 'Liam', 'adminl@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`);

--
-- Indexes for table `expenses_name`
--
ALTER TABLE `expenses_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`marksheet_id`);

--
-- Indexes for table `marksheet_student`
--
ALTER TABLE `marksheet_student`
  ADD PRIMARY KEY (`marksheet_student_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_name`
--
ALTER TABLE `payment_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expenses_name`
--
ALTER TABLE `expenses_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `marksheet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marksheet_student`
--
ALTER TABLE `marksheet_student`
  MODIFY `marksheet_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment_name`
--
ALTER TABLE `payment_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
