-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 déc. 2020 à 09:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_disponible_Debut` datetime NOT NULL,
  `date_disponible_Fin` datetime NOT NULL,
  `nbr_places` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `image`, `lieu`, `description`, `date_disponible_Debut`, `date_disponible_Fin`, `nbr_places`, `nom`) VALUES
(9, 'hotel.jpg', 'sqdqsd', 'qsqdssd', '2020-12-24 19:59:00', '2020-12-30 19:59:00', 3, 'aa'),
(8, 'hotel.jpg', 'tunis', 'Hotelllllww', '2020-12-23 13:48:00', '2020-12-29 13:48:00', 44, 'mouradi');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_hotel_user`
--

DROP TABLE IF EXISTS `reservation_hotel_user`;
CREATE TABLE IF NOT EXISTS `reservation_hotel_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_User` int(11) NOT NULL,
  `id_Hotel` int(11) NOT NULL,
  `date_Debut` datetime NOT NULL,
  `date_Fin` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`id_User`),
  KEY `fk_hotel_id` (`id_Hotel`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_hotel_user`
--

INSERT INTO `reservation_hotel_user` (`id`, `id_User`, `id_Hotel`, `date_Debut`, `date_Fin`) VALUES
(10, 2, 3, '2020-12-22 12:42:00', '2020-12-22 12:50:00'),
(8, 2, 4, '2020-12-22 22:25:00', '2020-12-30 22:25:00'),
(13, 2, 8, '2020-12-25 18:14:00', '2020-12-26 18:14:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_vol_user`
--

DROP TABLE IF EXISTS `reservation_vol_user`;
CREATE TABLE IF NOT EXISTS `reservation_vol_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_User` int(11) NOT NULL,
  `date_Achat` datetime NOT NULL,
  `id_Vol` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`id_User`),
  KEY `fk_vol_id` (`id_Vol`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_vol_user`
--

INSERT INTO `reservation_vol_user` (`id`, `id_User`, `date_Achat`, `id_Vol`) VALUES
(6, 2, '2020-12-22 11:43:12', 3),
(7, 2, '2020-12-22 11:43:17', 3),
(19, 2, '2020-12-24 17:15:04', 8);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `mdp`, `role`, `username`) VALUES
(1, 'admin', 'admin', 'admin@esprit.tn', '123456789', 'role_admin', 'admin'),
(2, 'user', 'user', 'user@esprit.tn', '123456789', 'role_user', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_heur_disponible` datetime NOT NULL,
  `nbr_places` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id`, `date_heur_disponible`, `nbr_places`, `depart`, `destination`, `prix`) VALUES
(7, '2020-12-26 13:50:00', 70, 'tunis  ', 'france  ', 90),
(8, '2020-12-25 12:20:00', 649, 'qscqsc', 'qcscsq', 50),
(9, '2020-12-25 18:10:00', 60, 'zdazd', 'dzazad', 50),
(10, '2020-12-27 18:10:00', 60, 'qzdsqsd', 'azdzda', 60),
(11, '2020-12-25 12:30:00', 50, 'zadzad', 'zadzad', 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
