<?php
	define('BASE_URL','http://www.example.com/');

	$settings['access_token'] = 'mercado-pago-access-token';
	$settings['success'] = BASE_URL.'success url';
	$settings['failure'] = BASE_URL.'failure url';
	$settings['pending'] = BASE_URL.'pending url';

	return $settings;