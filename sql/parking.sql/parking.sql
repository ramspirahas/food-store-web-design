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
