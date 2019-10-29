-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: inventario
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

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
-- Table structure for table `Antivirus`
--

DROP TABLE IF EXISTS `Antivirus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Antivirus` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAntivirus` varchar(100) DEFAULT NULL,
  `versaoSO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Antivirus`
--

LOCK TABLES `Antivirus` WRITE;
/*!40000 ALTER TABLE `Antivirus` DISABLE KEYS */;
INSERT INTO `Antivirus` VALUES (1,'AVG Free','7.0'),(2,'Norton','25.0'),(3,'Avast','10.0'),(4,'McAfee','7.0'),(5,'Badoo','7.0'),(6,'MS defender','7.0');
/*!40000 ALTER TABLE `Antivirus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SO`
--

DROP TABLE IF EXISTS `SO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SO` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nomeSO` varchar(100) DEFAULT NULL,
  `versaoSO` varchar(100) DEFAULT NULL,
  `chaveSO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SO`
--

LOCK TABLES `SO` WRITE;
/*!40000 ALTER TABLE `SO` DISABLE KEYS */;
INSERT INTO `SO` VALUES (1,'win 10','Professional','W269N-WFGWX-YVC9B-4J6C9-T83GX'),(2,'win 10','Home Edition','MH37W-N47XK-V7XM9-C7227-GCQG9'),(3,'win 10','Education','NRG8B-VKK3Q-CXVCJ-9G2XF-6Q84J'),(4,'win 8','Professional','9FNHH-K3HBT-3W4TD-6383H-6XYWF'),(5,'win 8','Home Edition','6TP4R-GNPTD-KYYHQ-7B7DP-J447Y'),(6,'win 8','Education','YVWGF-BXNMC-HTQYQ-CPQ99-66QFC'),(7,'win 7','Professional','NW6C2-QMPVW-D7KKK-3GKT6-VCFB2'),(8,'win 7','Home','2WH4N-8QGBV-H22JP-CT43Q-MDWWJ'),(9,'win 7','Education','NPPR9-FWDCX-D2C8J-H872K-2YT43'),(10,'Linux','18.9','Open source'),(11,'Linux','17.0','Open Source');
/*!40000 ALTER TABLE `SO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nomeDepartamento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Recursos Humanos'),(2,'Financeiro'),(3,'Atendimento'),(4,'Vendas'),(5,'TI'),(6,'Serviços Gerais');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipamento` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEstacao` varchar(100) DEFAULT NULL,
  `numeroIp` varchar(100) DEFAULT NULL,
  `numeroSerie` int(11) DEFAULT NULL,
  `nomeFabricante` varchar(100) DEFAULT NULL,
  `dominio` varchar(100) DEFAULT NULL,
  `tipoHardware` varchar(100) DEFAULT NULL,
  `codSO` int(11) DEFAULT NULL,
  `codAntivirus` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codSO` (`codSO`),
  KEY `codAntivirus` (`codAntivirus`),
  CONSTRAINT `equipamento_ibfk_1` FOREIGN KEY (`codSO`) REFERENCES `SO` (`codigo`),
  CONSTRAINT `equipamento_ibfk_2` FOREIGN KEY (`codAntivirus`) REFERENCES `Antivirus` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
INSERT INTO `equipamento` VALUES (1,'PC-01','10.10.1.1',65421654,'Dell','empresa.com','desktop',1,2),(2,'PC-02','10.10.1.2',65421655,'Positivo','empresa.com','desktop',1,2),(3,'PC-03','10.10.1.3',65421656,'Toshiba','empresa.com','desktop',10,4),(4,'PC-04','10.10.1.4',65421657,'Dell','empresa.com','notebook',10,4),(5,'PC-05','10.10.1.5',65421658,'Dell','empresa.com','notebook',10,1),(6,'PC-06','10.10.1.6',65421659,'Dell','empresa.com','desktop',1,1),(7,'PC-07','10.10.1.7',65421660,'Dell','empresa.com','notebook',2,1),(8,'PC-08','10.10.1.8',65421661,'Positivo','empresa.com','notebook',4,4),(9,'PC-09','10.10.1.9',65421662,'Positivo','empresa.com','notebook',3,4),(10,'PC-09','10.10.1.11',65421654,'DELL','dominio.com.br','notebook',1,1),(11,'PC-09','10.10.1.11',0,'DELL','dominio.com.br','notebook',1,1),(12,'PC-09','10.10.1.12',10,'DELL','dominio.com.br','notebook',1,1),(13,'PC-09','10.10.1.12',10,'DELL','dominio.com.br','notebook',1,1);
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCompleto` varchar(100) DEFAULT NULL,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `codDepartamento` int(11) DEFAULT NULL,
  `codEquipamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codDepartamento` (`codDepartamento`),
  KEY `codEquipamento` (`codEquipamento`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`codDepartamento`) REFERENCES `departamento` (`codigo`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`codEquipamento`) REFERENCES `equipamento` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Fabiano  Maximiano','max','max@gmail.com',5,1),(2,'Michael Jackson','jackson','mjackson@gmail.com',1,2),(3,'Pink floyd cover','pfloyd','pfloyd@gmail.com',1,1),(4,'Led Zeppelin','Ledz','zeppelin@gmail.com',5,4),(5,'acdc rock','dc','dc@gmail.com',1,1),(7,'Eagles','Hcalifornia','eagles@gmail.com',4,7),(10,'lol','lol@','biano@live.com',2,1),(11,'marilia godoy','mgodoy','marilia@live.com',2,9);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-23 14:14:53
