

-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `workouts`;
CREATE DATABASE `workouts` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `workouts`;

DROP TABLE IF EXISTS `excercise`;
CREATE TABLE `excercise` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `wkout_id` tinyint(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `load` tinyint(11) DEFAULT NULL,
  `reps` tinyint(11) DEFAULT NULL,
  `rpe` tinyint(2) DEFAULT NULL,
  `rest` tinyint(3) DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wkout_id` (`wkout_id`),
  CONSTRAINT `excercise_ibfk_1` FOREIGN KEY (`wkout_id`) REFERENCES `workout` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(11) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1,	'peter',	'peter.jurek@gmail.com',	'112233'),
(2,	'alena',	'alena.vernusova@gmail.com',	'secretalena');

DROP TABLE IF EXISTS `workout`;
CREATE TABLE `workout` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `wkout_date` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `sport` text COLLATE utf8_czech_ci NOT NULL,
  `wkout_header` tinytext COLLATE utf8_czech_ci NOT NULL,
  `wkout_desc` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


-- 2021-05-20 19:36:39
