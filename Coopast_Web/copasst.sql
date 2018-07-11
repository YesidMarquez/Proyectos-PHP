-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2018 a las 00:44:35
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
-- Base de datos: `copasst`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `id_acta` int(100) NOT NULL,
  `fecha_acta` int(8) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `observaciones` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`id_acta`, `fecha_acta`, `descripcion`, `ruta`, `observaciones`) VALUES
(1, 20160129, 'Reunion Copasst Enero 2016', 'actas/20160129.pdf', 'Quórum Completo'),
(2, 20160215, 'Reunion Copasst Febrero 2016', 'actas/20160215.pdf', 'Quórum Completo'),
(3, 20160331, 'Reunion Copasst Marzo 2016', 'actas/20160331.pdf', 'Quórum Completo'),
(4, 20160428, 'Reunion Copasst Abril 2016', 'actas/20160428.pdf', 'Quórum Completo'),
(5, 20160527, 'Reunion Copasst Mayo 2016', 'actas/20160527.pdf', 'Quórum Completo'),
(6, 20160630, 'Reunion Copasst Junio 2016', 'actas/20160630.pdf', 'Quórum Completo'),
(7, 20160728, 'Reunion Copasst Julio 2016', 'actas/20160728.pdf', 'Quórum Completo'),
(8, 20160830, 'Reunion Copasst Agosto 2016', 'actas/20160830.pdf', 'Quórum Completo'),
(9, 20160929, 'Reunion Copasst Septiembre 2016', 'actas/20160929.pdf', 'Quórum Completo'),
(10, 20161028, 'Reunion Copasst Octubre 2016', 'actas/20161028.pdf', 'Quórum Completo'),
(11, 20161129, 'Reunion Copasst Noviembre 2016', 'actas/20161129.pdf', 'Quórum Completo'),
(12, 20161229, 'Reunion Copasst Diciembre 2016', 'actas/20161229.pdf', 'Quórum Completo'),
(13, 20170130, 'Reunion Copasst Enero 2017', 'actas/20170130.pdf', 'Quórum Completo'),
(14, 20170227, 'Reunion Copasst Febrero 2017', 'actas/20170227.pdf', 'Quórum Completo'),
(15, 20170331, 'Reunion Copasst Marzo 2017', 'actas/20170331.pdf', 'Quórum Completo'),
(16, 20170424, 'Reunion Copasst Abril 2017', 'actas/20170424.pdf', 'Quórum Completo'),
(17, 20170529, 'Reunion Copasst Mayo 2017', 'actas/20170529.pdf', 'Quórum Completo'),
(18, 20170630, 'Reunion Copasst Junio 2017', 'actas/20170630.pdf', 'Quórum Completo'),
(19, 20170728, 'Reunion Copasst Julio 2017', 'actas/20170728.pdf', 'Quórum Completo'),
(20, 20170830, 'Reunion Copasst Agosto 2017', 'actas/20170830.pdf', 'Quórum Completo'),
(21, 20170929, 'Reunion Copasst Septiembre 2017', 'actas/20170929.pdf', 'QuÃ³rum Completo'),
(22, 20171030, 'Reunion Copasst Octubre 2017', 'actas/20171030.pdf', 'Quórum Completo'),
(23, 20171130, 'Reunion Copasst Noviembre 2017', 'actas/20171130.pdf', 'Quórum Completo'),
(24, 20171227, 'Reunion Copasst Diciembre 2017', 'actas/20171227.pdf', 'Quórum Completo'),
(25, 20180131, 'Reunion Copasst Enero 2018', 'actas/20180131.pdf', 'Quórum Completo'),
(26, 20180227, 'Reunion Copasst Febrero 2018', 'actas/20180227.pdf', 'Quórum Completo'),
(27, 20180329, 'Reunion Copasst Marzo 2018', 'actas/20180329.pdf', 'Quórum Completo'),
(28, 20180427, 'Reunion Copasst Abril 2018', 'actas/20180427.pdf', 'Quórum Completo'),
(29, 20180530, 'Reunion Copasst Mayo 2018', 'actas/20180530.pdf', 'Quórum Completo'),
(30, 20180629, 'Reunion Copasst Junio 2018', 'actas/20180629.pdf', 'Quórum Completo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nivel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombres`, `apellidos`, `password`, `usuario`, `nivel`) VALUES
(1, 'Yesid Leandro', 'Marquez Pradilla', 'Leandro6244', 'ymarquez', 1),
(2, 'Nira Alexandra', 'Castillo Garzon', '123', 'ncastillo', 1),
(3, 'Olga', 'Ramirez Rios', '123', 'oramirez', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`id_acta`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `id_acta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
