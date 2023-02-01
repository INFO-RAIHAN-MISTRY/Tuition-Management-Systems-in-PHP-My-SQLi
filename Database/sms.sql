-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 02:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(250) NOT NULL,
  `c_name` text NOT NULL,
  `c_sub` text NOT NULL,
  `c_price` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_name`, `c_sub`, `c_price`) VALUES
(6, 'BCA-1', 'PYTHON, JAVA, C, C++', 1000),
(7, 'MCA-1', 'PYTHON, JAVA, C, ENTREPRENEUR ', 1400),
(9, 'R PROGRAMMING', 'R,C,C++', 500);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(250) NOT NULL,
  `student_name` text NOT NULL,
  `student_email` varchar(250) NOT NULL,
  `student_phone` varchar(250) NOT NULL,
  `student_address` text NOT NULL,
  `student_identity` varchar(250) NOT NULL,
  `student_identity_number` varchar(250) NOT NULL,
  `student_course` varchar(250) NOT NULL,
  `student_course_price` int(250) NOT NULL,
  `course_duration` int(250) NOT NULL,
  `total_fees` int(250) NOT NULL,
  `pending_fees` int(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_email`, `student_phone`, `student_address`, `student_identity`, `student_identity_number`, `student_course`, `student_course_price`, `course_duration`, `total_fees`, `pending_fees`, `date`) VALUES
(12, 'Raihan Mistry', 'raihanmistry2023@gmail.com', '9064201503', 'INDIA, WEST BENGAL, KOLKATA', 'Passport', 'ABCDE1234M', 'BCA-1', 1000, 10, 10000, 0, '2023-01-28 20:33:58'),
(13, 'Raihan Mistry', 'raihanmistry@gmail.co', '9064259801', 'INDIA, WEST BENGAL, KOLKATA', 'Votar ID Card', 'ABCDE1234M', 'BCA-1', 3000, 6, 18000, 14000, '2023-01-28 20:34:38'),
(15, 'Hafizul Islam Mistry', 'hm@gmail.com', '9564980106', 'INDIA, WEST BENGAL, KOLKATA', 'Adhar Card', 'GNRPM0778P', 'BCA-1', 3000, 10, 30000, 8500, '2023-01-28 20:56:54'),
(16, 'Rohim Mistry', 'rohim@gmail.com', '9064259801', 'INDIA, WEST BENGAL, KOLKATA', 'Pan Card', 'GNRPM0778P', 'BCA-1', 3000, 4, 12000, 11000, '2023-01-28 20:57:42'),
(17, 'SOUMYADIP DEBNATH', 'soumyadipdebnath42@gmail.com', '6296509789', 'BASIRHAT,DANDIRHAT AMTALA, NORTH 24 PARGANAS,743412', 'Adhar Card', '445678236587', 'R PROGRAMMING', 500, 6, 3000, 2000, '2023-02-01 18:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(250) NOT NULL,
  `st_name` varchar(250) NOT NULL,
  `st_email` varchar(250) NOT NULL,
  `st_pass` varchar(250) NOT NULL,
  `st_cpass` varchar(250) NOT NULL,
  `st_check` varchar(250) NOT NULL,
  `st_role` varchar(250) NOT NULL DEFAULT 'user',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `st_name`, `st_email`, `st_pass`, `st_cpass`, `st_check`, `st_role`, `date`) VALUES
