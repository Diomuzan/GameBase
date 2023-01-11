-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 dec 2022 om 12:55
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--
CREATE DATABASE IF NOT EXISTS `healthone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `healthone`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `description`) VALUES
(1, 'Battle Royale', 'categories/battleroyale.jpg', 'Battle royale is een multiplayer-computerspelgenre. Battle royale is een subgenre van survivalspellen waarin een groot aantal spelers tegen elkaar strijd leveren om de laatste overlevende te zijn.  '),
(2, 'role-playing game (RPG)', 'categories/rpg.jpg', 'Een role-playing game (RPG) is een spel waarin elke deelnemer de rol van een personage op zich neemt, meestal in een fantasie- of sciencefictionomgeving, die kan interageren binnen de denkbeeldige wereld van het spel.'),
(3, 'race game', 'categories/racegames.jpg', 'Racegames zijn een videogamegenre waarin de speler deelneemt aan een racecompetitie. Ze kunnen gebaseerd zijn op alles, van echte racecompetities tot fantastische omgevingen. Ze zijn verdeeld over een spectrum tussen meer realistische racesimulaties en meer fantastische racegames in arcadestijl.'),
(4, 'sport games', 'categories/sportgames.jpg', 'Een sportvideogame is een videogame die het beoefenen van sport simuleert. De meeste sporten zijn nagemaakt met een spel, waaronder teamsporten, atletiek, extreme sporten en vechtsporten. Sommige games leggen de nadruk op het daadwerkelijk spelen van de sport (zoals FIFA, Pro Evolution Soccer en Madden NFL), terwijl andere de nadruk leggen op strategie en sportmanagement (zoals Football Manager en Out of the Park Baseball).');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `img`, `category_id`) VALUES
(1, 'Apex Legends', 'Apex Legends is een gratis te spelen Battle Royale-heldenschietspel ontwikkeld door Respawn Entertainment en uitgegeven door Electronic Arts. Voorafgaand aan de wedstrijd vormen spelers teams van twee of drie spelers en kiezen ze uit vooraf ontworpen personages met onderscheidende vaardigheden, bekend als \"Legends\". De game heeft twee spelmodi. In \"Battle Royale\" landen tot 20 squadrons van drie personen of 30 duo\'s van twee personen op een eiland en zoeken naar wapens en voorraden voordat ze proberen alle andere spelers in de strijd te verslaan.', '0.00', 'product/apex_legends.jpg', 1),
(2, 'PlayerUnknown\'s Battlegrounds', 'PUBG: Battlegrounds (voorheen bekend als PlayerUnknown\'s Battlegrounds) is een battle royale-game ontwikkeld door PUBG Studios en uitgegeven door Krafton. De game wordt gespeeld vanuit een third-person of first-person perspectief. In het spel parachuteren maximaal honderd spelers naar een eiland waar ze wapens en uitrusting zoeken om andere spelers te doden en tegelijkertijd te voorkomen dat ze zelf worden gedood.', '0.00', 'product/pubgbattlegrounds.png', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
