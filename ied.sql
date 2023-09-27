-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-09-2023 a las 05:50:14
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ied`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admisiones_matriculas`
--

DROP TABLE IF EXISTS `admisiones_matriculas`;
CREATE TABLE IF NOT EXISTS `admisiones_matriculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`Id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Lector');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_academica_pedagogica`
--

DROP TABLE IF EXISTS `gestion_academica_pedagogica`;
CREATE TABLE IF NOT EXISTS `gestion_academica_pedagogica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_administrativa_financiera`
--

DROP TABLE IF EXISTS `gestion_administrativa_financiera`;
CREATE TABLE IF NOT EXISTS `gestion_administrativa_financiera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_comercial`
--

DROP TABLE IF EXISTS `gestion_comercial`;
CREATE TABLE IF NOT EXISTS `gestion_comercial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_estudiantil`
--

DROP TABLE IF EXISTS `gestion_estudiantil`;
CREATE TABLE IF NOT EXISTS `gestion_estudiantil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_humana`
--

DROP TABLE IF EXISTS `gestion_humana`;
CREATE TABLE IF NOT EXISTS `gestion_humana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_integral`
--

DROP TABLE IF EXISTS `gestion_integral`;
CREATE TABLE IF NOT EXISTS `gestion_integral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_tic`
--

DROP TABLE IF EXISTS `gestion_tic`;
CREATE TABLE IF NOT EXISTS `gestion_tic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

DROP TABLE IF EXISTS `indicadores`;
CREATE TABLE IF NOT EXISTS `indicadores` (
  `Id` int(200) NOT NULL AUTO_INCREMENT,
  `objetivocal` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `objetivoproc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `proceso` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `indicador` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `meta` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tri1` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tri2` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tri3` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `tri4` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `resultados` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cumplimiento` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(200) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Id_cargo` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_cargo` (`Id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Id`, `usuario`, `password`, `Id_cargo`) VALUES
(2, 'usuario123@gmail.com', '987654321', 2),
(4, 'adminpruebas@gmail.com', '123456789', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planeacion_de_la_normatividad`
--

DROP TABLE IF EXISTS `planeacion_de_la_normatividad`;
CREATE TABLE IF NOT EXISTS `planeacion_de_la_normatividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planeacion_estrategica`
--

DROP TABLE IF EXISTS `planeacion_estrategica`;
CREATE TABLE IF NOT EXISTS `planeacion_estrategica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subadmisiones_matriculas`
--

DROP TABLE IF EXISTS `subadmisiones_matriculas`;
CREATE TABLE IF NOT EXISTS `subadmisiones_matriculas` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_academica_pedagogica`
--

DROP TABLE IF EXISTS `subgestion_academica_pedagogica`;
CREATE TABLE IF NOT EXISTS `subgestion_academica_pedagogica` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_administrativa_financiera`
--

DROP TABLE IF EXISTS `subgestion_administrativa_financiera`;
CREATE TABLE IF NOT EXISTS `subgestion_administrativa_financiera` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_comercial`
--

DROP TABLE IF EXISTS `subgestion_comercial`;
CREATE TABLE IF NOT EXISTS `subgestion_comercial` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_estudiantil`
--

DROP TABLE IF EXISTS `subgestion_estudiantil`;
CREATE TABLE IF NOT EXISTS `subgestion_estudiantil` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_humana`
--

DROP TABLE IF EXISTS `subgestion_humana`;
CREATE TABLE IF NOT EXISTS `subgestion_humana` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_integral`
--

DROP TABLE IF EXISTS `subgestion_integral`;
CREATE TABLE IF NOT EXISTS `subgestion_integral` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgestion_tic`
--

DROP TABLE IF EXISTS `subgestion_tic`;
CREATE TABLE IF NOT EXISTS `subgestion_tic` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subplaneacion_de_la_normatividad`
--

DROP TABLE IF EXISTS `subplaneacion_de_la_normatividad`;
CREATE TABLE IF NOT EXISTS `subplaneacion_de_la_normatividad` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subplaneacion_estrategica`
--

DROP TABLE IF EXISTS `subplaneacion_estrategica`;
CREATE TABLE IF NOT EXISTS `subplaneacion_estrategica` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `archivo` longblob,
  `tipo` varchar(150) NOT NULL,
  `versio` int(50) NOT NULL,
  `codigo` varchar(150) NOT NULL,
  `fecha_apro` varchar(150) NOT NULL,
  `fecha_imp` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `conservacion` varchar(150) NOT NULL,
  `Id_destino` int(50) NOT NULL,
  `tipoarchivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tituloindicadores`
--

DROP TABLE IF EXISTS `tituloindicadores`;
CREATE TABLE IF NOT EXISTS `tituloindicadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `version` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo4` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo5` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo6` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo7` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo8` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo9` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo10` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo11` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `titulo12` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
