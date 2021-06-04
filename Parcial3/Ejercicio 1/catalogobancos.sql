-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 05:48:25
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arguelles`
--

CREATE DATABASE arguelles;
USE arguelles;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogobancos`
--

CREATE TABLE `catalogobancos` (
  `id_banco` tinyint(4) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `calle` varchar(20) DEFAULT NULL,
  `numero_domicilio` varchar(10) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogobancos`
--

INSERT INTO `catalogobancos` (`id_banco`, `razon_social`, `rfc`, `colonia`, `calle`, `numero_domicilio`, `telefono`) VALUES
(1, 'Banco Nacional de México, S.A., Grupo Financiero Banamex', 'ULM7W8SQL18GD', 'Colonia 1', 'Calle 1', '0716', '4462311244'),
(2, 'Banco Nacional de Comercio Exterior, Institución de Banca de Desarrollo', 'UUC7HI6X38DW3', 'Colonia 2', 'Calle 2', '8356', '8533355872'),
(3, 'BBVA Bancomer, S.A., Grupo Financiero BBVA Bancomer', '43YTMKQKV29F0', 'Colonia 3', 'Calle 3', '0490', '7456109731'),
(4, 'Banco Santander (México), S.A., Grupo Financiero Santander', '1CU1DKBI4LGNG', 'Colonia 4', 'Calle 4', '9833', '4113922791'),
(5, 'HSBC México, S.A., Grupo Financiero HSBC', 'ZTUO7T265JZQK', 'Colonia 5', 'Calle 5', '5090', '4926328828');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogobancos`
--
ALTER TABLE `catalogobancos`
  ADD PRIMARY KEY (`id_banco`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogobancos`
--
ALTER TABLE `catalogobancos`
  MODIFY `id_banco` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
