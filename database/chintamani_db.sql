-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 07:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chintamani_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities_master`
--

CREATE TABLE `amenities_master` (
  `PK_aminities` int(10) NOT NULL,
  `amenity name` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blob_master`
--

CREATE TABLE `blob_master` (
  `PK_BlogID` int(10) NOT NULL,
  `BlogTitle` varchar(1000) NOT NULL,
  `BlogOwner` varchar(1000) NOT NULL,
  `BlogImage` varchar(100) NOT NULL,
  `Blog` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `PK_Inquiry` int(10) NOT NULL,
  `Query` varchar(5000) NOT NULL,
  `startDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `FK_Status` int(10) NOT NULL,
  `LastCommunication` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interior_master`
--

CREATE TABLE `interior_master` (
  `PK_interior` int(10) NOT NULL,
  `InteriorTitle` varchar(1000) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `GalleryImage1` varchar(100) NOT NULL,
  `GalleryImage2` varchar(100) NOT NULL,
  `GalleryImage3` varchar(100) NOT NULL,
  `GalleryImage4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leasing_master`
--

CREATE TABLE `leasing_master` (
  `PK_lease` int(10) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `ShortDescription` varchar(1000) NOT NULL,
  `LongDescription` varchar(5000) NOT NULL,
  `CarpetArea` varchar(100) NOT NULL,
  `CompleteAddress` varchar(10000) NOT NULL,
  `Price` int(100) NOT NULL,
  `Packs` int(100) NOT NULL,
  `ThumbnailURL` varchar(100) NOT NULL,
  `FloorPlanURL` varchar(100) NOT NULL,
  `Images` varchar(100) NOT NULL,
  `VideoURL` varchar(100) NOT NULL,
  `Furnished/Unfurnished` varchar(100) NOT NULL,
  `BuildUpArea` int(10) NOT NULL,
  `CabinsCount` int(10) NOT NULL,
  `ReceptionArea` int(10) NOT NULL,
  `W/S` int(10) NOT NULL,
  `SR_Manage` int(10) NOT NULL,
  `ConferenceRoomCount` int(10) NOT NULL,
  `MeetingRoolcount` int(10) NOT NULL,
  `ServerRoomCount` int(10) NOT NULL,
  `GeneralWashroom` tinyint(1) NOT NULL,
  `LadiishWashroom` tinyint(1) NOT NULL,
  `PantryCount` int(10) NOT NULL,
  `StoreroomCount` int(10) NOT NULL,
  `TwitterTag` varchar(100) NOT NULL,
  `HiTag` varchar(100) NOT NULL,
  `Keywords` varchar(100) NOT NULL,
  `LeaseOgTag` varchar(100) NOT NULL,
  `LeaseOgTitle` varchar(100) NOT NULL,
  `altTag` varchar(100) NOT NULL,
  `MetaDescription` varchar(100) NOT NULL,
  `Metatitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_master`
--

CREATE TABLE `project_master` (
  `PK_Project` int(10) NOT NULL,
  `ProjectName` varchar(1000) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `ShortDescription` varchar(5000) NOT NULL,
  `LongDescription` varchar(10000) NOT NULL,
  `Amenities_ID` int(10) NOT NULL,
  `ProjectType` varchar(100) NOT NULL,
  `BrochureURL` varchar(1000) NOT NULL,
  `ThumbnailImageURL` varchar(1000) NOT NULL,
  `FloorPlantImageURL` varchar(1000) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `FK_Status` int(11) NOT NULL,
  `ProjectImage1` varchar(1000) NOT NULL,
  `ProjectImage2` varchar(1000) NOT NULL,
  `ProjectImage3` varchar(1000) NOT NULL,
  `ProjectImage4` varchar(1000) NOT NULL,
  `ProjectImage5` varchar(1000) NOT NULL,
  `ProjectImage6` varchar(1000) NOT NULL,
  `MetaTitle` varchar(1000) NOT NULL,
  `MetaDescription` varchar(1000) NOT NULL,
  `altTag` varchar(1000) NOT NULL,
  `ProjectOgTitle` varchar(1000) NOT NULL,
  `ProjectOgTag` varchar(1000) NOT NULL,
  `Keywords` varchar(1000) NOT NULL,
  `HiTag` varchar(1000) NOT NULL,
  `TwitterTag` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_master`
--

INSERT INTO `project_master` (`PK_Project`, `ProjectName`, `Alias`, `ShortDescription`, `LongDescription`, `Amenities_ID`, `ProjectType`, `BrochureURL`, `ThumbnailImageURL`, `FloorPlantImageURL`, `isDeleted`, `FK_Status`, `ProjectImage1`, `ProjectImage2`, `ProjectImage3`, `ProjectImage4`, `ProjectImage5`, `ProjectImage6`, `MetaTitle`, `MetaDescription`, `altTag`, `ProjectOgTitle`, `ProjectOgTag`, `Keywords`, `HiTag`, `TwitterTag`) VALUES
(1, 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', 'uploads/Mirkal.png', '', 0, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', '', '', 0, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Test101', '', '', '', 0, 'Select', '', './uploads/Picture1 (2).png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Test101', '', '', '', 0, 'Select', '', '', '', 0, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'edwd', '', '', '', 0, 'Select', '', './uploads/Mirkal grapg.jpeg', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'de', '', '', '', 0, 'Select', '', '', '', 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE `status_master` (
  `PK_Status` int(1) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_master`
--

INSERT INTO `status_master` (`PK_Status`, `Status`) VALUES
(1, 'New'),
(2, 'Active'),
(3, 'Inactive'),
(4, 'Closed'),
(5, 'Completed'),
(6, 'On going'),
(7, 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `PK_User` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `EmailId` varchar(1000) NOT NULL,
  `ContactNo` varchar(25) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`PK_User`, `Username`, `Password`, `Name`, `EmailId`, `ContactNo`, `IsActive`, `isAdmin`) VALUES
(1, 'admin', 'admin', 'admin', '', NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities_master`
--
ALTER TABLE `amenities_master`
  ADD PRIMARY KEY (`PK_aminities`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`PK_Inquiry`);

--
-- Indexes for table `interior_master`
--
ALTER TABLE `interior_master`
  ADD PRIMARY KEY (`PK_interior`);

--
-- Indexes for table `leasing_master`
--
ALTER TABLE `leasing_master`
  ADD PRIMARY KEY (`PK_lease`);

--
-- Indexes for table `project_master`
--
ALTER TABLE `project_master`
  ADD PRIMARY KEY (`PK_Project`);

--
-- Indexes for table `status_master`
--
ALTER TABLE `status_master`
  ADD PRIMARY KEY (`PK_Status`),
  ADD UNIQUE KEY `PrimaryKey` (`PK_Status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`PK_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities_master`
--
ALTER TABLE `amenities_master`
  MODIFY `PK_aminities` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `PK_Inquiry` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interior_master`
--
ALTER TABLE `interior_master`
  MODIFY `PK_interior` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leasing_master`
--
ALTER TABLE `leasing_master`
  MODIFY `PK_lease` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_master`
--
ALTER TABLE `project_master`
  MODIFY `PK_Project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status_master`
--
ALTER TABLE `status_master`
  MODIFY `PK_Status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `PK_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
