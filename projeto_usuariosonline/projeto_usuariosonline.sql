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


-- Copiando estrutura do banco de dados para projeto_usuariosonline
CREATE DATABASE IF NOT EXISTS `projeto_usuariosonline` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_usuariosonline`;

-- Copiando estrutura para tabela projeto_usuariosonline.acessos
CREATE TABLE IF NOT EXISTS `acessos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_usuariosonline.acessos: ~3 rows (aproximadamente)
DELETE FROM `acessos`;
/*!40000 ALTER TABLE `acessos` DISABLE KEYS */;
INSERT INTO `acessos` (`id`, `ip`, `hora`) VALUES
	(34, '::1', '18:43:57'),
	(35, '::6', '18:44:08'),
	(36, '::1', '18:44:21');
/*!40000 ALTER TABLE `acessos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
