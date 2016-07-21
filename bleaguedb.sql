-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 09:11 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bleaguedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `PlayerName` text NOT NULL,
  `NFLTeam` text NOT NULL,
  `Position` text NOT NULL,
  `PlayerIndNumb` int(11) NOT NULL AUTO_INCREMENT,
  `fantTeam` varchar(6) NOT NULL,
  PRIMARY KEY (`PlayerIndNumb`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PlayerName`, `NFLTeam`, `Position`, `PlayerIndNumb`, `fantTeam`) VALUES
('Player A', 'Buffalo Bills', 'RB', 1, 'Team 1'),
('Player B', 'Cleveland Browns', 'QB', 2, 'Team 2'),
('Player C', 'San Diego Chargers', 'WR', 3, 'Team 1'),
('Player D', 'Dallas Cowboys', 'RB', 4, 'Team 2'),
('Player E', 'Indianapolis Colts', 'QB', 5, 'Team 1'),
('Player F', 'Kansas City Chiefs', 'WR', 6, 'Team 2'),
('Player G', 'San Diego Chargers', 'RB', 7, 'Team 1'),
('Player H', 'Dallas Cowboys', 'QB', 8, 'Team 2'),
('Player I', 'Indianapolis Colts', 'WR', 9, 'Team 1'),
('Player J', 'Kansas City Chiefs', 'RB', 10, 'Team 2'),
('Player K', 'San Diego Chargers', 'QB', 11, 'Team 1'),
('Player L', 'Dallas Cowboys', 'WR', 12, 'Team 2'),
('Player M', 'Indianapolis Colts', 'RB', 13, 'Team 1'),
('Player N', 'Kansas City Chiefs', 'QB', 14, 'Team 2'),
('Player O', 'San Diego Chargers', 'WR', 15, 'Team 1'),
('Player P', 'Dallas Cowboys', 'RB', 16, 'Team 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
