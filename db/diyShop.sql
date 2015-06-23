-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Tid vid skapande: 11 mars 2015 kl 12:39
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `diyShop`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_kunder`
--

CREATE TABLE IF NOT EXISTS `tbl_kunder` (
`id` int(6) NOT NULL,
  `persnr` int(12) NOT NULL,
  `fornamn` varchar(30) COLLATE utf8_bin NOT NULL,
  `efternamn` varchar(30) COLLATE utf8_bin NOT NULL,
  `telnr` int(10) NOT NULL,
  `adress` varchar(30) COLLATE utf8_bin NOT NULL,
  `postnr` int(5) NOT NULL,
  `postadress` varchar(30) COLLATE utf8_bin NOT NULL,
  `epost` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(256) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `tbl_kunder`
--

INSERT INTO `tbl_kunder` (`id`, `persnr`, `fornamn`, `efternamn`, `telnr`, `adress`, `postnr`, `postadress`, `epost`, `password`) VALUES
(1, 2147483647, 'Glenn', 'GÃ¶tesson', 31811001, 'Keplers gata 45', 31517, 'GÃ–TEBORG', 'm@m.com', 'ada'),
(2, 2147483647, 'm', 'm', 1, 'm', 1, 'm', 'm', 'm');

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
`id` int(9) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) COLLATE utf8_bin NOT NULL,
  `kundid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_orderrader`
--

CREATE TABLE IF NOT EXISTS `tbl_orderrader` (
`id` int(11) NOT NULL,
  `antal` int(5) NOT NULL,
  `orderid` int(9) NOT NULL,
  `produktid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `tbl_produkter`
--

CREATE TABLE IF NOT EXISTS `tbl_produkter` (
`id` int(6) NOT NULL,
  `titel` varchar(30) COLLATE utf8_bin NOT NULL,
  `beskrivning` text COLLATE utf8_bin NOT NULL,
  `pris` int(6) NOT NULL,
  `bildfil` varchar(20) COLLATE utf8_bin NOT NULL,
  `lagersaldo` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `tbl_kunder`
--
ALTER TABLE `tbl_kunder`
 ADD PRIMARY KEY (`id`), ADD KEY `persnr` (`persnr`);

--
-- Index för tabell `tbl_order`
--
ALTER TABLE `tbl_order`
 ADD PRIMARY KEY (`id`);

--
-- Index för tabell `tbl_orderrader`
--
ALTER TABLE `tbl_orderrader`
 ADD PRIMARY KEY (`id`);

--
-- Index för tabell `tbl_produkter`
--
ALTER TABLE `tbl_produkter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `tbl_kunder`
--
ALTER TABLE `tbl_kunder`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT för tabell `tbl_order`
--
ALTER TABLE `tbl_order`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `tbl_orderrader`
--
ALTER TABLE `tbl_orderrader`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `tbl_produkter`
--
ALTER TABLE `tbl_produkter`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
