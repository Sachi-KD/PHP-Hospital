-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2024 at 03:51 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int DEFAULT NULL,
  `aemail` varchar(255) NOT NULL,
  `aname` varchar(255) DEFAULT NULL,
  `apassword` varchar(255) DEFAULT NULL,
  `anic` varchar(20) DEFAULT NULL,
  `atel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`aemail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aemail`, `aname`, `apassword`, `anic`, `atel`) VALUES
(0, 'admin@suwa.com', NULL, '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appoid` int NOT NULL AUTO_INCREMENT,
  `pid` int DEFAULT NULL,
  `apponum` int DEFAULT NULL,
  `scheduleid` int DEFAULT NULL,
  `appodate` date DEFAULT NULL,
  PRIMARY KEY (`appoid`),
  KEY `pid` (`pid`),
  KEY `scheduleid` (`scheduleid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoid`, `pid`, `apponum`, `scheduleid`, `appodate`) VALUES
(22, 28, 1, 40, '2024-06-07'),
(21, 29, 1, 30, '2024-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `docid` int NOT NULL AUTO_INCREMENT,
  `docemail` varchar(255) DEFAULT NULL,
  `docname` varchar(255) DEFAULT NULL,
  `docpassword` varchar(255) DEFAULT NULL,
  `docnic` varchar(15) DEFAULT NULL,
  `doctel` varchar(15) DEFAULT NULL,
  `specialties` int DEFAULT NULL,
  PRIMARY KEY (`docid`),
  KEY `specialties` (`specialties`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `docemail`, `docname`, `docpassword`, `docnic`, `doctel`, `specialties`) VALUES
(28, 'anura@suwa.com', 'Anura Jayasinghe', '123', '8842009999', '0558963214', 55),
(29, 'ravi@suwa.com', 'Ravi Welikumbura', '123', '455663063', '0778440286', 39),
(30, 'manavi@suwa.com', 'Manavi Kulathunga', '123', '1234646467', '0779268753', 1),
(31, 'ruwan@suwa.com', 'Ruwan Jayasinghe', '123', '4516113313', '0752345123', 14),
(19, 'lasantha@suwa.com', 'Lasantha de alwis', '123', '884200266', '0752345123', 1),
(20, 'nishantha@suwa.com', 'Nishantha Perera', '123', '9855236', '0752345123', 5),
(21, 'roshan@suwa.com', 'Roshan Kaldera', '123', '200056854', '0762989709', 47),
(22, 'kanchana@suwa.com', 'Kanchana Perera', '123', '85666221', '0558963214', 41),
(23, 'kamal@suwa.com', 'Kamal Fernando', '123', '85666221', '0728963214', 3),
(24, 'victor@suwa.com', 'Victor Rathnayake', '123', '1888888888', '0762989709', 29),
(25, 'chaminda@suwa.com', 'Chaminda peiris', '123', '1888888888', '0779268752', 26),
(26, 'oshani@suwa.com', 'Oshani Gunasekara', '123', '9855236', '0762989709', 11),
(27, 'padeniya@suwa.com', 'A Padeniya', '123', '9855236', '0762989709', 19),
(32, 'prem@suwa.com', 'Premasiri Perera', '1234', '953240335v', '0762989709', 1),
(34, 'akash@suwa.com', 'Aakash perera', '55', '4444444444', '5555555', 1),
(35, 'ramya@suwa.com', 'Ramya', '123', '774512890V', '0775210268', 12);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `pemail` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `ppassword` varchar(255) DEFAULT NULL,
  `paddress` varchar(255) DEFAULT NULL,
  `pnic` varchar(15) DEFAULT NULL,
  `pdob` date DEFAULT NULL,
  `ptel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pemail`, `pname`, `ppassword`, `paddress`, `pnic`, `pdob`, `ptel`) VALUES
(29, 'saman@gmail.com', 'Saman Kumara', '123', '275/B Gampaha', '774512890V', '1977-02-07', '0766666670'),
(28, 'sachi@gmail.com', 'sachi kaldera', '123', 'no 210 panadura clombo', '718589933', '2024-06-14', '0775210268'),
(25, 'suu@gmail.com', 'su kaldera', '123', 'no 210 colombo', '1888888888', '2007-10-29', '0728963214'),
(27, 'nikeshaladilini6@gmail', 'dilini  perera', '1234', '210 /9 kosgahalanda watta panadura', '200526103601', '2005-12-26', '0769216719');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `scheduleid` int NOT NULL AUTO_INCREMENT,
  `docid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` time DEFAULT NULL,
  `nop` int DEFAULT NULL,
  PRIMARY KEY (`scheduleid`),
  KEY `docid` (`docid`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `docid`, `title`, `scheduledate`, `scheduletime`, `nop`) VALUES
