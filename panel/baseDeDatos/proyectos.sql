-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2020 a las 05:29:53
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
(10, 'Rehabilitación de drenajes en la Universidad Anáhuac Norte en Huixquilucan', 'Estado de México.', 'Rehabilitación de drenajes sanitario y pluvial en la Universidad Anáhuac Norte en Huixquilucan, Estado de México.', 'Suministro e instalación de 320.00 m de tubería pad de 12” de diámetro, y 540.00 m de tubería pad de 15” de diámetro, a una profundidad de 1.50 m, construcción de pozos de visita y pozos de absorción de tabique, demolición y reposición de concreto hidráulico.', '2010-07-31', '0-01.jpg', '0-02.jpg', '0-03.jpg'),
(14, 'Obra en carretera Amecameca – San Pedro Nexapa', 'Estado de México.', 'Cruce de demostración del Sistema de Perforación Guiada (GBM) con equipo marca Akkerman, utilizando tubería de barro vitrificado de 15” de diámetro, instalación para cruzar la carretera Amecameca – San Pedro Nexapa, Estado de México. En unión con la empresa Alinea Group, S.A. de C.V. trabajos para la CAEM del Estado de México.', 'Suministro e instalación de 20.00 m de tubería de barro vitrificado de 15” de diámetro a una profundidad de 2.70 m por el método de sistema guiado con tubo piloto; la construcción de 2 lumbreras circulares de 3.20 m de diámetro de madera reforzada con arillos metálicos.', '2012-12-08', '1-01.jpg', '', ''),
(15, 'Subcolector San Marcos', 'Estado de México.', 'Construcción del Subcolector San Marcos, Plazas Aragón, cabecera municipal de Nezahualcóyotl, Estado de México. En unión con la empresa Alinea Group, S.A. de C.V. trabajos para la CAEM del Estado de México.', 'Suministro e instalación de 873.00 m de tubería de concreto reforzado por el método de sistema guiado con tubo piloto; la construcción de 9 lumbreras de empuje y salida de 4.0 x 5.0 m y 7.00 m de profundidad, construcción de 8 pozos caja de 2.00 x 2.50 x 6.25 m de profundidad y 9 sondeos de mecánica de suelos.', '2013-11-30', '2-01.jpg', '2-02.jpg', '2-03.jpg'),
(16, 'Subcolectores al Colector Emiliano Zapata', 'Estado de México.', 'Construcción de subcolectores al Colector Emiliano Zapata (primera etapa), cabecera municipal de Ecatepec, Estado de México. En unión con la empresa Alinea Group, S.A. de C.V. trabajos para la CAEM del Estado de México.', 'Suministro e instalación de 1,350.00 m de tubería de concreto reforzado por el método de sistema guiado con tubo piloto; la construcción de trece lumbreras de empuje y salida de 4.0 x 5.0 m y 7.00 m de profundidad, construcción de 13 pozos caja de 2.00 x 2.50 x 6.25 m de profundidad y 14 sondeos de mecánica de suelos.', '2014-05-23', '3-01.jpg', '3-02.jpg', '3-03.jpg'),
(17, 'Subcolector Amecameca', 'Estado de México.', 'Construcción del Subcolector Amecameca, en Amecameca, Estado de México.', 'Instalación por el método de perforación guiada de 135.0 m de tubería de concreto de 91 cm de diámetro, construcción de tres lumbreras de 4.0 x 5.0 m y 5.80 m de profundidad y tres cajas de concreto reforzado.', '2014-10-30', '4-01.jpg', '4-02.jpg', '4-03.jpg'),
(18, 'Instalación de tubería para el Colector Fontibón', 'Ciudad de Bogotá.', 'Asesoría técnica para la instalación de tubería de concreto por el sistema de perforación guiada, en la construcción del Colector Fontibón en Bogotá, Colombia.', 'Instalación de 197.36 m de tubería de concreto de 400 mm de diámetro, 427.23 m de tubería de concreto de 600 mm de diámetro y 359.19 m de tubería de concreto de 900 mm de diámetro.', '2016-02-15', '5-01.jpg', '5-02.jpg', '5-03.jpg'),
(19, 'Colector en Calle Miguel Hidalgo', 'Estado de México.', 'Construcción del colector con tubería de 1.22 m de diámetro en la Calle Miguel Hidalgo en la Colonia Tepalcates en el Municipio de Chimalhuacán, Estado de México.', 'Instalación por el método de hincado de tubería de 336 m de tubería de concreto de 1.22 m de diámetro, construcción de dos lumbreras de empuje de 10.00 x 5.00 y 6.00 m de profundidad y dos lumbreras especiales de salida de 7.00 x 6.00 y 6.00 m de profundidad.', '2017-07-27', '6-01.jpg', '6-02.jpg', '6-03.jpg'),
(20, 'Colector Calle Asistencia Pública', 'Ciudad de México.', 'Construcción del colector con tubería de concreto reforzado de 1.52 m de diámetro interior, hasta una profundidad promedio de 9.00 m aproximadamente, mediante el procedimiento de hincado de tubería con el sistema de microtuneleo, en la Calle Asistencia Pública, en la delegación Venustiano Carranza. Ciudad de México.', 'Instalación por el método de hincado de tubería de 535 m de tubería de concreto reforzado de 1.52 m de diámetro interior.', '2017-11-15', '7-01.jpg', '7-02.jpg', '7-03.jpg'),
(21, 'Encamisado con tubería de concreto en Av. Texcoco', 'Estado de México.', 'Encamisado con tubería de concreto de 1.22 m de diámetro en Av. Texcoco esquina Av. Carmelo Pérez en el municipio de Nezahualcóyotl, Estado de México.', 'Hincado de 103.20 m de tubería de concreto reforzado de 1.22 m de diámetro interior, deslizamiento de tubería de acero de 42” Y 3/8” de espesor dentro.', '2019-03-08', '8-01.jpg', '8-02.png', '8-03.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
