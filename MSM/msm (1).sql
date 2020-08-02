-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 jul 2020 om 01:16
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msm`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(6) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `straat` varchar(35) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `woonplaats` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `wachtwoord` varchar(256) NOT NULL,
  `rol` tinyint(4) NOT NULL,
  `Coins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `achternaam`, `straat`, `postcode`, `woonplaats`, `email`, `wachtwoord`, `rol`, `Coins`) VALUES
(1, 'Tristan', 'Mesa Gonzalez', 'Klipper 49', '1721GV', 'Broek Op Langedijk', 'Weplayagarnow@gmail.com', '123', 9, 20),
(2, 'Juan', 'Juan', 'Juan', '123', 'Juan', 'Juan@Juan.nl', 'Juan', 0, 225),
(19, 'Test', 'Test', 'Test', 'Test', 'Woonplaats', 'admin@admin.nl', 'test123', 9, 0),
(23, 'Test', 'Test', 'Test', 'Test', 'Test', 'Weplayagarnow1@gmail.com', '1234', 9, 0),
(27, 'Test', 'Test', 'Test', 'Test', 'Test', 'VOORBEELDTEST@GMAIL.COM', '123', 9, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderklant`
--

CREATE TABLE `orderklant` (
  `id` int(11) NOT NULL,
  `Naam` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Volgers` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `StatusOrder` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `orderklant`
--

INSERT INTO `orderklant` (`id`, `Naam`, `Email`, `Volgers`, `Datum`, `StatusOrder`) VALUES
(71, 'OhPubers', 'Juan@Juan.nl', 500, '2020-07-14', ''),
(72, 'OhPubers', 'Juan@Juan.nl', 500, '2020-07-14', 'In behandeling');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `orderklant`
--
ALTER TABLE `orderklant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT voor een tabel `orderklant`
--
ALTER TABLE `orderklant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
