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

}
