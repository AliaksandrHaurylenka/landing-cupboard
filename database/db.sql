-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица landing-cupboard.advantages
CREATE TABLE IF NOT EXISTS `advantages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `advantages_deleted_at_index` (`deleted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.advantages: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `advantages` DISABLE KEYS */;
INSERT INTO `advantages` (`id`, `photo`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '1562480961-tupicon1.png', 'Качественные материалы и фурнитура', '2019-07-07 06:29:21', '2019-07-07 06:29:21', NULL),
	(2, '1562481028-tupicon237.png', 'Профессиональная и оперативная установка', '2019-07-07 06:30:28', '2019-07-07 06:30:28', NULL),
	(3, '1562481051-tupicon3.png', 'Официальный договор и гарантия', '2019-07-07 06:30:51', '2019-07-07 06:30:51', NULL),
	(4, '1562481096-tupicon4.png', 'Доступные цены', '2019-07-07 06:31:36', '2019-07-07 06:31:36', NULL),
	(5, '1562481107-tupicon5.png', 'Огромное разнообразие цветов и конструкций', '2019-07-07 06:31:47', '2019-07-07 06:31:47', NULL);
/*!40000 ALTER TABLE `advantages` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.catalogs
CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `catalogs_deleted_at_index` (`deleted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.catalogs: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `catalogs` DISABLE KEYS */;
INSERT INTO `catalogs` (`id`, `photo`, `title`, `description`, `type`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%281%29.jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2 створки', 3.00, NULL, '2019-07-08 10:29:51', NULL),
	(2, 'https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%282%29.jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2 створки', 2.00, NULL, '2019-07-08 10:30:14', NULL),
	(3, 'https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%283%29.jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2 створки', 3.00, NULL, '2019-07-08 10:30:31', NULL),
	(4, 'https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%286%29.jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 5.00, NULL, '2019-07-08 10:30:49', NULL),
	(5, 'https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%285%29.jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 3.00, NULL, '2019-07-08 10:31:01', NULL),
	(6, 'https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%284%29.jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 3.00, NULL, '2019-07-08 10:31:14', NULL),
	(7, 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(137).jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2 створки', 4.00, NULL, NULL, NULL),
	(8, 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(134).jpg', 'title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 4.00, NULL, NULL, NULL),
	(11, '1563178252-photo_2019-07-15_09-53-31.jpg', 'Велоспорт', 'Заместитель директора СДЮШОР микрорайона Костюковка города Гомеля', '2 створки', 3.00, '2019-07-15 07:30:22', '2019-07-15 08:10:52', NULL),
	(12, '1563178289-photo_2019-07-15_09-53-39.jpg', 'Плавание', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2 створки', 3.00, '2019-07-15 08:11:29', '2019-07-15 08:11:29', NULL),
	(13, '1563178307-photo_2019-07-15_09-53-42.jpg', 'Борьба', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2 створки', 5.00, '2019-07-15 08:11:47', '2019-07-15 08:11:47', NULL),
	(14, '1563178324-photo_2019-07-15_09-52-40.jpg', 'Костюковка', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 3.00, '2019-07-15 08:12:04', '2019-07-15 08:12:34', NULL),
	(15, '1563178347-photo_2019-07-15_09-53-36.jpg', 'Борьба', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 3.00, '2019-07-15 08:12:27', '2019-07-15 08:12:27', NULL),
	(16, '1563178371-photo_2019-07-15_09-53-44.jpg', 'Плавание', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3 створки', 5.00, '2019-07-15 08:12:51', '2019-07-15 08:12:51', NULL);
/*!40000 ALTER TABLE `catalogs` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_deleted_at_index` (`deleted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.contacts: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `phone`, `phone2`, `email`, `address`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, '+ 375 29 374 91 59 (Vel)', NULL, 'vashshkaf2019@gmail.com', 'г. Гомель, пл. Привокзальная, 1/719', NULL, '2019-07-07 06:45:27', '2019-07-09 08:14:32');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menus_deleted_at_index` (`deleted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.menus: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `title`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Главная', 'glavnaya', '2019-07-07 05:54:15', '2019-07-07 07:06:56', NULL),
	(2, 'Каталог', 'katalog', '2019-07-07 05:54:35', '2019-07-07 07:07:13', NULL),
	(3, 'Проекты', 'proekty', '2019-07-07 05:56:54', '2019-07-07 07:07:17', NULL),
	(4, 'Контакты', 'kontakty', '2019-07-07 05:57:07', '2019-07-07 07:07:21', NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.migrations: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_05_22_225443_create_1558554883_roles_table', 1),
	(4, '2019_05_22_225449_create_1558554888_users_table', 1),
	(5, '2019_05_22_225450_add_5ce5a9102ae50_relationships_to_user_table', 1),
	(6, '2019_07_06_171431_create_1562422471_menus_table', 1),
	(7, '2019_07_06_172309_create_1562422989_slides_table', 1),
	(8, '2019_07_06_172641_create_1562423201_advantages_table', 1),
	(9, '2019_07_06_173051_create_1562423451_catalogs_table', 1),
	(11, '2019_07_06_152108_create_contacts_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.roles: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator (can create other users)', '2019-07-06 15:25:01', '2019-07-06 15:25:01'),
	(2, 'Simple user', '2019-07-06 15:25:01', '2019-07-06 15:25:01');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.slides
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slides_deleted_at_index` (`deleted_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.slides: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `photo`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '1562480749-5-1.jpg', '', '2019-07-07 06:25:50', '2019-07-08 07:38:06', NULL);
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;

-- Дамп структуры для таблица landing-cupboard.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `306997_5ce5a90c648a8` (`role_id`),
  CONSTRAINT `306997_5ce5a90c648a8` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы landing-cupboard.users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$p8CWcQKK548p7GeqQiB4WOey5k15tMfbSy1i/ZQkjHiTvEs3tqPb2', '', '2019-07-06 15:25:01', '2019-07-06 15:25:01', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
