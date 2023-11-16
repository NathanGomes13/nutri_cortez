-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: nutri_cortez_db
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacoes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` VALUES (1,'@Ralph_Keller','1Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'),(3,'@Frank_Todd_13','23Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.'),(6,'Avaliador 2','Muito bom site!');
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos_calendario`
--

DROP TABLE IF EXISTS `eventos_calendario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos_calendario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cafe_da_manha` varchar(1000) NOT NULL,
  `almoco` varchar(1000) NOT NULL,
  `almoco_montar` varchar(1000) NOT NULL,
  `janta` varchar(1000) NOT NULL,
  `janta_montar` varchar(1000) NOT NULL,
  `lanches` varchar(1000) NOT NULL,
  `salada` varchar(1000) NOT NULL,
  `calorias` int(11) NOT NULL,
  `carboidratos` int(11) NOT NULL,
  `proteinas` int(11) NOT NULL,
  `gorduras` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_refeicoes_usuario` (`id_usuario`),
  CONSTRAINT `fk_refeicoes_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos_calendario`
--

LOCK TABLES `eventos_calendario` WRITE;
/*!40000 ALTER TABLE `eventos_calendario` DISABLE KEYS */;
INSERT INTO `eventos_calendario` VALUES (211,1,'2023-10-23 00:00:00','2023-10-24 00:00:00','#80ffe8','Vegetais (1/2 Cal)','a:1:{i:0;s:22:\"Sanduíche vegetariano\";}','a:1:{i:0;s:56:\"Tofu grelhado com molho teriyaki, quinoa, cenoura ralada\";}','a:1:{i:0;s:14:\"Arroz integral\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:14:\"Arroz integral\";}','a:1:{i:0;s:25:\"Bolinhos de grão-de-bico\";}','a:1:{i:0;s:17:\"Salada de Cenoura\";}',1480,233,70,31),(212,1,'2023-10-24 00:00:00','2023-10-25 00:00:00','#5aa9e6','Minha refeição é uma frase grande','a:1:{i:0;s:0:\"\";}','a:1:{i:0;s:0:\"\";}','a:1:{i:0;s:0:\"\";}','a:1:{i:0;s:0:\"\";}','a:1:{i:0;s:0:\"\";}','a:1:{i:0;s:0:\"\";}','a:1:{i:0;s:0:\"\";}',0,0,0,0),(213,1,'2023-10-19 00:00:00','2023-10-20 00:00:00','#5aa9e6','','a:1:{i:0;s:18:\"Smoothie de frutas\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:16:\"Molho de pimenta\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:16:\"Molho de pimenta\";}','a:1:{i:0;s:28:\"Salada de frutas com iogurte\";}','a:1:{i:0;s:19:\"Salada de Beterraba\";}',1020,170,63,14),(214,1,'2023-10-05 00:00:00','2023-10-06 00:00:00','#5aa9e6','','a:1:{i:0;s:18:\"Smoothie de frutas\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:16:\"Molho de pimenta\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:16:\"Molho de pimenta\";}','a:1:{i:0;s:28:\"Salada de frutas com iogurte\";}','a:1:{i:0;s:19:\"Salada de Beterraba\";}',1020,170,63,14),(215,1,'1970-01-01 01:00:00','1970-01-01 01:00:00','#5aa9e6','','a:1:{i:0;s:18:\"Smoothie de frutas\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:16:\"Molho de pimenta\";}','a:1:{i:0;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:16:\"Molho de pimenta\";}','a:1:{i:0;s:28:\"Salada de frutas com iogurte\";}','a:1:{i:0;s:19:\"Salada de Beterraba\";}',1020,170,63,14),(216,1,'2023-10-11 00:00:00','2023-10-12 00:00:00','#fface4','asdasd','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:65:\"Salsicha de frango grelhada, purê de batata-doce, couve refogada\";}','a:1:{i:0;s:14:\"Coxa de frango\";}','a:1:{i:0;s:65:\"Salsicha de frango grelhada, purê de batata-doce, couve refogada\";}','a:1:{i:0;s:14:\"Coxa de frango\";}','a:1:{i:0;s:37:\"Pedaços de frango grelhado com molho\";}','a:1:{i:0;s:14:\"Salada de Atum\";}',1766,72,160,82),(217,1,'1970-01-01 01:00:00','1970-01-01 01:00:00','#fface4','asdasd','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:65:\"Salsicha de frango grelhada, purê de batata-doce, couve refogada\";}','a:1:{i:0;s:14:\"Coxa de frango\";}','a:1:{i:0;s:65:\"Salsicha de frango grelhada, purê de batata-doce, couve refogada\";}','a:1:{i:0;s:14:\"Coxa de frango\";}','a:1:{i:0;s:37:\"Pedaços de frango grelhado com molho\";}','a:1:{i:0;s:14:\"Salada de Atum\";}',1766,72,160,82),(218,1,'1970-01-01 01:00:00','1970-01-01 01:00:00','#fface4','asdasd','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:65:\"Salsicha de frango grelhada, purê de batata-doce, couve refogada\";}','a:1:{i:0;s:14:\"Coxa de frango\";}','a:1:{i:0;s:65:\"Salsicha de frango grelhada, purê de batata-doce, couve refogada\";}','a:1:{i:0;s:14:\"Coxa de frango\";}','a:1:{i:0;s:37:\"Pedaços de frango grelhado com molho\";}','a:1:{i:0;s:14:\"Salada de Atum\";}',1766,72,160,82),(219,1,'2023-10-27 00:00:00','2023-10-28 00:00:00','#5aa9e6','','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Frango com Abacate\";}',2480,150,238,86),(220,1,'2023-10-03 00:00:00','2023-10-04 00:00:00','#5aa9e6','','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Frango com Abacate\";}',2480,150,238,86),(221,1,'2023-10-07 00:00:00','2023-10-08 00:00:00','#5aa9e6','','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Frango com Abacate\";}',2480,150,238,86),(222,1,'2023-10-13 00:00:00','2023-10-14 00:00:00','#5aa9e6','','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:2:{i:0;s:28:\"Frango com abóbora e quinoa\";i:1;s:6:\"Batata\";}','a:2:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";i:1;s:45:\"Frango grelhado com legumes salteados, quinoa\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Frango com Abacate\";}',2961,222,277,93),(223,16,'2023-10-19 00:00:00','2023-10-20 00:00:00','#7bf1a8','low carbipo','a:3:{i:0;s:17:\"Omelete de queijo\";i:1;s:0:\"\";i:2;s:0:\"\";}','a:2:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";i:1;s:52:\"Peixe assado, batata-doce cozida, brócolis no vapor\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Frango com Abacate\";}',2780,190,263,91),(224,17,'2023-10-02 00:00:00','2023-10-03 00:00:00','#5aa9e6','','a:2:{i:0;s:26:\"Ovos mexidos com espinafre\";i:1;s:26:\"Mingau de aveia com frutas\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Alface com Salmão\";}',2520,189,224,83),(225,19,'2023-11-09 00:00:00','2023-11-10 00:00:00','#836953 ','','a:3:{i:0;s:21:\"Pão na chapa com ovo\";i:1;s:19:\"Batido de proteína\";i:2;s:4:\"trgd\";}','a:1:{i:0;s:55:\"Arroz integral, feijão mulatinho, almôndegas de carne\";}','a:1:{i:0;s:14:\"Arroz integral\";}','a:1:{i:0;s:45:\"Frango grelhado com legumes salteados, quinoa\";}','a:4:{i:0;s:14:\"Arroz integral\";i:1;s:26:\"Carne grelhada com legumes\";i:2;s:0:\"\";i:3;s:0:\"\";}','a:1:{i:0;s:34:\"Waffle de aveia com frutas frescas\";}','a:1:{i:0;s:16:\"Salada de Quinoa\";}',2485,305,168,68),(226,19,'2023-11-10 00:00:00','2023-11-11 00:00:00','#ff686b','453453453','a:1:{i:0;s:17:\"Omelete de queijo\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:48:\"Bife grelhado, batata assada, espargos grelhados\";}','a:1:{i:0;s:28:\"Frango com abóbora e quinoa\";}','a:1:{i:0;s:30:\"Sanduíche de atum com abacate\";}','a:1:{i:0;s:28:\"Salada de Frango com Abacate\";}',2480,150,238,86);
/*!40000 ALTER TABLE `eventos_calendario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peso_semanal`
--

DROP TABLE IF EXISTS `peso_semanal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peso_semanal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `semana_peso` date DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `peso_semanal_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peso_semanal`
--

