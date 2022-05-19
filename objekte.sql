-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 19. Mai 2022 um 12:09
-- Server-Version: 8.0.27
-- PHP-Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be-codingtask-php`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `objekte`
--

DROP TABLE IF EXISTS `objekte`;
CREATE TABLE IF NOT EXISTS `objekte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `promotion_price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `objekte`
--

INSERT INTO `objekte` (`id`, `type`, `price`, `promotion_price`) VALUES
(1, 'A', 21194, 20894),
(2, 'B', 23894, 22894),
(3, 'C', 25999, 25894),
(4, 'B', 25999, 25894),
(5, 'A', 26999, 26894),
(6, 'C', 27994, 27094),
(7, 'B', 26999, 26894),
(8, 'A', 27999, 27094),
(9, 'B', 26994, 26894),
(10, 'B', 27199, 27094),
(11, 'B', 30994, 30094),
(12, 'A', 24999, 0),
(13, 'C', 21199, 0),
(14, 'B', 39999, 0),
(15, 'B', 25100, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
