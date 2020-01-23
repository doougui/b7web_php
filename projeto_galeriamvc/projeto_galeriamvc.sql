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


-- Copiando estrutura do banco de dados para projeto_galeriamvc
CREATE DATABASE IF NOT EXISTS `projeto_galeriamvc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_galeriamvc`;

-- Copiando estrutura para tabela projeto_galeriamvc.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_galeriamvc.fotos: 5 rows
DELETE FROM `fotos`;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` (`id`, `titulo`, `url`) VALUES
	(1, 'Título de Teste', 'wolf.jpg'),
	(2, 'Título de Teste 2', 'wolf.jpg'),
	(9, 'Xbox 360', 'b8bb864158144c4bd37bd49d413419e1.jpg'),
	(8, 'Urso Sem Curso', 'c0dd286d50d37eae9df8267a0708e8fb.jpg'),
	(7, 'Gatíneo', '6979274568157ef3ec2d53836bb9be58.jpg');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
