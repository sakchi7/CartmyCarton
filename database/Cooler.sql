DROP TABLE IF EXISTS `Cooler`;

CREATE TABLE `Cooler`
(
	`cooler_id` int(100) NOT NULL,
	`cooler_model` varchar(255) DEFAULT NULL,
	`cooler_color` varchar(255) DEFAULT NULL,
	`cooler_material` varchar(255) DEFAULT NULL,
	`purchase_date` DATE DEFAULT NULL,
	`amount` int(11) NOT NULL,
	`image_path` varchar(255) DEFAULT NULL,
	PRIMARY KEY(`cooler_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Cooler` VALUES (1,'Havells','Silver','Plastic','2018-07-20','1500','cooler.jpg');