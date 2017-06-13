-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2017 a las 17:36:13
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'accion'),
(2, 'aventura'),
(3, 'carreras'),
(4, 'deportes'),
(5, 'estrategia'),
(6, 'simulacion'),
(7, 'terror'),
(8, 'clasicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `mensaje` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `id_juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `mensaje`, `nombre`, `fecha`, `id_juego`) VALUES
(6, 'asdasd', 'jorge', '2017-05-20', 1),
(7, 'dshkdsjh', 'jorge', '2017-05-20', 1),
(8, 'hola sdbas', 'jorge', '2017-05-20', 2),
(9, 'ads', 'jorge', '2017-05-20', 2),
(11, 'sadsa', 'jorge', '2017-05-20', 1),
(12, 'soy andrei', 'jorge', '2017-05-20', 2),
(13, 'sad', 'jorge', '2017-05-20', 2),
(14, 'hola soy el mas ', 'jorge', '2017-05-20', 2),
(15, 'as', '', '2017-05-24', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `nombre_j` varchar(40) NOT NULL,
  `id_juego` int(11) NOT NULL,
  `nombre_com` varchar(40) NOT NULL,
  `correo_comp` varchar(40) NOT NULL,
  `pais_comp` varchar(40) NOT NULL,
  `num_targeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `portada` varchar(200) NOT NULL,
  `contenido` varchar(1500) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `calificacion` varchar(40) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `nombre`, `portada`, `contenido`, `fecha`, `imagen`, `video`, `calificacion`, `id_categoria`, `precio`) VALUES
(1, 'Battlefield 3', 'Portada/Battlefield-3-Cover-nosologeeks.jpg', ' es un videojuego de disparos en primera persona o FPS desarrollado por la compaÃ±Ã­a EA Digital Illusions CE (DICE) y distribuido por Electronic Arts que es el sucesor directo del juego Battlefield 2. EstÃ¡ disponible para Windows, Mac, Xbox 360, y PlayStation 3 desde el 25 de octubre del 2011 para Estados Unidos y para Reino Unido el 28 de octubre. El modo BETA fue estrenado el 29 de septiembre del 2011.', '2011-09-25', 'ImagenJuego/descarga (2).jpg', 'https://www.youtube.com/embed/O7vJMYMX7AM?ecver=1', 'Bueno', 1, 1231),
(2, 'Left 4 Dead', 'Portada/descarga.jpg', ' es un videojuego de acciÃ³n en primera persona de tipo FPS. Fue desarrollado por Turtle Rock Studios, compaÃ±Ã­a comprada por Valve Software durante su desarrollo. El juego usa el motor grÃ¡fico Valve Source y estÃ¡ disponible para Microsoft Windows, Mac OS X, Linux y para la videoconsola Xbox 360. El desarrollo del juego fue completado el 13 de noviembre de 2008 y se lanzaron dos versiones del videojuego: una versiÃ³n digital descargable, lanzada el 17 de noviembre de 2008; y una versiÃ³n incluida en un disco, disponible el 18 de noviembre en Estados Unidos y LatinoamÃ©rica y el 21 del mismo mes en Europa y JapÃ³n.', '2009-01-01', 'ImagenJuego/descarga (3).jpg', 'https://www.youtube.com/embed/HfaGBwedwso?ecver=1', 'Regular', 1, 1213),
(3, 'Uncharted 4', 'Portada/Uncharted_4.jpg', 'wdadsa', '2017-06-02', 'ImagenJuego/descarga (4).jpg', 'https://www.youtube.com/embed/ku02FEjm7jI?ecver=1', 'Bueno', 2, 2132);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `informacion` varchar(1500) NOT NULL,
  `fecha` date NOT NULL,
  `redactor` varchar(40) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `imagen`, `informacion`, `fecha`, `redactor`, `video`) VALUES
(1, 'sdads', 'ImagenNoticia/descarga (2).jpg', 'sdwasasd     ', '2017-05-24', 'andrei', 'https://www.youtube.com/embed/L6Fv69YD4kE?ecver=1'),
(3, 'andrei', 'ImagenNoticia/descarga (3).jpg', 'sandlskdjlskajdlksjsdalÃ±djslkjds', '2017-05-24', 'andrei', 'https://www.youtube.com/embed/L6Fv69YD4kE?ecver=1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre`) VALUES
(1, 'Afganistan'),
(2, 'Albania'),
(3, 'Alemania'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua y Barbuda'),
(7, 'Arabia Saudita'),
(8, 'Argelia'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'Australia'),
(12, 'Austria'),
(13, 'Azerbaiyan'),
(14, 'Bahamas'),
(15, 'Banglades'),
(16, 'Barbados'),
(17, 'Barein'),
(18, 'Belgica'),
(19, 'Belice'),
(20, 'Benin'),
(21, 'Bielorrusia'),
(22, 'Birmania'),
(23, 'Bolivia'),
(24, 'Bosnia y Herzegovina'),
(25, 'Botsuana'),
(26, 'Brasil'),
(27, 'Brunei'),
(28, 'Bulgaria'),
(29, 'Burkina Faso'),
(30, 'Burundi'),
(31, 'Butan'),
(32, 'Cabo Verde'),
(33, 'Camboya'),
(34, 'Camerun'),
(35, 'Canada'),
(36, 'Catar'),
(37, 'Chad'),
(38, 'Chile'),
(39, 'China'),
(40, 'Chipre'),
(41, 'Ciudad del Vaticano'),
(42, 'Colombia'),
(43, 'Comoras'),
(44, 'Corea del Norte'),
(45, 'Corea del Sur'),
(46, 'Costa de Marfil'),
(47, 'Costa Rica'),
(48, 'Croacia'),
(49, 'Cuba'),
(50, 'Dinamarca'),
(51, 'Dominica'),
(52, 'Ecuador'),
(53, 'Egipto'),
(54, 'El Salvador'),
(55, 'Emiratos Arabes Unidos'),
(56, 'Eritrea'),
(57, 'Eslovaquia'),
(58, 'Eslovenia'),
(59, 'Espana'),
(60, 'Estados Unidos'),
(61, 'Estonia'),
(62, 'Etiopia'),
(63, 'Filipinas'),
(64, 'Finlandia'),
(65, 'Fiyi'),
(66, 'Francia'),
(67, 'Gabon'),
(68, 'Gambia'),
(69, 'Georgia'),
(70, 'Ghana'),
(71, 'Granada'),
(72, 'Grecia'),
(73, 'Guatemala'),
(74, 'Guyana'),
(75, 'Guinea'),
(76, 'Guinea ecuatorial'),
(77, 'Guinea-Bisau'),
(78, 'Haiti'),
(79, 'Honduras'),
(80, 'Hungria'),
(81, 'India'),
(82, 'Indonesia'),
(83, 'Irak'),
(84, 'Iran'),
(85, 'Irlanda'),
(86, 'Islandia'),
(87, 'Islas Marshall'),
(88, 'Islas Salomon'),
(89, 'Israel'),
(90, 'Italia'),
(91, 'Jamaica'),
(92, 'Japon'),
(93, 'Jordania'),
(94, 'Kazajist?ín'),
(95, 'Kenia'),
(96, 'Kirguistan'),
(97, 'Kiribati'),
(98, 'Kuwait'),
(99, 'Laos'),
(100, 'Lesoto'),
(101, 'Letonia'),
(102, 'Libano'),
(103, 'Liberia'),
(104, 'Libia'),
(105, 'Liechtenstein'),
(106, 'Lituania'),
(107, 'Luxemburgo'),
(108, 'Madagascar'),
(109, 'Malasia'),
(110, 'Malaui'),
(111, 'Maldivas'),
(112, 'Mali'),
(113, 'Malta'),
(114, 'Marruecos'),
(115, 'Mauricio'),
(116, 'Mauritania'),
(117, 'Mexico'),
(118, 'Micronesia'),
(119, 'Moldavia'),
(120, 'Monaco'),
(121, 'Mongolia'),
(122, 'Montenegro'),
(123, 'Mozambique'),
(124, 'Namibia'),
(125, 'Nauru'),
(126, 'Nepal'),
(127, 'Nicaragua'),
(128, 'Niger'),
(129, 'Nigeria'),
(130, 'Noruega'),
(131, 'Nueva Zelanda'),
(132, 'Oman'),
(133, 'Paises Bajos'),
(134, 'Pakistan'),
(135, 'Palaos'),
(136, 'Panama'),
(137, 'Papua Nueva Guinea'),
(138, 'Paraguay'),
(139, 'Peru'),
(140, 'Polonia'),
(141, 'Portugal'),
(142, 'Reino Unido'),
(143, 'Republica Centroafricana'),
(144, 'Republica Checa'),
(145, 'Republica de Macedonia'),
(146, 'Republica del Congo'),
(147, 'Republica Democr?ítica del Congo'),
(148, 'Republica Dominicana'),
(149, 'Republica Sudafricana'),
(150, 'Ruanda'),
(151, 'Rumania'),
(152, 'Rusia'),
(153, 'Samoa'),
(154, 'San Cristobal y Nieves'),
(155, 'San Marino'),
(156, 'San Vicente y las Granadinas'),
(157, 'Santa Lucia'),
(158, 'Santo Tome y Pr?¡ncipe'),
(159, 'Senegal'),
(160, 'Serbia'),
(161, 'Seychelles'),
(162, 'Sierra Leona'),
(163, 'Singapur'),
(164, 'Siria'),
(165, 'Somalia'),
(166, 'Sri Lanka'),
(167, 'Suazilandia'),
(168, 'Sudan'),
(169, 'Sudan del Sur'),
(170, 'Suecia'),
(171, 'Suiza'),
(172, 'Surinam'),
(173, 'Tailandia'),
(174, 'Tanzania'),
(175, 'Tayikistan'),
(176, 'Timor Oriental'),
(177, 'Togo'),
(178, 'Tonga'),
(179, 'Trinidad y Tobago'),
(180, 'Tunez'),
(181, 'Turkmenistan'),
(182, 'Turquia'),
(183, 'Tuvalu'),
(184, 'Ucrania'),
(185, 'Uganda'),
(186, 'Uruguay'),
(187, 'Uzbekist?ín'),
(188, 'Vanuatu'),
(189, 'Venezuela'),
(190, 'Vietnam'),
(191, 'Yemen'),
(192, 'Yibuti'),
(193, 'Zambia'),
(194, 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `asunto` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `mensaje` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `nombre`, `asunto`, `correo`, `mensaje`) VALUES
(1, 'andrei', 'pregunta', 'andreibayona@hotmail.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `pais` varchar(40) NOT NULL,
  `id_tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `password`, `Correo`, `pais`, `id_tipo`) VALUES
(1, 'andrei', '202cb962ac59075b964b07152d234b70', 'a@a.a', 'colombia', '1'),
(2, 'jorge', '202cb962ac59075b964b07152d234b70', 'b@b.b', 'Belgica', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_pregunta`
--

CREATE TABLE `usuario_pregunta` (
  `id_uspre` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `idJuego` (`id_juego`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_pregunta`
--
ALTER TABLE `usuario_pregunta`
  ADD PRIMARY KEY (`id_uspre`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_comentario` (`id_comentario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario_pregunta`
--
ALTER TABLE `usuario_pregunta`
  MODIFY `id_uspre` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_pregunta`
--
ALTER TABLE `usuario_pregunta`
  ADD CONSTRAINT `usuario_pregunta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_pregunta_ibfk_2` FOREIGN KEY (`id_comentario`) REFERENCES `comentarios` (`id_comentario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
