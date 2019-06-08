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


-- Copiando estrutura do banco de dados para projeto_multilinguagem
CREATE DATABASE IF NOT EXISTS `projeto_multilinguagem` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_multilinguagem`;

-- Copiando estrutura para tabela projeto_multilinguagem.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang_item` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_multilinguagem.categorias: ~2 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `lang_item`) VALUES
	(1, 'CATEGORIA_PHOTO'),
	(3, 'CATEGORIA_CLOTHES');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_multilinguagem.lang
CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(10) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `valor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_multilinguagem.lang: ~6 rows (aproximadamente)
DELETE FROM `lang`;
/*!40000 ALTER TABLE `lang` DISABLE KEYS */;
INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES
	(1, 'en', 'CATEGORIA_PHOTO', 'Photos'),
	(2, 'pt-br', 'CATEGORIA_PHOTO', 'Fotos'),
	(3, 'es', 'CATEGORIA_PHOTO', 'Fotolos'),
	(4, 'en', 'CATEGORIA_CLOTHES', 'Clothes'),
	(5, 'pt-br', 'CATEGORIA_CLOTHES', 'Roupas'),
	(6, 'es', 'CATEGORIA_CLOTHES', 'Roupalas');
/*!40000 ALTER TABLE `lang` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
