CREATE DATABASE  IF NOT EXISTS `arqui_lab`;
USE `arqui_lab`;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_usuario`)
);
