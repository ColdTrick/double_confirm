<?php

namespace ColdTrick\DoubleConfirm;

/**
 * Chaneg view output / params
 */
class Views {
	
	/**
	 * Prepares the popup for double confirm dialogs on urls
	 *
	 * @param \Elgg\Event $event 'view_vars', 'output/url'
	 *
	 * @return array|null
	 */
	public static function prepareUrlVars(\Elgg\Event $event): ?array {
		
		$vars = $event->getValue();
		if (empty(elgg_extract('double_confirm', $vars))) {
			return null;
		}
		
		unset($vars['double_confirm']);
		if (!empty(elgg_extract('data-colorbox-opts', $vars))) {
			return $vars;
		}
		
		$href = elgg_extract('href', $vars);
		if (empty($href)) {
			return $vars;
		}
		
		$text = elgg_extract('data-confirm', $vars, elgg_extract('confirm', $vars, elgg_extract('title', $vars, elgg_echo('question:areyousure'))));
		
		unset($vars['data-confirm']);
		unset($vars['confirm']);
		
		$action = explode('?', $href);
		$action = $action[0];
		
		$vars['data-colorbox-opts'] = json_encode([
			'html' => elgg_view_form('double_confirm', [
				'action' => $action,
				'disable_security' => true,
			], [
				'text' => $text,
				'href' => $href,
				'title' => elgg_extract('title', $vars),
				'value' => elgg_extract('text', $vars),
			]),
		]);
		
		$vars['class'] = elgg_extract_class($vars, ['elgg-lightbox']);
		
		return $vars;
	}
}
