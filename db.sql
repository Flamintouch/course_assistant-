CREATE DATABASE simpledb;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 04:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `sampledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submissionID` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `programOfStudy` varchar(5) DEFAULT NULL,
  `yearOfStudy` varchar(3) DEFAULT NULL,
  `courseName` varchar(200) DEFAULT NULL,
  `phoneNmbr` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `caFile` LONGBLOB NOT NULL,
  `screenshot` LONGBLOB NOT NULL,
   PRIMARY KEY (`submissionID`)

);