(1, '1', 'Test Session', '2050-01-01', '18:00:00', 50),
(2, '1', '1', '2022-06-10', '20:36:00', 1),
(3, '1', '12', '2022-06-10', '20:33:00', 1),
(4, '1', '1', '2022-06-10', '12:32:00', 1),
(5, '1', '1', '2022-06-10', '20:35:00', 1),
(6, '1', '12', '2022-06-10', '20:35:00', 1),
(7, '1', '1', '2022-06-24', '20:36:00', 1),
(8, '1', '12', '2022-06-10', '13:33:00', 1),
(9, '1', 'fever', '2024-04-04', '21:24:00', 5),
(10, '3', 'fever', '2024-03-31', '15:20:00', 5),
(11, '3', 'cough', '2024-03-30', '15:21:00', 2),
(12, '10', 'Accident', '2024-11-02', '20:02:00', 20),
(13, '12', 'virus', '2024-04-12', '22:28:00', 1),
(40, '32', 'Headache', '2024-06-12', '13:05:00', 5),
(39, '22', 'Fever', '2024-06-10', '15:07:00', 10),
(30, '21', 'Backache', '2024-06-07', '04:35:00', 4),
(41, '20', 'Cough', '2024-06-13', '04:07:00', 12),
(42, '24', 'Influenza', '2024-06-23', '09:09:00', 5),
(43, '25', 'Virus Fever', '2024-06-23', '06:19:00', 5),
(44, '23', 'Cough', '2024-06-14', '22:49:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
CREATE TABLE IF NOT EXISTS `specialties` (
  `id` int NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `sname`) VALUES
(1, 'Accident and emergency medicine'),
(2, 'Allergology'),
(3, 'Anaesthetics'),
(4, 'Biological hematology'),
(5, 'Cardiology'),
(6, 'Child psychiatry'),
(7, 'Clinical biology'),
(8, 'Clinical chemistry'),
(9, 'Clinical neurophysiology'),
(10, 'Clinical radiology'),
(11, 'Dental, oral and maxillo-facial surgery'),
(12, 'Dermato-venerology'),
(13, 'Dermatology'),
(14, 'Endocrinology'),
(15, 'Gastro-enterologic surgery'),
(16, 'Gastroenterology'),
(17, 'General hematology'),
(18, 'General Practice'),
(19, 'General surgery'),
(20, 'Geriatrics'),
(21, 'Immunology'),
(22, 'Infectious diseases'),
(23, 'Internal medicine'),
(24, 'Laboratory medicine'),
(25, 'Maxillo-facial surgery'),
(26, 'Microbiology'),
(27, 'Nephrology'),
(28, 'Neuro-psychiatry'),
(29, 'Neurology'),
(30, 'Neurosurgery'),
(31, 'Nuclear medicine'),
(32, 'Obstetrics and gynecology'),
(33, 'Occupational medicine'),
(34, 'Ophthalmology'),
(35, 'Orthopaedics'),
(36, 'Otorhinolaryngology'),
(37, 'Paediatric surgery'),
(38, 'Paediatrics'),
(39, 'Pathology'),
(40, 'Pharmacology'),
(41, 'Physical medicine and rehabilitation'),
(42, 'Plastic surgery'),
(43, 'Podiatric Medicine'),
(44, 'Podiatric Surgery'),
(45, 'Psychiatry'),
(46, 'Public health and Preventive Medicine'),
(47, 'Radiology'),
(48, 'Radiotherapy'),
(49, 'Respiratory medicine'),
(50, 'Rheumatology'),
(51, 'Stomatology'),
(52, 'Thoracic surgery'),
(53, 'Tropical medicine'),
(54, 'Urology'),
(55, 'Vascular surgery'),
(56, 'Venereology');

-- --------------------------------------------------------

--
-- Table structure for table `webuser`
--

DROP TABLE IF EXISTS `webuser`;
CREATE TABLE IF NOT EXISTS `webuser` (
  `email` varchar(255) NOT NULL,
  `usertype` char(1) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webuser`
--

INSERT INTO `webuser` (`email`, `usertype`) VALUES
('admin@suwa.com', 'a'),
('nishantha@suwa.com', 'd'),
('patient@edoc.com', 'p'),
('emhashenudara@gmail.com', 'p'),
('roshan@suwa.com', 'd'),
('admin@gmail.com', 'p'),
('kanchana@suwa.com', 'd'),
('kamal@suwa.com', 'd'),
('victor@suwa.com', 'd'),
('chaminda@suwa.com', 'd'),
('oshani@suwa.com', 'd'),
('lasantha@suwa.com', 'd'),
('akash@suwa.com', 'd'),
('padeniya@suwa.com', 'd'),
('madhawapiyumika@gmail.com', 'p'),
('sachini@gmail.com', 'p'),
('hawa@gmail.com', 'p'),
('su@gmail.com', 'p'),
('anura@suwa.com', 'd'),
('ravi@suwa.com', 'd'),
('manavi@suwa.com', 'd'),
('ruwan@suwa.com', 'd'),
('ad@edoc.com', 'p'),
('as@gmail.com', 'p'),
('ad888min@edoc.com', 'p'),
('admin@edoc.com', 'p'),
('min@edoc.com', 'p'),
('n@edoc.com', 'p'),
('mpiyumika@gmail.com', 'p'),
('uuun@edoc.com', 'p'),
('min@ec.com', 'p'),
('mn@ec.com', 'p'),
('prem@suwa.com', 'd'),
('suu@gmail.com', 'p'),
('nikeshaladilini6@gmail', 'p'),
('sachi@gmail.com', 'p'),
('saman@gmail.com', 'p'),
('ramya@suwa.com', 'd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
