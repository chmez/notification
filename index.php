<?php

$settings = json_decode(file_get_contents('settings.json'), true);

$subject = explode(
	PHP_EOL,
	current(json_decode(file_get_contents('php://input'), true)),
)[1];

if (($event = array_search($subject, $settings['subjects'])) !== false) {
	file_get_contents(sprintf(
		'https://maker.ifttt.com/trigger/%s/with/key/%s',
		$event,
		$settings['key'],
	));
}
