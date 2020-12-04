-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2020 a las 15:58:01
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
-- Estructura de tabla para la tabla `bolsatrabajo`
--

CREATE TABLE `bolsatrabajo` (
  `id` int(11) NOT NULL,
  `puesto` tinytext NOT NULL,
  `descripcion` longtext NOT NULL,
  `requisitos` longtext NOT NULL,
  `sueldo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bolsatrabajo`
--

INSERT INTO `bolsatrabajo` (`id`, `puesto`, `descripcion`, `requisitos`, `sueldo`) VALUES
(6, 'Contador', 'Función principal: presentar oportuna y adecuadamente la información financiera, contable y fiscal de la empresa.\r\nConocimientos: programas contables, NIF, leyes y reglamentos fiscales, contabilidad electrónica.\r\nHabilidades: Analítico, ordenado, disciplinado, orientado a resultados.', '23 a 30 años de edad\r\nSexo indistinto\r\nLic. en contabilidad titulado\r\nExperiencia mínima de 1 año en despacho contable\r\nTiempo completo', 'Sueldo semanal de $2,000.00 a $2,500.00'),
(7, 'Operador de grúa', 'Se solicita operador de grúa para laborar en Guadalajara Jal.', 'EDAD: 30 A 50 AÑOS\r\nEXPERIENCIA MÍNIMA DE 2 AÑOS EN GRÚAS TELESCÓPICAS\r\nTRABAJO EN EQUIPO\r\nDISPONIBILIDAD DE TIEMPO\r\nCON CERTIFICACION (PREFERENTEMENTE)', 'OFRECEMOS SUELDO SEMANAL DE $3200 MAS HRS EXTRAS, SEGURO SOCIAL Y PRESTACIONES DE LEY'),
(8, 'Operador de excavadora', 'Realizar operaciones de excavación, demolición y carga de materiales y equipo menor. Llevar reporte diario de la máquina. Checar el estado de la máquina así como reportar fallas de la máquina al jefe de mantenimiento.', 'Edad: 28 a 45 años, Masculino, Experiencia mínima de 1 año, Con certificación (preferentemente). Disponibilidad de Tiempo. Buena actitud.', 'Sueldo: $2800 semanal, más horas extras y prestaciones de ley.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bolsatrabajo`
--
ALTER TABLE `bolsatrabajo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bolsatrabajo`
--
ALTER TABLE `bolsatrabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
