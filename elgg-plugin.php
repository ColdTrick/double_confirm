<?php

return [
	'plugin' => [
		'version' => '3.0',
	],
	'events' => [
		'view_vars' => [
			'output/url' => [
				'\ColdTrick\DoubleConfirm\Views::prepareUrlVars' => [],
			],
		],
	],
];
