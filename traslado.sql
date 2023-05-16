-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2023 a las 00:39:45
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
-- Base de datos: `traslado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambulancia`
--

CREATE TABLE `ambulancia` (
  `idAmbulancia` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ambulancia`
--

INSERT INTO `ambulancia` (`idAmbulancia`, `descripcion`) VALUES
(1, 'AT-20'),
(2, 'AT-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar`
--

CREATE TABLE `auxiliar` (
  `idAuxiliar` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auxiliar`
--

INSERT INTO `auxiliar` (`idAuxiliar`, `nombre`) VALUES
(1, 'ALBERTO CASTRO'),
(2, 'LUIS TRONCOSO'),
(3, 'JORGE ARAYA'),
(4, 'MARCELO CONTRERAS'),
(5, 'EDUARDO ESCARATE'),
(6, 'MARLENE VIDAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `idConductor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idConductor`, `nombre`) VALUES
(1, 'DIEGO SANHUEZA'),
(2, 'ALFONSO ROJAS'),
(3, 'SERGIO CHAVEZ'),
(4, 'LUIS GUAJARDO'),
(5, 'MARCELO LIMARI'),
(6, 'HUGO APABLAZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `descripcion`) VALUES
(1, 'SOLICITADO'),
(2, 'ASIGNADO'),
(3, 'EN PROCESO'),
(4, 'EJECUTADO'),
(5, 'SUSPENDIDO'),
(6, 'SE FUE POR SUS MEDIOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `runPaciente` int(8) NOT NULL,
  `digitoVerificador` varchar(1) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidoPaterno` varchar(30) NOT NULL,
  `apellidoMaterno` varchar(30) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `diagnostico` varchar(50) NOT NULL,
  `prevision` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`runPaciente`, `digitoVerificador`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `fechaNacimiento`, `edad`, `direccion`, `telefono`, `diagnostico`, `prevision`) VALUES
(124578, '1', 'JAIME', 'LILLO', 'PAPER', '1969-02-11', 0, 'SIMON BOLIVAR 454 VIÑA', '12345678', '', 'ACV'),
(7777777, '7', 'SIETE', 'VERDADERO', 'LLUVIA', '1994-03-22', 38, 'SIETE HERMANAS 323 DEPTO 5 FORESTAL', '986765745', 'ACV', 'ISAPRE'),
(12321321, '2', 'JUAN', 'SAAVEDRA', 'MOYA', '0000-00-00', 45, 'ALVAREZ1432 VIÑA DEL MAR', '+56 9 65432323', 'undefined', ''),
(12345678, '9', 'LUIS', 'CASTILLO', 'PRAGA', '1983-03-03', 40, 'VIANA 232 VIÑA', '94652365', 'FX CADERA DERECHA', 'FONASA'),
(13991983, '1', 'Emilio', 'Cubillos', 'Castro', '0000-00-00', 43, 'roizbalt31', '+56 9 46806016', 'FONASA B', ''),
(13991984, '1', 'Emilio', 'Cubillos', 'Castro', '2023-05-15', 43, 'fghf', 'DGDSFGDSFG', 'FGSDFDSFG', 'DFGDSFG'),
(13991985, '1', 'Emilio', 'Cubillos', 'Castro', '2023-05-15', 43, 'fghf', 'DGDSFGDSFG', 'FGSDFDSFG', 'DFGDSFG'),
(13991986, '1', 'Emilio', 'Cubillos', 'Castro', '2023-05-15', 43, 'fghf', 'DGDSFGDSFG', 'FGSDFDSFG', 'DFGDSFG'),
(14642523, '9', 'KARINA', 'MONTERO', 'SANCHEZ', '1979-12-08', 43, 'FRANCIA 1234', '3216547', 'CEFALEA', 'FONASA'),
(14642525, '9', 'HUGO', 'MONTERO', 'SANCHEZ', '1979-12-08', 43, 'FRANCIA 1234', '3216547', 'CEFALEA', 'FONASA'),
(14642526, '9', 'HUGO', 'MONTERO', 'SANCHEZ', '1979-12-08', 43, 'FRANCIA 1234', '3216547', 'CEFALEA', 'FONASA'),
(14991983, '', '', '', '', '0000-00-00', 0, '', '', '', ''),
(21222333, '4', 'TERESA', 'GUTIERREZ', 'CHANDIA', '1977-04-04', 65, 'VIENA 50', '9465123', 'FX CADERA', 'FONASA'),
(55555555, '5', 'ALAN', 'BRITO', 'JARA', '1985-02-15', 38, 'FSDFASDFGVSD', 'DFSDFVSD', 'ACV', ''),
(88888888, '8', 'OCTAVIO', 'MONTERO', 'SANCHEZ', '1979-12-08', 43, 'AV ARGENTINA 543', '3216547', 'ACV', 'FONASA'),
(444444444, '4', 'JOSE', 'PARRA', 'PARRA', '1990-01-22', 33, 'VALENZUELA 1523', '986765745', '', 'apendicitis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paramedico`
--

CREATE TABLE `paramedico` (
  `idParamedico` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paramedico`
--

INSERT INTO `paramedico` (`idParamedico`, `nombre`) VALUES
(1, 'RODRIGO DIAZ'),
(2, 'FABIAN LEON'),
(3, 'TRASY QUIJANES'),
(4, 'EMILIO CUBILLOS '),
(5, 'ALEXIS COLLAO'),
(6, 'DUSTYN BAXMAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE `requerimiento` (
  `idRequerimiento` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `requerimiento`
--

INSERT INTO `requerimiento` (`idRequerimiento`, `descripcion`) VALUES
(1, 'CAMILLA'),
(2, 'SILLA DE RUEDAS'),
(3, 'SILLA NIDO'),
(4, 'INCUBADORA'),
(5, 'CAMILLA + O2'),
(6, 'SILLA DE RUEDAS + O2'),
(7, 'SILLA NIDO + O2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `nombreServicio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `nombreServicio`) VALUES
(1, 'MEDICINA'),
(2, 'CIRUGIA'),
(3, 'KINESIOLOGIA'),
(4, 'UEA'),
(5, 'UEI'),
(6, 'CAE'),
(7, 'RECUPERACION'),
(8, 'DIALISIS'),
(9, 'ENDOSCOPIA'),
(10, 'BANCO DE SANGRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudambulancia`
--

CREATE TABLE `solicitudambulancia` (
  `idSolicitud` int(11) NOT NULL,
  `runPaciente` int(11) NOT NULL,
  `fechaRecepcion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaHoraTraslado` datetime NOT NULL,
  `idTipoTraslado` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `idUbicacionOrigen` int(11) NOT NULL,
  `idUbicacionDestino` int(11) NOT NULL,
  `idRequerimiento` int(11) NOT NULL,
  `idTripulacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitudambulancia`
--

INSERT INTO `solicitudambulancia` (`idSolicitud`, `runPaciente`, `fechaRecepcion`, `fechaHoraTraslado`, `idTipoTraslado`, `idServicio`, `idUbicacionOrigen`, `idUbicacionDestino`, `idRequerimiento`, `idTripulacion`, `idUsuario`, `idEstado`) VALUES
(12, 13991983, '2023-05-14 20:28:13', '2023-05-22 20:29:00', 2, 2, 4, 11, 1, 2, 1, 2),
(14, 13991983, '2023-05-15 15:18:36', '2023-05-16 02:00:00', 2, 1, 14, 1, 1, 5, 0, 1),
(16, 12321321, '2023-05-15 16:23:10', '2023-05-16 17:20:00', 1, 1, 1, 13, 1, 5, 0, 1),
(17, 12321321, '2023-05-15 16:25:29', '2023-05-16 17:20:00', 1, 1, 1, 13, 1, 5, 0, 1),
(18, 12345678, '2023-05-15 19:23:25', '2023-05-22 19:00:00', 4, 8, 13, 10, 1, 5, 0, 1),
(19, 13991983, '2023-05-15 21:18:58', '2023-05-22 20:19:00', 1, 1, 14, 9, 1, 5, 0, 2),
(20, 55555555, '2023-05-15 21:23:58', '2023-05-15 19:23:00', 1, 1, 14, 1, 1, 5, 0, 1),
(21, 13991983, '2023-05-15 21:26:44', '2023-05-22 22:30:00', 1, 1, 14, 1, 1, 5, 0, 1),
(22, 12345678, '2023-05-15 21:44:27', '0000-00-00 00:00:00', 1, 1, 1, 1, 1, 5, 0, 1),
(23, 13991984, '2023-05-15 21:47:33', '0000-00-00 00:00:00', 1, 1, 1, 1, 1, 5, 0, 1),
(24, 13991985, '2023-05-15 21:48:18', '2023-05-15 19:48:00', 1, 1, 1, 1, 1, 5, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipotraslado`
--

CREATE TABLE `tipotraslado` (
  `idTipoTraslado` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipotraslado`
--

INSERT INTO `tipotraslado` (`idTipoTraslado`, `descripcion`) VALUES
(1, 'ALTA'),
(2, 'CONTROL'),
(3, 'TRASLADO'),
(4, 'TRATAMIENTO'),
(5, 'HEMODERIVADOS'),
(6, 'RESCATE'),
(7, 'TRUEQUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tripulacion`
--

CREATE TABLE `tripulacion` (
  `idTripulacion` int(11) NOT NULL,
  `Ambulancia` varchar(30) NOT NULL,
  `Paramedico` varchar(50) NOT NULL,
  `Conductor` varchar(50) NOT NULL,
  `Auxiliar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tripulacion`
--

INSERT INTO `tripulacion` (`idTripulacion`, `Ambulancia`, `Paramedico`, `Conductor`, `Auxiliar`) VALUES
(5, 'AT-20', 'EMILIO CUBILLOS', 'DIEGO SANHUEZA', 'LUIS TRONCOSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idUbicacion` int(11) NOT NULL,
  `nombreUbicacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`idUbicacion`, `nombreUbicacion`) VALUES
(1, 'ACHUPALLAS'),
(2, 'MIRAFLORES'),
(3, 'FORESTAL'),
(4, 'RECREO'),
(5, 'VILLA HERMOSA'),
(6, 'VALPARAISO'),
(8, 'QUILPUE'),
(9, 'VILLA ALEMANA'),
(10, 'HOSPITAL NUEVO'),
(11, 'PROCEDIMIENTOS PROGRAMADOS'),
(13, 'DOMICILIO'),
(14, 'SERVICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tipoUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `contrasena`, `email`, `tipoUsuario`) VALUES
(1, 'ecubillos', '12345678', 'emiliocubillos@gmail.com', 'administrador'),
(2, 'supervisor', '12345678', 'usuario@gmail.com', 'usuario'),
(3, 'coordinador', '12345678', 'coordinador@gmail.com', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
  ADD PRIMARY KEY (`idAmbulancia`);

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD PRIMARY KEY (`idAuxiliar`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`idConductor`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`runPaciente`);

--
-- Indices de la tabla `paramedico`
--
ALTER TABLE `paramedico`
  ADD PRIMARY KEY (`idParamedico`);

--
-- Indices de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD PRIMARY KEY (`idRequerimiento`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `solicitudambulancia`
--
ALTER TABLE `solicitudambulancia`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indices de la tabla `tipotraslado`
--
ALTER TABLE `tipotraslado`
  ADD PRIMARY KEY (`idTipoTraslado`);

--
-- Indices de la tabla `tripulacion`
--
ALTER TABLE `tripulacion`
  ADD PRIMARY KEY (`idTripulacion`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambulancia`
--
ALTER TABLE `ambulancia`
  MODIFY `idAmbulancia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  MODIFY `idAuxiliar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `idConductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paramedico`
--
ALTER TABLE `paramedico`
  MODIFY `idParamedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  MODIFY `idRequerimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `solicitudambulancia`
--
ALTER TABLE `solicitudambulancia`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipotraslado`
--
ALTER TABLE `tipotraslado`
  MODIFY `idTipoTraslado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tripulacion`
--
ALTER TABLE `tripulacion`
  MODIFY `idTripulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
