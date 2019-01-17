-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 10:57 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `name` varchar(3) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`name`, `amount`) VALUES
('a+', 900),
('A-', 0),
('ab+', 0),
('AB-', 0),
('b+', 0),
('B-', 0),
('o+', 0),
('O-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `pid` int(4) NOT NULL,
  `doc` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `pid` int(4) NOT NULL,
  `donate_amount` int(3) NOT NULL,
  `date` date NOT NULL,
  `d_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`pid`, `donate_amount`, `date`, `d_status`) VALUES
(1, 100, '0000-00-00', 0),
(1, 100, '0000-00-00', 0),
(1, 100, '1970-01-01', 0),
(1, 100, '1970-01-01', 0),
(1, 100, '1970-01-01', 0),
(17, 500, '2017-10-20', 1),
(9, 200, '2017-10-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `weight` int(3) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `blood_group` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pid`, `name`, `password`, `age`, `gender`, `weight`, `contact`, `email`, `blood_group`) VALUES
(1, 'ghasjkdghjk', 'kasgdkjasgdkjasg', 78, 'M', 54, '2147483647', 'afsdfgh@jhasgj.com', 'AB+'),
(2, 'hskjhdkajshd', 'hakhdaskhdk', 65, 'F', 64, '9876543210', 'ojasjakjasghags@sakd', 'B+'),
(3, 'askhdakjh', 'aksjhdhadkjh', 87, 'F', 65, '6549873321', 'ahkjhas@hafjha.com', 'B-'),
(4, 'ahskah', 'ahskhaskdhakjsh', 65, 'F', 62, '9876543210', 'hksjahkja@hdjahd.com', 'AB-'),
(5, 'ahskah', 'ahskhaskdhakjsh', 65, 'F', 62, '9876543210', 'hksjahkja@hdjahd.com', 'AB-'),
(6, 'ahskah', 'ahskhaskdhakjsh', 65, 'F', 62, '9876543210', 'hksjahkja@hdjahd.com', 'AB-'),
(7, 'ljsaldj', 'sjlkdjasdklajd', 87, 'M', 565, '9876543210', 'slandlas@gmail.com', 'AB+'),
(8, 'ljsaldj', 'sjlkdjasdklajd', 87, 'M', 565, '9876543210', 'slandlas@gmail.com', 'AB+'),
(9, 'sdjkahskjd', 'hkjahdiwhiuw9339', 87, 'F', 766, '9595959595', 'sdsdj@jhasj.com', 'B-'),
(10, 'sdjkahskjd', 'hkjahdiwhiuw9339', 87, 'F', 766, '9595959595', 'sdsdj@jhasj.com', 'B-'),
(11, 'asjdhakjshk', 'sakjdhaskjdh', 95, 'M', 85, '6363636363', 'oipo@aisd.com', 'AB+'),
(12, 'dfkjdskj', 'kskdjfbkjsdbk', 87, 'F', 45, '9876544569', 'sadsaddsad@zslk.com', 'AB+'),
(13, 'sdkajd', 'sskjfhsdkjhf', 84, 'M', 54, '9632587412', 'dsfhksjdh@szjksh.com', 'AB+'),
(14, 'shah fahad', 'shakjshakjha', 95, 'M', 62, '7736252811', 'shahfahad12345@gmail', 'B-'),
(15, 'nsjdnsjkn', 'jadkjaskdj', 62, 'F', 65, '9876541235', 'jdfkj@djfds.com', 'B-'),
(16, 'sdhkdh', 'kalsdjaskldjl', 54, 'M', 52, '9301426546', 'skajhkashdkj@bas.com', 'O+'),
(17, 'hadk', 'dkjasdakkj', 96, 'M', 63, '9632587416', 'asdhdsk@shskj.com', 'AB-'),
(18, 'jksdkjhsdk', 'ajsdlkajdjd', 98, 'M', 56, '9654123780', 'dkasdkj@asdsjk.com', 'AB+'),
(19, 'ksjdkkjsd', 'kjhkjsfhk', 36, 'M', 35, '9856321475', 'jsdkjjkj@ksjksa.com', 'B-'),
(57, 'anju kumar', 'anujkumar', 21, 'm', 60, '9037736673', 'anuj@nitc.ac.in', 'b+'),
(58, 'Lavakush Mani Tiwari', '123456', 23, 'M', 80, '9037736673', 'lmtnitc@gmail.com', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `pid` int(4) NOT NULL,
  `request_amount` int(3) NOT NULL,
  `r_date` date NOT NULL,
  `r_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_log`
--

CREATE TABLE `request_log` (
  `pid` int(4) NOT NULL,
  `amount` int(3) NOT NULL,
  `group` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `blood_group` (`blood_group`);

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request_log`
--
ALTER TABLE `request_log`
  ADD KEY `group` (`group`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`);

--
-- Constraints for table `requester`
--
ALTER TABLE `requester`
  ADD CONSTRAINT `requester_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `document` (`pid`);

--
-- Constraints for table `request_log`
--
ALTER TABLE `request_log`
  ADD CONSTRAINT `request_log_ibfk_2` FOREIGN KEY (`group`) REFERENCES `blood` (`name`),
  ADD CONSTRAINT `request_log_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
