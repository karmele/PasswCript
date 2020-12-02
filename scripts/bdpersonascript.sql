-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 21:28:48
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
-- Base de datos: `bdpersonascript`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_comprobarUsuario` (IN `usuario` VARCHAR(50) CHARSET utf8, OUT `passwd` VARCHAR(250) CHARSET utf8)  BEGIN
SELECT password INTO passwd FROM usuarios
    WHERE nombre = usuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusu` int(3) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusu`, `nombre`, `password`) VALUES
(1, 'David', '$2a$07$27B/I67D8A6D2./12FEC1.Yk/ieyxNnDwwb4fFaZhOrsqsxFbDbOO'),
(4, 'Ana', '$2a$07$/I.B5C7EBIH1DG0//IIG8u.QSYFHXghwsp9CbqTxbtuiGnfakfo2W'),
(5, 'Rosa', '$2a$07$K504HFK1J87644J.B3CDA.xB7ViXBdFRC6hHtQWNrxCsZ7FViVT0W'),
(6, 'Alberto', '$2a$07$J7DJC8.40A/5H4535744H.JvuM3JD/CBVNCCLeJ../bsIJI8vSHxW'),
(7, 'Carmen', '$2a$07$F.K8CKJ7/H37E67/J42K4.hglD/2uouM2gRgCo4GgEm8fid0agROS'),
(10, 'Iker', '$2a$07$51J.K16J8BF5F0BH26F7GuCjc/sIyv8g8UGCJQiQUTIJnw2/yVtQ.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
