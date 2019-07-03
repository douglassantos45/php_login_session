-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`id`, `nome`, `email`, `status`) VALUES
(1,	'douglas',	'douglas',	'1'),
(2,	'jose',	'jose',	'1');

DROP TABLE IF EXISTS `visitas`;
CREATE TABLE `visitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_final` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `visitas` (`id`, `usuario_id`, `data_inicio`, `data_final`, `status`) VALUES
(1,	1,	'2019-07-02 20:29:17',	'2019-07-02 20:29:17',	'1'),
(4,	1,	'2019-07-02 20:38:24',	'2019-07-03 20:38:24',	'1'),
(5,	1,	'2019-07-02 20:38:26',	'2019-07-03 20:38:26',	'1'),
(6,	1,	'2019-07-02 20:41:27',	'2019-07-03 20:41:27',	'1'),
(7,	1,	'2019-07-02 20:42:45',	'2019-07-03 20:42:45',	'1'),
(8,	1,	'2019-07-02 20:42:50',	'2019-07-03 20:42:50',	'1'),
(9,	1,	'2019-07-02 20:43:06',	'2019-07-03 20:43:06',	'1'),
(10,	1,	'2019-07-02 20:43:19',	'2019-07-03 20:43:19',	'1'),
(11,	1,	'2019-07-02 20:50:11',	'2019-07-03 20:50:11',	'0'),
(12,	1,	'2019-07-02 21:02:37',	'2019-07-03 21:02:37',	'1'),
(13,	1,	'2019-07-02 21:03:36',	'2019-07-03 21:03:36',	'1'),
(14,	1,	'2019-07-02 21:06:00',	'2019-07-03 21:06:00',	'1'),
(15,	1,	'2019-07-02 21:06:23',	'2019-07-03 21:06:23',	'1'),
(16,	1,	'2019-07-02 21:06:44',	'2019-07-03 21:06:44',	'1'),
(17,	1,	'2019-07-02 21:06:58',	'2019-07-03 21:06:58',	'1'),
(18,	1,	'2019-07-02 21:07:01',	'2019-07-03 21:07:01',	'1');

-- 2019-07-03 00:09:20
