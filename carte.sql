-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2011 at 09:07 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

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
-- Table structure for table `carte`
--

CREATE TABLE IF NOT EXISTS `carte` (
  `isbn` int(4) NOT NULL,
  `titlu` varchar(100) NOT NULL,
  `colectie` varchar(30) NOT NULL,
  `ideditura` int(4) NOT NULL,
  `nrpag` int(4) NOT NULL,
  `pret` int(4) NOT NULL,
  `nrbuc` int(4) NOT NULL,
  `limba` varchar(30) NOT NULL,
  `anaparitie` int(4) NOT NULL,
  `descriere` varchar(255) NOT NULL,
  `imagine` varchar(255) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carte`
--

INSERT INTO `carte` (`isbn`, `titlu`, `colectie`, `ideditura`, `nrpag`, `pret`, `nrbuc`, `limba`, `anaparitie`, `descriere`, `imagine`) VALUES
(1, 'Casa umbrelor', '', 3, 640, 80, 15, 'romana', 2009, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'imagini/banner6.jpg'),
(2, 'PC pas cu pas', '', 1, 180, 24, 15, 'romana', 2008, '', ''),
(3, 'Bazele programarii in C', '', 1, 367, 39, 5, '1', 2006, '', ''),
(121, 'Informatica. Manual pentru clasa a X-a', '', 1, 180, 10, 10, '1', 2000, '', ''),
(122, 'Programarea in limbajul C/C ++ pentru liceu', '', 1, 256, 30, 23, '1', 2010, '', ''),
(123, 'PROGRAMAREA IN C#', '', 3, 324, 17, 3, '2', 2003, '', ''),
(124, 'CHARLIE WILCOX', '', 3, 189, 14, 35, '2', 2003, '', ''),
(125, '100 DE PERSONALITATI ALE SECOLULUI XX. PICTORI', '', 3, 270, 25, 15, '74', 2001, '', ''),
(0, '', '', 0, 0, 0, 0, '', 0, '', ''),
(44444444, 'egegedg', '', 57, 0, 0, 0, '', 0, '', ''),
(123123, 'asd', '', 56, 0, 0, 0, '', 0, '', ''),
(12121212, 'adsadfsdf', '', 1, 0, 0, 0, '', 0, '', ''),
(2147483647, 'ttttttt', '', 1, 0, 0, 0, '', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
