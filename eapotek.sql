-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: eapotek
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `attendances`
--

DROP TABLE IF EXISTS `attendances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendances`
--

LOCK TABLES `attendances` WRITE;
/*!40000 ALTER TABLE `attendances` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branches` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branches`
--

LOCK TABLES `branches` WRITE;
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` VALUES (1,'16102126','K-24 JEND. SUDIRMAN','JL. JEND. SOEDIRMAN NO.259 RT.2/1 PURWOKERTO TENGGARA, PURWOKERTO, JAWA TENGAH, 56311',NULL,NULL),(2,'16102124','K-24 BAROKAH JAYA','JL. KAUMAN NO.100 RT.3/3 PAKEM SLEMAN, DAERAH ISTIMEWA YOGYAKARTA, 29890',NULL,NULL),(3,'16102137','K-24 RIDHO ILAHI','JL. SWATANTRA V NO.20 RT.4/2 DUREN SAWIT, BEKASI, JAWA BARAT, 64399',NULL,NULL),(4,'16102137','K-24 MAKMUR SENTOSA','JL. AKASIA NO.311 RT.9/1 JATIASIH, BEKASI, JAWA BARAT, 64217',NULL,NULL);
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicines`
--

DROP TABLE IF EXISTS `medicines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicines` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaobat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicines`
--

LOCK TABLES `medicines` WRITE;
/*!40000 ALTER TABLE `medicines` DISABLE KEYS */;
INSERT INTO `medicines` VALUES ('ACNE 11','1','ACNES SALING JELL 9 GR','Salep',23000,1,'2019-07-22 13:46:46','2019-07-22 13:46:46',NULL),('AKHL 11','1','ALKOHOL 70% IKA 100 ML','Larutan',20000,0,'2019-07-22 13:50:01','2019-07-22 13:50:01',NULL),('ALBO 11','1','ALBOTHYL 5 ML','Larutan',30000,23,'2019-07-22 13:09:19','2019-07-22 13:09:19',NULL),('ATGN 11','1','ANTANGIN JUNIOR HONEY MINT 5s','Larutan',10000,15,'2019-07-22 13:29:56','2019-07-22 13:29:56',NULL),('BDRX 11','1','BODREXIN FLU DAN BATUK SYR 60 ML','Larutan',11000,14,'2019-07-22 13:34:47','2019-07-22 13:34:47',NULL),('CBRV 11','1','CEREBROVIT TAB STR','Tablet',19000,2,'2019-07-22 13:23:36','2019-07-22 13:23:36',NULL),('HPMX 1','1','HEPAMAX CAP','Tablet',350000,9,'2019-07-22 13:17:54','2019-07-22 13:17:54',NULL),('INST 11','1','INSTO MOIST TETES MATA','Satuan Lain',14000,0,'2019-07-22 13:55:10','2019-07-22 13:55:10',NULL),('MTLN','1','TIGA ANAK MINYAK TELON 90 ML','Larutan',26000,2,'2019-07-22 13:39:06','2019-07-22 13:39:06',NULL),('OBH BTL 11','1','OBH Botol 100 ML','Larutan',18500,2,'2019-07-22 13:02:40','2019-07-22 13:02:40',NULL);
/*!40000 ALTER TABLE `medicines` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_04_16_032856_create_medicines_table',1),(4,'2019_04_16_033925_create_branches_table',1),(5,'2019_04_16_034457_create_suppliers_table',1),(6,'2019_04_23_143140_remove_supplier_i_d_from_medicine_table',1),(7,'2019_04_25_064803_create_suppling_table',1),(8,'2019_05_17_023612_create_note_supplier_table',1),(9,'2019_05_17_112000_create_workers_table',1),(10,'2019_05_17_125423_create_attendances_table',1),(11,'2019_05_21_062454_create_positions_table',1),(12,'2019_05_24_082449_create_transactions_table',1),(13,'2019_07_12_084352_modify_transaction',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note_supplier`
--

DROP TABLE IF EXISTS `note_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `note_supplier` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalbiaya` double NOT NULL,
  `tanggalsupply` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note_supplier`
--

LOCK TABLES `note_supplier` WRITE;
/*!40000 ALTER TABLE `note_supplier` DISABLE KEYS */;
INSERT INTO `note_supplier` VALUES (51,1,1,'Penyuplaian OBH 30 Botol',450000,'2019-07-22'),(52,2,1,'Penyuplaian ALBOTHYL 40 BOTOL',1000000,'2019-07-22'),(53,3,1,'Penyuplaian HEPAMAX CAP 20 BOTOL',320000,'2019-07-23'),(54,4,1,'Penyuplaian CEREBROVIT TABLET 25 STRIP',375000,'2019-06-28'),(55,5,1,'Penyuplaian ANTANGIN CAIR JUNIOR HONEY MINT SACHET 5s 35 Dus',280000,'2019-06-27'),(56,6,1,'Penyuplaian BODREXIN FLU DAN BATUK SYRUP 60 ML 35 BOTOL',280000,'2019-06-12'),(57,7,1,'Penyuplaian TIGA ANAK MINYAK TELON 90 ML 20 BOTOL',480000,'2019-06-17'),(58,8,1,'Penyuplaian ACNES SALING JELL 9 GR 25 TUBE',500000,'2019-05-14'),(59,9,1,'Penyuplaian ALKOHOL 70% IKA 100 ML 10 BOTOL',180000,'2019-05-17'),(60,10,1,'Penyuplaian INSTO MOIST TETES MATA 12 DUS',144000,'2019-05-20');
/*!40000 ALTER TABLE `note_supplier` ENABLE KEYS */;
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
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,2,'Housekeeper',2512636),(2,1,'Rail Yard Engineer',3012335),(3,1,'Mechanical Engineer',2380255),(4,3,'Computer Scientist',2481466),(5,4,'Survey Researcher',3002178),(6,4,'Vocational Education Teacher',2804921),(7,4,'Compensation and Benefits Manager',2613974),(8,2,'Social and Human Service Assistant',3006426),(9,2,'Textile Dyeing Machine Operator',2857759),(10,3,'Armored Assault Vehicle Crew Member',2748433),(11,3,'Farmer',2727164),(12,1,'Command Control Center Officer',2467489),(13,3,'Insurance Claims Clerk',2584574),(14,3,'Civil Engineering Technician',2904545),(15,3,'Locker Room Attendant',2964014),(16,1,'Shuttle Car Operator',2958839),(17,2,'Urban Planner',2615769),(18,3,'Petroleum Technician',2968964),(19,2,'Human Resources Specialist',2790791),(20,2,'Bailiff',2362814),(21,1,'Floral Designer',2744678),(22,2,'Corporate Trainer',2411400),(23,2,'Grinder OR Polisher',2497219),(24,4,'University',2501450),(25,2,'Biologist',3016689),(26,3,'Geological Sample Test Technician',2747973),(27,4,'Real Estate Sales Agent',3097361),(28,3,'Telephone Operator',2468494),(29,3,'Skin Care Specialist',2450191),(30,2,'Public Relations Specialist',3038690);
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,1,'PT Empat Sekawan','Jl. Raya Pd. Gede, Jakarta Selatan','085123485445','Empat@sekawan.com','2019-07-22 12:06:03','2019-07-22 12:10:48'),(2,1,'PT Dua Berlian','Jl. Lintas Sumatra.  Upang','089009321009','duaberlian@yahoo.com','2019-07-22 12:13:00','2019-07-22 12:13:00'),(3,1,'CV Merah Putih','Jl. Raya Junti. Renglesdengklok','082134555781','merahputih@yahoo.com','2019-07-22 12:15:16','2019-07-22 12:15:16'),(4,1,'CV Suara Sejahtera','Jl. Selawangi. Tangerang','089931222111','sejahterasuara@gmail.com','2019-07-22 12:16:59','2019-07-22 12:16:59'),(5,1,'PT Naga Putih','Jl. Bancar Kembar. Banyumas','081767545111','Nagaputih11@gmail.com','2019-07-22 12:18:51','2019-07-22 12:18:51'),(6,1,'PT Sehat Raga','Jl. Kober Timur. Tegal','081111232008','sehat123@gmail.com','2019-07-22 12:20:23','2019-07-22 12:20:23'),(7,1,'PT Keong Ajaib','Jl. Sunan Kalijaga. Surabaya','083124444500','kerangajaib@gmail.com','2019-07-22 12:22:42','2019-07-22 12:22:42'),(8,1,'PT Samudra Merah','Jl. Soederman. Semarang','081232454119','samudramerah@gmail.com','2019-07-22 12:24:03','2019-07-22 12:24:03'),(9,1,'CV Panda Jawa','Jl. Kali Urang. Solo','081444333212','jawapanda@gmail.com','2019-07-22 12:25:17','2019-07-22 12:25:17'),(10,1,'CV Putra Petir','Jl. Raya Magelang. Yogyakarta','081002001007','putrapetir@gmail.com','2019-07-22 12:26:08','2019-07-22 12:26:08');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplying`
--

DROP TABLE IF EXISTS `supplying`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplying` (
  `id_supplier` int(11) NOT NULL,
  `id_medicine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplying`
--

LOCK TABLES `supplying` WRITE;
/*!40000 ALTER TABLE `supplying` DISABLE KEYS */;
INSERT INTO `supplying` VALUES (1,'OBH BTL 11'),(2,'ALBO 11'),(2,'HPMX 1'),(4,'CBRV 11'),(5,'ATGN 11'),(6,'BDRX 11'),(7,'MTLN'),(8,'ACNE 11'),(9,'AKHL 11'),(10,'INST 11');
/*!40000 ALTER TABLE `supplying` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` tinyint(4) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `totalbiaya` double NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,'$2y$10$joMHSjqD1wEtQGpOgy7/nOydjbB2Q1G/IBNQrallPEaxU4CnkkPOq','ACNE 11',1,2,46000,'2019-07-22'),(2,'$2y$10$joMHSjqD1wEtQGpOgy7/nOydjbB2Q1G/IBNQrallPEaxU4CnkkPOq','INST 11',1,1,14000,'2019-07-22'),(3,'$2y$10$CV4j4mFo0N9DgYZOMh2rL.y4QxfkxXHDW.iqchcm0iAZVI776uziG','AKHL 11',1,1,20000,'2019-07-22'),(4,'$2y$10$CV4j4mFo0N9DgYZOMh2rL.y4QxfkxXHDW.iqchcm0iAZVI776uziG','MTLN',1,1,26000,'2019-07-22'),(5,'$2y$10$CV4j4mFo0N9DgYZOMh2rL.y4QxfkxXHDW.iqchcm0iAZVI776uziG','ALBO 11',1,1,30000,'2019-07-22'),(6,'$2y$10$mZlE8FTqF8aIdlYb0GhPWui1FUapPy27f/UrUTKbFL13mdaY.A7hC','BDRX 11',1,2,22000,'2019-07-22'),(7,'$2y$10$mZlE8FTqF8aIdlYb0GhPWui1FUapPy27f/UrUTKbFL13mdaY.A7hC','OBH BTL 11',1,1,18500,'2019-07-22'),(8,'$2y$10$GjEfPo8rZBWblWkmUJgm0eNsDg01lQMCmR4AuspQTZiqCxf4Xo5fm','ATGN 11',1,1,10000,'2019-07-22'),(9,'$2y$10$GjEfPo8rZBWblWkmUJgm0eNsDg01lQMCmR4AuspQTZiqCxf4Xo5fm','CBRV 11',1,2,38000,'2019-07-22'),(10,'$2y$10$L2BzSpFSRNut1LQebftDO.kfn.DVh8mPnVc2OCxO7qfnmXxhFa226','MTLN',1,1,26000,'2019-07-22'),(11,'$2y$10$L2BzSpFSRNut1LQebftDO.kfn.DVh8mPnVc2OCxO7qfnmXxhFa226','HPMX 1',1,1,350000,'2019-07-22'),(12,'$2y$10$L2BzSpFSRNut1LQebftDO.kfn.DVh8mPnVc2OCxO7qfnmXxhFa226','ALBO 11',1,1,30000,'2019-07-22'),(13,'$2y$10$NAKSKe8nnzXTuhIekHZmwuzScRsM517cosdfZ43g7awRroKOUUQCa','ACNE 11',1,3,69000,'2019-07-22'),(14,'$2y$10$NAKSKe8nnzXTuhIekHZmwuzScRsM517cosdfZ43g7awRroKOUUQCa','MTLN',1,2,52000,'2019-07-22'),(15,'$2y$10$w9oiUualJ4s7Rtk.7W9.XuNWwUk/pvRe/OiMfjivmqAloYz3Fcs6S','ATGN 11',1,3,30000,'2019-07-22'),(16,'$2y$10$w9oiUualJ4s7Rtk.7W9.XuNWwUk/pvRe/OiMfjivmqAloYz3Fcs6S','BDRX 11',1,1,11000,'2019-07-22'),(17,'$2y$10$.aclstS9p9lz6UyoLzCttOOWD2LxkeIY/PlMbOhEr8FLoHfKhNhtq','CBRV 11',1,1,19000,'2019-07-22'),(18,'$2y$10$.aclstS9p9lz6UyoLzCttOOWD2LxkeIY/PlMbOhEr8FLoHfKhNhtq','INST 11',1,1,14000,'2019-07-22'),(19,'$2y$10$.aclstS9p9lz6UyoLzCttOOWD2LxkeIY/PlMbOhEr8FLoHfKhNhtq','MTLN',1,1,26000,'2019-07-22'),(20,'$2y$10$.aclstS9p9lz6UyoLzCttOOWD2LxkeIY/PlMbOhEr8FLoHfKhNhtq','ACNE 11',1,1,23000,'2019-07-22'),(21,'$2y$10$.aclstS9p9lz6UyoLzCttOOWD2LxkeIY/PlMbOhEr8FLoHfKhNhtq','ALBO 11',1,1,30000,'2019-07-22'),(22,'$2y$10$aPF/uCR8n7EVXHmyreYE7OwkYbkVA2DNdSZOmCM/MPW8hzlJPSRLK','AKHL 11',1,2,40000,'2019-07-22'),(23,'$2y$10$aPF/uCR8n7EVXHmyreYE7OwkYbkVA2DNdSZOmCM/MPW8hzlJPSRLK','ALBO 11',1,2,60000,'2019-07-22'),(24,'$2y$10$DAIxjKr81s4tBDgGff7DGOQvyqcL8IhR7hxov5cNg5oOwlJ8EhMne','BDRX 11',1,1,11000,'2019-07-22'),(25,'$2y$10$DAIxjKr81s4tBDgGff7DGOQvyqcL8IhR7hxov5cNg5oOwlJ8EhMne','OBH BTL 11',1,1,18500,'2019-07-22'),(26,'$2y$10$DAIxjKr81s4tBDgGff7DGOQvyqcL8IhR7hxov5cNg5oOwlJ8EhMne','CBRV 11',1,1,19000,'2019-07-22'),(27,'$2y$10$qo86.UyoiPYCaswWzTG09OK/jI41AVQc/UHaklRd3BmWasMuKPEhS','AKHL 11',1,1,20000,'2019-07-22'),(28,'$2y$10$qo86.UyoiPYCaswWzTG09OK/jI41AVQc/UHaklRd3BmWasMuKPEhS','INST 11',1,1,14000,'2019-07-22'),(29,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','OBH BTL 11',1,1,18500,'2019-07-22'),(30,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','MTLN',1,1,26000,'2019-07-22'),(31,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','INST 11',1,1,14000,'2019-07-22'),(32,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','HPMX 1',1,1,350000,'2019-07-22'),(33,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','CBRV 11',1,1,19000,'2019-07-22'),(34,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','BDRX 11',1,1,11000,'2019-07-22'),(35,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','ATGN 11',1,1,10000,'2019-07-22'),(36,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','ALBO 11',1,1,30000,'2019-07-22'),(37,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','AKHL 11',1,1,20000,'2019-07-22'),(38,'$2y$10$bqozGfwszspkmTjGuObVMOgb4RbUwAj/YyHvBdNvqdZFq2vhaA/j2','ACNE 11',1,1,23000,'2019-07-22'),(39,'$2y$10$7Tu5G8P0qHVM0q8QoWup5eXgE5eZiUas.GTmSHtOB0e9bSpT9MfJm','ACNE 11',1,2,46000,'2019-07-22'),(40,'$2y$10$7Tu5G8P0qHVM0q8QoWup5eXgE5eZiUas.GTmSHtOB0e9bSpT9MfJm','ALBO 11',1,1,30000,'2019-07-22'),(41,'$2y$10$7Tu5G8P0qHVM0q8QoWup5eXgE5eZiUas.GTmSHtOB0e9bSpT9MfJm','ATGN 11',1,3,30000,'2019-07-22'),(42,'$2y$10$7Tu5G8P0qHVM0q8QoWup5eXgE5eZiUas.GTmSHtOB0e9bSpT9MfJm','BDRX 11',1,1,11000,'2019-07-22'),(43,'$2y$10$7Tu5G8P0qHVM0q8QoWup5eXgE5eZiUas.GTmSHtOB0e9bSpT9MfJm','MTLN',1,1,26000,'2019-07-22'),(44,'$2y$10$u.6JgM4HeOueptDJWX.pzeY2St2W82r41keqq9Awq8uG5jUUhnioe','CBRV 11',1,1,19000,'2019-07-22'),(45,'$2y$10$u.6JgM4HeOueptDJWX.pzeY2St2W82r41keqq9Awq8uG5jUUhnioe','ATGN 11',1,1,10000,'2019-07-22'),(46,'$2y$10$mcUosjrp5fEakTBEaIDhEOeigIzNvkixmbgFVkTMRk8m2C4q76BPi','INST 11',1,1,14000,'2019-07-22'),(47,'$2y$10$mcUosjrp5fEakTBEaIDhEOeigIzNvkixmbgFVkTMRk8m2C4q76BPi','CBRV 11',1,1,19000,'2019-07-22'),(48,'$2y$10$KDCB8TOaC7Md6AlHaz3uI.aCpk2pmZ0tkPai61wPtOlup1b68xFsO','BDRX 11',1,3,33000,'2019-07-22'),(49,'$2y$10$KDCB8TOaC7Md6AlHaz3uI.aCpk2pmZ0tkPai61wPtOlup1b68xFsO','OBH BTL 11',1,1,18500,'2019-07-22'),(50,'$2y$10$0zag0TrF.HhwKp48D7TeRuf/FOS9Ut/dJ5efnCHa62P1BHlz5UrWO','MTLN',1,1,26000,'2019-07-22'),(51,'$2y$10$0zag0TrF.HhwKp48D7TeRuf/FOS9Ut/dJ5efnCHa62P1BHlz5UrWO','ATGN 11',1,1,10000,'2019-07-22'),(52,'$2y$10$oLRNix9RdkSggE6jbCArOOEgwaNArV8j33mgyor7.vwrBitMPHgrK','HPMX 1',1,1,350000,'2019-07-22'),(53,'$2y$10$oLRNix9RdkSggE6jbCArOOEgwaNArV8j33mgyor7.vwrBitMPHgrK','CBRV 11',1,1,19000,'2019-07-22'),(54,'$2y$10$uTct2QVQYMwaI4mk1tsJOuvCLXX9l2VkCaVOyoRuxCCqdzZ18xsI.','OBH BTL 11',1,1,18500,'2019-07-22'),(55,'$2y$10$uTct2QVQYMwaI4mk1tsJOuvCLXX9l2VkCaVOyoRuxCCqdzZ18xsI.','ALBO 11',1,1,30000,'2019-07-22'),(56,'$2y$10$uTct2QVQYMwaI4mk1tsJOuvCLXX9l2VkCaVOyoRuxCCqdzZ18xsI.','ACNE 11',1,1,23000,'2019-07-22'),(57,'$2y$10$wgfLUd0e9manvEdI8/SxUeZtlwyCCIgxnKq8zRXLU3FfmxVougPR6','ACNE 11',1,2,46000,'2019-07-22'),(58,'$2y$10$wgfLUd0e9manvEdI8/SxUeZtlwyCCIgxnKq8zRXLU3FfmxVougPR6','AKHL 11',1,1,20000,'2019-07-22'),(59,'$2y$10$YLAGHJmoSZ43O23ISxs1X.iZMO.niPT7WVdbnN86w1G0yd8xNfxQK','ALBO 11',1,1,30000,'2019-07-22'),(60,'$2y$10$YLAGHJmoSZ43O23ISxs1X.iZMO.niPT7WVdbnN86w1G0yd8xNfxQK','INST 11',1,1,14000,'2019-07-22'),(61,'$2y$10$YLAGHJmoSZ43O23ISxs1X.iZMO.niPT7WVdbnN86w1G0yd8xNfxQK','MTLN',1,1,26000,'2019-07-22'),(62,'$2y$10$YLAGHJmoSZ43O23ISxs1X.iZMO.niPT7WVdbnN86w1G0yd8xNfxQK','AKHL 11',1,1,20000,'2019-07-22'),(63,'$2y$10$YLAGHJmoSZ43O23ISxs1X.iZMO.niPT7WVdbnN86w1G0yd8xNfxQK','OBH BTL 11',1,1,18500,'2019-07-22'),(64,'$2y$10$FmPRJSALt5hbUBR87bA8ReSzWS7Ct5zDx9KX1IegCpog6gvrK5I.u','AKHL 11',1,2,40000,'2019-07-22'),(65,'$2y$10$FmPRJSALt5hbUBR87bA8ReSzWS7Ct5zDx9KX1IegCpog6gvrK5I.u','MTLN',1,1,26000,'2019-07-22'),(66,'$2y$10$p.JiFIuQOf87GWQtDDKBbevYbKCtGbQ9YLjMW.BQuuOTYtWTddh/G','ACNE 11',1,1,23000,'2019-07-22'),(67,'$2y$10$p.JiFIuQOf87GWQtDDKBbevYbKCtGbQ9YLjMW.BQuuOTYtWTddh/G','ATGN 11',1,1,10000,'2019-07-22'),(68,'$2y$10$O7s61xTEYVJGG.V1L4wnDOs6RB/J33nE8oUMO4nflyVZHrcsor9we','OBH BTL 11',1,1,18500,'2019-07-22'),(69,'$2y$10$O7s61xTEYVJGG.V1L4wnDOs6RB/J33nE8oUMO4nflyVZHrcsor9we','INST 11',1,1,14000,'2019-07-22'),(70,'$2y$10$O7s61xTEYVJGG.V1L4wnDOs6RB/J33nE8oUMO4nflyVZHrcsor9we','CBRV 11',1,1,19000,'2019-07-22'),(71,'$2y$10$O7s61xTEYVJGG.V1L4wnDOs6RB/J33nE8oUMO4nflyVZHrcsor9we','ATGN 11',1,1,10000,'2019-07-22'),(72,'$2y$10$zNGgSF/JX6L6ZfufSHP4zuEoE6uowvObFg1WmOZhcLWqjC.2xhygK','HPMX 1',1,1,350000,'2019-07-22'),(73,'$2y$10$zNGgSF/JX6L6ZfufSHP4zuEoE6uowvObFg1WmOZhcLWqjC.2xhygK','OBH BTL 11',1,1,18500,'2019-07-22'),(74,'$2y$10$jdAeTtCYBTb19FMEdYw.vOicG8t41kIUfS5BhqEV5ByvPHIu6m5oC','OBH BTL 11',1,2,37000,'2019-07-22'),(75,'$2y$10$jdAeTtCYBTb19FMEdYw.vOicG8t41kIUfS5BhqEV5ByvPHIu6m5oC','INST 11',1,1,14000,'2019-07-22'),(76,'$2y$10$Gb13xM7iNgV/H1oZ881ty.QL8IRjV.8xcLeixDFMtPAj033GHyaiW','AKHL 11',1,1,20000,'2019-07-22'),(77,'$2y$10$Gb13xM7iNgV/H1oZ881ty.QL8IRjV.8xcLeixDFMtPAj033GHyaiW','ALBO 11',1,1,30000,'2019-07-22'),(78,'$2y$10$WyIQMaeYhRRPddrpLJxcd.AwqProQFU1DPGbcSwYUG7Hm7W98pWhu','HPMX 1',1,1,350000,'2019-07-22'),(79,'$2y$10$RBOZiQjOoG6D.H5EYi7pduS9stDWI4ZS3aAeahDu/Ay8BcP1VZcxy','HPMX 1',1,1,350000,'2019-07-22'),(80,'$2y$10$RBOZiQjOoG6D.H5EYi7pduS9stDWI4ZS3aAeahDu/Ay8BcP1VZcxy','ACNE 11',1,1,23000,'2019-07-22'),(81,'$2y$10$AMk4CYmFYVfItGLi28mJNewwvzVbzFoprhz/0MNDQWFjKjSXHxaYO','OBH BTL 11',1,3,55500,'2019-07-22'),(82,'$2y$10$AMk4CYmFYVfItGLi28mJNewwvzVbzFoprhz/0MNDQWFjKjSXHxaYO','BDRX 11',1,1,11000,'2019-07-22'),(83,'$2y$10$5ScWHUhvPrV/PyJZ0bo9PuLT33.NBa3Nsq53PRU.34hz5N6BeHjKK','MTLN',1,1,26000,'2019-07-22'),(84,'$2y$10$5ScWHUhvPrV/PyJZ0bo9PuLT33.NBa3Nsq53PRU.34hz5N6BeHjKK','CBRV 11',1,1,19000,'2019-07-22'),(85,'$2y$10$zuiYO.LMkH4f4OURzST/nu.2/z6AP.RT4uhxHhrJBjMWGVmL/FZuG','ACNE 11',1,1,23000,'2019-07-22'),(86,'$2y$10$zuiYO.LMkH4f4OURzST/nu.2/z6AP.RT4uhxHhrJBjMWGVmL/FZuG','ATGN 11',1,1,10000,'2019-07-22'),(87,'$2y$10$veDHenFvN6NrOnOV3lCQ4uVLCVBFRaU1ohmjzFKEtH3Ha5woFBmKO','BDRX 11',1,2,22000,'2019-07-22'),(88,'$2y$10$veDHenFvN6NrOnOV3lCQ4uVLCVBFRaU1ohmjzFKEtH3Ha5woFBmKO','CBRV 11',1,1,19000,'2019-07-22'),(89,'$2y$10$vLf2UFjO4gxmtN84ZADvWOn48gwyERwaEtLVGSUuYdP0C.ZHHgoAy','ALBO 11',1,1,30000,'2019-07-22'),(90,'$2y$10$vLf2UFjO4gxmtN84ZADvWOn48gwyERwaEtLVGSUuYdP0C.ZHHgoAy','OBH BTL 11',1,1,18500,'2019-07-22'),(91,'$2y$10$vLf2UFjO4gxmtN84ZADvWOn48gwyERwaEtLVGSUuYdP0C.ZHHgoAy','CBRV 11',1,1,19000,'2019-07-22'),(92,'$2y$10$vLf2UFjO4gxmtN84ZADvWOn48gwyERwaEtLVGSUuYdP0C.ZHHgoAy','ALBO 11',1,1,30000,'2019-07-22'),(93,'$2y$10$vLf2UFjO4gxmtN84ZADvWOn48gwyERwaEtLVGSUuYdP0C.ZHHgoAy','OBH BTL 11',1,1,18500,'2019-07-22'),(94,'$2y$10$vLf2UFjO4gxmtN84ZADvWOn48gwyERwaEtLVGSUuYdP0C.ZHHgoAy','CBRV 11',1,1,19000,'2019-07-22'),(95,'$2y$10$y6vvDHNeavKU8kFADkqZ3udVD3Bl08PWd.4IZaWjBepmY1LEfTiH6','HPMX 1',1,1,350000,'2019-07-22'),(96,'$2y$10$y6vvDHNeavKU8kFADkqZ3udVD3Bl08PWd.4IZaWjBepmY1LEfTiH6','MTLN',1,1,26000,'2019-07-22'),(97,'$2y$10$Wt4Tewud7D34ZUUdQDZ/7u0vtOE85amaoHwevjztvZUpSN90/xGIy','ACNE 11',1,3,69000,'2019-07-22'),(98,'$2y$10$Wt4Tewud7D34ZUUdQDZ/7u0vtOE85amaoHwevjztvZUpSN90/xGIy','ALBO 11',1,1,30000,'2019-07-22'),(99,'$2y$10$mb0XSRsoeQQtlZoru/PUfuXNYu7KzAW695duxaeq3Xvd8P5SccUK6','ATGN 11',1,2,20000,'2019-07-22'),(100,'$2y$10$mb0XSRsoeQQtlZoru/PUfuXNYu7KzAW695duxaeq3Xvd8P5SccUK6','CBRV 11',1,2,38000,'2019-07-22'),(101,'$2y$10$m2DBivxH2AVOUoex/bY7beIWJP2U2M0gpxy1xtDObotcNduJvEQw2','HPMX 1',1,2,700000,'2019-07-22'),(102,'$2y$10$m2DBivxH2AVOUoex/bY7beIWJP2U2M0gpxy1xtDObotcNduJvEQw2','OBH BTL 11',1,1,18500,'2019-07-22'),(103,'$2y$10$KwJmlb7/i6x4myDm50iIc.6q9vVETar.OATO9CDP3MqQzVFMIh9Aq','OBH BTL 11',1,2,37000,'2019-07-22'),(104,'$2y$10$KwJmlb7/i6x4myDm50iIc.6q9vVETar.OATO9CDP3MqQzVFMIh9Aq','MTLN',1,1,26000,'2019-07-22'),(105,'$2y$10$Ke5ecJmHXf/NSKSPs3ZRmOkbcwDa5qBXtpKUNnEw6Fkt1g.I6/zji','CBRV 11',1,1,19000,'2019-07-22'),(106,'$2y$10$Ke5ecJmHXf/NSKSPs3ZRmOkbcwDa5qBXtpKUNnEw6Fkt1g.I6/zji','BDRX 11',1,2,22000,'2019-07-22'),(107,'$2y$10$ob.F6akXgvPnYgq98eKaGuqfbBLymPSiAQb87tpOvfu3CrGfTpdUK','ACNE 11',1,3,69000,'2019-07-22'),(108,'$2y$10$ob.F6akXgvPnYgq98eKaGuqfbBLymPSiAQb87tpOvfu3CrGfTpdUK','CBRV 11',1,1,19000,'2019-07-22'),(109,'$2y$10$Ux3A60eIowJcNkVbg9C69OMQX7ur9z01PdhG0/HDHHa4bnGLqsr2G','ACNE 11',1,1,23000,'2019-07-22'),(110,'$2y$10$Ux3A60eIowJcNkVbg9C69OMQX7ur9z01PdhG0/HDHHa4bnGLqsr2G','ALBO 11',1,1,30000,'2019-07-22'),(111,'$2y$10$Ux3A60eIowJcNkVbg9C69OMQX7ur9z01PdhG0/HDHHa4bnGLqsr2G','BDRX 11',1,1,11000,'2019-07-22'),(112,'$2y$10$Ux3A60eIowJcNkVbg9C69OMQX7ur9z01PdhG0/HDHHa4bnGLqsr2G','MTLN',1,1,26000,'2019-07-22'),(113,'$2y$10$Ux3A60eIowJcNkVbg9C69OMQX7ur9z01PdhG0/HDHHa4bnGLqsr2G','CBRV 11',1,1,19000,'2019-07-22'),(114,'$2y$10$H4OQ.gxu0QUDISSrGEWwRuPEqnuqU9yn7/JuFOv7ae9W.vLvYlPS6','OBH BTL 11',1,2,37000,'2019-07-22'),(115,'$2y$10$H4OQ.gxu0QUDISSrGEWwRuPEqnuqU9yn7/JuFOv7ae9W.vLvYlPS6','INST 11',1,1,14000,'2019-07-22'),(116,'$2y$10$QKogAWya98A6mJ8ebjFZF.o.pu3gagxlJuy0WSJRLVzEelaTGVIdq','INST 11',1,2,28000,'2019-07-22'),(117,'$2y$10$QKogAWya98A6mJ8ebjFZF.o.pu3gagxlJuy0WSJRLVzEelaTGVIdq','CBRV 11',1,1,19000,'2019-07-22'),(118,'$2y$10$XMqg7Kl2RsVQ46zrOrQ4c.SnomskUqLanP2GwSNvpih8ZD9mUDdnm','ATGN 11',1,2,20000,'2019-07-22'),(119,'$2y$10$XMqg7Kl2RsVQ46zrOrQ4c.SnomskUqLanP2GwSNvpih8ZD9mUDdnm','MTLN',1,1,26000,'2019-07-22'),(120,'$2y$10$SiInJDMVEhnbCBJcfTlSCOwyp9epG8dpSylQQAb2zVuok8smdclt2','ACNE 11',1,1,23000,'2019-07-22'),(121,'$2y$10$SiInJDMVEhnbCBJcfTlSCOwyp9epG8dpSylQQAb2zVuok8smdclt2','INST 11',1,1,14000,'2019-07-22'),(122,'$2y$10$SiInJDMVEhnbCBJcfTlSCOwyp9epG8dpSylQQAb2zVuok8smdclt2','HPMX 1',1,1,350000,'2019-07-22'),(123,'$2y$10$Xgecvo76dvpNkwX4IvzaQegf8QFvdvKcogymwPlvqhOqFE84znkWK','MTLN',1,1,26000,'2019-07-22'),(124,'$2y$10$Xgecvo76dvpNkwX4IvzaQegf8QFvdvKcogymwPlvqhOqFE84znkWK','OBH BTL 11',1,2,37000,'2019-07-22'),(125,'$2y$10$Xgecvo76dvpNkwX4IvzaQegf8QFvdvKcogymwPlvqhOqFE84znkWK','BDRX 11',1,2,22000,'2019-07-22'),(126,'$2y$10$x7UalsniSUghLufPvyQS8OOHxR10rfqmTA/7/ePi04P13GrZhS7p6','BDRX 11',1,2,22000,'2019-07-22'),(127,'$2y$10$x7UalsniSUghLufPvyQS8OOHxR10rfqmTA/7/ePi04P13GrZhS7p6','OBH BTL 11',1,2,37000,'2019-07-22'),(128,'$2y$10$vHME1BScXOKVAcJ9yInwQO6w4nbBalhHkQueaexme25Th8yNsXWPW','CBRV 11',1,1,19000,'2019-07-22'),(129,'$2y$10$vHME1BScXOKVAcJ9yInwQO6w4nbBalhHkQueaexme25Th8yNsXWPW','ATGN 11',1,1,10000,'2019-07-22'),(130,'$2y$10$cOhqThfFfDc8hkjQTivEiOL017YAltiZ/x8WBhVg7s/2rXKMNz3RS','BDRX 11',1,1,11000,'2019-07-22'),(131,'$2y$10$cOhqThfFfDc8hkjQTivEiOL017YAltiZ/x8WBhVg7s/2rXKMNz3RS','OBH BTL 11',1,1,18500,'2019-07-22'),(132,'$2y$10$QUtk.yiO0srALL6B3CDndOgG5xeQO0OkqkLaPib/f3koSWxnthgjG','ALBO 11',1,2,60000,'2019-07-22'),(133,'$2y$10$QUtk.yiO0srALL6B3CDndOgG5xeQO0OkqkLaPib/f3koSWxnthgjG','OBH BTL 11',1,1,18500,'2019-07-22'),(134,'$2y$10$KhBbr.z2epRb/TaiF83s5uwI/yyGIcppp7CivSFOCUpoahVIitbma','ACNE 11',1,1,23000,'2019-07-22'),(135,'$2y$10$KhBbr.z2epRb/TaiF83s5uwI/yyGIcppp7CivSFOCUpoahVIitbma','ALBO 11',1,1,30000,'2019-07-22'),(136,'$2y$10$KhBbr.z2epRb/TaiF83s5uwI/yyGIcppp7CivSFOCUpoahVIitbma','ATGN 11',1,1,10000,'2019-07-22'),(137,'$2y$10$KhBbr.z2epRb/TaiF83s5uwI/yyGIcppp7CivSFOCUpoahVIitbma','MTLN',1,1,26000,'2019-07-22'),(138,'$2y$10$sRuc09N35zTa5aq8yTeiYeGyTu7C.DbHEx55v//q6SiqgzVb8g3fG','OBH BTL 11',1,2,37000,'2019-07-22'),(139,'$2y$10$sRuc09N35zTa5aq8yTeiYeGyTu7C.DbHEx55v//q6SiqgzVb8g3fG','BDRX 11',1,1,11000,'2019-07-22'),(140,'$2y$10$Ca7ET5q5.kEc.cSb9H9KieZ0tw/kdV8PRactwactYQkIXSzckSldS','ATGN 11',1,1,10000,'2019-07-22'),(141,'$2y$10$Ca7ET5q5.kEc.cSb9H9KieZ0tw/kdV8PRactwactYQkIXSzckSldS','MTLN',1,1,26000,'2019-07-22'),(142,'$2y$10$Ca7ET5q5.kEc.cSb9H9KieZ0tw/kdV8PRactwactYQkIXSzckSldS','CBRV 11',1,1,19000,'2019-07-22'),(143,'$2y$10$u9iKz9XDiJVKLiP5SViEl.mwedjjdTGvmqPrV9SsqMO121uSlqxmy','HPMX 1',1,1,350000,'2019-07-22'),(144,'$2y$10$u9iKz9XDiJVKLiP5SViEl.mwedjjdTGvmqPrV9SsqMO121uSlqxmy','CBRV 11',1,2,38000,'2019-07-22');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nik_unique` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Khalid Abdurrahman','branchhead','16102126',NULL,'$2y$10$f2DXNPwGahUndAn5KooEoOUUJtAiJli3Hg2N7/Bi2op.1VmPHxkMC',NULL,NULL,NULL),(2,'Ridwan Risandi','owner','16102137',NULL,'$2y$10$Xu4K4sn69p.rR3O0etyfg.n2kTGsyFkv5Bn5QoyqDXlsMKbVOY3.i',NULL,NULL,NULL),(3,'Hesa Abda','branchworker','16102124',NULL,'$2y$10$VzF2Du6fdqvBQJyZTmSjkOh/SXTWrRx/h777/0RIL8zSObt5G8hJe',NULL,NULL,NULL),(4,'Lela Sari Kristina','branchworker','16102127',NULL,'$2y$10$ribzK6icLuaRdmmKcuWxouwT853GJjlo3m19L5AjIiiCa9QvI33sG',NULL,NULL,NULL),(5,'Muhammad Ilham','branchhead','16102131',NULL,'$2y$10$8rj3dIq7uEUgKYgTmBrD3.bGqGiiwhu5BHhcGuGuyo/lYTlwdCqES',NULL,NULL,NULL),(6,'Adinda Miftahul','branchworker','16102110',NULL,'$2y$10$lbvZwAXMsUgyYs3nXi8crOYVzPnpgUfq0tjaodgDJyr6BIS1bCCCq',NULL,NULL,NULL),(7,'Daniel Pedrosa','branchhead','16102199',NULL,'$2y$10$rGPDMR9JMhxqEJETm3Wqx.ru8yjhPyEhRrP8qapXbfHSFcVfVDkBq',NULL,NULL,NULL),(8,'Marcus Ladowe','branchworker','16102143',NULL,'$2y$10$TcR0bzqToyzx9mSLomnyCu8e1rZV9qoHVK2JmoBtrGcmetI1LrcXS',NULL,NULL,NULL),(9,'Cyntia Kondang','branchhead','16102112',NULL,'$2y$10$daxVGTK/dNqYuRC4bo9DCueI.jMN769SkHYBaTBpel7WNUbOwKHFe',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(11) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noktp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES ('16102110',3,'Adinda Miftahul','Perumahan Telaga Harapan Blok D9 No.4','19276578129239129',1,NULL,NULL),('16102112',4,'Cyntia Kondang','Perumahan Telaga Harapan Blok D9 No.4','19276578129239129',1,NULL,NULL),('16102124',1,'Hesa Abda Arrasyidv','Perumahan Telaga Harapan Blok D9 No.4','124212121231212',2,NULL,'2019-07-22 05:34:09'),('16102126',1,'Khalid Abdurrahman','Perumahan Telaga Harapan Blok D9 No.4','19276578129239129',2,NULL,NULL),('16102127',2,'Lela Sari Kristina','Perumahan Telaga Murni','1237y87182173712',2,'2019-07-22 12:36:51','2019-07-22 12:36:51'),('16102131',2,'Muhammad Ilham','Perumahan Telaga Harapan Blok D9 No.4','19276578129239129',1,NULL,NULL),('16102137',1,'Ridwan Risandi','Perumahan Telaga Harapan Blok D9 No.4','12421266121231212',2,NULL,NULL),('16102143',4,'Marcus Ladowe','Perumahan Telaga Harapan Blok D9 No.4','19276578129239129',1,NULL,NULL),('16102199',3,'Daniel Pedrosa','Perumahan Telaga Harapan Blok D9 No.4','19276578129239129',1,NULL,NULL);
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-22 15:09:42
