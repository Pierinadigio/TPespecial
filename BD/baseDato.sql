-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2022 a las 02:37:12
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
-- Base de datos: `db_tp`
--
CREATE DATABASE IF NOT EXISTS `db_tp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_tp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `ID_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`ID_admin`, `email`, `password`) VALUES
(1, 'admin@administradores.com', '$2a$12$Gu1/SdrbkwEFjvFNnqRq0eWywCAj3dI6zKMyxrbXtTvIyXWnDpFvC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(45) NOT NULL,
  `mascota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `direccion`, `telefono`, `mascota`) VALUES
(1, 'Pierina Di Giorgio', 'Casacuberta', 555348176, 'Silvio'),
(2, 'Martina Vittone', 'Godoy', 555763412, 'Romeo'),
(3, 'Melina Sanchez', 'Moreno', 555349865, 'Morita'),
(4, 'Franco Lopez', 'Montie 876', 555236709, 'Roco'),
(5, 'Fernanda Carestia', 'Roca 819', 555449194, 'Chiquita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `cliente_id` int(100) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `vacunacion` varchar(100) NOT NULL,
  `antiparasitario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `fecha`, `cliente_id`, `motivo`, `vacunacion`, `antiparasitario`) VALUES
(1, '01-02-2022', 1, 'Control', '', 'Primer dosis- 6 comp'),
(2, '27-02-2022', 4, 'Tos de la perrera. Se administra jarabe- Control en 48Hs.', '', ''),
(3, '12-03-2022', 4, 'vacuna', 'Antirrabica anual', ''),
(4, '12-05-2022', 1, 'Vacunacion anual', 'Antirrabica- Quintuple', ''),
(5, '12-05-2022', 5, 'antiparasitario', '', 'Regular. Tres compri'),
(6, '12-07-2022', 1, 'refuerzo vacuna', 'tos de la perrera', ''),
(7, '12-08-2022', 2, 'Consulta por bajo peso. Se cambia alimento balanceado y se indica refuerzo vitaminico', '', ''),
(10, '02-09-2022', 4, 'antiparasitario', '', 'tres comprimidos'),
(11, '14-09-2022', 5, 'Consulta por alergia. Se indica antialergico', '', ''),
(12, '10-10-2022', 3, 'consulta', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
