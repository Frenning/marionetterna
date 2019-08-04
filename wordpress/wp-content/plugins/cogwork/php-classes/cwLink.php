<?php

class cwLink {

	public static function addAdminLink($options) {

		$params = $options['params'];
		$flags  = $options['flags' ];

		if (empty($params['url']) || empty($params['text'])) {
			return '';
		}

		$topUrl = 'https://minaaktiviteter.se/';
		$url = $topUrl.$params['url'];

		$classes = array();
		if (in_array('inline', $flags)) {
			$classes[] = 'cwLinkInline';
		} else {
			$classes[] = 'cwSmallIconLeft';
			$classes[] = 'cwIconService';
		}

		// WP always stores text with html-chars so we most not use htmlspecialchars() here
		$html = '<a href="'.$url.'"';
		if (count($classes) > 0) {
			$html.= 'class="'.implode(' ', $classes).'"';
		}
		$html.= '>';
		$html.= $params['text'];
		$html.= '</a>';

		if (in_array('p', $flags)) {
			$html = "\n<p>".$html."</p>\n";
		}

		return $html;
	}

}
?>