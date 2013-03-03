-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 14/11/2012 às 14h21min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `asalight_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `senha`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio_categoria`
--

CREATE TABLE IF NOT EXISTS `cardapio_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cardapio_categoria` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cardapio_categoria`
--

INSERT INTO `cardapio_categoria` (`id`, `nome_cardapio_categoria`) VALUES
(1, 'Peixe'),
(2, 'Aves'),
(3, 'Massas'),
(4, 'Risotos'),
(5, 'Carnes'),
(6, 'Tortas'),
(7, 'Sobremesas'),
(8, 'Kids');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio_produto`
--

CREATE TABLE IF NOT EXISTS `cardapio_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cardapio_produto` varchar(70) DEFAULT NULL,
  `descricao` varchar(400) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `quant_caloria` varchar(50) DEFAULT NULL,
  `destaque` varchar(10) DEFAULT NULL,
  `img_produto` varchar(150) DEFAULT NULL,
  `id_cardapio_categoria` int(11) NOT NULL,
  `exibir` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cardapio_categoria` (`id_cardapio_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `cardapio_produto`
--

INSERT INTO `cardapio_produto` (`id`, `nome_cardapio_produto`, `descricao`, `preco`, `quant_caloria`, `destaque`, `img_produto`, `id_cardapio_categoria`, `exibir`) VALUES
(9, 'Frango Agridoce com Salada Verde', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '18.00', '112', 'sim', '', 2, 'sim'),
(10, 'Frango Agridoce com Salada Verde', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.', '16.00', '80', 'nao', '', 2, 'sim'),
(11, 'Carne moida com legumes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '9.00', '100', 'sim', '', 5, 'sim'),
(12, 'Torta de Chocolate com Morango', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '25.00', '600', 'sim', '', 7, 'sim'),
(13, 'Moqueca de Peixe Light', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '16.00', '212', 'sim', '', 1, 'sim'),
(14, 'Frango com Salada Verde', 'Lorem ipsum dolor sit amet, consectetuer adip', '25.00', '200', 'nao', '', 2, 'sim'),
(15, 'Frango Agridoce com Salada', 'Lorem ipsum dolor sit amet, consectetuer adip', '30.00', '112', 'nao', '', 2, 'sim'),
(16, 'Frango Agridoce com Salada Vermelha', 'Lorem ipsum dolor sit amet, consectetuer adip', '25.00', '112', 'nao', '', 2, 'sim'),
(17, 'Frango Agridoce com Salada Verde', 'Lorem ipsum dolor sit amet, consectetuer adip', '9.00', '100', 'nao', '', 2, 'sim'),
(18, 'Frango Agridoce com Salada Verde', 'Lorem ipsum dolor sit amet, consectetuer adip', '23.00', '212', 'nao', '', 2, 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dicas`
--

CREATE TABLE IF NOT EXISTS `dicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `dicas`
--

INSERT INTO `dicas` (`id`, `descricao`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit id nisi bibendum rhoncus. Maecenas non tortor a velit vehicula convallis non ac orci. \r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquam facilisis diam, sed rhoncus elit bibendum ut. \r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada.'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit id nisi bibendum rhoncus. Maecenas non tortor a velit vehicula convallis non ac orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquam facilisis diam, sed rhoncus elit bibendum ut. Pellentesque habitant morbi tristique senectus et netus et malesuada.'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit id nisi bibendum rhoncus. Maecenas non tortor a velit vehicula convallis non ac orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquam facilisis diam, sed rhoncus elit bibendum ut. Pellentesque habitant morbi tristique senectus et netus et malesuada.'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit id nisi bibendum rhoncus. Maecenas non tortor a velit vehicula convallis non ac orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquam facilisis diam, sed rhoncus elit bibendum ut. Pellentesque habitant morbi tristique senectus et netus et malesuada.'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed elit id nisi bibendum rhoncus. Maecenas non tortor a velit vehicula convallis non ac orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquam facilisis diam, sed rhoncus elit bibendum ut. Pellentesque habitant morbi tristique senectus et netus et malesuada.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_cardapio_produto`
--

CREATE TABLE IF NOT EXISTS `img_cardapio_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_cardapio_produto` varchar(300) DEFAULT NULL,
  `id_cardapio_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cardapio_produto` (`id_cardapio_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `img_cardapio_produto`
--

INSERT INTO `img_cardapio_produto` (`id`, `img_cardapio_produto`, `id_cardapio_produto`) VALUES
(1, '../img_produto/261012-frangoagridoce.jpg', 9),
(2, '../img_produto/261012-frangoagridoce.jpg', 10),
(3, '../img_produto/261012-carne-moida-com-legumes-2-7-75.jpg', 11),
(4, '../img_produto/261012-receita-torta-chocolate-morango-2.jpg', 12),
(5, '../img_produto/261012-moqueca-de-peixe-light-1-7-96.jpg', 13),
(6, '../img_produto/131112-frangoagridoce.jpg', 14),
(7, '../img_produto/131112-frangoagridoce.jpg', 15),
(8, '../img_produto/131112-frangoagridoce.jpg', 16),
(9, '../img_produto/131112-frangoagridoce.jpg', 17),
(10, '../img_produto/131112-frangoagridoce.jpg', 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `preparo_alimentos`
--

CREATE TABLE IF NOT EXISTS `preparo_alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `preparo_alimentos`
--

INSERT INTO `preparo_alimentos` (`id`, `descricao`) VALUES
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec faucibus eros. Aenean nec arcu eu urna sollicitudin porttitor. Proin vel magna orci. Nulla ultricies vehicula metus. Sed quis erat a dolor ultrices commodo sit amet sed felis. Donec sed tellus leo, sit amet tincidunt lorem. Suspendisse placerat sagittis dui at aliquam. Curabitur mauris lectus, iaculis eget vestibulum et, hendrerit eget felis. Sed sit amet nibh lacus, sed venenatis risus.\r\n\r\nPraesent rhoncus elementum dui, '),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec faucibus eros. Aenean nec arcu eu urna sollicitudin porttitor. Proin vel magna orci. Nulla ultricies vehicula metus. Sed quis erat a dolor ultrices commodo sit amet sed felis. Donec sed tellus leo, sit amet tincidunt lorem. Suspendisse placerat sagittis dui at aliquam. Curabitur mauris lectus, iaculis eget vestibulum et, hendrerit eget felis. Sed sit amet nibh lacus, sed venenatis risus. Praesent rhoncus elementum dui,'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec faucibus eros. Aenean nec arcu eu urna sollicitudin porttitor. Proin vel magna orci. Nulla ultricies vehicula metus. Sed quis erat a dolor ultrices commodo sit amet sed felis. Donec sed tellus leo, sit amet tincidunt lorem. Suspendisse placerat sagittis dui at aliquam. Curabitur mauris lectus, iaculis eget vestibulum et, hendrerit eget felis. Sed sit amet nibh lacus, sed venenatis risus. Praesent rhoncus elementum dui,'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec faucibus eros. Aenean nec arcu eu urna sollicitudin porttitor. Proin vel magna orci. Nulla ultricies vehicula metus. Sed quis erat a dolor ultrices commodo sit amet sed felis. Donec sed tellus leo, sit amet tincidunt lorem. Suspendisse placerat sagittis dui at aliquam. Curabitur mauris lectus, iaculis eget vestibulum et, hendrerit eget felis. Sed sit amet nibh lacus, sed venenatis risus. Praesent rhoncus elementum dui,');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programa_alimentar`
--

CREATE TABLE IF NOT EXISTS `programa_alimentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_programa_alimentar` varchar(130) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `caloria` varchar(10) DEFAULT NULL,
  `img_programa_alimentar` varchar(200) DEFAULT NULL,
  `exibir` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `programa_alimentar`
--

INSERT INTO `programa_alimentar` (`id`, `nome_programa_alimentar`, `descricao`, `caloria`, `img_programa_alimentar`, `exibir`) VALUES
(7, 'Programa 01', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim'),
(8, 'Programa 02', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim'),
(9, 'Programa 03', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim'),
(10, 'Programa 04', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim'),
(11, 'Programa 05', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim'),
(12, 'Programa 06', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim'),
(13, 'Programa 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh', '112', '../img_produto/251012-peixe-assado.jpg', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programa_alimentar_periodo`
--

CREATE TABLE IF NOT EXISTS `programa_alimentar_periodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo_dia` varchar(40) DEFAULT NULL,
  `segunda` varchar(100) DEFAULT NULL,
  `terca` varchar(100) DEFAULT NULL,
  `quarta` varchar(100) DEFAULT NULL,
  `quinta` varchar(100) DEFAULT NULL,
  `sexta` varchar(100) DEFAULT NULL,
  `sabado` varchar(100) DEFAULT NULL,
  `domingo` varchar(100) DEFAULT NULL,
  `id_programa_alimentar` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_programa_alimentar` (`id_programa_alimentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `programa_alimentar_periodo`
--

INSERT INTO `programa_alimentar_periodo` (`id`, `periodo_dia`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `domingo`, `id_programa_alimentar`) VALUES
(15, 'CAFÃ‰ DA MANHÃƒ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(16, 'REFRESH', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(17, 'SALADA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(18, 'GAMELA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(19, 'PQ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(20, 'SOB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(21, 'LANCHE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(22, 'DRINK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(23, 'SALADA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(24, 'SOPA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(25, 'PQ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7),
(26, 'CEIA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget urna in neque aliquam porta.', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_compra`
--

CREATE TABLE IF NOT EXISTS `status_compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `id_cardapio_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `status_transacao` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cardapio_produto` (`id_cardapio_produto`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `endereco` varchar(140) DEFAULT NULL,
  `bairro` varchar(120) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `endereco`, `bairro`, `cidade`, `estado`, `uf`, `email`, `telefone`, `celular`, `senha`) VALUES
(2, 'Diogo', NULL, 'NOVA DE AZEVEDO', 'Neves', 'SÃO GONÇALO', 'Rio de Janeiro', 'RJ', 'dantonio_silva@yahoo.com.br', '(21) 2720-1965', '(21) 7666-5027', '1234567');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `cardapio_produto`
--
ALTER TABLE `cardapio_produto`
  ADD CONSTRAINT `cardapio_produto_ibfk_1` FOREIGN KEY (`id_cardapio_categoria`) REFERENCES `cardapio_categoria` (`id`);

--
-- Restrições para a tabela `img_cardapio_produto`
--
ALTER TABLE `img_cardapio_produto`
  ADD CONSTRAINT `img_cardapio_produto_ibfk_1` FOREIGN KEY (`id_cardapio_produto`) REFERENCES `cardapio_produto` (`id`);

--
-- Restrições para a tabela `programa_alimentar_periodo`
--
ALTER TABLE `programa_alimentar_periodo`
  ADD CONSTRAINT `programa_alimentar_periodo_ibfk_1` FOREIGN KEY (`id_programa_alimentar`) REFERENCES `programa_alimentar` (`id`);

--
-- Restrições para a tabela `status_compra`
--
ALTER TABLE `status_compra`
  ADD CONSTRAINT `status_compra_ibfk_1` FOREIGN KEY (`id_cardapio_produto`) REFERENCES `cardapio_produto` (`id`),
  ADD CONSTRAINT `status_compra_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `status_compra_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
