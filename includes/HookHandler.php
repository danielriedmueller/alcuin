<?php

namespace MediaWiki\Extension\Alcuin;

use DatabaseUpdater;
use OutputPage;
use Skin;

class HookHandler implements \MediaWiki\Hook\BeforePageDisplayHook {

    /**
     * @see https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay
     * @param \OutputPage $out
     * @param \Skin $skin
     */
    public function onBeforePageDisplay( $out, $skin ): void {
        $out->addModules( 'ext.alcuin' );
    }
}