-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 25 Novembre 2012 à 13:52
-- Version du serveur: 5.1.33
-- Version de PHP: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `compudream`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--
-- Création: Jeu 28 Juin 2012 à 18:46
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `temps` int(10) NOT NULL,
  `page` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `temps`, `page`) VALUES
(1, 'Inauguration du site 3.0 !', '<p>\r\n	Afin de vous fournir toujours plus de fonctionnalit&eacute;s dans un environnement toujours plus agr&eacute;able, CompuDream a d&eacute;cid&eacute; de faire peau neuve et de se moderniser !</p>\r\n', 1340905654, 'Accueil'),
(2, 'Maintenance Professionnelle !', '<p>\r\n	CompuDream intervient en entreprise sur tout type de mat&eacute;riel et de plateforme (postes clients, serveurs, r&eacute;seaux, Windows...) avec une offre simple et compl&egrave;te qui r&eacute;pond &agrave; l&#39;ensemble de vos besoins informatiques : aide et assistance pour tous les utilisateurs, d&eacute;pannage sur site, s&eacute;curit&eacute; de votre r&eacute;seau, conseil et suivi de votre parc informatique.</p>\r\n', 1340905661, 'Maintenance - Professionnels'),
(3, 'NOS SERVICES : ', '<p>\r\n	&bull; AUDIT ET ING&Eacute;NIERIE INFORMATIQUE : Suivi complet de votre informatique, installation, &eacute;tude de faisabilit&eacute;, conseil en achat de mat&eacute;riel et de logiciel.</p>\r\n', 1340905814, 'Maintenance - Professionnels'),
(4, '', '<p>\r\n	&bull; VENTE DE MAT&Eacute;RIEL : Ordinateurs &agrave; usage professionnel (Serveurs, Stations de travail, Bureautique, portables), et p&eacute;riph&eacute;riques.</p>\r\n', 1340905808, 'Maintenance - Professionnels'),
(5, '', '<p>\r\n	&bull; INSTALLATION DE R&Eacute;SEAUX &amp; S&Eacute;CURIT&Eacute; : Conception de l&rsquo;architecture, entretien de votre r&eacute;seau Inter / Intra / Extranet.</p>\r\n', 1340905800, 'Maintenance - Professionnels'),
(6, '', '<p>\r\n	&bull; S&Eacute;CURIT&Eacute; DE VOS DONN&Eacute;ES : Vos donn&eacute;es sont-elles prot&eacute;g&eacute;es contre les risques de vol, d&#39;incendie, de crash informatique ou de virus ? La seule protection r&eacute;ellement efficace contre tous ces risques est de disposer d&#39;une sauvegarde automatis&eacute;e, quotidienne et surtout externalis&eacute;e. Une solution simple et intuitive. Connexion s&eacute;curis&eacute;e &agrave; Internet, antivirus entreprise, proxy, filtrage de contenus, anti-spam.</p>\r\n', 1340905791, 'Maintenance - Professionnels'),
(7, '', '<p>\r\n	&bull; MAINTENANCE INFORMATIQUE : Par contrat de maintenance renouvelable ou sur demande d&#39;intervention.</p>\r\n', 1340905783, 'Maintenance - Professionnels'),
(8, '', '<p>\r\n	&bull; APPLICATIONS STANDARDIS&Eacute;ES : Gamme bureautique standard : comptabilit&eacute;, facturation, gestion de stock, gestion commerciale, point de vente.</p>\r\n', 1340905776, 'Maintenance - Professionnels'),
(9, ' ', '<p>\r\n	&bull; APPLICATIONS SP&Eacute;CIALIS&Eacute;ES : Mise en place de solutions dans le cadre d&#39;un processus industriel (Gestion des stocks, Tra&ccedil;abilit&eacute;, RFID, ...)</p>\r\n', 1340905767, 'Maintenance - Professionnels'),
(10, '', '<p>\r\n	&bull; FORMATIONS SUR SITE : Formations sur site, personnalis&eacute;es en fonction de vos besoins et de vos objectifs. Notre gamme d&#39;intervention s&#39;&eacute;tend de la simple initiation &agrave; l&#39;informatique jusqu&#39;&agrave; des sessions r&eacute;parties sur plusieurs semaines, vous permettant &agrave; terme d&#39;&ecirc;tre compl&egrave;tement autonome pour la gestion de votre site informatique.</p>\r\n', 1340905771, 'Maintenance - Professionnels');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--
-- Création: Jeu 28 Juin 2012 à 18:46
--

CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `adresse1` varchar(40) DEFAULT NULL,
  `adresse2` varchar(40) DEFAULT NULL,
  `cp` char(5) DEFAULT '76031',
  `ville` varchar(40) DEFAULT 'ROUEN Cedex',
  `tel` char(14) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `facebook` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`con_id`, `libelle`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `email`, `facebook`) VALUES
(1, 'CompuDream', '37', 'rue de la republique', '76000', 'Rouen', '02.77.76.90.21', 'compudream@hotmail.fr', 'https://www.facebook.com/pages/CompuDream-Rouen-Cy'),
(2, 'NumeriCable', '37', 'rue de la republique', '76000', 'Rouen', '02.77.76.90.21', 'compudream@hotmail.fr', 'http://www.facebook.com/pages/Numericable/14180802');

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--
-- Création: Jeu 28 Juin 2012 à 18:46
--

CREATE TABLE IF NOT EXISTS `contenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `commentaire` varchar(40) NOT NULL,
  `photo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contenu`
--

INSERT INTO `contenu` (`id`, `titre`, `date`, `commentaire`, `photo`) VALUES
(1, 'Accueil', '2012-07-04 11:28:26', 'Accueil', 'Jellyfish.jpg'),
(2, 'Accueil', '2012-10-11 20:34:10', 'Accueil', 'Desert.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--
-- Création: Jeu 28 Juin 2012 à 18:46
--

CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `lundi` varchar(50) NOT NULL,
  `mardi` varchar(50) NOT NULL,
  `mercredi` varchar(50) NOT NULL,
  `jeudi` varchar(50) NOT NULL,
  `vendredi` varchar(50) NOT NULL,
  `samedi` varchar(50) NOT NULL,
  `dimanche` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `horaire`
--

INSERT INTO `horaire` (`id`, `titre`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`) VALUES
(1, 'Nos horaires', '10h00 - 20h00', '10h00 - 20h00', '10h00 - 20h00', '10h00 - 20h00', '10h00 - 20h00', '10h00 - 20h00', 'Fermé');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--
-- Création: Jeu 28 Juin 2012 à 18:46
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `pass_md5`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');
