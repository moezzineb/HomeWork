-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 02 Juillet 2016 à 09:58
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `competance`
--

CREATE TABLE `competance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_abonne_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `competance`
--

INSERT INTO `competance` (`id`, `name`, `id_abonne_id`) VALUES
(4, 'html,css,js,php4', 3),
(5, 'CMD,HTML5,CSS,JS,PHP,PDO,SYMFONY 3', 4),
(6, 'phonegap,html,css,js,web,mobile', 3),
(7, 'html5,symfony2,css3,jquery,web', 1),
(8, 'cloud,administration réseaux,photographiste', 8),
(9, 'html5,symfony2,css3,jquery,web,material admin', 1),
(10, 'html5,symfony2,css3,jquery,web,material admin,angularjs,twig,phonegap', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `societe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biolographie` text COLLATE utf8_unicode_ci,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `country`, `city`, `speciality`, `societe`, `type`, `nom`, `prenom`, `telephone`, `biolographie`, `path`) VALUES
(1, 'moezzineb', 'moezzineb', 'moez.1993@gmail.com', 'moez.1993@gmail.com', 1, 'ekje7qdvwg84c8cck4o0co44ss0o44w', 'KewYSjyjuF5kLvYCJoIUovEo4TuEf7/IZXBjncMldyqp4zjjSs5DxXvrzB6PhiU8y5/IuWsSemIr2tSSv3PFmQ==', '2016-06-20 11:36:56', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Tunisia', 'Tozeur', 'Web Developer', NULL, 'Freelancer', 'Zineb', 'Moez', '20134490', 'Particulièrement je suis intéressées par les domaines du développement Web (HTML5, CSS3, jQuery, AngularJS, PHP5) et les Framework (Bootstrap, Materialize, Material Design Lite, Foundation) des bases de données (MySQL, SQLite, Oracle) et développement Mobile Android et Cross-Plateforme, j’aimerai approfondir d''avantage de mon connaissances dans ces domaines et ainsi contribuer au développement et à la réussite de vos projets.', '1a2d97695e4fd65f246dfed18a8d2ff3bda48987.jpeg'),
(3, 'jendoubi-maha', 'jendoubi-maha', 'jendoubi.maha@outlook.com', 'jendoubi.maha@outlook.com', 1, 'jbobelvv2s8cccksgg8k4ccoogosg0s', 'SszwucXXHxN+r1v4u8esX94z/muIGDidjTJtg8SBOsRmpnaC6aaKbk412tyMGnX3tQG2fA7bytryPVMCFJGqJA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Tunisia', 'Tunis', 'Mobile Developers', 'Mutawer Agency', 'Employer', 'Jendoubi', 'Maha', '20102030', 'she is a good girl', ''),
(4, 'azizdridi', 'azizdridi', 'aziz.dridi@gmail.com', 'aziz.dridi@gmail.com', 1, 'b4oxhsf6hcg8okk0ssg4sswg4wg488o', 'bReBrqMBKNUHgK/tf2+raPWPOAzVXU7K2k8qQLMd0U1jDJbdxhQqnG/jRcDuqgrzwoFSvcsFuih0ymMoR3F+RA==', '2016-06-20 11:34:19', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Tunisia', 'Nefta', 'Web Developer', 'Telnet', 'Employer', 'Dridi', 'Aziz', '20103040', 'Very good conceptor ever seen', '0a71bb2c3e9a2a7596bf2c93fb1d21378f98a2da.jpeg'),
(5, 'haikel', 'haikel', 'haikelbrinis@gmail.com', 'haikelbrinis@gmail.com', 1, 'chnfwynygr48o0s4448c80co4wgo8k8', '1xOc3EWQYMKb/kP2JcTUwsx7gUvIoHXAgRm83WICwkUEH2jKCgiCFwLil+uMQ4a5aQCU2uZGQXvEdrcNteFBFg==', '2016-05-24 18:22:05', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '', '', '', '', 'Employer', '', '', '', '', ''),
(6, 'benzineb', 'benzineb', 'moez.zineb@gmail.com', 'moez.zineb@gmail.com', 1, '3h3pyhbxa4owckosoow8cw4s0sg8gsg', '1Mgp/PI5qm5ulnCS7ohaWubLk8IeukMB4tdnq7Uq8yhg/+/PKlfSWX6mpB+/UxnXHyej1mB6Omt6sJ9EP5mRYg==', '2016-06-20 11:31:17', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'hamzaoui', 'hamzaoui', 'hai.hs@gmail.com', 'hai.hs@gmail.com', 1, '88bd3prd4q4owc088go0gkoswskwkkk', '3iUcm57U5AA6Dkqpmg5IYILIMt8axgHggnHr8dpF4975dvkxotN1/222BS26qBKwj9yNqMXHML9QadXsYZxzQA==', '2016-06-02 00:03:37', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'tunisia', 'kasserine', 'Web Developer', NULL, 'Freelancer', 'hamzaoui', 'haithem', '99799654', 'ok', 'cbaf4bde70373b99b5efae7d731916bdc5b94a32.png'),
(8, 'dhia_djmal', 'dhia_djmal', 'jmaldhiaeddine@gmail.com', 'jmaldhiaeddine@gmail.com', 1, '76061blm4s4ccoko4088koggkgws0k4', 'jnLUiuQLe3KapJMJeMmBtAUBZ/DfDLGtPsvorGeOfaOVEnEUsrpWq85HBVrM3g5wC+1ikQZ/0qsQYfTkt74Z7w==', '2016-06-08 17:46:55', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Tunisia', 'Tozeur', 'SEO', 'DjeridFM', 'Freelancer', 'Jmal', 'Dhia Eddine', '24245020', 'professional', '7bdf2d2b3944ecbb28a8e4db489c4b6c5187fc74.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_msg` int(11) NOT NULL,
  `id_abonne_id` int(11) NOT NULL,
  `recepteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_msg`, `id_abonne_id`, `recepteur`, `objet`, `description`, `date`) VALUES
