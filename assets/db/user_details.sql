-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2024 a las 00:09:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users_example`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_details`
--

INSERT INTO `user_details` (`user_id`, `first_name`, `last_name`, `gender`) VALUES
(1, 'david', 'john', 'Female'),
(2, 'rogers', 'paul', 'Male'),
(3, 'david', 'john', 'Male'),
(4, 'maria', 'sanders', 'Male'),
(5, 'morris', 'miller', 'Female'),
(6, 'daniel', 'michael', 'Female'),
(7, 'sanders', 'paul', 'Female'),
(8, 'mark', 'mike', 'Male'),
(9, 'morgan', 'maria', 'Female'),
(10, 'paul', 'miller', 'Female'),
(11, 'david', 'miller', 'Female'),
(12, 'chrishaydon', 'bell', 'Female'),
(13, 'michael', 'brown', 'Male'),
(14, 'morgan', 'james', 'Male'),
(15, 'rogers', 'chrishaydon', 'Female'),
(16, 'morgan', 'wright', 'Male'),
(17, 'morgan', 'wright', 'Male'),
(18, 'david', 'ross', 'Female'),
(19, 'maria', 'morgan', 'Female'),
(20, 'mike', 'bell', 'Male'),
(21, 'miller', 'michael', 'Male'),
(22, 'ross', 'rogers', 'Female'),
(23, 'brooks', 'mike', 'Male'),
(24, 'miller', 'daniel', 'Male'),
(25, 'mike', 'wright', 'Male'),
(26, 'wright', 'smith', 'Female'),
(27, 'david', 'morgan', 'Male'),
(28, 'smith', 'bell', 'Female'),
(29, 'paul', 'wright', 'Female'),
(30, 'michael', 'james', 'Female'),
(31, 'michael', 'sanders', 'Female'),
(32, 'john', 'rivera', 'Female'),
(33, 'paul', 'michael', 'Male'),
(34, 'ross', 'mark', 'Female'),
(35, 'brooks', 'smith', 'Female'),
(36, 'cooper', 'brown', 'Female'),
(37, 'ross', 'daniel', 'Male'),
(38, 'cooper', 'miller', 'Male'),
(39, 'jenny09', 'maria', 'Female'),
(40, 'paul', 'rivera', 'Female'),
(41, 'maria', 'sanders', 'Male'),
(42, 'bell', 'david', 'Female'),
(43, 'rivera', 'cooper', 'Male'),
(44, 'mark', 'david', 'Female'),
(45, 'paul', 'cooper', 'Male'),
(46, 'brooks', 'david', 'Male'),
(47, 'james', 'maria', 'Male'),
(48, 'john', 'mark', 'Female'),
(49, 'rivera', 'jenny09', 'Female'),
(50, 'chrishaydon', 'sanders', 'Female'),
(51, 'bell', 'david', 'Female'),
(52, 'morris', 'brooks', 'Female'),
(53, 'cooper', 'mark', 'Male'),
(54, 'james', 'brooks', 'Male'),
(55, 'brooks', 'morris', 'Male'),
(56, 'morgan', 'sanders', 'Female'),
(57, 'rivera', 'cooper', 'Female'),
(58, 'bell', 'john', 'Female'),
(59, 'wright', 'brown', 'Male'),
(60, 'wright', 'sanders', 'Male'),
(61, 'smith', 'michael', 'Female'),
(62, 'bell', 'rivera', 'Male'),
(63, 'rivera', 'david', 'Female'),
(64, 'brooks', 'wright', 'Male'),
(65, 'chrishaydon', 'brown', 'Male'),
(66, 'michael', 'sanders', 'Male'),
(67, 'daniel', 'mark', 'Female'),
(68, 'bell', 'michael', 'Male'),
(69, 'brown', 'bell', 'Female'),
(70, 'rogers', 'john', 'Male'),
(71, 'paul', 'smith', 'Female'),
(72, 'john', 'ross', 'Male'),
(73, 'wright', 'brooks', 'Male'),
(74, 'brooks', 'brown', 'Male'),
(75, 'brown', 'morgan', 'Male'),
(76, 'chrishaydon', 'brown', 'Male'),
(77, 'mark', 'smith', 'Female'),
(78, 'brooks', 'ross', 'Male'),
(79, 'jenny09', 'morris', 'Male'),
(80, 'morgan', 'maria', 'Female'),
(81, 'rogers', 'brooks', 'Male'),
(82, 'rivera', 'brown', 'Male'),
(83, 'wright', 'maria', 'Female'),
(84, 'mike', 'brooks', 'Female'),
(85, 'sanders', 'mike', 'Male'),
(86, 'james', 'jenny09', 'Male'),
(87, 'jenny09', 'bell', 'Female'),
(88, 'chrishaydon', 'mark', 'Male'),
(89, 'sanders', 'chrishaydon', 'Male'),
(90, 'bell', 'paul', 'Female'),
(91, 'michael', 'maria', 'Male'),
(92, 'brown', 'paul', 'Male'),
(93, 'john', 'ross', 'Female'),
(94, 'morris', 'chrishaydon', 'Female'),
(95, 'wright', 'brown', 'Male'),
(96, 'miller', 'morris', 'Male'),
(97, 'chrishaydon', 'morgan', 'Male'),
(98, 'cooper', 'maria', 'Female'),
(99, 'miller', 'cooper', 'Female'),
(100, 'bell', 'mike', 'Female');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
