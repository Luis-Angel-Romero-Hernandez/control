-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2024 a las 16:25:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario_ius`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idadministrador` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idadministrador`, `username`, `nombres`, `apellidos`, `password`, `rol_id`) VALUES
(1, 'Administrador', 'angel', 'romero', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'Usuario', 'jose', 'martinez', '827ccb0eea8a706c4c34a16891f84e7b', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `nombre`) VALUES
(1, 'RECEPCION'),
(2, 'AUDITORIA'),
(3, 'CONTABLE'),
(4, 'JURIDICA'),
(5, 'NOMINAS'),
(6, 'RECURSOS HUMANOS'),
(7, 'SISTEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `numero_inventario` varchar(45) NOT NULL,
  `numero_serie` varchar(45) NOT NULL,
  `marca` int(11) DEFAULT NULL,
  `disco_duro` varchar(45) NOT NULL,
  `procesador` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `idtipo_equipo` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `numero_inventario`, `numero_serie`, `marca`, `disco_duro`, `procesador`, `ram`, `idtipo_equipo`, `estado`) VALUES
(1, '1', 'HGJ43893423', 3, '1 TB', '2.3 Ghz', '8 GB', 2, 2),
(2, '2', 'HJGDFHJ734275', 4, '500 GB', '3.5 GHZ', '4 GB', 1, 2),
(3, '3', 'HJKFDHKJ4783675', 6, '1 TB', '3.6 GHZ', '4 GB', 1, 2),
(4, '4', 'HJSDGAF67345', 3, '1 TB', '2.3 GHZ', '8 GB', 2, 2),
(5, '5', 'HJSDF4729832', 3, '1 TB', '2.5 GHZ', '3 GB', 1, 2),
(6, '6', '87425HGJ2ERWER', 2, '500 GB', '2.8 GHZ', '4 GB', 1, 2),
(7, '7', 'JHG34578FJKWD', 11, '250 GB', '1.2 GHZ', '8 GB', 2, 2),
(8, '8', 'JKSDHF234782R', 1, '240 GB', '3.1 GHZ', '8 GB', 2, 2),
(9, '9', 'JKDWHF3827R', 3, '1 TB', '2.2 GHZ', '4 GB', 2, 2),
(10, '10', 'JKFDH3487DSF', 11, '1 TB', '3.5 GHZ', '8 GB', 1, 2),
(11, '11', 'SDFKJ34298324', 3, '1 TB', '1.6 GHZ', '8 GB', 2, 2),
(12, '12', 'HKSDFKD237864', 3, '1 TB', '3.5 GHZ', '8 GB', 2, 2),
(13, '13', 'SEFHUWEJK7894', 2, '500 GB', '1.7 GHZ', '8 GB', 2, 2),
(14, '14', 'JHSEBF7Y23768', 2, '1 TB', '2.5 GHZ', '8 GB', 2, 2),
(15, '15', 'JHSDGF734822', 1, '500 GB', '2.5 GHZ', '4 GB', 2, 2),
(16, '16', 'JKHSDF342TR78', 2, '1 TB', '3.5 GHZ', '4 GB', 1, 2),
(17, '17', 'DSFKH4WIU23', 3, '1 TB', '2.3 GHZ', '8 GB', 2, 2),
(18, '18', 'FDSKLJH34234', 11, '500 GB', '3.3 GHZ', '4 GB', 1, 2),
(19, '19', 'JKHDFGW234324', 3, '240 GB', '1.1 GHZ', '8 GB', 2, 2),
(20, '20', 'DSFSIOWEJ2342', 2, '1 TB', '3.6 GHZ', '4 GB', 1, 2),
(21, '21', 'HJFDCYUGDS56723', 2, '470 GB', '2.3 GHZ', '8 GB', 2, 2),
(22, '22', 'JYHGSDDCJGH67823', 2, '300 GB', '2.2 GHZ', '3 GB', 1, 2),
(23, '23', 'HGFVD672GC7822', 1, '230 GB', '2.5 GHZ', '8 GB', 2, 2),
(24, '24', 'UGCJKG2783B23378D', 3, '150 GB', '2 GHZ', '4 GB', 2, 2),
(25, '25', 'HGCVDSTY2F31678', 1, '1 TB', '2.3 GHZ', '8 GB', 2, 2),
(26, '26', 'HJVBCYVW6732678', 3, '700 GB', '1.8 GHZ', '4 GB', 2, 2),
(27, '27', 'HJGD67823VB2', 2, '1 TB', '1.9 GHZ', '4 GB', 2, 1),
(28, '28', 'YHIUGSDBCWU732', 2, '1 TB', '1.8 GHZ ', '4 GB', 1, 2),
(29, '29 ', 'HGFEUDYGHD2323', 3, '1 TB', '2.2 GHZ ', '4 GB', 2, 2),
(30, '30', '6723GE726D2DYUW', 1, '240 GB', '2..6 GHZ', '8 GB', 2, 2),
(31, '31', '6RF67R76RF76', 11, '1 TB', '1.6 GHZ', '4 GB', 2, 2),
(32, '32', '67T3E76R23Y7U', 3, '1 TB', '2 GHZ', '4 GB', 2, 2),
(33, '33', 'WDG8347T287D23', 2, '500 GB', '2.5 GHZ ', '6 GB', 2, 2),
(34, '34', '67RF67FI67F3UIY7', 1, '1 TB', '1.6 GHZ', '4 GB', 2, 2),
(35, '35', '5D256DS112S21', 6, '150 GB', '1.8 GHZ', '6 GB', 1, 1),
(36, '36', 'E523675R223D45', 2, '1 TB', '3.6 GHZ', '8 GB', 1, 2),
(37, '37', 'D76645XTY34345', 2, '500 GB', '2.5 GHZ', '8 GB', 2, 2),
(38, '38', 'RDX56UERI87R', 1, '250 GB', '2.4 GHZ', '8 GB', 2, 2),
(39, '39 ', 'SD6YFTY787UR', 2, '1 TB', '1.8 GHZ ', '16 GB', 2, 2),
(40, '40', '4SWQS433XWQXT', 2, '30 GB', '1.4 GHZ', '2.5 GB', 2, 1),
(41, '41', 'FBDDC56YG87657', 2, '500 GB', '1.1 GHZ ', '4 GB', 2, 2),
(42, '42', 'T87TV6RV7R6R7V6', 6, '1 TB', '3.6 GHZ', '8 GB', 1, 2),
(43, '43', 'AS34W45WS434', 1, '240 GB', '2.4 GHZ', '8 GB', 2, 2),
(44, '44', 'PP90I080990756E', 3, '240 GB', '1.3 GHZ', '8 GB', 2, 2),
(45, '45', 'RU67C76UCR67', 2, '1 TB', '2.4 GHZ', '8 GB', 2, 2),
(46, '46', 'SERW34QS5445', 3, '1 TB', '2.3 GHZ', '8 GB', 2, 2),
(47, '47', '45566EV7676R7667', 5, '500 GB', '1.4 GHZ', '4 GB', 1, 1),
(48, '48', 'YTR76R87IT9T9896', 2, '1 TB', '1.8 GHZ', '8 GB', 2, 2),
(49, '49', '45W56EU7R8V75R7', 3, '1 TB', '2.5 GHZ', '8 GB', 2, 2),
(50, '50', '54TYG34HG4H46', 3, '1 TB', '1.6 GHZ', '8 GB', 2, 2),
(51, '51', 'F342TG54G54GQ2F', 3, '4 TB', '1.7 GHZ ', '32 GB', 1, 2),
(52, '52', '78Y34TY3428RT28', 3, '500 GB', '2.4 GHZ', '8 GB', 2, 2),
(53, '53', 'F43F345FG2F2G245', 16, '1 TB', '1.8 GHZ', '6 GB', 2, 2),
(54, '54', '78T3278TR12768T', 2, '240 GB', '1.6 GHZ', '8 GB', 2, 2),
(55, '55', 'F4G345G532G211', 3, '1 TB', '2.7 GHZ', '8 GB', 2, 2),
(56, '56', 'G785D872DG7871', 11, '500 GB', '1 GHZ', '3 GB', 2, 0),
(57, '57 ', 'T8237BCTR981981', 2, '1 TB', '1.9 GHZ', '4 GB', 2, 1),
(58, '58', '5DS781TB87S78ET7', 5, '500 GB', '1.6 GHZ', '4 GB', 1, 1),
(59, '59', 'DT27163TD761TS', 3, 'DESCONOCIDO', 'DESCONOCIDO', 'DESCONOCIDO', 2, 1),
(60, '62', '7YT34C89RY23E322', 16, '150 GB', '2.4 GHZ', '8 GB', 2, 0),
(61, '63', 'LKASYD982IWS7', 3, '150 GB', '2 GHZ ', '4 GB', 2, 1),
(62, '65', 'CXEFD2DFQWD2D', 2, '150 GB', '1.8 GHZ', '6 GB', 1, 2),
(63, '66', 'ED77T3783TD782T', 2, '150 GB', '1.8 GHZ', '6 GB', 1, 2),
(64, '67', 'HVDCXYUWGED7822', 1, '250 GB', '2.4 GHZ', '8 GB', 2, 2),
(65, '68 ', 'D233F324T2311', 8, '480 GB', '2.4 GHZ', '8 GB', 2, 2),
(66, '69 ', '7G83D72QT38G7RTDQ', 1, '240 GB', '1.9 GHZ', '8 GB', 2, 2),
(67, '70 ', '786T78I23TRSX7823', 3, '1 TB', '2 GHZ', '12 GB', 2, 2),
(68, '71', '67T3E67T23D7233', 2, '240 GB', '2.1 GHZ', '8 GB', 2, 2),
(69, '72', '9H649D87862D87', 2, '480 GB', '2.1 GHZ', '8 GB', 2, 2),
(70, '73 ', 'T78T24R712CCR12', 3, '240 GB', '2.4 GHZ', '16 GB', 2, 2),
(71, '74', 'CR4GE5GW4GF2345G', 2, '240 GB', '2.4 GHZ', '8 GB', 2, 2),
(72, '75 ', 'D342R23T234TDR', 2, '1 TB', '1.6 GHZ', '16 GB', 2, 2),
(73, '64', '872364782GHJD', 2, '150 GB', '1.87 GHZ', '6 GB', 1, 2),
(74, '76', 'HJVDSAHJ234', 2, '240 GB', '1.7 GHZ', '8 GB', 2, 2),
(75, '0', 'SIN DATOS', 1, 'SIN DATOS', 'SIN DATOS', 'SIN DATOS', 1, 0),
(76, '78', 'JKHDSAJKDFUI2', 2, '240 GB', '2.6 GHZ', '8 GB', 2, 1),
(77, '79', 'JKHFJEU3476', 25, '240 GB', '2.1 GHZ', '8 GB', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idstatus` int(11) NOT NULL,
  `numero_inventario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idstatus`, `numero_inventario`, `fecha`, `estado`) VALUES
