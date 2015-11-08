-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 07:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hl`
--
CREATE DATABASE IF NOT EXISTS `hl` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hl`;

-- --------------------------------------------------------

--
-- Table structure for table `caracterizacion`
--

CREATE TABLE IF NOT EXISTS `caracterizacion` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `preservacion` enum('0','1','2','3','4','5','6','7','8','9') DEFAULT NULL,
  `siglas` varchar(15) DEFAULT NULL,
  `laboratorio` enum('Si','No') DEFAULT NULL,
  `opacidad` enum('Si','No') DEFAULT NULL,
  `metodo` varchar(15) DEFAULT NULL,
  `tipo` enum('AceitesG','Cianuro','Cloruros','Dbo','Detergente','Dqo','Fenol','Formaldehido','FosforoAA','FosforoAV','Nitratos','Nitrito','Nitrogeno','NitrogenoA','Solidos','Sulfatos','Sulfitos','Sulfuro','Fluoruro','NitrogenoT','Ph','SolidosD','Conductividad','Salinidad','Color','Espuma','Turbidez','Acidez','DurezaT','Calcica','Magnesica','Alcalinidad') DEFAULT NULL,
  `Equipos_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Caracterizacion_Equipos1_idx` (`Equipos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `caracterizacion_has_departamento`
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
-- Table structure for table `caracterizacion_has_equipos`
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
-- Table structure for table `carea`
--

CREATE TABLE IF NOT EXISTS `carea` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` smallint(6) DEFAULT NULL,
  `Celular_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`Celular_id`),
  KEY `fk_CArea_celular1_idx` (`Celular_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `celular`
--

CREATE TABLE IF NOT EXISTS `celular` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` mediumint(7) unsigned DEFAULT NULL,
  `Clientes_id` int(10) unsigned NOT NULL,
  `Vendedor_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_celular_Clientes1_idx` (`Clientes_id`),
  KEY `fk_celular_Vendedor1_idx` (`Vendedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) DEFAULT NULL,
  `direccion` tinytext,
  `email` varchar(90) DEFAULT NULL,
  `encargado` varchar(45) DEFAULT NULL,
  `nRif` char(10) DEFAULT NULL,
  `cRif` char(1) DEFAULT NULL,
  `siglas` char(4) DEFAULT NULL,
  `contador` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `codigoanalisis`
--

CREATE TABLE IF NOT EXISTS `codigoanalisis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `codigomuestra`
--

CREATE TABLE IF NOT EXISTS `codigomuestra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `costomuestra`
--

CREATE TABLE IF NOT EXISTS `costomuestra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Muestras_id` int(10) unsigned NOT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_costoMuestra_Muestras1_idx` (`Muestras_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `costoparametro`
--

