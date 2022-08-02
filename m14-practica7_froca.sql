-- Francesc Roca Rodriguez
CREATE DATABASE IF NOT EXISTS `m14-practica7-froca`;
USE `m14-practica7-froca`;
CREATE TABLE `usuaris` (
  `id` int(3) NOT NULL,
  `usuari` varchar(13) DEFAULT NULL,
  `contrasenya` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `usuaris` (`id`, `usuari`, `contrasenya`) VALUES
(1, 'Francesc', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db');


CREATE TABLE `visites` (
  `idvisites` int(7) NOT NULL,
  `visites` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `visites` (`idvisites`, `visites`) VALUES
(1, 299);


ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);


ALTER TABLE `visites`
  ADD PRIMARY KEY (`idvisites`);


ALTER TABLE `usuaris`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `visites`
  MODIFY `idvisites` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
