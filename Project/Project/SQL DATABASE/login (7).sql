-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 11:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `name` char(50) NOT NULL,
  `fieldofemployment` char(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `salary` int(11) NOT NULL,
  `number1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`name`, `fieldofemployment`, `dob`, `doj`, `salary`, `number1`) VALUES
('Ayush Dhiman', 'Management', '2020-05-22', '2020-05-14', 10000, '1'),
('Joy Dhiman', 'Caterer', '2020-05-15', '2020-05-15', 1000000, '2'),
('Natasha', 'Receptionist', '2020-05-13', '2020-05-21', 1000, '3');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `addID` varchar(50) NOT NULL,
  `cost` int(25) DEFAULT NULL,
  `typeofadvertisement` varchar(50) NOT NULL,
  `adminID` varchar(50) NOT NULL,
  `numberofpeopleitsgoingtoreach` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`addID`, `cost`, `typeofadvertisement`, `adminID`, `numberofpeopleitsgoingtoreach`) VALUES
('1', 200000, 'Hindustan Times Newspaper', '1', 50000),
('2', 8000000, 'TV Add Sony Channels', '1', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `authorname` char(50) DEFAULT NULL,
  `memberID` varchar(50) DEFAULT NULL,
  `remark` longtext DEFAULT NULL,
  `stars` varchar(10) DEFAULT NULL,
  `blogID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`authorname`, `memberID`, `remark`, `stars`, `blogID`) VALUES
('Ayush', NULL, 'Best club ever', NULL, '1'),
('Ram', NULL, 'A really luxurious club with excellent facilities that inside the good in you ', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `TNo` int(11) NOT NULL,
  `memberID` int(10) NOT NULL,
  `MonthBill` int(11) NOT NULL,
  `Reason` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`TNo`, `memberID`, `MonthBill`, `Reason`) VALUES
(21, 1005, 6000, 'Sports Bill'),
(31, 1001, 4000, 'Sports Bill'),
(36, 1005, 1000, 'Competition Booking ID-1'),
(50, 1005, 300, 'Movie Booking , ID - 2'),
(52, 1007, 4000, 'Sports Bill');

-- --------------------------------------------------------

--
-- Table structure for table `competitionbooking`
--

