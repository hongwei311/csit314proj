-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 02:56 PM
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
(1, 1, '2021-11-11 09:45:03'),
(2, 2, '2021-11-11 09:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `HealthFacility` varchar(255) DEFAULT NULL,
  `Profession` varchar(255) DEFAULT NULL,
  `YearsOfExperience` int(11) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorId`, `UserId`, `HealthFacility`, `Profession`, `YearsOfExperience`, `CreatedDateTime`) VALUES
(1001, 3, 'Singapore General Hospital1', 'Cardiologist123', 7, '2021-11-11 09:45:52'),
(1002, 4, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:52'),
(1003, 5, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:52'),
(1004, 6, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:52'),
(1005, 7, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:52'),
(1006, 8, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1007, 9, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1008, 10, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1009, 11, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1010, 12, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1011, 13, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1012, 14, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1013, 15, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1014, 16, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1015, 17, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:53'),
(1016, 18, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1017, 19, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1018, 20, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1019, 21, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1020, 22, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1021, 23, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1022, 24, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1023, 25, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1024, 26, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1025, 27, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:54'),
(1026, 28, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1027, 29, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1028, 30, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1029, 31, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1030, 32, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1031, 33, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1032, 34, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1033, 35, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1034, 36, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:55'),
(1035, 37, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1036, 38, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1037, 39, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1038, 40, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1039, 41, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1040, 42, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1041, 43, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1042, 44, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1043, 45, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:56'),
(1044, 46, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1045, 47, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1046, 48, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1047, 49, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1048, 50, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1049, 51, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1050, 52, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1051, 53, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1052, 54, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:57'),
(1053, 55, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1054, 56, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1055, 57, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1056, 58, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1057, 59, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1058, 60, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1059, 61, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1060, 62, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1061, 63, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:58'),
(1062, 64, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1063, 65, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1064, 66, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1065, 67, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1066, 68, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1067, 69, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1068, 70, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1069, 71, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1070, 72, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1071, 73, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:45:59'),
(1072, 74, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1073, 75, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1074, 76, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1075, 77, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1076, 78, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1077, 79, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1078, 80, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1079, 81, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1080, 82, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:00'),
(1081, 83, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1082, 84, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1083, 85, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1084, 86, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1085, 87, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1086, 88, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1087, 89, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1088, 90, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1089, 91, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1090, 92, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:01'),
(1091, 93, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1092, 94, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1093, 95, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1094, 96, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1095, 97, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1096, 98, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1097, 99, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1098, 100, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1099, 101, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:02'),
(1100, 102, 'Singapore General Hospital', 'Cardiologist', 5, '2021-11-11 09:46:03');

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
,`GenderCode` varchar(10)
,`PhoneNumber` int(10)
,`EmailAddress` varchar(255)
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
,`GenderCode` varchar(10)
,`PhoneNumber` int(10)
,`EmailAddress` varchar(255)
,`HealthFacility` varchar(255)
,`Profession` varchar(255)
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
,`GenderCode` varchar(10)
,`PhoneNumber` int(10)
,`EmailAddress` varchar(255)
,`DrugAllergy` varchar(255)
,`PrescriptionNotifcation` varchar(255)
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
,`GenderCode` varchar(10)
,`PhoneNumber` int(10)
,`EmailAddress` varchar(255)
,`PharmacyName` varchar(255)
,`PharmacyLocation` varchar(255)
,`YearsOfExperience` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `DrugAllergy` varchar(255) DEFAULT NULL,
  `PrescriptionNotifcation` varchar(255) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientId`, `UserId`, `DrugAllergy`, `PrescriptionNotifcation`, `CreatedDateTime`) VALUES
(5001, 103, 'Amoxicilin', 'Qr Code', '2021-11-11 09:48:05'),
(5002, 104, 'Painkillers', 'SMS', '2021-11-11 09:48:05'),
(5003, 105, 'NA', 'Email', '2021-11-11 09:48:05'),
(5004, 106, 'NA', 'Email', '2021-11-11 09:48:05'),
(5005, 107, 'NA', 'Email', '2021-11-11 09:48:05'),
(5006, 108, 'NA', 'Email', '2021-11-11 09:48:05'),
(5007, 109, 'NA', 'Email', '2021-11-11 09:48:06'),
(5008, 110, 'NA', 'Email', '2021-11-11 09:48:06'),
(5009, 111, 'NA', 'Email', '2021-11-11 09:48:06'),
(5010, 112, 'NA', 'Email', '2021-11-11 09:48:06'),
(5011, 113, 'NA', 'Email', '2021-11-11 09:48:06'),
(5012, 114, 'NA', 'Email', '2021-11-11 09:48:06'),
(5013, 115, 'NA', 'Email', '2021-11-11 09:48:06'),
(5014, 116, 'NA', 'Email', '2021-11-11 09:48:06'),
(5015, 117, 'NA', 'Email', '2021-11-11 09:48:06'),
(5016, 118, 'NA', 'Email', '2021-11-11 09:48:07'),
(5017, 119, 'NA', 'Email', '2021-11-11 09:48:07'),
(5018, 120, 'NA', 'Email', '2021-11-11 09:48:07'),
(5019, 121, 'NA', 'Email', '2021-11-11 09:48:07'),
(5020, 122, 'NA', 'Email', '2021-11-11 09:48:07'),
(5021, 123, 'NA', 'Email', '2021-11-11 09:48:07'),
(5022, 124, 'NA', 'Email', '2021-11-11 09:48:07'),
(5023, 125, 'NA', 'Email', '2021-11-11 09:48:07'),
(5024, 126, 'NA', 'Email', '2021-11-11 09:48:07'),
(5025, 127, 'NA', 'Email', '2021-11-11 09:48:08'),
(5026, 128, 'NA', 'Email', '2021-11-11 09:48:08'),
(5027, 129, 'NA', 'Email', '2021-11-11 09:48:08'),
(5028, 130, 'NA', 'Email', '2021-11-11 09:48:08'),
(5029, 131, 'NA', 'Email', '2021-11-11 09:48:08'),
(5030, 132, 'NA', 'Email', '2021-11-11 09:48:08'),
(5031, 133, 'NA', 'Email', '2021-11-11 09:48:08'),
(5032, 134, 'NA', 'Email', '2021-11-11 09:48:08'),
(5033, 135, 'NA', 'Email', '2021-11-11 09:48:08'),
(5034, 136, 'NA', 'Email', '2021-11-11 09:48:09'),
(5035, 137, 'NA', 'Email', '2021-11-11 09:48:09'),
(5036, 138, 'NA', 'Email', '2021-11-11 09:48:09'),
(5037, 139, 'NA', 'Email', '2021-11-11 09:48:09'),
(5038, 140, 'NA', 'Email', '2021-11-11 09:48:09'),
(5039, 141, 'NA', 'Email', '2021-11-11 09:48:09'),
(5040, 142, 'NA', 'Email', '2021-11-11 09:48:09'),
(5041, 143, 'NA', 'Email', '2021-11-11 09:48:09'),
(5042, 144, 'NA', 'Email', '2021-11-11 09:48:09'),
(5043, 145, 'NA', 'Email', '2021-11-11 09:48:10'),
(5044, 146, 'NA', 'Email', '2021-11-11 09:48:10'),
(5045, 147, 'NA', 'Email', '2021-11-11 09:48:10'),
(5046, 148, 'NA', 'Email', '2021-11-11 09:48:10'),
(5047, 149, 'NA', 'Email', '2021-11-11 09:48:10'),
(5048, 150, 'NA', 'Email', '2021-11-11 09:48:10'),
(5049, 151, 'NA', 'Email', '2021-11-11 09:48:10'),
(5050, 152, 'NA', 'Email', '2021-11-11 09:48:10'),
(5051, 153, 'NA', 'Email', '2021-11-11 09:48:10'),
(5052, 154, 'NA', 'Email', '2021-11-11 09:48:11'),
(5053, 155, 'NA', 'Email', '2021-11-11 09:48:11'),
(5054, 156, 'NA', 'Email', '2021-11-11 09:48:11'),
(5055, 157, 'NA', 'Email', '2021-11-11 09:48:11'),
(5056, 158, 'NA', 'Email', '2021-11-11 09:48:11'),
(5057, 159, 'NA', 'Email', '2021-11-11 09:48:11'),
(5058, 160, 'NA', 'Email', '2021-11-11 09:48:11'),
(5059, 161, 'NA', 'Email', '2021-11-11 09:48:11'),
(5060, 162, 'NA', 'Email', '2021-11-11 09:48:11'),
(5061, 163, 'NA', 'Email', '2021-11-11 09:48:12'),
(5062, 164, 'NA', 'Email', '2021-11-11 09:48:12'),
(5063, 165, 'NA', 'Email', '2021-11-11 09:48:12'),
(5064, 166, 'NA', 'Email', '2021-11-11 09:48:12'),
(5065, 167, 'NA', 'Email', '2021-11-11 09:48:12'),
(5066, 168, 'NA', 'Email', '2021-11-11 09:48:12'),
(5067, 169, 'NA', 'Email', '2021-11-11 09:48:12'),
(5068, 170, 'NA', 'Email', '2021-11-11 09:48:12'),
(5069, 171, 'NA', 'Email', '2021-11-11 09:48:12'),
(5070, 172, 'NA', 'Email', '2021-11-11 09:48:13'),
(5071, 173, 'NA', 'Email', '2021-11-11 09:48:13'),
(5072, 174, 'NA', 'Email', '2021-11-11 09:48:13'),
(5073, 175, 'NA', 'Email', '2021-11-11 09:48:13'),
(5074, 176, 'NA', 'Email', '2021-11-11 09:48:13'),
(5075, 177, 'NA', 'Email', '2021-11-11 09:48:13'),
(5076, 178, 'NA', 'Email', '2021-11-11 09:48:13'),
(5077, 179, 'NA', 'Email', '2021-11-11 09:48:13'),
(5078, 180, 'NA', 'Email', '2021-11-11 09:48:13'),
(5079, 181, 'NA', 'Email', '2021-11-11 09:48:13'),
(5080, 182, 'NA', 'Email', '2021-11-11 09:48:14'),
(5081, 183, 'NA', 'Email', '2021-11-11 09:48:14'),
(5082, 184, 'NA', 'Email', '2021-11-11 09:48:14'),
(5083, 185, 'NA', 'Email', '2021-11-11 09:48:14'),
(5084, 186, 'NA', 'Email', '2021-11-11 09:48:14'),
(5085, 187, 'NA', 'Email', '2021-11-11 09:48:14'),
(5086, 188, 'NA', 'Email', '2021-11-11 09:48:14'),
(5087, 189, 'NA', 'Email', '2021-11-11 09:48:14'),
(5088, 190, 'NA', 'Email', '2021-11-11 09:48:14'),
(5089, 191, 'NA', 'Email', '2021-11-11 09:48:15'),
(5090, 192, 'NA', 'Email', '2021-11-11 09:48:15'),
(5091, 193, 'NA', 'Email', '2021-11-11 09:48:15'),
(5092, 194, 'NA', 'Email', '2021-11-11 09:48:15'),
(5093, 195, 'NA', 'Email', '2021-11-11 09:48:15'),
(5094, 196, 'NA', 'Email', '2021-11-11 09:48:15'),
(5095, 197, 'NA', 'Email', '2021-11-11 09:48:15'),
(5096, 198, 'NA', 'Email', '2021-11-11 09:48:15'),
(5097, 199, 'NA', 'Email', '2021-11-11 09:48:15'),
(5098, 200, 'NA', 'Email', '2021-11-11 09:48:16'),
(5099, 201, 'NA', 'Email', '2021-11-11 09:48:16'),
(5100, 202, 'NA', 'Email', '2021-11-11 09:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `PharmacistId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PharmacyName` varchar(255) DEFAULT NULL,
  `PharmacyLocation` varchar(255) DEFAULT NULL,
  `YearsOfExperience` int(11) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`PharmacistId`, `UserId`, `PharmacyName`, `PharmacyLocation`, `YearsOfExperience`, `CreatedDateTime`) VALUES
