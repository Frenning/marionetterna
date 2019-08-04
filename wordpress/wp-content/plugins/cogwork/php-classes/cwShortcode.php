<?php

require_once(CW_PHP_CLASSES_DIR.'cwConnector.php');

class cwShortcode extends cwConnector {


	public function __construct($attributes, $content, $tag) {

		parent::__construct();

		// For backward compability with older installations (prior to cogwork 1.0)
		if (!empty($tag) && mb_strtolower(trim((string) $tag)) == 'cwshop') {
			$attributes['type'] = 'shop';
		}

		$this->parseShortCodeAttributes($attributes);
	}

	private function parseShortCodeAttributes($attributes) {

		if (!isset($attributes) || !is_array($attributes) || count($attributes) == 0) {
			return;
		}

		$this->params['new'] = null; // Does not require a value

		foreach ($attributes as $attributeName => $attributeValue) {

			$strKey = trim((string) $attributeName);
			$strVal = trim((string) $attributeValue);

			$strKeyLow = mb_strtolower($strKey);
			$strValLow = mb_strtolower($strVal);

			if ($strKeyLow == 'org') {
				$this->orgCode = $strValLow;
				continue;
			}

			if ($strKeyLow == 'type') {
				$this->contentType = $strValLow;
				continue;
			}

			if ($strKeyLow == 'protocol') {
				if (in_array($strValLow, array('http', 'https'))) {
					$this->protocol= $strValLow;
				}
				continue;
			}

			if ($strKeyLow == 'host') {
				$this->host = $strValLow;
				continue;
			}

			if (is_numeric($strKeyLow) && empty($this->contentType)) {
				$this->contentType = $strValLow;
				continue;
			}

			$this->params[$strKey] = $strVal;
		}

		// Code to forward request parameters from the local php server to the shop api
		// If you do not want to include a search form you can skip the next lines below

		// TODO: Do we use and need 'localUrl' on the server side?
		$localUrl = (!empty($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$this->params['localUrl'] = $localUrl;

		// TODO: $_REQUEST contains cookies. Do we need cookie info here? Possibly for Google Adwords etc. If not, use only $_GET and $_POST
		// $localRequest = array();
		// if (isset($_GET) && count($_GET) > 0) {
		// 	$localRequest = array_merge($localRequest, $_GET);
		// }
		// if (isset($_POST) && count($_POST) > 0) {
		// 	$localRequest = array_merge($localRequest, $_POST);
		// }
		// $this->params['localJsonEncodedRequest'] = json_encode($localRequest);

		$this->params['localJsonEncodedRequest'] = json_encode($_REQUEST);
	}

}
?>