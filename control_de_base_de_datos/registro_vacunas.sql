-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2020 a las 18:17:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_vacunas`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_menor_cui` (IN `cui_menor` BIGINT(20))  SELECT *FROM aplicacion_vacunas 
INNER JOIN datos_menor
ON aplicacion_vacunas.id_menor = datos_menor.id_datos_menor 
INNER JOIN vacunas 
ON aplicacion_vacunas.id_vacuna = vacunas.id_vacuna 
INNER JOIN estado 
ON aplicacion_vacunas.id_estado = estado.id_estado 
INNER JOIN dosis
ON aplicacion_vacunas.id_dosis_aplicada = dosis.id_dosis 
INNER JOIN centro_salud 
ON aplicacion_vacunas.id_centro_salud = centro_salud.id_centro_salud
WHERE datos_menor.cui_menor = cui_menor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_aplicacion_vacunas` (IN `valor` INT(14))  SELECT *FROM aplicacion_vacunas 
INNER JOIN datos_menor
ON aplicacion_vacunas.id_menor = datos_menor.id_datos_menor 
INNER JOIN vacunas 
ON aplicacion_vacunas.id_vacuna = vacunas.id_vacuna 
INNER JOIN estado 
ON aplicacion_vacunas.id_estado = estado.id_estado 
INNER JOIN dosis
ON aplicacion_vacunas.id_dosis_aplicada = dosis.id_dosis 
INNER JOIN centro_salud 
ON aplicacion_vacunas.id_centro_salud = centro_salud.id_centro_salud
WHERE aplicacion_vacunas.id_menor=valor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datos_menor` (IN `cui_menor` BIGINT(20))  NO SQL
SELECT *FROM datos_menor 
INNER JOIN persona 
ON datos_menor.id_datos_menor= persona.id_persona 
INNER JOIN tipo_persona 
on persona.id_tipo_persona= tipo_persona.id_tipo_persona
WHERE datos_menor.cui_menor = cui_menor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `llamar_aplicacion_vacunas` ()  SELECT *FROM aplicacion_vacunas
INNER JOIN datos_menor 
ON aplicacion_vacunas.id_menor = datos_menor.id_datos_menor 
INNER JOIN dosis 
ON aplicacion_vacunas.id_dosis_aplicada = dosis.id_dosis 
INNER JOIN vacunas 
ON aplicacion_vacunas.id_vacuna= vacunas.id_vacuna
INNER JOIN estado 
ON aplicacion_vacunas.id_estado= estado.id_estado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reportes` (IN `fecha_inicio` DATE, IN `fecha_final` DATE, IN `centro_id` INT(10))  SELECT *FROM aplicacion_vacunas 
INNER JOIN datos_menor
ON aplicacion_vacunas.id_menor = datos_menor.id_datos_menor 
INNER JOIN vacunas 
ON aplicacion_vacunas.id_vacuna = vacunas.id_vacuna 
INNER JOIN estado 
ON aplicacion_vacunas.id_estado = estado.id_estado 
INNER JOIN dosis
ON aplicacion_vacunas.id_dosis_aplicada = dosis.id_dosis 
INNER JOIN centro_salud 
ON aplicacion_vacunas.id_centro_salud = centro_salud.id_centro_salud
WHERE aplicacion_vacunas.fecha_aplicacion BETWEEN fecha_inicio AND fecha_final
AND centro_salud.id_centro_salud =centro_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `reporte_unificado` (IN `fecha_inicio` DATE, IN `fecha_final` DATE, IN `id_centro` INT(10))  NO SQL
SELECT *FROM unificado_vacunas 
INNER JOIN unificado 
ON unificado_vacunas.id_unificado_vacunas= unificado.id_unificado 
INNER JOIN vacunas 
ON unificado.id_vacunas= vacunas.id_vacuna 
INNER JOIN centro_salud 
ON unificado_vacunas.id_centro_salud= centro_salud.id_centro_salud  
WHERE unificado_vacunas.fecha_registro BETWEEN fecha_inicio AND fecha_final
AND centro_salud.id_centro_salud =id_centro$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicacion_vacunas`
--

