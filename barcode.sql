-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2024 a las 18:49:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barcode`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barcode`
--

CREATE TABLE `barcode` (
  `id_lote` int(11) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `frente` varchar(10) NOT NULL,
  `ancho` varchar(10) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `codigo_barras` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `barcode`
--

INSERT INTO `barcode` (`id_lote`, `barrio`, `frente`, `ancho`, `owner`, `codigo_barras`) VALUES
(15479652, 'jardin', '58.8', '68.36', 'manuel', '65f1d6e5dbd1b7808'),
(94596265, 'san luis', '34.2', '12.3', 'juan carlos garcia', '65f1e54ab69b82490'),
(97851862, 'ciudadela', '89.53 ', '54.1', 'meliodas', '65f1d8a9bb26c9259'),
(858588855, 'palermo', '58.8', '54.1', 'frodrin', '65f1dd308edf74398'),
(2147483647, 'santa cruz', '87.5', '58.9', 'jose salinas', '65f1e347f2c662964');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id_lote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