(3, 'Raihan Mistry', 'raihanmistry2020@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$vmxy5GYH28YcY17l6LEFGOi6eNoBHT3A3h4FF6Cp0.zmH1nbrui7m', 'checked', 'admin', '2023-01-26'),
(4, 'Raihan Mistry', 'raihanmistry@gmail.co', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$B1rvvqB0TCLkst/IHub4DuuAArow/SHzRHDim8gSuM1mGL504477G', 'checked', 'user', '2023-01-26'),
(5, 'khodeja Khatun ', 'khodeja@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$MxP2gqVC8WIgwMP7T2HnLenJZBSscmXvpp2cUYcE8/VNlYjjdOrcu', 'checked', 'user', '2023-01-26'),
(6, 'Hafizul Islam Mistry', 'hm@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$jRfOGvvWE3mVsbWgQN26Ju2zCuVQVWO7IKC.Mm1TIK9Ts9YFtPrU2', 'checked', 'user', '2023-01-26'),
(7, 'Raihan Mistry', 'raihanmistry2023@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$aYcY2hDnR0cGwxquSdl5/.ldecXOkSoFgZR3uX/wr3/UcFzX.FbF2', 'checked', 'user', '2023-01-26'),
(8, 'Rohim Mistry', 'rohim@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$Nl3KhkPKsf3oWiE1F9ukk.P3sercDMMeBMn4e4EGdtsB6YRAkygXO', 'checked', 'user', '2023-01-26'),
(9, 'Harry Khan', 'harry@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$7LUt775cBFYceRaBjcK7ZOZ9XtvPPFPPJRNqzKEt.GLGwBo997cXa', 'checked', 'user', '2023-01-26'),
(10, 'SOUMYADIP DEBNATH', 'soumyadipdebnath42@gmail.com', '$2y$10$BEsiVQgstHJw2QXgsJZZPuV0yKDOm2VPcOHIm7sMBl4QiJKBMadCq', '$2y$10$Qv/L0zYoHgnLGjVFJIXP6ecP.mZGK9EKKIe0Z4gE1EIr9wDi9Fhxe', 'checked', 'user', '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(250) NOT NULL,
  `trans_id` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_email` varchar(250) NOT NULL,
  `fees` int(250) NOT NULL,
  `fees_remark` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `trans_id`, `student_name`, `student_email`, `fees`, `fees_remark`, `date`) VALUES
(60, 'trx63d551eb4424e', 'Hafizul Islam Mistry', 'hm@gmail.com', 4000, 'Exam Fees', '2023-01-28 22:18:43'),
(61, 'trx63d55540c9df3', 'Hafizul Islam Mistry', 'hm@gmail.com', 1500, 'Monthly Fees', '2023-01-28 22:32:56'),
(62, 'trx63d555ba3815b', 'Hafizul Islam Mistry', 'hm@gmail.com', 500, 'Monthly Fees', '2023-01-28 22:34:58'),
(63, 'trx63d55620b753d', 'khodeja Khatun ', 'khodeja@gmail.com', 1500, 'Monthly Fees', '2023-01-28 22:36:40'),
(64, 'trx63d564dc48ef7', 'khodeja Khatun ', 'khodeja@gmail.com', 3500, 'Yearly Fees', '2023-01-28 23:39:32'),
(65, 'trx63d5653a8de8e', 'Hafizul Islam Mistry', 'hm@gmail.com', 4000, 'Advance Fees', '2023-01-28 23:41:06'),
(66, 'trx63d5e88797ef2', 'Raihan Mistry', 'raihanmistry2023@gmail.com', 2000, 'Advance Fees', '2023-01-29 09:01:19'),
(67, 'trx63d5e89849a47', 'Hafizul Islam Mistry', 'hm@gmail.com', 5000, 'Yearly Fees', '2023-01-29 09:01:36'),
(68, 'trx63d5e8fc8233b', 'Rohim Mistry', 'rohim@gmail.com', 1000, 'Monthly Fees', '2023-01-29 09:03:16'),
(69, 'trx63d5faf9b1ca1', 'Hafizul Islam Mistry', 'hm@gmail.com', 5000, 'Monthly Fees', '2023-01-29 10:20:01'),
(70, 'trx63d95bbe0053c', 'Hafizul Islam Mistry', 'hm@gmail.com', 1500, 'Monthly Fees', '2023-01-31 23:49:42'),
(71, 'trx63da0636cbb5b', 'Raihan Mistry', 'raihanmistry@gmail.co', 1500, 'Advance Fees', '2023-02-01 11:57:02'),
(72, 'trx63da22966377f', 'Raihan Mistry', 'raihanmistry2023@gmail.com', 100, 'Monthly Fees', '2023-02-01 13:58:06'),
(73, 'trx63da22dc816ad', 'Raihan Mistry', 'raihanmistry@gmail.co', 500, 'Advance Fees', '2023-02-01 13:59:16'),
(74, 'trx63da22e7460a1', 'Raihan Mistry', 'raihanmistry@gmail.co', 2000, 'Exam Fees', '2023-02-01 13:59:27'),
(75, 'trx63da25e648e8a', 'Raihan Mistry', 'raihanmistry2023@gmail.com', 7000, 'Monthly Fees', '2023-02-01 14:12:14'),
(76, 'trx63da25f121924', 'Raihan Mistry', 'raihanmistry2023@gmail.com', 900, 'Select Purpose', '2023-02-01 14:12:25'),
(77, 'trx63da6424dd640', 'SOUMYADIP DEBNATH', 'soumyadipdebnath42@gmail.com', 1000, 'Monthly Fees', '2023-02-01 18:37:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`,`st_email`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
