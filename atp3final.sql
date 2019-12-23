-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 04:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atp3final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `pic`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'uploads/IMG_7161 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allotments`
--

CREATE TABLE `allotments` (
  `aid` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `bed_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allotments`
--

INSERT INTO `allotments` (`aid`, `patient_name`, `bed_no`) VALUES
(1, 'Sohel Rana Sagor', '501'),
(2, 'Amait paul', '301'),
(3, 'Sajib Hasan', '101');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `apid` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `name`, `dob`, `services`) VALUES
(1, 'Sohel Rana Sagor', '1997-12-09', 'Blood Test'),
(2, 'Sajib Hasan', '1997-07-11', 'Clinical Urine Test'),
(3, 'Amait paul', '1997-12-11', 'X-Ray');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(200) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(30) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorid`, `name`, `dob`, `gender`, `email`, `department`, `phone`, `password`, `salary`, `pic`, `status`) VALUES
(8, 'Fuad Hossain', '2019-12-03', 'Male', 'fuad@gmail.com', 'Cardiology', '+8801711111111', '12', '30000', 'uploads/doctors/doctor.jpg', 0),
(11, 'Sohel Rana Sagor', '2019-12-01', 'Male', 'sagor@gmail.com', 'Skin,Allergy & VD', '+8801771834097', '12', '40000', 'uploads/doctors/IMG_7161 (1).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors_departments`
--

