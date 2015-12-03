-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2015 a las 11:00:57
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hl`
--
CREATE DATABASE IF NOT EXISTS `hl` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hl`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE IF NOT EXISTS `administrativos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', '1', 1448876002),
('hola', '1', 1449024997),
('hola', '2', 1449025138);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
(' costopredeterminadosHasAdministrativos-select', 2, '  Permite seleccionar un registro costopredeterminadosHasAdministrativos', NULL, NULL, 1449040253, 1449040253),
(' ramaHasGeneral-establish', 2, 'Permite establecer un registro ramaHasGeneral', NULL, NULL, 1449040648, 1449040648),
('Admin', 1, 'El rol de administrador', NULL, NULL, 1446447634, 1446447634),
('administrativos-create', 2, 'Permite crear un registro administrativos', NULL, NULL, 1446356483, 1446356483),
('administrativos-delete', 2, 'Permite borrar un registro administrativos', NULL, NULL, 1446356483, 1446356483),
('administrativos-index', 2, 'Permite visualizar los registros administrativos', NULL, NULL, 1446356483, 1446356483),
('administrativos-update', 2, 'Permite actualizar un registro administrativos', NULL, NULL, 1446356483, 1446356483),
('administrativos-view', 2, 'Permite visualizar un registro administrativos', NULL, NULL, 1446356483, 1446356483),
('caracterizacion-create', 2, 'Permite crear un registro caracterizacion', NULL, NULL, 1446356483, 1446356483),
('caracterizacion-delete', 2, 'Permite borrar un registro caracterizacion', NULL, NULL, 1446356483, 1446356483),
('caracterizacion-index', 2, 'Permite visualizar los registros caracterizacion', NULL, NULL, 1446356483, 1446356483),
('caracterizacion-update', 2, 'Permite actualizar un registro caracterizacion', NULL, NULL, 1446356483, 1446356483),
('caracterizacion-view', 2, 'Permite visualizar un registro caracterizacion', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasDepartamento-create', 2, 'Permite crear un registro caracterizacionHasDepartamento', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasDepartamento-delete', 2, 'Permite borrar un registro caracterizacionHasDepartamento', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasDepartamento-index', 2, 'Permite visualizar los registros caracterizacionHasDepartamento', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasDepartamento-update', 2, 'Permite actualizar un registro caracterizacionHasDepartamento', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasDepartamento-view', 2, 'Permite visualizar un registro caracterizacionHasDepartamento', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasEquipos-create', 2, 'Permite crear un registro caracterizacionHasEquipos', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasEquipos-delete', 2, 'Permite borrar un registro caracterizacionHasEquipos', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasEquipos-index', 2, 'Permite visualizar los registros caracterizacionHasEquipos', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasEquipos-update', 2, 'Permite actualizar un registro caracterizacionHasEquipos', NULL, NULL, 1446356483, 1446356483),
('caracterizacionHasEquipos-view', 2, 'Permite visualizar un registro caracterizacionHasEquipos', NULL, NULL, 1446356483, 1446356483),
('carea-create', 2, 'Permite crear un registro carea', NULL, NULL, 1446356483, 1446356483),
('carea-delete', 2, 'Permite borrar un registro carea', NULL, NULL, 1446356483, 1446356483),
('carea-index', 2, 'Permite visualizar los registros carea', NULL, NULL, 1446356483, 1446356483),
('carea-update', 2, 'Permite actualizar un registro carea', NULL, NULL, 1446356483, 1446356483),
('carea-view', 2, 'Permite visualizar un registro carea', NULL, NULL, 1446356483, 1446356483),
('celular-create', 2, 'Permite crear un registro celular', NULL, NULL, 1446356483, 1446356483),
('celular-delete', 2, 'Permite borrar un registro celular', NULL, NULL, 1446356483, 1446356483),
('celular-index', 2, 'Permite visualizar los registros celular', NULL, NULL, 1446356483, 1446356483),
('celular-update', 2, 'Permite actualizar un registro celular', NULL, NULL, 1446356483, 1446356483),
('celular-view', 2, 'Permite visualizar un registro celular', NULL, NULL, 1446356483, 1446356483),
('clientes-create', 2, 'Permite crear un registro clientes', NULL, NULL, 1446356483, 1446356483),
('clientes-delete', 2, 'Permite borrar un registro clientes', NULL, NULL, 1446356483, 1446356483),
('clientes-establish', 2, 'Permite establecer un registro clientes', NULL, NULL, 1449040733, 1449040733),
('clientes-index', 2, 'Permite visualizar los registros clientes', NULL, NULL, 1446356483, 1446356483),
('clientes-select', 2, ' Permite seleccionar un registro clientes', NULL, NULL, 1449040720, 1449040720),
('clientes-update', 2, 'Permite actualizar un registro clientes', NULL, NULL, 1446356483, 1446356483),
('clientes-view', 2, 'Permite visualizar un registro clientes', NULL, NULL, 1446356483, 1446356483),
('constantes-create', 2, 'Permite crear un registro constantes', NULL, NULL, 1446356483, 1446356483),
('constantes-delete', 2, 'Permite borrar un registro constantes', NULL, NULL, 1446356483, 1446356483),
('constantes-index', 2, 'Permite visualizar los registros constantes', NULL, NULL, 1446356483, 1446356483),
('constantes-update', 2, 'Permite actualizar un registro constantes', NULL, NULL, 1446356483, 1446356483),
('constantes-view', 2, 'Permite visualizar un registro constantes', NULL, NULL, 1446356483, 1446356483),
('costopredeterminados-create', 2, 'Permite crear un registro costopredeterminados', NULL, NULL, 1446356483, 1446356483),
('costopredeterminados-delete', 2, 'Permite borrar un registro costopredeterminados', NULL, NULL, 1446356483, 1446356483),
('costopredeterminados-index', 2, 'Permite visualizar los registros costopredeterminados', NULL, NULL, 1446356483, 1446356483),
('costopredeterminados-update', 2, 'Permite actualizar un registro costopredeterminados', NULL, NULL, 1446356483, 1446356483),
('costopredeterminados-view', 2, 'Permite visualizar un registro costopredeterminados', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasAdministrativos-create', 2, 'Permite crear un registro costopredeterminadosHasAdministrativos', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasAdministrativos-delete', 2, 'Permite borrar un registro costopredeterminadosHasAdministrativos', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasAdministrativos-index', 2, 'Permite visualizar los registros costopredeterminadosHasAdministrativos', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasAdministrativos-update', 2, 'Permite actualizar un registro costopredeterminadosHasAdministrativos', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasAdministrativos-view', 2, 'Permite visualizar un registro costopredeterminadosHasAdministrativos', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasParametros-create', 2, 'Permite crear un registro costopredeterminadosHasParametros', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasParametros-delete', 2, 'Permite borrar un registro costopredeterminadosHasParametros', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasParametros-establish', 2, 'Permite establecer un costopredeterminadosHasParametros', NULL, NULL, 1449040201, 1449040201),
('costopredeterminadosHasParametros-index', 2, 'Permite visualizar los registros costopredeterminadosHasParametros', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasParametros-select', 2, 'Permite seleccionar un costopredeterminadosHasParametros', NULL, NULL, 1449040171, 1449040171),
('costopredeterminadosHasParametros-update', 2, 'Permite actualizar un registro costopredeterminadosHasParametros', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasParametros-view', 2, 'Permite visualizar un registro costopredeterminadosHasParametros', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasPrestaciones-create', 2, 'Permite crear un registro costopredeterminadosHasPrestaciones', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasPrestaciones-delete', 2, 'Permite borrar un registro costopredeterminadosHasPrestaciones', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasPrestaciones-establish', 2, 'Permite establecer  costopredeterminadosHasPrestaciones', NULL, NULL, 1449040147, 1449040147),
('costopredeterminadosHasPrestaciones-index', 2, 'Permite visualizar los registros costopredeterminadosHasPrestaciones', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasPrestaciones-select', 2, 'Permite seleccionar un costopredeterminadosHasPrestaciones', NULL, NULL, 1449040131, 1449040131),
('costopredeterminadosHasPrestaciones-update', 2, 'Permite actualizar un registro costopredeterminadosHasPrestaciones', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasPrestaciones-view', 2, 'Permite visualizar un registro costopredeterminadosHasPrestaciones', NULL, NULL, 1446356483, 1446356483),
('costos-create', 2, 'Permite crear un registro costos', NULL, NULL, 1446356483, 1446356483),
('costos-delete', 2, 'Permite borrar un registro costos', NULL, NULL, 1446356483, 1446356483),
('costos-establish', 2, 'Permite establecer un registro costos', NULL, NULL, 1449049874, 1449049874),
('costos-index', 2, 'Permite visualizar los registros costos', NULL, NULL, 1446356483, 1446356483),
('costos-select', 2, 'Permite seleccionar un registro costos', NULL, NULL, 1449049893, 1449049893),
('costos-update', 2, 'Permite actualizar un registro costos', NULL, NULL, 1446356483, 1446356483),
('costos-view', 2, 'Permite visualizar un registro costos', NULL, NULL, 1446356483, 1446356483),
('costospredeterminadosHasAdministrativo-establish', 2, 'Permite establecer un costopredeterminadosHasAdministrativo', NULL, NULL, 1449041713, 1449041713),
('decreto-create', 2, 'Permite crear un registro decreto', NULL, NULL, 1446356483, 1446356483),
('decreto-delete', 2, 'Permite borrar un registro decreto', NULL, NULL, 1446356483, 1446356483),
('decreto-index', 2, 'Permite visualizar los registros decreto', NULL, NULL, 1446356483, 1446356483),
('decreto-update', 2, 'Permite actualizar un registro decreto', NULL, NULL, 1446356483, 1446356483),
('decreto-view', 2, 'Permite visualizar un registro decreto', NULL, NULL, 1446356483, 1446356483),
('decretoHasTipo-create', 2, 'Permite crear un registro decretoHasTipo', NULL, NULL, 1446356483, 1446356483),
('decretoHasTipo-delete', 2, 'Permite borrar un registro decretoHasTipo', NULL, NULL, 1446356483, 1446356483),
('decretoHasTipo-index', 2, 'Permite visualizar los registros decretoHasTipo', NULL, NULL, 1446356483, 1446356483),
('decretoHasTipo-update', 2, 'Permite actualizar un registro decretoHasTipo', NULL, NULL, 1446356483, 1446356483),
('decretoHasTipo-view', 2, 'Permite visualizar un registro decretoHasTipo', NULL, NULL, 1446356483, 1446356483),
('departamento-create', 2, 'Permite crear un registro departamento', NULL, NULL, 1446356483, 1446356483),
('departamento-delete', 2, 'Permite borrar un registro departamento', NULL, NULL, 1446356483, 1446356483),
('departamento-index', 2, 'Permite visualizar los registros departamento', NULL, NULL, 1446356483, 1446356483),
('departamento-update', 2, 'Permite actualizar un registro departamento', NULL, NULL, 1446356483, 1446356483),
('departamento-view', 2, 'Permite visualizar un registro departamento', NULL, NULL, 1446356483, 1446356483),
('departamentoHasDecreto-create', 2, 'Permite crear un registro departamentoHasDecreto', NULL, NULL, 1446356483, 1446356483),
('departamentoHasDecreto-delete', 2, 'Permite borrar un registro departamentoHasDecreto', NULL, NULL, 1446356483, 1446356483),
('departamentoHasDecreto-index', 2, 'Permite visualizar los registros departamentoHasDecreto', NULL, NULL, 1446356483, 1446356483),
('departamentoHasDecreto-update', 2, 'Permite actualizar un registro departamentoHasDecreto', NULL, NULL, 1446356483, 1446356483),
('departamentoHasDecreto-view', 2, 'Permite visualizar un registro departamentoHasDecreto', NULL, NULL, 1446356483, 1446356483),
('dialaborables-create', 2, 'Permite crear un registro dialaborables', NULL, NULL, 1446356483, 1446356483),
('dialaborables-delete', 2, 'Permite borrar un registro dialaborables', NULL, NULL, 1446356483, 1446356483),
('dialaborables-index', 2, 'Permite visualizar los registros dialaborables', NULL, NULL, 1446356483, 1446356483),
('dialaborables-update', 2, 'Permite actualizar un registro dialaborables', NULL, NULL, 1446356483, 1446356483),
('dialaborables-view', 2, 'Permite visualizar un registro dialaborables', NULL, NULL, 1446356483, 1446356483),
('equipos-create', 2, 'Permite crear un registro equipos', NULL, NULL, 1446356483, 1446356483),
('equipos-delete', 2, 'Permite borrar un registro equipos', NULL, NULL, 1446356483, 1446356483),
('equipos-index', 2, 'Permite visualizar los registros equipos', NULL, NULL, 1446356483, 1446356483),
('equipos-update', 2, 'Permite actualizar un registro equipos', NULL, NULL, 1446356483, 1446356483),
('equipos-view', 2, 'Permite visualizar un registro equipos', NULL, NULL, 1446356483, 1446356483),
('equiposHasGeneral-create', 2, 'Permite crear un registro equiposHasGeneral', NULL, NULL, 1446356483, 1446356483),
('equiposHasGeneral-delete', 2, 'Permite borrar un registro equiposHasGeneral', NULL, NULL, 1446356483, 1446356483),
('equiposHasGeneral-establish', 2, 'Permite establecer un registro equiposHasGeneral', NULL, NULL, 1449040523, 1449040523),
('equiposHasGeneral-index', 2, 'Permite visualizar los registros equiposHasGeneral', NULL, NULL, 1446356483, 1446356483),
('equiposHasGeneral-select', 2, 'Permite seleccionar un registro equiposHasGeneral', NULL, NULL, 1449040507, 1449040507),
('equiposHasGeneral-update', 2, 'Permite actualizar un registro equiposHasGeneral', NULL, NULL, 1446356483, 1446356483),
('equiposHasGeneral-view', 2, 'Permite visualizar un registro equiposHasGeneral', NULL, NULL, 1446356483, 1446356483),
('general-ajaxview', 2, 'Permite actualizar un registro ajax general', NULL, NULL, 1449049931, 1449049931),
('general-create', 2, 'Permite crear un registro general', NULL, NULL, 1446356483, 1446356483),
('general-delete', 2, 'Permite borrar un registro general', NULL, NULL, 1446356483, 1446356483),
('general-establish', 2, 'Permite establecer un registro general', NULL, NULL, 1449040705, 1449040705),
('general-index', 2, 'Permite visualizar los registros general', NULL, NULL, 1446356483, 1446356483),
('general-select', 2, 'Permite seleccionar un registro general', NULL, NULL, 1449040691, 1449040691),
('general-update', 2, 'Permite actualizar un registro general', NULL, NULL, 1446356483, 1446356483),
('general-view', 2, 'Permite visualizar un registro general', NULL, NULL, 1446356483, 1446356483),
('generalHasSubtipo-create', 2, 'Permite crear un registro generalHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('generalHasSubtipo-delete', 2, 'Permite borrar un registro generalHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('generalHasSubtipo-establish', 2, 'Permite establecer un registro generalHasSubtipo', NULL, NULL, 1449040678, 1449040678),
('generalHasSubtipo-index', 2, 'Permite visualizar los registros generalHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('generalHasSubtipo-select', 2, 'Permite seleccionar un registro generalHasSubtipo', NULL, NULL, 1449042141, 1449042141),
('generalHasSubtipo-update', 2, 'Permite actualizar un registro generalHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('generalHasSubtipo-view', 2, 'Permite visualizar un registro generalHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('generalHasTipo-create', 2, 'Permite crear un registro generalHasTipo', NULL, NULL, 1446356483, 1446356483),
('generalHasTipo-delete', 2, 'Permite borrar un registro generalHasTipo', NULL, NULL, 1446356483, 1446356483),
('generalHasTipo-index', 2, 'Permite visualizar los registros generalHasTipo', NULL, NULL, 1446356483, 1446356483),
('generalHasTipo-select', 2, ' Permite seleccionar un registro generalHasTipo', NULL, NULL, 1449040661, 1449040661),
('generalHasTipo-update', 2, 'Permite actualizar un registro generalHasTipo', NULL, NULL, 1446356483, 1446356483),
('generalHasTipo-view', 2, 'Permite visualizar un registro generalHasTipo', NULL, NULL, 1446356483, 1446356483),
('generalHasTipos-establish', 2, 'Permite establecer un registro generalHasTipo', NULL, NULL, 1449041742, 1449041742),
('hola', 1, 'esto es prueba', NULL, NULL, 1449024986, 1449024986),
('limites-create', 2, 'Permite crear un registro limites', NULL, NULL, 1446356483, 1446356483),
('limites-delete', 2, 'Permite borrar un registro limites', NULL, NULL, 1446356483, 1446356483),
('limites-index', 2, 'Permite visualizar los registros limites', NULL, NULL, 1446356483, 1446356483),
('limites-update', 2, 'Permite actualizar un registro limites', NULL, NULL, 1446356483, 1446356483),
('limites-view', 2, 'Permite visualizar un registro limites', NULL, NULL, 1446356483, 1446356483),
('moneda-create', 2, 'Permite crear un registro moneda', NULL, NULL, 1446356483, 1446356483),
('moneda-delete', 2, 'Permite borrar un registro moneda', NULL, NULL, 1446356483, 1446356483),
('moneda-index', 2, 'Permite visualizar los registros moneda', NULL, NULL, 1446356483, 1446356483),
('moneda-update', 2, 'Permite actualizar un registro moneda', NULL, NULL, 1446356483, 1446356483),
('moneda-view', 2, 'Permite visualizar un registro moneda', NULL, NULL, 1446356483, 1446356483),
('muestras-create', 2, 'Permite crear un registro muestras', NULL, NULL, 1446356483, 1446356483),
('muestras-delete', 2, 'Permite borrar un registro muestras', NULL, NULL, 1446356483, 1446356483),
('muestras-establish', 2, 'Permite establecer un registro muestras', NULL, NULL, 1449040560, 1449040560),
('muestras-index', 2, 'Permite visualizar los registros muestras', NULL, NULL, 1446356483, 1446356483),
('muestras-select', 2, ' Permite seleccionar un registro muestras', NULL, NULL, 1449040544, 1449040544),
('muestras-update', 2, 'Permite actualizar un registro muestras', NULL, NULL, 1446356483, 1446356483),
('muestras-view', 2, 'Permite visualizar un registro muestras', NULL, NULL, 1446356483, 1446356483),
('ordencompra-create', 2, 'Permite crear un registro ordencompra', NULL, NULL, 1446356483, 1446356483),
('ordencompra-delete', 2, 'Permite borrar un registro ordencompra', NULL, NULL, 1446356483, 1446356483),
('ordencompra-index', 2, 'Permite visualizar los registros ordencompra', NULL, NULL, 1446356483, 1446356483),
('ordencompra-update', 2, 'Permite actualizar un registro ordencompra', NULL, NULL, 1446356483, 1446356483),
('ordencompra-view', 2, 'Permite visualizar un registro ordencompra', NULL, NULL, 1446356483, 1446356483),
('parametros-create', 2, 'Permite crear un registro parametros', NULL, NULL, 1446356483, 1446356483),
('parametros-delete', 2, 'Permite borrar un registro parametros', NULL, NULL, 1446356483, 1446356483),
('parametros-establish', 2, 'Permite establecer un registro parametros', NULL, NULL, 1449040589, 1449040589),
('parametros-index', 2, 'Permite visualizar los registros parametros', NULL, NULL, 1446356483, 1446356483),
('parametros-select', 2, 'Permite seleccionar un registro parametros', NULL, NULL, 1449040574, 1449040574),
('parametros-update', 2, 'Permite actualizar un registro parametros', NULL, NULL, 1446356483, 1446356483),
('parametros-view', 2, 'Permite visualizar un registro parametros', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestras-create', 2, 'Permite crear un registro parametrosHasMuestras', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestras-delete', 2, 'Permite borrar un registro parametrosHasMuestras', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestras-index', 2, 'Permite visualizar los registros parametrosHasMuestras', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestras-update', 2, 'Permite actualizar un registro parametrosHasMuestras', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestras-view', 2, 'Permite visualizar un registro parametrosHasMuestras', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestrasHasCostopredeterminados-create', 2, 'Permite crear un registro parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestrasHasCostopredeterminados-delete', 2, 'Permite borrar un registro parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestrasHasCostopredeterminados-establish', 2, 'Permite establecer un registro parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1449041105, 1449041105),
('parametrosHasMuestrasHasCostopredeterminados-index', 2, 'Permite visualizar los registros parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestrasHasCostopredeterminados-select', 2, 'Permite seleccionar un registro parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1449041081, 1449041081),
('parametrosHasMuestrasHasCostopredeterminados-update', 2, 'Permite actualizar un registro parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1446356483, 1446356483),
('parametrosHasMuestrasHasCostopredeterminados-view', 2, 'Permite visualizar un registro parametrosHasMuestrasHasCostopredeterminados', NULL, NULL, 1446356483, 1446356483),
('peticion-create', 2, 'Permite crear un registro peticion', NULL, NULL, 1446356483, 1446356483),
('peticion-delete', 2, 'Permite borrar un registro peticion', NULL, NULL, 1446356483, 1446356483),
('peticion-establish', 2, 'Permite establecer un registro peticion', NULL, NULL, 1449040057, 1449040057),
('peticion-generate', 2, 'Permite visualizar la creación de una peticion', NULL, NULL, 1448885881, 1448885881),
('peticion-index', 2, 'Permite visualizar los registros peticion', NULL, NULL, 1446356483, 1446356483),
('peticion-select', 2, 'Permite seleccionar un registro peticion', NULL, NULL, 1449040078, 1449040078),
('peticion-update', 2, 'Permite actualizar un registro peticion', NULL, NULL, 1446356483, 1446356483),
('peticion-view', 2, 'Permite visualizar un registro peticion', NULL, NULL, 1446356483, 1446356483),
('plantilla-create', 2, 'Permite crear un registro plantilla', NULL, NULL, 1446356483, 1446356483),
('plantilla-delete', 2, 'Permite borrar un registro plantilla', NULL, NULL, 1446356483, 1446356483),
('plantilla-index', 2, 'Permite visualizar los registros plantilla', NULL, NULL, 1446356483, 1446356483),
('plantilla-update', 2, 'Permite actualizar un registro plantilla', NULL, NULL, 1446356483, 1446356483),
('plantilla-view', 2, 'Permite visualizar un registro plantilla', NULL, NULL, 1446356483, 1446356483),
('prestaciones-create', 2, 'Permite crear un registro prestaciones', NULL, NULL, 1446356483, 1446356483),
('prestaciones-delete', 2, 'Permite borrar un registro prestaciones', NULL, NULL, 1446356483, 1446356483),
('prestaciones-index', 2, 'Permite visualizar los registros prestaciones', NULL, NULL, 1446356483, 1446356483),
('prestaciones-update', 2, 'Permite actualizar un registro prestaciones', NULL, NULL, 1446356483, 1446356483),
('prestaciones-view', 2, 'Permite visualizar un registro prestaciones', NULL, NULL, 1446356483, 1446356483),
('puesto-create', 2, 'Permite crear un registro puesto', NULL, NULL, 1446356483, 1446356483),
('puesto-delete', 2, 'Permite borrar un registro puesto', NULL, NULL, 1446356483, 1446356483),
('puesto-index', 2, 'Permite visualizar los registros puesto', NULL, NULL, 1446356483, 1446356483),
('puesto-update', 2, 'Permite actualizar un registro puesto', NULL, NULL, 1446356483, 1446356483),
('puesto-view', 2, 'Permite visualizar un registro puesto', NULL, NULL, 1446356483, 1446356483),
('rama-create', 2, 'Permite crear un registro rama', NULL, NULL, 1446356483, 1446356483),
('rama-delete', 2, 'Permite borrar un registro rama', NULL, NULL, 1446356483, 1446356483),
('rama-index', 2, 'Permite visualizar los registros rama', NULL, NULL, 1446356483, 1446356483),
('rama-update', 2, 'Permite actualizar un registro rama', NULL, NULL, 1446356483, 1446356483),
('rama-view', 2, 'Permite visualizar un registro rama', NULL, NULL, 1446356483, 1446356483),
('ramaHasCaracterizacion-create', 2, 'Permite crear un registro ramaHasCaracterizacion', NULL, NULL, 1446356483, 1446356483),
('ramaHasCaracterizacion-delete', 2, 'Permite borrar un registro ramaHasCaracterizacion', NULL, NULL, 1446356483, 1446356483),
('ramaHasCaracterizacion-index', 2, 'Permite visualizar los registros ramaHasCaracterizacion', NULL, NULL, 1446356483, 1446356483),
('ramaHasCaracterizacion-update', 2, 'Permite actualizar un registro ramaHasCaracterizacion', NULL, NULL, 1446356483, 1446356483),
('ramaHasCaracterizacion-view', 2, 'Permite visualizar un registro ramaHasCaracterizacion', NULL, NULL, 1446356483, 1446356483),
('ramaHasGeneral-create', 2, 'Permite crear un registro ramaHasGeneral', NULL, NULL, 1446356483, 1446356483),
('ramaHasGeneral-delete', 2, 'Permite borrar un registro ramaHasGeneral', NULL, NULL, 1446356483, 1446356483),
('ramaHasGeneral-index', 2, 'Permite visualizar los registros ramaHasGeneral', NULL, NULL, 1446356483, 1446356483),
('ramaHasGeneral-select', 2, ' Permite seleccionar un registro ramaHasGeneral', NULL, NULL, 1449040627, 1449040627),
('ramaHasGeneral-update', 2, 'Permite actualizar un registro ramaHasGeneral', NULL, NULL, 1446356483, 1446356483),
('ramaHasGeneral-view', 2, 'Permite visualizar un registro ramaHasGeneral', NULL, NULL, 1446356483, 1446356483),
('referencia-create', 2, 'Permite crear un registro referencia', NULL, NULL, 1446356483, 1446356483),
('referencia-delete', 2, 'Permite borrar un registro referencia', NULL, NULL, 1446356483, 1446356483),
('referencia-index', 2, 'Permite visualizar los registros referencia', NULL, NULL, 1446356483, 1446356483),
('referencia-update', 2, 'Permite actualizar un registro referencia', NULL, NULL, 1446356483, 1446356483),
('referencia-view', 2, 'Permite visualizar un registro referencia', NULL, NULL, 1446356483, 1446356483),
('reporte-create', 2, 'Permite crear un registro reporte', NULL, NULL, 1446356483, 1446356483),
('reporte-delete', 2, 'Permite borrar un registro reporte', NULL, NULL, 1446356483, 1446356483),
('reporte-index', 2, 'Permite visualizar los registros reporte', NULL, NULL, 1446356483, 1446356483),
('reporte-update', 2, 'Permite actualizar un registro reporte', NULL, NULL, 1446356483, 1446356483),
('reporte-view', 2, 'Permite visualizar un registro reporte', NULL, NULL, 1446356483, 1446356483),
('subtipo-create', 2, 'Permite crear un registro subtipo', NULL, NULL, 1446356483, 1446356483),
('subtipo-delete', 2, 'Permite borrar un registro subtipo', NULL, NULL, 1446356483, 1446356483),
('subtipo-index', 2, 'Permite visualizar los registros subtipo', NULL, NULL, 1446356483, 1446356483),
('subtipo-update', 2, 'Permite actualizar un registro subtipo', NULL, NULL, 1446356483, 1446356483),
('subtipo-view', 2, 'Permite visualizar un registro subtipo', NULL, NULL, 1446356483, 1446356483),
('subtiposHasGeneral-select', 2, 'Permite seleccionar un registro generalHasSubtipo', NULL, NULL, 1449041731, 1449041731),
('tipo-create', 2, 'Permite crear un registro tipo', NULL, NULL, 1446356483, 1446356483),
('tipo-delete', 2, 'Permite borrar un registro tipo', NULL, NULL, 1446356483, 1446356483),
('tipo-index', 2, 'Permite visualizar los registros tipo', NULL, NULL, 1446356483, 1446356483),
('tipo-update', 2, 'Permite actualizar un registro tipo', NULL, NULL, 1446356483, 1446356483),
('tipo-view', 2, 'Permite visualizar un registro tipo', NULL, NULL, 1446356483, 1446356483),
('tipoHasSubtipo-create', 2, 'Permite crear un registro tipoHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('tipoHasSubtipo-delete', 2, 'Permite borrar un registro tipoHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('tipoHasSubtipo-index', 2, 'Permite visualizar los registros tipoHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('tipoHasSubtipo-update', 2, 'Permite actualizar un registro tipoHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('tipoHasSubtipo-view', 2, 'Permite visualizar un registro tipoHasSubtipo', NULL, NULL, 1446356483, 1446356483),
('vendedor-create', 2, 'Permite crear un registro vendedor', NULL, NULL, 1446356483, 1446356483),
('vendedor-delete', 2, 'Permite borrar un registro vendedor', NULL, NULL, 1446356483, 1446356483),
('vendedor-index', 2, 'Permite visualizar los registros vendedor', NULL, NULL, 1446356483, 1446356483),
('vendedor-update', 2, 'Permite actualizar un registro vendedor', NULL, NULL, 1446356483, 1446356483),
('vendedor-view', 2, 'Permite visualizar un registro vendedor', NULL, NULL, 1446356483, 1446356483);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', ' costopredeterminadosHasAdministrativos-select'),
('Admin', ' ramaHasGeneral-establish'),
('Admin', 'administrativos-create'),
('Admin', 'administrativos-delete'),
('Admin', 'administrativos-index'),
('Admin', 'administrativos-update'),
('Admin', 'administrativos-view'),
('Admin', 'caracterizacion-create'),
('Admin', 'caracterizacion-delete'),
('Admin', 'caracterizacion-index'),
('Admin', 'caracterizacion-update'),
('Admin', 'caracterizacion-view'),
('Admin', 'caracterizacionHasDepartamento-create'),
('Admin', 'caracterizacionHasDepartamento-delete'),
('Admin', 'caracterizacionHasDepartamento-index'),
('Admin', 'caracterizacionHasDepartamento-update'),
('Admin', 'caracterizacionHasDepartamento-view'),
('Admin', 'caracterizacionHasEquipos-create'),
('Admin', 'caracterizacionHasEquipos-delete'),
('Admin', 'caracterizacionHasEquipos-index'),
('Admin', 'caracterizacionHasEquipos-update'),
('Admin', 'caracterizacionHasEquipos-view'),
('Admin', 'carea-create'),
('Admin', 'carea-delete'),
('Admin', 'carea-index'),
('Admin', 'carea-update'),
('Admin', 'carea-view'),
('Admin', 'celular-create'),
('Admin', 'celular-delete'),
('hola', 'celular-delete'),
('Admin', 'celular-index'),
('Admin', 'celular-update'),
('hola', 'celular-update'),
('Admin', 'celular-view'),
('hola', 'celular-view'),
('Admin', 'clientes-create'),
('Admin', 'clientes-delete'),
('Admin', 'clientes-establish'),
('Admin', 'clientes-index'),
('Admin', 'clientes-select'),
('Admin', 'clientes-update'),
('Admin', 'clientes-view'),
('Admin', 'constantes-create'),
('Admin', 'constantes-delete'),
('Admin', 'constantes-index'),
('Admin', 'constantes-update'),
('Admin', 'constantes-view'),
('Admin', 'costopredeterminados-create'),
('Admin', 'costopredeterminados-delete'),
('Admin', 'costopredeterminados-index'),
('Admin', 'costopredeterminados-update'),
('Admin', 'costopredeterminados-view'),
('Admin', 'costopredeterminadosHasAdministrativos-create'),
('Admin', 'costopredeterminadosHasAdministrativos-delete'),
('Admin', 'costopredeterminadosHasAdministrativos-index'),
('Admin', 'costopredeterminadosHasAdministrativos-update'),
('Admin', 'costopredeterminadosHasAdministrativos-view'),
('Admin', 'costopredeterminadosHasParametros-create'),
('Admin', 'costopredeterminadosHasParametros-delete'),
('Admin', 'costopredeterminadosHasParametros-establish'),
('Admin', 'costopredeterminadosHasParametros-index'),
('Admin', 'costopredeterminadosHasParametros-select'),
('Admin', 'costopredeterminadosHasParametros-update'),
('Admin', 'costopredeterminadosHasParametros-view'),
('Admin', 'costopredeterminadosHasPrestaciones-create'),
('Admin', 'costopredeterminadosHasPrestaciones-delete'),
('Admin', 'costopredeterminadosHasPrestaciones-establish'),
('Admin', 'costopredeterminadosHasPrestaciones-index'),
('Admin', 'costopredeterminadosHasPrestaciones-select'),
('Admin', 'costopredeterminadosHasPrestaciones-update'),
('Admin', 'costopredeterminadosHasPrestaciones-view'),
('Admin', 'costos-create'),
('Admin', 'costos-delete'),
('Admin', 'costos-establish'),
('Admin', 'costos-index'),
('Admin', 'costos-select'),
('Admin', 'costos-update'),
('Admin', 'costos-view'),
('Admin', 'costospredeterminadosHasAdministrativo-establish'),
('Admin', 'decreto-create'),
('Admin', 'decreto-delete'),
('Admin', 'decreto-index'),
('Admin', 'decreto-update'),
('Admin', 'decreto-view'),
('Admin', 'decretoHasTipo-create'),
('Admin', 'decretoHasTipo-delete'),
('Admin', 'decretoHasTipo-index'),
('Admin', 'decretoHasTipo-update'),
('Admin', 'decretoHasTipo-view'),
('Admin', 'departamento-create'),
('Admin', 'departamento-delete'),
('Admin', 'departamento-index'),
('Admin', 'departamento-update'),
('Admin', 'departamento-view'),
('Admin', 'departamentoHasDecreto-create'),
('Admin', 'departamentoHasDecreto-delete'),
('Admin', 'departamentoHasDecreto-index'),
('Admin', 'departamentoHasDecreto-update'),
('Admin', 'departamentoHasDecreto-view'),
('Admin', 'dialaborables-create'),
('Admin', 'dialaborables-delete'),
('Admin', 'dialaborables-index'),
('Admin', 'dialaborables-update'),
('Admin', 'dialaborables-view'),
('Admin', 'equipos-create'),
('Admin', 'equipos-delete'),
('Admin', 'equipos-index'),
('Admin', 'equipos-update'),
('Admin', 'equipos-view'),
('Admin', 'equiposHasGeneral-create'),
('Admin', 'equiposHasGeneral-delete'),
('Admin', 'equiposHasGeneral-establish'),
('Admin', 'equiposHasGeneral-index'),
('Admin', 'equiposHasGeneral-select'),
('Admin', 'equiposHasGeneral-update'),
('Admin', 'equiposHasGeneral-view'),
('Admin', 'general-ajaxview'),
('Admin', 'general-create'),
('Admin', 'general-delete'),
('Admin', 'general-establish'),
('Admin', 'general-index'),
('Admin', 'general-select'),
('Admin', 'general-update'),
('Admin', 'general-view'),
('Admin', 'generalHasSubtipo-create'),
('Admin', 'generalHasSubtipo-delete'),
('Admin', 'generalHasSubtipo-establish'),
('Admin', 'generalHasSubtipo-index'),
('Admin', 'generalHasSubtipo-select'),
('Admin', 'generalHasSubtipo-update'),
('Admin', 'generalHasSubtipo-view'),
('Admin', 'generalHasTipo-create'),
('Admin', 'generalHasTipo-delete'),
('Admin', 'generalHasTipo-index'),
('Admin', 'generalHasTipo-select'),
('Admin', 'generalHasTipo-update'),
('Admin', 'generalHasTipo-view'),
('Admin', 'generalHasTipos-establish'),
('Admin', 'limites-create'),
('Admin', 'limites-delete'),
('Admin', 'limites-index'),
('Admin', 'limites-update'),
('Admin', 'limites-view'),
('Admin', 'moneda-create'),
('Admin', 'moneda-delete'),
('Admin', 'moneda-index'),
('Admin', 'moneda-update'),
('Admin', 'moneda-view'),
('Admin', 'muestras-create'),
('Admin', 'muestras-delete'),
('Admin', 'muestras-establish'),
('Admin', 'muestras-index'),
('Admin', 'muestras-select'),
('Admin', 'muestras-update'),
('Admin', 'muestras-view'),
('Admin', 'ordencompra-create'),
('Admin', 'ordencompra-delete'),
('Admin', 'ordencompra-index'),
('Admin', 'ordencompra-update'),
('Admin', 'ordencompra-view'),
('Admin', 'parametros-create'),
('Admin', 'parametros-delete'),
('Admin', 'parametros-establish'),
('Admin', 'parametros-index'),
('Admin', 'parametros-select'),
('Admin', 'parametros-update'),
('Admin', 'parametros-view'),
('Admin', 'parametrosHasMuestras-create'),
('Admin', 'parametrosHasMuestras-delete'),
('Admin', 'parametrosHasMuestras-index'),
('Admin', 'parametrosHasMuestras-update'),
('Admin', 'parametrosHasMuestras-view'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-create'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-delete'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-establish'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-index'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-select'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-update'),
('Admin', 'parametrosHasMuestrasHasCostopredeterminados-view'),
('Admin', 'peticion-create'),
('Admin', 'peticion-delete'),
('Admin', 'peticion-establish'),
('Admin', 'peticion-generate'),
('Admin', 'peticion-index'),
('Admin', 'peticion-select'),
('Admin', 'peticion-update'),
('Admin', 'peticion-view'),
('Admin', 'plantilla-create'),
('Admin', 'plantilla-delete'),
('Admin', 'plantilla-index'),
('Admin', 'plantilla-update'),
('Admin', 'plantilla-view'),
('Admin', 'prestaciones-create'),
('Admin', 'prestaciones-delete'),
('Admin', 'prestaciones-index'),
('Admin', 'prestaciones-update'),
('Admin', 'prestaciones-view'),
('Admin', 'puesto-create'),
('Admin', 'puesto-delete'),
('Admin', 'puesto-index'),
('Admin', 'puesto-update'),
('Admin', 'puesto-view'),
('Admin', 'rama-create'),
('Admin', 'rama-delete'),
('Admin', 'rama-index'),
('Admin', 'rama-update'),
('Admin', 'rama-view'),
('Admin', 'ramaHasCaracterizacion-create'),
('Admin', 'ramaHasCaracterizacion-delete'),
('Admin', 'ramaHasCaracterizacion-index'),
('Admin', 'ramaHasCaracterizacion-update'),
('Admin', 'ramaHasCaracterizacion-view'),
('Admin', 'ramaHasGeneral-create'),
('Admin', 'ramaHasGeneral-delete'),
('Admin', 'ramaHasGeneral-index'),
('Admin', 'ramaHasGeneral-select'),
('Admin', 'ramaHasGeneral-update'),
('Admin', 'ramaHasGeneral-view'),
('Admin', 'referencia-create'),
('Admin', 'referencia-delete'),
('Admin', 'referencia-index'),
('Admin', 'referencia-update'),
('Admin', 'referencia-view'),
('Admin', 'reporte-create'),
('Admin', 'reporte-delete'),
('Admin', 'reporte-index'),
('Admin', 'reporte-update'),
('Admin', 'reporte-view'),
('Admin', 'subtipo-create'),
('Admin', 'subtipo-delete'),
('Admin', 'subtipo-index'),
('Admin', 'subtipo-update'),
('Admin', 'subtipo-view'),
('Admin', 'tipo-create'),
('Admin', 'tipo-delete'),
('Admin', 'tipo-index'),
('Admin', 'tipo-update'),
('Admin', 'tipo-view'),
('Admin', 'tipoHasSubtipo-create'),
('Admin', 'tipoHasSubtipo-delete'),
('Admin', 'tipoHasSubtipo-index'),
('Admin', 'tipoHasSubtipo-update'),
('Admin', 'tipoHasSubtipo-view'),
('Admin', 'vendedor-create'),
('Admin', 'vendedor-delete'),
('Admin', 'vendedor-index'),
('Admin', 'vendedor-update'),
('Admin', 'vendedor-view');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracterizacion`
--

