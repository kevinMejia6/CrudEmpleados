-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2023 a las 00:07:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`, `descripcion`) VALUES
(3, 'Programador junior ', 'Sistemas'),
(13, 'PRUEBAS', 'Maquetadores'),
(14, 'PRUEBAS', 'Sistemass');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado` enum('activo','inactivo') NOT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `estado`, `id_sucursal`, `id_cargo`) VALUES
(3, 'Kevin', 'Mejía', 'ddd', '50379919117', 'inactivo', 2, 3),
(5, 'Guadaluipe', 'ddd', 'DE', '72635895', 'activo', 2, 3),
(6, 'Kevin', 'Mejía', 'ddd', '+3333', 'activo', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id`, `nombre`, `direccion`, `telefono`, `estado`) VALUES
(1, 'inactivo', 'Bulevar los proceres San Salvador.', '22067000', 'Inactiva'),
(2, 'San Vicente ', 'Urbanizacion Santa Tecla', '33333', 'activa'),
(3, 'San Salvador ', 'Centro', '4444', 'Inactiva'),
(4, 'Miralvalle', 'Miralvalle c', '33333', 'Inactiva'),
(5, 'PRUEBAS', 'Urbanizacion', '78921840', ''),
(6, 'Metro centro', 'San Martin', '50379919117', ''),
(7, 'Cabañas', 'caba', '33333', ''),
(8, 'Uuruguay', 'Uuruguay c', '3444', 'activo'),
(9, 'Guadaluipe', 'ddd', '+50379919117', 'activo'),
(10, 'Guadaluipe', 'ddd', '+50379919117', 'activo'),
(11, 'Guadaluipe', 'ddd', '+50379919117', 'Inactiva'),
(12, 'Guadaluipe', 'ddd', '+50379919117', 'activo'),
(13, 'Uuruguay', 'Uuruguay c', '3444', 'Inactiva'),
(14, 'Multi', 'Multiplaza', '44444', 'Inactiva'),
(15, 'San Vicente ', 'Urbanizacion Santa Tecla', '444', 'Inactiva'),
(16, 'PRUEBAS', 'ddd', '+50379919117', 'Inactiva'),
(17, 'San Vicente ', 'Urbanizacion Santa Tecla', 'w222', 'Inactiva'),
(18, 'San Vicente ', 'Urbanizacion Santa Tecla', '323232', 'Inactiva'),
(19, 'San Vicente s', 'Urbanizacion Santa Teclas', '323232', 'Inactiva'),
(20, 'San Vicente ', 'Urbanizacion Santa Teclas', '21111111', 'Inactiva'),
(21, 'San Vicente ', 'Urbanizacion Santa Teclas', '333', 'activa'),
(22, 'Apopas', 'city', '04040404', 'Inactiva'),
(23, 'Soya', 'city', '994949', 'Inactiva'),
(24, 'PRUEBAS', 'Urbanizacion', '78921840', 'activa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `empleado_ibfk_2` (`id_cargo`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
