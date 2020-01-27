DROP TABLE IF EXISTS `Cycle`;

CREATE TABLE `Cycle`
(
	`cycle_id` int(100) NOT NULL,
	`cycle_model` varchar(255) DEFAULT NULL,
	`cycle_color` varchar(255) DEFAULT NULL,
	`purchase_date` DATE DEFAULT NULL,
	`amount` int(11) NOT NULL,
	`image_path` varchar(255) DEFAULT NULL,
	PRIMARY KEY(`cycle_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Cycle` VALUES (4,'Hero Blade 26T','Red','2018-07-20','1200','cycle.jpg');