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


-- Copiando estrutura do banco de dados para projeto_esqueciasenha
CREATE DATABASE IF NOT EXISTS `projeto_esqueciasenha` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_esqueciasenha`;

-- Copiando estrutura para tabela projeto_esqueciasenha.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_esqueciasenha.usuarios: ~3 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
	(1, 'suporte@b7web.com.br', '698dc19d489c4e4db73e28a713eab07b'),
	(2, 'fulano@hotmail.com', 'df6d2338b2b8fce1ec2f6dda0a630eb0'),
	(3, 'douglaspigoulart@gmail.com', '50be5c78ebddacfe1831a604012c3776');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_esqueciasenha.usuarios_token
CREATE TABLE IF NOT EXISTS `usuarios_token` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `hash` varchar(32) DEFAULT NULL,
  `used` tinyint(1) DEFAULT '0',
  `expirado_em` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_esqueciasenha.usuarios_token: ~6 rows (aproximadamente)
DELETE FROM `usuarios_token`;
/*!40000 ALTER TABLE `usuarios_token` DISABLE KEYS */;
INSERT INTO `usuarios_token` (`id`, `id_usuario`, `hash`, `used`, `expirado_em`) VALUES
	(2, 1, '2f89f097c8b49ea6e5899a10d24c0746', 0, '2017-09-25 08:39:00'),
	(3, 1, '87d88d23f31abe9318e6bdb78b352667', 1, '2017-09-25 08:48:00'),
	(4, 1, '70c65e0ca5eebff926a72d6cc2b95030', 1, '2017-09-25 08:49:00'),
	(5, 2, '59dc87b2d9b424f93c49adb2406e387e', 1, '2017-09-25 08:49:00'),
	(6, 2, 'fbf84d83e0d5343256efac3b25cda846', 0, '2019-06-09 20:52:00'),
	(7, 3, '42e3959e6eb72d30849eb8120a07cce4', 1, '2019-06-09 20:53:00');
/*!40000 ALTER TABLE `usuarios_token` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
