-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2022 a las 22:13:22
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TarotApp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cards`
--

CREATE TABLE `Cards` (
  `name_card` varchar(255) NOT NULL,
  `type_card` varchar(100) NOT NULL,
  `number_card` int(11) NOT NULL,
  `meaning_up` text NOT NULL,
  `meaning_reverse` text NOT NULL,
  `favorite_card` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Cards`
--

INSERT INTO `Cards` (`name_card`, `type_card`, `number_card`, `meaning_up`, `meaning_reverse`, `favorite_card`) VALUES
('a', 'b', 2, 'bb', 'bbb', 'sfsd'),
('aB', 'B', 7, 'B', 'H', NULL),
('aBa', 'Ba', 23, 'Bs', 'Hs', NULL),
('asdaaaZ', 'asdamm', 345, 'asdasdas', 'asdasdasd', NULL),
('dfsdf', 'dfsdfds', 2432, 'sdfds', 'sdfdsfs', 'sdfsd'),
('FOOL', 'MAJOR ARCANA', 0, 'DNKLLDFSNKLNLKDF', 'MKLÑSDFMKLSDMFLKMKDFS', 'OK'),
('sdfdfsvf', 'sdfsdf', 3454, 'sdfsd', 'jndsvnijdijnhjidsf', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`name_card`,`type_card`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
