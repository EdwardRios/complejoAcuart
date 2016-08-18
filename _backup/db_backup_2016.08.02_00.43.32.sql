-- -------------------------------------------
SET AUTOCOMMIT=0;
START TRANSACTION;
SET SQL_QUOTE_SHOW_CREATE = 1;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- -------------------------------------------
-- -------------------------------------------
-- START BACKUP
-- -------------------------------------------
-- -------------------------------------------
-- TABLE areadeportiva
-- -------------------------------------------
DROP TABLE IF EXISTS areadeportiva;
CREATE TABLE IF NOT EXISTS `areadeportiva` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE cliente
-- -------------------------------------------
DROP TABLE IF EXISTS cliente;
CREATE TABLE IF NOT EXISTS `cliente` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CI` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `Direccion` varchar(120) NOT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Sexo` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE horario
-- -------------------------------------------
DROP TABLE IF EXISTS horario;
CREATE TABLE IF NOT EXISTS `horario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HoraInicio` time NOT NULL,
  `HoraFin` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE personal
-- -------------------------------------------
DROP TABLE IF EXISTS personal;
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE reserva
-- -------------------------------------------
DROP TABLE IF EXISTS reserva;
CREATE TABLE IF NOT EXISTS `reserva` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(10) NOT NULL,
  `Fecha` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `idAreaDeportiva` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idCliente` (`idCliente`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idHorario` (`idHorario`),
  KEY `idAreaDeportiva` (`idAreaDeportiva`),
  CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`ID`),
  CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`Id`),
  CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`idHorario`) REFERENCES `horario` (`ID`),
  CONSTRAINT `reserva_ibfk_4` FOREIGN KEY (`idAreaDeportiva`) REFERENCES `areadeportiva` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE servicio
-- -------------------------------------------
DROP TABLE IF EXISTS servicio;
CREATE TABLE IF NOT EXISTS `servicio` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Precio` float(12,5) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE solicita
-- -------------------------------------------
DROP TABLE IF EXISTS solicita;
CREATE TABLE IF NOT EXISTS `solicita` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `idServicio` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `idServicio` (`idServicio`),
  KEY `idCliente` (`idCliente`),
  CONSTRAINT `solicita_ibfk_1` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`Id`),
  CONSTRAINT `solicita_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE usuario
-- -------------------------------------------
DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Passw` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  `Apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CI` int(11) NOT NULL,
  `Direccion` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE DATA areadeportiva
-- -------------------------------------------
INSERT INTO `areadeportiva` (`Id`,`Nombre`,`Descripcion`) VALUES
('1','Cancha','Fronton');
INSERT INTO `areadeportiva` (`Id`,`Nombre`,`Descripcion`) VALUES
('2','WALLY 1','Cerrado');
INSERT INTO `areadeportiva` (`Id`,`Nombre`,`Descripcion`) VALUES
('3','Fronton','Abierto');
INSERT INTO `areadeportiva` (`Id`,`Nombre`,`Descripcion`) VALUES
('4','Futbol 1','abierto');



-- -------------------------------------------
-- TABLE DATA cliente
-- -------------------------------------------
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('1','7777777','pedro angel','Cabrera Lopez','','B\\ Cruz del Sur','0','Masculino');
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('2','456498','Eloisa','Gutierrez','eloguti@gmail.com','doble via la guardia','78946555','Femenino');
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('3','54521561','Juan Carlos','Arcile','Jcarl@gmail.com','Calle Colon # 347','598498','Masculino');
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('4','3838657','Nataly','Justiniano ','Natyjust@gmail.com','Barrio Chacarilla','65494','Femenino');
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('5','767569','maria teresa ','taborga','maria_rt@hotmail.com','Urb. Rico','76900911','0');
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('7','55999594','Carla','Dominguez','carlita@hotmail.com','Los Castillas','86984','0');



-- -------------------------------------------
-- TABLE DATA horario
-- -------------------------------------------
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('1','08:00:00','09:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('2','09:00:00','10:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('3','10:00:00','11:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('6','11:00:00','12:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('7','12:00:00','13:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('8','13:00:00','14:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('9','14:00:00','15:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('10','16:00:00','17:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('11','17:00:00','18:00:00');
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('12','18:00:00','19:00:00');



-- -------------------------------------------
-- TABLE DATA personal
-- -------------------------------------------
INSERT INTO `personal` (`id`,`Nombre`,`Direccion`,`Telefono`) VALUES
('1','juan','totaises','2343546');



-- -------------------------------------------
-- TABLE DATA reserva
-- -------------------------------------------
INSERT INTO `reserva` (`ID`,`Estado`,`Fecha`,`idCliente`,`idUsuario`,`idHorario`,`idAreaDeportiva`) VALUES
('1','Ocupado','2016-08-01','4','8','1','2');
INSERT INTO `reserva` (`ID`,`Estado`,`Fecha`,`idCliente`,`idUsuario`,`idHorario`,`idAreaDeportiva`) VALUES
('2','Ocupado','2016-08-01','4','8','1','2');



-- -------------------------------------------
-- TABLE DATA usuario
-- -------------------------------------------
INSERT INTO `usuario` (`Id`,`Nombre`,`Passw`,`tipo`,`Apellido`,`CI`,`Direccion`,`Telefono`) VALUES
('8','rene','8cb2237d0679ca88db6464eac60da96345513964','1','Ribera','7676571','Barrio Rico','76008027');
INSERT INTO `usuario` (`Id`,`Nombre`,`Passw`,`tipo`,`Apellido`,`CI`,`Direccion`,`Telefono`) VALUES
('9','empleado1','8cb2237d0679ca88db6464eac60da96345513964','0','empleado','1564446','equipetrol','3265484');
INSERT INTO `usuario` (`Id`,`Nombre`,`Passw`,`tipo`,`Apellido`,`CI`,`Direccion`,`Telefono`) VALUES
('11','szsdcxvxv','8cb2237d0679ca88db6464eac60da96345513964','0','xzvxcvcxv','34563','zxcvxvvxvccxc','2342343');
INSERT INTO `usuario` (`Id`,`Nombre`,`Passw`,`tipo`,`Apellido`,`CI`,`Direccion`,`Telefono`) VALUES
('12','Edward','7c4a8d09ca3762af61e59520943dc26494f8941b','0','Rios','67895782','Av. Pirai','76598741');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------