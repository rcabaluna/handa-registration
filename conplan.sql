-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20230103.7645611e8d
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2023 at 07:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `attendanceid` int(11) NOT NULL,
  `regnumber` varchar(45) DEFAULT NULL,
  `date_registered` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblevents`
--

CREATE TABLE `tblevents` (
  `eventid` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `shorthand` varchar(45) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `allowed` varchar(100) DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `datetime` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblevents`
--

INSERT INTO `tblevents` (`eventid`, `name`, `shorthand`, `description`, `allowed`, `venue`, `datetime`) VALUES
(1, 'General', 'general', NULL, NULL, NULL, NULL),
(2, 'PAGSUBAY: Exploring Flood Forecasting and Warning Systems for the 8 River Basins in Mindanao', 'pagsubay', NULL, NULL, 'Emerald 2, Luxe Hotel', 'October 4, 2023 | 12:30-5:00 PM'),
(3, 'ManDO: Good Governance in Managing Disasters', 'mando', NULL, NULL, 'Emerald 1, Luxe Hotel', 'October 4, 2023 | 1:30-5:00 PM'),
(4, 'Tala-Kawayan: Future of Bamboo in DRR and Carbon Crediting', 'talakawayan', NULL, NULL, 'Luxe, Sapphire-Topaz', 'October 4, 2023 | 1:00 PM - 3:45 PM'),
(5, 'DRRM Tech Expo', 'drrmtechexpo', NULL, NULL, 'Limketkai Atrium', 'October 4, 2023 | 2:00 - 4:00 PM'),
(6, 'Maghanda: Communicating Hazards, Risks, and Early Warning', 'maghanda', NULL, NULL, 'Emerald 1 - Luxe Hotel', 'October 5, 2023 | 8:30 AM- 4:20 PM'),
(7, 'Safe and Sound Profitable: DRRM Technologies for Commercialization', 'drrmtechcomm', NULL, NULL, 'KaVe 2, Luxe Hotel', 'October 5, 2023 |9:00 AM - 11:50 AM'),
(8, 'PANAGTIGI: DRRM-CCA Quiz Bowl at the Atrium', 'panagtigi-quizbowl', NULL, NULL, 'Limketkai Atrium', 'October 5, 2023 | 10:00 AM - 1:00 PM '),
(9, 'GeoRiskPH: Navigating Hazards, Building Resilience', 'georiskph', NULL, NULL, 'KaVe 2, Luxe Hotel', 'October 5, 2023 | 1:00 PM - 5:00 PM'),
(10, 'FNRI Forum', 'fnriforum', NULL, NULL, 'Limketkai Atrium', 'October 5, 2023 | '),
(11, 'iCARE: Climate Action for Resilience Enhancement Forum', 'icare', NULL, NULL, 'Sapphire-Topaz, Luxe Hotel', 'October 6, 2023 | 9:00 AM - 11:55 AM'),
(12, 'Pag-USAd: Uniting for Resilience - Reverse Pitching DRRM-Related Needs of LGUs            ', 'pag-usad', NULL, NULL, 'Saphire-Topaz, Luxe Hotel', 'October 6, 2023 | 2:00 PM - 4:50 PM'),
(13, 'Handa na ba ang beshy ko? A Tiktok Challenge ', 'handatiktok', NULL, NULL, 'Limketkai Atirum', 'October 6, 2023 | 10:00 AM - 12:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tblgenerator`
--

CREATE TABLE `tblgenerator` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `value` bigint(20) DEFAULT NULL,
  `lenghtno` tinyint(4) DEFAULT 5,
  `prefix` varchar(20) DEFAULT NULL,
  `remarks` varchar(101) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgenerator`
--

INSERT INTO `tblgenerator` (`id`, `code`, `value`, `lenghtno`, `prefix`, `remarks`) VALUES
(2, 'registration', 1, 3, 'HDP', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tblparticipants`
--

CREATE TABLE `tblparticipants` (
  `participantid` int(11) NOT NULL,
  `regnumber` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middle_initial` varchar(45) DEFAULT NULL,
  `suffix` varchar(45) DEFAULT NULL,
  `contactno` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sex` varchar(15) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `sector` varchar(45) DEFAULT NULL,
  `address_region` varchar(45) DEFAULT NULL,
  `agency_name` varchar(100) DEFAULT NULL,
  `privileges` varchar(150) DEFAULT NULL,
  `event` varchar(45) DEFAULT NULL,
  `date_registered` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsector`
--

CREATE TABLE `tblsector` (
  `sectorid` int(11) NOT NULL,
  `sectorname` varchar(300) DEFAULT NULL,
  `shorthand` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsector`
--

INSERT INTO `tblsector` (`sectorid`, `sectorname`, `shorthand`, `category`) VALUES
(1, 'Academe (Educational Institutions)', NULL, 'academe'),
(2, 'Enterprise (MSMEs)', NULL, 'enterprise'),
(3, 'Government - National Government Agency (NGA)', NULL, 'NGA'),
(4, 'Government -  Local Government Unit (LGU)', NULL, 'LGU'),
(5, 'Government - Judicial / Legislative Entities (Senate, House of Representatives, Political Party, Commissions, etc.)', NULL, 'government'),
(6, 'Government -  Government Financial Institutions/Banks', NULL, 'government'),
(7, 'Government - Constitutional Commissions', NULL, 'government'),
(8, 'Government -  Government-owned and Controlled Corporation (GOCC)', NULL, 'government'),
(9, 'Civil Society Organization (CSO)/Non-Government Organization (NGO)', NULL, 'NGO'),
(10, 'Com-based Enterprise', NULL, 'private'),
(11, 'Industry Association', NULL, 'private'),
(12, 'Media', NULL, 'media'),
(13, 'Exhibitor', NULL, 'private'),
(14, 'Contractor', NULL, 'private'),
(15, 'Diplomatic Stakeholder', NULL, 'private'),
(16, 'Student', NULL, 'private'),
(17, 'Others', NULL, 'private');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`attendanceid`);

--
-- Indexes for table `tblevents`
--
ALTER TABLE `tblevents`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `tblgenerator`
--
ALTER TABLE `tblgenerator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tblparticipants`
--
ALTER TABLE `tblparticipants`
  ADD PRIMARY KEY (`participantid`);

--
-- Indexes for table `tblsector`
--
ALTER TABLE `tblsector`
  ADD PRIMARY KEY (`sectorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `attendanceid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblevents`
--
ALTER TABLE `tblevents`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblgenerator`
--
ALTER TABLE `tblgenerator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblparticipants`
--
ALTER TABLE `tblparticipants`
  MODIFY `participantid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsector`
--
ALTER TABLE `tblsector`
  MODIFY `sectorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
