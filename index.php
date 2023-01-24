<?php

if (!empty($content = file_get_contents('php://input')))
{
	$pushed_subject = explode(PHP_EOL, current(json_decode($content, true)))[1];
	$settings = json_decode(file_get_contents('settings.json'), true);

	foreach ($settings['subjects'] as $event => $subjects)
		foreach ($subjects as $current_subject)
			if ($current_subject === $pushed_subject)
				file_get_contents(sprintf(
					'https://maker.ifttt.com/trigger/%s/with/key/%s',
					$event,
					$settings['key'],
				));
}
