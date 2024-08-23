-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: inventario
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administradores` (
  `idadministrador` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `idusuario` int NOT NULL,
  PRIMARY KEY (`idadministrador`),
  KEY `IdAdministrador_idx` (`idusuario`),
  CONSTRAINT `IdAdministrador` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area_ubicacion`
--

DROP TABLE IF EXISTS `area_ubicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `area_ubicacion` (
  `idarea` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `encargado` varchar(45) NOT NULL,
  PRIMARY KEY (`idarea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_ubicacion`
--

LOCK TABLES `area_ubicacion` WRITE;
/*!40000 ALTER TABLE `area_ubicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `area_ubicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `control de inventario`
--

DROP TABLE IF EXISTS `control de inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `control de inventario` (
  `numero_inventario` int NOT NULL,
  `fecha` date NOT NULL,
  `idusuario` int DEFAULT NULL,
  `idteclado` int DEFAULT NULL,
  `idmouse` int DEFAULT NULL,
  `idmonitor` int DEFAULT NULL,
  `idequipo` int DEFAULT NULL,
  `idimpresora` int DEFAULT NULL,
  `idtelefono` int DEFAULT NULL,
  PRIMARY KEY (`numero_inventario`),
  KEY `idTelefonos_idx` (`idtelefono`),
  KEY `IdTeclados_idx` (`idteclado`),
  KEY `IdMouses_idx` (`idmouse`),
  KEY `IdMonitores_idx` (`idmonitor`),
  KEY `IdEquipos_idx` (`idequipo`),
  KEY `IdUsuarios_idx` (`idusuario`),
  KEY `IdImpresoras_idx` (`idimpresora`),
  CONSTRAINT `IdEquipos` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE SET NULL,
  CONSTRAINT `IdImpresoras` FOREIGN KEY (`idimpresora`) REFERENCES `impresora` (`idimpresora`) ON DELETE SET NULL,
  CONSTRAINT `IdMonitores` FOREIGN KEY (`idmonitor`) REFERENCES `monitor` (`idmonitor`) ON DELETE SET NULL,
  CONSTRAINT `IdMouses` FOREIGN KEY (`idmouse`) REFERENCES `mouse` (`idmouse`) ON DELETE SET NULL,
  CONSTRAINT `IdTeclados` FOREIGN KEY (`idteclado`) REFERENCES `teclado` (`idteclado`) ON DELETE SET NULL,
  CONSTRAINT `idTelefonos` FOREIGN KEY (`idtelefono`) REFERENCES `telefono` (`idtelefono`) ON DELETE SET NULL,
  CONSTRAINT `IdUsuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `control de inventario`
--

LOCK TABLES `control de inventario` WRITE;
/*!40000 ALTER TABLE `control de inventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `control de inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipo` (
  `idequipo` int NOT NULL AUTO_INCREMENT,
  `numero_inventario` varchar(45) NOT NULL,
  `numero_serie` varchar(45) NOT NULL,
  `marca` int DEFAULT NULL,
  `disco_duro` varchar(45) NOT NULL,
  `procesador` varchar(45) NOT NULL,
  `ram` varchar(45) NOT NULL,
  `idtipo_equipo` int NOT NULL,
  `estado` int DEFAULT NULL,
  PRIMARY KEY (`idequipo`),
  KEY `IdTipo_Equipos_idx` (`idtipo_equipo`),
  KEY `Idmarca5_idx` (`marca`),
  CONSTRAINT `Idmarca5` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL,
  CONSTRAINT `IdTipo_Equipos` FOREIGN KEY (`idtipo_equipo`) REFERENCES `tipo_equipo` (`idtipo_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impresora`
--

DROP TABLE IF EXISTS `impresora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impresora` (
  `idimpresora` int NOT NULL AUTO_INCREMENT,
  `numero_inventario` int NOT NULL,
  `tipo_impresora` varchar(45) NOT NULL,
  `marca` int DEFAULT NULL,
  `numero_serie` varchar(45) NOT NULL,
  `velocidad` varchar(45) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`idimpresora`),
  KEY `Idmarcas4_idx` (`marca`),
  CONSTRAINT `Idmarcas4` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impresora`
--

LOCK TABLES `impresora` WRITE;
/*!40000 ALTER TABLE `impresora` DISABLE KEYS */;
/*!40000 ALTER TABLE `impresora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mantenimiento`
--

DROP TABLE IF EXISTS `mantenimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mantenimiento` (
  `idmantenimiento` int NOT NULL AUTO_INCREMENT,
  `numero_inventario` int DEFAULT NULL,
  `tipo_mantenimiento` varchar(45) NOT NULL,
  `fecha_mantenimiento` date NOT NULL,
  `observaciones` varchar(45) NOT NULL,
  PRIMARY KEY (`idmantenimiento`),
  KEY `IdMantenimiento_idx` (`numero_inventario`),
  CONSTRAINT `IdMantenimiento` FOREIGN KEY (`numero_inventario`) REFERENCES `control de inventario` (`numero_inventario`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mantenimiento`
--

LOCK TABLES `mantenimiento` WRITE;
/*!40000 ALTER TABLE `mantenimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `mantenimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `idmarca` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitor`
--

DROP TABLE IF EXISTS `monitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `monitor` (
  `idmonitor` int NOT NULL AUTO_INCREMENT,
  `numero_inventario` varchar(45) NOT NULL,
  `tipo_conector` varchar(45) NOT NULL,
  `idmarca` int DEFAULT NULL,
  `modelo` varchar(45) NOT NULL,
  `numero_serie` varchar(45) NOT NULL,
  `monitor` varchar(45) NOT NULL,
  `tamaño` varchar(45) NOT NULL,
  `fecha_adquisicion` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`idmonitor`),
  KEY `IdMarcas_idx` (`idmarca`),
  CONSTRAINT `IdMarcas2` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitor`
--

LOCK TABLES `monitor` WRITE;
/*!40000 ALTER TABLE `monitor` DISABLE KEYS */;
/*!40000 ALTER TABLE `monitor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mouse`
--

DROP TABLE IF EXISTS `mouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mouse` (
  `idmouse` int NOT NULL AUTO_INCREMENT,
  `numero_inventario` varchar(45) NOT NULL,
  `tipo_conector` varchar(45) NOT NULL,
  `idmarca` int DEFAULT NULL,
  `modelo` varchar(60) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `precio` varchar(45) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`idmouse`),
  KEY `IdMarcas_idx` (`idmarca`),
  CONSTRAINT `IdMarcas3` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mouse`
--

LOCK TABLES `mouse` WRITE;
/*!40000 ALTER TABLE `mouse` DISABLE KEYS */;
/*!40000 ALTER TABLE `mouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teclado`
--

DROP TABLE IF EXISTS `teclado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teclado` (
  `idteclado` int NOT NULL AUTO_INCREMENT,
  `numero_inventario` varchar(45) NOT NULL,
  `tipo_conector` varchar(45) NOT NULL,
  `idmarca` int DEFAULT NULL,
  `modelo` varchar(60) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `precio` varchar(45) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`idteclado`),
  KEY `IdMarcas_idx` (`idmarca`),
  CONSTRAINT `IdMarcas1` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teclado`
--

LOCK TABLES `teclado` WRITE;
/*!40000 ALTER TABLE `teclado` DISABLE KEYS */;
/*!40000 ALTER TABLE `teclado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telefono` (
  `idtelefono` int NOT NULL AUTO_INCREMENT,
  `marca` int DEFAULT NULL,
  `modelo` varchar(60) NOT NULL,
  PRIMARY KEY (`idtelefono`),
  KEY `Idmarca6_idx` (`marca`),
  CONSTRAINT `Idmarca6` FOREIGN KEY (`marca`) REFERENCES `marca` (`idmarca`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_equipo`
--

DROP TABLE IF EXISTS `tipo_equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_equipo` (
  `idtipo_equipo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_equipo`
--

LOCK TABLES `tipo_equipo` WRITE;
/*!40000 ALTER TABLE `tipo_equipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `idarea` int DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `IdAreas_idx` (`idarea`),
  CONSTRAINT `IdAreas` FOREIGN KEY (`idarea`) REFERENCES `area_ubicacion` (`idarea`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
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

-- Dump completed on 2022-12-04 18:46:42
