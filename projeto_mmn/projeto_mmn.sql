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


-- Copiando estrutura do banco de dados para projeto_mmn
CREATE DATABASE IF NOT EXISTS `projeto_mmn` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_mmn`;

-- Copiando estrutura para tabela projeto_mmn.patentes
CREATE TABLE IF NOT EXISTS `patentes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '',
  `min` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_mmn.patentes: ~5 rows (aproximadamente)
DELETE FROM `patentes`;
/*!40000 ALTER TABLE `patentes` DISABLE KEYS */;
INSERT INTO `patentes` (`id`, `nome`, `min`) VALUES
	(1, 'Iniciante', 0),
	(2, 'Junior', 1),
	(3, 'Diretor', 3),
	(4, 'Diretor Sênior', 5),
	(5, 'Executivo', 10);
/*!40000 ALTER TABLE `patentes` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_mmn.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_pai` int(11) DEFAULT NULL,
  `patente` int(11) NOT NULL DEFAULT '1',
  `nome` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `senha` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_mmn.usuarios: ~8 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `id_pai`, `patente`, `nome`, `email`, `senha`) VALUES
	(1, NULL, 4, 'Sistema', 'sistema@hotmail.com', '202cb962ac59075b964b07152d234b70'),
	(2, 1, 1, 'Fulano', 'fulano@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(3, 1, 4, 'Cicrano', 'cicrano@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(4, 3, 3, 'Paulo', 'paulo@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(5, 3, 1, 'Pedro', 'pedro@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(6, 4, 2, 'João', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(7, 6, 2, 'Pedrinho', 'pedrinho@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(8, 7, 1, 'Roberto', 'roberto@gmail.com', '202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
