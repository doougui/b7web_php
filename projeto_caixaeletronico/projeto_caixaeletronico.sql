-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_caixaeletronico
CREATE DATABASE IF NOT EXISTS `projeto_caixaeletronico` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_caixaeletronico`;

-- Copiando estrutura para tabela projeto_caixaeletronico.contas
CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titular` varchar(100) DEFAULT NULL,
  `agencia` int(11) DEFAULT NULL,
  `conta` int(11) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_caixaeletronico.contas: ~0 rows (aproximadamente)
DELETE FROM `contas`;
/*!40000 ALTER TABLE `contas` DISABLE KEYS */;
INSERT INTO `contas` (`id`, `titular`, `agencia`, `conta`, `senha`, `saldo`) VALUES
	(1, 'Bonieky Lacerda', 123, 321, '202cb962ac59075b964b07152d234b70', 133.2),
	(2, 'Douglas Pinheiro Goulart', 759, 273, '698dc19d489c4e4db73e28a713eab07b', NULL);
/*!40000 ALTER TABLE `contas` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_caixaeletronico.historico
CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_conta` int(11) DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `data_operacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_caixaeletronico.historico: ~7 rows (aproximadamente)
DELETE FROM `historico`;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
INSERT INTO `historico` (`id`, `id_conta`, `tipo`, `valor`, `data_operacao`) VALUES
	(1, 1, 0, 1000, '2017-07-10 12:28:00'),
	(2, 1, 1, 150.3, '2017-07-10 12:28:31'),
	(3, 1, 0, 20, '2017-07-10 12:28:54'),
	(4, 1, 1, 69.7, '2017-07-10 12:29:09'),
	(5, 1, 1, 100, '2017-07-10 12:29:20'),
	(6, 1, 0, 4983.2, '2017-07-10 12:29:35'),
	(7, 1, 1, 600, '2017-07-10 12:29:50'),
	(8, 1, 0, 550, '2019-06-07 17:36:10'),
	(9, 1, 1, 5500, '2019-06-07 17:36:23');
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
