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


-- Copiando estrutura do banco de dados para projeto_rating
CREATE DATABASE IF NOT EXISTS `projeto_rating` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_rating`;

-- Copiando estrutura para tabela projeto_rating.filmes
CREATE TABLE IF NOT EXISTS `filmes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `media` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_rating.filmes: ~3 rows (aproximadamente)
DELETE FROM `filmes`;
/*!40000 ALTER TABLE `filmes` DISABLE KEYS */;
INSERT INTO `filmes` (`id`, `titulo`, `media`) VALUES
	(1, 'Esqueceram de Mim', 2.85714),
	(2, 'Lost', 3.2),
	(3, 'Suits', 3.77778);
/*!40000 ALTER TABLE `filmes` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_rating.votos
CREATE TABLE IF NOT EXISTS `votos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_filme` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_rating.votos: ~11 rows (aproximadamente)
DELETE FROM `votos`;
/*!40000 ALTER TABLE `votos` DISABLE KEYS */;
INSERT INTO `votos` (`id`, `id_filme`, `nota`) VALUES
	(1, 1, 3),
	(2, 1, 5),
	(3, 1, 1),
	(4, 1, 2),
	(5, 2, 5),
	(6, 2, 1),
	(7, 2, 4),
	(8, 3, 2),
	(9, 3, 4),
	(10, 3, 4),
	(11, 3, 3),
	(12, 1, 5),
	(13, 2, 5),
	(14, 3, 5),
	(15, 3, 1),
	(16, 3, 5),
	(17, 3, 5),
	(18, 3, 5),
	(19, 2, 1),
	(20, 1, 1),
	(21, 1, 3);
/*!40000 ALTER TABLE `votos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
