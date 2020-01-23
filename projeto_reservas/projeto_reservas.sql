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


-- Copiando estrutura do banco de dados para projeto_reservas
CREATE DATABASE IF NOT EXISTS `projeto_reservas` /*!40100 DEFAULT CHARACTER SET latin2 */;
USE `projeto_reservas`;

-- Copiando estrutura para tabela projeto_reservas.carros
CREATE TABLE IF NOT EXISTS `carros` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_reservas.carros: ~5 rows (aproximadamente)
DELETE FROM `carros`;
/*!40000 ALTER TABLE `carros` DISABLE KEYS */;
INSERT INTO `carros` (`id`, `nome`) VALUES
	(1, 'Palio'),
	(2, 'Voyage'),
	(3, 'Corolla'),
	(4, 'Hilux'),
	(5, 'Camaro');
/*!40000 ALTER TABLE `carros` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_reservas.reservas
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_carro` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `pessoa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_reservas.reservas: ~7 rows (aproximadamente)
DELETE FROM `reservas`;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
INSERT INTO `reservas` (`id`, `id_carro`, `data_inicio`, `data_fim`, `pessoa`) VALUES
	(1, 2, '2017-01-05', '2017-01-10', 'Bonieky'),
	(2, 4, '2017-01-07', '2017-01-08', 'Paulo'),
	(3, 2, '2017-01-01', '2017-01-04', 'Pedro'),
	(4, 2, '2017-01-11', '2017-01-13', 'Henrique'),
	(5, 4, '2017-01-01', '2017-01-06', 'Fulano'),
	(7, 1, '2019-02-26', '2019-02-28', 'Douglas'),
	(8, 1, '2019-01-13', '2019-01-19', 'Julio');
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