CREATE TABLE IF NOT EXISTS `costoparametro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tMateriales` float DEFAULT NULL,
  `tEquipos` float DEFAULT NULL,
  `tMano` float DEFAULT NULL,
  `Parametros_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`Parametros_id`),
  KEY `fk_CostoParametro_Parametros1_idx` (`Parametros_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `costopredeterminados`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `vencimiento` tinyint(3) unsigned DEFAULT NULL,
  `modena` char(3) DEFAULT NULL,
  `tipo` binary(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `costopredeterminados_has_costomuestra`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados_has_costomuestra` (
  `CostoPredeterminados_id` int(10) unsigned NOT NULL,
  `CostoMuestra_id` int(10) unsigned NOT NULL,
  `cantidad` float DEFAULT NULL,
  PRIMARY KEY (`CostoPredeterminados_id`,`CostoMuestra_id`),
  KEY `fk_costoPredeterminados_has_costoMuestra_costoMuestra1_idx` (`CostoMuestra_id`),
  KEY `fk_costoPredeterminados_has_costoMuestra_costoPredeterminad_idx` (`CostoPredeterminados_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `costopredeterminados_has_costoparametro`
--

CREATE TABLE IF NOT EXISTS `costopredeterminados_has_costoparametro` (
  `CostoPredeterminados_id` int(10) unsigned NOT NULL,
  `CostoParametro_id` int(10) unsigned NOT NULL,
  `cantidad` float DEFAULT NULL,
  `k` float DEFAULT NULL,
  `unidad` enum('equipos','materiales','mano') DEFAULT NULL,
  PRIMARY KEY (`CostoPredeterminados_id`,`CostoParametro_id`),
  KEY `fk_costoPredeterminados_has_CostoParametro_CostoParametro1_idx` (`CostoParametro_id`),
  KEY `fk_costoPredeterminados_has_CostoParametro_costoPredetermin_idx` (`CostoPredeterminados_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `costos`
--

CREATE TABLE IF NOT EXISTS `costos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cAnalisis` float DEFAULT NULL,
  `cMuestreo` float DEFAULT NULL,
  `cInforme` float DEFAULT NULL,
  `cAdministrativo` float DEFAULT NULL,
  `utilidad` float DEFAULT NULL,
  `rendimiento` tinyint(4) DEFAULT NULL,
  `General_id` int(10) unsigned NOT NULL,
  `CostoParametro_id` int(10) unsigned NOT NULL,
  `CostoParametro_Parametros_id` int(10) unsigned NOT NULL,
  `CostoMuestra_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`General_id`,`CostoParametro_id`,`CostoParametro_Parametros_id`,`CostoMuestra_id`),
  KEY `fk_costos_General1_idx` (`General_id`),
  KEY `fk_costos_CostoParametro1_idx` (`CostoParametro_id`,`CostoParametro_Parametros_id`),
  KEY `fk_costos_costoMuestra1_idx` (`CostoMuestra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `decreto`
--

CREATE TABLE IF NOT EXISTS `decreto` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) DEFAULT NULL,
  `gaceta` varchar(6) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `decreto`
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
-- Table structure for table `decreto_has_tipo`
--

CREATE TABLE IF NOT EXISTS `decreto_has_tipo` (
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Decreto_id`,`Tipo_id`),
  KEY `fk_Decreto_has_Tipo_Tipo1_idx` (`Tipo_id`),
  KEY `fk_Decreto_has_Tipo_Decreto1_idx` (`Decreto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `decreto_has_tipo`
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
-- Table structure for table `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `contador` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `contador`) VALUES
(1, 'Agua', 0),
(2, 'Desechos', 0),
(3, 'Higiene Ocupacional', 0),
(4, 'Emisiones Atmosfericas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departamento_has_decreto`
--

CREATE TABLE IF NOT EXISTS `departamento_has_decreto` (
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  `Decreto_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Departamento_id`,`Decreto_id`),
  KEY `fk_Departamento_has_Decreto_Decreto1_idx` (`Decreto_id`),
  KEY `fk_Departamento_has_Decreto_Departamento1_idx` (`Departamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departamento_has_decreto`
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
-- Table structure for table `dialaborables`
--

CREATE TABLE IF NOT EXISTS `dialaborables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dias` date DEFAULT NULL,
  `Referencia_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_diaLaborables_referencia1_idx` (`Referencia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `serial` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `propietario` varchar(45) DEFAULT NULL,
  `equiposcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `equipos_has_general`
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
-- Table structure for table `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `copias` tinyint(3) unsigned DEFAULT NULL,
  `caudal` enum('Aplica','No Aplica') DEFAULT NULL,
  `analisis` enum('Analisis y Muestreo','Analisis') DEFAULT NULL,
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
-- Table structure for table `general_has_tipo`
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
-- Table structure for table `limites`
--

CREATE TABLE IF NOT EXISTS `limites` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `liminf` float DEFAULT NULL,
  `limsup` float DEFAULT NULL,
  `existente` enum('Si','No') DEFAULT NULL,
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
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `muestras`
--

CREATE TABLE IF NOT EXISTS `muestras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` binary(1) DEFAULT NULL,
  `horas` tinyint(4) DEFAULT NULL,
  `General_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Muestras_General1_idx` (`General_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ordencompra`
--

CREATE TABLE IF NOT EXISTS `ordencompra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nOrden` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(150) DEFAULT NULL,
  `observaciones` text,
  `estado` enum('Rechazado','Pendiente','Aceptada') DEFAULT NULL,
  `Peticion_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ordenCompra_peticion1_idx` (`Peticion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parametros`
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
-- Table structure for table `parametros_has_muestras`
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
-- Table structure for table `peticion`
--

CREATE TABLE IF NOT EXISTS `peticion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fPeticion` date DEFAULT NULL,
  `cadena` varchar(15) DEFAULT NULL,
  `fVencimiento` tinyint(3) unsigned DEFAULT NULL,
  `fCreacion` timestamp NULL DEFAULT NULL,
  `Referencia_id` int(10) unsigned NOT NULL,
  `Costos_id` int(10) unsigned NOT NULL,
  `Costos_General_id` int(10) unsigned NOT NULL,
  `Costos_CostoParametro_id` int(10) unsigned NOT NULL,
  `Costos_CostoParametro_Parametros_id` int(10) unsigned NOT NULL,
  `Costos_CostoMuestra_id` int(10) unsigned NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  `Muestras_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`Costos_id`,`Costos_General_id`,`Costos_CostoParametro_id`,`Costos_CostoParametro_Parametros_id`,`Costos_CostoMuestra_id`,`General_id`,`Muestras_id`,`Referencia_id`),
  KEY `fk_peticion_referencia1_idx` (`Referencia_id`),
  KEY `fk_peticion_costos1_idx` (`Costos_id`,`Costos_General_id`,`Costos_CostoParametro_id`,`Costos_CostoParametro_Parametros_id`,`Costos_CostoMuestra_id`),
  KEY `fk_peticion_General1_idx` (`General_id`),
  KEY `fk_peticion_Muestras1_idx` (`Muestras_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `plantilla`
--

CREATE TABLE IF NOT EXISTS `plantilla` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `reporte` text,
  `Vendedor_id` tinyint(3) unsigned NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reporte_Vendedor1_idx` (`Vendedor_id`),
  KEY `fk_reporte_Departamento1_idx` (`Departamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `puesto`
--

CREATE TABLE IF NOT EXISTS `puesto` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rama`
--

CREATE TABLE IF NOT EXISTS `rama` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rama_has_caracterizacion`
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
-- Table structure for table `rama_has_general`
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
-- Table structure for table `referencia`
--

CREATE TABLE IF NOT EXISTS `referencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ano` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Plantilla_id` tinyint(3) unsigned NOT NULL,
  `General_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reporte_Plantilla1_idx` (`Plantilla_id`),
  KEY `fk_reporte_General1_idx` (`General_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subtipo`
--

CREATE TABLE IF NOT EXISTS `subtipo` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `subtipo`
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
-- Table structure for table `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tipo`
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
-- Table structure for table `tipo_has_subtipo`
--

CREATE TABLE IF NOT EXISTS `tipo_has_subtipo` (
  `Tipo_id` tinyint(3) unsigned NOT NULL,
  `SubTipo_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`Tipo_id`,`SubTipo_id`),
  KEY `fk_Tipo_has_SubTipo_SubTipo1_idx` (`SubTipo_id`),
  KEY `fk_Tipo_has_SubTipo_Tipo1_idx` (`Tipo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_has_subtipo`
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
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_track_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Puesto_id` tinyint(3) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `Departamento_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Vendedor_Puesto_idx` (`Puesto_id`),
  KEY `fk_Vendedor_user1_idx` (`user_id`),
  KEY `fk_Vendedor_Departamento1_idx` (`Departamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- -----------------------------------------------------
-- Table `HL`.`General_has_SubTipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HL`.`General_has_SubTipo` (
  `General_id` INT UNSIGNED NOT NULL,
  `SubTipo_id` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`General_id`, `SubTipo_id`),
  INDEX `fk_General_has_SubTipo_SubTipo1_idx` (`SubTipo_id` ASC),
  INDEX `fk_General_has_SubTipo_General1_idx` (`General_id` ASC),
  CONSTRAINT `fk_General_has_SubTipo_General1`
    FOREIGN KEY (`General_id`)
    REFERENCES `HL`.`General` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_General_has_SubTipo_SubTipo1`
    FOREIGN KEY (`SubTipo_id`)
    REFERENCES `HL`.`SubTipo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caracterizacion`
--
ALTER TABLE `caracterizacion`
  ADD CONSTRAINT `fk_Caracterizacion_Equipos1` FOREIGN KEY (`Equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `caracterizacion_has_departamento`
--
ALTER TABLE `caracterizacion_has_departamento`
  ADD CONSTRAINT `fk_Caracterizacion_has_Departamento_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Caracterizacion_has_Departamento_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `caracterizacion_has_equipos`
--
ALTER TABLE `caracterizacion_has_equipos`
  ADD CONSTRAINT `fk_Caracterizacion_has_Equipos_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Caracterizacion_has_Equipos_Equipos1` FOREIGN KEY (`Equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `carea`
--
ALTER TABLE `carea`
  ADD CONSTRAINT `fk_CArea_celular1` FOREIGN KEY (`Celular_id`) REFERENCES `celular` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `celular`
--
ALTER TABLE `celular`
  ADD CONSTRAINT `fk_celular_Clientes1` FOREIGN KEY (`Clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_celular_Vendedor1` FOREIGN KEY (`Vendedor_id`) REFERENCES `vendedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `costomuestra`
--
ALTER TABLE `costomuestra`
  ADD CONSTRAINT `fk_costoMuestra_Muestras1` FOREIGN KEY (`Muestras_id`) REFERENCES `muestras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `costoparametro`
--
ALTER TABLE `costoparametro`
  ADD CONSTRAINT `fk_CostoParametro_Parametros1` FOREIGN KEY (`Parametros_id`) REFERENCES `parametros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `costopredeterminados_has_costomuestra`
--
ALTER TABLE `costopredeterminados_has_costomuestra`
  ADD CONSTRAINT `fk_costoPredeterminados_has_costoMuestra_costoPredeterminados1` FOREIGN KEY (`CostoPredeterminados_id`) REFERENCES `costopredeterminados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_costoPredeterminados_has_costoMuestra_costoMuestra1` FOREIGN KEY (`CostoMuestra_id`) REFERENCES `costomuestra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `costopredeterminados_has_costoparametro`
--
ALTER TABLE `costopredeterminados_has_costoparametro`
  ADD CONSTRAINT `fk_costoPredeterminados_has_CostoParametro_costoPredeterminad1` FOREIGN KEY (`CostoPredeterminados_id`) REFERENCES `costopredeterminados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_costoPredeterminados_has_CostoParametro_CostoParametro1` FOREIGN KEY (`CostoParametro_id`) REFERENCES `costoparametro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `costos`
--
ALTER TABLE `costos`
  ADD CONSTRAINT `fk_costos_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_costos_CostoParametro1` FOREIGN KEY (`CostoParametro_id`, `CostoParametro_Parametros_id`) REFERENCES `costoparametro` (`id`, `Parametros_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_costos_costoMuestra1` FOREIGN KEY (`CostoMuestra_id`) REFERENCES `costomuestra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `decreto_has_tipo`
--
ALTER TABLE `decreto_has_tipo`
  ADD CONSTRAINT `fk_Decreto_has_Tipo_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Decreto_has_Tipo_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `departamento_has_decreto`
--
ALTER TABLE `departamento_has_decreto`
  ADD CONSTRAINT `fk_Departamento_has_Decreto_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Departamento_has_Decreto_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dialaborables`
--
ALTER TABLE `dialaborables`
  ADD CONSTRAINT `fk_diaLaborables_referencia1` FOREIGN KEY (`Referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `equipos_has_general`
--
ALTER TABLE `equipos_has_general`
  ADD CONSTRAINT `fk_Equipos_has_General_Equipos1` FOREIGN KEY (`Equipos_id`) REFERENCES `equipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Equipos_has_General_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `general`
--
ALTER TABLE `general`
  ADD CONSTRAINT `fk_General_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_Clientes1` FOREIGN KEY (`Clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_Vendedor1` FOREIGN KEY (`Vendedor_id`) REFERENCES `vendedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `general_has_tipo`
--
ALTER TABLE `general_has_tipo`
  ADD CONSTRAINT `fk_General_has_Tipo_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_General_has_Tipo_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `limites`
--
ALTER TABLE `limites`
  ADD CONSTRAINT `fk_Limites_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Decreto1` FOREIGN KEY (`Decreto_id`) REFERENCES `decreto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_SubTipo1` FOREIGN KEY (`SubTipo_id`) REFERENCES `subtipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Limites_Rama1` FOREIGN KEY (`Rama_id`) REFERENCES `rama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `muestras`
--
ALTER TABLE `muestras`
  ADD CONSTRAINT `fk_Muestras_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD CONSTRAINT `fk_ordenCompra_peticion1` FOREIGN KEY (`Peticion_id`) REFERENCES `peticion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parametros`
--
ALTER TABLE `parametros`
  ADD CONSTRAINT `fk_Parametros_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parametros_Limites1` FOREIGN KEY (`Limites_id`) REFERENCES `limites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parametros_has_muestras`
--
ALTER TABLE `parametros_has_muestras`
  ADD CONSTRAINT `fk_Parametros_has_Muestras_Parametros1` FOREIGN KEY (`Parametros_id`) REFERENCES `parametros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parametros_has_Muestras_Muestras1` FOREIGN KEY (`Muestras_id`) REFERENCES `muestras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peticion`
--
ALTER TABLE `peticion`
  ADD CONSTRAINT `fk_peticion_referencia1` FOREIGN KEY (`Referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_costos1` FOREIGN KEY (`Costos_id`, `Costos_General_id`, `Costos_CostoParametro_id`, `Costos_CostoParametro_Parametros_id`, `Costos_CostoMuestra_id`) REFERENCES `costos` (`id`, `General_id`, `CostoParametro_id`, `CostoParametro_Parametros_id`, `CostoMuestra_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_Muestras1` FOREIGN KEY (`Muestras_id`) REFERENCES `muestras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `plantilla`
--
ALTER TABLE `plantilla`
  ADD CONSTRAINT `fk_reporte_Vendedor1` FOREIGN KEY (`Vendedor_id`) REFERENCES `vendedor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reporte_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rama_has_caracterizacion`
--
ALTER TABLE `rama_has_caracterizacion`
  ADD CONSTRAINT `fk_Rama_has_Caracterizacion_Rama1` FOREIGN KEY (`Rama_id`) REFERENCES `rama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rama_has_Caracterizacion_Caracterizacion1` FOREIGN KEY (`Caracterizacion_id`) REFERENCES `caracterizacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rama_has_general`
--
ALTER TABLE `rama_has_general`
  ADD CONSTRAINT `fk_Rama_has_General_Rama1` FOREIGN KEY (`Rama_id`) REFERENCES `rama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rama_has_General_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `fk_reporte_Plantilla1` FOREIGN KEY (`Plantilla_id`) REFERENCES `plantilla` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reporte_General1` FOREIGN KEY (`General_id`) REFERENCES `general` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tipo_has_subtipo`
--
ALTER TABLE `tipo_has_subtipo`
  ADD CONSTRAINT `fk_Tipo_has_SubTipo_Tipo1` FOREIGN KEY (`Tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tipo_has_SubTipo_SubTipo1` FOREIGN KEY (`SubTipo_id`) REFERENCES `subtipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `fk_track_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `fk_Vendedor_Puesto` FOREIGN KEY (`Puesto_id`) REFERENCES `puesto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vendedor_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vendedor_Departamento1` FOREIGN KEY (`Departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
