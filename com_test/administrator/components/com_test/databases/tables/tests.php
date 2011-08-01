<?php

class ComTestDatabaseTableTests extends KDatabaseTableDefault
{
	
	protected function _initialize(KConfig $config)
	{
		$notifiable = 'admin::com.notifications.database.behavior.notifiable';
		$config->behaviors = array($notifiable);
		
		parent::_initialize($config);
	}
}