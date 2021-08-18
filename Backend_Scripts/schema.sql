-- MariaDB dump 10.18  Distrib 10.5.7-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Hospital
-- ------------------------------------------------------
-- Server version	10.5.7-MariaDB-1:10.5.7+maria~focal

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
-- Table structure for table `Appointments`
--

DROP TABLE IF EXISTS `Appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Appointments` (
  `App_ID` int(11) NOT NULL,
  `Patient_ID` int(11) DEFAULT NULL,
  `Doctor_ID` int(11) DEFAULT NULL,
  `dateTime` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`App_ID`),
  KEY `Patient_ID` (`Patient_ID`),
  KEY `Doctor_ID` (`Doctor_ID`),
  CONSTRAINT `Appointments_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `Patients` (`Patient_ID`) ON DELETE CASCADE,
  CONSTRAINT `Appointments_ibfk_2` FOREIGN KEY (`Doctor_ID`) REFERENCES `Doctors` (`Doctor_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Assigned`
--

DROP TABLE IF EXISTS `Assigned`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Assigned` (
  `Room_No` int(11) NOT NULL,
  `Patient_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Room_No`),
  UNIQUE KEY `Patient_ID` (`Patient_ID`),
  CONSTRAINT `Assigned_ibfk_1` FOREIGN KEY (`Room_No`) REFERENCES `Rooms` (`Room_No`) ON DELETE CASCADE,
  CONSTRAINT `Assigned_ibfk_2` FOREIGN KEY (`Patient_ID`) REFERENCES `Patients` (`Patient_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Avails`
--

DROP TABLE IF EXISTS `Avails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Avails` (
  `Patient_ID` int(11) NOT NULL,
  `Service_ID` int(11) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Service_ID`),
  KEY `Service_ID` (`Service_ID`),
  CONSTRAINT `Avails_ibfk_3` FOREIGN KEY (`Patient_ID`) REFERENCES `Patients` (`Patient_ID`) ON DELETE CASCADE,
  CONSTRAINT `Avails_ibfk_4` FOREIGN KEY (`Service_ID`) REFERENCES `Services` (`Service_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Buys`
--

DROP TABLE IF EXISTS `Buys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Buys` (
  `Patient_ID` int(11) NOT NULL,
  `Medicine_ID` int(11) NOT NULL,
  PRIMARY KEY (`Patient_ID`,`Medicine_ID`),
  KEY `Medicine_ID` (`Medicine_ID`),
  CONSTRAINT `Buys_ibfk_3` FOREIGN KEY (`Patient_ID`) REFERENCES `Patients` (`Patient_ID`) ON DELETE CASCADE,
  CONSTRAINT `Buys_ibfk_4` FOREIGN KEY (`Medicine_ID`) REFERENCES `Medicines` (`Medicine_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER decr_stock
AFTER INSERT ON Buys
FOR EACH ROW
BEGIN
    UPDATE medicineInventory
    SET stock=stock-1
    WHERE Medicine_ID=NEW.Medicine_ID;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Doctors`
--

DROP TABLE IF EXISTS `Doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Doctors` (
  `Doctor_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Specialization` varchar(30) DEFAULT NULL,
  `Years_Of_Experience` int(11) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contact_No` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Doctor_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `LookAfter`
--

DROP TABLE IF EXISTS `LookAfter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LookAfter` (
  `Room_No` int(11) NOT NULL,
  `Nurse_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Room_No`),
  KEY `Nurse_ID` (`Nurse_ID`),
  CONSTRAINT `LookAfter_ibfk_3` FOREIGN KEY (`Nurse_ID`) REFERENCES `Nurses` (`Nurse_ID`) ON DELETE CASCADE,
  CONSTRAINT `LookAfter_ibfk_4` FOREIGN KEY (`Room_No`) REFERENCES `Rooms` (`Room_No`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Medicines`
--

DROP TABLE IF EXISTS `Medicines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Medicines` (
  `Medicine_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Price` float(6,2) DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Supplier` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Medicine_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Nurses`
--

DROP TABLE IF EXISTS `Nurses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Nurses` (
  `Nurse_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contact_No` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Nurse_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Patients`
--

DROP TABLE IF EXISTS `Patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Patients` (
  `Patient_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contact_No` varchar(15) DEFAULT NULL,
  `Medical_History` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Rooms`
--

DROP TABLE IF EXISTS `Rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rooms` (
  `Room_No` int(11) NOT NULL,
  `Floor_No` int(11) DEFAULT NULL,
  PRIMARY KEY (`Room_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Services`
--

DROP TABLE IF EXISTS `Services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Services` (
  `Service_ID` int(11) NOT NULL,
  `Service_Name` varchar(30) DEFAULT NULL,
  `Cost` float(6,2) DEFAULT NULL,
  PRIMARY KEY (`Service_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `medicineInventory`
--

DROP TABLE IF EXISTS `medicineInventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicineInventory` (
  `Medicine_ID` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`Medicine_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary table structure for view `view_appointments`
--

DROP TABLE IF EXISTS `view_appointments`;
/*!50001 DROP VIEW IF EXISTS `view_appointments`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_appointments` (
  `Patient` tinyint NOT NULL,
  `Doctor` tinyint NOT NULL,
  `Booked_on` tinyint NOT NULL,
  `Status` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_inventory`
--

DROP TABLE IF EXISTS `view_inventory`;
/*!50001 DROP VIEW IF EXISTS `view_inventory`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_inventory` (
  `Medicine_ID` tinyint NOT NULL,
  `Name` tinyint NOT NULL,
  `stock` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_lookAfter`
--

DROP TABLE IF EXISTS `view_lookAfter`;
/*!50001 DROP VIEW IF EXISTS `view_lookAfter`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_lookAfter` (
  `Room_No` tinyint NOT NULL,
  `Patient_Name` tinyint NOT NULL,
  `Nurse_Name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_appointments`
--

/*!50001 DROP TABLE IF EXISTS `view_appointments`*/;
/*!50001 DROP VIEW IF EXISTS `view_appointments`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_appointments` AS select `p`.`Name` AS `Patient`,`d`.`Name` AS `Doctor`,`a`.`dateTime` AS `Booked_on`,`a`.`status` AS `Status` from ((`Appointments` `a` join `Patients` `p` on(`p`.`Patient_ID` = `a`.`Patient_ID`)) join `Doctors` `d` on(`d`.`Doctor_ID` = `a`.`Doctor_ID`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_inventory`
--

/*!50001 DROP TABLE IF EXISTS `view_inventory`*/;
/*!50001 DROP VIEW IF EXISTS `view_inventory`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_inventory` AS select `Medicines`.`Medicine_ID` AS `Medicine_ID`,`Medicines`.`Name` AS `Name`,`medicineInventory`.`stock` AS `stock` from (`Medicines` join `medicineInventory` on(`Medicines`.`Medicine_ID` = `medicineInventory`.`Medicine_ID`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_lookAfter`
--

/*!50001 DROP TABLE IF EXISTS `view_lookAfter`*/;
/*!50001 DROP VIEW IF EXISTS `view_lookAfter`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_lookAfter` AS select `LookAfter`.`Room_No` AS `Room_No`,`Patients`.`Name` AS `Patient_Name`,`Nurses`.`Name` AS `Nurse_Name` from (((`LookAfter` join `Assigned` on(`LookAfter`.`Room_No` = `Assigned`.`Room_No`)) join `Patients` on(`Patients`.`Patient_ID` = `Assigned`.`Patient_ID`)) join `Nurses` on(`Nurses`.`Nurse_ID` = `LookAfter`.`Nurse_ID`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-18  8:55:10
