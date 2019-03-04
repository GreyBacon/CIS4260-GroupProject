-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 03:33 AM
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
-- Table structure for table `category_db`
--

CREATE TABLE `category_db` (
  `category_id` int(1) NOT NULL,
  `category` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_db`
--

INSERT INTO `category_db` (`category_id`, `category`) VALUES
(1, 'Action'),
(2, 'RPG'),
(3, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `game_db`
--

CREATE TABLE `game_db` (
  `game_id` int(2) NOT NULL,
  `game` varchar(30) DEFAULT NULL,
  `category_id` int(1) DEFAULT NULL,
  `image` varchar(14) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `releaseDate` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='game_db';

--
-- Dumping data for table `game_db`
--

INSERT INTO `game_db` (`game_id`, `game`, `category_id`, `image`, `price`, `releaseDate`) VALUES
(1, 'NieR:Automata', 1, '1551200632.jpg', '39.99', 'Mar 17, 2017'),
(2, 'Rocket League', 1, '1549059561.jpg', '19.99', 'Jul 7, 2015'),
(3, 'Grand Theft Auto V', 1, '1544815097.jpg', '29.99', 'Apr 14, 2015'),
(4, 'MONSTER HUNTER: WORLD', 1, '1550022250.jpg', '59.99', 'Aug 9, 2018'),
(5, 'Valkyria Chronicles 4', 1, '1549296947.jpg', '59.99', 'Sep 25, 2018'),
(6, 'Beat Saber', 1, '1543281439.jpg', '19.99', 'May 1, 2018'),
(7, 'JUMP FORCE', 1, '1550185811.jpg', '59.99', 'Feb 14, 2019'),
(8, 'RESIDENT EVIL 2', 1, '1550643188.jpg', '59.99', 'Jan 24, 2019'),
(9, 'GOD EATER 3', 1, '1549639273.jpg', '59.99', 'Feb 7, 2019'),
(10, 'Deep Rock Galactic', 1, '1551091360.jpg', '24.99', 'Feb 28, 2018'),
(11, 'Arma 3', 1, '1549888448.jpg', '39.99', 'Sep 12, 2013'),
(12, 'Blade and Sorcery', 1, '1544547361.jpg', '19.99', 'Dec 11, 2018'),
(13, 'Fallout 4', 1, '1533676954.jpg', '29.99', 'Nov 9, 2015'),
(14, 'Just Cause 3', 1, '1543946570.jpg', '19.99', 'Nov 30, 2015'),
(15, 'Left 4 Dead 2', 1, '1540300687.jpg', '9.99', 'Nov 16, 2009'),
(16, 'Depth', 1, '1551126973.jpg', '19.99', 'Nov 3, 2014'),
(17, 'DARK SOULS III', 1, '1538593076.jpg', '59.99', 'Apr 11, 2016'),
(18, 'ACE COMBAT 7: SKIES UNKNOWN', 1, '1548984914.jpg', '59.99', 'Jan 31, 2019'),
(19, 'DOOM', 1, '1533678963.jpg', '19.99', 'May 12, 2016'),
(20, 'Conan Exiles', 1, '1550047960.jpg', '39.99', 'May 8, 2018'),
(21, 'Kenshi', 2, '1600000001.jpg', '29.99', 'Dec 6, 2018'),
(22, 'My Time At Portia', 2, '1600000002.jpg', '29.99', 'Jan 15, 2019'),
(23, 'Black Desert Online', 2, '1600000003.jpg', '9.99', 'May 24, 2017'),
(24, 'Armello', 2, '1600000004.jpg', '4.99', 'Sep 1, 2015'),
(25, 'Terraria', 2, '1600000005.jpg', '9.99', 'May 16, 2011'),
(26, 'Phantom Doctrine', 2, '1600000006.jpg', '19.99', 'Aug 14, 2018'),
(27, 'Stardew Valley', 2, '1600000007.jpg', '14.99', 'Feb 26, 2016'),
(28, 'Divinity: Original Sin 2', 2, '1600000008.jpg', '44.99', 'Sep 14, 2017'),
(29, 'FINAL FANTASY XIV Online', 2, '1600000009.jpg', '19.99', 'Feb 18, 2014'),
(30, 'The I of the Dragon', 2, '1600000010.jpg', '6.99', 'Mar 10, 2004'),
(31, 'Trials Rising', 3, '1551200384.jpg', '24.99', 'Feb 26, 2019'),
(32, 'DiRT Rally 2.0', 3, '1551268905.jpg', '59.99', 'Feb 25,2019'),
(33, 'Tahko Alpine Ski', 3, '1551097107.jpg', '0.00', 'Feb 24, 2019'),
(34, 'Future Aero Racing S Ultra', 3, '1550792582.jpg', '5.09', 'Feb 21, 2019'),
(35, 'Extreme Truck Simulator', 3, '1551207586.jpg', '1.99', 'Feb 21, 2019'),
(36, 'SNOW', 3, '1550229093.jpg', '0.00', 'Feb 14,2019'),
(37, 'Supraball', 3, '1549641620.jpg', '0.00', 'Feb 8, 2019'),
(38, 'Monster Energy Supercross', 3, '1549613467.jpg', '49.99', 'Feb 8, 2019'),
(39, 'Pumped BMX pro', 3, '1549548039.jpg', '14.99', 'Feb 7, 2019'),
(40, 'Supralympic Runners', 3, '1549483785.jpg', '16.99', 'Feb 6, 2019'),
(41, 'SRC: Sprint Robot Championship', 3, '1549855043.jpg', '14.99', 'Feb 1, 2019'),
(42, 'Spykebots', 3, '1550063663.jpg', '10.99', 'Jan 31, 2019'),
(43, 'Hunter', 3, '1551108941.jpg', '0.99', 'Jan 28, 2019'),
(44, 'When ski lifts go wrong', 3, '1549288854.jpg', '14.99', 'Jan 23, 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_db`
--
ALTER TABLE `category_db`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `game_db`
--
ALTER TABLE `game_db`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `Category_id` (`category_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game_db`
--
ALTER TABLE `game_db`
  ADD CONSTRAINT `game_db_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category_db` (`Category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
