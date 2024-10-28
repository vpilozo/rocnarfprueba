/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_rocnarf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rocnarf` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_rocnarf`;

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache` */

/*Table structure for table `cache_locks` */

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache_locks` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `job_batches` */

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_batches` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pertenece` int(10) DEFAULT NULL,
  `controlador` varchar(20) DEFAULT NULL,
  `funcion` varchar(20) DEFAULT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`nombre`,`created_at`,`updated_at`,`id_pertenece`,`controlador`,`funcion`,`imagen`) values 
(1,'Tienda','2024-10-23 22:00:55','2024-10-23 22:49:20',NULL,NULL,NULL,NULL),
(2,'Producto','2024-10-23 22:01:07','2024-10-23 22:49:28',NULL,'producto',NULL,NULL),
(3,'Categorías','2024-10-23 22:21:25','2024-10-23 22:50:16',2,'producto','categorias',NULL),
(4,'Usos','2024-10-23 22:21:31','2024-10-23 22:49:42',2,'producto','usos',NULL),
(5,'Tipo de Piel','2024-10-23 22:21:38','2024-10-23 22:50:43',2,'producto','tipo_piel',NULL),
(7,'Limpieza','2024-10-23 23:02:46','2024-10-24 23:01:37',3,'categorias','limpieza','categoria-Limpieza'),
(8,'Hidratacion','2024-10-23 23:03:07','2024-10-24 23:19:08',3,'categorias','hidratacion','categoria-Hidratacion'),
(9,'Protecciòn','2024-10-24 21:39:24','2024-10-24 22:58:02',3,'categorias','proteccion','categoria-proteccion'),
(10,'Proage','2024-10-24 21:39:38','2024-10-24 23:02:57',3,'categorias','proage','categoria-Proage'),
(11,'Acne Control','2024-10-24 21:39:50','2024-10-24 23:05:28',3,'categorias','acne_control','categoria-acne'),
(12,'Sets','2024-10-24 21:39:57','2024-10-24 22:13:36',3,'categorias','sets',NULL),
(13,'Manchas','2024-10-24 21:42:13','2024-10-24 21:43:39',4,'usos','manchas',NULL),
(14,'Ojeras','2024-10-24 21:42:20','2024-10-24 21:43:45',4,'usos','ojeras',NULL),
(15,'Arrugas','2024-10-24 21:42:30','2024-10-24 21:43:49',4,'usos','arrugas',NULL),
(16,'Acnè','2024-10-24 21:42:40','2024-10-24 21:43:56',4,'usos','acne',NULL),
(18,'Normal','2024-10-24 21:44:32','2024-10-24 21:45:57',5,'tipo_piel','normal',NULL),
(19,'Seca','2024-10-24 21:44:36','2024-10-24 21:46:01',5,'tipo_piel','seca',NULL),
(20,'Mixta','2024-10-24 21:44:43','2024-10-24 21:46:06',5,'tipo_piel','mixta',NULL),
(21,'Grasa','2024-10-24 21:44:48','2024-10-24 21:46:10',5,'tipo_piel','grasa',NULL),
(22,'Tendencia Acnèica','2024-10-24 21:45:11','2024-10-24 21:46:22',5,'tipo_piel','tendencia_acneica',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 1,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_usuariocrea` int(11) DEFAULT NULL,
  `id_usuariomod` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo` varchar(100) DEFAULT NULL,
  `oferta` double DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `productos` */

insert  into `productos`(`id`,`nombre`,`precio`,`estado`,`descripcion`,`id_usuariocrea`,`id_usuariomod`,`created_at`,`updated_at`,`tipo`,`oferta`,`imagen`) values 
(1,'LIFTING SERUM',21.57,1,'Proage | Todo tipo de piel',NULL,NULL,'2024-10-25 23:39:35','2024-10-25 23:55:38','Sérum Tensor',NULL,'nuevo-producto-lifting-serum.jpg'),
(2,'SUNSCREEN 50+',24.64,1,'Protección | Todo tipo de piel',NULL,NULL,'2024-10-25 23:40:47','2024-10-25 23:55:44','Bloqueador Solar',NULL,'Sunscreen-50-BioFemme.jpg'),
(3,'BIO BEAUTY OIL',16.42,1,'Hidratación | Todo tipo de piel',NULL,NULL,'2024-10-25 23:42:34','2024-10-25 23:55:08','Aceite Seco Hidratante',NULL,'BBOIL-300x300.jpg'),
(4,'BIOFEMME MINI KIT',20.7,1,'Sets | Piel mixta a grasa',NULL,NULL,'2024-10-25 23:42:59','2024-10-25 23:55:23','Mini Sizes',15,'Mini-Kit-Precio-PROMO.jpg');

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('KQRx0AUY5hWKiqN0ccz2M19ID2WJTtRfTAGw0VAG',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVltajBoRVFIalRmQ1NXNXM5TnprY1JIeUhaZHpiRlE0RndWSk9sWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1730006434),
('UZpO5ConenwnrG0ufPmQei7o2WjCpS4gKqVbOwM5',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:131.0) Gecko/20100101 Firefox/131.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWxNRG13RUFHdHc1STRpWU8zTXJONVFmSXlpTTZxMm1IT3JZUkpyTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0by9kZXRhbGxlLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1730030147),
('W4KnxZNVpZHl2c2RUS9eltrGpDewCUWnQM5J1Hd7',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiblJWSVJXdjJVZXFCZm9CRndYN0F4U05pUXNJd2k4N1ZRcEMzU0Y2YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0by9kZXRhbGxlLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1730008165);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
