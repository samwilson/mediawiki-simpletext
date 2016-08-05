<?php

/**
 * SkinTemplate class for the SimpleText skin
 *
 * @ingroup Skins
 */
class SkinSimpleText extends SkinTemplate {

    public $skinname = 'simpletext',
            $stylename = 'SimpleText',
            $template = 'SimpleTextTemplate',
            $useHeadElement = true;

    /**
     * Add CSS via ResourceLoader
     *
     * @param $out OutputPage
     */
    public function initPage(OutputPage $out) {

        $out->addMeta('viewport', 'width=device-width, initial-scale=1.0');

        $out->addModuleStyles(array(
            //'mediawiki.skinning.interface',
            //'mediawiki.skinning.content.externallinks',
            'skins.simpletext',
        ));
        $out->addModules(array(
            'skins.simpletext.js'
        ));
    }

    /**
     * @param $out OutputPage
     */
    //function setupSkinUserCss(OutputPage $out) {
    //    parent::setupSkinUserCss($out);
    //}

}
