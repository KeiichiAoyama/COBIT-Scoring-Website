-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 12:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digicob`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activitiesId` varchar(255) NOT NULL,
  `activitiesName` longtext DEFAULT NULL,
  `activitiesQuestion` longtext DEFAULT NULL,
  `activitiesQuestionLevel` int(11) DEFAULT NULL,
  `governancePracticeId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activitiesId`, `activitiesName`, `activitiesQuestion`, `activitiesQuestionLevel`, `governancePracticeId`) VALUES
('EDM01.01.01', 'Analyze and identify the internal and external environmental factors (legal, regulatory and contractual obligations) and trends in\r\nthe business environment that may influence governance design', 'What percentage of completion have you achieved in analyzing and identifying the internal and external environmental factors, including legal, regulatory, and contractual obligations, as well as trends in the business environment, that may influence your governance design?', 2, 'EDM01.01'),
('EDM01.01.02', 'Determine the significance of I&T and its role with respect to the business', 'What percentage of completion have you achieved in determining the significance of Information and Technology (I&T) and its role with respect to the business?', 2, 'EDM01.01'),
('EDM01.01.03', 'Consider external regulations, laws and contractual obligations and determine how they should be applied within the governance of enterprise I&T.', 'What percentage of completion have you achieved in considering external regulations, laws, and contractual obligations and determining how they should be applied within the governance of enterprise Information and Technology (I&T)?', 2, 'EDM01.01'),
('EDM01.01.04', 'Determine the implications of the overall enterprise control environment with regard to I&T', 'What percentage of completion have you achieved in determining the implications of the overall enterprise control environment with regard to Information and Technology (I&T)?', 2, 'EDM01.01'),
('EDM01.01.05', 'Align the ethical use and processing of information and its impact on society, the natural environment, and internal and external stakeholder interests with the enterprise’s direction, goals and objectives.', 'What percentage of completion have you achieved in aligning the ethical use and processing of information, and its impact on society, the natural environment, and internal and external stakeholder interests, with the enterprise’s direction, goals, and objectives?', 3, 'EDM01.01'),
('EDM01.01.06', 'Articulate principles that will guide the design of governance and decision making of I&T.', 'What percentage of completion have you achieved in articulating principles that will guide the design of governance and decision-making for Information and Technology (I&T)?', 3, 'EDM01.01'),
('EDM01.01.07', 'Determine the optimal decision-making model for I&T.', 'What percentage of completion have you achieved in determining the optimal decision-making model for Information and Technology (I&T)?', 3, 'EDM01.01'),
('EDM01.01.08', 'Determine the appropriate levels of authority delegation, including threshold rules, for I&T decisions.', 'What percentage of completion have you achieved in determining the appropriate levels of authority delegation, including threshold rules, for Information and Technology (I&T) decisions?', 3, 'EDM01.01'),
('EDM01.02.01', 'Communicate governance of I&T principles and agree with executive management on the way to establish informed and committed leadership.', 'What percentage of completion have you achieved in communicating the governance of Information and Technology (I&T) principles and agreeing with executive management on the approach to establish informed and committed leadership?', 2, 'EDM01.02'),
('EDM01.02.02', 'Establish or delegate the establishment of governance structures, processes and practices in line with agreed-on design principles.', 'What percentage of completion have you achieved in establishing, or delegating the establishment of, governance structures, processes, and practices in line with the agreed-upon design principles?', 2, 'EDM01.02'),
('EDM01.02.03', 'Establish an I&T governance board (or equivalent) at the board level. This board should ensure that governance of information and technology, as part of enterprise governance, is adequately addressed; advise on strategic direction; and determine prioritization of I&T-enabled investment programs in line with the enterprise’s business strategy and priorities.', 'What percentage of completion have you achieved in establishing an Information and Technology (I&T) governance board (or equivalent) at the board level to ensure that governance of I&T is adequately addressed, advise on strategic direction, and determine the prioritization of I&T-enabled investment programs in line with the enterprise’s business strategy and priorities?', 2, 'EDM01.02'),
('EDM01.02.04', 'Allocate responsibility, authority and accountability for I&T decisions in line with agreed-on governance design principles, decision-making models and delegation.', 'What percentage of completion have you achieved in allocating responsibility, authority, and accountability for Information and Technology (I&T) decisions in line with the agreed-upon governance design principles, decision-making models, and delegation?', 3, 'EDM01.02'),
('EDM01.02.05', 'Ensure that communication and reporting mechanisms provide those responsible for oversight and decision making with appropriate information.', 'What percentage of completion have you achieved in ensuring that communication and reporting mechanisms provide those responsible for oversight and decision-making with appropriate information?', 3, 'EDM01.02'),
('EDM01.02.06', 'Direct that staff follow relevant guidelines for ethical and professional behavior and ensure that consequences of noncompliance are known and enforced.', 'What percentage of completion have you achieved in directing that staff follow relevant guidelines for ethical and professional behavior and ensuring that the consequences of noncompliance are known and enforced?', 3, 'EDM01.02'),
('EDM01.02.07', 'Direct the establishment of a reward system to promote desirable cultural change.', 'What percentage of completion have you achieved in directing the establishment of a reward system to promote desirable cultural change?', 3, 'EDM01.02'),
('EDM01.03.01', 'Assess the effectiveness and performance of those stakeholders given delegated responsibility and authority for governance of enterprise I&T.', 'What percentage of completion have you achieved in assessing the effectiveness and performance of stakeholders who have been delegated responsibility and authority for the governance of enterprise Information and Technology (I&T)?', 3, 'EDM01.03'),
('EDM01.03.02', 'Periodically assess whether agreed-on governance of I&T mechanisms (structures, principles, processes, etc.) are established and operating effectively.', 'What percentage of completion have you achieved in periodically assessing whether the agreed-upon governance of Information and Technology (I&T) mechanisms (such as structures, principles, processes, etc.) are established and operating effectively?', 4, 'EDM01.03'),
('EDM01.03.03', 'Assess the effectiveness of the governance design and identify actions to rectify any deviations found.', 'What percentage of completion have you achieved in assessing the effectiveness of the governance design and identifying actions to rectify any deviations found?', 4, 'EDM01.03'),
('EDM01.03.04', 'Maintain oversight of the extent to which I&T satisfies obligations (regulatory, legislation, common law, contractual), internal policies, standards and professional guidelines.', 'What percentage of completion have you achieved in maintaining oversight of the extent to which Information and Technology (I&T) satisfies obligations (regulatory, legislative, common law, contractual), internal policies, standards, and professional guidelines?', 4, 'EDM01.03'),
('EDM01.03.05', 'Provide oversight of the effectiveness of, and compliance with, the enterprise’s system of control.', 'What percentage of completion have you achieved in providing oversight of the effectiveness of, and compliance with, the enterprise’s system of control?', 4, 'EDM01.03'),
('EDM01.03.06', 'Monitor regular and routine mechanisms for ensuring that the use of I&T complies with relevant obligations (regulatory, legislation, common law, contractual), standards and guidelines.', 'What percentage of completion have you achieved in monitoring regular and routine mechanisms to ensure that the use of Information and Technology (I&T) complies with relevant obligations (regulatory, legislative, common law, contractual), standards, and guidelines?', 4, 'EDM01.03');

