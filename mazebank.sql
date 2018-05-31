-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2018 a las 16:40:37
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mazebank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `id` int(11) NOT NULL,
  `Empresa` varchar(11) NOT NULL,
  `Acciones` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Estado` varchar(11) NOT NULL,
  `Color` varchar(11) NOT NULL,
  `Descripcion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id`, `Empresa`, `Acciones`, `Fecha`, `Usuario`, `Estado`, `Color`, `Descripcion`) VALUES
(1, 'Fleeca', 2, '2018-03-17', 'Jackson_Marley', 'Verificado', 'success', ''),
(2, 'Fleeca', 3, '2018-03-15', 'Adam_Walker', 'En Revision', 'warning', ''),
(3, 'HallMall', 240, '2018-03-17', 'Brandon_Walker', 'Rechazado', 'danger', ''),
(4, '', 0, '0000-00-00', '', '', '', ''),
(5, '', 0, '0000-00-00', '', '', '', ''),
(6, '', 0, '0000-00-00', '', '', '', ''),
(7, '', 0, '0000-00-00', '', '', '', ''),
(8, '', 0, '0000-00-00', '', '', '', ''),
(9, '', 0, '0000-00-00', '', '', '', ''),
(10, '', 0, '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `changelog`
--

CREATE TABLE `changelog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `changelog`
--

INSERT INTO `changelog` (`id`, `titulo`, `autor`, `descripcion`, `estado`) VALUES
(1, 'Staff', 'iExpert', 'probandoprobandoprobandoprobandoprobando', 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(24) NOT NULL,
  `Contra` varchar(24) NOT NULL,
  `Admin` int(11) NOT NULL,
  `Dinero` float NOT NULL,
  `Acciones` int(11) NOT NULL,
  `Creditos` int(11) NOT NULL,
  `Impuestos` float NOT NULL,
  `Personaje` varchar(30) NOT NULL,
  `Servidor` varchar(50) NOT NULL,
  `Google` varchar(200) NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Instagram` varchar(200) NOT NULL,
  `Codigo` float NOT NULL,
  `Avatarimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`ID`, `Nombre`, `Contra`, `Admin`, `Dinero`, `Acciones`, `Creditos`, `Impuestos`, `Personaje`, `Servidor`, `Google`, `Facebook`, `Instagram`, `Codigo`, `Avatarimage`) VALUES
(1, 'Jonatan', '123', 2, 4.24, 0, 0, 2.4, 'Jackson_Marley', 'SAMP', '', 'https://www.facebook.com/Exp.Holos', '', 876654, 'https://i.imgur.com/UjpLpXx.png'),
(2, 'iExpert', '123', 2, 240.63, 12, 2, 2.4, 'Andres_Sanz', 'GTA V', '', '', '', 258937, 'https://i.imgur.com/qcPlu4I.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `acciones` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `encargado` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `acciones`, `estado`, `color`, `encargado`, `precio`) VALUES
(1, 'PizzaWood', '500', 'Activo', 'success', 'iExpert', 20),
(2, 'DominosPizza', '30', 'Congelado', 'info', 'iExpert', 77),
(3, 'Hamburguer', '780', 'Desactivado', 'danger', 'iExpert', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `contenido` varchar(6000) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `autor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `categoria`, `contenido`, `fecha`, `hora`, `autor`) VALUES
(1, 'Primera Noticia', 'Staff', '<p>Bienvenidos a nuestra emmpresa/banco donde podras tener beneficios con acciones y creditos.</p> <p> Se recomienda leer las normas y revisar la web para enterarte de que va antes de comprar acciones o creditos </p>', '2018-03-14', '23:27:00', 'iExpert'),
(2, 'Probando2', 'Test', 'testtestetst', '2018-03-15', '01:00:04', 'asdasd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `changelog`
--
ALTER TABLE `changelog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `changelog`
--
ALTER TABLE `changelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
