-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 jan. 2021 à 20:11
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
  `ID` int(12) NOT NULL,
  `NOM` varchar(250) NOT NULL,
  `TEXT` varchar(250) NOT NULL,
  `DATEE` date NOT NULL,
  `IDP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`ID`, `NOM`, `TEXT`, `DATEE`, `IDP`) VALUES
(4, 'dfedfgrgtr', 'ygf', '2020-12-12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `aviscom`
--

CREATE TABLE `aviscom` (
  `id_avis` int(12) NOT NULL,
  `text_avis` text NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `aviscom`
--

INSERT INTO `aviscom` (`id_avis`, `text_avis`, `client`) VALUES
(2, 'khgkjhkjhk', 1),
(3, 'aaaaaabbbbbbb', 1),
(4, 'qdfqsdqsdqdspppppppp', 1),
(6, 'klkhjljhljhl', 2),
(8, 'aaaa', 15963248),
(9, 'Good ', 13191723),
(10, 'yes', 13013472);

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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `date_nai_client` date NOT NULL,
  `mail_client` varchar(100) NOT NULL,
  `date_ajout_client` date NOT NULL,
  `mdp_client` varchar(150) NOT NULL,
  `login_client` varchar(150) NOT NULL,
  `img_client` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `date_nai_client`, `mail_client`, `date_ajout_client`, `mdp_client`, `login_client`, `img_client`, `role`) VALUES
(13191723, 'meriemnour', 'ghozzi', '2000-01-12', 'meriemnour.ghozzi@esprit.tn', '2021-01-05', 'meriem23', 'meriem19', 'meriem.jpg', 'client'),
(15015023, 'cyrine', 'trabelsi', '2000-02-10', 'cyrine.trabelsi@esprit.tn', '2021-01-05', 'cyrine17', 'cyrine17', 'cyrine.jpg', 'client'),
(11111111, 'vagary', 'admin', '2000-01-01', 'admin@gmail.com', '2021-01-05', 'vagary', 'admin', 'v2.png', 'admin'),
(13013472, 'aziz', 'khemira ', '1997-10-10', 'mohamedaziz.khemira@esprit.tn', '2021-01-05', 'saligia2313', 'aziz13', 'aziz.jpeg', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `client_follow_inf`
--

CREATE TABLE `client_follow_inf` (
  `id_follow` int(12) NOT NULL,
  `id_client` int(12) NOT NULL,
  `id_inf` int(12) NOT NULL,
  `date_follow` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client_follow_inf`
--

INSERT INTO `client_follow_inf` (`id_follow`, `id_client`, `id_inf`, `date_follow`) VALUES
(87, 99999999, 16, '2020-12-27'),
(97, 15963248, 16, '2020-12-29'),
(98, 13013472, 16, '2021-01-06'),
(100, 13013472, 18, '2021-01-06'),
(101, 13013472, 23, '2021-01-06'),
(102, 15015023, 19, '2021-01-06'),
(103, 13191723, 24, '2021-01-06'),
(105, 13191723, 16, '2021-01-06');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_comd` int(12) NOT NULL,
  `date_achat_comd` date NOT NULL,
  `prix_total` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `id_prod` varchar(50) NOT NULL,
  `paiment` varchar(50) NOT NULL,
  `id_client` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_comd`, `date_achat_comd`, `prix_total`, `quantity`, `id_prod`, `paiment`, `id_client`) VALUES
(160, '2021-01-06', '100', '12', '3', 'non paye', '13013472'),
(161, '2021-01-06', '100', '2', '3', 'non paye', '13013472'),
(162, '2021-01-06', '100', '2', '3', 'non paye', '13013472'),
(163, '2021-01-06', '100', '', '3', 'non paye', '13013472'),
(164, '2021-01-06', '50', '', '5', 'non paye', '13191723'),
(165, '2021-01-06', '50', '2', '5', 'non paye', '13013472'),
(166, '2021-01-06', '50', '2', '5', 'non paye', '13013472');

-- --------------------------------------------------------

--
-- Structure de la table `communaute`
--

