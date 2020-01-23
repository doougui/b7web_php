-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_popularselect
CREATE DATABASE IF NOT EXISTS `projeto_popularselect` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_popularselect`;

-- Copiando estrutura para tabela projeto_popularselect.aulas
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_popularselect.aulas: 12 rows
DELETE FROM `aulas`;
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `id_modulo`, `titulo`) VALUES
	(1, 1, 'Soma'),
	(2, 1, 'Subtração'),
	(3, 1, 'Divisão'),
	(4, 1, 'Multiplicação'),
	(5, 2, 'Verbo'),
	(6, 2, 'Substantivo'),
	(7, 2, 'Pronome'),
	(8, 2, 'Adjetivo'),
	(9, 3, 'Brasil'),
	(10, 3, 'Estados Unidos'),
	(11, 3, 'Alemanha'),
	(12, 3, 'Japão');
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_popularselect.modulo
CREATE TABLE IF NOT EXISTS `modulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_popularselect.modulo: 3 rows
DELETE FROM `modulo`;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` (`id`, `titulo`) VALUES
	(1, 'Matemática '),
	(2, 'Português'),
	(3, 'História');
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
