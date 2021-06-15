<?php

return [
	'plugin' => [
		'version' => '1.0',
	],
	'hooks' => [
		'view_vars' => [
			'output/url' => [
				'\ColdTrick\DoubleConfirm\Views::prepareUrlVars' => [],
			],
		],
	],
];
