-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2017 a las 22:30:34
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
-- Base de datos: `credenciales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credencial`
--

CREATE TABLE `credencial` (
  `empleado_id` int(100) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL,
  `venc_curso` date NOT NULL,
  `venc_acreditacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `credencial`
--

INSERT INTO `credencial` (`empleado_id`, `ruta_imagen`, `venc_curso`, `venc_acreditacion`) VALUES
(2680820, '4583539.jpg', '0000-00-00', '0000-00-00'),
(4372275, '', '0000-00-00', '0000-00-00'),
(4391851, '', '0000-00-00', '0000-00-00'),
(4415933, '', '0000-00-00', '0000-00-00'),
(7549474, '', '0000-00-00', '0000-00-00'),
(9728928, '', '0000-00-00', '0000-00-00'),
(9957041, '', '0000-00-00', '0000-00-00'),
(9992812, '4446750.jpg', '0000-00-00', '0000-00-00'),
(10012034, '', '0000-00-00', '0000-00-00'),
(10127786, '', '0000-00-00', '0000-00-00'),
(10128205, '', '0000-00-00', '0000-00-00'),
(10186008, '', '0000-00-00', '0000-00-00'),
(13993559, '', '0000-00-00', '0000-00-00'),
(14571153, '', '0000-00-00', '0000-00-00'),
(15956575, '', '0000-00-00', '0000-00-00'),
(15959151, '', '0000-00-00', '0000-00-00'),
(15959842, '', '0000-00-00', '0000-00-00'),
(16045186, '', '0000-00-00', '0000-00-00'),
(16055698, '', '2018-12-31', '2018-12-12'),
(16226344, '', '0000-00-00', '0000-00-00'),
(16232307, '', '0000-00-00', '0000-00-00'),
(16627207, '', '0000-00-00', '0000-00-00'),
(18398705, '', '0000-00-00', '0000-00-00'),
(18403227, '', '0000-00-00', '0000-00-00'),
(18606864, '', '0000-00-00', '0000-00-00'),
(29435277, '', '0000-00-00', '0000-00-00'),
(30360511, '', '0000-00-00', '0000-00-00'),
(31412768, '', '0000-00-00', '0000-00-00'),
(75102420, '', '0000-00-00', '0000-00-00'),
(89004457, '', '0000-00-00', '0000-00-00'),
(94288775, '', '0000-00-00', '0000-00-00'),
(94393066, '', '0000-00-00', '0000-00-00'),
(94463013, '', '0000-00-00', '0000-00-00'),
(1053794211, '', '0000-00-00', '0000-00-00'),
(1053800432, '', '0000-00-00', '0000-00-00'),
(1053803002, '', '0000-00-00', '0000-00-00'),
(1054990354, '', '0000-00-00', '0000-00-00'),
(1059785331, '', '0000-00-00', '0000-00-00'),
(1059812970, '', '0000-00-00', '0000-00-00'),
(1060646253, '', '0000-00-00', '0000-00-00'),
(1061624208, '', '0000-00-00', '0000-00-00'),
(1061625000, '', '0000-00-00', '0000-00-00'),
(1088111222, '4446750.jpg', '0000-00-00', '0000-00-00'),
(1088200000, '75087907.jpg', '0000-00-00', '0000-00-00'),
(1088248409, '', '2018-12-31', '2018-12-31'),
(1088256244, '1088256244.pdf', '2018-12-31', '2018-12-31'),
(1088273174, '1088273174.jpg', '0000-00-00', '0000-00-00'),
(1088300094, '', '0000-00-00', '0000-00-00'),
(1088313813, '', '0000-00-00', '0000-00-00'),
(1088321795, '', '0000-00-00', '0000-00-00'),
(1088327284, '', '0000-00-00', '0000-00-00'),
(1089746531, '', '0000-00-00', '0000-00-00'),
(1093215267, '', '0000-00-00', '0000-00-00'),
(1094882530, '', '0000-00-00', '0000-00-00'),
(1094902525, '', '0000-00-00', '0000-00-00'),
(1097729714, '', '0000-00-00', '0000-00-00'),
(1109296032, '', '0000-00-00', '0000-00-00'),
(1112302799, '', '0000-00-00', '0000-00-00'),
(1112761152, '', '0000-00-00', '0000-00-00'),
(1112769004, '', '0000-00-00', '0000-00-00'),
(1112770431, '', '0000-00-00', '0000-00-00'),
(1112780067, '', '0000-00-00', '0000-00-00'),
(1112784664, '', '0000-00-00', '0000-00-00'),
(1113512846, '', '0000-00-00', '0000-00-00'),
(1113533829, '', '0000-00-00', '0000-00-00'),
(1113779033, '', '0000-00-00', '0000-00-00'),
(1114120754, '', '0000-00-00', '0000-00-00'),
(1116264342, '', '0000-00-00', '0000-00-00'),
(1116437684, '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombres`, `apellidos`, `cargo`, `ciudad`) VALUES
(2680820, 'ALVARO JAIR       ', 'FLOREZ RENDON              ', 'SUPERVISOR DE ZONA (MOTORIZADO)         ', 'CARTAGO'),
(4415933, 'ALDEMAR', 'GALLEGO', 'VIGILANTE                               ', 'MANIZALES'),
(7549474, 'EFRAIN', 'FANDINO VELASQUEZ', 'VIGILANTE                               ', 'ARMENIA'),
(9728928, 'OSCAR ALBERTO            ', 'BERMUDEZ RODRIGUEZ                      ', 'SUPERVISOR DE ZONA (MOTORIZADO)  ', 'ARMENIA'),
(9957041, 'JHON FREDY', 'AGUDELO YANTEN', 'VIGILANTE                               ', 'PEREIRA'),
(9992812, 'LUIS FERNANDO', 'CALLE', 'VIGILANTE', 'PEREIRA'),
(10012034, 'OSCAR LEONARDO', 'OCAMPO RUIZ', 'AGENTE DE CONTROL TIEMPO COMPLETO', 'PEREIRA'),
(10127786, 'YHON JAIRO', 'VELEZ TORRES', 'VIGILANTE                               ', 'PEREIRA'),
(10128205, 'ARTURO', 'ROTAVISTA PEREZ', 'MANEJADOR CANINO                        ', 'PEREIRA'),
(10186008, 'CESAR AUGUSTO', 'MANZANO DUQUE', 'VIGILANTE                               ', 'PEREIRA'),
(13993559, 'JOSE ALBEIRO', 'SANCHEZ CASTAÑEDA', 'VIGILANTE                               ', 'ZARZAL'),
(14571153, 'WILMAR ANDRES', 'MARIN ALZATE', 'VIGILANTE                               ', 'CARTAGO'),
(15956575, 'CARLOS ARIEL', 'CIFUENTES LOAIZA', 'VIGILANTE                               ', 'MANIZALES'),
(15959151, 'JOSE WILLIAM', 'VILLEGAS ATEHORTUA', 'VIGILANTE                               ', 'MANIZALES'),
(15959842, 'JOSE HERIBERTO', 'MARIN MARULANDA', 'VIGILANTE                               ', 'MANIZALES'),
(16045186, 'RONY ALEXANDER', 'VIDAL MOLINA', 'VIGILANTE                      ', 'PEREIRA'),
(16055698, 'DUVERNEY', 'NARANJO  OTALVARO', 'VIGILANTE', 'PEREIRA'),
(16226344, 'JAIME ALBERTO', 'SOTO RAMIREZ', 'VIGILANTE                               ', 'CARTAGO'),
(18398705, 'WILLIAM ALEXANDER', 'MEDINA IDROBO', 'VIGILANTE                               ', 'ARMENIA'),
(18606864, 'OSCAR ALBERTO', 'FLOREZ VANEGAS', 'VIGILANTE                               ', 'CARTAGO'),
(29435277, 'MONICA ALEXANDRA', 'OBANDO CORDOBA', 'AGENTE DE CONTROL MEDIO TIEMPO          ', 'PEREIRA'),
(31412768, 'LILIANA', 'MOLINA DELGADO', 'VIGILANTE                               ', 'CALARCA'),
(75102420, 'HERMAN DARIO', 'GARCIA CASTAÑO', 'VIGILANTE                               ', 'MANIZALES'),
(89004457, 'JOSE HERIBERTO', 'MORA ERAZO', 'VIGILANTE                               ', 'ARMENIA'),
(94288775, 'ROBNSON', 'ROMAN QUINTERO', 'VIGILANTE                               ', 'PEREIRA'),
(94393066, 'YERMAIN', 'MADRID GIL', 'VIGILANTE                               ', 'RIOFRÍO'),
(94463013, 'DIEGO ALBERTO', 'CORREA', 'VIGILANTE                               ', 'ARMENIA'),
(1053794211, 'VICTOR ALFONSO', 'OSORIO VARGAS', 'VIGILANTE                               ', 'MANIZALES'),
(1053800432, 'JULIAN DAVID', 'GARCIA ORTEGON', 'VIGILANTE                               ', 'MANIZALES'),
(1053803002, 'ANDRES FELIPE', 'RAMIREZ MEJIA', 'VIGILANTE                               ', 'MANIZALES'),
(1054990354, 'JHON FERNANDO', 'TORRES LONDOÑO', 'VIGILANTE                               ', 'MANIZALES'),
(1059785331, 'JOHAN SEBASTIAN', 'VALENCIA CARVAJAL', 'VIGILANTE', 'MANIZALES'),
(1059812970, 'UBEIMAR', 'LOPEZ AMAYA', 'VIGILANTE                               ', 'MANIZALES'),
(1060646253, 'JORGE ARMANDO', 'HURTADO RENDON', 'VIGILANTE                               ', 'MANIZALES'),
(1061625000, 'JUAN GABRIEL', 'MORALES VALENCIA', 'VIGILANTE                               ', 'MANIZALES'),
(1088111222, 'lis', 'pereira', 'nada', 'chu'),
(1088248409, 'LEANDRO ALEXANDER', 'RAMIREZ SALAZAR', 'VIGILANTE', 'PEREIRA'),
(1088256244, 'Yesid Leandro', 'Marquez Pradilla', 'Analista', 'Pereira'),
(1088258269, 'alejpo', 'matias', 'Analista', 'Pereira'),
(1088273174, 'PAULA ANDREA', 'JIMENEZ MONTOYA', 'AGENTE DE CONTROL MEDIO TIEMPO          ', 'PEREIRA'),
(1088300094, 'OSCAR IVAN', 'CALLE ORTIZ', 'VIGILANTE                               ', 'PEREIRA'),
(1088321795, 'MARIO ALEJANDRO', 'MARULANDA SERNA', 'VIGILANTE                               ', 'PEREIRA'),
(1088327284, 'ERIK SANTIAGO', 'ZAPATA CANDELA', 'SUPERVISOR                              ', 'PEREIRA'),
(1089746531, 'MISCIO', 'RODAS SANCHEZ', 'AGENTE DE CONTROL TIEMPO COMPLETO', 'PEREIRA'),
(1093215267, 'JORGE HERNAN', 'CARVAJAL SERNA', 'VIGILANTE                               ', 'PEREIRA'),
(1094882530, 'LUIS CARLOS', 'CARDENAS DUQUE', 'VIGILANTE                               ', 'ARMENIA'),
(1094902525, 'JUAN DAVID', 'VILLABONA HERNANDEZ', 'VIGILANTE                               ', 'ARMENIA'),
(1109296032, 'OSCAR', 'LONDOÑO OSORIO', 'VIGILANTE                               ', 'MANIZALES'),
(1112302799, 'CESAR AUGUSTO', 'SUAREZ SERNA', 'VIGILANTE                               ', 'RIOFRÍO'),
(1112761152, 'EDGAR ANTONIO', 'ACEVEDO DIAZ', 'VIGILANTE                               ', 'CARTAGO'),
(1112769004, 'YUDITH ANDREA', 'ZAPATA RIOS', 'AGENTE DE CONTROL MEDIO TIEMPO          ', 'PEREIRA'),
(1112770431, 'CRISTIAN CAMILO', 'RENDON RESTREPO', 'VIGILANTE                               ', 'CARTAGO'),
(1112780067, 'CAMILO', 'ECHEVERRY RIOS', 'VIGILANTE                               ', 'CARTAGO'),
(1112784664, 'BRAYHAN STEEVEN', 'VALDES MEDINA', 'VIGILANTE                               ', 'RIOFRÍO'),
(1113512846, 'HAROLD AUGUSTO', 'HOYOS CASTRO', 'VIGILANTE                               ', 'MANIZALES'),
(1113533829, 'KARINA', 'ORTIZ RINCON', 'AGENTE DE CONTROL MEDIO TIEMPO          ', 'PEREIRA'),
(1114120754, 'JHONATAN', 'GORDILLO CASTAÑEDA', 'VIGILANTE                               ', 'RIOFRÍO'),
(1116264342, 'CARLOS ANDRES', 'RODAS MARIN', 'VIGILANTE                               ', 'RIOFRÍO'),
(1116437684, 'ANDRES ADOLFO', 'TORRES GARCIA', 'VIGILANTE                               ', 'CARTAGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `correo`) VALUES
(1088256244, 'ymarquez', 'Vise2015', 'ymarquez@vise.com.co');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `credencial`
--
ALTER TABLE `credencial`
  ADD UNIQUE KEY `empleado_id` (`empleado_id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
