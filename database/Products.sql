DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products`
(
	`product_id` int(100) NOT NULL AUTO_INCREMENT,
	`product_name` varchar(255) DEFAULT NULL,
	`product_type` varchar(255) DEFAULT NULL,
	`owner_regno` varchar(255) DEFAULT NULL,
	`buyer_regno` varchar(255) DEFAULT NULL,
	PRIMARY KEY(`product_id`)
)ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

LOCK TABLES `Products` WRITE;

INSERT INTO `Products` VALUES (1,'Hitachi','Cooler','2018CA58','NULL');
INSERT INTO `Products` VALUES (2,'Table_114','Table','2017ME63','NULL');
INSERT INTO `Products` VALUES (4,'Cycle_113','Cycle','2018CA16','NULL');
INSERT INTO `Products` VALUES (5,'Kettle_114','Kettle','2018CA16','NULL');
INSERT INTO `Products` VALUES (6,'Bedroll_114','Bedroll','2017ME63','NULL');

UNLOCK TABLES;
