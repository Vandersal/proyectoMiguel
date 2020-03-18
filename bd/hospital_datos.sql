-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2020 a las 10:52:34
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(125) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(100) NOT NULL,
  `estado_civil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lugar_nacimiento` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lugar_residencia` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `escolaridad` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio_consulta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `edad`, `estado_civil`, `genero`, `direccion`, `telefono`, `correo`, `lugar_nacimiento`, `lugar_residencia`, `fecha_nacimiento`, `escolaridad`, `fecha_inicio_consulta`) VALUES
(9, 'Vandersal Aheram', 21, 'Casado', 'Masculino', 'Calle Libertad y Av HIdalgo', 87744, '201224@ids.upchiapas.edu.mx', 'Ciudad de mexico', 'Tuxtla', '2011-06-19', 'Universitaria ', '2020-06-19'),
(10, 'Jose Gerardo', 22, 'Soltero', 'Masculino', 'Av siempre viva', 966131932, '201224@ids.upchiapas.edu.mx', 'Las tinajas', 'Mexico', '1990-02-12', 'Primaria', '0000-00-00'),
(11, '', 0, '', '', '', 0, '', '', '', '0000-00-00', '', '2020-06-19'),
(12, '', 0, '', '', '', 0, '', '', '', '0000-00-00', '', '2020-06-19'),
(13, '', 0, '', '', '', 0, '', '', '', '0000-00-00', '', '2020-06-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
