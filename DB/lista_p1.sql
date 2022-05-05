-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2022 a las 07:31:59
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

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `id_persona_fk`, `no_cta`, `account_confirm`) VALUES
(220504046, 2784399672959068, 316345978, 1),
(220504307, 7391240909317772, 1456156156, 1),
(220504313, 9308202814258365, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_pase_fk` bigint(20) NOT NULL,
  `id_alumno_fk` int(10) NOT NULL,
  `confirmada` tinyint(2) DEFAULT NULL,
  `check_retardo` tinyint(2) DEFAULT NULL,
  `value` decimal(4,2) DEFAULT NULL,
  `url_justificante` text,
  `upload_date_justificante` datetime DEFAULT NULL,
  `estatus_rev_just` tinyint(2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_pase_fk`, `id_alumno_fk`, `confirmada`, `check_retardo`, `value`, `url_justificante`, `upload_date_justificante`, `estatus_rev_just`, `create_at`, `log`) VALUES
(1111, 220504046, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 05:30:45', ''),
(1111, 220504307, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 05:30:45', ''),
(1111, 220504313, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-05 05:30:45', '');

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

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `id_periodo_fk`, `grupo`, `carrera`, `materia`, `porcentaje_min`, `dias`, `is_porcentual`, `puntaje_final`, `tipo_puntaje`, `retardo_is_falta`, `no_clases`, `create_at`, `codigo_invitacion`, `link_invitacion`, `estatus`) VALUES
(5, 6, '2801', 'Informatica', 'Programacion Web', 80, 'LUN,MAR,JUE,', 1, 10, 0, 3, 30, '2022-04-28 17:55:34', 'XBmLz5zk', 'http://localhost/asistencia/join.php?code=a147a54c471b568887132d83f9434304&invite=XBmLz5zk', 1),
(6, 7, '5201', 'Informatica', 'Desarrollo de Aplciaciones Web', 3, 'JUE,', 1, 1, 0, 3, 30, '2022-04-29 00:40:54', 'XX5HMyBa', 'http://localhost/asistencia/join.php?code=528e5d55f129bbeaaa5c3f7c34a035fe&invite=XX5HMyBa', 1),
(7, 7, '5100', 'Informatica', 'Desarrollo Web 1', 80, 'LUN,VIE,', 1, 10, 0, 3, 30, '2022-04-29 05:59:43', 'YMMp4WHq', 'http://localhost/asistencia/join.php?code=cc22b8d3944a3e9417f85913f44d99ef&invite=YMMp4WHq', 1),
(8, 7, '3001', 'IME', 'Base de Datos', 0, 'LUN,MAR,', 0, 0, 0, 0, 0, '2022-04-29 06:03:06', 'p8T6GhvO', 'http://localhost/asistencia/join.php?code=2dc50fc21299a22be23c95457744c5c8&invite=p8T6GhvO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupoalumno`
--

CREATE TABLE `grupoalumno` (
  `id_grupo_fk` int(5) NOT NULL,
  `id_alumno_fk` int(10) NOT NULL,
  `estatus` tinyint(2) NOT NULL DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupoalumno`
--

INSERT INTO `grupoalumno` (`id_grupo_fk`, `id_alumno_fk`, `estatus`, `create_at`) VALUES
(7, 220504046, 1, '2022-05-04 22:34:24'),
(7, 220504307, 0, '2022-05-04 22:34:24'),
(7, 220504313, 1, '2022-05-04 22:34:24');

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

--
-- Volcado de datos para la tabla `paselista`
--

INSERT INTO `paselista` (`id_pase`, `id_grupo_fk`, `fecha`, `notas`, `create_at`) VALUES
(1111, 7, '2022-05-05', 'Inicia el pase a las: 00:30:45', '2022-05-05 05:30:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(5) NOT NULL,
  `id_profesor` int(5) NOT NULL,
  `nombre_periodo` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `id_profesor`, `nombre_periodo`, `fecha_inicio`, `fecha_fin`, `tipo`, `created_at`, `estado`) VALUES
(3, 1, '2022-1', '2022-04-08', '2022-04-08', 'Semestre', '2022-04-26 17:38:32', 1),
(4, 1, '2022-2', '2022-04-08', '2022-04-08', 'Semestre', '2022-04-26 17:38:32', 1),
(5, 1, '2022-2023', '2022-04-08', '2022-04-08', 'Cuatrimestre', '2022-04-26 17:54:47', 1),
(6, 1, '2003-1', '2022-12-16', '2022-12-16', 'Semestre', '2022-04-28 17:53:17', 1),
(7, 220428813, '2022-1', '2022-01-31', '2022-05-27', 'Semestre', '2022-04-28 22:42:32', 1),
(8, 220428813, '2001-2002', '2022-05-26', '2022-07-07', 'Cuatrimestre', '2022-05-04 18:48:02', 1);

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

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `app`, `apm`, `sexo`, `email`, `user_name`, `avatar`, `pw`, `create_at`) VALUES
(2, 'Christian', 'Hernandez', 'Pioquinto', 0, 'christian@mail.com', 'chris', '../recursos/avatars/defaultAvatar.webp', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-04-26 21:19:34'),
(92405200618688, 'Christian', 'Perez', 'Pioquinto', 0, 'christian.floppy@gmail.com', 'user', '../recursos/avatars/defaultAvatar.webp', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-04-28 17:51:40'),
(2372934008636130, 'Juan Perez', 'Sanchez', 'Sanchez', 0, 'mail.@gmailc.om', 'aaaaaan', '../recursos/avatars/defaultAvatar.webp', '202cb962ac59075b964b07152d234b70', '2022-04-26 17:13:52'),
(2784399672959068, 'Fernando', 'Hernandez', 'Ledezma', 1, 'f@gmail.com', 'Fer', '../recursos/avatars/defaultAvatar.webp', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-04 22:29:10'),
(6820939877366268, '', '', '', 0, '', '', '../recursos/avatars/defaultAvatar.webp', 'd41d8cd98f00b204e9800998ecf8427e', '2022-05-04 19:12:59'),
(7391240909317772, 'Christian', 'Narro', 'Robles', 0, 'armando1@gmail.com', 'armandito1', 'https://avatars.githubusercontent.com/u/19921111?s=400&u=d2a07b2f07f36f033000c6100eccbf3d13b9c9aa&v=4', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-05 04:55:50'),
(9308202814258365, 'Jennifer', 'Rosas', 'Morales', 0, 'jenni@gmail.com', 'jenni', 'https://avatars.githubusercontent.com/u/57198260?v=4', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-05 04:54:55');

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
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `id_persona_fk`, `grado_academico`, `carrera_esp`, `account_confirm`) VALUES
(1, 2, 'Lic. ', 'Informática', 1),
(220428813, 92405200618688, 'Lic. ', 'Info', 1),
(220504662, 6820939877366268, '', '', 1);

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
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220504314;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220504663;

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
  ADD CONSTRAINT `FK_TMP_ASIS_ALUM` FOREIGN KEY (`id_alumno_fk`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TMP_ASIS_PASE` FOREIGN KEY (`id_pase_fk`) REFERENCES `paselista` (`id_pase`) ON DELETE CASCADE ON UPDATE CASCADE;

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