-- --------------------------------------------------------

--
-- Table structure for table `activitiescompany`
--

CREATE TABLE `activitiescompany` (
  `activitiesCompanyId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `governancePracticeCompanyId` int(11) DEFAULT NULL,
  `activitiesId` varchar(255) DEFAULT NULL,
  `activitiesCompanyScore` float DEFAULT NULL,
  `activitiesCompanyFindings` longtext DEFAULT NULL,
  `activitiesCompanyImpact` longtext DEFAULT NULL,
  `activitiesCompanyRecommendations` longtext DEFAULT NULL,
  `activitiesCompanyResponse` longtext DEFAULT NULL,
  `activitiesCompanyStatus` varchar(255) DEFAULT NULL,
  `activitiesCompanyDeadline` datetime DEFAULT NULL,
  `activitiesCompanyPersonInCharge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activitiescompany`
--

INSERT INTO `activitiescompany` (`activitiesCompanyId`, `userId`, `companyId`, `governancePracticeCompanyId`, `activitiesId`, `activitiesCompanyScore`, `activitiesCompanyFindings`, `activitiesCompanyImpact`, `activitiesCompanyRecommendations`, `activitiesCompanyResponse`, `activitiesCompanyStatus`, `activitiesCompanyDeadline`, `activitiesCompanyPersonInCharge`) VALUES
(1, 2, 1, 1, 'EDM01.01.01', 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, 1, 'EDM01.01.02', 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 1, 1, 'EDM01.01.03', 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 1, 1, 'EDM01.01.04', 92, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2, 1, 1, 'EDM01.01.05', 98, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 1, 1, 'EDM01.01.06', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 1, 1, 'EDM01.01.07', 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 1, 1, 'EDM01.01.08', 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, 1, 2, 'EDM01.02.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, 1, 2, 'EDM01.02.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 1, 2, 'EDM01.02.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 2, 1, 2, 'EDM01.02.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2, 1, 2, 'EDM01.02.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, 1, 2, 'EDM01.02.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2, 1, 2, 'EDM01.02.07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 2, 1, 3, 'EDM01.03.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2, 1, 3, 'EDM01.03.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2, 1, 3, 'EDM01.03.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2, 1, 3, 'EDM01.03.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 2, 1, 3, 'EDM01.03.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2, 1, 3, 'EDM01.03.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2, 2, 4, 'EDM01.01.01', 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 2, 2, 4, 'EDM01.01.02', 89, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 2, 2, 4, 'EDM01.01.03', 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 2, 2, 4, 'EDM01.01.04', 89, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 2, 2, 4, 'EDM01.01.05', 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2, 2, 4, 'EDM01.01.06', 86, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 2, 2, 4, 'EDM01.01.07', 89, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 2, 2, 4, 'EDM01.01.08', 99, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 2, 2, 5, 'EDM01.02.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 2, 2, 5, 'EDM01.02.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 2, 2, 5, 'EDM01.02.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 2, 2, 5, 'EDM01.02.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 2, 2, 5, 'EDM01.02.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 2, 2, 5, 'EDM01.02.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 2, 2, 5, 'EDM01.02.07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 2, 2, 6, 'EDM01.03.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 2, 2, 6, 'EDM01.03.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 2, 2, 6, 'EDM01.03.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 2, 2, 6, 'EDM01.03.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 2, 2, 6, 'EDM01.03.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 2, 2, 6, 'EDM01.03.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 2, 3, 7, 'EDM01.01.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 2, 3, 7, 'EDM01.01.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 2, 3, 7, 'EDM01.01.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 2, 3, 7, 'EDM01.01.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 2, 3, 7, 'EDM01.01.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 2, 3, 7, 'EDM01.01.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 2, 3, 7, 'EDM01.01.07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 2, 3, 7, 'EDM01.01.08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 2, 3, 8, 'EDM01.02.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 2, 3, 8, 'EDM01.02.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 2, 3, 8, 'EDM01.02.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 2, 3, 8, 'EDM01.02.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 2, 3, 8, 'EDM01.02.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 2, 3, 8, 'EDM01.02.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 2, 3, 8, 'EDM01.02.07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 2, 3, 9, 'EDM01.03.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 2, 3, 9, 'EDM01.03.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 2, 3, 9, 'EDM01.03.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 2, 3, 9, 'EDM01.03.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 2, 3, 9, 'EDM01.03.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 2, 3, 9, 'EDM01.03.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 3, 4, 10, 'EDM01.01.01', 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 3, 4, 10, 'EDM01.01.02', 91, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 3, 4, 10, 'EDM01.01.03', 92, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 3, 4, 10, 'EDM01.01.04', 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 3, 4, 10, 'EDM01.01.05', 94, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 3, 4, 10, 'EDM01.01.06', 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 3, 4, 10, 'EDM01.01.07', 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 3, 4, 10, 'EDM01.01.08', 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 3, 4, 11, 'EDM01.02.01', 66, 'aadc', 'xvdvsfva', 'zcsdcx xd', 'czvxvdxvdf', 'dvcsvdv', '2024-09-18 00:00:00', 'fefdvdfv'),
(73, 3, 4, 11, 'EDM01.02.02', 75, 'mks kcdc l', 'dlkmdklemf', 'addkmflmf', 'fnflemkefm', 'cscdvd', '2024-09-12 00:00:00', 'ewfefefer'),
(74, 3, 4, 11, 'EDM01.02.03', 39, 'vdkvdkvmdkv', 'effe', NULL, 'effdsfsvd', 'sfdvdfvd', NULL, 'sfwefe'),
(75, 3, 4, 11, 'EDM01.02.04', 54, 'csvdvdv', 'scsvcdvd', 'xacscd', 'dfsvdvd', NULL, '2024-09-18 00:00:00', 'fferreg'),
(76, 3, 4, 11, 'EDM01.02.05', 75, 'csvkenvkdnkvm', 'cnjkvkjevke', NULL, 'wfegnekm', 'rfeferg', NULL, NULL),
(77, 3, 4, 11, 'EDM01.02.06', 51, 'cnvkdjvernvke', NULL, 'fgfedfbvfbf', NULL, 'vdvdfvf', NULL, NULL),
(78, 3, 4, 11, 'EDM01.02.07', 18, 'cknvjfjfnj', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 3, 4, 12, 'EDM01.03.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 3, 4, 12, 'EDM01.03.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 3, 4, 12, 'EDM01.03.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 3, 4, 12, 'EDM01.03.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 3, 4, 12, 'EDM01.03.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 3, 4, 12, 'EDM01.03.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 3, 5, 13, 'EDM01.01.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 3, 5, 13, 'EDM01.01.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 3, 5, 13, 'EDM01.01.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 3, 5, 13, 'EDM01.01.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 3, 5, 13, 'EDM01.01.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 3, 5, 13, 'EDM01.01.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 3, 5, 13, 'EDM01.01.07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 3, 5, 13, 'EDM01.01.08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 3, 5, 14, 'EDM01.02.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 3, 5, 14, 'EDM01.02.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 3, 5, 14, 'EDM01.02.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 3, 5, 14, 'EDM01.02.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 3, 5, 14, 'EDM01.02.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 3, 5, 14, 'EDM01.02.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 3, 5, 14, 'EDM01.02.07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 3, 5, 15, 'EDM01.03.01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 3, 5, 15, 'EDM01.03.02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 3, 5, 15, 'EDM01.03.03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 3, 5, 15, 'EDM01.03.04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 3, 5, 15, 'EDM01.03.05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 3, 5, 15, 'EDM01.03.06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `companyIndustry` varchar(255) DEFAULT NULL,
  `companyAddress` longtext DEFAULT NULL,
  `companyLogo` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `companyName`, `companyIndustry`, `companyAddress`, `companyLogo`) VALUES
(1, 'xxx', 'xxxx', 'xxxx', NULL),
(2, 'yyy', 'yyy', 'yyy', NULL),
(3, 'ttt', 'ttt', 'ttt', NULL),
(4, 'aaa', 'aaa', 'aaa', NULL),
(5, 'cddvd', 'dsadsada', 'asd', 'images/1725856746.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `domainId` int(11) NOT NULL,
  `domainName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`domainId`, `domainName`) VALUES
