-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2022 a las 04:47:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista_p1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(10) NOT NULL,
  `id_persona_fk` bigint(20) NOT NULL,
  `no_cta` int(10) NOT NULL,
  `account_confirm` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_pase_fk` bigint(20) NOT NULL,
  `id_alumno_fk` int(10) NOT NULL,
  `confirmada` tinyint(2) NOT NULL,
  `check_retardo` tinyint(2) DEFAULT NULL,
  `value` decimal(4,2) NOT NULL,
  `url_justificante` text,
  `upload_date_justificante` datetime DEFAULT NULL,
  `estatus_rev_just` tinyint(2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(5) NOT NULL,
  `id_periodo_fk` int(5) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `porcentaje_min` int(3) NOT NULL,
  `dias` varchar(50) NOT NULL COMMENT 'Enumerar con 1,2,3,4,5,6,7 y separar con SPPLOT en JS',
  `is_porcentual` tinyint(2) NOT NULL COMMENT 'Manejar Porcentual o Decimal Sobre 10 o sobre 100',
  `puntaje_final` int(3) NOT NULL,
  `tipo_puntaje` tinyint(2) NOT NULL,
  `retardo_is_falta` int(3) NOT NULL,
  `no_clases` int(3) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `codigo_invitacion` varchar(30) NOT NULL,
  `link_invitacion` text NOT NULL,
  `estatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoalumno`
--

CREATE TABLE `grupoalumno` (
  `id_grupo_fk` int(5) NOT NULL,
  `id_alumno_fk` int(10) NOT NULL,
  `estatus` tinyint(2) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paselista`
--

CREATE TABLE `paselista` (
  `id_pase` bigint(20) NOT NULL,
  `id_grupo_fk` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `notas` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(5) NOT NULL,
  `id_profesor` int(5) NOT NULL,
  `nombre_periodo` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `estado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` bigint(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `app` varchar(40) NOT NULL,
  `apm` varchar(40) NOT NULL,
  `sexo` tinyint(2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `avatar` text NOT NULL,
  `pw` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(5) NOT NULL,
  `id_persona_fk` bigint(20) NOT NULL,
  `grado_academico` varchar(32) DEFAULT NULL,
  `carrera_esp` varchar(32) DEFAULT NULL,
  `account_confirm` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_persona_fk` (`id_persona_fk`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_pase_fk`,`id_alumno_fk`),
  ADD KEY `id_pase_fk` (`id_pase_fk`),
  ADD KEY `id_alumno_fk` (`id_alumno_fk`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_periodo_fk` (`id_periodo_fk`);

--
-- Indices de la tabla `grupoalumno`
--
ALTER TABLE `grupoalumno`
  ADD PRIMARY KEY (`id_grupo_fk`,`id_alumno_fk`),
  ADD KEY `id_grupo_fk` (`id_grupo_fk`),
  ADD KEY `id_alumno_fk` (`id_alumno_fk`);

--
-- Indices de la tabla `paselista`
--
ALTER TABLE `paselista`
  ADD PRIMARY KEY (`id_pase`),
  ADD KEY `id_grupo_fk` (`id_grupo_fk`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `id_persona_fk` (`id_persona_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_persona_fk`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_pase_fk`) REFERENCES `paselista` (`id_pase`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_alumno_fk`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_periodo_fk`) REFERENCES `periodo` (`id_periodo`);

--
-- Filtros para la tabla `grupoalumno`
--
ALTER TABLE `grupoalumno`
  ADD CONSTRAINT `grupoalumno_ibfk_1` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `grupoalumno_ibfk_2` FOREIGN KEY (`id_alumno_fk`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `paselista`
--
ALTER TABLE `paselista`
  ADD CONSTRAINT `paselista_ibfk_1` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupo` (`id_grupo`);

--
-- Filtros para la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD CONSTRAINT `periodo_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`id_persona_fk`) REFERENCES `persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
