-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Sty 2020, 01:38
-- Wersja serwera: 10.1.32-MariaDB
-- Wersja PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_zsl`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `access`
--

INSERT INTO `access` (`id`, `name`) VALUES
(1, 'Uczen'),
(2, 'Nauczyciel'),
(3, 'Admin'),
(4, 'Rodzic');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `class` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grades_math`
--

CREATE TABLE `grades_math` (
  `id_grades_math` int(11) NOT NULL,
  `id_uczen` int(11) NOT NULL,
  `id_classes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `ip` int(11) NOT NULL,
  `last_login` date NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `access` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_polish_ci,
  `surname` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `ip`, `last_login`, `email`, `access`, `name`, `surname`) VALUES
(1, 'admin', 'admin', 0, '0000-00-00', 'admin@admin.pl', 3, NULL, NULL),
(2, 'user', 'user', 0, '0000-00-00', 'user@user.pl', 1, 'Jan', 'Kowalski'),
(3, 'snowak', 'snowak', 0, '0000-00-00', 'snowak@o2.pl', 1, 'Stanisław', 'Nowak'),
(4, 'wwiese', 'wwiese', 0, '0000-00-00', 'wiktorwiese@o2.pl', 2, 'Wiktor', 'Wiese'),
(9, 'astasiak', '', 0, '0000-00-00', 'astasiak@gmail.com', 4, 'Aleksandra', 'Stasiak');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indeksy dla tabeli `grades_math`
--
ALTER TABLE `grades_math`
  ADD PRIMARY KEY (`id_grades_math`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `access` (`access`),
  ADD KEY `access_2` (`access`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `grades_math`
--
ALTER TABLE `grades_math`
  MODIFY `id_grades_math` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`access`) REFERENCES `access` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
