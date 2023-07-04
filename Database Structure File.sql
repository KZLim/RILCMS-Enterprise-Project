-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 06:36 AM
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
-- Database: `rilcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(6) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_branch`) VALUES
('AM1001', 'David', 'admin1001', 'Ayer Itam Branch'),
('AM2001', 'Rilakkuma', 'admin2001', 'Tanjung Bungah Branch'),
('AM3001', 'Jeff Bezos', 'admin3001', 'Bayan Lepas Branch'),
('AM4001', 'Jay Chou', 'admin4001', 'Kedah Branch');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_ID` varchar(6) NOT NULL,
  `employee_password` varchar(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_contact` varchar(11) NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `employee_branch` varchar(50) NOT NULL,
  `course_teach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_ID`, `employee_password`, `employee_name`, `employee_contact`, `employee_address`, `employee_branch`, `course_teach`) VALUES
('TC1001', '123456789', 'Mr. Neri', '0123456789', 'asdasdasd', 'Ayer Itam Branch', 'Robotics Entry Level'),
('TC1002', '123456789', 'Ms. Emma', '0123456789', 'asdasdasd', 'Ayer Itam Branch', 'Robotics Advance Level'),
('TC1003', '123456789', 'Ms. Luna', '0123456789', 'asdasdasd', 'Ayer Itam Branch', 'Arduino Class'),
('TC2001', '123456789', 'Mr. Henry', '0123456789', 'asdasdasd', 'Tanjung Bungah Branch', 'Robotics Entry Level'),
('TC2002', '123456789', 'Ms. Amelia', '0123456789', 'asdasdasd', 'Tanjung Bungah Branch', 'Robotics Advance Level'),
('TC2003', '123456789', 'Ms. Layla', '0123456789', 'asdasdasd', 'Tanjung Bungah Branch', 'Arduino Class'),
('TC3001', '123456789', 'Ms. Stella', '0123456789', 'asdasdasd', 'Bayan Lepas Branch', 'Robotics Entry Level'),
('TC3002', '123456789', 'Ms. Evelyn', '0123456789', 'asdasdasd', 'Bayan Lepas Branch', 'Robotics Advance Level'),
('TC3003', '123456789', 'Ms. Aurora', '0123456789', 'asdasdasd', 'Bayan Lepas Branch', 'Arduino Class'),
('TC4001', '123456789', 'Ms. Isabella', '0123456789', 'asdasdasd', 'Kedah Branch', 'Robotics Entry Level'),
('TC4002', '123456789', 'Ms. Sofia', '0123456789', 'asdasdasd', 'Kedah Branch', 'Robotics Advance Level'),
('TC4003', '123456789', 'Ms. Elanor', '0123456789', 'asdasdasd', 'Kedah Branch', 'Arduino Class');

-- --------------------------------------------------------

--
-- Table structure for table `hardware_asset`
--

