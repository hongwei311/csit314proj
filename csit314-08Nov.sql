-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 02:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csit314`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `UserId`, `CreatedDateTime`) VALUES
(1, 1, '2021-11-03 20:26:56'),
(2, 2, '2021-11-03 20:26:56'),
(6, 11, '2021-11-04 21:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `HealthFacility` varchar(30) DEFAULT NULL,
  `Profession` varchar(30) DEFAULT NULL,
  `YearsOfExperience` int(11) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorId`, `UserId`, `HealthFacility`, `Profession`, `YearsOfExperience`, `CreatedDateTime`) VALUES
(3, 3, 'Singapore General Hospital', 'Radiologist', 7, '2021-11-03 20:27:30'),
(4, 4, 'Tan Tock Seng Hospital', 'Cardiologist', 11, '2021-11-03 20:27:30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `fulladmin`
-- (See below for the actual view)
--
CREATE TABLE `fulladmin` (
`UserId` int(11)
,`AdminId` int(11)
,`UserName` varchar(30)
,`Password` varchar(255)
,`UserProfile` varchar(100)
,`FirstName` char(30)
,`Lastname` char(30)
,`BirthDate` date
,`GenderCode` char(3)
,`PhoneNumber` char(30)
,`EmailAddress` char(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `fulldoctor`
-- (See below for the actual view)
--
CREATE TABLE `fulldoctor` (
`UserId` int(11)
,`DoctorId` int(11)
,`UserName` varchar(30)
,`Password` varchar(255)
,`UserProfile` varchar(100)
,`FirstName` char(30)
,`Lastname` char(30)
,`BirthDate` date
,`GenderCode` char(3)
,`PhoneNumber` char(30)
,`EmailAddress` char(30)
,`HealthFacility` varchar(30)
,`Profession` varchar(30)
,`YearsOfExperience` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `fullpatient`
-- (See below for the actual view)
--
CREATE TABLE `fullpatient` (
`UserId` int(11)
,`PatientId` int(11)
,`UserName` varchar(30)
,`Password` varchar(255)
,`UserProfile` varchar(100)
,`FirstName` char(30)
,`Lastname` char(30)
,`BirthDate` date
,`GenderCode` char(3)
,`PhoneNumber` char(30)
,`EmailAddress` char(30)
,`DrugAllergy` varchar(30)
,`PrescriptionNotifcation` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `fullpharmacist`
-- (See below for the actual view)
--
CREATE TABLE `fullpharmacist` (
`UserId` int(11)
,`PharmacistId` int(11)
,`UserName` varchar(30)
,`Password` varchar(255)
,`UserProfile` varchar(100)
,`FirstName` char(30)
,`Lastname` char(30)
,`BirthDate` date
,`GenderCode` char(3)
,`PhoneNumber` char(30)
,`EmailAddress` char(30)
,`PharmacyName` varchar(30)
,`PharmacyLocation` varchar(30)
,`YearsOfExperience` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `DrugAllergy` varchar(30) DEFAULT NULL,
  `PrescriptionNotifcation` varchar(30) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientId`, `UserId`, `DrugAllergy`, `PrescriptionNotifcation`, `CreatedDateTime`) VALUES
(3, 5, 'Antibiotics', 'Email', '2021-11-03 20:28:51'),
(4, 6, 'NA', 'QR Code', '2021-11-03 20:28:51'),
(5, 9, 'Amoxicillin', 'Email', '2021-11-03 20:29:22'),
(6, 10, 'Painkillers', 'Email', '2021-11-03 20:29:22'),
(7, 74, NULL, NULL, '2021-11-08 11:26:18'),
(8, 75, NULL, NULL, '2021-11-08 11:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `PharmacistId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PharmacyName` varchar(30) DEFAULT NULL,
  `PharmacyLocation` varchar(30) DEFAULT NULL,
  `YearsOfExperience` int(11) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`PharmacistId`, `UserId`, `PharmacyName`, `PharmacyLocation`, `YearsOfExperience`, `CreatedDateTime`) VALUES
(3, 7, 'Singapore General Hospital', 'SGH', 3, '2021-11-03 20:30:23'),
(4, 8, 'Yishun Pharmacists', 'Yishun', 7, '2021-11-03 20:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `PrescriptionId` int(11) NOT NULL,
  `PrescriptionDetails` varchar(30) NOT NULL,
  `PrescriptionStatus` varchar(30) NOT NULL,
  `DoctorId` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL,
  `PharmacistId` int(11) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp(),
  `DispensedDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`PrescriptionId`, `PrescriptionDetails`, `PrescriptionStatus`, `DoctorId`, `PatientId`, `PharmacistId`, `CreatedDateTime`, `DispensedDateTime`) VALUES
(4, 'This is the prescription detai', 'Not Collected', 3, 3, NULL, '2021-11-08 11:23:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `PrescriptionId` int(11) NOT NULL,
  `TokenId` int(11) NOT NULL,
  `TokenCode` char(30) NOT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserProfile` varchar(100) NOT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserId`, `UserName`, `Password`, `UserProfile`, `CreatedDateTime`) VALUES
(1, 'AdminUser1', '$2y$10$piZuxMLHBIn.vAlXBGht3.IT6p5EEdnGmfM7Kg0s7NPYaSDUu0DdO', 'admin', '2021-10-31 22:19:24'),
(2, 'AdminUser2', '$2y$10$/JKNSmDkatE4Bi4OvBlLRue8DSnQj7iuu1e66WnVKMd0T1HcflrKK', 'admin', '2021-10-31 22:19:30'),
(3, 'Doctor1', '$2y$10$07fByEtF/c9OKaWx3pIiSe8EDztAVI2xAUWwyCpCHiuP5JY1Xs/2q', 'doctor', '2021-10-31 22:36:55'),
(4, 'Doctor2', '$2y$10$XZ1g2hAtrxFjFaLu92anFez4wA7YF9Yb4TcUnzHuhckJGCdmmTqT.', 'doctor', '2021-10-31 22:38:00'),
(5, 'Patient1', '$2y$10$qdi11HbRehrR3WZxa1aDOeGoPqXS3MJX1VYAP9ADjFe1bUWkGUhGO', 'patient', '2021-11-01 21:43:22'),
(6, 'Patient2', '$2y$10$FXvRZjbSzkvbOKEKBV4SLupt5hLpgjqbljQ.heL2V4twTG9r5U0vi', 'patient', '2021-11-01 21:43:28'),
(7, 'Pharmacist1', '$2y$10$k8aVMSzAUDhxixji6H9G7.LjLPMBKa4FTtz0ITT3flSi7V2ET170.', 'pharmacist', '2021-11-01 21:44:27'),
(8, 'Pharmacist2', '$2y$10$niqBaVyM6WThCxmnHGnw6erdqYaWamoKkhuM12FWCpzeHP2ZV9MzK', 'pharmacist', '2021-11-01 21:44:43'),
(9, 'Patient3', '$2y$10$QCXjf6YXwD6d1QZnoO9D9u4/PCYueF5m6ykIM9bZUhOIji3p7HSM2', 'patient', '2021-11-03 18:09:39'),
(10, 'Patient4', '$2y$10$73pYnKRfCVQXTPKp59sXIOUbqVMWmAXsC3njTzmKWX0kUC3hppnFO', 'patient', '2021-11-03 18:09:46'),
(11, 'Test1', '$2y$10$s/pYM4CP7nPKIB0htFpeleDlPzb7uKkT2JtjL7BOHNZxUveBLvLea', 'admin', '2021-11-04 20:55:57'),
(74, 'Patient5', '$2y$10$VOS2PlPc4OAQ/k.Jp1XQ/uULkl6.83rdxrAf6BGkoaCE/ZjM1c4dK', 'patient', '2021-11-08 11:26:18'),
(75, 'Patient6', '$2y$10$041En/AS6yWWN8bqk2vyWe1rMC9yzKFSxdfY8EMVQhjvXPhsJHxGe', 'patient', '2021-11-08 11:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserId` int(11) NOT NULL,
  `FirstName` char(30) NOT NULL,
  `LastName` char(30) NOT NULL,
  `BirthDate` date NOT NULL,
  `GenderCode` char(3) NOT NULL,
  `PhoneNumber` char(30) NOT NULL,
  `EmailAddress` char(30) NOT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserId`, `FirstName`, `LastName`, `BirthDate`, `GenderCode`, `PhoneNumber`, `EmailAddress`, `CreatedDateTime`) VALUES
(1, 'Dominic', 'Loh', '1998-03-01', 'M', '96441242', 'dominic.loh@hotmail.com', '2021-11-02 15:54:11'),
(2, 'Felicia', 'Teo', '1998-03-03', 'F', '91377118', 'TestEmail@Hotmail.com', '2021-11-03 02:59:11'),
(3, 'Darren', 'Lim', '1998-03-03', 'M', '97815538', 'TestEmail1@hotmail.com', '2021-11-03 03:07:34'),
(4, 'Pearlyn', 'Chan', '1998-03-03', 'F', '90188343', 'PearlynChan@moh.gov.sg', '2021-11-03 03:13:01'),
(5, 'Joyce', 'Simple', '2021-08-10', 'F', '96443233', 'JoyceSimp@Pharmacist.sg', '2021-11-03 04:37:42'),
(6, 'Owen', 'Lim', '2003-05-13', 'M', '91103497', 'owenLim@patient.sg', '2021-11-03 18:11:20'),
(7, 'Peter', 'Loh', '1982-10-12', 'M', '96448812', 'dddxe3@hotmail.com', '2021-11-03 18:12:04'),
(8, 'John', 'Doe', '2021-07-06', 'M', '98769920', 'johndoe@testmail.com', '2021-11-03 18:12:43'),
(9, 'Lim Zheng', 'Yang', '1993-01-03', 'M', '81190234', 'LZY@cool.com', '2021-11-03 18:13:27'),
(10, 'Rachel', 'Ee', '1976-09-08', 'F', '98177390', 'RachelEe@mapletree.com', '2021-11-03 18:16:27'),
(11, 'Dominic', 'Loh', '2021-11-01', 'M', '96443252', 'dom123123@hotmail.com', '2021-11-04 20:56:51'),
(75, '', '', '0000-00-00', '', '', '', '2021-11-08 11:32:20');

-- --------------------------------------------------------

--
-- Structure for view `fulladmin`
--
DROP TABLE IF EXISTS `fulladmin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fulladmin`  AS SELECT `up`.`UserId` AS `UserId`, `d`.`AdminId` AS `AdminId`, `a`.`UserName` AS `UserName`, `a`.`Password` AS `Password`, `a`.`UserProfile` AS `UserProfile`, `up`.`FirstName` AS `FirstName`, `up`.`LastName` AS `Lastname`, `up`.`BirthDate` AS `BirthDate`, `up`.`GenderCode` AS `GenderCode`, `up`.`PhoneNumber` AS `PhoneNumber`, `up`.`EmailAddress` AS `EmailAddress` FROM ((`userinfo` `up` join `admin` `d` on(`d`.`UserId` = `up`.`UserId`)) join `useraccount` `a` on(`a`.`UserId` = `up`.`UserId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `fulldoctor`
--
DROP TABLE IF EXISTS `fulldoctor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fulldoctor`  AS SELECT `up`.`UserId` AS `UserId`, `d`.`DoctorId` AS `DoctorId`, `a`.`UserName` AS `UserName`, `a`.`Password` AS `Password`, `a`.`UserProfile` AS `UserProfile`, `up`.`FirstName` AS `FirstName`, `up`.`LastName` AS `Lastname`, `up`.`BirthDate` AS `BirthDate`, `up`.`GenderCode` AS `GenderCode`, `up`.`PhoneNumber` AS `PhoneNumber`, `up`.`EmailAddress` AS `EmailAddress`, `d`.`HealthFacility` AS `HealthFacility`, `d`.`Profession` AS `Profession`, `d`.`YearsOfExperience` AS `YearsOfExperience` FROM ((`userinfo` `up` join `doctor` `d` on(`d`.`UserId` = `up`.`UserId`)) join `useraccount` `a` on(`a`.`UserId` = `up`.`UserId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `fullpatient`
--
DROP TABLE IF EXISTS `fullpatient`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fullpatient`  AS SELECT `up`.`UserId` AS `UserId`, `d`.`PatientId` AS `PatientId`, `a`.`UserName` AS `UserName`, `a`.`Password` AS `Password`, `a`.`UserProfile` AS `UserProfile`, `up`.`FirstName` AS `FirstName`, `up`.`LastName` AS `Lastname`, `up`.`BirthDate` AS `BirthDate`, `up`.`GenderCode` AS `GenderCode`, `up`.`PhoneNumber` AS `PhoneNumber`, `up`.`EmailAddress` AS `EmailAddress`, `d`.`DrugAllergy` AS `DrugAllergy`, `d`.`PrescriptionNotifcation` AS `PrescriptionNotifcation` FROM ((`userinfo` `up` join `patient` `d` on(`d`.`UserId` = `up`.`UserId`)) join `useraccount` `a` on(`a`.`UserId` = `up`.`UserId`)) ;

-- --------------------------------------------------------

--
-- Structure for view `fullpharmacist`
--
DROP TABLE IF EXISTS `fullpharmacist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fullpharmacist`  AS SELECT `up`.`UserId` AS `UserId`, `d`.`PharmacistId` AS `PharmacistId`, `a`.`UserName` AS `UserName`, `a`.`Password` AS `Password`, `a`.`UserProfile` AS `UserProfile`, `up`.`FirstName` AS `FirstName`, `up`.`LastName` AS `Lastname`, `up`.`BirthDate` AS `BirthDate`, `up`.`GenderCode` AS `GenderCode`, `up`.`PhoneNumber` AS `PhoneNumber`, `up`.`EmailAddress` AS `EmailAddress`, `d`.`PharmacyName` AS `PharmacyName`, `d`.`PharmacyLocation` AS `PharmacyLocation`, `d`.`YearsOfExperience` AS `YearsOfExperience` FROM ((`userinfo` `up` join `pharmacist` `d` on(`d`.`UserId` = `up`.`UserId`)) join `useraccount` `a` on(`a`.`UserId` = `up`.`UserId`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`),
  ADD KEY `AdminToUserInfo_FK` (`UserId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorId`),
  ADD KEY `DoctorToUserInfo_FK` (`UserId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientId`),
  ADD KEY `PatientToUserInfo_FK` (`UserId`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`PharmacistId`),
  ADD KEY `PharmacistToUserInfo_FK` (`UserId`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`PrescriptionId`),
  ADD KEY `PrescriptionToPharmacist_FK` (`PharmacistId`),
  ADD KEY `PrescriptionToDoctor_FK` (`DoctorId`),
  ADD KEY `PrescriptionToPatient_FK` (`PatientId`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`TokenId`),
  ADD UNIQUE KEY `PrescriptionId` (`PrescriptionId`),
  ADD UNIQUE KEY `TokenCode` (`TokenCode`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserInfo_AK2` (`EmailAddress`) USING BTREE,
  ADD KEY `UserInfo_AK1` (`PhoneNumber`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `PharmacistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `PrescriptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `TokenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `AdminToUserAccount_FK` FOREIGN KEY (`UserId`) REFERENCES `useraccount` (`UserId`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `DoctorToUserAccount_FK` FOREIGN KEY (`UserId`) REFERENCES `useraccount` (`UserId`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `PatientToUserAccount_FK` FOREIGN KEY (`UserId`) REFERENCES `useraccount` (`UserId`);

--
-- Constraints for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD CONSTRAINT `PharmacistToUserAccount_FK` FOREIGN KEY (`UserId`) REFERENCES `useraccount` (`UserId`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `PrescriptionToDoctor_FK` FOREIGN KEY (`DoctorId`) REFERENCES `doctor` (`DoctorId`),
  ADD CONSTRAINT `PrescriptionToPatient_FK` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`PatientId`),
  ADD CONSTRAINT `PrescriptionToPharmacist_FK` FOREIGN KEY (`PharmacistId`) REFERENCES `pharmacist` (`PharmacistId`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `UserInfoToUserAccount_FK` FOREIGN KEY (`UserId`) REFERENCES `useraccount` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
