-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 10:19:44
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `idPrivilegio` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idPrivilegio`, `correo`, `usuario`, `contrasena`, `fecha_registro`) VALUES
(1, 2, 'gduban2014@hotmail.com', '1', '$2y$10$DCd6OkOzEoeDmNtELZ7dv.Z.U28lfC4A0ps.kcHahT9P1dnvOh43u', '2022-09-26 19:49:52'),
(2, 2, 'gduban2014@hotmail.com', '2', '$2y$10$ecZspXRavjhMqOue8Nb2rOXNlcXfOmZVT6ntptx1MHouRWCllxzSe', '2022-09-26 19:52:32'),
(3, 2, 'gduban2014@hotmail.com', '3', '$2y$10$Mo6tbahr31j4rW0iHfs6MeY2312ouZEW3Bd2AQIJsz6SAFl94coES', '2022-09-26 19:53:22'),
(4, 2, 'gduban2014@hotmail.com', '4', '$2y$10$QzBqanhbN4tgSWivofJukemdj3AX.AFd.Pe1o7LR5NMTGPXdY7iGG', '2022-09-26 19:54:04'),
(5, 2, 'gduban2014@hotmail.com', '5', '$2y$10$Il.DVqp3464twYJDw2l3fOFTdMmuITPLa64X2hEaIHR0fckb460bW', '2022-09-26 20:03:49'),
(6, 2, 'gduban2014@hotmail.com', '6', '$2y$10$JhJR6ApBcci0FTiPDwM3gu02I9V6x9nzOlh2pG4MuXYQPNnsGK3oO', '2022-09-26 20:09:51'),
(7, 2, 'gduban2014@hotmail.com', '7', '$2y$10$UMcN0kvAA8Zti1XfMVrp0.Nro29WNbhbb52hnUyfk4fgG.im86s1i', '2022-09-26 20:10:10'),
(8, 2, 'gduban2014@hotmail.com', '9', '$2y$10$La3f7boWeL/y/herO2JgPucpTWptSQorzDWn1h03343hoPw8aAE3i', '2022-09-26 20:11:29'),
(9, 2, 'gduban2014@hotmail.com', '225', '$2y$10$xpg6PJj.cHMw7z9AQARK.eJ.VXBwULUs6v4mhuGI3ww9t2rh7KnOq', '2022-09-27 05:43:57'),
(10, 2, 'gduban2014@hotmail.com', '20', '$2y$10$9be6i/Wwmz3G8OcCkEIQbOGtDXTfRceeBXlCj/u0hC3FUtsoaraca', '2022-09-27 06:13:30'),
(11, 2, 'gduban2014@hotmail.com', '454', '$2y$10$4vBoEY1Txv/gIF98XNciguiCi5VgiT9UDWrSmGsGsuX7BBmurRSN6', '2022-09-27 06:41:49'),
(12, 2, 'gduban2014@hotmail.com', '545', '$2y$10$kM.9j2BUU85h8ZbTdciK6eD0K5T2q5tFafRA7z1wpxCjFNoIxqPZy', '2022-09-27 07:55:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idPrivilegio` (`idPrivilegio`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