CREATE TABLE `competitionbooking` (
  `competitionID` int(11) NOT NULL,
  `memberIDD` int(10) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `numberofpeopleinteam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitionbooking`
--

INSERT INTO `competitionbooking` (`competitionID`, `memberIDD`, `teamname`, `numberofpeopleinteam`) VALUES
(2, 1001, 'Rangers', 13),
(1, 1005, 'Alpha', 13);

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `competitionID` int(11) NOT NULL,
  `competitionName` varchar(50) NOT NULL,
  `competitiondate` date NOT NULL,
  `competitiontime` time NOT NULL,
  `sportsID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`competitionID`, `competitionName`, `competitiondate`, `competitiontime`, `sportsID`) VALUES
(1, 'Football tournament', '2020-05-27', '08:30:00', 1),
(2, 'Basketball tournament', '2020-12-31', '08:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eventbooking`
--

CREATE TABLE `eventbooking` (
  `eventID` int(50) NOT NULL,
  `memberID` int(10) NOT NULL,
  `numberofmembers` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventbooking`
--

INSERT INTO `eventbooking` (`eventID`, `memberID`, `numberofmembers`) VALUES
(1, 1001, 5),
(1, 1001, 8),
(1, 1001, 2),
(1, 1001, 2),
(1, 1001, 3),
(1, 1001, 3);

-- --------------------------------------------------------

--
-- Table structure for table `eventss`
--

CREATE TABLE `eventss` (
  `eventsID` int(50) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `costofeachticket` int(50) NOT NULL,
  `eventdate` date NOT NULL,
  `eventtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventss`
--

INSERT INTO `eventss` (`eventsID`, `eventname`, `costofeachticket`, `eventdate`, `eventtime`) VALUES
(1, 'Chainsmokers Concert', 10000, '2020-05-21', '18:00:00'),
(5, 'Dusshera', 50, '2020-06-18', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `family data`
--

CREATE TABLE `family data` (
  `memberID` varchar(50) NOT NULL,
  `numberofmembers` int(10) NOT NULL,
  `relatives` char(20) NOT NULL,
  `relation` char(20) NOT NULL,
  `age` int(2) NOT NULL,
  `cardID` varchar(50) NOT NULL,
  `numberofcardsissued` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `User`, `Password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, '1', '1', 'user'),
(3, 'Nat', '123', 'admin'),
(4, 'mayank', 'dash', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `MemberID` int(10) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Status` char(2) NOT NULL,
  `CardID` int(10) NOT NULL,
  `sportsID` int(50) DEFAULT NULL,
  `Image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberName`, `dob`, `doj`, `MemberID`, `Sex`, `Status`, `CardID`, `sportsID`, `Image`) VALUES
('Ayush Dhiman', '2001-01-01', '2020-05-17', 1001, 'M', 'S', 101, 1234, NULL),
('Joy Dhiman', '2020-05-23', '2020-05-28', 1005, 'M', 'S', 103, 123456, NULL),
('Mayank', '2001-07-19', '2020-07-17', 1007, 'M', 'S', 103, 1245, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `moviebooking`
--

CREATE TABLE `moviebooking` (
  `movienumber` varchar(50) NOT NULL,
  `memberID` int(10) NOT NULL,
  `numberofseatsbooked` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviebooking`
--

INSERT INTO `moviebooking` (`movienumber`, `memberID`, `numberofseatsbooked`) VALUES
('1', 1001, 5),
('2', 1005, 3);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movienumber` varchar(50) NOT NULL,
  `amountofticket` int(10) DEFAULT NULL,
  `moviename` varchar(50) DEFAULT NULL,
  `moviedate` date NOT NULL,
  `movietime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movienumber`, `amountofticket`, `moviename`, `moviedate`, `movietime`) VALUES
('1', 100, 'The space between us', '2020-05-14', '18:00:00'),
('2', 100, 'Lucifer', '2020-05-28', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partyhall`
--

CREATE TABLE `partyhall` (
  `PartHallID` int(10) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Maxoccupancy` int(10) NOT NULL,
  `Dateofinaguration` date NOT NULL,
  `Inaugratedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partyhall`
--

INSERT INTO `partyhall` (`PartHallID`, `Location`, `Maxoccupancy`, `Dateofinaguration`, `Inaugratedby`) VALUES
(1, 'Near swimming pool', 100, '2020-05-06', 'Shri Raj Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `partyhallbooking`
--

CREATE TABLE `partyhallbooking` (
  `PartHallID` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `numberofinvitees` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partyhallbooking`
--

INSERT INTO `partyhallbooking` (`PartHallID`, `memberID`, `numberofinvitees`) VALUES
(0, 0, 0),
(1, 1001, 13);

-- --------------------------------------------------------

--
-- Table structure for table `partyhalluser`
--

CREATE TABLE `partyhalluser` (
  `PartHallID` int(10) NOT NULL,
  `memberID` int(10) NOT NULL,
  `Functionname` varchar(50) NOT NULL,
  `Dateoffunction` date NOT NULL,
  `timeoffunction` time NOT NULL,
  `Endtimeoffunction` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partyhalluser`
--

INSERT INTO `partyhalluser` (`PartHallID`, `memberID`, `Functionname`, `Dateoffunction`, `timeoffunction`, `Endtimeoffunction`) VALUES
(1, 1001, 'Birthday Party', '2020-05-27', '17:43:36', '23:43:36'),
(1, 1001, 'dasdsa', '2020-06-11', '21:04:00', '22:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sportsID` varchar(50) NOT NULL,
  `sportname` char(50) NOT NULL,
  `Cost` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sportsID`, `sportname`, `Cost`) VALUES
('1', 'Football', 1000),
('10', 'Horse Riding', 1000),
('2', 'Basketball', 1000),
('3', 'Swimming', 1000),
('4', 'Golf', 1000),
('5', 'Handball', 1000),
('6', 'Polo', 1000),
('7', 'Tennis', 1000),
('8 ', 'Squash', 1000),
('9', 'Badminton', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamID` varchar(50) NOT NULL,
  `teamname` varchar(20) DEFAULT NULL,
  `memberIDofcaptain` varchar(50) NOT NULL,
  `teamnumber` int(11) DEFAULT NULL,
  `sportsID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`number1`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`addID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`),
  ADD KEY `blogID` (`memberID`) USING BTREE;

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`TNo`),
  ADD KEY `memberID` (`memberID`);

--
-- Indexes for table `competitionbooking`
--
ALTER TABLE `competitionbooking`
  ADD KEY `competitionID` (`competitionID`),
  ADD KEY `memberIDD` (`memberIDD`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`competitionID`);

--
-- Indexes for table `eventss`
--
ALTER TABLE `eventss`
  ADD PRIMARY KEY (`eventsID`);

--
-- Indexes for table `family data`
--
ALTER TABLE `family data`
  ADD KEY `memberID` (`memberID`),
  ADD KEY `cardID` (`cardID`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `CardID` (`CardID`);

--
-- Indexes for table `moviebooking`
--
ALTER TABLE `moviebooking`
  ADD PRIMARY KEY (`movienumber`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movienumber`);

--
-- Indexes for table `partyhall`
--
ALTER TABLE `partyhall`
  ADD PRIMARY KEY (`PartHallID`);

--
-- Indexes for table `partyhallbooking`
--
ALTER TABLE `partyhallbooking`
  ADD PRIMARY KEY (`PartHallID`);

--
-- Indexes for table `partyhalluser`
--
ALTER TABLE `partyhalluser`
  ADD UNIQUE KEY `Dateoffunction` (`Dateoffunction`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `PartHallID` (`PartHallID`) USING BTREE;

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sportsID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`),
  ADD KEY `memberIDofcaptain` (`memberIDofcaptain`),
  ADD KEY `sportsID` (`sportsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `TNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `competitionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eventss`
--
ALTER TABLE `eventss`
  MODIFY `eventsID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `partyhall`
--
ALTER TABLE `partyhall`
  MODIFY `PartHallID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `members` (`MemberId`);

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cc` FOREIGN KEY (`memberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `competitionbooking`
--
ALTER TABLE `competitionbooking`
  ADD CONSTRAINT `mem` FOREIGN KEY (`memberIDD`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `family data`
--
ALTER TABLE `family data`
  ADD CONSTRAINT `family data_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `members` (`MemberId`),
  ADD CONSTRAINT `family data_ibfk_2` FOREIGN KEY (`cardID`) REFERENCES `card` (`cardID`);

--
-- Constraints for table `partyhall`
--
ALTER TABLE `partyhall`
  ADD CONSTRAINT `mm` FOREIGN KEY (`memberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `partyhalluser`
--
ALTER TABLE `partyhalluser`
  ADD CONSTRAINT `qweasd` FOREIGN KEY (`PartHallID`) REFERENCES `partyhall` (`PartHallID`),
  ADD CONSTRAINT `rtyu` FOREIGN KEY (`memberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`sportsID`) REFERENCES `sports` (`sportsID`),
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`memberIDofcaptain`) REFERENCES `members` (`MemberId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