CREATE TABLE `aplicacion_vacunas` (
  `id_aplicacion_vacunas` int(11) NOT NULL,
  `id_menor` int(11) NOT NULL,
  `id_vacuna` int(11) NOT NULL,
  `id_dosis_aplicada` int(11) NOT NULL,
  `id_centro_salud` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_aplicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;



--
-- Estructura de tabla para la tabla `categoria_vacuna`
--

CREATE TABLE `categoria_vacuna` (
  `id_categoria` int(11) NOT NULL,
  `categoria_vacuna` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categoria_vacuna`
--

INSERT INTO `categoria_vacuna` (`id_categoria`, `categoria_vacuna`) VALUES
(1, 'Al Nacer'),
(2, '2 Meses'),
(3, '4 Meses'),
(4, '6 Meses'),
(5, '12 Meses'),
(6, '18 Meses'),
(7, '4 Años'),
(8, '6 meses a 11 meses'),
(9, '12 meses a 23 meses'),
(10, '24 a 35 meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_salud`
--

CREATE TABLE `centro_salud` (
  `id_centro_salud` int(11) NOT NULL,
  `id_comunidad` int(11) NOT NULL,
  `servicio_salud` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `centro_salud`
--

INSERT INTO `centro_salud` (`id_centro_salud`, `id_comunidad`, `servicio_salud`) VALUES
(1, 1, 'CAP SAN PEDRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `id_comunidad` int(11) NOT NULL,
  `nombre_comunidad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`id_comunidad`, `nombre_comunidad`) VALUES
(1, 'Otra'),
(2, 'Llano Grande'),
(3, 'Sacuchum');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad_linguistica`
--

CREATE TABLE `comunidad_linguistica` (
  `id_comunidad_linguistica` int(11) NOT NULL,
  `nombre_comunidad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `comunidad_linguistica`
--

INSERT INTO `comunidad_linguistica` (`id_comunidad_linguistica`, `nombre_comunidad`) VALUES
(1, 'MAN'),
(2, 'K´iche´'),
(3, 'Sipakapense');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_menor`
--

CREATE TABLE `datos_menor` (
  `id_datos_menor` int(11) NOT NULL,
  `primer_nombre_menor` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_nombre_menor` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `primer_apellido_menor` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_apellido_menor` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cui_menor` bigint(15) NOT NULL,
  `fecha_nacimiento_menor` date NOT NULL,
  `sexo` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_pueblo` int(11) NOT NULL,
  `id_comunidad_linguistica` int(11) NOT NULL,
  `id_responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;


--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`) VALUES
(1, 'San Marcos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_comunidad` int(11) NOT NULL,
  `calle_zona` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion_alterna` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;



--
-- Estructura de tabla para la tabla `dosis`
--

CREATE TABLE `dosis` (
  `id_dosis` int(11) NOT NULL,
  `dosis_aplicacion` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `dosis`
--

INSERT INTO `dosis` (`id_dosis`, `dosis_aplicacion`) VALUES
(1, 'Primera'),
(2, 'Segunda'),
(3, 'Tercera'),
(4, 'R1'),
(5, 'R2'),
(6, 'SPR1'),
(7, 'SPR2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `tipo_estado` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `tipo_estado`) VALUES
(1, 'Aplicada'),
(2, 'No aplicada');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre_municipio` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre_municipio`) VALUES
(1, 'San Pedro'),
(2, 'Llano Grande'),
(3, 'Sacuchum'),
(4, 'San Jose Las Izlas');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `primer_nombre` varchar(15) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `segundo_nombre` varchar(15) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `primer_apellido` varchar(15) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `segundo_apellido` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono_responsable` int(9) NOT NULL,
  `fallecimiento_hijo` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_tipo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;


--
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `id_pueblo` int(11) NOT NULL,
  `nombre_pueblo` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pueblo`
--

INSERT INTO `pueblo` (`id_pueblo`, `nombre_pueblo`) VALUES
(1, 'Mam'),
(2, 'Xinca'),
(3, 'Garifuna'),
(4, 'qeqchi'),
(5, 'poqomam');



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id_tipo_persona` int(11) NOT NULL,
  `persona_tipo` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id_tipo_persona`, `persona_tipo`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unificado`
--

CREATE TABLE `unificado` (
  `id_vacunas` int(11) NOT NULL,
  `id_unificado` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



--
-- Estructura de tabla para la tabla `unificado_vacunas`
--

CREATE TABLE `unificado_vacunas` (
  `id_unificado_vacunas` int(11) NOT NULL,
  `id_centro_salud` int(11) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` mediumint(8) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'Ronald Fuentes', 'sonymusik.rf@gmail.com', '$2y$10$CheURi7bGz6X0GPT4Q/2le7fJ/G0vUXEEO3zEk.YIS27QkTNU.Rvm'),
(2, 'admin', 'Admin@admin.com', '$2y$10$9rDamBS.y8w4bkUCTCvL3.SQc6k.hUEh/h8IoKudk8YesWRGO9nVK');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id_vacuna` int(11) NOT NULL,
  `nombre_vacuna` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `identificador_vacuna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id_vacuna`, `nombre_vacuna`, `identificador_vacuna`) VALUES
(1, 'Hepatitis B1', 1),
(2, 'BCG', 1),
(3, 'Polio 1 (IPV)', 2),
(4, 'Penta 1', 2),
(5, 'Rotavirus 1', 2),
(6, 'Neumococo  1', 2),
(7, 'Polio 2 (OPV)', 3),
(8, 'Penta 2', 3),
(9, 'Rotavirus 2', 3),
(10, 'Neumococo 2', 3),
(11, 'Polio 3 (OPV)', 4),
(12, 'Penta 3', 4),
(13, 'SPR 1', 5),
(14, 'Neumococo', 5),
(15, 'Refuerzo', 5),
(16, 'SPR 2', 6),
(17, 'Polio R1', 6),
(18, 'DPT R1', 6),
(19, 'Polio R2 (OPV)', 7),
(20, 'DPT R2', 7),
(21, 'Influenza 1', 8),
(22, 'Influenza 2', 8),
(23, 'Influenza 1', 9),
(24, 'Influenza 2', 9),
(25, 'Influenza 1', 10),
(26, 'Influenza 2', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicacion_vacunas`
--
ALTER TABLE `aplicacion_vacunas`
  ADD PRIMARY KEY (`id_aplicacion_vacunas`),
  ADD KEY `id_menor` (`id_menor`),
  ADD KEY `id_dosis_aplicada` (`id_dosis_aplicada`),
  ADD KEY `id_vacuna` (`id_vacuna`),
  ADD KEY `id_centro_salud` (`id_centro_salud`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `categoria_vacuna`
--
ALTER TABLE `categoria_vacuna`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `centro_salud`
--
ALTER TABLE `centro_salud`
  ADD PRIMARY KEY (`id_centro_salud`),
  ADD KEY `id_direccion` (`id_comunidad`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`id_comunidad`);

--
-- Indices de la tabla `comunidad_linguistica`
--
ALTER TABLE `comunidad_linguistica`
  ADD PRIMARY KEY (`id_comunidad_linguistica`);

--
-- Indices de la tabla `datos_menor`
--
ALTER TABLE `datos_menor`
  ADD PRIMARY KEY (`id_datos_menor`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_comunidad_linguistica` (`id_comunidad_linguistica`),
  ADD KEY `id_comunidad_linguistica_2` (`id_comunidad_linguistica`),
  ADD KEY `id_pueblo` (`id_pueblo`),
  ADD KEY `id_responsable_2` (`id_responsable`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_municipio` (`id_municipio`),
  ADD KEY `id_comunidad` (`id_comunidad`);

--
-- Indices de la tabla `dosis`
--
ALTER TABLE `dosis`
  ADD PRIMARY KEY (`id_dosis`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_tipo_persona` (`id_tipo_persona`),
  ADD KEY `id_direccion` (`id_direccion`);

--
-- Indices de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD PRIMARY KEY (`id_pueblo`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id_tipo_persona`);

--
-- Indices de la tabla `unificado`
--
ALTER TABLE `unificado`
  ADD KEY `id_vacunas` (`id_vacunas`),
  ADD KEY `id_unificado` (`id_unificado`);

--
-- Indices de la tabla `unificado_vacunas`
--
ALTER TABLE `unificado_vacunas`
  ADD PRIMARY KEY (`id_unificado_vacunas`),
  ADD KEY `id_vacuna` (`id_centro_salud`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id_vacuna`),
  ADD KEY `identificador_vacuna` (`identificador_vacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aplicacion_vacunas`
--
ALTER TABLE `aplicacion_vacunas`
  MODIFY `id_aplicacion_vacunas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria_vacuna`
--
ALTER TABLE `categoria_vacuna`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `centro_salud`
--
ALTER TABLE `centro_salud`
  MODIFY `id_centro_salud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `id_comunidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comunidad_linguistica`
--
ALTER TABLE `comunidad_linguistica`
  MODIFY `id_comunidad_linguistica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_menor`
--
ALTER TABLE `datos_menor`
  MODIFY `id_datos_menor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dosis`
--
ALTER TABLE `dosis`
  MODIFY `id_dosis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `id_pueblo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id_tipo_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unificado_vacunas`
--
ALTER TABLE `unificado_vacunas`
  MODIFY `id_unificado_vacunas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` mediumint(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id_vacuna` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aplicacion_vacunas`
--
ALTER TABLE `aplicacion_vacunas`
  ADD CONSTRAINT `aplicacion_vacunas_ibfk_2` FOREIGN KEY (`id_vacuna`) REFERENCES `vacunas` (`id_vacuna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aplicacion_vacunas_ibfk_3` FOREIGN KEY (`id_dosis_aplicada`) REFERENCES `dosis` (`id_dosis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aplicacion_vacunas_ibfk_4` FOREIGN KEY (`id_centro_salud`) REFERENCES `centro_salud` (`id_centro_salud`),
  ADD CONSTRAINT `aplicacion_vacunas_ibfk_5` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `aplicacion_vacunas_ibfk_6` FOREIGN KEY (`id_menor`) REFERENCES `datos_menor` (`id_datos_menor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `centro_salud`
--
ALTER TABLE `centro_salud`
  ADD CONSTRAINT `centro_salud_ibfk_2` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`id_comunidad`);

--
-- Filtros para la tabla `datos_menor`
--
ALTER TABLE `datos_menor`
  ADD CONSTRAINT `datos_menor_ibfk_1` FOREIGN KEY (`id_pueblo`) REFERENCES `pueblo` (`id_pueblo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_menor_ibfk_2` FOREIGN KEY (`id_comunidad_linguistica`) REFERENCES `comunidad_linguistica` (`id_comunidad_linguistica`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_menor_ibfk_3` FOREIGN KEY (`id_responsable`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`id_comunidad`) REFERENCES `comunidad` (`id_comunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `direccion_ibfk_2` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `direccion_ibfk_3` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_tipo_persona`) REFERENCES `tipo_persona` (`id_tipo_persona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unificado`
--
ALTER TABLE `unificado`
  ADD CONSTRAINT `unificado_ibfk_1` FOREIGN KEY (`id_vacunas`) REFERENCES `vacunas` (`id_vacuna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unificado_ibfk_2` FOREIGN KEY (`id_unificado`) REFERENCES `unificado_vacunas` (`id_unificado_vacunas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unificado_vacunas`
--
ALTER TABLE `unificado_vacunas`
  ADD CONSTRAINT `unificado_vacunas_ibfk_1` FOREIGN KEY (`id_centro_salud`) REFERENCES `centro_salud` (`id_centro_salud`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD CONSTRAINT `vacunas_ibfk_1` FOREIGN KEY (`identificador_vacuna`) REFERENCES `categoria_vacuna` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
