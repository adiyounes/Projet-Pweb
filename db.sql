-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2022 at 11:06 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(50) NOT NULL,
  `eventDesc` text NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventDesc`) VALUES
(1, 'Red Hat Training Camp', 'Red Hat Training Camp est une formation certifiée de 3 jours qui concerne les technologies Red Hat. Le stage est animé par Dr Djelloul Bouida, architecte de solutions senior et niveau IV RHCA. Le but est de permettre aux étudiants d\'acquérir une expérience sur le système d\'administration linux, virtualisation et cloud computing à un niveau débutant-intermédiaire.'),
(2, 'Micro Club Capture The Flag (MCTF)', 'Micro Club Capture The Flag est un salon autour de la cyber-sécurité, englobant conférences, tables rondes et une compétition tion nationale. Le but de MCTF est de permet- tre aux participants de découvrir et maîtriser de nouvelles technologies ainsi que de développement opp de nouvelles compétences. Dans l\'optique d\'encourager le développement de la communauté des hackers blancs, Micro-Club tient à organiser un événement en rapport avec la sécurité informatique en vue de rassembler les enthousiastes du domaine et recruteurs potentiels. Ainsi, avec cet événement, le Micro Club désire promou- voir les bonnes pratiques de la cyber-sécurité et entreprend de sensibiliser les jeunes étudi- fourmis sur ce domaine ainsi qu\'inculquer les bonnes valeurs du \'Piratage éthique\'.'),
(4, 'Algeria Game Challenge (AGC)', 'Pionnier du développement vidéoludique et première initiative à introduire ce domaine en Algérie, Algeria Game Challenge, anciennement nommé «XNA» d’après le Framework de Micro- soft, est un concours de développement de jeux vidéo destiné aux passionnés du domaine vidéoludique aux quatre coins du pays.\r\n\r\nCe concours vise à lancer les participants dans un processus d’exploration du métier de développeur de jeux vidéo, afin d’attirer les investisseurs dans ce secteur.'),
(5, 'ALGERIA DISRUPT', 'Algeria Disrupt est la première édition de « Algeria Disrupt: the annual startup confer- ence » organisée, au CIC : Centre Internation- al des Conférences, par le ministère de la micro entreprise, start up et de l’économie de la connaissance en collaboration avec le club CELEC et avec l’aide et la participation du Micro Club.'),
(6, 'ALGERIA 2.0', 'Algeria 2.0 est le plus grand événement WEB et TIC en Afrique. Il est considéré comme \"le carrefour international des professionnels des TIC et du WEB 2.0\". Il a pour but d\'assurer une mutation vers un avenir numérique. Il crée toutes sortes d\'opportunités de dévelop- pement du pays et du continent.'),
(7, 'Micro Club Winter Hacks', 'L’idée du Winter Hacks Season est de regrouper les activités et évènements de types hackathons, workshops et compéti- tions de la période de la saison hivernal de Septembre à Février dans un format intercon- necté qui permet aux participant de profiter de ces activités pour apprendre de nouvelles technologies, améliorer leur compétence, en acquérir des nouvelles qui leurs servent dans la vie académique, professionnel et person- nel ainsi que de pouvoir appliquer ces nouvelles compétences dans les challenges des différents évènements simultanés et travailler au sein d’une commu- nauté.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
