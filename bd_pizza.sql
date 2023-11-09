-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 05:53:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pizza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingredientes`
--

CREATE TABLE `tbl_ingredientes` (
  `id_ing` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `precio_u` decimal(10,2) NOT NULL,
  `unidad_mdd` varchar(50) NOT NULL,
  `stock` int(10) NOT NULL,
  `fecha_cad` date NOT NULL,
  `cnt_ing` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ingredientes`
--
ALTER TABLE `tbl_ingredientes`
  ADD PRIMARY KEY (`id_ing`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ingredientes`
--
ALTER TABLE `tbl_ingredientes`
  MODIFY `id_ing` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
