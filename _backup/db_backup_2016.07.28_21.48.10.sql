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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE horario
-- -------------------------------------------
DROP TABLE IF EXISTS horario;
CREATE TABLE IF NOT EXISTS `horario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HoraInicio` time NOT NULL,
  `HoraFin` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `idPersonal` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `idAreaDeportiva` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idAreaDeportiva` (`idAreaDeportiva`),
  KEY `idCliente` (`idCliente`),
  KEY `idHorario` (`idHorario`),
  KEY `idPersonal` (`idPersonal`),
  CONSTRAINT `FK_Reserva_AreaDeportiva` FOREIGN KEY (`idAreaDeportiva`) REFERENCES `areadeportiva` (`Id`),
  CONSTRAINT `FK_Reserva_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`ID`),
  CONSTRAINT `FK_Reserva_Horario` FOREIGN KEY (`idHorario`) REFERENCES `horario` (`ID`),
  CONSTRAINT `FK_Reserva_Personal` FOREIGN KEY (`idPersonal`) REFERENCES `personal` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `Nombre` varchar(30) NOT NULL,
  `Passw` varchar(50) NOT NULL,
  `tipo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE DATA areadeportiva
-- -------------------------------------------
INSERT INTO `areadeportiva` (`Id`,`Nombre`,`Descripcion`) VALUES
('1','Cancha','Fronton');



-- -------------------------------------------
-- TABLE DATA cliente
-- -------------------------------------------
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('1','7777777','pedro angel','Cabrera Lopez','','B\\ Cruz del Sur','0','Masculino');
INSERT INTO `cliente` (`ID`,`CI`,`Nombre`,`Apellidos`,`email`,`Direccion`,`Telefono`,`Sexo`) VALUES
('2','456498','Eloisa','Gutierrez','eloguti@gmail.com','doble via la guardia','78946555','maxlength');



-- -------------------------------------------
-- TABLE DATA horario
-- -------------------------------------------
INSERT INTO `horario` (`ID`,`HoraInicio`,`HoraFin`) VALUES
('1','08:00:00','00:00:00');



-- -------------------------------------------
-- TABLE DATA personal
-- -------------------------------------------
INSERT INTO `personal` (`id`,`Nombre`,`Direccion`,`Telefono`) VALUES
('1','juan','totaises','2343546');



-- -------------------------------------------
-- TABLE DATA reserva
-- -------------------------------------------
INSERT INTO `reserva` (`ID`,`Estado`,`Fecha`,`idCliente`,`idPersonal`,`idHorario`,`idAreaDeportiva`) VALUES
('1','0','2016-07-28','1','1','1','1');



-- -------------------------------------------
-- TABLE DATA usuario
-- -------------------------------------------
INSERT INTO `usuario` (`Id`,`Nombre`,`Passw`,`tipo`) VALUES
('8','rene','8cb2237d0679ca88db6464eac60da96345513964','1');
INSERT INTO `usuario` (`Id`,`Nombre`,`Passw`,`tipo`) VALUES
('9','empleado1','8cb2237d0679ca88db6464eac60da96345513964','0');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
