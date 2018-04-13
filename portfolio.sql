-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 13 apr 2018 om 20:51
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`name`, `image`, `description`) VALUES
('Calculator++', 'calc++', 'This was the very first project I had to work on, It is a simple calculator made using HTML Form elements and back-ended with PHP.<br>It has the fucntions to Add, Minus, Multiply, Divide, use Powers, get Roots, Convert Kilometres to Miles and vice versa.<br>It alsp keeps a record of previous calculations you\'ve made.<br><br>Looking at it now, there are definately things I would have done differently, I would for instance make a button based system with integrated JavaScript, or even make the entire back-end in JS.'),
('Radio GaGa', 'radioGaGa', 'Radio Gaga is the second project and makes use of audio and video.<br>This assignment learned me some of the basics of CSS, thought me some JavaScript and introduced me to arrays.<br>Radio Gaga has three different \"Albums\" which are made up of three induvidual songs and a video.<br><br>I enjoyed working on it at the time, but I can easily see there are things that could have been done easier. As for instance with the songs not being present in a database, and instead being hardcoded, there wouldnt be a reason to use PHP first before putting them in JavaScript.'),
('GameWorld', 'gameworld', 'Gameworld was a project in which we learned about database integration, CSS and file-structures.<br>Gameworld is an online videogame store where you would be able to purchase new videogames for current consoles on the market. The website itself is very simple with a homepage, store, checkout and an about and contact page (which dont really have anything in them).<br><br>Working on this project was at times fun and at other times very frustrating. I didnt have much knowledge about connecting to databases and was really struggling with the CSS.'),
('DC Heroes', 'dcHeroes', 'DC Heroes is a fanpage of the superheroes from the DC-universe, this site allows you to read up on your favourite heroes and comment on them.<br>This site functioned as an extention to what we learned before, notably with Gameworld. It expanded on databasing and CSS, which started to get a little more advanced starting this project.<br><br>At the time I didn\'t really like working on this project, although I like how my CSS knowledge expanded with it. But looking back at it now I am grateful for what it taught me.'),
('Vault JS', 'vaultJS', 'This one was fun to work on.<br>Vault JS is a vault application entirely written in JavaScript, which I really liked doing.<br>The site contains a monitor, touch panel and the vault itself. If the correct code will be given on the panel the vault will open up, however if the wrong combination is entered then it will remain closed, the whole thing is accompanied by sound effects.<br><br>My plan with this one was to have multiple different combinations letting to different outcomes, however this was sadly never implemented. I did really enjoy working on this one and might have made JavaScript one of my favourite languages to work with.'),
('Guestbook', 'guestbook', 'Guestbook is just that, a guestbook. The assignment was to make a simple guestbook, in which the user sends their message to the database and have it displayed on the page.<br>Originally I was really bored with this one, so I spiced it up a bit and tried to make it more fun, this is the reason why the site has a pink, granny\'s bakery theme.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
