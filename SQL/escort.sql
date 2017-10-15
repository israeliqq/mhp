-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-10-2017 a las 20:56:53
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escort`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `ID` int(11) NOT NULL,
  `NOTA` int(11) NOT NULL,
  `MENSAJE` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FK_CLIENTE` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  `FK_ESCORT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `PASS` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escort`
--

CREATE TABLE `escort` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NACIONALIDAD` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RAZA` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EDAD` tinyint(2) DEFAULT NULL,
  `ESTATURA` float DEFAULT NULL,
  `MEDIDAS` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PESO` float DEFAULT NULL,
  `TELEFONO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIRECCION` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CIUDAD` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DEPTO` tinyint(1) DEFAULT NULL,
  `RESENA` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `VALOR` int(11) DEFAULT NULL,
  `HORA_I` time DEFAULT NULL,
  `HORA_F` time DEFAULT NULL,
  `CLASIFICACION` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `RETOQUE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `escort`
--

INSERT INTO `escort` (`ID`, `NOMBRE`, `NACIONALIDAD`, `RAZA`, `EDAD`, `ESTATURA`, `MEDIDAS`, `PESO`, `TELEFONO`, `DIRECCION`, `CIUDAD`, `DEPTO`, `RESENA`, `VALOR`, `HORA_I`, `HORA_F`, `CLASIFICACION`, `RETOQUE`) VALUES
(2, 'CAROL', 'CHILENA', 'TRIGUEÑA', 25, 1.68, '99-63-100', 62, '56976741943', 'JUAN MARTINEZ 123', 'IQUIQUE', 1, 'TENGO PARA TI PODRAS VER SOY 100% REAL FOTOS CASERAS Y ESTUDIO PARA QUE Tú VEAS QUE SOY UNA CHICA TAL CUAL SIN MENTIRAS. SOLO VEN Y DISFRUTA DE TODA MI SENSUALIDAD Y BELLEZA QUE TENGO PARA ENTREGARTE SOY UNA CHICA MUY ... RELAJADA Y APASIONADA TENDRáS UN TRATO DE POLOLO QUE NO OLVIDARAS SOLO LLAMAME.', 70000, '16:00:00', '04:00:00', 'VIP', 5),
(3, 'CARLA', 'VENEZOLANA', 'CAUCÁSICA', 25, 1.63, '89-62-80', 57, '94567896', 'BARROS ARANA 123', 'ARICA', 1, NULL, 80000, '13:00:00', '06:00:00', 'VIP', 2),
(4, 'ESTEFANIA', 'CHILENA', 'MORENA', 28, 1.72, '95-60-90', 59, '95697890', 'VIVAR 123', 'IQUIQUE', 1, 'FUU', 50000, '06:00:00', '15:00:00', 'GOLDEN', 5),
(5, 'CIELO', 'URUGUAYA', 'TRIGUEÑA', 33, 1.65, '94-62-96', 63, '98767890', 'ANIBAL PINTO 123', 'IQUIQUE', 1, NULL, 95000, '08:00:00', '15:00:00', 'VIP', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `ID` int(11) NOT NULL,
  `PRIORIDAD` int(11) DEFAULT NULL,
  `RUTA` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MOSTRAR` tinyint(1) DEFAULT NULL,
  `FK_ESCORT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`ID`, `PRIORIDAD`, `RUTA`, `MOSTRAR`, `FK_ESCORT`) VALUES
(1, 1, 'd349e976db592b42f3efd143492a77a4.png', 1, 1),
(5, 1, '91d798b6d2ab60e617874b99831c0dc1.jpeg', 1, 2),
(6, 1, 'c2dca197132e1afde27f9b9ca86e4c4c.jpeg', 1, 2),
(7, 1, 'a91beeed71a8bb2ab80dd91ce06b9384.jpeg', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ESCORT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ESCORT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `ID` int(11) NOT NULL,
  `CONT` int(11) NOT NULL,
  `FK_ESCORT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `escort`
--
ALTER TABLE `escort`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escort`
--
ALTER TABLE `escort`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