(1, 13, '2023-02-10 04:38:53', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora`
--

CREATE TABLE `impresora` (
  `idimpresora` int(11) NOT NULL,
  `numero_inventario` int(11) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `marca` int(11) DEFAULT NULL,
  `numero_serie` varchar(45) NOT NULL,
  `velocidad` varchar(45) NOT NULL,
  `fecha_adquisicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `impresora`
--

INSERT INTO `impresora` (`idimpresora`, `numero_inventario`, `modelo`, `marca`, `numero_serie`, `velocidad`, `fecha_adquisicion`, `estado`) VALUES
(1, 60, 'MP 301 SPF', 10, 'AK647392', '28 COPIAS POR MINUTO', '2023-02-08 03:08:52', 1),
(2, 61, 'MP 2851', 10, 'DHI2348923', '30 PAGINAS POR MINUTO', '2023-02-03 11:51:18', 1),
(3, 77, 'L6170', 9, 'DJKSHSF87344', '', '2023-02-03 11:52:06', 1),
(4, 0, 'SIN DATOS', 32, 'SIN DATOS', 'SIN DATOS', '2023-03-29 21:40:05', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `numero_inventario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idusuario` int(11) DEFAULT NULL,
  `idteclado` int(11) DEFAULT NULL,
  `idmouse` int(11) DEFAULT NULL,
  `idmonitor` int(11) DEFAULT NULL,
  `idequipo` int(11) DEFAULT NULL,
  `idimpresora` int(11) DEFAULT NULL,
  `idtelefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`numero_inventario`, `fecha`, `idusuario`, `idteclado`, `idmouse`, `idmonitor`, `idequipo`, `idimpresora`, `idtelefono`) VALUES
(1, '2023-02-09 21:16:16', 5, 31, 56, 17, 1, 4, 2),
(2, '2023-02-08 00:04:21', 5, 1, 1, 1, 2, 4, 2),
(3, '2023-01-26 06:00:00', 5, 2, 2, 2, 3, 4, 2),
(4, '2023-01-26 06:00:00', 8, 31, 8, 17, 4, 2, 2),
(5, '2023-03-21 06:11:36', 8, 6, 7, 5, 5, 4, 2),
(6, '2023-03-21 06:11:41', 8, 5, 5, 4, 6, 4, 2),
(7, '2023-03-21 06:11:46', 8, 31, 6, 17, 7, 4, 2),
(8, '2023-03-21 06:11:55', 10, 7, 10, 17, 8, 4, 2),
(9, '2023-03-21 06:12:02', 10, 8, 11, 17, 9, 4, 2),
(10, '2023-03-21 06:12:09', 10, 9, 12, 16, 10, 4, 2),
(11, '2023-03-21 06:12:20', 10, 10, 13, 17, 11, 4, 2),
(12, '2023-03-21 07:00:57', 17, 13, 19, 15, 12, 4, 2),
(13, '2023-03-21 07:00:53', 17, 31, 15, 17, 13, 4, 2),
(14, '2023-03-21 07:00:49', 17, 31, 14, 17, 14, 4, 2),
(15, '2023-03-21 07:00:44', 17, 31, 17, 17, 15, 4, 2),
(16, '2023-03-21 07:00:39', 17, 11, 16, 17, 16, 4, 2),
(17, '2023-03-21 07:00:34', 14, 31, 23, 17, 17, 4, 2),
(18, '2023-03-21 07:00:29', 14, 19, 22, 14, 18, 4, 2),
(19, '2023-03-21 07:00:24', 9, 31, 20, 17, 19, 4, 2),
(20, '2023-03-21 07:00:19', 9, 14, 26, 12, 20, 4, 2),
(21, '2023-03-21 06:59:51', 9, 16, 25, 17, 21, 4, 2),
(22, '2023-03-21 06:59:46', 11, 15, 27, 13, 22, 4, 2),
(23, '2023-03-21 07:00:13', 11, 17, 24, 17, 23, 3, 2),
(24, '2023-09-05 23:48:15', 19, 18, 21, 17, 24, 4, 2),
(25, '2023-03-21 06:59:31', 6, 31, 32, 17, 25, 4, 2),
(26, '2023-03-21 06:59:27', 6, 31, 33, 17, 26, 4, 2),
(27, '2023-03-21 06:59:22', 6, 20, 28, 11, 28, 4, 2),
(28, '2023-09-05 23:59:08', 20, 31, 31, 17, 29, 4, 2),
(29, '2023-03-21 06:59:14', 6, 31, 29, 17, 30, 4, 2),
(30, '2023-09-06 01:44:47', 20, 31, 30, 17, 66, 4, 2),
(31, '2023-03-21 06:59:01', 2, 29, 44, 17, 31, 4, 2),
(32, '2023-09-05 23:47:12', 19, 31, 46, 17, 32, 4, 2),
(33, '2023-03-21 06:58:50', 2, 31, 45, 17, 33, 4, 2),
(34, '2023-03-21 06:58:45', 2, 28, 43, 17, 34, 4, 2),
(36, '2023-09-05 23:34:06', 2, 31, 56, 17, 68, 4, 2),
(37, '2023-03-21 06:58:30', 3, 30, 52, 10, 36, 4, 2),
(38, '2023-03-21 06:58:25', 3, 31, 51, 17, 37, 4, 2),
(39, '2023-03-21 06:58:21', 3, 31, 53, 17, 38, 4, 2),
(40, '2023-03-21 06:58:16', 13, 31, 54, 17, 39, 4, 2),
(41, '2023-03-21 06:58:11', 7, 31, 50, 17, 41, 4, 2),
(42, '2023-03-21 06:58:06', 12, 25, 41, 8, 42, 4, 2),
(43, '2023-03-21 06:58:01', 12, 22, 37, 17, 44, 4, 2),
(44, '2023-03-21 06:57:56', 12, 31, 39, 17, 45, 4, 2),
(45, '2023-03-21 06:57:50', 12, 31, 40, 17, 46, 4, 2),
(46, '2023-03-21 06:57:46', 12, 23, 38, 6, 62, 4, 2),
(47, '2023-03-21 06:57:41', 12, 24, 42, 7, 63, 4, 2),
(48, '2023-03-21 06:57:36', 4, 31, 35, 17, 48, 4, 2),
(49, '2023-03-21 06:57:31', 4, 21, 34, 17, 49, 4, 2),
(50, '2023-09-05 23:56:37', 6, 31, 36, 17, 50, 4, 2),
(51, '2023-03-21 06:57:22', 4, 31, 56, 17, 65, 4, 2),
(52, '2023-09-05 23:51:51', 18, 31, 56, 17, 51, 4, 2),
(54, '2023-03-21 06:55:42', 15, 31, 56, 17, 52, 4, 2),
(55, '2023-01-26 06:00:00', 1, 31, 56, 17, 53, 1, 2),
(56, '2023-03-21 06:54:51', 16, 31, 56, 17, 54, 4, 2),
(57, '2023-03-21 06:54:57', 16, 31, 56, 17, 55, 4, 2),
(58, '2023-03-21 06:55:01', 16, 31, 55, 17, 74, 4, 2),
(59, '2023-03-21 06:55:10', 18, 26, 48, 17, 27, 4, 2),
(60, '2023-09-05 23:50:24', 11, 31, 56, 17, 43, 4, 2),
(61, '2023-03-21 06:55:20', 18, 31, 56, 17, 67, 4, 2),
(62, '2023-03-21 06:55:26', 18, 31, 56, 17, 68, 4, 2),
(63, '2023-03-21 06:55:30', 18, 31, 56, 17, 69, 4, 2),
(64, '2023-03-21 06:55:34', 5, 31, 57, 17, 71, 4, 2),
(65, '2023-01-31 06:00:00', 5, 3, 3, 3, 73, 4, 2),
(66, '2023-09-05 23:28:18', 10, 31, 56, 17, 67, 4, 2),
(67, '2023-09-05 23:30:41', 3, 31, 56, 17, 69, 4, 2),
(68, '2023-09-05 23:52:58', 16, 31, 56, 17, 76, 4, 2),
(69, '2023-09-05 23:54:20', 17, 12, 18, 17, 64, 4, 2),
(70, '2023-09-06 00:01:48', 4, 31, 56, 17, 70, 4, 2),
(71, '2023-09-06 01:45:49', 6, 31, 56, 17, 77, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `idmantenimiento` int(11) NOT NULL,
  `numero_inventario` int(11) DEFAULT NULL,
  `fecha_mantenimiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `observaciones` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`idmantenimiento`, `numero_inventario`, `fecha_mantenimiento`, `observaciones`, `estado`) VALUES
(1, 65, '2023-02-08 22:03:50', 'reparacion w', 2),
(2, 2, '2023-02-08 22:05:32', 'dfgds', 1),
(3, 52, '2023-02-01 23:41:14', 'reparacion w', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `nombre`) VALUES
(1, 'LENOVO'),
(2, 'HP'),
(3, 'DELL'),
(4, 'SAMSUNG'),
(5, 'COMPAQ'),
(6, 'VORAGO'),
(7, 'LOGITECH'),
(8, 'ASUS'),
(9, 'EPSON'),
(10, 'RICOH'),
(11, 'ACER'),
(12, 'PANASONIC'),
(13, 'STEREN'),
(14, 'GENIUS'),
(15, 'ELE-GATE'),
(16, 'SONY'),
(17, 'VERBATIM'),
(18, 'NEXTEP'),
(19, 'PERFECTCHOICE'),
(20, 'ACTECK'),
(21, 'TEXA'),
(22, 'AOPEN'),
(23, 'LG'),
(24, 'KLIPXTREME'),
(25, 'HUAWEI'),
(32, 'SIN DATOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE `monitor` (
  `idmonitor` int(11) NOT NULL,
  `numero_inventario` varchar(45) NOT NULL,
  `tipo_conector` varchar(45) NOT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `modelo` varchar(45) NOT NULL,
  `numero_serie` varchar(45) NOT NULL,
  `pulgadas` varchar(45) NOT NULL,
  `fecha_adquisicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `precio` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`idmonitor`, `numero_inventario`, `tipo_conector`, `idmarca`, `modelo`, `numero_serie`, `pulgadas`, `fecha_adquisicion`, `precio`, `estado`) VALUES
(1, '2', 'VGA', 4, 'S19D300NY', '02CSHCLG102270H', '18 IN', '2023-03-21 04:39:24', 'SIN DATOS', 1),
(2, '3', 'VGA', 4, 'S19F350HNL', 'ZZJEH4TH506907M', '18 IN', '2023-03-21 04:40:09', 'SIN DATOS', 1),
(3, '64', 'VGA', 11, 'P166HKL', 'MMLTYAA0035390396A4206', '15 IN', '2023-03-21 04:40:17', 'SIN DATOS', 1),
(4, '6', 'VGA', 11, 'AL1717A', 'ETL770C01', '18 IN', '2023-03-21 04:40:27', 'SIN DATOS', 1),
(5, '5', 'VGA', 3, 'GASG3247', 'EWDFHJ3G2234', '20 IN', '2023-03-21 04:40:36', 'SIN DATOS', 1),
(6, '65', 'VGA', 22, 'EHJFIUDH', 'JDHIWUED', '20 IN', '2023-03-21 04:40:44', 'SIN DATOS', 1),
(7, '66', 'VGA', 23, '7TED23', '32HD2I', '20 IN', '2023-03-21 04:40:52', 'SIN DATOS', 1),
(8, '42', 'VGA', 4, 'YEUWIR', 'WERUIE', '20 IN', '2023-03-21 04:41:02', 'SIN DATOS', 1),
(9, '35', 'VGA', 6, 'UTFKYGVHJ', 'YFUGVHJ', '20 IN', '2023-03-21 04:41:09', 'SIN DATOS', 1),
(10, '36', 'VGA', 2, 'KJDFN', 'DFEWWER', '20 IN', '2023-03-21 04:41:16', 'SIN DATOS', 1),
(11, '28', 'VGA', 5, 'GFYUG', 'YUGIH', '18 IN', '2023-03-21 04:41:24', 'SIN DATOS', 1),
(12, '20', 'VGA', 4, 'UYTYGKJ', 'GKJ', '18 IN', '2023-03-21 04:41:31', 'SIN DATOS', 1),
(13, '22', 'VGA', 6, 'HGJHKN', 'KJHLFFCGJ', '15', '2023-03-21 04:41:38', 'SIN DATOS', 1),
(14, '18', 'VGA', 4, 'DSJKHFW', 'SDFWEK', '18 IN', '2023-03-21 04:41:47', 'SIN DATOS', 1),
(15, '12', 'VGA', 11, 'DCWER', 'EFFD', '18 IN', '2023-03-21 04:41:56', 'SIN DATOS', 1),
(16, '10', 'VGA', 11, 'SAKOFDHJ', 'UIGADSFH', '15', '2023-03-21 04:42:03', 'SIN DATOS', 1),
(17, '0', 'SIN DATOS', 32, 'SIN DATOS', 'SIN DATOS', 'SIN DATOS', '2023-03-29 21:40:21', 'SIN DATOS', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mouse`
--

CREATE TABLE `mouse` (
  `idmouse` int(11) NOT NULL,
  `numero_inventario` varchar(45) NOT NULL,
  `tipo_conector` varchar(45) NOT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `modelo` varchar(60) NOT NULL,
  `fecha_adquisicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `precio` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `mouse`
--

INSERT INTO `mouse` (`idmouse`, `numero_inventario`, `tipo_conector`, `idmarca`, `modelo`, `fecha_adquisicion`, `precio`, `estado`) VALUES
(1, '2', 'USB', 6, 'KMS-104', '2023-04-01 00:59:57', 'SIN DATOS', 1),
(2, '3', 'USB', 7, 'DZL-M0026', '2023-03-21 04:49:48', 'SIN DATOS', 1),
(3, '64', 'USB', 14, 'GM-110021', '2023-03-21 04:49:57', 'SIN DATOS', 1),
(4, '57', 'USB', 7, 'M-U0026', '2023-03-21 04:50:04', 'SIN DATOS', 1),
(5, '6', 'USB', 7, 'M-U0026', '2023-03-21 04:50:10', 'SIN DATOS', 1),
(6, '7', 'USB', 7, 'M-U0026', '2023-03-21 04:50:16', 'SIN DATOS', 1),
(7, '5', 'USB', 17, '97074', '2023-03-21 04:50:25', 'SIN DATOS', 1),
(8, '4', 'USB', 7, 'M-U0026', '2023-03-21 04:50:30', 'SIN DATOS', 1),
(9, '1', 'USB', 7, 'M-U0026', '2023-03-21 04:50:36', 'SIN DATOS', 1),
(10, '8', 'USB', 18, 'NE-414', '2023-03-21 04:50:42', 'SIN DATOS', 1),
(11, '9', 'USB', 7, 'SN', '2023-03-21 04:50:49', 'SIN DATOS', 1),
(12, '10', 'USB', 7, 'M-U0026', '2023-03-21 04:50:57', 'SIN DATOS', 1),
(13, '11', 'USB', 6, 'SN', '2023-03-21 04:51:12', 'SIN DATOS', 1),
(14, '14', 'USB', 7, 'M-U0026', '2023-03-21 04:51:19', 'SIN DATOS', 1),
(15, '13', 'USB', 7, 'M-U0026', '2023-03-21 04:51:24', 'SIN DATOS', 1),
(16, '16', 'USB', 7, 'M-U0026', '2023-03-21 04:51:31', 'SIN DATOS', 1),
(17, '15', 'USB', 7, 'M-U0026', '2023-03-21 04:51:37', 'SIN DATOS', 1),
(18, '67', 'USB', 7, 'M-U0026', '2023-03-21 04:51:44', 'SIN DATOS', 1),
(19, '12', 'USB', 7, 'M-U0026', '2023-03-21 04:51:50', 'SIN DATOS', 1),
(20, '19', 'USB', 7, 'M-U0026', '2023-03-21 04:51:55', 'SIN DATOS', 1),
(21, '24', 'USB', 7, 'M-U0026', '2023-03-21 04:52:02', 'SIN DATOS', 1),
(22, '18', 'USB', 7, 'M-U0026', '2023-03-21 04:52:10', 'SIN DATOS', 1),
(23, '17', 'USB', 7, 'M-U0026', '2023-03-21 04:52:16', 'SIN DATOS', 1),
(24, '23', 'USB', 7, 'M-U0026', '2023-03-21 04:52:22', 'SIN DATOS', 1),
(25, '21', 'USB', 7, 'M-U0026', '2023-03-21 04:52:27', 'SIN DATOS', 1),
(26, '20', 'USB', 7, 'M-U0026', '2023-03-21 04:52:32', 'SIN DATOS', 1),
(27, '22', 'USB', 14, 'SN', '2023-03-21 04:52:38', 'SIN DATOS', 1),
(28, '28', 'USB', 7, 'M-U0026', '2023-03-21 04:52:43', 'SIN DATOS', 1),
(29, '30', 'USB', 6, 'K-104', '2023-03-21 04:52:49', 'SIN DATOS', 1),
(30, '69', 'USB', 7, 'M-U0026', '2023-03-21 04:52:55', 'SIN DATOS', 1),
(31, '29', 'USB', 7, 'M-U0026', '2023-03-21 04:53:01', 'SIN DATOS', 1),
(32, '25', 'USB', 7, 'M-U0026', '2023-03-21 04:53:07', 'SIN DATOS', 1),
(33, '26', 'USB', 14, 'GM-080025', '2023-03-21 04:53:13', 'SIN DATOS', 1),
(34, '49', 'USB', 7, 'M-U0026', '2023-03-21 04:53:18', 'SIN DATOS', 1),
(35, '48', 'USB', 7, 'M-U0026', '2023-03-21 04:53:24', 'SIN DATOS', 1),
(36, '50', 'USB', 2, 'MODGUO', '2023-03-21 04:53:29', 'SIN DATOS', 1),
(37, '44', 'USB', 20, 'AK32700', '2023-03-21 04:53:37', 'SIN DATOS', 1),
(38, '65', 'USB', 7, 'M-U0026', '2023-03-21 04:53:42', 'SIN DATOS', 1),
(39, '45', 'USB', 20, 'AK2-2700', '2023-03-21 04:53:49', 'SIN DATOS', 1),
(40, '46', 'USB', 7, 'M-U0026', '2023-03-21 04:53:54', 'SIN DATOS', 1),
(41, '42', 'USB', 7, 'M-U0026', '2023-03-21 04:54:00', 'SIN DATOS', 1),
(42, '66', 'USB', 7, 'M-U0026', '2023-03-21 04:54:05', 'SIN DATOS', 1),
(43, '34', 'USB', 6, 'KMS-104', '2023-03-21 04:54:12', 'SIN DATOS', 1),
(44, '31', 'USB', 7, 'M-U0026', '2023-03-21 04:54:17', 'SIN DATOS', 1),
(45, '33', 'USB', 7, 'M-U0026', '2023-03-21 04:54:23', 'SIN DATOS', 1),
(46, '32', 'USB', 7, 'M-U0026', '2023-03-21 04:54:28', 'SIN DATOS', 1),
(47, '35', 'USB', 7, 'M-U0026', '2023-03-21 04:54:34', 'SIN DATOS', 1),
(48, '27', 'USB', 6, 'KMS-104', '2023-03-21 04:54:39', 'SIN DATOS', 1),
(49, '70', 'USB', 7, 'M-U0026', '2023-03-21 04:54:44', 'SIN DATOS', 1),
(50, '41', 'USB', 7, 'M-U0026', '2023-03-21 04:54:51', 'SIN DATOS', 1),
(51, '37', 'USB', 7, 'M-U0026', '2023-03-21 04:54:59', 'SIN DATOS', 1),
(52, '36', 'USB', 7, 'M-U0026', '2023-03-21 04:55:04', 'SIN DATOS', 1),
(53, '38', 'USB', 7, 'M-U0026', '2023-03-21 04:55:10', 'SIN DATOS', 1),
(54, '39', 'USB', 7, 'M-U', '2023-03-21 04:55:16', 'SIN DATOS', 1),
(55, '76', 'USB', 7, 'M-U0026', '2023-03-21 04:55:25', 'SIN DATOS', 1),
(56, '0', 'SIN DATOS', 32, 'SIN DATOS', '2023-03-29 21:39:44', 'SIN DATOS', 0),
(57, '74', 'USB', 7, 'M-U0026', '2023-03-21 04:55:41', 'SIN DATOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teclado`
--

CREATE TABLE `teclado` (
  `idteclado` int(11) NOT NULL,
  `numero_inventario` varchar(45) NOT NULL,
  `tipo_conector` varchar(45) NOT NULL,
  `idmarca` int(11) DEFAULT NULL,
  `modelo` varchar(60) NOT NULL,
  `fecha_adquisicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `precio` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `teclado`
--

INSERT INTO `teclado` (`idteclado`, `numero_inventario`, `tipo_conector`, `idmarca`, `modelo`, `fecha_adquisicion`, `precio`, `estado`) VALUES
(1, '2', 'USB', 14, 'KU-0183', '2023-03-21 04:46:46', 'SIN DATOS', 1),
(2, '3', 'USB', 14, 'GK-1011', '2023-03-21 04:46:36', 'SIN DATOS', 1),
(3, '64', 'USB', 7, 'YU0036', '2023-03-21 04:46:29', 'SIN DATOS', 1),
(4, '57', 'USB', 7, 'YU0041', '2023-01-19 06:00:00', '290', 1),
(5, '6', 'USB', 2, 'KU-0841', '2023-03-21 04:46:22', 'SIN DATOS', 1),
(6, '5', 'USB', 3, 'L2OU', '2023-03-21 04:46:13', 'SIN DATOS', 1),
(7, '8', 'USB', 14, 'GK-100011', '2023-03-21 04:46:05', 'SIN DATOS', 1),
(8, '9', 'USB', 7, 'YU0036', '2023-03-21 04:45:57', 'SIN DATOS', 1),
(9, '10', 'USB', 19, 'PC-200970', '2023-03-21 04:45:50', 'SIN DATOS', 1),
(10, '11', 'USB', 7, 'YU0036', '2023-03-21 04:45:42', 'SIN DATOS', 1),
(11, '16', 'USB', 7, 'YUM76A', '2023-03-21 04:45:25', 'SIN DATOS', 1),
(12, '67', 'USB', 6, 'KMS-104', '2023-03-21 04:45:19', 'SIN DATOS', 1),
(13, '12', 'USB', 7, 'YU0036', '2023-03-21 04:45:13', 'SIN DATOS', 1),
(14, '20', 'USB', 7, 'YU0036', '2023-03-21 04:45:06', 'SIN DATOS', 1),
(15, '22', 'USB', 7, 'YU0036', '2023-03-21 04:45:00', 'SIN DATOS', 1),
(16, '21', 'USB', 2, 'SK-2085', '2023-03-21 04:44:54', 'SIN DATOS', 1),
(17, '23', 'USB', 7, 'YU0036', '2023-03-21 04:44:48', 'SIN DATOS', 1),
(18, '24', 'USB', 6, 'KM-104', '2023-03-21 04:44:41', 'SIN DATOS', 1),
(19, '18', 'USB', 20, 'SN', '2023-03-21 04:44:33', 'SIN DATOS', 1),
(20, '28', 'USB', 21, 'K363', '2023-03-21 04:44:26', 'SIN DATOS', 1),
(21, '49', 'USB', 7, 'YU006', '2023-03-21 04:44:20', 'SIN DATOS', 1),
(22, '44', 'USB', 7, 'YU006', '2023-03-21 04:44:12', 'SIN DATOS', 1),
(23, '65', 'USB', 7, 'YU006', '2023-03-21 04:44:03', 'SIN DATOS', 1),
(24, '66', 'USB', 7, 'YU0036', '2023-03-21 04:43:56', 'SIN DATOS', 1),
(25, '42', 'USB', 7, 'YU0036', '2023-03-21 04:43:47', 'SIN DATOS', 1),
(26, '27', 'USB', 24, 'KKS-0505', '2023-03-21 04:43:40', 'SIN DATOS', 1),
(27, '35', 'USB', 6, 'KMS-104', '2023-03-21 04:43:31', 'SIN DATOS', 1),
(28, '34', 'USB', 7, 'YU0036', '2023-03-21 04:43:26', 'SIN DATOS', 1),
(29, '31', 'USB', 6, 'KM-104', '2023-03-21 04:43:20', 'SIN DATOS', 1),
(30, '36', 'USB', 7, 'YU0036', '2023-03-21 04:43:13', 'SIN DATOS', 1),
(31, '0', 'SIN DATOS', 32, 'SIN DATOS', '2023-03-29 21:37:54', 'SIN DATOS', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `idtelefono` int(11) NOT NULL,
  `numero_inventario` varchar(11) NOT NULL,
  `marca` int(11) DEFAULT NULL,
  `modelo` varchar(60) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`idtelefono`, `numero_inventario`, `marca`, `modelo`, `estado`) VALUES
(1, '4', 4, 'DSFSDF', 1),
(2, '0', 32, 'SIN DATOS', 0),
(3, '0', 8, 'DFEREF', 1),
(4, '0', 5, '2FDSWF', 0),
(5, '0', 1, 'EEFWE32', 1),
(6, '0', 3, 'Fs03984', 1),
(7, '0', 4, 'hgfhgfgh', 0),
(8, '0', 14, '324', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE `tipo_equipo` (
  `idtipo_equipo` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipo_equipo`
--

INSERT INTO `tipo_equipo` (`idtipo_equipo`, `tipo`) VALUES
(1, 'Escritorio'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `idarea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `cargo`, `idarea`) VALUES
(1, 'GUSTAVO', 'NAVES SEGUNDO', 'SUBDIRECTOR', 3),
(2, 'MARLEN', 'AGUILAR LEANDRO', 'CONTADOR', 3),
(3, 'ANA', 'GONZALEZ DURAN', 'CONTADOR', 2),
(4, 'OMAR', 'MARTINEZ AMADO', 'CONTADOR', 3),
(5, 'TANIA', 'MEJIA ARCOS', 'CONTADOR', 3),
(6, 'ISAAC', 'SIN DATOS', 'CONTADOR', 3),
(7, 'JOEL', 'CHIMAL LAZARO', 'CONTADOR', 4),
(8, 'DIONICIO', 'BERNAL GARCIA', 'CONTADOR', 3),
(9, 'ANAKARE', 'ALVAREZ TOMAS', 'CONTADOR', 5),
(10, 'ABIGAIL', 'MARTINEZ DE LA CRUZ', 'CONTADOR', 3),
(11, 'HUGO JAVIER', 'MARTINEZ ANDERE', 'CONTADOR', 5),
(12, 'REYNA', 'MARCELO CRUZ', 'CONTADOR', 3),
(13, 'YANEERY JOSEELIN', 'HERMEREGILDO FAUSTINO', 'ABOGADA', 4),
(14, 'MAURICIO', 'VALENCIA LUIS', 'CONTADOR', 5),
(15, 'ANTONIO', 'BERNAL GARCIA', 'DIRECTOR GENERAL', 3),
(16, 'ISELA', 'MARTINEZ MARTINEZ', 'RECURSOS HUMANOS', 6),
(17, 'ANDRES', 'MONDRAGON', 'CONTADOR', 3),
(18, 'LUIS ANGEL ', 'ROMERO HERNANDEZ', 'SISTEMAS', 7),
(19, 'JOSE CARLOS', 'GONZALEZ LOPEZ', 'CONTADOR', 3),
(20, 'ALMA YENI', 'MARTINEZ CRUZ', 'CONTADOR', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idadministrador`),
  ADD KEY `idRol` (`rol_id`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`),
  ADD KEY `IdTipo_Equipos_idx` (`idtipo_equipo`),
  ADD KEY `Idmarca5_idx` (`marca`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indices de la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD PRIMARY KEY (`idimpresora`),
  ADD KEY `Idmarcas4_idx` (`marca`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`numero_inventario`),
  ADD KEY `idTelefonos_idx` (`idtelefono`),
  ADD KEY `IdTeclados_idx` (`idteclado`),
  ADD KEY `IdMouses_idx` (`idmouse`),
  ADD KEY `IdMonitores_idx` (`idmonitor`),
  ADD KEY `IdEquipos_idx` (`idequipo`),
  ADD KEY `IdUsuarios_idx` (`idusuario`),
  ADD KEY `IdImpresoras_idx` (`idimpresora`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`idmantenimiento`),
  ADD KEY `IdMantenimiento_idx` (`numero_inventario`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`idmonitor`),
  ADD KEY `IdMarcas_idx` (`idmarca`);

--
-- Indices de la tabla `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`idmouse`),
  ADD KEY `IdMarcas_idx` (`idmarca`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `teclado`
--
ALTER TABLE `teclado`
  ADD PRIMARY KEY (`idteclado`),
  ADD KEY `IdMarcas_idx` (`idmarca`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`idtelefono`),
  ADD KEY `Idmarca6_idx` (`marca`);

--
-- Indices de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  ADD PRIMARY KEY (`idtipo_equipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `IdAreas_idx` (`idarea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `impresora`
--
ALTER TABLE `impresora`
  MODIFY `idimpresora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `numero_inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `idmantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `monitor`
--
ALTER TABLE `monitor`
  MODIFY `idmonitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `mouse`
--
ALTER TABLE `mouse`
  MODIFY `idmouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `teclado`
--
ALTER TABLE `teclado`
  MODIFY `idteclado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `idtelefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  MODIFY `idtipo_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `idRol` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`idrol`) ON DELETE SET NULL;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `IdTipo_Equipos` FOREIGN KEY (`idtipo_equipo`) REFERENCES `tipo_equipo` (`idtipo_equipo`),
  ADD CONSTRAINT `Idmarca5` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD CONSTRAINT `Idmarcas4` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `IdEquipos` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE SET NULL,
  ADD CONSTRAINT `IdImpresoras` FOREIGN KEY (`idimpresora`) REFERENCES `impresora` (`idimpresora`) ON DELETE SET NULL,
  ADD CONSTRAINT `IdMonitores` FOREIGN KEY (`idmonitor`) REFERENCES `monitor` (`idmonitor`) ON DELETE SET NULL,
  ADD CONSTRAINT `IdMouses` FOREIGN KEY (`idmouse`) REFERENCES `mouse` (`idmouse`) ON DELETE SET NULL,
  ADD CONSTRAINT `IdTeclados` FOREIGN KEY (`idteclado`) REFERENCES `teclado` (`idteclado`) ON DELETE SET NULL,
  ADD CONSTRAINT `IdUsuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE SET NULL,
  ADD CONSTRAINT `idTelefonos` FOREIGN KEY (`idtelefono`) REFERENCES `telefono` (`idtelefono`) ON DELETE SET NULL;

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `IdMantenimiento` FOREIGN KEY (`numero_inventario`) REFERENCES `inventario` (`numero_inventario`);

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `IdMarcas2` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `mouse`
--
ALTER TABLE `mouse`
  ADD CONSTRAINT `IdMarcas3` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `teclado`
--
ALTER TABLE `teclado`
  ADD CONSTRAINT `IdMarcas1` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `Idmarca6` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `IdAreas` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
