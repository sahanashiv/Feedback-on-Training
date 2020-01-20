-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 05:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `professions` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `name`, `username`, `professions`, `email`, `password`) VALUES
(3, 'ABC', 'ABC', '', 'abc123@gmail.com', '12345'),
(4, 'Negi', 'nare', 'HOD', 'narendra.negi47@gmail.com', '12345'),
(5, 'Sahana', 'sahu96', 'Faculty', 'sahanagowda67@gmail.com', '12345'),
(6, 'na', 'nasd', 'Faculty', 'asndlka@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `eid` int(15) NOT NULL,
  `empname` varchar(25) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `training` varchar(25) NOT NULL,
  `org` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `presentation` varchar(50) NOT NULL,
  `topic` varchar(40) NOT NULL,
  `level` varchar(40) NOT NULL,
  `res` varchar(40) NOT NULL,
  `future` varchar(20) NOT NULL,
  `recc` varchar(50) NOT NULL,
  `understanding` varchar(20) NOT NULL,
  `application` varchar(20) NOT NULL,
  `general` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`eid`, `empname`, `dept`, `training`, `org`, `date`, `presentation`, `topic`, `level`, `res`, `future`, `recc`, `understanding`, `application`, `general`) VALUES
(1, 'agbdjka', 'jhjh', 'vjhvj', 'vhjvjh', '0000-00-00', 'jhvjh', 'vhjv', 'jv', 'jhvjh', 'vjh', 'vv', 'Good', 'well', 'ggggg'),
(8, 'ABC', 'MCA', 'java', 'RIT', '2019-04-03', 'Good', 'Control Statements and Classes', 'Good', 'Presentation was good ', 'Yes', 'Classes', 'Good', 'eviden', 'SADSA'),
(10, 'abc', 'mca', 'sssssssss', 'bhjjjjjjjjjjjjjjjjjj', '2019-05-01', 'Good', 'bbhjjjjjjjjjj', 'Good', 'kkkkkkkkkkkkkkkk', 'Yes', 'nmmmmmmmmmm', 'Average', 'eviden', 'asdas'),
(11, 'abc', 'mca', 'sssssssss', 'kapersa', '2019-05-02', 'Good', 'java', 'Good', 'Hod', 'Yes', 'hiujs', 'Average', 'Knowledgeable', 'asda'),
(12, 'Sahana.S', 'MCA', 'Advance Java', 'Oracle', '2019-05-21', 'Good', 'Classes and Objects', 'Good', 'Language Problem Sort of time', 'Yes', 'Classes', 'Good', 'eviden', 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `eid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
