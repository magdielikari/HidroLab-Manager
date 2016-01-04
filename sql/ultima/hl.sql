-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2015 a las 10:32:11
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
('costopredeterminadosHasAdministrativos-establish', 2, 'Permite establecer un costopredeterminadosHasAdministrativo', NULL, NULL, 1449041713, 1449399504),
('costopredeterminadosHasAdministrativos-index', 2, 'Permite visualizar los registros costopredeterminadosHasAdministrativos', NULL, NULL, 1446356483, 1446356483),
('costopredeterminadosHasAdministrativos-select', 2, '  Permite seleccionar un registro costopredeterminadosHasAdministrativos', NULL, NULL, 1449040253, 1449399474),
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
('parametrosHasMuestras-select', 2, 'Permite seleccionar un registro parametrosHasMuestras', NULL, NULL, 1451876288, 1451876288),
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
('ramaHasGeneral-establish', 2, 'Permite establecer un registro ramaHasGeneral', NULL, NULL, 1449040648, 1449400089),
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
('Admin', 'costopredeterminadosHasAdministrativos-establish'),
('Admin', 'costopredeterminadosHasAdministrativos-index'),
('Admin', 'costopredeterminadosHasAdministrativos-select'),
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
('Admin', 'parametrosHasMuestras-select'),
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
('Admin', 'ramaHasGeneral-establish'),
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
  `tipo` enum('AceitesG','Cianuro','Cloruros','Dbo','Detergente','Dqo','Fenol','Formaldehido','FosforoAA','FosforoAV','Nitratos','Nitrito','Nitrogeno','NitrogenoA','Solidos','Sulfatos','Sulfitos','Sulfuro','Fluoruro','NitrogenoT','Ph','SolidosD','Conductividad','Salinidad','Color','Espuma','Turbidez','Acidez','DurezaT','Calcica','Magnesica','Alcalinidad') NOT NULL DEFAULT 'Cianuro',
  `Equipos_id` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_Caracterizacion_Equipos1_idx` (`Equipos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=411 ;

--
-- Volcado de datos para la tabla `caracterizacion`
--

