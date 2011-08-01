<?php
defined('KOOWA') or die;

error_reporting(E_ALL);
ini_set('display_errors', '1'); // FIXME Remove

echo KFactory::get('admin::com.test.dispatcher')->dispatch();