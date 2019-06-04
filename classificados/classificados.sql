-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para classificados
CREATE DATABASE IF NOT EXISTS `classificados` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `classificados`;

-- Copiando estrutura para tabela classificados.anuncios
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `valor` float NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.anuncios: ~6 rows (aproximadamente)
DELETE FROM `anuncios`;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descricao`, `valor`, `estado`) VALUES
	(1, 1, 3, 'Xbox 360 Desbloqueado', 'Xbox 360 - Seminovo.\r\nDesbloqueio LT 3.0 (pode jogar online sem riscos de banimento).\r\nSkins Dragons,\r\n2 controles originais.\r\n75 jogos inclusos.', 650, 1),
	(5, 1, 1, 'Hublot', 'Algum produto de anÃºncio legal!', 250, 2),
	(6, 1, 3, 'PlayStation 4', 'Console Playstation 4 com 500GB de memÃ³ria e 3 jogos mÃ­dia fÃ­sica.', 1200, 1),
	(7, 1, 4, 'Ferrari', 'Carro esportivo semi-novo (sÃ³ dei um rolezin)', 1000000, 2),
	(8, 1, 3, 'Nintendo Switch', 'Nintendo Switch + Joystick + TLOZ: BOTW.', 1480, 2),
	(9, 1, 2, 'Moletom Preto.', 'Moletom preto com detalhes PRETOS.', 35, 0);
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;

-- Copiando estrutura para tabela classificados.anuncios_imagens
CREATE TABLE IF NOT EXISTS `anuncios_imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anuncio` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.anuncios_imagens: ~10 rows (aproximadamente)
DELETE FROM `anuncios_imagens`;
/*!40000 ALTER TABLE `anuncios_imagens` DISABLE KEYS */;
INSERT INTO `anuncios_imagens` (`id`, `id_anuncio`, `url`) VALUES
	(16, 1, 'd8b3c7b65bae879b7b0f376058712639.jpg'),
	(18, 1, 'ff9664b532155785f4edf6be316d3af3.jpg'),
	(19, 1, 'e47b2baae5bcf60571bb2d65ad4c605a.jpg'),
	(20, 5, 'd4a723565bf274d2ce8a7be1ef77eeb7.jpg'),
	(21, 6, '7555f2627b2adbbb666b777a00417392.jpg'),
	(23, 7, 'ba3f5d8e6feed70c8607502a61ec8ada.jpg'),
	(24, 7, '0cf516cbbb97abc38bbe58ce937e0d47.jpg'),
	(25, 7, '255fab0eda0e039a95c600c66b75d7f1.jpg'),
	(27, 8, 'ab2bac70744be38cb36aba803e31a22f.jpg'),
	(29, 9, '83e6d6a4a1b7cb20894b042d37c07314.jpg');
/*!40000 ALTER TABLE `anuncios_imagens` ENABLE KEYS */;

-- Copiando estrutura para tabela classificados.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.categorias: ~4 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nome`) VALUES
	(1, 'Relógios'),
	(2, 'Roupas'),
	(3, 'Eletrônicos'),
	(4, 'Carros');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela classificados.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`) VALUES
	(1, 'Douglas Pinheiro Goulart', 'douglaspigoulart@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '48996398622'),
	(2, 'Dodge Gamer ', 'dodgegamer12@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '48996398622');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
