-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.12 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table mms_db.action
DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `act_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.action: ~6 rows (approximately)
DELETE FROM `action`;
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
INSERT INTO `action` (`act_id`, `action`) VALUES
	(1, 'Visual Inspection / Initial Assessment'),
	(2, 'Prepared List of Materials Needed'),
	(3, 'Recommended Replacement / Disposal'),
	(4, 'Informed Requester of Work Plan'),
	(5, 'Commenced on Work Required'),
	(6, 'Work Completed');
/*!40000 ALTER TABLE `action` ENABLE KEYS */;


-- Dumping structure for table mms_db.car
DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `car_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `car_model` varchar(50) NOT NULL,
  `plate_no` varchar(50) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.car: ~4 rows (approximately)
DELETE FROM `car`;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` (`car_id`, `car_model`, `plate_no`) VALUES
	(1, 'Sportivo RED', 'ABC123'),
	(2, 'Sportivo GOLD', 'DEF456'),
	(3, 'Honda City', 'GHI789'),
	(4, 'Personal Car', 'JKL123');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;


-- Dumping structure for table mms_db.department
DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.department: ~7 rows (approximately)
DELETE FROM `department`;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` (`dept_id`, `department`, `description`) VALUES
	(1, 'College of Information and Technology', 'College of Information and Technology'),
	(2, 'College of Engineering', 'College of Engineering'),
	(3, 'College of Industrial Technology', 'College of Industrial Technology'),
	(4, 'College of Education', 'College of Education'),
	(5, 'College of Architecture', 'College of Architecture'),
	(6, 'College of Arts and Sciences', 'College of Arts and Sciences'),
	(7, 'College of Law', 'College of Law');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;