CREATE TABLE `communaute` (
  `id_com` int(12) NOT NULL,
  `nom_com` varchar(150) NOT NULL,
  `nbr_ab_com` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `communaute`
--

INSERT INTO `communaute` (`id_com`, `nom_com`, `nbr_ab_com`) VALUES
(9, 'camping', 3),
(10, 'art', 7),
(13, 'anime', 60);

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
-- Structure de la table `fidelite`
--

CREATE TABLE `fidelite` (
  `id_fidelite` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fidelite`
--

INSERT INTO `fidelite` (`id_fidelite`, `id_client`, `points`) VALUES
(20, 13191723, 10),
(19, 15015023, 40),
(18, 13013472, 30);

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_disponible_Debut` datetime NOT NULL,
  `date_disponible_Fin` datetime NOT NULL,
  `nbr_places` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `image`, `lieu`, `description`, `date_disponible_Debut`, `date_disponible_Fin`, `nbr_places`, `nom`) VALUES
(14, 'Vincci Helios Beach.jpg', 'djerda', 'This all-inclusive Vincci hotel is located on the west coast of \r\nthe island of Djerba, in southern Tunisia.', '2021-01-24 14:40:00', '2021-01-31 14:40:00', 49, 'Vincci Helios Beach'),
(15, 'djerba plaza thalassi and spa.jpg', 'djerba', 'Renovated in 2014 and located in Midoun, the Djerba Plaza Thalasso & Spa establishment\r\nbenefits from 2 swimming pools and direct access to the beach.\r\n\r\n', '2021-02-01 14:42:00', '2021-02-10 14:42:00', 40, 'Djerba Plaza Thalasso & Spa'),
(13, 'mouradi.jpg', 'gammarth', 'El Mouradi is an all-inclusive hotel with large indoor and outdoor pools.\r\n It is located a short walk from the beach.', '2021-01-10 14:35:00', '2021-01-23 14:35:00', 49, 'mouradi '),
(16, 'Royal Karthago.jpg', 'midoun', 'With a bar, restaurant and seasonal outdoor swimming pool,\r\n Royal Karthago is located in Midoun, 2.1 km from Aghir Beach.\r\n Private parking is available free.\r\n', '2021-02-14 14:44:00', '2021-02-20 14:44:00', 45, 'royal karthago'),
(17, 'lberostar selection royal el mansour.jpg', 'mahdia', 'Located in Mahdia, near the beaches of the Mediterranean Sea, the Iberostar Selection Royal El Mansour hotel offers an outdoor swimming pool,\r\n a thalassotherapy center as well as 5 rooms and suites ... The staff is very friendly, pleasant and available. ', '2021-01-08 14:47:00', '2021-01-23 14:47:00', 100, 'Iberostar Selection Royal El Mansour '),
(18, 'Iberostar Averroes.jpg', 'yasmine hammamet', '8 km from the seafront center\r\nIberostar Averroes is a beachfront resort located in Yasmine Hammamet, on the Tunisian coast, 600 meters from Carthageland Amusement Park.\r\n', '2021-01-17 14:52:00', '2021-01-30 14:52:00', 20, 'Iberostar Averroes'),
(19, 'alhambara talasso.jpg', 'yasmine hammamet', '9 km from downtown\r\nThe Alhambra Thalasso is located in the seaside resort of Yasmine Hammamet, 300 meters from the beach.', '2021-01-17 14:53:00', '2021-01-24 14:53:00', 60, '  Alhambra Thalasso');

-- --------------------------------------------------------

--
-- Structure de la table `images_tripinf`
--

CREATE TABLE `images_tripinf` (
  `id_img` int(11) NOT NULL,
  `id_voy` int(11) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `img5` varchar(250) NOT NULL,
  `img6` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images_tripinf`
--

INSERT INTO `images_tripinf` (`id_img`, `id_voy`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(7, 11, 'tokyo1.jpg', 'tokyo2.jpg', 'tokyo3.jpg', 'tokyo4.jpg', 'tokyo5.JPG', 'tokyo6.JPG'),
(8, 12, 'brazil1.jpg', 'brazil2.jpg', 'brazil3.jpg', 'brazil4.jpg', 'brazil5.jpg', 'brazil6.jpg');

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
  `feedback_inf` varchar(250) NOT NULL,
  `img_inf` varchar(250) NOT NULL,
  `nbr_ab_inf` int(250) NOT NULL,
  `fb_inf` varchar(250) NOT NULL,
  `insta_inf` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `influenceur`
--

INSERT INTO `influenceur` (`id_inf`, `nom_inf`, `prenom_inf`, `date_ajout_inf`, `bio_inf`, `feedback_inf`, `img_inf`, `nbr_ab_inf`, `fb_inf`, `insta_inf`) VALUES
(16, 'Yessine', 'Sondess', '2020-02-09', '🇪🇺🇹🇳سفير النوايا الحسنة للإتحاد الأوروبي في تونس\r\nHere to entertain & deliver young people\'s voices 🌠\r\nBusiness: Yassinesondes23@gmail.com', 'I love travelling with Vagary', 'yassine.jpg', 306, 'https://www.facebook.com/samy.chaffai', 'https://www.instagram.com/samy.chaffai/?hl=fr'),
(18, 'Samy', 'Chaffai', '2020-12-03', 'Is your life fucked up ? No worries, We\'ll cut it in the Editing. 🎬\r\n*Ti 3leh\'s Director and Editor\r\n*My 2nd YouTube Channel ⬇️\r\nwww.youtube.com/c/samychaffai', 'Join me on my journey with Vagary! It\'s going to be super fun !!', 'samy.jpg', 464, 'https://www.facebook.com/samy.chaffai', 'https://www.instagram.com/samy.chaffai/?hl=fr'),
(19, 'Balkis', 'Ksouri', '2020-11-05', 'Hellooo beautiful people, I love travelling and camping    North African\r\nⴰⵇⵚⴰⵖⴰⵎ\r\nYouTube : beki\'s world / kisam سامي و بكي\r\nرابط قناة اليوتيوب 👇\r\nyoutube.com/c/balkisksouri123', 'Spectacular website JOIN JOIN JOIN guys for amazing travel opportunities !!', 'balkiss.jpg', 699, 'https://fr-fr.facebook.com/public/Balkis-Ksouri', 'https://www.instagram.com/beki_ksri/?hl=fr'),
(20, 'Adil', 'Taouil', '2020-09-03', 'Hey friends! I am Adil from Morroco, I joined Vagary to get in touch with you and to enjoy the magnificent trips offered by this website  📍Morocco 🇲🇦\r\nYoutuber ⭐️ 1,4+ m subs ⭐️\r\nWinner of @officialsadeem 🏆 saison 3\r\nSon : @itsmelion\r\nFor business\r\n✉️ : ads.adiltaouil@gmail.com', 'Vagary has a revolutionary travel concept, its unique travel plans, suggestions and orientations are what make it as big as it is today! Don\'t hesitate to join me so that we could travel the world together guys <3', 'adil.jpg', 846, 'https://fr-fr.facebook.com/pages/category/Artist/Adil-Taouil-عادل-تاويل-1848532165464650/', 'https://www.instagram.com/adiltaouil/?hl=fr'),
(21, 'Hela Nesma', 'Meziou', '2020-11-13', 'How do you do ✨🤍\r\n📍Tunis\r\n🎭 Theater enthusiast 🃏\r\nBusiness email 📧:\r\nhelanesma@gmail.com', 'I came to Vgaray in hopes to get in touche with my fanbase, join me guys !       ', 'hela.jpg', 293, 'https://fr-fr.facebook.com/hela.meziou.9822', 'https://www.instagram.com/helameziou/?hl=fr'),
(22, 'Taher', 'Ben Fraj', '2020-12-09', 'Hey friends! I am Taher co-founder of Teenager\'Z, I joined Vagary to get in touch with you and to enjoy the magnificent trips offered by this website', 'Join me on my journey with Vagary! It\'s going to be super fun !!', 'taher.JPG', 620, 'https://www.facebook.com/tah.er.102/photos', 'https://www.instagram.com/teenagerzofficial/'),
(23, 'Somaya', 'Gamal', '2020-11-30', 'Somaya G 🌍 سمية جمال 🇾🇪𐩪𐩣𐩺𐩠\r\nفي رحلةِ استعادةٍ لذاكرتي الروحية وانعتاقٍ من ثُقلِ الألقاب.\r\n• أسافر، أطلب العلم وأكتب.\r\n• يستهويني 🎭🩰🎼\r\nلمتابعة المزيد\r\nsomayagamal.com \r\n Hellooo community !! Glad to see you all here', 'Spectacular website JOIN JOIN JOIN guys for amazing travel opportunities !!', 'somaya.JPG', 360, 'https://www.facebook.com/somayagee/', 'https://www.instagram.com/somayagee/?hl=fr'),
(24, 'Rabii', 'Ben Brahim', '2020-07-01', 'Hey friends! I am Rabii also know as The Dreamer, I joined Vagary to get in touch with you and to enjoy the magnificent trips offered by this website', 'Join me on my journey with Vagary! It\'s going to be super fun !!', 'rabii.jpg', 787, 'https://www.facebook.com/Rabii.Ben.Brahim', 'https://www.instagram.com/thedreamerwildandfree/?hl=fr'),
(27, 'Eskander', 'Boud', '2020-11-11', 'سوف اجعل استعمالك للهاتف و الحاسوب اكثر فعالية.\r\nمحتوى علمي تثقيفي.\r\n📱🧠     Hey friends! I am Eskander also know as khormologia, I joined Vagary to get in touch with you and to enjoy the magnificent trips offered by this website', 'Spectacular website JOIN JOIN JOIN guys for amazing travel opportunities !!', 'khormo.jpg', 695, 'https://www.facebook.com/Khormologia', 'https://z-p42.www.instagram.com/khormologiatn/?hl=ur');

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
-- Structure de la table `msg_client`
--

CREATE TABLE `msg_client` (
  `id_msg` int(12) NOT NULL,
  `msg` text NOT NULL,
  `id_client` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paiment`
--

CREATE TABLE `paiment` (
  `id` int(11) NOT NULL,
  `NameOnCard` varchar(50) NOT NULL,
  `CardNumber` varchar(50) NOT NULL,
  `ExpiryDate` varchar(50) NOT NULL,
  `CVV` varchar(50) NOT NULL,
  `ZIP` varchar(50) NOT NULL,
  `id_client` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `paiment`
--

INSERT INTO `paiment` (`id`, `NameOnCard`, `CardNumber`, `ExpiryDate`, `CVV`, `ZIP`, `id_client`) VALUES
(9, 'dfdf', 'dfdf', '22222-01-01', '222', '222', 0),
(10, 'TTTTT', '111', '1111-01-01', '112', '123', 0),
(11, 'Nourdine', '1251555', '2000-01-01', '123', '112', 0),
(12, 'jyjyj', '141414', '10101-01-01', '111', '111', 0),
(13, 'KKKK', '111214', '10020-01-01', '1234', '1224', 0),
(14, 'Mahmoud', '14211426', '0001-01-01', '012', '123', 0),
(15, 'mahhh', '12455851', '1010-01-01', '123', '123', 0),
(16, 'Karim', '8585858585', '101010-01-01', '1111', '1212', 0),
(17, 'Karim', '8585858585', '101010-01-01', '1111', '1212', 0),
(18, 'NAME', '881115', '0010-10-01', '10101', '1010', 0),
(19, 'Omar', '14415252', '1101-01-01', '123', '123', 0),
(20, 'Mohsen', '142424242', '10101-10-10', '123', '123', 0),
(31, 'Cyrine', '45961258', '2021-02-06', '159', '159', 13013472),
(32, '', '', '', '', '', 13191723),
(33, 'Cyrine', '865321', '2021-02-06', '159', '159', 13013472);

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

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_prod`, `prix_prod`, `img_prod`, `categorie_prod`) VALUES
(1, 'Tent', 70, 'tent.jpg', 'Camping'),
(3, 'Sac a dos', 30, 'sac.jpg', 'Clothes'),
(5, 'Camera', 50, 'camera.jpg', 'General travel'),
(6, 'Lampe', 12, 'lampe.jpg', 'Camping'),
(7, 'Camping matress', 100, 'matress.jpg', 'Camping'),
(9, 'Cooler', 40, 'cooler.jpg', 'Camping');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_hotel_user`
--

CREATE TABLE `reservation_hotel_user` (
  `id` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_Hotel` int(11) NOT NULL,
  `date_Debut` datetime NOT NULL,
  `date_Fin` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_hotel_user`
--

INSERT INTO `reservation_hotel_user` (`id`, `id_User`, `id_Hotel`, `date_Debut`, `date_Fin`) VALUES
(10, 2, 3, '2020-12-22 12:42:00', '2020-12-22 12:50:00'),
(8, 2, 4, '2020-12-22 22:25:00', '2020-12-30 22:25:00'),
(13, 2, 8, '2020-12-25 18:14:00', '2020-12-26 18:14:00'),
(14, 15963248, 8, '2021-12-24 13:48:00', '2021-12-29 13:36:00'),
(15, 13013472, 14, '2021-01-25 14:44:00', '2021-01-30 14:44:00'),
(16, 13191723, 13, '2021-01-11 14:40:00', '2021-01-22 14:20:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_vol_user`
--

CREATE TABLE `reservation_vol_user` (
  `id` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `date_Achat` datetime NOT NULL,
  `id_Vol` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_vol_user`
--

INSERT INTO `reservation_vol_user` (`id`, `id_User`, `date_Achat`, `id_Vol`) VALUES
(6, 2, '2020-12-22 11:43:12', 3),
(7, 2, '2020-12-22 11:43:17', 3),
(19, 2, '2020-12-24 17:15:04', 8),
(20, 15963248, '2021-01-01 20:44:14', 8),
(21, 13013472, '2021-01-06 15:25:57', 14),
(22, 13013472, '2021-01-06 15:29:37', 15),
(23, 13191723, '2021-01-06 18:32:43', 16);

-- --------------------------------------------------------

--
-- Structure de la table `tripinf`
--

CREATE TABLE `tripinf` (
  `id_voy` int(12) NOT NULL,
  `nom_voy` varchar(150) NOT NULL,
  `date_voy` date NOT NULL,
  `nbr_perso_voy` int(150) NOT NULL,
  `destination_voy` varchar(150) NOT NULL,
  `duree_voy` int(150) NOT NULL,
  `img_voy` varchar(150) NOT NULL,
  `planning_voy` text NOT NULL,
  `prix_voy` float NOT NULL,
  `nom_type` varchar(250) NOT NULL,
  `id_inf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tripinf`
--

INSERT INTO `tripinf` (`id_voy`, `nom_voy`, `date_voy`, `nbr_perso_voy`, `destination_voy`, `duree_voy`, `img_voy`, `planning_voy`, `prix_voy`, `nom_type`, `id_inf`) VALUES
(11, 'Together Cosplay!', '2021-04-09', 2, 'Tokyo', 5, 'tokyo.jpg', 'Visiting Tokyo is like measuring yourself against a megalopolis of nearly 14 million people. No worries, because the capital is, in fact, a mosaic of neighborhoods, each with its own unique soul. Each is easily visited on foot or by bike, and to get ', 1596, 'Anime & Cosplay', 16),
(12, 'yoga', '2021-02-12', 8, 'Brazil', 7, 'brazil.jpg', ' Between the local atmosphere, the culture and the sublime landscapes, I don\'t know what stood out to me the most. In any case, one thing is certain, Brazil is an unforgettable destination that knows how to amaze us in 1001 ways. Since this is a big country, it can be difficult to choose which places to visit, so I offer you an overview of the must-sees to discover during your trip to Brazil.\r\nIf you want to discover emblematic cities to be at the heart of Brazilian culture, head to Rio de Janeiro, Salvador de Bahia, São Paulo, Ouro Preto, Tiradentes, Recife and Olinda. Want to bask on heavenly beaches? Pull out your sarong and enjoy Florianopolis, the Costa Verde, Fernando De Noronha Archipelago and Jericoacoara. Finally, Brazil is a country where nature offers its wonders and you can see it by visiting the Iguaçu Falls, the Amazon, or the natural parks of Chapada Diamantina, Lençois Maranhenses and Pantanal.', 1960, 'Yoga & Nature', 16);

-- --------------------------------------------------------

--
-- Structure de la table `tripinfuser`
--

CREATE TABLE `tripinfuser` (
  `id_res` int(12) NOT NULL,
  `id_voy` int(12) NOT NULL,
  `id_client` int(12) NOT NULL,
  `id_inf` int(12) NOT NULL,
  `date_res` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tripinfuser`
--

INSERT INTO `tripinfuser` (`id_res`, `id_voy`, `id_client`, `id_inf`, `date_res`) VALUES
(33, 11, 99999999, 16, '2020-12-29'),
(36, 11, 12345676, 16, '2020-12-29'),
(37, 11, 15963248, 16, '2021-01-01'),
(46, 11, 15963248, 16, '2021-01-05'),
(50, 11, 13013472, 16, '2021-01-06'),
(54, 11, 15015023, 16, '2021-01-06'),
(57, 11, 13013472, 16, '2021-01-06');

-- --------------------------------------------------------

--
-- Structure de la table `typev`
--

CREATE TABLE `typev` (
  `id__type` int(12) NOT NULL,
  `nom_type` varchar(150) NOT NULL,
  `img_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `typev`
--

INSERT INTO `typev` (`id__type`, `nom_type`, `img_type`) VALUES
(1, 'Fashion', ''),
(3, 'Anime & Cosplay', ''),
(4, 'Art & Culture', ''),
(5, 'Gaming & Sports', ''),
(6, 'Nature & Well-being', ''),
(8, 'Adventure', ''),
(9, 'Yoga & Nature', ''),
(10, 'Culture', '');

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
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `id` int(11) NOT NULL,
  `date_heur_disponible` datetime NOT NULL,
  `nbr_places` int(11) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id`, `date_heur_disponible`, `nbr_places`, `depart`, `destination`, `prix`) VALUES
(7, '2020-12-26 13:50:00', 67, 'tunis  ', 'france  ', 90),
(15, '2021-01-07 14:59:00', 77, 'tunis', 'USA', 46),
(14, '2021-01-29 19:58:00', 3, 'tunis', 'USA', 45),
(13, '2021-01-01 14:11:00', 3, 'tunis', 'paris', 50),
(12, '2020-12-30 01:19:00', 0, 'tunis', 'USA', 900),
(16, '2021-01-21 06:01:00', 19, 'tunis', 'MILAN / ROME', 80);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `aviscom`
--
ALTER TABLE `aviscom`
  ADD PRIMARY KEY (`id_avis`),
  ADD KEY `donne_avis` (`client`);

--
-- Index pour la table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `client_follow_inf`
--
ALTER TABLE `client_follow_inf`
  ADD PRIMARY KEY (`id_follow`);

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
-- Index pour la table `fidelite`
--
ALTER TABLE `fidelite`
  ADD PRIMARY KEY (`id_fidelite`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images_tripinf`
--
ALTER TABLE `images_tripinf`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `fk_id_voy` (`id_voy`);

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
-- Index pour la table `msg_client`
--
ALTER TABLE `msg_client`
  ADD PRIMARY KEY (`id_msg`);

--
-- Index pour la table `paiment`
--
ALTER TABLE `paiment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`);

--
-- Index pour la table `reservation_hotel_user`
--
ALTER TABLE `reservation_hotel_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`id_User`),
  ADD KEY `fk_hotel_id` (`id_Hotel`);

--
-- Index pour la table `reservation_vol_user`
--
ALTER TABLE `reservation_vol_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`id_User`),
  ADD KEY `fk_vol_id` (`id_Vol`);

--
-- Index pour la table `tripinf`
--
ALTER TABLE `tripinf`
  ADD PRIMARY KEY (`id_voy`);

--
-- Index pour la table `tripinfuser`
--
ALTER TABLE `tripinfuser`
  ADD PRIMARY KEY (`id_res`);

--
-- Index pour la table `typev`
--
ALTER TABLE `typev`
  ADD PRIMARY KEY (`id__type`);

--
-- Index pour la table `vans`
--
ALTER TABLE `vans`
  ADD PRIMARY KEY (`id_vans`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `aviscom`
--
ALTER TABLE `aviscom`
  MODIFY `id_avis` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client_follow_inf`
--
ALTER TABLE `client_follow_inf`
  MODIFY `id_follow` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_comd` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT pour la table `communaute`
--
ALTER TABLE `communaute`
  MODIFY `id_com` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event_com` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fidelite`
--
ALTER TABLE `fidelite`
  MODIFY `id_fidelite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `images_tripinf`
--
ALTER TABLE `images_tripinf`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `influenceur`
--
ALTER TABLE `influenceur`
  MODIFY `id_inf` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `interet`
--
ALTER TABLE `interet`
  MODIFY `id_interet` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `msg_client`
--
ALTER TABLE `msg_client`
  MODIFY `id_msg` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paiment`
--
ALTER TABLE `paiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reservation_hotel_user`
--
ALTER TABLE `reservation_hotel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `reservation_vol_user`
--
ALTER TABLE `reservation_vol_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `tripinf`
--
ALTER TABLE `tripinf`
  MODIFY `id_voy` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `tripinfuser`
--
ALTER TABLE `tripinfuser`
  MODIFY `id_res` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `typev`
--
ALTER TABLE `typev`
  MODIFY `id__type` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `vans`
--
ALTER TABLE `vans`
  MODIFY `id_vans` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vol`
--
ALTER TABLE `vol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images_tripinf`
--
ALTER TABLE `images_tripinf`
  ADD CONSTRAINT `fk_id_voy` FOREIGN KEY (`id_voy`) REFERENCES `tripinf` (`id_voy`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
