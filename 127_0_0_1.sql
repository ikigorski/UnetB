-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2017 às 20:20
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unetb`
--
CREATE DATABASE IF NOT EXISTS `unetb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `unetb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (		
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricula` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `gender` enum('F','M') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`);


--
-- funcoes
--
DELIMITER $$
DROP FUNCTION IF EXISTS 'valida_usuario' $$
CREATE FUNCTION 'valida usuario'(p_login VARCHAR(255),p_senha VARCHAR(100)) RETURNS INT(1);

BEGIN
DECLARE l_ret	INT(1) DEFAULT 0;
	SET	l_ret = IFNULL((SELECT DISTINCT 1 FROM alunos 
							WHERE email = p_login
							AND password = MD5(p_senha)),0);
	RETURN l_ret;
	END	$$
	DELIMITER; 

/*
exemplo de como criptografar e consultar senha em MD5
paposql.blogspot.com.br/2014/06/com-criptografar-senha-no-mysql.html


para passar valores ao banco
INSERT INTO usuario( login, password ) VALUES ('admin',MD5('senha'));

para consultar valores no banco
valida_usuario(p_login VARCHAR(255), p_senha VARCHAR(100)) 
*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
