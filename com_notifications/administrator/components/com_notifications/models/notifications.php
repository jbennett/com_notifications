<?php

class ComNotificationsModelNotifications extends ComDefaultModelDefault
{
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		$this->_state
			->insert('table', 'string')
			->insert('event', 'cmd')
			->insert('named', 'string')
			->insert('enabled', 'int');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;
		
		if ($state->table) {
			$query->where('table', '=', ''. $state->table); // force identifier to string
		}
		
		if ($state->event) {
			$query->where($state->event, '=', '1');
		}
		
		parent::_buildQueryWhere($query);
	}
}