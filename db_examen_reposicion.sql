-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 05:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_examen_reposicion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formularios`
--

CREATE TABLE IF NOT EXISTS `tbl_formularios` (
  `codigo_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_formulario` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigo_formulario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formularios_x_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_formularios_x_usuario` (
  `codigo_usuario` int(11) NOT NULL,
  `codigo_formulario` int(11) NOT NULL,
  PRIMARY KEY (`codigo_usuario`,`codigo_formulario`),
  KEY `fk_tbl_usuarios_has_tbl_formularios_tbl_formularios1_idx` (`codigo_formulario`),
  KEY `fk_tbl_usuarios_has_tbl_formularios_tbl_usuarios1_idx` (`codigo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipos_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarios` (
  `codigo_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `genero` varchar(150) DEFAULT NULL,
  `codigo_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`codigo_usuario`),
  KEY `fk_tbl_usuarios_tbl_tipos_usuarios_idx` (`codigo_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_formularios_x_usuario`
--
ALTER TABLE `tbl_formularios_x_usuario`
  ADD CONSTRAINT `fk_tbl_usuarios_has_tbl_formularios_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_usuarios_has_tbl_formularios_tbl_formularios1` FOREIGN KEY (`codigo_formulario`) REFERENCES `tbl_formularios` (`codigo_formulario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_tipos_usuarios` FOREIGN KEY (`codigo_tipo_usuario`) REFERENCES `tbl_tipos_usuarios` (`codigo_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