(1, 1, 'test@test.com', 'test', '<p>test&nbsp;&nbsp;&nbsp;&nbsp;</p>', '2016-06-05 13:48:29'),
(2, 1, 'moez.zineb@gmail.com', 'HomeWork Contact', '<p style="text-align: center; "><span style="font-weight: bold; background-color: rgb(255, 0, 0);">this is officiel mail&nbsp;</span></p>', '2016-06-08 06:16:59'),
(3, 1, 'moez.zineb@gmail.com', 'test', 'hhhhhhhhhhhhhhh', '2016-06-08 06:17:51');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(11) NOT NULL,
  `id_abonne_id` int(11) NOT NULL,
  `delai` int(11) NOT NULL,
  `cout` double NOT NULL,
  `dateOffre` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_projet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `id_abonne_id`, `delai`, `cout`, `dateOffre`, `status`, `details`, `id_projet_id`) VALUES
(4, 1, 7, 7, '2016-05-17 02:54:41', 'start', 'haykél', 3),
(5, 1, 10, 10, '2016-05-19 14:51:16', 'start', 'good job', 4),
(11, 1, 30, 50, '2016-05-23 02:53:12', 'start', 'i will do it perfectly for you with higer quality ', 1),
(12, 4, 100, 10, '2016-05-24 02:35:07', 'start', 'everything', 1),
(13, 1, 30, 250, '2016-06-19 12:00:06', 'waiting', 'it''s honor for me to do this work for you u can check my portfolios to see my works that i done.', 10),
(14, 1, 10, 50, '2016-06-20 11:27:15', 'waiting', 'je peux faire ton travail rapidement', 10),
(15, 1, 30, 100, '2016-06-20 11:37:43', 'waiting', 'je le fait vite', 11),
(16, 1, 30, 100, '2016-06-20 11:37:57', 'waiting', 'je le fait vite', 11);

-- --------------------------------------------------------

--
-- Structure de la table `portfeuille`
--

