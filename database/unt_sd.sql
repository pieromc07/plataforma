-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 23:29:32
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unt_sd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idadministrador` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `cel` int(11) DEFAULT NULL,
  `cargo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idadministrador`, `idusuario`, `apellido`, `nombre`, `cel`, `cargo`) VALUES
(1, 2, 'guido Reyes', 'stacy', 986325412, 'secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idalumno` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `matricula` int(8) DEFAULT NULL,
  `cel` int(11) DEFAULT NULL,
  `facultad` varchar(30) DEFAULT NULL,
  `escuela` varchar(30) DEFAULT NULL,
  `año_ingreso` int(11) DEFAULT NULL,
  `ciclo` varchar(30) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idalumno`, `idusuario`, `apellido`, `nombre`, `edad`, `matricula`, `cel`, `facultad`, `escuela`, `año_ingreso`, `ciclo`, `estado`) VALUES
(1, 1, 'HARO POLO', 'CARLOS ISAAC', 18, 70834455, 939998491, 'INGENIERIA', 'ING. DE SISTEMA', 2017, 'V', 1),
(2, 4, 'BURGOS ROJAS', 'MARCO ANTONIO', 18, 70834455, 939998491, 'INGENIERIA', 'ING. DE SISTEMA', 2017, 'V', 1),
(3, 5, 'GUIDO HARO', 'LUCAS', 20, 70834455, 105330051, 'INGENIERIA', 'ING. DE SISTEMA', 2016, 'VII', 1),
(4, 6, 'AMAYA JAVE', 'LUIUGI', 19, 70834455, 968798491, 'INGENIERIA', 'ING. DE SISTEMA', 2013, 'II', 1),
(5, 7, 'REYES RIVERA', 'ANDERSON', 18, 70834455, 939893071, 'INGENIERIA', 'ING. DE SISTEMA', 2019, 'III', 1),
(6, 8, 'CASTAÑEDA VARGAS', 'ROBERTO', 21, 70834455, 2147483647, 'INGENIERIA', 'ING. DE SISTEMA', 2013, 'I', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `iddirector` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`iddirector`, `nombre`, `idusuario`) VALUES
(1, 'Boy Chavil,Luis', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `idtramite` int(11) NOT NULL,
  `idalumno` int(11) DEFAULT NULL,
  `idadministrador` int(11) DEFAULT NULL,
  `asunto` varchar(80) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `comentario` varchar(300) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `observacion1` varchar(100) DEFAULT NULL,
  `observacion2` varchar(100) DEFAULT NULL,
  `link2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`idtramite`, `idalumno`, `idadministrador`, `asunto`, `estado`, `fecha`, `comentario`, `link`, `observacion1`, `observacion2`, `link2`) VALUES
(1, 2, 1, 'AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE GRADO ACADÉMICO DE   BACHILLER', 3, '2021-09-02', 'todo esta en el driver', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', 'todo esta bien', 'todo los datos son correcto', NULL),
(2, 3, 1, 'AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE GRADO ACADÉMICO DE   BACHILLER', 3, '2021-09-02', 'el baucher esta en el driver', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', 'esta correcto', 'entragar la informacion cuando termine  su siclo', NULL),
(3, 4, 1, 'AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE GRADO ACADÉMICO DE   BACHILLER', 2, '2021-09-03', 'soy un alumno  de traslado ,pero todo esta en el baucher', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', 'todo esta  bien', NULL, NULL),
(4, 5, 1, 'AUTENTICACIÓN DE COPIA DIGITAL DE DIPLOMA DE TÍTULO PROFESIONAL', 2, '2021-09-04', 'toda la informacion esta en el baucher', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', 'todo esta bein .perorecomiendo verificar si pertenece a la unt', NULL, NULL),
(5, 6, NULL, 'EMISIÓN DE DUPLICADO DE CARNÉ UNIVERSITARIO DE PREGRADO', 1, '2021-09-01', 'todo esta en el baucher', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', NULL, NULL, NULL),
(6, 2, NULL, 'EMISIÓN DE DUPLICADO DE CARNÉ UNIVERSITARIO DE PREGRADO', 1, '2021-09-01', 'todo mis datos estan en el driver', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', NULL, NULL, NULL),
(7, 3, 1, 'AUTENTICACIÓN DE COPIA DIGITAL DE CONSTANCIAS ACADÉMICAS', 2, '2021-09-06', 'todo esta bien', 'https://docs.google.com/spreadsheets/d/1U77k21tUtS7uJV2mSQm_0nN0DQg8DsSjN9yHuRTdAnA/edit#gid=0', 'todo ok', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contraseña` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `contraseña`) VALUES
(1, 'adming', '12345'),
(2, 'adming2', '12345'),
(3, 'adming3', '12345'),
(4, 'adming4', '12345'),
(5, 'adming5', '12345'),
(6, 'adming6', '12345'),
(7, 'adming7', '12345'),
(8, 'adming8', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idadministrador`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`iddirector`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`idtramite`),
  ADD KEY `idalumno` (`idalumno`),
  ADD KEY `idadministrador` (`idadministrador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `iddirector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `idtramite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD CONSTRAINT `tramites_ibfk_1` FOREIGN KEY (`idalumno`) REFERENCES `alumnos` (`idalumno`),
  ADD CONSTRAINT `tramites_ibfk_2` FOREIGN KEY (`idadministrador`) REFERENCES `administradores` (`idadministrador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
