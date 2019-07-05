-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2019 a las 18:35:38
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbconnectx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `tipo_persona` varchar(45) NOT NULL,
  `apellidopa` varchar(45) DEFAULT NULL,
  `apellidoma` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_na` datetime NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `estadoP` varchar(45) NOT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `rfc` varchar(40) NOT NULL,
  `n_int_fam` int(255) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `num_colmena` varchar(45) DEFAULT NULL,
  `loc_api` varchar(256) NOT NULL,
  `prod_anual` varchar(45) DEFAULT NULL,
  `kilo_actual` int(11) NOT NULL,
  `temp_cosecha` varchar(45) NOT NULL,
  `upp` varchar(45) DEFAULT NULL,
  `pgn` varchar(45) DEFAULT NULL,
  `clave_rast` varchar(45) DEFAULT NULL,
  `certificacion` varchar(45) DEFAULT NULL,
  `fecha_hora` date NOT NULL,
  `mov_col` varchar(256) DEFAULT NULL,
  `donde` varchar(256) NOT NULL,
  `observacion` varchar(256) NOT NULL,
  `folio` varchar(256) NOT NULL,
  `img_perfil` varchar(45) NOT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `tipo_persona`, `apellidopa`, `apellidoma`, `nombre`, `fecha_na`, `sexo`, `estadoP`, `curp`, `rfc`, `n_int_fam`, `calle`, `colonia`, `municipio`, `telefono`, `email`, `num_colmena`, `loc_api`, `prod_anual`, `kilo_actual`, `temp_cosecha`, `upp`, `pgn`, `clave_rast`, `certificacion`, `fecha_hora`, `mov_col`, `donde`, `observacion`, `folio`, `img_perfil`, `estado`) VALUES
(1, 'tipo_persona', 'apellidopa', 'apellidoma', 'nombre', '0000-00-00 00:00:00', 'sexo', 'estadoP', 'curp', 'rfc', 0, 'calle', 'colonia', 'municipio', 'telefono', 'email', 'num_colmena', 'loc_api', 'prod_anual', 0, 'temp_cosecha', 'upp', 'pgn', 'clave_rast', 'certificacion', '0000-00-00', 'donde', 'observacion', 'folio', 'img_perfil', 'estado', NULL),
(2, 'Apicultor', 'Ramírez', 'Cortes', 'Giovanny', '0000-00-00 00:00:00', 'M', 'Guerrero', 'RACG871125HGRMRV03', ' RACG871125 ', 2, 'Av. Altos de Miramar', 'Altos de Miramar', 'Acapulco de Juárez', '7445878927', 'ing_giovanny@outlook.com', '616', '', '', 0, '', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(3, 'Apicultor', 'Rivera', 'Mora', 'Antonio', '0000-00-00 00:00:00', 'M', 'Guerrero', 'RIMA570613HGRVRN08', ' RIMA570613 ', 3, 'Mar Caspio', 'Granjas del Marqués', 'Acapulco de Juárez', '', '', '616', '', '', 0, '', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(4, 'Apicultor', 'Reyes', 'Figueroa', 'Nicolas', '0000-00-00 00:00:00', 'M', 'Guerrero', 'REFN620509HGRYGC04', ' REFN620509 ', 4, 'Benito Juárez', 'Pueblo Hidalgo', 'San Luis Acatlán', '7411351809', '', '15', 'Pla de Jicara', '450', 450, 'Abril', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(5, 'Apicultor', 'Figueroa', 'Muñoz', 'Tolentino', '0000-00-00 00:00:00', 'M', 'Guerrero', 'FIMT801010HGRGXL05', ' FIMT801010 ', 3, 'Emiliano Zapata', 'Pueblo Hidalgo', 'San Luis Acatlán', '', '', '25', 'Nueva Generación', '600', 600, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(6, 'Apicultor', 'Figueroa', 'Carranza', 'Filogonio', '0000-00-00 00:00:00', 'M', 'Guerrero', 'FICF521220HGRGRL04', ' FICF521220 ', 3, 'Emiliano Zapata', 'Pueblo Hidalgo', 'San Luis Acatlán', '', '', '60', 'Pie de Cerro Nixtamal', '2200', 1525, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(7, 'Apicultor', 'Bolaños', 'Rios', 'Susana', '0000-00-00 00:00:00', 'F', 'Guerrero', 'BORS830811MGRLSS01', ' BORS830811 ', 3, 'Vicente Guerrero', 'Pueblo Hidalgo', 'San Luis Acatlán', '7411252547', '', '31', 'Los Pinos', '1500', 1500, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(8, 'Apicultor', 'Figueroa', 'Hernandez', 'Cirilo', '0000-00-00 00:00:00', 'M', 'Guerrero', 'FIHC640318HGRGRR02', ' FIHC640318 ', 6, 'Emiliano Zapata', 'Pueblo Hidalgo', 'San Luis Acatlán', '7411160927', '', '10', 'Cuapinole', '300', 300, 'Abril-Mayo', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(9, 'Apicultor', 'Saavedra', 'Guzman', 'Juan', '0000-00-00 00:00:00', 'M', 'Guerrero', 'SAGJ550712HGRVZN01', ' SAGJ550712 ', 11, 'Donaldo Colosio', 'Pueblo Hidalgo', 'San Luis Acatlán', '7571162900', '', '33', 'Hondura Tigre', '1150', 1150, 'Abril-Mayo', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(10, 'Apicultor', 'Saavedra', 'Gonsalez', 'Cornelio', '0000-00-00 00:00:00', 'M', 'Guerrero', 'SAGC850202HGRVNR09', ' SAGC850202 ', 7, 'Donaldo Colosio', 'Pueblo Hidalgo', 'San Luis Acatlán', '7411370735', 'g_on_sacor@hotmail.es', '25', 'Canario', '610', 610, 'Abril-Mayo', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(11, 'Apicultor', 'olmedo', 'morales', 'aurelia', '0000-00-00 00:00:00', 'F', 'Guerrero', 'OEMA701208MGRLRR07', ' OEMA701208 ', 4, 'Av. Historia', 'Buena Vista', 'San Luis Acatlán', '7414889940', '', '25', 'Ojo de gua', '500', 650, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(12, 'Apicultor', 'Arellano', 'Barragan', 'Alberto', '0000-00-00 00:00:00', 'M', 'Guerrero', 'AEBA780321HGRRRL04', ' AEBA780321 ', 3, 'Av. Historia', 'Buena Vista', 'San Luis Acatlán', '', '', '25', 'Piedra Boluda', '500', 600, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(13, 'Apicultor', 'Mendoza', 'Martinez', 'Pablo', '0000-00-00 00:00:00', 'M', 'Guerrero', 'MEMP710206HGRNRB00', ' MEMP710206 ', 5, 'Av. Historia', 'Buena Vista', 'San Luis Acatlán', '7411290021', '', '30', 'Cerro Zapote', '650', 216, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(14, 'Apicultor', 'Rafael', 'Galena', 'Ignacio', '0000-00-00 00:00:00', 'M', 'Guerrero', 'RAGI641028HGRFLG02', ' RAGI641028 ', 4, 'Av. Historia', 'Buena Vista', 'San Luis Acatlán', '', '', '27', 'Piedra Boluda', '1500', 1250, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(15, 'Apicultor', 'Mendoza', 'Galena', 'Pedro', '0000-00-00 00:00:00', 'M', 'Guerrero', 'MEGP830109HGRNLD04', ' MEGP830109 ', 7, 'Genaro Chabela', 'Buena Vista', 'San Luis Acatlán', '4522690097', '', '10', 'Cerro de Milagro', '261', 325, 'Abril-Mayo', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(16, 'Apicultor', 'Deaquino', 'Placido', 'Balanzar', '0000-00-00 00:00:00', 'M', 'Guerrero', 'DEPB790516HGRQLL01', ' DEPB790516 ', 3, 'Av. Rio Iguapa', 'Buena Vista', 'San Luis Acatlán', '', '', '25', 'El Mango', '1000', 1000, 'Abril-Mayo', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(17, 'Apicultor', 'Rafael', 'Galena', 'Juan José', '0000-00-00 00:00:00', 'M', 'Guerrero', 'RAGJ690101HGRFLN00', ' RAGJ690101 ', 4, 'Av. Historia', 'Buena Vista', 'San Luis Acatlán', '7414889940', '', '10', 'Ojo de gua', '270', 324, 'Abril-Mayo', 'NO', 'NO', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(18, 'Inactivo', 'Bustos', 'Leon', 'Ramon', '0000-00-00 00:00:00', 'M', 'Guerrero', 'BULR640901HGRSNM08', ' BULR640901 ', 6, 'Edo. Guerrero', 'Azoyú', 'Azoyú', '7414121660', '', '60', 'Tosnene\r\nTencohuey', '1000', 0, 'Diciembre-Abril', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(19, 'Apicultor', 'Liborio', 'Salinas', 'Álvaro', '0000-00-00 00:00:00', 'M', 'Guerrero', 'LISÁ560219HGRBLL03', ' LISÁ560219 ', 4, 'Art. 123', 'Azoyú', 'Azoyú', '7451064002', '', '50', 'Cuadrilla Vieja\r\nTencohuey', '915', 400, 'Diciembre-Abril', 'SI', 'SI', 'NO', 'NO', '0000-00-00', '', '', '', '', '', NULL),
(20, 'Apicultor', 'Santiago', 'Placido', 'Dulce', '0000-00-00 00:00:00', 'F', 'Guerrero', 'SAPD920225MGRNLL06', ' SAPD920225 ', 3, 'Edo. Guerrero', 'Azoyú', 'Azoyú', '7411041436', '', '150', 'Macahuite\r\nCarrizo\r\nPiedras Negras', '3000', 160, 'Diciembre-Abril', 'SI', 'SI', 'NO', 'NO', '0000-00-00', 'Entre sus apiarios', '', '', '', '', NULL),
(21, 'Apicultor', 'Placido', 'Arias', 'Minerva', '0000-00-00 00:00:00', 'F', 'Guerrero', 'PAAM751106MGRLRN03', ' PAAM751106 ', 4, 'Justo Sierra', 'Azoyú', 'Azoyú', '7411041436', '', '120', 'Carrizo\r\nTencohuey\r\nRumbo Zapote', '2500', 135, 'Diciembre-Abril', 'SI', 'SI', 'NO', 'NO', '0000-00-00', 'Entre sus apiarios', '', '', '', '', NULL),
(22, '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alejandro', 'alejandrohernandezvalle@gmail.com', '$2y$10$d5v7pB0u6dR6/gkPCDStbOYehMjUJ5NCiTswNyPSyTFKSOuXgGlTi', '076S8IZ5ocv9zVg2K3TLC56WxTn2MQKZ1K9wcJsCcB6cqp18r9eK9VTzJgNp', '2019-06-10 14:41:40', '2019-06-28 20:19:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD UNIQUE KEY `idpersona_UNIQUE` (`idpersona`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
