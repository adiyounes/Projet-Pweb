-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2022 at 02:14 AM
-- Server version: 8.0.28
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
  `eventID` int NOT NULL AUTO_INCREMENT,
  `eventName` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `eventDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `eventType` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eventDate` date NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventDesc`, `eventType`, `eventDate`) VALUES
(1, 'Red Hat Training Camp', 'Red Hat Training Camp est une formation certifiée de 3 jours\r\nqui concerne les technologies Red Hat. Le stage est animé par\r\nDr. Djelloul Bouida, architecte de solutions senior et niveau IV\r\nRHCA. Le but est de permettre aux étudiants d’acquérir une\r\nexpérience sur le système d’administration linux, virtualisation\r\net cloud computing sur un niveau débutant-intermédiaire.', 'formation', '2022-12-05'),
(2, 'Micro Club Capture The Flag (MCTF)', 'Micro Club Capture The Flag est un salon\r\nautour de la cyber-sécurité, englobant\r\n\r\nconférences, tables rondes et une compéti-\r\ntion nationale. Le but de MCTF est de permet-\r\ntre aux participants de découvrir et maîtriser\r\n\r\nde nouvelles technologies ainsi que de dével-\r\nopper de nouvelles compétences. Dans\r\n\r\nl’optique d’encourager le développement de\r\nla communauté de white hackers,\r\nMicro-Club tient à organiser un événement\r\nen rapport avec la sécurité informatique en\r\nvue de rassembler enthousiastes du\r\ndomaine et éventuels recruteurs. Ainsi, avec\r\n\r\ncet événement, le Micro Club désire promou-\r\nvoir les bonnes pratiques de la cyber-sécurité\r\n\r\net entreprend de sensibiliser les jeunes étudi-\r\nants sur ce domaine ainsi qu’inculquer les\r\n\r\nbonnes valeurs du ‘Ethical Hacking’.', 'Compétition', '2022-10-12'),
(3, 'Algeria Game Challenge (AGC)', 'Pionnier du développement vidéoludique et première initiative\r\nà introduire ce domaine en Algérie, Algeria Game Challenge,\r\n\r\nanciennement nommé «XNA» d’après le Framework de Micro-\r\nsoft, est un concours de développement de jeux vidéo destiné\r\n\r\naux passionnés du domaine vidéoludique aux quatre coins du\r\npays.\r\nCe concours vise à lancer les participants dans un processus\r\nd’exploration du métier de développeur de jeux vidéo, afin\r\nd’attirer les investisseurs dans ce secteur.', 'formation', '2022-05-02'),
(4, 'ALGERIA DISRUPT', 'Algeria Disrupt est la première édition de «\r\n\r\nAlgeria Disrupt: the annual startup confer-\r\nence » organisée, au CIC : Centre Internation-\r\nal des Conférences, par le ministère de la\r\n\r\nmicro entreprise, start up et de l’économie\r\nde la connaissance en collaboration avec le\r\nclub CELEC et avec l’aide et la participation\r\ndu Micro Club.', 'Compétition', '2022-03-01'),
(5, 'ALGERIA 2.0', 'Algeria 2.0 est le plus grand événement WEB\r\net TIC en Afrique. Il est considéré comme \"le\r\ncarrefour international des professionnels\r\ndes TIC et du WEB 2.0\". Il a pour but d\'assurer\r\nune mutation vers un avenir numérique. Il\r\n\r\ncrée toutes sortes d\'opportunités de dévelop-\r\npement du pays et du continent.', 'formation', '2022-02-01'),
(6, 'Micro Club Winter Hacks', 'L’idée du Winter Hacks Season est de\r\nregrouper les activités et évènements de\r\n\r\ntypes hackathons, workshops et compéti-\r\ntions de la période de la saison hivernal de\r\n\r\nSeptembre à Février dans un format intercon-\r\nnecté qui permet aux participant de profiter\r\n\r\nde ces activités pour apprendre de nouvelles\r\ntechnologies, améliorer leur compétence, en\r\nacquérir des nouvelles qui leurs servent dans\r\n\r\nla vie académique, professionnel et person-\r\nnel ainsi que de pouvoir appliquer\r\n\r\nces nouvelles compétences dans les\r\nchallenges des différents évènements\r\n\r\nsimultanés et travailler au sein d’une commu-\r\nnauté.', 'Compétition', '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `facultés`
--

DROP TABLE IF EXISTS `facultés`;
CREATE TABLE IF NOT EXISTS `facultés` (
  `facultyId` int NOT NULL,
  `facultyName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`facultyId`),
  UNIQUE KEY `facultyName` (`facultyName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facultés`
--

INSERT INTO `facultés` (`facultyId`, `facultyName`) VALUES
(6, 'Biologie'),
(4, 'Chimie'),
(2, 'Électronique'),
(9, 'Génie Civil'),
(10, 'Génie Électrique'),
(8, 'Géographie'),
(1, 'Informatique'),
(5, 'Mathématiques'),
(7, 'Mécanique'),
(3, 'Physique');

-- --------------------------------------------------------

--
-- Table structure for table `spécialités`
--

DROP TABLE IF EXISTS `spécialités`;
CREATE TABLE IF NOT EXISTS `spécialités` (
  `spID` int NOT NULL,
  `spName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facultyId` int NOT NULL,
  PRIMARY KEY (`spID`),
  UNIQUE KEY `spName` (`spName`),
  KEY `facultyId` (`facultyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spécialités`
--

INSERT INTO `spécialités` (`spID`, `spName`, `facultyId`) VALUES
(1, 'Algèbre et Cryptographie ', 5),
(2, 'Ingénierie Statistique ', 5),
(3, 'Recherche Opérationnelle', 5),
(4, 'Chimie Fondamentale', 4),
(5, 'Physique Appliquée : Energétique ', 3),
(6, 'Physique', 3),
(7, 'Ingénieries des Systèmes de Mécaniques', 7),
(8, 'Mécanique de Construction ', 7),
(9, 'Génie des Matériaux', 7),
(10, 'Génie Civil', 9),
(11, 'Hydraulique', 9),
(12, ' Biologie, Physiologie et Génétique Végétales (BPGV)', 6),
(13, 'Biologie du Développement (BD)', 6),
(14, 'Ecologie et Environnement Marin (EEM)', 6),
(15, 'Ecologie Végétale et Environnement (EVE)\r\n\r\n', 6),
(16, 'Ecologie Animale (EA)', 6),
(17, 'Biotechnologie et Santé (BS)', 6),
(18, 'Biochimie Fondamentale et Appliquée (BFA)', 6),
(19, 'Génétique Fondamentale et Appliquée (GFA)', 6),
(20, 'Microbiologie Fondamentale et Appliquée (MFA)', 6),
(21, 'Nutrition et Contrôle de Qualité et Analyse (NCA)', 6),
(22, 'Parasitologie et Microbiologie (PM)', 6),
(23, 'Physiologie Intégrative Animale et Humaine (PIAH)', 6),
(24, 'Géologie Fondamentale', 8),
(25, 'Géomorphologie et Protection de l\'environnement', 8),
(26, 'Aménagement Urbain et Protection de l’Environnement', 8),
(27, 'Informatique académique', 1),
(28, 'Ingénierie des Systèmes d’Information et des Logiciels\r\n', 1),
(29, 'Génie des Télécommunications et Réseaux', 1),
(30, 'Ingénierie du Logiciel', 1),
(31, 'Électrique', 10),
(32, 'Automate', 2),
(33, 'Électronique', 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `matricule` double NOT NULL,
  `Id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `eMail` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SP` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `motivation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `objectives` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faculté` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` double NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `matricule` (`matricule`),
  UNIQUE KEY `eMail` (`eMail`),
  KEY `idSP` (`SP`),
  KEY `yearId` (`year`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`matricule`, `Id`, `firstName`, `lastName`, `eMail`, `year`, `SP`, `motivation`, `objectives`, `faculté`, `phonenumber`) VALUES
(191931012963, 49, 'YOUNES', 'ADI', 'younesadi18@gmail.com', 'Premiére Année Licence', 'Algèbre et Cryptographie ', 'The busker hoped that the people passing by would throw money, but they threw tomatoes instead, so he exchanged his hat for a juicer.', 'They desperately needed another drummer since the current one only knew how to play bongos.', 'Informatique', 542467886),
(121, 50, 'X', 'Y', 'ABZC@GMASDIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54780),
(122, 51, 'X', 'Y', 'ABCZ@GMADSIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54087),
(123, 52, 'X', 'Y', 'ABC@ZGDSCMAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 55640),
(124, 53, 'X', 'Y', 'ABC@GZMASDIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 556740),
(125, 54, 'X', 'Y', 'ABC@GMDCAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54560),
(126, 55, 'X', 'Y', 'ABC@GMZADSIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54670),
(12234561, 59, 'X', 'Y', 'ABZERZC@GMASDIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54780),
(1, 63, 'X', 'Y', 'A@g.com', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54780),
(129, 71, 'X', 'Y', 'ABC@GMZSDCAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54560),
(1212, 72, 'X', 'Y', 'ABC@GMSDZAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 5400),
(1223, 73, 'X', 'Y', 'ABC@GZMDCSAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 58940),
(1219, 74, 'X', 'Y', 'ABC@GZMSDAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 58940),
(1242, 75, 'X', 'Y', 'ABC@GMZAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54890),
(1235, 76, 'X', 'Y', 'ABC@GZMSCDAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 8540),
(1236, 77, 'X', 'Y', 'ABC@GMAZIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54670),
(1247, 78, 'X', 'Y', 'ABC@GMSDAZIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 54760),
(1252345, 81, 'X', 'Y', 'ABC@GMAGHZIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 5406767),
(1244, 82, 'X', 'Y', 'ABC@GMADSZIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 5640),
(321276, 84, 'X', 'Y', 'ABCFD@GMZAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 5434450),
(1234, 85, 'X', 'Y', 'ABC@GMZSDAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 5240),
(1342, 86, 'X', 'Y', 'ABC@GMZGAZEDIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 548870),
(1278, 87, 'X', 'Y', 'ABC@GMVZDCSAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 545680),
(1265, 88, 'X', 'Y', 'ABC@GSDCMCZAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 55640),
(1256, 89, 'X', 'Y', 'ABC@GMZAIVGFJSDCL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 5678540),
(1257, 90, 'X', 'Y', 'ABC@GMATYHAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 546570),
(1289, 91, 'X', 'Y', 'ABC@GMAIHTL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 523440),
(1206, 92, 'X', 'Y', 'ABC@GMAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 523440),
(1254, 93, 'X', 'Y', 'ABC@GMTHYTHYAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 532440),
(1233, 94, 'X', 'Y', 'ABC@GMTYHAIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 543240),
(1225, 95, 'X', 'Y', 'ABC@GMATYHIL.COM', 'Deuxième Année Licence', 'Physique', 'Z', 'E', 'Physique', 542340),
(191931012961238, 97, 'YOUNES', 'bxas', 'azsj@rty.op', 'Deuxième Année Master', 'Mécanique de Construction ', 'azsjnajsk, azsnjak sazs,ka sazskn', 'azsojaz, azkndaz azd,', 'Mécanique', 912838129383),
(123123, 98, 'zsa', 'azs', 'jnazs,azs@zadja.odf', 'Première Année Master', 'Algèbre et Cryptographie ', 'jk,l', 'nn ', 'Mathématiques', 89723091209),
(2873278, 99, 'zasako', 'jaz,sxa', 'naksaz,skazs@asnjz.cerfer', 'Troisième Année Licence', 'Automate', 'SDCZEDZED', 'ZEDZEDZE', 'Électronique', 78129038129381),
(87162837, 101, 'zaijzs', 'zadbahzd', 'jzasjkzsaz@azs.azubs', 'Deuxième Année Licence', 'Algèbre et Cryptographie ', 'zhabsqsjbxq', 'jhsbxnqzx', 'Mathématiques', 7128931),
(782739823912378, 103, 'jhhbsx', 'jnnjn', 'younnjesadi18@gmail.com', 'Troisième Année Licence', 'Informatique académique', 'decerf', 'erferfe', 'Informatique', 798998098219),
(2345678, 105, 'younes', 'adi', 'AZ@HHH.jk', 'Premiére Année Licence', 'Algèbre et Cryptographie ', 'uyjn', 'uyyhb', 'Informatique', 3456781),
(100, 106, 'Hello', 'world', 'hello@world.com', 'Deuxième Année Master', 'Ingénierie Statistique', 'Mathématiques', 'Mathématiques', 'Mathématiques', 120937);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `yearId` int NOT NULL,
  `year` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`yearId`),
  UNIQUE KEY `year` (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`yearId`, `year`) VALUES
(2, 'Deuxième Année Licence'),
(5, 'Deuxième Année Master'),
(1, 'Premiére Année Licence'),
(4, 'Première Année Master'),
(3, 'Troisième Année Licence');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
