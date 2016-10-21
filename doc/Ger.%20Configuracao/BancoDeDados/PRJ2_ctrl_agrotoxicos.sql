-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Out-2016 às 15:27
-- Versão do servidor: 5.1.54-community
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctrl_agrotoxicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agtxunidade`
--

CREATE TABLE IF NOT EXISTS `agtxunidade` (
  `idAgtxUnidade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeComercialAgtx` varchar(45) NOT NULL,
  `classeAplicacaoAgtx` varchar(45) NOT NULL,
  `principioAtivoAgtx` varchar(45) NOT NULL,
  `concentracaoAgtx` varchar(45) NOT NULL,
  `formulacaoAgtx` varchar(45) NOT NULL,
  `statusAgtx` char(1) NOT NULL,
  `Fabricante_idFabricante` int(11) NOT NULL,
  `Fornecedor_idFornecedor` int(11) NOT NULL,
  `Embalagem_idEmbalagem` int(11) NOT NULL,
  PRIMARY KEY (`idAgtxUnidade`,`Fabricante_idFabricante`,`Fornecedor_idFornecedor`,`Embalagem_idEmbalagem`),
  KEY `fk_AgtxUnidade_Fabricante_idx` (`Fabricante_idFabricante`),
  KEY `fk_AgtxUnidade_Fornecedor_idx` (`Fornecedor_idFornecedor`),
  KEY `fk_AgtxUnidade_Embalagem_idx` (`Embalagem_idEmbalagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `embalagem`
--

