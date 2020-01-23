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


-- Copiando estrutura do banco de dados para crud
CREATE DATABASE IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud`;

-- Copiando estrutura para tabela crud.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `cd_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nm_pessoa` varchar(55) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `vl_salario` double DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela crud.pessoa: ~6 rows (aproximadamente)
DELETE FROM `pessoa`;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`cd_pessoa`, `nm_pessoa`, `vl_salario`) VALUES
	(2, '\0Jorge', 4234),
	(3, '\0Jorge', 4234),
	(5, '\0Ranieri', 400),
	(7, 'Paul', 2344),
	(10, 'Lucas', 5674),
	(12, 'Ranieri', 23);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
