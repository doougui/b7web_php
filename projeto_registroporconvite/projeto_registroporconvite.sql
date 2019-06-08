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


-- Copiando estrutura do banco de dados para projeto_registroporconvite
CREATE DATABASE IF NOT EXISTS `projeto_registroporconvite` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_registroporconvite`;

-- Copiando estrutura para tabela projeto_registroporconvite.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `codigo` varchar(32) DEFAULT '',
  `registros` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_registroporconvite.usuarios: ~5 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `codigo`, `registros`) VALUES
	(1, 'suporte@b7web.com.br', '698dc19d489c4e4db73e28a713eab07b', 'aklsjrl1k2j40812j489jlajkshr', 0),
	(2, 'fulano@hotmail.com', '698dc19d489c4e4db73e28a713eab07b', 'clvkjhlkcdjyjdfy0t8395u2l', 0),
	(4, 'teste@hotmail.com', '698dc19d489c4e4db73e28a713eab07b', 'mzxncmnzxlcz98xc79', 0),
	(5, 'novocara@hotmail.com', '202cb962ac59075b964b07152d234b70', '93da25bf3e12609c0bc50e42362be2b5', 0),
	(6, 'pessoa@gmail.com', '202cb962ac59075b964b07152d234b70', 'f7ee9e9a757561e3c9b2fee07d78a914', 0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
