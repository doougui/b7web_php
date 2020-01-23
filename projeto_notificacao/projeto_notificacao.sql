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


-- Copiando estrutura do banco de dados para projeto_notificacao
CREATE DATABASE IF NOT EXISTS `projeto_notificacao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_notificacao`;

-- Copiando estrutura para tabela projeto_notificacao.notificacoes
CREATE TABLE IF NOT EXISTS `notificacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `data_notificacao` datetime DEFAULT NULL,
  `notificacao_tipo` varchar(50) NOT NULL,
  `propriedades` text,
  `lido` tinyint(1) NOT NULL DEFAULT '0',
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_notificacao.notificacoes: 11 rows
DELETE FROM `notificacoes`;
/*!40000 ALTER TABLE `notificacoes` DISABLE KEYS */;
INSERT INTO `notificacoes` (`id`, `id_user`, `data_notificacao`, `notificacao_tipo`, `propriedades`, `lido`, `link`) VALUES
	(1, 1, NULL, 'MSG', '{"msg":"Mensagem de teste"}', 1, 'http://www.google.com.br/'),
	(2, 1, NULL, 'MSG', '{"msg":"Mensagem de teste"}', 0, 'http://www.google.com.br/'),
	(3, 1, NULL, 'MSG', '{"msg":"Mensagem de teste"}', 1, 'http://www.google.com.br/'),
	(4, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(5, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(6, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(7, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(8, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(9, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(10, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123'),
	(11, 1, NULL, 'CURTIDA', '{"curtidor":2,"id_foto":123}', 0, 'http://localhost/galeria/abrir/123');
/*!40000 ALTER TABLE `notificacoes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
