CREATE TABLE IF NOT EXISTS `#__notifications_notifications` (
	`notifications_notification_id` SERIAL,
	`title` VARCHAR(250) NOT NULL,
	`message` TEXT NOT NULL,
	`subject` VARCHAR(250) NOT NULL,
	`parse` TINYINT(1) NOT NULL DEFAULT 1,
	
	# send/recieve info
	`fromEmail` VARCHAR(250) NOT NULL,
	`fromName` VARCHAR(250) NOT NULL,
	`to` VARCHAR(250) NOT NULL,
	`dynamicTo` VARCHAR(250) NOT NULL,
	
	# notification type (email, error, message, warning, info)
	`type` TINYINT(1) NOT NULL DEFAULT 0,
	
	# event triggers
	`insert` TINYINT(1) NOT NULL DEFAULT 0,
	`update` TINYINT(1) NOT NULL DEFAULT 0,
	`delete` TINYINT(1) NOT NULL DEFAULT 0,
	`select` TINYINT(1) NOT NULL DEFAULT 0,
	`named` VARCHAR(250) NOT NULL,
	
	# connected to
	`table` VARCHAR(64) NOT NULL
) ENGINE=MyISAM;