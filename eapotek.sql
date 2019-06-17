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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicines`
--

LOCK TABLES `medicines` WRITE;
/*!40000 ALTER TABLE `medicines` DISABLE KEYS */;
INSERT INTO `medicines` VALUES ('Mdc 397qza','1','voluptas','Kapsul',11564,269,NULL,NULL,NULL),('Mdc 614euy','1','laudantium','Kapsul',15786,233,NULL,NULL,NULL),('Mdc 771cbz','3','modi','Kaplet',13096,374,NULL,NULL,NULL),('Mdc 701xai','1','unde','Suspensi',17574,160,NULL,NULL,NULL),('Mdc 111zbu','1','fugiat','Larutan',15500,294,NULL,NULL,NULL),('Mdc 775mmw','3','vero','Tablet',15557,233,NULL,NULL,NULL),('Mdc 257ppy','3','eum','Injeksi',17165,364,NULL,NULL,NULL),('Mdc 992zyr','3','itaque','Suspensi',9753,373,NULL,NULL,NULL),('Mdc 657nos','1','soluta','Salep',9770,383,NULL,NULL,NULL),('Mdc 121zko','1','reiciendis','Kapsul',15233,306,NULL,NULL,NULL),('Mdc 722mnp','2','quia','Kapsul',13773,149,NULL,NULL,NULL),('Mdc 819enz','4','voluptatem','Tablet',15856,316,NULL,NULL,NULL),('Mdc 872amw','3','quidem','Tablet',10152,238,NULL,NULL,NULL),('Mdc 785cnt','2','cupiditate','Injeksi',17499,187,NULL,NULL,NULL),('Mdc 811ddr','1','inventore','Infus',20277,310,NULL,NULL,NULL),('Mdc 522vnd','1','voluptate','Infus',11249,196,NULL,NULL,NULL),('Mdc 175uaq','4','in','Infus',12129,307,NULL,NULL,NULL),('Mdc 270duc','1','illum','Eliksir',9402,308,NULL,NULL,NULL),('Mdc 121bek','1','magnam','Larutan',9813,237,NULL,NULL,NULL),('Mdc 263cgi','4','sed','Larutan',13240,183,NULL,NULL,NULL),('Mdc 934rrn','1','perspiciatis','Lainnya',11556,189,NULL,NULL,NULL),('Mdc 498yph','1','sit','Kapsul',17282,319,NULL,NULL,NULL),('Mdc 170bmi','1','aut','Kapsul',8399,180,NULL,NULL,NULL),('Mdc 051iuc','4','nihil','Infus',11987,312,NULL,NULL,NULL),('Mdc 980gdr','4','delectus','Eliksir',23526,373,NULL,NULL,NULL),('Mdc 337jzo','3','est','Suspensi',13640,331,NULL,NULL,NULL),('Mdc 910ddb','2','quae','Kapsul',20191,153,NULL,NULL,NULL),('Mdc 316rlg','4','exercitationem','Tablet',14903,319,NULL,NULL,NULL),('Mdc 285xqv','2','officiis','Eliksir',18394,132,NULL,NULL,NULL),('Mdc 579bcs','4','voluptates','Injeksi',10483,167,NULL,NULL,NULL),('Mdc 865bui','4','fuga','Larutan',20037,163,NULL,NULL,NULL),('Mdc 226cru','1','libero','Injeksi',15701,329,NULL,NULL,NULL),('Mdc 421wxd','4','ullam','Infus',19310,262,NULL,NULL,NULL),('Mdc 882tvu','2','iusto','Salep',14979,380,NULL,NULL,NULL),('Mdc 832ujq','4','voluptatum','Injeksi',16789,381,NULL,NULL,NULL),('Mdc 868bca','4','vel','Kapsul',19993,101,NULL,NULL,NULL),('Mdc 169xyk','2','corrupti','Salep',17732,396,NULL,NULL,NULL),('Mdc 335uiw','2','quis','Eliksir',9925,228,NULL,NULL,NULL),('Mdc 209pzv','2','ad','Infus',18114,368,NULL,NULL,NULL),('Mdc 453tyk','3','hic','Puyer',22809,104,NULL,NULL,NULL),('Mdc 531zno','3','nostrum','Suspensi',15513,123,NULL,NULL,NULL),('Mdc 021bhx','1','omnis','Puyer',15575,228,NULL,NULL,NULL),('Mdc 280zsn','3','illo','Lainnya',22090,156,NULL,NULL,NULL),('Mdc 504ofw','3','sint','Injeksi',17797,132,NULL,NULL,NULL),('Mdc 824sdb','2','praesentium','Kapsul',8792,235,NULL,NULL,NULL),('Mdc 696vfb','1','beatae','Puyer',14616,252,NULL,NULL,NULL),('Mdc 491ijt','4','repellat','Kaplet',13172,110,NULL,NULL,NULL),('Mdc 845gqe','4','tempore','Lainnya',20540,226,NULL,NULL,NULL),('Mdc 090krd','4','ipsum','Salep',18495,316,NULL,NULL,NULL),('Mdc 036ohn','4','non','Lainnya',8446,341,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_04_16_032856_create_medicines_table',1),(4,'2019_04_16_033925_create_branches_table',1),(5,'2019_04_16_034457_create_suppliers_table',1),(6,'2019_04_23_143140_remove_supplier_i_d_from_medicine_table',1),(7,'2019_04_25_064803_create_suppling_table',1),(8,'2019_05_17_023612_create_note_supplier_table',1),(9,'2019_05_17_112000_create_workers_table',1),(10,'2019_05_17_125423_create_attendances_table',1),(11,'2019_05_21_062454_create_positions_table',1),(12,'2019_05_24_082449_create_transactions_table',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note_supplier`
--

