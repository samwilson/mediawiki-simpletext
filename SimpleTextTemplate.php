<?php

/**
 * BaseTemplate class for the SimpleText skin
 *
 * @ingroup Skins
 */
class SimpleTextTemplate extends BaseTemplate {

	/**
	 * Outputs the entire contents of the page
	 */
	public function execute() {
		$this->html('headelement');
		require __DIR__ . '/template.php';
	}

	protected function getNavUrls() {
		$out = [];
		foreach ( $this->get( 'nav_urls' ) as $name => $navUrl ) {
			if ( isset( $navUrl['href'] ) && !isset( $navUrl['id'] ) ) {
				$navUrl['id'] = 'nu-' . $name;
			}
			$out[ $name ] = $navUrl;
		}
		return $out;
	}
}
