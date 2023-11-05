-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2023 a las 21:08:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rolegame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creatures`
--

CREATE TABLE `creatures` (
  `idCreature` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `attackPower` int(11) NOT NULL,
  `lifeLevel` int(11) NOT NULL,
  `weapon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `creatures`
--

INSERT INTO `creatures` (`idCreature`, `name`, `description`, `avatar`, `attackPower`, `lifeLevel`, `weapon`) VALUES
(3, 'Messi', 'Es Messi', 'https://fotografias.antena3.com/clipping/cmsimages02/2023/10/30/48E1E95C-D72B-4CB2-B9EC-5AFA279C9104/leo-messi-posa-balon-oro-2023_97.jpg?crop=777,437,x0,y58&width=1600&height=900&optimize=low&format=webply', 2, 1, 'Iron boots');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creatures`
--
ALTER TABLE `creatures`
  ADD PRIMARY KEY (`idCreature`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `creatures`
--
ALTER TABLE `creatures`
  MODIFY `idCreature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