-- Dumping structure for table mms_db.jobrequest
DROP TABLE IF EXISTS `jobrequest`;
CREATE TABLE IF NOT EXISTS `jobrequest` (
  `job_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_no` varchar(50) DEFAULT NULL,
  `requester_uid` bigint(20) NOT NULL,
  `date_needed` date DEFAULT NULL,
  `date_requested` datetime NOT NULL,
  `nature` set('CONSTRUCTION','INSTALLATION','REPAIR','REPLACEMENT_OF_DEFECTIVE_PARTS','PREVENTIVE_MAINTENANCE','COST_ESTIMATION','OTHERS') NOT NULL,
  `other_specified` varchar(50) DEFAULT NULL,
  `reason` varchar(250) NOT NULL,
  `createstatus` set('Pending','Issued','Denied','On-Hold','Canceled','Closed') NOT NULL,
  `request_type` set('CDMO','LMO','DOIT') DEFAULT 'CDMO',
  `materials_needed` text,
  `status_reason` text,
  PRIMARY KEY (`job_id`),
  KEY `FK1_user_requester_id2` (`requester_uid`),
  CONSTRAINT `FK1_user_requester_id2` FOREIGN KEY (`requester_uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.jobrequest: ~5 rows (approximately)
DELETE FROM `jobrequest`;
/*!40000 ALTER TABLE `jobrequest` DISABLE KEYS */;
INSERT INTO `jobrequest` (`job_id`, `job_no`, `requester_uid`, `date_needed`, `date_requested`, `nature`, `other_specified`, `reason`, `createstatus`, `request_type`, `materials_needed`, `status_reason`) VALUES
	(1, 'JO13-0001', 1, NULL, '2013-12-16 14:48:15', 'CONSTRUCTION', '', 'sdfgs', 'Issued', 'CDMO', 'sdfgsdf', 'no stock'),
	(2, 'JO13-0002', 1, NULL, '2013-12-16 14:48:45', 'REPAIR', '', 'asdfasdf', 'Issued', 'CDMO', 'teasdf', 'denied na to'),
	(3, '14-0003', 1, '2014-02-02', '2014-02-02 11:46:40', 'CONSTRUCTION', '', 'need a new set of computer', 'Issued', 'CDMO', 'computer', 'denied na... wala na kasing stock'),
	(4, '14-0004', 1, '2014-02-02', '2014-02-02 11:53:34', 'COST_ESTIMATION', '', 'new printer', 'Issued', 'CDMO', 'printer', 'asdfasdfa'),
	(5, 'JO14-0005', 1, '2014-02-03', '2014-02-03 10:24:22', 'CONSTRUCTION', '', 'Gagawa ng magagawa', 'Issued', 'CDMO', '1 kg. pako\r\n1 kg bulak\r\n2 martilyo\r\n3 hamburger\r\n', NULL);
/*!40000 ALTER TABLE `jobrequest` ENABLE KEYS */;


-- Dumping structure for table mms_db.jobrequest_action
DROP TABLE IF EXISTS `jobrequest_action`;
CREATE TABLE IF NOT EXISTS `jobrequest_action` (
  `jobact_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_id` bigint(20) NOT NULL,
  `act_id` bigint(20) NOT NULL,
  `createdate` datetime NOT NULL,
  `createstatus` set('PENDING','COMPLETED') NOT NULL DEFAULT 'PENDING',
  PRIMARY KEY (`jobact_id`),
  KEY `FK1_job_job_id` (`job_id`),
  KEY `FK2_action_act_id` (`act_id`),
  CONSTRAINT `FK1_job_job_id` FOREIGN KEY (`job_id`) REFERENCES `jobrequest` (`job_id`),
  CONSTRAINT `FK2_action_act_id` FOREIGN KEY (`act_id`) REFERENCES `action` (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1 COMMENT='jobact_id\r\njob_id\r\nact_id\r\ncreatedate\r\n';

-- Dumping data for table mms_db.jobrequest_action: ~36 rows (approximately)
DELETE FROM `jobrequest_action`;
/*!40000 ALTER TABLE `jobrequest_action` DISABLE KEYS */;
INSERT INTO `jobrequest_action` (`jobact_id`, `job_id`, `act_id`, `createdate`, `createstatus`) VALUES
	(1, 2, 1, '2013-12-16 15:55:46', 'PENDING'),
	(2, 2, 2, '2013-12-16 15:55:46', 'PENDING'),
	(3, 2, 3, '2013-12-16 15:55:46', 'PENDING'),
	(4, 2, 4, '2013-12-16 15:55:46', 'PENDING'),
	(5, 2, 5, '2013-12-16 15:55:46', 'PENDING'),
	(6, 2, 6, '2013-12-16 15:55:46', 'PENDING'),
	(7, 1, 1, '2014-02-02 12:57:13', 'COMPLETED'),
	(8, 1, 2, '2014-02-02 12:57:13', 'PENDING'),
	(9, 1, 3, '2014-02-02 12:57:13', 'PENDING'),
	(10, 1, 4, '2014-02-02 12:57:13', 'PENDING'),
	(11, 1, 5, '2014-02-02 12:57:13', 'PENDING'),
	(12, 1, 6, '2014-02-02 12:57:13', 'PENDING'),
	(14, 2, 1, '2014-02-02 12:57:24', 'PENDING'),
	(15, 2, 2, '2014-02-02 12:57:24', 'PENDING'),
	(16, 2, 3, '2014-02-02 12:57:24', 'PENDING'),
	(17, 2, 4, '2014-02-02 12:57:24', 'PENDING'),
	(18, 2, 5, '2014-02-02 12:57:24', 'PENDING'),
	(19, 2, 6, '2014-02-02 12:57:24', 'PENDING'),
	(21, 4, 1, '2014-02-02 12:57:29', 'PENDING'),
	(22, 4, 2, '2014-02-02 12:57:29', 'PENDING'),
	(23, 4, 3, '2014-02-02 12:57:29', 'PENDING'),
	(24, 4, 4, '2014-02-02 12:57:29', 'PENDING'),
	(25, 4, 5, '2014-02-02 12:57:29', 'PENDING'),
	(26, 4, 6, '2014-02-02 12:57:29', 'PENDING'),
	(28, 3, 1, '2014-02-02 12:57:35', 'PENDING'),
	(29, 3, 2, '2014-02-02 12:57:35', 'PENDING'),
	(30, 3, 3, '2014-02-02 12:57:35', 'PENDING'),
	(31, 3, 4, '2014-02-02 12:57:35', 'PENDING'),
	(32, 3, 5, '2014-02-02 12:57:35', 'PENDING'),
	(33, 3, 6, '2014-02-02 12:57:35', 'PENDING'),
	(35, 5, 1, '2014-02-03 10:38:19', 'PENDING'),
	(36, 5, 2, '2014-02-03 10:38:19', 'PENDING'),
	(37, 5, 3, '2014-02-03 10:38:19', 'PENDING'),
	(38, 5, 4, '2014-02-03 10:38:19', 'PENDING'),
	(39, 5, 5, '2014-02-03 10:38:19', 'PENDING'),
	(40, 5, 6, '2014-02-03 10:38:19', 'PENDING');
/*!40000 ALTER TABLE `jobrequest_action` ENABLE KEYS */;


-- Dumping structure for table mms_db.jobrequest_material
DROP TABLE IF EXISTS `jobrequest_material`;
CREATE TABLE IF NOT EXISTS `jobrequest_material` (
  `jobmat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mat_id` bigint(20) NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `createdby` bigint(20) NOT NULL,
  `status` set('IN-USE','CLOSED') NOT NULL,
  PRIMARY KEY (`jobmat_id`),
  KEY `FK1_material_mat_id` (`mat_id`),
  KEY `FK2_job_job_id` (`job_id`),
  CONSTRAINT `FK1_material_mat_id` FOREIGN KEY (`mat_id`) REFERENCES `material` (`mat_id`),
  CONSTRAINT `FK2_job_job_id` FOREIGN KEY (`job_id`) REFERENCES `jobrequest` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jobmat_id\r\nmat_id\r\njob_id\r\nquantity\r\ncreatedby\r\n';

-- Dumping data for table mms_db.jobrequest_material: ~0 rows (approximately)
DELETE FROM `jobrequest_material`;
/*!40000 ALTER TABLE `jobrequest_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobrequest_material` ENABLE KEYS */;


-- Dumping structure for table mms_db.location
DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `loc_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.location: ~20 rows (approximately)
DELETE FROM `location`;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` (`loc_id`, `location`) VALUES
	(1, 'A1'),
	(2, 'A2'),
	(3, 'A3'),
	(4, 'A4'),
	(5, 'A5'),
	(6, 'A6'),
	(7, 'A7'),
	(8, 'A8'),
	(9, 'A9'),
	(10, 'A10'),
	(11, 'B1'),
	(12, 'B2'),
	(13, 'B3'),
	(14, 'B4'),
	(15, 'B5'),
	(16, 'B6'),
	(17, 'B7'),
	(18, 'B8'),
	(19, 'B9'),
	(20, 'B10');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;


-- Dumping structure for table mms_db.material
DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `mat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `material_name` varchar(50) NOT NULL,
  `material_description` text NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `location_id` bigint(20) DEFAULT NULL,
  `m_type` set('CDMO','LMO','DOIT') DEFAULT NULL,
  PRIMARY KEY (`mat_id`),
  KEY `FK1_type_type_id` (`type_id`),
  KEY `FK2_location_location_id` (`location_id`),
  CONSTRAINT `FK1_type_type_id` FOREIGN KEY (`type_id`) REFERENCES `material_type` (`type_id`),
  CONSTRAINT `FK2_location_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`loc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='mat_id\r\nmaterial_name\r\nmaterial_description\r\nquantity\r\ntype_id\r\nloc_id\r\n';

-- Dumping data for table mms_db.material: ~8 rows (approximately)
DELETE FROM `material`;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` (`mat_id`, `material_name`, `material_description`, `quantity`, `type_id`, `location_id`, `m_type`) VALUES
	(1, 'Hammer', 'Hammer', 5, 2, 1, 'CDMO'),
	(2, 'Basketball', 'Basketball', 10, 1, 1, 'LMO'),
	(3, 'Grinder', 'Grinder', 5, 2, 1, 'CDMO'),
	(6, 'Wood Cutter', 'Wood cutter', 5, 2, 1, 'CDMO'),
	(7, 'Grass Trimmer', 'Grass Trimmer', 5, 2, 1, 'CDMO'),
	(8, 'Ladder', 'ladder', 5, 2, 1, 'CDMO'),
	(9, 'Axe', 'axe', 5, 2, 1, 'CDMO'),
	(10, 'Jack hammer', 'Jack Hammer', 5, 2, 1, 'CDMO');
/*!40000 ALTER TABLE `material` ENABLE KEYS */;


-- Dumping structure for table mms_db.material_type
DROP TABLE IF EXISTS `material_type`;
CREATE TABLE IF NOT EXISTS `material_type` (
  `type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mat_type` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.material_type: ~2 rows (approximately)
DELETE FROM `material_type`;
/*!40000 ALTER TABLE `material_type` DISABLE KEYS */;
INSERT INTO `material_type` (`type_id`, `mat_type`) VALUES
	(1, 'Equipment'),
	(2, 'Asset');
/*!40000 ALTER TABLE `material_type` ENABLE KEYS */;


-- Dumping structure for table mms_db.messages
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sender_uid` bigint(20) DEFAULT NULL,
  `receipient_uid` bigint(20) DEFAULT NULL,
  `message` text,
  `is_read` tinyint(4) NOT NULL DEFAULT '0',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.messages: ~2 rows (approximately)
DELETE FROM `messages`;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `sender_uid`, `receipient_uid`, `message`, `is_read`, `createdate`) VALUES
	(2, 11, 1, 'We found that your Job Order Request (JO13-0002) has no available materials. We will process your request once new stocks has been delivered.', 1, '2013-12-16 17:50:08'),
	(4, 1, 11, 'ok po', 1, '2013-12-16 18:59:48');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;


-- Dumping structure for table mms_db.passengers
DROP TABLE IF EXISTS `passengers`;
CREATE TABLE IF NOT EXISTS `passengers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `trip_id` bigint(20) NOT NULL,
  `passenger` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_trip_trip_id` (`trip_id`),
  CONSTRAINT `FK1_trip_trip_id` FOREIGN KEY (`trip_id`) REFERENCES `triprequest` (`trip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.passengers: ~0 rows (approximately)
DELETE FROM `passengers`;
/*!40000 ALTER TABLE `passengers` DISABLE KEYS */;
/*!40000 ALTER TABLE `passengers` ENABLE KEYS */;


-- Dumping structure for table mms_db.triprequest
DROP TABLE IF EXISTS `triprequest`;
CREATE TABLE IF NOT EXISTS `triprequest` (
  `trip_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `requester_uid` bigint(20) NOT NULL,
  `dateofuse_from` date NOT NULL,
  `dateofuse_to` date NOT NULL,
  `request_date` datetime NOT NULL,
  `car_id` bigint(20) NOT NULL,
  `purpose` text NOT NULL,
  `et_departure` time NOT NULL,
  `et_arrival` time NOT NULL,
  `createstatus` set('Pending','Approved','Denied','Canceled','Closed') NOT NULL,
  `modifiedby` bigint(20) DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `departure_guard` varchar(50) DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `arrival_guard` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`trip_id`),
  KEY `FK2_car_car_id` (`car_id`),
  KEY `FK2_user_requester_uid` (`requester_uid`),
  CONSTRAINT `FK2_car_car_id` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`),
  CONSTRAINT `FK2_user_requester_uid` FOREIGN KEY (`requester_uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='TripRequest\r\ntrip_id\r\nrequester_id\r\ndateofuse_from\r\ndateofuse_to\r\nrequest_date\r\ncar_id\r\npurpose\r\net_departure\r\net_arrival\r\ncreatestatus\r\nmodified_by\r\ndeparture_time\r\ndeparture_guard\r\narrival_time\r\narrival_guard\r\n';

-- Dumping data for table mms_db.triprequest: ~0 rows (approximately)
DELETE FROM `triprequest`;
/*!40000 ALTER TABLE `triprequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `triprequest` ENABLE KEYS */;


-- Dumping structure for table mms_db.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usertype_id` bigint(20) NOT NULL,
  `dept_id` bigint(20) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `FK1_user_usertype_id` (`usertype_id`),
  KEY `FK2_dept_dept_id` (`dept_id`),
  CONSTRAINT `FK1_user_usertype_id` FOREIGN KEY (`usertype_id`) REFERENCES `usertype` (`usertype_id`),
  CONSTRAINT `FK2_dept_dept_id` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.user: ~6 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`uid`, `username`, `password`, `first_name`, `last_name`, `mobile_no`, `email`, `createdate`, `usertype_id`, `dept_id`) VALUES
	(1, 'requester1', '123pass', 'Juan', 'Dela Cruz', '09221234567', 'juandelacruz@gmail.com', '2013-11-17 07:05:40', 1, 1),
	(2, 'technician1', '123pass', 'John', 'Ochoa', '09321237654', 'johnochoa@gmail.com', '2013-11-17 07:06:57', 7, 1),
	(3, 'technician2', '123pass', 'Joey', 'Ramos', '09321237655', 'marroxax@gmail.com', '2013-11-17 07:08:58', 7, 1),
	(10, 'webadmin', '123pass', 'Chito', 'Reyes', '09321444098', 'chitoreyes@gmail.com', '2013-11-17 07:13:09', 4, 1),
	(11, 'cdmo', '123pass', 'Rey', 'Pineda', '09331444098', 'reypineda@gmail.com', '2013-11-17 07:13:53', 3, 1),
	(12, 'test1', 'password', 'test1', 'test1', '09198889988', 'test@gmail.com', '2013-11-25 12:26:25', 1, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table mms_db.usertype
DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `usertype_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `utype` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`usertype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.usertype: ~4 rows (approximately)
DELETE FROM `usertype`;
/*!40000 ALTER TABLE `usertype` DISABLE KEYS */;
INSERT INTO `usertype` (`usertype_id`, `utype`, `status`) VALUES
	(1, 'REQUESTER', 1),
	(3, 'CDMO', 1),
	(4, 'WEBADMIN', 1),
	(7, 'CDMO_TECH', 1);
/*!40000 ALTER TABLE `usertype` ENABLE KEYS */;


-- Dumping structure for table mms_db.workorder
DROP TABLE IF EXISTS `workorder`;
CREATE TABLE IF NOT EXISTS `workorder` (
  `work_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `job_id` bigint(20) NOT NULL,
  `personnel_assigned_uid` bigint(20) NOT NULL,
  `modifiedby` bigint(20) DEFAULT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifieddate` timestamp NULL DEFAULT NULL,
  `createdby` bigint(20) NOT NULL,
  PRIMARY KEY (`work_id`),
  KEY `FK1_job_jobid` (`job_id`),
  KEY `FK2_user_personnel_uid` (`personnel_assigned_uid`),
  CONSTRAINT `FK1_job_jobid` FOREIGN KEY (`job_id`) REFERENCES `jobrequest` (`job_id`),
  CONSTRAINT `FK2_user_personnel_uid` FOREIGN KEY (`personnel_assigned_uid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table mms_db.workorder: ~11 rows (approximately)
DELETE FROM `workorder`;
/*!40000 ALTER TABLE `workorder` DISABLE KEYS */;
INSERT INTO `workorder` (`work_id`, `job_id`, `personnel_assigned_uid`, `modifiedby`, `createdate`, `modifieddate`, `createdby`) VALUES
	(1, 2, 3, 11, '2013-12-16 15:55:46', '2013-12-16 15:55:46', 11),
	(2, 1, 2, 11, '2014-02-02 12:57:13', '2014-02-02 12:57:13', 11),
	(3, 1, 3, 11, '2014-02-02 12:57:13', '2014-02-02 12:57:13', 11),
	(4, 2, 2, 11, '2014-02-02 12:57:24', '2014-02-02 12:57:24', 11),
	(5, 2, 3, 11, '2014-02-02 12:57:24', '2014-02-02 12:57:24', 11),
	(6, 4, 2, 11, '2014-02-02 12:57:29', '2014-02-02 12:57:29', 11),
	(7, 4, 3, 11, '2014-02-02 12:57:29', '2014-02-02 12:57:29', 11),
	(8, 3, 2, 11, '2014-02-02 12:57:34', '2014-02-02 12:57:34', 11),
	(9, 3, 3, 11, '2014-02-02 12:57:35', '2014-02-02 12:57:35', 11),
	(10, 5, 2, 11, '2014-02-03 10:38:19', '2014-02-03 10:38:19', 11),
	(11, 5, 3, 11, '2014-02-03 10:38:19', '2014-02-03 10:38:19', 11);
/*!40000 ALTER TABLE `workorder` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
