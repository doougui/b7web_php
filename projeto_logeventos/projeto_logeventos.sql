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


-- Copiando estrutura do banco de dados para projeto_logeventos
CREATE DATABASE IF NOT EXISTS `projeto_logeventos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_logeventos`;

-- Copiando estrutura para tabela projeto_logeventos.historico
CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) DEFAULT NULL,
  `data_acao` datetime DEFAULT NULL,
  `acao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_logeventos.historico: ~3 rows (aproximadamente)
DELETE FROM `historico`;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
INSERT INTO `historico` (`id`, `ip`, `data_acao`, `acao`) VALUES
	(1, '192.168.1.1', '2017-01-01 00:00:00', 'Acessou a página XYZ'),
	(2, '::1', '2019-06-07 19:13:37', 'Entrou na pÃ¡gina inicial...'),
	(3, '::1', '2019-06-07 19:13:52', 'Entrou na página inicial...');
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
