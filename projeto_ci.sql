-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 07/11/2013 às 05h07min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projeto_ci`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(2, 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(4) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `data_inclusao` date DEFAULT NULL,
  `endereco` text NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `id_categoria`, `nome`, `CPF`, `foto`, `data_inclusao`, `endereco`, `telefone`, `email`) VALUES
(12, 0, 'Thaisa', '12345678901', 'a5122-Koala.jpg', '2013-04-20', '<p>\r\n	Rua da casa sem numero</p>\r\n', '01234567890', 'email@email.email'),
(16, 2, 'Fabio', '12345678901', NULL, '2013-11-07', '<p>\r\n	Avenida da rua sem numero</p>\r\n', '01234567890', 'maile@maile.em');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nm_nome` varchar(255) NOT NULL,
  `hl_email` varchar(255) NOT NULL,
  `pw_password` varchar(50) NOT NULL,
  `dt_cadastro` date NOT NULL,
  `fl_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `hl_email` (`hl_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user_ativacao`
--

CREATE TABLE IF NOT EXISTS `tb_user_ativacao` (
  `id_ativacao` int(11) NOT NULL AUTO_INCREMENT,
  `nu_token` varchar(50) NOT NULL,
  `hl_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ativacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user_detalhe`
--

CREATE TABLE IF NOT EXISTS `tb_user_detalhe` (
  `id_user_detalhe` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `hl_imagem` varchar(500) NOT NULL,
  `hl_twitter` varchar(500) DEFAULT NULL,
  `hl_facebook` varchar(500) DEFAULT NULL,
  `hl_linkedin` varchar(500) DEFAULT NULL,
  `hl_site_pessoal` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_user_detalhe`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
