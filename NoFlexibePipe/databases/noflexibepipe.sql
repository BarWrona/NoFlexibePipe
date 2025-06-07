-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 07, 2025 at 11:19 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noflexibepipe`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES
('grerge', 'fews@example.com', 'teamat', 'wiadoanwdaać'),
('rgeefs', 'fwedw@example.com', 'd3dwabyu', 'efdawehui32');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projects`
--

CREATE TABLE `projects` (
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`image`, `title`, `details`) VALUES
('gallery1.jpg', 'Projekt Sieci dla Szpitala Wojewódzkiego', '<ul><li>Wdrożenie kompleksowej infrastruktury sieciowej</li><li>Instalacja 500+ punktów dostępowych</li><li>System monitoringu i bezpieczeństwa</li><li>Okres realizacji: 2020-2021</li></ul>'),
('gallery2.jpg', 'Modernizacja Sieci Uniwersyteckiej', '<ul><li>Aktualizacja infrastruktury dla 10 budynków</li><li>Wdrożenie systemu VoIP</li><li>Integracja z systemem uczelnianym</li><li>Okres realizacji: 2021-2022</li></ul>'),
('gallery3.jpg', 'Centrum Handlowe \"Galeria Centralna\"', '<ul><li>Projekt i wdrożenie sieci dla 200 sklepów</li><li>System monitoringu CCTV</li><li>Infrastruktura Wi-Fi dla klientów</li><li>Okres realizacji: 2022</li></ul>'),
('gallery4.jpg', 'Kompleks Biurowy \"Business Park\"', '<ul><li>Sieć światłowodowa dla 5 budynków</li><li>System kontroli dostępu</li><li>Centrum zarządzania bezpieczeństwem</li><li>Okres realizacji: 2023</li></ul>'),
('gallery5.jpg', 'Hotel \"Grand Resort & SPA\"', '<ul><li>Sieć dla 300 pokoi hotelowych</li><li>System rezerwacji i obsługi gości</li><li>Monitoring i kontrola dostępu</li><li>Okres realizacji: 2023-2024</li></ul>'),
('gallery6.jpg', 'Osiedle \"Smart Living\"', '<ul><li>Inteligentna sieć dla 500 mieszkań</li><li>System automatyki budynkowej</li><li>Monitoring i kontrola wjazdu</li><li>Okres realizacji: 2024-2025</li></ul>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
