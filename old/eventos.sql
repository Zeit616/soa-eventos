-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2024 a las 23:52:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teventos`
--

CREATE TABLE `teventos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre_evento` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `fecha_fin` date NOT NULL,
  `hora_ fin` time NOT NULL,
  `lugar_evento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `teventos`
--

INSERT INTO `teventos` (`id`, `codigo`, `nombre_evento`, `fecha_inicio`, `hora_inicio`, `fecha_fin`, `hora_ fin`, `lugar_evento`) VALUES
(1, 'aaaaa', 'Fiesta de bachilleres UTP 2024', '2024-12-28', '22:00:00', '2024-12-29', '03:00:00', 'Munays'),
(2, 'bbbbb', 'Fiesta de desaprobados', '2024-12-28', '22:00:00', '2024-12-29', '03:00:00', 'Office');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `teventos`
--
ALTER TABLE `teventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `teventos`
--
ALTER TABLE `teventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
