-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 09:49 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `applyId` int(11) NOT NULL,
  `tender_tenderId` int(11) NOT NULL,
  `company_companyId` int(11) NOT NULL,
  `status_statusId` int(11) NOT NULL,
  `applyDate` timestamp NULL DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`applyId`, `tender_tenderId`, `company_companyId`, `status_statusId`, `applyDate`, `price`) VALUES
(1, 1, 2, 5, NULL, 2500),
(2, 2, 3, 5, '2019-05-16 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bidprice`
--

CREATE TABLE `bidprice` (
  `bidprice` int(11) NOT NULL,
  `fkapplyId` int(11) NOT NULL,
  `text` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `fkstatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `name`, `address`, `fkstatusId`) VALUES
(2, 'Company 1', 'Baridhara DOHS', 1),
(3, 'Company 2', 'Gulshan', 2),
(5, 'Company 4', NULL, 1),
(6, 'Company 5', 'N/A update', 2);

-- --------------------------------------------------------

--
-- Table structure for table `company_contact_person`
--

CREATE TABLE `company_contact_person` (
  `company_contact_personId` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `nationalIdcard` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fkcompanyId` int(11) NOT NULL,
  `fkuserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentId` int(11) NOT NULL,
  `departmentName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentId`, `departmentName`) VALUES
(2, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusId` int(11) NOT NULL,
  `statusName` varchar(45) DEFAULT NULL,
  `statusType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusId`, `statusName`, `statusType`) VALUES
(1, 'Active', 'company_status'),
(2, 'Inactive', 'company_status'),
(3, 'Active', 'zone_status'),
(4, 'Inactive', 'zone_status'),
(5, 'Open', 'tender_status'),
(6, 'Close', 'tender_status');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `tenderId` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `details` longtext,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `fkstatusId` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `fkzoneId` int(11) DEFAULT NULL,
  `fkTenderTypeId` int(11) NOT NULL,
  `fkdepartmentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tenderId`, `title`, `details`, `startdate`, `enddate`, `published_date`, `fkstatusId`, `price`, `fkzoneId`, `fkTenderTypeId`, `fkdepartmentId`) VALUES
(1, 'Tender 1', 'N/A', '2019-05-08', '2019-05-14', '2019-05-20', 5, 2500, 1, 1, 2),
(2, 'Tender 2', 'Mew', '2019-05-15', '2019-05-21', '2019-05-28', 5, 4500, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tendertype`
--

CREATE TABLE `tendertype` (
  `tenderTypeId` int(11) NOT NULL,
  `tenderTypeName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tendertype`
--

INSERT INTO `tendertype` (`tenderTypeId`, `tenderTypeName`) VALUES
(1, 'Furniture '),
(2, 'Toy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `fkusertypeId` int(11) NOT NULL DEFAULT '2',
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `remember_token` varchar(256) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fkusertypeId`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farzad Rahman', 1, 'farzadrahman59@gmail.com', '$2y$10$D5dDBKrgdhf.uDnAesXzYOXyOHIahxeJ4xhQpHfRvWN8vNLgdOI8G', 'fbVM4rmtmN31VZgErqtERmn8jfGsWnrxLh25cC1JPWFghKjKDD6jQU6FNprC', '2019-05-04 01:50:34', '2019-05-04 01:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `usertypeId` int(11) NOT NULL,
  `usertypeName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`usertypeId`, `usertypeName`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `zoneId` int(11) NOT NULL,
  `zoneName` varchar(45) DEFAULT NULL,
  `fkstatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zoneId`, `zoneName`, `fkstatusId`) VALUES
(1, 'Zone 1', 3),
(2, 'Zone 2', 3),
(5, 'Zone 4', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`applyId`),
  ADD KEY `fk_apply_tender1_idx` (`tender_tenderId`),
  ADD KEY `fk_apply_company1_idx` (`company_companyId`),
  ADD KEY `fk_apply_status1_idx` (`status_statusId`);

--
-- Indexes for table `bidprice`
--
ALTER TABLE `bidprice`
  ADD PRIMARY KEY (`bidprice`),
  ADD KEY `fk_bidprice_apply1_idx` (`fkapplyId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`),
  ADD KEY `fk_company_status1_idx` (`fkstatusId`);

--
-- Indexes for table `company_contact_person`
--
ALTER TABLE `company_contact_person`
  ADD PRIMARY KEY (`company_contact_personId`),
  ADD KEY `fk_company_contact_person_company1_idx` (`fkcompanyId`),
  ADD KEY `fk_company_contact_person_user1_idx` (`fkuserId`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`tenderId`),
  ADD KEY `fk_tender_status_idx` (`fkstatusId`),
  ADD KEY `fk_tender_tenderType1_idx` (`fkTenderTypeId`);

--
-- Indexes for table `tendertype`
--
ALTER TABLE `tendertype`
  ADD PRIMARY KEY (`tenderTypeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_usertype1_idx` (`fkusertypeId`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`usertypeId`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zoneId`),
  ADD KEY `fk_zone_status1_idx` (`fkstatusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `applyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_contact_person`
--
ALTER TABLE `company_contact_person`
  MODIFY `company_contact_personId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `tenderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tendertype`
--
ALTER TABLE `tendertype`
  MODIFY `tenderTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `zoneId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `fk_apply_company1` FOREIGN KEY (`company_companyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apply_status1` FOREIGN KEY (`status_statusId`) REFERENCES `status` (`statusId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apply_tender1` FOREIGN KEY (`tender_tenderId`) REFERENCES `tender` (`tenderId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bidprice`
--
ALTER TABLE `bidprice`
  ADD CONSTRAINT `fk_bidprice_apply1` FOREIGN KEY (`fkapplyId`) REFERENCES `apply` (`applyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_status1` FOREIGN KEY (`fkstatusId`) REFERENCES `status` (`statusId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company_contact_person`
--
ALTER TABLE `company_contact_person`
  ADD CONSTRAINT `fk_company_contact_person_company1` FOREIGN KEY (`fkcompanyId`) REFERENCES `company` (`companyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_company_contact_person_user1` FOREIGN KEY (`fkuserId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tender`
--
ALTER TABLE `tender`
  ADD CONSTRAINT `fk_tender_status` FOREIGN KEY (`fkstatusId`) REFERENCES `status` (`statusId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tender_tenderType1` FOREIGN KEY (`fkTenderTypeId`) REFERENCES `tendertype` (`tenderTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_usertype1` FOREIGN KEY (`fkusertypeId`) REFERENCES `usertype` (`usertypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `fk_zone_status1` FOREIGN KEY (`fkstatusId`) REFERENCES `status` (`statusId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