LOCK TABLES `peso_semanal` WRITE;
/*!40000 ALTER TABLE `peso_semanal` DISABLE KEYS */;
INSERT INTO `peso_semanal` VALUES (4,1,'2023-10-08',62.00),(5,1,'2023-10-01',58.00),(8,1,'2023-10-15',61.00),(12,16,'2023-10-22',50.00),(20,17,'2023-10-22',94.00),(33,1,'2023-10-22',62.00),(34,18,'2023-10-22',17.00),(36,1,'2023-10-29',61.00),(37,1,'2023-11-05',61.00),(40,19,'2023-11-05',60.00);
/*!40000 ALTER TABLE `peso_semanal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratos_almoco_e_janta`
--

DROP TABLE IF EXISTS `pratos_almoco_e_janta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratos_almoco_e_janta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `calorias` int(11) NOT NULL,
  `carboidratos` int(11) NOT NULL,
  `gorduras` int(11) NOT NULL,
  `proteinas` int(11) NOT NULL,
  `opcao` varchar(50) NOT NULL,
  `tabela_origem` varchar(50) DEFAULT 'pratos_almoco_e_janta',
  `muito_carboidratos` tinyint(1) DEFAULT 0,
  `muita_proteina` tinyint(1) DEFAULT 0,
  `pouco_carboidrato` tinyint(1) DEFAULT 0,
  `pouca_gordura` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratos_almoco_e_janta`
--

LOCK TABLES `pratos_almoco_e_janta` WRITE;
/*!40000 ALTER TABLE `pratos_almoco_e_janta` DISABLE KEYS */;
INSERT INTO `pratos_almoco_e_janta` VALUES (1,'Arroz integral, feijão preto, frango grelhado',200,400,50,8,35,'Arroz e Feijão','pratos_almoco_e_janta',0,1,0,0),(3,'Arroz integral, feijão mulatinho, almôndegas de carne',250,380,45,10,30,'Arroz e Feijão','pratos_almoco_e_janta',1,0,1,1),(4,'Macarrão de trigo integral, molho de tomate caseiro, frango desfiado',220,350,45,6,25,'Macarrão','pratos_almoco_e_janta',1,0,0,1),(5,'Macarrão de lentilha, molho de espinafre, cogumelos salteados',250,320,40,7,18,'Macarrão','pratos_almoco_e_janta',0,1,1,1),(6,'Macarrão de quinoa, pesto de manjericão, tomate seco, frango grelhado',230,380,55,10,30,'Macarrão','pratos_almoco_e_janta',0,1,1,0),(7,'Peixe assado, batata-doce cozida, brócolis no vapor',220,300,40,5,25,'Pratos Principais','pratos_almoco_e_janta',1,0,0,1),(8,'Frango ensopado, arroz integral, abóbora assada',250,380,45,7,30,'Pratos Principais','pratos_almoco_e_janta',1,0,0,1),(9,'Carne moída refogada com legumes, purê de batata',240,320,35,9,28,'Pratos Principais','pratos_almoco_e_janta',0,1,0,1),(10,'Stir-fry de frango com legumes, arroz basmati',230,380,50,8,30,'Pratos Internacionais','pratos_almoco_e_janta',0,0,1,1),(11,'Tofu grelhado com molho teriyaki, quinoa, cenoura ralada',220,320,40,12,20,'Pratos Internacionais','pratos_almoco_e_janta',0,0,1,0),(12,'Curry de lentilha com arroz jasmine',250,300,50,5,15,'Pratos Internacionais','pratos_almoco_e_janta',0,0,0,0),(13,'Bife grelhado, batata assada, espargos grelhados',220,400,30,10,40,'Pratos de Carne','pratos_almoco_e_janta',0,1,0,1),(14,'Peito de peru assado, purê de mandioquinha, vagem cozida',240,350,40,6,35,'Pratos de Carne','pratos_almoco_e_janta',1,1,0,1),(15,'Costelas de porco ao molho barbecue, batata rústica, milho cozido',250,450,35,18,25,'Pratos de Carne','pratos_almoco_e_janta',1,1,0,1),(16,'Lasanha de frango e vegetais',250,420,40,15,30,'Pratos de Massas','pratos_almoco_e_janta',0,1,1,0),(18,'Ravióli de ricota e espinafre com molho branco',220,350,40,10,15,'Pratos de Massas','pratos_almoco_e_janta',0,0,1,1),(19,'Frango ao curry com arroz integral',220,380,45,8,30,'Pratos de Frango','pratos_almoco_e_janta',1,0,0,0),(20,'Frango grelhado com legumes salteados, quinoa',240,320,35,7,35,'Pratos de Frango','pratos_almoco_e_janta',0,0,1,0),(21,'Frango ensopado com legumes, purê de abóbora',230,300,40,6,25,'Pratos de Frango','pratos_almoco_e_janta',1,1,1,0),(22,'Salmão assado, quinoa, espargos grelhados',220,400,30,15,35,'Pratos de Peixe','pratos_almoco_e_janta',0,0,0,1),(23,'Peixe branco cozido no vapor, arroz jasmine, couve-flor refogada',240,350,40,7,30,'Pratos de Peixe','pratos_almoco_e_janta',0,0,0,0),(24,'Tacos de peixe com coentro e abacate, tortilhas de milho',230,320,35,10,25,'Pratos de Peixe','pratos_almoco_e_janta',1,1,0,1),(25,'Hambúrguer de grão-de-bico com pão integral, batatas fritas de batata-doce',220,380,50,10,20,'Pratos Vegetarianos','pratos_almoco_e_janta',0,0,0,1),(26,'Ratatouille com arroz basmati',250,300,40,5,10,'Pratos Vegetarianos','pratos_almoco_e_janta',0,0,0,1),(27,'Tofu mexido com legumes, macarrão de abobrinha',230,320,25,12,15,'Pratos Vegetarianos','pratos_almoco_e_janta',1,0,0,1),(28,'Salsicha de frango grelhada, purê de batata-doce, couve refogada',220,350,30,12,25,'Pratos de Carnes Processadas','pratos_almoco_e_janta',1,1,1,0),(29,'Hambúrguer de peru com pão integral, milho cozido',240,380,40,8,30,'Pratos de Carnes Processadas','pratos_almoco_e_janta',1,1,1,1),(30,'Linguiça de frango com molho de tomate, arroz branco, brócolis cozido',250,450,35,15,28,'Pratos de Carnes Processadas','pratos_almoco_e_janta',0,1,0,1),(31,'Almocão',65436,2147483647,43,1,2,'3','pratos_almoco_e_janta',0,1,0,1);
/*!40000 ALTER TABLE `pratos_almoco_e_janta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratos_cafe_da_manha`
--

DROP TABLE IF EXISTS `pratos_cafe_da_manha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratos_cafe_da_manha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `calorias` int(11) NOT NULL,
  `carboidratos` int(11) NOT NULL,
  `gorduras` int(11) NOT NULL,
  `proteinas` int(11) NOT NULL,
  `opcao` varchar(55) NOT NULL,
  `tabela_origem` varchar(50) DEFAULT 'pratos_cafe_da_manha',
  `muito_carboidratos` tinyint(1) DEFAULT 0,
  `muita_proteina` tinyint(1) DEFAULT 0,
  `pouco_carboidrato` tinyint(1) DEFAULT 0,
  `pouca_gordura` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratos_cafe_da_manha`
--

LOCK TABLES `pratos_cafe_da_manha` WRITE;
/*!40000 ALTER TABLE `pratos_cafe_da_manha` DISABLE KEYS */;
INSERT INTO `pratos_cafe_da_manha` VALUES (1,'Iogurte com granola','200 g',250,40,8,10,'Com Iogurte','pratos_cafe_da_manha',0,1,0,0),(5,'Pão na chapa com ovo','150 g',250,20,10,12,'Com Pão1','pratos_cafe_da_manha',0,0,0,0),(6,'Pão na chapa com presunto','180 g',280,30,8,14,'Com Pão','pratos_cafe_da_manha',1,0,0,1),(7,'Mingau de aveia com frutas','220 g',220,40,6,5,'Com Aveia','pratos_cafe_da_manha',1,0,0,1),(8,'Panquecas de aveia','200 g',280,35,10,8,'Com Aveia','pratos_cafe_da_manha',1,0,0,0),(10,'Smoothie de frutas','250 g',180,40,2,5,'Com Frutas','pratos_cafe_da_manha',1,0,0,1),(11,'Salada de frutas','180 g',150,35,1,2,'Com Frutas','pratos_cafe_da_manha',0,0,0,0),(12,'Morangos com chantilly','200 g',200,15,10,3,'Com Frutas','pratos_cafe_da_manha',0,0,0,0),(13,'Omelete de queijo','250 g',280,3,20,18,'Com Ovos','pratos_cafe_da_manha',0,1,1,0),(14,'Ovos mexidos com espinafre','220 g',220,6,16,14,'Com Ovos','pratos_cafe_da_manha',0,0,0,0),(15,'Ovos cozidos com abacate','300 g',320,10,25,12,'Com Ovos','pratos_cafe_da_manha',0,0,0,0),(16,'Mingau de quinoa com frutas','300 g',300,50,6,8,'Com Cereais','pratos_cafe_da_manha',0,0,0,0),(17,'Torradas integrais com abacate','180 g',220,30,10,6,'Com Cereais','pratos_cafe_da_manha',0,0,0,0),(18,'Granola com iogurte','220 g',280,40,10,8,'Com Cereais','pratos_cafe_da_manha',0,0,0,0),(19,'Sanduíche de pão integral com queijo e tomate','180 g',320,35,12,15,'Com Pão','pratos_cafe_da_manha',0,0,0,0),(20,'Sanduíche de peito de peru e ovo','200 g',280,25,10,18,'Com Pão','pratos_cafe_da_manha',0,0,0,0),(21,'Sanduíche vegetariano','220 g',250,30,8,10,'Com Pão','pratos_cafe_da_manha',0,0,0,0),(24,'Panquecas de chocolate','250 g',320,45,12,8,'Com Panquecas','pratos_cafe_da_manha',0,0,0,0),(25,'Smoothie verde','220 g',200,25,5,10,'Com Smoothie','pratos_cafe_da_manha',0,0,0,0),(26,'Batido de proteína','250 g',280,30,8,20,'Com Smoothie','pratos_cafe_da_manha',0,0,0,0),(27,'Smoothie de manga e coco','200 g',220,35,4,6,'Com Smoothie','pratos_cafe_da_manha',0,0,0,0),(28,'Tapioca com queijo e tomate','200 g',270,35,10,12,'Diversos','pratos_cafe_da_manha',0,0,0,0),(29,'Crepioca com presunto e queijo','230 g',300,25,14,18,'Diversos','pratos_cafe_da_manha',0,0,0,0),(30,'Mingau de milho verde','220 g',230,40,3,5,'Diversos','pratos_cafe_da_manha',0,0,0,0),(31,'Teste','4324',324324,543,1,23,'4','pratos_cafe_da_manha',5,3,2,1),(32,'Teste','4324',324324,543,1,23,'4','pratos_cafe_da_manha',5,3,2,1),(33,'trgd','5',5,5,5,5,'5','pratos_cafe_da_manha',5,5,3,2),(34,'Teste','123',123,123,123,123,'123','pratos_cafe_da_manha',123,12,2,1),(35,'rwer','werwe',1,1,1,1,'erwe','pratos_cafe_da_manha',1,1,1,1),(36,'Pão','213',312,3123,123,4,'5','pratos_cafe_da_manha',6,7,8,9);
/*!40000 ALTER TABLE `pratos_cafe_da_manha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratos_lanches`
--

DROP TABLE IF EXISTS `pratos_lanches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratos_lanches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `calorias` int(11) NOT NULL,
  `carboidratos` int(11) NOT NULL,
  `gorduras` int(11) NOT NULL,
  `proteinas` int(11) NOT NULL,
  `tabela_origem` varchar(50) DEFAULT 'pratos_lanches',
  `muito_carboidratos` tinyint(1) DEFAULT 0,
  `muita_proteina` tinyint(1) DEFAULT 0,
  `pouco_carboidrato` tinyint(1) DEFAULT 0,
  `pouca_gordura` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratos_lanches`
--

LOCK TABLES `pratos_lanches` WRITE;
/*!40000 ALTER TABLE `pratos_lanches` DISABLE KEYS */;
INSERT INTO `pratos_lanches` VALUES (2,'Omelete de espinafre e queijo',200,300,4,25,15,'pratos_lanches',0,1,0,0),(3,'Sanduíche de atum com abacate',180,280,15,12,25,'pratos_lanches',0,1,0,0),(5,'Rolinhos de presunto e queijo',120,180,2,12,15,'pratos_lanches',1,1,0,0),(6,'Smoothie de proteína com frutas',300,220,30,5,20,'pratos_lanches',1,1,0,1),(7,'Barra de proteína',50,200,20,8,15,'pratos_lanches',1,1,1,1),(10,'Chips de batata-doce assados',50,120,20,4,2,'pratos_lanches',1,1,0,0),(11,'Homus com palitos de cenoura',100,150,10,8,6,'pratos_lanches',0,0,0,1),(12,'Bolinhos de grão-de-bico',80,100,15,3,5,'pratos_lanches',0,0,0,0),(13,'Mix de castanhas e frutas secas',40,180,10,14,4,'pratos_lanches',0,0,0,0),(14,'Queijo cottage com frutas frescas',200,180,15,6,15,'pratos_lanches',1,1,0,0),(15,'Pedaços de frango grelhado com molho',150,200,2,8,25,'pratos_lanches',1,1,1,1),(17,'Guacamole com chips de milho',100,200,15,15,3,'pratos_lanches',1,0,1,0),(18,'Ovos cozidos com azeitonas',120,150,3,12,9,'pratos_lanches',0,0,0,0),(19,'Barra de granola caseira',40,180,25,8,4,'pratos_lanches',1,0,0,0),(20,'Rolinhos de presunto e queijo de cabra',100,220,5,18,10,'pratos_lanches',1,1,1,0),(21,'Salada de frutas com iogurte',180,120,25,1,5,'pratos_lanches',1,0,1,1),(22,'Waffle de aveia com frutas frescas',150,250,35,8,7,'pratos_lanches',1,1,1,1),(23,'Cupcakes de quinoa e legumes',100,160,20,7,5,'pratos_lanches',1,1,0,0),(24,'Batata-doce recheada com cottage',200,230,30,6,12,'pratos_lanches',1,1,1,1),(25,'Tiras de pimentão com hummus',150,180,20,8,6,'pratos_lanches',0,1,0,1),(26,'Bolinhos de carne de peru',120,190,5,12,15,'pratos_lanches',1,1,0,1),(27,'Pizza de pão sírio com legumes',180,240,30,10,10,'pratos_lanches',0,0,1,0),(28,'Pudim de chia com leite de amêndoa',180,160,20,8,5,'pratos_lanches',0,0,1,0),(29,'Palitos de pepino com homus',100,120,15,6,4,'pratos_lanches',1,1,0,0),(30,'Sanduíche aberto de salmão e abacate',200,280,20,15,18,'pratos_lanches',1,0,1,1),(31,'Bolinhos de arroz integral com legumes',150,170,25,3,6,'pratos_lanches',0,1,0,0),(32,'Tapioca com queijo e tomate',100,180,20,6,8,'pratos_lanches',0,1,0,1);
/*!40000 ALTER TABLE `pratos_lanches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratos_opcoes_separadas`
--

DROP TABLE IF EXISTS `pratos_opcoes_separadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratos_opcoes_separadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `peso` varchar(150) DEFAULT NULL,
  `calorias` int(11) DEFAULT NULL,
  `carboidratos` float DEFAULT NULL,
  `gorduras` float DEFAULT NULL,
  `proteinas` float DEFAULT NULL,
  `tabela_origem` varchar(50) DEFAULT 'pratos_opcoes_separadas',
  `muito_carboidratos` tinyint(1) DEFAULT 0,
  `muita_proteina` tinyint(1) DEFAULT 0,
  `pouco_carboidrato` tinyint(1) DEFAULT 0,
  `pouca_gordura` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratos_opcoes_separadas`
--

LOCK TABLES `pratos_opcoes_separadas` WRITE;
/*!40000 ALTER TABLE `pratos_opcoes_separadas` DISABLE KEYS */;
INSERT INTO `pratos_opcoes_separadas` VALUES (1,'Arroz branco','1 xícara',205,45,0.4,4.3,'pratos_opcoes_separadas',0,0,1,1),(2,'Arroz integral','1 xícara',215,45,1.5,4.1,'pratos_opcoes_separadas',1,1,1,0),(3,'Feijão','100g',130,23,0.6,7.5,'pratos_opcoes_separadas',1,1,1,0),(4,'Coxa de frango','1 unidade',183,0,9.7,21.7,'pratos_opcoes_separadas',0,1,1,1),(5,'Peito de frango','1 unidade',165,0,3.6,31,'pratos_opcoes_separadas',1,0,0,1),(6,'Filé de costela','1 unidade',291,0,24.3,19.6,'pratos_opcoes_separadas',0,1,1,1),(7,'Batata-doce','1 média',112,26,0.1,2,'pratos_opcoes_separadas',0,0,0,0),(8,'Brócolis','1 xícara',55,11,0.6,4.3,'pratos_opcoes_separadas',1,1,1,1),(9,'Ovo cozido','1 grande',68,0.6,4.8,5.5,'pratos_opcoes_separadas',1,0,1,1),(10,'Espinafre','1 xícara',7,1.1,0.1,0.9,'pratos_opcoes_separadas',0,0,1,0),(11,'Salmão grelhado','100g',206,0,13.8,20.4,'pratos_opcoes_separadas',1,0,1,0),(12,'Quinoa cozida','1 xícara',222,39,3.6,8.1,'pratos_opcoes_separadas',1,0,0,0),(14,'Tomate','1 médio',5,1,0.1,0.2,'pratos_opcoes_separadas',1,0,0,0),(16,'Cogumelos','100g',22,3,0.3,3,'pratos_opcoes_separadas',1,1,1,1),(17,'Lentilhas','100g',116,20,0.4,9,'pratos_opcoes_separadas',0,0,1,1),(18,'Milho','1 espiga',123,27,1.5,4,'pratos_opcoes_separadas',0,0,0,0),(19,'Espargos','100g',20,2,0.2,2,'pratos_opcoes_separadas',1,1,1,0),(20,'Cenoura','1 média',25,6,0.1,0.6,'pratos_opcoes_separadas',0,1,1,0),(21,'Abacaxi','1 fatia',50,13,0,0.5,'pratos_opcoes_separadas',0,1,1,0),(22,'Morangos','100g',29,7,0.4,0.6,'pratos_opcoes_separadas',1,1,0,1),(23,'Frango grelhado','100g',165,0,3.6,31,'pratos_opcoes_separadas',1,0,1,0),(24,'Peru cozido','100g',135,0,0.9,30,'pratos_opcoes_separadas',1,0,1,0),(25,'Carne bovina magra','100g',143,0,3.5,27,'pratos_opcoes_separadas',0,0,0,1),(26,'Peixe branco cozido','100g',85,0,1.2,20,'pratos_opcoes_separadas',1,0,1,0),(27,'Ovo mexido','2 ovos',140,2,10,12,'pratos_opcoes_separadas',0,1,0,1),(28,'Tofu','100g',144,3,8,15,'pratos_opcoes_separadas',1,1,0,0),(29,'Amêndoas','30g',180,6,15,6,'pratos_opcoes_separadas',1,1,0,0),(30,'Nozes','30g',200,4,20,5,'pratos_opcoes_separadas',1,1,0,1),(31,'Castanhas','30g',190,4,18,3,'pratos_opcoes_separadas',0,0,0,0),(32,'Aveia','40g',150,27,3,5,'pratos_opcoes_separadas',0,0,1,1),(33,'Iogurte grego','150g',130,6,10,15,'pratos_opcoes_separadas',1,0,0,0),(34,'Queijo cottage','100g',98,3,4.3,11,'pratos_opcoes_separadas',0,0,0,0),(35,'Hummus','100g',166,20,9,8,'pratos_opcoes_separadas',0,0,0,1),(36,'Azeite de oliva','15g',135,0,15,0,'pratos_opcoes_separadas',1,0,1,1),(37,'Vinagrete','2 colheres',50,2,5,0,'pratos_opcoes_separadas',0,0,0,0),(38,'Molho de soja','15g',10,0.9,0.1,1,'pratos_opcoes_separadas',1,0,0,1),(39,'Molho de pimenta','5g',0,0.1,0,0,'pratos_opcoes_separadas',0,1,1,1),(41,'Sementes de abóbora','30g',151,4,13,6,'pratos_opcoes_separadas',1,0,1,1),(42,'Macarrão integral','100g',158,31,1.5,6,'pratos_opcoes_separadas',0,1,1,1),(43,'Pão integral','1 fatia',70,12,1,3,'pratos_opcoes_separadas',1,0,1,0),(44,'Grão-de-bico cozido','100g',164,27,2.6,8.9,'pratos_opcoes_separadas',1,0,1,0),(45,'Feijão preto cozido','100g',132,23,0.5,8.7,'pratos_opcoes_separadas',0,0,1,1),(46,'Arroz selvagem','100g',101,21,0.3,3.7,'pratos_opcoes_separadas',0,0,1,1),(47,'Salmão enlatado','100g',206,0,13.8,20.4,'pratos_opcoes_separadas',0,0,1,1),(48,'Atum enlatado','100g',109,0,1.5,26,'pratos_opcoes_separadas',0,0,0,0),(49,'Couve-flor','100g',25,5,0.3,2,'pratos_opcoes_separadas',0,1,1,0),(50,'Alface','100g',5,1,0.1,0.5,'pratos_opcoes_separadas',1,0,1,0),(51,'Rúcula','100g',25,2,0.7,2,'pratos_opcoes_separadas',0,0,0,1),(52,'Maçã','1 média',95,25,0.3,0.5,'pratos_opcoes_separadas',0,1,0,1),(53,'Pera','1 média',102,27,0.2,0.6,'pratos_opcoes_separadas',0,0,1,0),(54,'Manga','1 média',150,40,1.5,1,'pratos_opcoes_separadas',0,0,1,1),(55,'Abacate','1/2 médio',120,6,10.5,1.5,'pratos_opcoes_separadas',0,1,1,1),(56,'Açaí','100g',70,4,5,2,'pratos_opcoes_separadas',1,0,1,1),(57,'Iogurte natural','150g',100,5,5,8,'pratos_opcoes_separadas',0,1,1,0),(58,'Leite de amêndoas','1 xícara',30,1,2.5,1,'pratos_opcoes_separadas',0,1,1,0),(59,'Leite de aveia','1 xícara',130,17,2.5,4,'pratos_opcoes_separadas',1,1,0,1),(60,'Leite de coco','1 xícara',552,13,57,5,'pratos_opcoes_separadas',1,0,0,0),(61,'Queijo cheddar','30g',110,0.4,9,7,'pratos_opcoes_separadas',0,1,0,0),(62,'Queijo suíço','30g',110,1,9,7,'pratos_opcoes_separadas',0,1,1,0),(63,'Pão de centeio','1 fatia',83,16,0.6,2.5,'pratos_opcoes_separadas',0,0,1,1),(64,'Manteiga de amendoim','2 colheres',190,6,16,8,'pratos_opcoes_separadas',0,0,0,0),(65,'Geléia de frutas','1 colher',50,13,0,0,'pratos_opcoes_separadas',1,0,1,1),(66,'Chocolate amargo','30g',150,14,10,2,'pratos_opcoes_separadas',1,0,1,0),(67,'Suco de laranja','1 copo',112,26,0,2,'pratos_opcoes_separadas',0,1,1,1),(68,'Água de coco','1 copo',46,9,0,1,'pratos_opcoes_separadas',0,1,0,1),(69,'Café','1 xícara',2,0,0,0,'pratos_opcoes_separadas',1,0,0,0),(70,'Chá verde','1 xícara',0,0,0,0,'pratos_opcoes_separadas',0,0,1,0),(71,'Vinho tinto','1 taça',123,3.8,0,0.1,'pratos_opcoes_separadas',0,1,1,1),(72,'Cerveja','1 lata',153,12.6,0,1.6,'pratos_opcoes_separadas',1,0,0,0),(73,'Batata','1 média',161,37,0.2,4,'pratos_opcoes_separadas',0,1,1,0),(74,'Batata frita','100g',365,63,14,3,'pratos_opcoes_separadas',0,1,0,0),(75,'Cenoura ralada','1 xícara',45,10,0.2,1,'pratos_opcoes_separadas',1,1,0,1),(76,'Tomate cereja','100g',18,3,0.2,1,'pratos_opcoes_separadas',0,0,0,1),(77,'Pimentão','1 médio',40,9,0.4,1,'pratos_opcoes_separadas',0,1,0,1),(78,'Cebola','1 média',44,11,0.1,1,'pratos_opcoes_separadas',0,1,0,1),(79,'Limão','1 médio',17,5,0.1,0.6,'pratos_opcoes_separadas',1,0,1,0),(80,'Laranja','1 média',62,15,0.2,1.2,'pratos_opcoes_separadas',0,1,0,0),(81,'Abóbora','100g',15,4,0.1,1,'pratos_opcoes_separadas',1,0,0,1),(82,'Pimenta vermelha','1 média',18,4,0.2,1,'pratos_opcoes_separadas',1,0,0,0),(83,'Azeitonas','100g',115,6,10.7,0.8,'pratos_opcoes_separadas',0,0,1,0),(84,'Mel','1 colher',64,17,0,0.1,'pratos_opcoes_separadas',1,0,0,0),(85,'Ervilhas','100g',81,14,0.4,5,'pratos_opcoes_separadas',1,1,0,0),(86,'Alcachofra','1 média',60,14,0.2,2,'pratos_opcoes_separadas',1,0,0,1),(87,'Palmito','100g',20,4,0.4,2,'pratos_opcoes_separadas',0,1,1,1),(88,'Berinjela','1 média',24,6,0.1,1,'pratos_opcoes_separadas',1,1,0,0),(89,'Abóbora japonesa','100g',20,4.5,0.1,0.5,'pratos_opcoes_separadas',1,1,0,1),(90,'Chuchu','100g',19,4.5,0.1,0.3,'pratos_opcoes_separadas',0,0,0,1),(91,'Kiwi','1 médio',41,10,0.4,0.8,'pratos_opcoes_separadas',0,1,0,0),(92,'Uva','100g',69,18,0.2,0.7,'pratos_opcoes_separadas',1,1,0,1),(93,'Melancia','1 fatia',30,8,0.2,0.6,'pratos_opcoes_separadas',1,1,1,0),(94,'Mamão','1 fatia',59,15,0.2,0.6,'pratos_opcoes_separadas',0,0,0,1),(95,'Cogumelos portobello','100g',22,3,0.3,2.5,'pratos_opcoes_separadas',1,0,0,0),(96,'Frango com brócolis','200g frango + 150g brócolis',300,10,7,45,'pratos_opcoes_separadas',0,0,1,0),(97,'Carne grelhada com legumes','200g carne + 150g legumes',350,15,10,45,'pratos_opcoes_separadas',0,0,0,1),(98,'Peixe assado com quinoa','200g peixe + 150g quinoa',300,25,5,35,'pratos_opcoes_separadas',1,1,1,1),(99,'Omelete de espinafre','3 ovos + 50g espinafre',250,5,18,15,'pratos_opcoes_separadas',0,1,1,0),(100,'Strogonoff de carne','200g carne + 100g creme de leite + 50g cogumelos',400,10,30,25,'pratos_opcoes_separadas',1,0,0,0),(101,'Salada de atum','100g atum + 100g alface + 50g tomate',200,10,10,20,'pratos_opcoes_separadas',0,0,0,0),(102,'Frango com batata doce','200g frango + 150g batata doce',350,30,5,40,'pratos_opcoes_separadas',1,1,1,1),(103,'Peixe com abobrinha','200g peixe + 150g abobrinha',250,15,8,30,'pratos_opcoes_separadas',1,0,1,0),(104,'Omelete de queijo','3 ovos + 30g queijo + 50g tomate',300,5,20,20,'pratos_opcoes_separadas',0,1,1,1),(105,'Strogonoff de frango','200g frango + 100g creme de leite + 50g cogumelos',350,15,15,30,'pratos_opcoes_separadas',1,0,1,0),(106,'Salada de camarão','100g camarão + 100g alface + 50g pepino',150,10,5,15,'pratos_opcoes_separadas',1,1,1,1),(107,'Carne assada com batatas','200g carne + 150g batatas',400,30,15,40,'pratos_opcoes_separadas',0,1,0,0),(108,'Peixe grelhado com aspargos','200g peixe + 150g aspargos',300,20,7,35,'pratos_opcoes_separadas',1,1,1,0),(109,'Omelete de presunto','3 ovos + 50g presunto + 30g queijo',280,5,20,25,'pratos_opcoes_separadas',0,1,0,0),(110,'Strogonoff de cogumelos','150g cogumelos + 100g creme de leite + 50g cebola',250,10,15,10,'pratos_opcoes_separadas',0,0,0,0),(111,'Salada de frango','150g frango + 100g alface + 50g cenoura',200,10,5,25,'pratos_opcoes_separadas',1,0,0,0),(112,'Carne moída com legumes','200g carne moída + 150g legumes',300,15,10,30,'pratos_opcoes_separadas',0,0,1,1),(113,'Peixe assado com brócolis','200g peixe + 150g brócolis',250,20,5,30,'pratos_opcoes_separadas',0,1,1,0),(114,'Omelete de cogumelos','3 ovos + 50g cogumelos + 30g queijo',260,5,18,20,'pratos_opcoes_separadas',0,0,1,0),(115,'Strogonoff de frutos do mar','100g frutos do mar + 100g creme de leite + 50g pimentão',300,10,20,25,'pratos_opcoes_separadas',1,0,1,0),(116,'Frango com abóbora e quinoa','200g frango + 150g abóbora + 150g quinoa',400,30,7,45,'pratos_opcoes_separadas',1,1,1,0),(117,'Carne ao molho de cogumelos','200g carne + 150g cogumelos + 50g creme de leite',450,10,25,40,'pratos_opcoes_separadas',0,0,1,0),(118,'Salmão grelhado com salada','200g salmão + 100g alface + 50g pepino',350,10,15,40,'pratos_opcoes_separadas',1,1,1,1),(119,'Ovos mexidos com espinafre','3 ovos + 50g espinafre',250,5,18,15,'pratos_opcoes_separadas',0,1,1,0),(120,'Strogonoff de camarão','150g camarão + 100g creme de leite + 50g cebola',300,10,15,25,'pratos_opcoes_separadas',1,0,0,0),(121,'Hambúrguer de carne com batatas','1 hambúrguer + 150g batatas',400,30,20,25,'pratos_opcoes_separadas',0,0,0,0),(122,'Tilápia com legumes','200g tilápia + 150g legumes',250,15,5,30,'pratos_opcoes_separadas',0,1,1,0),(123,'Frittata de vegetais','3 ovos + 100g vegetais diversos + 30g queijo',280,10,18,20,'pratos_opcoes_separadas',1,0,1,1),(124,'Carne de porco assada com abacaxi','200g carne de porco + 150g abacaxi',350,20,15,35,'pratos_opcoes_separadas',1,1,0,1),(125,'Salmão ao molho de mostarda','200g salmão + 50g creme de leite + 15g mostarda',300,5,20,30,'pratos_opcoes_separadas',1,0,0,0),(126,'Ovos pochê com abacate','2 ovos + 1/2 abacate',350,10,30,15,'pratos_opcoes_separadas',0,1,0,1),(127,'Frango à parmegiana','200g frango + 50g queijo + 100g molho de tomate',400,10,20,40,'pratos_opcoes_separadas',1,1,0,0),(128,'Peixe com molho de limão','200g peixe + 30g manteiga + suco de 1 limão',300,5,15,35,'pratos_opcoes_separadas',0,1,0,1),(129,'Tofu grelhado com vegetais','200g tofu + 150g vegetais diversos',250,15,10,20,'pratos_opcoes_separadas',1,0,1,1),(130,'Omelete de atum','3 ovos + 100g atum + 30g queijo',300,5,20,25,'pratos_opcoes_separadas',0,1,1,1),(132,'Peixe ao curry com arroz integral','200g peixe + 150g arroz integral + 50g molho de curry',400,40,10,30,'pratos_opcoes_separadas',1,1,1,0),(133,'Ovos mexidos com cogumelos','3 ovos + 50g cogumelos + 30g queijo',280,5,20,20,'pratos_opcoes_separadas',0,1,0,0),(134,'Strogonoff de peru','200g peru + 100g creme de leite + 50g cebola',350,15,15,30,'pratos_opcoes_separadas',1,0,0,0),(135,'Salada de frutas com iogurte','100g iogurte + 150g frutas variadas',200,40,2,5,'pratos_opcoes_separadas',0,0,0,1),(136,'Frango com abobrinha e arroz integral','200g frango + 150g abobrinha + 150g arroz integral',400,30,7,45,'pratos_opcoes_separadas',0,1,1,1),(137,'Carne de porco ao molho barbecue','200g carne de porco + 100g molho barbecue',450,15,25,35,'pratos_opcoes_separadas',0,0,1,1),(138,'Salmão assado com legumes','200g salmão + 150g legumes',350,15,20,30,'pratos_opcoes_separadas',0,1,1,0),(139,'Ovos mexidos com tomate','3 ovos + 100g tomate + 30g queijo',280,5,20,25,'pratos_opcoes_separadas',1,0,0,0),(140,'Strogonoff de frango com cogumelos','200g frango + 50g cogumelos + 100g creme de leite',350,10,20,35,'pratos_opcoes_separadas',0,1,0,0),(141,'Hambúrguer de frango com batata doce','1 hambúrguer de frango + 150g batata doce',400,30,10,35,'pratos_opcoes_separadas',0,0,0,1),(142,'Tilápia grelhada com espinafre','200g tilápia + 150g espinafre',300,10,10,35,'pratos_opcoes_separadas',1,1,1,1),(143,'Frittata de presunto e queijo','3 ovos + 50g presunto + 30g queijo + 50g tomate',300,5,20,25,'pratos_opcoes_separadas',0,1,0,0),(144,'Carne de porco com abacaxi e pimentão','200g carne de porco + 100g abacaxi + 50g pimentão',350,20,15,30,'pratos_opcoes_separadas',0,1,1,0),(145,'Salmão grelhado com molho de dill','200g salmão + 50g creme de leite + 15g dill',300,5,20,30,'pratos_opcoes_separadas',0,1,0,0),(146,'Ovos pochê com espinafre','2 ovos + 100g espinafre',300,10,20,20,'pratos_opcoes_separadas',1,0,0,0),(147,'Frango com molho de amendoim','200g frango + 50g molho de amendoim + 150g legumes',400,20,20,40,'pratos_opcoes_separadas',1,0,0,0),(148,'Peixe com molho de laranja','200g peixe + 30g manteiga + suco de 1 laranja',300,10,15,35,'pratos_opcoes_separadas',0,0,0,0),(149,'Tofu grelhado com vegetais','200g tofu + 150g vegetais diversos',250,15,10,20,'pratos_opcoes_separadas',0,0,0,1),(150,'Omelete de atum','3 ovos + 100g atum + 30g queijo',300,5,20,25,'pratos_opcoes_separadas',1,0,1,0),(151,'Carne de porco com maçã','200g carne de porco + 150g maçã',350,25,15,30,'pratos_opcoes_separadas',1,0,0,0),(152,'Peixe ao molho de limão e brócolis','200g peixe + 50g creme de leite + suco de 1 limão + 150g brócolis',350,15,15,30,'pratos_opcoes_separadas',0,0,1,1),(153,'Ovos mexidos com pimentão','3 ovos + 100g pimentão + 30g queijo',280,5,20,25,'pratos_opcoes_separadas',0,1,0,0),(154,'Strogonoff de peru com cogumelos','200g peru + 50g cogumelos + 100g creme de leite',350,10,20,30,'pratos_opcoes_separadas',0,0,0,1),(155,'Salada de frutas com iogurte e granola','100g iogurte + 150g frutas variadas + 30g granola',250,40,5,10,'pratos_opcoes_separadas',1,1,1,0),(156,'Salmão com molho de maracujá','200g salmão + 50g creme de leite + polpa de 1 maracujá',300,5,20,30,'pratos_opcoes_separadas',0,0,1,0),(157,'Ovos pochê com abacate e pimenta','2 ovos + 1/2 abacate + pimenta a gosto',350,10,30,15,'pratos_opcoes_separadas',1,0,0,1),(158,'Frango ao curry com legumes','200g frango + 50g molho de curry + 150g legumes',400,20,20,40,'pratos_opcoes_separadas',1,1,0,0),(159,'Peixe com molho de ervas','200g peixe + 50g creme de leite + ervas a gosto',350,15,15,30,'pratos_opcoes_separadas',0,0,1,0),(160,'Tofu assado com batatas','200g tofu + 150g batatas',250,20,10,20,'pratos_opcoes_separadas',0,0,0,0),(161,'Omelete de espinafre e queijo','3 ovos + 50g espinafre + 30g queijo',280,5,20,25,'pratos_opcoes_separadas',1,0,1,1),(162,'Carne de porco com maçã e cenoura','200g carne de porco + 100g maçã + 150g cenoura',400,30,15,35,'pratos_opcoes_separadas',1,0,0,0),(163,'Peixe grelhado com molho de ervas','200g peixe + 50g creme de leite + ervas a gosto',350,15,15,30,'pratos_opcoes_separadas',0,1,1,1),(164,'Ovos mexidos com pimentão e tomate','3 ovos + 100g pimentão + 50g tomate',280,5,20,25,'pratos_opcoes_separadas',1,0,0,1),(165,'Strogonoff de frango com abóbora','200g frango + 50g abóbora + 100g creme de leite',350,10,20,30,'pratos_opcoes_separadas',0,1,0,0);
/*!40000 ALTER TABLE `pratos_opcoes_separadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pratos_salada`
--

DROP TABLE IF EXISTS `pratos_salada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pratos_salada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `calorias` int(11) NOT NULL,
  `carboidratos` int(11) NOT NULL,
  `gorduras` int(11) NOT NULL,
  `proteinas` int(11) NOT NULL,
  `tabela_origem` varchar(50) DEFAULT 'pratos_salada',
  `muito_carboidratos` tinyint(1) DEFAULT 0,
  `muita_proteina` tinyint(1) DEFAULT 0,
  `pouco_carboidrato` tinyint(1) DEFAULT 0,
  `pouca_gordura` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pratos_salada`
--

LOCK TABLES `pratos_salada` WRITE;
/*!40000 ALTER TABLE `pratos_salada` DISABLE KEYS */;
INSERT INTO `pratos_salada` VALUES (1,'Salada de Frango',300,250,12,10,30,'pratos_salada',0,0,0,0),(2,'Salada Caesar',250,200,10,15,8,'pratos_salada',0,1,0,1),(3,'Salada Caprese',200,180,8,14,7,'pratos_salada',0,1,0,1),(4,'Salada de Atum',300,220,7,12,25,'pratos_salada',1,0,1,1),(5,'Salada Grega',280,180,10,15,7,'pratos_salada',1,0,0,0),(6,'Salada de Quinoa',220,220,30,8,6,'pratos_salada',1,0,1,0),(7,'Salada de Camarão',280,150,9,7,18,'pratos_salada',0,1,1,1),(8,'Salada Waldorf',200,220,20,15,4,'pratos_salada',1,1,0,0),(9,'Salada de Lentilhas',250,210,30,5,12,'pratos_salada',1,1,1,1),(10,'Salada de Brócolis com Nozes',180,160,12,10,8,'pratos_salada',0,0,1,0),(11,'Salada de Grão de Bico',220,190,25,6,9,'pratos_salada',1,0,1,1),(12,'Salada de Beterraba',150,120,25,1,3,'pratos_salada',1,1,1,1),(13,'Salada de Abacate',250,280,15,22,5,'pratos_salada',1,0,0,1),(14,'Salada de Espinafre',200,150,10,11,8,'pratos_salada',1,1,1,1),(15,'Salada de Tomate com Manjericão',180,120,10,8,3,'pratos_salada',0,1,1,1),(16,'Salada de Cenoura',170,80,18,1,2,'pratos_salada',0,1,1,1),(17,'Salada de Rúcula com Parmesão',190,160,5,13,6,'pratos_salada',1,1,0,0),(18,'Salada Oriental',230,190,15,10,12,'pratos_salada',1,0,1,0),(19,'Salada de Couve',180,70,10,2,5,'pratos_salada',1,0,0,0),(20,'Salada de Repolho',200,60,14,1,2,'pratos_salada',0,0,0,1),(21,'Salada de Frutas',220,120,30,1,2,'pratos_salada',1,0,1,1),(22,'Salada de Salmão',280,280,15,20,15,'pratos_salada',1,0,1,1),(23,'Salada Mediterrânea',250,210,18,12,8,'pratos_salada',0,1,1,1),(24,'Salada de Alface com Salmão',230,200,8,15,10,'pratos_salada',1,0,1,1),(25,'Salada de Milho',180,160,30,3,4,'pratos_salada',1,1,1,0),(26,'Salada de Batata',220,250,20,15,4,'pratos_salada',0,1,0,0),(27,'Salada de Cuscuz',240,220,35,8,5,'pratos_salada',0,0,1,1),(28,'Salada de Kiwi',180,130,30,1,2,'pratos_salada',0,1,1,0),(29,'Salada de Frango com Abacate',270,320,12,20,25,'pratos_salada',1,1,1,0),(30,'Salada de Feijão',220,190,25,5,8,'pratos_salada',0,0,0,0),(31,'Salada de Tomate com Mozarela',200,180,8,14,8,'pratos_salada',1,1,1,0);
/*!40000 ALTER TABLE `pratos_salada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `idade` int(3) NOT NULL,
  `sexo` enum('masculino','feminino') NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `altura` decimal(5,2) NOT NULL,
  `nivel_atividade` varchar(55) NOT NULL,
  `objetivo` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Nathan Gomes','nathanfgomes13@gmail.com','213','2147483647',18,'masculino',61.00,177.00,'moderado','ganhar_massa_muscular',1),(11,'Edrey','edrey@gmail.com','123','',21,'masculino',80.00,160.00,'moderado','ganhar_massa_muscular',0),(12,'teste','testesim@gmail.com','123','',25,'feminino',60.00,163.00,'moderado','manter_peso',0),(13,'teste2','teste2@gmail.com','123','',25,'feminino',60.00,165.00,'leve','manter_peso',0),(14,'bruninh0','bastosbruno372@gmail.com','cardoso2021','19987559229',17,'masculino',70.00,182.00,'leve','ganhar_massa_muscular',1),(15,'Edrey Belo','edreybelo3@gmail.com','gatinhobaladado','19978230476',18,'masculino',60.00,176.00,'ativo','ganhar_massa_muscular',0),(16,'lareska cristina','0000110087592xsp@aluno.educacao.sp.gov.br','lareska1','',19,'feminino',50.00,150.00,'ativo','ganhar_massa_muscular',0),(17,'caio','caiogabrieldasilvacruz1@gmail.com','34023326','19981416300',18,'masculino',94.00,176.00,'moderado','perder_peso',0),(18,'1234','1234@gmail.com','1234','',17,'masculino',17.00,17.00,'leve','manter_peso',0),(19,'João Carlos Bispo','joaocarlosbispo18@gmail.com','papak13','19987032009',16,'masculino',60.00,180.00,'moderado','ganhar_massa_muscular',0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-14 14:10:25
