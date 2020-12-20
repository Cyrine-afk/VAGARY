-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 déc. 2020 à 17:09
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vagary`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(12) NOT NULL,
  `vote_avis` int(250) NOT NULL,
  `text_avis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(12) NOT NULL,
  `nbr_bus` int(250) NOT NULL,
  `nbr_place_bus` int(250) NOT NULL,
  `date_depart_bus` date NOT NULL,
  `date_arriver_bus` date NOT NULL,
  `destination_bus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `carte_fidelite`
--

CREATE TABLE `carte_fidelite` (
  `id_fid` int(12) NOT NULL,
  `nbr_pts_fid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(12) NOT NULL,
  `nom_client` varchar(50) CHARACTER SET latin1 NOT NULL,
  `penom_client` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date_nai_client` date NOT NULL,
  `mail_client` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_ajout_client` date NOT NULL,
  `mdp_client` varchar(150) CHARACTER SET latin1 NOT NULL,
  `login_client` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_comd` int(12) NOT NULL,
  `date_achat_comd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `communaute`
--

CREATE TABLE `communaute` (
  `id_com` int(12) NOT NULL,
  `nom_com` varchar(150) NOT NULL,
  `nbr_ab_com` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event_com` int(12) NOT NULL,
  `theme_event_com` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(12) NOT NULL,
  `nom_hotel` varchar(150) NOT NULL,
  `nbr_etoile_hotel` int(150) NOT NULL,
  `nbr_chambre_max` int(250) NOT NULL,
  `nbr_chambre_dispo` int(250) NOT NULL,
  `prix_nuite` float NOT NULL,
  `region_hotel` varchar(250) NOT NULL,
  `img_hotel` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `influenceur`
--

CREATE TABLE `influenceur` (
  `id_inf` int(12) NOT NULL,
  `nom_inf` varchar(150) NOT NULL,
  `prenom_inf` varchar(150) NOT NULL,
  `date_ajout_inf` date NOT NULL,
  `bio_inf` text NOT NULL,
  `img_inf` varchar(250) NOT NULL,
  `nbr_ab_inf` int(250) NOT NULL,
  `fb_inf` varchar(250) NOT NULL,
  `insta_inf` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `interet`
--

CREATE TABLE `interet` (
  `id_interet` int(12) NOT NULL,
  `text_interet` varchar(150) NOT NULL,
  `img_interet` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(12) NOT NULL,
  `date_panier` date NOT NULL,
  `etat_panier` varchar(150) NOT NULL,
  `prix_tot_panier` float NOT NULL,
  `nbr_prod_panier` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(12) NOT NULL,
  `nom_prod` varchar(150) NOT NULL,
  `prix_prod` float NOT NULL,
  `img_prod` varchar(250) NOT NULL,
  `categorie_prod` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tripinf`
--

CREATE TABLE `tripinf` (
  `id_tripinf` int(12) NOT NULL,
  `theme_tripinf` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id__type` int(12) NOT NULL,
  `nom_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vans`
--

CREATE TABLE `vans` (
  `id_vans` int(12) NOT NULL,
  `date_location` date NOT NULL,
  `duree_location` int(250) NOT NULL,
  `prix_location` float NOT NULL,
  `prix_jour` float NOT NULL,
  `etat_vans` tinyint(1) NOT NULL,
  `nbr_vans` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vole`
--

CREATE TABLE `vole` (
  `id_vole` int(12) NOT NULL,
  `date_vole` date NOT NULL,
  `depart_vole` date NOT NULL,
  `destination_vole` varchar(250) NOT NULL,
  `prix_vole` float NOT NULL,
  `nbr_max_vole` int(250) NOT NULL,
  `nbr_dispo_vole` int(250) NOT NULL,
  `type_vole` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `id_voy` int(12) NOT NULL,
  `nom_voy` varchar(150) NOT NULL,
  `date_voy` date NOT NULL,
  `nbr_perso_voy` int(250) NOT NULL,
  `destination_voy` varchar(250) NOT NULL,
  `duree_voy` date NOT NULL,
  `img_voy` varchar(250) NOT NULL,
  `planning_voy` text NOT NULL,
  `prix_voy` float NOT NULL,
  `categorie_voy` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Index pour la table `carte_fidelite`
--
ALTER TABLE `carte_fidelite`
  ADD PRIMARY KEY (`id_fid`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_comd`);

--
-- Index pour la table `communaute`
--
ALTER TABLE `communaute`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event_com`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Index pour la table `influenceur`
--
ALTER TABLE `influenceur`
  ADD PRIMARY KEY (`id_inf`);

--
-- Index pour la table `interet`
--
ALTER TABLE `interet`
  ADD PRIMARY KEY (`id_interet`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`);

--
-- Index pour la table `tripinf`
--
ALTER TABLE `tripinf`
  ADD PRIMARY KEY (`id_tripinf`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id__type`);

--
-- Index pour la table `vans`
--
ALTER TABLE `vans`
  ADD PRIMARY KEY (`id_vans`);

--
-- Index pour la table `vole`
--
ALTER TABLE `vole`
  ADD PRIMARY KEY (`id_vole`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id_voy`),
  ADD KEY `fk_tripinf` (`categorie_voy`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `carte_fidelite`
--
ALTER TABLE `carte_fidelite`
  MODIFY `id_fid` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_comd` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `communaute`
--
ALTER TABLE `communaute`
  MODIFY `id_com` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event_com` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `influenceur`
--
ALTER TABLE `influenceur`
  MODIFY `id_inf` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interet`
--
ALTER TABLE `interet`
  MODIFY `id_interet` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tripinf`
--
ALTER TABLE `tripinf`
  MODIFY `id_tripinf` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id__type` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vans`
--
ALTER TABLE `vans`
  MODIFY `id_vans` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vole`
--
ALTER TABLE `vole`
  MODIFY `id_vole` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id_voy` int(12) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD CONSTRAINT `fk_event` FOREIGN KEY (`categorie_voy`) REFERENCES `event` (`id_event_com`),
  ADD CONSTRAINT `fk_tripinf` FOREIGN KEY (`categorie_voy`) REFERENCES `tripinf` (`id_tripinf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
