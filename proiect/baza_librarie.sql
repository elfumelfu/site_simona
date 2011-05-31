-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2011 at 08:27 
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
-- Table structure for table `autorcarte`
--

CREATE TABLE IF NOT EXISTS `autorcarte` (
  `idautor` int(5) NOT NULL,
  `idcarte` int(5) NOT NULL,
  PRIMARY KEY (`idautor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autorcarte`
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(44444444, 'egegedg', '', 57, 0, 0, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `domeniu`
--

CREATE TABLE IF NOT EXISTS `domeniu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `domeniu`
--

INSERT INTO `domeniu` (`id`, `denumire`) VALUES
(1, 'Calculatoare'),
(2, 'Hobby'),
(3, 'Beletristica'),
(4, 'Psihologie'),
(6, 'Arte'),
(7, 'Gastronomie'),
(19, 'Medicina - Sanatate'),
(15, 'Autoeducare'),
(16, 'Economie'),
(17, 'Stiinte juridice'),
(18, 'Istorie'),
(20, 'Religie'),
(21, 'Educatie - Invatamant'),
(22, 'Stiinta - Tehnica'),
(23, 'Carte straina'),
(24, 'Politica'),
(25, 'Limbi straine');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

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
(64, 'dddd', '', '', ''),
(65, 'jjjj', 'efd', '4356', 'dgrhr'),
(66, 'jjjj', 'efd', '4356', 'dgrhr'),
(67, 'aaaaa', 'dfgfd', '435', 'gdgd'),
(68, 'ce vreau eu', 'unde vreau eu', '1234', 'unde_vreau_eu@yahoo.com'),
(69, '', 'tyu', 'rtgy', 'werty');

-- --------------------------------------------------------

--
-- Table structure for table `subdomeniu`
--

CREATE TABLE IF NOT EXISTS `subdomeniu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(30) NOT NULL,
  `idDomeniu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `subdomeniu`
--

INSERT INTO `subdomeniu` (`id`, `denumire`, `idDomeniu`) VALUES
(1, 'Arhitectura', 6),
(2, 'Fotografie', 6),
(3, 'Muzica', 6),
(4, 'Pictura', 6),
(5, 'Sculptura', 6),
(6, 'Grafica', 6),
(7, 'Istoria artei', 6),
(8, 'Albume de arta', 6),
(9, 'Dans', 6),
(10, 'Teatru', 6),
(11, 'Cinematografie', 6),
(12, 'Criminalistica', 17),
(13, 'Drept administrativ', 17),
(14, 'Drept civil', 17),
(15, 'Legislatie', 17),
(16, 'Penal', 17),
(17, 'Drept comercial', 17),
(18, 'Drept bancar', 17),
(19, 'Crestinism', 20),
(20, 'Islam', 20),
(21, 'Iudaism', 20),
(22, 'Istoria religiilor', 20),
(23, 'Studii si eseuri teologice', 20),
(24, 'Arte si tehnici culinare', 7),
(25, 'Bauturi', 7),
(26, 'Bucatari celebri', 7),
(27, 'Diete', 7),
(28, 'Alimentatie vegetariana', 7),
(29, 'Imbunatatirea memoriei', 15),
(30, 'Managementul stressului', 15),
(31, 'Spiritual', 15),
(32, 'Motivational', 15),
(33, 'Transformare personala', 15),
(34, 'Administratie publica', 16),
(35, 'Finante - Banci', 16),
(36, 'Economie politica', 16),
(37, 'Management', 16),
(38, 'Afaceri', 16),
(39, 'Contabilitate', 16),
(40, 'Legislatie / Fiscalitate', 16),
(41, 'Marketing / Publicitate', 16),
(42, 'Cardiologie', 19),
(43, 'Oftalmologie', 19),
(44, 'ORL', 19),
(45, 'Stomatologie', 19),
(46, 'Alimentatie', 19),
(47, 'Dietoterapie', 19);

-- --------------------------------------------------------

--
-- Table structure for table `subdomeniucarte`
--

CREATE TABLE IF NOT EXISTS `subdomeniucarte` (
  `idsubdomeniu` int(5) NOT NULL,
  `idcarte` int(5) NOT NULL,
  PRIMARY KEY (`idsubdomeniu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdomeniucarte`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `oras` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nume`, `prenume`, `email`, `parola`, `adresa`, `oras`) VALUES
(11, 'bleoju', 'daniel', 'bleoju_daniel@yahoo.com', 'aa05c8feef007f75d0eb0d5febedc122', '', ''),
(12, 'daniel', 'jndsfjnsk', 'daniel.bleoju@activedesign.ro', 'aa05c8feef007f75d0eb0d5febedc122', '', '');
