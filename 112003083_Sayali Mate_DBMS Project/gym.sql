-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 07, 2022 at 12:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_username` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_username`, `admin_password`) VALUES
('admin', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_username`);
COMMIT;

CREATE TABLE `instructor` (
  `i_id` int(20) NOT NULL,
  `i_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`i_id`, `i_name`) VALUES
(101, 'Yogesh'),
(102, 'Anand'),
(103, 'Suresh'),
(104, 'Sameer'),
(105, 'Sudhir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`i_id`);
COMMIT;

CREATE TABLE `membership` (
  `email` varchar(100) NOT NULL,
  `joining_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`email`, `joining_date`, `end_date`) VALUES
('ashwinimate77@gmail.com', '2022-11-10', '2023-05-10'),
('sayalimate02@gmail.com', '2022-11-02', '2023-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`email`,`joining_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

CREATE TABLE `membership_details` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_details`
--

INSERT INTO `membership_details` (`type_id`, `type_name`, `amount`) VALUES
(1, '3 Months', 500),
(2, '6 Months', 1000),
(3, '12 Months', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership_details`
--
ALTER TABLE `membership_details`
  ADD PRIMARY KEY (`type_id`);
COMMIT;

CREATE TABLE `payment` (
  `email` varchar(100) NOT NULL,
  `membership_type_id` int(11) DEFAULT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`email`, `membership_type_id`, `payment_date`) VALUES
('ashwinimate77@gmail.com', 2, '2022-11-18'),
('sayalimate02@gmail.com', 1, '2022-11-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`email`,`payment_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

CREATE TABLE `payment_amount` (
  `email` varchar(100) NOT NULL,
  `membership_type_id` int(11) NOT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_amount`
--

INSERT INTO `payment_amount` (`email`, `membership_type_id`, `amount`) VALUES
('ashwinimate77@gmail.com', 2, 1000),
('sayalimate02@gmail.com', 1, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_amount`
--
ALTER TABLE `payment_amount`
  ADD PRIMARY KEY (`email`,`membership_type_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_amount`
--
ALTER TABLE `payment_amount`
  ADD CONSTRAINT `payment_amount_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

CREATE TABLE `phone` (
  `phone_no` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_no`, `name`) VALUES
(7263726372, 'Ashwini Mate'),
(9325525720, 'Sayali Mate'),
(9813713873, 'Ashwini Mate'),
(9881526271, 'Sayali Mate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_no`,`name`) USING BTREE;
COMMIT;

CREATE TABLE `user` (
  `gender` varchar(10) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` bigint(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `joining_date` date NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `membership_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`gender`, `street`, `city`, `pincode`, `email`, `dateofbirth`, `joining_date`, `phone_no`, `membership_type_id`) VALUES
('Female', 'Navi peth', 'Pune', 411030, 'ashwinimate77@gmail.com', '2009-02-17', '2022-11-10', 7263726372, 2),
('Female', 'Navi peth', 'Pune', 411030, 'ashwinimate77@gmail.com', '2009-02-17', '2022-11-10', 9813713873, 2),
('Female', 'Satara rd', 'Pune', 411046, 'sayalimate02@gmail.com', '2010-02-09', '2022-11-02', 9325525720, 1),
('Female', 'Satara rd', 'Pune', 411046, 'sayalimate02@gmail.com', '2010-02-09', '2022-11-02', 9881526271, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`,`phone_no`) USING BTREE;
COMMIT;

CREATE TABLE `workout` (
  `i_id` bigint(20) NOT NULL,
  `workout_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`i_id`, `workout_id`) VALUES
(101, 304),
(102, 302),
(102, 305),
(103, 301),
(104, 303),
(105, 302);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`i_id`,`workout_id`);
COMMIT;

CREATE TABLE `workout_plan` (
  `workout_id` bigint(20) NOT NULL,
  `workout_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout_plan`
--

INSERT INTO `workout_plan` (`workout_id`, `workout_name`) VALUES
(301, 'Bench press'),
(302, 'Back squat'),
(303, 'Rack Pull'),
(304, 'Zumba'),
(305, 'Yoga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workout_plan`
--
ALTER TABLE `workout_plan`
  ADD PRIMARY KEY (`workout_id`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
