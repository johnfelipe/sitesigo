-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2015 a las 22:31:31
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sitesigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE DATABASE IF NOT EXISTS sitesigo;
USE sitesigo;

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `documento` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla para guardar los usuarios del sistema';

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`documento`, `nombre`, `email`, `pass`) VALUES
('1072661319', 'Wilmer Triana', 'fabiantriana1072@gmail.com', '94d7b1e5a0799897b17b430be8661e6d4bb85a93'),
('35476832', 'Luz Elena Chavez', 'seguimientopdmchia@gmail.com', 'b0d34d056fb185dacd138324b330f7cb14a3ed3b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
 ADD PRIMARY KEY (`documento`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
