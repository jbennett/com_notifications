<?php

class ComTestControllerToolbarTests extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this
			->addSeparator()
			->addModal(array(
				'href'	=> JRoute::_('index.php?option=com_notifications&view=notifications&layout=list&table=&tmpl=component'),
				'icon'	=> 'icon-32-publish'
			));
			
		return parent::getCommands();
	}
}