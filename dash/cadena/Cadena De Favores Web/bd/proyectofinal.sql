-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2018 a las 02:53:08
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billetera`
--

CREATE TABLE `billetera` (
  `primaryKey` int(11) NOT NULL,
  `xpubCliente` text NOT NULL,
  `id_cliente` varchar(80) NOT NULL,
  `direccion_pago` text NOT NULL,
  `merchantId` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `api_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `billetera`
--

INSERT INTO `billetera` (`primaryKey`, `xpubCliente`, `id_cliente`, `direccion_pago`, `merchantId`, `accountId`, `api_key`) VALUES
(2, 'xpub6CUL1qhVyQSTSJtsbQ4VYKQTxe5pWWwkjPPYfUqxk6tzNcP1TBVhEfQraUnpYgVgmSfuET6499cDE13mBG2xKMJqZTSV3L72P5HzJhmj5L5', 'edgarkrejci12345@gmail.com', '', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA'),
(3, '', 'jar@as.com', '', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA'),
(4, 'rrggfgfdgfdgfsd', 'as@goo.com', '1Frfsnf9YvjgbaEqUcoGBsDgWm2Rv4dMRG', 43243, 432432, 'fdsafdasfdfdsaf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` varchar(80) NOT NULL,
  `nombreCliente` varchar(120) NOT NULL,
  `apellidoCliente` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  `primerUsuario` tinyint(1) NOT NULL,
  `usuariosRegistrados` int(11) NOT NULL,
  `imagenPerfil` varchar(400) DEFAULT NULL,
  `pago` varchar(3) NOT NULL,
  `debeCeder` tinyint(1) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `debePagar` tinyint(4) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `apellidoCliente`, `password`, `active`, `resetToken`, `resetComplete`, `primerUsuario`, `usuariosRegistrados`, `imagenPerfil`, `pago`, `debeCeder`, `fechaRegistro`, `debePagar`, `estado`) VALUES
('as@goo.com', 'prueba', 'payu', '$2y$12$g9mL8rg9xBC7MBxTdjR5O.wcnk5JF98Uo2eUvJ4aNpv6jyZTdQLa.', 'Yes', '', '', 0, 0, 'assets/img/user-13.jpg', 'NO', 1, '2018-03-06', 1, 1),
('catchy@ld.com', 'Edsafd', 'fdsafds', '$2y$12$VXnSRmuMt6TZcqsaRZzjqu0yO1NB9JT5OpPS3qsYneU786QWn.Szi', 'Yes', '', '', 0, 0, 'assets/img/user-13.jpg', 'NO', 1, '2018-02-23', 1, 1),
('cla@gh.com', 'Clarita', 'Moya', '$2y$12$Qecd.WBBIvQPH6fQNdXuiOxuB12Yv9lpfodyLsscBtfJip3MNsEHy', 'Yes', '', '', 0, 0, 'assets/img/user-13.jpg', 'YES', 1, '2018-02-23', 1, 1),
('edgarkrejci12345@gmail.com', 'Edgar', 'Krejci', '$2y$12$TzPzeZ1eJwPQg5E8X9G2HeNLxWcGwBd4MaVrK.prKk9.dSnMbfxBO', 'Yes', '', 'yes', 1, 3, 'assets/img/user-13.jpg', 'NO', 0, '2018-02-23', 0, 1),
('gfg@hj.com', 'carañla', 'fdasf', '$2y$12$FKZLRj8Ll1oofwuJnj2oy.JogAZH8VowZo44BfOKiQNMnY1uTPcx2', 'Yes', '', '', 0, 0, 'assets/img/user-13.jpg', 'NO', 1, '2018-02-23', 1, 1),
('jar@as.com', 'Juan', 'Garzon', '$2y$12$ZjvQA6d/v21NMah7P55Vae4V8qBstA7Y3JeUFeNOrrbFHDHeBZRWe', 'Yes', '', '', 1, 2, 'assets/img/user-13.jpg', 'YES', 1, '2018-02-23', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente-ebook`
--

CREATE TABLE `cliente-ebook` (
  `primaryKey` int(11) NOT NULL,
  `foreanKeyUser` int(11) NOT NULL,
  `foreanKeyBook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e-books`
--

CREATE TABLE `e-books` (
  `primaryKey` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` text COLLATE utf8_unicode_ci NOT NULL,
  `num-vol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personascilente`
--

CREATE TABLE `personascilente` (
  `idRegistros` varchar(80) NOT NULL,
  `correoPersona` varchar(80) NOT NULL,
  `numeroRegistro` int(11) NOT NULL,
  `heredado` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personascilente`
--

INSERT INTO `personascilente` (`idRegistros`, `correoPersona`, `numeroRegistro`, `heredado`) VALUES
('edgarkrejci12345@gmail.com', 'as@goo.com', 3, 'No'),
('jar@as.com', 'catchy@ld.com', 2, 'No'),
('edgarkrejci12345@gmail.com', 'cla@gh.com', 2, 'No'),
('jar@as.com', 'gfg@hj.com', 1, 'No'),
('edgarkrejci12345@gmail.com', 'jar@as.com', 1, 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD PRIMARY KEY (`primaryKey`),
  ADD UNIQUE KEY `id_cliente_2` (`id_cliente`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `personascilente`
--
ALTER TABLE `personascilente`
  ADD PRIMARY KEY (`correoPersona`),
  ADD KEY `idRegistros` (`idRegistros`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `billetera`
--
ALTER TABLE `billetera`
  MODIFY `primaryKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD CONSTRAINT `billetera_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personascilente`
--
ALTER TABLE `personascilente`
  ADD CONSTRAINT `personascilente_ibfk_1` FOREIGN KEY (`idRegistros`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