CREATE TABLE IF NOT EXISTS `embalagem` (
  `idEmbalagem` int(11) NOT NULL AUTO_INCREMENT,
  `tipoEmbalagem` varchar(10) NOT NULL,
  `undMedidaEmbalagem` varchar(3) NOT NULL,
  `qtdMedidaEmbalagem` float unsigned NOT NULL,
  PRIMARY KEY (`idEmbalagem`),
  UNIQUE KEY `tipoEmbalagem_UNIQUE` (`tipoEmbalagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE IF NOT EXISTS `entrada` (
  `idEntrada` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `receitaEntrada` varchar(45) NOT NULL,
  `nfNumEntrada` varchar(45) NOT NULL,
  `dataNfEntrada` date NOT NULL,
  `dataFabEntrada` date NOT NULL,
  `dataValEntrada` date NOT NULL,
  `dataEntrada` datetime NOT NULL,
  `qtdAtualEntrada` float unsigned NOT NULL,
  `stattusUsoEntrada` char(1) NOT NULL,
  `AgtxUnidade_idAgtxUnidade` int(11) NOT NULL,
  `AgtxUnidade_Fabricante_idFabricante` int(11) NOT NULL,
  `AgtxUnidade_Fornecedor_idFornecedor` int(11) NOT NULL,
  `AgtxUnidade_Embalagem_idEmbalagem` int(11) NOT NULL,
  PRIMARY KEY (`idEntrada`,`AgtxUnidade_idAgtxUnidade`,`AgtxUnidade_Fabricante_idFabricante`,`AgtxUnidade_Fornecedor_idFornecedor`,`AgtxUnidade_Embalagem_idEmbalagem`),
  KEY `fk_Entrada_AgtxUnidade_idx` (`AgtxUnidade_idAgtxUnidade`,`AgtxUnidade_Fabricante_idFabricante`,`AgtxUnidade_Fornecedor_idFornecedor`,`AgtxUnidade_Embalagem_idEmbalagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE IF NOT EXISTS `fabricante` (
  `idFabricante` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFabricante` varchar(45) NOT NULL,
  PRIMARY KEY (`idFabricante`),
  UNIQUE KEY `nomeFabricante_UNIQUE` (`nomeFabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFornecedor` varchar(45) NOT NULL,
  PRIMARY KEY (`idFornecedor`),
  UNIQUE KEY `nomeFabricante_UNIQUE` (`nomeFornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisicao`
--

CREATE TABLE IF NOT EXISTS `requisicao` (
  `idRequisicao` int(11) NOT NULL AUTO_INCREMENT,
  `tipoRequisicao` char(1) NOT NULL,
  `dataRequisicao` date NOT NULL,
  `principioAtivoReq` varchar(45) DEFAULT NULL,
  `concentraçãoReq` varchar(45) DEFAULT NULL,
  `formulacaoReq` varchar(45) DEFAULT NULL,
  `undMedidaReq` varchar(3) DEFAULT NULL,
  `qtdAplicacaoReq` float DEFAULT NULL,
  `nfNumEntradaReq` varchar(45) DEFAULT NULL,
  `tipoEmbalagemReq` varchar(10) DEFAULT NULL,
  `qtdEmbalagemReq` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idRequisicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `retorno`
--

CREATE TABLE IF NOT EXISTS `retorno` (
  `idRetorno` int(11) NOT NULL AUTO_INCREMENT,
  `pesoRetorno` float unsigned NOT NULL,
  `Saida_idSaida` int(11) NOT NULL,
  `Saida_Entrada_idEntrada` int(6) unsigned zerofill NOT NULL,
  `Saida_Entrada_AgtxUnidade_idAgtxUnidade` int(11) NOT NULL,
  `Saida_Entrada_AgtxUnidade_Fabricante_idFabricante` int(11) NOT NULL,
  `Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor` int(11) NOT NULL,
  `Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem` int(11) NOT NULL,
  PRIMARY KEY (`idRetorno`,`Saida_idSaida`,`Saida_Entrada_idEntrada`,`Saida_Entrada_AgtxUnidade_idAgtxUnidade`,`Saida_Entrada_AgtxUnidade_Fabricante_idFabricante`,`Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor`,`Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem`),
  KEY `fk_Retorno_Saida_idx` (`Saida_idSaida`,`Saida_Entrada_idEntrada`,`Saida_Entrada_AgtxUnidade_idAgtxUnidade`,`Saida_Entrada_AgtxUnidade_Fabricante_idFabricante`,`Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor`,`Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE IF NOT EXISTS `saida` (
  `idSaida` int(11) NOT NULL AUTO_INCREMENT,
  `tipoSaida` char(1) NOT NULL,
  `dataSaida` datetime NOT NULL,
  `pesoSaida` float unsigned DEFAULT NULL,
  `Entrada_idEntrada` int(6) unsigned zerofill NOT NULL,
  `Entrada_AgtxUnidade_idAgtxUnidade` int(11) NOT NULL,
  `Entrada_AgtxUnidade_Fabricante_idFabricante` int(11) NOT NULL,
  `Entrada_AgtxUnidade_Fornecedor_idFornecedor` int(11) NOT NULL,
  `Entrada_AgtxUnidade_Embalagem_idEmbalagem` int(11) NOT NULL,
  `Requisicao_idRequisicao` int(11) NOT NULL,
  PRIMARY KEY (`idSaida`,`Entrada_idEntrada`,`Entrada_AgtxUnidade_idAgtxUnidade`,`Entrada_AgtxUnidade_Fabricante_idFabricante`,`Entrada_AgtxUnidade_Fornecedor_idFornecedor`,`Entrada_AgtxUnidade_Embalagem_idEmbalagem`,`Requisicao_idRequisicao`),
  KEY `fk_Saida_Entrada_idx` (`Entrada_idEntrada`,`Entrada_AgtxUnidade_idAgtxUnidade`,`Entrada_AgtxUnidade_Fabricante_idFabricante`,`Entrada_AgtxUnidade_Fornecedor_idFornecedor`,`Entrada_AgtxUnidade_Embalagem_idEmbalagem`),
  KEY `fk_Saida_Requisicao_idx` (`Requisicao_idRequisicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(45) NOT NULL,
  `loginUsuario` varchar(7) NOT NULL,
  `senhaUsuario` varchar(45) NOT NULL,
  `permissaoUsuario` char(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `loginUsuario_UNIQUE` (`loginUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agtxunidade`
--
ALTER TABLE `agtxunidade`
  ADD CONSTRAINT `fk_AgtxUnidade_Fabricante` FOREIGN KEY (`Fabricante_idFabricante`) REFERENCES `fabricante` (`idFabricante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AgtxUnidade_Fornecedor1` FOREIGN KEY (`Fornecedor_idFornecedor`) REFERENCES `fornecedor` (`idFornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AgtxUnidade_Embalagem1` FOREIGN KEY (`Embalagem_idEmbalagem`) REFERENCES `embalagem` (`idEmbalagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_Entrada_AgtxUnidade1` FOREIGN KEY (`AgtxUnidade_idAgtxUnidade`, `AgtxUnidade_Fabricante_idFabricante`, `AgtxUnidade_Fornecedor_idFornecedor`, `AgtxUnidade_Embalagem_idEmbalagem`) REFERENCES `agtxunidade` (`idAgtxUnidade`, `Fabricante_idFabricante`, `Fornecedor_idFornecedor`, `Embalagem_idEmbalagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `retorno`
--
ALTER TABLE `retorno`
  ADD CONSTRAINT `fk_Retorno_Saida1` FOREIGN KEY (`Saida_idSaida`, `Saida_Entrada_idEntrada`, `Saida_Entrada_AgtxUnidade_idAgtxUnidade`, `Saida_Entrada_AgtxUnidade_Fabricante_idFabricante`, `Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor`, `Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem`) REFERENCES `saida` (`idSaida`, `Entrada_idEntrada`, `Entrada_AgtxUnidade_idAgtxUnidade`, `Entrada_AgtxUnidade_Fabricante_idFabricante`, `Entrada_AgtxUnidade_Fornecedor_idFornecedor`, `Entrada_AgtxUnidade_Embalagem_idEmbalagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `saida`
--
ALTER TABLE `saida`
  ADD CONSTRAINT `fk_Saida_Entrada1` FOREIGN KEY (`Entrada_idEntrada`, `Entrada_AgtxUnidade_idAgtxUnidade`, `Entrada_AgtxUnidade_Fabricante_idFabricante`, `Entrada_AgtxUnidade_Fornecedor_idFornecedor`, `Entrada_AgtxUnidade_Embalagem_idEmbalagem`) REFERENCES `entrada` (`idEntrada`, `AgtxUnidade_idAgtxUnidade`, `AgtxUnidade_Fabricante_idFabricante`, `AgtxUnidade_Fornecedor_idFornecedor`, `AgtxUnidade_Embalagem_idEmbalagem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Saida_Requisicao1` FOREIGN KEY (`Requisicao_idRequisicao`) REFERENCES `requisicao` (`idRequisicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
