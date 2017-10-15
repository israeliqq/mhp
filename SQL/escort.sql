-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2017 a las 21:57:53
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
(2, 'FLORENCIA', 'PARAGUAYA', 'TRIGUEÑA', 25, 1.63, '100-60-100', 62, '56976741943', 'CAVANCHA', 'IQUIQUE', 1, 'TENGO PARA TI PODRAS VER SOY 100% REAL FOTOS CASERAS Y ESTUDIO PARA QUE Tú VEAS QUE SOY UNA CHICA TAL CUAL SIN MENTIRAS. SOLO VEN Y DISFRUTA DE TODA MI SENSUALIDAD Y BELLEZA QUE TENGO PARA ENTREGARTE SOY UNA CHICA MUY ... RELAJADA Y APASIONADA TENDRÁS UN TRATO DE POLOLO QUE NO OLVIDARAS SOLO LLAMAME.', 50000, '16:00:00', '04:00:00', 'VIP', 5),
(3, 'JAZMIN', 'PARAGUAYA', 'TRIGUEÑA', 25, 1.56, '92-62-95', 57, '56989196125', 'CAVANCHA', 'IQUIQUE', 1, 'ESCORT EN IQUIQUE VEN POR UNA BUENA RUSA DE ESTA FLAQUITA RICA AMOROSITA QUE SOLO VENGO A ENTREGARTE LO MEJOR TRATO DE POLOLO Y AMANTE SERVICIO DE PRIMERA ESTOY RECIéN LLEGADITA PARA COMPLACERTE NO TE ARREPENTIRáS....', 50000, '13:00:00', '06:00:00', 'VIP', 5),
(4, 'SCARLLET', 'COLOMBIANA', 'MORENA', 25, 1.6, '93-62-98', 56, '56968708858', 'CENTRO IQUIQUE', 'IQUIQUE', 1, 'SOY LA MEJOR MEZCLA DE DULZURA , SENSUALIDAD Y ELEGANCIA . ME ENCANTA HACER MIMOS  , EN MI ENCONTRARÁS TAMBIÉN A LA COMPAÑÍA PERFECTA PARA CENAS , VIAJES O LO QUE DESEES . TE OFREZCO UN SERVICIO EXCLUSIVO Y EXQUISITO . SIEMPRE PIDO Y DOY LA MAYOR DISCRECIÓN POSIBLE . TAMBIÉN ME ENCANTA DAR MASAJES DE RELAJACIÓN PARA FINALIZAR NUESTRO ENCUENTRO , VEN Y ENTRÉGATE A MIS MANOS QUE TE HARAN LLEGAR AL PLACER ABSOLUTO . ', 40000, '13:00:00', '04:00:00', 'VIP', 5),
(5, 'ANDREA', 'PARAGUAYA', 'TRIGUEÑA', 27, 1.69, '90-63-130', 60, '56940697327', 'CAVANCHA', 'IQUIQUE', 1, 'HOLA SOY ANDREA UNA SEXY CHICA BRASILERA RECIEN LLEGADA, FOGOSA, ATENTA, NINFOMANA,DISPUESTA A COMPLACERTE EN TODO LO QUE GUSTES ... LLAMAME NO TE VAS ARREPENTIR', 40000, '08:00:00', '04:00:00', 'VIP', 4);

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
(7, 1, 'a91beeed71a8bb2ab80dd91ce06b9384.jpeg', 1, 2),
(8, 1, 'dfac5c07568005ddbf206290a8826f0f.jpeg', 1, 3),
(9, 1, 'c0783a19311c044247cfaa17a06cf0a0.jpeg', 1, 3),
(10, 1, '850b190ba188199a3cf84a74de07f3a1.jpeg', 1, 3),
(11, 1, '5b14fb53ca2f6253c53e50ce904ee8ab.jpeg', 1, 3),
(12, 1, '1247b8f17ffb2ae78f6d1063eeef94e5.jpeg', 1, 4),
(13, 1, 'e8d2a1b9ade10edc429f155bbccb83ec.jpeg', 1, 4),
(14, 1, 'f1aa252a47e16d07a0752ee1ef740f7b.jpeg', 1, 4),
(15, 1, '66974d5942114d6db835750b5a355717.jpeg', 1, 4),
(16, 1, '544f85eb8c7c7c8661bb204dce7ff714.jpeg', 1, 5),
(17, 1, '91a3f1d4586388ef35873f82d343b279.jpeg', 1, 5),
(18, 1, '610985ede9058365e6b26d50a3214bfa.jpeg', 1, 5),
(19, 1, 'f4d6e9bfbd82420b04e7ac7ce3f19961.jpeg', 1, 5),
(20, 1, '79458dac62951661dad5df3575b9dbf1.jpeg', 1, 5),
(21, 1, '01b31e1a1dad787156f36a5f9970c789.jpeg', 1, 5);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
