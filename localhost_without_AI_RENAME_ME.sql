-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `u04todo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `u04todo`;

DROP TABLE IF EXISTS `u04items`;
CREATE TABLE `u04items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `done` int(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `u04items` (`id`, `user_id`, `title`, `text`, `done`, `created`, `modified`) VALUES
(142,	173,	'dinner',	'take out chicken',	1,	'2021-01-08 21:27:20',	'2021-01-08 18:03:02'),
(190,	190,	'ct',	'new timstamp',	0,	'2021-01-08 19:05:29',	'2021-01-08 19:01:29'),
(200,	173,	'clean',	'basement',	1,	'2021-01-08 21:27:19',	'2021-01-08 20:46:19');

DROP TABLE IF EXISTS `u04users`;
CREATE TABLE `u04users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `u04users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(170,	'account',	'account',	'2021-01-07 12:45:19',	'2021-01-07 12:45:19'),
(171,	'frank',	'frank',	'2021-01-07 12:56:28',	'2021-01-07 12:56:28'),
(172,	'user1',	'user',	'2021-01-07 13:04:46',	'2021-01-07 13:04:46'),
(173,	'user2',	'user',	'2021-01-07 13:07:01',	'2021-01-07 13:07:01'),
(174,	'user2',	'user',	'2021-01-07 13:22:37',	'2021-01-07 13:22:37'),
(175,	'user3',	'user',	'2021-01-07 13:23:11',	'2021-01-07 13:23:11'),
(176,	'frankie',	'frankie',	'2021-01-07 14:12:41',	'2021-01-07 14:12:41'),
(189,	'sam',	'123',	'2021-01-08 18:57:04',	'2021-01-08 18:57:04');

-- 2021-01-08 21:45:07
