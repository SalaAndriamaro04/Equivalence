-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 17 mars 2024 à 14:18
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `equivalence`
--

-- --------------------------------------------------------

--
-- Structure de la table `admis`
--

CREATE TABLE `admis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` bigint(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `universite` varchar(255) NOT NULL,
  `anneeUniv` year(4) NOT NULL,
  `mention` varchar(255) NOT NULL,
  `parcours` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `neVers` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admis`
--

INSERT INTO `admis` (`id`, `matricule`, `firstName`, `lastName`, `dateNaissance`, `lieuNaissance`, `universite`, `anneeUniv`, `mention`, `parcours`, `niveau`, `created_at`, `updated_at`, `neVers`) VALUES
(7, 6, 'ANJARASOA', 'Hugette Jacquelina', '1994-06-05', 'Efatsy', 'Ecole Nationale d\'Informatique', 2020, 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 3', '2024-01-27 18:16:27', '2024-01-27 18:16:27', NULL),
(8, 11, 'FANOMEZANA', 'Njarasoa Muruella Joyce', '1994-06-05', 'Efatsy', 'Ecole Nationale d\'Informatique', 2020, 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 2', '2024-01-27 18:18:05', '2024-01-27 18:18:05', NULL),
(9, 16, 'KEMBAMANAMBINA', 'Laurencia', '1994-09-16', 'Mandronarivo', 'Ecole Nationale d\'Informatique', 2020, 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 3', '2024-01-27 18:19:05', '2024-01-27 18:19:05', NULL),
(10, 20, 'MARINETSY', 'Claudine', '1994-08-25', 'Bevoay Beretra', 'Ecole Nationale d\'Informatique', 2020, 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 3', '2024-01-27 18:19:54', '2024-01-27 18:19:54', NULL),
(11, 1, 'RAVELOJAONA', 'Bertrand', '1992-05-26', 'Vondrozo', 'Ecole de Management et de l\'Innovation Technologique', 2020, 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Master 1', '2024-01-27 18:23:45', '2024-01-27 18:23:45', NULL),
(12, 2, 'ZAFISOAZARA', 'Odine', '1976-10-25', 'Toamasina', 'Ecole de Management et de l\'Innovation Technologique', 2020, 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Licence 3', '2024-01-27 18:24:43', '2024-01-27 18:24:43', NULL),
(13, 3, 'RANDRIANAMPIANINA', 'Mariot Kennely', '1987-07-23', 'Farafangana', 'Ecole de Management et de l\'Innovation Technologique', 2020, 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Master 2', '2024-01-27 18:25:31', '2024-01-27 18:25:31', NULL),
(14, 4, 'REMANABEBENA', 'Augustin', '1992-08-12', 'Iabolahy', 'Ecole de Management et de l\'Innovation Technologique', 2020, 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Licence 3', '2024-01-27 18:26:30', '2024-01-27 18:26:30', NULL),
(15, 5, 'RAZAFINDRADAMA', 'Alida Emilienne', '1990-09-23', 'Vangaindrano', 'Ecole de Management et de l\'Innovation Technologique', 2020, 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Licence 3', '2024-01-27 18:27:27', '2024-01-27 18:27:27', NULL),
(16, 15, 'JOLIA', 'Falissé', NULL, 'Manombo', 'Ecole Nationale d\'Informatique', 2020, 'Sciences de l\'ingénieur', 'Informatique Général', 'Master 2', '2024-01-30 04:22:34', '2024-01-30 04:22:34', 1994);

-- --------------------------------------------------------

--
-- Structure de la table `admisbaccs`
--

CREATE TABLE `admisbaccs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `numBacc` varchar(255) NOT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `sessionBacc` year(4) NOT NULL,
  `serieBacc` char(12) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `neVers` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admisbaccs`
--

INSERT INTO `admisbaccs` (`id`, `firstName`, `lastName`, `numBacc`, `dateNaissance`, `lieuNaissance`, `sessionBacc`, `serieBacc`, `lieu`, `neVers`, `created_at`, `updated_at`) VALUES
(1, 'NIRILANTO', 'Lainarivotiana', '4500610', NULL, 'Manombo', 2017, 'D', 'Fianarantsoa', 1991, '2024-03-15 05:08:41', '2024-03-15 05:08:41'),
(2, 'LAHIDAMA', 'Jean', '4500611', '1999-01-10', 'Manombo', 2017, 'D', 'Fianarantsoa', NULL, '2024-03-15 05:11:34', '2024-03-15 05:11:34'),
(3, 'RASOLOFOMANDIMBY', 'Jean Hermara', '4500612', '1999-05-10', 'Antsaka', 2017, 'D', 'Fianarantsoa', NULL, '2024-03-15 05:13:18', '2024-03-15 05:13:18'),
(4, 'SOLOFONIAINA', 'Noelson Elia', '4500613', '1997-04-20', 'Antsapanimahazo', 2015, 'C', 'Fianarantsoa', NULL, '2024-03-15 05:14:26', '2024-03-15 05:14:26'),
(5, 'MAHAVIARISOA', 'Sitraka Emma', '4500613', '1998-10-20', 'Tambohobe', 2018, 'C', 'Fianarantsoa', NULL, '2024-03-15 05:15:16', '2024-03-15 05:15:16');

-- --------------------------------------------------------

--
-- Structure de la table `admiscolleges`
--

CREATE TABLE `admiscolleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `neVers` year(4) DEFAULT NULL,
  `numInscription` varchar(255) NOT NULL,
  `session` year(4) NOT NULL,
  `lieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admiscolleges`
--

INSERT INTO `admiscolleges` (`id`, `created_at`, `updated_at`, `firstName`, `lastName`, `dateNaissance`, `lieuNaissance`, `neVers`, `numInscription`, `session`, `lieu`) VALUES
(1, '2024-03-15 05:27:43', '2024-03-15 05:27:43', 'RANDRIANIRINA', 'Feno Fitiavana', '1993-01-21', 'Tambohobe', NULL, '141LR/00342', 2010, 'Fianarantsoa'),
(2, '2024-03-15 05:28:48', '2024-03-15 05:28:48', 'RAHERY', 'Mahafaly Xavier', '1995-01-01', 'Antabo', NULL, '141LR/00343', 2008, 'Fianarantsoa'),
(3, '2024-03-15 05:30:50', '2024-03-15 05:30:50', 'RANDRIAMIHAJA', 'Olivier Martial', '2000-01-11', 'Antady', NULL, '141LR/00344', 2012, 'Antananarivo'),
(4, '2024-03-15 05:32:06', '2024-03-15 05:32:06', 'RANDRIANANTENAINA', 'Tojomanana', '2000-06-11', 'Lacaisse', NULL, '141LR/00345', 2012, 'Ambalavao'),
(5, '2024-03-15 05:33:07', '2024-03-15 05:33:07', 'HERITIANA', 'Ronaldo William', NULL, 'Lacaisse', 1999, '141LR/00346', 2010, 'Fianarantsoa');

-- --------------------------------------------------------

--
-- Structure de la table `admiscrinfps`
--

CREATE TABLE `admiscrinfps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `neVers` year(4) DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `numFormation` varchar(255) NOT NULL,
  `anneeFormation` year(4) NOT NULL,
  `centreFormation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admiscrinfps`
--

INSERT INTO `admiscrinfps` (`id`, `created_at`, `updated_at`, `firstName`, `lastName`, `dateNaissance`, `neVers`, `lieuNaissance`, `numFormation`, `anneeFormation`, `centreFormation`) VALUES
(1, '2024-03-15 05:43:46', '2024-03-15 05:43:46', 'RAKOTOMAHERY', 'Eric', NULL, 1990, 'Lacasa', '20100-00346', 2010, 'Fianarantsoa'),
(2, '2024-03-15 05:45:27', '2024-03-15 05:45:27', 'ANDRIAMBELOTIANA', 'Sarobidy Juliana', '1998-01-04', NULL, 'Andranomiditra', '20100-00380', 2010, 'Fianarantsoa'),
(3, '2024-03-15 05:46:29', '2024-03-15 05:46:29', 'RANDRIAMIALISON', 'Monica', '1998-03-04', NULL, 'Andranomadio', '20100-00313', 2011, 'Ihosy'),
(4, '2024-03-15 05:47:31', '2024-03-15 05:47:31', 'RAMAMIHARIVELO', 'Marihasina', '1998-03-22', NULL, 'Betafo', '20100-00314', 2011, 'Ihosy'),
(5, '2024-03-15 05:48:12', '2024-03-15 05:48:12', 'ANDRIANANTENAINA', 'Angelo', '1999-03-22', NULL, 'Betafo', '20100-00314', 2013, 'Ihosy');

-- --------------------------------------------------------

--
-- Structure de la table `admislangues`
--

CREATE TABLE `admislangues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `neVers` year(4) DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `numCandidat` varchar(255) NOT NULL,
  `centreExam` varchar(255) NOT NULL,
  `anneeExam` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admislangues`
--

INSERT INTO `admislangues` (`id`, `created_at`, `updated_at`, `firstName`, `lastName`, `dateNaissance`, `neVers`, `lieuNaissance`, `numCandidat`, `centreExam`, `anneeExam`) VALUES
(1, '2024-03-15 05:57:24', '2024-03-15 05:57:24', 'RANDRIANATOANDRO', 'Mahomby', '1999-03-22', NULL, 'Betafo', '20200-00377', 'Antananarivo', 2013),
(2, '2024-03-15 05:58:27', '2024-03-15 05:58:27', 'MAHATODY', 'Tomy Kevin', '1999-05-22', NULL, 'Antsolaitra', '20200-00337', 'Fianarantsoa', 2015);

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numPhone` bigint(20) NOT NULL,
  `cni` bigint(20) NOT NULL,
  `dateDelivrance` date NOT NULL,
  `lieuDelivrance` varchar(255) NOT NULL,
  `photocopieCni` varchar(255) NOT NULL,
  `universite` varchar(255) DEFAULT NULL,
  `mention` varchar(255) DEFAULT NULL,
  `parcours` varchar(255) DEFAULT NULL,
  `niveau` varchar(255) NOT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `titreOriginal` varchar(255) NOT NULL,
  `diplomeAssorti` varchar(255) DEFAULT NULL,
  `motif` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `neVers` year(4) DEFAULT NULL,
  `anneeUniv` year(4) DEFAULT NULL,
  `numBacc` varchar(255) DEFAULT NULL,
  `sessionBacc` year(4) DEFAULT NULL,
  `mentionBacc` varchar(255) DEFAULT NULL,
  `centreBacc` varchar(255) DEFAULT NULL,
  `serieBacc` char(5) DEFAULT NULL,
  `numInscription` varchar(255) DEFAULT NULL,
  `session` year(4) DEFAULT NULL,
  `centre` varchar(255) DEFAULT NULL,
  `numFormation` varchar(255) DEFAULT NULL,
  `anneeFormation` year(4) DEFAULT NULL,
  `centreFormation` varchar(255) DEFAULT NULL,
  `numCandidat` varchar(255) DEFAULT NULL,
  `centreExam` varchar(255) DEFAULT NULL,
  `anneeExam` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `firstName`, `lastName`, `dateNaissance`, `lieuNaissance`, `adresse`, `numPhone`, `cni`, `dateDelivrance`, `lieuDelivrance`, `photocopieCni`, `universite`, `mention`, `parcours`, `niveau`, `matricule`, `titreOriginal`, `diplomeAssorti`, `motif`, `slug`, `neVers`, `anneeUniv`, `numBacc`, `sessionBacc`, `mentionBacc`, `centreBacc`, `serieBacc`, `numInscription`, `session`, `centre`, `numFormation`, `anneeFormation`, `centreFormation`, `numCandidat`, `centreExam`, `anneeExam`, `created_at`, `updated_at`) VALUES