CREATE TABLE `hardware_asset` (
  `asset_id` varchar(9) NOT NULL,
  `asset_name` varchar(50) NOT NULL,
  `asset_type` varchar(20) NOT NULL,
  `asset_price` varchar(7) NOT NULL,
  `asset_status` varchar(11) NOT NULL,
  `employee_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hardware_asset`
--

INSERT INTO `hardware_asset` (`asset_id`, `asset_name`, `asset_type`, `asset_price`, `asset_status`, `employee_id`) VALUES
('lptp1001', 'Dell XPS', 'Laptop', '10899', 'Inventory', 'AM1001'),
('lptp1002', 'Msi Katana', 'Laptop', '4799', 'Inventory', 'AM1001'),
('Phn1001', 'Iphone 14 Plus', 'Phone', '4199', 'Inventory', 'AM1001'),
('tblt1001', 'Ipad Air 5', 'Tablet', '4799', 'Inventory', 'AM1001');

-- --------------------------------------------------------

--
-- Table structure for table `software_asset`
--

CREATE TABLE `software_asset` (
  `software_name` varchar(50) NOT NULL,
  `total_entitlement` varchar(2) NOT NULL,
  `software_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_asset`
--

INSERT INTO `software_asset` (`software_name`, `total_entitlement`, `software_status`) VALUES
('Adobe Photoshop 2022', '50', 'Active'),
('Microsoft Office Enterprise 2019', '50', 'Active'),
('test soft', '40', 'Active'),
('test2', '50', 'Active'),
('test3', '50', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `software_license`
--

CREATE TABLE `software_license` (
  `Number` int(11) NOT NULL,
  `software_name` varchar(50) NOT NULL,
  `software_price` varchar(8) NOT NULL,
  `license_key` varchar(50) NOT NULL,
  `employee_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_license`
--

INSERT INTO `software_license` (`Number`, `software_name`, `software_price`, `license_key`, `employee_ID`) VALUES
(1, 'Adobe Photoshop 2022', '1700', 'ABCB1678965#77', 'TC1001'),
(2, 'Microsoft Office Enterprise 2019', '2500', '#12346478384754728', 'TC1001'),
(3, 'Microsoft Office Enterprise 2019', '1799', '4546121236531', 'TC1001'),
(6, 'test soft', '1', '111', 'AM1001'),
(7, 'test soft', '1', '111', '555'),
(8, 'test2', '1000', 'asdasdasda123', 'TC1001'),
(9, 'test3', '1', '111', 'AM1001');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_IC` varchar(12) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_address` varchar(95) NOT NULL,
  `student_contact` varchar(11) NOT NULL,
  `student_age` int(2) NOT NULL,
  `student_gender` varchar(6) NOT NULL,
  `student_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_IC`, `student_name`, `student_address`, `student_contact`, `student_age`, `student_gender`, `student_email`) VALUES
('010101070101', 'kwan', 'jalan james bond, 123, 11200, Penang', '0123456789', 20, 'male', 'asd@gmail.com'),
('010703070146', 'Yang', '1, Jalan Briyani sedap, 11200, Penang', '0157878993', 21, 'female', 'yang@gmail.com'),
('010715070133', 'kz', 'Jalan satu, 11200, Penang', '0123456789', 20, 'male', 'kz@gmail.com'),
('061002070771', 'zhan xian', '19,Jalan teh tarik,11000, Ipoh, Perak', '0127229218', 17, 'male', 'zhanxianmyvi@gmail.com'),
('090807070155', 'Nicholas Kong', '3,Jalan kong, 11333, Kelantan, Malaysia ', '0123456789', 14, 'male', 'nickbasketball@gmail.com'),
('090807070159', 'TEST', 'TEST TEST TEST', '0123456789', 20, 'male', 'jihar1551@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `ID` int(11) NOT NULL,
  `student_IC` varchar(12) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `payment_status` varchar(7) NOT NULL,
  `section` varchar(20) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`ID`, `student_IC`, `student_name`, `course_name`, `payment_status`, `section`, `employee_name`, `branch_name`) VALUES
(72, '061002070771', 'zhan xian', 'test', 'Paid', 'Thursday |1pm-4pm', 'Ms. Layla', 'Kedah Branch'),
(73, '090807070155', 'Nicholas Kong', 'Arduino Class', 'Paid', 'Thursday |1pm-4pm', 'Ms. Layla', 'Kedah Branch'),
(74, '010703070146', 'Yang', 'Robotics Entry Level', 'Paid', 'Thursday |1pm-4pm', 'Mr. Henry', 'Kedah Branch'),
(75, '010101070101', 'kwan', 'Arduino Class', 'Paid', 'Thursday |1pm-4pm', 'Ms. Layla', 'Kedah Branch'),
(76, '010715070133', 'kz', 'Robotics Entry Level', 'Paid', 'Thursday |1pm-4pm', 'Ms. Layla', 'Bayan Lepas Branch'),
(79, '090807070159', 'TEST', 'Robotics Advance Level', 'Paid', 'Monday |9am-11am', 'Ms. Evelyn', 'Bayan Lepas Branch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_ID`);

--
-- Indexes for table `hardware_asset`
--
ALTER TABLE `hardware_asset`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `software_asset`
--
ALTER TABLE `software_asset`
  ADD PRIMARY KEY (`software_name`);

--
-- Indexes for table `software_license`
--
ALTER TABLE `software_license`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `software_name_fk` (`software_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_IC`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `student_ic_fk` (`student_IC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `software_license`
--
ALTER TABLE `software_license`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `software_license`
--
ALTER TABLE `software_license`
  ADD CONSTRAINT `software_name_fk` FOREIGN KEY (`software_name`) REFERENCES `software_asset` (`software_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_ic_fk` FOREIGN KEY (`student_IC`) REFERENCES `student` (`student_IC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
