<?php

class ComNotificationsTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	
	public function notificationTypes($config)
	{
		$config = new KConfig($config);
		$config->append(array(
			'name' 		=> 'type',
		))->append(array(
			'selected'	=> $config->{$config->name},
		));
		
		$options = array();
		
		$options[] = $this->option(array('text'=>'- '. JText::_('Select') .' -', 'value'=>''));
		$options[] = $this->option(array('text'=>JText::_('Email'), 'value'=>'1'));
		$options[] = $this->option(array('text'=>JText::_('Error'), 'value'=>'2'));
		$options[] = $this->option(array('text'=>JText::_('Info'), 'value'=>'3'));
		$options[] = $this->option(array('text'=>JText::_('Warning'), 'value'=>'4'));
		$options[] = $this->option(array('text'=>JText::_('Message'), 'value'=>'5'));
		
		$config->options = $options;
		return $this->optionlist($config);
	}
	
}