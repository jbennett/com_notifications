CREATE TABLE IF NOT EXISTS `j#__test_tests` (
	`test_test_id` SERIAL,
	`title` VARCHAR(250) NOT NULL,
	`description` TEXT COMMENT "Filter('html)",
	
	`created_on` DATETIME NOT NULL,
	`created_by` INT(11) NOT NULL
) ENGINE=MyISAM;