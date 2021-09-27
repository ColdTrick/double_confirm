<?php

return [
	'plugin' => [
		'version' => '2.0',
	],
	'hooks' => [
		'view_vars' => [
			'output/url' => [
				'\ColdTrick\DoubleConfirm\Views::prepareUrlVars' => [],
			],
		],
	],
];
