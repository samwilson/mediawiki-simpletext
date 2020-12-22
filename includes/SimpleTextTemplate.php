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
		$this->html( 'headelement' );
		require dirname( __DIR__ ) . '/template.php';
		$this->printTrail();
		echo '</body></html>';
	}

	/**
	 * Get HTML for the title, with wrappers for the namespace and text parts.
	 * @return string
	 */
	public function getTitle() {
		$title = $this->getSkin()->getRelevantTitle();
		$html = Html::element( 'span', [ 'class' => 'text' ], $title->getText() );
		// Prepend the namespace if it exists and is not the File namespace.
		if ( $title->getNsText() && $title->getNamespace() !== NS_FILE ) {
			$html = Html::element( 'span', [ 'class' => 'ns' ], $title->getNsText() . ':' ) . ' ' . $html;
		}
		return $html;
	}

	/**
	 * Get the nav_urls data.
	 * @return array
	 */
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