(63, 'RENAO', 'Martine', '2024-03-14', 'Farafangana', 'Lot IB 008 Farafangana', 343287489, 202078579348, '2024-03-14', 'Ambatofinandrahana', 'photocopieCni/GQa3rEK9KqdaW0iChQWZdcbTZsqYNeF44fmqYrkI.png', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Licence 2', '3478934JF', 'titreOriginal/jzUdtl7s0hHhNVM6IC8IUF1DrjEKdPCmZesnw8ge.png', NULL, 'Demande d\'emploi', 'renao14032024074807', NULL, 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-14 04:48:07', '2024-03-14 04:48:07'),
(66, 'PATRICK', 'Obyspo', '2024-03-14', 'Loharano', 'aMPTSIA', 343443435, 501998732323, '2024-03-14', 'Toliara', 'photocopieCni/AY2pIdXg5jb3Ybmi0LmVsQrYJbZSK3Jyfl1D8qmU.png', NULL, NULL, NULL, 'BACC', NULL, 'titreOriginal/3iBnQdE318uySClPXSGpmj5qTVSlqbW3T3CIdbSl.png', NULL, 'Demande d\'emploi', 'patrick14032024095439', NULL, NULL, '4508938', 2013, 'Passable', 'SFX Ambatomena Fianarantsoa', 'D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-14 18:54:39', '2024-03-14 18:54:39'),
(68, 'ESTOP', 'Coder', '2024-03-14', 'Farafangana', 'aMPTSIA', 333283728, 202907489453, '2024-03-14', 'Ambatofinandrahana', 'photocopieCni/jzY2UEuyhUYSMnwuGWyMgHpskCsMHIYFOErgjnxx.png', NULL, NULL, NULL, 'BEPC', NULL, 'titreOriginal/XYaK9d6SB1TxgSoVE9XiYPezmiQgvNvIPQ9GS63f.png', NULL, 'Demande d\'emploi', 'estop14032024110508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23023KJ4343/373', 2011, 'Ceg Tsianolondroa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-14 20:05:11', '2024-03-14 20:05:11'),
(72, 'NIRILANTO', 'Lainarivotiana', NULL, 'Manombo', 'Loharano Nosy Varika', 346859605, 201011027879, '2010-01-13', 'Fianarantsoa', 'photocopieCni/fC1Rqqg7hgRrYwt88OHr23TuTcwE4e864R7oeAyc.png', NULL, NULL, NULL, 'BACC', NULL, 'titreOriginal/g92ZroBySUdbmLDShJyyuXh5VVd9A7m2f9IJRqgi.png', NULL, 'Concours INSTAT', 'nirilanto16032024072650', 1991, NULL, '4500610', 2017, 'Passable', 'SFX Ambatomena Fianarantsoa', 'D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-16 16:26:50', '2024-03-16 16:26:50'),
(73, 'RANDRIANIRINA', 'Feno Fitiavana', '1993-01-21', 'Fianarantsoa', 'lot IR 77 Ville Haute', 334785786, 201011027879, '2013-02-06', 'Fianarantsoa', 'photocopieCni/26EOZOFZ8zSpor5kofqby2Fn9PQfKZwbJlCCir03.png', NULL, NULL, NULL, 'BEPC', NULL, 'titreOriginal/2nqn2FmTKWXO6CnifavfYFlzitfHtF114rsRMBzQ.png', NULL, 'Demande d\'emploi', 'randrianirina16032024083105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '141LR/00342', 2010, 'Fianarantsoa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-16 17:31:06', '2024-03-16 17:31:06'),
(74, 'SLA', 'sa', '2024-03-06', 'Farafangana', 'Lot IB 008 Farafangana', 343874689, 202028749328, '2024-03-16', 'Ambatofinandrahana', 'photocopieCni/TK0mEJUVE1OpwyaXJA8hpGytRQ8wJrOM0x2YlUDJ.png', NULL, NULL, NULL, 'CRINFP', NULL, 'titreOriginal/Jope9NgxUW2YY1cj9P2f7LLsdTvCqBjNR5fQkNeV.png', 'diplomeAssorti/FnQHCNufhRnhMNw6Rk4WMTbTe9rak17m0yUKIACn.png', 'Demande d\'emploi', 'sla16032024084223', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '232FFE', 2017, 'Fianarantsoa', NULL, NULL, NULL, '2024-03-16 17:42:25', '2024-03-16 17:42:25'),
(76, 'JOSE', 'Tahina', '2024-02-27', 'Anosivelo', 'Lot IB 008 Farafangana', 333483874, 201011398043, '2024-03-16', 'Fianarantsoa', 'photocopieCni/qojP5tGnU6w3f9wsj6BFT8LyVnoyg1pSESB6UOhL.png', NULL, NULL, NULL, 'DELF B1', NULL, 'titreOriginal/1sbw3FHRUsLSTxNQAhLdBpeqrwVgSXlCYDPrJDIG.png', NULL, 'Concours INSTAT', 'jose16032024085602', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3242234-DJFIE', 'FIANARANTSOA', 2020, '2024-03-16 17:56:02', '2024-03-16 17:56:02'),
(77, 'RANDRIANATOANDRO', 'Mahomby', '1999-03-22', 'Betafo', 'lot 77 Ville Haute', 343534985, 201011027382, '2018-06-13', 'Fianarantsoa', 'photocopieCni/WSEmXoXMrsZECzLm0AA1m873f6LGPXvwa9DTNSAE.png', NULL, NULL, NULL, 'DELF B1', NULL, 'titreOriginal/R1XLi17eVWrphielNwGDpdJr9iob0VRVZCOHdRhV.png', NULL, 'Demande d\'emploi', 'randrianatoandro16032024085839', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20200-00377', 'Antananarivo', 2013, '2024-03-16 17:58:39', '2024-03-16 17:58:39'),
(79, 'ANJARASOA', 'FANOMEZANA', '1994-06-05', 'Farafangana', 'Lot IB 008 Farafangana', 325745469, 201011027388, '2014-02-17', 'Fianarantsoa', 'photocopieCni/vVlR2W9MjOGNnCGn7obF2g1SmoVGC9IbQva6rCsj.png', 'Ecole Nationale d\'Informatique', 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 3', '6', 'titreOriginal/8ZhMxoAWXxMXtHZ5CW7eAA9DlXSXXE4weDp8byGC.png', NULL, 'Demande d\'emploi', 'anjarasoa17032024081744', NULL, 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 05:17:44', '2024-03-17 05:17:44'),
(80, 'FANOMEZANA', 'Njarasoa Muruella Joyce', '1994-06-05', 'Efatsy', 'lot 77 Ville Haute', 345789579, 201011038354, '1994-11-16', 'Fianarantsoa', 'photocopieCni/JMy3pzOVzpE4aiUZHdM4unfLoYocbfW1kgsPjz4p.png', 'Ecole Nationale d\'Informatique', 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 2', '11', 'titreOriginal/GOPwSnKZZYjLXJqAMsB4iWsYAclKhUcpg1tmMGlJ.png', NULL, 'Demande d\'emploi', 'fanomezana17032024082138', NULL, 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 05:21:38', '2024-03-17 05:21:38'),
(81, 'RAVELOJAONA', 'Bertrand', '1992-05-26', 'Vondrozo', 'aMPTSIA', 345695860, 201011023894, '2012-06-27', 'Fianarantsoa', 'photocopieCni/V5czIXgBitFiIy38KNCsaUfIXVGtDjpKaWCFK7A7.png', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Master 1', '1', 'titreOriginal/TA2vVmGdz4Nl22fJ0r9zbnUpFnOR15K5E64MSJ4h.png', NULL, 'Demande d\'emploi', 'ravelojaona17032024082437', NULL, 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 05:24:37', '2024-03-17 05:24:37'),
(82, 'RANDRIANAMPIANINA', 'Mariot Kennely', '1987-07-23', 'Farafangana', 'Lot IB 008 Farafangana', 327594950, 501927897589, '2006-01-18', 'Toliara', 'photocopieCni/ZVyHVgiUItvPN8MBj4nLorsJ0NK9fmEuptTnGvhr.png', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Master 2', '3', 'titreOriginal/tBSh61SfS3hwPLCaawLHABpebg5DlGVD1ZYqOaq8.png', NULL, 'Demande d\'emploi', 'randrianampianina17032024082638', NULL, 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-17 05:26:38', '2024-03-17 05:26:38');

-- --------------------------------------------------------

--
-- Structure de la table `errors`
--

CREATE TABLE `errors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numPhone` bigint(20) DEFAULT NULL,
  `cni` bigint(20) DEFAULT NULL,
  `dateDelivrance` date NOT NULL,
  `lieuDelivrance` varchar(255) NOT NULL,
  `photocopieCni` varchar(255) NOT NULL,
  `universite` varchar(255) DEFAULT NULL,
  `mention` varchar(255) DEFAULT NULL,
  `parcours` varchar(255) DEFAULT NULL,
  `niveau` varchar(255) NOT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `anneeUniv` year(4) DEFAULT NULL,
  `titreOriginal` varchar(255) NOT NULL,
  `diplomeAssorti` varchar(255) DEFAULT NULL,
  `motif` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `neVers` year(4) DEFAULT NULL,
  `numBacc` varchar(255) DEFAULT NULL,
  `sessionBacc` year(4) DEFAULT NULL,
  `serieBacc` char(10) DEFAULT NULL,
  `centreBacc` varchar(255) DEFAULT NULL,
  `mentionBacc` varchar(255) DEFAULT NULL,
  `numInscription` varchar(255) DEFAULT NULL,
  `session` year(4) DEFAULT NULL,
  `centre` varchar(255) DEFAULT NULL,
  `numFormation` varchar(255) DEFAULT NULL,
  `anneeFormation` year(4) DEFAULT NULL,
  `centreFormation` varchar(255) DEFAULT NULL,
  `numCandidat` varchar(255) DEFAULT NULL,
  `centreExam` varchar(255) DEFAULT NULL,
  `anneeExam` year(4) DEFAULT NULL,
  `motifErreur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `errors`
--

INSERT INTO `errors` (`id`, `created_at`, `updated_at`, `firstName`, `lastName`, `dateNaissance`, `lieuNaissance`, `adresse`, `numPhone`, `cni`, `dateDelivrance`, `lieuDelivrance`, `photocopieCni`, `universite`, `mention`, `parcours`, `niveau`, `matricule`, `anneeUniv`, `titreOriginal`, `diplomeAssorti`, `motif`, `slug`, `neVers`, `numBacc`, `sessionBacc`, `serieBacc`, `centreBacc`, `mentionBacc`, `numInscription`, `session`, `centre`, `numFormation`, `anneeFormation`, `centreFormation`, `numCandidat`, `centreExam`, `anneeExam`, `motifErreur`) VALUES
(75, '2024-03-15 00:06:56', '2024-03-15 00:06:59', 'SLA', 'SQFDQ', '2024-03-14', 'Anosivelo', 'dfkdsfeike2456', 345457489, 201847938497, '2024-03-14', 'Fianarantsoa', 'photocopieCni/iVhTaOrdM3m8G9F37HtSX0XPIuA1Hap1NyMRYJQr.png', 'Ecole Nationale d\'Informatique', 'Sciences de l\'ingénieur', 'Gestion Base de Donnée', 'Licence 2', '11H9934', 2013, 'titreOriginal/JPWMMoYxngJRJLVI62OR8wXhoMb1opJr65MDi7u5.png', NULL, 'Concours INSTAT', 'sla14032024074648', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Photocopie cni non certifié'),
(76, '2024-03-15 00:08:47', '2024-03-15 00:08:51', 'ELEONOER', 'Princia', '2024-03-14', 'Farafangana', 'Lot IB 008 Farafangana', 321589475, 201011027867, '2024-03-14', 'Fianarantsoa', 'photocopieCni/xRVSnVWmV66YTMQzcGG9yDHMKYRW72y1OJqcWLAu.png', NULL, NULL, NULL, 'BACC', NULL, NULL, 'titreOriginal/G01ULAPaHQH7w1nqxKSajQMK5pgTLepSldZVx42Q.png', NULL, 'Demande d\'emploi', 'eleonoer14032024095255', NULL, '4500643', 2017, 'D', 'SFX Ambatomena Fianarantsoa', 'Bien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Photocopie cni non certifié'),
(77, '2024-03-15 00:09:39', '2024-03-15 00:09:44', 'LEZAVA', 'fLORENT', '2024-03-14', 'Farafangana', 'Loharano Nosy Varika', 323213197, 307320478932, '2024-03-14', 'Ikongo', 'photocopieCni/xwHGL6t6wXuzvVSwQZWBhkAaAp61ej1BvP695dpc.png', NULL, NULL, NULL, 'CRINFP', NULL, NULL, 'titreOriginal/KFAVyVWSaV0e2pbtZmFeQAGx8R9HM6WoEd9MuynX.png', 'diplomeAssorti/VcZDcxS90YFpx0A5v0RtXSkBahGcTBiKJTRNmq0n.png', 'Demande d\'emploi', 'lezava14032024111126', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '232FFE', 2016, 'Fianarantsoa', NULL, NULL, NULL, 'dfqsf55'),
(78, '2024-03-15 00:10:38', '2024-03-15 00:10:41', 'ASTON', 'Martin', '2024-03-14', 'Loharano', 'Lot IB 008 Farafangana', 344595785, 202094785934, '2024-03-14', 'Ambatofinandrahana', 'photocopieCni/IyfYaC2WikMhaOmK1TYQjCLzGU2gmigv3WvJEDJe.png', NULL, NULL, NULL, 'CEPE', NULL, NULL, 'titreOriginal/25cYMx326kBA8gwNN8qQd0qAMl6KYSOvDOgeWNo8.png', NULL, 'Demande d\'emploi', 'aston14032024110316', NULL, NULL, NULL, NULL, NULL, NULL, '2343242DDF', 2015, 'Ceg Rak Al', NULL, NULL, NULL, NULL, NULL, NULL, 'Photocopie cni non certifié'),
(79, '2024-03-15 00:12:36', '2024-03-15 00:12:39', 'SAKA ASRIA', 'Tovondrainy Fulgence', '2024-03-14', 'Mahabo Mananivo', 'lot 77 Ville Haute', 334545695, 501085948594, '2024-03-14', 'Toliara', 'photocopieCni/LdKQJPRNPnGZW1xVobvite8A2QrqDIglew1eJLxi.png', NULL, NULL, NULL, 'DELF B1', NULL, NULL, 'titreOriginal/CxhUzFZV6zlgrYQLjluxI1gAoBT2alqavwmVJV73.png', NULL, 'Concours IMATEP', 'saka-asria14032024110837', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3242234-DJFIE', 'FIANARA', 2012, '454fsd'),
(80, '2024-03-16 20:26:38', '2024-03-16 20:27:55', 'JOSE', 'Arivelo', '2024-03-14', 'Loharano', 'aMPTSIA', 323231235, 201011027870, '2024-03-14', 'Toliara', 'photocopieCni/0zKA1N6a5CsgHsu7yFvYDqYtu7SxbA7G9wQA8D1a.png', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences et Technologie', 'Développement Application Informatique', 'Master 2', '26564HIE', 2015, 'titreOriginal/pVYteytrA4GZclhEbKclaIwbTng6Ux84oHofGet6.png', NULL, 'Demande d\'emploi', 'jose14032024052403', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Incompatibilité nom demandeur et nom sur le diplôme'),
(81, '2024-03-16 21:14:16', '2024-03-16 21:14:27', 'eabrabjrz', 'sa', '2024-03-18', 'Fianarantsoa', 'lot 77 Ville Haute', 343543765, 201011027870, '2024-03-05', 'Fianarantsoa', 'photocopieCni/uCQLsjIv1h2jdDHbKTWPSNzmfKLOVwiEQBTJwpPS.png', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences et Technologie', 'Gestion Base de Donnée', 'Licence 3', '26564HIE', 1995, 'titreOriginal/fcVsgIRs5vAegH70S3qWWuHNHosgIhXr06WaPZ9H.png', NULL, 'Demande d\'emploi', 'eabrabjrz17032024121304', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Photocopie cni non certifié'),
(82, '2024-03-16 21:22:57', '2024-03-16 21:23:07', 'Raoto', 'Tahina', '2024-03-14', 'Anosivelo', 'Lot IB 008 Farafangana', 348979212, 202049832894, '2024-03-14', 'Ambatofinandrahana', 'photocopieCni/aJ7OqgrhfNCGa1Rv7DsxXFjJnb7P4hEQm0INrGDE.png', 'Institut de Formation Technique', 'Sciences de l\'ingénieur', 'Informatique Général', 'Licence 3', '290HFE22', 2017, 'titreOriginal/ty0k2YvFFwp3sPE8wE1rItIKPWx3dwB4fL8zig3q.png', NULL, 'Concours IMATEP', 'raoto14032024074923', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Photocopie cni non certifié');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_04_114947_create_demandes_table', 2),
(6, '2024_01_16_082911_create_demandes_table', 3),
(7, '2024_01_25_123003_create_errors_table', 4),
(8, '2024_01_27_143130_add_slug_to_demandes', 5),
(9, '2024_01_27_204714_create_admis_table', 6),
(10, '2024_01_28_231736_create_terminer_table', 7),
(11, '2024_01_28_233238_create_terminer_demande_table', 8),
(12, '2024_01_29_071422_rename_table_terminer_demande_to_terminer_demandes', 9),
(13, '2024_01_29_181421_create_terminers_table', 10),
(14, '2024_03_15_080038_create_admisbaccs_table', 11),
(15, '2024_03_15_081739_create_admiscolleges_table', 12),
(16, '2024_03_15_083602_create_admiscrinfps_table', 13),
(17, '2024_03_15_085005_create_admislangues_table', 14);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `terminers`
--

CREATE TABLE `terminers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(255) NOT NULL,
  `universite` varchar(255) DEFAULT NULL,
  `mention` varchar(255) DEFAULT NULL,
  `parcours` varchar(255) DEFAULT NULL,
  `niveau` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `neVers` year(4) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `numPhone` bigint(20) NOT NULL,
  `cni` bigint(20) NOT NULL,
  `dateDelivrance` date NOT NULL,
  `lieuDelivrance` varchar(255) NOT NULL,
  `photocopieCni` varchar(255) NOT NULL,
  `titreOriginal` varchar(255) NOT NULL,
  `anneeUniv` year(4) DEFAULT NULL,
  `numBacc` varchar(255) DEFAULT NULL,
  `sessionBacc` year(4) DEFAULT NULL,
  `mentionBacc` varchar(255) DEFAULT NULL,
  `centreBacc` varchar(255) DEFAULT NULL,
  `serieBacc` varchar(255) DEFAULT NULL,
  `numInscription` varchar(255) DEFAULT NULL,
  `anneeFormation` year(4) DEFAULT NULL,
  `centreFormation` varchar(255) DEFAULT NULL,
  `numCandidat` varchar(255) DEFAULT NULL,
  `centre` varchar(255) DEFAULT NULL,
  `numFormation` varchar(255) DEFAULT NULL,
  `session` year(4) DEFAULT NULL,
  `centreExam` varchar(255) DEFAULT NULL,
  `anneeExam` year(4) DEFAULT NULL,
  `diplomeAssorti` varchar(255) DEFAULT NULL,
  `motif` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `terminers`
--

INSERT INTO `terminers` (`id`, `matricule`, `firstName`, `lastName`, `dateNaissance`, `lieuNaissance`, `universite`, `mention`, `parcours`, `niveau`, `created_at`, `updated_at`, `neVers`, `adresse`, `numPhone`, `cni`, `dateDelivrance`, `lieuDelivrance`, `photocopieCni`, `titreOriginal`, `anneeUniv`, `numBacc`, `sessionBacc`, `mentionBacc`, `centreBacc`, `serieBacc`, `numInscription`, `anneeFormation`, `centreFormation`, `numCandidat`, `centre`, `numFormation`, `session`, `centreExam`, `anneeExam`, `diplomeAssorti`, `motif`, `slug`) VALUES
(11, '6', 'ANJARASOA', 'FANOMEZANA', '1994-06-05', 'Farafangana', 'Ecole Nationale d\'Informatique', 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 3', '2024-03-17 05:27:15', '2024-03-17 05:27:15', NULL, 'Lot IB 008 Farafangana', 325745469, 201011027388, '2014-02-17', 'Fianarantsoa', 'photocopieCni/vVlR2W9MjOGNnCGn7obF2g1SmoVGC9IbQva6rCsj.png', 'titreOriginal/8ZhMxoAWXxMXtHZ5CW7eAA9DlXSXXE4weDp8byGC.png', 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Demande d\'emploi', 'anjarasoa17032024081744'),
(12, '11', 'FANOMEZANA', 'Njarasoa Muruella Joyce', '1994-06-05', 'Efatsy', 'Ecole Nationale d\'Informatique', 'Sciences de l\'ingénieur', 'Systèmes et Réseaux', 'Licence 2', '2024-03-17 05:28:53', '2024-03-17 05:28:53', NULL, 'lot 77 Ville Haute', 345789579, 201011038354, '1994-11-16', 'Fianarantsoa', 'photocopieCni/JMy3pzOVzpE4aiUZHdM4unfLoYocbfW1kgsPjz4p.png', 'titreOriginal/GOPwSnKZZYjLXJqAMsB4iWsYAclKhUcpg1tmMGlJ.png', 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Demande d\'emploi', 'fanomezana17032024082138'),
(13, '1', 'RAVELOJAONA', 'Bertrand', '1992-05-26', 'Vondrozo', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Master 1', '2024-03-17 05:29:05', '2024-03-17 05:29:05', NULL, 'aMPTSIA', 345695860, 201011023894, '2012-06-27', 'Fianarantsoa', 'photocopieCni/V5czIXgBitFiIy38KNCsaUfIXVGtDjpKaWCFK7A7.png', 'titreOriginal/TA2vVmGdz4Nl22fJ0r9zbnUpFnOR15K5E64MSJ4h.png', 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Demande d\'emploi', 'ravelojaona17032024082437'),
(14, '3', 'RANDRIANAMPIANINA', 'Mariot Kennely', '1987-07-23', 'Farafangana', 'Ecole de Management et de l\'Innovation Technologique', 'Sciences de l\'ingénieur', 'Développement Application Informatique', 'Master 2', '2024-03-17 05:29:17', '2024-03-17 05:29:17', NULL, 'Lot IB 008 Farafangana', 327594950, 501927897589, '2006-01-18', 'Toliara', 'photocopieCni/ZVyHVgiUItvPN8MBj4nLorsJ0NK9fmEuptTnGvhr.png', 'titreOriginal/tBSh61SfS3hwPLCaawLHABpebg5DlGVD1ZYqOaq8.png', 2020, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Demande d\'emploi', 'randrianampianina17032024082638'),
(15, NULL, 'RANDRIANIRINA', 'Feno Fitiavana', '1993-01-21', 'Fianarantsoa', NULL, NULL, NULL, 'BEPC', '2024-03-17 12:47:26', '2024-03-17 12:47:26', NULL, 'lot IR 77 Ville Haute', 334785786, 201011027879, '2013-02-06', 'Fianarantsoa', 'photocopieCni/26EOZOFZ8zSpor5kofqby2Fn9PQfKZwbJlCCir03.png', 'titreOriginal/2nqn2FmTKWXO6CnifavfYFlzitfHtF114rsRMBzQ.png', NULL, NULL, NULL, NULL, NULL, NULL, '141LR/00342', NULL, NULL, NULL, 'Fianarantsoa', NULL, 2010, NULL, NULL, NULL, 'Demande d\'emploi', 'randrianirina16032024083105');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Fanirina', 'fanirina@test.mg', NULL, '$2y$12$kJf4AcMN93hcphtx2ximCecUpGECy8Nq3VILSa9idvVlwLSD1YVTq', NULL, '2024-01-19 13:10:56', '2024-01-19 13:10:56'),
(5, 'SALA', 'test@test.mg', NULL, '$2y$12$ZdLXJqWvAZuXB2dfwY2QluV.7hMkBc2irSoccAlEx2MAwQ9sRJsuq', NULL, '2024-01-19 13:12:32', '2024-01-19 13:12:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admis`
--
ALTER TABLE `admis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admisbaccs`
--
ALTER TABLE `admisbaccs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admiscolleges`
--
ALTER TABLE `admiscolleges`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admiscrinfps`
--
ALTER TABLE `admiscrinfps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admislangues`
--
ALTER TABLE `admislangues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `terminers`
--
ALTER TABLE `terminers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admis`
--
ALTER TABLE `admis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `admisbaccs`
--
ALTER TABLE `admisbaccs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `admiscolleges`
--
ALTER TABLE `admiscolleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `admiscrinfps`
--
ALTER TABLE `admiscrinfps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `admislangues`
--
ALTER TABLE `admislangues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `errors`
--
ALTER TABLE `errors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `terminers`
--
ALTER TABLE `terminers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
