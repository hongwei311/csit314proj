-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 03:22 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `PharmacistId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PharmacyName` varchar(30) NOT NULL,
  `PharmacyLocation` varchar(30) NOT NULL,
  `YearsOfExperience` int(11) NOT NULL,
  `CreatedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `CreatedDateTime` datetime NOT NULL,
  `DispensedDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `PrescriptionId` int(11) NOT NULL,
  `TokenId` int(11) NOT NULL,
  `TokenCode` char(30) NOT NULL,
  `CreatedDateTime` datetime NOT NULL
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
(1, 'AdminUser1', '$2y$10$DatZg/rPwEwQdUi9tO7iKOcxggmpf5vXQZkgYRAzT6kL8HDh3yqpa', 'Admin', '2021-10-31 22:19:24'),
(2, 'AdminUser2', '$2y$10$i3GUMJzXVFZg/JR0ZCDlOuUvY5k9CkUK62fn/AlH7lPjn28/vyNZ2', 'Admin', '2021-10-31 22:19:30');

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
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `PharmacistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `PrescriptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `TokenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `AdminToUserInfo_FK` FOREIGN KEY (`UserId`) REFERENCES `userinfo` (`UserId`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `DoctorToUserInfo_FK` FOREIGN KEY (`UserId`) REFERENCES `userinfo` (`UserId`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `PatientToUserInfo_FK` FOREIGN KEY (`UserId`) REFERENCES `userinfo` (`UserId`);

--
-- Constraints for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD CONSTRAINT `PharmacistToUserInfo_FK` FOREIGN KEY (`UserId`) REFERENCES `userinfo` (`UserId`);

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
