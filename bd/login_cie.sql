-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2023 a las 22:43:00
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_cie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `IdUser` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NickName` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `CreationDate` date NOT NULL,
  `LastLogin` date NOT NULL,
  `ProfilePicture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersdetails`
--

CREATE TABLE `usersdetails` (
  `IdUser` int(10) NOT NULL,
  `Permissions` varchar(30) NOT NULL,
  `UserType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userstokens`
--

CREATE TABLE `userstokens` (
  `IdUser` int(10) NOT NULL,
  `Token` varchar(200) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indices de la tabla `usersdetails`
--
ALTER TABLE `usersdetails`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indices de la tabla `userstokens`
--
ALTER TABLE `userstokens`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usersdetails`
--
ALTER TABLE `usersdetails`
  ADD CONSTRAINT `usersdetails_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `userstokens`
--
ALTER TABLE `userstokens`
  ADD CONSTRAINT `userstokens_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