(1, 'Evaluate, Direct, and Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `domaincompany`
--

CREATE TABLE `domaincompany` (
  `domainCompanyId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `domainId` int(11) DEFAULT NULL,
  `domainCompanyScore` float DEFAULT NULL,
  `domainCompanyLevel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `domaincompany`
--

INSERT INTO `domaincompany` (`domainCompanyId`, `userId`, `companyId`, `domainId`, `domainCompanyScore`, `domainCompanyLevel`) VALUES
(1, 2, 1, 1, NULL, NULL),
(2, 2, 2, 1, NULL, NULL),
(3, 2, 3, 1, NULL, NULL),
(4, 3, 4, 1, 73.75, 3),
(5, 3, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `governanceobject`
--

CREATE TABLE `governanceobject` (
  `governanceObjectId` varchar(255) NOT NULL,
  `governanceObjectName` varchar(255) DEFAULT NULL,
  `domainId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `governanceobject`
--

INSERT INTO `governanceobject` (`governanceObjectId`, `governanceObjectName`, `domainId`) VALUES
('EDM01', 'Ensured Governance Framework Setting and Maintenance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `governanceobjectcompany`
--

CREATE TABLE `governanceobjectcompany` (
  `governanceObjectCompanyId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `domainCompanyId` int(11) DEFAULT NULL,
  `governanceObjectId` varchar(255) DEFAULT NULL,
  `governanceObjectCompanyScore` float DEFAULT NULL,
  `governanceObjectCompanyLevel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `governanceobjectcompany`
--

INSERT INTO `governanceobjectcompany` (`governanceObjectCompanyId`, `userId`, `companyId`, `domainCompanyId`, `governanceObjectId`, `governanceObjectCompanyScore`, `governanceObjectCompanyLevel`) VALUES
(1, 2, 1, 1, 'EDM01', NULL, NULL),
(2, 2, 2, 2, 'EDM01', NULL, NULL),
(3, 2, 3, 3, 'EDM01', NULL, NULL),
(4, 3, 4, 4, 'EDM01', 73.75, 3),
(5, 3, 5, 5, 'EDM01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `governancepractice`
--

CREATE TABLE `governancepractice` (
  `governancePracticeId` varchar(255) NOT NULL,
  `governancePracticeName` varchar(255) DEFAULT NULL,
  `governancePracticeAvailableLevels` int(11) NOT NULL,
  `governanceObjectId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `governancepractice`
--

INSERT INTO `governancepractice` (`governancePracticeId`, `governancePracticeName`, `governancePracticeAvailableLevels`, `governanceObjectId`) VALUES
('EDM01.01', ' Evaluate the governance system.', 3, 'EDM01'),
('EDM01.02', 'Direct the governance system.', 3, 'EDM01'),
('EDM01.03', 'Monitor the governance system.', 4, 'EDM01');

-- --------------------------------------------------------

--
-- Table structure for table `governancepracticecompany`
--

CREATE TABLE `governancepracticecompany` (
  `governancePracticeCompanyId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `governancePracticeId` varchar(255) DEFAULT NULL,
  `governanceObjectCompanyId` int(11) DEFAULT NULL,
  `governancePracticeCompanyScore` float DEFAULT NULL,
  `governancePracticeCompanyLevel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `governancepracticecompany`
--

INSERT INTO `governancepracticecompany` (`governancePracticeCompanyId`, `userId`, `companyId`, `governancePracticeId`, `governanceObjectCompanyId`, `governancePracticeCompanyScore`, `governancePracticeCompanyLevel`) VALUES
(1, 2, 1, 'EDM01.01', 1, NULL, NULL),
(2, 2, 1, 'EDM01.02', 1, NULL, NULL),
(3, 2, 1, 'EDM01.03', 1, NULL, NULL),
(4, 2, 2, 'EDM01.01', 2, NULL, NULL),
(5, 2, 2, 'EDM01.02', 2, NULL, NULL),
(6, 2, 2, 'EDM01.03', 2, NULL, NULL),
(7, 2, 3, 'EDM01.01', 3, NULL, NULL),
(8, 2, 3, 'EDM01.02', 3, NULL, NULL),
(9, 2, 3, 'EDM01.03', 3, NULL, NULL),
(10, 3, 4, 'EDM01.01', 4, 93.5, 3),
(11, 3, 4, 'EDM01.02', 4, 54, NULL),
(12, 3, 4, 'EDM01.03', 4, NULL, NULL),
(13, 3, 5, 'EDM01.01', 5, NULL, NULL),
(14, 3, 5, 'EDM01.02', 5, NULL, NULL),
(15, 3, 5, 'EDM01.03', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2024_07_19_084741_create_sessions_table', 2),
(3, '2024_07_19_090556_create_cache_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3t9UVMU2IoN1TD53w0G5by3EHKnQqgzai5IcVN8F', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHk3WUtoY01qZWNtOUFVUXNxTUdrQjZjR0ZCOGJKUEpsZ0djdGd2RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1721379859),
('S01UkJgcfX73cDxpD8XIsXJrEgaZ8JJ9LZrJ3Iuf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRmFOamU3ODhPVjJYa2NITVdESkxvNTJhUWkxb01Qc1l2dlI2WnkzNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1721380108);

-- --------------------------------------------------------

--
-- Table structure for table `usercompany`
--

CREATE TABLE `usercompany` (
  `userCompanyId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `userCompanyScore` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercompany`
--

INSERT INTO `usercompany` (`userCompanyId`, `userId`, `companyId`, `userCompanyScore`) VALUES
(1, 2, 1, 0),
(2, 2, 2, 0),
(3, 2, 3, 0),
(4, 3, 4, 73.75),
(5, 3, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'test', 'test@testmail.com', '$2y$12$vx9nOah20xCHaSl/erSV9uttMCB6Y3QcOUXkQjIJNsMH1yamGQ58i', '2024-07-19 10:46:04', '2024-07-19 10:46:04'),
(2, 'zura', 'zura@example.com', '$2y$12$a/gp8ajxUf5CKNeUf.EBxuvmnXySyKpKhMUUetFDlVLshrUM3QMq6', '2024-07-23 14:00:03', '2024-07-23 14:00:03'),
(3, 'test', 'test@email.com', '$2y$12$CPDs1NmwGR2JwT/4e47uieksnv6pqtUwLJxBnUMgA2sBmXfsUuDXe', '2024-08-28 00:09:17', '2024-08-28 00:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activitiesId`),
  ADD KEY `governancePracticeId` (`governancePracticeId`);

--
-- Indexes for table `activitiescompany`
--
ALTER TABLE `activitiescompany`
  ADD PRIMARY KEY (`activitiesCompanyId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `governancePracticeCompanyId` (`governancePracticeCompanyId`),
  ADD KEY `activitiesId` (`activitiesId`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`domainId`);

--
-- Indexes for table `domaincompany`
--
ALTER TABLE `domaincompany`
  ADD PRIMARY KEY (`domainCompanyId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `domainId` (`domainId`);

--
-- Indexes for table `governanceobject`
--
ALTER TABLE `governanceobject`
  ADD PRIMARY KEY (`governanceObjectId`),
  ADD KEY `domainId` (`domainId`);

--
-- Indexes for table `governanceobjectcompany`
--
ALTER TABLE `governanceobjectcompany`
  ADD PRIMARY KEY (`governanceObjectCompanyId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `domainCompanyId` (`domainCompanyId`),
  ADD KEY `governanceObjectId` (`governanceObjectId`);

--
-- Indexes for table `governancepractice`
--
ALTER TABLE `governancepractice`
  ADD PRIMARY KEY (`governancePracticeId`),
  ADD KEY `governanceObjectId` (`governanceObjectId`);

--
-- Indexes for table `governancepracticecompany`
--
ALTER TABLE `governancepracticecompany`
  ADD PRIMARY KEY (`governancePracticeCompanyId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `governancePracticeId` (`governancePracticeId`),
  ADD KEY `governanceObjectCompanyId` (`governanceObjectCompanyId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `usercompany`
--
ALTER TABLE `usercompany`
  ADD PRIMARY KEY (`userCompanyId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `companyId` (`companyId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitiescompany`
--
ALTER TABLE `activitiescompany`
  MODIFY `activitiesCompanyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `domaincompany`
--
ALTER TABLE `domaincompany`
  MODIFY `domainCompanyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `governanceobjectcompany`
--
ALTER TABLE `governanceobjectcompany`
  MODIFY `governanceObjectCompanyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `governancepracticecompany`
--
ALTER TABLE `governancepracticecompany`
  MODIFY `governancePracticeCompanyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usercompany`
--
ALTER TABLE `usercompany`
  MODIFY `userCompanyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`governancePracticeId`) REFERENCES `governancepractice` (`governancePracticeId`);

--
-- Constraints for table `activitiescompany`
--
ALTER TABLE `activitiescompany`
  ADD CONSTRAINT `activitiescompany_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `activitiescompany_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`companyId`),
  ADD CONSTRAINT `activitiescompany_ibfk_3` FOREIGN KEY (`governancePracticeCompanyId`) REFERENCES `governancepracticecompany` (`governancePracticeCompanyId`),
  ADD CONSTRAINT `activitiescompany_ibfk_4` FOREIGN KEY (`activitiesId`) REFERENCES `activities` (`activitiesId`);

--
-- Constraints for table `domaincompany`
--
ALTER TABLE `domaincompany`
  ADD CONSTRAINT `domaincompany_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `domaincompany_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`companyId`),
  ADD CONSTRAINT `domaincompany_ibfk_3` FOREIGN KEY (`domainId`) REFERENCES `domain` (`domainId`);

--
-- Constraints for table `governanceobject`
--
ALTER TABLE `governanceobject`
  ADD CONSTRAINT `governanceobject_ibfk_1` FOREIGN KEY (`domainId`) REFERENCES `domain` (`domainId`);

--
-- Constraints for table `governanceobjectcompany`
--
ALTER TABLE `governanceobjectcompany`
  ADD CONSTRAINT `governanceobjectcompany_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `governanceobjectcompany_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`companyId`),
  ADD CONSTRAINT `governanceobjectcompany_ibfk_3` FOREIGN KEY (`domainCompanyId`) REFERENCES `domaincompany` (`domainCompanyId`),
  ADD CONSTRAINT `governanceobjectcompany_ibfk_4` FOREIGN KEY (`governanceObjectId`) REFERENCES `governanceobject` (`governanceObjectId`);

--
-- Constraints for table `governancepractice`
--
ALTER TABLE `governancepractice`
  ADD CONSTRAINT `governancepractice_ibfk_1` FOREIGN KEY (`governanceObjectId`) REFERENCES `governanceobject` (`governanceObjectId`);

--
-- Constraints for table `governancepracticecompany`
--
ALTER TABLE `governancepracticecompany`
  ADD CONSTRAINT `governancepracticecompany_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `governancepracticecompany_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`companyId`),
  ADD CONSTRAINT `governancepracticecompany_ibfk_3` FOREIGN KEY (`governancePracticeId`) REFERENCES `governancepractice` (`governancePracticeId`),
  ADD CONSTRAINT `governancepracticecompany_ibfk_4` FOREIGN KEY (`governanceObjectCompanyId`) REFERENCES `governanceobjectcompany` (`governanceObjectCompanyId`);

--
-- Constraints for table `usercompany`
--
ALTER TABLE `usercompany`
  ADD CONSTRAINT `usercompany_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `usercompany_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`companyId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
