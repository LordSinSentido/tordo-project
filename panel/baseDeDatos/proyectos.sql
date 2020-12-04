-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 16:50:07
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
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `titulo` tinytext NOT NULL,
  `lugar` tinytext NOT NULL,
  `descripcion` longtext NOT NULL,
  `alcance` longtext NOT NULL,
  `fecha` date NOT NULL,
  `imagen1` longtext NOT NULL,
  `imagen2` longtext NOT NULL,
  `imagen3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `lugar`, `descripcion`, `alcance`, `fecha`, `imagen1`, `imagen2`, `imagen3`) VALUES
(2, 'Rehabilitación de drenajes en la Universidad Anáhuac Norte en Huixquilucan', 'Estado de México', ' Rehabilitación de drenajes sanitario y pluvial en la Universidad Anáhuac Norte en Huixquilucan, Estado de México. ', ' Suministro e instalación de 320.00 m de tubería pad de 12” de diámetro, y 540.00 m de tubería pad de 15” de diámetro, a una profundidad de 1.50 m, construcción de pozos de visita y pozos de absorción de tabique, demolición y reposición de concreto hidráulico. ', '2010-07-31', '0-01.jpg', '0-02.jpg', '0-03.jpg'),
(3, 'Encamisado con tubería de concreto en Av. Texcoco', 'Estado de México', 'Encamisado con tubería de concreto de 1.22 m de diámetro en Av. Texcoco esquina Av. Carmelo Pérez en el municipio de Nezahualcóyotl, Estado de México.', 'Hincado de 103.20 m de tubería de concreto reforzado de 1.22 m de diámetro interior, deslizamiento de tubería de acero de 42” Y 3/8” de espesor dentro.', '2019-03-08', '8-01.jpg', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
