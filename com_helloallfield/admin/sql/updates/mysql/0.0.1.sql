DELIMITER $$

DROP TABLE IF EXISTS `#__helloallfield` $$

CREATE TABLE `#__helloallfield` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`textfield` VARCHAR(25) NOT NULL,
	`published` TINYINT(4) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB	AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 $$

DELIMITER ;