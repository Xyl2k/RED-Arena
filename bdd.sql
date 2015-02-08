-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1:3308
-- Généré le : Dim 08 Février 2015 à 21:34
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `red`
--

-- --------------------------------------------------------

--
-- Structure de la table `challenges`
--

CREATE TABLE IF NOT EXISTS `challenges` (
  `id_challenge` int(1) NOT NULL AUTO_INCREMENT,
  `nom_challenge` varchar(100) CHARACTER SET utf8 NOT NULL,
  `enonce_epreuve` text CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nb_points` int(1) NOT NULL,
  `auteur_challenge` varchar(70) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_challenge`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=38 ;

--
-- Contenu de la table `challenges`
--

INSERT INTO `challenges` (`id_challenge`, `nom_challenge`, `enonce_epreuve`, `mot_de_passe`, `nb_points`, `auteur_challenge`) VALUES
(1, 'Nag Screen', 'Find a way for bypass the message box and get the 2nd dialog, easy.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/NAG.zip">Download</a></p>', 'vbcrap', 2, 'Xylitol'),
(2, 'CrackMe 1', 'Find the good serial and use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/CrackMe.zip">Download</a></p>', '31337', 2, 'Xylitol'),
(3, 'CrackMe 2', 'Find the good serial and use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/CrackMe2.zip">Download</a></p>', 'kzw578f-os42iyd-d06ht8i', 2, 'Xylitol'),
(4, 'CrackMe Nux 1', 'Find the good serial and use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/crackme.gz">Download</a></p>', 'gd82u13z', 2, 'Xylitol'),
(5, 'Easy Keygen Me #1 ', 'Find the good serial for: REDARENA<br>\r\nand use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/keygenMe.zip">Download</a></p>', 'FSJWFIJW', 2, 'carbotpc'),
(6, 'KeyGen Me #2', 'KeygenMe 2 by carbotpc with code virtualisation :)<br>\r\nGoal is alway the same, find the good serial for: REDARENA<br>\r\nand use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/KeyGen.Me.2.zip">Download</a></p>', 'W@ADW@KD', 3, 'carbotpc'),
(7, 'rEd ArEnA KM1', 'Find the good serial for: rEdArEnA2k11<br>\r\nand use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/REDARENAKM1.zip">Download</a></p>', 'rEdArEnA+RjYzMDlENUZBMUI0RDE0QTMwRDVCMEQwRDZDMEQ3MzQ', 3, '[x]sp!d3r'),
(8, 'Keygen Me #3', 'KeygenMe 3 by carbotpc, Coded with C# 2010, protected with Smartassembly.<br>\r\nFind the good serial and use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/KeyGen.Me.3.-.Net.-.RedArena.zip">Download</a></p>', '9014190556037966', 3, 'carbotpc'),
(9, 'rEd ArEnA KM2', 'A RSA KeygenMe by [x]sp!d3r, find the good serial for: REDARENA<br>\r\nand use it to validate the challenge.\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/REDARENAKM2.zip">Download</a></p>', '551B538FEC25A43696CC2E0FF660D817B520CE751EB73B36341212903ECA1A0E', 4, '[x]sp!d3r'),
(10, 'KeygenMe #1', 'Its actually a math based challenge.<br>\r\nIts actually done in schools.<br>\r\nfind the good serial for: REDARENA<br>\r\n<hr style="text-shadow: none;">\r\n<p style="text-shadow: none;" class="bold">Link :</p>\r\n<p style="text-shadow: none;" class="center"><a style="text-shadow: none;" href="chall/KeyGenMe1KKR.zip">Download</a></p>', '3BA32DCB2DEC0C2A2387427796F5AEE675B75EA05879649E74', 4, 'KKR_WE_RULE');

-- --------------------------------------------------------

--
-- Structure de la table `epreuve_valide`
--

CREATE TABLE IF NOT EXISTS `epreuve_valide` (
  `pseudo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `id_epreuve` int(1) NOT NULL,
  `date_validation` varchar(50) CHARACTER SET utf8 NOT NULL,
  `heure_validation` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `epreuve_valide`
--

INSERT INTO `epreuve_valide` (`pseudo`, `id_epreuve`, `date_validation`, `heure_validation`) VALUES
('Admin', 3, '27/03/2010', '08:52');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`) VALUES
(1, 'Xylitol', 'Welcome gladiators'),
(2, 'culie3', 'Xylisite'),
(3, 'xsp0x21d3r', 'wasup geeks :)'),
(4, '__qpt__', 'heya :)'),
(5, 'MasterUploader', 'whats with this place bro?:p'),
(6, 'xsp0x21d3r', 'it''s like crackmes.de :)'),
(7, 'MasterUploader', 'ahh cool :)'),
(8, 'xsp0x21d3r', 'i''m building a crackme me now :)'),
(9, 'xsp0x21d3r', 'test'),
(10, 'xsp0x21d3r', 'that''s a test'),
(11, 'MafiaOnMove', 'hiya hoo.. I''m in ...'),
(13, 'JeRRy', 'its crackme site , bros?'),
(15, 'Xylitol', '@JeRRy it''s a contest site :P btw there is a hidden dialog (understand why you have a \\''try again\\'' and patch this one for get the second dialog appear)'),
(16, 'JeRRy', 'vb**** then :D'),
(22, 'apuromafo', 'nice red arena ^^ suggestion:  chat box not have date?'),
(18, 'JeRRy', 'ahh now i understand the site :P . Please remove the link and vb**** then :) . Great idea , nice site :)'),
(19, 'JeRRy', 'i got 8 point :D'),
(23, 'apuromafo', 'i got 8 point too JeRRy, see ya in Snd'),
(24, 'xsp0x21d3r', 'what\\''s up yo :)'),
(25, '__qpt__', 'would be cool to see here some harder stuff, not like patching challenges. well, maybe some kind of custom/commercial protector unpackmes or even some malware challenges :P'),
(26, 'xsp0x21d3r', 'commercial protector i don\\''t think it\\''s a good idea :) but agree with custom :D'),
(27, 'Xylitol', 'i don\\''t think chatbox need a date for posted mess :s*'),
(28, 'apuromafo', '__qpt__ ^^ nice to see there im sure that you can solve all if have little time , but check is interesting the area :) too the crackmes.de  , i say the day, for  if someday not have conection or some error check when is ok,   suggestion:how much is online'),
(29, 'apuromafo', 'reaching out to Jerry ^^ 13pts of 16 '),
(30, 'xsp0x21d3r', 'c\\''mon guys try my one x) there will be something more harder +1 ;)'),
(31, '__qpt__', 'I\\''ll solve your one, once i get back home ;)'),
(32, '__qpt__', 'lol, made a kg for that, but then saw, that i\\''ve needed just a valid serial for validation'),
(33, 'xsp0x21d3r', 'lol easy isn\\''t :)'),
(34, '__qpt__', 'well, heres the link: http://www.mediafire.com/?9slzhsqcogu3aw8'),
(35, '__qpt__', 'inet sux here atm, thats why i cant talk via IM'),
(36, 'apuromafo', ':S more crackmes, only must solve the  xsp0x21d3r , when have more time! but are nice :)'),
(37, 'KKR_WE_RULE', 'hello'),
(38, 'hashboy', 'easy crackmes :p'),
(39, 'KKR_WE_RULE', 'hey :)'),
(40, '__qpt__', 'hey :) i guess your exams over?? :P'),
(41, '__qpt__', 'now mine is gonna started :/'),
(42, 'KKR_WE_RULE', 'why are ya not in irc'),
(43, 'KKR_WE_RULE', 'btw, keygenner assistant was All I needed to get +4'),
(44, '__qpt__', 'you are PRO :P'),
(45, 'xsp0x21d3r', 'ouh that\\''s why it was 3 hours :) dunno about RSATool or msieve x)'),
(46, '__qpt__', 'in msieve its 8 mins, in my pc, iirc'),
(47, 'xsp0x21d3r', 'lol core power x)'),
(48, 'Skarz', 'Hello ! :D '),
(49, 'apuromafo', 'Skarz HI!'),
(50, 'Xylitol', 'Added KeygenMe #1 by KKR_WE_RULE'),
(51, '__qpt__', 'hmm, this is going to be inactive place, Xylitol, plz make some advertisements in other sites'),
(52, 'abdulsalman2003', 'any body here'),
(53, 'abdulsalman2003', 'dear sir ,                my computer hard drive death and my data lost my visual foxpro program exe available but my programmer exe protect armadillo software and this file not refox  , i am exe file unpacked but armadillo protection not remove please he'),
(54, 'Xylitol', 'huh ?'),
(55, 'Departure', 'Cool site, what about keygenmes that use HwID\\''s?? I guess they can\\''t be used here?'),
(56, 'Xylitol', 'That can be used but the validation of the challenge will be do manually by me'),
(57, 'Killboy', ':0'),
(58, 'xsp0x21d3r', 'hi mate nice to see you arround :)'),
(59, 'extruder', 'hi all'),
(60, 'romario279', 'where do i get the newest spyeye crack?'),
(64, 'ekmekci14', 'Hey'),
(65, 'xsp0x21d3r', '@romario279: could you stop this or you\\''ll be BANNED?! RED ARENA is not for crack reqs.'),
(66, 'bresti', 'i cant find the download folder'),
(67, 'xsp0x21d3r', 'what download folde???'),
(68, 'kinhvaf', 'hello all'),
(69, 'FOLKMaN', 'KKR_WE_RULE'),
(70, 'dream08', 'hi'),
(71, 'dream08', 'can anyone crack this ?    http://redcrew.astalavista.ms/board/showthread.php?t=345'),
(72, 'damnferno', 'hello'),
(73, 'PapaBango', 'Hi RED MEN :)'),
(74, 'chill', 'wow this is pretty neat'),
(75, 'chill', 'it\\''s a pretty refreshing interface'),
(76, 'posky123', 'spyeye'),
(77, 'chill', 'lolz spyeye? old news'),
(78, 'siddiquiamirali', 'babylone9'),
(79, 'N3XON', 'yo'),
(80, 'N3XON', '^^'),
(81, 'Expl01t', 'Cool thing with fishes =)'),
(82, 'Neptune', 'Hi ! '),
(83, 'bjelena', 'hi RED, '),
(84, 'bjelena', 'i want to become red, were to look for source?'),
(85, 'PhysX', 'Hi'),
(86, 'Rahul0981235', 'hi'),
(96, 'monymonylover', 'rahuullll'),
(97, 'idid231', 'Hello there, i solved the Nag Screen By Xylitol but i patched the file, i use olly to patch it, but i can not send my patched file to \\"validate\\" what should i do? I also can not send private message so i post it to here, please let me know, thank you.'),
(98, 'idid231', 'Oh sorry, i missed, have not solved it yet.'),
(99, 'b0tluk', 'hello =)'),
(100, 'Maxtor', 'lol'),
(101, 'colonna', 'LOL'),
(102, 'S3aRcH', 'j'),
(103, 'S3aRcH', 'did you solve'),
(104, 'uKno_Chrigga', 'hey'),
(105, 'blue_devil', 'arena Rocks \\m/ thanks ppl'),
(106, 'blue_devil', 'this arena needs a forum'),
(107, 'jox3n', 'Hi'),
(108, 'blue_devil', 'hi'),
(109, 'Noteworthy', 'Hey !'),
(110, 'blue_devil', 'Hi Noteworthy!'),
(111, 'blue_devil', 'i cannot register the forum =('),
(112, 'riverstore', 'I can''t register the forum too'),
(113, 'blue_devil', 'where r u Xylitol? we cant register the forum =)'),
(114, 'Jhonjhon_123', 'hello'),
(115, 'Jhonjhon_123', 'hi'),
(116, 'BarelyBreathing', 'hello '),
(117, 'Hallerrandro', 'hi'),
(118, 'RedRose', 'hello'),
(119, 'RedRose', 'hellos'),
(120, 'KRLSZDVLPR', 'hi '),
(121, 'KRLSZDVLPR', 'do you speak turkish'),
(122, 'RedRose', 'ooo yess'),
(123, 'RedRose', 'where are you from ? '),
(124, 'RedRose', 'how are you '),
(125, 'atorrrr', 'yo'),
(126, 'xsp0x21d3r', 'hello :) it''s been a while :D c''mon guys contribute..'),
(127, 'pompa', 'hello guys'),
(128, 'EasyRider', 'Hy REDs'),
(129, 'NUB3R', 'hello'),
(130, 'bresti', 'hello boys'),
(131, 'Stresstester', 'Hi'),
(132, 'diablo2', 'hi'),
(133, 'MaxxaM', 'hello for all please can you tell me where are you from '),
(134, 'blue_devil', 'what happened to forums guys??'),
(135, 'blue_devil', 'hey xsp0x21d3r what happened to your blog?'),
(136, 'Papo2010', 'wazap'),
(137, 'nieo_007', 'Hi frnds'),
(138, 'LordCoder', 'Hi everytone!'),
(139, 'RedRose', 'hello '),
(140, 'Dreamer', 'hi all');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=308 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `md5_id`, `full_name`, `user_name`, `user_email`, `user_level`, `pwd`, `headline`, `country`, `tel`, `avatar`, `website`, `date`, `users_ip`, `approved`, `activation_code`, `banned`, `ckey`, `ctime`, `title`, `score`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Admin', 'Admin', '', 1, '', 'There is no patch for human stupidity', '', '', 'images/pdv.jpg', 'http://redcrew.astalavista.ms/', '03-27-2010, 07:36:14 am', '00.000.000.000', 1, 2551, 0, 'bqx86k4', '1355145339', 'Site Admin', 0);