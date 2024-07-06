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
