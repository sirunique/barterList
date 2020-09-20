-- MySQL dump 10.16  Distrib 10.1.39-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: barterlist
-- ------------------------------------------------------
-- Server version	10.1.39-MariaDB

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
-- Table structure for table `admin_docs`
--

DROP TABLE IF EXISTS `admin_docs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_docs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_docs`
--

LOCK TABLES `admin_docs` WRITE;
/*!40000 ALTER TABLE `admin_docs` DISABLE KEYS */;
INSERT INTO `admin_docs` VALUES (1,'Dashboard','The Admin Dashboard is the Business Logic that speaks all what is in the application, i.e, it gives detail info of prospective users, count product/services added.','2020-09-16 12:44:25','2020-09-16 12:44:25');
/*!40000 ALTER TABLE `admin_docs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Admin','admin@gmail.com','$2y$10$78/qXA5Ow7021C8ivu0hyuvy3Po9AV8EQ6nUxk17AoVczPMoWJyqu','2020-09-12 19:35:31','2020-09-12 19:35:31');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Automobile','2020-09-18 18:58:03','2020-09-18 18:58:03'),(2,'Furniture','2020-09-18 18:58:03','2020-09-18 18:58:03'),(3,'Mobiles','2020-09-18 18:58:03','2020-09-18 18:58:03'),(4,'Truck','2020-09-18 18:58:03','2020-09-18 18:58:03'),(5,'Home Appliance','2020-09-18 18:58:03','2020-09-18 18:58:03');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `flag` int(11) NOT NULL,
  `wikiDataId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `native` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emoji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emojiU` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `flag` int(11) NOT NULL,
  `wikiDataId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genders`
--

LOCK TABLES `genders` WRITE;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` VALUES (1,'Male','2020-09-10 16:16:46','2020-09-10 16:16:46'),(2,'Female','2020-09-10 16:16:46','2020-09-10 16:16:46'),(6,'Transgender','2020-09-11 23:29:17','2020-09-11 23:29:17');
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `images_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dataid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`images_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_conditions`
--

DROP TABLE IF EXISTS `item_conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_conditions` (
  `id` bigint(20) unsigned NOT NULL,
  `itemcondition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_conditions`
--

LOCK TABLES `item_conditions` WRITE;
/*!40000 ALTER TABLE `item_conditions` DISABLE KEYS */;
INSERT INTO `item_conditions` VALUES (1,'New',NULL,NULL),(2,'Used',NULL,NULL);
/*!40000 ALTER TABLE `item_conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marital_statuses`
--

DROP TABLE IF EXISTS `marital_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marital_statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marital_statuses`
--

LOCK TABLES `marital_statuses` WRITE;
/*!40000 ALTER TABLE `marital_statuses` DISABLE KEYS */;
INSERT INTO `marital_statuses` VALUES (1,'Married','2020-09-10 16:25:22','2020-09-10 16:25:22'),(2,'Single','2020-09-10 16:25:22','2020-09-10 16:25:22'),(3,'Divorce','2020-09-10 16:25:22','2020-09-10 16:25:22'),(4,'Widow','2020-09-10 16:25:22','2020-09-10 16:25:22'),(6,'Undisclosed','2020-09-12 00:32:01','2020-09-12 00:32:01');
/*!40000 ALTER TABLE `marital_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_09_01_130445_create_genders_table',1),(4,'2020_09_01_130728_create_marital_statuses_table',1),(5,'2020_09_01_130940_create_regions_table',1),(6,'2020_09_01_130954_create_states_table',1),(7,'2020_09_01_131005_create_countries_table',1),(8,'2020_09_01_132115_create_cities_table',1),(9,'2020_09_02_113025_create_service_types_table',1),(10,'2020_09_02_113155_create_shipping_types_table',1),(11,'2020_09_02_113348_create_trades_table',1),(12,'2020_09_02_113854_create_offers_table',1),(13,'2020_09_02_113913_create_offer_details_table',1),(14,'2020_09_02_114200_create_trade_types_table',1),(15,'2020_09_02_114644_create_trade_statuses_table',1),(16,'2020_09_03_102519_create_admins_table',1),(17,'2020_09_10_113158_create_images_table',2),(18,'2020_09_16_114828_create_user_docs_table',2),(19,'2020_09_16_114845_create_admin_docs_table',2),(20,'2020_09_18_184533_create_categories_table',3),(21,'2020_09_18_184737_add_categoryid_to_trades',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer_details`
--

DROP TABLE IF EXISTS `offer_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offer_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `offerheaderid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer_details`
--

LOCK TABLES `offer_details` WRITE;
/*!40000 ALTER TABLE `offer_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `offer_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `buyerid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offers`
--

LOCK TABLES `offers` WRITE;
/*!40000 ALTER TABLE `offers` DISABLE KEYS */;
/*!40000 ALTER TABLE `offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_types`
--

DROP TABLE IF EXISTS `service_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `servicetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_types`
--

LOCK TABLES `service_types` WRITE;
/*!40000 ALTER TABLE `service_types` DISABLE KEYS */;
INSERT INTO `service_types` VALUES (1,'product','2020-09-03 10:35:10','2020-09-03 10:35:10'),(2,'service','2020-09-03 10:35:10','2020-09-03 10:35:10'),(4,'Lending','2020-09-11 23:36:54','2020-09-11 23:36:54');
/*!40000 ALTER TABLE `service_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_types`
--

DROP TABLE IF EXISTS `shipping_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shippingType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_types`
--

LOCK TABLES `shipping_types` WRITE;
/*!40000 ALTER TABLE `shipping_types` DISABLE KEYS */;
INSERT INTO `shipping_types` VALUES (1,'Fixed','2020-09-03 10:35:10','2020-09-03 10:35:10'),(2,'Based on Destination','2020-09-03 10:35:10','2020-09-03 10:35:10'),(4,'DHL','2020-09-11 23:59:12','2020-09-11 23:59:12'),(5,'Acknowledge','2020-09-12 00:06:45','2020-09-12 00:06:45');
/*!40000 ALTER TABLE `shipping_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `country_code` int(11) NOT NULL,
  `fips_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `flag` int(11) NOT NULL,
  `wikiDataId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trade_statuses`
--

DROP TABLE IF EXISTS `trade_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trade_statuses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade_statuses`
--

LOCK TABLES `trade_statuses` WRITE;
/*!40000 ALTER TABLE `trade_statuses` DISABLE KEYS */;
INSERT INTO `trade_statuses` VALUES (1,'Pending','2020-09-03 10:35:10','2020-09-03 10:35:10'),(2,'Accept','2020-09-03 10:35:10','2020-09-03 10:35:10');
/*!40000 ALTER TABLE `trade_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trade_types`
--

DROP TABLE IF EXISTS `trade_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trade_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trade_types`
--

LOCK TABLES `trade_types` WRITE;
/*!40000 ALTER TABLE `trade_types` DISABLE KEYS */;
INSERT INTO `trade_types` VALUES (1,'Trade','2020-09-03 10:35:10','2020-09-03 10:35:10'),(2,'Buy','2020-09-03 10:35:10','2020-09-03 10:35:10'),(4,'Price','2020-09-12 00:22:51','2020-09-12 00:22:51');
/*!40000 ALTER TABLE `trade_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trades`
--

DROP TABLE IF EXISTS `trades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longdescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemcondition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `returnpolicy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradevalue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cashvalue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_handling_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingtypeid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `websiteref` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_sold` tinyint(4) NOT NULL,
  `is_delete` tinyint(4) NOT NULL,
  `is_available` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoryid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trades`
--

LOCK TABLES `trades` WRITE;
/*!40000 ALTER TABLE `trades` DISABLE KEYS */;
/*!40000 ALTER TABLE `trades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_docs`
--

DROP TABLE IF EXISTS `user_docs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_docs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_docs`
--

LOCK TABLES `user_docs` WRITE;
/*!40000 ALTER TABLE `user_docs` DISABLE KEYS */;
INSERT INTO `user_docs` VALUES (2,'Dashboard','Dashboard is the Business Logic for prospective users, you will be able to have the count of each and every details of your progress and the Barterlist Users information.\r\n\r\nYou will also be able to view the count of wish list on your product/services','2020-09-16 12:26:25','2020-09-16 12:26:25'),(3,'User Catalog','Here, you will be provided a form to fill in details of your product/services, your product/services must have image, and there are drop-down options that can make you select any details ie either youre providing product or services, the product condition either new, used or just bought, payment types and much more.\r\n\r\nAfter filling the form, you click on save catalog and you will be redirected to all your catalog that you\'ve added both new ones you just added and previous ones.','2020-09-16 13:50:12','2020-09-16 13:50:12'),(4,'Transactions','Transaction is the logic behind the product/services rendering, you can add good to wish list make search, check wallet.\r\n\r\ndjnjnfnmervmdfm, dfdmgm sffjkerkfm sfgkermkvm,m, fmkqwrkfmkm sdfjkmmwvm sdfmksmfm,\r\ndfcjkjkerfjkmm sdfmsm,fm,m, sfmkwmkfmkm, efmkejmkfkmcm,vwem,fm,dm, wefjkekfdmdmf,m,mksdm,fwejkrfjkldjkw theeklkkkkfk jkdjkfrm,cm,  jkfkf,gkl kd m, mrklrkl ddklklerkl tjkejkk.re klerkl klis the Business Logic for prospective users, you will be able to have the count of each and every details of your progress and the Barterlist Users information.\r\n\r\nYou will also be able to view the count of wish list on your product/services','2020-09-16 14:20:30','2020-09-16 14:20:30'),(7,'Profile','Transaction is the logic behind the product/services rendering, you can add good to wish list make search, check wallet. djnjnfnmervmdfm, dfdmgm sffjkerkfm sfgkermkvm,m, fmkqwrkfmkm sdfjkmmwvm sdfmksmfm, dfcjkjkerfjkmm sdfmsm,fm,m, sfmkwmkfmkm, efmkejmkfkmcm,vwem,fm,dm, wefjkekfdmdmf,m,mksdm,fwejkrfjkldjkw theeklkkkkfk jkdjkfrm,cm, jkfkf,gkl kd m, mrklrkl ddklklerkl tjkejkk.re klerkl klis the Business Logic for prospective users, you will be able to have the count of each and every details of your progress and the Barterlist Users information. You will also be able to view the count of wish list on your product/services.','2020-09-16 22:08:29','2020-09-16 22:08:29');
/*!40000 ALTER TABLE `user_docs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritalstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `isadmin` tinyint(4) DEFAULT NULL,
  `superadmin` tinyint(4) DEFAULT NULL,
  `requestapproval` tinyint(4) DEFAULT NULL,
  `audit` tinyint(4) DEFAULT NULL,
  `approve` tinyint(4) DEFAULT NULL,
  `disabled` tinyint(4) DEFAULT NULL,
  `is_verify` tinyint(4) DEFAULT NULL,
  `verified_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `token_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ibrahim','Ibrahim','ibroh24@gmail.com','$2y$10$ddeLQA13vgjZDTBWjtIohODI1AWwmbEEi9Wpm54mYqTLl66OOyC/O','Hammed','Lagos','Lagos','Lagos','Lagos','Lagos','Nigeria','Lagos','Lagos',NULL,'Lagos','married',NULL,'Am a simple man by nature :)',NULL,'ibrahimhammed124@gmail.com','images/defaultAvatar.png','facebook.com/ibroh24','twitter.com/ibroh24','https://api.whatsapp.com/send?phone=07063543872','Lagos',NULL,1,1,NULL,NULL,NULL,NULL,1,NULL,'2020-09-07 13:53:09',NULL,'LZ6xV8jZ7nqwB3jSfdAjVs3Nbb4cYhjbdP4iTsxipP3MP9ZRbBctbNoQLRlD','2020-09-03 10:35:10','2020-09-07 13:53:09'),(2,'Demo','demo','demo@barter.com','$2y$10$sm4C0qr7aHWrikMvZX9j4O3om63in3IfhfUTuUSR50ABlWl09nNLu','Bater','17, East Crescent,','Geogia, USA','Salt Lake','Utah','Northeast','United States','84101','07084929454',NULL,'male','single',NULL,'Am a simple man by nature',NULL,NULL,'images/defaultAvatar.png','facebook.com/demo','twitter.com/demo','https://api.whatsapp.com/send?phone=07063543872','84101qw',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-03 10:35:10','2020-09-03 10:35:10'),(3,'Ibrahim','Ibrahim','highbee4u@gmail.com','$2y$10$eImutiOyRj07JUnIiqn4WeS4vTAz3PMtbWHyZGdWNTwmMmjgSaBoy','Salami','17, East Crescent,','Geogia, USA','Salt Lake','Utah','Northeast','United States','84101','07066516088',NULL,'male','single',NULL,'Am a simple man by nature',NULL,NULL,'images/defaultAvatar.png',NULL,NULL,'https://api.whatsapp.com/send?phone=07066516088','84101qw',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-09-03 10:35:10','2020-09-03 10:35:10'),(14,'Muritadoh','','muritadohsodeeq97@gmail.com','$2y$10$KdPJwu0Cdixzs2bDBxbuiedExHJM1uvLgESw0RkYJKsoRXk3uX9m6','Sodeeq','17, East Crescent,','Geogia, USA','jhgjhg','Utah','jgjhgj','shjdsgjh','gjhgjh','jhgjhg',NULL,'jgjhgj',NULL,NULL,'Am a simple man by nature, my yes is yes and my no is no.',NULL,NULL,'',NULL,NULL,NULL,'gjhgjh',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'2020-09-04 14:04:46',NULL,NULL,'2020-09-04 14:03:58','2020-09-04 14:04:46'),(15,'Chinedu','','profitfranco@gmail.com','$2y$10$zOF2QUzo.GBtbwsWr3cwbehYn4z/DulJJCJWOkv5gsGKRWuvOZ50C','Frank','17, East crescent,','geogia, USA','Salt Lake','Utah','East','United State','1234','17097269375',NULL,'Male',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'09876',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'2020-09-08 07:17:58',NULL,NULL,'2020-09-08 07:11:08','2020-09-08 07:17:58'),(16,'Ibrahim','','ibrahimhammed124@gmail.com','$2y$10$twsBVe1hc5hqY3BmL6eM0utChVr1rmC0lyEkG.FSbrZz5z1vkG0Yu','Hammed','17, East crescent,','geogia, USA','Georgia','Utah','East','United States','84101','+123908765',NULL,'Male',NULL,NULL,'Am a simple man by nature, my yes is yes and my no is no.',NULL,NULL,'',NULL,NULL,NULL,'123456',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'2020-09-08 10:54:08',NULL,NULL,'2020-09-08 10:44:31','2020-09-08 10:54:08');
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

-- Dump completed on 2020-09-18 19:51:19