LOCK TABLES `note_supplier` WRITE;
/*!40000 ALTER TABLE `note_supplier` DISABLE KEYS */;
INSERT INTO `note_supplier` VALUES (1,72,1,'Officia vel sapiente consequatur quo modi autem. Est voluptatem natus mollitia eum velit velit. Ut a enim non fugiat fugiat aliquam. Qui dolorum maiores est earum ex iure. Maxime excepturi officia magnam minus eum nesciunt sit.',10284922,'1994-07-04'),(2,72,1,'Magnam amet ut iste perferendis sit et ut. Libero nesciunt eos ab quis non maiores modi. Officiis eum quis ullam sint veritatis praesentium. Officia voluptatem voluptate quibusdam vitae animi odit non. Assumenda eligendi atque in ea excepturi porro ipsa. Ea quod fugit qui repellendus repellendus.',9007560,'1992-02-08'),(3,79,1,'Nihil ut aliquid vero eum et. Sapiente error similique est cum. Ratione veniam consectetur labore corporis voluptatem tenetur similique dicta. Reiciendis inventore est id commodi praesentium. Suscipit adipisci qui voluptatem cumque sit excepturi delectus. Aut sed voluptatem reprehenderit vel fuga.',6978328,'2001-02-25'),(4,79,1,'Autem nostrum debitis est. Dicta molestias eaque enim architecto. Eum repellendus nihil minima quidem atque nobis assumenda ratione. Natus cupiditate et nobis.',8519247,'1991-12-26'),(5,78,1,'Dolor quibusdam libero odio. Quo saepe aperiam sed corrupti asperiores qui. Tempore sint odit quod dolor fugiat consequatur. Voluptas corrupti delectus quia beatae omnis qui impedit in. Sint sed saepe dolorem fugiat ut deleniti. Voluptatem rerum odio deleniti maiores.',11845576,'1995-10-29'),(6,76,1,'Eaque et facere adipisci eum nulla qui. Sapiente voluptatem nulla magni voluptate officiis maiores deleniti. Porro molestias fuga inventore perferendis nesciunt.',11599361,'1999-10-09'),(7,72,1,'Consequatur rerum sequi fuga ex ut eum sequi quia. Necessitatibus ipsa eum autem est temporibus eius. Debitis molestias praesentium qui aut illum animi quas repudiandae. Culpa sed reprehenderit perferendis ut expedita fugit sed error.',11109414,'1978-03-24'),(8,76,1,'Ab consectetur atque doloribus laboriosam qui numquam. Est commodi voluptatibus quas quia tempora. Corporis alias temporibus hic corrupti. Laboriosam est culpa dolorum non nostrum sed dicta alias. Vitae ex quod sed non.',7882988,'1993-01-28'),(9,79,1,'Nobis expedita aut et vel voluptate aut. Fugit maxime ipsam quod numquam aliquid dolores. Qui in nobis officiis omnis dolores non.',10020524,'1978-09-02'),(10,72,1,'Aperiam dolores vel explicabo. Alias asperiores sit et ut aut distinctio. At aliquid reprehenderit vitae et et repellendus placeat et. Architecto est natus dolorum sunt alias nesciunt officiis. Eos ut repellat odio consectetur. Explicabo excepturi minus impedit et sapiente assumenda.',8348299,'2003-12-20'),(11,79,1,'Adipisci repellat nemo quod odit sed. Nihil omnis dolor ut ipsa quo vero odio. Quis praesentium occaecati quo cum autem autem qui. Asperiores nisi praesentium ipsa quia. Sit excepturi deserunt aut dolor distinctio excepturi sed. Necessitatibus earum quis adipisci officiis autem nulla.',6228931,'1974-12-12'),(12,76,1,'Voluptatem voluptatum at perspiciatis aut ut consequatur est. Molestiae quibusdam quae necessitatibus dolorum accusantium. Voluptas repellendus natus ut dolor repellendus magnam explicabo et. Saepe illum ut exercitationem sint dolores.',9541626,'1973-07-07'),(13,79,1,'Sed ut omnis est incidunt rem. Nihil quia sunt magni velit ut. Provident quia magnam sed vel saepe iusto occaecati. Quos magnam non repellendus at facere. Ullam impedit sunt provident placeat et. Dolores quos ratione nesciunt qui quaerat.',10149942,'1986-10-18'),(14,72,1,'Ut magnam culpa numquam et nulla. Corporis dolore mollitia incidunt ea corrupti sequi. Et beatae adipisci labore id. Rerum molestiae incidunt aut aut in vero et non. Illum corrupti repudiandae enim vel dolores ratione quis. Impedit et tempora labore voluptas.',11400465,'1982-08-26'),(15,76,1,'Itaque ut cumque doloremque voluptatibus vel sint. Enim ea ipsam doloremque voluptates a. Reiciendis quo eaque vel aut. Et at natus ad aut voluptatum adipisci ut ex.',7403302,'1995-09-22'),(16,78,1,'Animi eum molestiae provident recusandae et natus qui. Quo nemo et fugit ut quia aut. Dolore culpa nostrum quam adipisci. Fugiat fuga iure ad natus iusto doloribus ducimus. Sit aut delectus autem. Facere aut quaerat reiciendis corporis. Deserunt dicta consectetur nulla doloremque qui cum.',8728757,'2002-07-05'),(17,76,1,'Exercitationem magnam dolores voluptates quibusdam itaque voluptas. Placeat labore ex enim odio a voluptates similique. Cupiditate consequatur occaecati illum error quod pariatur est. Amet ullam et ut eveniet aut nobis aut.',6575739,'2006-09-12'),(18,76,1,'Quidem inventore cumque laborum quibusdam magni ut. Ex quia repellat nihil et ut. Aliquam adipisci maiores quibusdam eos dolorem id ipsum. Sunt occaecati aut itaque culpa. Numquam dolores possimus repellendus.',11778741,'2010-10-19'),(19,76,1,'Accusamus ratione rerum aut ut. In voluptate consectetur quisquam. Nam saepe autem iusto velit. Et fuga in et est sint.',7957700,'2010-09-20'),(20,78,1,'Qui aut exercitationem qui animi rerum voluptas commodi. Totam accusantium deserunt nihil reprehenderit molestiae in autem. Natus odit voluptates qui et dolor quidem. Dolor laudantium ut laboriosam vel reprehenderit.',10404369,'2006-08-10'),(21,79,1,'Est ut omnis reprehenderit natus eius. Asperiores sint esse sed odio. Nisi voluptas sed odit et excepturi. Incidunt ipsum eum est recusandae possimus nesciunt. Aperiam et sunt aut numquam eaque rem. Occaecati dolores qui earum ut dolorem iusto excepturi quod.',9414039,'2013-01-17'),(22,79,1,'Autem omnis consequuntur labore aperiam dolor odio consectetur. Vel est accusantium impedit ratione iure sed omnis. Necessitatibus vel adipisci eos aut ea autem quo. Aliquid enim occaecati dicta ea. Aut maxime est autem accusantium aperiam. Sit id similique totam minus omnis.',9899084,'2009-12-11'),(23,78,1,'Ea sit dignissimos et aut blanditiis voluptates. Labore assumenda non placeat sit qui quidem nemo. Dolores consequatur corporis aperiam odit saepe. Culpa quisquam nulla enim totam eos. Non distinctio ratione quos iure quo. Illo itaque delectus et et.',8483293,'2004-11-25'),(24,78,1,'Sit consequatur commodi debitis quos voluptas consequatur cum. Optio nostrum impedit commodi est fuga repellendus. Aperiam et ut quam voluptates. Laboriosam eaque consequatur perspiciatis corporis. Adipisci quis impedit labore doloremque recusandae non dolor. Velit consequatur quod voluptatibus.',9193968,'2009-01-04'),(25,76,1,'Sunt sed eius aut amet quia doloremque. Et aut excepturi dolore debitis excepturi quia qui deleniti. Suscipit possimus at laudantium veritatis. Sint perspiciatis suscipit culpa nam deserunt hic.',9683732,'2011-03-12'),(26,79,1,'Magnam et quia nisi commodi rerum. Pariatur suscipit cum dolor eius. Dolores et possimus voluptatibus facilis qui. Placeat consequatur qui dolor nihil asperiores. Corrupti est et laborum non natus. Reiciendis repudiandae ex distinctio itaque odit vitae. Qui omnis quis enim minus.',7351698,'2018-12-16'),(27,76,1,'Velit velit dolor quos aut. Vel qui inventore odit sed ipsum mollitia. Voluptas ab nulla dolore officia voluptate voluptates rerum. Nesciunt explicabo consequatur tempora. Optio libero libero ipsam veritatis. Harum at adipisci molestiae quaerat. Earum rerum ut repellat dolor officiis veniam nulla.',6388125,'2009-04-11'),(28,78,1,'Tempora voluptatem hic et expedita eius ut quia. Veritatis laudantium magnam corrupti facilis consequuntur. Ratione qui ad omnis natus ea ratione. Officiis praesentium et molestiae nam odio adipisci. Sed ducimus rerum alias est. Incidunt consequuntur facere ut voluptas sunt.',9989038,'1973-11-07'),(29,72,1,'Qui voluptatem et consequatur sapiente quasi cumque placeat quibusdam. Exercitationem et omnis qui iste tempora et. Qui est sunt laborum corporis.',9972139,'1999-09-10'),(30,78,1,'Commodi fuga unde sit tenetur explicabo voluptatum laboriosam. Similique esse voluptatem neque vitae vel saepe quas praesentium. Veniam tempora qui culpa sapiente id qui magnam. Consequatur ut in voluptate aut voluptas et.',8339097,'2003-08-16'),(31,79,1,'Placeat laudantium est minus in ratione. Et sed velit magni fuga aut numquam et. Velit cum officiis ut corporis. Quibusdam et vitae voluptatem nostrum. Earum fugit cupiditate fugiat quia. Pariatur voluptas omnis itaque impedit optio quasi illum. Nihil hic quos sunt minus iusto.',11334687,'2008-02-09'),(32,78,1,'Et laudantium qui incidunt tempora rerum fugiat sequi. Fugit doloremque commodi et hic architecto ut. Aut doloremque vel fuga. Autem omnis velit et ut sint saepe quo. Soluta vel qui rerum debitis nihil.',9478228,'2016-07-28'),(33,79,1,'Ducimus quis qui repellendus eos et modi. Explicabo fugiat a ipsam molestias. Aut est repellendus modi omnis reprehenderit sed. Distinctio ut earum eius dicta. Est explicabo quasi ex vero quam qui sit possimus. Voluptatibus aut quos aspernatur iusto sint consequatur.',6058407,'2008-02-10'),(34,79,1,'Quo dolore reprehenderit dolorum vero. Nemo adipisci voluptatem animi blanditiis. Ducimus qui labore provident quibusdam saepe. Qui est blanditiis vel voluptatem delectus nihil esse. Eligendi qui maxime hic aspernatur. Sed omnis vel et eaque.',11344055,'1985-12-28'),(35,72,1,'Dolorum consequatur fugit doloremque suscipit magnam qui. Odio dolores natus delectus odit labore porro illo. Ducimus beatae et earum facilis facere ipsum. Voluptatem consequatur tempora sunt et et.',9358503,'1998-01-26'),(36,76,1,'Aperiam officia ipsam voluptas quam. Ipsum dicta veritatis eos. Est magnam sunt aut quia provident optio. Illum voluptas quo beatae est. Repellendus architecto exercitationem ex. Ut aut iure in nemo.',7615062,'1977-09-19'),(37,79,1,'Aspernatur assumenda nesciunt vero consequuntur. Iste debitis odit facilis voluptatem accusantium ad. Explicabo quia libero voluptates ullam. Sint eum sunt sed sed voluptas ipsam. Amet aut totam voluptatem non est quae dolorum. Aperiam vitae distinctio assumenda ipsum est.',7133350,'2018-08-31'),(38,72,1,'Minus et molestiae quia. Rerum et omnis suscipit eum ut. Iusto aperiam dolore nostrum sed architecto hic blanditiis.',9408132,'1989-01-13'),(39,72,1,'Et amet accusantium non qui et. Aut quos quaerat laborum quia deserunt maiores voluptatem. Excepturi ratione culpa fugiat et veniam sint. Consequuntur nihil dolor unde aut esse aperiam libero.',11095471,'2014-01-09'),(40,72,1,'Dicta delectus recusandae nemo quis aperiam. Odio unde similique omnis incidunt. Excepturi libero qui aut voluptatibus enim.',9850738,'1973-11-05'),(41,76,1,'Distinctio iusto maiores autem est vitae hic sit. Dolorem quibusdam vitae nemo quibusdam necessitatibus perspiciatis dolores. Aut et assumenda magni maxime excepturi. Provident laboriosam excepturi vero et.',7281759,'2012-03-03'),(42,79,1,'Maiores eum esse itaque ut autem numquam. Quam id architecto quas expedita esse sit eos. Aliquam suscipit reprehenderit dicta quia.',8873389,'1981-09-25'),(43,72,1,'Est sint velit quia iusto esse vitae eos. Quia quis sint in saepe tempore. Assumenda voluptatibus ratione temporibus.',8253360,'2009-10-20'),(44,76,1,'Aut ad vero unde eligendi. Aut corrupti qui neque et ea aliquam est minus. Sapiente eum dolores fuga laborum rerum ex iusto. Sequi amet voluptates dolor maxime laudantium. Ut dicta sint quibusdam nostrum harum.',10888235,'1982-04-27'),(45,72,1,'Voluptatem pariatur dolor aliquam. Iure aut ex sed iste eum sed. Provident saepe rerum eos nulla. Sequi ut voluptates minima dolorem enim. Omnis repellendus sunt repudiandae ducimus quibusdam occaecati. Numquam facere deleniti perspiciatis qui.',9358185,'1974-06-27'),(46,76,1,'Minus beatae aut quis libero perferendis sed. Eum a vel illo ipsa. Sit aut odit autem fugiat repudiandae. Est voluptate odio et numquam explicabo quas. Fugiat amet repudiandae nostrum qui ut quod minima similique. Iste omnis cumque quam ut natus odio.',9981384,'1986-07-20'),(47,72,1,'Adipisci reiciendis in qui ipsum iure. Dolores doloribus impedit magnam quas dolor facere magni necessitatibus. Eum id velit corrupti illum et. Tempora nisi sit ipsam dolorum. Aut aspernatur consequatur debitis ipsa molestias incidunt. Quo est sed est aut pariatur aut earum.',11635557,'1987-07-04'),(48,78,1,'At magnam quod praesentium quae. Maxime a a accusantium vel. Voluptas dolorem quo omnis ut. Animi alias quasi iusto dicta. Possimus magnam exercitationem reprehenderit dicta fuga. Ab labore unde hic. Qui odit deserunt ipsam et quos assumenda.',8651611,'2017-03-03'),(49,78,1,'Perferendis et quae asperiores itaque. Dolor ut explicabo eveniet voluptas in. Voluptas dolorem explicabo placeat libero asperiores delectus. Tenetur facere quisquam sint est quia voluptas qui. Eius facilis qui quis qui hic modi voluptatum quo.',5817294,'1992-10-22'),(50,79,1,'Et repellendus perspiciatis accusantium voluptas. Rerum molestiae laboriosam modi aut vel aspernatur. Fugit doloribus impedit qui eum quo voluptas consequatur placeat. Error sit est quae delectus. At reiciendis repellendus repellat ut totam.',10983235,'1991-08-04');
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
INSERT INTO `positions` VALUES (1,3,'Personal Care Worker',2753880),(2,4,'Marine Cargo Inspector',2643828),(3,1,'Child Care Worker',2359475),(4,3,'Plumber OR Pipefitter OR Steamfitter',2686705),(5,4,'Recordkeeping Clerk',2555555),(6,3,'Hand Presser',2351524),(7,3,'Industrial Engineer',2990613),(8,3,'Judge',2551544),(9,3,'Agricultural Sales Representative',2536191),(10,1,'Hazardous Materials Removal Worker',2477272),(11,1,'Legislator',2530031),(12,1,'Printing Press Machine Operator',2821228),(13,2,'University',2792757),(14,1,'Painter',2915183),(15,4,'Prepress Technician',2336129),(16,2,'Tool and Die Maker',2439405),(17,1,'Occupational Therapist Aide',2365004),(18,4,'Food Service Manager',3045325),(19,2,'Speech-Language Pathologist',2357602),(20,3,'Agricultural Sciences Teacher',2865617),(21,1,'Pharmaceutical Sales Representative',3028064),(22,1,'Commercial and Industrial Designer',2417715),(23,3,'Skin Care Specialist',2635010),(24,1,'Biochemist or Biophysicist',2305184),(25,4,'Financial Examiner',3050368),(26,4,'Media and Communication Worker',2562494),(27,2,'Forging Machine Setter',2861277),(28,1,'Therapist',2522231),(29,3,'Radio Mechanic',2747135),(30,4,'Registered Nurse',3002337);
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
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,3,'CV. Pouros, Maggio and Johns','70888 Schumm Haven\nLegrosburgh, MI 17348','231-648-5097 x634','cshanahan@hyatt.info',NULL,NULL),(2,3,'CV. Ernser-Johnson','99017 Eriberto Prairie\nVerliefurt, VT 57731-1073','1-617-653-5291 x03979','green.ross@howell.info',NULL,NULL),(3,3,'CV. Feeney LLC','67718 Soledad Ferry\nLake Aubreeton, VT 41110','617.236.7530','acorkery@ziemann.com',NULL,NULL),(4,2,'CV. Schumm-Graham','76272 Hessel Square\nCamylleshire, ND 22807-6502','+1-880-639-5307','orval.franecki@reinger.com',NULL,NULL),(5,4,'CV. McGlynn Inc','5587 Velva Springs Apt. 870\nWest Violetteshire, TN 87553','+1 (872) 728-7893','brendon39@jakubowski.com',NULL,NULL),(6,3,'CV. Harber, Bechtelar and Reichel','86788 Hoppe Station Suite 672\nNorth Kaseyview, OH 13188-4963','314.759.3150','constance44@schmeler.com',NULL,NULL),(7,2,'CV. Kreiger Group','8606 Powlowski Forest Apt. 066\nNorth Jude, WV 04598-3145','(351) 970-9019','wilfred08@stoltenberg.com',NULL,NULL),(8,3,'CV. Weber, Padberg and Volkman','13698 Fritz Rest Apt. 250\nSouth Kiaraton, IN 09820-0950','398-965-0429','wgreenfelder@jaskolski.com',NULL,NULL),(9,3,'CV. Wiza, Emmerich and Abshire','20748 Gia Junctions\nMayertburgh, WI 97286-5920','738.793.6200','wilkinson.roscoe@bins.org',NULL,NULL),(10,1,'CV. Dietrich-Lindgren','41210 Ethan Club\nHermanshire, NM 34841-2230','961.321.5925 x4982','oreilly.paula@stroman.biz',NULL,NULL),(11,4,'CV. Zboncak Ltd','5646 Purdy Stravenue Suite 569\nLake Marcelinafort, UT 09321','439.457.9188 x92304','neil27@ullrich.com',NULL,NULL),(12,1,'CV. Lang, Kerluke and West','65107 Ludwig Wells\nWest Rosshaven, MN 90733-0195','645.347.6436','kiera64@beier.net',NULL,NULL),(13,1,'CV. Parker, Williamson and Goldner','3765 Franecki Gateway Apt. 545\nKeeleyhaven, ID 24793','+1-518-209-5888','dbernier@hahn.com',NULL,NULL),(14,4,'CV. Harber-Kutch','2278 Jackeline Port\nTorpbury, CT 19095','203.281.5974','niko.hickle@considine.com',NULL,NULL),(15,1,'CV. Miller, Schmitt and Flatley','31350 Hoppe Court Apt. 184\nAlaynaland, VA 69465','921-419-4672 x298','tianna44@quitzon.com',NULL,NULL),(16,2,'CV. Bernier, Glover and Deckow','16157 Carroll Highway Suite 241\nWest Brennonmouth, OK 46255-7324','1-283-504-5149','ethelyn29@koepp.com',NULL,NULL),(17,3,'CV. Tromp-Auer','8421 Emmie Garden\nEast Wava, AL 12553','884-694-6002 x77539','buckridge.chanelle@wiza.com',NULL,NULL),(18,1,'CV. Christiansen, Cormier and Wisozk','71090 Labadie Plains\nNorth Princehaven, AZ 20883-2076','1-593-223-9469 x525','nstreich@torphy.biz',NULL,NULL),(19,3,'CV. Kuhn-Hamill','11601 Laron Center Apt. 207\nWeissnatberg, IN 79601-4667','(794) 993-7955 x622','lambert27@lubowitz.com',NULL,NULL),(20,2,'CV. Pouros, Gorczany and Davis','664 Mills Radial\nKrystinaland, NH 17624-3882','602.319.0011','aabernathy@stoltenberg.com',NULL,NULL),(21,1,'CV. Cronin, Shields and Crist','597 Joy Lane\nEast Ansley, SD 61134','(401) 548-9681 x089','fcollier@tremblay.net',NULL,NULL),(22,3,'CV. Feeney LLC','1741 Hegmann Walk\nLake Tiannabury, IN 95600-0158','206.981.6978','osbaldo46@feest.net',NULL,NULL),(23,2,'CV. Ward-Oberbrunner','495 Durgan Coves Suite 060\nRoweland, MO 11242-9410','+15605507525','rheathcote@gorczany.com',NULL,NULL),(24,4,'CV. Hammes-Schmidt','6496 Ezekiel Path\nLake Damarisshire, OH 78565','+1-493-873-5120','kyra48@windler.com',NULL,NULL),(25,1,'CV. Wisozk-Nienow','919 Shaun Lane\nTatyanatown, FL 57467','970-699-2428','pbradtke@mcdermott.com',NULL,NULL),(26,2,'CV. Larkin, McCullough and O\'Hara','49232 Marta Station Apt. 516\nDamianside, UT 35889','789.330.3098 x2264','gerhold.ansel@larson.com',NULL,NULL),(27,3,'CV. Braun LLC','585 King Run Apt. 804\nJeanneshire, NJ 70394-7110','+1.524.949.7679','murray.juwan@schuppe.com',NULL,NULL),(28,4,'CV. Johnston-Boyer','311 Lynch Overpass\nElizachester, IA 23408-8471','754.626.4944 x6283','twila75@runte.com',NULL,NULL),(29,4,'CV. Abbott, Kerluke and Schinner','2690 Trevion Walk\nWinonashire, MS 98584-8795','+1.665.621.7281','creichel@altenwerth.com',NULL,NULL),(30,3,'CV. Davis, Borer and Ryan','42105 Josue Wall\nWest Leliabury, GA 97876-6916','741.807.7361 x27816','botsford.minerva@hammes.biz',NULL,NULL),(31,4,'CV. Sanford, Gutmann and Muller','79034 Rohan Fords Apt. 614\nPort Rowena, TN 85851','+1.684.956.1004','tromp.alexandrea@swaniawski.com',NULL,NULL),(32,3,'CV. Borer-Swift','86574 Angel Trace\nHarveyton, NY 07600-8163','1-842-390-6236 x442','colten.dare@legros.biz',NULL,NULL),(33,3,'CV. Bernhard-Considine','32441 Eldora Ridge Apt. 987\nKleinbury, VT 83001-0899','+16262740755','layla.okeefe@connelly.com',NULL,NULL),(34,3,'CV. Mitchell-Steuber','67852 Leann Ridge Suite 774\nZiemefurt, MO 99832','+1 (649) 749-8681','fveum@russel.com',NULL,NULL),(35,2,'CV. Hahn Ltd','30289 Ashleigh Bypass\nNorth Stephany, NH 46071','(591) 972-4489 x8573','danika77@price.com',NULL,NULL),(36,2,'CV. Predovic Inc','72132 Jennyfer Union Apt. 001\nNorth Edd, KS 30804','(994) 531-7327 x73514','harvey.celia@goodwin.com',NULL,NULL),(37,4,'CV. Gibson-Blick','30216 Cole Isle\nEast Jamil, RI 32833','+1.729.352.9961','isaias33@maggio.com',NULL,NULL),(38,1,'CV. Waelchi-VonRueden','7693 Botsford Rest Suite 316\nMerlinshire, OR 54230','620.874.6851 x283','sim64@bogisich.com',NULL,NULL),(39,4,'CV. Schuster, Krajcik and O\'Conner','801 Dejon Run Apt. 660\nLake Selenaview, NE 66934-3738','863-526-8030 x0138','edgar33@turner.com',NULL,NULL),(40,3,'CV. Ortiz-Lakin','32398 Matteo Shoal\nNew Adolphusberg, DE 41102','+1.428.400.7574','lswift@oconner.com',NULL,NULL),(41,4,'CV. Johns, Koch and Nolan','803 Natalie Orchard\nSarinaberg, MD 88735','(696) 346-2464 x91117','ghaley@smitham.com',NULL,NULL),(42,2,'CV. Ratke PLC','716 Gleason Highway Suite 304\nJenkinstown, KS 36723','(470) 465-0255 x49322','kobe08@mohr.com',NULL,NULL),(43,3,'CV. Howell, Gislason and Lang','63382 Champlin Village Suite 369\nEast Sven, MO 32559-4861','797.774.9280 x8350','peggie.ryan@boyer.net',NULL,NULL),(44,1,'CV. Kirlin, Robel and Borer','48121 Laila Spur Apt. 222\nDellland, AR 49442','+14196252975','khuels@reynolds.info',NULL,NULL),(45,3,'CV. Stamm-Walker','290 Emil Junction\nWest Loriport, VT 57961-5171','1-271-692-1413','rosie62@weber.com',NULL,NULL),(46,2,'CV. Koelpin-Kihn','748 Swaniawski Stravenue\nWest Billie, OH 36426-6529','+1-957-754-3710','hayes.kiana@ritchie.net',NULL,NULL),(47,4,'CV. Cole, Howell and Fadel','907 Vandervort Haven Apt. 002\nRyanport, GA 28399-2123','403.245.1529 x78364','mcglynn.marguerite@luettgen.org',NULL,NULL),(48,4,'CV. Upton, Wilderman and Hill','61004 Sanford Pike\nLangoshbury, CO 94719-5365','631.587.9682 x9860','ujohnston@cummerata.net',NULL,NULL),(49,4,'CV. Kihn-Schmitt','647 Jerde Pike Apt. 549\nPort Katheryntown, MS 06755','339-888-8737 x274','wlarkin@dibbert.com',NULL,NULL),(50,1,'CV. Pfannerstill and Sons','48843 Streich Mountain Apt. 356\nPort Altatown, MN 36500','205.967.7404','graciela.trantow@keeling.com',NULL,NULL),(51,2,'CV. Mante-Schamberger','77362 Darren Road\nKamronburgh, IA 59558-9436','(860) 291-2879 x2385','lexus10@hammes.com',NULL,NULL),(52,4,'CV. Schumm-Greenholt','8756 Heath Ridges\nNew Felicita, CO 55193-6106','595.654.2413','fwisozk@schowalter.com',NULL,NULL),(53,4,'CV. Baumbach-Jacobson','656 Dan Mill\nNorth Lorenza, GA 14146','(359) 427-2901 x627','caitlyn36@runolfsdottir.com',NULL,NULL),(54,2,'CV. Blick LLC','4278 Greenholt Stravenue Apt. 437\nEast Leonorhaven, PA 67725','1-486-644-2789 x66522','eve.koch@herzog.com',NULL,NULL),(55,2,'CV. Dickens-Mayert','7798 Beier Overpass Suite 133\nHiltonburgh, MN 09890','1-683-492-0021 x2102','elyssa97@mitchell.org',NULL,NULL),(56,4,'CV. Carroll-Koss','41265 Genoveva Parkway\nWavafurt, IN 84373-6442','1-727-506-1885 x6515','ypadberg@klocko.biz',NULL,NULL),(57,2,'CV. Gottlieb-Padberg','588 Marks Union\nBarrowsville, CO 38036','676-831-2650','hoeger.araceli@barrows.com',NULL,NULL),(58,2,'CV. Medhurst Group','67521 Wisoky Field\nFadeltown, GA 63797','593.981.4998 x50449','piper.cartwright@pfeffer.biz',NULL,NULL),(59,1,'CV. Wunsch, Leffler and Kautzer','575 Cristobal Stravenue\nEast Luciousborough, OH 41517','418.954.4080','stephan57@satterfield.info',NULL,NULL),(60,3,'CV. Satterfield-Harber','99648 Gardner Hollow\nMossieton, NJ 96732','659.878.4273 x2839','kprosacco@blanda.info',NULL,NULL),(61,3,'CV. Ritchie, Zboncak and Predovic','6513 Simonis Pines\nAnissamouth, CT 22669','(289) 368-0862','jakubowski.charlotte@davis.com',NULL,NULL),(62,4,'CV. O\'Connell, Donnelly and Altenwerth','366 Jasen Trail\nSouth Noelfurt, RI 14956','1-443-283-3287','bailey97@mante.org',NULL,NULL),(63,1,'CV. Casper, Ritchie and Leuschke','308 Herzog Branch Suite 625\nEast Lyda, CA 60113-9279','390.276.4048 x43623','kling.finn@doyle.info',NULL,NULL),(64,1,'CV. Denesik and Sons','62489 Cole Valley\nAriellebury, DE 15233-4901','+13484866497','preinger@bednar.com',NULL,NULL),(65,4,'CV. Bergnaum Ltd','3893 Titus Estate\nWiegandhaven, FL 84362','581-514-8223','bechtelar.lloyd@jerde.com',NULL,NULL),(66,3,'CV. Turcotte-Prohaska','741 Lucie Course Suite 973\nPort Jacynthe, KY 95603-1712','+1-279-301-9215','wiza.delta@krajcik.com',NULL,NULL),(67,3,'CV. Wyman-Hettinger','94351 Ophelia Courts\nPort Alessia, MA 50833-5099','1-835-490-1680','virgie37@quitzon.info',NULL,NULL),(68,2,'CV. Ratke, Ebert and Huel','61947 Elsie Port Apt. 604\nKozeyfurt, NC 79033-2119','419-403-1397','okeefe.sydnie@volkman.com',NULL,NULL),(69,3,'CV. Goodwin Inc','90541 Beahan Lane\nWest Ernestineland, VT 23436','317.313.0481 x99913','bbayer@lindgren.com',NULL,NULL),(70,4,'CV. Schoen PLC','14420 Mauricio Plains\nEvalynfurt, MA 23108','708-709-2328 x533','tsanford@stehr.com',NULL,NULL),(71,2,'CV. Carroll-Greenfelder','196 Rice Way\nNew Gideonborough, ME 88771','(705) 619-6288 x7610','loyce52@white.info',NULL,NULL),(72,1,'CV. Gorczany Ltd','7512 Kirsten Well Apt. 691\nRippinstad, TN 69929','379-215-3698','upton.wilson@lebsack.com',NULL,NULL),(73,4,'CV. Pfannerstill, Schinner and Monahan','517 Ziemann Spurs\nNew Mateo, KY 30961-8251','(819) 407-9144 x081','jabari.mccullough@rosenbaum.com',NULL,NULL),(74,4,'CV. Green-Schaefer','5517 Williamson Burg\nMcCulloughview, AK 68263-2407','850.594.7265 x19487','lebsack.rosario@torphy.biz',NULL,NULL),(75,4,'CV. Kutch, Haley and Huel','4262 Penelope Mountains Apt. 514\nDaphneefort, OK 97469-1170','+1.470.789.3063','arnulfo65@vonrueden.com',NULL,NULL),(76,1,'CV. Toy, Pouros and Davis','84531 Jordy Way\nPort Tia, HI 76299-7085','+1 (584) 218-2381','delphia30@will.com',NULL,NULL),(77,3,'CV. Adams PLC','3044 Verdie Stream Apt. 865\nLucasland, MI 73682-9409','673.872.3974 x81441','stark.cody@eichmann.biz',NULL,NULL),(78,1,'CV. Sipes, Hyatt and Stiedemann','6068 Alejandrin Village Suite 708\nPredovicstad, ME 02855','(971) 994-7730','erdman.adrianna@leuschke.net',NULL,NULL),(79,1,'CV. Weimann Ltd','5637 Schamberger Knoll Apt. 726\nEichmannstad, MD 87167','(312) 627-7280 x77506','xswift@lehner.biz',NULL,NULL),(80,1,'CV. Cartwright Inc','280 Devante Pines\nEast Duanemouth, WY 40980','1-774-558-4946 x25217','nikita59@pfeffer.com',NULL,NULL);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Khalid Abdurrahman','branchhead','16102126',NULL,'$2y$10$jq8Btm40s3qyZF6GRIebX.bl2DLfHnIM2h.2HfCc9sn5lUMSREELK',NULL,NULL,NULL),(2,'Ridwan Risandi','owner','16102137',NULL,'$2y$10$LnE9EGQ..9sG4tFnt4X2Au4co2IE5FYzpo.DBe9faM1qGL6KwQGiK',NULL,NULL,NULL),(3,'Hesa Abda','branchworker','16102124',NULL,'$2y$10$3KDLI8GSyTCNwBEFOScwoOdhyIvB9kdQRy1eZpKAEa7EeFtn0fM8i',NULL,NULL,NULL);
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
INSERT INTO `workers` VALUES ('0019250191',2,'Shyann Cremin','63862 Boyle Corner\nPort Wilburnmouth, PA 73490','4214224928906924',23,NULL,NULL),('0209161806',3,'Judy Schinner V','3470 Demetrius Ports Suite 338\nNew Roselyn, MA 92298-0353','4024007179268387',17,NULL,NULL),('0220538553',4,'Gail Kassulke','7597 Kuphal Forks Suite 262\nNew Armandoside, AL 15529','4539876068246466',14,NULL,NULL),('0237136215',3,'Prof. Marielle O\'Hara','43435 Rice Stream\nJohnstonchester, AK 99034-2615','342446962297711',10,NULL,NULL),('0345002489',2,'Lindsey Bosco V','73088 Llewellyn Plaza Suite 197\nNew Hassie, IN 14080','5285574578083015',26,NULL,NULL),('0500752477',1,'Bernard Bahringer','1277 Wehner Meadow\nNorth Babyfort, SC 47986','6011911301777449',28,NULL,NULL),('1035297509',4,'Sabrina D\'Amore V','60214 Janice Mission Apt. 737\nWest Tiffanyberg, IN 55608-9111','4539033514657',23,NULL,NULL),('1407534344',1,'Prof. Fernando Hirthe PhD','150 Angelica Cliffs\nSouth Urban, WY 71388','4556131053282383',1,NULL,NULL),('1492745532',2,'Mr. Ike Barton','410 Clemens Ways Suite 960\nSavanahside, HI 39592','2603082157877023',3,NULL,NULL),('16102124',1,'Hesa Abda','Wonosobo asri','1610212498174612',3,NULL,NULL),('16102126',1,'Khalid Abdurrahman','Perum Telaga Harapan Blok D9 No.4','1610212691912912',1,NULL,NULL),('16102137',0,'Ridwan Risandi','Perum Indah owner blablabla','16102137971297312',2,NULL,NULL),('1684001987',3,'Miss Selina Schamberger','44993 Abernathy Junctions Suite 054\nFeestville, NE 22650','4916984749713533',1,NULL,NULL),('1713313893',3,'Eldridge Homenick','5502 Fabian Hill Suite 251\nNew Dawnview, MO 87394-9781','2653640741921414',1,NULL,NULL),('1808944152',1,'Javier Corwin','630 Charles Extension\nShieldsmouth, SD 84667-5702','4916388407513724',30,NULL,NULL),('1842444609',4,'Gloria Hettinger','113 Hugh Pike\nStammview, OK 82235-7951','2548081807683318',24,NULL,NULL),('1874758180',1,'Rachelle Rogahn','1414 Ayla Park Suite 627\nDibbertview, OH 48046-7432','5393158895788644',8,NULL,NULL),('1980562350',3,'Cleve Pfannerstill','538 Mitchell Spring Apt. 050\nNorth Hortenseport, LA 00786-4222','2461390576806049',19,NULL,NULL),('2220104177',1,'Brent Kuhn','839 Rowe Mountains\nMarieview, CA 45353','4761924353984760',4,NULL,NULL),('2230396505',1,'Gregoria Feest DDS','1944 Hettinger Ports\nCamrynberg, AZ 55839-9896','379216492261073',16,NULL,NULL),('2484146418',2,'Prof. Oda Hahn','7532 Matilda Pines\nWest Ciaraville, WA 43312-1795','6011619120203865',17,NULL,NULL),('2505202595',2,'Natalie Schmitt','22738 Eloy Dam Suite 816\nAngusmouth, DE 95630-5832','378747488097874',19,NULL,NULL),('2803999139',3,'Carissa Feeney','51271 Torphy Inlet\nWest Markusville, MD 40991-5557','4539317669163875',2,NULL,NULL),('2855135472',3,'Dena Glover','818 Jesus Club\nEast Jamar, NE 05410','2720283913875909',14,NULL,NULL),('2930719101',2,'Elva Murphy Jr.','341 Mraz Courts Apt. 280\nLake Princefurt, MO 55676-5758','4716274912332150',4,NULL,NULL),('3379464464',1,'Alysa Nicolas','9245 Moen Street\nSchambergermouth, AL 70311-2673','2720194838864490',26,NULL,NULL),('3392045396',3,'Marlin Boyer','38139 Buckridge Avenue\nSouth Aliviaview, HI 31688','2444785762371264',8,NULL,NULL),('3464512050',3,'Rogers Lindgren V','54127 Ivy Green Apt. 893\nSouth Patrickchester, NY 83394','2449021618085238',14,NULL,NULL),('3697386644',2,'Dr. Aurore Schumm Sr.','53725 Mireya Unions Apt. 919\nNorth Adolphchester, CO 41868-4764','5106501328823389',30,NULL,NULL),('3885305203',4,'Mr. Bryce Gleichner III','493 Littel Common\nRicebury, WY 42479-6578','4716004932938680',11,NULL,NULL),('4139208830',4,'Rose Reynolds MD','9113 Toy Place\nPort Emmachester, DE 75778-8703','5591549128234341',8,NULL,NULL),('4197096780',1,'Lafayette Bogisich II','963 Kaycee Pines\nRaeganmouth, AZ 99579','4539498710485267',21,NULL,NULL),('4255874150',2,'Lindsey Paucek II','83275 Mueller Springs Apt. 112\nBrookeburgh, ID 84516','4929096885744639',2,NULL,NULL),('4362142345',4,'Miss Baby Daniel MD','555 Laurel Loop Apt. 574\nSteuberside, NE 11823','4532811913220850',18,NULL,NULL),('4612284548',4,'Orlando Gerlach III','206 Russ Extensions Apt. 164\nLake Kane, CO 90105','4916808298181547',21,NULL,NULL),('4658005522',3,'Aida Bayer V','944 Trenton Squares Suite 784\nMullershire, TN 70621-5643','5145835276080383',22,NULL,NULL),('4700876511',2,'Macie Dickens','72057 Reichel Crescent Apt. 972\nNew Sonny, TN 26861-9002','2574082006162077',27,NULL,NULL),('4950780910',3,'Mr. Gaston Boyle','67833 Vinnie Village\nGlenniefort, WY 90154','4499310651539853',18,NULL,NULL),('4956609083',1,'Prof. Otha Wisoky','51987 Trantow Trafficway\nGuiseppefort, NH 14909-3956','4532951101627258',5,NULL,NULL),('4962483107',2,'Vida Donnelly','63800 Gay Mews\nSouth Evan, VA 36375','5484964052848224',24,NULL,NULL),('5142697372',4,'Ruth Roob PhD','24471 Schiller Stravenue\nPort Luisa, WY 97649-4930','4485877615802383',13,NULL,NULL),('5228893548',2,'Avery Veum','7605 Julius Path\nNew Jasper, HI 94953','4024007170119795',4,NULL,NULL),('5423302980',2,'Angus Gibson','76318 Krajcik Grove Suite 396\nNorth Rociofurt, AZ 77182-4160','2720468249160452',17,NULL,NULL),('5724724219',4,'Neal Auer','9589 Grimes Forest\nEast Shanelle, WY 65839-4696','4613936204602839',1,NULL,NULL),('5728055744',1,'Ms. Karen Schmitt Jr.','17878 Elbert Turnpike Suite 232\nLake Trevor, LA 70833-2824','6011264462137882',1,NULL,NULL),('5918977901',1,'Kaitlin Beer IV','4978 Hillary Prairie Apt. 163\nGabeville, KS 31213-5191','4502018099701515',30,NULL,NULL),('5986910907',1,'Dr. Luis Waters','8660 Johnson Stravenue Suite 459\nHammesland, MS 86041','4539408733389024',27,NULL,NULL),('6038903431',1,'Jany Wilkinson','436 Doyle Squares\nNorth Josiane, PA 53860-3085','4539041553588886',2,NULL,NULL),('6042288192',4,'Tamia Cassin','193 Deckow Spring\nMarcosburgh, DE 85698-6824','2406067560700390',25,NULL,NULL),('6308375637',1,'Dillon Pouros','26013 Stark Crescent\nDickensfurt, DC 66174-2701','5238622608675918',18,NULL,NULL),('6604085144',2,'Dr. Kassandra Jenkins Jr.','393 Lucious Squares Apt. 354\nNorth Evie, ND 48639','4532366079862664',14,NULL,NULL),('6677169234',3,'Garrett Walker DDS','1030 Lydia Meadow\nEast Luz, NM 76454-1085','346909300921249',22,NULL,NULL),('6807397239',2,'Jerrell Kuhlman','1898 Sawayn Ville\nLilianchester, MI 39775-6318','2352319210818591',9,NULL,NULL),('6816517407',1,'Lourdes Nolan','26619 Moshe Courts Suite 772\nKilbackhaven, MT 40673-8212','2628179275171346',28,NULL,NULL),('6889050049',1,'Mr. Gaylord Effertz','333 Ubaldo Island\nEast Nathaven, KS 06875','4716389671317323',2,NULL,NULL),('6899851794',4,'Mrs. Sydni Reichert','6449 Deon Rest\nNorth Santiago, PA 34024-0080','4745435247203672',7,NULL,NULL),('6966177662',2,'Rodolfo Schneider PhD','7018 Gerlach Crescent\nProhaskahaven, VT 87558-0724','4532681174803243',9,NULL,NULL),('7280317672',3,'Julien Wisoky','66395 Elmer Ville\nWest Francescaberg, NJ 89227','4929982495670274',16,NULL,NULL),('7289938425',1,'Dr. Kobe Herzog IV','5839 Shanahan Squares Suite 509\nAlvismouth, OH 63993','4916669713211826',1,NULL,NULL),('7320654314',1,'Mr. Terrell Yundt MD','404 Bauch Expressway\nNew Rahul, AZ 33321-7038','2477004735052799',6,NULL,NULL),('7372182378',2,'Jeanette Kiehn Jr.','4993 Raven Loop Apt. 854\nEast Johathanfort, AL 00574-9625','4485658019100693',8,NULL,NULL),('7454079181',1,'Dr. Gideon Vandervort DDS','34721 Keeling Run\nLake Juliohaven, ME 05444','2221168047527860',12,NULL,NULL),('7670143002',1,'Ava Schaefer','8342 Heloise Path Apt. 474\nBoscoport, RI 63691','4916185348874854',29,NULL,NULL),('7719721104',4,'Misael Connelly','60118 Mohr Brook Apt. 135\nLake Athenaborough, KY 22822-8623','2720568973697734',15,NULL,NULL),('7814086001',3,'Mariana Rowe','884 Kattie Ferry Suite 740\nLake Pollytown, NJ 70497-3238','4539840898392171',24,NULL,NULL),('7815229433',3,'Nathaniel Hodkiewicz','56605 Michaela Radial Apt. 532\nWest Brycen, CA 87347','5475885949624737',2,NULL,NULL),('7839674056',3,'Darryl Douglas','6377 Leslie Ford Apt. 840\nNorth Tomasatown, RI 45733','5180946717300037',28,NULL,NULL),('8085465395',4,'Dangelo Kshlerin II','9296 Homenick Plaza\nKovacekville, NY 26139-4295','4860766206943',25,NULL,NULL),('8134457168',2,'Randi Gorczany IV','560 Romaguera Junctions\nJarvisburgh, AR 22089-0403','2427231347819593',5,NULL,NULL),('8136012171',2,'Prof. Eliseo Heller','95221 Ubaldo Field Apt. 605\nFeeneyberg, NM 94014-8384','6011974438650954',7,NULL,NULL),('8195721736',4,'Mr. Kellen Grant','893 Lynch Divide Apt. 375\nFrancescamouth, OK 23213-4645','4024007180426552',7,NULL,NULL),('8196963289',1,'Maxine Tillman III','8241 Kali Mill Suite 289\nNew Newellfort, WA 91348','4539639368022502',15,NULL,NULL),('8357979823',4,'Mr. Louvenia Auer I','897 Hermann Gateway\nPort Aaliyah, OK 73233','4485106577243653',11,NULL,NULL),('8426077526',2,'Delphine Stoltenberg','8541 Price Port Apt. 795\nNew Paige, ND 72899','4539330474455469',18,NULL,NULL),('8554952510',3,'Dr. Francis Streich DVM','4234 Abshire Glens Apt. 937\nChamplinside, OR 82165','4024007123389',16,NULL,NULL),('8621240799',4,'Freeda Stehr','155 Rogahn Trail\nEast Mathildebury, ND 98717','6011097603342874',28,NULL,NULL),('8660350303',3,'Chaya Haley','33977 Rossie Key\nJaunitaton, GA 51897-3574','4485702900790145',15,NULL,NULL),('8843651460',4,'Elvie Yundt','809 Krajcik Isle Suite 986\nMayerthaven, OH 26653','4024007158625',19,NULL,NULL),('8879255036',1,'Zackary Cormier II','50076 Robel Cliff\nNew Eriberto, HI 87429-4269','4539679288970',7,NULL,NULL),('9022735975',2,'Alexandre Wintheiser','62197 Becker Motorway\nDietrichmouth, TX 22154-9830','4929276966733384',15,NULL,NULL),('9274554896',1,'Mr. Austin Mosciski','3806 Bailey Forks Apt. 090\nColemantown, MA 24385-7675','4716353527997738',30,NULL,NULL),('9357322863',3,'Sabryna Heathcote','39294 Alanis Islands\nNorth Cleve, OK 62028-0454','2663927373789195',7,NULL,NULL),('9723837076',1,'Jabari Wilkinson','35943 Mikel Vista\nMichaelabury, OH 14207-4163','4916700933867285',10,NULL,NULL);
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

-- Dump completed on 2019-06-16 23:57:37
