<?php

class ComNotificationsDatabaseBehaviorNotifiable extends KDatabaseBehaviorAbstract
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'disable' => '',
		));
		
		parent::_initialize($config);
	}
	
	protected function _afterTableInsert(KCommandContext $context)
	{
		$this->_sendNotifications($context->caller->getIdentifier(), $context->data, 'insert');
	}
	
	protected function _afterTableSelect(KCommandContext $context)
	{
		$this->_sendNotifications($context->caller->getIdentifier(), $context->data, 'select');
	}
	
	protected function _afterTableUpdate(KCommandContext $context)
	{
		$this->_sendNotifications($context->caller->getIdentifier(), $context->data, 'update');
	}
	
	protected function _afterTableDelete(KCommandContext $context)
	{
		$this->_sendNotifications($context->caller->getIdentifier(), $context->data, 'delete');
	}
	
	
	protected function _sendNotifications($table, $data, $event)
	{
		$notifications = KFactory::tmp('admin::com.notifications.model.notifications')
			->set('table', $table)
			->set('event', $event)
			->getList();
			
		foreach ($notifications as $notification) {
			$notification->sendNotification($data);	
		}
	}
	
}