-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2017 a las 00:01:26
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nit_cliente` int(50) NOT NULL,
  `razon_social` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nit_cliente`, `razon_social`, `direccion`, `telefono`) VALUES
(830070339, 'COGNOSEGURIDAD', 'CALLE 8 # 20-25', 3250015),
(860507033, 'VISE LTDA', 'AV 30 AGOSTO # 42-15', 3455115);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costo`
--

CREATE TABLE `costo` (
  `id_costo` int(50) NOT NULL,
  `concepto` text COLLATE utf8_spanish_ci NOT NULL,
  `reparacion_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `costo`
--

INSERT INTO `costo` (`id_costo`, `concepto`, `reparacion_id`) VALUES
(11, 'Reparación fuente', 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `serie_disp` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `referencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `motivo_ingreso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nota_ingreso` text COLLATE utf8_spanish_ci NOT NULL,
  `cliente_nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`serie_disp`, `modelo`, `referencia`, `motivo_ingreso`, `nota_ingreso`, `cliente_nit`) VALUES
('MXL5227', 'V193B', 'MONITOR LCD', 'NO ENCIENDE', 'eN MONITOR SE RECIBE EN BUEN ESTADO, SE PROBO PERO NO ENCNDIO', 860507033),
('WHK200', 'HP PRO DESK 300', 'TORRE HP', 'NO ENCIENDE ', 'Se recibe torre con componentes de harddware completos, se realizo una prueba inicial confirmando el motivo de ingreso', 830070339);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_tecnico` int(50) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `disp_serie` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_tecnico`, `nombres`, `apellidos`, `disp_serie`) VALUES
(1088256244, 'Yesid Leandro', 'Marquez Pradilla', 'MXL5227'),
(1088273174, 'Paula Andrea', 'Jimenez Montoya', 'WHK200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(50) NOT NULL,
  `cliente_nit` int(50) NOT NULL,
  `reparacion_id` int(50) NOT NULL,
  `costo_id` int(50) NOT NULL,
  `tecnico_id` int(50) NOT NULL,
  `valor_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `cliente_nit`, `reparacion_id`, `costo_id`, `tecnico_id`, `valor_id`) VALUES
(20, 830070339, 101, 11, 1088256244, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantia`
--

CREATE TABLE `garantia` (
  `id_garantia` int(50) NOT NULL,
  `revision_id` int(50) NOT NULL,
  `tipo_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `garantia`
--

INSERT INTO `garantia` (`id_garantia`, `revision_id`, `tipo_id`) VALUES
(10, 1, 2),
(11, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibidos`
--

CREATE TABLE `recibidos` (
  `id_ingreso` int(100) NOT NULL,
  `disp_serie` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recibidos`
--

INSERT INTO `recibidos` (`id_ingreso`, `disp_serie`, `fecha_ingreso`) VALUES
(1, 'MXL5227', '2017-11-03 21:49:24'),
(2, 'WHK200', '2017-11-03 21:49:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `id_reparacion` int(50) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `revision_id` int(50) NOT NULL,
  `garantia_id` int(50) NOT NULL,
  `tecnico_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reparacion`
--

INSERT INTO `reparacion` (`id_reparacion`, `descripcion`, `revision_id`, `garantia_id`, `tecnico_id`) VALUES
(100, 'MONITOR LCD, se repara filtos de imagen por defectos de fabrica', 1, 10, 1088256244),
(101, 'TORRE HP, cambio de fuente, se videncia el mal uso, no se conecta a un estabilizador.', 2, 11, 1088273174);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE `revision` (
  `id_revision` int(100) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `tecnico_id` int(50) NOT NULL,
  `disp_serie` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `revision`
--

INSERT INTO `revision` (`id_revision`, `descripcion`, `tecnico_id`, `disp_serie`) VALUES
(1, 'Se revisa dispositivo, después de la evaluación se establece que que ingresa por garantía', 1088256244, 'MXL5227'),
(2, 'Se revisa dispositivo, después de la evaluación se establece que que ingresa por reparacion', 1088273174, 'WHK200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_garantia`
--

CREATE TABLE `tipo_garantia` (
  `id_tipo` int(50) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_garantia`
--

INSERT INTO `tipo_garantia` (`id_tipo`, `descripcion`) VALUES
(1, 'Defectos de Fabrica'),
(2, 'Defectos de componetes'),
(3, 'Sin Garantía uso inadecuado del dispositivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores`
--

CREATE TABLE `valores` (
  `id_valor` int(50) NOT NULL,
  `valor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `concepto` text COLLATE utf8_spanish_ci NOT NULL,
  `factura_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valores`
--

INSERT INTO `valores` (`id_valor`, `valor`, `concepto`, `factura_id`) VALUES
(20, '$200.000', 'Reparacion fuente', 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`nit_cliente`);

--
-- Indices de la tabla `costo`
--
ALTER TABLE `costo`
  ADD PRIMARY KEY (`id_costo`),
  ADD UNIQUE KEY `reparacion_id` (`reparacion_id`);

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`serie_disp`),
  ADD UNIQUE KEY `cliente_nit` (`cliente_nit`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_tecnico`),
  ADD UNIQUE KEY `disp_serial` (`disp_serie`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `cliente_nit` (`cliente_nit`),
  ADD UNIQUE KEY `reparacion_id` (`reparacion_id`),
  ADD UNIQUE KEY `costo_id` (`costo_id`),
  ADD UNIQUE KEY `tecnico_id` (`tecnico_id`),
  ADD UNIQUE KEY `valor_id` (`valor_id`) USING BTREE;

--
-- Indices de la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD PRIMARY KEY (`id_garantia`),
  ADD UNIQUE KEY `revision_id` (`revision_id`),
  ADD UNIQUE KEY `tipo_id` (`tipo_id`);

--
-- Indices de la tabla `recibidos`
--
ALTER TABLE `recibidos`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD UNIQUE KEY `serial_disp` (`disp_serie`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`id_reparacion`),
  ADD UNIQUE KEY `revision_id` (`revision_id`,`garantia_id`),
  ADD UNIQUE KEY `tecnico_id` (`tecnico_id`),
  ADD KEY `garantia_id` (`garantia_id`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`id_revision`),
  ADD UNIQUE KEY `disp_serie` (`disp_serie`),
  ADD UNIQUE KEY `tecnico_id` (`tecnico_id`);

--
-- Indices de la tabla `tipo_garantia`
--
ALTER TABLE `tipo_garantia`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`id_valor`),
  ADD UNIQUE KEY `factura_id` (`factura_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recibidos`
--
ALTER TABLE `recibidos`
  MODIFY `id_ingreso` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
  MODIFY `id_revision` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `valores`
--
ALTER TABLE `valores`
  MODIFY `id_valor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `costo`
--
ALTER TABLE `costo`
  ADD CONSTRAINT `costo_ibfk_1` FOREIGN KEY (`reparacion_id`) REFERENCES `reparacion` (`id_reparacion`);

--
-- Filtros para la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `dispositivo_ibfk_1` FOREIGN KEY (`cliente_nit`) REFERENCES `cliente` (`nit_cliente`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`disp_serie`) REFERENCES `recibidos` (`disp_serie`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cliente_nit`) REFERENCES `cliente` (`nit_cliente`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`reparacion_id`) REFERENCES `reparacion` (`id_reparacion`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`costo_id`) REFERENCES `costo` (`id_costo`),
  ADD CONSTRAINT `factura_ibfk_4` FOREIGN KEY (`tecnico_id`) REFERENCES `empleados` (`id_tecnico`);

--
-- Filtros para la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD CONSTRAINT `garantia_ibfk_1` FOREIGN KEY (`revision_id`) REFERENCES `revision` (`id_revision`),
  ADD CONSTRAINT `garantia_ibfk_2` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_garantia` (`id_tipo`);

--
-- Filtros para la tabla `recibidos`
--
ALTER TABLE `recibidos`
  ADD CONSTRAINT `recibidos_ibfk_1` FOREIGN KEY (`disp_serie`) REFERENCES `dispositivo` (`serie_disp`);

--
-- Filtros para la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD CONSTRAINT `reparacion_ibfk_1` FOREIGN KEY (`garantia_id`) REFERENCES `garantia` (`id_garantia`),
  ADD CONSTRAINT `reparacion_ibfk_2` FOREIGN KEY (`revision_id`) REFERENCES `revision` (`id_revision`),
  ADD CONSTRAINT `reparacion_ibfk_3` FOREIGN KEY (`tecnico_id`) REFERENCES `empleados` (`id_tecnico`);

--
-- Filtros para la tabla `revision`
--
ALTER TABLE `revision`
  ADD CONSTRAINT `revision_ibfk_1` FOREIGN KEY (`tecnico_id`) REFERENCES `empleados` (`id_tecnico`),
  ADD CONSTRAINT `revision_ibfk_2` FOREIGN KEY (`disp_serie`) REFERENCES `dispositivo` (`serie_disp`);

--
-- Filtros para la tabla `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `valores_ibfk_1` FOREIGN KEY (`factura_id`) REFERENCES `factura` (`id_factura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
