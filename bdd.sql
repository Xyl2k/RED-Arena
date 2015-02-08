SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `challenges` (
  `id_challenge` int(1) NOT NULL AUTO_INCREMENT,
  `nom_challenge` varchar(100) CHARACTER SET utf8 NOT NULL,
  `enonce_epreuve` text CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nb_points` int(1) NOT NULL,
  `auteur_challenge` varchar(70) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_challenge`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=38 ;

INSERT INTO `challenges` (`id_challenge`, `nom_challenge`, `enonce_epreuve`, `mot_de_passe`, `nb_points`, `auteur_challenge`) VALUES
(1, 'Nag Screen', 'Find a way for bypass the message box and get the 2nd dialog, easy.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/NAG.zip">Download</a></p>', 'vbcrap', 2, 'Xylitol'),
(2, 'CrackMe 1', 'Find the good serial and use it for validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/CrackMe.zip">Download</a></p>', '31337', 2, 'Xylitol'),
(3, 'CrackMe 2', 'Find the good serial and use it for validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/CrackMe2.zip">Download</a></p>', 'kzw578f-os42iyd-d06ht8i', 2, 'Xylitol'),
(4, 'CrackMe Nux 1', 'Find the good serial and use it for validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/crackme.gz">Download</a></p>', 'gd82u13z', 2, 'Xylitol');

CREATE TABLE IF NOT EXISTS `epreuve_valide` (
  `pseudo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `id_epreuve` int(1) NOT NULL,
  `date_validation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `heure_validation` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `epreuve_valide` (`pseudo`, `id_epreuve`, `date_validation`, `heure_validation`) VALUES
('root', 1, '26/03/2011', '18:54');

CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

INSERT INTO `minichat` (`id`, `pseudo`, `message`) VALUES
(1, 'test', 'test');

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `md5_id` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_level` tinyint(4) NOT NULL DEFAULT '1',
  `pwd` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `headline` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tel` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `avatar` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `website` text COLLATE latin1_general_ci NOT NULL,
  `date` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `users_ip` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `approved` int(1) NOT NULL DEFAULT '0',
  `activation_code` int(10) NOT NULL DEFAULT '0',
  `banned` int(1) NOT NULL DEFAULT '0',
  `ckey` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ctime` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `title` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `score` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`),
  FULLTEXT KEY `idx_search` (`full_name`,`user_email`,`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

INSERT INTO `users` (`id`, `md5_id`, `full_name`, `user_name`, `user_email`, `user_level`, `pwd`, `headline`, `country`, `tel`, `avatar`, `website`, `date`, `users_ip`, `approved`, `activation_code`, `banned`, `ckey`, `ctime`, `title`, `score`) VALUES
(1, '04025959b191f8f9de3f924f0940515f', 'Steven K', 'root', 'root@root.root', 1, 'toor', 'gggggggggggggggggggg', '', '', 'http://localhost/red/images/pdv.jpg', 'http://google.fr', '03-25-2011, 02:02:38 am', '127.0.0.1', 1, 8631, 0, '', '', 'Site Admin', 1);