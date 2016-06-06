-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Avril 2016 à 00:33
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lost`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timescore` int(11) DEFAULT NULL,
  `starsscore` int(11) DEFAULT NULL,
  `badge1` int(11) DEFAULT NULL,
  `badge2` tinyint(1) DEFAULT NULL,
  `badge3` tinyint(1) DEFAULT NULL,
  `badge4` tinyint(1) DEFAULT NULL,
  `badge5` tinyint(1) DEFAULT NULL,
  `badge6` tinyint(1) DEFAULT NULL,
  `badge7` tinyint(1) DEFAULT NULL,
  `badge8` tinyint(1) DEFAULT NULL,
  `badge9` tinyint(1) DEFAULT NULL,
  `badge10` tinyint(1) DEFAULT NULL,
  `globalscore` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `timescore`, `starsscore`, `badge1`, `badge2`, `badge3`, `badge4`, `badge5`, `badge6`, `badge7`, `badge8`, `badge9`, `badge10`, `globalscore`) VALUES
(6, 'Alex', 'alexandrevagnair1@gmail.com', '$2y$10$Tug3g0AIrQsxeNplrLCpVOVDLU2bSaHbFtzdbf2ZxTqQPi5kfFvoq', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Yann', 'dieu@paradis.com', '$2y$10$SJQcHEEzD1mw.MwYGA7Y6ejcMLlKTvF.lECRYGwgmwANmD5weBgtS', 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'jojoleguerreor', 'jojo@gmail.com', '$2y$10$f8a4PmAyTBr5cXc0/MamJ.AD.jGGkRW461FdPuiVMNtdcGmLx/iWO', 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'biatch', 'bi@hgmail.com', '$2y$10$m19Jl.eYhTmjNlt9aZUY6.kfw8b.ZSk0NjJC8CM2HAGmY2ZqdB.da', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'lol', 'lol@lo.fr', '$2y$10$ocElVagmLO.x50V40ebqM.bYjJtFa103.r/jkBworykr0AMifDpC2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'test', 'test@tet.com', '$2y$10$nJcC6Ro3TruBCer9fyjd4O1rWiVF0m5FTGk9aYapRbUqR1qfvvQoe', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'ola', 'ola@test.com', '$2y$10$J2NCvQvWxhvGGpQ8B/wEG.gCMP0VLEmTHB3JvWB1iBK175h4gZyXi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'ola2', 'ola2@test.com', '$2y$10$8sqsTvClK6MkglRE3QgrB.ufWJZjWP.3g7ItmXY0T0Lqb7kKnZx/.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'totor', 'totor@gmail.com', '$2y$10$7i2LTx/8jwQ5/3BtGGOLgeX0qIWdcEsVT.tnxuo7Zf5UiYtHHLdli', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'al', 'al@gmail.com', '$2y$10$wdL/bi2EE1ee8mfT2APsi.FZU1j2DxCslgUqqFCDsJvqm19/azDMG', 0, 989, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'yolo', 'yolo@gmail.com', '$2y$10$Sf3N63IMpEiUH6GpBSbSXO2FpnfgNVALQdQ6UV52D8P3rP2Xm.ERa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'yoloo', 'yoloo@gmail.com', '$2y$10$2eP3WfwMyX4C9tf85Os/GOolV0lYsxeLb0sGsC.wkvqMPd7IcbKyK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'test3', 'test3@test.com', '$2y$10$VbZT6BWvqsHhtvCtL713Z.grfK8t/L8EM8WeaATTfsRPmV1YG4HhO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 'victor', 'vico@gmail.com', '$2y$10$jVyLPik1ZULia4vSEGz99Oov.mWXSLT9EEgwGRm8wrOZpQu6wQBAq', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 'victor2', 'gvrer@gmggm.com', '$2y$10$Q3WZl5bIwHTboKhpttzqv.wrO1Ld18wcUw4kvYkVL/W3CsLeyaupW', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'hol', 'hol@g.com', '$2y$10$rQB9firpaiviLgt0d5BG9O2/pLIW7NSujMxR0niGEWLJESE0Zkcsq', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'lolo', 'lolo@gmail.com', '$2y$10$l5ffD3IMtlV5GtfyjKNDc.IB4L5VfqPRGT6hUmXN1f3T6gNfVi33W', 0, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'chalala', 'c@gmail.com', '$2y$10$1HE43Lg1AuvI00QT5xd3FuWS7bm1pXPhO1moow/7fX03wxdPIZG.O', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'b', 'b@g.com', '$2y$10$jL0oEVaWKf3qy.iGsO59ruliB.GaC05zW701ZDdQjAi6h1fKW3yJG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 'koko', 'koko@gmail.com', '$2y$10$4odwUXFRtiu0zB96xQtJE.hZzIAI.pkscd.keH9jSDbkwajL0EaqS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 'koko2', 'koko2@gmail.com', '$2y$10$kYHEdp03J/4/6xnGWhyKeeAdxGrrk4HAb7ZJQiEdPt6Q8Sk1vhKEi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'jiji', 'jiji@ji.com', '$2y$10$Q9FZQafMInOQ7ynQ7xCs/uxpC5lkxmtd.DEnCIgku.ymF6fvLUgcK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 'hh', 'h@g.com', '$2y$10$08zQxYe5a8RPo6K7du7TlOuJMwz48cz0y7HUHwX1AnxfE48y8Zaf2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 'jojolatortue', 'jo@gmail.com', '$2y$10$7CTLCXE3jrfT.E8XYaXW2.EI1sK6lHs82Lc0.F3mb/XisowckDZ4u', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 'azer', 'az@az.z', '$2y$10$pIHI1pCCSUPKNG1Yi5g/Sei8uIOp4cLjzibZpCif4nkI09ut/afSu', 6, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5336);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
