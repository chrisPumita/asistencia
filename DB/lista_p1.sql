-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2022 a las 03:00:53
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
(220504313, 9308202814258365, 0, 1),
(220513068, 4751276030961502, 45789, 1),
(220513174, 4690693011377169, 156156156, 1),
(220513615, 8308296961262499, 156561516, 1),
(220513943, 4010125521545205, 123456, 1);

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
(10053, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:53:59', '13:53:59: Marcado como  Asistencia'),
(10053, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:54:01', '13:54:01: Marcado como  Asistencia'),
(10053, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:54:00', '13:54:00: Marcado como  Asistencia'),
(10053, 220513068, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:53:56', '13:53:56: Marcado como  Falta'),
(10053, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:53:59', '13:53:59: Marcado como  Asistencia'),
(10053, 220513615, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:53:57', '13:53:57: Marcado como  Falta'),
(10053, 220513943, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:53:56', '13:53:56: Marcado como  Falta'),
(10055, 220504046, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 18:57:51', '13:57:51: Marcado como  Retardo'),
(10055, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:53', '13:57:53: Marcado como  Asistencia'),
(10055, 220504313, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 18:57:52', '13:57:52: Marcado como  Retardo'),
(10055, 220513068, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:57:48', '13:57:48: Marcado como  Falta'),
(10055, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:51', '13:57:51: Marcado como  Asistencia'),
(10055, 220513615, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:57:49', '13:57:49: Marcado como  Falta'),
(10055, 220513943, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:57:49', '13:57:49: Marcado como  Falta'),
(10056, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:34', '13:57:34: Marcado como  Asistencia'),
(10056, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:36', '13:57:36: Marcado como  Asistencia'),
(10056, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:35', '13:57:35: Marcado como  Asistencia'),
(10056, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:33', '13:57:33: Marcado como  Asistencia'),
(10056, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:35', '13:57:35: Marcado como  Asistencia'),
(10056, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:34', '13:57:34: Marcado como  Asistencia'),
(10056, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:57:33', '13:57:33: Marcado como  Asistencia'),
(10057, 220504046, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 17:42:56', '12:42:56: Marcado como  Falta'),
(10057, 220504307, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 17:42:58', '12:42:58: Marcado como  Retardo'),
(10057, 220504313, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 17:42:57', '12:42:57: Marcado como  Falta'),
(10057, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:54', '12:42:54: Marcado como  Asistencia'),
(10057, 220513174, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 17:42:57', '12:42:57: Marcado como  Falta'),
(10057, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:55', '12:42:55: Marcado como  Asistencia'),
(10057, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:54', '12:42:54: Marcado como  Asistencia'),
(10058, 220504046, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:45', '11:42:45: Marcado como  Retardo'),
(10058, 220504307, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:47', '11:42:47: Marcado como  Retardo'),
(10058, 220504313, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:47', '11:42:47: Marcado como  Retardo'),
(10058, 220513068, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:43', '11:42:43: Marcado como  Retardo'),
(10058, 220513174, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:46', '11:42:46: Marcado como  Retardo'),
(10058, 220513615, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:44', '11:42:44: Marcado como  Retardo'),
(10058, 220513943, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:42:44', '11:42:44: Marcado como  Retardo'),
(30057, 220504046, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 16:54:01', '11:54:01: Marcado como  Falta'),
(30057, 220504307, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 16:54:03', '11:54:03: Marcado como  Falta'),
(30057, 220504313, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 16:54:03', '11:54:03: Marcado como  Falta'),
(30057, 220513068, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 16:54:00', '11:54:00: Marcado como  Falta'),
(30057, 220513174, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 16:54:02', '11:54:02: Marcado como  Falta'),
(30057, 220513615, -1, 0, '0.00', '../justificantes/784d26dbeb82a29216a157dc98eec930.pdf', '2022-05-17 13:58:44', 1, '2022-05-18 00:02:15', '19:02:05: Marcado como  Falta\n19:02:15: Revisado como   RECHAZADO '),
(30057, 220513943, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 16:54:00', '11:54:00: Marcado como  Falta'),
(30058, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:42:57', '11:42:57: Marcado como  Asistencia'),
(30058, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:43:00', '11:43:00: Marcado como  Asistencia'),
(30058, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:42:59', '11:42:59: Marcado como  Asistencia'),
(30058, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:42:56', '11:42:56: Marcado como  Asistencia'),
(30058, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:42:58', '11:42:58: Marcado como  Asistencia'),
(30058, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:42:57', '11:42:57: Marcado como  Asistencia'),
(30058, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:42:56', '11:42:56: Marcado como  Asistencia'),
(40001, 220504046, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:38:29', '11:38:29: Marcado como  Retardo'),
(40001, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:38:32', '11:38:32: Marcado como  Asistencia'),
(40001, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:38:31', '11:38:31: Marcado como  Asistencia'),
(40001, 220513068, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:38:26', '11:38:26: Marcado como  Retardo'),
(40001, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:38:30', '11:38:30: Marcado como  Asistencia'),
(40001, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:38:28', '11:38:28: Marcado como  Asistencia'),
(40001, 220513943, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 16:38:27', '11:38:27: Marcado como  Retardo'),
(40053, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:18', '13:02:18: Marcado como  Asistencia'),
(40053, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:20', '13:02:20: Marcado como  Asistencia'),
(40053, 220504313, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:02:19', '13:02:19: Marcado como  Falta'),
(40053, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:16', '13:02:16: Marcado como  Asistencia'),
(40053, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:18', '13:02:18: Marcado como  Asistencia'),
(40053, 220513615, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:02:17', '13:02:17: Marcado como  Falta'),
(40053, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:17', '13:02:17: Marcado como  Asistencia'),
(40057, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:42', '12:42:42: Marcado como  Asistencia'),
(40057, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:45', '12:42:44: Marcado como  Asistencia'),
(40057, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:44', '12:42:44: Marcado como  Asistencia'),
(40057, 220513068, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 17:42:41', '12:42:41: Marcado como  Retardo'),
(40057, 220513174, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 17:42:43', '12:42:43: Marcado como  Falta'),
(40057, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:42', '12:42:42: Marcado como  Asistencia'),
(40057, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 17:42:41', '12:42:41: Marcado como  Asistencia'),
(40058, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:53:45', '11:53:45: Marcado como  Asistencia'),
(40058, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:53:47', '11:53:47: Marcado como  Asistencia'),
(40058, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:53:46', '11:53:46: Marcado como  Asistencia'),
(40058, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:53:43', '11:53:43: Marcado como  Asistencia'),
(40058, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:53:46', '11:53:46: Marcado como  Asistencia'),
(40058, 220513615, 1, 0, '1.00', '../justificantes/6d936e1cb90bbbbbbeb6fe490667977f.jpg', '2022-05-17 19:01:46', 1, '2022-05-18 00:01:58', '18:58:12: Marcado como  Falta\n19:01:58: Revisado como   ACEPTADO '),
(40058, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 16:53:43', '11:53:43: Marcado como  Asistencia'),
(220514117, 220504046, -1, 0, '0.00', NULL, NULL, 0, '2022-05-15 01:41:42', '20:41:42: Marcado como  Falta'),
(220514117, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:41:45', '20:41:45: Marcado como  Asistencia'),
(220514117, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:41:45', '20:41:45: Marcado como  Asistencia'),
(220514117, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:41:39', '20:41:39: Marcado como  Asistencia'),
(220514117, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:41:44', '20:41:44: Marcado como  Asistencia'),
(220514117, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:41:41', '20:41:41: Marcado como  Asistencia'),
(220514117, 220513943, -1, 0, '0.00', NULL, NULL, 0, '2022-05-15 01:41:40', '20:41:40: Marcado como  Falta'),
(220514377, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:51:11', '20:51:11: Marcado como  Asistencia'),
(220514377, 220504307, -1, 0, '0.00', NULL, NULL, 0, '2022-05-15 01:51:13', '20:51:13: Marcado como  Falta'),
(220514377, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:51:14', '20:51:14: Marcado como  Asistencia'),
(220514377, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:51:08', '20:51:08: Marcado como  Asistencia'),
(220514377, 220513174, -1, 0, '0.00', NULL, NULL, 0, '2022-05-15 01:51:12', '20:51:12: Marcado como  Falta'),
(220514377, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:51:10', '20:51:10: Marcado como  Asistencia'),
(220514377, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:51:09', '20:51:09: Marcado como  Asistencia'),
(220514437, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:53', '20:34:53: Marcado como  Asistencia'),
(220514437, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:54', '20:34:54: Marcado como  Asistencia'),
(220514437, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:55', '20:34:55: Marcado como  Asistencia'),
(220514437, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:50', '20:34:50: Marcado como  Asistencia'),
(220514437, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:53', '20:34:53: Marcado como  Asistencia'),
(220514437, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:32', '20:34:32: Marcado como  Asistencia'),
(220514437, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:34:31', '20:34:31: Marcado como  Asistencia'),
(220514644, 220504046, -1, 0, '0.00', NULL, NULL, 0, '2022-05-15 01:35:30', '20:35:30: Marcado como  Falta'),
(220514644, 220504307, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:38:29', '20:38:29: Marcado como  Asistencia'),
(220514644, 220504313, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:38:30', '20:38:30: Marcado como  Asistencia'),
(220514644, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:35:27', '20:35:27: Marcado como  Asistencia'),
(220514644, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:38:28', '20:38:28: Marcado como  Asistencia'),
(220514644, 220513615, 1, 0, '1.00', NULL, NULL, 0, '2022-05-15 01:35:29', '20:35:29: Marcado como  Asistencia'),
(220514644, 220513943, -1, 0, '0.00', NULL, NULL, 0, '2022-05-15 01:35:28', '20:35:28: Marcado como  Falta'),
(220517375, 220504046, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:53', '13:02:53: Marcado como  Asistencia'),
(220517375, 220504307, 0, 1, '0.50', NULL, NULL, 0, '2022-05-17 18:02:55', '13:02:55: Marcado como  Retardo'),
(220517375, 220504313, -1, 0, '0.00', NULL, NULL, 0, '2022-05-17 18:02:55', '13:02:55: Marcado como  Falta'),
(220517375, 220513068, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:51', '13:02:51: Marcado como  Asistencia'),
(220517375, 220513174, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:54', '13:02:54: Marcado como  Asistencia'),
(220517375, 220513615, -1, 0, '0.00', '../justificantes/36b3e73d79b1c7f2569cb7985c16a96c.pdf', '2022-05-17 18:07:43', 0, '2022-05-18 00:23:02', '19:23:02: Marcado como  Falta'),
(220517375, 220513943, 1, 0, '1.00', NULL, NULL, 0, '2022-05-17 18:02:52', '13:02:52: Marcado como  Asistencia');

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
(5, 6, '2801', 'Informatica', 'Analisis y diseño de Algoritmos', 80, 'LUN,MAR,JUE,', 1, 10, 0, 3, 30, '2022-05-14 22:09:49', 'XBmLz5zk', 'http://localhost/asistencia/join.php?code=a147a54c471b568887132d83f9434304&invite=XBmLz5zk', 1),
(6, 7, '5201', 'Informatica', 'Desarrollo de Aplciaciones Web I', 3, 'LUN,JUE,', 1, 1, 0, 3, 30, '2022-05-14 22:09:49', 'XX5HMyBa', 'http://localhost/asistencia/join.php?code=528e5d55f129bbeaaa5c3f7c34a035fe&invite=XX5HMyBa', 1),
(7, 7, '5100', 'Informatica', 'Programación I POO ', 80, 'LUN,VIE,', 1, 10, 0, 3, 30, '2022-05-14 22:09:49', 'YMMp4WHq', 'http://localhost/asistencia/join.php?code=cc22b8d3944a3e9417f85913f44d99ef&invite=YMMp4WHq', 1),
(8, 7, '3001', 'IME', 'Base de Datos para Ingenieria', 0, 'LUN,MAR,', 0, 0, 0, 0, 0, '2022-05-14 22:09:57', 'p8T6GhvO', 'http://localhost/asistencia/join.php?code=2dc50fc21299a22be23c95457744c5c8&invite=p8T6GhvO', 1),
(9, 8, '1000', 'Informatica', 'Seguridad Informática I', 0, 'LUN,MAR,JUE,', 0, 0, 0, 0, 0, '2022-05-14 22:09:49', 'bh5V9yu5', 'http://localhost/asistencia/join.php?code=25ef770021c427a1e91e9c30fa558bcf&invite=bh5V9yu5', 1);

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
(5, 220504046, 1, '2022-05-13 16:09:52'),
(5, 220504307, 1, '2022-05-14 22:17:50'),
(5, 220504313, 1, '2022-05-14 22:17:51'),
(5, 220513068, 1, '2022-05-14 22:17:52'),
(5, 220513174, 1, '2022-05-14 22:17:53'),
(5, 220513615, 1, '2022-05-13 17:09:29'),
(5, 220513943, 1, '2022-05-14 22:17:55'),
(6, 220504046, 1, '2022-05-13 16:10:22'),
(6, 220504307, 1, '2022-05-14 22:16:26'),
(6, 220504313, 1, '2022-05-14 22:16:28'),
(6, 220513068, 1, '2022-05-14 22:16:29'),
(6, 220513174, 1, '2022-05-14 22:16:30'),
(6, 220513615, 1, '2022-05-13 17:09:33'),
(6, 220513943, 1, '2022-05-14 22:16:32'),
(7, 220504046, 1, '2022-05-13 16:10:31'),
(7, 220504307, 0, '2022-05-04 22:34:24'),
(7, 220504313, 1, '2022-05-04 22:34:24'),
(7, 220513068, 1, '2022-05-14 22:20:31'),
(7, 220513174, 1, '2022-05-14 22:20:32'),
(7, 220513615, 1, '2022-05-13 17:09:38'),
(7, 220513943, 1, '2022-05-14 22:20:35'),
(8, 220504046, 1, '2022-05-13 16:10:37'),
(8, 220504307, 1, '2022-05-14 22:20:37'),
(8, 220504313, 1, '2022-05-10 19:19:15'),
(8, 220513068, 1, '2022-05-14 22:20:39'),
(8, 220513174, 1, '2022-05-14 22:20:40'),
(8, 220513615, 1, '2022-05-14 22:20:41'),
(8, 220513943, 1, '2022-05-14 22:20:42'),
(9, 220504046, 1, '2022-05-13 16:10:43'),
(9, 220504307, 1, '2022-05-14 22:20:44'),
(9, 220504313, 1, '2022-05-14 22:20:45'),
(9, 220513068, 1, '2022-05-14 22:20:46'),
(9, 220513174, 1, '2022-05-14 22:20:47'),
(9, 220513615, 1, '2022-05-14 22:20:49'),
(9, 220513943, 1, '2022-05-14 22:20:50');

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
(10001, 6, '2022-01-03', 'creado artificialmente', '2022-05-17 18:45:30'),
(10002, 6, '2022-01-04', 'creado artificialmente', '2022-05-17 18:45:30'),
(10003, 6, '2022-01-06', 'creado artificialmente', '2022-05-17 18:45:30'),
(10004, 6, '2022-01-10', 'creado artificialmente', '2022-05-17 18:45:30'),
(10005, 6, '2022-01-11', 'creado artificialmente', '2022-05-17 18:45:30'),
(10006, 6, '2022-01-13', 'creado artificialmente', '2022-05-17 18:45:30'),
(10007, 6, '2022-01-17', 'creado artificialmente', '2022-05-17 18:45:30'),
(10008, 6, '2022-01-18', 'creado artificialmente', '2022-05-17 18:45:30'),
(10009, 6, '2022-01-20', 'creado artificialmente', '2022-05-17 18:45:30'),
(10010, 6, '2022-01-24', 'creado artificialmente', '2022-05-17 18:45:30'),
(10011, 6, '2022-01-25', 'creado artificialmente', '2022-05-17 18:45:30'),
(10012, 6, '2022-01-27', 'creado artificialmente', '2022-05-17 18:45:30'),
(10013, 6, '2022-01-31', 'creado artificialmente', '2022-05-17 18:45:30'),
(10014, 6, '2022-02-01', 'creado artificialmente', '2022-05-17 18:45:30'),
(10015, 6, '2022-02-03', 'creado artificialmente', '2022-05-17 18:45:30'),
(10016, 6, '2022-02-07', 'creado artificialmente', '2022-05-17 18:45:30'),
(10017, 6, '2022-02-08', 'creado artificialmente', '2022-05-17 18:45:30'),
(10018, 6, '2022-02-10', 'creado artificialmente', '2022-05-17 18:45:30'),
(10019, 6, '2022-02-14', 'creado artificialmente', '2022-05-17 18:45:30'),
(10020, 6, '2022-02-15', 'creado artificialmente', '2022-05-17 18:45:30'),
(10021, 6, '2022-02-17', 'creado artificialmente', '2022-05-17 18:45:30'),
(10022, 6, '2022-02-21', 'creado artificialmente', '2022-05-17 18:45:30'),
(10023, 6, '2022-02-22', 'creado artificialmente', '2022-05-17 18:45:30'),
(10024, 6, '2022-02-24', 'creado artificialmente', '2022-05-17 18:45:30'),
(10025, 6, '2022-02-28', 'creado artificialmente', '2022-05-17 18:45:30'),
(10026, 6, '2022-03-01', 'creado artificialmente', '2022-05-17 18:45:30'),
(10027, 6, '2022-03-03', 'creado artificialmente', '2022-05-17 18:45:30'),
(10028, 6, '2022-03-07', 'creado artificialmente', '2022-05-17 18:45:30'),
(10029, 6, '2022-03-08', 'creado artificialmente', '2022-05-17 18:45:30'),
(10030, 6, '2022-03-10', 'creado artificialmente', '2022-05-17 18:45:30'),
(10031, 6, '2022-03-14', 'creado artificialmente', '2022-05-17 18:45:30'),
(10032, 6, '2022-03-15', 'creado artificialmente', '2022-05-17 18:45:30'),
(10033, 6, '2022-03-17', 'creado artificialmente', '2022-05-17 18:45:30'),
(10034, 6, '2022-03-21', 'creado artificialmente', '2022-05-17 18:45:30'),
(10035, 6, '2022-03-22', 'creado artificialmente', '2022-05-17 18:45:30'),
(10036, 6, '2022-03-24', 'creado artificialmente', '2022-05-17 18:45:30'),
(10037, 6, '2022-03-28', 'creado artificialmente', '2022-05-17 18:45:30'),
(10038, 6, '2022-03-29', 'creado artificialmente', '2022-05-17 18:45:30'),
(10039, 6, '2022-03-31', 'creado artificialmente', '2022-05-17 18:45:30'),
(10040, 6, '2022-04-04', 'creado artificialmente', '2022-05-17 18:45:30'),
(10041, 6, '2022-04-05', 'creado artificialmente', '2022-05-17 18:45:30'),
(10042, 6, '2022-04-07', 'creado artificialmente', '2022-05-17 18:45:30'),
(10043, 6, '2022-04-11', 'creado artificialmente', '2022-05-17 18:45:30'),
(10044, 6, '2022-04-12', 'creado artificialmente', '2022-05-17 18:45:30'),
(10045, 6, '2022-04-14', 'creado artificialmente', '2022-05-17 18:45:30'),
(10046, 6, '2022-04-18', 'creado artificialmente', '2022-05-17 18:45:30'),
(10047, 6, '2022-04-19', 'creado artificialmente', '2022-05-17 18:45:30'),
(10048, 6, '2022-04-21', 'creado artificialmente', '2022-05-17 18:45:30'),
(10049, 6, '2022-04-25', 'creado artificialmente', '2022-05-17 18:45:30'),
(10050, 6, '2022-04-26', 'creado artificialmente', '2022-05-17 18:45:30'),
(10051, 6, '2022-04-28', 'creado artificialmente', '2022-05-17 18:45:30'),
(10052, 6, '2022-05-02', 'creado artificialmente', '2022-05-17 18:45:30'),
(10053, 6, '2022-05-03', 'creado artificialmente', '2022-05-17 18:45:30'),
(10054, 6, '2022-05-05', 'creado artificialmente', '2022-05-17 18:45:30'),
(10055, 6, '2022-05-09', 'creado artificialmente', '2022-05-17 18:45:30'),
(10056, 6, '2022-05-10', 'creado artificialmente', '2022-05-17 18:45:30'),
(10057, 6, '2022-05-12', 'creado artificialmente', '2022-05-17 18:45:30'),
(10058, 6, '2022-05-16', 'creado artificialmente', '2022-05-17 18:45:30'),
(30001, 8, '2022-01-03', 'creado artificialmente', '2022-05-17 18:47:10'),
(30002, 8, '2022-01-06', 'creado artificialmente', '2022-05-17 18:47:10'),
(30003, 8, '2022-01-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(30004, 8, '2022-01-10', 'creado artificialmente', '2022-05-17 18:47:10'),
(30005, 8, '2022-01-13', 'creado artificialmente', '2022-05-17 18:47:10'),
(30006, 8, '2022-01-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(30007, 8, '2022-01-17', 'creado artificialmente', '2022-05-17 18:47:10'),
(30008, 8, '2022-01-20', 'creado artificialmente', '2022-05-17 18:47:10'),
(30009, 8, '2022-01-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(30010, 8, '2022-01-24', 'creado artificialmente', '2022-05-17 18:47:10'),
(30011, 8, '2022-01-27', 'creado artificialmente', '2022-05-17 18:47:10'),
(30012, 8, '2022-01-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(30013, 8, '2022-01-31', 'creado artificialmente', '2022-05-17 18:47:10'),
(30014, 8, '2022-02-03', 'creado artificialmente', '2022-05-17 18:47:10'),
(30015, 8, '2022-02-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(30016, 8, '2022-02-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(30017, 8, '2022-02-10', 'creado artificialmente', '2022-05-17 18:47:10'),
(30018, 8, '2022-02-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(30019, 8, '2022-02-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(30020, 8, '2022-02-17', 'creado artificialmente', '2022-05-17 18:47:10'),
(30021, 8, '2022-02-18', 'creado artificialmente', '2022-05-17 18:47:10'),
(30022, 8, '2022-02-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(30023, 8, '2022-02-24', 'creado artificialmente', '2022-05-17 18:47:10'),
(30024, 8, '2022-02-25', 'creado artificialmente', '2022-05-17 18:47:10'),
(30025, 8, '2022-02-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(30026, 8, '2022-03-03', 'creado artificialmente', '2022-05-17 18:47:10'),
(30027, 8, '2022-03-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(30028, 8, '2022-03-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(30029, 8, '2022-03-10', 'creado artificialmente', '2022-05-17 18:47:10'),
(30030, 8, '2022-03-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(30031, 8, '2022-03-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(30032, 8, '2022-03-17', 'creado artificialmente', '2022-05-17 18:47:10'),
(30033, 8, '2022-03-18', 'creado artificialmente', '2022-05-17 18:47:10'),
(30034, 8, '2022-03-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(30035, 8, '2022-03-24', 'creado artificialmente', '2022-05-17 18:47:10'),
(30036, 8, '2022-03-25', 'creado artificialmente', '2022-05-17 18:47:10'),
(30037, 8, '2022-03-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(30038, 8, '2022-03-31', 'creado artificialmente', '2022-05-17 18:47:10'),
(30039, 8, '2022-04-01', 'creado artificialmente', '2022-05-17 18:47:10'),
(30040, 8, '2022-04-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(30041, 8, '2022-04-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(30042, 8, '2022-04-08', 'creado artificialmente', '2022-05-17 18:47:10'),
(30043, 8, '2022-04-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(30044, 8, '2022-04-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(30045, 8, '2022-04-15', 'creado artificialmente', '2022-05-17 18:47:10'),
(30046, 8, '2022-04-18', 'creado artificialmente', '2022-05-17 18:47:10'),
(30047, 8, '2022-04-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(30048, 8, '2022-04-22', 'creado artificialmente', '2022-05-17 18:47:10'),
(30049, 8, '2022-04-25', 'creado artificialmente', '2022-05-17 18:47:10'),
(30050, 8, '2022-04-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(30051, 8, '2022-04-29', 'creado artificialmente', '2022-05-17 18:47:10'),
(30052, 8, '2022-05-02', 'creado artificialmente', '2022-05-17 18:47:10'),
(30053, 8, '2022-05-05', 'creado artificialmente', '2022-05-17 18:47:10'),
(30054, 8, '2022-05-06', 'creado artificialmente', '2022-05-17 18:47:10'),
(30055, 8, '2022-05-09', 'creado artificialmente', '2022-05-17 18:47:10'),
(30056, 8, '2022-05-12', 'creado artificialmente', '2022-05-17 18:47:10'),
(30057, 8, '2022-05-13', 'creado artificialmente', '2022-05-17 18:47:10'),
(30058, 8, '2022-05-16', 'creado artificialmente', '2022-05-17 18:47:10'),
(40001, 9, '2022-01-03', 'creado artificialmente', '2022-05-17 18:47:10'),
(40002, 9, '2022-01-05', 'creado artificialmente', '2022-05-17 18:47:10'),
(40003, 9, '2022-01-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(40004, 9, '2022-01-10', 'creado artificialmente', '2022-05-17 18:47:10'),
(40005, 9, '2022-01-12', 'creado artificialmente', '2022-05-17 18:47:10'),
(40006, 9, '2022-01-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(40007, 9, '2022-01-17', 'creado artificialmente', '2022-05-17 18:47:10'),
(40008, 9, '2022-01-19', 'creado artificialmente', '2022-05-17 18:47:10'),
(40009, 9, '2022-01-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(40010, 9, '2022-01-24', 'creado artificialmente', '2022-05-17 18:47:10'),
(40011, 9, '2022-01-26', 'creado artificialmente', '2022-05-17 18:47:10'),
(40012, 9, '2022-01-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(40013, 9, '2022-01-31', 'creado artificialmente', '2022-05-17 18:47:10'),
(40014, 9, '2022-02-02', 'creado artificialmente', '2022-05-17 18:47:10'),
(40015, 9, '2022-02-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(40016, 9, '2022-02-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(40017, 9, '2022-02-09', 'creado artificialmente', '2022-05-17 18:47:10'),
(40018, 9, '2022-02-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(40019, 9, '2022-02-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(40020, 9, '2022-02-16', 'creado artificialmente', '2022-05-17 18:47:10'),
(40021, 9, '2022-02-18', 'creado artificialmente', '2022-05-17 18:47:10'),
(40022, 9, '2022-02-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(40023, 9, '2022-02-23', 'creado artificialmente', '2022-05-17 18:47:10'),
(40024, 9, '2022-02-25', 'creado artificialmente', '2022-05-17 18:47:10'),
(40025, 9, '2022-02-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(40026, 9, '2022-03-02', 'creado artificialmente', '2022-05-17 18:47:10'),
(40027, 9, '2022-03-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(40028, 9, '2022-03-07', 'creado artificialmente', '2022-05-17 18:47:10'),
(40029, 9, '2022-03-09', 'creado artificialmente', '2022-05-17 18:47:10'),
(40030, 9, '2022-03-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(40031, 9, '2022-03-14', 'creado artificialmente', '2022-05-17 18:47:10'),
(40032, 9, '2022-03-16', 'creado artificialmente', '2022-05-17 18:47:10'),
(40033, 9, '2022-03-18', 'creado artificialmente', '2022-05-17 18:47:10'),
(40034, 9, '2022-03-21', 'creado artificialmente', '2022-05-17 18:47:10'),
(40035, 9, '2022-03-23', 'creado artificialmente', '2022-05-17 18:47:10'),
(40036, 9, '2022-03-25', 'creado artificialmente', '2022-05-17 18:47:10'),
(40037, 9, '2022-03-28', 'creado artificialmente', '2022-05-17 18:47:10'),
(40038, 9, '2022-03-30', 'creado artificialmente', '2022-05-17 18:47:10'),
(40039, 9, '2022-04-01', 'creado artificialmente', '2022-05-17 18:47:10'),
(40040, 9, '2022-04-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(40041, 9, '2022-04-06', 'creado artificialmente', '2022-05-17 18:47:10'),
(40042, 9, '2022-04-08', 'creado artificialmente', '2022-05-17 18:47:10'),
(40043, 9, '2022-04-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(40044, 9, '2022-04-13', 'creado artificialmente', '2022-05-17 18:47:10'),
(40045, 9, '2022-04-15', 'creado artificialmente', '2022-05-17 18:47:10'),
(40046, 9, '2022-04-18', 'creado artificialmente', '2022-05-17 18:47:10'),
(40047, 9, '2022-04-20', 'creado artificialmente', '2022-05-17 18:47:10'),
(40048, 9, '2022-04-22', 'creado artificialmente', '2022-05-17 18:47:10'),
(40049, 9, '2022-04-25', 'creado artificialmente', '2022-05-17 18:47:10'),
(40050, 9, '2022-04-27', 'creado artificialmente', '2022-05-17 18:47:10'),
(40051, 9, '2022-04-29', 'creado artificialmente', '2022-05-17 18:47:10'),
(40052, 9, '2022-05-02', 'creado artificialmente', '2022-05-17 18:47:10'),
(40053, 9, '2022-05-04', 'creado artificialmente', '2022-05-17 18:47:10'),
(40054, 9, '2022-05-06', 'creado artificialmente', '2022-05-17 18:47:10'),
(40055, 9, '2022-05-09', 'creado artificialmente', '2022-05-17 18:47:10'),
(40056, 9, '2022-05-11', 'creado artificialmente', '2022-05-17 18:47:10'),
(40057, 9, '2022-05-13', 'creado artificialmente', '2022-05-17 18:47:10'),
(40058, 9, '2022-05-16', 'creado artificialmente', '2022-05-17 18:47:10'),
(220514117, 8, '2022-05-14', 'Inicia el pase a las: 20:41:34', '2022-05-17 18:48:29'),
(220514377, 9, '2022-05-14', 'Inicia el pase a las: 20:51:03', '2022-05-17 18:48:29'),
(220514437, 6, '2022-05-14', 'Inicia el pase a las: 20:33:37', '2022-05-17 18:48:29'),
(220514644, 7, '2022-05-14', 'Inicia el pase a las: 20:35:15\nbfdbdfb', '2022-05-15 01:38:37'),
(220517375, 8, '2022-05-17', 'Inicia el pase a las: 13:02:49', '2022-05-17 18:48:29');

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
(2, 'Carlos', 'Cordero', 'Mendoza', 0, 'carlos', 'carlos', 'https://pixelmator.com/community/download/file.php?avatar=17785_1569233053.png', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-15 01:53:39'),
(92405200618688, 'Christian René', 'Pioquinto', 'Hernandez', 0, 'christian.floppy@gmail.com', 'chris', '../recursos/avatars/d79bf23d96d66a75b9b166cda00804f4.png', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-18 00:02:47'),
(2372934008636130, 'Juan Perez', 'Sanchez', 'Sanchez', 0, 'mail.@gmailc.om', 'juan', '../recursos/avatars/defaultAvatar.webp', '202cb962ac59075b964b07152d234b70', '2022-05-15 01:53:39'),
(2784399672959068, 'Fernando', 'Hernandez', 'Ledezma', 1, 'f@gmail.com', 'Fer', 'https://www.pixelmator.com/community/download/file.php?avatar=17458_1555206584.jpeg', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-15 01:49:15'),
(4010125521545205, 'Alfonso', 'Casas', 'Cano', 0, 'algonso@gmail.com', 'alfonso', 'https://pixelmator.com/community/download/file.php?avatar=17526_1634298815.jpg', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-15 01:46:53'),
(4690693011377169, 'Ana Maria', 'Martinez', 'Fernandez', 1, 'ana@gmail.com', 'ana', 'https://pixelmator.com/community/download/file.php?avatar=20501_1573562474.png', 'dcddb75469b4b4875094e14561e573d8', '2022-05-15 01:46:19'),
(4751276030961502, 'Edith', 'Carmona', 'Castelar', 0, 'edith@gmail.com', 'edith', 'https://www.pixelmator.com/community/download/file.php?avatar=25804_1636103512.png', 'b59c67bf196a4758191e42f76670ceba', '2022-05-15 01:48:01'),
(6820939877366268, 'Alberto', 'Mendoza', 'Romero', 0, 'albertn@gmail.com', 'alberto', '../recursos/avatars/defaultAvatar.webp', 'd41d8cd98f00b204e9800998ecf8427e', '2022-05-15 01:52:03'),
(7391240909317772, 'Armando Jr.', 'Valdez', 'Hernandez', 0, 'armando1@gmail.com', 'armandito1', 'https://www.pixelmator.com/community/download/file.php?avatar=23403_1591212815.jpg', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-15 01:55:59'),
(8308296961262499, 'Camen', 'Gonzalez', 'Sanchez', 1, 'carmen@gmail.com', 'carmen', 'https://www.pixelmator.com/community/download/file.php?avatar=21946_1555792779.jpg', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-05-15 01:49:41'),
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
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220513944;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
