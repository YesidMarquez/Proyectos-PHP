-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2018 a las 01:19:39
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `confronta_becall`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(200) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `descripcion`) VALUES
(1, 'AGENTE'),
(2, 'COORDINADOR'),
(3, 'BACKOFFICE'),
(4, 'RESPONSABLE DE BACKOFFICE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confronta`
--

CREATE TABLE `confronta` (
  `id_registro` int(200) NOT NULL,
  `id_llamada` int(200) NOT NULL,
  `cedula_cliente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` longblob NOT NULL,
  `usuario_cedula` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `registro` datetime NOT NULL,
  `campaña` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_registro` int(200) NOT NULL,
  `cedula_usuario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_dominio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `campaña` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_registro`, `cedula_usuario`, `nombres`, `usuario_dominio`, `campaña`, `cargo_id`) VALUES
(3, ' 1087991028', 'SANCHEZ QUICENO SANDRA LORENA', '', '', 1),
(4, ' 1088308622', 'OSPINA SHPONKO VICTOR ANDRES', '', '', 1),
(5, ' 1093223911', 'ALZATE GRANADA YULI VIVIANA', '', '', 1),
(6, ' 1088290412', 'GUEVARA VILLALEIDY DAHIANA', '', '', 1),
(7, ' 1088312056', 'RIVERA ALVAREZ MARILYN', '', '', 1),
(8, ' 4378082', 'GALLEGO LONDOÑO GUILLERMO', '', '', 1),
(9, ' 1007348039', 'RIVAS MOSQUERA YESENIA', '', '', 1),
(10, ' 1087552318', 'POSSO JARAMILLO JONATHAN ANDRES', '', '', 1),
(11, ' 1087995692', 'VÁSQUEZ PELÁEZ KAREN TATIANA', '', '', 1),
(12, ' 1088008421', 'FAJARDO MUNOZ JONATHAN DAVID', '', '', 1),
(13, ' 1088333179', 'BEDOYA GARCIA MATEO', '', '', 1),
(14, ' 1088333794', 'ARICAPA SALINAS BRAYAN', '', '', 1),
(15, ' 1088346887', 'CALDERON GONZALEZ ANYI PAOLA', '', '', 1),
(16, ' 1112780857', 'LEIVA ACEVEDO JHONATAN', '', '', 1),
(17, ' 1225090820', 'LONDOÑO VALENCIA JUAN MANUEL', '', '', 1),
(18, ' 1007231515', 'HERNANDEZ GALLEGO KELLY NATALY', '', '', 1),
(19, ' 1088297612', 'VASQUEZ MEZACATALINA', '', '', 1),
(20, ' 1088336966', 'CALDERON GONZALEZ  ANDREA YULIZA', '', '', 1),
(21, ' 1058819250', 'ESTEFANIA DELGADO SOTO', '', '', 1),
(22, ' 1088290951', 'JHON STEVEN ALMANZA CANO ', '', '', 1),
(23, ' 1088302493', 'STEVEN ESCUDERO VARGAS', '', '', 1),
(24, ' 42119097', 'GONZALEZ MARTINEZ MONICA ANDREA', '', '', 1),
(25, ' 1088026115', 'NIÑO DOMINGUEZ DAVID', '', '', 1),
(26, ' 9924298', 'VALENCIA ALVAREZ ANDRES MAURICIO', '', '', 1),
(27, ' 24716787', 'ORJUELA FAJARDO CAROLINA', '', '', 1),
(28, ' 42153677', 'LONDOÑO GARCES DIANA MILENA', '', '', 1),
(29, ' 1087553917', 'LALINDE GOMEZ HAROLD DAVID', '', '', 1),
(30, ' 1088006327', 'OYOLA VANEGAS LEIDI LILIANA', '', '', 1),
(31, ' 1088011666', 'PERDOMO GARCIA JESSICA JULIANA', '', '', 1),
(32, ' 1088021268', 'TREJOS LOAIZA OSCAR DANIEL', '', '', 1),
(33, ' 1088262725', 'HOYOS ARANGO LINA MARCELA', '', '', 1),
(34, ' 1088278002', 'GARCÍA RAMIREZ JUAN FERNANDO', '', '', 1),
(35, ' 1088341603', 'RODRIGUEZ OJEDA VANESSA', '', '', 1),
(36, ' 1093222191', 'MORALES LOPEZ RUBEN ANTONIO', '', '', 1),
(37, ' 10117128', 'DIAZ MUÑOZ HERNANDO', '', '', 1),
(38, ' 42127349', 'PALACIO IBARGUEN LINA MARIA', '', '', 1),
(39, ' 1088250189', 'OROZCO SERNA NATALIA', '', '', 1),
(40, ' 1088003214', 'VELEZ ARREDONDO JUAN SEBASTIAN', '', '', 2),
(41, ' 1088003216', 'VELEZ ARREDONDO CRISTIAN ANDRES', '', '', 2),
(42, ' 1088255129', 'QUIROZ GIRALDO JHON WALTER', '', '', 2),
(43, ' 1087492785', 'ROMERO VÉLEZ JENNY TATIANA', '', '', 2),
(44, ' 1088027972', 'OVIEDO XIOMARA', '', '', 2),
(45, ' 1087995736', 'VILLADA MONTAÑO MARCELA', '', '', 2),
(46, ' 1088016724', 'VALERO MUÑOZ SERGIO ANTONIO', '', '', 2),
(47, ' 1088025241', 'FLORES ECHEVRRRY ALEJANDRA', '', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `confronta`
--
ALTER TABLE `confronta`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `confronta`
--
ALTER TABLE `confronta`
  MODIFY `id_registro` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_registro` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
