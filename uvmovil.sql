-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2015 a las 03:46:49
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `uvmovil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioprofesor`
--

CREATE TABLE IF NOT EXISTS `usuarioprofesor` (
  `rutProfesor` int(11) NOT NULL,
  `nombreProfesor` varchar(200) NOT NULL,
  `profesionProfesor` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18585043 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarioprofesor`
--

INSERT INTO `usuarioprofesor` (`rutProfesor`, `nombreProfesor`, `profesionProfesor`) VALUES
(12821902, 'rosa', 'ayudante XD '),
(18037063, 'daniel', 'Estudiante'),
(18585042, 'Miguel', 'Estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarioprofesor`
--
ALTER TABLE `usuarioprofesor`
  ADD PRIMARY KEY (`rutProfesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarioprofesor`
--
ALTER TABLE `usuarioprofesor`
  MODIFY `rutProfesor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18585043;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
