-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 03:19:19
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muni23`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(100) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(20) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `dni` char(8) NOT NULL,
  `cuil` char(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `contacto` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `categoria` int(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `sector` int(10) NOT NULL,
  `persona_estado` varchar(50) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `sexo`, `dni`, `cuil`, `direccion`, `contacto`, `correo`, `categoria`, `cargo`, `sector`, `persona_estado`, `estado`) VALUES
(1, 'Romina', 'Belén', 'Davila', '', 'Femenino', '33836224', '27338362248', 'B° Presidente Peon II Mz.:C C.:1 - Las Tapias - Angaco', '2646089217', 'rominabdavila@gmail.com', 8, 'Desarrolador', 1, 'Activo', 0),
(2, 'Victoria', 'Isabel', 'Davila', '', 'Femenino', '50946765', '27509467655', 'B° Presidente Perón II Mz.:C  C.:1 - Las Tapias - Angaco', '2646089207', '', 2, 'Estudiante', 3, 'Activo', 0),
(10, 'Cecilia', 'Verónica', 'Davila', '', 'Femenino', '28938940', '27289389402', 'Las Tapias', '2648984909', 'ceciliavdavila@gmail.com', 30, 'Desarrollador', 2, 'Activo', 1),
(11, 'José', '', 'Perez', '', 'Masculino', '33678987', '', 'Angaco', '2649878038', '', 20, 'Administrativo', 3, 'Activo', 1),
(12, 'Celeste', 'Rosa', 'Ruiz', 'Cabrera', 'femenino', '28345786', '27283457869', 'B° Bicentenario', '2652354876', 'rositabonita@gmail.com', 16, 'Administrativo', 2, 'activo', 1),
(13, 'Alejandro', 'Agustin', 'Altamira', '', 'masculino', '23645879', '2023458799', 'Campo de batalla', '2647898123', '', 16, 'administrativo', 0, 'femenino', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `id_img` int(11) NOT NULL,
  `hoja` int(200) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `anio` int(4) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`id_img`, `hoja`, `mes`, `anio`, `img`) VALUES
(20, 56, 'enero', 2000, 'fotosmuni/LOGO.jpg'),
(21, 90, 'Abril', 2022, 'fotosmuni/equipo.jpg'),
(25, 23, 'enero', 2016, 'fotosmuni/ip.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nombre`, `usuario`, `password`) VALUES
(1, 'Angelica', 'Angelica', '12345'),
(2, 'Romina', 'Romi', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
