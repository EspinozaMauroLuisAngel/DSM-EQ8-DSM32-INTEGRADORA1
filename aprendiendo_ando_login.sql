-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2022 a las 17:30:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aprendiendo_ando_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(100) NOT NULL,
  `nombre_curso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contenido_curso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `describcion_general` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `contenido_curso`, `describcion_general`, `nivel`) VALUES
(3, 'JavaScript Basico', '1.-Declarar variables   2.-Almacenar valores   3.-Una variable a otra variable', 'JavaScript es el lenguaje de programación que debes usar para añadir características interactivas a tu sitio web, (por ejemplo, juegos, eventos que ocurren cuando los botones son presionados o los datos son introducidos en los formularios, efectos de estilo dinámicos, animación, y mucho más).', 'dtfyguhijlk'),
(4, 'Java Basico', '1.-Declarar variables 2.-Almacenar valores 3.-Una variable a otra variable', 'Java es un lenguaje sencillo y orientado a objetos, que permite el desarrollo de aplicaciones en diversas áreas, como seguridad, animación, acceso a bases de datos, aplicaciones cliente-servidor, interfaces gráficas, páginas Web interactivas y desarrollo de aplicaciones móviles, entre otras.', 'Intermedio'),
(5, 'SQLYog Basico', '1.-Crear una Base de Datos 2.-Crear tablas 3.-Crear Registros', 'SQLyog es una herramienta GUI para RDBMS MySQL. Está desarrollado por Webyog, Inc., con sede en Bangalore, India, y Santa Clara, California. SQLyog está siendo utilizado por más de 30,000 clientes en todo el mundo y se ha descargado más de 2,000,000 de veces.', 'Intermedio'),
(6, 'Git Basico', '1.-Clonar Un repositorio 2.-Actualizar cambios 3.-Subir Un proyecto a tu repositorio', 'GitHub es una forja para alojar proyectos utilizando el sistema de control de versiones Git. Se utiliza principalmente para la creación de código fuente de programas de ordenador. El software que opera GitHub fue escrito en Ruby on Rails. Desde enero de 2010, GitHub opera bajo el nombre de GitHub, Inc.', 'Intermedio'),
(7, 'HTML Basico', '1.-Estructura basica de un documento HTML 2.-Implementar Imagenes 3.-Implementar Tablas', 'HTML, siglas en inglés de HyperText Markup Language, hace referencia al lenguaje de marcado para la elaboración de páginas web.', 'Intermedio'),
(8, 'CSS Bascio', '1.-Conectar HTML Y CSS 2.- Sintaxis de CSS 3.-Variables CSS', 'CSS, en español «Hojas de estilo en cascada», es un lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de marcado.​', 'Intermedio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `idInstructor` int(100) NOT NULL,
  `nombreInstructor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correoInstructor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuarioInstructor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contraseñaInstructor` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`idInstructor`, `nombreInstructor`, `correoInstructor`, `usuarioInstructor`, `contraseñaInstructor`) VALUES
(4, 'Sergio Garcia', 'sergio@gmail.com', 'SergioInstructor', '12345'),
(5, 'Luis Angel', 'luis@gmail.com', 'LuisAngelInstructor', '12345'),
(6, 'Zahid Mejia', 'zahid@gmail.com', 'ZahidInstructor', '12345'),
(7, 'Lael Martinez', 'lael@gmail.com', 'LaelInstructor', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `namee` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `passwordd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`namee`, `email`, `username`, `passwordd`, `id`) VALUES
('Sergio Antonio', 'sergio@gmail.com', 'SergioAdmin', '827ccb0eea8a706c4c34a16891f84e7b', 159),
('Zahid Mejia', 'zahid@gmail.com', 'ZahidAdmin', '827ccb0eea8a706c4c34a16891f84e7b', 160),
('Luis Angel Espinoza Mauro', 'luis@gmail.com', 'LuisAdmin', '827ccb0eea8a706c4c34a16891f84e7b', 230),
('Lael Martinez', 'lael@gmail.com', 'LaelAdmin', '827ccb0eea8a706c4c34a16891f84e7b', 232),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 250);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD UNIQUE KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`idInstructor`),
  ADD UNIQUE KEY `id` (`idInstructor`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
  MODIFY `idInstructor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
