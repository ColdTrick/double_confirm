<?php

return [
	'plugin' => [
		'version' => '2.0',
	],
	'events' => [
		'view_vars' => [
			'output/url' => [
				'\ColdTrick\DoubleConfirm\Views::prepareUrlVars' => [],
			],
		],
	],
];
