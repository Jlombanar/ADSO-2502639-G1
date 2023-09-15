-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 08-09-2023 a las 23:45:40
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `Id_a` int(11) NOT NULL,
  `Nombre_a` varchar(45) NOT NULL,
  `duracion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Id_a`, `Nombre_a`, `duracion`) VALUES
(1, 'Marketing', '8 Semestres'),
(2, 'Contaduria', '5 Semestres'),
(3, 'Ing.Software', '10 semestres'),
(4, 'Psicologia', '9 semestres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `Id_docente` int(11) NOT NULL,
  `nombre_d` varchar(45) NOT NULL,
  `correo_d` varchar(45) NOT NULL,
  `profesion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`Id_docente`, `nombre_d`, `correo_d`, `profesion`) VALUES
(1, 'Luisa Campo', 'CamLuisa@gmail.com', 'Diseñadora'),
(2, 'Pedro Perez', 'Garabito78@gmail.com', 'Ing. Sistemas'),
(3, 'Hector Montealegre', 'FishMath@gmail.com', 'Licenciado en Matematicas'),
(4, 'Claudia Lopez', 'Jperez@gmail.com', 'Abogado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id` int(11) NOT NULL,
  `nombrecompleto` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `Id_docente` int(11) NOT NULL,
  `Id_a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Id`, `nombrecompleto`, `edad`, `correo`, `Id_docente`, `Id_a`) VALUES
(3, 'Joshue Jaramillo', 20, 'Jmarillo@gmail.com', 4, 2),
(4, 'Paula Clavijo', 20, 'St_clavijo21@gmail.com', 2, 1),
(13, 'Kike Manrique', 23, 'Mkique@gmail.com', 3, 1),
(14, 'Kike Manrique', 23, 'Mkique@gmail.com', 3, 1),
(15, 'lucas', 19, 'la@gmail.com', 1, 2),
(17, 'Juana', 0, 'Juana@gmail.com', 2, 3),
(18, 'Juana', 20, 'Juana@gmail.com', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`Id_a`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`Id_docente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_docente` (`Id_docente`,`Id_a`),
  ADD KEY `Id_a` (`Id_a`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `Id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `Id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`Id_docente`) REFERENCES `docentes` (`Id_docente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`Id_a`) REFERENCES `asignatura` (`Id_a`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
