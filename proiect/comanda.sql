-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2011 at 11:27 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baza_librarie`
--

-- --------------------------------------------------------

--
-- Table structure for table `comanda`
--

CREATE TABLE IF NOT EXISTS `comanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `stare` varchar(255) NOT NULL,
  `transport` int(11) NOT NULL,
  `plata` int(11) NOT NULL,
  `adresalivrare` int(11) NOT NULL,
  `adresafacturare` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comanda`
--

INSERT INTO `comanda` (`id`, `userid`, `stare`, `transport`, `plata`, `adresalivrare`, `adresafacturare`, `data`) VALUES
(1, 34, 'rewq', 43, 43, 43, 34, '0000-00-00 00:00:00'),
(2, 0, '', 0, 0, 0, 0, '0000-00-00 00:00:00'),
(3, 43, '43adrs', 43, 43, 43, 43, '0000-00-00 00:00:00'),
(4, 432, '432', 432, 432, 423, 432, '0000-00-00 00:00:00'),
(5, 43, 'twe', 43, 43, 43, 43, '2011-06-02 21:58:21');
