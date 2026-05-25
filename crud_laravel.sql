-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2026 a las 06:01:30
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
-- Base de datos: `crud_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id` bigint(20) NOT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `direccion_fisica` varchar(200) DEFAULT NULL,
  `telefono_contacto` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `ciudad`, `direccion_fisica`, `telefono_contacto`, `created_at`, `updated_at`) VALUES
(2, 'x', 'cccccccc', '00000000', NULL, '2026-05-25 06:55:46'),
(3, 'La ', 'Av America', '77777777', NULL, NULL),
(4, 'Coc', 'Calle Aroma', '71234567', NULL, NULL),
(5, 'az', 'Av America', '77777777', NULL, NULL),
(6, 'ba', 'Calle Aroma', '71234567', NULL, NULL),
(7, 'Laz', 'Av America', '77777777', NULL, NULL),
(8, 'Coba', 'Calle Aroma', '71234567', NULL, NULL),
(9, ' Paz', 'Av America', '77777777', NULL, NULL),
(11, 'L', 'Av America', '77777777', NULL, NULL),
(12, 'C', 'Calle Aroma', '71234567', NULL, NULL),
(13, 'sucreeee', 'zzzz', '11111', '2026-05-25 06:47:04', '2026-05-25 06:47:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
