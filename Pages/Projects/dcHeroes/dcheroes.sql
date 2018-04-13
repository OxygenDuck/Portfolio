-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 26 jan 2018 om 22:12
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcheroes`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `CommentId` int(255) NOT NULL,
  `HeroId` int(255) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`CommentId`, `HeroId`, `Comment`) VALUES
(1, 1, 'By far the coolest superhero out there!'),
(2, 1, 'Pfft, Marvel has way better characters than DC.'),
(3, 2, 'This hero is SOOOOOOOO overrated, also too overpowered and not fun if you ask me.'),
(4, 2, 'By far my favorite hero.'),
(5, 1, '\"I\'m Batman.\" - Batman'),
(6, 5, 'This one seems really worthless.'),
(7, 6, 'Wonder Woman is way more powerful than Superman!'),
(8, 7, 'The worst hero by far, boring as can be.'),
(9, 8, 'I love speed so I think Flash is the coolest hero!'),
(10, 9, 'People should really like this one more, you never hear about him.'),
(12, 5, 'I Hate Everything brought me here.'),
(13, 9, 'The green look really speaks to me for some reason...'),
(14, 8, 'Red flash, passing by, Sonic the Hedgehog... eh.. The Flash!');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `heroes`
--

CREATE TABLE `heroes` (
  `Name` char(25) NOT NULL,
  `Id` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` char(25) NOT NULL,
  `TeamId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `heroes`
--

INSERT INTO `heroes` (`Name`, `Id`, `Description`, `Image`, `TeamId`) VALUES
('Batman', 1, 'A man dressed like a bat who fights against evil and strikes terror into the hearts of criminals everywhere.', 'batman', 1),
('Superman', 2, 'Also known as the Man of Steel, is one of the most powerful superheroes in the DC Universe.', 'superman', 1),
('Aquaman', 5, 'Telepathic ruler of Atlantis and the Earth\'s oceans, an Atlantean with incredible strength and speed as well as the ability to command all sea-life.', 'aquaman', 1),
('Wonder Woman', 6, 'The princess Diana, the daughter of Hippolyta, Queen of the Amazons, and Zeus, the mightiest of the Gods of Olympus.', 'wonderwoman', 1),
('Green Lantern', 7, 'He was the first human ever inducted into the Green Lantern Corps, and has been heralded as possibly the greatest Green Lantern of all time.', 'greenlantern', 1),
('The Flash', 8, 'The fastest man alive. Using his super-speed powers, he taps into the Speed Force and becomes a costumed crime-fighter. ', 'theflash', 1),
('Martian Manhunter', 9, 'One of the last survivors of the planet Mars who came to Earth in search of justice and peace.', 'martianmanhunter', 1),
('Robin', 10, 'The Boy Wonder who is always near Batman\'s side, there have been multiple iterations of Robin.', 'robin', 2),
('Cyborg', 11, 'Victor Stone (Cyborg) was a high school athlete at odds with his brilliant scientist father Silas Stone. Vic was caught in an explosion at S.T.A.R. Labs when a nearby Father Box detonated.\r\n\r\nHis father saved his life by using experimental technology to turn him into a cyborg in the Red Room.', 'cyborg', 2),
('Raven', 12, 'A dark, moody character, Raven is the half-breed daughter of a human mother named Angela Roth and the demon overlord Emperor Trigon.', 'raven', 2),
('Beast Boy', 13, 'As a child, He contracted a rare illness called Sakutia and was cured by a serum from a green monkey. This serum had the unintended effect of turning his skin and hair green and gave him the ability to change into any animal form.', 'beastboy', 2),
('Harley Quinn', 14, 'Harley Quinn is the former girlfriend and sidekick to the Joker; a criminal psychologist turned flamboyant criminal menace. While her intentions are typically good, her methods often betray her insanity.', 'harleyquinn', 3),
('Deadshot', 15, 'Floyd Lawton, also known as Deadshot, is the \"man who never misses\" - an assassin with an almost superhuman marksmanship ability. His villainous activities against Batman made him one of the Suicide Squad\'s most notorious members.', 'deadshot', 3),
('Killer Croc', 16, 'Waylon Jones is Killer Croc, a misunderstood man with a birth defect that gives him some of the traits of a crocodile. Because he was treated like a monster for most of his life, he became very cynical and dangerous, making him an enemy of Batman. However, he\'s made multiple attempts to show his kinder side when given the opportunity.', 'killercroc', 3),
('Starfire', 17, 'Koriand\'r is an alien princess from the planet Tamaran who lived in peace and happiness until her home planet was conquered. Banished from Tamaran, Koriand\'r was enslaved and experimented on, granting her extraordinary powers which she used to lead a rebellion and liberate herself and her fellow slaves from their captors. She became known throughout the cosmos as Starfire, and settled on Earth, where she became a member of the superhero teams the Outlaws and the Teen Titans.', 'starfire', 2),
('Bronze Tiger', 18, 'Ben Turner is Bronze Tiger, one of the world\'s greatest martial artists. He studied with Richard Dragon under the O-Sensei, and was later brainwashed by the League of Assassins. This made him one of the world\'s deadliest killers. He would later resist their programming, and become a full-fledged superhero.', 'bronzetiger', 3),
('Count Vertigo', 19, 'The victim of a hereditary inner ear defect that affected his balance, Vertigo had a small electronic device implanted in his right temple that compensated this problem. Tinkering with the device, Vertigo learned he was able to affect other people\'s balance as well, distorting their perceptions so that they literally could not tell up from down, an effect known as vertigo. This would bring him in conflict with the heroes Green Arrow and Black Canary.', 'countvertigo', 3),
('Black Lightning', 20, 'Black Lightning carved out a niche in Metropolis, ultimately gaining the trust of high-profile figures like Superman, Inspector William Henderson and reporter Jimmy Olsen. Along the way, he defeated several super-powered underlings of the 100, from Merlyn to the Cyclotronic Man to Syonide, as well as the gang\'s gargantuan albino leader, Tobias Whale. ', 'blacklightning', 4),
('Freight Train', 21, 'Freight Train was just an ordinary man with a meager existence until he was bitten by an alien parasite. Instead of dying like most victims, he was given incredible power, transforming into a newblood.', 'freighttrain', 4),
('Geo-Force', 22, 'Brion Markov is Geo-Force, a powerful super-hero and member of the royal family in Markovia. His powers allow him to control gravity and the Earth\'s terrain. This has lead him to become a long-standing member of the Outsiders.', 'geoforce', 4),
('Grace', 23, 'Grace Choi is the daughter of an Amazon of Bana-Mighdall, which accounts for her strength and resilience. She is headstrong and opinionated, and doesn\'t \"take crap\" from anyone.', 'grace', 4),
('Halo', 24, 'Halo is the codename of the superhero member of the Outsiders. Halo is the result of the combination of a human body and a light energy being. For this reason, she holds light powers, which are useful on their fight against evil.', 'halo', 4),
('Henry Fyff', 25, 'Some time before the death of Walter Emerson, Oliver Queen personally fired Henry Fyff from his job at Q-Core for stalking Naomi Singh. While Fyff was \"a mess\", Oliver still thought he was brilliant, and regretted that he had to let such a mind go for those reasons, hence why he went down personally rather than having a lower employee do so.', 'henryfyff', 5),
('Arsenal', 26, 'Roy Harper is Arsenal, formerly operating as Green Arrow\'s sidekick Speedy. He is currently a member of Team Arrow, and a former member of the Outlaws.', 'arsenal', 5),
('Black Canary', 27, 'Dinah Drake is the Black Canary, a vigilante with the distinctive sonic scream superpower known as the Canary Cry, which she uses to fight crime with the Birds of Prey and Green Arrow.', 'blackcanary', 5),
('Red Arrow', 28, 'Emiko \"Emi\" Queen is the Red Arrow, a master bow-wielding vigilante who is the Green Arrow\'s half-sister and partner, as well as the assassin Shado\'s daughter.', 'redarrow', 5),
('John Diggle', 29, 'John Diggle is a former soldier of the U.S. Military and the first vigilante partner of Green Arrow. Before starting his vigilante career with Green Arrow, John was working as part of security for Queen Industries.', 'johndiggle', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `powers`
--

CREATE TABLE `powers` (
  `PowerId` mediumint(255) NOT NULL,
  `HeroId` int(255) NOT NULL,
  `Power` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `powers`
--

INSERT INTO `powers` (`PowerId`, `HeroId`, `Power`) VALUES
(1, 2, 'Solar Radiation Absorption'),
(2, 2, 'Superhuman Strength'),
(3, 2, 'Superhuman Speed'),
(4, 2, 'Superhuman Stamina'),
(5, 2, 'Flight'),
(6, 2, 'Heat Vision'),
(7, 2, 'Invulnerability'),
(8, 2, 'Longevity'),
(9, 2, 'Self-Sustenance'),
(10, 2, 'Super-Breath'),
(11, 2, 'Superhuman Senses'),
(12, 1, 'Indomitable Will'),
(13, 1, 'Intimidation'),
(14, 1, 'Interrogation'),
(15, 1, 'Peak Human Condition'),
(16, 1, 'Acrobatics'),
(17, 1, 'Martial Arts'),
(18, 1, 'Weaponry'),
(19, 1, 'Stealth'),
(20, 1, 'Marksmanship'),
(21, 1, 'Genius Level Intellect'),
(22, 5, 'Atlantean Biological Adaptation'),
(23, 5, 'Magic'),
(24, 5, 'Water Emulation'),
(25, 6, 'Divine Empowerment'),
(26, 6, 'Flight'),
(27, 6, 'Suspended Aging'),
(28, 7, 'Green Lantern Ring Mastery'),
(29, 7, 'Aviation'),
(30, 7, 'Leadership'),
(31, 8, 'Speed Force Generation'),
(32, 8, 'Superhuman Speed'),
(33, 8, 'Time-Travel'),
(34, 9, 'Martian Physiology'),
(35, 9, 'Shape-Shifting'),
(36, 9, 'Invisibility'),
(37, 10, 'Archery'),
(38, 10, 'Mimicry'),
(39, 10, 'Stealth'),
(40, 11, 'Cybernetic Enhancement'),
(41, 11, 'Energy Resistance'),
(42, 11, 'Superhuman Strength'),
(43, 12, 'Astral Projection'),
(44, 12, 'Telekinesis'),
(45, 12, 'Flight'),
(46, 13, 'Unique Physiology'),
(47, 13, 'Terrestrial Metamorph'),
(48, 13, 'Animal Mimicry'),
(49, 14, 'Toxic Immunity'),
(50, 14, 'Psychology'),
(51, 14, 'Hand-to-Hand Combat'),
(52, 15, 'Firearms'),
(53, 15, 'Weaponry'),
(54, 15, 'Leadership'),
(55, 16, 'Regressive Atavism'),
(56, 16, 'Intimidation'),
(57, 16, 'Superhuman Strength'),
(58, 17, 'Tamaranean Physiology'),
(59, 17, 'Flight'),
(60, 17, 'Superhuman Strength'),
(61, 18, 'Aikido'),
(62, 18, 'Karate'),
(63, 18, 'Kung-Fu'),
(64, 19, 'Vertigo Effect'),
(65, 19, 'Flight'),
(66, 19, 'Hand-to-Hand Combat'),
(67, 20, 'Electrokinesis'),
(68, 20, 'Electro-Blast'),
(69, 20, 'Force Field'),
(70, 21, 'Kinetic Energy Absorption'),
(71, 21, 'Size Alteration'),
(72, 21, 'Superhuman Strength'),
(73, 22, 'Gravity Manipulation'),
(74, 22, 'Geokinesis'),
(75, 22, 'Pyrokinesis'),
(76, 23, 'Divine Empowerment'),
(77, 23, 'Superhuman Strength'),
(78, 23, 'Hand-to-Hand Combat'),
(79, 24, 'Light Auras'),
(80, 24, 'Flight'),
(81, 24, 'Resurrection'),
(82, 25, 'Computer Operation'),
(83, 25, 'Weapon Design'),
(84, 26, 'Acrobatics'),
(85, 26, 'Archery'),
(86, 26, 'Firearms'),
(87, 27, 'Canary Cry'),
(88, 27, 'Espionage'),
(89, 27, 'Acrobatics'),
(90, 28, 'Acrobatics'),
(91, 28, 'Archery'),
(92, 28, 'Deception'),
(93, 29, 'Firearms'),
(94, 29, 'Boxing'),
(95, 29, 'Disguise');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teams`
--

CREATE TABLE `teams` (
  `TeamId` int(255) NOT NULL,
  `Name` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `teams`
--

INSERT INTO `teams` (`TeamId`, `Name`) VALUES
(1, 'Justice League'),
(2, 'Teen Titans'),
(3, 'Suicide Squad'),
(4, 'Outsiders'),
(5, 'Team Arrow');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentId`);

--
-- Indexen voor tabel `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `powers`
--
ALTER TABLE `powers`
  ADD PRIMARY KEY (`PowerId`);

--
-- Indexen voor tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TeamId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT voor een tabel `heroes`
--
ALTER TABLE `heroes`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT voor een tabel `powers`
--
ALTER TABLE `powers`
  MODIFY `PowerId` mediumint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT voor een tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `TeamId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
