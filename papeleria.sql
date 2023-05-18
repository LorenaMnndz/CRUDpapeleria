-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2023 a las 13:54:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `codigo` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `unidades` int(20) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `codigocat` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`codigo`, `nombre`, `unidades`, `precio`, `foto`, `codigocat`) VALUES
(1, 'Boligrafo', 250, '2,5 Euros', '<img src=\'boligrafo.jpg\' width=\'75\' height=\'75\'>', 6),
(2, 'Lápiz', 350, '1 Euro', '<img src=\'lapiz.jpg\' width=\'75\' height=\'75\'>', 7),
(3, 'Borrador', 500, '0,60 Euros', '<img src=\'borrador.jpg\' width=\'75\' height=\'75\'>', 5),
(4, 'Cuaderno Rayas', 150, '2 Euros', '<img src=\'rayas.jpg\' width=\'75\' height=\'75\'>', 4),
(5, 'Cuaderno Cuadros', 260, '2 Euros', '<img src=\'cuadros.jpg\' width=\'75\' height=\'75\'>', 4),
(6, 'Pinturas de Cera', 320, '2,5 Euros', '<img src=\'ceras.jpg\' width=\'75\' height=\'75\'>', 8),
(7, 'Bolígrafo borrable', 150, '1,90 Euros', '<img src=\'boligrafo3.jpg\' width=\'75\' height=\'75\'>', 6),
(8, 'Bolígrafo Pilot', 300, '1,5 Euros', '<img src=\'boligrafo2.jpg\' width=\'75\' height=\'75\'>', 6),
(9, 'Borrador Milan', 320, '0,60 Euros', '<img src=\"borrador3.jpg\" width=\"75\" height=\"75\">', 5),
(10, 'Borrador Standler', 200, '1,15 Euros', '<img src=\"borrador2.jpg\" width=\"75\" height=\"75\">', 5),
(11, 'Ceras Manley', 75, '1,90 Euros', '<img src=\"ceras2.jpg\" width=\"75\" height=\"75\">', 8),
(12, 'Ceras Das Color', 200, '2,35 Euros', '<img src=\"ceras3.jpg\" width=\"75\" height=\"75\">', 8),
(13, 'Ceras Dasc', 30, '3,20 Euros', '<img src=\"ceras4.jpg\" width=\"75\" height=\"75\">', 8),
(14, 'Cuaderno Pasta Dura', 120, '2,10 Euros', '<img src=\"cuaderno3.jpg\" width=\"75\" height=\"75\">', 4),
(15, 'Lápiz Standler', 300, '2,20 Euros', '<img src=\"lapiz2.jpg\" width=\"75\" height=\"75\">', 7),
(16, 'Tijeras Zurdos', 124, '1,80 Euros', '<img src=\"tijeras2.jpg\" width=\"75\" height=\"75\">', 3),
(17, 'Tijeras milan zurdos', 320, '3,50 Euros', '<img src=\"tijeras3.jpg\" width=\"75\" height=\"75\">', 3),
(100, 'Ceras fluor', 100, '3 Euros', '<img src=\'fluor.jpg\' width=\'75\' height=\'75\'>', 4),
(102, 'papel decorativo', 10, '20', '<img src=\"papel.jpg\" width=\"75\" height=\"75\">', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codigocat` int(10) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigocat`, `nombre`, `descripcion`) VALUES
(1, 'Cajas', 'Tipos de caja'),
(2, 'Bolsas', 'Tipos de bolsa'),
(3, 'Tijeras', 'Tipos de tijeras'),
(4, 'Cuaderno', 'Tipos de cuadernos'),
(5, 'Borradores', 'Tipos de borradores'),
(6, 'Boligrafo', 'Tipos de boligrafos'),
(7, 'Lápiz', 'Tipos de lápiz'),
(8, 'Ceras', 'Tipos de ceras'),
(9, 'Papel', 'Tipos de papel'),
(42, 'Grapadora oficina', 'Tipos de grapadora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`) VALUES
('LMB', '222'),
('Lorena', '1111'),
('prueba1', '1111'),
('prueba10', 'prueba10'),
('prueba2', '147'),
('prueba5', '9999'),
('prueba7', 'prueba7'),
('user1', '123'),
('user1user1', 'user1'),
('user63', 'user63'),
('usuario 300', 'usuario 300'),
('usuario1', '9999'),
('Usuario100', '999'),
('usuario100000', 'usuario100000'),
('usuario123', 'usuario123'),
('usuario2', '2222'),
('Usuario22', '8956'),
('Usuario23', '8956'),
('usuario3', '8888'),
('Usuario400', 'Usuario400'),
('usuario700', 'usuario700'),
('usuarioA', '444'),
('usuarioB', '444'),
('usuarioC', '333'),
('Usuariol', 'Usuariol'),
('USUARIOOOO', 'USUARIOOOO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigocat` (`codigocat`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigocat`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `codigocat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
