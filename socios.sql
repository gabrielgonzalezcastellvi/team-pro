-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2021 a las 23:57:44
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
-- Base de datos: `inscripcionsocios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `nombre` varchar(120) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `numeroSocio` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `passwordSecure` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`nombre`, `apellido`, `numeroSocio`, `email`, `passwordSecure`) VALUES
('pruebas', 'nuevas', '123', 'gabriel@g.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d0'),
('Mariana', 'Cuevas', '564', 'maripruebas@gmail.com', 'a23c5ac4ac9928377102778f1f8ef23ea8d4815c999343aa732421aebddd975d1c0baa1183a9a30c8b979aa2cb7de4194fdfddb93c669363b9cf6c39'),
('Mariana', 'Cuevas', '564', 'purebasnuevas@gmail.com', 'd5e1f1c4641a6b4a90bc6e53d24fdcd064475c47fee4c9e14c2196300a4033e066c4ca852697e457b3f02663440848d71226d4424cb3c58d1acfcd93'),
('pruebas', 'gonzalez', '12345', 'gabrielubuntu320@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2'),
('Montse', 'Gonzalez', '2109', 'montse@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
