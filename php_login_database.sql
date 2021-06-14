-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2020 a las 23:20:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nombrestudent` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `respuestascorrectas` int(200) NOT NULL,
  `respuestasincorrectas` int(200) NOT NULL,
  `examen` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `grupo` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `nombrestudent`, `respuestascorrectas`, `respuestasincorrectas`, `examen`, `grupo`) VALUES
(2, 'Mario', 4, 4, 'Matematicas', 2),
(3, 'Claudia', 7, 23, 'Sumas', 2),
(4, 'Luis', 8, 6, 'sumas', 4),
(5, 'Mario', 4, 5, 'restas', 3),
(7, 'Shirel', 5, 10, 'Multiplicaciones', 3),
(8, 'Meryl Streep', 4, 4, 'Restas', 4),
(9, 'Brat', 3, 6, 'Multiplicaciones', 4),
(10, 'Alex', 9, 8, 'Restas', 1),
(11, 'Daniel', 4, 4, 'sumas', 1),
(12, 'Ferdando', 8, 5, 'Restas', 2),
(13, 'tita', 8, 9, 'Restas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `grupoprof` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `grupoprof`) VALUES
(4, 'marioartick@gmail.com', '$2y$10$R5o10q09zw/hSX.Si.moHOE2IpYnlu/GzMSS8juLLuS9oh8pC9z6S', 'Mario', 1),
(5, 'luis@gmail.com', '$2y$10$vqHxcD8DIw4mudTzm3yQpOHhlhluhuRx4DJN5ZxNKH/7oyrQlQvky', 'Luis Angel', 2),
(6, 'shirel@gmail.com', '$2y$10$ApMvtdYIbjKdJ3l9doe0bujJGy74PxD0gc03o8oEPyoS3w2K0XHr2', 'Shirel', 3),
(7, 'claudia@gmail.com', '$2y$10$8.mkwjK0iFGzah8DBLnZfebnUMHSOzqU2pr6QX1Q4ixrNJ011m.0K', 'Cluidia', 4),
(9, 'meryl@gmail.com', '$2y$10$8w77f7fJfnZKKqw7jaI3ru6WvlwMkUrYhsTfe9mKW3pZIJL46kQxS', 'Meryl', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
