<?php
defined('KOOWA') or die;

echo KFactory::get('admin::com.notifications.dispatcher')->dispatch();