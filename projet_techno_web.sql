-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Novembre 2019 à 22:24
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet_techno_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) DEFAULT NULL,
  `name` text,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` float NOT NULL DEFAULT '0',
  `image_produit` text,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cart`
--

INSERT INTO `cart` (`id`, `name`, `quantity`, `unit_price`, `image_produit`, `id_client`) VALUES
(0, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 5),
(0, 'Trinidad Moruga', 1, 13.99, 'TrinidadMoruga.jpg', 5),
(0, 'Butch Taylor', 1, 12.99, 'ButchTaylor.jpg', 5),
(0, 'Naga Viper', 1, 11.99, 'NagaViper.jpg', 4),
(2, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 4),
(2, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 4),
(5, 'Naga Viper', 1, 11.99, 'NagaViper.jpg', 5),
(2, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 5),
(2, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 6),
(2, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 6),
(2, 'Carolina Reaper', 1, 14.99, 'CarolinaReaper.jpg', 6),
(3, 'Trinidad Moruga', 1, 13.99, 'TrinidadMoruga.jpg', 6),
(3, 'Trinidad Moruga', 1, 13.99, 'TrinidadMoruga.jpg', 6),
(3, 'Trinidad Moruga', 1, 13.99, 'TrinidadMoruga.jpg', 10),
(3, 'Trinidad Moruga', 1, 13.99, 'TrinidadMoruga.jpg', 11);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double DEFAULT NULL,
  `billing_adress_id` int(10) unsigned DEFAULT NULL,
  `delivery_adress_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`),
  KEY `IDX_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
(2, 1, 'CART', 'CART', 149.52, 1, 2, '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(3, 1, 'ORDER', 'BILLED', 100, 3, 4, '2019-10-11 14:21:26', '2019-10-11 14:21:26');

-- --------------------------------------------------------

--
-- Structure de la table `order_addresses`
--

CREATE TABLE IF NOT EXISTS `order_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `human_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`, `created_at`, `updated_at`) VALUES
(2, 'Fred Eric', '2 impasse Duvet', '3ieme étage', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(3, 'Fred Eric', '120 Boulevard Vaubant', 'B506', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(4, 'Fred Eric', '2 impasse Duvet', '3ieme étage', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(5, 'Fred Eric', '120 Boulevard Vaubant', 'B506', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26');

-- --------------------------------------------------------

--
-- Structure de la table `order_products`
--

CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `quantity` int(3) unsigned NOT NULL,
  `unit_price` double DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_produit` text CHARACTER SET utf8 NOT NULL,
  `id_client` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_order_product` (`order_id`),
  KEY `IDX_product_order` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `unit_price` double DEFAULT NULL,
  `range_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_produit` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_product_range` (`range_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `unit_price`, `range_id`, `created_at`, `updated_at`, `image_produit`) VALUES
(2, 'Carolina Reaper', 'Developed by South Carolina breeder Ed Currie, the pepper is red and gnarled. In 2013, Guinness World Records declared it the hottest chili pepper in the world !', 14.99, 2, '2019-10-11 14:21:26', '2019-10-11 14:21:26', 'CarolinaReaper.jpg'),
(3, 'Trinidad Moruga', 'The Trinidad Moruga scorpion is a chili pepper native to the district of Moruga in Trinidad and Tobago. It currently is ranked as the second-spiciest chili in the world !', 13.99, 3, '2019-10-11 14:21:26', '2019-10-11 14:21:26', 'TrinidadMoruga.jpg'),
(4, 'Butch Taylor', 'The Trinidad scorpion ''Butch T'' ! A laboratory test conducted in March 2011 measured a specimen at 1,463,700 Scoville heat units, officially ranking it the hottest pepper in the world at that time.\nNot to be confused with Trinidad Moruga scorpion.', 12.99, NULL, '2019-10-11 15:53:45', '2019-10-11 15:53:45', 'ButchTaylor.jpg'),
(5, 'Naga Viper', 'Created by an English Farmer Gerald Fowler, the Naga Viper pepper is a hot chili pepper. In 2011, it was recorded as the "World''s Hottest Chili" by the Guinness World Records with a rating of 1,382,118 Scoville Heat Units (SHU), but was surpassed in SHU by several other peppers, such as Pepper X in 2017.', 11.99, NULL, '2019-10-11 16:09:14', '2019-10-11 16:09:14', 'NagaViper.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `ranges`
--

CREATE TABLE IF NOT EXISTS `ranges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_range_parent` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `ranges`
--

INSERT INTO `ranges` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 'Main range', NULL, '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(3, 'Second range', 1, '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(4, 'Third range', 1, '2019-10-11 14:21:26', '2019-10-11 14:21:26');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_adress_id` int(10) unsigned DEFAULT NULL,
  `delivery_adress_id` int(10) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `IDX_user_billing_adress` (`billing_adress_id`),
  KEY `IDX_user_delivery_adress` (`delivery_adress_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `billing_adress_id`, `delivery_adress_id`, `created_at`, `updated_at`) VALUES
(2, 'Fred Eric', 'fred.eric@example.com', 'password', 1, 2, '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(3, 'Frederic', 'frederic@example.com', 'password', 3, 4, '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(4, 'a', 'a', 'a', NULL, NULL, '2019-11-22 17:00:15', '2019-11-22 17:00:15'),
(5, 'z', 'z', 'z', NULL, NULL, '2019-11-22 17:19:18', '2019-11-22 17:19:18'),
(9, 'd', 'd', 'd', NULL, NULL, '2019-11-22 22:00:26', '2019-11-22 22:00:26'),
(10, 'x', 'x', 'x', NULL, NULL, '2019-11-22 22:03:24', '2019-11-22 22:03:24'),
(11, 'y', 'y', 'y', NULL, NULL, '2019-11-22 22:08:23', '2019-11-22 22:08:23');

-- --------------------------------------------------------

--
-- Structure de la table `user_addresses`
--

CREATE TABLE IF NOT EXISTS `user_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `human_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`, `created_at`, `updated_at`) VALUES
(2, 'Fred Eric', '2 impasse Duvet', '3ieme étage', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(3, 'Eric Fred', '12 route Pleine', 'chez mon oncle', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(4, 'Frederic', '239 rue de Douai', NULL, '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26'),
(5, 'Epicfred', '3 sans idée', 'oui oui', '59000', 'Lille', 'FRANCE', '2019-10-11 14:21:26', '2019-10-11 14:21:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
