-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 01. bře 2024, 23:37
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `recenze`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `userName` tinytext NOT NULL,
  `userReview` tinytext NOT NULL,
  `userMessage` longtext NOT NULL,
  `dateReviewed` tinytext NOT NULL,
  `datumcas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Vypisuji data pro tabulku `rate`
--

INSERT INTO `rate` (`id`, `userName`, `userReview`, `userMessage`, `dateReviewed`, `datumcas`) VALUES
(89, 'kmlk', '5', 'jlnlkl', 'Tuesday, February 27, 2024', '2024-02-27 18:13:45');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
