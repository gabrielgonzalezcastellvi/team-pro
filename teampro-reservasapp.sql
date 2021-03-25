-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2021 a las 17:09:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `numeroSocio` varchar(120) NOT NULL,
  `email` varchar(155) NOT NULL,
  `mobile` int(120) NOT NULL,
  `password` varchar(12) NOT NULL,
  `passwordSecure` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_socios`
--

INSERT INTO `user_socios` (`id`, `nombre`, `apellido`, `numeroSocio`, `email`, `mobile`, `password`, `passwordSecure`) VALUES
(1, 'PETER', 'PARKER', 'M-500', 'spiderman@superheroes.com', 261469875, '123', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(2, 'CLARK', 'KENT', 'C-789', 'superman@superheroes.com', 911, '123', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(3, 'BRUNO', 'DIAZ', 'C-111', 'batman@superheroes.com', 26789, '123', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
