-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2020 at 07:02 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveredcc`
--

CREATE TABLE IF NOT EXISTS `deliveredcc` (
  `Regno` varchar(10) NOT NULL,
  `ddate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveredcc`
--


-- --------------------------------------------------------

--
-- Table structure for table `deliveredtc`
--

CREATE TABLE IF NOT EXISTS `deliveredtc` (
  `Regno` varchar(10) NOT NULL,
  `ddate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveredtc`
--


-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `Regno` varchar(100) NOT NULL,
  `Stuname` varchar(100) NOT NULL,
  `Reqdate` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `request`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Studentname` varchar(100) NOT NULL,
  `Regno` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `Depart` varchar(20) NOT NULL,
  `Fyear` varchar(20) NOT NULL,
  `Tyear` varchar(20) NOT NULL,
  `Mob` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`Regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

