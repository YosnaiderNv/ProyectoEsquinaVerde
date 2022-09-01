-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 06:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uesquint_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_administradores`
--

CREATE TABLE `tb_administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `identificacion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_admin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_administradores`
--

INSERT INTO `tb_administradores` (`id`, `nombre`, `apellidos`, `identificacion`, `codigo_admin`, `telefono`, `correo`, `pass`) VALUES
(6, 'fernando lp', 'oñate', '111', '123', '301', 'fernando888@gmail.com', '111'),
(9, 'Parcial final', 'prueba1', '123', '888', '301', 'pepe@gmail.com', '11222'),
(10, 'josnaider', 'navarro', '1100551474', '151214', '3017967242', 'tuloco@gmail.com', '151214'),
(12, 'Josnaider', 'Jose', '02541212154', '14353222', '123323232', 'yosnasj@gmail.com', '125444');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `identificacion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nombre`, `apellidos`, `telefono`, `identificacion`, `correo`, `clave`) VALUES
(4, 'Fernando', 'asdfa', '301', '123', 'fernando@gmail.com', '123'),
(6, 'pepito', 'perez', '305', '111', 'fernando55@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `valor` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tb_productos`
--

INSERT INTO `tb_productos` (`id`, `nombre`, `valor`, `codigo`, `fecha`, `descripcion`, `ruta`) VALUES
(2, 'papas a la francesa', '2800', '3636', '27/03/2022', 'increible sabor las mejores del mercado', '../Imagenes/png-transparent-french-fries-french-fries-food-fried-food.png'),
(3, 'Buñuelos', '2000', '1414', '26/03/2022', 'los mejores del lugar increible sabor', '../Imagenes/Producto-Preparacion-Bunuelo-1024x1024-1.png'),
(4, 'Hot dog', '5200', '15151', '26/03/2022', 'Los mejores perros de la zona increible sabor', '../Imagenes/580b57fcd9996e24bc43c1b7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proveedores`
--

CREATE TABLE `tb_proveedores` (
  `id` int(50) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_pro` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `insumo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tb_proveedores`
--

INSERT INTO `tb_proveedores` (`id`, `nombres`, `apellidos`, `identificacion`, `correo`, `codigo_pro`, `insumo`, `nombre_empresa`) VALUES
(1, 'carlos', 'gomez', '1100224118', 'carlosp@gmail.com', '141214', 'manteca', 'blanquitoLimpo'),
(8, 'Heiner ', 'sequeda', '141865353855', 'heinersequeda@gmail.com', '5555', 'perico', 'pericos de la sabana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Identificacion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `Nombre`, `Apellidos`, `Identificacion`, `Telefono`, `Pass`) VALUES
(42, 'Fernando ', 'Oñate', '0312', '301', '123'),
(43, 'Heiner', 'Sequeda', '333', '304', '555'),
(44, 'Josnaider', 'Navarro', '444', '305', '777'),
(45, 'Pepe', 'Perez', '999', '305', '999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administradores`
--
ALTER TABLE `tb_administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_administradores`
--
ALTER TABLE `tb_administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
