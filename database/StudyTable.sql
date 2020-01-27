DROP TABLE IF EXISTS `StudyTable`;

CREATE TABLE `StudyTable`
(
	`table_id` int(100) NOT NULL,
	`table_name` varchar(255) DEFAULT NULL,
	`table_color` varchar(255) DEFAULT NULL,
	`table_material` varchar(255) DEFAULT NULL,
	`purchase_date` DATE DEFAULT NULL,
	`amount` int(11) DEFAULT NULL,
	`image_path` varchar(255) DEFAULT NULL,
	PRIMARY KEY(`table_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `StudyTable` VALUES (2,'Table303','Brown','Wooden','2018-07-20','500','table1.jpg');