(2001, 203, 'SGH Pharmacy1', 'Central12', 4, '2021-11-11 09:48:52'),
(2002, 204, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:52'),
(2003, 205, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2004, 206, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2005, 207, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2006, 208, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2007, 209, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2008, 210, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2009, 211, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2010, 212, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2011, 213, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:53'),
(2012, 214, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2013, 215, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2014, 216, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2015, 217, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2016, 218, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2017, 219, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2018, 220, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2019, 221, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2020, 222, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:54'),
(2021, 223, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2022, 224, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2023, 225, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2024, 226, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2025, 227, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2026, 228, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2027, 229, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2028, 230, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2029, 231, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:55'),
(2030, 232, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2031, 233, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2032, 234, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2033, 235, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2034, 236, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2035, 237, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2036, 238, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2037, 239, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2038, 240, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:56'),
(2039, 241, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2040, 242, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2041, 243, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2042, 244, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2043, 245, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2044, 246, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2045, 247, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2046, 248, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2047, 249, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2048, 250, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:57'),
(2049, 251, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2050, 252, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2051, 253, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2052, 254, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2053, 255, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2054, 256, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2055, 257, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2056, 258, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2057, 259, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:58'),
(2058, 260, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2059, 261, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2060, 262, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2061, 263, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2062, 264, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2063, 265, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2064, 266, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2065, 267, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2066, 268, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:48:59'),
(2067, 269, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2068, 270, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2069, 271, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2070, 272, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2071, 273, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2072, 274, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2073, 275, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2074, 276, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2075, 277, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:00'),
(2076, 278, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2077, 279, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2078, 280, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2079, 281, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2080, 282, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2081, 283, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2082, 284, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2083, 285, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2084, 286, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2085, 287, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:01'),
(2086, 288, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2087, 289, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2088, 290, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2089, 291, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2090, 292, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2091, 293, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2092, 294, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2093, 295, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2094, 296, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2095, 297, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:02'),
(2096, 298, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:03'),
(2097, 299, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:03'),
(2098, 300, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:03'),
(2099, 301, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:03'),
(2100, 302, 'SGH Pharmacy', 'Central', 3, '2021-11-11 09:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `PrescriptionId` int(11) NOT NULL,
  `PrescriptionDetails` varchar(255) NOT NULL,
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
(1, 'This is the prescription details for patient id 5001', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-11 10:28:07'),
(2, 'This is the prescription details for patient id 5001 Testing update second try', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-11 10:28:21'),
(3, 'This is the prescription details for patient id 5001', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-11 10:28:25'),
(4, 'This is the prescription details for patient id 5001', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-11 10:28:27'),
(5, 'This is the prescription details for patient id 5001', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-11 10:28:29'),
(6, 'This is the prescription details for patient id 5001', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-12 21:33:15'),
(7, 'This is the prescription details for patient id 5001', 'Collected', 1001, 5001, 2001, '2021-11-11 09:57:07', '2021-11-12 21:53:07'),
(8, 'This is the prescription details for patient id 5001', 'Not Collected', 1001, 5001, NULL, '2021-11-11 09:57:07', NULL),
(9, 'This is the prescription details for patient id 5001', 'Not Collected', 1001, 5001, NULL, '2021-11-11 09:57:07', NULL),
(10, 'This is the prescription details for patient id 5001', 'Not Collected', 1001, 5001, NULL, '2021-11-11 09:57:07', NULL),
(11, 'This is the prescription details for patient id 5002', 'Collected', 1001, 5002, 2001, '2021-11-11 09:57:31', '2021-11-11 10:28:37'),
(12, 'This is the prescription details for patient id 5002', 'Collected', 1001, 5002, 2001, '2021-11-11 09:57:31', '2021-11-11 10:28:40'),
(13, 'This is the prescription details for patient id 5002', 'Collected', 1001, 5002, 2001, '2021-11-11 09:57:31', '2021-11-11 10:28:43'),
(14, 'This is the prescription details for patient id 5002', 'Not Collected', 1001, 5002, NULL, '2021-11-11 09:57:31', NULL),
(15, 'This is the prescription details for patient id 5002', 'Not Collected', 1001, 5002, NULL, '2021-11-11 09:57:31', NULL),
(16, 'This is the prescription details for patient id 5002', 'Not Collected', 1001, 5002, NULL, '2021-11-11 09:57:31', NULL),
(17, 'This is the prescription details for patient id 5002', 'Not Collected', 1001, 5002, NULL, '2021-11-11 09:57:31', NULL),
(18, 'This is the prescription details for patient id 5002', 'Not Collected', 1001, 5002, NULL, '2021-11-11 09:57:31', NULL),
(19, 'This is the prescription details for patient id 5002', 'Not Collected', 1001, 5002, NULL, '2021-11-11 09:57:31', NULL),
(20, 'This is the prescription details for patient id 5002', 'Collected', 1001, 5002, 2001, '2021-11-11 09:57:31', '2021-11-12 21:35:13'),
(21, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(22, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(23, 'This is the prescription details for patient id 5003', 'Collected', 1001, 5003, 2001, '2021-11-11 09:57:35', '2021-11-12 21:35:04'),
(24, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(25, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(26, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(27, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(28, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(29, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(30, 'This is the prescription details for patient id 5003', 'Not Collected', 1001, 5003, NULL, '2021-11-11 09:57:35', NULL),
(31, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(32, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(33, 'This is the prescription details for patient id 5004', 'Collected', 1001, 5004, 2001, '2021-11-11 09:57:40', '2021-11-12 21:35:16'),
(34, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(35, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(36, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(37, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(38, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(39, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(40, 'This is the prescription details for patient id 5004', 'Not Collected', 1001, 5004, NULL, '2021-11-11 09:57:40', NULL),
(41, 'This is the prescription details for patient id 5005', 'Collected', 1001, 5005, 2001, '2021-11-11 09:57:47', '2021-11-12 21:35:25'),
(42, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(43, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(44, 'This is the prescription details for patient id 5005', 'Collected', 1001, 5005, 2001, '2021-11-11 09:57:47', '2021-11-12 21:30:06'),
(45, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(46, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(47, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(48, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(49, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(50, 'This is the prescription details for patient id 5005', 'Not Collected', 1001, 5005, NULL, '2021-11-11 09:57:47', NULL),
(51, 'This is the prescription details for patient id 5006', 'Collected', 1002, 5006, 2001, '2021-11-11 09:58:00', '2021-11-11 10:28:56'),
(52, 'This is the prescription details for patient id 5006', 'Collected', 1002, 5006, 2001, '2021-11-11 09:58:00', '2021-11-11 10:28:58'),
(53, 'This is the prescription details for patient id 5006', 'Collected', 1002, 5006, 2001, '2021-11-11 09:58:00', '2021-11-12 21:29:55'),
(54, 'This is the prescription details for patient id 5006', 'Collected', 1002, 5006, 2001, '2021-11-11 09:58:00', '2021-11-12 21:34:58'),
(55, 'This is the prescription details for patient id 5006', 'Not Collected', 1002, 5006, NULL, '2021-11-11 09:58:00', NULL),
(56, 'This is the prescription details for patient id 5006', 'Not Collected', 1002, 5006, NULL, '2021-11-11 09:58:00', NULL),
(57, 'This is the prescription details for patient id 5006', 'Not Collected', 1002, 5006, NULL, '2021-11-11 09:58:00', NULL),
(58, 'This is the prescription details for patient id 5006', 'Not Collected', 1002, 5006, NULL, '2021-11-11 09:58:00', NULL),
(59, 'This is the prescription details for patient id 5006', 'Not Collected', 1002, 5006, NULL, '2021-11-11 09:58:00', NULL),
(60, 'This is the prescription details for patient id 5006', 'Not Collected', 1002, 5006, NULL, '2021-11-11 09:58:00', NULL),
(61, 'This is the prescription details for patient id 5007', 'Not Collected', 1002, 5007, NULL, '2021-11-11 09:58:05', NULL),
(62, 'This is the prescription details for patient id 5007', 'Not Collected', 1002, 5007, NULL, '2021-11-11 09:58:05', NULL),
(63, 'This is the prescription details for patient id 5007', 'Not Collected', 1002, 5007, NULL, '2021-11-11 09:58:05', NULL),
(64, 'This is the prescription details for patient id 5007', 'Not Collected', 1002, 5007, NULL, '2021-11-11 09:58:05', NULL),
(65, 'This is the prescription details for patient id 5007', 'Not Collected', 1002, 5007, NULL, '2021-11-11 09:58:05', NULL),
(66, 'This is the prescription details for patient id 5007', 'Collected', 1002, 5007, 2001, '2021-11-11 09:58:05', '2021-11-12 21:29:52'),
(67, 'This is the prescription details for patient id 5007', 'Collected', 1002, 5007, 2001, '2021-11-11 09:58:05', '2021-11-12 21:35:30'),
(68, 'This is the prescription details for patient id 5007', 'Collected', 1002, 5007, 2001, '2021-11-11 09:58:05', '2021-11-12 21:34:48'),
(69, 'This is the prescription details for patient id 5007', 'Collected', 1002, 5007, 2001, '2021-11-11 09:58:05', '2021-11-12 21:34:46'),
(70, 'This is the prescription details for patient id 5007', 'Not Collected', 1002, 5007, NULL, '2021-11-11 09:58:05', NULL),
(71, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(72, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(73, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(74, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(75, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(76, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(77, 'This is the prescription details for patient id 5008', 'Collected', 1002, 5008, 2001, '2021-11-11 09:58:09', '2021-11-12 21:35:33'),
(78, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(79, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(80, 'This is the prescription details for patient id 5008', 'Not Collected', 1002, 5008, NULL, '2021-11-11 09:58:09', NULL),
(81, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(82, 'This is the prescription details for patient id 5009', 'Collected', 1002, 5009, 2001, '2021-11-11 09:58:14', '2021-11-12 21:35:37'),
(83, 'This is the prescription details for patient id 5009', 'Collected', 1002, 5009, 2001, '2021-11-11 09:58:14', '2021-11-12 21:35:40'),
(84, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(85, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(86, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(87, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(88, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(89, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(90, 'This is the prescription details for patient id 5009', 'Not Collected', 1002, 5009, NULL, '2021-11-11 09:58:14', NULL),
(91, 'This is the prescription details for patient id 5010', 'Collected', 1002, 5010, 2001, '2021-11-11 09:58:20', '2021-11-12 21:35:47'),
(92, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(93, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(94, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(95, 'This is the prescription details for patient id 5010', 'Collected', 1002, 5010, 2001, '2021-11-11 09:58:20', '2021-11-12 21:35:52'),
(96, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(97, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(98, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(99, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL),
(100, 'This is the prescription details for patient id 5010', 'Not Collected', 1002, 5010, NULL, '2021-11-11 09:58:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `PrescriptionId` int(11) NOT NULL,
  `TokenId` int(11) NOT NULL,
  `TokenCode` varchar(255) NOT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`PrescriptionId`, `TokenId`, `TokenCode`, `CreatedDateTime`) VALUES
(1, 1, '82bf6564d358e8666c10', '2021-11-12 20:44:36'),
(2, 2, '16fb33d048362a5f914b', '2021-11-12 20:44:55'),
(3, 3, 'b4bdd1c5506a41fad30c', '2021-11-12 20:45:00'),
(4, 4, 'a1583dd22365395364df', '2021-11-12 20:45:06'),
(5, 5, 'decf8ed1e8562932b7b3', '2021-11-12 20:46:10'),
(6, 6, '58e21642f83c3d082281', '2021-11-12 20:49:15'),
(7, 7, '21670c59429a5b41288d', '2021-11-12 20:49:41');

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
(1, 'Admin1', '$2y$10$uwsOIQnQhRZRL5rJGMT9BOXmdVR4p.fFKfqW1G57rTF5lUANbgJxu', 'admin', '2021-11-11 09:45:03'),
(2, 'Admin2', '$2y$10$KX9qrwXnNl0IHe.zCrZYTOMBMXPUf9GrX.c12zP6s3n8XjzV1jL2q', 'admin', '2021-11-11 09:45:16'),
(3, 'Doctor001', '$2y$10$7kJm3.vjTRKK8UnF7SSGIePT8/GNw6ZyNx6TOPe/DIPSpurmEIMOy', 'doctor', '2021-11-11 09:45:52'),
(4, 'Doctor002', '$2y$10$ikWj1ADAHjDY1rK86.IbiueDUGPnJBTT4mg95CyXvwhCBHm61DXi6', 'doctor', '2021-11-11 09:45:52'),
(5, 'Doctor003', '$2y$10$q1JCBF15OJu9OCdK3bp6.ebO.e2XhQ93ze62xLpFgE/pDGPGfLYHi', 'doctor', '2021-11-11 09:45:52'),
(6, 'Doctor004', '$2y$10$4XA7xK/PgATjONjk1AGqNeTzcHBQeMYiAB5WnRsm71BX/apZmIJRW', 'doctor', '2021-11-11 09:45:52'),
(7, 'Doctor005', '$2y$10$U6QGtXA52TqKFzhSCmDSWu7Te7SSjFwTPvmsFhTFjkKHZ2EBWHl16', 'doctor', '2021-11-11 09:45:52'),
(8, 'Doctor006', '$2y$10$9B9YfyQwzmR4XWmZbe5jPOT8QsPhqwgpOa44a1Ya6Y2KWCiV/BXXC', 'doctor', '2021-11-11 09:45:53'),
(9, 'Doctor007', '$2y$10$20QfoH0nu5SzQ2g6ZA4/u.qN3BbALdk9TyhdoEhk0nHO53MlB301i', 'doctor', '2021-11-11 09:45:53'),
(10, 'Doctor008', '$2y$10$xkCu26tIq0KM6g3vDurWZucFviejMaYMZLSwQYs/X1U9Knxsl4qaq', 'doctor', '2021-11-11 09:45:53'),
(11, 'Doctor009', '$2y$10$DsPkxGv0WaGDO8MEH843nu1hDxlmhGhGVrrGnIUtY0gvJoZW2eqCq', 'doctor', '2021-11-11 09:45:53'),
(12, 'Doctor010', '$2y$10$YO/lgNR2qqrHD/1MvcsVreeyQ7TBHSrIJZwwmaTVs9GhoUdS/zmRa', 'doctor', '2021-11-11 09:45:53'),
(13, 'Doctor011', '$2y$10$3EuW5WCHVg/DW0MDX1Nqle.AlbhpVc499R3Bcl2dJaFHvKHVXZUPO', 'doctor', '2021-11-11 09:45:53'),
(14, 'Doctor012', '$2y$10$FiPpGTym/lwBh3LyLYWZ2Of6V8jNM7aQQOb/MjnBOCK3NZkka4n0.', 'doctor', '2021-11-11 09:45:53'),
(15, 'Doctor013', '$2y$10$QQN7NkHOJ6gU29E/ZgStPuhy5TflgRF.ESu5.LUKqElF0RxUicAGS', 'doctor', '2021-11-11 09:45:53'),
(16, 'Doctor014', '$2y$10$/VDnboZo.Sm1vQzBrxguFevFP53mg9JmHV0nuSIoilDBwMAYI3Uve', 'doctor', '2021-11-11 09:45:53'),
(17, 'Doctor015', '$2y$10$pE623fGrV8QItr5XiPveGusXTaajyKdBZIpaDPlK4AY4FQvDI36/u', 'doctor', '2021-11-11 09:45:53'),
(18, 'Doctor016', '$2y$10$WQIg6LE/SXvqqSeQKLG02e.bErysI5ySYL.ogAgCs94utBq2m3Z5u', 'doctor', '2021-11-11 09:45:54'),
(19, 'Doctor017', '$2y$10$9JJ/8YVE1Eduv4cs9ky8VOEeXFUTvMVxp5OJR5LxkJGgh13JJiRqC', 'doctor', '2021-11-11 09:45:54'),
(20, 'Doctor018', '$2y$10$DelWXbWRTCurEHUJuwWCfODcaopnTxWjrPHiXM96Mw8nXlTFRchgS', 'doctor', '2021-11-11 09:45:54'),
(21, 'Doctor019', '$2y$10$edV9gvwaG/boGrl4AejRteUqoNbjDyf3ftmjHvvOWnSZmoX/A3s3i', 'doctor', '2021-11-11 09:45:54'),
(22, 'Doctor020', '$2y$10$W9wPRNoy0aWVYBiXpT7ehOLu.M6.rVjXXTrMoWMTim2vA3gGqvvme', 'doctor', '2021-11-11 09:45:54'),
(23, 'Doctor021', '$2y$10$gcR09N2LkDyUkNLa.jxK/eKKsZF7Q8LSsmK6AOV1RmLphl6O6wf9i', 'doctor', '2021-11-11 09:45:54'),
(24, 'Doctor022', '$2y$10$TRqqgDP6VfqHy5DlcwXfL.FZb6N6ilLbFx7K5M0A2D5JiC2sOyLZ6', 'doctor', '2021-11-11 09:45:54'),
(25, 'Doctor023', '$2y$10$zWd3.IwMiS/s4FMdkYSVJeOrXX8gDr9RHEspIZGFxMT8yD6F1pJYG', 'doctor', '2021-11-11 09:45:54'),
(26, 'Doctor024', '$2y$10$xAUGjANLsmh98BqJ0dVJ8O1b4gnn9dS7eNEJ.N0McQexhrRP85qna', 'doctor', '2021-11-11 09:45:54'),
(27, 'Doctor025', '$2y$10$vHGJgzW9pvXrGEdsVeTgqeLA9GvmBV2dpgvPDQV9Ij899c8okoIIC', 'doctor', '2021-11-11 09:45:54'),
(28, 'Doctor026', '$2y$10$jf/wlnJ6dOOZneG79TdS3eDsrLAx3ICHbblu3cGTnvJLwjNXgSDtW', 'doctor', '2021-11-11 09:45:55'),
(29, 'Doctor027', '$2y$10$zHnkUkbF8iXke4kUJ52OMOEWr8j1MYgQw5OLNucWDhmNng1MS9J0m', 'doctor', '2021-11-11 09:45:55'),
(30, 'Doctor028', '$2y$10$FxT4hJi7na3UulKqy5SeNuo46e1iekf1NgU/TGZBXuy8I94a0t0EW', 'doctor', '2021-11-11 09:45:55'),
(31, 'Doctor029', '$2y$10$QPAW.S1j0xmu3xFr0TCe7.rH/0KbLoKurWVAoG5ZlDT7OXNXMNiEK', 'doctor', '2021-11-11 09:45:55'),
(32, 'Doctor030', '$2y$10$rbh0meUrVeyO3y/NJ36MaObaevnPjNMFkzem7SZ5Qv0hWP0Q7ORGC', 'doctor', '2021-11-11 09:45:55'),
(33, 'Doctor031', '$2y$10$32FbZUwsYkDK4nvabhWaDuhHtTrODfzmSL26vQ8gGOWzT1QOHY4pK', 'doctor', '2021-11-11 09:45:55'),
(34, 'Doctor032', '$2y$10$7O7btiVrRsdboRKWj.MA7.9/g2OG0q7ak4el1UwVjL1qIioBGBoCq', 'doctor', '2021-11-11 09:45:55'),
(35, 'Doctor033', '$2y$10$leQZm1ygfjFaty2yHoCQ1uu.TR1K1Y.RR5pW3b4C9GncumPDFYjxC', 'doctor', '2021-11-11 09:45:55'),
(36, 'Doctor034', '$2y$10$tYeqRomPVpqDP3UptP/LyebJTkVkM46AAkNDfGlEU0BRilzwulYqG', 'doctor', '2021-11-11 09:45:55'),
(37, 'Doctor035', '$2y$10$GoUT2uTb27xWAacH8U6s5OLSIRMKVHZwSus.1pAseUrWfbU2DHBqu', 'doctor', '2021-11-11 09:45:56'),
(38, 'Doctor036', '$2y$10$DuTSxJDQeR71BL3hJ3Dq2eifRFxkah1kTF9I3VUWIYHEK5bDPC8wW', 'doctor', '2021-11-11 09:45:56'),
(39, 'Doctor037', '$2y$10$Oc19CF36tTXh36o16XKtxOUJOJvDNVvRpCH0GcmYCn24a44L6HhMC', 'doctor', '2021-11-11 09:45:56'),
(40, 'Doctor038', '$2y$10$YITZ1dJh8tq9czaBAUkL.eaAJDeo/0Ra7fZnTSvtd2hTLnvqKpzuu', 'doctor', '2021-11-11 09:45:56'),
(41, 'Doctor039', '$2y$10$pIbEavIHcIT2Hc5ZxyIKb.AKAC2v6pLWNA0j.d9XU7hZU0/8o7YG2', 'doctor', '2021-11-11 09:45:56'),
(42, 'Doctor040', '$2y$10$XUmNG03dQvMKF.zF8xol2OoTT.5qOmgNpiADZMvOram13G6aJ/EhC', 'doctor', '2021-11-11 09:45:56'),
(43, 'Doctor041', '$2y$10$6y9rWGGxc/p5DAh3/vdbuODKDtAlAlTHra8yvuv4BArp.hKGRtkvK', 'doctor', '2021-11-11 09:45:56'),
(44, 'Doctor042', '$2y$10$kssJLOiBvKmiFnH5M2QgR.mxo8g0IAD.Q2j2D3HC8CRUpfPqiI1im', 'doctor', '2021-11-11 09:45:56'),
(45, 'Doctor043', '$2y$10$pJvouTUwa4cjPHH5HkmV/OJFyrZ5QU6YYisscy73VlGZTk7NlyVLW', 'doctor', '2021-11-11 09:45:56'),
(46, 'Doctor044', '$2y$10$c/mHQEEHoHqv0FVe6BbxpOaJRwlG15Cr2FIhYg0u8mQ/3zQs.G.Oy', 'doctor', '2021-11-11 09:45:57'),
(47, 'Doctor045', '$2y$10$DCibI79waoKiRnM88rJq4ujoL1QyJTMPLWTTZTVrmw0bMm38zjtPO', 'doctor', '2021-11-11 09:45:57'),
(48, 'Doctor046', '$2y$10$P3Bd50xSuDui598.JTriAOrzerZYM0.4RhfZnPchrWIHhG5p4KRYy', 'doctor', '2021-11-11 09:45:57'),
(49, 'Doctor047', '$2y$10$hy2gBEdiIGV0LgMy1WolRuXWD/Sja7ECoa6rAeH52gUWt.x05IHMy', 'doctor', '2021-11-11 09:45:57'),
(50, 'Doctor048', '$2y$10$CpHc8sIgJOOfFUtbfSX1C.hFp74pqL9Ykv71D4R.l.gDwG8rilJaa', 'doctor', '2021-11-11 09:45:57'),
(51, 'Doctor049', '$2y$10$COS8eFr9J7FoP/8WYTucwuOnBDBKDRdAPs8FU2fGkWg.Vlv9E9nRW', 'doctor', '2021-11-11 09:45:57'),
(52, 'Doctor050', '$2y$10$gPN8gDZqpA9fSbn2MCZDXuvZfDyW2.mUjfrkOLxFiaKDlVozx72vC', 'doctor', '2021-11-11 09:45:57'),
(53, 'Doctor051', '$2y$10$ExSSn7X2B.JAVZ5RYNp6VuzX58XTnKnx9l6sY1hHmMv0f9JVfnTQi', 'doctor', '2021-11-11 09:45:57'),
(54, 'Doctor052', '$2y$10$sAN8Y7Lqm4WVT.QOE6WRquTfILxduMedZJ6dMk6cowZAygeMat9oK', 'doctor', '2021-11-11 09:45:57'),
(55, 'Doctor053', '$2y$10$EmZOVQ7izJTXZNAO3E7PWeP2tTOSFeJ.kEl5NUmiB0u5coQZDU0e6', 'doctor', '2021-11-11 09:45:58'),
(56, 'Doctor054', '$2y$10$a7aqo34HoLPwGmefmktKuOQnMnoEGc4c.R4G5sfQmCItSwHbK4bee', 'doctor', '2021-11-11 09:45:58'),
(57, 'Doctor055', '$2y$10$Uo/bu1XFzyUtaWD9yGDMu.FJ1Fx/Uz3eeZmqRWNEghM2WKI3W3UUG', 'doctor', '2021-11-11 09:45:58'),
(58, 'Doctor056', '$2y$10$dPq9oFOiJvTmcNuGP4yrYOtKDkq0qlPi7tQQNNgK21MzsRcW7xKJy', 'doctor', '2021-11-11 09:45:58'),
(59, 'Doctor057', '$2y$10$KFn1fRBrdQ/XZ4RmlJxWw.4sOvINckuejZY3OZ0UJnqsdt5Zj.4mm', 'doctor', '2021-11-11 09:45:58'),
(60, 'Doctor058', '$2y$10$kgyftptxNX1difFrseANWeggYKnkk7qVwJV0/HgmxZh85pZyNk5Qi', 'doctor', '2021-11-11 09:45:58'),
(61, 'Doctor059', '$2y$10$Qt9ruTbRFrqC2AFh8lhdleCeanBziLXahwpGW9A57hj/.n67ip3P.', 'doctor', '2021-11-11 09:45:58'),
(62, 'Doctor060', '$2y$10$ByD5cS72kfIetaG5GIbz2epRpzrtGfQ/F.vuNvQ0osGAGOF87fQHy', 'doctor', '2021-11-11 09:45:58'),
(63, 'Doctor061', '$2y$10$ygwg.Y3yMsnDc.nL9W/A.uLVLUxeMtCvKBUESfdP.nc8BkoJ0S9mS', 'doctor', '2021-11-11 09:45:58'),
(64, 'Doctor062', '$2y$10$JPZIVNi4QvWRLEF4xoexIeR/hZa9opWotrhU2ta/cplB3ZrQlqRLa', 'doctor', '2021-11-11 09:45:59'),
(65, 'Doctor063', '$2y$10$jo0P5JAe5ZM.Xa0W2sbw8.oG7tm39Yd0p7B.c4ZWhqA3Bwn68H0wq', 'doctor', '2021-11-11 09:45:59'),
(66, 'Doctor064', '$2y$10$6Ks2I46IcTjkRIhAcmntnuAwfj86eSFuEfzjca7852MwnhTtpOrH.', 'doctor', '2021-11-11 09:45:59'),
(67, 'Doctor065', '$2y$10$hNNoMP7uKchKABd9MrffueRvU947VJm6T8GMjXhghQ8W84BneTeOe', 'doctor', '2021-11-11 09:45:59'),
(68, 'Doctor066', '$2y$10$lAK.M1jLPV/tWYoAYUNzD.ax10/kZiiKZ8fhzOpZ0fAcrBkc2544.', 'doctor', '2021-11-11 09:45:59'),
(69, 'Doctor067', '$2y$10$En1FrvCRHnhlh7ZG6OF4Ku9IEAX64k59WmRg84rWLOMlsEfc5f1ry', 'doctor', '2021-11-11 09:45:59'),
(70, 'Doctor068', '$2y$10$krvVmCUFi4Ug5200V.lkR.iTWFv/o4.ErCVjgOuFNlABK5a1uRKeW', 'doctor', '2021-11-11 09:45:59'),
(71, 'Doctor069', '$2y$10$fjuisK/otZByVQNB8oYRRuc9iaO5e.4WK0Xr4wJo4MI/v8.aMPVTu', 'doctor', '2021-11-11 09:45:59'),
(72, 'Doctor070', '$2y$10$PKotXNqt4XQkF1dcmEUqiO4AezpaGloTL0dUNivCncYIbak0kiZkW', 'doctor', '2021-11-11 09:45:59'),
(73, 'Doctor071', '$2y$10$0PGGT4QSMukyYuotRMGzcOr59XBt29hSeYxSSVeIZOpk/zKC6BB62', 'doctor', '2021-11-11 09:45:59'),
(74, 'Doctor072', '$2y$10$sjs0fctWrb74VMXpVA5Fr.t9ZghRVdCf5INDUkIuE0jmHKAkPzWKq', 'doctor', '2021-11-11 09:46:00'),
(75, 'Doctor073', '$2y$10$Q8kSAIy8UiKwhClhkqsRSe33fo2E0iFrh7Tjla1PkUU6Mq1DyVOD.', 'doctor', '2021-11-11 09:46:00'),
(76, 'Doctor074', '$2y$10$Mi54AG8YN26Yyionarye2uCxb3R1t6Ywwp54Yf3VOC/mF1lAR3BR6', 'doctor', '2021-11-11 09:46:00'),
(77, 'Doctor075', '$2y$10$03NWQsO7ABT6FH2iklCPbO4dOiiWAcxZ/oxIm1Hsm6XycGxajy1Qy', 'doctor', '2021-11-11 09:46:00'),
(78, 'Doctor076', '$2y$10$iSQ2.sD.M8xUnPlmhXelgOPNuk0p/UAEnycg7XfyS4Xf86fJw8BhS', 'doctor', '2021-11-11 09:46:00'),
(79, 'Doctor077', '$2y$10$xNXaqah2vmqTxS8Nmjydku5tv51ZUdhZ/VSDttVHKH3ODYqXZ9sRO', 'doctor', '2021-11-11 09:46:00'),
(80, 'Doctor078', '$2y$10$Xgai9QJ2roTwuc4ZxwuiweV3Kiuh9hpg3A31/m57PTUiCvyC3IMUa', 'doctor', '2021-11-11 09:46:00'),
(81, 'Doctor079', '$2y$10$My.B81TSkJfB4Yno5wUhW.sSd4XsMgM/Y9yA982MK7J4ogzjAY/C6', 'doctor', '2021-11-11 09:46:00'),
(82, 'Doctor080', '$2y$10$FlhVsWXdc9lL06UuEQcLAelJLvB1TftepGOcjF/6DcGLb73SXwFCW', 'doctor', '2021-11-11 09:46:00'),
(83, 'Doctor081', '$2y$10$ZRcnteFaihr3IcExELtDNuH3tYLItqo91SQGC0wjU2OUQHByw.pla', 'doctor', '2021-11-11 09:46:01'),
(84, 'Doctor082', '$2y$10$kLm8MM0xJgUMTL8M8xVI/OGF.KzVn0Yo9J/R4c4fpIGbYNNFw4SZa', 'doctor', '2021-11-11 09:46:01'),
(85, 'Doctor083', '$2y$10$odoU8TSWOuNyG3CY2sVPwekB8ikRLsGtwPczo.MXoZ8lIvJq2tMvK', 'doctor', '2021-11-11 09:46:01'),
(86, 'Doctor084', '$2y$10$NqGEIB4xFFukbIYXqIq82uV0cCWPKCDrFWQboBV6PoJES4rMHx9iS', 'doctor', '2021-11-11 09:46:01'),
(87, 'Doctor085', '$2y$10$gCTo.eEvFT5JA7u1SKprN.LcU9gF9v03dPEy5fzqrM62VpemscQxG', 'doctor', '2021-11-11 09:46:01'),
(88, 'Doctor086', '$2y$10$/l8aSXd6ojJJc5xMgHmmvuROO/tSh/hzXSDvo.u5530nrlFywpmnC', 'doctor', '2021-11-11 09:46:01'),
(89, 'Doctor087', '$2y$10$PLGvJ54VWlLhIHjIAByHgevS35IbfM.FGbvolhRBjXW.C8aa6BJZm', 'doctor', '2021-11-11 09:46:01'),
(90, 'Doctor088', '$2y$10$SAbCK7xs6otDO6ypEFDgSeuYozus5fh5x72vhmyf7eeifCPRM5vUW', 'doctor', '2021-11-11 09:46:01'),
(91, 'Doctor089', '$2y$10$VOvXkc6RwMFyYF7eTs/9OOApSCewOPPY8DQ565lnn2GwKITxRlYnW', 'doctor', '2021-11-11 09:46:01'),
(92, 'Doctor090', '$2y$10$JHsVYSILoMoVaYFd/cfLQOuooIjunR/j/eT83lSqe8CAlZigL9Oj2', 'doctor', '2021-11-11 09:46:01'),
(93, 'Doctor091', '$2y$10$BPS9576jJtS3uknURFV/n.8PU7VNBs0Rv6TC38npBQFfxVbLe42b6', 'doctor', '2021-11-11 09:46:02'),
(94, 'Doctor092', '$2y$10$nOgfNlY3MbNJY52UvRtYoe4SA0gUEemGgNxkRczs1PaAPDc/21JyG', 'doctor', '2021-11-11 09:46:02'),
(95, 'Doctor093', '$2y$10$gXlEi5IIYH9IihxgffZAX.qm8RwbYqytbROPcl2kDNugRtrkZsDiO', 'doctor', '2021-11-11 09:46:02'),
(96, 'Doctor094', '$2y$10$B.hJIKR2EOqZbgvw11yQu.Iu.TmPNLyz2JJisz7FeDFJko1xdZVFu', 'doctor', '2021-11-11 09:46:02'),
(97, 'Doctor095', '$2y$10$HvOX4XcPle.W9iKR/SN1wOw0KcfkogFZbO1vEII5Cx1nOf7AYWctG', 'doctor', '2021-11-11 09:46:02'),
(98, 'Doctor096', '$2y$10$jB.Nd8REsjZYN1ytsBP3BO7ploK0aE4jkpKGJjaeqZN86zPdPmIf6', 'doctor', '2021-11-11 09:46:02'),
(99, 'Doctor097', '$2y$10$9IqoXcyxSkWd2VG4tujYs.nhWMV/bfoTk9AUKYKSJvzdAsh.ciZTG', 'doctor', '2021-11-11 09:46:02'),
(100, 'Doctor098', '$2y$10$XJNEBhjg/w4RzOWL68geVuoHA2QUcR.r5Q5GKIJ.f/3lqQPO8/Kne', 'doctor', '2021-11-11 09:46:02'),
(101, 'Doctor099', '$2y$10$esiSZdk1EkEwft4iClvgAu3R1V/w/b11H3VDK.vRUr69HgKAAsx7i', 'doctor', '2021-11-11 09:46:02'),
(102, 'Doctor100', '$2y$10$YJ2TcajccL10/OcW5R.6EuXqpZX4QCTSwM6kcLPnJvIfdHgTZQalC', 'doctor', '2021-11-11 09:46:03'),
(103, 'Patient001', '$2y$10$JIWliuOETWcHI4x67PT5yO3RMxftObbSDkGfmZVS6ZZ1Zq4F9m/HW', 'patient', '2021-11-11 09:48:05'),
(104, 'Patient002', '$2y$10$JiY.w.n/d0BBy9LbRL0vpurexaE0WPeUc98rU8JsrILhmBEKvqYzq', 'patient', '2021-11-11 09:48:05'),
(105, 'Patient003', '$2y$10$URbNj0qODq2Eum0bAlxmj.v7Oet.SbVPJcgDv22AU906K0py3f0ca', 'patient', '2021-11-11 09:48:05'),
(106, 'Patient004', '$2y$10$.A9BarqTVeElkyUDpG/.RuETAIVexFk0xULx0U7uavM9z34nUhPcm', 'patient', '2021-11-11 09:48:05'),
(107, 'Patient005', '$2y$10$e/FwWdR4rff87foQRnttx.8RoqGqp/4uVwGoIlrxvO2mUV078h.1S', 'patient', '2021-11-11 09:48:05'),
(108, 'Patient006', '$2y$10$1KkVN61RF.zpWBAccxdSueN1s8t6PdleC/QGpy7pGDse9aKNNO8V.', 'patient', '2021-11-11 09:48:05'),
(109, 'Patient007', '$2y$10$SAxysfn.fRIZy/8FutKUFOXHZ6U4CW0RpRaH4P6B.whKh3wLjZQuS', 'patient', '2021-11-11 09:48:06'),
(110, 'Patient008', '$2y$10$VNG.7j.g/0rtw0DGR7fBXuDGmH3wTZ8ja.sC2rc.ORcGcLFazEk/S', 'patient', '2021-11-11 09:48:06'),
(111, 'Patient009', '$2y$10$GZK5MCgEspbDzY/ilp9KfusxP1urN3vROC5FP9fKYdEJsdgN2gh16', 'patient', '2021-11-11 09:48:06'),
(112, 'Patient010', '$2y$10$yiO528Zoj/CyaVA5V0KmteDQ7eSVU4KXmO.PrY5b8evjy2cs6CEOC', 'patient', '2021-11-11 09:48:06'),
(113, 'Patient011', '$2y$10$5OolX9iYnWdSA5s/GJ9naOKU5B4H330ZzNN0wnd3BWnTXnDHgIN1O', 'patient', '2021-11-11 09:48:06'),
(114, 'Patient012', '$2y$10$a30n.j7G4pTeKcty7glsaOeaIJ/Xd.Y3XpvHGgYBr2.8pQMXaO6Gi', 'patient', '2021-11-11 09:48:06'),
(115, 'Patient013', '$2y$10$fAyl/xwuAn/Z5qiwUqgi3u5JryjNu4pRbrv048NXWwB4CQF1zHJ/q', 'patient', '2021-11-11 09:48:06'),
(116, 'Patient014', '$2y$10$HTKWa2FPZ8nI4WsBP07YDe.Vo/VA/ZZbvGyS8IFkptqsFIO2ZiSry', 'patient', '2021-11-11 09:48:06'),
(117, 'Patient015', '$2y$10$JyoL55iNz1RM5s4ViLNxS.b8SFpXXkrv2QiIFlb/1ZJLWoKGVXD42', 'patient', '2021-11-11 09:48:06'),
(118, 'Patient016', '$2y$10$e.n7FxNWxiB/Y6wVho3Jr.fkM./LLkcc3WpGt8SVwSgWL/9cANKS.', 'patient', '2021-11-11 09:48:07'),
(119, 'Patient017', '$2y$10$WfTeA3CTt7cij0dk40Xu2.dgx874dtZ0n.DnlwUDQLRu7DqCD9WsG', 'patient', '2021-11-11 09:48:07'),
(120, 'Patient018', '$2y$10$PODUe/IT9MyQqNnHutkpTO/AfXZzqZBCvhyLfqxTfkgoU4t9OVVai', 'patient', '2021-11-11 09:48:07'),
(121, 'Patient019', '$2y$10$/64vkwD44BBUqqMOa88feuSMaXBpt1B0f1M1.7o8l98zIUJEF3HRC', 'patient', '2021-11-11 09:48:07'),
(122, 'Patient020', '$2y$10$.S7c.pIPpvQ8XafqJN3o.OsCCQ10e33cyE58vgPUWy4QbncSeAM2a', 'patient', '2021-11-11 09:48:07'),
(123, 'Patient021', '$2y$10$JFz1A6QS0vmLR07.tyDeHuVrr7CjTxnoMvRbpLQEhnsWKdSAjT5Sa', 'patient', '2021-11-11 09:48:07'),
(124, 'Patient022', '$2y$10$1fEqLW982ZXaCNg6XQWhwO1YmjH4Sj8IHlDBnmbMgb7fsUW9gzq5q', 'patient', '2021-11-11 09:48:07'),
(125, 'Patient023', '$2y$10$YLqBD/YBdEROPi0hBWQq0uVDXIn6zlvYAAWJYK3giNF2FSRld0KRu', 'patient', '2021-11-11 09:48:07'),
(126, 'Patient024', '$2y$10$mUnFzlwDBVIRJAc6PH8qnOloR.Iu14HmzCtISmBgfnDlnkDC6hPGS', 'patient', '2021-11-11 09:48:07'),
(127, 'Patient025', '$2y$10$2Oeellamei9m8BANB9A8WeVRZ4DwAfR9Cfi9gGWlxFAHkeGb7mEFq', 'patient', '2021-11-11 09:48:08'),
(128, 'Patient026', '$2y$10$gTGQ7z6DOfSdmobNYKR6EOeVxsBTtIr7VxsLL5siSTSykDoFu6Zoi', 'patient', '2021-11-11 09:48:08'),
(129, 'Patient027', '$2y$10$v7iwAwhpVt3MFqrNn4kIvOH9IP9BO4HVJPpvjBLtVOE9BuscU1TTO', 'patient', '2021-11-11 09:48:08'),
(130, 'Patient028', '$2y$10$yp3Sm2g5asNucB5eRqw6Put.h8N6YZwRkxnBG9ckt7JLp3Jzv.Rf.', 'patient', '2021-11-11 09:48:08'),
(131, 'Patient029', '$2y$10$T08HZYjItoL/hXtY3nRiBOxqK87ZoMkQqfAoDEVuEVVS9K/yi4Kce', 'patient', '2021-11-11 09:48:08'),
(132, 'Patient030', '$2y$10$SpKGiLvf7MLVwkyrnjhP2eqNuYTGiJlHXcASv.dNONCZVVVnX/9AG', 'patient', '2021-11-11 09:48:08'),
(133, 'Patient031', '$2y$10$sDNGKuob.Qfkyddie1myxuF2rr.TaI4BHeus1hx3HQQCRE0QAdkJ6', 'patient', '2021-11-11 09:48:08'),
(134, 'Patient032', '$2y$10$uYyjFOWz66CWansn5DtuCumUCVYcT7Y4dnnXeczAdElek1s.XAyiC', 'patient', '2021-11-11 09:48:08'),
(135, 'Patient033', '$2y$10$4FC2y4t0SmE.09tgoRCItugxh/LuLirj/YCAZStv6MeVbMJO/qdfS', 'patient', '2021-11-11 09:48:08'),
(136, 'Patient034', '$2y$10$S6X1zOJhJaMvPrwxiQsSBu9oPgZUu8/9GpahIz/48i7Wi5TzUwrOO', 'patient', '2021-11-11 09:48:08'),
(137, 'Patient035', '$2y$10$RWUQLYZ6L0QYQJIBiN/mg.AjCu7DZBBEQIfSCvCkAZE0UmglMtqvm', 'patient', '2021-11-11 09:48:09'),
(138, 'Patient036', '$2y$10$TGZgyR7tSouH1zGGse9kKO9hd7Ir4cfzsvt.Bz/UMU//B/rb3dKkW', 'patient', '2021-11-11 09:48:09'),
(139, 'Patient037', '$2y$10$.dhzDftJB5PngSAdnVbxiOYymV66t77xiYOnaWWh8XFj1pbbrSeOK', 'patient', '2021-11-11 09:48:09'),
(140, 'Patient038', '$2y$10$ateS/1HiwGYy7GbRUGA0He3QWQ.X1OTccQrlHWTiV2uFW8l/jhlMe', 'patient', '2021-11-11 09:48:09'),
(141, 'Patient039', '$2y$10$bEqSYgw0hG67NIVEX93tiONDCy8VuNGBpilhcWh.ltsYgbGdxKBZS', 'patient', '2021-11-11 09:48:09'),
(142, 'Patient040', '$2y$10$vYrgCsudUt8QQoPhMhIjq.MEybmCUp0pQvlbV7Jlad3ahCsznyu0K', 'patient', '2021-11-11 09:48:09'),
(143, 'Patient041', '$2y$10$jSSLdkomcJdtg3lwh02OHe17MxTrx8VSAyaxqnnZzyKBJOydnSIRu', 'patient', '2021-11-11 09:48:09'),
(144, 'Patient042', '$2y$10$XVRcbyjLoam.6Y055osycOzFhNRwbnzGgAdwUdQ8xflRYbuSekZma', 'patient', '2021-11-11 09:48:09'),
(145, 'Patient043', '$2y$10$Ig2HOKXjiiHZ5Vaw.rJyB.dr23ZnfbLyCZu8AIN8xOf.R8Cnc6kt6', 'patient', '2021-11-11 09:48:09'),
(146, 'Patient044', '$2y$10$kE.U42hMpDLdnVtGy3YTYeFRctxzSd0tCu2J4gJ/jesjGNTKcZ8.K', 'patient', '2021-11-11 09:48:10'),
(147, 'Patient045', '$2y$10$N6K7wmZ24jbqGEPsujY6uuGODve24gMoUp8kpshOgOaT1gv2WMWxG', 'patient', '2021-11-11 09:48:10'),
(148, 'Patient046', '$2y$10$Y0zh4/Qv6Ky4aU/gfYP4CO1fwEhIqo56zcmL7viSVRPMfTnJYpgJ.', 'patient', '2021-11-11 09:48:10'),
(149, 'Patient047', '$2y$10$F/VRtQQXcQvkQ9rrZ3bTAewheToFdzaxFIbziv2pcuGY0POmMBg26', 'patient', '2021-11-11 09:48:10'),
(150, 'Patient048', '$2y$10$ZJUPOCqOnoyqGsa8NJQdyOPFLzGG1FKSzAf3ugJlMpQGJgpt80W2e', 'patient', '2021-11-11 09:48:10'),
(151, 'Patient049', '$2y$10$Ia2dByAhZdl3ehDZ1VtAgex/SFtI5YHCObHdsBt7HAy/UKYyo4OmK', 'patient', '2021-11-11 09:48:10'),
(152, 'Patient050', '$2y$10$kfCWIbi3OZGn.voswdFIjO94LuEIEuY8L5yta5WxBQJgt13cZvCBu', 'patient', '2021-11-11 09:48:10'),
(153, 'Patient051', '$2y$10$naV9cn5dEBOwQLD1tEuLpepMDt27jB20NxH78Un0EiqvxIIp4Hs26', 'patient', '2021-11-11 09:48:10'),
(154, 'Patient052', '$2y$10$yXNhyuZxV0twjuPS2/.ok.xiVWNXiSsRfjdDh1a3R38MuD9eUQcUO', 'patient', '2021-11-11 09:48:11'),
(155, 'Patient053', '$2y$10$dqBlIsokb1Ck0k.LZ8b4h.IaiDut.C7FMOXfr4BlzTIC3vZsHpeAq', 'patient', '2021-11-11 09:48:11'),
(156, 'Patient054', '$2y$10$U9eSrlbgEOhrAE9Rk9UXzuGek6nj6p71aUYWXsy1XEVWGM1UhEJFa', 'patient', '2021-11-11 09:48:11'),
(157, 'Patient055', '$2y$10$n..vVCOmurtL9jgyjkzQt.92iccWJKr/tPuUYzPqjy8UHgqg1GtoS', 'patient', '2021-11-11 09:48:11'),
(158, 'Patient056', '$2y$10$A4oA4QL7NOAYV.zcJgsirOts/q4C5L4l4aVHohyT5NLapFJkgDr7G', 'patient', '2021-11-11 09:48:11'),
(159, 'Patient057', '$2y$10$/YY1MvxrSNF0QZOsOhIb9.zC5DCHzzPJDUx/U8rHZENrrUvGjw.dW', 'patient', '2021-11-11 09:48:11'),
(160, 'Patient058', '$2y$10$.IN/xoI0lR2JpIAyfw8JjecJd/Uq2Ko6sIWsxj3tQeGE.uh2B2FnW', 'patient', '2021-11-11 09:48:11'),
(161, 'Patient059', '$2y$10$V3ZsECE.6df9Lt1jylaWauf.oxjS1IbnwFYYV2bZ/ZTtBAitlpZQu', 'patient', '2021-11-11 09:48:11'),
(162, 'Patient060', '$2y$10$BKvUd1T/KnwlLLhxgciar.nKh7nFiTYWBrsgzXixi5m2iLZ8q.vY6', 'patient', '2021-11-11 09:48:11'),
(163, 'Patient061', '$2y$10$aZDUM/avMPc0.943g1I2AuxccwG8ZQ3wdD7A02cdaxu48k5Wmot1C', 'patient', '2021-11-11 09:48:12'),
(164, 'Patient062', '$2y$10$coWOI5S3UDxGCTJlMr86O.JkQT7nm4d9vUd5mPZ7oSg4f7kf5Bsfa', 'patient', '2021-11-11 09:48:12'),
(165, 'Patient063', '$2y$10$hQi0KiYWx7z69sudnQ36nOyEGD9rRyto6GyJC72tLJDF0XhJfk6Dq', 'patient', '2021-11-11 09:48:12'),
(166, 'Patient064', '$2y$10$xb/OL0I75uWGCDVuOP9I2OY4PZ95yahvluA05zHXhN4GBhQpIHrsi', 'patient', '2021-11-11 09:48:12'),
(167, 'Patient065', '$2y$10$DY92VXfv19fTUQKqN/zk3O62IY6K7/mmj8jDux5SFBd352cxHXDsi', 'patient', '2021-11-11 09:48:12'),
(168, 'Patient066', '$2y$10$axw5eNwlBBeHTa2Hroa8DOSvJke.HMg99Ls4A1elBMNV/t5tdCmVy', 'patient', '2021-11-11 09:48:12'),
(169, 'Patient067', '$2y$10$PdRhvJLK/TZDzxAujYi3QeXGJ8NOFyxKlYF0.bFjIhet5vOIY1zfK', 'patient', '2021-11-11 09:48:12'),
(170, 'Patient068', '$2y$10$7ah0YVBCM/QnBqNDKBA2reyU6PgaiSMWT3nZgt.HIUdzizjGp.wYK', 'patient', '2021-11-11 09:48:12'),
(171, 'Patient069', '$2y$10$U4LFcEBBnBfbtxwSsmSPl.ee7LydypAKO5gaqhpx9M5Z8yYhN9RmG', 'patient', '2021-11-11 09:48:12'),
(172, 'Patient070', '$2y$10$GgTghxoSjnFzdyh1KEwGD.svzyGPHrewIVL7vlOT6kxjwdjUboeh6', 'patient', '2021-11-11 09:48:12'),
(173, 'Patient071', '$2y$10$FzF6zFqb.quFT4mAQitbceRhtHUPOlEI9Kl5DlEZ/LlBzmGbhDH3y', 'patient', '2021-11-11 09:48:13'),
(174, 'Patient072', '$2y$10$efmzw3STvDdhOG1c/eXm0e0KcpxORys28ulHakIHdYgvtdxKDLfGS', 'patient', '2021-11-11 09:48:13'),
(175, 'Patient073', '$2y$10$MKO3OMVz9lMrjcAJHSMI5Ob55aTlW51eR3pypBVkT1kPNELWG.Yom', 'patient', '2021-11-11 09:48:13'),
(176, 'Patient074', '$2y$10$TslgaQRis/dsMPyO1GlZTedMHmIT7cKGfGi4HilU8gR74Vxm63Xz2', 'patient', '2021-11-11 09:48:13'),
(177, 'Patient075', '$2y$10$2nxvH5MWGTgutRWDFRTZ8uk.z3zgAU/hhd6QB0GLUGrxpUtPhPMn.', 'patient', '2021-11-11 09:48:13'),
(178, 'Patient076', '$2y$10$kq8GiiCe6qmXnz.1taM6Eea1JE5vmrUMl/zThRHlBcvcg6EUDBYtm', 'patient', '2021-11-11 09:48:13'),
(179, 'Patient077', '$2y$10$Q6NLdF8Em/ZQE96Yi6VPYeVOOsywIaWZOdZP0.WD1DMd4bCw/27pW', 'patient', '2021-11-11 09:48:13'),
(180, 'Patient078', '$2y$10$g8YCeyOA7xNgLO9T1K8g5uJhRnujJI4iBWmt9ZiHWhNCEkfC.cJ.m', 'patient', '2021-11-11 09:48:13'),
(181, 'Patient079', '$2y$10$5VF6S/YHrkwjbk3Of3NePew9SONZY/0KTbuwor5H8izvGTx4rz3Dy', 'patient', '2021-11-11 09:48:13'),
(182, 'Patient080', '$2y$10$ETUGDo1B4l9G.5JCFs0xeO7rABK9lN4M9eHYCe/.CEhmEiGE3/A/e', 'patient', '2021-11-11 09:48:14'),
(183, 'Patient081', '$2y$10$Zyg7llpD/5AvSXgwwzDn5.SFK7fy89teRSUtIJ6s9Xmv04lh7T0da', 'patient', '2021-11-11 09:48:14'),
(184, 'Patient082', '$2y$10$3lVE.XIeQoNyStxlUF/LBOrGf4QdviBUPzita8uXFnpsbVQUEXCv6', 'patient', '2021-11-11 09:48:14'),
(185, 'Patient083', '$2y$10$VvSvtjUdzV9F4brzsCuZP.H1m1LcUTPMJKT/XfhvFwVGygpt0iQpi', 'patient', '2021-11-11 09:48:14'),
(186, 'Patient084', '$2y$10$ivLG4wqAqc5sPspINLhzaOD/Zshq8NEAKsKU5rtmcWO0elSfPgc/O', 'patient', '2021-11-11 09:48:14'),
(187, 'Patient085', '$2y$10$ax0iMABXLfrzwUFmoTAkiuxPTsQPJQAfg31aIXaMSD/vVyyON.ASC', 'patient', '2021-11-11 09:48:14'),
(188, 'Patient086', '$2y$10$.FDKphbs9BAibrdb.hboE.WF7sqb0UlT4zvWjE2J58oqQIAr8oyeu', 'patient', '2021-11-11 09:48:14'),
(189, 'Patient087', '$2y$10$PYrjGKhEV2uuY7IbfvmPge211od8mL8lBG3nnIHBevMpKW1qVSkkq', 'patient', '2021-11-11 09:48:14'),
(190, 'Patient088', '$2y$10$iTRxmMsyJ3l3dm2O1T50D.U9BGBj160kjdfbkl.T8fSoDvoOqv7N6', 'patient', '2021-11-11 09:48:14'),
(191, 'Patient089', '$2y$10$i7/u9D.tfqkkPR5TrA/Q0eGEZCX4kd2mfnWIy.gYY3KbrEqu6bvgu', 'patient', '2021-11-11 09:48:14'),
(192, 'Patient090', '$2y$10$7nen/EKfXYTvKoA4ABHzIez1Fp/PrOqMzMg1AG3vcplTWQtoKDA9y', 'patient', '2021-11-11 09:48:15'),
(193, 'Patient091', '$2y$10$5Hnpzmq9mYWOyAGm/i48aOXzlKD197mq1Xw.NN.HovD6qrahdadFC', 'patient', '2021-11-11 09:48:15'),
(194, 'Patient092', '$2y$10$Dswn4L6fLv0wPHZycp9Jxu3b19JpBCjYpcTHb2SzFugVXqW4w6mLu', 'patient', '2021-11-11 09:48:15'),
(195, 'Patient093', '$2y$10$znA75Br90J7W.xRxtCAYB.gfT30oEZZ8jNjtGZ0uRJ5YZLPjfDtJu', 'patient', '2021-11-11 09:48:15'),
(196, 'Patient094', '$2y$10$n4ndA.lBrxR7RWD3YZM1luyVECTzYKj14ums1UNdBN2tkGQ49dSjW', 'patient', '2021-11-11 09:48:15'),
(197, 'Patient095', '$2y$10$.AgmFs9tM/zJ8I7NiAFixO7Q0luq0YC8R8.8gGXaMwMtVNh1ZgOuS', 'patient', '2021-11-11 09:48:15'),
(198, 'Patient096', '$2y$10$7ORhYWr5Bx61vmh3xvXeQuHxxWWZUKPNXtraB5Yfhc2pxcwiAtrKu', 'patient', '2021-11-11 09:48:15'),
(199, 'Patient097', '$2y$10$DSjFRkcRdDYp0GV4SwGno.XbS.hfc9NvYejrknK6B4WDqAsUc8fxi', 'patient', '2021-11-11 09:48:15'),
(200, 'Patient098', '$2y$10$kGClL1iFMbQ/asvdjbCqWOt3EzChwWyS1gIIrrw/CitrRrqQvJ2h6', 'patient', '2021-11-11 09:48:16'),
(201, 'Patient099', '$2y$10$YQ3fvdVES..DR.dXqa9rdu0HvjvdM7B0TiXJFx3nM6FT4I3Yc2C9a', 'patient', '2021-11-11 09:48:16'),
(202, 'Patient100', '$2y$10$gozOVpJhBD8gOLrOKqLw4umcDXeN7mS6g6uWBWJbjMkmGBk6GB0wu', 'patient', '2021-11-11 09:48:16'),
(203, 'Pharmacist001', '$2y$10$.J77yLS2Y/3i8UBkrkMAOu8AhkZSu7HqZxd9sUP89l1Mf3BYuUTda', 'pharmacist', '2021-11-11 09:48:52'),
(204, 'Pharmacist002', '$2y$10$BhY.1HzbxTgdLnZAAA.lguFYpC/yxARKCzQ/CIzGOEAOY4Z0FZgmu', 'pharmacist', '2021-11-11 09:48:52'),
(205, 'Pharmacist003', '$2y$10$AGUfkFBqCEDGqhwiHOkbfeWN2Qb21F0GK3uK2pAjyK2gAW.Uugnam', 'pharmacist', '2021-11-11 09:48:52'),
(206, 'Pharmacist004', '$2y$10$ZDZmzpRoqKRUVePkkMqCouIdvGX5OaRlxR8GCeyKlpEYG6rUru2GC', 'pharmacist', '2021-11-11 09:48:53'),
(207, 'Pharmacist005', '$2y$10$MgsRDeMfFwapXb7YjpjRVediQWbdjaDxVGvyL43MWeSpxoW9Upb9C', 'pharmacist', '2021-11-11 09:48:53'),
(208, 'Pharmacist006', '$2y$10$VafTCDAYYlAZda7mgkQ4j.1RVAXSF0HFr070J4BwSc5L9mFBFsXW.', 'pharmacist', '2021-11-11 09:48:53'),
(209, 'Pharmacist007', '$2y$10$43CZvJtwyPnjJHq7F/iJE.FoE2.1EUD4SnFv8zZ4JQBFQbbzyhXPG', 'pharmacist', '2021-11-11 09:48:53'),
(210, 'Pharmacist008', '$2y$10$UrhwKNzYjhAwj80nOSrp6O4cEwigMFsFn2MldkSk6ooklKqVeo5om', 'pharmacist', '2021-11-11 09:48:53'),
(211, 'Pharmacist009', '$2y$10$3LdgnIs2gJTKCsWWOVj83uLzJyEcp/n/WeSi0bzlw/BvDe4WfiUV2', 'pharmacist', '2021-11-11 09:48:53'),
(212, 'Pharmacist010', '$2y$10$wqQRmN4WXOglIHdelzSXG.G72lkieO3XbtU/VL0rLqLtotj1BDOUi', 'pharmacist', '2021-11-11 09:48:53'),
(213, 'Pharmacist011', '$2y$10$3yI/u6Tu.hyqaIp6yZnDW.ugNXgMdvFn1/VTpCjJvDxPQEcd53z8a', 'pharmacist', '2021-11-11 09:48:53'),
(214, 'Pharmacist012', '$2y$10$GY8CIFOlpgZL8iHhLYdN7eL8FXJRkx81xvtBRB0jhsozJrfiMdNnW', 'pharmacist', '2021-11-11 09:48:53'),
(215, 'Pharmacist013', '$2y$10$9hCebKeT4zwWi6B5mU2R6efOLgRPMhhrgVSGC6nkhbnXxBcPhOKUK', 'pharmacist', '2021-11-11 09:48:54'),
(216, 'Pharmacist014', '$2y$10$APbZM5Yqzmjer3znRzCH0OMJ/EyBYkGx7Nt7zP2XbyJuSIqqBAERW', 'pharmacist', '2021-11-11 09:48:54'),
(217, 'Pharmacist015', '$2y$10$tkfisAuyVR48W4MBJ0wBw.7xRZxionEWlWYi1lGwfiFEchDcJ.u.G', 'pharmacist', '2021-11-11 09:48:54'),
(218, 'Pharmacist016', '$2y$10$PceIqtVFbGzIpD/cmTzEFOn7R2fusBaqXRCz0yTgmtsPUEWrB00U2', 'pharmacist', '2021-11-11 09:48:54'),
(219, 'Pharmacist017', '$2y$10$L2IMG2eJplXojkA2I2TfleP8GBwyRJyC0pto2UDvJL674dOBCYrN6', 'pharmacist', '2021-11-11 09:48:54'),
(220, 'Pharmacist018', '$2y$10$oHNWyLO/3LpSuLufnSxfHuS1z35QISU9qF9VhzgwfURYA0N7XtLyS', 'pharmacist', '2021-11-11 09:48:54'),
(221, 'Pharmacist019', '$2y$10$zP4shbq2vj6kw9XdF6F1s.6yZyt8ihQsmTgUsd0TV57WYAskLBop.', 'pharmacist', '2021-11-11 09:48:54'),
(222, 'Pharmacist020', '$2y$10$IfpuKEqCs5WaRjye4R0a8emMsGc9w4C7tESO7PzHtucwG1s2AyVVi', 'pharmacist', '2021-11-11 09:48:54'),
(223, 'Pharmacist021', '$2y$10$3CXpO9SHIg0E7dBw6CFWnOCBF06KIHWoXcFUm8z386pIhGKwhO96O', 'pharmacist', '2021-11-11 09:48:54'),
(224, 'Pharmacist022', '$2y$10$5aE9kbSIep446SKbqQ/Lj.gIgFxPyxpEVA7J0n.8Bh8x1d03puanS', 'pharmacist', '2021-11-11 09:48:55'),
(225, 'Pharmacist023', '$2y$10$mOy1RBY2a/UtvE0Koz1ft.ZSZmejFm2Ie1HQWb6Y4aE5z/CodzBlS', 'pharmacist', '2021-11-11 09:48:55'),
(226, 'Pharmacist024', '$2y$10$5SIlKRo.n1KktqFhGFwstuZw231tZyo8zIQcmBvPi4550Hk.eWXL.', 'pharmacist', '2021-11-11 09:48:55'),
(227, 'Pharmacist025', '$2y$10$h79OnXxFqCQghr0aadHtGuxRR//gsjDvvFeoNWq0ux6u3KLO18ZYW', 'pharmacist', '2021-11-11 09:48:55'),
(228, 'Pharmacist026', '$2y$10$eN0EWQqDLpTxZk3aKwHDkeHCleUJkwGnY3lYrKUlm3uhsBV70FoRW', 'pharmacist', '2021-11-11 09:48:55'),
(229, 'Pharmacist027', '$2y$10$u/fnS021QW43INa1oGYNT.SKHtD7Bb4i8YxbIkSlEIHXeyrR.avpu', 'pharmacist', '2021-11-11 09:48:55'),
(230, 'Pharmacist028', '$2y$10$IfZxyQb7A/NgBfX.sBaZDOel1mLL99wtRz23k98sNo7cJQjpB8cOe', 'pharmacist', '2021-11-11 09:48:55'),
(231, 'Pharmacist029', '$2y$10$LX7DF8/IV194qI58tfKODu4ZCcTZS6lj.W2aDOZRXA0AFq/hsDLw6', 'pharmacist', '2021-11-11 09:48:55'),
(232, 'Pharmacist030', '$2y$10$hif12o2e0Zyst3xNv3.Mse1wyjTPVPrTDjLXfX7mQAN08HQ9G/zCm', 'pharmacist', '2021-11-11 09:48:55'),
(233, 'Pharmacist031', '$2y$10$bFiC02SHQpEQf7THpWwXFOktt9ZToTg0nc9iQ3kOmPYYgHGlEd93q', 'pharmacist', '2021-11-11 09:48:56'),
(234, 'Pharmacist032', '$2y$10$EAyvlyKuD.c5pqGvI8VQVOYkVGweRxRQL07Irk1MTJGAJjK56Fl7G', 'pharmacist', '2021-11-11 09:48:56'),
(235, 'Pharmacist033', '$2y$10$8/LScd6dc/IPJCT/1Ld20.KqvnW6nDimqZt/rDz6VuJTZEI9JmAMm', 'pharmacist', '2021-11-11 09:48:56'),
(236, 'Pharmacist034', '$2y$10$mjZpG1ZIh8ciM6SViOvUg.nIGIiz5ipAj6Jnxd3AbW.kMmDXD.cQi', 'pharmacist', '2021-11-11 09:48:56'),
(237, 'Pharmacist035', '$2y$10$SPMsIiyRsY4dXU9Z6uDF3OgbXSapVnWd5SM.d0qcEWe7KSsXFi7uC', 'pharmacist', '2021-11-11 09:48:56'),
(238, 'Pharmacist036', '$2y$10$2CUT0GiWFxL7s8exrafP0OrgqrbZtHMsRXjgg7NXHXE4kYX/Iah.K', 'pharmacist', '2021-11-11 09:48:56'),
(239, 'Pharmacist037', '$2y$10$JVk3QvCQQAlJx.72ehTs1OnEx7XpKBhGNH9YfXhRFg.N4fU2eMZWW', 'pharmacist', '2021-11-11 09:48:56'),
(240, 'Pharmacist038', '$2y$10$fn7fzn4cWI37Xla2UNGBLeEC7o3ur4Rto.f/iw9UL.LvpU/QS2tUq', 'pharmacist', '2021-11-11 09:48:56'),
(241, 'Pharmacist039', '$2y$10$ZAGIUjXBzS9NhGOYu78BeukKnxHvbJfu2dsd7tCwgmq5iJpHfp7sq', 'pharmacist', '2021-11-11 09:48:56'),
(242, 'Pharmacist040', '$2y$10$ZROcTKx6UkcJ0wFZS68HJuSIhli2dTAyxJNRO5w9dJwQgzOhHQS1q', 'pharmacist', '2021-11-11 09:48:57'),
(243, 'Pharmacist041', '$2y$10$z5RR06Y1cppeDon.OK0.LuVmjfl4IUrHaCNNPHcU2uDFeIEHUp2W6', 'pharmacist', '2021-11-11 09:48:57'),
(244, 'Pharmacist042', '$2y$10$/AzLxJnrBRHZHIwP7gZzQuVnGjT7qOUdRloRBhAZuzPZIaX6OGfhS', 'pharmacist', '2021-11-11 09:48:57'),
(245, 'Pharmacist043', '$2y$10$NdBoDEfzO78MPKA0mGUQjuxc16CtZKb96MotuLYPa9y4DelBcumzy', 'pharmacist', '2021-11-11 09:48:57'),
(246, 'Pharmacist044', '$2y$10$KHpgA84OoSe4A3H8NM2GUuYysoYBLZFuAlXuX0q3G15NSWkFX/dMW', 'pharmacist', '2021-11-11 09:48:57'),
(247, 'Pharmacist045', '$2y$10$olAO35xWRsm5UBZpA99TI.hXc6Cyb.eaNA0/E0qS5aGnbdgApDGku', 'pharmacist', '2021-11-11 09:48:57'),
(248, 'Pharmacist046', '$2y$10$CvgyATuYg0T3I.bI6zKsvO5mqorS6yzfjeQWAt31G0QwWxua3Hm.m', 'pharmacist', '2021-11-11 09:48:57'),
(249, 'Pharmacist047', '$2y$10$TxWhTQbbgvaxydUq4LBM6.pK22S.J3GEredh8fd.4GBuduvJGa3zi', 'pharmacist', '2021-11-11 09:48:57'),
(250, 'Pharmacist048', '$2y$10$GV4oOROTFO18jh7UCsAr/u2QVZoGzyiEsbDzcEdUxZibsn4NLTc3S', 'pharmacist', '2021-11-11 09:48:57'),
(251, 'Pharmacist049', '$2y$10$kFEdD04wqGxstYMui9lA0Oyx8ALJ9y9Nq4DFCa2EnKOXibTLjmF8q', 'pharmacist', '2021-11-11 09:48:58'),
(252, 'Pharmacist050', '$2y$10$NkH7x8ixCiH2WmN73sNd5.y7SEeHR0eEA0hzW12LTb0Ec//nIF0wa', 'pharmacist', '2021-11-11 09:48:58'),
(253, 'Pharmacist051', '$2y$10$HSmIlKAONdIqyQTHYvoul.O/V/Eobq/qc6gpEuqyxcYfx/W.A4E/G', 'pharmacist', '2021-11-11 09:48:58'),
(254, 'Pharmacist052', '$2y$10$DiqL4rH9ZV7Wrc3FtSZMEu0/tVX23BzPJh2sB6bvhpp7c.vOYhDd.', 'pharmacist', '2021-11-11 09:48:58'),
(255, 'Pharmacist053', '$2y$10$Ld988ucjcvzrY6EIXP5G3Osx4zoMf8pF.NXz70/RdFS09qIyXAfPK', 'pharmacist', '2021-11-11 09:48:58'),
(256, 'Pharmacist054', '$2y$10$lS2qrqXzLRBknLK3YaNuDeobRfvkjEiNVN4dQFQQnh9ICXzdYyBHC', 'pharmacist', '2021-11-11 09:48:58'),
(257, 'Pharmacist055', '$2y$10$tfF5yrEAihdDRpXjc0AoPeH3WLF5yp/zVAPLprc.D0qLBxvEYtIZW', 'pharmacist', '2021-11-11 09:48:58'),
(258, 'Pharmacist056', '$2y$10$V2DZ8U0Zli6DwW6Cz.cTquYk/5QtBlwOGuIygNmrCaEnfUNyQS.Em', 'pharmacist', '2021-11-11 09:48:58'),
(259, 'Pharmacist057', '$2y$10$xGh6XdhHSRzA5eV4fngAb.DgUMWW3H/CADlZd5HI/el3CGWM.pdHq', 'pharmacist', '2021-11-11 09:48:58'),
(260, 'Pharmacist058', '$2y$10$q.9SprhV3iFke6MZXglzWuDWmM4ADJ3vn8vlxzFKRInZVoLH0Xqqy', 'pharmacist', '2021-11-11 09:48:59'),
(261, 'Pharmacist059', '$2y$10$R1GjOuNvH5615q54qmLB4eT0gbKFEXeEahj/F1JXSfmbYNY9HmURa', 'pharmacist', '2021-11-11 09:48:59'),
(262, 'Pharmacist060', '$2y$10$PRcP9BiCzjT.SB157nk/uuve.uVn6XzdGogTwoj7oAKXHgl5JBIJ2', 'pharmacist', '2021-11-11 09:48:59'),
(263, 'Pharmacist061', '$2y$10$J24ipA2yMvziAMS5OaBR1ulChX7xFHZ4JYLjjpi9mzCJhUzvQE82m', 'pharmacist', '2021-11-11 09:48:59'),
(264, 'Pharmacist062', '$2y$10$1pAeS0MmI1q.az1VWKqcT.Gbfi.JeFb9qo.g6KmJtMTuAmZGuxlue', 'pharmacist', '2021-11-11 09:48:59'),
(265, 'Pharmacist063', '$2y$10$sGSaZdtVQ5GnK2Gi8sshBeKEpWu0OuclQsJS1d2CPZvKmDPiHkYlO', 'pharmacist', '2021-11-11 09:48:59'),
(266, 'Pharmacist064', '$2y$10$2FM10uO.3oRBMhiF1AJ6gOgltnaGYqOXcNmF86Q86A504Ga8/KQhu', 'pharmacist', '2021-11-11 09:48:59'),
(267, 'Pharmacist065', '$2y$10$3QFCNDmCmDhQNuK6hTk6gudYSkXBaDEoWZz7Wr7UiwgHvtvm4ygJm', 'pharmacist', '2021-11-11 09:48:59'),
(268, 'Pharmacist066', '$2y$10$2xp8rfgKH5y9icDtIvmpgOnQPpY9vaMza1nMd01wHo0vKr/Yv.WBG', 'pharmacist', '2021-11-11 09:48:59'),
(269, 'Pharmacist067', '$2y$10$3oc.ND9dHjQXUPQWKI5qBOKygdl3uM.yEq0K0UwOgNYyOskxjxcK2', 'pharmacist', '2021-11-11 09:49:00'),
(270, 'Pharmacist068', '$2y$10$rzcJwIqfqZ2RJRoAY63k9OxNQkqN1OD1KWyYM0hvHQnIO4SpnRace', 'pharmacist', '2021-11-11 09:49:00'),
(271, 'Pharmacist069', '$2y$10$rmrocs.rwPuJqoXUMLBy5.w9SrLZHwSkV6sslxEcDa6XtpFo.o/IG', 'pharmacist', '2021-11-11 09:49:00'),
(272, 'Pharmacist070', '$2y$10$.OBz8Ci8wM057kWZPQ6unOpmLN7hk1GWoPvmPiPsO3xA2cRmasslO', 'pharmacist', '2021-11-11 09:49:00'),
(273, 'Pharmacist071', '$2y$10$aHLpj2gzbbJeBrOotkuUQesQIfmfSxvOMbaK6DPYZO6Cghnxhbro6', 'pharmacist', '2021-11-11 09:49:00'),
(274, 'Pharmacist072', '$2y$10$MbVShVnG5jN/RR9DS8fspuecmaZnZSJbwstS.THDRofZPwpqWfquy', 'pharmacist', '2021-11-11 09:49:00'),
(275, 'Pharmacist073', '$2y$10$J1yVCGOxGuoZWciu9YWRaO80T0CbZJ2GQX..g22p3b2/hp/XKUq3C', 'pharmacist', '2021-11-11 09:49:00'),
(276, 'Pharmacist074', '$2y$10$S.H4qLYn1ruBsOoXWWQ1KeIpi/DmXnt1GhvzGoAw0v2.qUwrb5jgu', 'pharmacist', '2021-11-11 09:49:00'),
(277, 'Pharmacist075', '$2y$10$xjtbtN/yWDgSwEMV7qZRw.KrSCwLVGy6eL1sl5lHcPkr44ZLTDoxu', 'pharmacist', '2021-11-11 09:49:00'),
(278, 'Pharmacist076', '$2y$10$X5dowkwCTBYwSksi3KW.xOjqeMta0DT91eh4TsjPI9OpnFuOSdU.W', 'pharmacist', '2021-11-11 09:49:00'),
(279, 'Pharmacist077', '$2y$10$.EMplnlZIO8M1pqEEozDgO43hEAT7.SQyZGtjAct.1i.yRy6hAnPu', 'pharmacist', '2021-11-11 09:49:01'),
(280, 'Pharmacist078', '$2y$10$ovNOl222b7eCaqi0Gpm2bOULxCK3tEIY9D3J0gCiuqlG3OdbVFno2', 'pharmacist', '2021-11-11 09:49:01'),
(281, 'Pharmacist079', '$2y$10$Z6dpgavgdl4LLiDeV35sNu0qNqVdUHl396bZREWHzIabQgEqXoQZy', 'pharmacist', '2021-11-11 09:49:01'),
(282, 'Pharmacist080', '$2y$10$q6Uxyt6UeVxEncoaMJiB9uINk/UYQHFITbmXQ.LK//IXqoDjNBHKu', 'pharmacist', '2021-11-11 09:49:01'),
(283, 'Pharmacist081', '$2y$10$0VKRJBRAl4RASUTIiuJJLei.CkQaPk1MPPO6mlW8rryaWdpKUH9G2', 'pharmacist', '2021-11-11 09:49:01'),
(284, 'Pharmacist082', '$2y$10$9OHwuEwSHo3fhrAa/Js7OeGS4C/OJlB7fOuGeLJFwVbKLc0wAQFxK', 'pharmacist', '2021-11-11 09:49:01'),
(285, 'Pharmacist083', '$2y$10$gwboANg6Tb1zMlO06tWFj.FI3Hb1sjlWjh4qCiwm3LD.MiYHIdVx6', 'pharmacist', '2021-11-11 09:49:01'),
(286, 'Pharmacist084', '$2y$10$tsm57T8eWjFdo0wEoeziKei3exKQ5kZDzNLIoICgSQFvyCFUBiyAW', 'pharmacist', '2021-11-11 09:49:01'),
(287, 'Pharmacist085', '$2y$10$CxruiKB7qHhnkBIOQDn7u.HYLu/jxuXmTqOzbxeWQyidbmE4Th8Ou', 'pharmacist', '2021-11-11 09:49:01'),
(288, 'Pharmacist086', '$2y$10$mOCB56D9dhuT19R.BcEsxeDIHEdk6jIZqfzXd81ipTR7UqZjidyEK', 'pharmacist', '2021-11-11 09:49:02'),
(289, 'Pharmacist087', '$2y$10$y03va0Xohd6aNlo69izL6uPsb9vBayL8btM9M6oVs27Ruy7c/ZhkW', 'pharmacist', '2021-11-11 09:49:02'),
(290, 'Pharmacist088', '$2y$10$sdFXZ/XelaIp/dw341LpCuEV3gSI8x1DLHEaabGfab3/mw9UmOlyS', 'pharmacist', '2021-11-11 09:49:02'),
(291, 'Pharmacist089', '$2y$10$ILE3PTfkrU3eknj4enasTuEUslu0EJCFJNDClCZmTfjfIcspu3jOu', 'pharmacist', '2021-11-11 09:49:02'),
(292, 'Pharmacist090', '$2y$10$oz69DuoYDkxWcHFmO5K3bujyx3r7v8O42sqU1BkIV6O36O9S38G6a', 'pharmacist', '2021-11-11 09:49:02'),
(293, 'Pharmacist091', '$2y$10$VSVHdg/non.wKxrdqk1ZEelN3Vl5tNKDkVkBGMTO/DNf9pffW/0im', 'pharmacist', '2021-11-11 09:49:02'),
(294, 'Pharmacist092', '$2y$10$rO3Hkg9GgIaChPsbyfae/.KipEzUoSzWOWVk/r2yVh/Hb4Gcx2Gxu', 'pharmacist', '2021-11-11 09:49:02'),
(295, 'Pharmacist093', '$2y$10$JG8QuzIGntxRdn35gPr.AOh0zEUTU7t5rKVGI26cZ1r4CQUKDGS9S', 'pharmacist', '2021-11-11 09:49:02'),
(296, 'Pharmacist094', '$2y$10$iDCxmKA6.cKS70zvhFA0tOQiZ7BqvmJBAGJ9HD3Of2ogeRVnvGYta', 'pharmacist', '2021-11-11 09:49:02'),
(297, 'Pharmacist095', '$2y$10$Sf999rxwFs5HRXeKEbKM6.qVeXHlrGs0n/QVTpekGTSafBc6Cdoa2', 'pharmacist', '2021-11-11 09:49:02'),
(298, 'Pharmacist096', '$2y$10$5xr6VKLOl/LcyBMj.eZnsuOkTRcW552MkVkBw2Gt8E9kdPTjzQ0lK', 'pharmacist', '2021-11-11 09:49:03'),
(299, 'Pharmacist097', '$2y$10$DXtA5AoYw6p.rq8tokubqulF6BL8a1/FBAvNe9H5tpK2sNbYAeFKm', 'pharmacist', '2021-11-11 09:49:03'),
(300, 'Pharmacist098', '$2y$10$3o0RxVaJlu1FDuzkuJQQCODeF7T3qk.kXTkqga88E6OwiJQfWzp46', 'pharmacist', '2021-11-11 09:49:03'),
(301, 'Pharmacist099', '$2y$10$gsxU7X12tn6JLUNAHI118OGu4jVdIBhveVVqdwjABgxkbOAreCV1.', 'pharmacist', '2021-11-11 09:49:03'),
(302, 'Pharmacist100', '$2y$10$zFu0RoP6CQ5dRwXfgnw8auLnqOQJYQ8tVi2YLTrjOZ2vyGgQRNDRG', 'pharmacist', '2021-11-11 09:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserId` int(11) NOT NULL,
  `FirstName` char(30) NOT NULL,
  `LastName` char(30) NOT NULL,
  `BirthDate` date NOT NULL,
  `GenderCode` varchar(10) NOT NULL,
  `PhoneNumber` int(10) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `CreatedDateTime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserId`, `FirstName`, `LastName`, `BirthDate`, `GenderCode`, `PhoneNumber`, `EmailAddress`, `CreatedDateTime`) VALUES
(1, 'King', 'Terence', '2021-11-11', 'M', 90000001, 'kingterence@hotmail.com', '2021-11-11 09:45:03'),
(2, 'Bing002', 'Chilling002', '2021-11-11', 'M', 90000002, 'dominic.loh@hotmail.aab', '2021-11-11 09:45:16'),
(3, 'Bing003', 'Chilling003', '2021-11-11', 'M', 90000003, 'dominic.loh@hotmail.aac', '2021-11-11 09:45:52'),
(4, 'Bing004', 'Chilling004', '2021-11-11', 'M', 90000004, 'dominic.loh@hotmail.aad', '2021-11-11 09:45:52'),
(5, 'Bing005', 'Chilling005', '2021-11-11', 'M', 90000005, 'dominic.loh@hotmail.aae', '2021-11-11 09:45:52'),
(6, 'Bing006', 'Chilling006', '2021-11-11', 'M', 90000006, 'dominic.loh@hotmail.aaf', '2021-11-11 09:45:52'),
(7, 'Bing007', 'Chilling007', '2021-11-11', 'M', 90000007, 'dominic.loh@hotmail.aag', '2021-11-11 09:45:52'),
(8, 'Bing008', 'Chilling008', '2021-11-11', 'M', 90000008, 'dominic.loh@hotmail.aah', '2021-11-11 09:45:53'),
(9, 'Bing009', 'Chilling009', '2021-11-11', 'M', 90000009, 'dominic.loh@hotmail.aai', '2021-11-11 09:45:53'),
(10, 'Bing010', 'Chilling010', '2021-11-11', 'M', 90000010, 'dominic.loh@hotmail.aaj', '2021-11-11 09:45:53'),
(11, 'Bing011', 'Chilling011', '2021-11-11', 'M', 90000011, 'dominic.loh@hotmail.aak', '2021-11-11 09:45:53'),
(12, 'Bing012', 'Chilling012', '2021-11-11', 'M', 90000012, 'dominic.loh@hotmail.aal', '2021-11-11 09:45:53'),
(13, 'Bing013', 'Chilling013', '2021-11-11', 'M', 90000013, 'dominic.loh@hotmail.aam', '2021-11-11 09:45:53'),
(14, 'Bing014', 'Chilling014', '2021-11-11', 'M', 90000014, 'dominic.loh@hotmail.aan', '2021-11-11 09:45:53'),
(15, 'Bing015', 'Chilling015', '2021-11-11', 'M', 90000015, 'dominic.loh@hotmail.aao', '2021-11-11 09:45:53'),
(16, 'Bing016', 'Chilling016', '2021-11-11', 'M', 90000016, 'dominic.loh@hotmail.aap', '2021-11-11 09:45:53'),
(17, 'Bing017', 'Chilling017', '2021-11-11', 'M', 90000017, 'dominic.loh@hotmail.aaq', '2021-11-11 09:45:53'),
(18, 'Bing018', 'Chilling018', '2021-11-11', 'M', 90000018, 'dominic.loh@hotmail.aar', '2021-11-11 09:45:54'),
(19, 'Bing019', 'Chilling019', '2021-11-11', 'M', 90000019, 'dominic.loh@hotmail.aas', '2021-11-11 09:45:54'),
(20, 'Bing020', 'Chilling020', '2021-11-11', 'M', 90000020, 'dominic.loh@hotmail.aat', '2021-11-11 09:45:54'),
(21, 'Bing021', 'Chilling021', '2021-11-11', 'M', 90000021, 'dominic.loh@hotmail.aau', '2021-11-11 09:45:54'),
(22, 'Bing022', 'Chilling022', '2021-11-11', 'M', 90000022, 'dominic.loh@hotmail.aav', '2021-11-11 09:45:54'),
(23, 'Bing023', 'Chilling023', '2021-11-11', 'M', 90000023, 'dominic.loh@hotmail.aaw', '2021-11-11 09:45:54'),
(24, 'Bing024', 'Chilling024', '2021-11-11', 'M', 90000024, 'dominic.loh@hotmail.aax', '2021-11-11 09:45:54'),
(25, 'Bing025', 'Chilling025', '2021-11-11', 'M', 90000025, 'dominic.loh@hotmail.aay', '2021-11-11 09:45:54'),
(26, 'Bing026', 'Chilling026', '2021-11-11', 'M', 90000026, 'dominic.loh@hotmail.aaz', '2021-11-11 09:45:54'),
(27, 'Bing027', 'Chilling027', '2021-11-11', 'M', 90000027, 'dominic.loh@hotmail.aba', '2021-11-11 09:45:54'),
(28, 'Bing028', 'Chilling028', '2021-11-11', 'M', 90000028, 'dominic.loh@hotmail.abb', '2021-11-11 09:45:55'),
(29, 'Bing029', 'Chilling029', '2021-11-11', 'M', 90000029, 'dominic.loh@hotmail.abc', '2021-11-11 09:45:55'),
(30, 'Bing030', 'Chilling030', '2021-11-11', 'M', 90000030, 'dominic.loh@hotmail.abd', '2021-11-11 09:45:55'),
(31, 'Bing031', 'Chilling031', '2021-11-11', 'M', 90000031, 'dominic.loh@hotmail.abe', '2021-11-11 09:45:55'),
(32, 'Bing032', 'Chilling032', '2021-11-11', 'M', 90000032, 'dominic.loh@hotmail.abf', '2021-11-11 09:45:55'),
(33, 'Bing033', 'Chilling033', '2021-11-11', 'M', 90000033, 'dominic.loh@hotmail.abg', '2021-11-11 09:45:55'),
(34, 'Bing034', 'Chilling034', '2021-11-11', 'M', 90000034, 'dominic.loh@hotmail.abh', '2021-11-11 09:45:55'),
(35, 'Bing035', 'Chilling035', '2021-11-11', 'M', 90000035, 'dominic.loh@hotmail.abi', '2021-11-11 09:45:55'),
(36, 'Bing036', 'Chilling036', '2021-11-11', 'M', 90000036, 'dominic.loh@hotmail.abj', '2021-11-11 09:45:55'),
(37, 'Bing037', 'Chilling037', '2021-11-11', 'M', 90000037, 'dominic.loh@hotmail.abk', '2021-11-11 09:45:56'),
(38, 'Bing038', 'Chilling038', '2021-11-11', 'M', 90000038, 'dominic.loh@hotmail.abl', '2021-11-11 09:45:56'),
(39, 'Bing039', 'Chilling039', '2021-11-11', 'M', 90000039, 'dominic.loh@hotmail.abm', '2021-11-11 09:45:56'),
(40, 'Bing040', 'Chilling040', '2021-11-11', 'M', 90000040, 'dominic.loh@hotmail.abn', '2021-11-11 09:45:56'),
(41, 'Bing041', 'Chilling041', '2021-11-11', 'M', 90000041, 'dominic.loh@hotmail.abo', '2021-11-11 09:45:56'),
(42, 'Bing042', 'Chilling042', '2021-11-11', 'M', 90000042, 'dominic.loh@hotmail.abp', '2021-11-11 09:45:56'),
(43, 'Bing043', 'Chilling043', '2021-11-11', 'M', 90000043, 'dominic.loh@hotmail.abq', '2021-11-11 09:45:56'),
(44, 'Bing044', 'Chilling044', '2021-11-11', 'M', 90000044, 'dominic.loh@hotmail.abr', '2021-11-11 09:45:56'),
(45, 'Bing045', 'Chilling045', '2021-11-11', 'M', 90000045, 'dominic.loh@hotmail.abs', '2021-11-11 09:45:56'),
(46, 'Bing046', 'Chilling046', '2021-11-11', 'M', 90000046, 'dominic.loh@hotmail.abt', '2021-11-11 09:45:57'),
(47, 'Bing047', 'Chilling047', '2021-11-11', 'M', 90000047, 'dominic.loh@hotmail.abu', '2021-11-11 09:45:57'),
(48, 'Bing048', 'Chilling048', '2021-11-11', 'M', 90000048, 'dominic.loh@hotmail.abv', '2021-11-11 09:45:57'),
(49, 'Bing049', 'Chilling049', '2021-11-11', 'M', 90000049, 'dominic.loh@hotmail.abw', '2021-11-11 09:45:57'),
(50, 'Bing050', 'Chilling050', '2021-11-11', 'M', 90000050, 'dominic.loh@hotmail.abx', '2021-11-11 09:45:57'),
(51, 'Bing051', 'Chilling051', '2021-11-11', 'M', 90000051, 'dominic.loh@hotmail.aby', '2021-11-11 09:45:57'),
(52, 'Bing052', 'Chilling052', '2021-11-11', 'M', 90000052, 'dominic.loh@hotmail.abz', '2021-11-11 09:45:57'),
(53, 'Bing053', 'Chilling053', '2021-11-11', 'M', 90000053, 'dominic.loh@hotmail.aca', '2021-11-11 09:45:57'),
(54, 'Bing054', 'Chilling054', '2021-11-11', 'M', 90000054, 'dominic.loh@hotmail.acb', '2021-11-11 09:45:57'),
(55, 'Bing055', 'Chilling055', '2021-11-11', 'M', 90000055, 'dominic.loh@hotmail.acc', '2021-11-11 09:45:58'),
(56, 'Bing056', 'Chilling056', '2021-11-11', 'M', 90000056, 'dominic.loh@hotmail.acd', '2021-11-11 09:45:58'),
(57, 'Bing057', 'Chilling057', '2021-11-11', 'M', 90000057, 'dominic.loh@hotmail.ace', '2021-11-11 09:45:58'),
(58, 'Bing058', 'Chilling058', '2021-11-11', 'M', 90000058, 'dominic.loh@hotmail.acf', '2021-11-11 09:45:58'),
(59, 'Bing059', 'Chilling059', '2021-11-11', 'M', 90000059, 'dominic.loh@hotmail.acg', '2021-11-11 09:45:58'),
(60, 'Bing060', 'Chilling060', '2021-11-11', 'M', 90000060, 'dominic.loh@hotmail.ach', '2021-11-11 09:45:58'),
(61, 'Bing061', 'Chilling061', '2021-11-11', 'M', 90000061, 'dominic.loh@hotmail.aci', '2021-11-11 09:45:58'),
(62, 'Bing062', 'Chilling062', '2021-11-11', 'M', 90000062, 'dominic.loh@hotmail.acj', '2021-11-11 09:45:58'),
(63, 'Bing063', 'Chilling063', '2021-11-11', 'M', 90000063, 'dominic.loh@hotmail.ack', '2021-11-11 09:45:58'),
(64, 'Bing064', 'Chilling064', '2021-11-11', 'M', 90000064, 'dominic.loh@hotmail.acl', '2021-11-11 09:45:59'),
(65, 'Bing065', 'Chilling065', '2021-11-11', 'M', 90000065, 'dominic.loh@hotmail.acm', '2021-11-11 09:45:59'),
(66, 'Bing066', 'Chilling066', '2021-11-11', 'M', 90000066, 'dominic.loh@hotmail.acn', '2021-11-11 09:45:59'),
(67, 'Bing067', 'Chilling067', '2021-11-11', 'M', 90000067, 'dominic.loh@hotmail.aco', '2021-11-11 09:45:59'),
(68, 'Bing068', 'Chilling068', '2021-11-11', 'M', 90000068, 'dominic.loh@hotmail.acp', '2021-11-11 09:45:59'),
(69, 'Bing069', 'Chilling069', '2021-11-11', 'M', 90000069, 'dominic.loh@hotmail.acq', '2021-11-11 09:45:59'),
(70, 'Bing070', 'Chilling070', '2021-11-11', 'M', 90000070, 'dominic.loh@hotmail.acr', '2021-11-11 09:45:59'),
(71, 'Bing071', 'Chilling071', '2021-11-11', 'M', 90000071, 'dominic.loh@hotmail.acs', '2021-11-11 09:45:59'),
(72, 'Bing072', 'Chilling072', '2021-11-11', 'M', 90000072, 'dominic.loh@hotmail.act', '2021-11-11 09:45:59'),
(73, 'Bing073', 'Chilling073', '2021-11-11', 'M', 90000073, 'dominic.loh@hotmail.acu', '2021-11-11 09:45:59'),
(74, 'Bing074', 'Chilling074', '2021-11-11', 'M', 90000074, 'dominic.loh@hotmail.acv', '2021-11-11 09:46:00'),
(75, 'Bing075', 'Chilling075', '2021-11-11', 'M', 90000075, 'dominic.loh@hotmail.acw', '2021-11-11 09:46:00'),
(76, 'Bing076', 'Chilling076', '2021-11-11', 'M', 90000076, 'dominic.loh@hotmail.acx', '2021-11-11 09:46:00'),
(77, 'Bing077', 'Chilling077', '2021-11-11', 'M', 90000077, 'dominic.loh@hotmail.acy', '2021-11-11 09:46:00'),
(78, 'Bing078', 'Chilling078', '2021-11-11', 'M', 90000078, 'dominic.loh@hotmail.acz', '2021-11-11 09:46:00'),
(79, 'Bing079', 'Chilling079', '2021-11-11', 'M', 90000079, 'dominic.loh@hotmail.ada', '2021-11-11 09:46:00'),
(80, 'Bing080', 'Chilling080', '2021-11-11', 'M', 90000080, 'dominic.loh@hotmail.adb', '2021-11-11 09:46:00'),
(81, 'Bing081', 'Chilling081', '2021-11-11', 'M', 90000081, 'dominic.loh@hotmail.adc', '2021-11-11 09:46:00'),
(82, 'Bing082', 'Chilling082', '2021-11-11', 'M', 90000082, 'dominic.loh@hotmail.add', '2021-11-11 09:46:00'),
(83, 'Bing083', 'Chilling083', '2021-11-11', 'M', 90000083, 'dominic.loh@hotmail.ade', '2021-11-11 09:46:01'),
(84, 'Bing084', 'Chilling084', '2021-11-11', 'M', 90000084, 'dominic.loh@hotmail.adf', '2021-11-11 09:46:01'),
(85, 'Bing085', 'Chilling085', '2021-11-11', 'M', 90000085, 'dominic.loh@hotmail.adg', '2021-11-11 09:46:01'),
(86, 'Bing086', 'Chilling086', '2021-11-11', 'M', 90000086, 'dominic.loh@hotmail.adh', '2021-11-11 09:46:01'),
(87, 'Bing087', 'Chilling087', '2021-11-11', 'M', 90000087, 'dominic.loh@hotmail.adi', '2021-11-11 09:46:01'),
(88, 'Bing088', 'Chilling088', '2021-11-11', 'M', 90000088, 'dominic.loh@hotmail.adj', '2021-11-11 09:46:01'),
(89, 'Bing089', 'Chilling089', '2021-11-11', 'M', 90000089, 'dominic.loh@hotmail.adk', '2021-11-11 09:46:01'),
(90, 'Bing090', 'Chilling090', '2021-11-11', 'M', 90000090, 'dominic.loh@hotmail.adl', '2021-11-11 09:46:01'),
(91, 'Bing091', 'Chilling091', '2021-11-11', 'M', 90000091, 'dominic.loh@hotmail.adm', '2021-11-11 09:46:01'),
(92, 'Bing092', 'Chilling092', '2021-11-11', 'M', 90000092, 'dominic.loh@hotmail.adn', '2021-11-11 09:46:01'),
(93, 'Bing093', 'Chilling093', '2021-11-11', 'M', 90000093, 'dominic.loh@hotmail.ado', '2021-11-11 09:46:02'),
(94, 'Bing094', 'Chilling094', '2021-11-11', 'M', 90000094, 'dominic.loh@hotmail.adp', '2021-11-11 09:46:02'),
(95, 'Bing095', 'Chilling095', '2021-11-11', 'M', 90000095, 'dominic.loh@hotmail.adq', '2021-11-11 09:46:02'),
(96, 'Bing096', 'Chilling096', '2021-11-11', 'M', 90000096, 'dominic.loh@hotmail.adr', '2021-11-11 09:46:02'),
(97, 'Bing097', 'Chilling097', '2021-11-11', 'M', 90000097, 'dominic.loh@hotmail.ads', '2021-11-11 09:46:02'),
(98, 'Bing098', 'Chilling098', '2021-11-11', 'M', 90000098, 'dominic.loh@hotmail.adt', '2021-11-11 09:46:02'),
(99, 'Bing099', 'Chilling099', '2021-11-11', 'M', 90000099, 'dominic.loh@hotmail.adu', '2021-11-11 09:46:02'),
(100, 'Bing100', 'Chilling100', '2021-11-11', 'M', 90000100, 'dominic.loh@hotmail.adv', '2021-11-11 09:46:02'),
(101, 'Bing101', 'Chilling101', '2021-11-11', 'M', 90000101, 'dominic.loh@hotmail.adw', '2021-11-11 09:46:02'),
(102, 'Bing102', 'Chilling102', '2021-11-11', 'M', 90000102, 'dominic.loh@hotmail.adx', '2021-11-11 09:46:03'),
(103, 'Bing103', 'Chilling103', '2021-11-11', 'M', 90000103, 'dominic.loh@hotmail.com', '2021-11-11 09:48:05'),
(104, 'Bing104', 'Chilling104', '2021-11-11', 'M', 90000104, 'dominic.loh@hotmail.adz', '2021-11-11 09:48:05'),
(105, 'Bing105', 'Chilling105', '2021-11-11', 'M', 90000105, 'dominic.loh@hotmail.aea', '2021-11-11 09:48:05'),
(106, 'Bing106', 'Chilling106', '2021-11-11', 'M', 90000106, 'dominic.loh@hotmail.aeb', '2021-11-11 09:48:05'),
(107, 'Bing107', 'Chilling107', '2021-11-11', 'M', 90000107, 'dominic.loh@hotmail.aec', '2021-11-11 09:48:05'),
(108, 'Bing108', 'Chilling108', '2021-11-11', 'M', 90000108, 'dominic.loh@hotmail.aed', '2021-11-11 09:48:05'),
(109, 'Bing109', 'Chilling109', '2021-11-11', 'M', 90000109, 'dominic.loh@hotmail.aee', '2021-11-11 09:48:06'),
(110, 'Bing110', 'Chilling110', '2021-11-11', 'M', 90000110, 'dominic.loh@hotmail.aef', '2021-11-11 09:48:06'),
(111, 'Bing111', 'Chilling111', '2021-11-11', 'M', 90000111, 'dominic.loh@hotmail.aeg', '2021-11-11 09:48:06'),
(112, 'Bing112', 'Chilling112', '2021-11-11', 'M', 90000112, 'dominic.loh@hotmail.aeh', '2021-11-11 09:48:06'),
(113, 'Bing113', 'Chilling113', '2021-11-11', 'M', 90000113, 'dominic.loh@hotmail.aei', '2021-11-11 09:48:06'),
(114, 'Bing114', 'Chilling114', '2021-11-11', 'M', 90000114, 'dominic.loh@hotmail.aej', '2021-11-11 09:48:06'),
(115, 'Bing115', 'Chilling115', '2021-11-11', 'M', 90000115, 'dominic.loh@hotmail.aek', '2021-11-11 09:48:06'),
(116, 'Bing116', 'Chilling116', '2021-11-11', 'M', 90000116, 'dominic.loh@hotmail.ael', '2021-11-11 09:48:06'),
(117, 'Bing117', 'Chilling117', '2021-11-11', 'M', 90000117, 'dominic.loh@hotmail.aem', '2021-11-11 09:48:06'),
(118, 'Bing118', 'Chilling118', '2021-11-11', 'M', 90000118, 'dominic.loh@hotmail.aen', '2021-11-11 09:48:07'),
(119, 'Bing119', 'Chilling119', '2021-11-11', 'M', 90000119, 'dominic.loh@hotmail.aeo', '2021-11-11 09:48:07'),
(120, 'Bing120', 'Chilling120', '2021-11-11', 'M', 90000120, 'dominic.loh@hotmail.aep', '2021-11-11 09:48:07'),
(121, 'Bing121', 'Chilling121', '2021-11-11', 'M', 90000121, 'dominic.loh@hotmail.aeq', '2021-11-11 09:48:07'),
(122, 'Bing122', 'Chilling122', '2021-11-11', 'M', 90000122, 'dominic.loh@hotmail.aer', '2021-11-11 09:48:07'),
(123, 'Bing123', 'Chilling123', '2021-11-11', 'M', 90000123, 'dominic.loh@hotmail.aes', '2021-11-11 09:48:07'),
(124, 'Bing124', 'Chilling124', '2021-11-11', 'M', 90000124, 'dominic.loh@hotmail.aet', '2021-11-11 09:48:07'),
(125, 'Bing125', 'Chilling125', '2021-11-11', 'M', 90000125, 'dominic.loh@hotmail.aeu', '2021-11-11 09:48:07'),
(126, 'Bing126', 'Chilling126', '2021-11-11', 'M', 90000126, 'dominic.loh@hotmail.aev', '2021-11-11 09:48:07'),
(127, 'Bing127', 'Chilling127', '2021-11-11', 'M', 90000127, 'dominic.loh@hotmail.aew', '2021-11-11 09:48:08'),
(128, 'Bing128', 'Chilling128', '2021-11-11', 'M', 90000128, 'dominic.loh@hotmail.aex', '2021-11-11 09:48:08'),
(129, 'Bing129', 'Chilling129', '2021-11-11', 'M', 90000129, 'dominic.loh@hotmail.aey', '2021-11-11 09:48:08'),
(130, 'Bing130', 'Chilling130', '2021-11-11', 'M', 90000130, 'dominic.loh@hotmail.aez', '2021-11-11 09:48:08'),
(131, 'Bing131', 'Chilling131', '2021-11-11', 'M', 90000131, 'dominic.loh@hotmail.afa', '2021-11-11 09:48:08'),
(132, 'Bing132', 'Chilling132', '2021-11-11', 'M', 90000132, 'dominic.loh@hotmail.afb', '2021-11-11 09:48:08'),
(133, 'Bing133', 'Chilling133', '2021-11-11', 'M', 90000133, 'dominic.loh@hotmail.afc', '2021-11-11 09:48:08'),
(134, 'Bing134', 'Chilling134', '2021-11-11', 'M', 90000134, 'dominic.loh@hotmail.afd', '2021-11-11 09:48:08'),
(135, 'Bing135', 'Chilling135', '2021-11-11', 'M', 90000135, 'dominic.loh@hotmail.afe', '2021-11-11 09:48:08'),
(136, 'Bing136', 'Chilling136', '2021-11-11', 'M', 90000136, 'dominic.loh@hotmail.aff', '2021-11-11 09:48:09'),
(137, 'Bing137', 'Chilling137', '2021-11-11', 'M', 90000137, 'dominic.loh@hotmail.afg', '2021-11-11 09:48:09'),
(138, 'Bing138', 'Chilling138', '2021-11-11', 'M', 90000138, 'dominic.loh@hotmail.afh', '2021-11-11 09:48:09'),
(139, 'Bing139', 'Chilling139', '2021-11-11', 'M', 90000139, 'dominic.loh@hotmail.afi', '2021-11-11 09:48:09'),
(140, 'Bing140', 'Chilling140', '2021-11-11', 'M', 90000140, 'dominic.loh@hotmail.afj', '2021-11-11 09:48:09'),
(141, 'Bing141', 'Chilling141', '2021-11-11', 'M', 90000141, 'dominic.loh@hotmail.afk', '2021-11-11 09:48:09'),
(142, 'Bing142', 'Chilling142', '2021-11-11', 'M', 90000142, 'dominic.loh@hotmail.afl', '2021-11-11 09:48:09'),
(143, 'Bing143', 'Chilling143', '2021-11-11', 'M', 90000143, 'dominic.loh@hotmail.afm', '2021-11-11 09:48:09'),
(144, 'Bing144', 'Chilling144', '2021-11-11', 'M', 90000144, 'dominic.loh@hotmail.afn', '2021-11-11 09:48:09'),
(145, 'Bing145', 'Chilling145', '2021-11-11', 'M', 90000145, 'dominic.loh@hotmail.afo', '2021-11-11 09:48:10'),
(146, 'Bing146', 'Chilling146', '2021-11-11', 'M', 90000146, 'dominic.loh@hotmail.afp', '2021-11-11 09:48:10'),
(147, 'Bing147', 'Chilling147', '2021-11-11', 'M', 90000147, 'dominic.loh@hotmail.afq', '2021-11-11 09:48:10'),
(148, 'Bing148', 'Chilling148', '2021-11-11', 'M', 90000148, 'dominic.loh@hotmail.afr', '2021-11-11 09:48:10'),
(149, 'Bing149', 'Chilling149', '2021-11-11', 'M', 90000149, 'dominic.loh@hotmail.afs', '2021-11-11 09:48:10'),
(150, 'Bing150', 'Chilling150', '2021-11-11', 'M', 90000150, 'dominic.loh@hotmail.aft', '2021-11-11 09:48:10'),
(151, 'Bing151', 'Chilling151', '2021-11-11', 'M', 90000151, 'dominic.loh@hotmail.afu', '2021-11-11 09:48:10'),
(152, 'Bing152', 'Chilling152', '2021-11-11', 'M', 90000152, 'dominic.loh@hotmail.afv', '2021-11-11 09:48:10'),
(153, 'Bing153', 'Chilling153', '2021-11-11', 'M', 90000153, 'dominic.loh@hotmail.afw', '2021-11-11 09:48:10'),
(154, 'Bing154', 'Chilling154', '2021-11-11', 'M', 90000154, 'dominic.loh@hotmail.afx', '2021-11-11 09:48:11'),
(155, 'Bing155', 'Chilling155', '2021-11-11', 'M', 90000155, 'dominic.loh@hotmail.afy', '2021-11-11 09:48:11'),
(156, 'Bing156', 'Chilling156', '2021-11-11', 'M', 90000156, 'dominic.loh@hotmail.afz', '2021-11-11 09:48:11'),
(157, 'Bing157', 'Chilling157', '2021-11-11', 'M', 90000157, 'dominic.loh@hotmail.aga', '2021-11-11 09:48:11'),
(158, 'Bing158', 'Chilling158', '2021-11-11', 'M', 90000158, 'dominic.loh@hotmail.agb', '2021-11-11 09:48:11'),
(159, 'Bing159', 'Chilling159', '2021-11-11', 'M', 90000159, 'dominic.loh@hotmail.agc', '2021-11-11 09:48:11'),
(160, 'Bing160', 'Chilling160', '2021-11-11', 'M', 90000160, 'dominic.loh@hotmail.agd', '2021-11-11 09:48:11'),
(161, 'Bing161', 'Chilling161', '2021-11-11', 'M', 90000161, 'dominic.loh@hotmail.age', '2021-11-11 09:48:11'),
(162, 'Bing162', 'Chilling162', '2021-11-11', 'M', 90000162, 'dominic.loh@hotmail.agf', '2021-11-11 09:48:11'),
(163, 'Bing163', 'Chilling163', '2021-11-11', 'M', 90000163, 'dominic.loh@hotmail.agg', '2021-11-11 09:48:12'),
(164, 'Bing164', 'Chilling164', '2021-11-11', 'M', 90000164, 'dominic.loh@hotmail.agh', '2021-11-11 09:48:12'),
(165, 'Bing165', 'Chilling165', '2021-11-11', 'M', 90000165, 'dominic.loh@hotmail.agi', '2021-11-11 09:48:12'),
(166, 'Bing166', 'Chilling166', '2021-11-11', 'M', 90000166, 'dominic.loh@hotmail.agj', '2021-11-11 09:48:12'),
(167, 'Bing167', 'Chilling167', '2021-11-11', 'M', 90000167, 'dominic.loh@hotmail.agk', '2021-11-11 09:48:12'),
(168, 'Bing168', 'Chilling168', '2021-11-11', 'M', 90000168, 'dominic.loh@hotmail.agl', '2021-11-11 09:48:12'),
(169, 'Bing169', 'Chilling169', '2021-11-11', 'M', 90000169, 'dominic.loh@hotmail.agm', '2021-11-11 09:48:12'),
(170, 'Bing170', 'Chilling170', '2021-11-11', 'M', 90000170, 'dominic.loh@hotmail.agn', '2021-11-11 09:48:12'),
(171, 'Bing171', 'Chilling171', '2021-11-11', 'M', 90000171, 'dominic.loh@hotmail.ago', '2021-11-11 09:48:12'),
(172, 'Bing172', 'Chilling172', '2021-11-11', 'M', 90000172, 'dominic.loh@hotmail.agp', '2021-11-11 09:48:13'),
(173, 'Bing173', 'Chilling173', '2021-11-11', 'M', 90000173, 'dominic.loh@hotmail.agq', '2021-11-11 09:48:13'),
(174, 'Bing174', 'Chilling174', '2021-11-11', 'M', 90000174, 'dominic.loh@hotmail.agr', '2021-11-11 09:48:13'),
(175, 'Bing175', 'Chilling175', '2021-11-11', 'M', 90000175, 'dominic.loh@hotmail.ags', '2021-11-11 09:48:13'),
(176, 'Bing176', 'Chilling176', '2021-11-11', 'M', 90000176, 'dominic.loh@hotmail.agt', '2021-11-11 09:48:13'),
(177, 'Bing177', 'Chilling177', '2021-11-11', 'M', 90000177, 'dominic.loh@hotmail.agu', '2021-11-11 09:48:13'),
(178, 'Bing178', 'Chilling178', '2021-11-11', 'M', 90000178, 'dominic.loh@hotmail.agv', '2021-11-11 09:48:13'),
(179, 'Bing179', 'Chilling179', '2021-11-11', 'M', 90000179, 'dominic.loh@hotmail.agw', '2021-11-11 09:48:13'),
(180, 'Bing180', 'Chilling180', '2021-11-11', 'M', 90000180, 'dominic.loh@hotmail.agx', '2021-11-11 09:48:13'),
(181, 'Bing181', 'Chilling181', '2021-11-11', 'M', 90000181, 'dominic.loh@hotmail.agy', '2021-11-11 09:48:13'),
(182, 'Bing182', 'Chilling182', '2021-11-11', 'M', 90000182, 'dominic.loh@hotmail.agz', '2021-11-11 09:48:14'),
(183, 'Bing183', 'Chilling183', '2021-11-11', 'M', 90000183, 'dominic.loh@hotmail.aha', '2021-11-11 09:48:14'),
(184, 'Bing184', 'Chilling184', '2021-11-11', 'M', 90000184, 'dominic.loh@hotmail.ahb', '2021-11-11 09:48:14'),
(185, 'Bing185', 'Chilling185', '2021-11-11', 'M', 90000185, 'dominic.loh@hotmail.ahc', '2021-11-11 09:48:14'),
(186, 'Bing186', 'Chilling186', '2021-11-11', 'M', 90000186, 'dominic.loh@hotmail.ahd', '2021-11-11 09:48:14'),
(187, 'Bing187', 'Chilling187', '2021-11-11', 'M', 90000187, 'dominic.loh@hotmail.ahe', '2021-11-11 09:48:14'),
(188, 'Bing188', 'Chilling188', '2021-11-11', 'M', 90000188, 'dominic.loh@hotmail.ahf', '2021-11-11 09:48:14'),
(189, 'Bing189', 'Chilling189', '2021-11-11', 'M', 90000189, 'dominic.loh@hotmail.ahg', '2021-11-11 09:48:14'),
(190, 'Bing190', 'Chilling190', '2021-11-11', 'M', 90000190, 'dominic.loh@hotmail.ahh', '2021-11-11 09:48:14'),
(191, 'Bing191', 'Chilling191', '2021-11-11', 'M', 90000191, 'dominic.loh@hotmail.ahi', '2021-11-11 09:48:15'),
(192, 'Bing192', 'Chilling192', '2021-11-11', 'M', 90000192, 'dominic.loh@hotmail.ahj', '2021-11-11 09:48:15'),
(193, 'Bing193', 'Chilling193', '2021-11-11', 'M', 90000193, 'dominic.loh@hotmail.ahk', '2021-11-11 09:48:15'),
(194, 'Bing194', 'Chilling194', '2021-11-11', 'M', 90000194, 'dominic.loh@hotmail.ahl', '2021-11-11 09:48:15'),
(195, 'Bing195', 'Chilling195', '2021-11-11', 'M', 90000195, 'dominic.loh@hotmail.ahm', '2021-11-11 09:48:15'),
(196, 'Bing196', 'Chilling196', '2021-11-11', 'M', 90000196, 'dominic.loh@hotmail.ahn', '2021-11-11 09:48:15'),
(197, 'Bing197', 'Chilling197', '2021-11-11', 'M', 90000197, 'dominic.loh@hotmail.aho', '2021-11-11 09:48:15'),
(198, 'Bing198', 'Chilling198', '2021-11-11', 'M', 90000198, 'dominic.loh@hotmail.ahp', '2021-11-11 09:48:15'),
(199, 'Bing199', 'Chilling199', '2021-11-11', 'M', 90000199, 'dominic.loh@hotmail.ahq', '2021-11-11 09:48:15'),
(200, 'Bing200', 'Chilling200', '2021-11-11', 'M', 90000200, 'dominic.loh@hotmail.ahr', '2021-11-11 09:48:16'),
(201, 'Bing201', 'Chilling201', '2021-11-11', 'M', 90000201, 'dominic.loh@hotmail.ahs', '2021-11-11 09:48:16'),
(202, 'Bing202', 'Chilling202', '2021-11-11', 'M', 90000202, 'dominic.loh@hotmail.aht', '2021-11-11 09:48:16'),
(203, 'Bing203', 'Chilling203', '2021-11-11', 'F', 90000203, 'dominic.loh@hotmail.ahu', '2021-11-11 09:48:52'),
(204, 'Bing204', 'Chilling204', '2021-11-11', 'M', 90000204, 'dominic.loh@hotmail.ahv', '2021-11-11 09:48:52'),
(205, 'Bing205', 'Chilling205', '2021-11-11', 'M', 90000205, 'dominic.loh@hotmail.ahw', '2021-11-11 09:48:53'),
(206, 'Bing206', 'Chilling206', '2021-11-11', 'M', 90000206, 'dominic.loh@hotmail.ahx', '2021-11-11 09:48:53'),
(207, 'Bing207', 'Chilling207', '2021-11-11', 'M', 90000207, 'dominic.loh@hotmail.ahy', '2021-11-11 09:48:53'),
(208, 'Bing208', 'Chilling208', '2021-11-11', 'M', 90000208, 'dominic.loh@hotmail.ahz', '2021-11-11 09:48:53'),
(209, 'Bing209', 'Chilling209', '2021-11-11', 'M', 90000209, 'dominic.loh@hotmail.aia', '2021-11-11 09:48:53'),
(210, 'Bing210', 'Chilling210', '2021-11-11', 'M', 90000210, 'dominic.loh@hotmail.aib', '2021-11-11 09:48:53'),
(211, 'Bing211', 'Chilling211', '2021-11-11', 'M', 90000211, 'dominic.loh@hotmail.aic', '2021-11-11 09:48:53'),
(212, 'Bing212', 'Chilling212', '2021-11-11', 'M', 90000212, 'dominic.loh@hotmail.aid', '2021-11-11 09:48:53'),
(213, 'Bing213', 'Chilling213', '2021-11-11', 'M', 90000213, 'dominic.loh@hotmail.aie', '2021-11-11 09:48:53'),
(214, 'Bing214', 'Chilling214', '2021-11-11', 'M', 90000214, 'dominic.loh@hotmail.aif', '2021-11-11 09:48:54'),
(215, 'Bing215', 'Chilling215', '2021-11-11', 'M', 90000215, 'dominic.loh@hotmail.aig', '2021-11-11 09:48:54'),
(216, 'Bing216', 'Chilling216', '2021-11-11', 'M', 90000216, 'dominic.loh@hotmail.aih', '2021-11-11 09:48:54'),
(217, 'Bing217', 'Chilling217', '2021-11-11', 'M', 90000217, 'dominic.loh@hotmail.aii', '2021-11-11 09:48:54'),
(218, 'Bing218', 'Chilling218', '2021-11-11', 'M', 90000218, 'dominic.loh@hotmail.aij', '2021-11-11 09:48:54'),
(219, 'Bing219', 'Chilling219', '2021-11-11', 'M', 90000219, 'dominic.loh@hotmail.aik', '2021-11-11 09:48:54'),
(220, 'Bing220', 'Chilling220', '2021-11-11', 'M', 90000220, 'dominic.loh@hotmail.ail', '2021-11-11 09:48:54'),
(221, 'Bing221', 'Chilling221', '2021-11-11', 'M', 90000221, 'dominic.loh@hotmail.aim', '2021-11-11 09:48:54'),
(222, 'Bing222', 'Chilling222', '2021-11-11', 'M', 90000222, 'dominic.loh@hotmail.ain', '2021-11-11 09:48:54'),
(223, 'Bing223', 'Chilling223', '2021-11-11', 'M', 90000223, 'dominic.loh@hotmail.aio', '2021-11-11 09:48:55'),
(224, 'Bing224', 'Chilling224', '2021-11-11', 'M', 90000224, 'dominic.loh@hotmail.aip', '2021-11-11 09:48:55'),
(225, 'Bing225', 'Chilling225', '2021-11-11', 'M', 90000225, 'dominic.loh@hotmail.aiq', '2021-11-11 09:48:55'),
(226, 'Bing226', 'Chilling226', '2021-11-11', 'M', 90000226, 'dominic.loh@hotmail.air', '2021-11-11 09:48:55'),
(227, 'Bing227', 'Chilling227', '2021-11-11', 'M', 90000227, 'dominic.loh@hotmail.ais', '2021-11-11 09:48:55'),
(228, 'Bing228', 'Chilling228', '2021-11-11', 'M', 90000228, 'dominic.loh@hotmail.ait', '2021-11-11 09:48:55'),
(229, 'Bing229', 'Chilling229', '2021-11-11', 'M', 90000229, 'dominic.loh@hotmail.aiu', '2021-11-11 09:48:55'),
(230, 'Bing230', 'Chilling230', '2021-11-11', 'M', 90000230, 'dominic.loh@hotmail.aiv', '2021-11-11 09:48:55'),
(231, 'Bing231', 'Chilling231', '2021-11-11', 'M', 90000231, 'dominic.loh@hotmail.aiw', '2021-11-11 09:48:55'),
(232, 'Bing232', 'Chilling232', '2021-11-11', 'M', 90000232, 'dominic.loh@hotmail.aix', '2021-11-11 09:48:56'),
(233, 'Bing233', 'Chilling233', '2021-11-11', 'M', 90000233, 'dominic.loh@hotmail.aiy', '2021-11-11 09:48:56'),
(234, 'Bing234', 'Chilling234', '2021-11-11', 'M', 90000234, 'dominic.loh@hotmail.aiz', '2021-11-11 09:48:56'),
(235, 'Bing235', 'Chilling235', '2021-11-11', 'M', 90000235, 'dominic.loh@hotmail.aja', '2021-11-11 09:48:56'),
(236, 'Bing236', 'Chilling236', '2021-11-11', 'M', 90000236, 'dominic.loh@hotmail.ajb', '2021-11-11 09:48:56'),
(237, 'Bing237', 'Chilling237', '2021-11-11', 'M', 90000237, 'dominic.loh@hotmail.ajc', '2021-11-11 09:48:56'),
(238, 'Bing238', 'Chilling238', '2021-11-11', 'M', 90000238, 'dominic.loh@hotmail.ajd', '2021-11-11 09:48:56'),
(239, 'Bing239', 'Chilling239', '2021-11-11', 'M', 90000239, 'dominic.loh@hotmail.aje', '2021-11-11 09:48:56'),
(240, 'Bing240', 'Chilling240', '2021-11-11', 'M', 90000240, 'dominic.loh@hotmail.ajf', '2021-11-11 09:48:56'),
(241, 'Bing241', 'Chilling241', '2021-11-11', 'M', 90000241, 'dominic.loh@hotmail.ajg', '2021-11-11 09:48:57'),
(242, 'Bing242', 'Chilling242', '2021-11-11', 'M', 90000242, 'dominic.loh@hotmail.ajh', '2021-11-11 09:48:57'),
(243, 'Bing243', 'Chilling243', '2021-11-11', 'M', 90000243, 'dominic.loh@hotmail.aji', '2021-11-11 09:48:57'),
(244, 'Bing244', 'Chilling244', '2021-11-11', 'M', 90000244, 'dominic.loh@hotmail.ajj', '2021-11-11 09:48:57'),
(245, 'Bing245', 'Chilling245', '2021-11-11', 'M', 90000245, 'dominic.loh@hotmail.ajk', '2021-11-11 09:48:57'),
(246, 'Bing246', 'Chilling246', '2021-11-11', 'M', 90000246, 'dominic.loh@hotmail.ajl', '2021-11-11 09:48:57'),
(247, 'Bing247', 'Chilling247', '2021-11-11', 'M', 90000247, 'dominic.loh@hotmail.ajm', '2021-11-11 09:48:57'),
(248, 'Bing248', 'Chilling248', '2021-11-11', 'M', 90000248, 'dominic.loh@hotmail.ajn', '2021-11-11 09:48:57'),
(249, 'Bing249', 'Chilling249', '2021-11-11', 'M', 90000249, 'dominic.loh@hotmail.ajo', '2021-11-11 09:48:57'),
(250, 'Bing250', 'Chilling250', '2021-11-11', 'M', 90000250, 'dominic.loh@hotmail.ajp', '2021-11-11 09:48:58'),
(251, 'Bing251', 'Chilling251', '2021-11-11', 'M', 90000251, 'dominic.loh@hotmail.ajq', '2021-11-11 09:48:58'),
(252, 'Bing252', 'Chilling252', '2021-11-11', 'M', 90000252, 'dominic.loh@hotmail.ajr', '2021-11-11 09:48:58'),
(253, 'Bing253', 'Chilling253', '2021-11-11', 'M', 90000253, 'dominic.loh@hotmail.ajs', '2021-11-11 09:48:58'),
(254, 'Bing254', 'Chilling254', '2021-11-11', 'M', 90000254, 'dominic.loh@hotmail.ajt', '2021-11-11 09:48:58'),
(255, 'Bing255', 'Chilling255', '2021-11-11', 'M', 90000255, 'dominic.loh@hotmail.aju', '2021-11-11 09:48:58'),
(256, 'Bing256', 'Chilling256', '2021-11-11', 'M', 90000256, 'dominic.loh@hotmail.ajv', '2021-11-11 09:48:58'),
(257, 'Bing257', 'Chilling257', '2021-11-11', 'M', 90000257, 'dominic.loh@hotmail.ajw', '2021-11-11 09:48:58'),
(258, 'Bing258', 'Chilling258', '2021-11-11', 'M', 90000258, 'dominic.loh@hotmail.ajx', '2021-11-11 09:48:58'),
(259, 'Bing259', 'Chilling259', '2021-11-11', 'M', 90000259, 'dominic.loh@hotmail.ajy', '2021-11-11 09:48:58'),
(260, 'Bing260', 'Chilling260', '2021-11-11', 'M', 90000260, 'dominic.loh@hotmail.ajz', '2021-11-11 09:48:59'),
(261, 'Bing261', 'Chilling261', '2021-11-11', 'M', 90000261, 'dominic.loh@hotmail.aka', '2021-11-11 09:48:59'),
(262, 'Bing262', 'Chilling262', '2021-11-11', 'M', 90000262, 'dominic.loh@hotmail.akb', '2021-11-11 09:48:59'),
(263, 'Bing263', 'Chilling263', '2021-11-11', 'M', 90000263, 'dominic.loh@hotmail.akc', '2021-11-11 09:48:59'),
(264, 'Bing264', 'Chilling264', '2021-11-11', 'M', 90000264, 'dominic.loh@hotmail.akd', '2021-11-11 09:48:59'),
(265, 'Bing265', 'Chilling265', '2021-11-11', 'M', 90000265, 'dominic.loh@hotmail.ake', '2021-11-11 09:48:59'),
(266, 'Bing266', 'Chilling266', '2021-11-11', 'M', 90000266, 'dominic.loh@hotmail.akf', '2021-11-11 09:48:59'),
(267, 'Bing267', 'Chilling267', '2021-11-11', 'M', 90000267, 'dominic.loh@hotmail.akg', '2021-11-11 09:48:59'),
(268, 'Bing268', 'Chilling268', '2021-11-11', 'M', 90000268, 'dominic.loh@hotmail.akh', '2021-11-11 09:48:59'),
(269, 'Bing269', 'Chilling269', '2021-11-11', 'M', 90000269, 'dominic.loh@hotmail.aki', '2021-11-11 09:49:00'),
(270, 'Bing270', 'Chilling270', '2021-11-11', 'M', 90000270, 'dominic.loh@hotmail.akj', '2021-11-11 09:49:00'),
(271, 'Bing271', 'Chilling271', '2021-11-11', 'M', 90000271, 'dominic.loh@hotmail.akk', '2021-11-11 09:49:00'),
(272, 'Bing272', 'Chilling272', '2021-11-11', 'M', 90000272, 'dominic.loh@hotmail.akl', '2021-11-11 09:49:00'),
(273, 'Bing273', 'Chilling273', '2021-11-11', 'M', 90000273, 'dominic.loh@hotmail.akm', '2021-11-11 09:49:00'),
(274, 'Bing274', 'Chilling274', '2021-11-11', 'M', 90000274, 'dominic.loh@hotmail.akn', '2021-11-11 09:49:00'),
(275, 'Bing275', 'Chilling275', '2021-11-11', 'M', 90000275, 'dominic.loh@hotmail.ako', '2021-11-11 09:49:00'),
(276, 'Bing276', 'Chilling276', '2021-11-11', 'M', 90000276, 'dominic.loh@hotmail.akp', '2021-11-11 09:49:00'),
(277, 'Bing277', 'Chilling277', '2021-11-11', 'M', 90000277, 'dominic.loh@hotmail.akq', '2021-11-11 09:49:00'),
(278, 'Bing278', 'Chilling278', '2021-11-11', 'M', 90000278, 'dominic.loh@hotmail.akr', '2021-11-11 09:49:01'),
(279, 'Bing279', 'Chilling279', '2021-11-11', 'M', 90000279, 'dominic.loh@hotmail.aks', '2021-11-11 09:49:01'),
(280, 'Bing280', 'Chilling280', '2021-11-11', 'M', 90000280, 'dominic.loh@hotmail.akt', '2021-11-11 09:49:01'),
(281, 'Bing281', 'Chilling281', '2021-11-11', 'M', 90000281, 'dominic.loh@hotmail.aku', '2021-11-11 09:49:01'),
(282, 'Bing282', 'Chilling282', '2021-11-11', 'M', 90000282, 'dominic.loh@hotmail.akv', '2021-11-11 09:49:01'),
(283, 'Bing283', 'Chilling283', '2021-11-11', 'M', 90000283, 'dominic.loh@hotmail.akw', '2021-11-11 09:49:01'),
(284, 'Bing284', 'Chilling284', '2021-11-11', 'M', 90000284, 'dominic.loh@hotmail.akx', '2021-11-11 09:49:01'),
(285, 'Bing285', 'Chilling285', '2021-11-11', 'M', 90000285, 'dominic.loh@hotmail.aky', '2021-11-11 09:49:01'),
(286, 'Bing286', 'Chilling286', '2021-11-11', 'M', 90000286, 'dominic.loh@hotmail.akz', '2021-11-11 09:49:01'),
(287, 'Bing287', 'Chilling287', '2021-11-11', 'M', 90000287, 'dominic.loh@hotmail.ala', '2021-11-11 09:49:01'),
(288, 'Bing288', 'Chilling288', '2021-11-11', 'M', 90000288, 'dominic.loh@hotmail.alb', '2021-11-11 09:49:02'),
(289, 'Bing289', 'Chilling289', '2021-11-11', 'M', 90000289, 'dominic.loh@hotmail.alc', '2021-11-11 09:49:02'),
(290, 'Bing290', 'Chilling290', '2021-11-11', 'M', 90000290, 'dominic.loh@hotmail.ald', '2021-11-11 09:49:02'),
(291, 'Bing291', 'Chilling291', '2021-11-11', 'M', 90000291, 'dominic.loh@hotmail.ale', '2021-11-11 09:49:02'),
(292, 'Bing292', 'Chilling292', '2021-11-11', 'M', 90000292, 'dominic.loh@hotmail.alf', '2021-11-11 09:49:02'),
(293, 'Bing293', 'Chilling293', '2021-11-11', 'M', 90000293, 'dominic.loh@hotmail.alg', '2021-11-11 09:49:02'),
(294, 'Bing294', 'Chilling294', '2021-11-11', 'M', 90000294, 'dominic.loh@hotmail.alh', '2021-11-11 09:49:02'),
(295, 'Bing295', 'Chilling295', '2021-11-11', 'M', 90000295, 'dominic.loh@hotmail.ali', '2021-11-11 09:49:02'),
(296, 'Bing296', 'Chilling296', '2021-11-11', 'M', 90000296, 'dominic.loh@hotmail.alj', '2021-11-11 09:49:02'),
(297, 'Bing297', 'Chilling297', '2021-11-11', 'M', 90000297, 'dominic.loh@hotmail.alk', '2021-11-11 09:49:02'),
(298, 'Bing298', 'Chilling298', '2021-11-11', 'M', 90000298, 'dominic.loh@hotmail.all', '2021-11-11 09:49:03'),
(299, 'Bing299', 'Chilling299', '2021-11-11', 'M', 90000299, 'dominic.loh@hotmail.alm', '2021-11-11 09:49:03'),
(300, 'Bing300', 'Chilling300', '2021-11-11', 'M', 90000300, 'dominic.loh@hotmail.aln', '2021-11-11 09:49:03'),
(301, 'Bing301', 'Chilling301', '2021-11-11', 'M', 90000301, 'dominic.loh@hotmail.alo', '2021-11-11 09:49:03'),
(302, 'Bing302', 'Chilling302', '2021-11-11', 'M', 90000302, 'dominic.loh@hotmail.alp', '2021-11-11 09:49:03');

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
  ADD UNIQUE KEY `TokenCode` (`TokenCode`),
  ADD UNIQUE KEY `TokenToPrescription_FK` (`PrescriptionId`) USING BTREE;

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
  ADD UNIQUE KEY `UserInfo_AK1` (`PhoneNumber`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5101;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `PharmacistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2101;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `PrescriptionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `TokenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

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
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `TokenToPrescription_FK` FOREIGN KEY (`PrescriptionId`) REFERENCES `prescription` (`PrescriptionId`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `UserInfoToUserAccount_FK` FOREIGN KEY (`UserId`) REFERENCES `useraccount` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
