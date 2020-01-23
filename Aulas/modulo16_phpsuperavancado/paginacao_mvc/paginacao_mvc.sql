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


-- Copiando estrutura do banco de dados para paginacao_mvc
CREATE DATABASE IF NOT EXISTS `paginacao_mvc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `paginacao_mvc`;

-- Copiando estrutura para tabela paginacao_mvc.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela paginacao_mvc.items: 55 rows
DELETE FROM `items`;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `title`) VALUES
	(1, 'item0'),
	(2, 'item1'),
	(3, 'item2'),
	(4, 'item3'),
	(5, 'item4'),
	(6, 'item5'),
	(7, 'item6'),
	(8, 'item7'),
	(9, 'item8'),
	(10, 'item9'),
	(11, 'item10'),
	(12, 'item11'),
	(13, 'item12'),
	(14, 'item13'),
	(15, 'item14'),
	(16, 'item15'),
	(17, 'item16'),
	(18, 'item17'),
	(19, 'item18'),
	(20, 'item19'),
	(21, 'item20'),
	(22, 'item21'),
	(23, 'item22'),
	(24, 'item23'),
	(25, 'item24'),
	(26, 'item25'),
	(27, 'item26'),
	(28, 'item27'),
	(29, 'item28'),
	(30, 'item29'),
	(31, 'item30'),
	(32, 'item31'),
	(33, 'item32'),
	(34, 'item33'),
	(35, 'item34'),
	(36, 'item35'),
	(37, 'item36'),
	(38, 'item37'),
	(39, 'item38'),
	(40, 'item39'),
	(41, 'item40'),
	(42, 'item41'),
	(43, 'item42'),
	(44, 'item43'),
	(45, 'item44'),
	(46, 'item45'),
	(47, 'item46'),
	(48, 'item47'),
	(49, 'item48'),
	(50, 'item49'),
	(51, 'item50'),
	(52, 'item51'),
	(53, 'item52'),
	(54, 'item53'),
	(55, 'item54');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