INSERT INTO `caracterizacion` (`id`, `nombre`, `preservacion`, `siglas`, `laboratorio`, `opacidad`, `metodo`, `tipo`, `Equipos_id`) VALUES
(1, 'Aceites y Grasas Minerales', '2', 'AG', 'No', 'No', '5520 F', 'Cianuro', 1),
(2, 'Aceites y grasas', '0', 'AG', 'No', 'No', '5520 B', 'Cianuro', 1),
(3, 'Asfaltenos y Resinas', '0', 'AR', 'No', 'No', '', 'Cianuro', 1),
(4, 'Bacteorologia', '0', 'B', 'No', 'No', '', 'Cianuro', 1),
(5, 'Demanda Bioquimica de Oxigeno DBO5.20', '0', 'DBO', 'No', 'No', '5210 B', 'Cianuro', 1),
(6, 'Cianuro Total', '4', 'CN', 'No', 'No', '4500-CN E', 'Cianuro', 1),
(7, 'Cianuro', '0', 'CF', 'No', 'No', '', 'Cianuro', 1),
(8, 'Cloruros Totales', '0', 'Cl', 'No', 'No', '4110 B', 'Cianuro', 1),
(9, 'Cloruro extraible MR aluminio', '0', 'Cloru', 'No', 'No', '', 'Cianuro', 1),
(10, 'Color Real', '0', 'Color', 'No', 'No', '2120 B', 'Cianuro', 1),
(11, 'Corrosivos fenol', '0', 'CF', 'No', 'No', '', 'Cianuro', 1),
(12, 'Densidad de solidos', '0', 'DS', 'No', 'No', '', 'Cianuro', 1),
(13, 'Detergente', '0', 'Deter', 'No', 'No', '5540 D', 'Cianuro', 1),
(14, 'Disueltos sedimentables flotantes', '0', 'DSF', 'No', 'No', '', 'Cianuro', 1),
(15, 'Dureza', '0', 'DUR', 'No', 'No', '2340 C', 'Cianuro', 1),
(16, 'Fenoles', '1', 'Fenol', 'No', 'No', '5530 D', 'Cianuro', 1),
(17, 'Fluoruro', '0', 'F', 'No', 'No', '4110 B', 'Cianuro', 1),
(18, 'Formaldehido', '0', 'FD', 'No', 'No', '3500 ISSUE 2-19', 'Cianuro', 1),
(19, 'Fosforo acido ascorbico', '1', 'FAA', 'No', 'No', '', 'Cianuro', 1),
(20, 'Fps lixiviado', '0', 'FL', 'No', 'No', '', 'Cianuro', 1),
(21, 'H2SO4', '0', 'H2SO4', 'No', 'No', '', 'Cianuro', 1),
(22, 'HCL', '0', 'HCL', 'No', 'No', 'ASTM E-224-96', 'Cianuro', 1),
(23, 'Hf', '0', 'HF', 'No', 'No', '', 'Cianuro', 1),
(24, 'Humedad fischer', '0', 'HF', 'No', 'No', '', 'Cianuro', 1),
(25, 'Nitrato', '0', 'NO2', 'No', 'No', '', 'Cianuro', 1),
(26, 'Nitrito', '0', 'NO3', 'No', 'No', '', 'Cianuro', 1),
(27, 'Nitrogeno Total FIA', '1', 'NTF', 'No', 'No', '', 'Cianuro', 1),
(28, 'Ozono', '0', 'Oz', 'No', 'No', '', 'Cianuro', 1),
(29, 'Pentoxido', '0', 'Pento', 'No', 'No', '', 'Cianuro', 1),
(30, 'Ph', '0', 'PH', 'No', 'No', '', 'Cianuro', 1),
(31, 'Disueltos', '0', 'Disue', 'No', 'No', '', 'Cianuro', 1),
(32, 'Conductividad', '0', 'Condu', 'No', 'No', '2510 B', 'Cianuro', 1),
(33, 'Demanda Quimica de Oxigeno DQO', '0', 'DQO', 'No', 'No', '5220 D', 'Cianuro', 1),
(34, 'Solidos suspendidos', '0', 'SS', 'No', 'No', '2540 D', 'Cianuro', 1),
(35, 'Solidos totales', '0', 'Solid', 'No', 'No', '2540 B', 'Cianuro', 1),
(36, 'Sulfatos', '0', 'SO4', 'No', 'No', '4110 B', 'Cianuro', 1),
(37, 'Sulfito', '6', 'Sulfi', 'No', 'No', '4500- S3(2-) B', 'Cianuro', 1),
(38, 'Sulfuro Fia', '7', 'SF', 'No', 'No', '4500- S(-2) I', 'Cianuro', 1),
(39, 'Turbidez', '0', 'Turbi', 'No', 'No', '2130 B', 'Cianuro', 1),
(40, 'Oxigeno Disuelto', '0', 'OD', 'No', 'No', '4500 OG', 'Cianuro', 1),
(41, 'Organismos coliformes', '9', 'OC', 'No', 'No', '', 'Cianuro', 1),
(42, 'Organismos coliformes Totales', '9', 'OCT', 'No', 'No', 'COVENIIN 1104;1', 'Cianuro', 1),
(43, 'Organismos coliformes fecales', '9', 'OCF', 'No', 'No', 'COVENIIN 1104;1', 'Cianuro', 1),
(44, 'Organismos coniformes totales', '0', 'OCT(c', 'No', 'No', '', 'Cianuro', 1),
(45, 'Organismos coniformes fecales', '9', 'OCF(c', 'No', 'No', '', 'Cianuro', 1),
(46, 'Aluminio', '3', 'Al', 'No', 'No', '3120 B', 'Cianuro', 1),
(47, 'Arsenico total', '0', 'As', 'No', 'No', '3114 C', 'Cianuro', 1),
(48, 'Bario total', '3', 'Ba', 'No', 'No', '3120 B', 'Cianuro', 1),
(49, 'Cadmio total', '3', 'Cd', 'No', 'No', '3120 B', 'Cianuro', 1),
(50, 'Cobre total', '3', 'Cu', 'No', 'No', '3120 B', 'Cianuro', 1),
(51, 'Cromo total', '3', 'Cr', 'No', 'No', '3120 B', 'Cianuro', 1),
(52, 'Dispersantes', '0', 'Dispe', 'No', 'No', '5540 D', 'Cianuro', 1),
(53, 'Dureza CaCO3', '0', 'Durez', 'No', 'No', '2340 C', 'Cianuro', 1),
(54, 'Extracto de carbono al cloroformo', '0', 'Extra', 'No', 'No', '', 'Cianuro', 1),
(55, 'Hierro total', '3', 'Fe', 'No', 'No', '3120 B', 'Cianuro', 1),
(56, 'Manganeso total', '3', 'Mn', 'No', 'No', '3120 B', 'Cianuro', 1),
(57, 'Mercurio total', '3', 'Hg', 'No', 'No', '3112 B', 'Cianuro', 1),
(58, 'Plata total', '3', 'Ag', 'No', 'No', '3120 B', 'Cianuro', 1),
(59, 'Plomo total', '3', 'Pb', 'No', 'No', '3120 B', 'Cianuro', 1),
(60, 'Selenio', '3', 'Se', 'No', 'No', '3120 B', 'Cianuro', 1),
(61, 'Sodio', '3', 'Sodio', 'No', 'No', '3120 B', 'Cianuro', 1),
(62, 'Solidos disueltos totales', '0', 'Solid', 'No', 'No', '2540 C', 'Cianuro', 1),
(63, 'Zinc', '3', 'Zn', 'No', 'No', '3120 B', 'Cianuro', 1),
(64, 'Organofosforados y Carbamatos', '8', 'Organ', 'No', 'No', '6630 B - 6610 A', 'Cianuro', 1),
(65, 'Organoclorados', '8', 'Organ', 'No', 'No', '3120 B', 'Cianuro', 1),
(66, 'Radiactividad Alfa', '0', 'Alfa', 'No', 'No', 'EPA 900.0', 'Cianuro', 1),
(67, 'Radiactividad Beta', '0', 'Beta', 'No', 'No', 'EPA 900.0', 'Cianuro', 1),
(68, 'Arsenico', '0', 'Arsen', 'No', 'No', '3114 C', 'Cianuro', 1),
(69, 'Bario', '3', 'Bario', 'No', 'No', '3120 B', 'Cianuro', 1),
(70, 'Boro', '0', 'B', 'No', 'No', '3120 B', 'Cianuro', 1),
(71, 'Cadmio', '3', 'Cadmi', 'No', 'No', '3120 B', 'Cianuro', 1),
(72, 'Litio', '3', 'Litio', 'No', 'No', '', 'Cianuro', 1),
(73, 'Mercurio', '3', 'Mercu', 'No', 'No', '3112 B', 'Cianuro', 1),
(74, 'Molibdeno', '3', 'Molib', 'No', 'No', '3120 B', 'Cianuro', 1),
(75, 'Niquel', '3', 'Nique', 'No', 'No', '3120 B', 'Cianuro', 1),
(76, 'Plata', '3', 'Plata', 'No', 'No', '3120 B', 'Cianuro', 1),
(77, 'Plomo', '3', 'Plomo', 'No', 'No', '3120 B', 'Cianuro', 1),
(78, 'Solidos flotantes', '0', 'Solid', 'No', 'No', '2530 B', 'Cianuro', 1),
(79, 'Vanadio', '3', 'V', 'No', 'No', '3120 B', 'Cianuro', 1),
(80, 'Detergentes no biodegradables', '0', 'Deter', 'No', 'No', '', 'Cianuro', 1),
(81, 'Detergentes biodegradables', '0', 'Deter', 'No', 'No', '', 'Cianuro', 1),
(82, 'Residuos de petroleo, solidos sedimentables y', '0', 'Resid', 'No', 'No', '', 'Cianuro', 1),
(83, 'Metales y otras sustancias tóxicas', '3', 'Metal', 'No', 'No', '', 'Cianuro', 1),
(84, 'Fenoles y sus derivados', '1', 'Fenol', 'No', 'No', '', 'Cianuro', 1),
(85, 'Moluscos infectados con S. mansoni', '0', 'Molus', 'No', 'No', '', 'Cianuro', 1),
(86, 'Sólidos disueltos desviación', '0', 'Sólid', 'No', 'No', '', 'Cianuro', 1),
(87, 'Espuma', '0', 'Espum', 'No', 'No', '---', 'Cianuro', 1),
(88, 'Aceites', '2', 'aceit', 'No', 'No', '', 'Cianuro', 1),
(89, 'Sustancias que originen sedimentacion de soli', '0', 'Susta', 'No', 'No', '', 'Cianuro', 1),
(90, 'Solidos flotantes y sedimentables o depósitos', '0', 'depós', 'No', 'No', '', 'Cianuro', 1),
(91, 'Hidrocarburos', '2', 'Hidro', 'No', 'No', '5520 F', 'Cianuro', 1),
(92, 'Aceites y grasas vegetales y animales.', '2', 'Aceit', 'No', 'No', '5520 B', 'Cianuro', 1),
(93, 'Alkil Mercurio', '3', 'Alkil', 'No', 'No', '3112 B', 'Cianuro', 1),
(94, 'Aldehidos', '0', 'Aldeh', 'No', 'No', 'IODOMETRICO', 'Cianuro', 1),
(95, 'Aluminio total', '3', 'Alumi', 'No', 'No', '3120 B', 'Cianuro', 1),
(96, 'Cobalto Total', '3', 'Co', 'No', 'No', '3120 B', 'Cianuro', 1),
(97, 'Estaño', '3', 'Sn', 'No', 'No', '3120 B', 'Cianuro', 1),
(98, 'Fosforo total expresado como fosforo', '1', 'P', 'No', 'No', '3120 B', 'Cianuro', 1),
(99, 'Nitrogeno total expresado como nitrogeno', '1', 'N', 'No', 'No', '4500 Norg-D', 'Cianuro', 1),
(100, 'Nitritos y Nitratos expresado como nitrogeno', '0', 'Nitri', 'No', 'No', '4500-NO(3)- I -', 'Cianuro', 1),
(101, 'Solidos sedimentables', '0', 'Solid', 'No', 'No', '2540 F', 'Cianuro', 1),
(102, 'Sulfuros', '7', 'Sulfu', 'No', 'No', '4500- S(-2) I', 'Cianuro', 1),
(103, 'Niquel total', '3', 'Ni', 'No', 'No', '3120 B', 'Cianuro', 1),
(104, 'Temperatura', '0', 'Tempe', 'No', 'No', '2250 B', 'Cianuro', 1),
(105, 'Cloro residual libre', '0', 'Cl rs', 'No', 'No', '4500 Cl-G', 'Cianuro', 1),
(106, 'Examen Virus', '0', 'Virus', 'No', 'No', '', 'Cianuro', 1),
(107, 'Examen de Bacterias', '0', 'Bacte', 'No', 'No', '', 'Cianuro', 1),
(108, 'Examen de Hongos y levaduras', '9', 'Hongo', 'No', 'No', 'COVENIN 1337;19', 'Cianuro', 1),
(109, 'Examen de Protozoarios', '0', 'Proto', 'No', 'No', '9711 B', 'Cianuro', 1),
(110, 'Examen de Helmintos', '0', 'Helmi', 'No', 'No', '9711 B', 'Cianuro', 1),
(111, 'Organismos Heterotrofos Aerobios', '9', 'OHA', 'No', 'No', 'COVENIN 902:87', 'Cianuro', 1),
(112, 'Plancton', '0', 'Planc', 'No', 'No', '', 'Cianuro', 1),
(113, 'Olor y sabor', '0', 'Olor', 'No', 'No', '', 'Cianuro', 1),
(114, 'Dureza total', '0', 'Durez', 'No', 'No', '2340 C', 'Cianuro', 1),
(115, 'Cobre', '3', 'Cobre', 'No', 'No', '3120 B', 'Cianuro', 1),
(116, 'Nitrogeno', '1', 'Nitro', 'No', 'No', '4500 Norg-D', 'Cianuro', 1),
(117, 'Bromoformo', '0', 'Bromo', 'No', 'No', '8', 'Cianuro', 1),
(118, 'Cloroformo', '0', 'Cloro', 'No', 'No', '', 'Cianuro', 1),
(119, 'Dibromoclorometano', '8', 'Dibro', 'No', 'No', '', 'Cianuro', 1),
(120, 'Benceno', '0', 'Bence', 'No', 'No', '', 'Cianuro', 1),
(121, 'Tolueno', '0', 'Tolue', 'No', 'No', '', 'Cianuro', 1),
(122, 'Xileno', '0', 'Xilen', 'No', 'No', '', 'Cianuro', 1),
(123, 'Aldrín y Dieldrín', '0', 'Aldrí', 'No', 'No', '', 'Cianuro', 1),
(124, 'Clordano', '0', 'Clord', 'No', 'No', '', 'Cianuro', 1),
(125, 'DDT y sus metabolitos', '0', 'DDT y', 'No', 'No', '', 'Cianuro', 1),
(126, '2-4-D', '0', '2-4-D', 'No', 'No', '', 'Cianuro', 1),
(127, 'Heptacloro', '0', 'Hepta', 'No', 'No', '', 'Cianuro', 1),
(128, 'Heptacloro Expóxido', '0', 'Hepta', 'No', 'No', '', 'Cianuro', 1),
(129, 'Hexaclorobenceno', '0', 'Hexac', 'No', 'No', '', 'Cianuro', 1),
(130, 'Lindano', '0', 'Linda', 'No', 'No', '', 'Cianuro', 1),
(131, 'Metoxicloro', '0', 'Metox', 'No', 'No', '', 'Cianuro', 1),
(132, 'Acrilamida', '0', 'Acril', 'No', 'No', '', 'Cianuro', 1),
(133, 'Benzopireno', '0', 'Benzo', 'No', 'No', '', 'Cianuro', 1),
(134, '1-2 Dicloroetano', '0', '1-2 D', 'No', 'No', '', 'Cianuro', 1),
(135, '1-1 Dicloroeteno', '0', '1-1 D', 'No', 'No', '', 'Cianuro', 1),
(136, 'Etilbenceno', '0', 'Etilb', 'No', 'No', '', 'Cianuro', 1),
(137, 'Pentaclorofenol', '1', 'Penta', 'No', 'No', '', 'Cianuro', 1),
(138, '2-4-6 Triclorofenol', '1', '2-4-6', 'No', 'No', '', 'Cianuro', 1),
(139, 'Clorofila', '0', 'Cloro', 'No', 'No', '', 'Cianuro', 1),
(140, 'Transparencia de las aguas medida con el disc', '0', 'Secch', 'No', 'No', '', 'Cianuro', 1),
(141, 'Nematodos intestinales Ascaris, Trichuris y A', '0', 'Nemat', 'No', 'No', '', 'Cianuro', 1),
(142, 'Solidos disueltos', '0', 'Solid', 'No', 'No', '2540 C', 'Cianuro', 1),
(143, 'Cromo hexavalente', '3', 'Cr+6', 'No', 'No', '3500-Cr(6+) B', 'Cianuro', 1),
(144, 'Magnesio', '3', 'Mg', 'No', 'No', '3120 B', 'Cianuro', 1),
(145, 'Calcio', '0', 'Ca', 'No', 'No', '3120 B', 'Cianuro', 1),
(146, 'Silice', '0', 'Si', 'No', 'No', '', 'Cianuro', 1),
(147, 'Cianuro libre', '4', 'CN', 'No', 'No', '4500-CN E', 'Cianuro', 1),
(148, 'Corrosividad Ph', '0', 'Corro', 'No', 'No', 'EPA 9045 C', 'Cianuro', 1),
(149, 'Corrosividad al Acero', '0', 'Corro', 'No', 'No', 'NVC-3439:1999', 'Cianuro', 1),
(150, 'Punto de inflamacion', '0', 'Punto', 'No', 'No', 'NVC-425:1981', 'Cianuro', 1),
(151, 'Fabricacion de Cadmio', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(152, 'Fabricacion de Cloro', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(153, 'Fabricacion de Carbonato Sodico', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(154, 'Obtencion de Cobre', '0', 'Obtencion de Co', 'No', 'No', '', 'Cianuro', 1),
(155, 'Incineracion de residuos peligrosos', '0', 'Incineracion de', 'No', 'No', '', 'Cianuro', 1),
(156, 'Reactividad simple', '0', 'Reactividad sim', 'No', 'No', '---', 'Cianuro', 1),
(157, 'Ph Solucion Acuosa', '0', 'Ph Solucion Acu', 'No', 'No', 'SSSA Method16', 'Cianuro', 1),
(158, 'Conductividad Electrica', '0', 'Conductividad E', 'No', 'No', 'SSSA  Method14', 'Cianuro', 1),
(159, 'Relacion de adsorcion de sodio RAS', '0', 'Relacion de ads', 'No', 'No', 'SSSA  Method14', 'Cianuro', 1),
(160, 'Reactividad al Acido Sulfhidrico', '0', 'Reactividad al ', 'No', 'No', 'EPA 9030', 'Cianuro', 1),
(161, 'Reactividad al Acido Cianhidrico', '0', 'Reactividad al ', 'No', 'No', 'EPA 9010', 'Cianuro', 1),
(162, 'Antimonio y sus Compuestos Organicos e Inorga', '0', 'Antimonio y sus', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(163, 'Arsenico y sus Compuestos Organicos e Inorgan', '0', 'Arsenico y sus ', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(164, 'Berilio y sus Compuestos', '0', 'Berilio y sus C', 'No', 'No', 'EPA', 'Cianuro', 1),
(165, 'Cadmio y sus Compuestos', '0', 'Cadmio y sus Co', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(166, 'Cobre Compuestos Solubles Sales y Acidos', '0', 'Cobre Compuesto', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(167, 'Cromo y sus Compuestos', '0', 'Cromo y sus Com', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(168, 'Plomo y sus Compuestos Sales y Oxidos', '0', 'Plomo y sus Com', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(169, 'Mercurio y sus Compuestos', '0', 'Mercurio y sus ', 'No', 'No', 'EPA 7471A', 'Cianuro', 1),
(170, 'Níquel y sus Compuestos Sales y Oxidos', '0', 'Níquel y sus Co', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(171, 'Selenio y sus Compuestos', '0', 'Selenio y sus C', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(172, 'Talio en sus Compuestos Sales', '0', 'Talio en sus Co', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(173, 'Vanadio en sus Compuestos Oxidos y Sales', '0', 'Vanadio en sus ', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(174, 'Cinc y sus Compuestos Polvos, Oxidos y Sales', '0', 'Cinc y sus Comp', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(175, 'Bario y sus Compuestos', '0', 'Bario y sus Com', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(176, 'Titanio', '0', 'Titanio', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(177, 'Aluminio y sus compuestos', '0', 'Aluminio y sus ', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(178, 'Silicio', '0', 'Silicio', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(179, 'Potasio', '0', 'Potasio', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(180, 'Ortosilicato', '0', 'Ortosilicato', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(181, 'Carbonato', '0', 'Carbonato', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(182, 'Material Insoluble', '0', 'Material Insolu', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(183, 'Humedad', '0', 'Humedad', 'No', 'No', 'NVC-2791-91', 'Cianuro', 1),
(184, 'Aluminio Intercambiables', '0', 'Aluminio Interc', 'No', 'No', 'SSSA Method 18', 'Cianuro', 1),
(185, 'Saturacion con bases', '0', 'Saturacion con ', 'No', 'No', 'Soil Remediatio', 'Cianuro', 1),
(186, 'Instalaciones que utilizan carbon', '0', 'Instalaciones q', 'No', 'No', '', 'Cianuro', 1),
(187, 'Instalaciones que utilizan fuel-oil', '0', 'Centrales termi', 'No', 'No', '', 'Cianuro', 1),
(188, 'Fabricas de cemento', '0', 'Fabricas de cem', 'No', 'No', '', 'Cianuro', 1),
(189, 'Incineracion de desechos peligrosos', '0', 'Incineracion de', 'No', 'No', '', 'Cianuro', 1),
(190, 'TPH', '0', 'TPH', 'No', 'No', '9074', 'Cianuro', 1),
(191, 'Saturados', '0', 'Saturados', 'No', 'No', 'ASTM-D-2007-03', 'Cianuro', 1),
(192, 'Aromaticos', '0', 'Aromaticos', 'No', 'No', 'AS', 'Cianuro', 1),
(193, 'Resinas', '0', 'Resinas', 'No', 'No', 'NVC-886-1994', 'Cianuro', 1),
(194, 'Solidos Secos', '0', 'Solidos Secos', 'No', 'No', '', 'Cianuro', 1),
(195, 'Peso de la muestra seca a 103C', '0', 'Peso de la mues', 'No', 'No', '', 'Cianuro', 1),
(196, 'Muestra Lixiviada', '0', 'Muestra Lixivia', 'No', 'No', '', 'Cianuro', 1),
(197, 'Fluido de extraccion', '0', 'Fluido de extra', 'No', 'No', '', 'Cianuro', 1),
(198, 'Ph Solucion de HCI 1N', '0', 'Ph Solucion de ', 'No', 'No', '', 'Cianuro', 1),
(199, 'Acetona', '0', 'Acetona', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(200, 'Acrilonitrilo', '0', 'Acrilonitrilo', 'No', 'No', 'EpA', 'Cianuro', 1),
(201, 'Bromodiclorometano', '0', 'Bromodicloromet', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(202, 'Bromometano', '0', 'Bromometano', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(203, 'Disulfuro de Carbono', '0', 'Disulfuro de Ca', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(204, 'Tetracloruro de Carbono', '0', 'Tetracloruro de', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(205, 'Clorobenceno', '0', 'Clorobenceno', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(206, 'Cloroetano', '0', 'Cloroetano', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(207, 'Clorometano', '0', 'Clorometano', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(208, '1,3 Dicloropropano', '0', '1,3 Dicloroprop', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(209, 'Dibromometano', '0', 'Dibromometano', 'No', 'No', '8010', 'Cianuro', 1),
(210, 'Yodometano', '0', 'Yodometano', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(211, 'Xileno Meta, Orto y Para', '0', 'Xileno Meta, Or', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(212, 'Cloruro de Metilo', '0', 'Cloruro de Meti', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(213, 'Estireno', '0', 'Estireno', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(214, '1,1,1,2 Tetracloroetano', '0', '1,1,1,2 Tetracl', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(215, '1,1,2,2 Tetracloroetano', '0', '1,1,2,2 Tetracl', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(216, 'Fosfina', '0', 'Fosfina', 'No', 'No', '', 'Cianuro', 1),
(217, 'Pseudomonas Aeruginosas', '0', 'Pseudomonas Aer', 'No', 'No', '', 'Cianuro', 1),
(218, '1,2 Dicloroetileno', '0', '1,2 Dicloroetil', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(219, 'Tricloroetileno', '0', 'Tricloroetileno', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(220, 'PCBs', '0', 'PCBs', 'No', 'No', '', 'Cianuro', 1),
(221, 'Ph Lixiviado', '0', 'Ph Lixiviado', 'No', 'No', '', 'Cianuro', 1),
(222, 'Capacidad calorifica', '0', 'Capacidad Calor', 'No', 'No', '---', 'Cianuro', 1),
(223, 'Fenol', '0', 'Fenol', 'No', 'No', '5530-D', 'Cianuro', 1),
(224, 'Fosfatos', '0', 'Fosfatos', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(225, 'Densidad relativa a 15,6', '0', 'Densidad relati', 'No', 'No', '', 'Cianuro', 1),
(226, 'Fosforo total', '0', 'Fosforo total', 'No', 'No', 'EPA 6010', 'Cianuro', 1),
(227, 'Cenizas', '0', 'Cenizas', 'No', 'No', 'MS 2540-E', 'Cianuro', 1),
(228, 'DH Combustion', '0', 'DH Combustion', 'No', 'No', 'D240-00', 'Cianuro', 1),
(229, 'Asfaltenos', '0', 'Asfaltenos', 'No', 'No', 'NVC-886-1994', 'Cianuro', 1),
(230, 'Fosfato', '0', 'Fosfato', 'No', 'No', '6010 C', 'Cianuro', 1),
(231, 'Fosforo', '0', 'Fosforo', 'No', 'No', 'EPA 6010 C', 'Cianuro', 1),
(232, 'Coliformes totales', '0', 'Coliformes tota', 'No', 'No', 'COVENIN 1104;19', 'Cianuro', 1),
(233, 'Coliformes fecales', '0', 'Coliformes feca', 'No', 'No', 'COVENIN 1104;19', 'Cianuro', 1),
(234, 'Escherichia Coli', '0', 'Escherichia Col', 'No', 'No', 'COVENIN 1104;19', 'Cianuro', 1),
(235, 'Densidad Relativa a 15,6 C', '0', 'Densidad Relati', 'No', 'No', '---', 'Cianuro', 1),
(236, 'Organofosforados', '0', 'Organofosforado', 'No', 'No', '6630 B', 'Cianuro', 1),
(237, 'Compuestos Fenolicos', '0', 'Compuestos Feno', 'No', 'No', '6420B', 'Cianuro', 1),
(238, 'Gravedad Especifica a 20 C', '0', 'Gravedad Especi', 'No', 'No', 'ASTM D-1429', 'Cianuro', 1),
(239, 'Hexacloroetano', '0', 'Hexacloroetano', 'No', 'No', '8010', 'Cianuro', 1),
(240, 'Cloruro de Vinilo', '0', 'Cloruro de Vini', 'No', 'No', '8010', 'Cianuro', 1),
(241, '1,2 Dicloroetano', '0', '1,2 Dicloroetan', 'No', 'No', '8010', 'Cianuro', 1),
(242, '1,1 Dicloroetileno', '0', '1,1 Dicloroetil', 'No', 'No', '8010', 'Cianuro', 1),
(243, 'Tetracloroetileno', '0', 'Tetracloroetile', 'No', 'No', '8010', 'Cianuro', 1),
(244, '1,1,1-Tricloroetano', '0', '1,1,1-Tricloroe', 'No', 'No', '8010', 'Cianuro', 1),
(245, '1,1,2 Tricloroetano', '0', '1,1,2-Tricloroe', 'No', 'No', '8010', 'Cianuro', 1),
(246, 'Eter Bis 2-Cloroetileno', '0', 'Eter Bis 2-Clor', 'No', 'No', '8010', 'Cianuro', 1),
(247, 'Porcentaje de Agua', '0', 'Porcentaje de A', 'No', 'No', '3210B', 'Cianuro', 1),
(248, 'Hexaclorobutadieno', '0', 'Hexaclorobutadi', 'No', 'No', '8010', 'Cianuro', 1),
(249, 'Naftaleno', '0', 'Naftaleno', 'No', 'No', '3630', 'Cianuro', 1),
(250, 'Acenaftileno', '0', 'Acenaftileno', 'No', 'No', '3630', 'Cianuro', 1),
(251, 'Acenateno', '0', 'Acenateno', 'No', 'No', '3630', 'Cianuro', 1),
(252, 'Fluoreno', '0', 'Fluoreno', 'No', 'No', '3630', 'Cianuro', 1),
(253, 'Fenantreno', '0', 'Fenantreno', 'No', 'No', '3630', 'Cianuro', 1),
(254, 'Antraceno', '0', 'Antraceno', 'No', 'No', '3630', 'Cianuro', 1),
(255, 'Fluoranteno', '0', 'Fluoranteno', 'No', 'No', '3630', 'Cianuro', 1),
(256, 'Pireno', '0', 'Pireno', 'No', 'No', '3630', 'Cianuro', 1),
(257, 'Benzo a Antraceno', '0', 'Benzo a Antrace', 'No', 'No', '3630', 'Cianuro', 1),
(258, 'Criseno', '0', 'Criseno', 'No', 'No', '3630', 'Cianuro', 1),
(259, 'Benzo b Fluoranteno', '0', 'Benzo b Fluoran', 'No', 'No', '3630', 'Cianuro', 1),
(260, 'Benzo k Fluoranteno', '0', 'Benzo k Fluoran', 'No', 'No', '3630', 'Cianuro', 1),
(261, 'Benzo a Pireno', '0', 'Benzo a Pireno', 'No', 'No', '3630', 'Cianuro', 1),
(262, 'Dibenzo a,h Antraceno', '0', 'Dibenzo a,h Ant', 'No', 'No', '3630', 'Cianuro', 1),
(263, 'Indeno 1,2,3 cd Pireno', '0', 'Indeno 1,2,3-cd', 'No', 'No', '3630', 'Cianuro', 1),
(264, 'Aldrin', '0', 'Aldrin', 'No', 'No', '8080', 'Cianuro', 1),
(265, 'b-BHC-Lindano e Isometricos', '0', 'b-BHC-Lindano e', 'No', 'No', '8080', 'Cianuro', 1),
(266, '4,4 DDD', '0', '4,4 DDD', 'No', 'No', '8080', 'Cianuro', 1),
(267, '4,4 DDE', '0', '4,4 DDE', 'No', 'No', '8080', 'Cianuro', 1),
(268, '4,4 DDT', '0', '4,4 DDT', 'No', 'No', '8080', 'Cianuro', 1),
(269, 'Endosulfan I Alfa', '0', 'Endosulfan I Al', 'No', 'No', '8080', 'Cianuro', 1),
(270, 'Endosulfan II Beta', '0', 'Endosulfan II B', 'No', 'No', '8080', 'Cianuro', 1),
(271, 'Endosulfan Sulfato', '0', 'Endosulfan Sulf', 'No', 'No', '8080', 'Cianuro', 1),
(272, 'Endrin', '0', 'Endrin', 'No', 'No', '8080', 'Cianuro', 1),
(273, 'Endrin Aldehido', '0', 'Endrin Aldehido', 'No', 'No', '8080', 'Cianuro', 1),
(274, 'Heptaclor', '0', 'Heptaclor', 'No', 'No', '8080', 'Cianuro', 1),
(275, 'Tetracloroetano', '0', 'Tetracloroetano', 'No', 'No', '8010', 'Cianuro', 1),
(276, 'Bifelinos Policlorados', '0', 'Bifelinos Polic', 'No', 'No', '', 'Cianuro', 1),
(277, 'Conductividad especifica', '0', 'Conductividad e', 'No', 'No', 'Soil Remediatio', 'Cianuro', 1),
(278, 'Amoniaco', '0', 'Amoniaco', 'No', 'No', '4501 Norg-D', 'Cianuro', 1),
(279, 'Relacion Absorcion', '0', 'Relacion Absorc', 'No', 'No', 'Soil Remediatio', 'Cianuro', 1),
(280, '2- Clorofenol', '0', '2- Clorofenol', 'No', 'No', '3810', 'Cianuro', 1),
(281, '1-3-Diclorobenceno', '0', '1-3-Diclorobenc', 'No', 'No', '', 'Cianuro', 1),
(282, '1-4-Diclorobenceno', '0', '1-4-Diclorobenc', 'No', 'No', '3810', 'Cianuro', 1),
(283, 'Bencil alcohol', '0', 'Bencil alcohol', 'No', 'No', '', 'Cianuro', 1),
(284, '1-2 Diclorobenceno', '0', '1,2 Diclorobenc', 'No', 'No', '3810', 'Cianuro', 1),
(285, '2-Metilfenol', '0', '2-Metilfenol', 'No', 'No', '', 'Cianuro', 1),
(286, 'Bisi 2 cloroisopropil eter', '0', 'Bisi 2 cloroiso', 'No', 'No', '3810', 'Cianuro', 1),
(287, '4-Metilfenol', '0', '4-Metilfenol', 'No', 'No', '3810', 'Cianuro', 1),
(288, 'N-Nitroso-Di-n-Propilamina', '0', 'N-Nitroso-Di-n-', 'No', 'No', '3810', 'Cianuro', 1),
(289, 'Nitrobenceno', '0', 'Nitrobenceno', 'No', 'No', '3810', 'Cianuro', 1),
(290, 'Isoforona', '0', 'Isoforona', 'No', 'No', '3810', 'Cianuro', 1),
(291, '2-Nitrofenol', '0', '2-Nitrofenol', 'No', 'No', '3810', 'Cianuro', 1),
(292, '2,4-Dimetilfenol', '0', '2,4-Dimetilfeno', 'No', 'No', '3810', 'Cianuro', 1),
(293, 'Acido Benzoico', '0', 'Acido Benzoico', 'No', 'No', '3810', 'Cianuro', 1),
(294, 'Nitrofenol', '0', 'Nitrofenol', 'No', 'No', '3630', 'Cianuro', 1),
(295, 'Acenafteno', '0', 'Acenafteno', 'No', 'No', '', 'Cianuro', 1),
(296, 'Benzo ghi Perileno', '0', 'Benzo ghi Peril', 'No', 'No', '', 'Cianuro', 1),
(297, 'Bifenilos Policlorados', '0', 'Bifenilos Polic', 'No', 'No', '8010', 'Cianuro', 1),
(298, 'Fabricacion de acido sulfurico', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(299, 'Centrales termicas a fuel oil', '0', 'Centrales termi', 'No', 'No', '', 'Cianuro', 1),
(300, 'Baterias de choque', '0', 'Baterias de cho', 'No', 'No', '', 'Cianuro', 1),
(301, 'Obtención de aluminio', '0', 'Obtención de al', 'No', 'No', '', 'Cianuro', 1),
(302, 'Refinación de Petróleo', '0', 'Refinación de P', 'No', 'No', '', 'Cianuro', 1),
(303, 'Fabricación de pasta de papel', '0', 'Fabricación de ', 'No', 'No', '', 'Cianuro', 1),
(304, 'Fabricación de fertilizantes superfosfatos si', '0', 'Fabricación de ', 'No', 'No', '', 'Cianuro', 1),
(305, 'Fabricación de fertilizantes superfosfatos tr', '0', 'Fabricación de ', 'No', 'No', '', 'Cianuro', 1),
(306, 'Ferroaleaciones', '0', 'Ferroaleaciones', 'No', 'No', '', 'Cianuro', 1),
(307, 'Combustible industrial', '0', 'Combustible ind', 'No', 'No', '', 'Cianuro', 1),
(308, 'Actividades sin normas especificas', '0', 'Actividades sin', 'No', 'No', '', 'Cianuro', 1),
(309, 'Fabricacion de acido nitrico', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(310, 'Fabricacion de vidrio y productos de vidrio', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(311, 'Centrales termicas e instalaciones que utiliz', '0', 'Centrales termi', 'No', 'No', '', 'Cianuro', 1),
(312, 'Incineracion de residuos solidos no peligroso', '0', 'Incineracion de', 'No', 'No', '', 'Cianuro', 1),
(313, 'Incineracion de desechos patologicos', '0', 'Incineracion de', 'No', 'No', '', 'Cianuro', 1),
(314, 'Preparacion y aglomeracion de minerales Aglom', '0', 'Preparacion y a', 'No', 'No', '', 'Cianuro', 1),
(315, 'Preparacion y aglomeracion de minerales Prepa', '0', 'Preparacion y a', 'No', 'No', '', 'Cianuro', 1),
(316, 'Baterias de coque e instalacion de recuperaci', '0', 'Baterias de coq', 'No', 'No', '', 'Cianuro', 1),
(317, 'Fabricacion de arrabio', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(318, 'Fabricacion de acero', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(319, 'Acerias con hornos de arco electrico', '0', 'Acerias con hor', 'No', 'No', '', 'Cianuro', 1),
(320, 'Acerias Siemns Martin', '0', 'Acerias Siemns ', 'No', 'No', '', 'Cianuro', 1),
(321, 'Funciones de cubilote 1-5th', '0', 'Funciones de cu', 'No', 'No', '', 'Cianuro', 1),
(322, 'Funciones de cubilote 5th', '0', 'Funciones de cu', 'No', 'No', '', 'Cianuro', 1),
(323, 'Obtencion de aluminio Reduccion de alumio', '0', 'Obtencion de al', 'No', 'No', '', 'Cianuro', 1),
(324, 'Obtencion de Aluminio 2a. fusion', '0', 'Obtencion de Al', 'No', 'No', '', 'Cianuro', 1),
(325, 'Obtencion de Cobre Fusion del cobre', '0', 'Obtencion de Co', 'No', 'No', '', 'Cianuro', 1),
(326, 'Obtencion de Cobre Refino del cobre', '0', 'Obtencion de Co', 'No', 'No', '', 'Cianuro', 1),
(327, 'Obtencion de Cobre Hidrometalurgia', '0', 'Obtencion de Co', 'No', 'No', '', 'Cianuro', 1),
(328, 'Obtencion de plomo', '0', 'Obtencion de pl', 'No', 'No', '', 'Cianuro', 1),
(329, 'Obtencion de plomo Horno de cuba', '0', 'Obtencion de pl', 'No', 'No', '', 'Cianuro', 1),
(330, 'Obtencion de Zinc', '0', 'Obtencion de Zi', 'No', 'No', '', 'Cianuro', 1),
(331, 'Fabricacion de Fertilizantes', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(332, 'Fabricacion de carburo de calcio Instalacion ', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(333, 'Fabricacion de carburo de calcio Horno', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(334, 'Fabricacion de negro de humo', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(335, 'Fabricacion de alumina', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(336, 'Ferroaleaciones Ferro-silicio', '0', 'Ferroaleaciones', 'No', 'No', '', 'Cianuro', 1),
(337, 'Ferroaleaciones Ferro-silicio cromo', '0', 'Ferroaleaciones', 'No', 'No', '', 'Cianuro', 1),
(338, 'Ferroaleaciones Ferro-silicio Manganeso', '0', 'Ferroaleaciones', 'No', 'No', '', 'Cianuro', 1),
(339, 'Ferroaleaciones Ferro-Cromo refinado', '0', 'Ferroaleaciones', 'No', 'No', '', 'Cianuro', 1),
(340, 'Refinacion de petroleo Calderas y hornos', '0', 'Refinacion de p', 'No', 'No', '', 'Cianuro', 1),
(341, 'Refinacion de petroleo Regeneracion de las un', '0', 'Refinacion de p', 'No', 'No', '', 'Cianuro', 1),
(342, 'Fabricacion de sal', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(343, 'Fabricacion de pasta de papel Pasta al bisulf', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(344, 'Fabricacion de pasta de papel Pasta al sulfat', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(345, 'Fabricacion de productos de molinerias', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(346, 'Fabricacion de objetos de barro, loza o porce', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(347, 'Fabricacion o transformacion de cloruro de po', '0', 'Fabricacion o t', 'No', 'No', '', 'Cianuro', 1),
(348, 'Fabricacion de maderas laminada y materiales ', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(349, 'Obtencion de plomo Plantas pequeñas y mediana', '0', 'Obtencion de pl', 'No', 'No', '', 'Cianuro', 1),
(350, 'Obtencion de plomo Plantas grandes', '0', 'Obtencion de pl', 'No', 'No', '', 'Cianuro', 1),
(351, 'Valores no superiores a 2 en periodos de 2 mi', '0', 'Centrales termi', 'No', 'No', '', 'Cianuro', 1),
(352, 'Fabricacion de productos de hormigon', '0', 'productos de ho', 'No', 'No', '', 'Cianuro', 1),
(353, 'Fabricas de cemento - Hornos', '0', 'Fabricas de cem', 'No', 'No', '', 'Cianuro', 1),
(354, 'Fabricas de cemento - Enfriadores', '0', 'Fabricas de cem', 'No', 'No', '', 'Cianuro', 1),
(355, 'Fabricas de cemento - Trituradoras, molinos, ', '0', 'Fabricas de cem', 'No', 'No', '', 'Cianuro', 1),
(356, 'Ceramicas', '0', 'Ceramicas', 'No', 'No', '', 'Cianuro', 1),
(357, 'Vidrios y fibras minerales', '0', 'Vidrios y fibra', 'No', 'No', '', 'Cianuro', 1),
(358, 'Fabricacion de viscosa y otros productos simi', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(359, 'Fabricacion de antimonio <2500 l/s', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(360, 'Fabricacion de antimonio >2500 l/s', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(361, 'Fabricacion de arsenico <2500 l/s', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(362, 'Fabricacion de arsenico >2500 l/s', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(363, 'Actividades que utilizan solventes organicos ', '0', 'solventes organ', 'No', 'No', '', 'Cianuro', 1),
(364, 'Incineradores de residuos solidos', '0', 'Incineradores d', 'No', 'No', '', 'Cianuro', 1),
(365, 'Hornos de recalentamiento y tratamientos term', '0', 'Hornos de recal', 'No', 'No', '', 'Cianuro', 1),
(366, 'Refinerias de petroleo', '0', 'Refinerias de p', 'No', 'No', '', 'Cianuro', 1),
(367, 'Plantas de aglomerados asfalticos', '0', 'Plantas de aglo', 'No', 'No', '', 'Cianuro', 1),
(368, 'Fabricacion de productos a base de asbesto', '0', 'Fabricacion de ', 'No', 'No', '', 'Cianuro', 1),
(369, 'Dioxido de azufre', '0', 'Dioxido de azuf', 'No', 'No', '', 'Cianuro', 1),
(370, 'Particulas totales suspendidas', '0', 'Particulas tota', 'No', 'No', '', 'Cianuro', 1),
(371, 'Mnoxido de carbono', '0', 'Mnoxido de carb', 'No', 'No', '', 'Cianuro', 1),
(372, 'Dioxido de nitrogeno', '0', 'Dioxido de nitr', 'No', 'No', '', 'Cianuro', 1),
(373, 'Oxidantes totales expresados como ozono', '0', 'Oxidantes total', 'No', 'No', '', 'Cianuro', 1),
(374, 'Sulfuro de hidrogeno', '0', 'Sulfuro de hidr', 'No', 'No', '', 'Cianuro', 1),
(375, 'Plomo en particulas suspendidas', '0', 'Plomo en partic', 'No', 'No', '', 'Cianuro', 1),
(376, 'Fluoruro de hidrogeno', '0', 'Fluoruro de hid', 'No', 'No', '', 'Cianuro', 1),
(377, 'Fluoruros', '0', 'Fluoruros', 'No', 'No', '', 'Cianuro', 1),
(378, 'Cloruro de hidrogeno', '0', 'Cloruro de hidr', 'No', 'No', '', 'Cianuro', 1),
(379, 'Cloruros', '0', 'Cloruros', 'No', 'No', '', 'Cianuro', 1),
(380, 'Monoxido de carbono', '0', 'Monoxido de car', 'No', 'No', '', 'Cianuro', 1),
(381, 'Velocidad', '0', 'Velocidad', 'No', 'No', '', 'Cianuro', 1),
(382, 'Flujo volumetrico', '0', 'Flujo volumetri', 'No', 'No', '', 'Cianuro', 1),
(383, 'Cloruro', '0', 'Cloruro', 'No', 'No', '4500CL-D', 'Cianuro', 1),
(384, 'Sulfato', '0', 'Sulfato', 'No', 'No', '4500CL-D', 'Cianuro', 1),
(385, 'Humedad relativa', '0', 'Humedad relativ', 'No', 'No', '', 'Cianuro', 1),
(386, 'Hongos y levaduras', '0', 'Hongos y levadu', 'No', 'No', '', 'Cianuro', 1),
(387, 'Silicion', '0', 'Silicio', 'No', 'No', 'EPA 6010', 'Cianuro', 1),
(388, 'Color', '0', 'Colr', 'No', 'No', 'ASTM D-1209', 'Cianuro', 1),
(389, 'Cromo', '0', 'Cromo', 'No', 'No', 'TMESW-7190', 'Cianuro', 1),
(390, 'Etil Benceno', '0', 'Etil Benceno', 'No', 'No', 'EPA 3810', 'Cianuro', 1),
(391, 'Hexacloro etano', '0', 'Hexacloro etano', 'No', 'No', '3810', 'Cianuro', 1),
(392, 'Metoxiclor', '0', 'Metoxiclor', 'No', 'No', '8080', 'Cianuro', 1),
(393, 'Cloruro de metileno', '0', 'Cloruro de meti', 'No', 'No', '8010', 'Cianuro', 1),
(394, 'Otros', '0', 'Otros', 'No', 'No', '---', 'Cianuro', 1),
(395, 'Aluminio Intercambiable', '0', 'Aluminio Interc', 'No', 'No', 'SSSA  Method18', 'Cianuro', 1),
(396, 'Xileno (Meta, Orto y Para)', '0', 'Xileno (Meta, O', 'No', 'No', '3810', 'Cianuro', 1),
(397, '1,2-Dicloroetano', '0', '1,2-Dicloroetan', 'No', 'No', '8010', 'Cianuro', 1),
(398, '1,1,1,2-Tetracloroetano', '0', '1,1,1,2-Tetracl', 'No', 'No', '8010', 'Cianuro', 1),
(399, '1,1,2,2-Tetracloroetano', '0', '1,1,2,2-Tetracl', 'No', 'No', '8010', 'Cianuro', 1),
(400, '1,1,2-Tricloroetano', '0', '1,1,2-Tricloroe', 'No', 'No', '8010', 'Cianuro', 1),
(401, 'Indeno 1,2,3-cd Pireno', '0', 'Indeno 1,2,3-cd', 'No', 'No', '3630', 'Cianuro', 1),
(402, 'b-BHC-Lindano e Isómeros', '0', 'b-BHC-Lindano e', 'No', 'No', '8080', 'Cianuro', 1),
(403, 'Heptaclor Epóxido', '0', 'Heptaclor Epóxi', 'No', 'No', '8080', 'Cianuro', 1),
(404, 'Densidad Relativa a 15,6 ºC', '0', 'Densidad Relati', 'No', 'No', '---', 'Cianuro', 1),
(405, 'Cloro Residual ', '0', 'ClR', 'Si', 'Si', 'NIN', 'Cloruros', 1),
(406, 'Fluoruro entre 10.0-14.0 C', '0', 'Flo', 'Si', 'Si', '8000', 'Fluoruro', 1),
(407, 'Fluoruro entre 14.0-17.6 C', '0', 'Flo', 'Si', 'Si', '8000', 'Fluoruro', 1),
(408, 'Fluoruro entre 17.7-21.4 C', '0', 'Flo', 'Si', 'Si', '8000', 'Fluoruro', 1),
(409, 'Fluoruro entre 21.5-26.2 C', '0', 'Flo', 'Si', 'Si', '8000', 'Fluoruro', 1),
(410, 'Fluoruro entre 26.3-32.6 C', '0', 'Flo', 'Si', 'Si', '8000', 'Fluoruro', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `email`, `encargado`, `nRif`, `cRif`, `siglas`, `contador`) VALUES
(1, 'Magdiel', 'mi casa', 'magdiel@magdiel.com', 'yo', '17905247', 'j', 'MAG', 0),
(2, 'asdfg', 'asdfg', 'sdfg@dfghs.com', 'sdfg', '546364', 'g', 'tfg', 1);

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
  `tipo` enum('Administrativo','Muestras','Parametros','Prestaciones') NOT NULL,
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
(4, '3219 - Lago de Valencia', '5305', '1999-02-01'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `serial`, `modelo`) VALUES
(1, 'Sonómetro', '555-55-5', '555-55-5');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

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
  `liminf` float DEFAULT NULL,
  `limsup` float DEFAULT NULL,
  `existente` enum('Si','No') NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  `SubTipo_id` tinyint(3) unsigned NOT NULL,
  `Caracterizacion_id` smallint(5) unsigned NOT NULL,
  `Rama_id` int(10) unsigned NOT NULL DEFAULT '66',
  PRIMARY KEY (`id`),
  KEY `fk_Limites_Departamento1_idx` (`Departamento_id`),
  KEY `fk_Limites_Decreto1_idx` (`Decreto_id`),
  KEY `fk_Limites_Tipo1_idx` (`Tipo_id`),
  KEY `fk_Limites_SubTipo1_idx` (`SubTipo_id`),
  KEY `fk_Limites_Caracterizacion1_idx` (`Caracterizacion_id`),
  KEY `fk_Limites_Rama1_idx` (`Rama_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1170 ;

--
-- Volcado de datos para la tabla `limites`
--

INSERT INTO `limites` (`id`, `liminf`, `limsup`, `existente`, `Departamento_id`, `Decreto_id`, `Tipo_id`, `SubTipo_id`, `Caracterizacion_id`, `Rama_id`) VALUES
(1, 0, 150, 'Si', 4, 7, 21, 12, 354, 66),
(2, 0, 100, 'Si', 4, 7, 21, 21, 345, 66),
(3, 0, 150, 'Si', 4, 7, 21, 21, 346, 66),
(4, 0, 120, 'Si', 4, 7, 21, 12, 347, 66),
(5, 0, 150, 'Si', 4, 7, 21, 12, 348, 66),
(6, 0, 100, 'Si', 4, 7, 21, 12, 349, 66),
(7, 0, 120, 'Si', 4, 7, 21, 12, 350, 66),
(8, 0, 250, 'Si', 4, 7, 21, 12, 351, 66),
(9, 0, 120, 'Si', 4, 7, 21, 12, 352, 66),
(10, 0, 250, 'Si', 4, 7, 21, 12, 353, 66),
(11, 0, 50, 'Si', 4, 7, 21, 12, 362, 66),
(12, 0, 3.5, 'Si', 4, 7, 21, 12, 355, 66),
(13, 0, 100, 'Si', 4, 7, 21, 12, 356, 66),
(14, 0, 150, 'Si', 4, 7, 21, 12, 357, 66),
(15, 0, 300, 'Si', 4, 7, 21, 12, 358, 66),
(16, 0, 300, 'Si', 4, 7, 21, 12, 359, 66),
(17, 0, 50, 'Si', 4, 7, 21, 12, 360, 66),
(18, 0, 100, 'Si', 4, 7, 21, 12, 361, 66),
(19, 0, 120, 'Si', 4, 7, 21, 12, 363, 66),
(20, 35, 38, 'Si', 1, 3, 1, 1, 17, 66),
(21, 6, 9, 'Si', 1, 3, 1, 1, 18, 66),
(22, 20, 1000000, 'Si', 1, 3, 1, 1, 19, 66),
(23, 20, 10000000, 'Si', 1, 3, 1, 1, 20, 66),
(24, 0.000001, 1000000000, 'Si', 1, 3, 1, 1, 21, 66),
(25, 2, 1000000, 'Si', 1, 3, 1, 1, 22, 66),
(27, 1, 100000000, 'Si', 1, 3, 1, 1, 23, 66),
(28, 6.35, 0, 'Si', 2, 6, 19, 2, 154, 66),
(29, 0, 4, 'Si', 1, 3, 1, 1, 42, 66),
(30, 6, 8.5, 'Si', 1, 3, 1, 1, 32, 66),
(31, 0, 50, 'Si', 1, 3, 1, 1, 11, 66),
(32, 0, 25, 'Si', 1, 3, 1, 1, 41, 66),
(33, 0, 1.7, 'Si', 1, 3, 1, 1, 18, 66),
(34, 0, 2000, 'Si', 1, 3, 1, 1, 44, 66),
(35, 4, 0, 'Si', 1, 3, 1, 2, 42, 66),
(36, 6, 8.5, 'Si', 1, 3, 1, 2, 32, 66),
(37, 0, 150, 'Si', 1, 3, 1, 1, 11, 66),
(38, 0, 250, 'Si', 1, 3, 1, 2, 41, 66),
(39, 0, 1.7, 'Si', 1, 3, 1, 2, 18, 66),
(40, 0, 10000, 'Si', 1, 3, 1, 2, 44, 66),
(41, 0, 0.3, 'Si', 1, 3, 1, 1, 1, 66),
(42, 0, 0.3, 'Si', 1, 3, 1, 2, 1, 66),
(43, 0, 0.2, 'Si', 1, 3, 1, 1, 49, 66),
(44, 0, 0.2, 'Si', 1, 3, 1, 2, 49, 66),
(45, 0, 0.05, 'Si', 1, 3, 1, 1, 50, 66),
(46, 0, 0.05, 'Si', 1, 3, 1, 2, 50, 66),
(47, 0, 1, 'Si', 1, 3, 1, 1, 51, 66),
(48, 0, 1, 'Si', 1, 3, 1, 2, 51, 66),
(49, 0, 0.01, 'Si', 1, 3, 1, 1, 52, 66),
(50, 0, 0.01, 'Si', 1, 3, 1, 2, 52, 66),
(51, 0, 0.1, 'Si', 1, 3, 1, 1, 6, 66),
(52, 0, 0.1, 'Si', 1, 3, 1, 2, 6, 66),
(53, 0, 600, 'Si', 1, 3, 1, 1, 8, 66),
(54, 0, 600, 'Si', 1, 3, 1, 2, 8, 66),
(55, 0, 1, 'Si', 1, 3, 1, 1, 53, 66),
(56, 0, 1, 'Si', 1, 3, 1, 2, 53, 66),
(57, 0, 0.05, 'Si', 1, 3, 1, 1, 54, 66),
(58, 0, 0.05, 'Si', 1, 3, 1, 2, 54, 66),
(59, 0, 1, 'Si', 1, 3, 1, 1, 14, 66),
(60, 0, 1, 'Si', 1, 3, 1, 2, 14, 66),
(61, 0, 1, 'Si', 1, 3, 1, 1, 55, 66),
(62, 0, 1, 'Si', 1, 3, 1, 2, 55, 66),
(63, 0, 500, 'Si', 1, 3, 1, 1, 56, 66),
(64, 0, 500, 'Si', 1, 3, 1, 2, 56, 66),
(65, 0, 0.15, 'Si', 1, 3, 1, 1, 57, 66),
(66, 0, 0.15, 'Si', 1, 3, 1, 2, 57, 66),
(67, 0, 0.002, 'Si', 1, 3, 1, 1, 17, 66),
(68, 0, 0.002, 'Si', 1, 3, 1, 2, 17, 66),
(69, 0, 1, 'Si', 1, 3, 1, 1, 58, 66),
(70, 0, 1, 'Si', 1, 3, 1, 2, 58, 66),
(71, 0, 0.1, 'Si', 1, 3, 1, 1, 59, 66),
(72, 0, 0.1, 'Si', 1, 3, 1, 2, 59, 66),
(73, 0, 0.01, 'Si', 1, 3, 1, 1, 60, 66),
(74, 0, 0.01, 'Si', 1, 3, 1, 2, 60, 66),
(75, 0, 10, 'Si', 1, 3, 1, 1, 104, 66),
(76, 0, 10, 'Si', 1, 3, 1, 2, 104, 66),
(77, 0, 0.05, 'Si', 1, 3, 1, 1, 61, 66),
(78, 0, 0.05, 'Si', 1, 3, 1, 2, 61, 66),
(79, 0, 0.05, 'Si', 1, 3, 1, 1, 62, 66),
(80, 0, 0.05, 'Si', 1, 3, 1, 2, 62, 66),
(81, 0, 0.01, 'Si', 1, 3, 1, 1, 63, 66),
(82, 0, 0.01, 'Si', 1, 3, 1, 2, 63, 66),
(83, 0, 200, 'Si', 1, 3, 1, 1, 64, 66),
(84, 0, 200, 'Si', 1, 3, 1, 2, 64, 66),
(85, 0, 1500, 'Si', 1, 3, 1, 1, 65, 66),
(86, 0, 1500, 'Si', 1, 3, 1, 2, 65, 66),
(87, 0, 400, 'Si', 1, 3, 1, 1, 38, 66),
(88, 0, 400, 'Si', 1, 3, 1, 2, 38, 66),
(89, 0, 5, 'Si', 1, 3, 1, 1, 66, 66),
(90, 0, 5, 'Si', 1, 3, 1, 2, 66, 66),
(91, 0, 0.1, 'Si', 1, 3, 1, 1, 67, 66),
(92, 0, 0.1, 'Si', 1, 3, 1, 2, 67, 66),
(93, 0, 0.2, 'Si', 1, 3, 1, 1, 68, 66),
(94, 0, 0.2, 'Si', 1, 3, 1, 2, 68, 66),
(95, 0, 0.1, 'Si', 1, 3, 1, 1, 69, 66),
(96, 0, 0.1, 'Si', 1, 3, 1, 1, 69, 66),
(97, 0, 1, 'Si', 1, 3, 1, 1, 70, 66),
(98, 0, 1, 'Si', 1, 3, 1, 2, 70, 66),
(99, 0, 4, 'Si', 1, 3, 1, 3, 42, 66),
(100, 3.8, 10.5, 'Si', 1, 3, 1, 3, 32, 66),
(101, 0, 150, 'Si', 1, 3, 1, 3, 11, 66),
(102, 0, 250, 'Si', 1, 3, 1, 3, 41, 66),
(104, 0, 10000, 'Si', 1, 3, 1, 3, 44, 66),
(105, 0, 0.3, 'Si', 1, 3, 1, 3, 1, 66),
(106, 0, 0.2, 'Si', 1, 3, 1, 3, 49, 66),
(107, 0, 0.05, 'Si', 1, 3, 1, 3, 50, 66),
(108, 0, 1, 'Si', 1, 3, 1, 3, 51, 66),
(109, 0, 0.01, 'Si', 1, 3, 1, 3, 52, 66),
(110, 0, 0.1, 'Si', 1, 3, 1, 3, 6, 66),
(111, 0, 600, 'Si', 1, 3, 1, 3, 8, 66),
(112, 0, 1000, 'Si', 1, 3, 1, 4, 44, 66),
(113, 0, 100, 'Si', 1, 3, 1, 4, 45, 66),
(114, 0, 100, 'Si', 1, 3, 1, 5, 46, 66),
(115, 0, 1000, 'Si', 1, 3, 1, 5, 47, 66),
(116, 0, 1, 'Si', 1, 3, 1, 4, 99, 66),
(117, 0, 0.05, 'Si', 1, 3, 1, 4, 50, 66),
(118, 0, 1, 'Si', 1, 3, 1, 4, 51, 66),
(119, 0, 0.75, 'Si', 1, 3, 1, 4, 73, 66),
(120, 0, 0.005, 'Si', 1, 3, 1, 4, 52, 66),
(121, 0, 0.2, 'Si', 1, 3, 1, 4, 6, 66),
(122, 0, 0.2, 'Si', 1, 3, 1, 4, 53, 66),
(123, 0, 0.05, 'Si', 1, 3, 1, 4, 54, 66),
(124, 0, 1, 'Si', 1, 3, 1, 4, 58, 66),
(125, 0, 5, 'Si', 1, 3, 1, 4, 76, 66),
(126, 0, 0.5, 'Si', 1, 3, 1, 4, 59, 66),
(127, 0, 0.01, 'Si', 1, 3, 1, 4, 60, 66),
(128, 0, 0.005, 'Si', 1, 3, 1, 4, 78, 66),
(129, 0, 0.5, 'Si', 1, 3, 1, 4, 108, 66),
(130, 0, 0.05, 'Si', 1, 3, 1, 4, 61, 66),
(131, 0, 0.05, 'Si', 1, 3, 1, 4, 62, 66),
(132, 0, 0.01, 'Si', 1, 3, 1, 4, 63, 66),
(133, 0, 3000, 'Si', 1, 3, 1, 4, 65, 66),
(134, 0, 0, 'Si', 1, 3, 1, 4, 82, 66),
(135, 0, 10, 'Si', 1, 3, 1, 4, 83, 66),
(136, 0, 5, 'Si', 1, 3, 1, 4, 66, 66),
(137, 0, 0.1, 'Si', 1, 3, 1, 4, 67, 66),
(138, 0, 0.2, 'Si', 1, 3, 1, 4, 68, 66),
(139, 0, 0.1, 'Si', 1, 3, 1, 4, 69, 66),
(140, 0, 1, 'Si', 1, 3, 1, 4, 70, 66),
(141, 0, 1, 'Si', 1, 3, 1, 5, 99, 66),
(142, 0, 0.05, 'Si', 1, 3, 1, 5, 50, 66),
(143, 0, 1, 'Si', 1, 3, 1, 5, 51, 66),
(144, 0, 0.75, 'Si', 1, 3, 1, 5, 73, 66),
(145, 0, 0.005, 'Si', 1, 3, 1, 5, 52, 66),
(146, 0, 0.2, 'Si', 1, 3, 1, 5, 6, 66),
(147, 0, 0.2, 'Si', 1, 3, 1, 5, 53, 66),
(148, 0, 0.05, 'Si', 1, 3, 1, 5, 54, 66),
(149, 0, 1, 'Si', 1, 3, 1, 5, 58, 66),
(150, 0, 5, 'Si', 1, 3, 1, 5, 76, 66),
(151, 0, 0.5, 'Si', 1, 3, 1, 5, 59, 66),
(152, 0, 0.01, 'Si', 1, 3, 1, 5, 60, 66),
(153, 0, 0.005, 'Si', 1, 3, 1, 5, 78, 66),
(154, 0, 0.5, 'Si', 1, 3, 1, 5, 108, 66),
(155, 0, 0.05, 'Si', 1, 3, 1, 5, 61, 66),
(156, 0, 0.05, 'Si', 1, 3, 1, 5, 62, 66),
(157, 0, 0.01, 'Si', 1, 3, 1, 5, 63, 66),
(158, 0, 3000, 'Si', 1, 3, 1, 5, 65, 66),
(159, 0, 0, 'Si', 1, 3, 1, 5, 82, 66),
(160, 0, 10, 'Si', 1, 3, 1, 5, 83, 66),
(161, 0, 5, 'Si', 1, 3, 1, 5, 66, 66),
(162, 0, 0.1, 'Si', 1, 3, 1, 5, 67, 66),
(163, 0, 0.2, 'Si', 1, 3, 1, 5, 68, 66),
(164, 0, 0.1, 'Si', 1, 3, 1, 5, 69, 66),
(165, 0, 1, 'Si', 1, 3, 1, 5, 70, 66),
(166, 5, 0, 'Si', 1, 3, 1, 6, 42, 66),
(167, 6.5, 8.5, 'Si', 1, 3, 1, 6, 32, 66),
(168, 0, 0.3, 'Si', 1, 3, 1, 6, 1, 66),
(169, 0, 1, 'Si', 1, 3, 1, 6, 84, 66),
(170, 0, 0.3, 'Si', 1, 3, 1, 6, 85, 66),
(171, 0, 0, 'Si', 1, 3, 1, 6, 86, 66),
(172, 0, 0.002, 'Si', 1, 3, 1, 6, 88, 66),
(173, 0, 0.1, 'Si', 1, 3, 1, 6, 67, 66),
(174, 0, 0.2, 'Si', 1, 3, 1, 6, 68, 66),
(175, 0, 70, 'Si', 1, 3, 1, 6, 44, 66),
(176, 0, 0.1, 'Si', 1, 3, 1, 6, 69, 66),
(177, 0, 1, 'Si', 1, 3, 1, 6, 70, 66),
(178, 4, 0, 'Si', 1, 4, 7, 21, 42, 66),
(179, 6, 8.5, 'Si', 1, 4, 7, 21, 32, 66),
(180, 0, 50, 'Si', 1, 4, 7, 21, 11, 66),
(181, 0, 25, 'Si', 1, 4, 7, 21, 41, 66),
(182, 0, 1.7, 'Si', 1, 4, 7, 21, 18, 66),
(183, 0, 2000, 'Si', 1, 4, 7, 21, 44, 66),
(184, 0, 12, 'Si', 1, 4, 7, 21, 144, 66),
(185, 2, 0, 'Si', 1, 4, 7, 21, 145, 66),
(186, 4, 0, 'Si', 1, 4, 7, 22, 42, 66),
(187, 6, 8.5, 'Si', 1, 4, 7, 22, 32, 66),
(188, 0, 150, 'Si', 1, 4, 7, 22, 11, 66),
(189, 0, 250, 'Si', 1, 4, 7, 22, 41, 66),
(190, 0, 1.7, 'Si', 1, 4, 7, 22, 18, 66),
(191, 0, 10000, 'Si', 1, 4, 7, 22, 44, 66),
(192, 0, 20, 'Si', 1, 2, 15, 25, 1, 66),
(193, 0, 20, 'Si', 1, 2, 15, 25, 95, 66),
(194, 0, 20, 'Si', 1, 2, 15, 25, 96, 66),
(195, 0, 0, 'Si', 1, 2, 15, 25, 97, 66),
(196, 0, 2, 'Si', 1, 2, 15, 25, 98, 66),
(197, 0, 5, 'Si', 1, 2, 15, 25, 99, 66),
(198, 0, 0.5, 'Si', 1, 2, 15, 25, 50, 66),
(199, 0, 5, 'Si', 1, 2, 15, 25, 51, 66),
(200, 0, 5, 'Si', 1, 2, 15, 25, 73, 66),
(201, 0, 0.2, 'Si', 1, 5, 16, 25, 52, 66),
(202, 0, 0.2, 'Si', 1, 2, 15, 25, 6, 66),
(203, 0, 1000, 'Si', 1, 2, 15, 25, 8, 66),
(204, 0, 0.5, 'Si', 1, 2, 15, 25, 100, 66),
(205, 0, 1, 'Si', 1, 2, 15, 25, 53, 66),
(206, 0, 2, 'Si', 1, 2, 15, 25, 54, 66),
(207, 0, 2, 'Si', 1, 2, 15, 25, 14, 66),
(208, 0, 2, 'Si', 1, 2, 15, 25, 55, 66),
(209, 0, 0, 'Si', 1, 3, 1, 25, 91, 66),
(210, 0, 5, 'Si', 1, 2, 15, 25, 101, 66),
(211, 0, 0.5, 'Si', 1, 2, 15, 25, 17, 66),
(212, 0, 5, 'Si', 1, 2, 15, 25, 18, 66),
(213, 0, 10, 'Si', 1, 2, 15, 25, 102, 66),
(214, 0, 10, 'Si', 1, 2, 15, 25, 58, 66),
(215, 0, 2, 'Si', 1, 2, 15, 25, 59, 66),
(216, 0, 0.01, 'Si', 1, 2, 15, 25, 60, 66),
(217, 0, 40, 'Si', 1, 2, 15, 25, 103, 66),
(218, 0, 10, 'Si', 1, 2, 15, 25, 104, 66),
(219, 6, 9, 'Si', 1, 2, 15, 25, 32, 66),
(220, 0, 0.1, 'Si', 1, 2, 15, 25, 61, 66),
(221, 0, 0.5, 'Si', 1, 2, 15, 25, 62, 66),
(222, 0, 0.05, 'Si', 1, 2, 15, 25, 63, 66),
(223, 0, 0, 'Si', 1, 2, 15, 25, 82, 66),
(224, 0, 1, 'Si', 1, 2, 15, 25, 105, 66),
(225, 0, 1000, 'Si', 1, 2, 15, 25, 38, 66),
(226, 0, 2, 'Si', 1, 2, 15, 25, 39, 66),
(227, 0, 0.5, 'Si', 1, 2, 15, 25, 107, 66),
(228, 0, 5, 'Si', 1, 2, 15, 25, 66, 66),
(229, 0, 0.25, 'Si', 1, 2, 15, 25, 67, 66),
(230, 0, 0.05, 'Si', 1, 2, 15, 25, 68, 66),
(231, 0, 0.1, 'Si', 1, 2, 15, 25, 69, 66),
(232, 0, 1, 'Si', 1, 2, 15, 25, 70, 66),
(233, 0, 20, 'Si', 1, 5, 16, 19, 1, 66),
(234, 0, 20, 'Si', 1, 5, 16, 19, 95, 66),
(235, 0, 150, 'Si', 1, 5, 16, 19, 96, 66),
(236, 0, 0, 'Si', 1, 5, 16, 19, 97, 66),
(237, 0, 5, 'Si', 1, 5, 16, 19, 99, 66),
(238, 0, 0.5, 'Si', 1, 5, 16, 19, 50, 66),
(239, 0, 5, 'Si', 1, 5, 16, 19, 51, 66),
(240, 0, 0.2, 'Si', 1, 5, 16, 19, 52, 66),
(241, 0, 0.2, 'Si', 1, 5, 16, 19, 6, 66),
(242, 0, 0.5, 'Si', 1, 5, 16, 19, 100, 66),
(243, 0, 1, 'Si', 1, 5, 16, 19, 53, 66),
(244, 0, 2, 'Si', 1, 5, 16, 19, 54, 66),
(245, 0, 8, 'Si', 1, 5, 16, 19, 14, 66),
(246, 0, 8, 'Si', 1, 5, 16, 19, 55, 66),
(247, 0, 0.5, 'Si', 1, 5, 16, 19, 17, 66),
(248, 0, 10, 'Si', 1, 5, 16, 19, 102, 66),
(249, 0, 25, 'Si', 1, 5, 16, 19, 58, 66),
(250, 0, 10, 'Si', 1, 5, 16, 19, 59, 66),
(251, 0, 0.01, 'Si', 1, 5, 16, 19, 60, 66),
(252, 0, 2, 'Si', 1, 5, 16, 19, 108, 66),
(253, 0, 40, 'Si', 1, 5, 16, 19, 103, 66),
(254, 1000, 0, 'Si', 1, 3, 1, 7, 44, 66),
(255, 200, 0, 'Si', 1, 3, 1, 7, 45, 66),
(256, 0, 0, 'Si', 1, 3, 1, 7, 89, 66),
(257, 5000, 0, 'Si', 1, 3, 1, 8, 44, 66),
(258, 1000, 0, 'Si', 1, 3, 1, 8, 45, 66),
(259, 0, 0, 'Si', 1, 3, 1, 8, 89, 66),
(260, 5, 0, 'Si', 1, 3, 1, 7, 42, 66),
(261, 6.5, 8.5, 'Si', 1, 3, 1, 7, 32, 66),
(262, 0, 0.3, 'Si', 1, 3, 1, 7, 1, 66),
(263, 0, 1, 'Si', 1, 3, 1, 7, 14, 66),
(264, 0, 33, 'Si', 1, 3, 1, 7, 90, 66),
(265, 0, 0, 'Si', 1, 3, 1, 7, 86, 66),
(266, 0, 0, 'Si', 1, 3, 1, 7, 87, 66),
(267, 0, 0.002, 'Si', 1, 3, 1, 7, 88, 66),
(268, 0, 0.1, 'Si', 1, 3, 1, 7, 67, 66),
(269, 0, 0.2, 'Si', 1, 3, 1, 7, 68, 66),
(270, 0, 0.1, 'Si', 1, 3, 1, 7, 69, 66),
(271, 0, 1, 'Si', 1, 3, 1, 7, 70, 66),
(272, 5, 0, 'Si', 1, 3, 1, 8, 42, 66),
(273, 6.5, 8.5, 'Si', 1, 3, 1, 8, 32, 66),
(274, 0, 0.3, 'Si', 1, 3, 1, 8, 1, 66),
(275, 0, 1, 'Si', 1, 3, 1, 8, 14, 66),
(276, 0, 33, 'Si', 1, 3, 1, 8, 90, 66),
(277, 0, 0, 'Si', 1, 3, 1, 8, 86, 66),
(278, 0, 0, 'Si', 1, 3, 1, 8, 87, 66),
(279, 0, 0.002, 'Si', 1, 3, 1, 8, 88, 66),
(280, 0, 0.1, 'Si', 1, 3, 1, 8, 67, 66),
(281, 0, 0.2, 'Si', 1, 3, 1, 8, 68, 66),
(282, 0, 0.1, 'Si', 1, 3, 1, 8, 69, 66),
(283, 0, 1, 'Si', 1, 3, 1, 8, 70, 66),
(284, 0, 0.002, 'Si', 1, 3, 1, 9, 17, 66),
(285, 0, 0, 'Si', 1, 3, 1, 9, 92, 66),
(286, 0, 0, 'Si', 1, 3, 1, 9, 91, 66),
(287, 0, 0, 'Si', 1, 3, 1, 9, 93, 66),
(288, 4, 0, 'Si', 1, 3, 1, 10, 42, 66),
(289, 0, 0, 'Si', 1, 3, 1, 10, 93, 66),
(290, 3, 0, 'Si', 1, 3, 1, 11, 42, 66),
(291, 0, 20, 'Si', 1, 3, 2, 12, 1, 66),
(292, 0, 20, 'Si', 1, 3, 2, 12, 95, 66),
(293, 0, 20, 'Si', 1, 3, 2, 12, 96, 66),
(294, 0, 0, 'Si', 1, 3, 2, 12, 97, 66),
(295, 0, 2, 'Si', 1, 3, 2, 12, 98, 66),
(296, 0, 5, 'Si', 1, 3, 2, 12, 99, 66),
(297, 0, 0.5, 'Si', 1, 3, 2, 12, 50, 66),
(298, 0, 5, 'Si', 1, 3, 2, 12, 51, 66),
(299, 0, 5, 'Si', 1, 3, 2, 12, 73, 66),
(300, 0, 0.2, 'Si', 1, 3, 2, 12, 52, 66),
(301, 0, 0.2, 'Si', 1, 3, 2, 12, 6, 66),
(302, 0, 1000, 'Si', 1, 3, 2, 12, 8, 66),
(303, 0, 0.5, 'Si', 1, 3, 2, 12, 100, 66),
(304, 0, 1, 'Si', 1, 3, 2, 12, 53, 66),
(305, 0, 500, 'Si', 1, 3, 2, 12, 11, 66),
(306, 0, 2, 'Si', 1, 3, 2, 12, 54, 66),
(307, 0, 60, 'Si', 1, 3, 2, 12, 5, 66),
(308, 0, 350, 'Si', 1, 3, 2, 12, 35, 66),
(309, 0, 2, 'Si', 1, 3, 2, 12, 14, 66),
(310, 0, 2, 'Si', 1, 3, 2, 12, 55, 66),
(311, 0, 0, 'Si', 1, 3, 2, 12, 91, 66),
(312, 0, 5, 'Si', 1, 3, 2, 12, 101, 66),
(313, 0, 0.5, 'Si', 1, 3, 2, 12, 17, 66),
(314, 0, 5, 'Si', 1, 3, 2, 12, 18, 66),
(315, 0, 10, 'Si', 1, 3, 2, 12, 102, 66),
(316, 0, 10, 'Si', 1, 3, 2, 12, 58, 66),
(317, 0, 2, 'Si', 1, 3, 2, 12, 59, 66),
(318, 0, 0.01, 'Si', 1, 3, 2, 12, 60, 66),
(319, 0, 40, 'Si', 1, 3, 2, 12, 103, 66),
(320, 0, 10, 'Si', 1, 3, 2, 12, 104, 66),
(321, 6, 9, 'Si', 1, 3, 2, 12, 32, 66),
(322, 0, 0.1, 'Si', 1, 3, 2, 12, 61, 66),
(323, 0, 0.5, 'Si', 1, 3, 2, 12, 62, 66),
(324, 0, 0.05, 'Si', 1, 3, 2, 12, 63, 66),
(325, 0, 0, 'Si', 1, 3, 2, 12, 82, 66),
(326, 0, 80, 'Si', 1, 3, 2, 12, 36, 66),
(327, 0, 1, 'Si', 1, 3, 2, 12, 105, 66),
(328, 0, 1000, 'Si', 1, 3, 2, 12, 38, 66),
(329, 0, 2, 'Si', 1, 3, 2, 12, 39, 66),
(330, 0, 0.5, 'Si', 1, 3, 2, 12, 107, 66),
(331, 0, 5, 'Si', 1, 3, 2, 12, 66, 66),
(332, 0, 0.25, 'Si', 1, 3, 2, 12, 67, 66),
(333, 0, 0.05, 'Si', 1, 3, 2, 12, 68, 66),
(334, 0, 0.1, 'Si', 1, 3, 2, 12, 69, 66),
(335, 0, 1, 'Si', 1, 3, 2, 12, 70, 66),
(336, 0, 10, 'Si', 1, 5, 16, 19, 104, 66),
(337, 6, 9, 'Si', 1, 5, 16, 19, 32, 66),
(338, 0, 0.1, 'Si', 1, 5, 16, 19, 61, 66),
(339, 0, 0.5, 'Si', 1, 5, 16, 19, 62, 66),
(340, 0, 0.2, 'Si', 1, 5, 16, 19, 63, 66),
(341, 0, 0, 'Si', 1, 5, 16, 19, 82, 66),
(342, 0, 400, 'Si', 1, 5, 16, 19, 38, 66),
(343, 0, 2, 'Si', 1, 5, 16, 19, 107, 66),
(344, 0, 40, 'Si', 1, 5, 16, 19, 109, 66),
(345, 0, 5, 'Si', 1, 5, 16, 19, 83, 66),
(346, 0, 10, 'Si', 1, 5, 16, 19, 66, 66),
(347, 0, 0.25, 'Si', 1, 5, 16, 19, 67, 66),
(348, 0, 0.05, 'Si', 1, 5, 16, 19, 68, 66),
(349, 0, 0.1, 'Si', 1, 5, 16, 19, 69, 66),
(350, 0, 1, 'Si', 1, 5, 16, 19, 70, 66),
(351, 0, 20, 'Si', 1, 3, 2, 13, 1, 66),
(352, 0, 20, 'Si', 1, 3, 2, 13, 95, 66),
(353, 0, 20, 'Si', 1, 3, 2, 13, 96, 66),
(354, 0, 0, 'Si', 1, 3, 2, 13, 97, 66),
(355, 0, 5, 'Si', 1, 3, 2, 13, 99, 66),
(356, 0, 0.5, 'Si', 1, 3, 2, 13, 50, 66),
(357, 0, 5, 'Si', 1, 3, 2, 13, 51, 66),
(358, 0, 0.2, 'Si', 1, 3, 2, 13, 52, 66),
(359, 0, 0.2, 'Si', 1, 3, 2, 13, 6, 66),
(360, 0, 0.5, 'Si', 1, 3, 2, 13, 100, 66),
(361, 0, 1, 'Si', 1, 3, 2, 13, 53, 66),
(362, 0, 500, 'Si', 1, 3, 2, 13, 11, 66),
(363, 0, 2, 'Si', 1, 3, 2, 13, 54, 66),
(364, 0, 60, 'Si', 1, 3, 2, 13, 5, 66),
(365, 0, 350, 'Si', 1, 3, 2, 13, 35, 66),
(366, 0, 2, 'Si', 1, 3, 2, 13, 14, 66),
(367, 0, 2, 'Si', 1, 3, 2, 13, 55, 66),
(368, 0, 0, 'Si', 1, 3, 2, 13, 91, 66),
(369, 0, 0.5, 'Si', 1, 3, 2, 13, 17, 66),
(370, 0, 5, 'Si', 1, 3, 2, 13, 18, 66),
(371, 0, 10, 'Si', 1, 3, 2, 13, 102, 66),
(372, 0, 0.01, 'Si', 1, 3, 2, 13, 60, 66),
(373, 0, 2, 'Si', 1, 3, 2, 13, 108, 66),
(374, 0, 40, 'Si', 1, 3, 2, 13, 103, 66),
(375, 6, 9, 'Si', 1, 3, 2, 13, 32, 66),
(376, 0, 0.1, 'Si', 1, 3, 2, 13, 61, 66),
(377, 0, 0.5, 'Si', 1, 3, 2, 13, 62, 66),
(378, 0, 0.2, 'Si', 1, 3, 2, 13, 63, 66),
(379, 0, 0, 'Si', 1, 3, 2, 13, 82, 66),
(380, 0, 2, 'Si', 1, 3, 2, 13, 107, 66),
(381, 0, 10, 'Si', 1, 3, 2, 13, 66, 66),
(382, 0, 0.25, 'Si', 1, 3, 2, 13, 67, 66),
(383, 0, 0.05, 'Si', 1, 3, 2, 13, 68, 66),
(384, 0, 0.1, 'Si', 1, 3, 2, 13, 69, 66),
(385, 0, 1, 'Si', 1, 3, 2, 13, 70, 66),
(386, 0, 20, 'Si', 1, 3, 2, 14, 1, 66),
(387, 4, 0, 'Si', 1, 2, 11, 18, 42, 66),
(388, 6, 8.5, 'Si', 1, 2, 11, 18, 32, 66),
(389, 0, 20, 'Si', 1, 3, 2, 14, 95, 66),
(390, 0, 150, 'Si', 1, 3, 2, 14, 96, 66),
(391, 0, 0, 'Si', 1, 3, 2, 14, 97, 66),
(392, 0, 50, 'Si', 1, 2, 11, 18, 11, 66),
(393, 0, 25, 'Si', 1, 2, 11, 18, 41, 66),
(394, 0, 5, 'Si', 1, 3, 2, 14, 99, 66),
(395, 0, 0.5, 'Si', 1, 3, 2, 14, 50, 66),
(396, 0, 5, 'Si', 1, 3, 2, 14, 51, 66),
(397, 0, 1.7, 'Si', 1, 2, 11, 18, 18, 66),
(398, 0, 2000, 'Si', 1, 2, 11, 18, 44, 66),
(399, 0, 0.3, 'Si', 1, 2, 11, 18, 1, 66),
(400, 0, 0.2, 'Si', 1, 3, 2, 14, 52, 66),
(401, 0, 0.2, 'Si', 1, 2, 11, 18, 49, 66),
(402, 0, 0.2, 'Si', 1, 3, 2, 14, 6, 66),
(403, 0, 0.5, 'Si', 1, 3, 2, 14, 100, 66),
(404, 0, 0.05, 'Si', 1, 2, 11, 18, 50, 66),
(405, 0, 1, 'Si', 1, 2, 11, 18, 51, 66),
(406, 0, 1, 'Si', 1, 3, 2, 14, 53, 66),
(407, 0, 0.01, 'Si', 1, 2, 11, 18, 52, 66),
(408, 0, 2, 'Si', 1, 3, 2, 14, 54, 66),
(409, 0, 0.1, 'Si', 1, 2, 11, 18, 6, 66),
(410, 0, 350, 'Si', 1, 3, 2, 14, 5, 66),
(411, 0, 600, 'Si', 1, 2, 11, 18, 8, 66),
(412, 0, 900, 'Si', 1, 3, 2, 14, 35, 66),
(413, 0, 1, 'Si', 1, 2, 11, 18, 53, 66),
(414, 0, 8, 'Si', 1, 3, 2, 14, 14, 66),
(415, 0, 8, 'Si', 1, 3, 2, 14, 55, 66),
(416, 0, 0.05, 'Si', 1, 2, 11, 18, 54, 66),
(417, 0, 0.5, 'Si', 1, 3, 2, 14, 17, 66),
(418, 0, 1, 'Si', 1, 2, 11, 18, 14, 66),
(419, 0, 10, 'Si', 1, 3, 2, 14, 102, 66),
(420, 0, 25, 'Si', 1, 3, 2, 14, 58, 66),
(421, 0, 1, 'Si', 1, 2, 11, 18, 55, 66),
(422, 0, 10, 'Si', 1, 3, 2, 14, 59, 66),
(423, 0, 500, 'Si', 1, 2, 11, 18, 56, 66),
(424, 0, 0.01, 'Si', 1, 3, 2, 14, 60, 66),
(425, 0, 2, 'Si', 1, 3, 2, 14, 108, 66),
(426, 0, 0.15, 'Si', 1, 2, 11, 18, 57, 66),
(427, 0, 0.002, 'Si', 1, 2, 11, 18, 17, 66),
(428, 0, 40, 'Si', 1, 3, 2, 14, 103, 66),
(429, 6, 9, 'Si', 1, 3, 2, 14, 32, 66),
(430, 0, 1, 'Si', 1, 2, 11, 18, 58, 66),
(431, 0, 0.1, 'Si', 1, 3, 2, 14, 61, 66),
(432, 0, 0.1, 'Si', 1, 2, 11, 18, 59, 66),
(433, 0, 0.5, 'Si', 1, 3, 2, 14, 62, 66),
(434, 0, 0.001, 'Si', 1, 2, 11, 18, 60, 66),
(435, 0, 0.2, 'Si', 1, 3, 2, 14, 63, 66),
(436, 0, 10, 'Si', 1, 2, 11, 18, 104, 66),
(437, 0, 0, 'Si', 1, 3, 2, 14, 82, 66),
(438, 0, 0.05, 'Si', 1, 2, 11, 18, 61, 66),
(439, 0, 400, 'Si', 1, 3, 2, 14, 36, 66),
(440, 0, 0.05, 'Si', 1, 2, 11, 18, 62, 66),
(441, 0, 0.01, 'Si', 1, 2, 11, 18, 63, 66),
(442, 0, 1600, 'Si', 1, 3, 2, 14, 37, 66),
(443, 0, 400, 'Si', 1, 3, 2, 14, 38, 66),
(444, 0, 200, 'Si', 1, 2, 11, 18, 64, 66),
(445, 0, 2, 'Si', 1, 3, 2, 14, 107, 66),
(446, 0, 1500, 'Si', 1, 2, 11, 18, 65, 66),
(447, 0, 40, 'Si', 1, 3, 2, 14, 109, 66),
(448, 0, 5, 'Si', 1, 3, 2, 14, 83, 66),
(449, 0, 400, 'Si', 1, 2, 11, 18, 38, 66),
(450, 0, 10, 'Si', 1, 3, 2, 14, 66, 66),
(451, 0, 5, 'Si', 1, 2, 11, 18, 66, 66),
(452, 0, 0.25, 'Si', 1, 3, 2, 14, 67, 66),
(453, 0, 0.05, 'Si', 1, 3, 2, 14, 68, 66),
(454, 0, 0.1, 'Si', 1, 3, 2, 14, 69, 66),
(455, 0, 0.1, 'Si', 1, 2, 11, 18, 67, 66),
(456, 0, 1, 'Si', 1, 3, 2, 14, 70, 66),
(457, 0, 0.2, 'Si', 1, 2, 11, 18, 68, 66),
(458, 0, 0.1, 'Si', 1, 2, 11, 18, 69, 66),
(459, 0, 1, 'Si', 1, 2, 11, 18, 70, 66),
(460, 4, 0, 'Si', 1, 2, 11, 14, 42, 66),
(461, 6, 8.5, 'Si', 1, 2, 11, 14, 32, 66),
(462, 0, 150, 'Si', 1, 2, 11, 14, 11, 66),
(463, 0, 250, 'Si', 1, 2, 11, 14, 41, 66),
(464, 0, 1.7, 'Si', 1, 2, 11, 14, 18, 66),
(465, 0, 15, 'Si', 1, 4, 7, 18, 11, 66),
(466, 0, 10000, 'Si', 1, 2, 11, 14, 44, 66),
(467, 0, 0.3, 'Si', 1, 2, 11, 14, 1, 66),
(468, 0, 5, 'Si', 1, 4, 7, 18, 41, 66),
(469, 0, 0.2, 'Si', 1, 2, 11, 14, 49, 66),
(470, 0, 0.05, 'Si', 1, 2, 11, 14, 50, 66),
(471, 0, 1000, 'Si', 1, 4, 7, 18, 65, 66),
(472, 0, 1, 'Si', 1, 2, 11, 14, 51, 66),
(473, 0, 500, 'Si', 1, 4, 7, 18, 119, 66),
(474, 0, 0.01, 'Si', 1, 2, 11, 14, 52, 66),
(475, 0, 0.1, 'Si', 1, 2, 11, 14, 6, 66),
(476, 0, 9, 'Si', 1, 4, 7, 18, 32, 66),
(477, 0, 600, 'Si', 1, 2, 11, 14, 8, 66),
(478, 0, 0.2, 'Si', 1, 4, 7, 18, 99, 66),
(479, 0, 1, 'Si', 1, 2, 11, 14, 53, 66),
(480, 0, 0.05, 'Si', 1, 2, 11, 14, 54, 66),
(481, 0, 300, 'Si', 1, 4, 7, 18, 8, 66),
(482, 0, 2, 'Si', 1, 4, 7, 18, 53, 66),
(483, 0, 0.3, 'Si', 1, 4, 7, 18, 58, 66),
(484, 0, 0.5, 'Si', 1, 4, 7, 18, 59, 66),
(485, 0, 1, 'Si', 1, 2, 11, 14, 14, 66),
(486, 0, 200, 'Si', 1, 4, 7, 18, 64, 66),
(487, 0, 500, 'Si', 1, 4, 7, 18, 38, 66),
(488, 0, 5, 'Si', 1, 4, 7, 18, 66, 66),
(489, 0, 0.01, 'Si', 1, 4, 7, 19, 50, 66),
(490, 0, 1, 'Si', 1, 2, 11, 14, 55, 66),
(491, 0, 0.7, 'Si', 1, 4, 7, 19, 51, 66),
(492, 0, 500, 'Si', 1, 2, 11, 14, 56, 66),
(493, 0, 0.3, 'Si', 1, 4, 7, 19, 73, 66),
(494, 0, 0.15, 'Si', 1, 2, 11, 14, 57, 66),
(495, 0, 20, 'Si', 1, 4, 7, 19, 53, 66),
(496, 0, 0.002, 'Si', 1, 2, 11, 14, 17, 66),
(497, 0, 0.003, 'Si', 1, 4, 7, 19, 52, 66),
(498, 0, 0.07, 'Si', 1, 4, 7, 19, 6, 66),
(499, 0, 1, 'Si', 1, 2, 11, 14, 58, 66),
(500, 0, 0.05, 'Si', 1, 4, 7, 19, 54, 66),
(501, 0, 0.1, 'Si', 1, 2, 11, 14, 59, 66),
(502, 0, 0.05, 'Si', 1, 4, 7, 19, 54, 66),
(503, 0, 0.001, 'Si', 1, 2, 11, 14, 60, 66),
(504, 0, 10, 'Si', 1, 2, 11, 14, 104, 66),
(505, 0, 0, 'Si', 1, 4, 7, 19, 18, 66),
(506, 0, 0.001, 'Si', 1, 4, 7, 19, 60, 66),
(507, 0, 0.05, 'Si', 1, 2, 11, 14, 61, 66),
(508, 0, 0.02, 'Si', 1, 4, 7, 19, 108, 66),
(509, 0, 0.05, 'Si', 1, 2, 11, 14, 62, 66),
(510, 0, 0.01, 'Si', 1, 2, 11, 14, 63, 66),
(511, 0, 45, 'Si', 1, 4, 7, 19, 27, 66),
(512, 0, 200, 'Si', 1, 2, 11, 14, 64, 66),
(513, 0, 10, 'Si', 1, 4, 7, 19, 121, 66),
(514, 0, 0.03, 'Si', 1, 4, 7, 19, 28, 66),
(515, 0, 1500, 'Si', 1, 2, 11, 14, 65, 66),
(516, 0, 400, 'Si', 1, 2, 11, 14, 38, 66),
(517, 0, 0.07, 'Si', 1, 4, 7, 19, 78, 66),
(518, 0, 5, 'Si', 1, 2, 11, 14, 66, 66),
(519, 0, 0.001, 'Si', 1, 4, 7, 19, 63, 66),
(520, 0, 0.05, 'Si', 1, 4, 7, 19, 61, 66),
(521, 0, 0.1, 'Si', 1, 2, 11, 14, 67, 66),
(522, 0, 1, 'Si', 1, 4, 7, 19, 110, 66),
(523, 0, 0.2, 'Si', 1, 2, 11, 14, 68, 66),
(524, 0, 0.1, 'Si', 1, 2, 11, 14, 69, 66),
(525, 0, 1, 'Si', 1, 2, 11, 14, 70, 66),
(526, 0, 100, 'Si', 1, 4, 7, 17, 122, 66),
(527, 0, 200, 'Si', 1, 4, 7, 17, 123, 66),
(528, 0, 100, 'Si', 1, 4, 7, 17, 124, 66),
(529, 0, 10, 'Si', 1, 4, 7, 17, 125, 66),
(530, 0, 700, 'Si', 1, 4, 7, 17, 126, 66),
(531, 0, 500, 'Si', 1, 4, 7, 17, 127, 66),
(532, 0, 0.03, 'Si', 1, 4, 7, 17, 128, 66),
(533, 0, 0.2, 'Si', 1, 4, 7, 17, 129, 66),
(534, 0, 2, 'Si', 1, 4, 7, 17, 130, 66),
(535, 0, 30, 'Si', 1, 4, 7, 17, 131, 66),
(536, 0, 0.03, 'Si', 1, 4, 7, 17, 132, 66),
(537, 0, 0.1, 'Si', 1, 4, 7, 17, 133, 66),
(538, 0, 1, 'Si', 1, 4, 7, 17, 134, 66),
(539, 0, 2, 'Si', 1, 4, 7, 17, 135, 66),
(540, 0, 20, 'Si', 1, 4, 7, 17, 136, 66),
(541, 0, 0.5, 'Si', 1, 4, 7, 17, 137, 66),
(542, 0, 0.7, 'Si', 1, 4, 7, 17, 138, 66),
(543, 0, 30, 'Si', 1, 4, 7, 17, 139, 66),
(544, 0, 30, 'Si', 1, 4, 7, 17, 140, 66),
(545, 0, 300, 'Si', 1, 4, 7, 17, 141, 66),
(546, 0, 9, 'Si', 1, 4, 7, 17, 142, 66),
(547, 0, 200, 'Si', 1, 4, 7, 17, 143, 66),
(548, 3, 0, 'Si', 1, 2, 11, 27, 42, 66),
(549, 0, 5000, 'Si', 1, 2, 11, 27, 44, 66),
(550, 0, 1000, 'Si', 1, 2, 11, 27, 45, 66),
(551, 0, 1, 'Si', 1, 2, 11, 27, 49, 66),
(552, 0, 0.05, 'Si', 1, 2, 11, 27, 50, 66),
(553, 0, 1, 'Si', 1, 2, 11, 27, 51, 66),
(554, 0, 0.75, 'Si', 1, 2, 11, 27, 73, 66),
(555, 0, 0.005, 'Si', 1, 2, 11, 27, 52, 66),
(556, 0, 0.2, 'Si', 1, 2, 11, 27, 6, 66),
(557, 0, 0.2, 'Si', 1, 2, 11, 27, 53, 66),
(558, 0, 0.05, 'Si', 1, 2, 11, 27, 54, 66),
(559, 0, 1, 'Si', 1, 2, 11, 27, 58, 66),
(560, 0, 5, 'Si', 1, 2, 11, 27, 76, 66),
(561, 0, 0.5, 'Si', 1, 2, 11, 27, 59, 66),
(562, 0, 0.01, 'Si', 1, 2, 11, 27, 60, 66),
(563, 0, 0.005, 'Si', 1, 2, 11, 27, 78, 66),
(564, 0, 0.5, 'Si', 1, 2, 11, 27, 108, 66),
(565, 0, 0.05, 'Si', 1, 2, 11, 27, 61, 66),
(566, 0, 0.05, 'Si', 1, 2, 11, 27, 62, 66),
(567, 0, 0.01, 'Si', 1, 2, 11, 27, 63, 66),
(568, 0, 3000, 'Si', 1, 2, 11, 27, 65, 66),
(569, 0, 0, 'Si', 1, 2, 11, 27, 82, 66),
(570, 0, 10, 'Si', 1, 2, 11, 27, 83, 66),
(571, 0, 5, 'Si', 1, 2, 11, 27, 66, 66),
(572, 0, 0.1, 'Si', 1, 2, 11, 27, 67, 66),
(573, 0, 0.2, 'Si', 1, 2, 11, 27, 68, 66),
(574, 0, 0.1, 'Si', 1, 2, 11, 27, 69, 66),
(575, 0, 1, 'Si', 1, 2, 11, 27, 70, 66),
(576, 0, 5000, 'Si', 1, 2, 11, 17, 44, 66),
(577, 0, 1000, 'Si', 1, 2, 11, 17, 45, 66),
(578, 0, 0, 'Si', 1, 2, 11, 17, 89, 66),
(579, 5, 0, 'Si', 1, 2, 11, 17, 42, 66),
(580, 6.5, 8.5, 'Si', 1, 2, 11, 17, 32, 66),
(581, 0, 0.3, 'Si', 1, 2, 11, 17, 1, 66),
(582, 0, 1, 'Si', 1, 2, 11, 17, 14, 66),
(583, 0, 0, 'Si', 1, 2, 11, 17, 86, 66),
(584, 0, 0, 'Si', 1, 2, 11, 17, 87, 66),
(585, 0, 0.3, 'Si', 1, 4, 7, 21, 1, 66),
(586, 0, 0.2, 'Si', 1, 4, 7, 21, 49, 66),
(587, 0, 0.05, 'Si', 1, 4, 7, 21, 50, 66),
(588, 0, 1, 'Si', 1, 4, 7, 21, 51, 66),
(589, 0, 0.01, 'Si', 1, 4, 7, 21, 52, 66),
(590, 0, 0.1, 'Si', 1, 4, 7, 21, 6, 66),
(591, 0, 600, 'Si', 1, 4, 7, 21, 8, 66),
(592, 0, 1, 'Si', 1, 4, 7, 21, 53, 66),
(593, 0, 0.05, 'Si', 1, 4, 7, 21, 54, 66),
(594, 0, 1, 'Si', 1, 4, 7, 21, 14, 66),
(595, 0, 1, 'Si', 1, 4, 7, 21, 55, 66),
(596, 0, 500, 'Si', 1, 4, 7, 21, 56, 66),
(597, 0, 0.15, 'Si', 1, 4, 7, 21, 57, 66),
(598, 0, 0.002, 'Si', 1, 4, 7, 21, 17, 66),
(599, 0, 1, 'Si', 1, 4, 7, 21, 58, 66),
(600, 0, 0.1, 'Si', 1, 4, 7, 21, 59, 66),
(601, 0, 0.001, 'Si', 1, 4, 7, 21, 60, 66),
(602, 0, 10, 'Si', 1, 4, 7, 21, 104, 66),
(603, 0, 0.05, 'Si', 1, 4, 7, 21, 61, 66),
(604, 0, 0.05, 'Si', 1, 4, 7, 21, 62, 66),
(605, 0, 0.01, 'Si', 1, 4, 7, 21, 63, 66),
(606, 0, 200, 'Si', 1, 4, 7, 21, 64, 66),
(607, 0, 1500, 'Si', 1, 4, 7, 21, 65, 66),
(608, 0, 400, 'Si', 1, 4, 7, 21, 38, 66),
(609, 0, 5, 'Si', 1, 4, 7, 21, 66, 66),
(610, 0, 0.1, 'Si', 1, 4, 7, 21, 67, 66),
(611, 0, 0.2, 'Si', 1, 4, 7, 21, 68, 66),
(612, 0, 0.1, 'Si', 1, 4, 7, 21, 69, 66),
(613, 0, 1, 'Si', 1, 4, 7, 21, 70, 66),
(614, 0, 0.3, 'Si', 1, 4, 7, 22, 1, 66),
(615, 0, 0.2, 'Si', 1, 4, 7, 22, 49, 66),
(616, 0, 0.05, 'Si', 1, 4, 7, 22, 50, 66),
(617, 0, 1, 'Si', 1, 4, 7, 22, 51, 66),
(618, 0, 0.01, 'Si', 1, 4, 7, 22, 52, 66),
(619, 0, 0.1, 'Si', 1, 4, 7, 22, 6, 66),
(620, 0, 600, 'Si', 1, 4, 7, 22, 8, 66),
(621, 0, 1, 'Si', 1, 4, 7, 22, 53, 66),
(622, 0, 0.05, 'Si', 1, 4, 7, 22, 54, 66),
(623, 0, 1, 'Si', 1, 4, 7, 22, 14, 66),
(624, 0, 1, 'Si', 1, 4, 7, 22, 55, 66),
(625, 0, 500, 'Si', 1, 4, 7, 22, 56, 66),
(626, 0, 0.15, 'Si', 1, 4, 7, 22, 57, 66),
(627, 0, 0.002, 'Si', 1, 4, 7, 22, 17, 66),
(628, 0, 1, 'Si', 1, 4, 7, 22, 58, 66),
(629, 0, 0.1, 'Si', 1, 4, 7, 22, 149, 66),
(630, 0, 0.001, 'Si', 1, 4, 7, 22, 60, 66),
(631, 0, 10, 'Si', 1, 4, 7, 22, 104, 66),
(632, 0, 0.05, 'Si', 1, 4, 7, 22, 61, 66),
(633, 0, 0.05, 'Si', 1, 4, 7, 22, 62, 66),
(634, 0, 0.01, 'Si', 1, 4, 7, 22, 63, 66),
(635, 0, 200, 'Si', 1, 4, 7, 22, 64, 66),
(636, 0, 1500, 'Si', 1, 4, 7, 22, 65, 66),
(637, 0, 400, 'Si', 1, 4, 7, 22, 38, 66),
(638, 0, 5, 'Si', 1, 4, 7, 22, 66, 66),
(639, 0, 0.1, 'Si', 1, 4, 7, 22, 67, 66),
(640, 0, 0.2, 'Si', 1, 4, 7, 22, 68, 66),
(641, 0, 0.1, 'Si', 1, 4, 7, 22, 69, 66),
(642, 0, 1, 'Si', 1, 4, 7, 22, 70, 66),
(643, 3.8, 10.5, 'Si', 1, 4, 7, 23, 32, 66),
(644, 0, 12, 'Si', 1, 4, 7, 23, 144, 66),
(645, 2, 0, 'Si', 1, 4, 7, 23, 145, 66),
(646, 0, 1000, 'Si', 1, 4, 7, 24, 44, 66),
(647, 0, 100, 'Si', 1, 4, 7, 24, 45, 66),
(648, 0, 1, 'Si', 1, 4, 7, 24, 146, 66),
(649, 3, 0, 'Si', 1, 4, 7, 25, 42, 66),
(650, 0, 5000, 'Si', 1, 4, 7, 25, 44, 66),
(651, 0, 1000, 'Si', 1, 4, 7, 25, 45, 66),
(652, 0, 1, 'Si', 1, 4, 7, 25, 146, 66),
(653, 0, 12, 'Si', 1, 4, 7, 25, 144, 66),
(654, 2, 0, 'Si', 1, 4, 7, 25, 145, 66),
(655, 0, 1, 'Si', 1, 4, 7, 25, 49, 66),
(656, 0, 0.05, 'Si', 1, 4, 7, 25, 71, 66),
(657, 0, 1, 'Si', 1, 4, 7, 25, 72, 66),
(658, 0, 0.75, 'Si', 1, 4, 7, 25, 73, 66),
(659, 0, 0.005, 'Si', 1, 4, 7, 25, 74, 66),
(660, 0, 0.2, 'Si', 1, 4, 7, 25, 7, 66),
(661, 0, 0.2, 'Si', 1, 4, 7, 25, 120, 66),
(662, 0, 0.05, 'Si', 1, 4, 7, 25, 54, 66),
(663, 0, 1, 'Si', 1, 4, 7, 25, 58, 66),
(664, 0, 5, 'Si', 1, 4, 7, 25, 76, 66),
(665, 0, 0.5, 'Si', 1, 4, 7, 25, 59, 66),
(666, 0, 0.001, 'Si', 1, 4, 7, 25, 77, 66),
(667, 0, 0.005, 'Si', 1, 4, 7, 25, 78, 66),
(668, 0, 0.5, 'Si', 1, 4, 7, 25, 79, 66),
(669, 0, 0.05, 'Si', 1, 4, 7, 25, 80, 66),
(670, 0, 0.05, 'Si', 1, 4, 7, 25, 81, 66),
(671, 0, 0.01, 'Si', 1, 4, 7, 25, 63, 66),
(672, 0, 3000, 'Si', 1, 4, 7, 25, 65, 66),
(673, 0, 0, 'Si', 1, 4, 7, 25, 82, 66),
(674, 0, 10, 'Si', 1, 4, 7, 25, 83, 66),
(675, 0, 5, 'Si', 1, 4, 7, 25, 66, 66),
(676, 0, 0.1, 'Si', 1, 4, 7, 25, 67, 66),
(677, 0, 25, 'Si', 4, 7, 21, 21, 156, 66),
(678, 0, 0.2, 'Si', 1, 4, 7, 25, 68, 66),
(679, 0, 0.1, 'Si', 1, 4, 7, 25, 69, 66),
(680, 0, 1, 'Si', 1, 4, 7, 25, 70, 66),
(681, 0, 200, 'Si', 4, 7, 21, 21, 157, 66),
(682, 0, 0.1, 'Si', 1, 4, 7, 24, 69, 66),
(683, 0, 1, 'Si', 1, 4, 7, 24, 70, 66),
(684, 0, 300, 'Si', 4, 7, 21, 21, 158, 66),
(685, 0, 0.2, 'Si', 1, 4, 7, 24, 68, 66),
(686, 0, 0.1, 'Si', 1, 4, 7, 24, 67, 66),
(687, 0, 5, 'Si', 1, 4, 7, 24, 66, 66),
(688, 0, 300, 'Si', 4, 7, 21, 21, 159, 66),
(689, 0, 10, 'Si', 1, 4, 7, 24, 83, 66),
(690, 0, 0, 'Si', 1, 4, 7, 24, 82, 66),
(691, 0, 3000, 'Si', 1, 4, 7, 24, 65, 66),
(692, 0, 0.01, 'Si', 1, 4, 7, 24, 63, 66),
(693, 0, 75, 'Si', 4, 7, 21, 21, 160, 66),
(694, 0, 0.05, 'Si', 1, 4, 7, 24, 81, 66),
(695, 0, 0.05, 'Si', 1, 4, 7, 24, 80, 66),
(696, 0, 0.5, 'Si', 1, 4, 7, 24, 79, 66),
(697, 0, 0.005, 'Si', 1, 4, 7, 24, 78, 66),
(698, 0, 4500, 'Si', 4, 7, 21, 21, 315, 66),
(699, 0, 0.001, 'Si', 1, 4, 7, 24, 77, 66),
(700, 0, 0.5, 'Si', 1, 4, 7, 24, 59, 66),
(701, 0, 5000, 'Si', 4, 7, 21, 21, 316, 66),
(702, 0, 5, 'Si', 1, 4, 7, 24, 76, 66),
(703, 0, 1, 'Si', 1, 4, 7, 24, 58, 66),
(704, 0, 0.05, 'Si', 1, 4, 7, 24, 54, 66),
(705, 0, 0.2, 'Si', 1, 4, 7, 24, 120, 66),
(706, 0, 0.2, 'Si', 1, 4, 7, 24, 7, 66),
(707, 0, 0.005, 'Si', 1, 4, 7, 24, 74, 66),
(708, 0, 0.75, 'Si', 1, 4, 7, 24, 73, 66),
(709, 0, 1, 'Si', 1, 4, 7, 24, 72, 66),
(710, 0, 2850, 'Si', 4, 7, 21, 21, 317, 66),
(711, 0, 0.05, 'Si', 1, 4, 7, 24, 71, 66),
(712, 0, 1, 'Si', 1, 4, 7, 24, 49, 66),
(713, 0, 500, 'Si', 4, 7, 21, 21, 318, 66),
(714, 0, 6, 'Si', 4, 7, 21, 21, 319, 66),
(715, 0, 1500, 'Si', 4, 7, 21, 21, 320, 66),
(716, 0, 5000, 'Si', 4, 7, 21, 21, 321, 66),
(717, 0, 10, 'Si', 4, 7, 21, 21, 322, 66),
(718, 0, 1000, 'Si', 1, 4, 7, 27, 44, 66),
(719, 0, 200, 'Si', 4, 7, 21, 21, 323, 66),
(720, 0, 200, 'Si', 1, 4, 7, 27, 45, 66),
(721, 0, 12, 'Si', 1, 4, 7, 27, 144, 66),
(722, 2, 0, 'Si', 1, 4, 7, 27, 145, 66),
(723, 0, 0.07, 'Si', 4, 7, 21, 21, 324, 66),
(724, 0, 0, 'Si', 1, 4, 7, 27, 89, 66),
(725, 0, 1.2, 'Si', 4, 7, 21, 21, 326, 66),
(726, 0, 5000, 'Si', 1, 4, 7, 28, 44, 66),
(727, 0, 1000, 'Si', 1, 4, 7, 28, 45, 66),
(728, 0, 12, 'Si', 1, 4, 7, 28, 144, 66),
(729, 2, 0, 'Si', 1, 4, 7, 28, 145, 66),
(730, 0, 0, 'Si', 1, 4, 7, 28, 89, 66),
(731, 0, 1, 'Si', 4, 7, 21, 21, 327, 66),
(732, 5, 0, 'Si', 1, 4, 7, 28, 42, 66),
(733, 0, 5, 'Si', 4, 7, 21, 21, 328, 66),
(734, 6.5, 8.5, 'Si', 1, 4, 7, 28, 32, 66),
(735, 0, 0.3, 'Si', 1, 4, 7, 28, 1, 66),
(736, 0, 1, 'Si', 1, 4, 7, 28, 14, 66),
(737, 0, 5, 'Si', 4, 7, 21, 21, 329, 66),
(738, 0, 33, 'Si', 1, 4, 7, 28, 147, 66),
(739, 0, 1150, 'Si', 4, 7, 21, 21, 330, 66),
(740, 0, 0, 'Si', 1, 4, 7, 28, 86, 66),
(741, 0, 300, 'Si', 4, 7, 21, 21, 332, 66),
(742, 0, 3, 'Si', 4, 7, 21, 21, 333, 66),
(743, 0, 500, 'Si', 4, 7, 21, 21, 334, 66),
(744, 0, 1800, 'Si', 4, 7, 21, 21, 335, 66),
(745, 0, 0, 'Si', 1, 4, 7, 28, 87, 66),
(746, 0, 1800, 'Si', 4, 7, 21, 21, 336, 66),
(747, 0, 0.002, 'Si', 1, 4, 7, 28, 88, 66),
(748, 5, 0, 'Si', 1, 4, 7, 27, 42, 66),
(749, 0, 250, 'Si', 4, 7, 21, 21, 337, 66),
(750, 6.5, 8.5, 'Si', 1, 4, 7, 27, 32, 66),
(751, 0, 0.3, 'Si', 1, 4, 7, 27, 1, 66),
(752, 0, 175, 'Si', 4, 7, 21, 21, 338, 66),
(753, 0, 1, 'Si', 1, 4, 7, 27, 14, 66),
(754, 0, 33, 'Si', 1, 4, 7, 27, 147, 66),
(755, 0, 0, 'Si', 1, 4, 7, 27, 86, 66),
(756, 0, 0, 'Si', 1, 4, 7, 27, 87, 66),
(757, 0, 150, 'Si', 4, 7, 21, 21, 339, 66),
(758, 0, 0.002, 'Si', 1, 4, 7, 27, 88, 66),
(759, 0, 300, 'Si', 4, 7, 21, 21, 340, 66),
(760, 0, 250, 'Si', 4, 7, 21, 21, 341, 66),
(761, 0, 0.1, 'Si', 1, 4, 7, 27, 67, 66),
(762, 0, 250, 'Si', 4, 7, 21, 21, 342, 66),
(763, 0, 0.2, 'Si', 1, 4, 7, 27, 68, 66),
(764, 0, 150, 'Si', 4, 7, 21, 21, 343, 66),
(765, 0, 0.1, 'Si', 1, 4, 7, 27, 69, 66),
(766, 0, 0.1, 'Si', 1, 4, 7, 27, 70, 66),
(767, 0, 50, 'Si', 4, 7, 21, 21, 344, 66),
(768, 0, 0.1, 'Si', 1, 4, 7, 28, 67, 66),
(769, 0, 0.2, 'Si', 1, 4, 7, 28, 68, 66),
(770, 0, 0.1, 'Si', 1, 4, 7, 28, 69, 66),
(771, 0, 0.1, 'Si', 1, 4, 7, 28, 70, 66),
(772, 0, 100, 'Si', 4, 7, 21, 21, 345, 66),
(773, 3, 0, 'Si', 1, 4, 7, 29, 42, 66),
(774, 0, 0.002, 'Si', 1, 4, 7, 28, 17, 66),
(775, 0, 250, 'Si', 4, 7, 21, 21, 346, 66),
(776, 0, 0, 'Si', 1, 4, 7, 28, 92, 66),
(777, 0, 150, 'Si', 4, 7, 21, 21, 347, 66),
(778, 0, 0, 'Si', 1, 4, 7, 28, 91, 66),
(779, 0, 0, 'Si', 1, 4, 7, 28, 93, 66),
(780, 0, 12, 'Si', 1, 4, 7, 28, 144, 66),
(781, 2, 0, 'Si', 1, 4, 7, 28, 145, 66),
(782, 0, 150, 'Si', 4, 7, 21, 21, 348, 66),
(783, 4, 0, 'Si', 1, 4, 7, 28, 42, 66),
(784, 0, 100, 'Si', 4, 7, 21, 21, 349, 66),
(785, 0, 150, 'Si', 4, 7, 21, 21, 350, 66),
(786, 0, 350, 'Si', 4, 7, 21, 21, 351, 66),
(787, 0, 150, 'Si', 4, 7, 21, 21, 352, 66),
(788, 0, 600, 'Si', 4, 7, 21, 21, 353, 66),
(789, 0, 600, 'Si', 4, 7, 21, 21, 354, 66),
(790, 0, 9, 'Si', 4, 7, 21, 21, 367, 66),
(791, 0, 9, 'Si', 4, 7, 21, 21, 356, 66),
(792, 0, 300, 'Si', 4, 7, 21, 21, 357, 66),
(793, 0, 500, 'Si', 4, 7, 21, 21, 358, 66),
(794, 0, 500, 'Si', 4, 7, 21, 21, 359, 66),
(795, 0, 150, 'Si', 4, 7, 21, 21, 360, 66),
(796, 0, 150, 'Si', 4, 7, 21, 21, 361, 66),
(797, 0, 200, 'Si', 4, 7, 21, 21, 362, 66),
(798, 0, 150, 'Si', 4, 7, 21, 21, 363, 66),
(799, 0, 150, 'Si', 4, 7, 21, 21, 364, 66),
(800, 0, 350, 'Si', 4, 7, 21, 21, 365, 66),
(801, 0, 100, 'Si', 4, 7, 21, 21, 366, 66),
(802, 0, 150, 'Si', 4, 7, 21, 21, 367, 66),
(803, 0, 9, 'Si', 4, 7, 21, 21, 355, 66),
(804, 0, 15, 'Si', 4, 7, 21, 21, 368, 66),
(805, 0, 20, 'Si', 4, 7, 21, 21, 369, 66),
(806, 0, 5, 'Si', 4, 7, 21, 21, 371, 66),
(807, 0, 0.5, 'Si', 4, 7, 21, 21, 370, 66),
(808, 0, 120, 'Si', 4, 7, 21, 21, 372, 66),
(809, 0, 50, 'Si', 4, 7, 21, 21, 373, 66),
(810, 0, 250, 'Si', 4, 7, 21, 21, 374, 66),
(811, 0, 250, 'Si', 4, 7, 21, 21, 375, 66),
(812, 0, 250, 'Si', 4, 7, 21, 21, 376, 66),
(813, 0, 50, 'Si', 4, 7, 21, 21, 377, 66),
(814, 0, 50, 'Si', 4, 7, 21, 21, 378, 66),
(815, 0, 50, 'Si', 4, 7, 21, 21, 379, 66),
(816, 0, 50, 'Si', 4, 7, 21, 21, 380, 66),
(817, 0, 50, 'Si', 4, 7, 21, 21, 384, 66),
(818, 0, 100, 'Si', 4, 7, 21, 21, 381, 66),
(819, 0, 15, 'Si', 4, 7, 21, 21, 382, 66),
(820, 0, 20, 'Si', 1, 4, 8, 30, 1, 66),
(821, 0, 20, 'Si', 1, 4, 8, 29, 95, 66),
(822, 0, 20, 'Si', 1, 4, 8, 29, 96, 66),
(823, 0, 0, 'Si', 1, 4, 8, 29, 97, 66),
(824, 0, 2, 'Si', 1, 4, 8, 29, 98, 66),
(825, 0, 1, 'Si', 1, 4, 8, 29, 99, 66),
(826, 0, 0.1, 'Si', 1, 4, 8, 29, 50, 66),
(827, 0, 5, 'Si', 1, 4, 8, 29, 51, 66),
(828, 0, 5, 'Si', 1, 4, 8, 29, 73, 66),
(829, 0, 0.1, 'Si', 1, 4, 8, 29, 52, 66),
(830, 0, 0.1, 'Si', 1, 4, 8, 29, 6, 66),
(831, 0, 1000, 'Si', 1, 4, 8, 29, 8, 66),
(832, 0, 0.05, 'Si', 1, 4, 8, 29, 100, 66),
(833, 0, 2, 'Si', 1, 4, 8, 29, 54, 66),
(834, 0, 0.1, 'Si', 1, 4, 8, 29, 148, 66),
(835, 0, 60, 'Si', 1, 4, 8, 30, 5, 66),
(836, 0, 350, 'Si', 1, 4, 8, 29, 35, 66),
(837, 0, 2, 'Si', 1, 4, 8, 29, 14, 66),
(838, 0, 2, 'Si', 1, 4, 8, 29, 55, 66),
(839, 0, 0, 'Si', 1, 4, 8, 29, 91, 66),
(840, 0, 5, 'Si', 1, 4, 8, 29, 101, 66),
(841, 0, 0.05, 'Si', 1, 4, 8, 29, 17, 66),
(842, 0, 5, 'Si', 1, 4, 8, 29, 18, 66),
(843, 0, 1, 'Si', 1, 4, 8, 29, 102, 66),
(844, 0, 10, 'Si', 1, 4, 8, 29, 58, 66),
(845, 0, 2, 'Si', 1, 4, 8, 29, 59, 66),
(846, 0, 0.01, 'Si', 1, 4, 8, 29, 60, 66),
(847, 0, 1, 'Si', 1, 4, 8, 29, 108, 66),
(848, 0, 10, 'Si', 1, 4, 8, 29, 103, 66),
(849, 6, 9, 'Si', 1, 4, 8, 29, 32, 66),
(850, 0, 0.1, 'Si', 1, 4, 8, 29, 61, 66),
(851, 0, 0.5, 'Si', 1, 4, 8, 29, 62, 66),
(852, 0, 0.05, 'Si', 1, 4, 8, 29, 63, 66),
(853, 0, 0, 'Si', 1, 4, 8, 29, 82, 66),
(854, 0, 1, 'Si', 1, 4, 8, 29, 105, 66),
(855, 0, 80, 'Si', 1, 4, 8, 29, 36, 66),
(856, 0, 2, 'Si', 1, 4, 8, 29, 39, 66),
(857, 0, 600, 'Si', 1, 4, 8, 29, 38, 66),
(858, 0, 0.5, 'Si', 1, 4, 8, 29, 107, 66),
(859, 0, 5, 'Si', 1, 4, 8, 29, 66, 66),
(860, 0, 0.25, 'Si', 1, 4, 8, 29, 67, 66),
(861, 0, 0.05, 'Si', 1, 4, 8, 29, 68, 66),
(862, 0, 0.1, 'Si', 1, 4, 8, 29, 69, 66),
(863, 0, 1, 'Si', 1, 4, 8, 29, 70, 66),
(864, 0, 1000, 'Si', 1, 4, 8, 29, 44, 66),
(865, 0, 200, 'Si', 1, 4, 8, 29, 45, 66),
(866, 0, 20, 'Si', 1, 2, 9, 28, 1, 66),
(867, 0, 20, 'Si', 1, 2, 9, 28, 95, 66),
(868, 0, 100, 'Si', 1, 2, 9, 28, 96, 66),
(869, 0, 0, 'Si', 1, 2, 9, 28, 97, 66),
(870, 0, 5, 'Si', 1, 2, 9, 28, 99, 66),
(871, 0, 0.5, 'Si', 1, 2, 9, 28, 50, 66),
(872, 0, 5, 'Si', 1, 2, 9, 28, 51, 66),
(873, 0, 0.2, 'Si', 1, 2, 9, 28, 52, 66),
(874, 0, 0.2, 'Si', 1, 2, 9, 28, 6, 66),
(875, 0, 0.5, 'Si', 1, 2, 9, 28, 100, 66),
(876, 0, 0.5, 'Si', 1, 2, 9, 28, 53, 66),
(877, 0, 300, 'Si', 1, 2, 9, 28, 8, 66),
(878, 0, 2, 'Si', 1, 2, 9, 28, 54, 66),
(879, 0, 0.5, 'Si', 1, 2, 9, 28, 148, 66),
(880, 0, 350, 'Si', 1, 2, 9, 28, 5, 66),
(881, 0, 700, 'Si', 1, 2, 9, 28, 35, 66),
(882, 0, 8, 'Si', 1, 2, 9, 28, 14, 66),
(883, 0, 8, 'Si', 1, 2, 9, 28, 55, 66),
(884, 0, 0.5, 'Si', 1, 2, 9, 28, 17, 66),
(885, 0, 10, 'Si', 1, 2, 9, 28, 102, 66),
(886, 0, 25, 'Si', 1, 2, 9, 28, 58, 66),
(887, 0, 10, 'Si', 1, 2, 9, 28, 59, 66),
(888, 0, 0.01, 'Si', 1, 2, 9, 28, 60, 66),
(889, 0, 1, 'Si', 1, 2, 9, 28, 108, 66),
(890, 0, 40, 'Si', 1, 2, 9, 28, 103, 66),
(891, 6, 9, 'Si', 1, 2, 9, 28, 32, 66),
(892, 0, 0.1, 'Si', 1, 2, 9, 28, 61, 66),
(893, 0, 0.5, 'Si', 1, 2, 9, 28, 62, 66),
(894, 0, 0.2, 'Si', 1, 2, 9, 28, 63, 66),
(895, 0, 0, 'Si', 1, 2, 9, 28, 82, 66),
(896, 0, 100, 'Si', 1, 2, 9, 28, 105, 66),
(897, 0, 400, 'Si', 1, 2, 9, 28, 36, 66),
(898, 0, 1600, 'Si', 1, 2, 9, 28, 37, 66),
(899, 0, 400, 'Si', 1, 2, 9, 28, 38, 66),
(900, 0, 1, 'Si', 1, 2, 9, 28, 107, 66),
(901, 0, -5, 'Si', 1, 2, 9, 28, 109, 66),
(902, 0, 5, 'Si', 1, 2, 9, 28, 83, 66),
(903, 0, 5, 'Si', 1, 2, 9, 28, 66, 66),
(904, 0, 0.25, 'Si', 1, 2, 9, 28, 67, 66),
(905, 0, 0.05, 'Si', 1, 2, 9, 28, 68, 66),
(906, 0, 0.1, 'Si', 1, 2, 9, 28, 69, 66),
(907, 0, 1, 'Si', 1, 2, 9, 28, 70, 66),
(908, 6, 9, 'Si', 2, 6, 18, 23, 162, 66),
(909, 5, 8, 'Si', 2, 6, 18, 23, 333, 66),
(910, 0, 12, 'Si', 2, 6, 18, 23, 163, 66),
(911, 0, 3.5, 'Si', 2, 6, 18, 23, 333, 66),
(912, 0, 12, 'Si', 2, 6, 18, 23, 164, 66),
(913, 0, 8, 'Si', 2, 6, 18, 23, 333, 66),
(914, 0, 3, 'Si', 2, 6, 18, 23, 333, 66),
(915, 0, 1, 'Si', 2, 6, 18, 23, 333, 66),
(916, 0, 40, 'Si', 2, 6, 18, 23, 333, 66),
(917, 0, 25, 'Si', 2, 6, 18, 23, 333, 66),
(918, 0, 500, 'Si', 2, 6, 18, 23, 333, 66),
(919, 0, 300, 'Si', 2, 6, 18, 23, 333, 66),
(920, 0, 10, 'Si', 2, 6, 18, 23, 333, 66),
(921, 0, 8, 'Si', 2, 6, 18, 23, 333, 66),
(922, 0, 40000, 'Si', 2, 6, 18, 23, 333, 66),
(923, 0, 20000, 'Si', 2, 6, 18, 23, 333, 66),
(924, 0, 10, 'Si', 2, 6, 18, 23, 333, 66),
(925, 0, 1, 'Si', 2, 6, 18, 23, 333, 66),
(926, 0, 10, 'Si', 2, 6, 18, 23, 333, 66),
(927, 0, 2, 'Si', 2, 6, 18, 23, 333, 66),
(928, 0, 10, 'Si', 2, 6, 18, 23, 333, 66),
(929, 0, 5, 'Si', 2, 6, 18, 23, 333, 66),
(930, 0, 500, 'Si', 2, 6, 18, 23, 333, 66),
(931, 0, 300, 'Si', 2, 6, 18, 23, 333, 66),
(932, 0, 500, 'Si', 2, 6, 18, 23, 333, 66),
(933, 0, 150, 'Si', 2, 6, 18, 23, 333, 66),
(934, 0, 2500, 'Si', 2, 6, 18, 23, 333, 66),
(935, 0, 1.5, 'Si', 2, 6, 18, 23, 333, 66),
(936, 80, 0, 'Si', 2, 6, 18, 23, 333, 66),
(937, 0, 5, 'Si', 2, 6, 18, 23, 333, 66),
(938, 0, 5, 'Si', 2, 6, 18, 23, 333, 66),
(939, 0, 100, 'Si', 2, 6, 18, 23, 333, 66),
(940, 0, 1, 'Si', 2, 6, 18, 23, 333, 66),
(941, 0, 5, 'Si', 2, 6, 18, 23, 333, 66),
(942, 0, 0.2, 'Si', 2, 6, 18, 23, 333, 66),
(943, 0, 1, 'Si', 2, 6, 18, 23, 333, 66),
(944, 0, 5, 'Si', 2, 6, 18, 23, 333, 66),
(945, 5, 0, 'Si', 2, 6, 18, 23, 333, 66),
(946, 0.5, 0, 'Si', 2, 6, 18, 23, 333, 66),
(947, 14.4, 0, 'Si', 2, 6, 18, 23, 333, 66),
(948, 0.5, 0, 'Si', 2, 6, 18, 23, 333, 66),
(949, 100, 0, 'Si', 2, 6, 18, 23, 333, 66),
(950, 6, 0, 'Si', 2, 6, 18, 23, 333, 66),
(951, 0, 8.6, 'Si', 2, 6, 18, 23, 333, 66),
(952, 10, 0, 'Si', 2, 6, 18, 23, 333, 66),
(953, 1.3, 0, 'Si', 2, 6, 18, 23, 333, 66),
(954, 14.4, 0, 'Si', 2, 6, 18, 23, 333, 66),
(955, 0.7, 0, 'Si', 2, 6, 18, 23, 333, 66),
(956, 0.5, 0, 'Si', 2, 6, 18, 23, 333, 66),
(957, 0, 250, 'Si', 4, 7, 21, 21, 385, 66),
(958, 0, 100, 'Si', 4, 7, 21, 21, 386, 66),
(959, 0, 250, 'Si', 4, 7, 21, 21, 387, 66),
(960, 0, 250, 'Si', 4, 7, 21, 21, 389, 66),
(961, 0, 2000, 'Si', 4, 7, 21, 21, 390, 66),
(962, 0, 7.5, 'Si', 4, 7, 21, 21, 391, 66),
(963, 0, 10, 'Si', 4, 7, 21, 21, 392, 66),
(964, 0, 10, 'Si', 4, 7, 21, 21, 393, 66),
(965, 0, 80, 'Si', 4, 7, 21, 21, 394, 66),
(966, 0, 30, 'Si', 4, 7, 21, 21, 395, 66),
(967, 0, 80, 'Si', 4, 7, 21, 21, 396, 66),
(968, 0, 30, 'Si', 4, 7, 21, 21, 397, 66),
(969, 0, 10, 'Si', 4, 7, 21, 21, 398, 66),
(970, 0, 6.8, 'Si', 4, 7, 21, 21, 399, 66),
(971, 0, 15, 'Si', 4, 7, 21, 21, 400, 66),
(972, 0, 0.1, 'Si', 4, 7, 21, 21, 401, 66),
(973, 0, 0.05, 'Si', 4, 7, 21, 21, 194, 66),
(974, 0, 1, 'Si', 4, 7, 21, 21, 383, 66),
(975, 0, 1, 'Si', 4, 7, 21, 21, 191, 66),
(976, 0, 2, 'Si', 4, 7, 21, 21, 192, 66),
(977, 0, 1, 'Si', 4, 7, 21, 21, 403, 66),
(978, 0, 2, 'Si', 4, 7, 21, 21, 404, 66),
(979, 0, 2, 'Si', 4, 7, 21, 21, 333, 66),
(980, 0, 1, 'Si', 4, 7, 21, 21, 333, 66),
(981, 0, 2, 'Si', 4, 7, 21, 21, 193, 66),
(982, 0, 1, 'Si', 4, 7, 21, 21, 333, 66),
(983, 0, 0, 'Si', 4, 7, 21, 21, 333, 66),
(984, 0, 1, 'Si', 4, 7, 21, 21, 333, 66),
(985, 0, 0, 'Si', 4, 7, 21, 21, 333, 66),
(986, 0, 150, 'Si', 4, 7, 21, 21, 314, 66),
(987, 0, 17, 'Si', 4, 7, 21, 21, 156, 66),
(988, 0, 150, 'Si', 4, 7, 21, 21, 157, 66),
(989, 0, 200, 'Si', 4, 7, 21, 21, 158, 66),
(990, 0, 300, 'Si', 4, 7, 21, 21, 159, 66),
(991, 0, 50, 'Si', 4, 7, 21, 21, 160, 66),
(992, 0, 3000, 'Si', 4, 7, 21, 21, 315, 66),
(993, 0, 3400, 'Si', 4, 7, 21, 21, 316, 66),
(994, 0, 1425, 'Si', 4, 7, 21, 21, 317, 66),
(995, 0, 500, 'Si', 4, 7, 21, 21, 318, 66),
(996, 0, 3, 'Si', 4, 7, 21, 21, 319, 66),
(997, 0, 1500, 'Si', 4, 7, 21, 21, 320, 66),
(998, 0, 4200, 'Si', 4, 7, 21, 21, 321, 66),
(999, 0, 5, 'Si', 4, 7, 21, 21, 322, 66),
(1000, 0, 100, 'Si', 4, 7, 21, 21, 323, 66),
(1001, 0, 0.07, 'Si', 4, 7, 21, 21, 324, 66),
(1002, 0, 0.05, 'Si', 4, 7, 21, 21, 325, 66),
(1003, 0, 1, 'Si', 4, 7, 21, 21, 326, 66),
(1004, 0, 1, 'Si', 4, 7, 21, 21, 327, 66),
(1005, 0, 2, 'Si', 4, 7, 21, 21, 328, 66),
(1006, 0, 5, 'Si', 4, 7, 21, 21, 329, 66),
(1007, 0, 1150, 'Si', 4, 7, 21, 21, 330, 66),
(1008, 0, 400, 'Si', 4, 7, 21, 21, 331, 66),
(1009, 0, 150, 'Si', 4, 7, 21, 21, 332, 66),
(1010, 0, 1.5, 'Si', 4, 7, 21, 21, 333, 66),
(1011, 0, 200, 'Si', 4, 7, 21, 21, 334, 66),
(1012, 0, 1300, 'Si', 4, 7, 21, 21, 335, 66),
(1013, 0, 1300, 'Si', 4, 7, 21, 21, 336, 66),
(1014, 0, 175, 'Si', 4, 7, 21, 21, 337, 66),
(1015, 0, 150, 'Si', 4, 7, 21, 21, 338, 66),
(1016, 0, 120, 'Si', 4, 7, 21, 21, 339, 66),
(1017, 0, 250, 'Si', 4, 7, 21, 21, 340, 66),
(1018, 0, 200, 'Si', 4, 7, 21, 21, 341, 66),
(1019, 0, 250, 'Si', 4, 7, 21, 21, 342, 66),
(1020, 0, 150, 'Si', 4, 7, 21, 21, 343, 66),
(1021, 0, 30, 'Si', 4, 7, 21, 21, 344, 66),
(1103, 0, 1.7, 'Si', 1, 3, 1, 3, 18, 66),
(1104, 0, 0, 'Si', 1, 1, 3, 15, 41, 66),
(1105, 0, 5, 'Si', 1, 1, 3, 15, 42, 66),
(1106, 0, 0, 'Si', 1, 1, 3, 15, 106, 66),
(1107, 0, 0, 'Si', 1, 1, 3, 15, 107, 66),
(1108, 0, 0, 'Si', 1, 1, 3, 15, 108, 66),
(1109, 0, 0, 'Si', 1, 1, 3, 15, 109, 66),
(1110, 0, 0, 'Si', 1, 1, 3, 15, 110, 66),
(1111, 0, 0, 'Si', 1, 1, 3, 15, 111, 66),
(1112, 0, 300, 'Si', 1, 1, 3, 15, 112, 66),
(1113, 0, 15, 'Si', 1, 1, 4, 18, 388, 66),
(1114, 0, 5, 'Si', 1, 1, 4, 18, 39, 66),
(1115, 0, 1000, 'Si', 1, 1, 4, 18, 62, 66),
(1116, 0, 500, 'Si', 1, 1, 4, 18, 114, 66),
(1117, 6.5, 9, 'Si', 1, 1, 4, 18, 30, 66),
(1118, 0, 0.2, 'Si', 1, 1, 4, 18, 46, 66),
(1119, 0, 30, 'Si', 1, 1, 4, 18, 383, 66),
(1120, 0, 1, 'Si', 1, 1, 4, 18, 115, 66),
(1121, 0, 3, 'Si', 1, 1, 4, 18, 55, 66),
(1122, 0, 0.5, 'Si', 1, 1, 4, 18, 56, 66),
(1123, 0, 200, 'Si', 1, 1, 4, 18, 61, 66),
(1124, 0, 500, 'Si', 1, 1, 4, 18, 36, 66),
(1125, 0, 3, 'Si', 1, 1, 4, 18, 174, 66),
(1126, 0, 0.01, 'Si', 1, 1, 4, 19, 68, 66),
(1127, 0, 0.7, 'Si', 1, 1, 4, 19, 69, 66),
(1128, 0, 0.3, 'Si', 1, 1, 4, 19, 70, 66),
(1129, 0, 20, 'Si', 1, 1, 4, 19, 115, 66),
(1130, 0, 0.003, 'Si', 1, 1, 4, 19, 71, 66),
(1131, 0, 0.05, 'Si', 1, 1, 4, 19, 51, 66),
(1132, 0, 0.001, 'Si', 1, 1, 4, 19, 57, 66),
(1133, 0, 0.02, 'Si', 1, 1, 4, 19, 75, 66),
(1134, 0, 45, 'Si', 1, 1, 4, 19, 25, 66),
(1135, 0, 10, 'Si', 1, 1, 4, 19, 116, 66),
(1136, 0, 0.03, 'Si', 1, 1, 4, 19, 26, 66),
(1137, 0, 0.07, 'Si', 1, 1, 4, 19, 74, 66),
(1138, 0, 0.01, 'Si', 1, 1, 4, 19, 77, 66),
(1139, 0, 0.01, 'Si', 1, 1, 4, 19, 60, 66),
(1140, 0, 0.05, 'Si', 1, 1, 4, 19, 76, 66),
(1141, 0, 1, 'Si', 1, 1, 4, 19, 405, 66),
(1142, 0.8, 1.5, 'Si', 1, 1, 4, 16, 406, 66),
(1143, 0.8, 1.3, 'Si', 1, 1, 4, 16, 407, 66),
(1144, 0.7, 1.2, 'Si', 1, 1, 4, 16, 408, 66),
(1145, 0.7, 1, 'Si', 1, 1, 4, 16, 409, 66),
(1146, 0.6, 0.8, 'Si', 1, 1, 4, 16, 410, 66),
(1147, 0, 100, 'Si', 1, 1, 4, 17, 117, 66),
(1148, 0, 200, 'Si', 1, 1, 4, 17, 118, 66),
(1149, 0, 100, 'Si', 1, 1, 4, 17, 119, 66),
(1150, 0, 10, 'Si', 1, 1, 4, 17, 120, 66),
(1151, 0, 700, 'Si', 1, 1, 4, 17, 121, 66),
(1152, 0, 500, 'Si', 1, 1, 4, 17, 122, 66),
(1153, 0, 0.03, 'Si', 1, 1, 4, 17, 124, 66),
(1154, 0, 2, 'Si', 1, 1, 4, 17, 125, 66),
(1155, 0, 30, 'Si', 1, 1, 4, 17, 126, 66),
(1156, 0, 0.03, 'Si', 1, 1, 4, 17, 127, 66),
(1157, 0, 0.1, 'Si', 1, 1, 4, 17, 128, 66),
(1158, 0, 1, 'Si', 1, 1, 4, 17, 129, 66),
(1159, 0, 2, 'Si', 1, 1, 4, 17, 130, 66),
(1160, 0, 20, 'Si', 1, 1, 4, 17, 131, 66),
(1161, 0, 0.5, 'Si', 1, 1, 4, 17, 132, 66),
(1162, 0, 0.7, 'Si', 1, 1, 4, 17, 133, 66),
(1163, 0, 30, 'Si', 1, 1, 4, 17, 134, 66),
(1164, 0, 30, 'Si', 1, 1, 4, 17, 135, 66),
(1165, 0, 300, 'Si', 1, 1, 4, 17, 136, 66),
(1166, 0, 9, 'Si', 1, 1, 4, 17, 137, 66),
(1167, 0, 200, 'Si', 1, 1, 4, 17, 138, 66),
(1168, 0, 0.1, 'Si', 1, 1, 5, 20, 66, 66),
(1169, 0, 1, 'Si', 1, 1, 5, 20, 67, 66);

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
  `tipo` ENUM('Puntual', 'Compuesta') NOT NULL,
  `horas` tinyint(4) NULL,
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
  `cantidad` float NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Volcado de datos para la tabla `rama`
--

INSERT INTO `rama` (`id`, `nombre`) VALUES
(1, 'Anexo C'),
(2, 'Evaluacion de Metales'),
(3, 'Caracteristicas de peligrosidad'),
(4, 'Cadmio'),
(5, 'Cloruro de Hidrogeno'),
(6, 'Articulo 49 - Caracteristicas de peligrosidad'),
(7, 'Articulo 50'),
(8, 'Combustion Industrial'),
(9, 'Fabricas de cemento'),
(10, 'Hidrocarburos aromaticos policiclicos'),
(11, 'Anexo C - Determinacion de hidrocarburos tota'),
(12, 'Anexo C - Determinacion del SARA'),
(13, 'Anexo C - Compuestos organicos halogenados'),
(14, 'Metales en muestra real'),
(15, 'Lixiviados - Analisis especiales'),
(16, 'Anexo C - Determinacion Elemental'),
(17, 'Anexo C - Determinacion del calor de combusti'),
(18, 'Anexo C - Compuestos organicos volatiles clor'),
(19, 'Anexo C - Compuestos organicos semivolatiles'),
(20, 'Anexo C - Compuestos Organoclorados'),
(21, 'Articulo 49'),
(22, 'Acido Sulfurico'),
(23, 'Dioxido de Azufre'),
(24, 'Fluoruros FS FH'),
(25, 'Fluoruros (como F)'),
(26, 'Fluoruro de hidrogeno'),
(27, 'Bromuro de hidrogeno'),
(28, 'Monoxido de carbono'),
(29, 'Oxidos de nitrogeno (Como NO 2)'),
(30, 'Particulas Solidas'),
(31, 'Plomo y compuestos en Pb'),
(32, 'Centrales termicas a fuel oil'),
(33, 'Polvos'),
(34, 'Sulfuro de Hidrogeno'),
(35, 'Trioxido de antimonio'),
(36, 'Trioxido de arsenico'),
(37, 'Pentoxido de fosforo'),
(38, 'Compuestos organicos volatiles'),
(39, 'Dioxinas y furanos'),
(40, 'Incineradores de residuos solidos'),
(41, 'Siderurgicas'),
(42, 'Refinerias de petroleo'),
(43, 'Plantas de aglomerados asfalticos'),
(44, 'Fabricacion de acido nitrico'),
(45, 'Fabricacion de Fertilizantes'),
(46, 'Fabricacion de productos a base de asbesto'),
(47, 'Articulo 50 - Caracteristicas de peligrosidad'),
(48, 'Articulo 49 - Metales en Muestra Real'),
(49, 'Articulo 50 - Metales en Muestra Real'),
(50, 'Lixiviados'),
(51, 'Lixiviados - Determinacion elemental'),
(52, 'Articulo 49 - Especiales en Muestra Real'),
(53, 'Articulo 50 - Especiales en Muestra Real'),
(54, 'Lixiviado'),
(55, 'Lixiviado -  Compuestos Organicos Volatiles'),
(56, 'Lixiviado - Compuestos Organicos Volatiles'),
(57, 'LIXIVIADO -COMPUESTOS ORGÁNICOS VOLÁTILES CLO'),
(58, 'LIXIVIADO -COMPUESTOS AROMÁTICOS'),
(59, 'LIXIVIADO -COMPUESTOS AROMÁTICOS POLICÍCLICOS'),
(60, 'LIXIVIADO -COMPUESTOS ORGANOCLORADOS'),
(61, 'LIXIVIADO - COMPUESTOS ORGÁNICOS HALOGENADOS'),
(62, 'LIXIVIADO - DETERMINACIÓN ELEMENTAL'),
(63, 'LIXIVIADO - DETERMINACIÓN DEL CALOR DE COMBUS'),
(64, 'LIXIVIADO - DETERMINACIÓN DE HIDROCARBUROS TO'),
(65, 'LIXIVIADO - DETERMINACIÓN DEL SARA'),
(66, 'NULL');

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

CREATE TABLE IF NOT EXISTS `vendedor` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `Puesto_id` tinyint(3) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Vendedor_Puesto` (`Puesto_id`),
  KEY `fk_Vendedor_user1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
