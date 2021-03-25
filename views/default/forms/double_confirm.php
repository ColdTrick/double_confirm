<?php

$title = elgg_extract('title', $vars, elgg_echo('question:areyousure'));
$href = elgg_extract('href', $vars);

$query = parse_url($href, PHP_URL_QUERY);
if (!empty($query)) {
	parse_str($query, $params);
	foreach ($params as $name => $value) {
		echo elgg_view_field([
			'#type' => 'hidden',
			'name' => $name,
			'value' => $value,
		]);
	}
}

$text = elgg_extract('text', $vars);

$text .= elgg_view_field([
	'#type' => 'checkbox',
	'#label' => elgg_echo('double_confirm:confirm'),
	'#class' => 'mtm',
	'required' => true,
]);

$text .= elgg_view_field([
	'#type' => 'submit',
	'class' => 'elgg-button-delete',
	'value' => elgg_extract('value', $vars),
]);

echo elgg_view_module('info', $title, $text);
