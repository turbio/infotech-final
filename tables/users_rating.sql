-- Adminer 4.0.2 MySQL dump
-- Note: placeholder table. Not final version
-- will probably need other fields we haven't thought of yet
SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users_rating`;
CREATE TABLE `users_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `avg_rating` int(11) NOT NULL,
  `fame` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- 2015-06-04 16:15:53