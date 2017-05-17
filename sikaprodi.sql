-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sikaprodi
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `aktivitas_dosen_tetap_sesuai_ps`
--

DROP TABLE IF EXISTS `aktivitas_dosen_tetap_sesuai_ps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aktivitas_dosen_tetap_sesuai_ps` (
  `id_aktivitas_dosen_tetap_sesuai_ps` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `no_sertifikat` varchar(20) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `pd_ganjil` int(11) DEFAULT NULL,
  `pl_ganjil` int(11) DEFAULT NULL,
  `pg_ganjil` int(11) DEFAULT NULL,
  `pk_ganjil` int(11) DEFAULT NULL,
  `sum_ganjil` int(11) DEFAULT NULL,
  `pd_genap` int(11) DEFAULT NULL,
  `pl_genap` int(11) DEFAULT NULL,
  `pg_genap` int(11) DEFAULT NULL,
  `pk_genap` int(11) DEFAULT NULL,
  `sum_genap` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_aktivitas_dosen_tetap_sesuai_ps`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aktivitas_dosen_tetap_sesuai_ps`
--

LOCK TABLES `aktivitas_dosen_tetap_sesuai_ps` WRITE;
/*!40000 ALTER TABLE `aktivitas_dosen_tetap_sesuai_ps` DISABLE KEYS */;
INSERT INTO `aktivitas_dosen_tetap_sesuai_ps` VALUES (1,8,'wr234','sdfsdf',4,4,3,4,0,0,0,0,0,0,'dsf'),(2,8,'wr234','sdfsdf',4,4,3,4,0,3,34,34,4,0,'fds'),(3,12,'888888','Rima Maulini',0,0,0,0,0,0,0,0,0,0,''),(4,12,'888888','Imam Asrowardi',0,0,0,0,0,0,0,0,0,0,''),(5,12,'888888','Dewi Kania Widyawati',0,0,0,0,0,0,0,0,0,0,''),(6,12,'888888','Halim Fathoni',0,0,0,0,0,0,0,0,0,0,'');
/*!40000 ALTER TABLE `aktivitas_dosen_tetap_sesuai_ps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artikel_ilmiah_3tahun_terakhir`
--

DROP TABLE IF EXISTS `artikel_ilmiah_3tahun_terakhir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel_ilmiah_3tahun_terakhir` (
  `id_artikel_ilmiah_3tahun_terakhir` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `nama_dosen` text,
  `dihasilkan_pada` varchar(30) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `lokal` int(1) DEFAULT NULL,
  `nasional` int(1) DEFAULT NULL,
  `internasional` int(1) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_artikel_ilmiah_3tahun_terakhir`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel_ilmiah_3tahun_terakhir`
--

LOCK TABLES `artikel_ilmiah_3tahun_terakhir` WRITE;
/*!40000 ALTER TABLE `artikel_ilmiah_3tahun_terakhir` DISABLE KEYS */;
INSERT INTO `artikel_ilmiah_3tahun_terakhir` VALUES (1,8,'sdf','sdfsf;sdfsdf;sdfsdf;','sdfsdf','sdfd',0,1,0,307),(2,8,'sdfsd','sdffff','dfdfdf','dsf',1,0,0,308),(3,8,'sdf','sdfsdf','sdfds','sdfs',0,0,1,309),(4,12,'qwe','qwe','qwe','qwe',0,1,0,442);
/*!40000 ALTER TABLE `artikel_ilmiah_3tahun_terakhir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachmentfile`
--

DROP TABLE IF EXISTS `attachmentfile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachmentfile` (
  `id_attachmentfile` int(11) NOT NULL AUTO_INCREMENT,
  `filepath` text,
  PRIMARY KEY (`id_attachmentfile`)
) ENGINE=InnoDB AUTO_INCREMENT=452 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachmentfile`
--

LOCK TABLES `attachmentfile` WRITE;
/*!40000 ALTER TABLE `attachmentfile` DISABLE KEYS */;
INSERT INTO `attachmentfile` VALUES (264,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (22).pdf'),(265,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (29).pdf'),(266,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/merged.pdf'),(267,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv.pdf'),(268,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan.pdf'),(269,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (3).pdf'),(270,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (4).pdf'),(271,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (5).pdf'),(272,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (12).pdf'),(273,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/merged (9).pdf'),(274,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Youth Ambassadors Change the World.pdf'),(275,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (13).pdf'),(276,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (2).pdf'),(277,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (1).pdf'),(278,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (2).pdf'),(279,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM.pdf'),(280,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (3).pdf'),(281,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/mXqxxyz (2).pdf'),(282,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (4).pdf'),(283,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (5).pdf'),(284,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan (1).pdf'),(285,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (14).pdf'),(286,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (12).pdf'),(287,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (1).pdf'),(288,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/mXqxxyz (3).pdf'),(289,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (6).pdf'),(290,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (7).pdf'),(291,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (8).pdf'),(292,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (2).pdf'),(293,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (15).pdf'),(294,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (9).pdf'),(295,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (13).pdf'),(296,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (16).pdf'),(297,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (17).pdf'),(298,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (18).pdf'),(299,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (3).pdf'),(300,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (3).pdf'),(301,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (14).pdf'),(302,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (4).pdf'),(303,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (5).pdf'),(304,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (6).pdf'),(305,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (10).pdf'),(306,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (6).pdf'),(307,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (7).pdf'),(308,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (8).pdf'),(309,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (11).pdf'),(310,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (19).pdf'),(311,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (7).pdf'),(312,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (4).pdf'),(313,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (20).pdf'),(314,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/merged (10).pdf'),(315,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (30).pdf'),(316,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/merged (11).pdf'),(317,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/merged (12).pdf'),(318,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (21).pdf'),(319,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan (2).pdf'),(320,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (8).pdf'),(321,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (22).pdf'),(322,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/mXqxxyz (4).pdf'),(323,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (9).pdf'),(324,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (23).pdf'),(325,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (24).pdf'),(326,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (5).pdf'),(327,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (6).pdf'),(328,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (9).pdf'),(329,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (25).pdf'),(330,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (10).pdf'),(331,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (11).pdf'),(332,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan (3).pdf'),(333,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Youth Ambassadors Change the World (1).pdf'),(334,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (12).pdf'),(335,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan (4).pdf'),(336,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Youth Ambassadors Change the World (33).pdf'),(337,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (28).pdf'),(338,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan (5).pdf'),(339,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Neli Agustina-TKG-FISFEO-SRG-FLIGHT_ORIGINATING (10).pdf'),(340,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (13).pdf'),(341,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications.pdf'),(342,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/mXqxxyz (5).pdf'),(343,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (14).pdf'),(344,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/cv (26).pdf'),(345,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (15).pdf'),(346,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/sn74hc595_2 (15).pdf'),(349,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (16).pdf'),(350,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (9).pdf'),(351,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (17).pdf'),(352,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (10).pdf'),(353,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (18).pdf'),(354,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (19).pdf'),(355,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (20).pdf'),(356,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (21).pdf'),(357,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (22).pdf'),(358,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (23).pdf'),(359,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (24).pdf'),(360,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (25).pdf'),(361,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (26).pdf'),(362,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (27).pdf'),(363,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (28).pdf'),(364,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (29).pdf'),(365,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (30).pdf'),(366,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (31).pdf'),(367,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (32).pdf'),(368,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (33).pdf'),(370,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (35).pdf'),(371,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (36).pdf'),(372,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (37).pdf'),(373,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (38).pdf'),(374,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (39).pdf'),(375,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (40).pdf'),(376,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (41).pdf'),(377,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (42).pdf'),(378,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (43).pdf'),(379,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (44).pdf'),(380,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (45).pdf'),(381,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (46).pdf'),(382,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (47).pdf'),(383,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (48).pdf'),(384,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (49).pdf'),(385,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (50).pdf'),(386,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (51).pdf'),(387,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (52).pdf'),(388,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (53).pdf'),(389,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (54).pdf'),(390,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (55).pdf'),(391,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (56).pdf'),(392,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (57).pdf'),(393,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (1).pdf'),(394,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (2).pdf'),(395,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (58).pdf'),(396,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (31).pdf'),(397,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (59).pdf'),(398,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan (6).pdf'),(399,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (60).pdf'),(400,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (32).pdf'),(401,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM.pdf'),(402,'http://127.0.0.1/sikaprodi/jqfu/server/php/files/585-1875-1-SM (1).pdf'),(403,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (2).pdf'),(404,'http://103.247.11.152/~chalax/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications.pdf'),(405,'http://103.247.11.152/~chalax/jqfu/server/php/files/cv (26).pdf'),(406,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (2).pdf'),(407,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (2).pdf'),(408,'http://103.247.11.152/~chalax/jqfu/server/php/files/dokumen.tips_perancangan-aplikasi-pengolahan.pdf'),(409,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (2).pdf'),(410,'http://103.247.11.152/~chalax/jqfu/server/php/files/cv (2).pdf'),(411,'http://103.247.11.152/~chalax/jqfu/server/php/files/2015_PILA_Membership_Agreement_521_2.pdf'),(412,'http://103.247.11.152/~chalax/jqfu/server/php/files/permendagri-nomor27-2014.pdf'),(413,'http://103.247.11.152/~chalax/jqfu/server/php/files/2EP16886.pdf'),(414,'http://103.247.11.152/~chalax/jqfu/server/php/files/2EP16886.pdf'),(415,'http://103.247.11.152/~chalax/jqfu/server/php/files/2EP16886.pdf'),(416,'http://103.247.11.152/~chalax/jqfu/server/php/files/permendagri-nomor27-2014.pdf'),(417,'http://103.247.11.152/~chalax/jqfu/server/php/files/test.php'),(418,'http://103.247.11.152/~chalax/jqfu/server/php/files/2015_PILA_Membership_Agreement_521_2.pdf'),(419,'http://103.247.11.152/~chalax/jqfu/server/php/files/digital_19798-[_Konten_]-Konten 1216.pdf'),(420,'http://103.247.11.152/~chalax/jqfu/server/php/files/796-3150-1-PB.pdf'),(421,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (2).pdf'),(422,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (3).pdf'),(423,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (4).pdf'),(424,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (5).pdf'),(425,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (6).pdf'),(426,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (7).pdf'),(427,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (8).pdf'),(428,'http://103.247.11.152/~chalax/jqfu/server/php/files/cv.pdf'),(429,'http://103.247.11.152/~chalax/jqfu/server/php/files/cv (1).pdf'),(430,'http://103.247.11.152/~chalax/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications.pdf'),(431,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (9).pdf'),(432,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (10).pdf'),(433,'http://103.247.11.152/~chalax/jqfu/server/php/files/Improvised Weapons of The American Underground - Desert Publications (22).pdf'),(434,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (11).pdf'),(435,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (12).pdf'),(436,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (13).pdf'),(437,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (14).pdf'),(438,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (15).pdf'),(439,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (16).pdf'),(440,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (17).pdf'),(441,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (18).pdf'),(442,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (19).pdf'),(443,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (20).pdf'),(444,'http://103.247.11.152/~chalax/jqfu/server/php/files/585-1875-1-SM (21).pdf'),(445,'http://103.247.11.152/~chalax/jqfu/server/php/files/800-2503-1-SM.pdf'),(446,'http://127.0.0.1:8080/sikaprodi2/jqfu/server/php/files/ss.pdf'),(447,'http://127.0.0.1:8080/sikaprodi2/jqfu/server/php/files/ss (1).pdf'),(448,'http://127.0.0.1:8080/sikaprodi2/jqfu/server/php/files/ss (2).pdf'),(449,'http://127.0.0.1:8080/sikaprodi2/jqfu/server/php/files/ss (3).pdf'),(450,'http://127.0.0.1:8080/sikaprodi2/jqfu/server/php/files/ss (4).pdf'),(451,'http://127.0.0.1:8080/sikaprodi2/jqfu/server/php/files/ss (5).pdf');
/*!40000 ALTER TABLE `attachmentfile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku_ilmiah_3tahun_terakhir`
--

DROP TABLE IF EXISTS `buku_ilmiah_3tahun_terakhir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku_ilmiah_3tahun_terakhir` (
  `id_buku_ilmiah_3tahun_terakhir` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `judul_buku` varchar(100) DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_buku_ilmiah_3tahun_terakhir`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku_ilmiah_3tahun_terakhir`
--

LOCK TABLES `buku_ilmiah_3tahun_terakhir` WRITE;
/*!40000 ALTER TABLE `buku_ilmiah_3tahun_terakhir` DISABLE KEYS */;
INSERT INTO `buku_ilmiah_3tahun_terakhir` VALUES (1,8,'sfddsf','sdfsd','343432',310),(2,8,'sdfsd','sdfsd','sdfdsfsd',311),(3,12,'wer','wer','dsfsdf',443),(4,12,'fgh','fgh','fgh',444);
/*!40000 ALTER TABLE `buku_ilmiah_3tahun_terakhir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contoh_soal`
--

DROP TABLE IF EXISTS `contoh_soal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contoh_soal` (
  `id_contoh_soal` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `kode_nama_makul` varchar(100) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contoh_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contoh_soal`
--

LOCK TABLES `contoh_soal` WRITE;
/*!40000 ALTER TABLE `contoh_soal` DISABLE KEYS */;
INSERT INTO `contoh_soal` VALUES (3,10,1,'sdfsdf',349),(4,10,2,'sdfsdf',350),(5,10,2,'sdfsdfdsf',351),(6,12,1,'003 nama x',432),(7,12,1,'006 prog',433),(8,8,1,'afa',0),(9,8,1,'asfasf',0),(10,8,1,'asffff',0),(11,8,2,'asfasf',0),(12,8,2,'asfasf',0),(13,8,2,'asfasf',0);
/*!40000 ALTER TABLE `contoh_soal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dana_diperoleh_dari_penelitian`
--

DROP TABLE IF EXISTS `dana_diperoleh_dari_penelitian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dana_diperoleh_dari_penelitian` (
  `id_dana_untuk_penelitian` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `judul_pengabdian` varchar(100) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `sumber_dana` varchar(100) DEFAULT NULL,
  `jumlah_dana` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_dana_untuk_penelitian`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dana_diperoleh_dari_penelitian`
--

LOCK TABLES `dana_diperoleh_dari_penelitian` WRITE;
/*!40000 ALTER TABLE `dana_diperoleh_dari_penelitian` DISABLE KEYS */;
INSERT INTO `dana_diperoleh_dari_penelitian` VALUES (1,8,'sdfsd','sfsdf','445','sdfsd',44),(2,8,'dgd','fgfd','4545','fghhf',56),(3,12,'sdf','dsf','sdf','sdf',0),(5,12,'jklj','fhg','ert','dfg',0);
/*!40000 ALTER TABLE `dana_diperoleh_dari_penelitian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dana_untuk_penelitian`
--

DROP TABLE IF EXISTS `dana_untuk_penelitian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dana_untuk_penelitian` (
  `id_dana_untuk_penelitian` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `judul_pengabdian` varchar(100) DEFAULT NULL,
  `tahun` varchar(2) DEFAULT NULL,
  `sumber_dana` varchar(30) DEFAULT NULL,
  `jumlah_dana` bigint(20) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dana_untuk_penelitian`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dana_untuk_penelitian`
--

LOCK TABLES `dana_untuk_penelitian` WRITE;
/*!40000 ALTER TABLE `dana_untuk_penelitian` DISABLE KEYS */;
INSERT INTO `dana_untuk_penelitian` VALUES (1,8,'dfg','dfg','45','gfddg',55,305),(2,8,'sfsd','sfsd','sd','34',33,306);
/*!40000 ALTER TABLE `dana_untuk_penelitian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_ajar_dosen_tetap_bidang_sesuai_ps`
--

DROP TABLE IF EXISTS `data_ajar_dosen_tetap_bidang_sesuai_ps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_ajar_dosen_tetap_bidang_sesuai_ps` (
  `id_data_ajar_dosen_tetap_bidang_sesuai_ps` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `semester` int(1) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `bidang_keahlian` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_data_ajar_dosen_tetap_bidang_sesuai_ps`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_ajar_dosen_tetap_bidang_sesuai_ps`
--

LOCK TABLES `data_ajar_dosen_tetap_bidang_sesuai_ps` WRITE;
/*!40000 ALTER TABLE `data_ajar_dosen_tetap_bidang_sesuai_ps` DISABLE KEYS */;
INSERT INTO `data_ajar_dosen_tetap_bidang_sesuai_ps` VALUES (1,8,1,'sfa','afd'),(2,8,2,'sdf','sdf'),(3,8,2,'sdf','dffs'),(4,12,1,'Basing','Basing'),(5,12,2,'jajal','basing'),(6,12,1,'Halim Fathoni',''),(7,12,2,'Imam Asrowardi','Jaringan Komputer'),(8,8,1,'test','sss');
/*!40000 ALTER TABLE `data_ajar_dosen_tetap_bidang_sesuai_ps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps`
--

DROP TABLE IF EXISTS `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps` (
  `id_data_ajar_dosen_tetap_keahlian_diluar_bidang_ps` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `bidang_keahlian` varchar(30) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(30) NOT NULL,
  `jumlah_kelas` int(11) DEFAULT NULL,
  `jumlah_pertemuan_direncanakan` int(11) DEFAULT NULL,
  `jumlah_pertemuan_terlaksana` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_ajar_dosen_tetap_keahlian_diluar_bidang_ps`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps`
--

LOCK TABLES `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps` WRITE;
/*!40000 ALTER TABLE `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps` DISABLE KEYS */;
INSERT INTO `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps` VALUES (1,8,'sdf','sdf','sdf','sdf',3,33,33),(2,8,'sdfsdf','sdgsdg','dgsdg','dfgdfg',33,33,3),(5,12,'Henri Kurniawan','Statistika','0021','Aljabar Vektor dan Matrik',1,12,10);
/*!40000 ALTER TABLE `data_ajar_dosen_tetap_keahlian_diluar_bidang_ps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_ajar_dosen_tidak_tetap`
--

DROP TABLE IF EXISTS `data_ajar_dosen_tidak_tetap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_ajar_dosen_tidak_tetap` (
  `id_data_ajar_dosen_tidak_tetap` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `bidang_keahlian` varchar(30) DEFAULT NULL,
  `kode_matakuliah` varchar(10) DEFAULT NULL,
  `nama_matakuliah` varchar(30) DEFAULT NULL,
  `jumlah_kelas` int(11) DEFAULT NULL,
  `jumlah_pertemuan_direncanakan` int(11) DEFAULT NULL,
  `jumlah_pertemuan_terlaksana` int(11) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_ajar_dosen_tidak_tetap`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_ajar_dosen_tidak_tetap`
--

LOCK TABLES `data_ajar_dosen_tidak_tetap` WRITE;
/*!40000 ALTER TABLE `data_ajar_dosen_tidak_tetap` DISABLE KEYS */;
INSERT INTO `data_ajar_dosen_tidak_tetap` VALUES (1,8,'dfdsf','sdfsdf','sdfdsf','dsfdsf',3,4,4,279),(2,8,'dfg','dfg','dfg','dfg',4,4,5,280),(4,12,'sdfdsf','sdfdsf','sdfdsf','sdfds',33,4,33,354),(5,12,'Lorem','Ipsum','Dolor','Juste Odio',0,0,0,373);
/*!40000 ALTER TABLE `data_ajar_dosen_tidak_tetap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen_pembimbing`
--

DROP TABLE IF EXISTS `data_dosen_pembimbing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen_pembimbing` (
  `id_data_dosen_pembimbing` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `th` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_dosen_pembimbing`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen_pembimbing`
--

LOCK TABLES `data_dosen_pembimbing` WRITE;
/*!40000 ALTER TABLE `data_dosen_pembimbing` DISABLE KEYS */;
INSERT INTO `data_dosen_pembimbing` VALUES (1,8,1,'dfgdfg',45,295),(2,8,1,'dfgdf',43,296),(3,8,2,'sdfsdf',34,297),(4,8,2,'sdfd',33,298),(5,8,2,'sdf',344,299),(6,8,3,'sdf',33,300),(7,8,4,'sdf',344,301),(8,8,5,'sdfds',234,302),(9,12,1,'asd',0,0),(10,12,2,'zxc',0,437),(11,12,3,'qwe',2,438);
/*!40000 ALTER TABLE `data_dosen_pembimbing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen_tetap`
--

DROP TABLE IF EXISTS `data_dosen_tetap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen_tetap` (
  `id_data_dosen_tetap` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(30) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `tgl_ahir` date DEFAULT NULL,
  `jabatan_akademik` varchar(20) NOT NULL,
  `sertifikasi_dosen` int(1) DEFAULT '0',
  `pendidikan` varchar(20) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  `id_submission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_dosen_tetap`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen_tetap`
--

LOCK TABLES `data_dosen_tetap` WRITE;
/*!40000 ALTER TABLE `data_dosen_tetap` DISABLE KEYS */;
INSERT INTO `data_dosen_tetap` VALUES (1,'ee','re','2016-06-16','er',1,'erer',275,8),(2,'ee','re','2016-06-16','er',0,'rere',276,8),(3,'rere','eer','2016-06-16','er',0,'rere',276,8),(4,'Baing','jajal','2016-06-23','Asisten Ahli',1,'S2',357,12),(5,'Test','Basing','2016-06-23','Bidang',1,'S2',357,12),(6,'Jajal','Test','2016-06-23','Basing',1,'S1',357,12),(7,'Lorem','Test','2016-06-30','Ipsum',0,'S2',423,12),(8,'test','test','2016-06-07','yr',0,'S3',424,12);
/*!40000 ALTER TABLE `data_dosen_tetap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen_tetap_diluar_bidang_ps`
--

DROP TABLE IF EXISTS `data_dosen_tetap_diluar_bidang_ps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen_tetap_diluar_bidang_ps` (
  `id_data_dosen_tetap_diluar_bidang_ps` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(30) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `tgl_ahir` date DEFAULT NULL,
  `jabatan_akademik` varchar(20) NOT NULL,
  `sertifikasi_dosen` int(1) DEFAULT '0',
  `pendidikan` varchar(20) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  `id_submission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_dosen_tetap_diluar_bidang_ps`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen_tetap_diluar_bidang_ps`
--

LOCK TABLES `data_dosen_tetap_diluar_bidang_ps` WRITE;
/*!40000 ALTER TABLE `data_dosen_tetap_diluar_bidang_ps` DISABLE KEYS */;
INSERT INTO `data_dosen_tetap_diluar_bidang_ps` VALUES (1,'dsf','sdfsdf','2016-06-23','sdf',1,'sdf',277,8),(2,'dsdff','sdfsdf','2016-06-23','sdf',1,'sdf',277,8),(3,'dssss','sdfsdf','2016-06-23','sdf',1,'sdf',277,8),(4,'Halim Fathoni','88888888','2016-06-12','Test',1,'S2',371,12),(5,'Dewi Kania Widyawati','88888888','2016-06-12','Test',1,'S2',371,12),(6,'Imam Asrowardi','88888888','2016-06-12','Test',1,'S2',371,12),(7,'Rima Maulini','88888888','2016-06-12','Test',1,'S2',371,12);
/*!40000 ALTER TABLE `data_dosen_tetap_diluar_bidang_ps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen_tidak_tetap`
--

DROP TABLE IF EXISTS `data_dosen_tidak_tetap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen_tidak_tetap` (
  `id_data_dosen_tidak_tetap` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(30) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `tgl_ahir` date DEFAULT NULL,
  `jabatan_akademik` varchar(20) NOT NULL,
  `sertifikasi_dosen` int(1) DEFAULT '0',
  `pendidikan` varchar(20) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  `id_submission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_dosen_tidak_tetap`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen_tidak_tetap`
--

LOCK TABLES `data_dosen_tidak_tetap` WRITE;
/*!40000 ALTER TABLE `data_dosen_tidak_tetap` DISABLE KEYS */;
INSERT INTO `data_dosen_tidak_tetap` VALUES (1,'sdf','sdfd','2016-06-23','sdf',1,'sdfsdfds',278,8),(2,'dfdsfs','sdfd','2016-06-23','sdf',0,'sdfsdfds',278,8),(3,'sddd','343434','2016-06-23','sdf',1,'sdfsdfds',278,8),(4,'Test','888888','2016-06-01','Jajal',0,'S1',372,12),(5,'Basing','888888','2016-06-01','Lorem',0,'S2',372,12);
/*!40000 ALTER TABLE `data_dosen_tidak_tetap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen_wali`
--

DROP TABLE IF EXISTS `data_dosen_wali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen_wali` (
  `id_data_dosen_wali` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `rerata_pertemuan` int(11) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_data_dosen_wali`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen_wali`
--

LOCK TABLES `data_dosen_wali` WRITE;
/*!40000 ALTER TABLE `data_dosen_wali` DISABLE KEYS */;
INSERT INTO `data_dosen_wali` VALUES (1,8,'dfgdf',4,5,292),(2,8,'dfgfd',0,0,293),(3,8,'dgdf',4,44,294),(4,12,'Lorem',0,0,435);
/*!40000 ALTER TABLE `data_dosen_wali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_mahasiswa_reguler_5thn_terakhir`
--

DROP TABLE IF EXISTS `data_mahasiswa_reguler_5thn_terakhir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_mahasiswa_reguler_5thn_terakhir` (
  `id_data_mahasiswa_reguler_5thn_terakhir` int(11) NOT NULL AUTO_INCREMENT,
  `thn_masuk` year(4) NOT NULL,
  `data_ts_4` int(11) DEFAULT NULL,
  `data_ts_3` int(11) DEFAULT NULL,
  `data_ts_2` int(11) DEFAULT NULL,
  `data_ts_1` int(11) DEFAULT NULL,
  `data_ts_0` int(11) DEFAULT NULL,
  `jumlah_lulusan_sd_ts` int(11) DEFAULT NULL,
  `id_submission` int(11) NOT NULL,
  PRIMARY KEY (`id_data_mahasiswa_reguler_5thn_terakhir`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_mahasiswa_reguler_5thn_terakhir`
--

LOCK TABLES `data_mahasiswa_reguler_5thn_terakhir` WRITE;
/*!40000 ALTER TABLE `data_mahasiswa_reguler_5thn_terakhir` DISABLE KEYS */;
INSERT INTO `data_mahasiswa_reguler_5thn_terakhir` VALUES (1,2012,36,36,37,39,41,34,8),(2,2013,33,33,33,33,0,33,8),(3,2014,34,34,44,0,0,34,8),(4,2015,33,34,0,0,0,0,8),(5,2016,45,0,0,0,0,0,8),(6,2012,5,4,3,2,1,6,12),(7,2013,1,9,8,7,0,20,12),(8,2014,3,4,5,0,0,2,12),(9,2015,7,6,0,0,0,0,12),(10,2016,8,0,0,0,0,0,12);
/*!40000 ALTER TABLE `data_mahasiswa_reguler_5thn_terakhir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_data_ajar_dosen_tetap_bidang_sesuai_ps`
--

DROP TABLE IF EXISTS `detail_data_ajar_dosen_tetap_bidang_sesuai_ps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_data_ajar_dosen_tetap_bidang_sesuai_ps` (
  `id_detail_data_ajar_dosen_tetap_bidang_sesuai_ps` int(11) NOT NULL AUTO_INCREMENT,
  `id_data_ajar_dosen_tetap_bidang_sesuai_ps` int(11) NOT NULL,
  `kode_matakuliah` varchar(10) DEFAULT NULL,
  `nama_matakuliah` varchar(30) DEFAULT NULL,
  `jumlah_kelas` int(11) DEFAULT NULL,
  `jumlah_pertemuan_direncanakan` int(11) DEFAULT NULL,
  `jumlah_pertemuan_terlaksana` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_data_ajar_dosen_tetap_bidang_sesuai_ps`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_data_ajar_dosen_tetap_bidang_sesuai_ps`
--

LOCK TABLES `detail_data_ajar_dosen_tetap_bidang_sesuai_ps` WRITE;
/*!40000 ALTER TABLE `detail_data_ajar_dosen_tetap_bidang_sesuai_ps` DISABLE KEYS */;
INSERT INTO `detail_data_ajar_dosen_tetap_bidang_sesuai_ps` VALUES (15,1,'sdfds','sdfds',3,4,3),(16,1,'sdf','sdf',1,2,3),(17,2,'sdf','sdf',0,0,0),(18,3,'sdf','sdf',0,0,0),(19,3,'dd','dd',0,0,0),(24,8,'asd','',0,0,0),(25,8,'asd','asdasd',0,0,0),(26,9,'sd','sdsd',0,0,0),(27,9,'dd','dd',0,0,0),(28,10,'sdd','ddd',0,0,0),(29,11,'sd','sd',0,0,0),(30,4,'jajal','basing',12,12,12),(31,4,'jajal','test',23,22,10),(32,5,'test','vasing',3,33,32),(33,5,'hahal','hhh',32,22,2),(34,6,'0223','Teknik Riset Operasi',2,24,22),(35,6,'0224','Pemrgoraman Web',2,22,22),(36,7,'0332','Rancang Bangun Jaringan Komput',2,23,23),(37,7,'0032','Pengelolaan Server',1,12,12);
/*!40000 ALTER TABLE `detail_data_ajar_dosen_tetap_bidang_sesuai_ps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_kegiatan_dosen_tetap_dalam_seminar`
--

DROP TABLE IF EXISTS `detail_kegiatan_dosen_tetap_dalam_seminar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_kegiatan_dosen_tetap_dalam_seminar` (
  `id_detail_kegiatan_dosen_tetap_dalam_seminar` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan_dosen_tetap_dalam_seminar` int(11) DEFAULT NULL,
  `jenis_kegiatan` varchar(20) DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `penyaji` int(1) DEFAULT NULL,
  `peserta` int(1) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_kegiatan_dosen_tetap_dalam_seminar`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_kegiatan_dosen_tetap_dalam_seminar`
--

LOCK TABLES `detail_kegiatan_dosen_tetap_dalam_seminar` WRITE;
/*!40000 ALTER TABLE `detail_kegiatan_dosen_tetap_dalam_seminar` DISABLE KEYS */;
INSERT INTO `detail_kegiatan_dosen_tetap_dalam_seminar` VALUES (1,1,'dfg','dfgdfg','2016-06-23',0,1,285),(2,2,'Seminar','Politeknik Negeri Lampung','2016-06-01',1,0,379),(3,3,'Penataran','Institut Teknologi Bandung','2016-06-06',0,1,380),(4,5,'test','sds','2017-05-17',1,0,0),(5,5,'asd','dfdf','2017-05-24',0,1,0),(6,6,'sdsd','sdfd','2017-05-03',0,1,0),(7,6,'dfgd','dfgg','2017-05-10',1,0,0);
/*!40000 ALTER TABLE `detail_kegiatan_dosen_tetap_dalam_seminar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`
--

DROP TABLE IF EXISTS `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` (
  `id_detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` int(11) NOT NULL AUTO_INCREMENT,
  `id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` int(11) DEFAULT NULL,
  `nama_organisasi_keilmuan` varchar(50) DEFAULT NULL,
  `kurun_waktu` varchar(10) DEFAULT NULL,
  `tingkat` varchar(20) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`
--

LOCK TABLES `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` WRITE;
/*!40000 ALTER TABLE `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` DISABLE KEYS */;
INSERT INTO `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` VALUES (1,1,'dhd','dhd','dfhdf',287),(2,1,'dfh','dh','dfhd',288),(4,3,'dfdf','ffff','ffdfdfd',336),(5,3,'df','dfdfd','ffffff',337),(6,2,'Lorem ','2012-2017','Lokal',383),(7,2,'Ipsum','2010-2011','Internasional',384),(8,3,'Dolor','2011-2015','Nasional',385),(9,4,'test','baisng','Nasional',386),(10,5,'dfgfg','dfgdfg','dfgdfg',0),(11,5,'dfgdfg','dfgdfg','dfgdfg',0);
/*!40000 ALTER TABLE `detail_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_pencapaian_prestasi_dosen`
--

DROP TABLE IF EXISTS `detail_pencapaian_prestasi_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pencapaian_prestasi_dosen` (
  `id_detail_pencapaian_prestasi_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `prestasi_yang_dicapai` varchar(30) DEFAULT NULL,
  `waktu_pencapaian` date DEFAULT NULL,
  `tingkat` varchar(30) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  `id_pencapaian_prestasi_dosen` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_pencapaian_prestasi_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_pencapaian_prestasi_dosen`
--

LOCK TABLES `detail_pencapaian_prestasi_dosen` WRITE;
/*!40000 ALTER TABLE `detail_pencapaian_prestasi_dosen` DISABLE KEYS */;
INSERT INTO `detail_pencapaian_prestasi_dosen` VALUES (1,'dfgdf','2016-06-23','dfgdfg',286,1),(2,'-','2016-06-06','Internasional',381,2),(3,'Test','2016-06-08','Nasional',382,2),(4,'ddfg','2017-05-11','dgdg',0,3),(5,'dfgfdg','2017-05-18','dfg',0,3),(6,'dfgdgdg','2017-05-11','dfgg',0,3);
/*!40000 ALTER TABLE `detail_pencapaian_prestasi_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_peralatan_lab`
--

DROP TABLE IF EXISTS `detail_peralatan_lab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_peralatan_lab` (
  `id_detail_peralatan_lab` int(11) NOT NULL AUTO_INCREMENT,
  `id_peralatan_lab` int(11) DEFAULT NULL,
  `jenis_prasarana` varchar(30) DEFAULT NULL,
  `jumlah_unit` int(11) DEFAULT NULL,
  `rasio` varchar(10) DEFAULT NULL,
  `sd` int(11) DEFAULT NULL,
  `sw` int(11) DEFAULT NULL,
  `baik` int(11) DEFAULT NULL,
  `rusak` int(11) DEFAULT NULL,
  `rerata_waktu_penggunaan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_peralatan_lab`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_peralatan_lab`
--

LOCK TABLES `detail_peralatan_lab` WRITE;
/*!40000 ALTER TABLE `detail_peralatan_lab` DISABLE KEYS */;
INSERT INTO `detail_peralatan_lab` VALUES (23,0,'sfsf',34,'drt',1,0,0,1,2),(25,0,'et',54,'rt',1,0,0,1,45),(27,0,'sdf',34,'s vfs',0,1,1,0,2),(28,0,'sdf',2,'sdf',0,1,0,1,34),(30,0,'wr',34,'dfg',0,1,0,1,2),(32,0,'sdf',3,'er',1,0,1,0,2),(36,20,'sdf',2,'sdf',1,0,1,0,2),(37,1,'dfg',44,'fggd',0,1,0,1,33),(38,1,'sdf',33,'sdfsdf',1,0,1,0,34),(39,2,'sdff',33,'dsfs',0,1,0,1,33);
/*!40000 ALTER TABLE `detail_peralatan_lab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluasi_kinerja_lulusan`
--

DROP TABLE IF EXISTS `evaluasi_kinerja_lulusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluasi_kinerja_lulusan` (
  `id_evaluasi_kinerja` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `jenis_kemampuan` varchar(30) NOT NULL,
  `persentase_tanggapan_sangat_baik` int(11) DEFAULT NULL,
  `persentase_tanggapan_baik` int(11) DEFAULT NULL,
  `persentase_tanggapan_cukup` int(11) DEFAULT NULL,
  `persentase_tanggapan_kurang` int(11) DEFAULT NULL,
  `rencana_tindak_lanjut` text,
  PRIMARY KEY (`id_evaluasi_kinerja`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluasi_kinerja_lulusan`
--

LOCK TABLES `evaluasi_kinerja_lulusan` WRITE;
/*!40000 ALTER TABLE `evaluasi_kinerja_lulusan` DISABLE KEYS */;
INSERT INTO `evaluasi_kinerja_lulusan` VALUES (7,8,'Komunikasi',3,3,3,3,'-'),(8,8,'Kerjasama',0,0,0,0,'-'),(9,8,'Kemandirian',3,0,0,0,'-'),(10,8,'Kreativitas',0,3,4,3,'-'),(11,8,'Kemampuan Menggunakan Alat',0,0,0,0,'-'),(12,8,'Total',0,0,0,0,'-'),(61,12,'Komunikasi',1,2,3,4,'-'),(62,12,'Kerjasama',6,3,2,3,'-'),(63,12,'Kemandirian',30,3,5,6,'-'),(64,12,'Kreativitas',34,33,3,3,'-'),(65,12,'Kemampuan Menggunakan Alat',54,56,67,67,'-'),(66,12,'Total',52,45,44,44,'-');
/*!40000 ALTER TABLE `evaluasi_kinerja_lulusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hasil_peninjauan_silabus`
--

DROP TABLE IF EXISTS `hasil_peninjauan_silabus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hasil_peninjauan_silabus` (
  `id_hasil_peninjauan_silabus` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `no_mk` varchar(20) DEFAULT NULL,
  `nama_mk` varchar(30) DEFAULT NULL,
  `mk_baru_lama_hapus` varchar(10) DEFAULT NULL,
  `perubahan_silabus` int(1) DEFAULT NULL,
  `perubahan_buku_ajar` int(1) DEFAULT NULL,
  `alasan_peninjauan` varchar(100) DEFAULT NULL,
  `usulan_dari` varchar(100) DEFAULT NULL,
  `berlaku_mulai` varchar(30) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_hasil_peninjauan_silabus`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasil_peninjauan_silabus`
--

LOCK TABLES `hasil_peninjauan_silabus` WRITE;
/*!40000 ALTER TABLE `hasil_peninjauan_silabus` DISABLE KEYS */;
INSERT INTO `hasil_peninjauan_silabus` VALUES (1,8,'dfgdf','dfgdf','dfgfdg',0,1,'dfgdfg','dfg','dfgfg',291),(2,12,'113','asd','dfg',1,0,'asd','asd','asd',434),(3,8,'afasf','asfasf','asfasf',1,0,'asfasf','asfasf','asfasf',0);
/*!40000 ALTER TABLE `hasil_peninjauan_silabus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jumlah_judul_penelitian`
--

DROP TABLE IF EXISTS `jumlah_judul_penelitian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jumlah_judul_penelitian` (
  `id_jumlah_judul_penelitian` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `sumber_pembiayaan` varchar(40) DEFAULT NULL,
  `ts_2` int(11) DEFAULT NULL,
  `ts_1` int(11) DEFAULT NULL,
  `ts_0` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jumlah_judul_penelitian`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jumlah_judul_penelitian`
--

LOCK TABLES `jumlah_judul_penelitian` WRITE;
/*!40000 ALTER TABLE `jumlah_judul_penelitian` DISABLE KEYS */;
INSERT INTO `jumlah_judul_penelitian` VALUES (1,8,'sdfds',33,43,43),(2,8,'sfsd',3,4,33),(3,8,'sdfsdf',33,4,44),(4,12,'asd',0,0,0),(5,12,'ert',0,0,0),(6,12,'qww',0,0,0);
/*!40000 ALTER TABLE `jumlah_judul_penelitian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jumlah_kegiatan_pengabdian_kepada_masyarakat`
--

DROP TABLE IF EXISTS `jumlah_kegiatan_pengabdian_kepada_masyarakat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jumlah_kegiatan_pengabdian_kepada_masyarakat` (
  `id_jumlah_kegiatan_pengabdian_kepada_masyarakat` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `sumber_dana` varchar(30) DEFAULT NULL,
  `ts_2` int(11) DEFAULT NULL,
  `ts_1` int(11) DEFAULT NULL,
  `ts_0` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jumlah_kegiatan_pengabdian_kepada_masyarakat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jumlah_kegiatan_pengabdian_kepada_masyarakat`
--

LOCK TABLES `jumlah_kegiatan_pengabdian_kepada_masyarakat` WRITE;
/*!40000 ALTER TABLE `jumlah_kegiatan_pengabdian_kepada_masyarakat` DISABLE KEYS */;
INSERT INTO `jumlah_kegiatan_pengabdian_kepada_masyarakat` VALUES (1,8,'sdfsdf',3,3,33),(2,8,'sdfsdf',33,33,33),(3,12,'sdfsd',0,0,0),(4,12,'sdfsdf',0,0,0);
/*!40000 ALTER TABLE `jumlah_kegiatan_pengabdian_kepada_masyarakat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jumlah_penggunaan_dana`
--

DROP TABLE IF EXISTS `jumlah_penggunaan_dana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jumlah_penggunaan_dana` (
  `id_jumlah_penggunaan_dana` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `tipe_penggunaan` int(11) NOT NULL,
  `jumlahdanath2` bigint(20) DEFAULT NULL,
  `jumlahdanath1` bigint(20) DEFAULT NULL,
  `jumlahdanath0` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_jumlah_penggunaan_dana`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jumlah_penggunaan_dana`
--

LOCK TABLES `jumlah_penggunaan_dana` WRITE;
/*!40000 ALTER TABLE `jumlah_penggunaan_dana` DISABLE KEYS */;
INSERT INTO `jumlah_penggunaan_dana` VALUES (3,8,2,3,34,4),(4,8,1,3,4,3),(5,12,1,2,2,2),(6,12,2,3,4,5);
/*!40000 ALTER TABLE `jumlah_penggunaan_dana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `karya_berhaki`
--

DROP TABLE IF EXISTS `karya_berhaki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `karya_berhaki` (
  `id_karya_berhaki` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `paten` varchar(30) DEFAULT NULL,
  `nama_karya` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_karya_berhaki`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `karya_berhaki`
--

LOCK TABLES `karya_berhaki` WRITE;
/*!40000 ALTER TABLE `karya_berhaki` DISABLE KEYS */;
INSERT INTO `karya_berhaki` VALUES (1,8,'sdfds','sdfsdfsf'),(2,8,'sdfds','sdfsdf'),(3,8,'sdfsd','sdfsd'),(4,8,'sdfsd','sdfsdf'),(5,12,'dfg','dfgdfgdf'),(6,12,'werwe','werewr');
/*!40000 ALTER TABLE `karya_berhaki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan_dosen_tetap_dalam_seminar`
--

DROP TABLE IF EXISTS `kegiatan_dosen_tetap_dalam_seminar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan_dosen_tetap_dalam_seminar` (
  `id_kegiatan_dosen_tetap_dalam_seminar` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan_dosen_tetap_dalam_seminar`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan_dosen_tetap_dalam_seminar`
--

LOCK TABLES `kegiatan_dosen_tetap_dalam_seminar` WRITE;
/*!40000 ALTER TABLE `kegiatan_dosen_tetap_dalam_seminar` DISABLE KEYS */;
INSERT INTO `kegiatan_dosen_tetap_dalam_seminar` VALUES (1,8,'dfgfdg'),(2,12,'Imam Asrowardi'),(3,12,'Halim Fathoni'),(5,8,'fdsf'),(6,8,'sdfs');
/*!40000 ALTER TABLE `kegiatan_dosen_tetap_dalam_seminar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan_tenaga_ahli`
--

DROP TABLE IF EXISTS `kegiatan_tenaga_ahli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan_tenaga_ahli` (
  `id_kegiatan_tenaga_ahli` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_tenaga_ahli` varchar(30) DEFAULT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `waktu_pelaksanaan` date DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan_tenaga_ahli`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan_tenaga_ahli`
--

LOCK TABLES `kegiatan_tenaga_ahli` WRITE;
/*!40000 ALTER TABLE `kegiatan_tenaga_ahli` DISABLE KEYS */;
INSERT INTO `kegiatan_tenaga_ahli` VALUES (1,8,'dfgdf','dfgdfg','2016-06-10',281),(2,8,'dfg','dfg','2016-06-10',282),(3,12,'Onno w Purbo','Pelatihan Jaringan Nirkabel Pada Dunia Berkembang','2016-06-06',374),(4,12,'Kurniawan','Teknik Reverse Engineering','2016-05-04',375),(5,12,'Sto','Certified Ethical Hacker','2016-06-01',376);
/*!40000 ALTER TABLE `kegiatan_tenaga_ahli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`
--

DROP TABLE IF EXISTS `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` (
  `id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `id_submission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan`
--

LOCK TABLES `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` WRITE;
/*!40000 ALTER TABLE `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` DISABLE KEYS */;
INSERT INTO `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` VALUES (1,'dhfdh',8),(2,'Test',12),(3,'Basing',12),(4,'rwar',12),(5,'dfgdfg',8);
/*!40000 ALTER TABLE `keikutsertaan_dosen_tetap_dalam_organisasi_keilmuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kerjasama_dalam_negeri`
--

DROP TABLE IF EXISTS `kerjasama_dalam_negeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kerjasama_dalam_negeri` (
  `id_kerjasama_dalam_negeri` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_instansi` varchar(30) DEFAULT NULL,
  `jenis_kegiatan` varchar(30) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_berakhir` date DEFAULT NULL,
  `manfaat_diperoleh` text,
  PRIMARY KEY (`id_kerjasama_dalam_negeri`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kerjasama_dalam_negeri`
--

LOCK TABLES `kerjasama_dalam_negeri` WRITE;
/*!40000 ALTER TABLE `kerjasama_dalam_negeri` DISABLE KEYS */;
INSERT INTO `kerjasama_dalam_negeri` VALUES (1,8,'sdfsdf','sdfsdf','2016-06-23','2016-06-24','sdfds'),(2,8,'sdfds','sdfsdf','2016-06-17','2016-06-30','fggh'),(3,12,'sdfds','sdfdsf','2016-06-02','2016-06-09','sdfds'),(4,12,'werwer','ewrewr','0000-00-00','0000-00-00','werewr');
/*!40000 ALTER TABLE `kerjasama_dalam_negeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kerjasama_luar_negeri`
--

DROP TABLE IF EXISTS `kerjasama_luar_negeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kerjasama_luar_negeri` (
  `id_kerjasama_luar_negeri` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_instansi` varchar(30) DEFAULT NULL,
  `jenis_kegiatan` varchar(30) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_berakhir` date DEFAULT NULL,
  `manfaat_diperoleh` text,
  PRIMARY KEY (`id_kerjasama_luar_negeri`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kerjasama_luar_negeri`
--

LOCK TABLES `kerjasama_luar_negeri` WRITE;
/*!40000 ALTER TABLE `kerjasama_luar_negeri` DISABLE KEYS */;
INSERT INTO `kerjasama_luar_negeri` VALUES (1,8,'dfg','dfgdfg','2016-06-07','2016-06-29','dfgdf'),(2,12,'ewrer','werwe','2016-06-10','2016-06-23','dffgdg'),(3,12,'wetwet','dfgdfg','2016-06-17','2016-06-30','dfffg');
/*!40000 ALTER TABLE `kerjasama_luar_negeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keselamatan_kerja`
--

DROP TABLE IF EXISTS `keselamatan_kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keselamatan_kerja` (
  `id_keselamatan_kerja` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_peralatan` varchar(30) DEFAULT NULL,
  `fungsi` varchar(30) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_keselamatan_kerja`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keselamatan_kerja`
--

LOCK TABLES `keselamatan_kerja` WRITE;
/*!40000 ALTER TABLE `keselamatan_kerja` DISABLE KEYS */;
INSERT INTO `keselamatan_kerja` VALUES (1,8,'sdfsdf','sdfsdf',303),(2,8,'sdfdsf','sdfsdf',304),(3,12,'sad','qwe',439),(4,12,'ert','dfg',440);
/*!40000 ALTER TABLE `keselamatan_kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layanan_kepada_mahasiswa`
--

DROP TABLE IF EXISTS `layanan_kepada_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layanan_kepada_mahasiswa` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `jenis_pelayanan` varchar(30) NOT NULL,
  `bentuk_kegiatan` text,
  `pelaksanaan` text,
  `hasil` text,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layanan_kepada_mahasiswa`
--

LOCK TABLES `layanan_kepada_mahasiswa` WRITE;
/*!40000 ALTER TABLE `layanan_kepada_mahasiswa` DISABLE KEYS */;
INSERT INTO `layanan_kepada_mahasiswa` VALUES (1,8,'sdf','sdf','sdfdsf','sdfds',312),(2,8,'sdf','sdf','sdfsdf','sdfsd',313),(3,12,'Kuliah Umum','Basing','Lorem','Ipsum',368),(5,12,'Juste','Odio','Dolorem','Ispum',370),(6,12,'Ipsum','Jajal','Basing','Test',406);
/*!40000 ALTER TABLE `layanan_kepada_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lembaga_pemesan_lulusan`
--

DROP TABLE IF EXISTS `lembaga_pemesan_lulusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lembaga_pemesan_lulusan` (
  `id_pemesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah_mahasiswa_diwisuda` int(11) DEFAULT NULL,
  `nama_lembaga` varchar(30) DEFAULT NULL,
  `jumlah_lulusan_diterima` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemesan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lembaga_pemesan_lulusan`
--

LOCK TABLES `lembaga_pemesan_lulusan` WRITE;
/*!40000 ALTER TABLE `lembaga_pemesan_lulusan` DISABLE KEYS */;
INSERT INTO `lembaga_pemesan_lulusan` VALUES (1,8,2016,34,'34',34),(2,8,2016,34,'34',34),(3,8,2016,34,'34',33),(4,8,2016,34,'34',33),(5,12,2016,340,'Basing',34),(6,12,2016,340,'Jajal',34);
/*!40000 ALTER TABLE `lembaga_pemesan_lulusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `user_capability` text NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'MI','5adc6909449a76bcb49a59c08acc069b','chalax77@gmail.com','editown,viewall,createsubmission'),(2,'akt','382b2a8f2fc87c375298201f92874375','chalax77@gmail.com','editown,viewall,createsubmission'),(3,'admin','382b2a8f2fc87c375298201f92874375','chalax77@gmail.com','editown,viewall,createsubmission'),(5,'cruizer','5adc6909449a76bcb49a59c08acc069b','','editown,viewall,createsubmission'),(6,'MI','382b2a8f2fc87c375298201f92874375','','editown,viewall,createsubmission'),(7,'Agri','382b2a8f2fc87c375298201f92874375','','editown,viewall,createsubmission');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa_dan_lulusan`
--

DROP TABLE IF EXISTS `mahasiswa_dan_lulusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa_dan_lulusan` (
  `id_mahasiswa_dan_lulusan` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  `tskex` int(11) NOT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `jumlah_calon_mahasiswa_reguler_ikut_seleksi` int(11) DEFAULT NULL,
  `jumlah_calon_mahasiswa_reguler_lulus_seleksi` int(11) DEFAULT NULL,
  `jumlah_mahasiswa_baru_reguler_non_transfer` int(11) DEFAULT NULL,
  `jumlah_mahasiswa_baru_reguler_transfer` int(11) DEFAULT NULL,
  `jumlah_total_mahasiswa_reguler_non_transfer` int(11) DEFAULT NULL,
  `jumlah_total_mahasiswa_reguler_transfer` int(11) DEFAULT NULL,
  `jumlah_lulusan_reguler_non_transfer` int(11) DEFAULT NULL,
  `jumlah_lulusan_reguler_transfer` int(11) DEFAULT NULL,
  `ipk_min_lulusan_reguler` double DEFAULT NULL,
  `ipk_rata_rata_lulusan_reguler` double DEFAULT NULL,
  `ipk_max_lulusan_reguler` double DEFAULT NULL,
  `persentase_lulusan_dengan_ipk_kurdar_275` int(11) DEFAULT NULL,
  `persentase_lulusan_dengan_ipk_smd_275` int(11) DEFAULT NULL,
  `persentase_lulusan_dengan_ipk_lbdr_350` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa_dan_lulusan`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa_dan_lulusan`
--

LOCK TABLES `mahasiswa_dan_lulusan` WRITE;
/*!40000 ALTER TABLE `mahasiswa_dan_lulusan` DISABLE KEYS */;
INSERT INTO `mahasiswa_dan_lulusan` VALUES (16,8,272,4,3,0,0,0,0,0,0,0,3,0,0,0,0,0,1),(17,8,268,3,0,4,0,0,0,0,0,4,0,2,0,0,0,0,0),(18,8,269,2,0,0,5,0,0,0,5,0,0,0,1,0,0,0,0),(19,8,270,1,0,0,0,6,0,6,0,0,0,0,0,2,0,0,0),(20,8,271,0,0,0,0,0,7,0,0,0,0,0,0,0,3,0,0),(41,12,405,4,0,1,1,1,1,1,2,5,6,5,6,5,6,5,6),(42,12,361,3,6,4,8,4,2,3,4,54,0,54,1,2,6,74,54),(43,12,362,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(44,12,363,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(45,12,364,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(51,14,447,4,1,1,2,4,4,5,7,5,6,85,5,5,5,5,7),(52,14,448,3,3,34,4,3,1,5,0,8,2,6,2,5,4,8,2),(53,14,449,2,2,7,2,3,6,7,4,9,7,2,1,7,5,3,9),(54,14,450,1,7,8,9,5,4,2,1,3,5,4,7,5,31,4,2),(55,14,451,0,4,5,2,6,7,4,2,5,7,5,6,4,2,7,5);
/*!40000 ALTER TABLE `mahasiswa_dan_lulusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pencapaian_prestasi_dosen`
--

DROP TABLE IF EXISTS `pencapaian_prestasi_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pencapaian_prestasi_dosen` (
  `id_pencapaian_prestasi_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(30) DEFAULT NULL,
  `id_submission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pencapaian_prestasi_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pencapaian_prestasi_dosen`
--

LOCK TABLES `pencapaian_prestasi_dosen` WRITE;
/*!40000 ALTER TABLE `pencapaian_prestasi_dosen` DISABLE KEYS */;
INSERT INTO `pencapaian_prestasi_dosen` VALUES (1,'dfgfd',8),(2,'Basing',12),(3,'dfg',8);
/*!40000 ALTER TABLE `pencapaian_prestasi_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penggunaan_dana`
--

DROP TABLE IF EXISTS `penggunaan_dana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penggunaan_dana` (
  `id_penggunaan_dana` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `tipe_penggunaan` int(11) NOT NULL,
  `jenis_penggunaan` varchar(30) DEFAULT NULL,
  `presentaseth2` int(11) DEFAULT NULL,
  `presentaseth1` int(11) DEFAULT NULL,
  `presentaseth0` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penggunaan_dana`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penggunaan_dana`
--

LOCK TABLES `penggunaan_dana` WRITE;
/*!40000 ALTER TABLE `penggunaan_dana` DISABLE KEYS */;
INSERT INTO `penggunaan_dana` VALUES (1,8,1,'sdf',44,4,3),(2,8,1,'sdf',44,4,3),(3,8,1,'fdg',3,44,4),(4,8,2,'fdg',3,44,4),(5,8,2,'sdf',3,44,4),(6,8,2,'sdf',33,44,4),(7,12,1,'sdf',0,0,0),(8,12,1,'dfg',0,0,0),(9,12,1,'wer',0,0,0),(10,12,2,'sdf',0,0,0),(11,12,2,'fgh',0,0,0),(12,12,2,'hjk',0,0,0);
/*!40000 ALTER TABLE `penggunaan_dana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peningkatan_kemampuan_dosen`
--

DROP TABLE IF EXISTS `peningkatan_kemampuan_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peningkatan_kemampuan_dosen` (
  `id_peningkatan_kemampuan_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `jenjang_pendidikan_lanjut` varchar(30) NOT NULL,
  `bidang_studi` varchar(30) DEFAULT NULL,
  `perguruan_tinggi` varchar(30) DEFAULT NULL,
  `negara` varchar(30) DEFAULT NULL,
  `tahun_mulai_studi` varchar(4) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_peningkatan_kemampuan_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peningkatan_kemampuan_dosen`
--

LOCK TABLES `peningkatan_kemampuan_dosen` WRITE;
/*!40000 ALTER TABLE `peningkatan_kemampuan_dosen` DISABLE KEYS */;
INSERT INTO `peningkatan_kemampuan_dosen` VALUES (1,8,'dfg','dfgdf','fgfdg','dfg','dfgfd','dfgd',283),(2,8,'dfgfdg','fdg','fdg','dfg','dfgdfg','dfgd',284),(3,12,'Halim Fathoni','S3','Artificial Intelligence','MIT','Amerika Serikat','2016',377),(4,12,'Dewi Kania Widyawati','S3','Mathematical and Computational','Stanford University','Amerika Serikat','2017',378);
/*!40000 ALTER TABLE `peningkatan_kemampuan_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peralatan_lab`
--

DROP TABLE IF EXISTS `peralatan_lab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peralatan_lab` (
  `id_peralatan_lab` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lab` varchar(30) DEFAULT NULL,
  `id_submission` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_peralatan_lab`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peralatan_lab`
--

LOCK TABLES `peralatan_lab` WRITE;
/*!40000 ALTER TABLE `peralatan_lab` DISABLE KEYS */;
INSERT INTO `peralatan_lab` VALUES (1,'dfgdf',8),(2,'sdfdsff',8);
/*!40000 ALTER TABLE `peralatan_lab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prasarana`
--

DROP TABLE IF EXISTS `prasarana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prasarana` (
  `id_prasarana` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `ruang_kerja_dosen` varchar(30) DEFAULT NULL,
  `jumlah_ruang` int(11) DEFAULT NULL,
  `jumlah_luas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prasarana`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prasarana`
--

LOCK TABLES `prasarana` WRITE;
/*!40000 ALTER TABLE `prasarana` DISABLE KEYS */;
INSERT INTO `prasarana` VALUES (1,8,'sfdsdf',3,33),(2,8,'sdfsdf',34,34),(3,12,'hgj',0,0),(4,12,'jkl',0,0);
/*!40000 ALTER TABLE `prasarana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prasarana_kecuali_ruang_dosen`
--

DROP TABLE IF EXISTS `prasarana_kecuali_ruang_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prasarana_kecuali_ruang_dosen` (
  `id_prasarana_kecuali_ruang_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `jenis_prasarana` varchar(30) DEFAULT NULL,
  `jumlah_unit` int(11) DEFAULT NULL,
  `total_luas` int(11) DEFAULT NULL,
  `sd` int(1) DEFAULT NULL,
  `sw` int(1) DEFAULT NULL,
  `terawat` int(1) DEFAULT NULL,
  `tidak_terawat` int(1) DEFAULT NULL,
  `utilitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prasarana_kecuali_ruang_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prasarana_kecuali_ruang_dosen`
--

LOCK TABLES `prasarana_kecuali_ruang_dosen` WRITE;
/*!40000 ALTER TABLE `prasarana_kecuali_ruang_dosen` DISABLE KEYS */;
INSERT INTO `prasarana_kecuali_ruang_dosen` VALUES (1,8,'dfg',45,45,1,0,1,0,44),(2,8,'dfg',4,4,0,1,1,0,0);
/*!40000 ALTER TABLE `prasarana_kecuali_ruang_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prasarana_penunjang`
--

DROP TABLE IF EXISTS `prasarana_penunjang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prasarana_penunjang` (
  `id_prasarana_penunjang` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `jenis_prasarana` varchar(30) DEFAULT NULL,
  `jumlah_unit` int(11) DEFAULT NULL,
  `total_luas` int(11) DEFAULT NULL,
  `sd` int(1) DEFAULT NULL,
  `sw` int(1) DEFAULT NULL,
  `terawat` int(1) DEFAULT NULL,
  `tidak_terawat` int(1) DEFAULT NULL,
  `utilitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prasarana_penunjang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prasarana_penunjang`
--

LOCK TABLES `prasarana_penunjang` WRITE;
/*!40000 ALTER TABLE `prasarana_penunjang` DISABLE KEYS */;
INSERT INTO `prasarana_penunjang` VALUES (1,8,'dfgdf',4,45,0,1,0,1,44);
/*!40000 ALTER TABLE `prasarana_penunjang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestasi_pencapaian_mahasiswa`
--

DROP TABLE IF EXISTS `prestasi_pencapaian_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestasi_pencapaian_mahasiswa` (
  `id_prestasi_pencapaian_mahaiswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_prestasi_dan_tempat_pelaksanaan` text,
  `tingkat` varchar(30) DEFAULT NULL,
  `prestasi_dicapai` varchar(30) DEFAULT NULL,
  `id_submission` int(11) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prestasi_pencapaian_mahaiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestasi_pencapaian_mahasiswa`
--

LOCK TABLES `prestasi_pencapaian_mahasiswa` WRITE;
/*!40000 ALTER TABLE `prestasi_pencapaian_mahasiswa` DISABLE KEYS */;
INSERT INTO `prestasi_pencapaian_mahasiswa` VALUES (1,'lorem ipsum','dolor','sit amet',8,273),(2,'conseqteture ','juste odio','dolorem ispsum',8,274),(3,'Prestasi 1','Nasional','Nama Prest',12,365),(4,'Satu p','Internasional','basing',12,366),(5,'Juara 1','Lokal','Jajal',12,367);
/*!40000 ALTER TABLE `prestasi_pencapaian_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pustaka`
--

DROP TABLE IF EXISTS `pustaka`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pustaka` (
  `id_pustaka` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `jenis_pustaka` varchar(30) DEFAULT NULL,
  `jumlah_judul` int(11) DEFAULT NULL,
  `jumlah_copy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pustaka`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pustaka`
--

LOCK TABLES `pustaka` WRITE;
/*!40000 ALTER TABLE `pustaka` DISABLE KEYS */;
INSERT INTO `pustaka` VALUES (1,8,'dfgd',4,44),(2,8,'dfgdf',44,434);
/*!40000 ALTER TABLE `pustaka` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realisasi_perolehan_dana`
--

DROP TABLE IF EXISTS `realisasi_perolehan_dana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realisasi_perolehan_dana` (
  `id_realisasi_perolehan_dana` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `sumber_dana` varchar(30) DEFAULT NULL,
  `jenis_dana` varchar(30) DEFAULT NULL,
  `jumlah_dana_th2` bigint(20) DEFAULT NULL,
  `jumlah_dana_th1` bigint(20) DEFAULT NULL,
  `jumlah_dana_th0` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_realisasi_perolehan_dana`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realisasi_perolehan_dana`
--

LOCK TABLES `realisasi_perolehan_dana` WRITE;
/*!40000 ALTER TABLE `realisasi_perolehan_dana` DISABLE KEYS */;
INSERT INTO `realisasi_perolehan_dana` VALUES (1,8,'sfsd','sdfsdf',34,344,54),(2,8,'sgdsf','sdfsdf',34,44,333),(3,8,'fgdfg','dfg',33,3,4),(4,8,'sdf','sdf',2,22,3),(5,12,'qwe','asd',0,0,0),(6,12,'dfg','ert',0,0,0);
/*!40000 ALTER TABLE `realisasi_perolehan_dana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistem_informasi`
--

DROP TABLE IF EXISTS `sistem_informasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistem_informasi` (
  `id_sistem_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `jenis_data` varchar(30) DEFAULT NULL,
  `manual` int(11) DEFAULT NULL,
  `komputer_luring` int(11) DEFAULT NULL,
  `komputer_lan` int(11) DEFAULT NULL,
  `komputer_wan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sistem_informasi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistem_informasi`
--

LOCK TABLES `sistem_informasi` WRITE;
/*!40000 ALTER TABLE `sistem_informasi` DISABLE KEYS */;
INSERT INTO `sistem_informasi` VALUES (1,8,'sdfsdf',1,0,0,0),(2,8,'sdfsdf',0,1,0,0),(3,8,'sdfdsf',0,0,1,0),(4,8,'erere',0,0,0,1);
/*!40000 ALTER TABLE `sistem_informasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standar_1`
--

DROP TABLE IF EXISTS `standar_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standar_1` (
  `id_standar_1` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_standar_1`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standar_1`
--

LOCK TABLES `standar_1` WRITE;
/*!40000 ALTER TABLE `standar_1` DISABLE KEYS */;
INSERT INTO `standar_1` VALUES (1,8,265),(2,12,420),(3,14,445);
/*!40000 ALTER TABLE `standar_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standar_2`
--

DROP TABLE IF EXISTS `standar_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standar_2` (
  `id_standar_2` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) NOT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_standar_2`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standar_2`
--

LOCK TABLES `standar_2` WRITE;
/*!40000 ALTER TABLE `standar_2` DISABLE KEYS */;
INSERT INTO `standar_2` VALUES (1,8,266),(2,12,404);
/*!40000 ALTER TABLE `standar_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `struktur_kurikulum`
--

DROP TABLE IF EXISTS `struktur_kurikulum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `struktur_kurikulum` (
  `id_struktur_kurikulum` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kode_mk` varchar(10) DEFAULT NULL,
  `nama_mk` varchar(30) DEFAULT NULL,
  `bobot_sks_kuliah` int(11) DEFAULT NULL,
  `bobot_Sks_praktikum` int(11) DEFAULT NULL,
  `inti` int(11) DEFAULT NULL,
  `institusional` int(11) DEFAULT NULL,
  `bobot_tugas` int(11) DEFAULT NULL,
  `kelengkapan_deskripsi` varchar(30) DEFAULT NULL,
  `kelengkapan_silabus` varchar(30) DEFAULT NULL,
  `kelengkapan_sap` varchar(30) DEFAULT NULL,
  `unit_penyelenggara` varchar(30) DEFAULT NULL,
  `id_attachmentfile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_struktur_kurikulum`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `struktur_kurikulum`
--

LOCK TABLES `struktur_kurikulum` WRITE;
/*!40000 ALTER TABLE `struktur_kurikulum` DISABLE KEYS */;
INSERT INTO `struktur_kurikulum` VALUES (1,8,1,'sds','sdg',0,0,0,1,34,'sdfsdf','sfsdf','sdfsd','sfs',289),(2,8,1,'sdfsd','sdf',0,0,1,0,34,'dsfds','fsdf','sdfs','dfsd',290),(3,12,1,'002','Pengantar Pemrograman Komputer',6,4,1,0,30,'Lorem','Ipsum','Sit Amet','Ekonomi Dan Bisnis',421),(5,12,1,'001','Pemrograman Komputer A',3,3,1,0,15,'Lorem','Lorem','Lorem','Lorem',431);
/*!40000 ALTER TABLE `struktur_kurikulum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submission`
--

DROP TABLE IF EXISTS `submission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submission` (
  `id_submission` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tahun` year(4) NOT NULL,
  `status_submission` varchar(10) NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`id_submission`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submission`
--

LOCK TABLES `submission` WRITE;
/*!40000 ALTER TABLE `submission` DISABLE KEYS */;
INSERT INTO `submission` VALUES (8,6,'2016-06-07 20:35:16',2016,'submitted'),(10,1,'2016-06-11 20:27:13',2015,'submitted'),(11,2,'2016-06-15 17:30:28',2017,'draft'),(12,1,'2016-06-16 14:28:06',2018,'submitted'),(14,6,'2016-08-08 01:48:33',2016,'submitted');
/*!40000 ALTER TABLE `submission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `substansi_praktikum`
--

DROP TABLE IF EXISTS `substansi_praktikum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `substansi_praktikum` (
  `id_substansi_praktikum` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `nama_praktikum` varchar(30) DEFAULT NULL,
  `judul_modul` varchar(30) DEFAULT NULL,
  `jam_pelaksanaan` varchar(10) DEFAULT NULL,
  `tempat_praktikum` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_substansi_praktikum`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `substansi_praktikum`
--

LOCK TABLES `substansi_praktikum` WRITE;
/*!40000 ALTER TABLE `substansi_praktikum` DISABLE KEYS */;
INSERT INTO `substansi_praktikum` VALUES (1,8,'dfgf','dfgdf','dfg','dfgdf'),(2,8,'dfg','dfg','dfgdf','dfgfdg'),(3,12,'Praktikum x','judul','2','Lab Kom'),(4,12,'sd','sd','sd','sd');
/*!40000 ALTER TABLE `substansi_praktikum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenaga_kependidikan`
--

DROP TABLE IF EXISTS `tenaga_kependidikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tenaga_kependidikan` (
  `id_tenaga_kependidikan` int(11) NOT NULL AUTO_INCREMENT,
  `id_submission` int(11) DEFAULT NULL,
  `jenis_tenaga_kependidikan` varchar(30) DEFAULT NULL,
  `jumlah_s3` int(11) DEFAULT NULL,
  `jumlah_s2` int(11) DEFAULT NULL,
  `jumlah_s1` int(11) DEFAULT NULL,
  `jumlah_d4` int(11) DEFAULT NULL,
  `jumlah_d3` int(11) DEFAULT NULL,
  `jumlah_d2` int(11) DEFAULT NULL,
  `jumlah_d1` int(11) DEFAULT NULL,
  `jumlah_smak` int(11) DEFAULT NULL,
  `unit_kerja` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_tenaga_kependidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenaga_kependidikan`
--

LOCK TABLES `tenaga_kependidikan` WRITE;
/*!40000 ALTER TABLE `tenaga_kependidikan` DISABLE KEYS */;
INSERT INTO `tenaga_kependidikan` VALUES (1,8,'dfhdfh',4,45,5,44,0,0,0,0,'dfgf'),(2,8,'dfgdfg',0,5,4,4,0,0,0,0,'dfg'),(3,12,'sdfsd',3,4,4,3,33,4,4,5,'ers'),(4,12,'jajal',0,0,0,0,0,0,0,0,'sss');
/*!40000 ALTER TABLE `tenaga_kependidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usaha_pencarian_tempat_kerja`
--

DROP TABLE IF EXISTS `usaha_pencarian_tempat_kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usaha_pencarian_tempat_kerja` (
  `id_usaha` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_usaha` varchar(30) NOT NULL,
  `keterangan` text,
  `id_submission` int(11) NOT NULL,
  PRIMARY KEY (`id_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usaha_pencarian_tempat_kerja`
--

LOCK TABLES `usaha_pencarian_tempat_kerja` WRITE;
/*!40000 ALTER TABLE `usaha_pencarian_tempat_kerja` DISABLE KEYS */;
INSERT INTO `usaha_pencarian_tempat_kerja` VALUES (1,'lorem ispsum','dolor sit amet konseqteture juste odio dolorem ipsum',8),(2,'dolor sit amet konseqteture ju','dolor sit amet konseqteture juste odio dolorem ipsum',8),(3,'Jobsfair','Sugargroup',12),(4,'Test','Jajal',12);
/*!40000 ALTER TABLE `usaha_pencarian_tempat_kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_realname` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `id_login` int(11) NOT NULL,
  `ps` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Dewi Kania','KaPS',1,'Manajemen Informatika'),(2,'xxxx','KaPS',2,'akuntansi'),(3,'Administrator','Administrator',3,'-'),(5,'Kajur','Kajur',5,'-'),(6,'manajemen informatika','KaPS',6,'Manajemen Informatika'),(7,'Agribisnis','KaPS',7,'Agribisnis');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-17  8:25:46
