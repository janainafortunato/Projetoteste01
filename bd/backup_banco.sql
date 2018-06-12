-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: camila
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `TB_ASSOCIACOES`
--

DROP TABLE IF EXISTS `TB_ASSOCIACOES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_ASSOCIACOES` (
  `ID_ASSOC` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_FANTASIA` varchar(255) NOT NULL,
  `CNPJ` varchar(255) NOT NULL,
  `TELEFONE` varchar(11) DEFAULT NULL,
  `CELULAR` varchar(11) NOT NULL,
  `FACEBOOK` varchar(255) DEFAULT NULL,
  `RUA` varchar(255) NOT NULL,
  `BAIRRO` varchar(255) NOT NULL,
  `CIDADE` varchar(255) NOT NULL,
  `NOME_RESPONSAVEL` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_ASSOC`),
  UNIQUE KEY `UQ_CNPJ` (`CNPJ`),
  UNIQUE KEY `UQ_EMAIL` (`EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_ASSOCIACOES`
--

LOCK TABLES `TB_ASSOCIACOES` WRITE;
/*!40000 ALTER TABLE `TB_ASSOCIACOES` DISABLE KEYS */;
INSERT INTO `TB_ASSOCIACOES` VALUES (3,'associaÃ§Ã£o camila','11111111111','2222222222','33333333','facebook/camila','rua assoc','Pilar','assoc','camila','camila.rs122@gmail.com','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `TB_ASSOCIACOES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_COMENTARIO`
--

DROP TABLE IF EXISTS `TB_COMENTARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_COMENTARIO` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_NOME` varchar(255) NOT NULL,
  `COM_COMENTARIO` varchar(255) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_COMENTARIO`
--

LOCK TABLES `TB_COMENTARIO` WRITE;
/*!40000 ALTER TABLE `TB_COMENTARIO` DISABLE KEYS */;
INSERT INTO `TB_COMENTARIO` VALUES (1,'camila','ola'),(2,'camila','ola'),(3,'camila','oiiiii'),(4,'camila','oiiiii'),(5,'camila','olaaa'),(6,'camila','olaaa'),(7,'camila','olaaa'),(8,'camila','olaaa'),(9,'camila','olaaa'),(10,'rafa','rrafa'),(11,'rafa','rrafa'),(12,'rafa','rrafa'),(13,'rafa','rrafa'),(14,'wtw','wgdws'),(15,'camila','vvxc'),(16,'camila','dsts'),(17,'camila','dsts'),(18,'camila','sdggs'),(19,'camila','JANA'),(20,'camila','GJHGJFDG'),(21,'casdfsf','sdgag'),(22,'janio','bom dia'),(23,'janio','bom dia');
/*!40000 ALTER TABLE `TB_COMENTARIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_NOTICIAS`
--

DROP TABLE IF EXISTS `TB_NOTICIAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_NOTICIAS` (
  `ID_NOT` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORIA` varchar(255) NOT NULL,
  `TITULO` varchar(255) NOT NULL,
  `SUBTITULO` varchar(255) DEFAULT NULL,
  `TEXTO` text NOT NULL,
  `ARQUIVO` longblob,
  `FK_ASSOC` int(11) NOT NULL,
  PRIMARY KEY (`ID_NOT`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_NOTICIAS`
--

LOCK TABLES `TB_NOTICIAS` WRITE;
/*!40000 ALTER TABLE `TB_NOTICIAS` DISABLE KEYS */;
/*!40000 ALTER TABLE `TB_NOTICIAS` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-07 11:14:46
