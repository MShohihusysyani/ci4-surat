-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ci4_surat.akses
CREATE TABLE IF NOT EXISTS `akses` (
  `id_akses` int NOT NULL AUTO_INCREMENT,
  `id_level` int NOT NULL,
  `id_menu` int NOT NULL,
  `id_submenu` int NOT NULL,
  PRIMARY KEY (`id_akses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ci4_surat.akses: ~0 rows (approximately)

-- Dumping structure for table ci4_surat.level
CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(256) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ci4_surat.level: ~0 rows (approximately)

-- Dumping structure for table ci4_surat.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL DEFAULT 'Non',
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ci4_surat.menu: ~0 rows (approximately)

-- Dumping structure for table ci4_surat.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ci4_surat.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2024-08-28-070001', 'App\\Database\\Migrations\\User', 'default', 'App', 1724828634, 1),
	(3, '2024-09-02-014021', 'App\\Database\\Migrations\\Menu', 'default', 'App', 1725241237, 3),
	(4, '2024-09-02-014137', 'App\\Database\\Migrations\\SubMenu', 'default', 'App', 1725241523, 4),
	(5, '2024-09-02-015022', 'App\\Database\\Migrations\\Akses', 'default', 'App', 1725241963, 5),
	(6, '2024-09-02-015501', 'App\\Database\\Migrations\\Level', 'default', 'App', 1725242200, 6);

-- Dumping structure for table ci4_surat.sub_menu
CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id_submenu` int NOT NULL AUTO_INCREMENT,
  `id_menu` int NOT NULL,
  `nama_submenu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `ikon` varchar(50) NOT NULL,
  PRIMARY KEY (`id_submenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ci4_surat.sub_menu: ~0 rows (approximately)

-- Dumping structure for table ci4_surat.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(256) NOT NULL,
  `nama_alias` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table ci4_surat.user: ~1 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `nama_alias`, `role`) VALUES
	(1, 'superadmin', 'password', 'Superadmin', 'superadmin', 'superadmin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
