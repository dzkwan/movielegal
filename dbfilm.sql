-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: dbfilm
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-1:10.5.15+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Regular','dilengkapi dengan kualitas audio yang bagus dan kursi empuk yang nyaman'),(2,'IMAX','Tipe yang memiliki ukuran layar yang lebih lebar dibanding dengan tipe lainnya'),(3,'Sweetbox','tipe yang dilengkapi dengan sofa yang nyaman untuk 2 orang'),(4,'Gold','tipe yang dilengkapi dengan kursi yang lebih besar, dilapisi oleh bahan kain yang lebih berkelas, dan sandaran kaki yang luas'),(6,'Dolby Atmos','dapat merasakan sensasi menonton film dengan kualitas audio yang lebih memuaskan lagi'),(7,'4DX','dilengkapi dengan 5 sensor seperti gerakan, percikan air, cahaya, hingga hembusan udara dan aroma');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'Action','film yang memperlihatkan tantangan yang memerlukan kekuatan fisik ataupun kemampuan khusus'),(3,'Comedy','film yang menyelipkan unsur comedy'),(5,'Romance','Film yang menceritakan tentang kisah cinta'),(6,'Horror','film yang dibalut dengan adegan yang menyeramkan'),(7,'Animasi','menampilkan film yang dibuat dengan teknik menggambar tangan atau animasi komputer'),(8,'Fantasy','kisah dalam film ini hanyalah fantasi atau imajinasi dari para pembuatnya'),(9,'thriller','biasanya banyak diisi dengan adegan menegangkan dan mendebarkan'),(10,'Drama','Genre ini kental menceritakan tentang kehidupan sehari-hari, Ciri khas genre ini adalah emosional dan sarat kelindan konflik di antara para tokoh');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` enum('admin','manager','staff','penonton') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (5,'Ahmad Dzakwan','dzakwan@example.com','ahmad','90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad','admin'),(6,'sarah dina','dina@example.com','sarah','dfbaa3b61caa3a319f463cc165085aa8c822d2ce','manager'),(7,'Fadil jaidi','fadil@example.com','jaidi','6a91eb6ae9cc8e3a67d32b286c56c3431c1dc980','staff'),(8,'Azzam Budi','azzam@example.com','budi','339d0179c48cc53e306aff58f0fe8e94bca4166e','penonton');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `durasi` varchar(45) NOT NULL,
  `tahun` int(11) NOT NULL,
  `resolusi` enum('HD','4K','8K') NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `genre_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_movie_genre1` (`genre_id`),
  KEY `fk_movie_theater1` (`theater_id`),
  CONSTRAINT `fk_movie_genre1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movie_theater1` FOREIGN KEY (`theater_id`) REFERENCES `theater` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES (2,'Koala Kumal','96 min',2016,'HD','koalakumal.jpg',3,3),(3,'Deadpool','108 min',2016,'8K','deadpool.jpg',1,6),(4,'Ada Apa Dengan Cinta 2','123 min',2016,'4K','aadc2.jpg',5,2),(5,'Spiderman: No Way Home','148 min',2021,'8K','spiderman.jpg',1,5),(6,'Ngenest The Movie','95 min',2015,'HD','ngenest.jpg',3,1),(9,'Pee Nak 2','107 min',2020,'4K','peenak.jpg',6,1),(10,'KKN di Desa Penari','130 min',2022,'4K','kkn.jpg',6,3),(11,'The Boss Baby: Family Business','107 min',2021,'8K','bossbaby.jpg',7,1);
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theater`
--

DROP TABLE IF EXISTS `theater`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theater` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_theater_category1` (`category_id`),
  CONSTRAINT `fk_theater_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theater`
--

LOCK TABLES `theater` WRITE;
/*!40000 ALTER TABLE `theater` DISABLE KEYS */;
INSERT INTO `theater` VALUES (1,'Theater 1','R0012',1),(2,'Theater 2','R0017',1),(3,'Theater 3','R0009',2),(5,'Theater 4','T0021',3),(6,'Theater 5','G0090',4),(8,'Theater 6','U0023',1),(9,'Theater 7','K0101',1),(10,'Theater 8 ','P0990',1),(11,'Theater 9','R1210',1);
/*!40000 ALTER TABLE `theater` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dbfilm'
--

--
-- Dumping routines for database 'dbfilm'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 21:01:27
