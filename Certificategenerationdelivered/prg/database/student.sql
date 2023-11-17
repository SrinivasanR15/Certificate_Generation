-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 07:56 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `det`
--

CREATE TABLE IF NOT EXISTS `det` (
  `data` text NOT NULL,
  `recn` int(20) NOT NULL,
  `regn` int(20) NOT NULL,
  `stdn` varchar(20) NOT NULL,
  `addr` text NOT NULL,
  `cus` text NOT NULL,
  `bat` int(10) NOT NULL,
  `dpt` int(20) NOT NULL,
  `year` text NOT NULL,
  `sem` int(5) NOT NULL,
  `frm` text NOT NULL,
  `to` text NOT NULL,
  `adf` int(20) NOT NULL,
  `amt` int(20) NOT NULL,
  `amtw` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det`
--

INSERT INTO `det` (`data`, `recn`, `regn`, `stdn`, `addr`, `cus`, `bat`, `dpt`, `year`, `sem`, `frm`, `to`, `adf`, `amt`, `amtw`) VALUES
('12/09/2015', 154, 187, 'jia', '', 'Msc(CS)', 0, 0, '2015', 0, '', '', 1000, 1000, 0),
('12/09/2015', 0, 0, 'ju', '', 'Msc(CS)', 0, 0, '2015', 0, '', '', 0, 1000, 0),
('12/09/2015', 0, 0, '18', '', 'Msc(Micro)', 0, 0, '2015', 0, '', '', 0, 1000, 0),
('12/09/2015', 15, 0, 'gg', '', 'Commerce', 0, 0, '', 0, 'uy', 'in', 0, 1000, 0),
('12/09/15', 11, 23, 'suresh', '', 'Mcom(CA)', 0, 0, '2015', 0, '', '', 0, 2000, 0),
('2015-10-17 21:29:45', 12, 0, 'jaimy', '', 'CS', 0, 0, '2015', 0, '2015-10-07 21:29:45', '2015-10-01 21:29:45', 0, 1000, 0),
('2015-10-09 22:54:13', 13, 0, 'jai', '', 'Commerce', 0, 0, '2015', 0, '', '', 0, 1000, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
