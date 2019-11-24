<?php

/**
 * SkinTemplate class for the SimpleText skin
 *
 * @ingroup Skins
 */
class SkinSimpleText extends SkinTemplate {

	public $skinname = 'simpletext';

	public $template = SimpleTextTemplate::class;

	/**
	 * Initialise the page.
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1.0' );
		$out->addModuleStyles( [ 'skins.simpletext' ] );
	}
}
