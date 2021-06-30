-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 28 mai 2020 à 19:40
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sbs`
--
CREATE DATABASE sbs;

USE sbs;
-- --------------------------------------------------------

--
-- Structure de la table `capteur_eolienne`
--

DROP TABLE IF EXISTS `capteur_eolienne`;
CREATE TABLE IF NOT EXISTS `capteur_eolienne` (
  `id_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `id_parametrage_eolienne` int(11) NOT NULL,
  PRIMARY KEY (`id_capteur`),
  KEY `FK_parametrage_eolienne` (`id_parametrage_eolienne`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `capteur_eolienne`
--

INSERT INTO `capteur_eolienne` (`id_capteur`, `id_parametrage_eolienne`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `choisir`
--

DROP TABLE IF EXISTS `choisir`;
CREATE TABLE IF NOT EXISTS `choisir` (
  `id_client` int(11) NOT NULL,
  `id_parametrage_panneau` int(11) NOT NULL,
  KEY `FK_parametrage_panneau_client` (`id_client`),
  KEY `FK_parametrage_panneau` (`id_parametrage_panneau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `choisir`
--

INSERT INTO `choisir` (`id_client`, `id_parametrage_panneau`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `ville`, `pays`, `mail`, `identifiant`, `password`) VALUES
(1, 'El sabbagh', 'Nessim', 'Fontenay-sous-bois', 'France', 'nessim.elsabbagh@yahoo.fr', 'ness', '123'),
(2, 'Akroune', 'Rayan', 'Champigny', 'France', 'ak@gmail.com', 'ak213', 'alger213'),
(3, 'Tloh', 'Mohamed', 'Boissy', 'France', 'momotloh@gmail.com', 'Momo12', '123soleil'),
(18, 'Dupond', 'Pierre', 'San Diego', 'Mexique', 'pierreDd@gmail.com', 'pierreDupond', 'mexique');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `mail` varchar(255) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` text NOT NULL,
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`mail`, `nom`, `numero`, `message`, `id_contact`) VALUES
('tlohmohamed@hotmail.fr', 'Tloh ', '0781450141', 'Bonjour\r\n\r\n\r\nAucun problème avec votre service je tenais simplement à vous remercier', 1),
('tlohmohamed@hotmail.fr', 'Tloh', '0781450141', 'Bonjour\r\n\r\n\r\nJ\'ai passé commande il y a 1 semaine et je n\'ai toujours pas été livré aussi j\'aimerai savoir où en est ma commande', 3),
('rayan.akroune@etu.u-pec.fr', 'Rayan', '0756421265', 'Bonjour\r\n\r\n\r\nJe viens de recevoir mes capteurs et je rencontre des soucis pour les configurer aussi j\'aimerai être mis en contact avec un technicien.\r\n\r\nCordialment\r\nRayan AK', 5),
('bouli@net.fr', 'yohan', '0656565656', 'j\'ai un souci', 9),
('nessim.elsabbagh@yahoo.fr', 'Nessim EL-SABAGH', '0781442410', 'ceci est un test', 22);

-- --------------------------------------------------------

--
-- Structure de la table `dependre`
--

DROP TABLE IF EXISTS `dependre`;
CREATE TABLE IF NOT EXISTS `dependre` (
  `id_capteur` int(11) NOT NULL,
  `dateReleve` date NOT NULL,
  PRIMARY KEY (`id_capteur`,`dateReleve`),
  KEY `Fk_dateReleve` (`dateReleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dependre`
--

INSERT INTO `dependre` (`id_capteur`, `dateReleve`) VALUES
(2, '2019-12-10'),
(1, '2020-01-14'),
(1, '2020-03-10'),
(3, '2020-04-18');

-- --------------------------------------------------------

--
-- Structure de la table `edate`
--

DROP TABLE IF EXISTS `edate`;
CREATE TABLE IF NOT EXISTS `edate` (
  `dateReleve` date NOT NULL,
  `vitesse_vent` int(11) NOT NULL,
  `energie_generee` int(11) NOT NULL,
  PRIMARY KEY (`dateReleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `edate`
--

INSERT INTO `edate` (`dateReleve`, `vitesse_vent`, `energie_generee`) VALUES
('2019-12-10', 50, 75),
('2020-01-14', 90, 110),
('2020-03-10', 70, 95),
('2020-04-02', 100, 135),
('2020-04-18', 80, 100);

-- --------------------------------------------------------

--
-- Structure de la table `gestion_automatique_volet`
--

DROP TABLE IF EXISTS `gestion_automatique_volet`;
CREATE TABLE IF NOT EXISTS `gestion_automatique_volet` (
  `id_GestionAuto` int(11) NOT NULL AUTO_INCREMENT,
  `valeur_pivot` int(11) NOT NULL,
  PRIMARY KEY (`id_GestionAuto`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gestion_automatique_volet`
--

INSERT INTO `gestion_automatique_volet` (`id_GestionAuto`, `valeur_pivot`) VALUES
(1, 60),
(2, 45),
(3, 75),
(23, 44),
(24, 27),
(25, 88),
(26, 29),
(27, 94);

-- --------------------------------------------------------

--
-- Structure de la table `gestion_manuelle_volet`
--

DROP TABLE IF EXISTS `gestion_manuelle_volet`;
CREATE TABLE IF NOT EXISTS `gestion_manuelle_volet` (
  `id_GestionM` int(11) NOT NULL AUTO_INCREMENT,
  `heure_ouverture` time NOT NULL,
  `heure_fermeture` time NOT NULL,
  PRIMARY KEY (`id_GestionM`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gestion_manuelle_volet`
--

INSERT INTO `gestion_manuelle_volet` (`id_GestionM`, `heure_ouverture`, `heure_fermeture`) VALUES
(1, '09:30:00', '21:15:00'),
(2, '08:30:00', '23:10:00'),
(3, '07:30:00', '22:00:00'),
(24, '12:20:00', '23:22:00'),
(25, '07:25:00', '23:25:00'),
(26, '11:51:00', '17:51:00'),
(27, '19:54:00', '21:54:00'),
(28, '15:27:00', '19:27:00');

-- --------------------------------------------------------

--
-- Structure de la table `parametragevolet`
--

DROP TABLE IF EXISTS `parametragevolet`;
CREATE TABLE IF NOT EXISTS `parametragevolet` (
  `id_parametrage` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_GestionM` int(11) NOT NULL,
  `id_GestionAuto` int(11) NOT NULL,
  `activationManuelle` tinyint(1) NOT NULL,
  `activationAuto` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_parametrage`),
  KEY `FK_parametrage_client` (`id_client`),
  KEY `FK_parametrage_manuel` (`id_GestionM`),
  KEY `FK_parametrage_auto` (`id_GestionAuto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `parametragevolet`
--

INSERT INTO `parametragevolet` (`id_parametrage`, `id_client`, `id_GestionM`, `id_GestionAuto`, `activationManuelle`, `activationAuto`) VALUES
(1, 1, 1, 1, 1, 0),
(2, 2, 2, 2, 0, 1),
(3, 3, 3, 3, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `parametrage_eolienne`
--

DROP TABLE IF EXISTS `parametrage_eolienne`;
CREATE TABLE IF NOT EXISTS `parametrage_eolienne` (
  `id_parametrage_eolienne` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `vitesse_maximale` int(11) NOT NULL,
  PRIMARY KEY (`id_parametrage_eolienne`),
  KEY `FK_id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `parametrage_eolienne`
--

INSERT INTO `parametrage_eolienne` (`id_parametrage_eolienne`, `id_client`, `vitesse_maximale`) VALUES
(1, 3, 45),
(2, 2, 198),
(3, 1, 59);

-- --------------------------------------------------------

--
-- Structure de la table `parametrage_panneau_photovoltaique`
--

DROP TABLE IF EXISTS `parametrage_panneau_photovoltaique`;
CREATE TABLE IF NOT EXISTS `parametrage_panneau_photovoltaique` (
  `id_parametrage_panneau` int(11) NOT NULL AUTO_INCREMENT,
  `inclinaison` int(11) NOT NULL,
  `saison` varchar(255) NOT NULL,
  `orientation` varchar(255) NOT NULL,
  PRIMARY KEY (`id_parametrage_panneau`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `parametrage_panneau_photovoltaique`
--

INSERT INTO `parametrage_panneau_photovoltaique` (`id_parametrage_panneau`, `inclinaison`, `saison`, `orientation`) VALUES
(1, 40, 'ete', 'sud'),
(2, 55, 'automne', 'sud'),
(3, 49, 'printemps', 'est'),
(7, 190, '', 'Est');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(255) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int(255) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `prix`) VALUES
(1, 'Panneau Photovoltaïque', 599),
(2, 'Volet Connecté', 390),
(3, 'éolienne', 1110);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `capteur_eolienne`
--
ALTER TABLE `capteur_eolienne`
  ADD CONSTRAINT `FK_parametrage_eolienne` FOREIGN KEY (`id_parametrage_eolienne`) REFERENCES `parametrage_eolienne` (`id_parametrage_eolienne`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `choisir`
--
ALTER TABLE `choisir`
  ADD CONSTRAINT `FK_parametrage_panneau` FOREIGN KEY (`id_parametrage_panneau`) REFERENCES `parametrage_panneau_photovoltaique` (`id_parametrage_panneau`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_parametrage_panneau_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `dependre`
--
ALTER TABLE `dependre`
  ADD CONSTRAINT `Fk_dateReleve` FOREIGN KEY (`dateReleve`) REFERENCES `edate` (`dateReleve`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Fk_id_capteurE` FOREIGN KEY (`id_capteur`) REFERENCES `capteur_eolienne` (`id_capteur`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `parametragevolet`
--
ALTER TABLE `parametragevolet`
  ADD CONSTRAINT `FK_parametrage_auto` FOREIGN KEY (`id_GestionAuto`) REFERENCES `gestion_automatique_volet` (`id_GestionAuto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_parametrage_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_parametrage_manuel` FOREIGN KEY (`id_GestionM`) REFERENCES `gestion_manuelle_volet` (`id_GestionM`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `parametrage_eolienne`
--
ALTER TABLE `parametrage_eolienne`
  ADD CONSTRAINT `FK_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
