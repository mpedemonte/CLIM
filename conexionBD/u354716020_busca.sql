-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-11-2017 a las 22:37:23
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u354716020_busca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `id_foro` int(11) NOT NULL,
  `titulo` varchar(40) DEFAULT NULL,
  `mensaje` text,
  `fecha` date DEFAULT NULL,
  `respuestas` int(11) DEFAULT '0',
  `identificador` int(11) DEFAULT '0',
  `ult_respuesta` date DEFAULT NULL,
  `id_usuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id_foro`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`, `id_usuarios`) VALUES
(18, 'Titulo foro', 'mensaje del foro', '2017-11-21', 2, 0, '2017-11-21', 4),
(24, '', 'asdasd', '2017-11-27', 0, 18, '2017-11-27', 5),
(25, '', 'cfvghbjnmk', '2017-11-27', 0, 18, '2017-11-27', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacion`
--

CREATE TABLE `puntuacion` (
  `id_usuarios` int(11) DEFAULT NULL,
  `id_veterinaria` int(11) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntuacion`
--

INSERT INTO `puntuacion` (`id_usuarios`, `id_veterinaria`, `puntuacion`) VALUES
(4, 1, 6),
(4, 3, 5),
(4, 5, 7),
(4, 6, 3),
(4, 7, 6),
(4, 8, 1),
(4, 9, 4),
(4, 10, 6),
(4, 11, 3),
(4, 12, 6),
(4, 13, 3),
(4, 14, 7),
(4, 15, 6),
(4, 16, 3),
(4, 17, 5),
(4, 18, 4),
(4, 19, 6),
(4, 20, 3),
(4, 21, 5),
(4, 22, 3),
(4, 23, 6),
(4, 24, 3),
(4, 25, 5),
(4, 26, 4),
(4, 27, 5),
(4, 28, 5),
(4, 29, 3),
(4, 30, 3),
(4, 31, 2),
(4, 32, 6),
(4, 33, 7),
(4, 1, 3),
(4, 3, 2),
(4, 31, 7),
(17, 7, 2),
(17, 15, 7),
(23, 3, 7),
(23, 15, 7),
(23, 15, 6),
(23, 32, 5),
(23, 1, 4),
(4, 1, 4),
(17, 1, 7),
(5, 2, 4),
(5, 4, 4),
(5, 1, 2),
(5, 8, 6),
(4, 1, 5),
(4, 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_veterinaria` int(11) DEFAULT NULL,
  `servicio` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_veterinaria`, `servicio`) VALUES
(3, 'Consultas'),
(3, 'Cirugias'),
(3, 'Hospitalizacíon'),
(3, 'Peluquería'),
(3, 'Hotel'),
(3, 'Destartraje'),
(3, 'Microchip'),
(3, 'Farmacia'),
(3, 'Alimento para Mascotas'),
(3, 'Laboratorio'),
(3, 'Radiografias'),
(3, 'Ecografias'),
(3, 'Ecocardiografía y Electrocardiografía'),
(3, 'Endoscopías'),
(3, 'Tratamientos oncológicos'),
(5, 'Consulta'),
(5, 'Vacunacíon'),
(5, 'Ecografía'),
(5, 'Cuidados Intensivos'),
(5, 'Diagnóstico de urgencia'),
(5, 'Peluquería'),
(5, 'Rayos X'),
(15, 'Ecografia especializada y ecocardiografía'),
(15, 'Exámenes de sangre'),
(15, 'Consulta'),
(15, 'Cirugías de tejidos blandos'),
(15, 'Limpieza dental con Ultrasonido'),
(15, 'Hospital Canino y Felino'),
(15, 'Peluquería y Baños Sanitarios'),
(3, 'Hotel'),
(2, 'Consulta Animales Exoticos'),
(2, 'Medicina Preventiva'),
(2, 'Medicina Terapeutica'),
(2, 'Hotel'),
(2, 'Farmacia'),
(2, 'Hospitalizaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `clave`, `correo`) VALUES
(4, 'Marco', '1234qwer', 'mpedemonte2017@alu.uct.cl'),
(5, 'admin', 'adminbuscavet', 'buscavete@gmail.com'),
(17, 'Ringler', '123', 'i.ringler96@gmail.com'),
(21, 'Camilo', '123456789', 'camiloteransoto@gmail.com'),
(23, 'CojoRm', 'chupapi123', 'correopapurasweas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinarias`
--

CREATE TABLE `veterinarias` (
  `id_veterinaria` int(11) NOT NULL,
  `veterinaria` varchar(50) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `veterinarias`
--

INSERT INTO `veterinarias` (`id_veterinaria`, `veterinaria`, `contacto`, `direccion`, `lat`, `lng`) VALUES
(1, 'Clínica Veterinaria Altamira', 2731003, 'Av. Altamira #02467, Temuco', -38.7519841, -72.6437955),
(2, 'Clínica Veterinaria Arca de Noé', 2244535, 'Av. Bernardo O’higgins #01158, Temuco', -38.738778, -72.618795),
(3, 'Clínica Veterinaria Edén', 2315500, 'Bernardo O\'Higgins #297, Temuco', -38.7410292, -72.6070823),
(4, 'Clínica Veterinaria El Carmen', 2521800, 'Av. Los Creadores #0115, Temuco', -38.716685, -72.652024),
(5, 'Clínica Veterinaria Kennel', 2313000, 'Av. San Martín #1580, Temuco', -38.735934, -72.624034),
(6, 'Clínica Veterinaria Los Castaños', 2256801, 'Av. Rudecindo Ortega #02550, Temuco', -38.705458, -72.554452),
(7, 'Clínica Veterinaria Recabarren - Barros Arana', 2222900, 'Av. Barros Arana #01286, Temuco', -38.7275666, -72.5665644),
(8, 'Clínica Veterinaria Recabarren - Pedro de Valdivia', 2402020, 'Av. Pedro de Valdivia #02075, Temuco', -38.717159, -72.625817),
(9, 'Clínica Veterinaria Recabarren - Recabarren', 2989877, 'Av. Recabarren #01571, Temuco', -38.754426, -72.629598),
(10, 'Clínica Veterinaria Temuco', 2405056, 'Av. Pablo Neruda #01471, Temuco', -38.7395677, -72.6239247),
(11, 'El Portal de las Mascotas', 2735270, 'Prieto Norte #215, Temuco', -38.733868, -72.600126),
(12, 'Hospital Veterinario - UCT', 2553978, 'Av. Rudecindo Ortega #02950, Temuco', -38.702659, -72.550263),
(13, 'Hospital Veterinario - UST', 2942274, 'Av. Arrayan #405, Temuco', -38.735672, -72.603278),
(14, 'Instituto Quirúrgico Veterinario', 2401207, 'Av. Barros Arana #03805, Temuco', -38.708422, -72.550253),
(15, 'Clínica Veterinaria Alma', 2528292, 'Manuel Rodríguez #480, Temuco', -38.735747, -72.5943726),
(16, 'Veterinaria Rodríguez', 977027725, 'Av. Rodríguez #404, Temuco', -38.73559, -72.595),
(17, 'Clínica Veterinaria Vidapet', 2240814, 'Olimpia #1940, Temuco', -38.746791, -72.626073),
(18, 'Pet Boutique Alemania', 2734477, 'Av. España #460, loc. 102, Temuco', -38.734013, -72.612361),
(19, 'Veterinaria Andes', 2316454, 'Av. Andes #705, Temuco', -38.733987, -72.622309),
(20, 'Veterinaria Animalia', 2516048, 'Av. Lagos #565, Temuco', -38.738638, -72.593201),
(21, 'Veterinaria Citydog', 2340609, 'Los Nardos #01381, Temuco', -38.752733, -72.617784),
(22, 'Veterinaria Lemantú', 2749174, 'Tomás Alba Edison #2221, Temuco', -38.756979, -72.642134),
(23, 'Veterinaria Malen', 2739919, 'Rio Baker #711, Temuco', -38.716139, -72.551103),
(24, 'Veterinaria Mascotas', 2234442, 'Av. Alemania #01655, Temuco', -38.730709, -72.622586),
(25, 'Veterinaria Municipal', 2973451, 'Imperial #40, Temuco', -38.744692, -72.601977),
(26, 'Veterinaria Ñielol', 2214230, 'Zenteno #392, Temuco', -38.730005, -72.581363),
(27, 'Veterinaria Peumayen', 2313201, 'Quillay #3480, Temuco', -38.712258, -72.55365),
(28, 'Veterinaria San Francisco de Asís', 2404525, 'Av. Pedro de Valdivia 0853, Temuco', -38.727835, -72.611122),
(29, 'Veterinaria San Sebastián', 2264408, 'Av. Las Encinas #01810, Temuco', -38.745902, -72.632024),
(30, 'Veterinaria Sevilla', 2244626, 'Av. Pablo Neruda #01994, Temuco', -38.738231, -72.630809),
(31, 'Vetpharma', 2239728, 'Manuel Bulnes #279, loc 19, Temuco', -38.736235, -72.587195),
(32, 'Clínica Veterinaria Exonupets', 2223832, 'Av. Caupolicán #1471, Temuco', -38.727259, -72.577776),
(33, 'Veterinaria Dr. Pablo Iglesias', 2546954, 'Inés de Suarez #1165, Temuco', -38.737089, -72.633629);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id_foro`),
  ADD KEY `fk_foro_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD KEY `fk_puntuacion_usuarios` (`id_usuarios`),
  ADD KEY `fk_puntuacion_veterinarias` (`id_veterinaria`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD KEY `fk_servicios_veterinarias` (`id_veterinaria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indices de la tabla `veterinarias`
--
ALTER TABLE `veterinarias`
  ADD PRIMARY KEY (`id_veterinaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id_foro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `veterinarias`
--
ALTER TABLE `veterinarias`
  MODIFY `id_veterinaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `fk_foro_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD CONSTRAINT `fk_puntuacion_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `fk_puntuacion_veterinarias` FOREIGN KEY (`id_veterinaria`) REFERENCES `veterinarias` (`id_veterinaria`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_servicios_veterinarias` FOREIGN KEY (`id_veterinaria`) REFERENCES `veterinarias` (`id_veterinaria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
