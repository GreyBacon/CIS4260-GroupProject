-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 02:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories_db`
--

CREATE TABLE `categories_db` (
  `Category` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories_db`
--

INSERT INTO `categories_db` (`Category`) VALUES
('Action'),
('RPG'),
('Sports');

-- --------------------------------------------------------

--
-- Table structure for table `games_db`
--

CREATE TABLE `games_db` (
  `Game` varchar(30) DEFAULT NULL,
  `Category` varchar(6) DEFAULT NULL,
  `Image` varchar(14) DEFAULT NULL,
  `Price` decimal(4,2) DEFAULT NULL,
  `Release Date` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games_db`
--

INSERT INTO `games_db` (`Game`, `Category`, `Image`, `Price`, `Release Date`) VALUES
('NieR:Automata', 'Action', '1551200632.jpg', '39.99', 'Mar 17, 2017'),
('Rocket League', 'Action', '1549059561.jpg', '19.99', 'Jul 7, 2015'),
('Grand Theft Auto V', 'Action', '1544815097.jpg', '29.99', 'Apr 14, 2015'),
('MONSTER HUNTER: WORLD', 'Action', '1550022250.jpg', '59.99', 'Aug 9, 2018'),
('Valkyria Chronicles 4', 'Action', '1549296947.jpg', '59.99', 'Sep 25, 2018'),
('Beat Saber', 'Action', '1543281439.jpg', '19.99', 'May 1, 2018'),
('JUMP FORCE', 'Action', '1550185811.jpg', '59.99', 'Feb 14, 2019'),
('RESIDENT EVIL 2', 'Action', '1550643188.jpg', '59.99', 'Jan 24, 2019'),
('GOD EATER 3', 'Action', '1549639273.jpg', '59.99', 'Feb 7, 2019'),
('Deep Rock Galactic', 'Action', '1551091360.jpg', '24.99', 'Feb 28, 2018'),
('Arma 3', 'Action', '1549888448.jpg', '39.99', 'Sep 12, 2013'),
('Blade and Sorcery', 'Action', '1544547361.jpg', '19.99', 'Dec 11, 2018'),
('Fallout 4', 'Action', '1533676954.jpg', '29.99', 'Nov 9, 2015'),
('Just Cause 3', 'Action', '1543946570.jpg', '19.99', 'Nov 30, 2015'),
('Left 4 Dead 2', 'Action', '1540300687.jpg', '9.99', 'Nov 16, 2009'),
('Depth', 'Action', '1551126973.jpg', '19.99', 'Nov 3, 2014'),
('DARK SOULS III', 'Action', '1538593076.jpg', '59.99', 'Apr 11, 2016'),
('ACE COMBAT 7: SKIES UNKNOWN', 'Action', '1548984914.jpg', '59.99', 'Jan 31, 2019'),
('DOOM', 'Action', '1533678963.jpg', '19.99', 'May 12, 2016'),
('Conan Exiles', 'Action', '1550047960.jpg', '39.99', 'May 8, 2018'),
('Kenshi', 'RPG', '1600000001.jpg', '29.99', 'Dec 6, 2018'),
('My Time At Portia', 'RPG', '1600000002.jpg', '29.99', 'Jan 15, 2019'),
('Black Desert Online', 'RPG', '1600000003.jpg', '9.99', 'May 24, 2017'),
('Armello', 'RPG', '1600000004.jpg', '4.99', 'Sep 1, 2015'),
('Terraria', 'RPG', '1600000005.jpg', '9.99', 'May 16, 2011'),
('Phantom Doctrine', 'RPG', '1600000006.jpg', '19.99', 'Aug 14, 2018'),
('Stardew Valley', 'RPG', '1600000007.jpg', '14.99', 'Feb 26, 2016'),
('Divinity: Original Sin 2', 'RPG', '1600000008.jpg', '44.99', 'Sep 14, 2017'),
('FINAL FANTASY XIV Online', 'RPG', '1600000009.jpg', '19.99', 'Feb 18, 2014'),
('The I of the Dragon', 'RPG', '1600000010.jpg', '6.99', 'Mar 10, 2004'),
('Trials Rising', 'Sports', '1551200384.jpg', '24.99', 'Feb 26, 2019'),
('DiRT Rally 2.0', 'Sports', '1551268905.jpg', '59.99', 'Feb 25,2019'),
('Tahko Alpine Ski', 'Sports', '1551097107.jpg', '0.00', 'Feb 24, 2019'),
('Future Aero Racing S Ultra', 'Sports', '1550792582.jpg', '5.09', 'Feb 21, 2019'),
('Extreme Truck Simulator', 'Sports', '1551207586.jpg', '1.99', 'Feb 21, 2019'),
('SNOW', 'Sports', '1550229093.jpg', '0.00', 'Feb 14,2019'),
('Supraball', 'Sports', '1549641620.jpg', '0.00', 'Feb 8, 2019'),
('Monster Energy Supercross', 'Sports', '1549613467.jpg', '49.99', 'Feb 8, 2019'),
('Pumped BMX pro', 'Sports', '1549548039.jpg', '14.99', 'Feb 7, 2019'),
('Supralympic Runners', 'Sports', '1549483785.jpg', '16.99', 'Feb 6, 2019'),
('SRC: Sprint Robot Championship', 'Sports', '1549855043.jpg', '14.99', 'Feb 1, 2019'),
('Spykebots', 'Sports', '1550063663.jpg', '10.99', 'Jan 31, 2019'),
('Hunter', 'Sports', '1551108941.jpg', '0.99', 'Jan 28, 2019'),
('When ski lifts go wrong', 'Sports', '1549288854.jpg', '14.99', 'Jan 23, 2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
