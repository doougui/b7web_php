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


-- Copiando estrutura do banco de dados para projeto_permissao
CREATE DATABASE IF NOT EXISTS `projeto_permissao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_permissao`;

-- Copiando estrutura para tabela projeto_permissao.documentos
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_permissao.documentos: ~3 rows (aproximadamente)
DELETE FROM `documentos`;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` (`id`, `titulo`) VALUES
	(1, 'Alvará de Fulano'),
	(2, 'CPF de Cicrano'),
	(3, 'Recibo do carro X');
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_permissao.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `permissoes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_permissao.usuarios: ~0 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `permissoes`) VALUES
	(1, 'suporte@b7web.com.br', '698dc19d489c4e4db73e28a713eab07b', 'EDIT,ADD,DEL,SECRET');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
