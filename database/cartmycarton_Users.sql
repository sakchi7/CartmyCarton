DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `Email_id` varchar(255) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `Mobile_no` varchar(255) DEFAULT NULL,
  `Registration_No` varchar(255) DEFAULT NULL,
  `User_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Registration_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Users` VALUES ('abhimanyu@gmail.com','abhimanyu singh','24466366','2017ME63','1234'),('praj12121998@gmail.com','Prajwal Mandal','9757318791','2018CS34','1234'),('surabhi@gmail.com','Surabhi Akolikar','8403361093','2017MS12','1234'),('vinod@gmail.com','Vinod Kumar','434356446','2018CA16','1234'),('rs@gmail.com','Ritika','123456789','2018CA58','1234');
