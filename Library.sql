-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3302
-- Generation Time: Sep 16, 2018 at 12:32 PM
-- Server version: 5.5.45
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Authors`
--

CREATE TABLE IF NOT EXISTS `Authors` (
  `AuthorId` int(10) NOT NULL AUTO_INCREMENT,
  `AuthorName` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`AuthorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Authors`
--

INSERT INTO `Authors` (`AuthorId`, `AuthorName`) VALUES
(1, 'Кирилович А.В.'),
(2, 'Маликов Д.Ю.');

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE IF NOT EXISTS `Books` (
  `BookId` int(10) NOT NULL AUTO_INCREMENT,
  `BookName` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`BookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`BookId`, `BookName`) VALUES
(1, 'История средних веков'),
(2, 'История древнего Китая');

-- --------------------------------------------------------

--
-- Table structure for table `BooksAuthors`
--

CREATE TABLE IF NOT EXISTS `BooksAuthors` (
  `AuthorId` int(10) NOT NULL,
  `BookId` int(10) NOT NULL,
  PRIMARY KEY (`AuthorId`,`BookId`),
  KEY `AuthorId` (`AuthorId`),
  KEY `BookId` (`BookId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BooksAuthors`
--

INSERT INTO `BooksAuthors` (`AuthorId`, `BookId`) VALUES
(1, 1),
(1, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BooksAuthors`
--
ALTER TABLE `BooksAuthors`
  ADD CONSTRAINT `FK_Author` FOREIGN KEY (`AuthorId`) REFERENCES `Authors` (`AuthorId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Book` FOREIGN KEY (`BookId`) REFERENCES `Books` (`BookId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
