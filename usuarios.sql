-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 11:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uninpahu`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `No_Identificacion` int(11) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`No_Identificacion`, `Nombres`, `Apellidos`, `Correo`, `Telefono`, `Direccion`) VALUES
(1, 'Juan', 'Adams', 'AdamsJuan@gmail.com', '30246593989', 'av. caracas #29-80'),
(52586445, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(52586445, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(52586445, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(565495989, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(565495989, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(565495989, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(565495989, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(565495989, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86'),
(565495989, 'Luz', 'Andrade', 'andrademle@gmail.com', '3105242311', 'Av. caracas #49-86');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
