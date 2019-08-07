<?php

/**
 * SkinTemplate class for the SimpleText skin
 *
 * @ingroup Skins
 */
class SkinSimpleText extends SkinTemplate {

	public $skinname = 'simpletext',
		$stylename = 'SimpleText',
		$template = SimpleTextTemplate::class,
		$useHeadElement = true;

	/**
	 * @param $thumbnail
	 * @param $attribs
	 * @param $linkAttribs
	 */
	public static function onThumbnailBeforeProduceHTML( $thumbnail, &$attribs, &$linkAttribs ) {
		//dd($thumbnail, $attribs, $linkAttribs);
	}

	/**
	 * Initialise the page.
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1.0' );
		$out->addModules( [ 'skins.simpletext.js' ] );
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out
	 */
	public function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( [ 'skins.simpletext' ] );
	}
}
