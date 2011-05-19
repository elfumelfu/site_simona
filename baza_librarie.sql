-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2011 at 09:44 
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
-- Table structure for table `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nume` varchar(15) NOT NULL,
  `prenume` varchar(15) NOT NULL,
  `origine` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`id`, `nume`, `prenume`, `origine`) VALUES
(1, 'Serban', 'Marinel', 'romana'),
(2, 'Cerchez', 'Emanuela', 'romana'),
(3, 'Matei', 'Sorin', 'romana'),
(4, 'Verne', 'Jules', 'franceza'),
(5, 'Dickens', 'Charles', 'engleza'),
(71, 'qqqq', 'wwww', 'eeee'),
(6, 'Logofatu', 'Doina', 'romana'),
(16, 'Anghel', 'Traian', 'romana'),
(67, 'bbbbbb', '333333', 'zzzzzz'),
(66, 'CZOCK ', 'Attila', 'maghiara'),
(65, 'McKAY', 'Sharon E. ', 'engleza'),
(64, 'Conger', 'David', 'engleza');

-- --------------------------------------------------------

--
-- Table structure for table `carte`
--

CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(100) NOT NULL,
  `idautor` int(4) NOT NULL,
  `ideditura` int(4) NOT NULL,
  `iddomeniu` int(4) NOT NULL,
  `nrpag` int(4) NOT NULL,
  `pret` int(4) NOT NULL,
  `nrbuc` int(4) NOT NULL,
  `idlimba` int(4) NOT NULL,
  `anaparitie` int(4) NOT NULL,
  `descriere` varchar(255) NOT NULL,
  `imagine` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `carte`
--

INSERT INTO `carte` (`id`, `titlu`, `idautor`, `ideditura`, `iddomeniu`, `nrpag`, `pret`, `nrbuc`, `idlimba`, `anaparitie`, `descriere`, `imagine`) VALUES
(1, 'Casa umbrelor', 5, 3, 3, 640, 80, 15, 1, 2009, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'imagini/banner6.jpg'),
(2, 'PC pas cu pas', 2, 1, 1, 180, 24, 15, 1, 2008, '', ''),
(3, 'Bazele programarii in C', 6, 1, 1, 367, 39, 5, 1, 2006, '', ''),
(121, 'Informatica. Manual pentru clasa a X-a', 1, 1, 5, 180, 10, 10, 1, 2000, '', ''),
(135, 'asdqwe', 67, 3, 11, 81, 82, 12, 1, 83, '', ''),
(130, 'a1a', 68, 62, 11, 45, 4, 4, 74, 2, '', ''),
(122, 'Programarea in limbajul C/C ++ pentru liceu', 1, 1, 1, 256, 30, 23, 1, 2010, '', ''),
(136, 'aaaa', 67, 3, 7, 23, 12, 5, 12, 2001, '', ''),
(123, 'PROGRAMAREA IN C#', 64, 3, 1, 324, 17, 3, 2, 2003, '', ''),
(124, 'CHARLIE WILCOX', 65, 3, 3, 189, 14, 35, 2, 2003, '', ''),
(125, '100 DE PERSONALITATI ALE SECOLULUI XX. PICTORI', 66, 3, 6, 270, 25, 15, 74, 2001, '', ''),
(137, 'asd', 71, 63, 4, 34, 45, 76676, 75, 656, '', ''),
(138, 'carte test', 2, 2, 2, 2, 2, 2, 2, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `domeniu`
--

CREATE TABLE IF NOT EXISTS `domeniu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `domeniu`
--

INSERT INTO `domeniu` (`id`, `denumire`) VALUES
(1, 'Calculatoare'),
(2, 'Hobby'),
(3, 'Beletristica'),
(4, 'Psihologie'),
(5, 'Carte scolara'),
(6, 'Arte'),
(7, 'Gastronomie'),
(8, 'Science Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `editura`
--

CREATE TABLE IF NOT EXISTS `editura` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(20) NOT NULL,
  `localitate` varchar(20) NOT NULL,
  `nrtelefon` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `editura`
--

INSERT INTO `editura` (`id`, `denumire`, `localitate`, `nrtelefon`, `email`) VALUES
(1, 'Polirom', 'Iasi', '0232214100', 'office@polirom.ro'),
(2, 'Humanitas', 'Bucuresti', '0214088350', 'secretariat@humanitas.ro'),
(3, 'All', 'Bucuresti', '0214022600', 'info@all.ro'),
(4, 'Arves', 'Craiova', '0251560396', ''),
(5, 'Corint', 'Bucuresti', '0213198822', 'vanzari@edituracorint.ro'),
(56, 'Libris', 'Brasov', '0268477701', 'vanzari@libris.ro'),
(57, 'Teora', 'Bucuresti', '0318100007', ''),
(58, 'Nemira', 'Bucuresti', '0212242156', 'librarie@nemira.ro'),
(63, 'zzzz', 'eeee', '232443', 'dfdvgdf');

-- --------------------------------------------------------

--
-- Table structure for table `limba`
--

CREATE TABLE IF NOT EXISTS `limba` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `limba`
--

INSERT INTO `limba` (`id`, `denumire`) VALUES
(1, 'romana'),
(2, 'engleza'),
(3, 'franceza'),
(4, 'germana'),
(12, 'chineza'),
(21, 'rusa'),
(67, 'japoneza'),
(75, 'dddddd'),
(74, 'maghiara');

-- --------------------------------------------------------

--
-- Table structure for table `subdomeniu`
--

CREATE TABLE IF NOT EXISTS `subdomeniu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` int(11) NOT NULL,
  `idDomeniu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `subdomeniu`
--

