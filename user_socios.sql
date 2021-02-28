-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2021 a las 21:08:06
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teampro-reservasapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_socios`
--

CREATE TABLE `user_socios` (
  `id` int(6) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `numeroSocio` int(120) NOT NULL,
  `email` varchar(155) NOT NULL,
  `mobile` int(120) NOT NULL,
  `passwordSecure` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_socios`
--

INSERT INTO `user_socios` (`id`, `nombre`, `apellido`, `numeroSocio`, `email`, `mobile`, `passwordSecure`) VALUES
(1, 'GABRIEL', 'GONZALEZ', 5919, 'gonzalezcastellvigabriel@gmail.com', 2147483647, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_socios`
--
ALTER TABLE `user_socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user_socios`
--
ALTER TABLE `user_socios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
