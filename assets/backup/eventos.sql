-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2024 a las 05:32:03
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
-- Estructura de tabla para la tabla `adicionales`
--

CREATE TABLE `adicionales` (
  `idAdicionales` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `cNombre` varchar(50) NOT NULL,
  `nPrecio` decimal(10,0) NOT NULL,
  `nCantidad` int(11) NOT NULL,
  `bEstado` varchar(50) NOT NULL,
  `bDefault` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `cNombre` varchar(50) NOT NULL,
  `cDescripcion` text NOT NULL,
  `bEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `cTexto` text NOT NULL,
  `dFecha` date NOT NULL,
  `bEstado` varchar(50) NOT NULL,
  `nCalificacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesolicitud`
--

CREATE TABLE `detallesolicitud` (
  `idDetalle` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idAdicionales` int(11) NOT NULL,
  `nPrecio` decimal(10,0) NOT NULL,
  `nCantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e/6`
--

CREATE TABLE `e/6` (
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `bEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiasolicitud`
--

CREATE TABLE `historiasolicitud` (
  `idHistoria` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `dFechaMod` date NOT NULL,
  `nEstado` varchar(50) NOT NULL,
  `cComentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `cNombre` varchar(50) NOT NULL,
  `cDescripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `cDescripcion` text NOT NULL,
  `cImagen` text NOT NULL,
  `nCalificacion` varchar(50) NOT NULL,
  `nPrecio` decimal(10,0) NOT NULL,
  `bEstado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nEstado` varchar(50) NOT NULL,
  `dFechaSolicitud` date NOT NULL,
  `dFechaEvento` date NOT NULL,
  `nPrecio` decimal(10,0) NOT NULL,
  `cComentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contraseña` text NOT NULL,
  `Rol` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Usuario`, `Contraseña`, `Rol`, `Estado`) VALUES
(0, 'asd', 'assd241060', '98a4f7655958a385a0667bad61bac1b10f31df5f39eb57e06527dc1949acaf18', 'Admin', 'Activado'),
(1, 'administrador', 'admin', 'ae0a456b0a5b5a05196cf4e6392e597b5a4e99545c6a5254f5ddca6ae6d016a1', 'Admin', 'Activado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD PRIMARY KEY (`idAdicionales`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `detallesolicitud`
--
ALTER TABLE `detallesolicitud`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indices de la tabla `e/6`
--
ALTER TABLE `e/6`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `historiasolicitud`
--
ALTER TABLE `historiasolicitud`
  ADD PRIMARY KEY (`idHistoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indices de la tabla `teventos`
--
ALTER TABLE `teventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  MODIFY `idAdicionales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallesolicitud`
--
ALTER TABLE `detallesolicitud`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historiasolicitud`
--
ALTER TABLE `historiasolicitud`
  MODIFY `idHistoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teventos`
ALTER TABLE `teventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
