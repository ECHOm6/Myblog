-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `b_permission`
--

DROP TABLE IF EXISTS `b_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `b_permission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(10) DEFAULT NULL,
  `purl` varchar(255) DEFAULT NULL,
  `clasis` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_permission`
--

LOCK TABLES `b_permission` WRITE;
/*!40000 ALTER TABLE `b_permission` DISABLE KEYS */;
INSERT INTO `b_permission` VALUES (1,'全部权限','ALL','超级管理员'),(3,'用户停用',NULL,'用户管理'),(4,'用户删除','App\\Http\\Controllers\\admin\\AdminController@del','用户管理'),(5,'用户修改',NULL,'用户管理'),(6,'用户改密',NULL,'用户管理'),(7,'用户列表','App\\Http\\Controllers\\admin\\AdminController@menberlist','用户管理'),(8,'文章添加',NULL,'文章管理'),(9,'文章删除','App\\Http\\Controllers\\admin\\AdminController@del','文章管理'),(10,'文章修改',NULL,'文章管理'),(11,'文章列表','App\\Http\\Controllers\\admin\\AdminController@articlelist','文章管理');
/*!40000 ALTER TABLE `b_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_role`
--

DROP TABLE IF EXISTS `b_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `b_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `per_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_role`
--

LOCK TABLES `b_role` WRITE;
/*!40000 ALTER TABLE `b_role` DISABLE KEYS */;
INSERT INTO `b_role` VALUES (1,'超级管理员','至高无上的权利',NULL),(32,'用户管理员','管理用户列表',NULL),(43,'文章管理','对文章的增删改查',NULL),(44,'jj','wenzhangliebiao',NULL),(45,'jin',NULL,NULL);
/*!40000 ALTER TABLE `b_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_role_per`
--

DROP TABLE IF EXISTS `b_role_per`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `b_role_per` (
  `rid` int DEFAULT NULL,
  `pid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_role_per`
--

LOCK TABLES `b_role_per` WRITE;
/*!40000 ALTER TABLE `b_role_per` DISABLE KEYS */;
INSERT INTO `b_role_per` VALUES (1,1),(32,7),(43,8),(43,9),(43,10),(43,11),(44,11),(45,4);
/*!40000 ALTER TABLE `b_role_per` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_user`
--

DROP TABLE IF EXISTS `b_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `b_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `passwd` varchar(16) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_user`
--

LOCK TABLES `b_user` WRITE;
/*!40000 ALTER TABLE `b_user` DISABLE KEYS */;
INSERT INTO `b_user` VALUES (1,'daipan','qz_2021_1_27@qq.com','111111',NULL),(22,'lilulu','1232@qq.com','111111','18772137515'),(35,'panxiaolu','cdsa@qq.com','111111','12232343234');
/*!40000 ALTER TABLE `b_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `b_user_role`
--

DROP TABLE IF EXISTS `b_user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `b_user_role` (
  `uid` int DEFAULT NULL,
  `rid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `b_user_role`
--

