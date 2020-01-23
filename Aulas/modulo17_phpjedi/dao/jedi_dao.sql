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


-- Copiando estrutura do banco de dados para jedi_dao
CREATE DATABASE IF NOT EXISTS `jedi_dao` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jedi_dao`;

-- Copiando estrutura para tabela jedi_dao.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela jedi_dao.usuario: 8 rows
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `name`, `email`, `pass`) VALUES
	(1, 'Douglas', 'douglaspigoulart@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(2, 'Fulano', 'fulano@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(3, 'Ciclano', 'ciclano@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(4, 'Beltrano', 'beltrano@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(5, 'Beltrano', 'beltrano@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(6, 'Beltrano', 'beltrano@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(7, 'Bonieky', 'bonieky@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(8, 'JosÃ©', 'jose@gmail.com', '698dc19d489c4e4db73e28a713eab07b');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
