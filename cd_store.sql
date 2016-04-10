-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2016 at 12:48 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cd_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `albulm`
--

CREATE TABLE IF NOT EXISTS `albulm` (
  `albulmId` int(11) NOT NULL AUTO_INCREMENT,
  `albulmName` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`albulmId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `albulm`
--

INSERT INTO `albulm` (`albulmId`, `albulmName`, `genre`, `price`) VALUES
(1, 'The College Dropout', 'Hip-hop', 7),
(2, 'Wasting Light', 'Alternative Rock', 10),
(3, 'Torches', 'Indie Rock', 5),
(4, 'In Your Honor', 'Alternative Rock', 12);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `artistName` varchar(20) NOT NULL,
  `artistId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistName`, `artistId`) VALUES
('Kanye West', 1),
('Foo Fighters', 2),
('Foster The People', 3);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `title` varchar(20) NOT NULL,
  `artistId` int(11) NOT NULL,
  `songId` int(11) NOT NULL AUTO_INCREMENT,
  `albulmId` int(11) NOT NULL,
  `description` varchar(40) NOT NULL,
  PRIMARY KEY (`songId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`title`, `artistId`, `songId`, `albulmId`, `description`) VALUES
('We Don''t Care', 1, 1, 1, 'First song the world heard of Kanye'),
('Graduation Day', 1, 2, 1, 'Song played in graduations worldwide'),
('All Falls Down', 1, 3, 1, 'Upbeat Song from Kanye'),
('I''ll Fly Away', 1, 4, 1, 'Song Jordan uses to play hoops'),
('SpaceShip', 1, 5, 1, 'Song used to speak to aliens '),
('Never Let me Down', 1, 6, 1, 'Song used to motivate people'),
('Workout Plan', 1, 7, 1, 'Helping athletes workout since 2001'),
('Slow Jamz', 1, 8, 1, 'Song to play for someone special'),
('Get Em High', 1, 9, 1, 'Song to play basketball with'),
('Family Business', 1, 10, 1, 'Uplifting and empowering'),
('Rope', 2, 11, 2, 'Includes high-melodies'),
('Dear Rosemary', 2, 12, 2, 'Poetic Song'),
('White Limo', 2, 13, 2, 'Relaxing and uplifting'),
('Arlandria', 2, 14, 2, 'Perfect for playing with someone special'),
('These Days', 2, 15, 2, 'reminiscent song'),
('Back and Forth', 2, 16, 2, 'Song to play while rowing'),
('A Matter of Time', 2, 17, 2, 'Included in major films'),
('Miss the Misery', 2, 18, 2, 'Played in Gran Turino'),
('I Should Have Known', 2, 19, 2, 'To be played after a break-up'),
('Walk', 2, 20, 2, 'Best song in the albulm'),
('Helena Beat', 3, 21, 3, 'Innovative Song unlike any other'),
('Pumped Up Kicks', 3, 22, 3, 'Cruising song'),
('Call It What You Wan', 3, 23, 3, 'Debate Song '),
('Don''t Stop', 3, 24, 3, 'Also known as Color on the Walls'),
('Waste', 3, 25, 3, 'Hit the top 10 charts'),
('I Would Do Anything ', 3, 26, 3, 'Marriage Proposal song'),
('Houdini', 3, 27, 3, 'For magical nights'),
('Life On the Nickel', 3, 28, 3, 'One of a kind syncopation song'),
('Miss You', 3, 29, 3, 'For when texts are not enough'),
('Warrent', 3, 30, 3, 'Last song to the amazing albulm'),
('Best Of You', 2, 31, 4, 'A song to throw into the huge mix');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
