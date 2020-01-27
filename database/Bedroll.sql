DROP TABLE IF EXISTS `Bedroll`;

CREATE TABLE `Bedroll`
(
	`bed_id` int(100) NOT NULL,
	`bed_name` varchar(255) DEFAULT NULL,
	`bed_color` varchar(255) DEFAULT NULL,
	`purchase_date` DATE DEFAULT NULL,
	`amount` varchar(255) NOT NULL,
	`image_path` int(11) DEFAULT NULL,
	PRIMARY KEY(`bed_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Bedroll` VALUES (6,'Bedroll301','Blue','2018-07-20','700','bedroll.jpg');