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


-- Copiando estrutura do banco de dados para projeto_comentarios
CREATE DATABASE IF NOT EXISTS `projeto_comentarios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_comentarios`;

-- Copiando estrutura para tabela projeto_comentarios.mensagens
CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data_msg` datetime DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `msg` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_comentarios.mensagens: ~8 rows (aproximadamente)
DELETE FROM `mensagens`;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` (`id`, `data_msg`, `nome`, `msg`) VALUES
	(1, '2017-06-05 17:57:03', 'Bonieky', 'Testando 1,2,3...'),
	(2, '2017-06-05 17:57:14', 'Paulo', 'Eu vi seu teste.'),
	(3, '2017-06-05 17:57:31', 'Bonieky', 'E foi? Que legal cara!'),
	(4, '2017-06-05 17:57:46', 'Pedro', 'Pessoal, viram o que foi feito?'),
	(5, '2019-06-07 19:42:14', 'Douglas', 'Pois é, que loko bicho!'),
	(6, '2019-06-07 19:43:00', 'Pedro', 'Verdade man, mucho loko mermo'),
	(7, '2019-06-07 19:43:27', 'Bonieky', 'Esse sistema é muito topperson');
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
