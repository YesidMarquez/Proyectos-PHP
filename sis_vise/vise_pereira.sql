-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2017 a las 22:08:49
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
-- Base de datos: `vise_pereira`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academias`
--

CREATE TABLE `academias` (
  `id_academia` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acreditacion`
--

CREATE TABLE `acreditacion` (
  `empleado_id` int(20) NOT NULL,
  `estado_acreditacion` varchar(45) NOT NULL,
  `fecha_acreditacion` date NOT NULL,
  `estado_radicado` varchar(20) NOT NULL,
  `fecha_radicado` date NOT NULL,
  `numero_radicado` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(50) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `fecha_ingreso` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `prorrogas` int(20) NOT NULL,
  `empleado_id` int(20) NOT NULL,
  `contrato_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_cursos`
--

CREATE TABLE `control_cursos` (
  `cargo_id` int(20) NOT NULL,
  `nro_curso` varchar(45) NOT NULL,
  `empleado_id` int(20) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `academia_id` int(20) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `control_cursos`
--

INSERT INTO `control_cursos` (`cargo_id`, `nro_curso`, `empleado_id`, `fecha_vencimiento`, `academia_id`, `curso_id`) VALUES
(0, 'ECSP577-E137825', 1053809285, '0000-00-00', 0, 0),
(0, 'ECSP1025-D192939', 94288775, '0000-00-00', 0, 0),
(0, 'ECSP577-E135845', 1059812970, '0000-00-00', 0, 0),
(0, 'ECSP1162-D521983', 1088007189, '0000-00-00', 0, 0),
(0, 'ECSP728-D111694', 9726942, '0000-00-00', 0, 0),
(0, 'ECSP1162-D517978', 18402946, '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_cursos` int(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `empleado_id` int(20) NOT NULL,
  `vencimiento_visita` date NOT NULL,
  `vencimiento_pasadoj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(20) NOT NULL,
  `nombre_1` varchar(50) NOT NULL,
  `nombre_2` varchar(30) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ciudad_nacimiento` varchar(30) NOT NULL,
  `ciudad_expedicion` varchar(30) NOT NULL,
  `tipo_sangre` varchar(8) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad_residencia` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `genero` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `fecha_nacimiento`, `ciudad_nacimiento`, `ciudad_expedicion`, `tipo_sangre`, `direccion`, `ciudad_residencia`, `telefono`, `genero`) VALUES
(2680820, 'ALVARO JAIR', '', 'FLOREZ RENDON', '', '0000-00-00', '', '', 'SUPERVIS', 'CR 1J N° 35-44 BR JOSÉ GABRIEL CALDERÓN, CARTAGO  ', '', 2147483647, ''),
(4372275, 'ERWIN ', '', 'GIRALDO ACEVEDO', '', '0000-00-00', '', '', 'SUPERVIS', 'MZ E CS 3 BR QUINTAS DE LA MARINA, ARMENIA  -BARRI', '', 2147483647, ''),
(4391851, 'ALCIBIADES DE JESÃ?S ', '', 'LEON CARDONA', '', '2021-04-02', '', '', 'VIGILANT', 'MZ 4 CS 26 BR LA GRACIELA, DOSQUEBRADAS  -BARRIO- ', '', 3302553, ''),
(4512715, 'JOHN JAIRO', '', 'VARELA ', '', '0000-00-00', '', '', 'VIGILANT', 'CALLE 10 N° 23-14 BR EL  JAPON DOSQUEBRADAS  -BARR', '', 3154495, ''),
(9726942, 'JORGE ELIECER', '', 'MEDINA MONTILLA', '', '0000-00-00', '', '', 'VIGILANT', 'MZ E CS 8 BR ALFONSO LÓPEZ, ARMENIA  -BARRIO- ALFO', '', 2147483647, ''),
(9727897, 'OSCAR JAVIER', '', 'CALEÃ?O GRANADOS', '', '0000-00-00', '', '', 'VIGILANT', '  -BARRIO- LA GRECIA', '', 2147483647, ''),
(9728928, 'OSCAR ALBERTO', '', 'BERMUDEZ RODRIGUEZ', '', '0000-00-00', '', '', 'SUPERVIS', 'BLQ 5 APTO 102 CR MARÍA CRISTINA ET. 2, ARMENIA  -', '', 7353912, ''),
(9735423, 'FABIO HERNAN', '', 'SANCHEZ GARZON', '', '2030-04-09', '', '', 'VIGILANT', 'MZ 35 CS 16 BR SIMÓN BOLIVAR, ARMENIA  -BARRIO- SI', '', 7452558, ''),
(9992812, 'LUIS FERNANDO', '', 'CALLE ', '', '2025-01-01', '', '', 'VIGILANT', 'MZ 24 CS 3 BR CAMPESTRE A, DOSQUEBRADAS  -BARRIO- ', '', 3221695, ''),
(10127786, 'YHON JAIRO', '', 'VELEZ TORRES', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 14 CASA 24 ET III BR BOSQUES ACUARELA, D/DAS  -', '', 3280452, ''),
(13993559, 'JOSE ALBEIRO', '', 'SANCHEZ CASTAÃ?EDA', '', '0000-00-00', '', '', 'VIGILANT', 'CRA 14   13 B  03  -BARRIO- ZARAZAL', '', 2147483647, ''),
(15956575, 'CARLOS ARIEL', '', 'CIFUENTES LOAIZA', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 27 CS 5-20 BR LA LINDA, MANIZALES  -BARRIO- LA ', '', 2147483647, ''),
(15959842, 'JOSE HERIBERTO', '', 'MARIN MARULANDA', '', '2026-11-08', '', '', 'VIGILANT', 'CRA 9 # 2-49 BR EMPLEADOS / SALAMINA  -BARRIO- EMP', '', 2147483647, ''),
(16226344, 'JAIME ALBERTO', '', 'SOTO RAMIREZ', '', '2026-09-02', '', '', 'VIGILANT', 'CL 8 N° 9-46 BR SAN NICOLAS, CARTAGO  -BARRIO- SAN', '', 2094974, ''),
(16485243, 'RAFAEL ARCANGEL', '', 'CASTRO GAVIRIA', '', '0000-00-00', '', '', 'SUPERVIS', 'CL 13 Nº 4A-35 BARRIO BUENOS AIRES LA VIRGINIA  -B', '', 2147483647, ''),
(16627207, 'JOSE NEFTALI', '', 'SOACHE ', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 4 CS 28 BR ALTO DE LA CAPILLA, D/DAS  -BARRIO- ', '', 3285628, ''),
(18402946, 'JHON DEIBER', '', 'ESTRADA MARTINEZ', '', '0000-00-00', '', '', 'SUPERVIS', 'CR 26 Nº 32-22 BR LAS AMERICAS, CALARCÁ  -BARRIO- ', '', 2147483647, ''),
(18403227, 'CHRISTIAN EMILIO', '', 'VELANDIA GALLEGO', '', '0000-00-00', '', '', 'VIGILANT', 'MZ O CS 20 GAITAN CALARCA  -BARRIO- GAITAN CALARCA', '', 7423439, ''),
(18596498, 'LUIS FERNANDO', '', 'RAMIREZ GARCIA', '', '0000-00-00', '', '', 'VIGILANT', 'CR 17 Nº 19-12 BR SAN VICENTE, SANTA ROSA DE CABAL', '', 317471775, ''),
(18598051, 'JOSE HENRY', '', 'CARDONA ', '', '0000-00-00', '', '', 'SUPERVIS', 'MZ 23 CS 3A BR PRIMAVERA AZUL, DOSQUEBRADAS  -BARR', '', 3431013, ''),
(18598209, 'JORGE WILSON', '', 'CARDONA LOPEZ', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 8 CASA 32  -BARRIO- PARQUE INDUSTRIAL', '', 2147483647, ''),
(30360511, 'BIBIANA ', '', 'MONSALVE ', '', '0000-00-00', '', '', 'VIGILANT', 'CALLE 719  62  -BARRIO- CHINCHINA', '', 2147483647, ''),
(72252082, 'JADER ANDRES', '', 'BOHORQUEZ GALEANO', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 10 CS 31 BR 2500 LOTES (COMUNIDAD LOS HEROES AL', '', 2147483647, ''),
(75033492, 'JUAN CARLOS', '', 'PEREZ ', '', '2026-09-05', '', '', 'VIGILANT', 'CALLE 61#32E-06 BR FATIMA  -BARRIO- FATIMA', '', 2147483647, ''),
(75050002, 'JOSE HUMBERTO', '', 'DUQUE AGUIRRE', '', '0000-00-00', '', '', 'VIGILANT', 'CRA 22  8   42  -BARRIO- EL JAPON', '', 2147483647, ''),
(75079795, 'CARLOS IVAN', '', 'LOPEZ MARULANDA', '', '0000-00-00', '', '', 'SUPERVIS', 'CR 12B Nº 48-43 BR EL CARIBE, MANIZALES  -BARRIO- ', '', 2147483647, ''),
(75102420, 'HERMAN DARIO', '', 'GARCIA CASTAÃ?O', '', '0000-00-00', '', '', 'VIGILANT', 'CL 26 N° 10-30 BR EL JAZMÍN, MANIZALES  -BARRIO- E', '', 8838175, ''),
(75146518, 'JORGE HERNAN', '', 'ARBOLEDA GRISALES', '', '0000-00-00', '', '', 'SUPERVIS', 'MZ 11 CS 24 BR CAMPESTRE A, DOSQUEBRADAS  -BARRIO-', '', 3220669, ''),
(89004457, 'JOSE HERIBERTO', '', 'MORA ERAZO', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 13 CS 8  BR LOS QUINDOS, ARMENIA  -BARRIO- LOS ', '', 2147483647, ''),
(94288775, 'ROBINSON ', '', 'ROMAN QUINTERO', '', '0000-00-00', '', '', 'VIGILANT', 'MANZANA 18 CASA 22  -BARRIO- EL REMANSO', '', 2147483647, ''),
(94310956, 'EDUAR ', '', 'GIRALDO OSORIO', '', '2026-08-07', '', '', 'VIGILANT', 'MZ 2 CS 3 BR LA GRACIELA, DOSQUEBRADAS  -BARRIO- L', '', 3300770, ''),
(94393066, 'YERMAIN ', '', 'MADRID GIL', '', '0000-00-00', '', '', 'VIGILANT', 'CALLE 910  55  -BARRIO- BELEN', '', 2147483647, ''),
(94463013, 'DIEGO ALBERTO', '', 'CORREA ', '', '0000-00-00', '', '', 'VIGILANT', 'CRA 13  8  40  -BARRIO- LAS AMERICAS', '', 2147483647, ''),
(1053794211, 'VICTOR ALFONSO', '', 'OSORIO VARGAS', '', '0000-00-00', '', '', 'VIGILANT', '  -BARRIO- VEREDA CUEVA SANTA', '', 2147483647, ''),
(1053809285, 'CESAR EDUARDO', '', 'GONZALEZ GARCIA', '', '0000-00-00', '', '', 'VIGILANT', 'BLOQUE 16 APTO 1624  -BARRIO- SAN SEBASTIAN', '', 2147483647, ''),
(1059812970, 'UBEIMAR ', '', 'LOPEZ AMAYA', '', '0000-00-00', '', '', 'VIGILANT', 'KR 10    54 22  -BARRIO- ALTO VILLA HERMOSA', '', 2147483647, ''),
(1061624208, 'WILLIAM ANDRES', '', 'GONZALEZ RIOS', '', '0000-00-00', '', '', 'VIGILANT', 'MZ B CS 10 BR VILLA ASIS, PALESTINA, CALDAS  -BARR', '', 2147483647, ''),
(1061625000, 'JUAN GABRIEL', '', 'MORALES VALENCIA', '', '0000-00-00', '', '', 'VIGILANT', 'CL 17 N° 18-40 BR LOS AGUSTINOS, MANIZALES  -BARRI', '', 2147483647, ''),
(1088007189, 'LUIS  CARLOS', '', 'RAMIREZ RODRIGUEZ', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 49 CS 11 VILLA DEL PRADO  -BARRIO- VILLA DEL PR', '', 2147483647, ''),
(1088238927, 'RONALD  ', '', 'MACHADO GOMEZ', '', '0000-00-00', '', '', 'VIGILANT', 'CRA 8  N° 78-75  -BARRIO- SALAMANGA', '', 2147483647, ''),
(1088248409, 'LEANDRO ALEXANDER', '', 'RAMIREZ SALAZAR', '', '0000-00-00', '', '', 'VIGILANT', 'KR 41A    63 06  -BARRIO- NORMANDIA', '', 2147483647, ''),
(1093215267, 'JORGE HERNAN', '', 'CARVAJAL SERNA', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 1 CS 74, EL ACUARIO,PEREIRA', '', 2147483647, ''),
(1094882530, 'LUIS CARLOS', '', 'CARDENAS DUQUE', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 24 CS 5 BR LOS QUINDOS, ARMENIA  -BARRIO- LOS Q', '', 2147483647, ''),
(1096032319, 'CAROLINA ', '', 'DUQUE TABARES', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 42 CS 7 NUEVA TEBAIDA  -BARRIO- NUEVA TEBAIDA', '', 2147483647, ''),
(1097729714, 'CAROLINA ', '', 'HINCAPIE RIOS', '', '0000-00-00', '', '', 'VIGILANT', 'CALLE 13  5  12  -BARRIO- MONTENEGRO', '', 2147483647, ''),
(1104675026, 'JORGE ULISES', '', 'AGUIRRE GONZALEZ', '', '0000-00-00', '', '', 'VIGILANT', 'AV 30 DE AGOSTO N° 42-15', '', 2147483647, ''),
(1109296032, 'OSCAR ADOLFO', '', 'LONDOÑO OSORIO', '', '0000-00-00', '', '', 'VIGILANT', 'CALLE 2 CON CARRERA 5  -BARRIO- FRESNO', '', 2147483647, ''),
(1112770431, 'CRISTIAN CAMILO', '', 'RENDON RESTREPO', '', '2033-04-03', '', '', 'VIGILANT', 'CRA 16  15  15  -BARRIO- REPUBLICA', '', 2147483647, ''),
(1113779033, 'JULIETH ', '', 'RODRIGUEZ CORREA', '', '0000-00-00', '', '', 'VIGILANT', 'CARRERA 14  13 B  03  -BARRIO- ZARZALITO', '', 2147483647, ''),
(1116726252, 'FRANCISCO JAVIER ', '', 'GRISALES ', '', '2034-01-07', '', '', 'VIGILANT', 'FINCA BUENOS AIRES/ ROCIO  -BARRIO- ROCIO', '', 2147483647, ''),
(1143946915, 'ANDRES MAURICIO', '', 'RESTREPO IDARRAGA', '', '0000-00-00', '', '', 'VIGILANT', 'CALLE 31  0  94  -BARRIO- MANIZALES', '', 2147483647, ''),
(1147956286, 'JEIVIS  MARINO  ', '', 'MACHADO  MATURANA ', '', '0000-00-00', '', '', 'VIGILANT', 'MZ 28 CASA 3 BR EL REMANZO  -BARRIO- EL REMANZO', '', 2147483647, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id_modalidad` int(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `id_puesto` int(11) NOT NULL,
  `nombre_puesto` varchar(50) NOT NULL,
  `cliente_id` int(50) NOT NULL,
  `direccion_puesto` varchar(50) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `modalidad_id` int(50) NOT NULL,
  `empleado_id` int(20) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id_puesto`, `nombre_puesto`, `cliente_id`, `direccion_puesto`, `ciudad`, `modalidad_id`, `empleado_id`, `fecha_ingreso`, `fecha_salida`) VALUES
(2, 'A. MINAS MANIZALES', 0, 'MANIZALES', 'PEREIRA', 24, 18402946, '0000-00-00', '0000-00-00'),
(3, 'A. MINAS MANIZALES', 0, 'MANIZALES', 'PEREIRA', 24, 1059812970, '0000-00-00', '0000-00-00'),
(4, 'ESM MARMATO CALDAS', 0, 'MANIZALES', 'PEREIRA', 24, 4372275, '0000-00-00', '0000-00-00'),
(5, 'ESM MARMATO CALDAS', 0, 'MANIZALES', 'PEREIRA', 24, 75146518, '0000-00-00', '0000-00-00'),
(6, 'ESM MARMATO CALDAS', 0, 'MANIZALES', 'PEREIRA', 24, 75102420, '0000-00-00', '0000-00-00'),
(7, 'AUTOGERMANA PEREIRA', 0, 'PEREIRA', 'PEREIRA', 12, 15956575, '0000-00-00', '0000-00-00'),
(8, 'REFUERZO DE PLATAFORMA', 0, 'PEREIRA', 'PEREIRA', 19, 72252082, '0000-00-00', '0000-00-00'),
(9, 'CONTROL ACCESO HUB PEI', 0, 'PEREIRA', 'PEREIRA', 24, 75079795, '0000-00-00', '0000-00-00'),
(10, 'PLATAFORMA 1', 0, 'ARMENIA', 'PEREIRA', 24, 9727897, '0000-00-00', '0000-00-00'),
(11, 'RAYOS X ARMENIA', 0, 'ARMENIA', 'PEREIRA', 17, 89004457, '0000-00-00', '0000-00-00'),
(12, 'PLATAFORMA 1', 0, 'MANIZALES', 'PEREIRA', 12, 1053794211, '0000-00-00', '0000-00-00'),
(13, 'REFUERZO DE PLATAFORMA', 0, 'PEREIRA', 'PEREIRA', 19, 75050002, '0000-00-00', '0000-00-00'),
(14, 'PLATAFORMA 2', 0, 'ARMENIA', 'PEREIRA', 17, 1096032319, '0000-00-00', '0000-00-00'),
(15, 'REFUERZO DE PLATAFORMA', 0, 'PEREIRA', 'PEREIRA', 19, 16627207, '0000-00-00', '0000-00-00'),
(16, 'INSPECTOR - CUSTODIA CARGA Y CORREO ATO PEI', 0, 'PEREIRA', 'PEREIRA', 24, 94310956, '0000-00-00', '0000-00-00'),
(17, 'INSPECTOR - CUSTODIA CARGA Y CORREO ATO PEI', 0, 'PEREIRA', 'PEREIRA', 24, 1116726252, '0000-00-00', '0000-00-00'),
(18, 'PLATAFORMA 3', 0, 'MANIZALES', 'PEREIRA', 12, 18598051, '0000-00-00', '0000-00-00'),
(19, 'ENTRADA/ SALIDA DE EQUIPAJES', 0, 'PEREIRA', 'PEREIRA', 18, 1061625000, '0000-00-00', '0000-00-00'),
(20, 'RAYOS X ARMENIA', 0, 'ARMENIA', 'PEREIRA', 17, 9726942, '0000-00-00', '0000-00-00'),
(21, 'CONTROL - CUSTODIA CARGA Y CORREO HUB PEI', 0, 'PEREIRA', 'PEREIRA', 18, 1096032319, '0000-00-00', '0000-00-00'),
(22, 'CONTROL ACCESO HUB PEI', 0, 'PEREIRA', 'PEREIRA', 24, 75033492, '0000-00-00', '0000-00-00'),
(23, 'PLATAFORMA 2', 0, 'ARMENIA', 'PEREIRA', 17, 1088007189, '0000-00-00', '0000-00-00'),
(24, 'INSPECTOR - CUSTODIA CARGA Y CORREO ATO PEI', 0, 'PEREIRA', 'PEREIRA', 24, 1116726252, '0000-00-00', '0000-00-00'),
(25, 'OFICINA AVIANCA  CENTRO C. A.', 0, 'PEREIRA', 'PEREIRA', 11, 1088238927, '0000-00-00', '0000-00-00'),
(26, 'PLATAFORMA 1', 0, 'MANIZALES', 'PEREIRA', 12, 75033492, '0000-00-00', '0000-00-00'),
(27, 'PLATAFORMA 1', 0, 'ARMENIA', 'PEREIRA', 24, 13993559, '0000-00-00', '0000-00-00'),
(28, 'PLATAFORMA 1', 0, 'ARMENIA', 'PEREIRA', 24, 18598209, '0000-00-00', '0000-00-00'),
(29, 'PLATAFORMA', 0, 'PEREIRA', 'PEREIRA', 24, 18596498, '0000-00-00', '0000-00-00'),
(30, 'CONTROL ACCESO HUB PEI', 0, 'PEREIRA', 'PEREIRA', 24, 1104675026, '0000-00-00', '0000-00-00'),
(31, 'PLATAFORMA', 0, 'PEREIRA', 'PEREIRA', 24, 1088248409, '0000-00-00', '0000-00-00'),
(32, 'PLATAFORMA 1', 0, 'ARMENIA', 'PEREIRA', 24, 9735423, '0000-00-00', '0000-00-00'),
(33, 'CONTROL - CUSTODIA CARGA Y CORREO HUB PEI', 0, 'PEREIRA', 'PEREIRA', 18, 15959842, '0000-00-00', '0000-00-00'),
(34, 'ENTRADA/ SALIDA DE EQUIPAJES', 0, 'PEREIRA', 'PEREIRA', 18, 4512715, '0000-00-00', '0000-00-00'),
(35, 'Agente de Control Medio Tiempo PEI # 5', 0, 'PEREIRA', 'PEREIRA', 6, 1088248409, '0000-00-00', '0000-00-00'),
(36, 'Coordinador Operativo  PEI # 1', 0, 'PEREIRA', 'PEREIRA', 20, 30360511, '0000-00-00', '0000-00-00'),
(37, 'Lider de Control PEI # 1', 0, 'PEREIRA', 'PEREIRA', 12, 1097729714, '0000-00-00', '0000-00-00'),
(38, 'Agente de Control Medio Tiempo PEI # 11', 0, 'PEREIRA', 'PEREIRA', 6, 1113779033, '0000-00-00', '0000-00-00'),
(39, 'Agente de Control Medio Tiempo PEI # 6', 0, 'PEREIRA', 'PEREIRA', 6, 94463013, '0000-00-00', '0000-00-00'),
(40, 'Agente de Control Medio Tiempo PEI # 9', 0, 'PEREIRA', 'PEREIRA', 6, 1112770431, '0000-00-00', '0000-00-00'),
(41, 'Agente de Control Medio Tiempo PEI # 4', 0, 'PEREIRA', 'PEREIRA', 6, 1143946915, '0000-00-00', '0000-00-00'),
(42, 'Agente de Control Medio Tiempo PEI # 2', 0, 'PEREIRA', 'PEREIRA', 6, 94393066, '0000-00-00', '0000-00-00'),
(43, 'Agente de Control Medio Tiempo PEI # 10', 0, 'PEREIRA', 'PEREIRA', 6, 16485243, '0000-00-00', '0000-00-00'),
(44, 'Agente de Control Medio Tiempo PEI # 7', 0, 'PEREIRA', 'PEREIRA', 6, 1061624208, '0000-00-00', '0000-00-00'),
(45, 'Agente de Control Medio Tiempo PEI # 3', 0, 'PEREIRA', 'PEREIRA', 6, 1053809285, '0000-00-00', '0000-00-00'),
(46, 'Agente de Control Medio Tiempo PEI # 8', 0, 'PEREIRA', 'PEREIRA', 6, 1109296032, '0000-00-00', '0000-00-00'),
(47, 'Agente de Control Medio Tiempo PEI # 12', 0, 'PEREIRA', 'PEREIRA', 6, 94310956, '0000-00-00', '0000-00-00'),
(48, 'BANCOMPARTIR OFICINA ARMENIA', 0, 'ARMENIA', 'PEREIRA', 9, 94463013, '0000-00-00', '0000-00-00'),
(49, 'BANCOMPARTIR OFICINA PEREIRA 2', 0, 'PEREIRA', 'PEREIRA', 9, 9728928, '0000-00-00', '0000-00-00'),
(50, 'CD PEREIRA RECEPCION', 0, 'PEREIRA', 'PEREIRA', 24, 1094882530, '0000-00-00', '0000-00-00'),
(51, 'CD ARMENIA PORTERIA PEATONAL', 0, 'ARMENIA', 'PEREIRA', 24, 1094882530, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad_social`
--

CREATE TABLE `seguridad_social` (
  `empleado_id` int(20) NOT NULL,
  `afp` varchar(45) NOT NULL,
  `afc` varchar(45) NOT NULL,
  `arl` varchar(50) NOT NULL,
  `eps` varchar(45) NOT NULL,
  `ccf` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `id_contrato` int(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academias`
--
ALTER TABLE `academias`
  ADD PRIMARY KEY (`id_academia`);

--
-- Indices de la tabla `acreditacion`
--
ALTER TABLE `acreditacion`
  ADD KEY `persona_id_idx` (`empleado_id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD KEY `persona_id_idx` (`empleado_id`);

--
-- Indices de la tabla `control_cursos`
--
ALTER TABLE `control_cursos`
  ADD KEY `persona_id_idx` (`empleado_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_cursos`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD KEY `persona_id_idx` (`empleado_id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `idpersona_UNIQUE` (`id_empleado`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`id_puesto`),
  ADD UNIQUE KEY `id_puesto_UNIQUE` (`id_puesto`),
  ADD KEY `persona_id_idx` (`empleado_id`);

--
-- Indices de la tabla `seguridad_social`
--
ALTER TABLE `seguridad_social`
  ADD KEY `persona_id_idx` (`empleado_id`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`id_contrato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
