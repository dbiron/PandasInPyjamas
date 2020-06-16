-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour pip
CREATE DATABASE IF NOT EXISTS `pip` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pip`;

-- Listage de la structure de la table pip. admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Listage des données de la table pip.admins : ~1 rows (environ)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `pseudo`, `password`) VALUES
	(1, 'unlogin', '$2y$10$WTKFVi1XBb.nHg0UIxMv6OMMm0/0tVPkgFFAE4zaDv.U0vxiLFvbO');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Listage de la structure de la table pip. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table pip.articles : ~3 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `content`, `image`, `created_at`) VALUES
	(1, 'New CS:GO Roster', 'Pandas in Pyjamas General Manager: «C’est un grand jour pour PIP alors que nous ouvrons un chapitre dans notre histoire Counter-Strike Global Offensive. À l\'heure actuelle, nous avons l\'une des meilleures équipes au monde dans CS: GO et c\'est une base solide pour notre développement futur.\r\nWill Wierzba «RUSH», capitaine de l’équipe PIP CS: GO: «C’est un moment passionnant pour nous tous. Nous sommes ravis de faire partie de l\'une des plus grandes équipes d\'esports et ferons de notre mieux pour amener PIP dans les premiers rangs du CS.\r\nBienvenue à notre nouvelle équipe CS: GO', 'new-roster.jpg', '2020-04-07 22:59:04'),
	(2, 'Nouveau Partenariat', 'Pandas in Pyjamas annonce aujourd\'hui un nouveau partenariat passionnant pour l\'équipe avec RAZER.\r\n\r\nAvec cet accord, RAZER devient l\'un des fournisseurs officiels de l\'équipe Pandas in Pyjamas.\r\n\r\n"L\'Esport devient de plus en plus populaire auprès de nos consommateurs, c\'est donc un partenariat très excitant pour nous", a déclaré le directeur mondial du marketing de RAZER. "Les Pandas en Pyjama sont sur le point de connaître une excellente saison, et nous leur sommes reconnaissants de pouvoir en faire partie. Nous sommes impatients de travailler avec l\'équipe".\r\n\r\n"Nous ne pouvons pas penser à une meilleure façon de démarrer 2019 qu\'avec ce partenariat incroyable avec RAZER", a déclaré le capitaine des Pandas in Pyjamas. "RAZER est reconnu dans le monde entier et le fait de rejoindre la liste des partenaires de RAZER constitue un nouveau chapitre passionnant pour notre organisation. Nous attendons tous avec impatience ce que nous allons créer avec ce partenariat".', 'razer.jpg', '2020-04-10 14:26:56'),
	(3, 'Annonce Dreamhack', 'Concernant la Dreamhack Tour 2020, voici une déclaration concernant l\'annulation :\r\n\r\nC’est le cœur lourd aujourd’hui que nous vous annonçons que la DreamHack TOURS 2020 est annulée suite à l’épidémie de Covid-19, que l’OMS (Organisation Mondiale de la Santé) a officiellement requalifiée en Pandémie. Cette annulation a été faite par mesure de précaution et suit les directives des autorités faite par le Ministère de la Santé d’interdire tout rassemblement de plus de 1000 participants. Nous respectons cette décision, car la sécurité et la santé de nos fans est notre priorité.\r\n\r\nNous continuerons de suivre les conseils de santé publique et des autorités locales pour les prochains événements internationaux de la DreamHack en 2020 et réagirons en cas de développement notable.\r\n\r\nPour l’instant, nous prévoyons de maintenir les autres événements tel que prévu. Si des mesures spécifiques sont mises en place en réponse au développement du Covid-19, nous partagerons ces informations en ligne sur dreamhack.com.\r\n\r\nNotre but est bien sûr de continuer à proposer de belles expériences lors de nos événements, en rassemblant toutes les communautés de fans lors de nos festivals tout autour du globe.\r\n\r\nLes inscriptions pour la France sont donc à présent fermées et les réservations déjà effectuées seront intégralement remboursées aux joueurs et aux visiteurs.\r\n\r\nNous sommes profondément attristés de cette situation et présentons nos excuses aux bénévoles, joueurs, visiteurs, prestataires, talents et partenaires de la DreamHack. Nous réfléchissons d’ores et déjà à des solutions alternatives pour continuer à faire la promotion de l’eSport qui nous rassemble tous. C’est un moment difficile, mais la passion est intacte !\r\nMerci de votre fidélité et de votre soutien.\r\n\r\nJean-Christophe ARNAUD, DreamHack France', 'dreamhack.png', '2020-04-10 15:08:13');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Listage de la structure de la table pip. comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) unsigned NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`user_id`),
  KEY `articles_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Listage des données de la table pip.comments : ~3 rows (environ)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `content`, `created_at`, `user_id`, `article_id`) VALUES
	(1, 'un commentaire totalement inutile', '2020-04-30 14:58:05', 3, 1),
	(2, 'un autre commentaire totalement inutile', '2020-04-30 14:58:05', 2, 2),
	(3, 'alors la je sais plus quoi mettre', '2020-04-30 14:58:05', 3, 3);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Listage de la structure de la table pip. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Listage des données de la table pip.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `pseudo`, `mail`, `password`) VALUES
	(2, 'smokefu', 'sfu1982@gmail.com', '$2y$10$km1tlh5W7A4.iJabykqp0OMTIOc/LcdB6ie2sh.kIn1DPqeH77HU6'),
	(3, 'test', 'test@test.com', '$2y$10$u/2a7x7CClNtTAHvSnXC5OCE6c8.0Qg5ymiG4swBX4cgGbaiiWZ.C');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
