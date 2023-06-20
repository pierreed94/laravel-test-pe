-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: testLaravel
-- ------------------------------------------------------
-- Server version	11.0.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'test','test','test@gmail.com','tr','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nostrum quasi veritatis. Cum debitis eaque earum eligendi esse ex libero magnam placeat tenetur unde. Ab adipisci amet at cum deserunt distinctio dolores ducimus expedita explicabo illo incidunt modi nobis optio placeat possimus repellat sed sequi soluta sunt suscipit tenetur, velit?','2023-06-19 19:37:14','2023-06-19 19:37:14'),(2,'test','testtest','test@yest.fr','tt','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad adipisci aspernatur consequatur deleniti deserunt ducimus error facilis iusto minus, modi molestias natus obcaecati provident quo ratione, repellat sed sint tempore voluptatem! Atque blanditiis eaque eos omnis ratione sequi sint? Consequatur doloribus fugit id quia quos repellendus voluptas! Voluptate, voluptatem?','2023-06-19 23:27:09','2023-06-19 23:27:09');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (6,'2023_06_16_135520_products',2),(27,'2023_06_16_160345_create_contact_table',3),(99,'2014_10_12_000000_create_users_table',4),(100,'2014_10_12_100000_create_password_reset_tokens_table',4),(101,'2019_08_19_000000_create_failed_jobs_table',4),(102,'2019_12_14_000001_create_personal_access_tokens_table',4),(103,'2023_06_16_120658_create_products_table',4),(104,'2023_06_16_160345_create_contacts_table',4),(105,'2023_06_19_205024_create_sessions_table',4),(106,'2023_06_20_005559_add_role_to_users',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `drop` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_name_unique` (`name`),
  UNIQUE KEY `product_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Chaussure 1','in-aperiam-ut-et-ab-voluptatem-facilis-impedit','Quo voluptas in aut assumenda nam eos vitae. Nihil quo necessitatibus sit amet sit.','Et quibusdam suscipit velit amet voluptas. Nostrum est illo et a eius. Alias dolores commodi suscipit quia ut a. Ut nam temporibus esse pariatur non doloribus aperiam ex. Sapiente ea repellendus nam quibusdam. Est excepturi sunt nobis. Cum et autem quis. Voluptatem modi quam consequuntur eius. Quaerat tempore qui ratione quis sed aut. Cupiditate accusantium facilis quo pariatur soluta. Inventore magnam incidunt magnam neque delectus aliquam sed.',4,161,4,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(2,'Chaussure 2','veritatis-neque-corrupti-rerum','Dolor et omnis nisi tempora. Et voluptas tenetur aspernatur modi repudiandae. Dicta labore quos voluptatem et quis at.','Voluptas autem consequatur quo reiciendis asperiores aut. Consequatur reprehenderit quas explicabo commodi iure. Officiis magnam a delectus. Architecto sint libero ut officiis tenetur dolorem velit. Velit quae sapiente sit id et. Quasi consequatur enim voluptatum omnis impedit porro dolores. Et ea est id praesentium eos natus id. Aut error incidunt dolorum magnam nemo. Laboriosam enim soluta occaecati odit tenetur.',7,94,6,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(3,'Chaussure 3','consequatur-animi-facere-et-quaerat-excepturi-ut','Quia suscipit eos in mollitia cum rerum. Modi cupiditate veniam consequatur perspiciatis aut quia molestiae.','Atque reprehenderit aperiam dolores velit consequatur. Laboriosam nulla similique et repellendus mollitia. Laudantium quis sit dolor ipsam. Deleniti ut sapiente similique qui. Rerum nisi est illo commodi omnis corporis dolore. Ex labore voluptatem est sunt. Minima excepturi sit tempore laboriosam in. Voluptas praesentium quia aut qui quas. Reprehenderit quos earum aut modi consectetur exercitationem. In aspernatur neque et enim autem. Deserunt eligendi ut doloremque sed.',12,169,6,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(4,'Chaussure 4','error-maxime-nemo-maxime-quia-ex-exercitationem-qui','Assumenda esse reprehenderit enim nemo quam atque. Est beatae optio esse eos eius aut.','Modi quas tempore at incidunt maiores ab. Molestiae quis nemo facere suscipit suscipit natus. Quisquam tempora inventore voluptatem fugit adipisci. In harum animi facere. Expedita modi facere vel a. Nisi adipisci error nesciunt eos accusantium. Et aliquam dicta perspiciatis accusantium omnis recusandae tempore. Eos aut autem delectus sunt consectetur est. Veniam quidem eos ut qui illum.',5,98,3,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(5,'Chaussure 5','impedit-voluptas-laudantium-quae-explicabo-consectetur-et-dolorem','Dolorem omnis provident accusamus officia at. In est assumenda repudiandae sit.','Consequatur porro aut ex molestias. Eligendi illo autem tempore sit ex. Porro ipsam magni nisi nobis dolorum laboriosam. Aliquam quaerat et est occaecati quas. Autem eveniet quidem et ipsum molestiae qui quis. Modi doloribus aut sed animi temporibus. Voluptatem repellat tempore aut voluptate velit tempore quisquam. Aut eveniet nihil blanditiis omnis et. Velit fuga dolore numquam illo ut. Qui est rerum magnam voluptatem neque et sunt. Aperiam delectus laudantium dolorem accusamus.',11,145,3,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(6,'Chaussure 6','explicabo-quas-eligendi-beatae-molestiae-aut-eum-labore','Ut inventore quis sint ut. Dolorem vel aliquam ut. Voluptatem id quo placeat.','Eum facilis fugiat eaque eum iste. Illo vitae molestiae rerum quos. Consequatur voluptatem similique ea. Fugiat sunt nulla voluptatibus autem quidem hic. Dolores facere officia magnam commodi sed quia est. Ex delectus quo voluptatibus animi deserunt. In praesentium odit laboriosam odit architecto voluptatibus omnis. Minima cumque aperiam in asperiores rerum.',9,153,10,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(7,'Chaussure 7','expedita-animi-nihil-corrupti-veritatis','Facilis dolore eos quos neque totam. Eius sit voluptates ut sit a natus.','Veniam nobis facere aut cupiditate. Reprehenderit voluptatem odit dolores veniam nam ea mollitia. Perferendis eius quo et earum recusandae doloremque. Velit sit quia cum sunt sed. Omnis accusamus nemo mollitia hic. Fuga nam est quo eligendi. Dolorem rem aut dolore quam. Beatae excepturi voluptatem quibusdam aliquam eius corrupti. Perferendis eligendi harum natus iste ullam magnam deserunt voluptatibus. Dignissimos veritatis culpa qui nesciunt aliquid.',4,94,6,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(8,'Chaussure 8','unde-nihil-perspiciatis-non-nisi-ut-odit-eveniet','Rem enim odio et qui. Dolores sint saepe ex velit non sed ipsa. Nihil id et repellat voluptates aliquid.','Sed natus corporis facere vel exercitationem et illum. Eius harum corporis et soluta voluptatem deserunt. Modi fuga ipsa eos consequatur quis quos. Culpa recusandae ea laborum quas quo explicabo distinctio. Saepe eum enim ex et exercitationem. Et itaque modi sint ex dolore ut quia sed. Laborum quo totam veniam sit. Velit at quia labore ea. Minus voluptatem itaque quisquam repellendus nemo esse amet.',12,158,9,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(9,'Chaussure 9','ea-voluptatem-non-et-aut-ut','Dolor eum deleniti quos. Quam voluptatem est aut quis quod vitae alias praesentium. Quia numquam facere dolor facilis.','Rerum officiis labore omnis dolorem laboriosam tempore. Harum quae ut optio tenetur dicta nostrum. Voluptas vero et laudantium aut. Doloribus quibusdam aliquam et id consequatur omnis distinctio. Ut consequatur incidunt est necessitatibus et aut accusantium. Dolor voluptatem cumque rerum quo fugit. Quod ullam rerum ad voluptas quo iusto ut.',6,94,9,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(10,'Chaussure 10','minima-aspernatur-eius-sequi-exercitationem-dolorem-porro','Aut mollitia libero repudiandae. Quia ullam similique impedit sequi. Quae nemo omnis eum minus provident perferendis.','Ducimus tempora sit a expedita ab. Odio molestiae architecto in. Deleniti nihil aut minima laudantium incidunt. Voluptatem illo aut quis aut quia reprehenderit. Dolores rem omnis dolor facilis qui laboriosam eligendi. Odio veniam explicabo fugiat labore voluptatem. In debitis nisi eos sit rem. Error fugiat commodi omnis iste non. Esse ut natus quos molestiae et accusamus sunt. Facilis odio debitis non.',8,79,8,'2023-06-19 19:27:12','2023-06-19 19:27:12'),(26,'Nouveaux produit','nouveaux-produit','je suis le descriptif du produit',NULL,NULL,2,2,'2023-06-20 06:00:43','2023-06-20 06:00:43');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'john','john@doe.fr',NULL,'$2y$10$0o.qVrzBDe9QlJ3rK5FxKuNzpVu43u52E0ml/72SxcWqlqyro13fa',NULL,'2023-06-19 20:33:25','2023-06-19 20:33:25','admin'),(15,'Tessier','pierreedouard.tessier@gmail.com',NULL,'$2y$10$4QBiJ39Prm34l8ounK9d9eJ1mkY8yZrvdylrgH5K4O33gfmQqmjmC',NULL,'2023-06-19 23:14:12','2023-06-19 23:14:12','user'),(16,'pister','pistertst@gmail.com',NULL,'$2y$10$ho6wZM/sQJcoLRsV/Dau3eXrjSLnnCyc9ZwgctBzVjggoKPtHVpwi',NULL,'2023-06-20 05:51:39','2023-06-20 05:51:39','user'),(17,'Test user','testuser@gmail.com',NULL,'$2y$10$cAuwXdx2NJc5k3fK9Hxo0.jYI5Ch4XQveBxS6lkCMuyKLVg.nPlRC',NULL,'2023-06-20 05:54:54','2023-06-20 05:54:54','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-20 12:46:35
