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


-- Copiando estrutura do banco de dados para projeto_controledeusuarios
CREATE DATABASE IF NOT EXISTS `projeto_controledeusuarios` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_controledeusuarios`;

-- Copiando estrutura para tabela projeto_controledeusuarios.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_controledeusuarios.usuarios: 0 rows
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'Bonieky', 'abc@hotmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(2, 'Fulano', 'fulano@hotmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(3, 'Ciclano', 'ciclano@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(4, 'Beltrano', 'beltrano@yahoo.com.br', '698dc19d489c4e4db73e28a713eab07b'),
	(5, 'Testador', 'teste@hotmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(6, 'Douglas', 'douglaspigoulart@gmail.com', '698dc19d489c4e4db73e28a713eab07b');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
