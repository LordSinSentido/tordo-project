-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 07:08:21
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
-- Base de datos: `tordotec_magi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinarias`
--

CREATE TABLE `maquinarias` (
  `numeroSerie` text NOT NULL,
  `tipo` text NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `descripcion` longtext NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maquinarias`
--

INSERT INTO `maquinarias` (`numeroSerie`, `tipo`, `marca`, `modelo`, `descripcion`, `estatus`, `imagen`) VALUES
('CAD0000ASDFG00000X', 'Motoconformadora', 'Caterpillar', '140M', 'Excelente estado', 1, 'cat140m.jpg'),
('CAD0000ASDFG00001X', 'Vibrocompactador', 'Caterpillar', 'CB64', 'Excelente estado', 1, 'catCB64.jpg'),
('CAD0000ASDFG00002X', 'Retroexcavadora', 'John Deere', '310J', 'Excelente estado', 0, 'deere310J.jpg'),
('CAD0000ASDFG00003X', 'Camión de volteo', 'Kenworth', 'T800', 'Último modelo', 1, 'kenT800.jpg'),
('CAD0000ASDFG00004X', 'Motoconformadora', 'Caterpillar', '120G', 'Buen estado', 0, 'cat120g.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maquinarias`
--
ALTER TABLE `maquinarias`
  ADD PRIMARY KEY (`numeroSerie`(225));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
