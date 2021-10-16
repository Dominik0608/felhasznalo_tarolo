-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3307
-- Létrehozás ideje: 2021. Okt 16. 19:33
-- Kiszolgáló verziója: 10.4.13-MariaDB
-- PHP verzió: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `crosssec`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `city` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `country` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `salt` varchar(8) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `picture` varchar(64) COLLATE utf8mb4_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
