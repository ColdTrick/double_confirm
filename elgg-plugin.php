<?php

return [
	'plugin' => [
		'version' => '3.0.3',
	],
	'events' => [
		'view_vars' => [
			'output/url' => [
				'\ColdTrick\DoubleConfirm\Views::prepareUrlVars' => [],
			],
		],
	],
];
