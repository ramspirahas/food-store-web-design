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
