DROP TABLE IF EXISTS `Kettle`;

CREATE TABLE `Kettle`
(
	`kettle_id` int(100) NOT NULL,
	`kettle_model` varchar(255) DEFAULT NULL,
	`kettle_color` varchar(255) DEFAULT NULL,
	`kettle_capacity` varchar(255) DEFAULT NULL,
	`purchase_date` DATE DEFAULT NULL,
	`amount` int(11) NOT NULL,
	`image_path` varchar(255) DEFAULT NULL,
	PRIMARY KEY(`kettle_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Kettle` VALUES (5,'Phillips Electric Kettle','Silver','2 litre','2018-07-20','600','kettle.jpg');