CREATE TABLE `doctors_departments` (
  `dId` int(11) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_departments`
--

INSERT INTO `doctors_departments` (`dId`, `department`) VALUES
(1, 'Medicine & Nephrology'),
(2, 'Cardiology'),
(3, 'General Surgery'),
(4, 'Neuro & Spine Surgery'),
(5, 'Skin,Allergy & VD'),
(6, 'Diabetes,Hormone & Medicine'),
(7, 'sagor');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_schedules`
--

CREATE TABLE `doctors_schedules` (
  `dsId` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctorName` varchar(50) NOT NULL,
  `time1` varchar(30) NOT NULL,
  `room1` varchar(10) NOT NULL,
  `time2` varchar(30) NOT NULL,
  `room2` varchar(10) NOT NULL,
  `time3` varchar(30) NOT NULL,
  `room3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_schedules`
--

INSERT INTO `doctors_schedules` (`dsId`, `department`, `doctorName`, `time1`, `room1`, `time2`, `room2`, `time3`, `room3`) VALUES
(1, 'Cardiology', 'Fuad Hossain', '8:00AM-11:00AM', '101', '2:00PM-5:00PM', '102', '5:00PM-8:00PM', '103'),
(4, 'Skin,Allergy & VD', 'Sohel Rana Sagor', '8:00AM-11:00AM', '101', '11:00AM-2:00PM', '102', '5:00PM-8:00PM', '103');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(25) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `sender`, `receiver`, `text`) VALUES
(1, 'almas@gmail.com', 'doctor@gmail.com', 'hello there...'),
(2, 'doctor@gmail.com', 'almas@gmail.com', 'hi'),
(3, 'almas@gmail.com', 'admin@gmail.com', 'Hi..!'),
(4, 'almas@gmail.com', 'amait@gmail.com', 'Hlw'),
(7, 'amait@gmail.com', 'almas@gmail.com', 'hello almas');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `description`, `pic`) VALUES
(7, 'Child Heart Disease awareness event organised by Apollo Hospitals Dhaka', 'Dr. Ratnadeep Chaskar, Chief Executive Officer; Dr. Tahera Nazrin, Consultant–Paediatric Cardiology; Professor Dr. A. Q. M. Reza, Senior Consultant & Coordinator–Clinical & Interventional Cardiology; Professor Dr. Mohammed Ishtiaque Hossain, Seniorn Consultant & Coordinator– Paediatrics & Neonatology; and Santanu Kumar Das, Director– Business Development from Apollo Hospitals Dhaka as well as Professor Dr. Md. Abid Hossain Mollah, Head of the Department of Paediatrics, BIRDEM General Hospital & Ibrahim Medical College were present among other consultants and senior management of Apollo Dhaka. President of BASIS Mr. Syed Almas Kabir, comedian & corporate personality Mr. Naveed Mahbub and singer Mehreen Mahmud also graced the event with their warm presence.', 'uploads/photos/index1.jpg'),
(8, 'Toufiq’s life was saved by the brave hands of Apollo', '5th January, 2018. A student of Comilla Medical College naming Md. Toufiqul Islam (Age 24) was admitted to Apollo Hospitals Dhaka due to a serious physical assault accompanied by a severe head injury and unconsciousness under the supervision of Dr. Md. Aliuzzaman Joardar, a consultant of Neurosurgery Department. Considering the situation of Toufiq the Doctor went for BIFRONTAL DECOMPRESSIVE CRANIECTOMY on the same day of his admission. The brave approach of the Dr. Aliuzzaman and his team and a close motherly care of Apollo managed to save the life of Toufiq. Toufiq’s situation was so critical that the life of such brilliant student was at risk and he might have died but due to the extensive care of Apollo Hospitals Dhaka Toufiq is now fully fit and was released on 1st April, 2018.', 'uploads/photos/Screenshot.png'),
(9, 'Apollo Has Launched Holistic JOINT CARE & WELLNESS CENTER', 'Apollo JOINT CARE & WELLNESS CENTER starts its journey under the supervision of country’s renown knee surgeon Dr. M. Ali. The center is equipped to provide joint care and wellness services of global standard. The newly launched department will treat in regards of mini whole surgery, knee, ligament and hip surgery and day to day pain management. On this occasion of grand launching and to make the event more interactive Chief Operating Officer Dr. Ratnadeep Chaskar, Director Medical Services Dr. Shanthi Bansal, Senior General Manager of Medical Services Dr. Arif Mahmud, Coordinator & Senior Consultant of the center Dr. M. Ali, other consultants and higher management body of Apollo Hospitals Dhaka were present.', 'uploads/photos/index.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `name`, `price`, `description`) VALUES
(1, 'Blood Test', '500 BDT', 'Blood test'),
(4, 'X-Ray', '1000 BDT', 'All X-Ray'),
(5, 'Clinical Urine Test', '500 BDT', 'Urine Test');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `password`, `type`) VALUES
(1, 'admin@gmail.com', 'admin', 1),
(12, 'almas@gmail.com', 'almas', 3),
(14, 'sohelranasagor007@gmail.com', '12', 4),
(15, 'fuad@gmail.com', '12', 2),
(20, 'sagor@gmail.com', '12', 2),
(21, 'sajib@gmail.com', '12', 4),
(22, 'amait@gmail.com', '1234', 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(30) NOT NULL,
  `salary` int(10) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `firstname`, `lastname`, `dob`, `gender`, `email`, `phone`, `password`, `salary`, `pic`, `status`) VALUES
(6, 'Almas', 'Khan', '2019-12-10', 'Male', 'almas@gmail.com', '+8801511111111', 'almas', 20000, 'uploads/almas.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffs_schedules`
--

CREATE TABLE `staffs_schedules` (
  `ssId` int(11) NOT NULL,
  `staffsName` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs_schedules`
--

INSERT INTO `staffs_schedules` (`ssId`, `staffsName`, `time`, `room`) VALUES
(1, 'Almas Khan', '8:00AM-11:00AM', '101');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `city` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `picture` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `firstname`, `lastname`, `dob`, `gender`, `email`, `phone`, `city`, `location`, `password`, `picture`) VALUES
(42, 'Sohel Rana', 'Sagor', '1996-03-12', 'Male', 'sohelranasagor007@gmail.com', '+8801771834097', 'Dhaka', 'Bashundhara R/A', '12', 'uploads/users/IMG_7161 (1).jpg'),
(43, 'Sajib', 'Hasan', '1997-06-17', 'Male', 'sajib@gmail.com', '+8801700000000', 'Gazipur', 'Joydebpur', '12', 'uploads/users/sajib1.png'),
(44, 'Amait', 'paul', '1997-06-17', 'Male', 'amait@gmail.com', '+8801800000000', 'Rajshahi', 'ZeroPoint', '1234', 'uploads/users/amait.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `doctors_departments`
--
ALTER TABLE `doctors_departments`
  ADD PRIMARY KEY (`dId`);

--
-- Indexes for table `doctors_schedules`
--
ALTER TABLE `doctors_schedules`
  ADD PRIMARY KEY (`dsId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `staffs_schedules`
--
ALTER TABLE `staffs_schedules`
  ADD PRIMARY KEY (`ssId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `apid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors_departments`
--
ALTER TABLE `doctors_departments`
  MODIFY `dId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors_schedules`
--
ALTER TABLE `doctors_schedules`
  MODIFY `dsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staffs_schedules`
--
ALTER TABLE `staffs_schedules`
  MODIFY `ssId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
