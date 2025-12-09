-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2025 a las 01:20:47
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
-- Base de datos: `carrito`
--


--
-- Estructura de tabla para la tabla `mis_productos`
--


-- --------------------------------------------------------
CREATE TABLE `bebidas_frias` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `bebidas_frias` (`id`, `name`, `description`, `price`, `imagen`) VALUES
(1, 'Jugo de platano', 'Batido cremoso. Suave y dulce, una bebida sustanciosa.', 7.00, ''),
(2, 'Jugo de frutilla', 'El favorito del verano. Batido natural, dulce y lleno de sabor.', 8.00, ''),
(3, 'Jugo de papaya', 'Tropical y digestivo. Un jugo espeso y delicioso, perfecto para acompañar.', 7.00, 'imagenes/minidona.jpg'),
(4, 'Jugo de naranja', 'Vitamina C pura. Exprimido al momento, refrescante y revitalizante.', 6.00, 'imagenes/minidona.jpg');
-- --------------------------------------------------------
CREATE TABLE `masas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `masas` (`id`, `name`, `description`, `price`, `imagen`) VALUES
(1, 'Empanadas', 'Rellenas de queso horneadas hasta el punto exacto de dorado.', 3.00, ''),
(2, 'Alfajores medianos', 'Dos galletas tiernas unidas con dulce de leche y espolvoreadas con azúcar.', 3.00, ''),
(3, 'Alfajores peueños', 'Un bocado dulce. Ideal para acompañar tu café o mate.', 1.00, 'imagenes/minidona.jpg'),
(4, 'Queques', 'El panqué casero. Suave y esponjoso, con un sabor que recuerda al hogar.', 4.00, 'imagenes/minidona.jpg');
-- --------------------------------------------------------