-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 05, 2024 at 12:25 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `restaurant`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `contactus`
-- 

CREATE TABLE `contactus` (
  `name` varchar(10) collate armscii8_bin NOT NULL,
  `email` varchar(20) collate armscii8_bin NOT NULL,
  `phonenum` int(10) NOT NULL,
  `subject` varchar(50) collate armscii8_bin NOT NULL,
  `message` varchar(100) collate armscii8_bin NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- 
-- Dumping data for table `contactus`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `getemail`
-- 

CREATE TABLE `getemail` (
  `email` varchar(50) collate armscii8_bin NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- 
-- Dumping data for table `getemail`
-- 

INSERT INTO `getemail` (`email`) VALUES 
(0x72616d73323840676d61696c2e636f6d);

-- --------------------------------------------------------

-- 
-- Table structure for table `parking`
-- 

CREATE TABLE `parking` (
  `vehitype` varchar(20) collate armscii8_bin NOT NULL,
  `platenum` int(20) NOT NULL,
  `name` varchar(20) collate armscii8_bin NOT NULL,
  `connum` int(10) NOT NULL,
  `resname` varchar(20) collate armscii8_bin NOT NULL,
  `resdate` date NOT NULL,
  `request` varchar(100) collate armscii8_bin NOT NULL,
  PRIMARY KEY  (`platenum`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- 
-- Dumping data for table `parking`
-- 

INSERT INTO `parking` (`vehitype`, `platenum`, `name`, `connum`, `resname`, `resdate`, `request`) VALUES 
(0x636172, 0, 0x72616d73, 760695989, 0x72616d73, '2024-07-18', 0x65666772686d);

-- --------------------------------------------------------

-- 
-- Table structure for table `reservation`
-- 

CREATE TABLE `reservation` (
  `name` varchar(10) collate armscii8_bin NOT NULL,
  `email` varchar(20) collate armscii8_bin NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests` int(20) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- 
-- Dumping data for table `reservation`
-- 

INSERT INTO `reservation` (`name`, `email`, `phone`, `date`, `time`, `guests`) VALUES 
(0x72616d73, 0x72616d73323840676d61696c2e636f6d, 760695989, '2024-07-11', '00:00:10', 10),
(0x73616e6b75, 0x7373616e6b617669303740676d61696c2e636f6d, 754554254, '2024-07-08', '00:00:03', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `signup`
-- 

CREATE TABLE `signup` (
  `id` int(20) NOT NULL auto_increment,
  `email` varchar(50) collate armscii8_bin NOT NULL,
  `username` varchar(50) collate armscii8_bin NOT NULL,
  `password` varchar(50) collate armscii8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `signup`
-- 

INSERT INTO `signup` (`id`, `email`, `username`, `password`) VALUES 
(5, 0x7373616e6b617669303740676d61696c2e636f6d, 0x73616e6b617669, 0x73616e6b75),
(6, 0x7373616e6b617669303740676d61696c2e636f6d, 0x72616d7332383039, 0x72616d736464);