CREATE TABLE `portfeuille` (
  `id_portfeuil` int(11) NOT NULL,
  `id_abonne_id` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `id_abonne_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `id_abonne_id`, `titre`, `description`, `lien`, `date`, `path`) VALUES
(1, 1, 'HomeWork', 'this my first work in MVC developpement with PHP framework Symfony 2.8 wich gonna be my project for the PFE this year 2016', 'https://www.homework.com', '01/02/2016', '0daa8cab6e7b7d4794b8e4e9266323d892cfb9c7.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `id_abonne_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `budget` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateDebut` datetime NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `freelancer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `id_abonne_id`, `titre`, `description`, `duree`, `budget`, `statut`, `dateDebut`, `categorie`, `freelancer`) VALUES
(1, 1, 'HomeWork', 'platform connects employers and freelancers in the world. If you are an employer you can host your projects through HomeWork easily and safely as a freelancer can browse existing projects and add your offers on projects that can be completed. HomeWork ens', 20, '250 - 500', 'fin', '2016-05-23 16:17:23', 'Web Developer', 'azizdridi'),
(3, 3, 'SRTG', 'App for SRTG Nabeul', 30, '50 - 100', 'choix', '2016-05-15 21:04:00', 'Mobile Developers', 'moezzineb'),
(4, 1, 'Mes Voisin', 'un réseau social de proximité\r\naide les agent commercent pour attirer des prospets', 90, '100 - 250', 'debut', '2016-05-19 13:42:19', 'Web Developer', ''),
(7, 1, 'Instagram 2.0', 'a web plateform like instagram', 30, '50 - 100', 'debut', '2016-05-23 04:53:48', 'Web Developer', ''),
(8, 1, 'Pbox', 'file storage messenging app with rewards', 30, '100 - 250', 'debut', '2016-06-01 15:48:03', 'Mobile Developer', NULL),
(9, 7, 'hangover', 'okok', 58, '50 - 100', 'debut', '2016-06-01 22:21:25', 'Web Designer', NULL),
(10, 8, 'IPBX', 'consulter les ip d''une société connecté', 30, '50 - 100', 'debut', '2016-06-08 18:03:09', 'Web Developer', NULL),
(11, 4, 'HOMEWORK', 'notre projet de fin  de d''etude', 30, '100 - 250', 'travaille', '2016-06-20 11:36:07', 'Web Developer', 'moezzineb');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `competance`
--
ALTER TABLE `competance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1BB6FF2843101AB1` (`id_abonne_id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `IDX_B6BD307F43101AB1` (`id_abonne_id`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`),
  ADD KEY `IDX_AF86866F43101AB1` (`id_abonne_id`),
  ADD KEY `IDX_AF86866F80F43E55` (`id_projet_id`);

--
-- Index pour la table `portfeuille`
--
ALTER TABLE `portfeuille`
  ADD PRIMARY KEY (`id_portfeuil`),
  ADD KEY `IDX_31187BE343101AB1` (`id_abonne_id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`),
  ADD KEY `IDX_A9ED106243101AB1` (`id_abonne_id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`),
  ADD KEY `IDX_50159CA943101AB1` (`id_abonne_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `competance`
--
ALTER TABLE `competance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `portfeuille`
--
ALTER TABLE `portfeuille`
  MODIFY `id_portfeuil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `competance`
--
ALTER TABLE `competance`
  ADD CONSTRAINT `FK_1BB6FF2843101AB1` FOREIGN KEY (`id_abonne_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307F43101AB1` FOREIGN KEY (`id_abonne_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_AF86866F43101AB1` FOREIGN KEY (`id_abonne_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_AF86866F80F43E55` FOREIGN KEY (`id_projet_id`) REFERENCES `projet` (`id_projet`) ON DELETE CASCADE;

--
-- Contraintes pour la table `portfeuille`
--
ALTER TABLE `portfeuille`
  ADD CONSTRAINT `FK_31187BE343101AB1` FOREIGN KEY (`id_abonne_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `FK_A9ED106243101AB1` FOREIGN KEY (`id_abonne_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_50159CA943101AB1` FOREIGN KEY (`id_abonne_id`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
