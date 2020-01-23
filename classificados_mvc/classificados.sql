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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.anuncios: ~8 rows (aproximadamente)
DELETE FROM `anuncios`;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descricao`, `valor`, `estado`) VALUES
	(1, 1, 8, 'Xbox 360 Desbloqueado', 'Xbox 360 - Semi-novo.\r\nDesbloqueio LT 2.0 (tem risco de banimento se entrar na Xbox Live).\r\nSem Dragons,\r\n2 controles originais.\r\n90 jogos inclusos.', 750, 2),
	(5, 1, 1, 'Hublot', 'Algum produto de anÃºncio legal!', 250, 1),
	(6, 1, 3, 'PlayStation 4', 'Console Playstation 4 com 500GB de memÃ³ria e 3 jogos mÃ­dia fÃ­sica.', 1200, 2),
	(8, 1, 3, 'Nintendo Switch', 'Nintendo Switch + Joystick + TLOZ: BOTW.', 1480, 2),
	(9, 2, 2, 'Moletom Preto.', 'Moletom preto com detalhes PRETOS.', 35, 3),
	(10, 2, 5, 'Mortal Kombat 11 Xbox One', 'Jogo em perfeito estado', 120, 3),
	(11, 6, 4, 'Gol Quadrado', 'Gol quadrado SOCADO NO CHÃO PIQUE DRAKE ZÉ DROGUINHA', 1480, 1),
	(12, 6, 8, 'Micro-ondas', 'Micro-ondas Philco 25 L Espelhado Função Descongelar Duas opções para descongelar alimentos: Descongelar Rápido e Descongelar pelo Peso. Função Timer Permite programar o horário do preparo com antecedência. Função Potência Vários níveis de potência para escolher de acordo com o tipo de alimento. Design inovador Porta e painel espelhados. check Capacidade para 25 litros. check Teclas fáceis: KIDS e COZINHAR. check Classe \\\\\\"A\\\\\\" em eficiência energética. check Prato com diâmetro de 270mm.', 368.1, 3);
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;

-- Copiando estrutura para tabela classificados.anuncios_imagens
CREATE TABLE IF NOT EXISTS `anuncios_imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anuncio` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.anuncios_imagens: ~10 rows (aproximadamente)
DELETE FROM `anuncios_imagens`;
/*!40000 ALTER TABLE `anuncios_imagens` DISABLE KEYS */;
INSERT INTO `anuncios_imagens` (`id`, `id_anuncio`, `url`) VALUES
	(16, 1, 'd8b3c7b65bae879b7b0f376058712639.jpg'),
	(18, 1, 'ff9664b532155785f4edf6be316d3af3.jpg'),
	(20, 5, 'd4a723565bf274d2ce8a7be1ef77eeb7.jpg'),
	(21, 6, '7555f2627b2adbbb666b777a00417392.jpg'),
	(27, 8, 'ab2bac70744be38cb36aba803e31a22f.jpg'),
	(30, 11, 'e912ec110003ca6b947422e7de5e8ae6.jpg'),
	(32, 1, '0002a21bbd1e6402c86945987c31f840.jpg'),
	(34, 9, 'fcee6366deb486a1feb7ef82d469f72c.jpg'),
	(35, 10, '04751902e09253a60b922dff1280f5e5.jpg'),
	(36, 12, '5b2ba0122b46668b34b4dec147fbd523.jpg');
/*!40000 ALTER TABLE `anuncios_imagens` ENABLE KEYS */;

-- Copiando estrutura para tabela classificados.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.categorias: ~8 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nome`) VALUES
	(1, 'Relógios e Acessórios'),
	(2, 'Roupas e Sapatos'),
	(3, 'Eletrônicos'),
	(4, 'Carros'),
	(5, 'Jogos'),
	(6, 'Aviões'),
	(7, 'Barcos'),
	(8, 'Eletrodomésticos'),
	(9, 'Imóveis'),
	(10, 'Agro e Indústria');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela classificados.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela classificados.usuarios: ~7 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `admin`) VALUES
	(1, 'Douglas Pinheiro Goulart', 'douglaspigoulart@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '+55 (48) 99975-1669', 0),
	(2, 'Dodge Gamer ', 'dodgegamer12@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '48996398622', 0),
	(3, 'Douglas Pinheiro Goulart', 'dodgegamer13@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '48996398622', 0),
	(4, 'Luciana Ramos Pinheiro InÃ¡cio', 'luciana.rpi93@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '48998494650', 0),
	(5, 'Gerson De Souza Inacio', 'gersonsinacio@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '48996398622', 0),
	(6, 'Administrador', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '000000000', 1),
	(7, 'UsuÃ¡rio', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', '000000000', 0),
	(8, 'Dodge Gamer 15 BRO', 'dodgegamer15@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '999999999', 0),
	(9, 'Leandro', 'leandrohetero@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '888888888', 0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
