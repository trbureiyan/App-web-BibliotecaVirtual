-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 03:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libros`
--

-- --------------------------------------------------------

--
-- Table structure for table `autores`
--

CREATE TABLE `autores` (
  `ID_autores` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `telefono` bigint(14) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autores`
--

INSERT INTO `autores` (`ID_autores`, `Nombre`, `Apellidos`, `telefono`, `correo`) VALUES
(9, 'SANTIAGO', 'QUEVEDO', 322334456, 'camila.tovar@usco.edu.co'),
(10, 'Brayan', 'Toro Bustos', 573102984722, 'prueba@test.com'),
(11, 'Don patricio', 'carvajal', 2347672310, 'si@test.com.co.test');

-- --------------------------------------------------------

--
-- Table structure for table `editores`
--

CREATE TABLE `editores` (
  `ID_editores` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `nombre_editorial` varchar(70) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editores`
--

INSERT INTO `editores` (`ID_editores`, `Nombre`, `Apellidos`, `nombre_editorial`, `pais`) VALUES
(1, 'Pedro', 'Diaz Perea', NULL, NULL),
(2, 'Alejandro', 'Peralta', NULL, NULL),
(3, 'Irene', 'Dussan Pineda', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `ID_libro` int(11) NOT NULL,
  `Titulo` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `ID_autor` int(11) DEFAULT NULL,
  `ID_editor` int(11) DEFAULT NULL,
  `ID_traductor` int(11) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`ID_libro`, `Titulo`, `Tipo`, `ID_autor`, `ID_editor`, `ID_traductor`, `genero`) VALUES
(7, 'La odisea', 'Novela', 10, 3, 2, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `traductores`
--

CREATE TABLE `traductores` (
  `ID_traductores` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `idioma_nativo` varchar(30) DEFAULT NULL,
  `idiomas_traduccion` varchar(50) DEFAULT NULL,
  `certificaciones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traductores`
--

INSERT INTO `traductores` (`ID_traductores`, `Nombre`, `Apellidos`, `idioma_nativo`, `idiomas_traduccion`, `certificaciones`) VALUES
(1, 'Luis', 'Ruiz', NULL, NULL, NULL),
(2, 'Amador', 'Peralta', NULL, NULL, NULL),
(3, 'Alejandra', 'Pineda', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`ID_autores`);

--
-- Indexes for table `editores`
--
ALTER TABLE `editores`
  ADD PRIMARY KEY (`ID_editores`);

--
-- Indexes for table `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID_libro`),
  ADD KEY `ID_autor` (`ID_autor`),
  ADD KEY `ID_editor` (`ID_editor`),
  ADD KEY `ID_traductor` (`ID_traductor`);

--
-- Indexes for table `traductores`
--
ALTER TABLE `traductores`
  ADD PRIMARY KEY (`ID_traductores`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autores`
--
ALTER TABLE `autores`
  MODIFY `ID_autores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `editores`
--
ALTER TABLE `editores`
  MODIFY `ID_editores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `libros`
--
ALTER TABLE `libros`
  MODIFY `ID_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `traductores`
--
ALTER TABLE `traductores`
  MODIFY `ID_traductores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`ID_autor`) REFERENCES `autores` (`ID_autores`),
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`ID_editor`) REFERENCES `editores` (`ID_editores`),
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`ID_traductor`) REFERENCES `traductores` (`ID_traductores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