LOCK TABLES `b_user_role` WRITE;
/*!40000 ALTER TABLE `b_user_role` DISABLE KEYS */;
INSERT INTO `b_user_role` VALUES (1,1),(22,32),(35,44);
/*!40000 ALTER TABLE `b_user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_art_cat`
--

DROP TABLE IF EXISTS `f_art_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_art_cat` (
  `aid` int DEFAULT NULL,
  `cid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_art_cat`
--

LOCK TABLES `f_art_cat` WRITE;
/*!40000 ALTER TABLE `f_art_cat` DISABLE KEYS */;
/*!40000 ALTER TABLE `f_art_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_art_com`
--

DROP TABLE IF EXISTS `f_art_com`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_art_com` (
  `aid` int DEFAULT NULL,
  `cid` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_art_com`
--

LOCK TABLES `f_art_com` WRITE;
/*!40000 ALTER TABLE `f_art_com` DISABLE KEYS */;
INSERT INTO `f_art_com` VALUES (22,58),(22,59),(22,60),(22,61),(23,62),(22,63);
/*!40000 ALTER TABLE `f_art_com` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_article`
--

DROP TABLE IF EXISTS `f_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_article`
--

LOCK TABLES `f_article` WRITE;
/*!40000 ALTER TABLE `f_article` DISABLE KEYS */;
INSERT INTO `f_article` VALUES (22,'Redis 应用-限流','在高并发场景下有三把利器保护系统：缓存、降级、和限流。缓存的目的是提升系统的访问你速度和增大系统能处理的容量；降级是当服务出问题或影响到核心流程的性能则需要暂时屏蔽掉。而有些场景则需要限制并发请求量，如秒杀、抢购、发帖、评论、恶意爬虫等。\r\n\r\n限流算法\r\n常见的限流算法有：计数器，漏桶、令牌桶。','互联网','戴攀','2021-04-09 15:13:50','2021-04-09 15:13:50'),(23,'赛季大量的','金斯克的妇女的萨从的萨','互联网','戴攀','2021-05-03 11:07:03','2021-05-03 11:07:03');
/*!40000 ALTER TABLE `f_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_category`
--

DROP TABLE IF EXISTS `f_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_category`
--

LOCK TABLES `f_category` WRITE;
/*!40000 ALTER TABLE `f_category` DISABLE KEYS */;
INSERT INTO `f_category` VALUES (1,'金融'),(2,'文学'),(3,'教育'),(4,'电子商务');
/*!40000 ALTER TABLE `f_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_comments`
--

DROP TABLE IF EXISTS `f_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_comments` (
  `fuid` int DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_comments`
--

LOCK TABLES `f_comments` WRITE;
/*!40000 ALTER TABLE `f_comments` DISABLE KEYS */;
INSERT INTO `f_comments` VALUES (NULL,'11',44),(NULL,'ssadas',45),(NULL,'<p>jklh</p><p><br></p>',46),(NULL,'jihjhjh',47),(NULL,'份额为份额为',48),(NULL,'fwfweewfe',49),(NULL,'fewfewfefewfe',50),(NULL,'fewfe',51),(NULL,'cdscd',52),(NULL,'从大vvvfvvfvfdv阿人',53),(NULL,'<p>非常好，继续关注</p><p><br></p>',54),(NULL,'如果时间问你时间爱你，你是否能知道',55),(NULL,'cdc从此村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村村1111',56),(NULL,'的瓦合法考虑',57),(NULL,'为哈uifa',58),(NULL,'dew',59),(NULL,'这是一个非常游泳的',60),(NULL,'dsadsfd',61),(NULL,'dasdaaew',62);
/*!40000 ALTER TABLE `f_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_user`
--

DROP TABLE IF EXISTS `f_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `passwd` varchar(16) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_user`
--

LOCK TABLES `f_user` WRITE;
/*!40000 ALTER TABLE `f_user` DISABLE KEYS */;
INSERT INTO `f_user` VALUES (24,'daipan','dsfa@qq.com','12232343454','111111','/upload/092e6408eb3320e8f3536fc216c2cbac.jpg'),(27,'戴攀','qz_2021_1_27@163.com','15527528193','daipan520666','/upload/7b8bc09964fc9c6278b0eef44f9c652e.jpg'),(28,'778','swn@qq.com','12232343454','000000','/upload/d38c84c00e3ad95eb4d2b2bb12963564.jpeg');
/*!40000 ALTER TABLE `f_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `f_user_com`
--

DROP TABLE IF EXISTS `f_user_com`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `f_user_com` (
  `uid` int DEFAULT NULL,
  `cid` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `f_user_com`
--

LOCK TABLES `f_user_com` WRITE;
/*!40000 ALTER TABLE `f_user_com` DISABLE KEYS */;
INSERT INTO `f_user_com` VALUES (27,58),(27,59),(27,60),(27,61),(27,62),(27,63);
/*!40000 ALTER TABLE `f_user_com` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `classnum` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'daipan','20193433'),(2,'daipan','20193433'),(3,'daipan','20193433'),(4,'daipan','20193433'),(5,'daipan','20193433'),(6,'daipan','20193433'),(7,'daipan','20193433'),(8,NULL,NULL),(9,NULL,NULL),(10,NULL,NULL),(11,NULL,NULL),(12,NULL,NULL),(13,NULL,NULL),(14,NULL,NULL),(15,NULL,NULL),(16,NULL,NULL),(17,NULL,NULL),(18,NULL,NULL),(19,NULL,NULL),(20,NULL,NULL),(21,NULL,NULL),(22,'daipan','20193433'),(23,'daipan','20193433'),(24,'daipan','20193433'),(25,'daipan','20193433'),(26,'daipan','20193433'),(27,'daipan','20193433'),(28,'daipan','20193433'),(29,'daipan','20193433'),(30,'daipan','20193433'),(31,'daipan','20193433'),(32,'daipan','20193433'),(33,'daipan','20193433'),(34,'daipan','20193433'),(35,'daipan','20193433'),(36,'daipan','20193433');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2021-07-24 20:39:56
