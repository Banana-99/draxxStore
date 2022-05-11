-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 mai 2022 à 00:05
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `draxxstore`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `mdp`) VALUES
(17, 'Geraud', 'draxx@gmail.com', 'bfbaf89898edceb5546c41ec5ceffd576479f64c31f4bec6b6cf482c37ad7215'),
(16, 'Lamamba', 'lamamba@gmail.com', '85e08310e52251dd5b5e3d185c0ffbe74b418c469c2a08ef6d768e7a39c82cf7');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `livrer` int(11) NOT NULL DEFAULT '0',
  `commande` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `label`) VALUES
(1, 'Autres'),
(2, 'Boisson');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`, `adresse`, `telephone`, `type`) VALUES
(1, 'draxx', 'geraud', 'draxx@gmail.com', 'medina', '79632154', 'client'),
(2, 'Hamza', 'Sougou', 'hamza@gmail.com', 'MEdina', '789632541', 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` varchar(255) NOT NULL,
  `date_livraison` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date_commande`, `date_livraison`, `client_id`, `etat`) VALUES
(16, '2022-05-10', NULL, NULL, 'en cours'),
(15, '2022-05-10', NULL, NULL, 'en cours'),
(14, '2022-05-10', NULL, NULL, 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nom`, `prenom`, `email`, `adresse`, `telephone`, `type`) VALUES
(1, 'Yacine', 'Diop', 'yacine@gmail.com', 'Sacre Coeur 3', '74563218', 'Fournisseur'),
(2, 'Aziz', 'ziz', 'aziz@gmail.com', 'patte d\'oie', '78965412', 'fournisseur'),
(3, 'Geraud', 'Ndoro', 'draxx@gmail.com', 'Medina', '78965412', 'Fournisseur'),
(4, 'Geraud', 'Ndoro', 'draxx@gmail.com', 'Medina', '78965412', 'Fournisseur');

-- --------------------------------------------------------

--
-- Structure de la table `fournitures`
--

DROP TABLE IF EXISTS `fournitures`;
CREATE TABLE IF NOT EXISTS `fournitures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite_avant` int(11) NOT NULL,
  `quantite_fournie` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournitures`
--

INSERT INTO `fournitures` (`id`, `quantite_avant`, `quantite_fournie`, `produit_id`, `date`) VALUES
(29, 1000, 1200, 3, '09/05/2022'),
(27, 500, 500, 2, '07/05/2022'),
(25, 200, 800, 3, '07/05/2022');

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fournisseurs_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stocks`
--

INSERT INTO `stocks` (`id`, `designation`, `quantite`, `prix`, `categorie`, `type`, `fournisseurs_id`) VALUES
(7, 'Mug', 50, 2000, 'Produit', 'Verre', 1),
(8, 'HP', 500, 6000, 'Ordinateur', 'Eletronic', 1),
(9, 'Chargeur', 200, 3000, 'Autres', 'Autres', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
