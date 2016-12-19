-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 16 Décembre 2016 à 09:54
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
`id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `guest`
--

INSERT INTO `guest` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`i_id` int(30) NOT NULL,
  `i_lien` varchar(100) NOT NULL,
  `i_fk_q_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `questioncm`
--

CREATE TABLE IF NOT EXISTS `questioncm` (
  `id_qCM` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `nbReponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE IF NOT EXISTS `reponse` (
`id_r` int(11) NOT NULL,
  `choix` varchar(25) DEFAULT NULL,
  `id_r_qCM` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `password`) VALUES
(1, 'ponzo', 'jean-baptiste', 'ponzo'),
(2, 'mkenini', 'Isma', 'mkenini');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `guest`
--
ALTER TABLE `guest`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`i_id`), ADD KEY `i_fk_q_id` (`i_fk_q_id`);

--
-- Index pour la table `questioncm`
--
ALTER TABLE `questioncm`
 ADD PRIMARY KEY (`id_qCM`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
 ADD PRIMARY KEY (`id_r`), ADD KEY `FK_choix_id_questionChoixMultiple` (`id_r_qCM`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `guest`
--
ALTER TABLE `guest`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
MODIFY `i_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`i_fk_q_id`) REFERENCES `questioncm` (`id_qCM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
