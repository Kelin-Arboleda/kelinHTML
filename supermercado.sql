-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 06:26:56
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cereales`
--

CREATE TABLE `cereales` (
  `referencia` int(10) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cereales`
--

INSERT INTO `cereales` (`referencia`, `producto`, `unidad`, `valor`) VALUES
(1, 'Harina de Trigo', 'Kilo', 3970),
(2, 'Harina de Maiz', 'Kilo', 3140),
(3, 'Arroz', 'Kilo', 2780),
(4, 'Aceite Vegetal', '500 cm3', 2300),
(5, 'Aceite de Oliva', '500 Ml', 16450),
(6, 'Pasta', '500 gr', 4170);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutasv`
--

CREATE TABLE `frutasv` (
  `referencia` int(10) UNSIGNED NOT NULL,
  `producto` varchar(30) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frutasv`
--

INSERT INTO `frutasv` (`referencia`, `producto`, `unidad`, `valor`) VALUES
(1, 'Arracacha', 'Kilo', 1500),
(2, 'Repollo Blanco', 'Kilo', 600),
(3, 'Aguacate', 'Kilo', 2800),
(4, 'Ahuyama', 'Kilo', 800),
(5, 'Aji­ Dulce', 'Kilo', 2500),
(6, 'Aji Picante', 'Kilo', 1500),
(7, 'Ajo', 'Kilo', 5500),
(8, 'Apio', 'Kilo', 800),
(9, 'Arveja Seca', 'Kilo', 1800),
(10, 'Arveja Verde', 'Kilo', 1800),
(11, 'Banano', 'Kilo', 1000),
(12, 'Berenjena', 'Kilo', 1800),
(13, 'Breva', 'Kilo', 3500),
(14, 'Brocoli', 'Kilo', 1600),
(15, 'Cebolla Blanca', 'Kilo', 3000),
(16, 'Cebolla Junca', 'Kilo', 1500),
(17, 'Cebolla Roja', 'Kilo', 3500),
(18, 'Chocolo Mazorca', 'Kilo', 1200),
(19, 'Cilantro', 'kilo', 2000),
(20, 'Coco', 'Kilo', 6000),
(21, 'Coliflor', 'Kilo', 1600),
(22, 'Curuba Larga', 'Kilo', 1200),
(23, 'Durazno', 'Kilo', 7500),
(24, 'Espinaca', 'Kilo', 1300),
(25, 'Fresa', 'Kilo', 6000),
(26, 'Granadilla', 'Kilo', 3900),
(27, 'Guanabana', 'Kilo', 2500),
(28, 'Guayaba Manzana', 'Kilo', 2600),
(29, 'Guayaba Pera', 'Kilo', 1000),
(30, 'Habichuela', 'Kilo', 1500),
(31, 'Lechuga  Batavia', 'Kilo', 1100),
(32, 'Limon Comun', 'Kilo', 3000),
(33, 'Limon Tahiti', 'Kilo', 2300),
(34, 'Lulo', 'Kilo', 2800),
(35, 'Mandarina', 'Kilo', 1500),
(36, 'Mango Tommy', 'Kilo', 2300),
(37, 'Manzana Roja', 'kilo', 5000),
(38, 'Manzana Verde', 'Kilo', 6667),
(39, 'Maracuya', 'Kilo', 2200),
(40, 'Melon', 'Kilo', 3100),
(41, 'Mora', 'Kilo', 2000),
(42, 'Mora', 'Kilo', 2000),
(43, 'Naranja', 'Kilo', 1000),
(44, 'Papa Criolla', 'Kilo', 2000),
(45, 'Papa', 'Kilo', 1300),
(46, 'Papaya', 'Kilo', 2200),
(47, 'Pepino', 'Kilo', 1400),
(48, 'Perejil', 'Kilo', 4000),
(49, 'Pimenton', 'Kilo', 2000),
(50, 'PiÃ±a Manzana', 'kilo', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `cedula`, `sexo`, `email`, `direccion`, `telefono`, `contrasena`) VALUES
('jjj', 'jjjj', 'jjjj', '1', 'juli.mm134@hotmail.com', 'jjjj', 'jjj', '8cb2237d0679ca8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cereales`
--
ALTER TABLE `cereales`
  ADD PRIMARY KEY (`referencia`);

--
-- Indices de la tabla `frutasv`
--
ALTER TABLE `frutasv`
  ADD PRIMARY KEY (`referencia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cereales`
--
ALTER TABLE `cereales`
  MODIFY `referencia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