CREATE TABLE IF NOT EXISTS `caracterizacion` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `preservacion` enum('0','1','2','3','4','5','6','7','8','9') NOT NULL,
  `siglas` varchar(15) NOT NULL,
  `laboratorio` enum('Si','No') NOT NULL,
  `opacidad` enum('Si','No') NOT NULL,
  `metodo` varchar(15) NOT NULL,
  `tipo` enum('AceitesG','Cianuro','Cloruros','Dbo','Detergente','Dqo','Fenol','Formaldehido','FosforoAA','FosforoAV','Nitratos','Nitrito','Nitrogeno','NitrogenoA','Solidos','Sulfatos','Sulfitos','Sulfuro','Fluoruro','NitrogenoT','Ph','SolidosD','Conductividad','Salinidad','Color','Espuma','Turbidez','Acidez','DurezaT','Calcica','Magnesica','Alcalinidad') NOT NULL,
  `Equipos_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Caracterizacion_Equipos1_idx` (`Equipos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracterizacion_has_departamento`
--

CREATE TABLE IF NOT EXISTS `caracterizacion_has_departamento` (
  `Caracterizacion_id` smallint(5) unsigned NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Caracterizacion_id`,`Departamento_id`),
  KEY `fk_Caracterizacion_has_Departamento_Departamento1_idx` (`Departamento_id`),
  KEY `fk_Caracterizacion_has_Departamento_Caracterizacion1_idx` (`Caracterizacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracterizacion_has_equipos`
--

CREATE TABLE IF NOT EXISTS `caracterizacion_has_equipos` (
  `Caracterizacion_id` smallint(5) unsigned NOT NULL,
  `Equipos_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`Caracterizacion_id`,`Equipos_id`),
  KEY `fk_Caracterizacion_has_Equipos_Equipos1_idx` (`Equipos_id`),
  KEY `fk_Caracterizacion_has_Equipos_Caracterizacion1_idx` (`Caracterizacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carea`
--

CREATE TABLE IF NOT EXISTS `carea` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE IF NOT EXISTS `celular` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` mediumint(7) unsigned NOT NULL,
  `CArea_id` tinyint(3) unsigned NOT NULL,
  `Clientes_id` int(10) unsigned DEFAULT NULL,
  `Vendedor_id` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Celular_CArea1_idx` (`CArea_id`),
  KEY `fk_Celular_Clientes1_idx` (`Clientes_id`),
  KEY `fk_Celular_Vendedor1_idx` (`Vendedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `direccion` tinytext NOT NULL,
  `email` varchar(90) NOT NULL,
  `encargado` varchar(45) NOT NULL,
  `nRif` char(10) NOT NULL,
  `cRif` char(1) NOT NULL,
  `siglas` char(4) NOT NULL,
  `contador` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigoanalisis`
--

CREATE TABLE IF NOT EXISTS `codigoanalisis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigomuestra`
--

CREATE TABLE IF NOT EXISTS `codigomuestra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `constantes`
--

CREATE TABLE IF NOT EXISTS `constantes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `cantidad` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costopredeterminados`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `costo` float NOT NULL,
  `fechaIngreso` date NOT NULL,
  `vencimiento` tinyint(3) unsigned NOT NULL,
  `Moneda_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_CostoPredeterminados_Moneda1_idx` (`Moneda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costopredeterminados_has_administrativos`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados_has_administrativos` (
  `CostoPredeterminados_id` int(10) unsigned NOT NULL,
  `Administrativos_id` int(10) unsigned NOT NULL,
  `cantidad` float NOT NULL,
  `dias` float NOT NULL,
  PRIMARY KEY (`CostoPredeterminados_id`,`Administrativos_id`),
  KEY `fk_CostoPredeterminados_has_Administrativos_Administrativos_idx` (`Administrativos_id`),
  KEY `fk_CostoPredeterminados_has_Administrativos_CostoPredetermi_idx` (`CostoPredeterminados_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costopredeterminados_has_parametros`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados_has_parametros` (
  `CostoPredeterminados_id` int(10) unsigned NOT NULL,
  `Parametros_id` int(10) unsigned NOT NULL,
  `cantidad` float NOT NULL,
  `k` float NOT NULL,
  `unidad` enum('equipos','materiales','mano') NOT NULL,
  PRIMARY KEY (`CostoPredeterminados_id`,`Parametros_id`),
  KEY `fk_CostoPredeterminados_has_Parametros_Parametros1_idx` (`Parametros_id`),
  KEY `fk_CostoPredeterminados_has_Parametros_CostoPredeterminados_idx` (`CostoPredeterminados_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costopredeterminados_has_prestaciones`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados_has_prestaciones` (
  `CostoPredeterminados_id` int(10) unsigned NOT NULL,
  `Prestaciones_id` int(10) unsigned NOT NULL,
  `Constantes_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`CostoPredeterminados_id`,`Prestaciones_id`),
  KEY `fk_CostoPredeterminados_has_Prestaciones_Prestaciones1_idx` (`Prestaciones_id`),
  KEY `fk_CostoPredeterminados_has_Prestaciones_CostoPredeterminad_idx` (`CostoPredeterminados_id`),
  KEY `fk_CostoPredeterminados_has_Prestaciones_Constantes1_idx` (`Constantes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costos`
--

CREATE TABLE IF NOT EXISTS `costos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cAnalisis` float NOT NULL,
  `cMuestreo` float NOT NULL,
  `cInforme` float NOT NULL,
  `cAdministrativo` float NOT NULL,
  `utilidad` float NOT NULL,
  `rendimiento` tinyint(4) NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Costos_General1_idx` (`General_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decreto`
--

CREATE TABLE IF NOT EXISTS `decreto` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `gaceta` varchar(6) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `decreto`
--

INSERT INTO `decreto` (`id`, `nombre`, `gaceta`, `fecha`) VALUES
(1, 'Normas Sanitarias de Calidad del Agua Potable', '36395', '1998-02-13'),
(2, '2181 - Cuenca del rio Yaracuy', '36344', '1998-11-28'),
(3, '883', '2014', '2014-12-24'),
(4, '3.219 - Lago de Valencia', '5305', '1999-02-01'),
(5, 'Especial', '0', '2013-07-06'),
(6, '2635', '5245', '1998-08-03'),
(7, '638', '4899', '1995-05-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decreto_has_tipo`
--

CREATE TABLE IF NOT EXISTS `decreto_has_tipo` (
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Decreto_id`,`Tipo_id`),
  KEY `fk_Decreto_has_Tipo_Tipo1_idx` (`Tipo_id`),
  KEY `fk_Decreto_has_Tipo_Decreto1_idx` (`Decreto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `decreto_has_tipo`
--

INSERT INTO `decreto_has_tipo` (`Decreto_id`, `Tipo_id`) VALUES
(3, 1),
(3, 2),
(1, 3),
(1, 4),
(1, 5),
(4, 6),
(4, 7),
(4, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(5, 16),
(6, 17),
(6, 18),
(6, 19),
(7, 20),
(7, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `contador` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `contador`) VALUES
(1, 'Agua', 0),
(2, 'Desechos', 0),
(3, 'Higiene Ocupacional', 0),
(4, 'Emisiones Atmosfericas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_has_decreto`
--

CREATE TABLE IF NOT EXISTS `departamento_has_decreto` (
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Departamento_id`,`Decreto_id`),
  KEY `fk_Departamento_has_Decreto_Decreto1_idx` (`Decreto_id`),
  KEY `fk_Departamento_has_Decreto_Departamento1_idx` (`Departamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento_has_decreto`
--

INSERT INTO `departamento_has_decreto` (`Departamento_id`, `Decreto_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 6),
(4, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dialaborables`
--

CREATE TABLE IF NOT EXISTS `dialaborables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dias` date NOT NULL,
  `Referencia_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_diaLaborables_referencia1_idx` (`Referencia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_has_general`
--

CREATE TABLE IF NOT EXISTS `equipos_has_general` (
  `Equipos_id` smallint(5) unsigned NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Equipos_id`,`General_id`),
  KEY `fk_Equipos_has_General_General1_idx` (`General_id`),
  KEY `fk_Equipos_has_General_Equipos1_idx` (`Equipos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `copias` tinyint(3) unsigned NOT NULL,
  `caudal` enum('Aplica','No Aplica') NOT NULL,
  `analisis` enum('Analisis y Muestreo','Analisis') NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  `Clientes_id` int(10) unsigned NOT NULL,
  `Vendedor_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_General_Departamento1_idx` (`Departamento_id`),
  KEY `fk_General_Decreto1_idx` (`Decreto_id`),
  KEY `fk_General_Clientes1_idx` (`Clientes_id`),
  KEY `fk_General_Vendedor1_idx` (`Vendedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_has_subtipo`
--

CREATE TABLE IF NOT EXISTS `general_has_subtipo` (
  `General_id` int(10) unsigned NOT NULL,
  `SubTipo_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`General_id`,`SubTipo_id`),
  KEY `fk_General_has_SubTipo_SubTipo1_idx` (`SubTipo_id`),
  KEY `fk_General_has_SubTipo_General1_idx` (`General_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_has_tipo`
--

CREATE TABLE IF NOT EXISTS `general_has_tipo` (
  `General_id` int(10) unsigned NOT NULL,
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`General_id`,`Tipo_id`),
  KEY `fk_General_has_Tipo_Tipo1_idx` (`Tipo_id`),
  KEY `fk_General_has_Tipo_General1_idx` (`General_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limites`
--

CREATE TABLE IF NOT EXISTS `limites` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `liminf` float NOT NULL,
  `limsup` float NOT NULL,
  `existente` enum('Si','No') NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  `SubTipo_id` tinyint(3) unsigned NOT NULL,
  `Caracterizacion_id` smallint(5) unsigned NOT NULL,
  `Rama_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Limites_Departamento1_idx` (`Departamento_id`),
  KEY `fk_Limites_Decreto1_idx` (`Decreto_id`),
  KEY `fk_Limites_Tipo1_idx` (`Tipo_id`),
  KEY `fk_Limites_SubTipo1_idx` (`SubTipo_id`),
  KEY `fk_Limites_Caracterizacion1_idx` (`Caracterizacion_id`),
  KEY `fk_Limites_Rama1_idx` (`Rama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE IF NOT EXISTS `moneda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `conversion` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestras`
--

CREATE TABLE IF NOT EXISTS `muestras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `tipo` binary(1) NOT NULL,
  `horas` tinyint(4) NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Muestras_General1_idx` (`General_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordencompra`
--

CREATE TABLE IF NOT EXISTS `ordencompra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nOrden` varchar(45) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `observaciones` text NOT NULL,
  `estado` enum('Rechazado','Pendiente','Aceptada') NOT NULL,
  `Peticion_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ordenCompra_peticion1_idx` (`Peticion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `General_id` int(10) unsigned NOT NULL,
  `Limites_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Parametros_General1_idx` (`General_id`),
  KEY `fk_Parametros_Limites1_idx` (`Limites_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_has_muestras`
--

CREATE TABLE IF NOT EXISTS `parametros_has_muestras` (
  `Parametros_id` int(10) unsigned NOT NULL,
  `Muestras_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Parametros_id`,`Muestras_id`),
  KEY `fk_Parametros_has_Muestras_Muestras1_idx` (`Muestras_id`),
  KEY `fk_Parametros_has_Muestras_Parametros1_idx` (`Parametros_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_has_muestras_has_costopredeterminados`
--

CREATE TABLE IF NOT EXISTS `parametros_has_muestras_has_costopredeterminados` (
  `Parametros_has_Muestras_Parametros_id` int(10) unsigned NOT NULL,
  `Parametros_has_Muestras_Muestras_id` int(10) unsigned NOT NULL,
  `CostoPredeterminados_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Parametros_has_Muestras_Parametros_id`,`Parametros_has_Muestras_Muestras_id`,`CostoPredeterminados_id`),
  KEY `fk_Parametros_has_Muestras_has_CostoPredeterminados_CostoPr_idx` (`CostoPredeterminados_id`),
  KEY `fk_Parametros_has_Muestras_has_CostoPredeterminados_Paramet_idx` (`Parametros_has_Muestras_Parametros_id`,`Parametros_has_Muestras_Muestras_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticion`
--

CREATE TABLE IF NOT EXISTS `peticion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fPeticion` date NOT NULL,
  `cadena` varchar(15) NOT NULL,
  `fVencimiento` tinyint(3) unsigned NOT NULL,
  `fCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Referencia_id` int(10) unsigned NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  `Muestras_id` int(10) unsigned NOT NULL,
  `Costos_id` int(10) unsigned NOT NULL,
  `Reporte_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`General_id`,`Muestras_id`,`Referencia_id`),
  KEY `fk_peticion_referencia1_idx` (`Referencia_id`),
  KEY `fk_peticion_General1_idx` (`General_id`),
  KEY `fk_peticion_Muestras1_idx` (`Muestras_id`),
  KEY `fk_Peticion_Costos1_idx` (`Costos_id`),
  KEY `fk_Peticion_Reporte1_idx` (`Reporte_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE IF NOT EXISTS `plantilla` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `reporte` text NOT NULL,
  `Vendedor_id` tinyint(3) unsigned NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reporte_Vendedor1_idx` (`Vendedor_id`),
  KEY `fk_reporte_Departamento1_idx` (`Departamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestaciones`
--

CREATE TABLE IF NOT EXISTS `prestaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE IF NOT EXISTS `puesto` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rama`
--

CREATE TABLE IF NOT EXISTS `rama` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rama_has_caracterizacion`
--

CREATE TABLE IF NOT EXISTS `rama_has_caracterizacion` (
  `Rama_id` int(10) unsigned NOT NULL,
  `Caracterizacion_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`Rama_id`,`Caracterizacion_id`),
  KEY `fk_Rama_has_Caracterizacion_Caracterizacion1_idx` (`Caracterizacion_id`),
  KEY `fk_Rama_has_Caracterizacion_Rama1_idx` (`Rama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rama_has_general`
--

CREATE TABLE IF NOT EXISTS `rama_has_general` (
  `Rama_id` int(10) unsigned NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Rama_id`,`General_id`),
  KEY `fk_Rama_has_General_General1_idx` (`General_id`),
  KEY `fk_Rama_has_General_Rama1_idx` (`Rama_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE IF NOT EXISTS `referencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ano` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Plantilla_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reporte_Plantilla1_idx` (`Plantilla_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subtipo`
--

CREATE TABLE IF NOT EXISTS `subtipo` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `subtipo`
--

INSERT INTO `subtipo` (`id`, `nombre`) VALUES
(1, '1A'),
(2, '1B'),
(3, '1C'),
(4, '2A'),
(5, '2B'),
(6, '3'),
(7, '4A'),
(8, '4B'),
(9, '5'),
(10, '6'),
(11, '7'),
(12, 'Articulo 10'),
(13, 'Articulo 12'),
(14, 'Articulo 15 - Descarga a redes cloacales'),
(15, 'Articulos 8, 9,10,11,12,13'),
(16, 'Cuadro 3 Valores límites recomendables...'),
(17, 'Cuadro 4 Componentes orgánicos'),
(18, 'Cuadro 1 Componentes relativos a la calid...'),
(19, 'Cuadro 2 Componentes inorgánicos'),
(20, 'Articulo15'),
(21, 'Articulo 36'),
(22, 'Articulo 38'),
(23, 'Articulo 28'),
(24, 'Articulo 26'),
(25, 'Especial'),
(26, 'Actividades Petroleras'),
(27, 'Anexo C, Anexo D y Caracteristicas de peli...'),
(28, 'Anexo C y Caracteristicas de peligrosidad'),
(29, 'Articulo 10 Limites de Emision'),
(30, 'Articulo 3 Limites de Calidad del Aire');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'Agua de consumo humano'),
(2, 'Efluentes'),
(3, 'Capitulo 2 Aspectos Microbiologicos'),
(4, 'Capitulo 3 - Aspectos organolépticos, físi...'),
(5, 'Capitulo 4 - Los aspectos radiactivos'),
(6, 'Agua de consumo humano Lago de valencia'),
(7, 'Seccion 6 - Las descargas al Lago de Val...'),
(8, 'Seccion 7 - Las descargas a redes cloacales'),
(9, 'Alto Yaracuy'),
(10, 'Embalse Cumaripa'),
(11, 'Medio Yaracuy'),
(12, 'Bajo Yaracuy'),
(13, 'Desembocadura'),
(14, 'Seccion 5 - Las descargas al río Yaracuy...'),
(15, 'Seccion 6 - La descarga a redes cloacales'),
(16, 'Especial'),
(17, 'Actividades Petroleras'),
(18, 'Solidos'),
(19, 'Liquidos'),
(20, 'Emisiones Atmosfericas'),
(21, 'Calidad del Aire');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_has_subtipo`
--

CREATE TABLE IF NOT EXISTS `tipo_has_subtipo` (
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  `SubTipo_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Tipo_id`,`SubTipo_id`),
  KEY `fk_Tipo_has_SubTipo_SubTipo1_idx` (`SubTipo_id`),
  KEY `fk_Tipo_has_SubTipo_Tipo1_idx` (`Tipo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_has_subtipo`
--

INSERT INTO `tipo_has_subtipo` (`Tipo_id`, `SubTipo_id`) VALUES
(1, 1),
(6, 1),
(9, 1),
(1, 2),
(6, 2),
(10, 2),
(1, 3),
(6, 3),
(1, 4),
(6, 4),
(1, 5),
(6, 5),
(10, 5),
(11, 5),
(12, 5),
(1, 6),
(1, 7),
(6, 7),
(13, 7),
(1, 8),
(6, 8),
(10, 8),
(1, 9),
(6, 9),
(11, 9),
(12, 9),
(1, 10),
(6, 10),
(1, 11),
(2, 12),
(2, 13),
(2, 14),
(3, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(5, 20),
(7, 21),
(8, 22),
(15, 23),
(14, 24),
(16, 25),
(17, 26),
(18, 27),
(19, 28),
(20, 29),
(21, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(15) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_track_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_rest_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) unsigned NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_rest_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'magdielikari', 'uffEXUix6uDLp2cHpXEBj3XH7iH7Puqr', '$2y$13$3P/Hbwa9zFdNBTivtnWq.OODeZ2CYE5z0fbG7Aqrq.mjsH37CVWme', NULL, 'magdielikari@hotmail.com', 10, 1448875984, 1448875984),
(2, 'usuario', 'Xf7o77CUutcj3c7uaVGd1AmM3C_Mra8o', '$2y$13$hCSG2oX2.B/wCaQJFuA5cuRdvAxc1RY3mstj9By0AeCcx8L/VHA7C', NULL, 'magdielikari2@hotmail.com', 10, 1449025053, 1449025053);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `HL`.`Vendedor` (
  `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Puesto_id` TINYINT UNSIGNED NOT NULL,
  `user_id` INT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `caracterizacion`
--
ALTER TABLE `caracterizacion`
  ADD CONSTRAINT `fk_Caracterizacion_Equipos1` FOREIGN KEY (`Equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `caracterizacion_has_departamento`
--
ALTER TABLE `caracterizacion_has_departamento`
  ADD CONSTRAINT `fk_Caracterizacion_has_Departamento_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Caracterizacion_has_Departamento_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `caracterizacion_has_equipos`
--
ALTER TABLE `caracterizacion_has_equipos`
  ADD CONSTRAINT `fk_Caracterizacion_has_Equipos_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Caracterizacion_has_Equipos_Equipos1` FOREIGN KEY (`Equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `celular`
--
ALTER TABLE `celular`
  ADD CONSTRAINT `fk_Celular_CArea1` FOREIGN KEY (`CArea_id`) REFERENCES `carea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Celular_Clientes1` FOREIGN KEY (`Clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Celular_Vendedor1` FOREIGN KEY (`Vendedor_id`) REFERENCES `vendedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costopredeterminados`
--
ALTER TABLE `costopredeterminados`
  ADD CONSTRAINT `fk_CostoPredeterminados_Moneda1` FOREIGN KEY (`Moneda_id`) REFERENCES `moneda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costopredeterminados_has_administrativos`
--
ALTER TABLE `costopredeterminados_has_administrativos`
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Administrativos_Administrativos1` FOREIGN KEY (`Administrativos_id`) REFERENCES `administrativos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Administrativos_CostoPredetermina1` FOREIGN KEY (`CostoPredeterminados_id`) REFERENCES `costopredeterminados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costopredeterminados_has_parametros`
--
ALTER TABLE `costopredeterminados_has_parametros`
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Parametros_CostoPredeterminados1` FOREIGN KEY (`CostoPredeterminados_id`) REFERENCES `costopredeterminados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Parametros_Parametros1` FOREIGN KEY (`Parametros_id`) REFERENCES `parametros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costopredeterminados_has_prestaciones`
--
ALTER TABLE `costopredeterminados_has_prestaciones`
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Prestaciones_Constantes1` FOREIGN KEY (`Constantes_id`) REFERENCES `constantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Prestaciones_CostoPredeterminados1` FOREIGN KEY (`CostoPredeterminados_id`) REFERENCES `costopredeterminados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CostoPredeterminados_has_Prestaciones_Prestaciones1` FOREIGN KEY (`Prestaciones_id`) REFERENCES `prestaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `costos`
--
ALTER TABLE `costos`
  ADD CONSTRAINT `fk_Costos_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `decreto_has_tipo`
--
ALTER TABLE `decreto_has_tipo`
  ADD CONSTRAINT `fk_Decreto_has_Tipo_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Decreto_has_Tipo_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `departamento_has_decreto`
--
ALTER TABLE `departamento_has_decreto`
  ADD CONSTRAINT `fk_Departamento_has_Decreto_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Departamento_has_Decreto_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dialaborables`
--
ALTER TABLE `dialaborables`
  ADD CONSTRAINT `fk_diaLaborables_referencia1` FOREIGN KEY (`Referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipos_has_general`
--
ALTER TABLE `equipos_has_general`
  ADD CONSTRAINT `fk_Equipos_has_General_Equipos1` FOREIGN KEY (`Equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Equipos_has_General_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `general`
--
ALTER TABLE `general`
  ADD CONSTRAINT `fk_General_Clientes1` FOREIGN KEY (`Clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_Vendedor1` FOREIGN KEY (`Vendedor_id`) REFERENCES `vendedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `general_has_subtipo`
--
ALTER TABLE `general_has_subtipo`
  ADD CONSTRAINT `fk_General_has_SubTipo_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_has_SubTipo_SubTipo1` FOREIGN KEY (`SubTipo_id`) REFERENCES `subtipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `general_has_tipo`
--
ALTER TABLE `general_has_tipo`
  ADD CONSTRAINT `fk_General_has_Tipo_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_has_Tipo_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `limites`
--
ALTER TABLE `limites`
  ADD CONSTRAINT `fk_Limites_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Rama1` FOREIGN KEY (`Rama_id`) REFERENCES `rama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_SubTipo1` FOREIGN KEY (`SubTipo_id`) REFERENCES `subtipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `muestras`
--
ALTER TABLE `muestras`
  ADD CONSTRAINT `fk_Muestras_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD CONSTRAINT `fk_ordenCompra_peticion1` FOREIGN KEY (`Peticion_id`) REFERENCES `peticion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD CONSTRAINT `fk_Parametros_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parametros_Limites1` FOREIGN KEY (`Limites_id`) REFERENCES `limites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parametros_has_muestras`
--
ALTER TABLE `parametros_has_muestras`
  ADD CONSTRAINT `fk_Parametros_has_Muestras_Muestras1` FOREIGN KEY (`Muestras_id`) REFERENCES `muestras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parametros_has_Muestras_Parametros1` FOREIGN KEY (`Parametros_id`) REFERENCES `parametros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parametros_has_muestras_has_costopredeterminados`
--
ALTER TABLE `parametros_has_muestras_has_costopredeterminados`
  ADD CONSTRAINT `fk_Parametros_has_Muestras_has_CostoPredeterminados_CostoPred1` FOREIGN KEY (`CostoPredeterminados_id`) REFERENCES `costopredeterminados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parametros_has_Muestras_has_CostoPredeterminados_Parametro1` FOREIGN KEY (`Parametros_has_Muestras_Parametros_id`, `Parametros_has_Muestras_Muestras_id`) REFERENCES `parametros_has_muestras` (`Parametros_id`, `Muestras_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD CONSTRAINT `fk_Peticion_Costos1` FOREIGN KEY (`Costos_id`) REFERENCES `costos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_Muestras1` FOREIGN KEY (`Muestras_id`) REFERENCES `muestras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_referencia1` FOREIGN KEY (`Referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Peticion_Reporte1` FOREIGN KEY (`Reporte_id`) REFERENCES `reporte` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD CONSTRAINT `fk_reporte_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reporte_Vendedor1` FOREIGN KEY (`Vendedor_id`) REFERENCES `vendedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rama_has_caracterizacion`
--
ALTER TABLE `rama_has_caracterizacion`
  ADD CONSTRAINT `fk_Rama_has_Caracterizacion_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rama_has_Caracterizacion_Rama1` FOREIGN KEY (`Rama_id`) REFERENCES `rama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rama_has_general`
--
ALTER TABLE `rama_has_general`
  ADD CONSTRAINT `fk_Rama_has_General_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rama_has_General_Rama1` FOREIGN KEY (`Rama_id`) REFERENCES `rama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `fk_reporte_Plantilla1` FOREIGN KEY (`Plantilla_id`) REFERENCES `plantilla` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo_has_subtipo`
--
ALTER TABLE `tipo_has_subtipo`
  ADD CONSTRAINT `fk_Tipo_has_SubTipo_SubTipo1` FOREIGN KEY (`SubTipo_id`) REFERENCES `subtipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tipo_has_SubTipo_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `fk_track_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `fk_Vendedor_Puesto` FOREIGN KEY (`Puesto_id`) REFERENCES `puesto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vendedor_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
