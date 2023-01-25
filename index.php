<?php

$headers = getallheaders();

if (
	isset($headers['Content-Type'], $headers['token']) &&
	$headers['Content-Type'] === 'application/json' &&
	!empty($headers['Content-Length'])
)
{
	$settings = json_decode(file_get_contents('settings.json'), true);

	if ($headers['token'] === $settings['token'])
	{
		$pushed_subject = explode(
			PHP_EOL,
			current(json_decode(file_get_contents('php://input'), true)),
		)[1];

		foreach ($settings['subjects'] as $event => $subjects)
			foreach ($subjects as $current_subject)
				if ($current_subject === $pushed_subject)
					file_get_contents(sprintf(
						'https://maker.ifttt.com/trigger/%s/with/key/%s',
						$event,
						$settings['key'],
					));
	}
}
