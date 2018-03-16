-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 13, 2018 at 03:02 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Historial`
--

-- --------------------------------------------------------

--
-- Table structure for table `Registros`
--

CREATE TABLE `Registros` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Edad` varchar(20) DEFAULT NULL,
  `Genero` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Registros`
--

INSERT INTO `Registros` (`ID`, `Nombre`, `Edad`, `Genero`) VALUES
(1, 'Tadeo', '3', 'Masculino'),
(2, 'Eduardo', '22', 'Masculino'),
(18, 'Cinthia', '20', 'Femenino'),
(19, 'Jose Miguel', '21', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Registros`
--
ALTER TABLE `Registros`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Registros`
--
ALTER TABLE `Registros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;