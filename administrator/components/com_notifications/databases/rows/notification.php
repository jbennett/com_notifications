<?php
class ComNotificationsDatabaseRowNotification extends KDatabaseRowDefault
{
	
	public function sendNotification($data)
	{
		switch ($this->type) {
			case 1: // email
				$this->_sendEmail($data);
				break;
			case 2: // error
			case 3: // info
			case 4: // warning
			case 5: // message
				break;
			default:
				echo "Unsupported notification type: ". $this->type;
				die;
		}
	}
	
	protected function _sendEmail($data)
	{
		$to = array();
		
		if ($this->to)
			$to = array_merge($to, explode(',', $this->to));
			
		if ($this->dynamicTo) {
			$variables = explode(',', $this->dynamicTo);
			foreach ($variables as $variable) {
				$variable = trim($variable);
				if (isset($data->{$variable})) {
					$to[] = $data->{$variable};
				}
			}
		}
		
		$params = JFactory::getConfig();
		$fromName = ($this->fromName)? $this->fromName : $params->getValue('config.fromname');
		$fromEmail = ($this->fromEmail)? $this->fromEmail : $params->getValue('config.mailfrom');
		
		$mailer = KFactory::get('lib.joomla.mailer');
		$mailer->setSender(array($fromEmail, $fromName));
		$mailer->addRecipient($to);
		$mailer->setSubject($this->subject);
		$mailer->setBody(($this->parse)? $this->_parseMessage($data): $this->message);
		$mailer->isHtml(true);	// make it optional
		
		if ($mailer->send()) {
			// success
		} else {
			// failed
		}
	}
	
	protected function _parseMessage($data)
	{
		$keys = array_keys($data->toArray());
		array_walk($keys, function (&$value) {
			$value = '{'. $value .'}';
		});
		$values = array_values($data->toArray());
		
		return str_replace($keys, $values, $this->message);
	}
	
	protected function _postMessage()
	{
		echo 'print msg';
	}
}