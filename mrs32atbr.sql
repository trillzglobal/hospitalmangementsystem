-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 07:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrs32atbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `first_name`, `username`, `time`) VALUES
(20, 'OJo', 'trillzglobala', '17-09-2018 07:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `sex` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(500) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`) VALUES
(1, 'OJo', 'Micheal', 'M', 'trillzglobala', '61c6ee50da7573c668e6c4286375856b', 'oooebjen', 'no', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `doctor-report`
--

CREATE TABLE `doctor-report` (
  `id` int(255) NOT NULL,
  `report` varchar(500) NOT NULL,
  `time` varchar(300) NOT NULL,
  `doctor` varchar(300) NOT NULL,
  `patient_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor-report`
--

INSERT INTO `doctor-report` (`id`, `report`, `time`, `doctor`, `patient_id`) VALUES
(4, 'Patient suffer from high fever, causes yet unknown.', '12-09-2018', 'trillzglobald', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_login`
--

CREATE TABLE `doctor_login` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_login`
--

INSERT INTO `doctor_login` (`id`, `first_name`, `username`, `time`) VALUES
(43, 'Micheal', 'trillzglobald', '17-09-2018 07:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profile`
--

CREATE TABLE `doctor_profile` (
  `id` int(225) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `sex` varchar(300) NOT NULL,
  `specialization` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_profile`
--

INSERT INTO `doctor_profile` (`id`, `first_name`, `last_name`, `sex`, `specialization`, `username`, `password`, `email`, `phone_no`, `address`) VALUES
(1, 'Micheal', 'Blessing', 'Male', 'Neuro Surgeon', 'trillzglobald', '61c6ee50da7573c668e6c4286375856b', 'trillzglobal@gmail.com', '09032878128', 'i dont know');

-- --------------------------------------------------------

--
-- Table structure for table `lab_login`
--

CREATE TABLE `lab_login` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_profile`
--

CREATE TABLE `lab_profile` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `sex` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(500) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_profile`
--

INSERT INTO `lab_profile` (`id`, `first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`) VALUES
(1, 'Micheal', 'Blessing', 'M', 'trillzgloball', '61c6ee50da7573c668e6c4286375856b', 'trjfhiehfskdjff', '0903287812', 'mkdkdjfjdjcjff');

-- --------------------------------------------------------

--
-- Table structure for table `lab_results`
--

CREATE TABLE `lab_results` (
  `id` int(255) NOT NULL,
  `patient_id` varchar(500) NOT NULL,
  `lab_test` varchar(500) NOT NULL,
  `test_result` varchar(300) NOT NULL,
  `other_result` varchar(300) NOT NULL,
  `lab_observer` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `discharged_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_for_doctor`
--

CREATE TABLE `patient_for_doctor` (
  `id` int(255) NOT NULL,
  `status` int(10) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `patient_id` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_for_lab`
--

CREATE TABLE `patient_for_lab` (
  `id` int(255) NOT NULL,
  `time` varchar(500) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `patient_id` varchar(300) NOT NULL,
  `lab_test` varchar(300) NOT NULL,
  `result` varchar(500) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_for_lab`
--

INSERT INTO `patient_for_lab` (`id`, `time`, `surname`, `first_name`, `patient_id`, `lab_test`, `result`, `status`) VALUES
(1, '12-09-2018', 'Ojo', 'Micheal', '0001', 'Pregnancy Test', 'positive', '1');

-- --------------------------------------------------------

--
-- Table structure for table `patient_for_pharmacy`
--

CREATE TABLE `patient_for_pharmacy` (
  `id` int(255) NOT NULL,
  `time` varchar(20) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `patient_id` varchar(300) NOT NULL,
  `drugs` varchar(600) NOT NULL,
  `answered` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_for_pharmacy`
--

INSERT INTO `patient_for_pharmacy` (`id`, `time`, `surname`, `first_name`, `patient_id`, `drugs`, `answered`) VALUES
(7, '12-09-2018', 'Ojo', 'Micheal', '0001', 'PCM drug', '1'),
(8, '17-09-2018', 'Ojo', 'Micheal', '0001', 'Chloroquene injetion 1/3, PCM 3/5, B. Complex 2/5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `patient_image`
--

CREATE TABLE `patient_image` (
  `id` int(255) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `imagename` varchar(500) NOT NULL,
  `patient_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_image`
--

INSERT INTO `patient_image` (`id`, `image_path`, `imagename`, `patient_id`) VALUES
(3, '../uploads', '0001.jpg', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `patient_on_admission`
--

CREATE TABLE `patient_on_admission` (
  `id` int(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `surname` varchar(500) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `patient_id` varchar(300) NOT NULL,
  `time_admitted` varchar(300) NOT NULL,
  `time_discharged` varchar(300) NOT NULL,
  `discharged_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE `patient_profile` (
  `id` int(255) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `other_name` varchar(50) NOT NULL,
  `Date_of_birth` varchar(500) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `marital_status` varchar(300) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `occupation` varchar(300) NOT NULL,
  `patient_id` varchar(500) NOT NULL,
  `state_of_origin` varchar(500) NOT NULL,
  `tribe` varchar(500) NOT NULL,
  `blood_group` varchar(500) NOT NULL,
  `nhis_card` varchar(500) NOT NULL,
  `army_no` varchar(500) NOT NULL,
  `rank` varchar(500) NOT NULL,
  `unit` varchar(500) NOT NULL,
  `phone_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`id`, `surname`, `first_name`, `other_name`, `Date_of_birth`, `sex`, `marital_status`, `religion`, `address`, `occupation`, `patient_id`, `state_of_origin`, `tribe`, `blood_group`, `nhis_card`, `army_no`, `rank`, `unit`, `phone_no`) VALUES
(10, 'Ojo', 'Micheal', 'Abayomi', '12/05/1990', 'male', 'married', 'Christian', 'Saheed Adeowo way, Ipetu-ijesha, Ondo state', 'Nigeria Army', '0001', 'Ondo', 'Yoruba', 'O+', 'HNK/200/120', '9803/383', 'Colonel', 'Infantory', '09032878128');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_login`
--

CREATE TABLE `pharmacy_login` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_profile`
--

CREATE TABLE `pharmacy_profile` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `sex` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(500) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_profile`
--

INSERT INTO `pharmacy_profile` (`id`, `first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`) VALUES
(1, 'michel', 'blesin', 'M', 'trillzglobalp', '61c6ee50da7573c668e6c4286375856b', 'trkjfjdfjkdfkkkkkkkkkkkkkfkv', 'kfkf', 'djkfkdfdf;dfff');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_login`
--

CREATE TABLE `supervisor_login` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_profile`
--

CREATE TABLE `supervisor_profile` (
  `id` int(255) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `sex` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_no` varchar(500) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_profile`
--

INSERT INTO `supervisor_profile` (`id`, `first_name`, `last_name`, `sex`, `username`, `password`, `email`, `phone_no`, `address`) VALUES
(1, 'Adewale', 'Johnson', 'Male', 'trillzglobals', '61c6ee50da7573c668e6c4286375856b', 'trillzglobal@gmail.com', '09032878128', 'adewale street, Iremo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor-report`
--
ALTER TABLE `doctor-report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_login`
--
ALTER TABLE `doctor_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_login`
--
ALTER TABLE `lab_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_profile`
--
ALTER TABLE `lab_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_results`
--
ALTER TABLE `lab_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_for_doctor`
--
ALTER TABLE `patient_for_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_for_lab`
--
ALTER TABLE `patient_for_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_for_pharmacy`
--
ALTER TABLE `patient_for_pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_image`
--
ALTER TABLE `patient_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_on_admission`
--
ALTER TABLE `patient_on_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_profile`
--
ALTER TABLE `patient_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy_login`
--
ALTER TABLE `pharmacy_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy_profile`
--
ALTER TABLE `pharmacy_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_login`
--
ALTER TABLE `supervisor_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_profile`
--
ALTER TABLE `supervisor_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor-report`
--
ALTER TABLE `doctor-report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor_login`
--
ALTER TABLE `doctor_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lab_login`
--
ALTER TABLE `lab_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_profile`
--
ALTER TABLE `lab_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lab_results`
--
ALTER TABLE `lab_results`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_for_doctor`
--
ALTER TABLE `patient_for_doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `patient_for_lab`
--
ALTER TABLE `patient_for_lab`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_for_pharmacy`
--
ALTER TABLE `patient_for_pharmacy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_image`
--
ALTER TABLE `patient_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_on_admission`
--
ALTER TABLE `patient_on_admission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patient_profile`
--
ALTER TABLE `patient_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pharmacy_login`
--
ALTER TABLE `pharmacy_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pharmacy_profile`
--
ALTER TABLE `pharmacy_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisor_login`
--
ALTER TABLE `supervisor_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisor_profile`
--
ALTER TABLE `supervisor_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
