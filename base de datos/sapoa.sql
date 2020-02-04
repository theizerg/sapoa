-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-07-2018 a las 14:15:24
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sapoa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id_actividades` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) NOT NULL,
  `producto` varchar(250) NOT NULL,
  `requerimiento` varchar(250) NOT NULL,
  `inicio` varchar(90) NOT NULL,
  `fin` varchar(90) NOT NULL,
  `proyecto` int(11) NOT NULL,
  `gerencia` int(11) NOT NULL,
  `coordinacion` int(11) NOT NULL,
  `objetivo` int(11) NOT NULL,
  `iniciativa` int(11) NOT NULL,
  `responsable` varchar(250) NOT NULL,
  `dcreado` timestamp NOT NULL,
  `dactualizado` timestamp NOT NULL,
  PRIMARY KEY (`id_actividades`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividades`, `descripcion`, `producto`, `requerimiento`, `inicio`, `fin`, `proyecto`, `gerencia`, `coordinacion`, `objetivo`, `iniciativa`, `responsable`, `dcreado`, `dactualizado`) VALUES
(1, 'Nº de solicitudes de financiamientos reembolsable, no reembolsable o mixto evaluadas / Nº de solicitudes financiamientos reembolsable, no reembolsable o mixto recibida', 'todo', 'todo', '07/22/2018', '07/31/2018', 1, 2, 4, 1, 1, 'todo', '2018-07-11 20:49:02', '2018-07-11 20:49:02'),
(2, 'Descripción 3', 'producto 12', 'requerimiento3', '07/13/2018', '08/01/2018', 1, 2, 4, 1, 1, 'instancias', '2018-07-12 19:05:41', '2018-07-12 19:05:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinacion`
--

DROP TABLE IF EXISTS `coordinacion`;
CREATE TABLE IF NOT EXISTS `coordinacion` (
  `id_coordinacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `id_gerencia` int(11) NOT NULL,
  `objetivo_id` int(11) NOT NULL,
  PRIMARY KEY (`id_coordinacion`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coordinacion`
--

INSERT INTO `coordinacion` (`id_coordinacion`, `nombre`, `id_gerencia`, `objetivo_id`) VALUES
(1, 'Sin coordinación', 1, 0),
(2, 'Archivo de crédito', 1, 0),
(3, 'Avalúos e inspecciones', 1, 0),
(4, 'Sin coordinación', 2, 0),
(5, 'Sin coordinación', 3, 0),
(6, 'Seguimiento y control', 3, 0),
(7, 'Trámites financieros', 3, 0),
(8, 'Sin coordinación', 4, 0),
(9, 'Atención integral y orientación técnica', 4, 0),
(10, 'Gestión y desarrollo crediticio', 4, 0),
(11, 'Sin coordinación', 5, 0),
(12, 'Sin coordinación', 6, 0),
(13, 'Sin coordinación', 7, 0),
(14, 'Sin coordinación', 8, 0),
(15, 'Sin coordinación', 9, 0),
(16, 'Sin coordinación', 10, 0),
(17, 'Sin coordinación', 11, 0),
(18, 'Sin coordinación', 12, 0),
(19, 'Sin coordinación', 13, 0),
(20, 'Ejecución financiera', 13, 0),
(21, 'Gestión financiera y contable', 13, 0),
(22, 'Sin coordinación', 14, 0),
(23, 'Secretaria', 14, 0),
(24, 'Asesoría legal', 14, 0),
(25, 'Sin coordinación', 15, 0),
(26, 'Relaciones interinstitucionales', 15, 0),
(27, 'Orientación y evaluación de proyectos', 15, 0),
(28, 'Sin coordinación', 16, 0),
(29, 'Evaluación de desembolsos', 16, 0),
(30, 'Cobranzas', 16, 0),
(31, 'Gestión de desembolsos', 16, 0),
(32, 'Sin coordinación', 17, 0),
(33, 'Ejecución física', 17, 0),
(34, 'Ejecución financiera', 17, 0),
(35, 'Sin coordinación', 18, 0),
(36, 'Sin coordinación', 19, 0),
(37, 'Sin coordinación', 20, 0),
(38, 'Sin coordinación', 21, 0),
(39, 'Atención al ciudadano', 21, 0),
(40, 'Sin coordinación', 22, 0),
(41, 'Administración integral de riesgo', 22, 0),
(42, 'Prevención y control contra la legitimación de capital', 22, 0),
(43, 'Secretaría de la comisión de contrataciones', 22, 0),
(44, 'Sin coordinación', 23, 0),
(45, 'Sin coordinación', 24, 0),
(46, 'Oficina de gestión de proyectos', 24, 0),
(47, 'Control de ejecución presupuestaria', 24, 0),
(48, 'Sin coordinación', 25, 0),
(49, 'Gestión de calidad', 26, 0),
(50, 'Sin coordinación', 27, 0),
(51, 'Sin coordinación', 28, 0),
(52, 'Asistencia legal y procesos administrativos', 28, 0),
(53, 'Análisis y documentación legal', 28, 0),
(54, 'Sin coordinación', 29, 0),
(55, 'Selección y desarrollo del talento humano', 29, 0),
(56, 'Planificación del talento humano', 29, 0),
(57, 'Sin coordinación', 30, 0),
(58, 'Fondo autoadministrado de salud', 30, 0),
(59, 'Salud y seguridad laboral', 30, 0),
(60, 'Sin coordinación', 31, 0),
(61, 'Gestión administrativa', 31, 0),
(62, 'Bienestar social', 31, 0),
(63, 'Sin coordinación', 32, 0),
(64, 'Oficina de requerimientos y planificación  tecnológica', 32, 0),
(65, 'Sin coordinación', 33, 0),
(66, 'Sin coordinación', 34, 0),
(67, 'Sin coordinación', 35, 0),
(68, 'Gestión documental', 35, 0),
(69, 'Sin coordinación', 36, 0),
(70, 'Pagos', 36, 0),
(71, 'Servicios administrativos', 36, 0),
(72, 'Servicios generales', 36, 0),
(73, 'Bienes de uso', 36, 0),
(74, 'Sin coordinación', 37, 0),
(75, 'Sin coordinación', 38, 0),
(76, 'Sin coordinación', 39, 0),
(77, 'Protocolo y eventos', 39, 0),
(78, 'Medios e imagen institucional', 39, 0),
(79, 'Sin coordinación', 40, 0),
(80, 'Investigaciones', 40, 0),
(81, 'Seguridad integral', 40, 0),
(82, 'Seguridad industrial', 40, 0),
(83, 'Sin coordinación', 41, 0),
(84, 'Auditorias', 41, 0),
(85, 'Determinación de responsabilidades', 41, 0),
(86, 'Sin coordinación', 42, 0),
(87, 'Sin coordinación', 43, 0),
(88, 'Secretaria del directorio', 43, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diccionario`
--

DROP TABLE IF EXISTS `diccionario`;
CREATE TABLE IF NOT EXISTS `diccionario` (
  `id_diccionario` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) NOT NULL,
  `tipo` varchar(90) NOT NULL,
  `enero` int(90) NOT NULL,
  `febrero` int(90) NOT NULL,
  `marzo` int(90) NOT NULL,
  `abril` int(90) NOT NULL,
  `mayo` int(90) NOT NULL,
  `junio` int(90) NOT NULL,
  `julio` int(90) NOT NULL,
  `agosto` int(90) NOT NULL,
  `septiembre` int(90) NOT NULL,
  `octubre` int(90) NOT NULL,
  `noviembre` int(90) NOT NULL,
  `diciembre` int(90) NOT NULL,
  `proyecto` int(90) NOT NULL,
  `gerencia` int(90) NOT NULL,
  `coordinacion` int(90) NOT NULL,
  `objetivo` int(90) NOT NULL,
  `indicadores` int(90) NOT NULL,
  `dcreado` timestamp NOT NULL,
  `dactualizado` timestamp NOT NULL,
  PRIMARY KEY (`id_diccionario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diccionario`
--

INSERT INTO `diccionario` (`id_diccionario`, `descripcion`, `tipo`, `enero`, `febrero`, `marzo`, `abril`, `mayo`, `junio`, `julio`, `agosto`, `septiembre`, `octubre`, `noviembre`, `diciembre`, `proyecto`, `gerencia`, `coordinacion`, `objetivo`, `indicadores`, `dcreado`, `dactualizado`) VALUES
(1, 'desc', 'Planificado', 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 1, 2, 4, 1, 1, '2018-07-11 20:51:45', '2018-07-12 19:16:54'),
(2, 'descripciones', 'Planificado', 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 1, 2, 4, 1, 5, '2018-07-12 19:08:00', '2018-07-12 19:17:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directriz`
--

DROP TABLE IF EXISTS `directriz`;
CREATE TABLE IF NOT EXISTS `directriz` (
  `id_directriz` int(11) NOT NULL AUTO_INCREMENT,
  `nacion` int(11) NOT NULL,
  `institucional` int(11) NOT NULL,
  `estrategico` int(11) NOT NULL,
  `objetivo` int(11) NOT NULL,
  `proyecto` int(11) NOT NULL,
  `gerencia` int(11) NOT NULL,
  `coordinacion` int(11) NOT NULL,
  `dcreado` date NOT NULL,
  `dactualizado` date NOT NULL,
  PRIMARY KEY (`id_directriz`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `directriz`
--

INSERT INTO `directriz` (`id_directriz`, `nacion`, `institucional`, `estrategico`, `objetivo`, `proyecto`, `gerencia`, `coordinacion`, `dcreado`, `dactualizado`) VALUES
(1, 1, 1, 1, 1, 1, 2, 4, '2018-07-11', '2018-07-11'),
(2, 5, 4, 58, 1, 1, 2, 4, '2018-07-12', '2018-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencia`
--

DROP TABLE IF EXISTS `gerencia`;
CREATE TABLE IF NOT EXISTS `gerencia` (
  `id_gerencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `id_proyecto` int(90) NOT NULL,
  PRIMARY KEY (`id_gerencia`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gerencia`
--

INSERT INTO `gerencia` (`id_gerencia`, `nombre`, `id_proyecto`) VALUES
(1, 'Sin gerencia', 1),
(2, 'Análisis y financiamiento', 1),
(3, 'Administración de contratos', 1),
(4, 'Planificación crediticia y atención integral', 1),
(5, 'Cobranzas y recuperaciones', 1),
(6, 'Sin gerencia', 2),
(7, 'Financiamiento internacional', 2),
(8, 'Coorporación y técnica y relaciones con organismos', 2),
(9, 'Oficina de representación de Nicaragua', 2),
(10, 'Oficina de representación de Ecuador', 2),
(11, 'Sin gerencia', 3),
(12, 'Planificación y negocios', 3),
(13, 'Operaciones fiduciarias', 3),
(14, 'Sin gerencia', 4),
(15, 'Gerencia de proyectos', 4),
(16, 'Gerencia de operaciones', 4),
(17, 'Gerencia de seguimiento', 4),
(18, 'Tesoreria', 5),
(19, 'Operaciones financieras', 5),
(20, 'Análisis y seguimiento financiero', 5),
(21, 'Sin gerencia', 6),
(22, 'Sin gerencia', 7),
(23, 'Seguridad de la información', 7),
(24, 'Sin gerencia', 8),
(25, 'Planificación y presupuesto', 8),
(26, 'Gestión de calidad', 8),
(27, 'Inteligencia estratégica', 8),
(28, 'Sin gerencia', 9),
(29, 'Planificación y desarrollo del talento humano', 10),
(30, 'Prevensión laboral', 10),
(31, 'Administración del talento humano', 10),
(32, 'Sin gerencia', 11),
(33, 'Automatización y soluciones', 11),
(34, 'Infraestructura y servicios tecnológicos', 11),
(35, 'Sin gerencia', 12),
(36, 'Gestión administrativa fiscal', 12),
(37, 'Contabilidad', 12),
(38, 'Compras, contratación de servicios y suministros', 12),
(39, 'Sin gerencia', 13),
(40, 'Sin gerencia', 14),
(41, 'Sin gerencia', 15),
(42, 'Sin gerencia', 16),
(43, 'Sin gerencia', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

DROP TABLE IF EXISTS `indicadores`;
CREATE TABLE IF NOT EXISTS `indicadores` (
  `id_indicadores` int(11) NOT NULL AUTO_INCREMENT,
  `indicadores` varchar(350) NOT NULL,
  `tipo` varchar(90) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_gerencia` int(11) NOT NULL,
  `id_coordinacion` int(11) NOT NULL,
  `dcreado` date DEFAULT NULL,
  `dactualizado` date DEFAULT NULL,
  `objetivo` longtext NOT NULL,
  PRIMARY KEY (`id_indicadores`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`id_indicadores`, `indicadores`, `tipo`, `id_proyecto`, `id_gerencia`, `id_coordinacion`, `dcreado`, `dactualizado`, `objetivo`) VALUES
(1, 'Nº de solicitudes de financiamiento de proyectos  productivos nuevos y ampliaciones evaluadas / Nº de solicitudes de financiamiento de proyectos productivos planificadas para su evaluación.', 'Planificado', 1, 2, 4, '2018-07-11', '2018-07-11', '1'),
(2, 'Nº de solicitudes de reestructuración de proyectos evaluadas / Nº de solicitudes de reestructuración de proyectos planificadas para su evaluación.', 'Demanda', 1, 2, 4, '2018-07-11', '2018-07-11', '1'),
(3, 'Nº de solicitudes de financiamiento de proyectos productivos nuevos y ampliaciones  evaluadas con cargo a los Fondos Administrados/ Nº de solicitudes de financiamiento de proyectos productivos planificados para su evaluación con cargo a los Fondos Administrados.', 'Demanda', 1, 2, 4, '2018-07-11', '2018-07-11', '1'),
(4, 'Nº de solicitudes de financiamientos reembolsable, no reembolsable o mixto evaluadas / Nº de solicitudes financiamientos reembolsable, no reembolsable o mixto recibidas.', 'Demanda', 1, 2, 4, '2018-07-11', '2018-07-11', '1'),
(5, 'indicadores 1', 'Planificado', 1, 2, 4, '2018-07-12', '2018-07-12', '1'),
(6, 'hola', 'Planificado', 2, 7, 13, '2018-07-13', '2018-07-13', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciativa`
--

DROP TABLE IF EXISTS `iniciativa`;
CREATE TABLE IF NOT EXISTS `iniciativa` (
  `id_iniciativa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(350) NOT NULL,
  `proyecto` int(90) NOT NULL,
  `gerencia` int(90) NOT NULL,
  `coordinacion` int(90) NOT NULL,
  `objetivo` int(90) NOT NULL,
  `nacion` int(90) NOT NULL,
  `institucional` int(90) NOT NULL,
  `estrategico` int(11) NOT NULL,
  `dcreado` date NOT NULL,
  `dactualizado` date NOT NULL,
  PRIMARY KEY (`id_iniciativa`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciativa`
--

INSERT INTO `iniciativa` (`id_iniciativa`, `nombre`, `proyecto`, `gerencia`, `coordinacion`, `objetivo`, `nacion`, `institucional`, `estrategico`, `dcreado`, `dactualizado`) VALUES
(1, 'Nº de solicitudes de financiamientos reembolsable, no reembolsable o mixto evaluadas / Nº de solicitudes financiamientos reembolsable, no reembolsable o mixto recibidas.', 1, 2, 4, 1, 1, 1, 0, '2018-07-11', '2018-07-11'),
(2, 'iniciativa 12', 1, 2, 4, 1, 1, 4, 0, '2018-07-12', '2018-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucional`
--

DROP TABLE IF EXISTS `institucional`;
CREATE TABLE IF NOT EXISTS `institucional` (
  `id_institucional` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `dcreado` date NOT NULL,
  `dactualizado` date NOT NULL,
  PRIMARY KEY (`id_institucional`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucional`
--

INSERT INTO `institucional` (`id_institucional`, `nombre`, `dcreado`, `dactualizado`) VALUES
(1, 'COMPROMISO CON EL PAÍS EN LA CONSTRUCCIÓN DEL MODELO PRODUCTIVO SOCIALISTA. ', '2018-07-09', '2018-07-09'),
(2, 'ADECUACIÓN DE LA INSTITUCIÓN, SUS PROCESOS Y LA TECNOLOGÍA.', '2018-07-09', '2018-07-09'),
(3, 'MOTIVACIÓN Y CAPACITACIÓN DEL TALENTO HUMANO', '2018-07-09', '2018-07-09'),
(4, 'SOSTENIBILIDAD FINANCIERA Y FORTALECIMIENTO PATRIMONIAL.', '2018-07-09', '2018-07-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logins`
--

DROP TABLE IF EXISTS `logins`;
CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_agent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_token` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `logins_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logins`
--

INSERT INTO `logins` (`id`, `user_id`, `user_agent`, `session_token`, `ip_address`, `login_at`, `logout_at`) VALUES
(1, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'KKnRFpfeDrXdEN3pNlHTSC5kbWW3U0q9PDTtw61D', '127.0.0.1', '2018-06-18 17:21:34', NULL),
(2, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'dsHLb3rLgVK2Jhz6dw5e7cayfG1AeSlP2D8mRM8A', '127.0.0.1', '2018-06-18 17:22:39', '2018-06-18 13:22:52'),
(3, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'h8axMATxe8zbiytSNs749rrf6sP6RM7sq4AeWdAo', '127.0.0.1', '2018-06-18 17:22:57', '2018-06-18 13:24:39'),
(4, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'h6iUN03PRKnqMN2nYklYGsPpB3sdRAStSKRuxrV8', '127.0.0.1', '2018-06-18 17:25:56', '2018-06-18 13:26:06'),
(5, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'sNdX7CvOverHyma9JZZmhpdHEudws035eHjg2BiA', '127.0.0.1', '2018-06-18 17:26:12', NULL),
(6, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'gMwQclMb0lbozcoplaqk4uiMmhcVxfR6aAnI2bOh', '127.0.0.1', '2018-06-18 17:27:06', '2018-06-18 13:27:11'),
(7, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'tv66sQlM7Dmc0WbFPdEqyjZms9FEP4IkU078Brhb', '127.0.0.1', '2018-06-18 17:27:20', '2018-06-18 13:27:44'),
(8, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'AcMHHlim1N1GIMoYLt5v41wZ79dyJDo6zM0XSCxA', '127.0.0.1', '2018-06-18 17:27:50', '2018-06-18 13:55:57'),
(9, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'ARcudiVitWgf5TadSS5CwQDfvgQZOih886JZo4yV', '127.0.0.1', '2018-06-18 17:56:05', NULL),
(10, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'KObMQ5AwM0RZU2IuyoHb6HHnwrx4v6YjC9pKD3Vi', '127.0.0.1', '2018-06-18 17:58:17', '2018-06-18 13:59:01'),
(11, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '28za870R5EHhCcQBbtW8NzO45TiILtn8IQXSkb0G', '127.0.0.1', '2018-06-18 17:59:07', '2018-06-18 14:14:07'),
(12, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'otpR1x97ytx2SKHk8ipTV57hvxRuHVu4oOlf2LSS', '127.0.0.1', '2018-06-18 18:14:15', '2018-06-18 14:14:21'),
(13, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'AvIbSq553REhgVk4azxU6W3Pb0HKLRYazS0RM6VB', '127.0.0.1', '2018-06-18 18:14:28', '2018-06-18 14:14:49'),
(14, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '7U1bBp37NQC6lC73wSJggGy2474xABQDGHC0Dzfl', '127.0.0.1', '2018-06-18 18:14:55', '2018-06-18 22:03:21'),
(15, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'POnWRyAHlbDzprpA5Wc0p4ql62EQdjdSdaRrbzcb', '127.0.0.1', '2018-06-19 02:03:32', '2018-06-18 22:18:23'),
(16, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', '9zc0OyRKWzobuGClI1TtOHuHPRELgUNJMBVzs5va', '127.0.0.1', '2018-06-19 17:47:16', NULL),
(17, 2, 'Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0', 'm4pUilA7SZCvjUUCvK4PAuODibkfaK10Wa6IbBRM', '127.0.0.1', '2018-06-19 18:00:23', NULL),
(18, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'GbChtzpO4DvSyckjQDgxUrHjujKXDrmd4yeqgG1x', '127.0.0.1', '2018-06-20 18:23:14', '2018-06-20 19:43:41'),
(19, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'JjSpHUZxVWyzYqAQtZMVdYENguUyCaLJP1wjEhHS', '127.0.0.1', '2018-06-20 23:43:58', NULL),
(20, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'oAuLEnIzhbHj5w7KunCNeTmHLZRAvWfjdUDJmDKN', '127.0.0.1', '2018-06-21 00:56:31', NULL),
(21, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'JxAiUbjWELR1TbLOfRSCLUaRU8L9bvnswU65uGnV', '127.0.0.1', '2018-06-21 18:49:46', '2018-06-21 19:05:04'),
(22, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'QIXaFwmOUYDl1MfkWJUG5cB3qPDk70s0dip3BCKd', '127.0.0.1', '2018-06-21 23:05:52', NULL),
(23, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'h04Uyy7BzDF5GZCMYpeJs9LyEaXL7329OPAtcDrn', '127.0.0.1', '2018-06-21 23:15:46', '2018-06-21 22:13:39'),
(24, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'FyUEZ40iiPG0PUipSSbONdp3MtavUWKtJ9aU7Iep', '127.0.0.1', '2018-06-22 02:14:02', '2018-06-21 22:14:08'),
(25, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'ynaQpi5AQsBOpbLZU2VeBOBKGfuQ0IlMgNLZszQx', '127.0.0.1', '2018-06-22 02:14:31', NULL),
(26, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'wtO7iBBlJcXPSQBTC8rZ8KZZ0AN1ef99uhmUp9Qc', '127.0.0.1', '2018-06-22 18:27:55', '2018-06-22 21:35:41'),
(27, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'SojCJxdgvIq41svp6t5SX9Y0nlzWHuBRTMu2Mzrm', '127.0.0.1', '2018-06-23 01:35:47', '2018-06-22 21:37:01'),
(28, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'VyNy1YJf8mEMJSX5JSVOEzSCG2hhyhODT1lFKclo', '127.0.0.1', '2018-06-23 01:37:06', '2018-06-22 21:37:16'),
(29, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'Td5PwzNRHPeo2nErGaLvdixNfu2GWWuZ1xp1ehAb', '127.0.0.1', '2018-06-23 01:37:23', '2018-06-22 21:37:47'),
(30, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'GaUuTZkys2qKfxd4UAyuO5O1xbto9OePBJFW0dsD', '127.0.0.1', '2018-06-23 01:37:52', '2018-06-22 21:37:57'),
(31, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 't95M4kORNeHuwrKTA1FZxsaP3TOoUOXEXVgy5zqn', '127.0.0.1', '2018-06-23 01:38:08', '2018-06-22 21:38:23'),
(32, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'n7dFTK808vSd4wK7GaARKdCjNQXwaKTcQuEo5qqO', '127.0.0.1', '2018-06-23 01:38:33', NULL),
(33, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'rx3G8lvxVjg5dt28Cf2BcgqFmtSHv57kAYML3VQS', '127.0.0.1', '2018-06-25 16:18:59', '2018-06-25 20:49:18'),
(34, 2, 'Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0', 'W3Zv1G3hD9nX43rL6KPSUC3bQCeT2qJeBemDtgRG', '127.0.0.1', '2018-06-25 18:48:06', NULL),
(35, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'iug4cXaQkdhyBqyQqfNi9Rzz1dFtSk0EBXz3LNmj', '127.0.0.1', '2018-06-26 00:49:31', '2018-06-25 20:49:50'),
(36, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'b6fzufieSVaGKULrISochdkAqT6toDB2A27Wl6vg', '127.0.0.1', '2018-06-26 00:49:56', '2018-06-25 22:58:11'),
(37, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'vKiyjeQFYOaxLgy1gEFkJSXuAI2Pmb1T3N3bcbVR', '127.0.0.1', '2018-06-26 21:30:11', '2018-06-26 17:32:02'),
(38, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'vUANfeFzzQ4nFr97joYHCzlDIbjqaHuuv0PTc2lZ', '127.0.0.1', '2018-06-26 21:33:01', '2018-06-26 17:33:20'),
(39, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'QSLmPyvJV9LNPDleYpILpeZXSVVMFRhLDU14BxHl', '127.0.0.1', '2018-06-26 21:33:38', '2018-06-26 20:38:01'),
(40, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'wR6C24DvZePKQrqKqg5W7avpNMlFTat3CEfVj3XA', '127.0.0.1', '2018-06-27 18:05:11', NULL),
(41, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '48lzyLyz1LqGxHIzXe3ifG9Sl7M3Hv9hyluQJbLs', '127.0.0.1', '2018-06-28 20:21:58', NULL),
(42, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '4MYnjT7su2jSPgRdGao4pKrxFxz5IEY9iRu0g4C9', '127.0.0.1', '2018-06-28 20:22:33', '2018-06-28 17:54:09'),
(43, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'fjPatRni2HhspOJIIEHocIJCMESalO6r8DVXNmrb', '127.0.0.1', '2018-06-28 21:56:52', NULL),
(44, 2, 'Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0', '6SYR9PRr6qkE52v0S7nzyQmitHHWThKht2Iq1QsS', '127.0.0.1', '2018-06-29 00:09:22', NULL),
(45, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'orT2OXELaZ0aDRLtziPo5ZUECJ68O9DTyMDtrsi2', '127.0.0.1', '2018-06-29 17:20:22', '2018-06-29 21:08:22'),
(46, 2, 'Mozilla/5.0 (Windows NT 6.1; rv:60.0) Gecko/20100101 Firefox/60.0', 'U5sIxy022fH9C6HA5VOHjL4IWBZFv6hStulP5E1c', '127.0.0.1', '2018-06-29 18:52:09', NULL),
(47, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'bCfHSu3znqG0wyEhXhTaHOLDmS3FP324MsIlfe1X', '127.0.0.1', '2018-07-03 19:49:33', '2018-07-03 23:09:25'),
(48, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'imNXY1dbcoimP79PV9AIoxSLbtpuYgw5f5dMsgDk', '127.0.0.1', '2018-07-04 17:31:28', '2018-07-04 14:37:35'),
(49, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'uLaXLfCxDLksQZQSGocCdItK9DO5dKodBBcXDG7Y', '127.0.0.1', '2018-07-04 18:37:41', NULL),
(50, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', '5DpCCQgnQ8uuR2CB12kh9XHzHDyZ1IV5QK4F8VR8', '127.0.0.1', '2018-07-04 19:00:55', '2018-07-04 18:07:53'),
(51, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'ScTyT8R7J4qc05QaQHjxB97Qe6hSSAiYDkK4M0Tn', '127.0.0.1', '2018-07-06 14:17:36', NULL),
(52, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'FnTwkbhPceEZmMc1z8gTZLaJoEnEYGMHfbnjDCtM', '127.0.0.1', '2018-07-09 12:59:48', '2018-07-09 16:59:33'),
(53, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'YoOmsv7RZDQjbvpPYRPxEx9AVvgrjiyNucI7WLsJ', '127.0.0.1', '2018-07-09 21:04:40', NULL),
(54, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'IHYhyYUcITJeYAv4iGBX6avRMgny0GV9EPHumlef', '127.0.0.1', '2018-07-10 17:34:36', '2018-07-10 17:55:21'),
(55, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'ufXXg0oJX07DBOk8vPj1SZVcwjjIIEZKY0C9Zuhf', '127.0.0.1', '2018-07-11 14:32:02', '2018-07-11 16:52:58'),
(56, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'fuflhdVb14oUGBV838wN4IzJKnak07IJB39mMoi0', '127.0.0.1', '2018-07-11 20:53:03', NULL),
(57, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'QfqgxObyDb86Vkq1cLucxO0LzCEXRQgaEQIPpI50', '127.0.0.1', '2018-07-12 18:07:54', '2018-07-12 14:08:06'),
(58, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'tcgQzhLKc5Kx23cHYMHRw87zgvncjnh4TdGoC5jl', '127.0.0.1', '2018-07-12 18:08:21', NULL),
(59, 2, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'Fya8YeOVMoVzYlkJ1hzFgETz8vBtbUI79OLE8evZ', '127.0.0.1', '2018-07-13 14:02:50', '2018-07-13 12:05:46'),
(60, 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'u5DyBv6dCzJcIlp2PNEROvEqUKVMnzJUYXeRrE58', '127.0.0.1', '2018-07-13 16:16:22', '2018-07-13 12:26:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

DROP TABLE IF EXISTS `metas`;
CREATE TABLE IF NOT EXISTS `metas` (
  `id_meta` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto` int(11) NOT NULL,
  `gerencia` int(11) NOT NULL,
  `coordinacion` int(11) NOT NULL,
  `metas` longtext NOT NULL,
  `recursos` varchar(90) NOT NULL,
  `dcreado` date DEFAULT NULL,
  `dactualizado` date DEFAULT NULL,
  `objetivo` int(11) NOT NULL,
  PRIMARY KEY (`id_meta`),
  KEY `proyecto` (`proyecto`,`gerencia`,`coordinacion`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metas`
--

INSERT INTO `metas` (`id_meta`, `proyecto`, `gerencia`, `coordinacion`, `metas`, `recursos`, `dcreado`, `dactualizado`, `objetivo`) VALUES
(1, 1, 2, 4, 'Evaluar 80 solicitudes de financiamiento de proyectos productivos nuevos y ampliaciones, durante el año 2018.', 'No', '2018-07-11', '2018-07-11', 1),
(2, 1, 2, 4, 'Evaluar 100% de solicitudes de reestructuración de proyectos durante el año 2018.', 'No', '2018-07-11', '2018-07-11', 1),
(3, 1, 2, 4, 'Evaluar el 100%  de las solicitudes de financiamiento de proyectos productivos, con cargo a los Fondos Administrados, durante el año 2018.', 'No', '2018-07-11', '2018-07-11', 0),
(4, 1, 2, 4, 'Evaluar el 100% de las solicitudes de financiamientos reembolsables, no reembolsables o mixtos,  con cargo al FIS y al FDR, durante el año 2018.', 'No', '2018-07-11', '2018-07-11', 1),
(5, 11, 33, 65, 'meta 01032132', 'Si', '2018-07-12', '2018-07-12', 0),
(6, 2, 7, 13, 'meta', 'Si', '2018-07-13', '2018-07-13', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_000001_create_logins_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_11_05_134423_create_permission_tables', 1),
(5, '2018_06_06_183441_create_funcional_table', 1),
(6, '2018_06_12_154337_ubicacionTable', 1),
(7, '2018_06_12_155830_UsuarioubicacionTable', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacion`
--

DROP TABLE IF EXISTS `nacion`;
CREATE TABLE IF NOT EXISTS `nacion` (
  `id_nacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(350) NOT NULL,
  `dcreado` date NOT NULL,
  `dactualizado` date NOT NULL,
  PRIMARY KEY (`id_nacion`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacion`
--

INSERT INTO `nacion` (`id_nacion`, `nombre`, `dcreado`, `dactualizado`) VALUES
(1, 'DEFENDER,EXPANDIR Y CONSOLIDAR EL BIEN MAS PRECIADO QUE HEMOS CONQUISTADO DESPUES DE 200 AÑOS: LA INDEPENDENCIA NACIONAL', '2018-07-03', '2018-07-03'),
(2, 'CONSTRUYENDO EL SOCIALISMO BOLIVARIANO DEL SIGLO XXI, COMO ALTERNATIVA AL SISTEMA DESTRUCTIVO Y, SALVAJE DEL CAPITALISMO Y CON ELLO ASEGURAR LA MAYOR SUMA DE SEGURIDAD SOCIAL, MAYOR SUMA DE ESTABILIDAD POLITICA Y MAYOR SUMA DE FELICIDAD PARA NUESTRO PUEBLO.', '2018-07-03', '2018-07-03'),
(3, 'CONVERTIR A VENEZUELA EN UN PAÍS POTENCIA EN LO SOCIAL, LO ECONÓMICO Y LO POLÍTICO, DENTRO DE LA GRAN POTENCIA NACIENTE DE AMÉRICA LATINA Y EL CARIBE, QUE GARANTICEN LA CONFORMACIÓN DE UNA ZONA DE PAZ EN NUESTRA AMÉRICA.', '2018-07-03', '2018-07-03'),
(4, 'CONTRIBUIR AL DESARROLLO DE UNA NUEVA GEOPOLÍTICA INTERNACIONAL, EN LA CUAL TOME CUERPO UN MUNDO MULTICÉNTRICO Y PLURIPOLAR QUE PERMITA LOGRAR EL EQUILIBRIO DEL UNIVERSO Y GARANTIZAR LA PAZ PLANETARIA.', '2018-07-03', '2018-07-03'),
(5, 'PRESERVAR LA VIDA EN EL PLANETA Y SALVAR A LA ESPECIE HUMANA.', '2018-07-03', '2018-07-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivo`
--

DROP TABLE IF EXISTS `objetivo`;
CREATE TABLE IF NOT EXISTS `objetivo` (
  `id_objetivo` int(11) NOT NULL AUTO_INCREMENT,
  `objetivo` varchar(500) NOT NULL,
  `proyecto` int(90) NOT NULL,
  `gerencia` int(90) NOT NULL,
  `coordinacion` int(90) NOT NULL,
  `dcreado` date NOT NULL,
  `dactualizado` date NOT NULL,
  PRIMARY KEY (`id_objetivo`),
  KEY `proyecto` (`proyecto`),
  KEY `objetivo` (`objetivo`),
  KEY `gerencia` (`gerencia`,`coordinacion`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objetivo`
--

INSERT INTO `objetivo` (`id_objetivo`, `objetivo`, `proyecto`, `gerencia`, `coordinacion`, `dcreado`, `dactualizado`) VALUES
(1, 'Evaluar la viabilidad de las solicitudes de financiamiento de proyectos de corto, mediano y largo plazo, en los sectores manufactura, turismo, agrícola, social y servicios conexos a las actividades productivas, con el propósito de contribuir con el desarrollo económico y social de país.', 1, 2, 4, '2018-07-11', '2018-07-11'),
(2, 'Elevar a las instancias aprobatorias las solicitudes de crédito evaluadas viables, para la ejecución de proyectos en los sectores manufactura, turismo, agrícola, servicios conexos a las actividades productivas, así como proyectos sociales y socio-productivos, con el propósito de contribuir con el desarrollo del país,  en concordancia con el Plan de la Patria.', 1, 2, 4, '2018-07-11', '2018-07-11'),
(3, 'objetivo 12123123', 11, 33, 65, '2018-07-12', '2018-07-12'),
(4, 'hola', 2, 7, 13, '2018-07-13', '2018-07-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivo_estrategico`
--

DROP TABLE IF EXISTS `objetivo_estrategico`;
CREATE TABLE IF NOT EXISTS `objetivo_estrategico` (
  `id_estrategico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` longtext NOT NULL,
  `dcreado` date DEFAULT NULL,
  `dactualizado` date DEFAULT NULL,
  `id_nacion` int(90) NOT NULL,
  `id_institucional` int(90) NOT NULL,
  PRIMARY KEY (`id_estrategico`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objetivo_estrategico`
--

INSERT INTO `objetivo_estrategico` (`id_estrategico`, `nombre`, `dcreado`, `dactualizado`, `id_nacion`, `id_institucional`) VALUES
(1, 'INCREMENTAR EL FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES PRODUCTIVOS NACIONALES, PRIORIZANDO LA INVERSIÓN EN ZONAS DE BAJO CRECIMIENTO Y CON POTENCIALIDADES ECONÓMICAS PARA EL  DESARROLLO  DEL PAÍS.', NULL, NULL, 1, 1),
(2, 'PROMOVER EL FINANCIAMIENTO  DE PROYECTOS SOCIALES Y DE INVERSIÓN SOCIOPRODUCTIVA PARA  EL DESARROLLO INTEGRAL DE LAS COMUNIDADES.', NULL, NULL, 1, 1),
(3, ' POSICIONAR LOS PRODUCTOS Y SERVICIOS DE ADMINISTRACIÓN DE RECURSOS A TERCEROS Y OTROS ENCARGOS DE CONFIANZA, PARA CONSOLIDAR A BANDES COMO AGENTE FIDUCIARIO PÚBLICO.', NULL, NULL, 1, 1),
(4, 'IMPULSAR EL FINANCIAMIENTO DE PROYECTOS INTERNACIONALES E INICIATIVAS DE INVERSIÓN PRODUCTIVA, EN PAÍSES DE INTERÉS GEOESTRATÉGICO PARA VENEZUELA BAJO ESQUEMAS FINANCIEROS QUE GARANTICEN LA SUSTENTABILIDAD Y SOSTENIBILIDAD DEL PROGRAMA.', NULL, NULL, 1, 1),
(5, ' CONSOLIDAR EL PROGRAMA DE FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES DE INTERÉS ESTRATÉGICO DEFINIDOS POR EL GOBIERNO NACIONAL, A TRAVÉS DE LOS FONDOS BILATERALES PARA EL DESARROLLO ECONÓMICO Y SOCIAL DEL PAÍS.   ', NULL, NULL, 1, 1),
(11, 'APOYAR AL EJECUTIVO NACIONAL EN LA ORIENTACIÓN DE POLÍTICAS DE FINANCIAMIENTO EN MATERIA DE DESARROLLO Y EN EL SEGUIMIENTO A LA EJECUCIÓN DE LOS RECURSOS ASIGNADOS A PROGRAMAS Y PROYECTOS. ', NULL, NULL, 1, 1),
(12, 'IMPULSAR EL CAMBIO ORGANIZACIONAL QUE PERMITA ATENDER LAS EXIGENCIAS Y DINÁMICA  DEL NUEVO MODELO DE GESTIÓN DEL BANCO, ASÍ COMO LA  COMPLEJIDAD DEL ENTORNO.', NULL, NULL, 1, 2),
(13, 'IMPULSAR EL CAMBIO ORGANIZACIONAL QUE PERMITA ATENDER LAS EXIGENCIAS Y DINÁMICA  DEL NUEVO MODELO DE GESTIÓN DEL BANCO, ASÍ COMO LA  COMPLEJIDAD DEL ENTORNO.', NULL, NULL, 1, 2),
(14, 'CONSOLIDAR LA PLATAFORMA TECNOLÓGICA, ADECUADA A LOS REQUERIMIENTOS DEL BANCO, QUE PERMITA MEJORAR LA EFICIENCIA DE LA GESTIÓN Y POR ENDE, SU ÓPTIMO FUNCIONAMIENTO.', NULL, NULL, 1, 2),
(15, ' FORTALECER LAS CONDICIONES LABORALES DEL TALENTO HUMANO QUE PERMITAN SU DESARROLLO PERSONAL Y PROFESIONAL, CON BASE EN EL NUEVO MODELO DE GESTIÓN DEL BANCO. \r\n', NULL, NULL, 1, 3),
(16, 'GARANTIZAR LA SOSTENIBILIDAD FINANCIERA  Y EL FORTALECIMIENTO PATRIMONIAL DE BANDES, BAJO EL ENFOQUE DE BANCA DE DESARROLLO Y CRITERIOS DE PRODUCTIVIDAD, A FIN DE  DE MANTENER LA OPERATIVIDAD Y PERMANENCIA DE LOS  PROGRAMAS DE COOPERACIÓN Y FINANCIAMIENTO. ', NULL, NULL, 1, 4),
(17, ' ADECUACIÓN DE LA INSTITUCIÓN, SUS PROCESOS Y TECNOLOGÍA', NULL, NULL, 2, 2),
(18, 'CONSOLIDAR LA PLATAFORMA TECNOLÓGICA, ADECUADA A LOS REQUERIMIENTOS DEL BANCO, QUE PERMITA MEJORAR LA EFICIENCIA DE LA GESTIÓN Y POR ENDE, SU ÓPTIMO FUNCIONAMIENTO.', NULL, NULL, 2, 2),
(19, 'GARANTIZAR LA SOSTENIBILIDAD FINANCIERA  Y EL FORTALECIMIENTO PATRIMONIAL DE BANDES, BAJO EL ENFOQUE DE BANCA DE DESARROLLO Y CRITERIOS DE PRODUCTIVIDAD, A FIN DE  DE MANTENER LA OPERATIVIDAD Y PERMANENCIA DE LOS  PROGRAMAS DE COOPERACIÓN Y FINANCIAMIENTO. ', NULL, NULL, 2, 3),
(20, 'INCREMENTAR EL FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES PRODUCTIVOS NACIONALES, PRIORIZANDO LA INVERSIÓN EN ZONAS DE BAJO CRECIMIENTO Y CON POTENCIALIDADES ECONÓMICAS PARA EL  DESARROLLO  DEL PAÍS.', NULL, NULL, 2, 4),
(21, 'PROMOVER EL FINANCIAMIENTO  DE PROYECTOS SOCIALES Y DE INVERSIÓN SOCIOPRODUCTIVA PARA  EL DESARROLLO INTEGRAL DE LAS COMUNIDADES.', NULL, NULL, 2, 4),
(22, ' POSICIONAR LOS PRODUCTOS Y SERVICIOS DE ADMINISTRACIÓN DE RECURSOS A TERCEROS Y OTROS ENCARGOS DE CONFIANZA, PARA CONSOLIDAR A BANDES COMO AGENTE FIDUCIARIO PÚBLICO.', NULL, NULL, 2, 4),
(23, 'IMPULSAR EL FINANCIAMIENTO DE PROYECTOS INTERNACIONALES E INICIATIVAS DE INVERSIÓN PRODUCTIVA, EN PAÍSES DE INTERÉS GEOESTRATÉGICO PARA VENEZUELA BAJO ESQUEMAS FINANCIEROS QUE GARANTICEN LA SUSTENTABILIDAD Y SOSTENIBILIDAD DEL PROGRAMA.', NULL, NULL, 2, 4),
(24, 'CONSOLIDAR EL PROGRAMA DE FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES DE INTERÉS ESTRATÉGICO DEFINIDOS POR EL GOBIERNO NACIONAL, A TRAVÉS DE LOS FONDOS BILATERALES PARA EL DESARROLLO ECONÓMICO Y SOCIAL DEL PAÍS.   ', NULL, NULL, 2, 4),
(25, 'APOYAR AL EJECUTIVO NACIONAL EN LA ORIENTACIÓN DE POLÍTICAS DE FINANCIAMIENTO EN MATERIA DE DESARROLLO Y EN EL SEGUIMIENTO A LA EJECUCIÓN DE LOS RECURSOS ASIGNADOS A PROGRAMAS Y PROYECTOS. ', NULL, NULL, 2, 4),
(26, ' INCREMENTAR EL FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES PRODUCTIVOS NACIONALES, PRIORIZANDO LA INVERSIÓN EN ZONAS DE BAJO CRECIMIENTO Y CON POTENCIALIDADES ECONÓMICAS PARA EL  DESARROLLO  DEL PAÍS.', NULL, NULL, 3, 1),
(27, ' PROMOVER EL FINANCIAMIENTO  DE PROYECTOS SOCIALES Y DE INVERSIÓN SOCIOPRODUCTIVA PARA  EL DESARROLLO INTEGRAL DE LAS COMUNIDADES.', NULL, NULL, 3, 1),
(28, 'POSICIONAR LOS PRODUCTOS Y SERVICIOS DE ADMINISTRACIÓN DE RECURSOS A TERCEROS Y OTROS ENCARGOS DE CONFIANZA, PARA CONSOLIDAR A BANDES COMO AGENTE FIDUCIARIO PÚBLICO.', NULL, NULL, 3, 1),
(29, ' IMPULSAR EL FINANCIAMIENTO DE PROYECTOS INTERNACIONALES E INICIATIVAS DE INVERSIÓN PRODUCTIVA, EN PAÍSES DE INTERÉS GEOESTRATÉGICO PARA VENEZUELA BAJO ESQUEMAS FINANCIEROS QUE GARANTICEN LA SUSTENTABILIDAD Y SOSTENIBILIDAD DEL PROGRAMA.', NULL, NULL, 3, 1),
(30, 'CONSOLIDAR EL PROGRAMA DE FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES DE INTERÉS ESTRATÉGICO DEFINIDOS POR EL GOBIERNO NACIONAL, A TRAVÉS DE LOS FONDOS BILATERALES PARA EL DESARROLLO ECONÓMICO Y SOCIAL DEL PAÍS.   ', NULL, NULL, 3, 1),
(31, 'APOYAR AL EJECUTIVO NACIONAL EN LA ORIENTACIÓN DE POLÍTICAS DE FINANCIAMIENTO EN MATERIA DE DESARROLLO Y EN EL SEGUIMIENTO A LA EJECUCIÓN DE LOS RECURSOS ASIGNADOS A PROGRAMAS Y PROYECTOS. ', NULL, NULL, 3, 1),
(32, 'IMPULSAR EL CAMBIO ORGANIZACIONAL QUE PERMITA ATENDER LAS EXIGENCIAS Y DINÁMICA  DEL NUEVO MODELO DE GESTIÓN DEL BANCO, ASÍ COMO LA  COMPLEJIDAD DEL ENTORNO.', NULL, NULL, 3, 2),
(33, 'CONSOLIDAR LA PLATAFORMA TECNOLÓGICA, ADECUADA A LOS REQUERIMIENTOS DEL BANCO, QUE PERMITA MEJORAR LA EFICIENCIA DE LA GESTIÓN Y POR ENDE, SU ÓPTIMO FUNCIONAMIENTO.', NULL, NULL, 3, 2),
(34, 'FORTALECER LAS CONDICIONES LABORALES DEL TALENTO HUMANO QUE PERMITAN SU DESARROLLO PERSONAL Y PROFESIONAL, CON BASE EN EL NUEVO MODELO DE GESTIÓN DEL BANCO. \r\n', NULL, NULL, 3, 3),
(35, 'CONSOLIDAR LA PLATAFORMA TECNOLÓGICA, ADECUADA A LOS REQUERIMIENTOS DEL BANCO, QUE PERMITA MEJORAR LA EFICIENCIA DE LA GESTIÓN Y POR ENDE, SU ÓPTIMO FUNCIONAMIENTO.', NULL, NULL, 3, 3),
(36, 'GARANTIZAR LA SOSTENIBILIDAD FINANCIERA  Y EL FORTALECIMIENTO PATRIMONIAL DE BANDES, BAJO EL ENFOQUE DE BANCA DE DESARROLLO Y CRITERIOS DE PRODUCTIVIDAD, A FIN DE  DE MANTENER LA OPERATIVIDAD Y PERMANENCIA DE LOS  PROGRAMAS DE COOPERACIÓN Y FINANCIAMIENTO. ', NULL, NULL, 3, 4),
(37, 'INCREMENTAR EL FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES PRODUCTIVOS NACIONALES, PRIORIZANDO LA INVERSIÓN EN ZONAS DE BAJO CRECIMIENTO Y CON POTENCIALIDADES ECONÓMICAS PARA EL  DESARROLLO  DEL PAÍS.', NULL, NULL, 4, 1),
(38, 'PROMOVER EL FINANCIAMIENTO  DE PROYECTOS SOCIALES Y DE INVERSIÓN SOCIOPRODUCTIVA PARA  EL DESARROLLO INTEGRAL DE LAS COMUNIDADES.', NULL, NULL, 4, 1),
(39, 'POSICIONAR LOS PRODUCTOS Y SERVICIOS DE ADMINISTRACIÓN DE RECURSOS A TERCEROS Y OTROS ENCARGOS DE CONFIANZA, PARA CONSOLIDAR A BANDES COMO AGENTE FIDUCIARIO PÚBLICO.', NULL, NULL, 4, 1),
(40, ' IMPULSAR EL FINANCIAMIENTO DE PROYECTOS INTERNACIONALES E INICIATIVAS DE INVERSIÓN PRODUCTIVA, EN PAÍSES DE INTERÉS GEOESTRATÉGICO PARA VENEZUELA BAJO ESQUEMAS FINANCIEROS QUE GARANTICEN LA SUSTENTABILIDAD Y SOSTENIBILIDAD DEL PROGRAMA.', NULL, NULL, 4, 1),
(41, 'CONSOLIDAR EL PROGRAMA DE FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES DE INTERÉS ESTRATÉGICO DEFINIDOS POR EL GOBIERNO NACIONAL, A TRAVÉS DE LOS FONDOS BILATERALES PARA EL DESARROLLO ECONÓMICO Y SOCIAL DEL PAÍS.   ', NULL, NULL, 4, 1),
(42, 'APOYAR AL EJECUTIVO NACIONAL EN LA ORIENTACIÓN DE POLÍTICAS DE FINANCIAMIENTO EN MATERIA DE DESARROLLO Y EN EL SEGUIMIENTO A LA EJECUCIÓN DE LOS RECURSOS ASIGNADOS A PROGRAMAS Y PROYECTOS. ', NULL, NULL, 4, 1),
(43, 'IMPULSAR EL CAMBIO ORGANIZACIONAL QUE PERMITA ATENDER LAS EXIGENCIAS Y DINÁMICA  DEL NUEVO MODELO DE GESTIÓN DEL BANCO, ASÍ COMO LA  COMPLEJIDAD DEL ENTORNO.', NULL, NULL, 4, 2),
(44, 'CONSOLIDAR LA PLATAFORMA TECNOLÓGICA, ADECUADA A LOS REQUERIMIENTOS DEL BANCO, QUE PERMITA MEJORAR LA EFICIENCIA DE LA GESTIÓN Y POR ENDE, SU ÓPTIMO FUNCIONAMIENTO.', NULL, NULL, 4, 2),
(45, 'FORTALECER LAS CONDICIONES LABORALES DEL TALENTO HUMANO QUE PERMITAN SU DESARROLLO PERSONAL Y PROFESIONAL, CON BASE EN EL NUEVO MODELO DE GESTIÓN DEL BANCO. \r\n\r\n', NULL, NULL, 4, 3),
(46, ' MEJORAR EN TÉRMINOS DE CALIDAD Y OPORTUNIDAD, LA GESTIÓN DE LOS SERVICIOS DE APOYO Y MANTENIMIENTO DEL BANCO, PARA EL BUEN DESEMPEÑO DE LAS FUNCIONES Y POR ENDE, EL CUMPLIMIENTO DE LA MISIÓN INSTITUCIONAL. ', NULL, NULL, 4, 3),
(47, 'GARANTIZAR LA SOSTENIBILIDAD FINANCIERA  Y EL FORTALECIMIENTO PATRIMONIAL DE BANDES, BAJO EL ENFOQUE DE BANCA DE DESARROLLO Y CRITERIOS DE PRODUCTIVIDAD, A FIN DE  DE MANTENER LA OPERATIVIDAD Y PERMANENCIA DE LOS  PROGRAMAS DE COOPERACIÓN Y FINANCIAMIENTO. ', NULL, NULL, 4, 4),
(48, 'INCREMENTAR EL FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES PRODUCTIVOS NACIONALES, PRIORIZANDO LA INVERSIÓN EN ZONAS DE BAJO CRECIMIENTO Y CON POTENCIALIDADES ECONÓMICAS PARA EL  DESARROLLO  DEL PAÍS.', NULL, NULL, 5, 1),
(49, ' PROMOVER EL FINANCIAMIENTO  DE PROYECTOS SOCIALES Y DE INVERSIÓN SOCIOPRODUCTIVA PARA  EL DESARROLLO INTEGRAL DE LAS COMUNIDADES.', NULL, NULL, 5, 1),
(50, ' POSICIONAR LOS PRODUCTOS Y SERVICIOS DE ADMINISTRACIÓN DE RECURSOS A TERCEROS Y OTROS ENCARGOS DE CONFIANZA, PARA CONSOLIDAR A BANDES COMO AGENTE FIDUCIARIO PÚBLICO.', NULL, NULL, 5, 1),
(51, 'IMPULSAR EL FINANCIAMIENTO DE PROYECTOS INTERNACIONALES E INICIATIVAS DE INVERSIÓN PRODUCTIVA, EN PAÍSES DE INTERÉS GEOESTRATÉGICO PARA VENEZUELA BAJO ESQUEMAS FINANCIEROS QUE GARANTICEN LA SUSTENTABILIDAD Y SOSTENIBILIDAD DEL PROGRAMA.', NULL, NULL, 5, 1),
(52, ' CONSOLIDAR EL PROGRAMA DE FINANCIAMIENTO DE PROYECTOS DE ALTO IMPACTO EN LOS SECTORES DE INTERÉS ESTRATÉGICO DEFINIDOS POR EL GOBIERNO NACIONAL, A TRAVÉS DE LOS FONDOS BILATERALES PARA EL DESARROLLO ECONÓMICO Y SOCIAL DEL PAÍS.   ', NULL, NULL, 5, 1),
(53, 'APOYAR AL EJECUTIVO NACIONAL EN LA ORIENTACIÓN DE POLÍTICAS DE FINANCIAMIENTO EN MATERIA DE DESARROLLO Y EN EL SEGUIMIENTO A LA EJECUCIÓN DE LOS RECURSOS ASIGNADOS A PROGRAMAS Y PROYECTOS. ', NULL, NULL, 5, 1),
(54, 'IMPULSAR EL CAMBIO ORGANIZACIONAL QUE PERMITA ATENDER LAS EXIGENCIAS Y DINÁMICA  DEL NUEVO MODELO DE GESTIÓN DEL BANCO, ASÍ COMO LA  COMPLEJIDAD DEL ENTORNO.', NULL, NULL, 5, 2),
(55, 'CONSOLIDAR LA PLATAFORMA TECNOLÓGICA, ADECUADA A LOS REQUERIMIENTOS DEL BANCO, QUE PERMITA MEJORAR LA EFICIENCIA DE LA GESTIÓN Y POR ENDE, SU ÓPTIMO FUNCIONAMIENTO.', NULL, NULL, 5, 2),
(56, ' FORTALECER LAS CONDICIONES LABORALES DEL TALENTO HUMANO QUE PERMITAN SU DESARROLLO PERSONAL Y PROFESIONAL, CON BASE EN EL NUEVO MODELO DE GESTIÓN DEL BANCO. \r\n', NULL, NULL, 5, 3),
(57, 'MEJORAR EN TÉRMINOS DE CALIDAD Y OPORTUNIDAD, LA GESTIÓN DE LOS SERVICIOS DE APOYO Y MANTENIMIENTO DEL BANCO, PARA EL BUEN DESEMPEÑO DE LAS FUNCIONES Y POR ENDE, EL CUMPLIMIENTO DE LA MISIÓN INSTITUCIONAL. ', NULL, NULL, 5, 3),
(58, 'GARANTIZAR LA SOSTENIBILIDAD FINANCIERA  Y EL FORTALECIMIENTO PATRIMONIAL DE BANDES, BAJO EL ENFOQUE DE BANCA DE DESARROLLO Y CRITERIOS DE PRODUCTIVIDAD, A FIN DE  DE MANTENER LA OPERATIVIDAD Y PERMANENCIA DE LOS  PROGRAMAS DE COOPERACIÓN Y FINANCIAMIENTO. ', NULL, NULL, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('theizerr@hotmail.com', '$2y$10$fYPqAGHNjHtUWNO/sdjV/ufEgNFsT3/Z45uWZJZ6Qon49tdzv4.yK', '2018-06-26 21:32:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_users', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(2, 'add_users', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(3, 'edit_users', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(4, 'delete_users', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(5, 'assign_permissions', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(6, 'view_logins', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `dcreado` timestamp NOT NULL,
  `dactualizado` timestamp NOT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `nombre`, `dcreado`, `dactualizado`) VALUES
(1, 'Asistencia crediticia interna', '0000-00-00 00:00:00', '2018-07-04 15:11:45'),
(2, 'Asistencia y cooperación internacional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Administración de fideicomisos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Administración de fondos especiales', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Finanzas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Presidencia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Vicepresidencia Ejecutiva', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Gerencia ejecutiva de planificación', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Consultoria juridica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Gestión del talento humano', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Tecnología de la información ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Administración', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Información y relaciones públicas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Resguardo institucional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Auditoria interna', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Preinversión y asistencia técnica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Directorio ejecutivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(2, 'user', 'web', '2018-06-18 17:17:56', '2018-06-18 17:17:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supuestoinic`
--

DROP TABLE IF EXISTS `supuestoinic`;
CREATE TABLE IF NOT EXISTS `supuestoinic` (
  `id_supuestos` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto` int(11) NOT NULL,
  `iniciativa` longtext NOT NULL,
  `supuesto` varchar(500) NOT NULL,
  `gerencia` int(11) NOT NULL,
  `coordinacion` int(11) NOT NULL,
  `objetivo` int(11) NOT NULL,
  `dcreado` timestamp NOT NULL,
  `dactualizado` timestamp NOT NULL,
  PRIMARY KEY (`id_supuestos`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supuestoinic`
--

INSERT INTO `supuestoinic` (`id_supuestos`, `proyecto`, `iniciativa`, `supuesto`, `gerencia`, `coordinacion`, `objetivo`, `dcreado`, `dactualizado`) VALUES
(4, 1, '1', 'Supuestos 12', 2, 4, 1, '2018-07-12 19:04:35', '2018-07-12 19:04:42'),
(3, 1, '1', 'Nº de solicitudes de financiamientos reembolsable, no reembolsable o mixto evaluadas / Nº de solicitudes financiamientos reembolsable, no reembolsable o mixto recibida', 2, 4, 1, '2018-07-11 20:46:30', '2018-07-11 20:46:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supuestos`
--

DROP TABLE IF EXISTS `supuestos`;
CREATE TABLE IF NOT EXISTS `supuestos` (
  `id_supuestos` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto` int(11) NOT NULL,
  `gerencia` int(11) NOT NULL,
  `coordinacion` int(11) NOT NULL,
  `objetivo` longtext NOT NULL,
  `supuestos` longtext NOT NULL,
  `dcreado` date DEFAULT NULL,
  `dactualizado` date DEFAULT NULL,
  PRIMARY KEY (`id_supuestos`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supuestos`
--

INSERT INTO `supuestos` (`id_supuestos`, `proyecto`, `gerencia`, `coordinacion`, `objetivo`, `supuestos`, `dcreado`, `dactualizado`) VALUES
(1, 1, 2, 4, '1', 'Nº de solicitudes de financiamientos reembolsable, no reembolsable o mixto evaluadas / Nº de solicitudes financiamientos reembolsable, no reembolsable o mixto recibidas.', '2018-07-11', '2018-07-11'),
(2, 1, 2, 4, '1', 'Supuestos 12', '2018-07-12', '2018-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id_ubicacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ubicacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `status`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'usuario', 'administrador', 'admin@mail.com', '$2y$10$B9THXS0MPcknz0RRt.3v7ON./XsPklly386EH3zjyF4Z5qdHZj9RS', 1, 'ULFZPnmd3bvTcYZOBxEUjmiO3CcXv91jcuGvueFTVwvm2XzfeIP8njRlZLG9', NULL, '2018-06-18 17:17:56', '2018-06-18 17:17:56'),
(2, 'Theizer Gabriel', 'Gonzalez Lugo', 'theizerr@hotmail.com', '$2y$10$Gb8U6g4Ymh4ttRQPbN66Pu2vxJmqpKWqN.B5TzW4/VQeiylXrOEXW', 1, '0xYQwMtWFTIid4Y6HGwtGwszF3kqZ3ke7EAw8eQgaDHSS1GIyaKrbk55dIZa', NULL, '2018-06-18 17:19:25', '2018-06-18 17:19:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_ubicacion`
--

DROP TABLE IF EXISTS `usuario_ubicacion`;
CREATE TABLE IF NOT EXISTS `usuario_ubicacion` (
  `id_usuario_ubicacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario_ubicacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
